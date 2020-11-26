<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Yogic - лучшие онлайн йога-классы");
?>

<section id="home" class="w3l-banner py-md-5 pt-md-0 pt-sm-5 pt-4">
    <div class="container py-lg-5 py-md-4 pt-md-0 pt-sm-1 mt-lg-0 mt-5">
        <div class="row align-items-center py-lg-5 py-md-5 mt-4">
            <div class="banner-image-w3 text-lg-center">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/new-high2.png" alt="" class="img-fluid">
            </div>
            <div class="offset-lg-6 col-lg-6 offset-md-5 col-md-7 mt-lg-5 pt-md-4 pt-5">
                <h3 class="mb-sm-4 mb-3 title"> Популярные онлайн <br>Йога
                    <span class="type-js"><span class="text-js">Классы</span></span></h3>
                <p>Йога научит вас слушать свое тело, присоединяйтесь к нашим удивительным онлайн-классам</p>
                <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                    <a class="btn btn-primary btn-style" href="classes.html">Показать классы</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->
<!-- index-section-1 -->
<section class="w3l-index-block2 py-5">
    <div class="container py-md-4 py-3">
        <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Популярные онлайн-классы</h3>
            <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
                turpis sodales quis. Integer sit amet mattis quam.</p>
        </div>
        <div class="row bottom_grids mt-5 pt-lg-3">
            <div class="col-lg-3 col-md-6 px-lg-2">
                <div class="s-block">
                    <a href="classes.html" class="d-block">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/class2.jpg" alt="" class="img-fluid"/>
                        <div class="p-3">
                            <h3 class="mb-2">Yoga for beginners</h3>
                            <p>Morbi sed feugiat sapien, vitae luctus justo.</p>
                            <strong class="fee-class-w3 mt-3">Free</strong>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
                <div class="s-block">
                    <a href="classes.html" class="d-block">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/class5.jpg" alt="" class="img-fluid img-responsive"/>
                        <div class="p-3">
                            <h3 class="mb-2">The smart flow yoga</h3>
                            <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                            <strong class="fee-class-w3 mt-3">&63</strong>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4 grid-4-col">
                <div class="s-block">
                    <a href="classes.html" class="d-block">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/class1.jpg" alt="" class="img-fluid"/>
                        <div class="p-3">
                            <h3 class="mb-2">Yoga for better sleep</h3>
                            <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                            <strong class="fee-class-w3 mt-3">&76</strong>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-4">
                <div class="s-block">
                    <a href="classes.html" class="d-block">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/class3.jpg" alt="" class="img-fluid"/>
                        <div class="p-3">
                            <h3 class="mb-2">Mastering anxiety</h3>
                            <p class="">Morbi sed feugiat sapien, vitae luctus justo.</p>
                            <strong class="fee-class-w3 mt-3">$67</strong>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-5 mx-auto text-center">
            <a class="btn btn-primary btn-style" href="classes.html">View All Classes</a>
        </div>
    </div>
</section>
<!-- //index-section-1 -->
<!-- 3 grids with icon section -->
<section class="w3l-feature-8">
    <div class="features-main py-5">
        <div class="container py-md-4 py-3">
            <div class="features">
                <div class="feature-1">
                    <div class="feature-body">
                        <div class="feature-images">
                            <span class="fa fa-bullhorn" aria-hidden="true"></span>
                        </div>
                        <div class="feature-info">
                            <a href="about.html">
                                <h3 class="feature-titel">Yoga Workouts</h3>
                            </a>
                            <p class="feature-text">Amazing Yoga Workout and Mediatation that suit everyone</p>
                            <a href="about.html" class="feature-link">Read more <span
                                        class="arrow">&raquo;</span></a>
                        </div>
                    </div>
                </div>
                <div class="feature-2">
                    <div class="feature-body">
                        <div class="feature-images">
                            <span class="fa fa-users" aria-hidden="true"></span>
                        </div>
                        <div class="feature-info">
                            <a href="about.html">
                                <h3 class="feature-titel">Yoga Instructors</h3>
                            </a>
                            <p class="feature-text">All Our Classes are Well Planned by Professional Yoga
                                Instructors</p>
                            <a href="about.html" class="feature-link">Read more <span
                                        class="arrow">&raquo;</span></a>
                        </div>
                    </div>
                </div>
                <div class="feature-3">
                    <div class="feature-body">
                        <div class="feature-images">
                            <span class="fa fa-umbrella" aria-hidden="true"></span>
                        </div>
                        <div class="feature-info">
                            <a href="about.html">
                                <h3 class="feature-titel">Professional Yoga</h3>
                            </a>
                            <p class="feature-text">Professional Yoga Instructors from around all the world</p>
                            <div class="hover">
                                <a href="about.html" class="feature-link">Read more <span
                                            class="arrow">&raquo;</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //3 grids with icon section -->
