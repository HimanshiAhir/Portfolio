<!-- Footer Start -->
<footer class="pt-5 pb-3 footer">
        <div class="main-container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="logo mb-4">
                        <a href=""><img src="assets/img/logo.png" class="logo-img" alt="wood logo"></a>
                    </div>
                    <p class="mb-4 footer-para">Lorem ipsum dolor sit amet dolor sit amet consectetur adipisicing elit. Magni, saepe sit amet dolor sit saepe modi.</p>
                    <h4 class="text-capitalize footer-heading">follow us</h4>
                    <ul class="d-flex">
                        <li class="social-media-li">
                            <a href="" class="social-link">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-media-li">
                            <a href="" class="social-link">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social-media-li">
                            <a href="" class="social-link">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="social-media-li">
                            <a href="" class="social-link">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h4 class="text-capitalize footer-heading">our links</h4>
                    <ul class="footer-ul">
                        <li class="footer-li">
                            <a href="" class="footer-link">home</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">about us</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">product-detail</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">product-list</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">blog</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">profile</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h4 class="text-capitalize footer-heading">our brands</h4>
                    <ul class="footer-ul">
                        <li class="footer-li">
                            <a href="" class="footer-link">woodsworth,</a>
                            <a href="" class="footer-link">spacewood,</a>
                            <a href="" class="footer-link">aberville,</a>
                            <a href="" class="footer-link">crystal furnitech,</a>
                            <a href="" class="footer-link">trevi furnitech,</a>
                            <a href="" class="footer-link">peach tree,</a>
                            <a href="" class="footer-link">clouddio,</a>
                            <a href="" class="footer-link">mollycoddle,</a>
                            <a href="" class="footer-link">parin,</a>
                            <a href="" class="footer-link">primorati,</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h4 class="text-capitalize footer-heading">my account</h4>
                    <ul class="footer-ul">
                        <li class="footer-li">
                            <a href="" class="footer-link">login/sign up</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">dashboard</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">product-detail</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">order-history</a>
                        </li>
                        <li class="footer-li">
                            <a href="" class="footer-link">my address</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Copyright Start -->
    <section class="py-4">
        <div class="main-container">
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-title mb-0">
                            &#169; 2021 Daily Deals Design by <a href="" class="copyright-name">Himanshi Ahir</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class=" d-md-flex justify-content-end">
                            <li class="copyright-li">
                                <a href="" class="footer-link">home</a>
                            </li>
                            <li class="copyright-li">
                                <a href="" class="footer-link">about us</a>
                            </li>
                            <li class="copyright-li">
                                <a href="" class="footer-link">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright End -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/swiper.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script>
        function toggle() {
        var burger = document.getElementById("burger");
        var nav = document.querySelector(".nav");
        burger.classList.toggle("open");
        nav.classList.toggle("active");
        }
        var swiper = new Swiper(".swiper-slider", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
              dynamicBullets: true,
            },
            effect: "fade",
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
        });
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        AOS.init();
        $('.pro-detail-slider').slick({
            infinite: true,
            autoplay: true,
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
            ]
        });
    </script>
</body>
</html>