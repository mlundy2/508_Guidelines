<?php include "inc/header.php" ?>

<p id="page-title"></p>

<div id="sub-page-banner" class="sub-topic-banner" data-page-name=""></div>

<div class="breadcrumbs">
    <a href="/guide.php">Guidebook</a><span style="margin: 0 .75em;">>></span>  
    <a href="#" class="breadcrumbs-current" style="text-transform:capitalize;"><?php echo $_GET['t'] ?></a> 
</div>


<div class="sub-page-intro">
    <h1 class="sub-page-intro-header" id="section-name"></h1>
    <p class="sub-page-intro-text" id="sub-page-intro-text"></p>
</div>

<script>
    let fetchData1 = async (url, func) => {
        let res = await fetch(url);
        let data = await res.json();

        return func(data);
    }

    let getURL1 = (file) => {
        return `data/${file}.json`;
    }
    
    const imgSRC = sessionStorage.getItem('imgSRC');
    const pageName = sessionStorage.getItem('category');

    let subPageBanner = document.getElementById("sub-page-banner");
    subPageBanner.style.backgroundImage = `url(${imgSRC})`;

    let subPageName = document.getElementById("section-name");
    subPageName.innerHTML = pageName;

    let pageTitle = document.getElementById("page-title");
    pageTitle.innerHTML = pageName;

    function setText(data) {
        let pageIntroText = document.getElementById("sub-page-intro-text");
        let output = "";

        // Loop through the sorted data and create the HTML output
        for (let i = 0; i < data.general.length; i++) {
            for (let j = 0; j < data.general[i].categories.length; j++) {
                if(data.general[i].categories[j].category == `${pageName}`) {
                    pageIntroText.innerHTML = data.general[i].categories[j].intro;
                }
            }
        }
    }

    fetchData1(getURL1("topics"), setText);
</script>

<?php include "inc/footer.php" ?>