<!-- articles section -->
<section class="w3l-servicesblock py-5">
    <div class="container py-md-4 py-3">
        <div class="row">
            <div class="col-lg-6 left-wthree-img">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/image2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 about-right-faq align-self mt-lg-0 mt-sm-5 mt-4 pl-lg-5">
                <h3 class="title-main-2 mb-3">Лучшие статьи</h3>
                <div class="separatorhny"></div>
                <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.
                    Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel.</p>

                <div class="row mt-md-5 mt-3">
                    <div class="col-sm-6 left-insp-art">
                        <ul>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Meditation</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Yoga
                                    Therapy</a></li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Anatomy</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Yoga Poses</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 left-insp-art">
                        <ul>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Pranayama</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Remedies</a>
                            </li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Seasonal
                                    Tips</a></li>
                            <li><i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i><a
                                        href="classes.html">Recipes</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- //articles section -->
<!-- team section -->
<section class="w3l-teams-1">
    <div class="teams1 py-5">
        <div class="container py-md-4 py-3">
            <div class="teams1-content">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-main">Наши инструкторы</h3>
                    <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
                        turpis sodales quis. Integer sit amet mattis quam.</p>
                </div>
                <div class="mt-5 pt-lg-4">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#team"><img src="<?= SITE_TEMPLATE_PATH ?>/images/team1.jpg" alt=""
                                                         class="img-fluid"/></a>
                                    <h3 class="name-pos"><a href="#team">Sally Kee</a></h3>
                                </div>
                                <div class="column">
                                    <p>Senior Instructor</p>
                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                                                   aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                                                 aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#team"><img src="<?= SITE_TEMPLATE_PATH ?>/images/team2.jpg" alt=""
                                                         class="img-fluid"/></a>
                                    <h3 class="name-pos"><a href="#team">Angela Doe</a></h3>
                                </div>
                                <div class="column">
                                    <p>Team Lead</p>
                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                                                   aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                                                 aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#team"><img src="<?= SITE_TEMPLATE_PATH ?>/images/team5.jpg" alt=""
                                                         class="img-fluid"/></a>
                                    <h3 class="name-pos"><a href="#team">Donna Jek</a></h3>
                                </div>
                                <div class="column">
                                    <p>Senior Instructor</p>
                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                                                   aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                                                 aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#team"><img src="<?= SITE_TEMPLATE_PATH ?>/images/team4.jpg" alt=""
                                                         class="img-fluid"/></a>
                                    <h3 class="name-pos"><a href="#team">Irene Lee</a></h3>
                                </div>
                                <div class="column">
                                    <p>Senior Instructor</p>
                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                                                   aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                                                 aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#team"><img src="<?= SITE_TEMPLATE_PATH ?>/images/team3.jpg" alt=""
                                                         class="img-fluid"/></a>
                                    <h3 class="name-pos"><a href="#team">Maria Joe</a></h3>
                                </div>
                                <div class="column">
                                    <p>Senior Instructor</p>
                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"
                                                                                   aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"
                                                                                 aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //team section -->
