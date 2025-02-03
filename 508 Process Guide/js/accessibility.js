let getID = (id) => {
    return document.getElementById(id);
}

function createAccessibilityInfo(pageName) {
    
    document.title = `508 Process Guide | ${pageName}`;

    // Make the banner image decorative
    if (getID("banner")) {
        let bannerBGImage = getID("banner");
        bannerBGImage.setAttribute("role", "img");
        bannerBGImage.setAttribute("aria-hidden", "true");  
    } else {
        let subpageBannerBGImage = getID("sub-page-banner");
        subpageBannerBGImage.setAttribute("role", "img");
        subpageBannerBGImage.setAttribute("aria-hidden", "true");  
    }
}

function changeBanner() {
    let bannerImgType = getID("sub-page-banner").getAttribute("data-page-name");

    switch (bannerImgType) {
        case "guide": 
            getID("sub-page-banner").style.background = "url('/imgs/guide-banner.jpg')";
            getID("sub-page-banner").classList.add("sub-page-banner");

            break;
    }
}

createAccessibilityInfo(getID("page-title").innerText);
changeBanner();
