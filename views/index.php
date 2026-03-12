<?php
$blackbox = new Blackbox;
// require_once(CLASSES.'Galerias.php');
$blackbox->set('titulo', "");
$blackbox->setMeta('title', PROYECTO."");
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
<div class="fullwrap fhero section-spacing" data-aos="fade-up">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="hero">
                <div class="hero-video">
                    <video class="bgvideo jquery-background-video" loop autoplay muted playsinline disablePictureInPicture="true" poster="<?=URL;?>videos/hero.jpg" >
                        <source src="<?=URL;?>videos/hero.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="hero-inner wrap" data-aos="fade" data-aos-delay="250">
                    <div class="hero-txt">
                        <h1>Navigate the Uncharted. Connect Your World.</h1>
                        <h2>Your Ultimate Platform for Extreme Environments.</h2>
                        <?php
                        include(VIEWS.'apps.php');
                        ?>
                        <p>Designed to empower adventurers, field professionals, and enterprise operations with unparalleled control and connectivity in difficult terrains.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about" class="fullwrap section-spacing">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="section-wrap bg-blue sw1" data-aos="fade-up">
                <div class="wrap">
                    <div class="top-wrap grid-half grid-center">
                        <div class="top-txt">
                            <div class="inner-wrap" data-aos="fade" data-aos-delay="250">
                                <div class="top-heading">
                                    <?=printSVG("icon-pathrover");?>
                                    <h2>Built for those <strong>who go further</strong></h2>
                                </div>
                                <p><strong>PathRover isn't just a map; it's a comprehensive toolkit</strong> engineered for those who <strong>work and explore beyond the paved path.</strong> Whether you're <strong>navigating remote oil fields, conquering challenging off-road trails</strong>, or <strong>managing complex logistics</strong>, PathRover brings <strong>high-precision GPS navigation and real-time route tracking<?php /*, and AIpowered trip planning*/?></strong> into one powerful system.</p>
                                <p class="nmb"><strong>Navigate where others can't. Connect the field to the office. Plan, book, and go further.</strong></p>
                            </div>
                        </div>
                        <div class="top-img" data-aos="fade" data-aos-delay="250">
                            <img class="imgfluid imground" src="<?=URLIMAGES;?>top3.jpg" alt="<?=PROYECTO;?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="fullwrap section-spacing">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="section-wrap bg-features sw2" data-aos="fade-up">
                <div class="wrap">
                    <div class="features-heading" data-aos="fade" data-aos-delay="250">
                        <h2><strong>Everything</strong> you need in the field</h2>
                        <p>Core Features</p>
                    </div>
                </div>
            </div>
            <div class="features-wrap" _data-aos="fade-up">
                <div class="wrap wrap-xl">
                    <div class="features">
                        <div class="feature" data-aos="fade-up">
                            <div class="inner-wrap">
                                <?=printSVG("icon-search");?>
                                <h3>WellPath <br>Navigation</h3>
                                <div class="ffloating">
                                    (Free & Premium)
                                </div>
                                <p><strong>Locate, navigate, and manage oil well information with precision.</strong></p>
                                <p class="nmb"><strong>• Free:</strong> Enjoy turn-by-turn navigation  to your next adventure.<br>
                                <strong>• Premium:</strong> Access detailed, filtered well lists. Download offline maps for reliable navigation in remote areas. Create and save custom routes. Benefit from updated satellite imagery. Search for oil wells by name, API, or operator. View basic operator info, API number, and GPS coordinates. </p>
                            </div>
                        </div>
                        <div class="feature" data-aos="fade-up">
                            <div class="inner-wrap">
                                <?=printSVG("icon-boot");?>
                                <h3>Hiking & Off-Road Explorer – Beta</h3>
                                <p><strong>Discover, record, and share trails for every skill level.</strong></p>
                                <p class="nmb">• Filter routes by difficulty (beginner, intermediate, expert) and terrain type (rock, sand, water, forest, etc.).<br>
                                • Create and record your own trails, save custom off-road paths, and share them with the PathRover community.<br>
                                • Access detailed maps and offline navigation—while our trail database continues to grow.<br><br>
                                <em>TerraNav is currently in <strong>beta</strong>. All core tools are ready to use today, and we’re actively adding and verifying new trails to expand coverage.</em></p>
                            </div>
                        </div>
                        <?php /*
                        <div class="feature" data-aos="fade-up">
                            <div class="inner-wrap">
                                <?=printSVG("icon-chat");?>
                                <h3>PathLink - Internal <br>communication Hub</h3>
                                <p><strong>Stay connected, even in the most remote locations.</strong></p>
                                <p class="nmb">• Secure in-app messaging, voice and video calls, file and photo sharing, and group/direct chats. Functions in remote areas with offline synchronization, ensuring your critical communications always get through.</p>
                            </div>
                        </div>

                        <div class="feature" data-aos="fade-up">
                            <div class="inner-wrap">
                                <?=printSVG("icon-ai");?>
                                <h3>AI <br>Assistance</h3>
                                <p><strong>Your intelligent co-pilot for the wild and the workplace.</strong></p>
                                <p class="nmb">• An interactive assistant powered by ChatGPT technology. Get route assistance, guidance on permits and legality, equipment checklist suggestions, transcription and analysis of field notes, and general driver/customer support.</p>
                            </div>
                        </div>
                        */ ?>
                        <div class="feature" data-aos="fade-up">
                            <div class="inner-wrap">
                                <?=printSVG("icon-gps");?>
                                <h3>Advanced GPS <br>& Office Maps</h3>
                                <p><strong>Uninterrupted navigation, no matter where you are.</strong></p>
                                <p class="nmb">• GPS tracking in low-signal areas (e.g., Permian Basin, mountains). User route data daily updates and refines our maps. Overlays include terrain, satellite, and topographical views. Save and sync offline maps for complete reliability.</p>
                            </div>
                        </div>
                        <div class="feature" data-aos="fade-up">
                            <div class="inner-wrap">
                                <?=printSVG("icon-tools");?>
                                <h3>Customized <br>Professional Tools</h3>
                                <p><strong>Equip your team with powerful, adaptable tools.</strong></p>
                                <p class="nmb">• Shareable map links for project teams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="cases" class="fullwrap section-spacing section-spacing-top">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="section-wrap bg-blue sw3" data-aos="fade-up">
                <div class="wrap">
                    <div class="cases-heading" data-aos="fade" data-aos-delay="250">
                        <h2>Who uses<br>
                        <strong>PathRover?</strong></h2>
                    </div>
                    <div class="cases" data-aos="fade" data-aos-delay="250">
                        <div class="case">
                            <?=printSVG("icon-mountain");?>
                            <p class="nmb"><strong>• General Users:</strong> Adventurers, hikers, off-road enthusiasts.</p>
                        </div>
                        <div class="case">
                            <?=printSVG("icon-truck");?>
                            <p class="nmb"><strong>• Energy Sector Professionals:</strong> Drivers, supervisors, technicians. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="pricing" class="fullwrap spacing-small">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="wrap">
                <div class="features-heading" data-aos="fade" data-aos-delay="250">
                    <h2 class="highlight-red"><strong>Everything</strong> you need in the field</h2>
                    <p class="highlight-red">Core Features</p>
                </div>
                <div class="price-table-fixed">
                    <div class="price-table-wrap">
                        <div class="price-table">
                            <div class="price-column price-column-functionality">
                                <div class="price-title">
                                    Functionality
                                </div>
                                <div class="price-content">
                                    <div class="price-row">
                                        Account Creation
                                    </div>
                                    <div class="price-row">
                                        Basic Map & GPS Features
                                    </div>
                                    <div class="price-row">
                                        Well Search & Navigation
                                    </div>
                                    <?php /*
                                    <div class="price-row">
                                        Internal Chat (PathLink)
                                    </div>

                                    <div class="price-row">
                                        AI Assistant
                                    </div>
                                    */ ?>
                                    <div class="price-row">
                                        Custom Route Creation & Offline Maps
                                    </div>
                                    <div class="price-row">
                                        Hiking & Off-Road Tools
                                    </div>
                                    <div class="price-row">
                                        WellPath Pro Features
                                    </div>
                                    <?php /*
                                    <div class="price-row">
                                        PathDriver Services
                                    </div>
                                    */ ?>
                                </div>
                            </div>
                            <div class="price-column price-column-free">
                                <div class="price-title">
                                    Free
                                </div>
                                <div class="price-content">
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Turn by turn navigation)</span>
                                    </div>
                                    <?php /*
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Beta)</span>
                                    </div>

                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Basic assistance)</span>
                                    </div>
                                    */ ?>
                                    <div class="price-row">
                                        <?=printSVG("icon-block");?>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-block");?>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-block");?>
                                    </div>
                                    <?php /*
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Basic booking)</span>
                                    </div>
                                    */ ?>
                                </div>
                            </div>
                            <div class="price-column price-column-paid">
                                <div class="price-title">
                                    Paid (Subscription)
                                </div>
                                <div class="price-content">
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Detailed data & filters)</span>
                                    </div>
                                    <?php /*
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Beta)</span>
                                    </div>

                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Advanced features)</span>
                                    </div>
                                    */ ?>
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Beta)</span>
                                    </div>
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?>
                                    </div>
                                    <?php /*
                                    <div class="price-row">
                                        <?=printSVG("icon-check");?> <span>(Advanced tracking & filters)</span>
                                    </div>
                                    */ ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--  -->
                <div class="price-table-mobile">
                    <div class="price-table">
                        <div class="price-column _price-column-functionality">
                            <div class="price-title">
                                Free
                            </div>
                            <div class="price-content">
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Account Creation</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Basic Map & GPS Features</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Well Search & Navigation (Turn by turn navigation)</span>
                                </div>
                                <?php /*
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Internal Chat (PathLink - Beta)</span>
                                </div>

                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>AI Assistant (Basic assistance)</span>
                                </div>
                                */ ?>
                                <div class="price-row">
                                    <?=printSVG("icon-block");?> <span>Custom Route Creation & Offline Maps</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-block");?> <span>Hiking & Off-Road Tools</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-block");?> <span>WellPath Pro Features</span>
                                </div>
                                <?php /*
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>PathDriver Services</span>
                                </div>
                                */ ?>
                            </div>
                        </div>
                        <div class="price-column _price-column-paid">
                            <div class="price-title">
                                Paid (Subscription)
                            </div>
                            <div class="price-content">
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Account Creation</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Basic Map & GPS Features</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Well Search & Navigation (Detailed data & filters)</span>
                                </div>
                                <?php /*
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Internal Chat (PathLink - Beta)</span>
                                </div>

                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>AI Assistant (Advanced features)</span>
                                </div>
                                */ ?>
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Custom Route Creation & Offline Maps</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>Hiking & Off-Road Tools (Beta)</span>
                                </div>
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>WellPath Pro Features</span>
                                </div>
                                <?php /*
                                <div class="price-row">
                                    <?=printSVG("icon-check");?> <span>PathDriver Services (Advanced tracking & filters)</span>
                                </div>
                                */ ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="download" class="fullwrap section-spacing to-front">
    <div class="main-grid">
        <div class="grid-wrap">
            <div class="section-wrap bg-red sw5" data-aos="fade-up">
                <div class="wrap">
                    <div class="download-wrap grid-half">
                        <div class="download-txt">
                            <div class="inner-wrap" data-aos="fade" data-aos-delay="250">
                                <h2>Ready to<br>
                                <strong>go off the grid?</strong></h2>
                                <p>For Everyone Who Dares to Go Further:</p>
                                <p><strong>Mobile App:</strong> Access PathRover on the go with our iOS and Android applications.</p>
                                <?php
                                include(VIEWS.'apps.php');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="download-img">
                    <img src="<?=URLIMAGES;?>iphone.png" alt="Download App">
                </div>
                <!-- <img class="download-img" src="<?=URLIMAGES;?>iphone.png" alt="Download App"> -->
            </div>
        </div>
    </div>
</div>
<?php
require_once(VIEWS.'footer.php' );
?>
