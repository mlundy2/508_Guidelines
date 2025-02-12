<?php include "inc/header.php" ?>

<p id="page-title"></p>

<div id="sub-page-banner" data-page-name=""></div>

<div class="guidebook-section-intro">
    <h1 class="guidebook-section-intro-header" id="section-name"></h1>
    <p class="guidebook-section-intro-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates labore nisi voluptate repudiandae molestiae ad!</p>
</div>

<script>
    const imgSRC = sessionStorage.getItem('imgSRC');
    const pageName = sessionStorage.getItem('category');

    let subPageBanner = document.getElementById("sub-page-banner");
    subPageBanner.style.backgroundImage = `url(${imgSRC})`;

    let subPageName = document.getElementById("section-name");
    subPageName.innerHTML = pageName;
</script>

<?php include "inc/footer.php" ?>