<!-- blog section -->
<div class="w3l-new-block-6 py-5">
    <div class="container py-md-4 py-3">
        <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Наш блог</h3>
            <p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
                turpis sodales quis. Integer sit amet mattis quam.</p>
        </div>
        <div class="d-grid mt-5 pt-lg-3">
            <div class="grids5-info">
                <a href="#blog"><img src="<?= SITE_TEMPLATE_PATH ?>/images/blog1.jpg" alt="" class="img-fluid"/></a>
                <h4><a href="#blog">News Post title</a></h4>
                <ul class=" admin-list">
                    <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                            Admin</a></li>
                    <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>9
                            Comments</a></li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of
                    a page when looking at its layout</p>
            </div>
            <div class="grids5-info">
                <a href="#blog"><img src="<?= SITE_TEMPLATE_PATH ?>/images/blog3.jpg" alt="" class="img-fluid"/></a>
                <h4><a href="#blog">News Post title</a></h4>
                <ul class=" admin-list">
                    <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                            Admin</a></li>
                    <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>5
                            Comments</a></li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of
                    a page when looking at its layout</p>
            </div>
            <div class="grids5-info">
                <a href="#blog"><img src="<?= SITE_TEMPLATE_PATH ?>/images/blog2.jpg" alt="" class="img-fluid"/></a>
                <h4><a href="#blog">News Post title</a></h4>
                <ul class=" admin-list">
                    <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                            Admin</a></li>
                    <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>12
                            Comments</a></li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable content of
                    a page when looking at its layout</p>
            </div>
        </div>
    </div>
</div>
<!-- //blog section -->
<!-- middle section with full bg imgage -->
<div class="middle py-5">
    <div class="container py-md-5 py-4">
        <div class="welcome-left text-left py-lg-4">
            <h3>Creative & most complete yoga / health theme</h3>
            <p class="mt-3 pr-lg-5 mr-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
                ligula. Semper at
                tempufddfel. Lorem ipsum dolor sit amet elit.</p>
            <a href="about.html" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Read More</a>
            <a href="contact.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
        </div>
    </div>
</div>
<!-- //middle section with full bg imgage -->
<!-- testimonial section -->
<div class="w3l-cutomer-main-cont">
    <div class="testimonials text-center py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto">
                <h3 class="title-main">Клиенты говорят</h3>
                <p class="mt-4 sub-title"> What people say about us</p>
            </div>
            <div class="row content-sec mt-md-5 mt-4">
                <div class="col-lg-4 col-md-6 testi-sections">
                    <div class="testimonials_grid">
                        <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> Nam
                            libero
                            tempore, cum soluta
                            nobis est eligendi optio cumque nihil impedit.
                        </p>
                        <div class="d-grid sub-author-con">
                            <div class="testi-img-res">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/testi2.jpg" alt="" class="img-fluid"/>
                            </div>
                            <div class="testi_grid text-left">
                                <h5>Petey Cruis</h5>
                                <p>Caption Here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4 testi-sections">
                    <div class="testimonials_grid">
                        <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> Nam
                            libero
                            tempore, cum soluta
                            nobis est eligendi optio cumque nihil impedit.
                        </p>
                        <div class="d-grid sub-author-con">
                            <div class="testi-img-res">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/testi1.jpg" alt="" class="img-fluid"/>
                            </div>
                            <div class="testi_grid text-left">
                                <h5>Molive Joe</h5>
                                <p>Caption Here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 testi-sections">
                    <div class="testimonials_grid">
                        <p class="sub-test"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span> Nam
                            libero
                            tempore, cum soluta
                            nobis est eligendi optio cumque nihil impedit.
                        </p>
                        <div class="d-grid sub-author-con">
                            <div class="testi-img-res">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/testi3.jpg" alt="" class="img-fluid"/>
                            </div>
                            <div class="testi_grid text-left">
                                <h5>Paige Turner</h5>
                                <p>Caption Here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //testimonial section -->
<!-- newsletter section -->
<section class="w3l-form-26">
    <div class="form-26-main">
        <div class="container py-md-5">
            <div class="form-inner-cont">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-main">Подпишитесь на наши новости</h3>
                    <p class="mt-4 pt-2 sub-title">In non nisi quis metus tempor efficitur a ut odio. Phasellus
                        posuere
                        tellus in interdum venenatis. Curabitur aliquam quam dictum est vestibulum aliquet.</p>
                </div>
                <div class="form-right-inf mt-5">
                    <form action="#" method="post" class="signin-form">
                        <div class="forms-gds">
                            <div class="form-input">
                                <input type="email" name="" placeholder="Enter your email address" required/>
                            </div>
                            <div class="btn btn-style btn-primary button-eff-news">
                                <button class="btn">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- newsletter image -->
        <div class="png-img-w3ls">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/newsletter3.png" alt="" class="img-responsive">
        </div>
        <!-- //newsletter image -->
    </div>
</section>
<!-- //newsletter section -->



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
