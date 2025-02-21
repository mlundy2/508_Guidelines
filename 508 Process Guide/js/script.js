let fetchData = async (url, func) => {
    let res = await fetch(url);
    let data = await res.json();

    return func(data);
}

function delay(func) {
    return new Promise(resolve => setTimeout(resolve, 1000))
    .then(func);
}

let getURL = (file) => {
    return `./data/${file}.json`;
}

let createNavMenu = data => {
    let navMenu = getID("guidebook-nav-link-list");
    let output = "";

    // Sort categories alphabetically by 'category' key
    for (let i = 0; i < data.general.length; i++) {
        // Sort each category array using a simple for loop
        for (let j = 0; j < data.general[i].categories.length - 1; j++) {
            for (let k = 0; k < data.general[i].categories.length - 1 - j; k++) {
                if (data.general[i].categories[k].category > data.general[i].categories[k + 1].category) {
                    // Swap if out of order
                    const temp = data.general[i].categories[k];
                    data.general[i].categories[k] = data.general[i].categories[k + 1];
                    data.general[i].categories[k + 1] = temp;
                }
            }
        }
    }

    // Create the sub section topic headers 
    for (let i = 0; i < data.general.length; i++) {
        output += `
            <h3 class="guidebook-nav-subtitle">${data.general[i].title}</h3>

            <ul class="guidebook-nav-link-list">`;

            // Create the top level navigation links
            for(let j = 0; j < data.general[i].categories.length; j++) {
                output += `
                    <li><a href="#">${data.general[i].categories[j].category}</a></li>
                `;

                // Creates the sublink if the category exists
                if(data.general[i].categories[j].subCategory) {
                    output += `
                        <ul class="guidebook-nav-sub-link-list">
                    `;

                    for(let k = 0; k < data.general[i].categories[j].subCategory.length; k++) {
                        output += `
                             <li><a href="#">${data.general[i].categories[j].subCategory[k].name}</a></li>
                        `;
                    }

                    output += `</ul>`;
                }
            }

            output += `
            </ul>
        `;
    }

    navMenu.innerHTML = output;
}

let createCards = data => {
    let contentDisplay = getID("guidebook-content");
    let output = "";

    // Sort categories alphabetically by 'category' key
    for (let i = 0; i < data.general.length; i++) {
        // Sort each category array using a simple for loop
        for (let j = 0; j < data.general[i].categories.length - 1; j++) {
            for (let k = 0; k < data.general[i].categories.length - 1 - j; k++) {
                if (data.general[i].categories[k].category > data.general[i].categories[k + 1].category) {
                    // Swap if out of order
                    const temp = data.general[i].categories[k];
                    data.general[i].categories[k] = data.general[i].categories[k + 1];
                    data.general[i].categories[k + 1] = temp;
                }
            }
        }
    }

    // Loop through the sorted data and create the HTML output
    for (let i = 0; i < data.general.length; i++) {
        for (let j = 0; j < data.general[i].categories.length; j++) {
            output += `
                <div class="guidebook-content-item" data-page-name="${(data.general[i].categories[j].category).toLowerCase()}" style="background-image: url('${data.general[i].categories[j].imgSRC}'" role="img" aria-label="${data.general[i].categories[j].altText}">
                    <a href="/page.php?t=${(data.general[i].categories[j].category).toLowerCase()}" onclick="sessionStorage.setItem('imgSRC', '${data.general[i].categories[j].imgSRC}')"><p onclick="sessionStorage.setItem('category', '${data.general[i].categories[j].category}')">${data.general[i].categories[j].category}</p></a>
                </div>
            `;
        }
    }

    contentDisplay.innerHTML = output;
}


fetchData(getURL("topics"), createNavMenu);
fetchData(getURL("topics"), createCards);


