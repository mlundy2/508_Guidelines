<?php include "inc/header.php" ?>

<p id="page-title"></p>

<div id="sub-page-banner" class="sub-topic-banner" data-page-name=""></div>

<div class="breadcrumbs">
    <a href="/guide.php">Guidebook</a><span style="margin: 0 .75em;">>></span>  
    <a href="#" class="breadcrumbs-current" style="text-transform:capitalize;"><?php echo $_GET['t'] ?></a> 
</div>



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

    let pageTitle = document.getElementById("page-title");
    pageTitle.innerHTML = pageName;
</script>

<?php include "inc/footer.php" ?>