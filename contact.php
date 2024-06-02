<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from st.ourhtmldemo.com/new/humanity-html/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 08:21:44 GMT -->

<head>
    <meta charset="UTF-8" />
    <title>The Spine Foundation</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <?php require("./required/header.php") ?>

</head>

<body>
    <div class="boxed_wrapper">

        <?php require("./required/menu.php") ?>


        <div class="inner-banner has-base-color-overlay text-center"
            style="background: url(images/background/contact\ us\ banner.png)">
        </div>
        <div id="banner-for-mobile"
            style="background: url(images/background/contact\ us\ banner.png);height: 115px;background-size: contain;">
        </div>
        <div class="breadcumb-wrapper">
            <div style="text-align: center;">
                <h2 style="FONT-WEIGHT: 700;color: #03591C;"> Contact Us </h2>
            </div>
        </div>

        <section class="contact sec-padd2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Send Your <span class="thm-color">Message</span></h2>
                        </div>
                        <div class="default-form-area">
                            <form id="contact-form" name="contact_form" class="default-form"
                                action="https://st.ourhtmldemo.com/new/humanity-html/inc/sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_name" class="form-control" value=""
                                                placeholder="Your Name *" required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="form_email" class="form-control required email"
                                                value="" placeholder="Your Mail *" required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_phone" class="form-control" value=""
                                                placeholder="Phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_subject" class="form-control" value=""
                                                placeholder="Subject" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control textarea required"
                                                placeholder="Your Message...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="" />
                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                                send message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Quick <span class="thm-color">Contact</span></h2>
                        </div>
                        <div class="content">
                            <div class="text">
                                <!-- <p>
                                    If you are passionate about helping people: through
                                    education, or preventing then you are in the right place.
                                </p> -->
                            </div>
                            <ul class="contact-info">
                                <li>
                                    <i class="icon-arrows"></i><span>Address:</span> The Spine Foundation
                                    C/o ADAPT, 110 , 1st Floor, K.C . Marg, Bandra reclamation, Next to Hotel Rang
                                    Sharda, Bandra West
                                    Mumbai - 400 050.
                                </li>
                                <li>
                                    <i class="icon-phone"></i><span> Phone:</span> +919819826244 & <br />+919892101234
                                </li>
                                <li>
                                    <i class="icon-back"></i><span>Email:</span> thespinefoundation365@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-google-map">
            <div class="google-map" id="contact-google-map" data-map-lat="42.568692" data-map-lng="72.930105"
                data-icon-path="images/logo/map-marker.png" data-map-title="Chester" data-map-zoom="8"></div>
        </section>

        <section class="call-out">
            <div class="container">
                <div class="float_left">
                    <h4>
                        Don't Suffer in Silence. Start Your Recovery Journey Today!
                    </h4>
                </div>
                <div class="float_right">
                    <a class="thm-btn style-3" href="contact.php">Contact Us</a>
                </div>
            </div>
        </section>

        <!-- footer  -->

        <?php require("./required/footer.php") ?>

        <!-- footer  -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/imagezoom.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.polyglot.language.switcher.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/nouislider.js"></script>
        <script src="js/bootstrap-select.min.js"></script>

        <!-- google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
        <script src="js/gmap.js"></script>

        <script id="map-script" src="js/default-map.js"></script>

        <script src="js/custom.js"></script>
    </div>
</body>

<!-- Mirrored from st.ourhtmldemo.com/new/humanity-html/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 08:21:45 GMT -->

</html>