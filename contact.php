<?php $current_page_url = "https://www.tarcontainer.com/contact";
$title = 'Tar Container | Contact Us';
include_once 'components/header.php'; ?>

<main>
    <!-- slider-area-start  -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center"
        data-background="assets/img/Contact/bg_image.webp">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-100">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Contact</span></li>
                            </ul>
                        </div>
                        <h3 class="page__title mt-20">Get In Touch</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- contact__area start -->
    <section class="contact__area pt-120 pb-80" data-background="assets/img/bg/contact-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="contact__item text-center mb-30">
                        <div class="contact__icon mb-35">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <p class="contact__title mb-25">Email Address</p>
                        <div class="contact__text">
                            <p><a href="mailto:info@tarcontainer.com"><span>info@tarcontainer.com</span></a></p>
                            <p><a href="mailto:sales@tarcontainer.com"><span>sales@tarcontainer.com</span></a></p>
                        </div>
                        <div class="contact__button mt-30">
                            <a href="mailto:info@tarcontainer.com" class="tp-btn-white">Email Us <i
                                    class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact__item text-center mb-30">
                        <div class="contact__icon mb-35">
                            <i class="fa-light fa-phone"></i>
                        </div>
                        <p class="contact__title mb-25">Phone Number</p>
                        <div class="contact__text">
                            <p><a href="tel:+918448996050">+91 8448996050</a></p>
                            <p><a href="tel:+918448996051">+91 8448996051</a></p>
                        </div>
                        <div class="contact__button mt-30">
                            <a href="tel:+918448996050" class="tp-btn-white">Call Us <i
                                    class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact__item text-center mb-30">
                        <div class="contact__icon mb-35">
                            <i class="fa-light fa-map-location-dot"></i>
                        </div>
                        <p class="contact__title mb-25">Office Address</p>
                        <div class="contact__text">
                            <p><a href="https://maps.app.goo.gl/DSD7Ykgihi4BR87h6" target="blank">D-5, Site–B, UPSIDC
                                    Industrial Area, Surajpur, Greater Noida, Uttar Pradesh 201306</a></p>
                        </div>
                        <div class="contact__button mt-30">
                            <a href="https://maps.app.goo.gl/DSD7Ykgihi4BR87h6" target="blank"
                                class="tp-btn-white">Direction <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact__item text-center mb-30">
                        <div class="contact__icon mb-35">
                            <i class="fa-light fa-bullseye-arrow"></i>
                        </div>
                        <p class="contact__title mb-25">Social Connect</p>
                        <div class="contact__social mt-30">
                            <a href="www.linkedin.com/company/tarcontainer"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="www.facebook.com/tarcontainer"><i class="fa-brands fa-facebook"></i></a>
                            <a href="www.youtube.com/tarcontainer"><i class="fa-brands fa-youtube"></i></a>
                            <a href="www.instagram.com/tarcontainer"><i class="fa-brands fa-instagram"></i></a>
                            <a href="www.twitter.com/tarcontainer"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact__area end -->

    <!-- contact__area-2 start -->
    <section class="contact__area-2">
        <div class="container">
            <div class="contact__form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__wrapper mb-45">
                                <h4 class="section__title">We can take your business to the next level.</h4>
                                <div class="r-text">
                                    <span>contact</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <form id="contact-form" action="send_email.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-filed mb-20">
                                            <input type="text" name="name" placeholder="Enter your name here">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-filed contact-icon-mail mb-20">
                                            <input email="text" name="email" placeholder="Enter email address here">
                                        </div>
                                    </div>
                                </div>
                                <style>
                                .nice-select,
                                .nice-select option {
                                    width: 100% !important;
                                }
                                </style>
                                <div class="col-lg-12 pb-3">
                                    <div style="width: 100%;">
                                        <div class="mb-20">
                                            <label for="product"></label>
                                            <select id="product" name="product">
                                                <option value="">Interest Product</option>
                                                <option value="Container Home">Container Home</option>
                                                <option value="Office Container">Office Container</option>
                                                <option value="Shipping Container">Shipping Container</option>
                                                <option value="Mobile Container">Mobile Container</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-filed contact-icon-message mb-25">
                                    <textarea placeholder="Enter message here" name="message"></textarea>
                                </div>
                                <div class="contact__form-agree  d-flex align-items-center mb-20">
                                    <input name="checkbox" class="e-check-input" type="checkbox" id="e-agree">
                                    <label class="e-check-label" for="e-agree">I agree to the<a
                                            href="contact.html">Terms &amp; Conditions</a></label>
                                </div>
                                <div class="form-submit text-center">
                                    <button class="tp-btn" type="submit">Submit</button>
                                </div>
                                <p class="ajax-response"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact__area-2 end -->

    <!-- contact__map start -->
    <section class="contact__map">
        <div class="contact__map-wrap">
            <iframe id="gmap_canvas" title="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.0365622140334!2d77.4959656754963!3d28.50854767573265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee4d55494b61%3A0x506e48711cdb960e!2sTar%20Parking%20(SHAIL%20GROUP)!5e0!3m2!1sen!2sin!4v1711951960098!5m2!1sen!2sin"></iframe>
            <div class="contact__map-icon">
                <i class="fa-solid fa-location-dot"></i>
                <img src="assets/img/bg/contact-icon-bg.png" alt="">
            </div>
        </div>
    </section>
    <!-- contact__map end -->

</main>

<?php include_once 'components/footer.php'; ?>