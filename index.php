<?php include 'elements/header.php'; ?>
<div class="site-wrapper">
    <div class="bg-video-contain" data-viewport-height="100">
        <video id="bg-video" class="hidden--m hidden--s" preload="auto" autoplay="true" loop="loop" muted="muted" poster="videos/cat-eye-karski-still.jpg">
            <source src="videos/cat-eye-karski.webm" type="video/webm">
            <source src="videos/cat-eye-karski.ogg" type="video/ogg">
            <source src="videos/cat-eye-karski.mp4" type="video/mp4">
        </video>
    </div>
    <a data-overlay="main-menu" href="#" class="main-menu-trigger hidden--l hidden--xl" >
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <i class="icon"></i>
    </a>
    <div class="site-main fullpage">
        <section data-id="home" class="fullpage-section block block--hero" data-viewport-height="100">
            
            <div id="gg_promo_avatar" class="avatar"></div>
            
            <div class="block__content vertical-align-helper text-align--s-center">
                <h1 class="vertical-align--s-middle text-color--white">Front End Developer</h1>
                <div class="signature">
                    <?php include 'elements/signature.php'; ?>
                </div>
            </div>
            <a href="#about">
                <svg class="arrows">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>
            </a>
            <nav class="main-nav text-color--white hidden--s hidden--m">
                <?php include 'elements/nav.php'; ?>
            </nav>
            <div class="preloader loading">
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
            </div>
            
        </section><!-- fullpage-section -->

        
<?php include 'about.php'; ?>
<?php include 'skills.php'; ?>
<?php include 'portfolio.php'; ?>
<?php include 'contact.php'; ?>
        
<?php require('elements/footer.php'); ?>