<div id="contact" class="fullwrap section-spacing">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="section-wrap bg-yellow footer" data-aos="fade-up">
                <div class="wrap">
                    <div class="footer-wrap grid-half">
                        <div class="footer-txt">
                            <div class="inner-wrap" data-aos="fade" data-aos-delay="250">
                                <div class="footer-logo">
                                    <?=printSVG("logo-footer");?>
                                </div>
                                <div class="footer-links">
                                    <ul class="flinks">
                                        <li><a href="<?=URL;?>#about">About</a></li>
                                        <li><a href="<?=URL;?>#features">Features</a></li>
                                        <li><a href="<?=URL;?>#cases">Use cases</a></li>
                                        <li><a href="<?=URL;?>#pricing">Pricing</a></li>
                                        <li><a href="<?=URL;?>#download">Download</a></li>
                                    </ul>
                                </div>
                                <div class="footer-social">
                                    <ul class="social">
                                        <li><a href="https://www.instagram.com/path_roverapp" target="_blank"><?=printSVG("icon-instagram");?></a></li>
                                        <li><a href="https://www.instagram.com/path_roverapp" target="_blank"><?=printSVG("icon-x");?></a></li>
                                        <li><a href="https://www.instagram.com/path_roverapp" target="_blank"><?=printSVG("icon-youtube");?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-form">
                            <div class="inner-wrap" data-aos="fade" data-aos-delay="250">
                                <h2>Navigate the <strong>unknown</strong></h2>
                                <form class="" action="#" method="post">
                                    <div class="form-wrap">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="form-bottom">
                                        <div class="form-btn">
                                            <button type="submit" class="btn-primary">Submit</button>
                                        </div>
                                        <div class="form-apps">
                                            <?php
                                            include(VIEWS.'apps.php');
                                            ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=URLJS;?>main<?=$assetsmin;?>.js<?=$assetsprefix;?>" type="text/javascript"></script>
<?php
if ($thisjs = $blackbox->get("js")) {
    foreach ($thisjs as $js){
        echo '<script type="text/javascript" src="'.URL.$js.$assetsprefix.'"></script>';
    }
}
if (!empty($blackbox->get("bottomjs"))){
    foreach ($blackbox->get("bottomjs") as $js){
        echo '<script type="text/javascript" src="'.$js.'"></script>';
    }
}
?>
<!-- <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script> -->
</body>
</html>
