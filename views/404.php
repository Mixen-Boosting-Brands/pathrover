<?php
$blackbox = new Blackbox;
// require_once(CLASSES.'Galerias.php');
$blackbox->set('titulo', "Home");
$blackbox->setMeta('title', PROYECTO." | Home");
$blackbox->setMeta('description', DESCRIPTION);
$blackbox->setMeta('keywords', KEYWORDS);
$blackbox->setMeta('canonical','<link rel="canonical" href="'.URL.'">');
$blackbox->setMeta('image', URLIMAGES . 'social_share.jpg');
$blackbox->set('css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
$blackbox->set('bottomjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
$blackbox->set('css','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
$blackbox->set('bottomjs','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
$blackbox->set("page", "home");
// Head
require_once(VIEWS.'head.php' );
?>
<section class="hero">
    <h1>Error 404</h1>
</section>
<?php
require_once(VIEWS.'footer.php' );
?>
