<header id="header" class="header js-header" data-active="<?=$blackbox->get("page");?>">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="header-wrap" data-aos="fade-down" data-aos-delay="800" data-aos-duration="1000">
                <div class="header-logo">
                    <a class="logo" href="<?=URL;?>"><img class="logo-img" src="<?=URLIMAGES;?>logo.svg" alt="<?=PROYECTO;?>"></a>
                </div>
                <div class="header-nav js-menu">
                    <ul class="main-menu">
                        <li><a href="<?=URL;?>#about" class="menu-link m-about js-close-menu">About</a></li>
                        <li><a href="<?=URL;?>#features" class="menu-link m-features js-close-menu">Features</a></li>
                        <li><a href="<?=URL;?>#cases" class="menu-link m-cases js-close-menu">Use Cases</a></li>
                        <li><a href="<?=URL;?>#pricing" class="menu-link m-pricing js-close-menu">Pricing</a></li>
                        <li><a href="<?=URL;?>#download" class="menu-link m-download js-close-menu">Download</a></li>
                        <li><a href="https://app.path-rover.com/" class="menu-link m-login js-close-menu">Log in</a></li>
                        <li class="btn-hide"><a href="<?=URL;?>#contact" class="menu-link m-contact js-close-menu">Contact</a></li>
                    </ul>
                </div>
                <div class="header-btn">
                    <a href="<?=URL;?>#contact" class="btn-primary btn-header">Contact</a>
                    <button type="button" class="btn-menu js-open-menu">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
