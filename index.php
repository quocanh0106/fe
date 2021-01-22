<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Style Less-->
    <link rel="stylesheet/less" type="text/less" href="assets/less/style.less" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/less@3.13" ></script>
    <!-- Load icon library -->
    <script src="https://kit.fontawesome.com/fb17ff927b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="assets/images/title.png" />
    <title>MEDYPLUS</title>
</head>
<body>

    <header class="header">


        <div class="header__topbar">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <div class="header__topbar__left">
                            <div class="header__topbar__left__item">
                                <div class="header__topbar__left__item__icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="header__topbar__left__item__infor">
                                    <p>Find us</p>
                                    <p>325 admiral unit, North cost, USA</p>
                                </div>
                            </div>
                            <div class="header__topbar__left__item">
                                <div class="header__topbar__left__item__icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="header__topbar__left__item__infor">
                                    <p>Email Us</p>
                                    <p>admin@medyplus.com</p>
                                </div>
                            </div>
                            <div class="header__topbar__left__item">
                                <div class="header__topbar__left__item__icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="header__topbar__left__item__infor">
                                    <p>Call Us Now</p>
                                    <p>002 - 0100 843 1112</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 language">
                        <div class="header__topbar__right">
                            <div class="header__topbar__right__item">
                                <img src="assets/images/flag.png"  alt="">
                                <select id="language">
                                    <option value="english" selected>English</option>
                                    <option value="vietnamese">Vietnamese</option>
                                    <option value="korean">Chinese</option>
                                    <option value="korean" >Korean</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__inner">
            <div class="container header__inner__container">
                <div class="header__inner__container__logo">
                    <a href="index.php"><img src="assets/images/logo.png" alt="medyplus"></a>
                </div>
                <div class="header__inner__container__search">
                    <div class="header__inner__container__search__cate">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown"><span>All Category</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Diet & Fitness</a>
                            <a class="dropdown-item" href="#">Baby & Child Care</a>
                            <a class="dropdown-item" href="#">Sexual Healty</a>
                            <a class="dropdown-item" href="#">Beauty</a>
                            <a class="dropdown-item" href="#">Dential Care</a>
                            <a class="dropdown-item" href="#">Vitamins & Supplements</a>
                        </div>
                    </div>
                    <div class="header__inner__container__search__line"></div>
                    <input type="text" placeholder="     Search for Product..">

                    <div class="header__inner__container__search__button">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="header__inner__container__cart">
                    <a href="" class="header__inner__container__cart-option"><img src="assets/images/icon/option.png"  alt=""></a>
                    <a href="" class="header__inner__container__cart-cart"><img src="assets/images/icon/cart.png"   alt=""><span>2</span></a>
                </div>
            </div>
        </div>


        <div class="header__navbar">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="header__navbar__left">
                            <div class="header__navbar__left__button">
                                <a class="header__navbar__left__button-icon"><img src="assets/images/icon/cate.png" alt=""></a>
                                <a href="">CATEGORIES</a>
                            </div>

                            <ul class="header__navbar__left-options">
                                <li>
                                    <a>Diet & Fitness</a>
                                </li>
                                <li>
                                    <a>Baby & Child Care</a>
                                </li>
                                <li>
                                    <a>Sexual Healty</a>
                                </li>
                                <li>
                                    <a>Dential Care</a>
                                </li>
                                <li>
                                    <a>Vitamins & Supplements</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="header__navbar__right">
                            <div class="header__navbar__right__button">
                                <a class="header__navbar__right__button-icon">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                            <ul class="header__navbar__right-options">
                                <li><a href="">HOME</a></li>
                                <li><a href="">ABOUT</a></li>
                                <li><a href="">SERVICES</a></li>
                                <li><a href="">BLOG</a></li>
                                <li><a href="">PAGE</a></li>
                                <li><a href="">CONTACT</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


        </div>


        <div id="carouselExampleControls" class="carousel slide header__slider" data-ride="carousel">
            <div class="carousel-inner header__slider__box">
                <div class="carousel-item active header__slider__box__item">
                    <img src="assets/images/slide/slide.png" class="d-block" alt="...">
                    <div class="container">
                        <div class="row">
                            <div class="header__slider__box__item__infor col-lg-12 col-md-12 col-12">
                                <div class="header__slider__box__item__infor__slogan">
                                    <p>Find Any <span>Medicine</span></p>
                                    <p>You Need!</p>
                                    <p>Free Standard Shipping Everyday</p>
                                </div>
                                <a href="">Shop Now</a>
                                <div class="header__slider__box__item__infor-button"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item header__slider__box__item">
                    <img src="assets/images/slide/slide.png" class="d-block" alt="...">
                    <div class="container">
                        <div class="row">
                            <div class="header__slider__box__item__infor col-lg-12 col-md-12 col-12">
                                <div class="header__slider__box__item__infor__slogan">
                                    <p>Find Any <span>Medicine</span></p>
                                    <p>You Need!</p>
                                    <p>Free Standard Shipping Everyday</p>
                                </div>
                                <a href="">Shop Now</a>
                                <div class="header__slider__box__item__infor-button"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <div class="header__slider-prev">
                    <i class="fas fa-chevron-left" aria-hidden="true"></i>
                </div>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <div class="header__slider-next">
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </div>
            </a>
        </div>


    </header>

    <div class="content">


        <div class="content__fact">
            <div class="container">
                    <div class="content__fact__box row">
                        <div class="content__fact__box__item col-sm-6 col-md-6 col-lg-3">
                            <div class="content__fact__box__item__icon">
                                <img src="assets/images/fact/ship.png" alt="ship">
                            </div>
                            <div class="content__fact__box__item__infor">
                                <p>Free Shipping</p>
                                <p>Free shipping for all US order</p>
                            </div>
                        </div>
                        <div class="content__fact__box__item col-sm-6 col-md-6 col-lg-3">
                            <div class="content__fact__box__item__icon">
                                <img src="assets/images/fact/support.png" alt="support">
                            </div>
                            <div class="content__fact__box__item__infor">
                                <p>Support 24/7</p>
                                <p>We support 24 hours a day</p>
                            </div>
                        </div>
                        <div class="content__fact__box__item col-sm-6 col-md-6 col-lg-3">
                            <div class="content__fact__box__item__icon">
                                <img src="assets/images/fact/day.png" alt="30days">
                            </div>
                            <div class="content__fact__box__item__infor">
                                <p>30 Days Return</p>
                                <p>You have 30 days to return</p>
                            </div>
                        </div>
                        <div class="content__fact__box__item col-sm-6 col-md-6 col-lg-3">
                            <div class="content__fact__box__item__icon">
                                <img src="assets/images/fact/payment.png" alt="payment">
                            </div>
                            <div class="content__fact__box__item__infor">
                                <p>Secure Payments</p>
                                <p>100% Secure & Safe</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        <div class="content__banner">
            <div class="container">
                <div class="content__banner__box">
                    <div class="content__banner__box__first">
                        <a href="">
                            <img src="assets/images/banner3.jpg" alt="">
                        </a>
                        <div class="content__banner__box__first__time">
                            <div class="content__banner__box__first__time-item">
                                <span>230</span>
                                <p>DAYS</p>
                            </div>
                            <div class="content__banner__box__first__time-item">
                                <span>24</span>
                                <p>HRS</p>
                            </div>
                            <div class="content__banner__box__first__time-item">
                                <span>40</span>
                                <p>MINS</p>
                            </div>
                            <div class="content__banner__box__first__time-item">
                                <span>60</span>
                                <p>SEC</p>
                            </div>
                        </div>
                        <div class="content__banner__box__first__infor">
                            <div class="content__banner__box__first__infor__slogan">
                                <b>BEAUTY & COSMETICS</b>
                                <p>Sale up to <span>40%</span> off</p>
                            </div>
                        </div>
                    </div>
                    <div class="content__banner__box__second">
                        <div class="content__banner__box__second-one">
                            <a href="">
                                <img src="assets/images/project_07.jpg" alt="">
                            </a>
                            <div class="content__banner__box__second-one__infor">
                                <div class="content__banner__box__second-one__infor__slogan">
                                    <span>30%</span>
                                    <p>DISCOUNT</p>
                                    <p>For Dietary Supplement</p>
                                </div>
                            </div>
                        </div>
                        <div class="content__banner__box__second-two">
                            <a href="">
                                <img src="assets/images/project_10.jpg" alt="">
                            </a>
                            <div class="content__banner__box__second-two__infor">
                                <div class="content__banner__box__second-two__infor__slogan">
                                    <p>ACCESSORIES</p>
                                    <p>Sale up to <span>20%</span> off</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="content__sell">

                <div class="content__sell__top">

                        <div class="content__sell__top__title">
                            <p>TOP SELLING</p>
                        </div>
                        <div class="content__sell__top__undertitle">
                            <p>PRODUCTS</p>
                        </div>

                        <div class="content__sell__top__button">
                            <span id="prev" ><i class="fas fa-chevron-left"></i></span>
                            <span id="next" ><i class="fas fa-chevron-right"></i></span>
                        </div>

                </div>

                <div class="content__sell__slider product-slider">

                    <div class="content__sell__slider__box">

                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling1.png" alt=""></a>
                                    </div>
                                    <p><a href="">Nature's Bounty Biotin</a></p>
                                    <p><a href="">10000 MCG</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling2.png" alt=""></a>
                                    </div>
                                    <p><a href="">Best Colon Detox Formula</a></p>
                                    <p><a href="">Advanced Colon</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling3.png" alt=""></a>
                                    </div>
                                    <p><a href="">Natural Factors Vitamin C</a></p>
                                    <p><a href="">Blueberry Rasp</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling4.png" alt=""></a>
                                    </div>
                                    <p><a href="">Jarrow Formulas</a></p>
                                    <p><a href="">Methylcobalamin</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling5.png" alt=""></a>
                                    </div>
                                    <p><a href="">Nature's Bounty Biotin</a></p>
                                    <p><a href="">10000 MCG...</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling6.png" alt=""></a>
                                    </div>
                                    <p><a href="">Best Colon Detox Formula</a></p>
                                    <p><a href="">Advanced Colon...</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling7.png" alt=""></a>
                                    </div>
                                    <p><a href="">Natural Factors Vitamin C</a></p>
                                    <p><a href="">Blueberry Rasp...</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                    <div class="content__sell__slider__box-img">
                                        <a href=""><img src="assets/images/selling/selling8.png" alt=""></a>
                                    </div>
                                    <p><a href="">Jarrow Formulas</a></p>
                                    <p><a href="">Methylcobalamin</a></p>
                                    <p><a href="">$30.00</a></p>
                                </div>
                            </div>

                    </div>

                    <div class="content__sell__slider__box">

                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling1.png" alt=""></a>
                                </div>
                                <p><a href="">Nature's Bounty Biotin</a></p>
                                <p><a href="">10000 MCG</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling2.png" alt=""></a>
                                </div>
                                <p><a href="">Best Colon Detox Formula</a></p>
                                <p><a href="">Advanced Colon</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling3.png" alt=""></a>
                                </div>
                                <p><a href="">Natural Factors Vitamin C</a></p>
                                <p><a href="">Blueberry Rasp</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling4.png" alt=""></a>
                                </div>
                                <p><a href="">Jarrow Formulas</a></p>
                                <p><a href="">Methylcobalamin</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling5.png" alt=""></a>
                                </div>
                                <p><a href="">Nature's Bounty Biotin</a></p>
                                <p><a href="">10000 MCG...</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling6.png" alt=""></a>
                                </div>
                                <p><a href="">Best Colon Detox Formula</a></p>
                                <p><a href="">Advanced Colon...</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling7.png" alt=""></a>
                                </div>
                                <p><a href="">Natural Factors Vitamin C</a></p>
                                <p><a href="">Blueberry Rasp...</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
                                <div class="content__sell__slider__box-img">
                                    <a href=""><img src="assets/images/selling/selling8.png" alt=""></a>
                                </div>
                                <p><a href="">Jarrow Formulas</a></p>
                                <p><a href="">Methylcobalamin</a></p>
                                <p><a href="">$30.00</a></p>
                            </div>
                        </div>

                    </div>

                </div>


            </div>


        </div>


        <div class="content__news">
            <div class="container">
                <div class="content__news__title">
                    <p>LATEST NEWS</p>
                </div>

                <div class="content__news__undertitle">
                    <p>HOT NEWS</p>
                </div>

                <div class="content__news__box">

                    <div class="content__news__box__item">
                        <a href=""><img src="assets/images/new/new1.png" alt=""></a>
                        <p><a href="">Probiotics may help battle antibiotic resistance Probiotics may help</a></p>
                        <p>14 June 2018 by <a href="">Admin</a></p>
                    </div>
                    <div class="content__news__box__item">
                        <a href=""><img src="assets/images/new/new2.png" alt=""></a>
                        <p><a href="">Study overturns what we know about kidney stones</a></p>
                        <p>14 June 2018 by <a href="">Admin</a></p>
                    </div>
                    <div class="content__news__box__item">
                        <a href=""><img src="assets/images/new/new3.png" alt=""></a>
                        <p><a href="">Hair loss: Scientists test wearable re-growth device</a></p>
                        <p>14 June 2018 by <a href="">Admin</a></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="content__newsletter">
            <div class="container">
                <div class="content__newsletter__title">
                    <p>Keep Updated & Get Unlimited Discount</p>
                </div>
                <div class="content__newsletter__description">
                    <p>Sign up for our newsletter to receive updates and exclusive offers</p>
                </div>
                <div class="content__newsletter__search">
                    <input type="email" placeholder="Enter your email address here">
                    <button type="button">SIGN UP</button>
                </div>
            </div>
        </div>


        <div class="content__brand">
            <div class="container">
                <div class="content__brand__row">
                    <div class="content__brand__row__item1">
                        <img src="assets/images/brand/brand1.png" alt="">
                    </div>
                    <div class="content__brand__row__item2">
                        <img src="assets/images/brand/brand2.png" alt="">
                    </div>
                    <div class="content__brand__row__item3">
                        <img src="assets/images/brand/brand3.png" alt="">
                    </div>
                    <div class="content__brand__row__item4">
                        <img src="assets/images/brand/brand4.png" alt="">
                    </div>
                    <div class="content__brand__row__item5">
                        <img src="assets/images/brand/brand5.png" alt="">
                    </div>
                </div>
            </div>
        </div>


    </div>

    
    <footer class="footer">


        <div class="container">
            <div class="row footer__infor">
                <div class="col-lg-3 col-md-3 col-sm-8 col-8 footer__infor__contact">
                    <p>CONTACT US</p>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> <a href="">Lorem ipsum has been the indus-try's standard</a></li>
                        <li><i class="far fa-envelope"></i> <a href="">contact@medic.com</a></li>
                        <li><i class="fas fa-mobile-alt"></i> <a href="">+84 (1) 234 567 891</a></li>

                    </ul>
                    <div class="footer__infor__contact__icon">
                        <a href=""><i class="fab fa-facebook-f"></i> </a>
                        <a href=""><i class="fab fa-twitter"></i> </a>
                        <a href=""><i class="fab fa-google-plus-g"></i> </a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-3 footer__infor__company">
                    <p>COMPANY</p>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Team Member</a></li>
                        <li><a href="">Carrer</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Affilate</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-8 col-8 footer__infor__cate">
                    <p>CATEGORIES</p>
                    <ul>
                        <li><a href="">Home medicine</a></li>
                        <li><a href="">Baby & Child</a></li>
                        <li><a href="">Diet & Nutrition</a></li>
                        <li><a href="">Beauty</a></li>
                        <li><a href="">Fitness & vitamins</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-3 footer__infor__link">
                    <p>QUICK LINKS</p>
                    <ul>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Store Location</a></li>
                        <li><a href="">Orders Tracking</a></li>
                        <li><a href="">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 footer__copyright__author">
                        <p>@2018 Design by <a href="">Creative Wp</a> All Rights Reserved</p>
                    </div>
                    <div class="col-12 col-md-6 footer__copyright__icon">
                        <img src="assets/images/bank.png" alt="">
                    </div>
                </div>
            </div>
        </div>


    </footer>


    <!-- Optional JavaScript -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>