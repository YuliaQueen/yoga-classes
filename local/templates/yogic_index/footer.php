<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php use Bitrix\Main\Page\Asset; ?>
<!-- footer -->
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container py-lg-4">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                    <div class="footer-logo mb-3">
                        <a class="navbar-brand" href="index.html">
                            <i class="fa fa-yoast" aria-hidden="true"></i>ogic
                        </a>
                    </div>
                    <p>Yoga teaches you how to listen your body, Join our Amazing online classes,
                        <br>semper at tempu amet.</p>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="classes.html"> Classes</a></li>
                        <li><a href="#blog"> Blog Posts</a></li>
                        <li><a href="#blog">Blog Single</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">More Info</h6>
                    <ul>
                        <li><a href="#privacy">Privacy Policy</a></li>
                        <li><a href="#terms"> Terms of Service</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="#support"> Support</a></li>
                    </ul>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Contact Info </h6>
                    <p>10001 Alleghany st, 5th Avenue, 235 Terry, London.</p>
                    <p class="mb-2 mt-3"><i class="fa fa-phone mr-2" aria-hidden="true"></i><a
                            href="tel:+12 23456790">+12 23456790</a></p>
                    <p><i class="fa fa-envelope mr-2" aria-hidden="true"></i><a
                            href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //footer -->
<!-- copyright -->
<section class="w3l-copyright">
    <div class="container">
        <div class="row bottom-copies">
            <p class="col-lg-8 copy-footer-29">© 2020 Yogic. All rights reserved. Design by <a
                    href="https://w3layouts.com/" target="_blank">
                    W3Layouts</a></p>

            <div class="col-lg-4 footer-list-29 text-right">
                <div class="main-social-footer-29">
                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>

                </div>
            </div>
        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>
<!-- //copyright -->

<!-- Js scripts -->

<!-- owl carousel for team -->
<script src="<?= SITE_TEMPLATE_PATH ?>/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                667: {
                    items: 2,
                    nav: true,
                    margin: 20
                },
                1000: {
                    items: 2,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })
    })
</script>
<!-- //owl carousel for team -->
<!-- theme switch js (light and dark)-->
<script src="<?= SITE_TEMPLATE_PATH ?>/js/theme-change.js"></script>
<script>
    function autoType(elementClass, typingSpeed) {
        var thhis = $(elementClass);
        thhis.css({
            "position": "relative",
            "display": "inline-block"
        });
        thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
        thhis = thhis.find(".text-js");
        var text = thhis.text().trim().split('');
        var amntOfChars = text.length;
        var newString = "";
        thhis.text("|");
        setTimeout(function () {
            thhis.css("opacity", 1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for (var i = 0; i < amntOfChars; i++) {
                (function (i, char) {
                    setTimeout(function () {
                        newString += char;
                        thhis.text(newString);
                    }, i * typingSpeed);
                })(i + 1, text[i]);
            }
        }, 1500);
    }

    $(document).ready(function () {
        // Now to start autoTyping just call the autoType function with the
        // class of outer div
        // The second paramter is the speed between each letter is typed.
        autoType(".type-js", 200);
    });
</script>
<!-- //theme switch js (light and dark)-->
<!-- magnific popup -->
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>
<!-- //magnific popup -->
<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->
<!--bootstrap-->
<script src="<?= SITE_TEMPLATE_PATH ?>/js/bootstrap.min.js"></script>
<!-- //bootstrap-->
<!-- //Js scripts -->
</body>

</html>
