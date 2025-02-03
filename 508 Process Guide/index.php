<?php include "inc/header.php" ?>

<!-- Sets the page name in the tab -->
<p id="page-title">Home</p>
<div class="banner" id="banner"></div>

<header class="header">
    <div class="header-nav">
        <div class="header-nav-logo">Logo</div>

        <nav class="header-nav-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="guide.php">About</a></li>
                <li><a href="#">A third</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="banner-content">
    <h1 class="banner-content-title">Section 508 Compliance Guide</h1>
    <h2 class="banner-content-subtitle">Your all inclusive guide for learning 508 tips, tricks, and standard rules</h2>

    <form action="" class="banner-content-search">
        <label for="topic-search" class="banner-content-search-lbl">Search Google:</label>
        <input type="search" id="topic-search" class="banner-content-search-searchbox"
            placeholder="Please enter your search topic..." name="topic-search">

        <span class="material-symbols-outlined banner-content-search-icon">
            search
        </span>
    </form>

    <a href="guide.php" class="banner-content-guide-btn">Visit the Guide</a>
</section>

<span class="material-symbols-outlined banner-down-caret" title="Click to scroll down to first section">
    keyboard_arrow_down
</span>

<section class="intro-508">
    <div class="container">
        <h3 class="section-title">What is Section 508?</h3>
        <p class="intro-508-desc">According to <a href="https://www.section508.gov/manage/laws-and-policies/">section508.gov</a>, "In 1998, Congress amended the Rehabilitation Act of 1973 to 
        require federal agencies to make their electronic and information technology (EIT) accessible to people with disabilities. The law <a href="https://www.section508.gov/manage/laws-
        and-policies/section-508-law/">29 U.S.C § 794d</a> applies to all federal agencies when they develop, procure, maintain, or use electronic and information technology. <strong>Under 
        Section 508, agencies must give disabled employees and members of the public access to information comparable to the access available to others.</strong>"</p>

        <h4 class="section-subtitle">Well thats great and all, but how does that effect me?</h4>



    </div> <!-- End of container div-->
</section>

<?php include "inc/footer.php" ?>