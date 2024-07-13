<?php
    $link7 = 'active';
    $page_css = './assets/css/contact-us.css';
    include 'header.php'
?>
    <!-- Banner Section Start -->
    <section>
        <div class="contact-us-banner">
            <div class="contact-us-banner-content text-center">
                <h1 class="contact-us-heading text-white text-uppercase">get in touch</h1>
                <p class="text-white d-none d-sm-block">Lorem tempore necessitatibus illum est, ipsum dignissimos.</p>
            </div>
            <div class="main-container">
                <div class="contact-us-breadcrumb">
                    <ul class="d-flex">
                        <li>
                            <a href="index.php" class="head-nav-link p-0 text-white">home</a>
                        </li>
                        <span class="breadcrumb-slash text-white">/</span>
                        <li>
                            <p class="m-0 head-nav-link p-0 text-light">contact us</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
    <!-- Contact Us Page Start-->
    <section class="contact-us-section py-5">
        <div class="main-container">
            <div class="contact-page">
                <div class="row">
                    <div class="col-lg-5">
                        <h5 class="text-uppercase text-black contact-sub-heading">contact details</h5>
                        <div class="contact-info">
                            <ul class="mb-5">
                                <li>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="text-muted fa fa-map-marker"></i>
                                        <span>
                                            <p class="m-0 font-size-14">28 Green Tower, Street Name,</p>
                                            <p class="m-0 font-size-14">New York City, USA</p>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="text-muted fa fa-phone"></i>
                                        <span>
                                            <p class="m-0 font-size-14"><a href="tel:555-555-1212">555-555-1212</a></p>
                                            <p class="m-0 font-size-14"><a href="tel:555-555-1212">666-666-1313</a></p>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="text-muted fa fa-envelope"></i>
                                        <span>
                                            <p class="m-0 font-size-14">company-email@gmail.com</p>
                                            <p class="m-0 font-size-14">your-email@gmail.com</p>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <form action="">
                                <h5 class="text-uppercase text-black contact-sub-heading">send message </h5>
                                <input type="text" name="name" placeholder="Your name here...">
                                <input type="text" name="email" placeholder="Your email here...">
                                <textarea class="custom-textarea" name="message" placeholder="Your comment here..."></textarea>
                                <a href="" class="btn button-primary">submit message</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29586.445637931825!2d74.88677238587384!3d22.037898449688257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3961f9144d30bd35%3A0x6bd43d2a7e6f4c30!2sBarwani%2C%20Madhya%20Pradesh%20451551!5e0!3m2!1sen!2sin!4v1629956407764!5m2!1sen!2sin" width="630" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Page End-->
<?php 
    include 'footer.php'
?>