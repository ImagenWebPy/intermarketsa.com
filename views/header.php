<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $this->title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/fonts/linearicons-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/slick/slick.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/lightbox2/css/lightbox.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/vendor/revolution/css/settings.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?= URL; ?>public/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body class="animsition">
        <!-- Header -->
        <header class="header-v1">
            <!-- Header desktop -->
            <div class="container-menu-desktop">
                <div class="wrap-menu-desktop">
                    <nav class="limiter-menu-desktop">
                        <div class="left-header">
                            <!-- Logo desktop -->		
                            <div class="logo">
                                <a href="index.html"><img src="<?= URL; ?>public/images/logo-short.png" alt="International Market"></a>
                            </div>
                        </div>
                        <div class="left-header">
                            <!-- Menu desktop -->
                            <div class="menu-desktop">
                                <ul class="main-menu">
                                    <li class="active-menu"><a href="<?= URL; ?>">Inicio</a></li>
                                    <li><a href="#">Sobre Nosotros</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Nuestros Productos</a></li>
                                            <li><a href="#">Nuestros Procesos</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Nuestros Productos</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Chia</a></li>
                                            <li><a href="#">Sesamo</a></li>
                                            <li><a href="#">Maní</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Certificaciones</a></li>
                                    <li>
                                        <a href="#">Logistica</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Embarque</a></li>
                                            <li><a href="#">Carga a contenedor</a></li>
                                            <li><a href="#">Carga a contenedor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Calidad</a></li>
                                    <li><a href="#">Neo Pure</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </div>	
                        </div>
                        <div class="right-header">
                            <!-- Icon header -->
                            <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                                <div class="h-full flex-m">
                                    <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                                        <img src="<?= URL; ?>public/images/icons/icon-search.png" alt="Buscat">
                                    </div>
                                </div>

<!--                                <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
                                    <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
                                        <img src="<?= URL; ?>public/images/icons/icon-cart-2.png" alt="CART">
                                    </div>

                                    <div class="cart-header menu-click-child trans-04">
                                        <div class="bo-b-1 bocl15">
                                            <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                                                 cart header item 
                                                <div class="flex-w flex-str m-b-25">
                                                    <div class="size-w-15 flex-w flex-t">
                                                        <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                                            <img src="<?= URL; ?>public/images/item-cart-01.jpg" alt="PRODUCT">
                                                        </a>

                                                        <div class="size-w-17 flex-col-l">
                                                            <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                                                Cheery
                                                            </a>

                                                            <span class="txt-s-101 cl9">
                                                                18$
                                                            </span>

                                                            <span class="txt-s-109 cl12">
                                                                x2
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="size-w-14 flex-b">
                                                        <button class="lh-10">
                                                            <img src="<?= URL; ?>public/images/icons/icon-close.png" alt="CLOSE">
                                                        </button>
                                                    </div>
                                                </div>

                                                 cart header item 
                                                <div class="flex-w flex-str m-b-25">
                                                    <div class="size-w-15 flex-w flex-t">
                                                        <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                                            <img src="<?= URL; ?>public/images/item-cart-02.jpg" alt="PRODUCT">
                                                        </a>

                                                        <div class="size-w-17 flex-col-l">
                                                            <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                                                Asparagus
                                                            </a>

                                                            <span class="txt-s-101 cl9">
                                                                12$
                                                            </span>

                                                            <span class="txt-s-109 cl12">
                                                                x1
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="size-w-14 flex-b">
                                                        <button class="lh-10">
                                                            <img src="<?= URL; ?>public/images/icons/icon-close.png" alt="CLOSE">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="flex-w flex-sb-m p-t-22 p-b-12">
                                            <span class="txt-m-103 cl3 p-r-20">
                                                Subtotal
                                            </span>

                                            <span class="txt-m-111 cl6">
                                                48$
                                            </span>
                                        </div>

                                        <div class="flex-w flex-sb-m p-b-31">
                                            <span class="txt-m-103 cl3 p-r-20">
                                                Total
                                            </span>

                                            <span class="txt-m-111 cl10">
                                                48$
                                            </span>
                                        </div>

                                        <a href="checkout.html" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                            check out
                                        </a>	
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </nav>
                </div>	
            </div>

            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->		
                <div class="logo-mobile">
                    <a href="index.html"><img src="<?= URL; ?>public/images/icons/logo-01.png" alt="IMG-LOGO"></a>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
                    <div class="h-full flex-m">
                        <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                            <img src="<?= URL; ?>public/images/icons/icon-search.png" alt="SEARCH">
                        </div>
                    </div>

                    <div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
                        <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
                            <img src="<?= URL; ?>public/images/icons/icon-cart-2.png" alt="CART">
                        </div>

                        <div class="cart-header menu-click-child trans-04">
                            <div class="bo-b-1 bocl15">
                                <!-- cart header item -->
                                <div class="flex-w flex-str m-b-25">
                                    <div class="size-w-15 flex-w flex-t">
                                        <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                            <img src="<?= URL; ?>public/images/item-cart-01.jpg" alt="PRODUCT">
                                        </a>

                                        <div class="size-w-17 flex-col-l">
                                            <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                                Cheery
                                            </a>

                                            <span class="txt-s-101 cl9">
                                                18$
                                            </span>

                                            <span class="txt-s-109 cl12">
                                                x2
                                            </span>
                                        </div>
                                    </div>

                                    <div class="size-w-14 flex-b">
                                        <button class="lh-10">
                                            <img src="<?= URL; ?>public/images/icons/icon-close.png" alt="CLOSE">
                                        </button>
                                    </div>
                                </div>

                                <!-- cart header item -->
                                <div class="flex-w flex-str m-b-25">
                                    <div class="size-w-15 flex-w flex-t">
                                        <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                            <img src="<?= URL; ?>public/images/item-cart-02.jpg" alt="PRODUCT">
                                        </a>

                                        <div class="size-w-17 flex-col-l">
                                            <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                                Asparagus
                                            </a>

                                            <span class="txt-s-101 cl9">
                                                12$
                                            </span>

                                            <span class="txt-s-109 cl12">
                                                x1
                                            </span>
                                        </div>
                                    </div>

                                    <div class="size-w-14 flex-b">
                                        <button class="lh-10">
                                            <img src="<?= URL; ?>public/images/icons/icon-close.png" alt="CLOSE">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-sb-m p-t-22 p-b-12">
                                <span class="txt-m-103 cl3 p-r-20">
                                    Subtotal
                                </span>

                                <span class="txt-m-111 cl6">
                                    48$
                                </span>
                            </div>

                            <div class="flex-w flex-sb-m p-b-31">
                                <span class="txt-m-103 cl3 p-r-20">
                                    Total
                                </span>

                                <span class="txt-m-111 cl10">
                                    48$
                                </span>
                            </div>

                            <a href="checkout.html" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                check out
                            </a>	
                        </div>
                    </div>
                </div>

                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>


            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="main-menu-m">
                    <li>
                        <a href="index.html">Home</a>
                        <ul class="sub-menu-m">
                            <li><a href="index.html">Homepage 1</a></li>
                            <li><a href="home-02.html">Homepage 2</a></li>
                            <li><a href="home-03.html">Homepage 3</a></li>
                            <li><a href="home-04.html">Homepage 4</a></li>
                            <li><a href="home-05.html">Homepage 5</a></li>
                            <li><a href="home-06.html">Homepage 6</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="#">Page</a>
                        <ul class="sub-menu-m">
                            <li><a href="about-01.html">About 1</a></li>
                            <li><a href="about-02.html">About 2</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="error.html">404 Error</a></li>
                            <li><a href="checkout.html">CheckOut</a></li>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="account-lost-pass.html">My Account Lost Pass</a></li>
                            <li><a href="account-register.html">My Account Register</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="shop-sidebar-grid.html">Shop</a>
                        <ul class="sub-menu-m">
                            <li><a href="shop-sidebar-grid.html">Shop Sidebar Grid</a></li>
                            <li><a href="shop-sidebar-list.html">Shop Sidebar List</a></li>
                            <li><a href="shop-product-grid.html">Shop Product Grid</a></li>
                            <li><a href="shop-product-list.html">Shop Product List</a></li>
                            <li><a href="product-single.html">Product Single</a></li>
                            <li><a href="shop-cart.html">Shop Cart</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="blog-list.html">Blog</a>
                        <ul class="sub-menu-m">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid-01.html">Blog Grid 1</a></li>
                            <li><a href="blog-grid-02.html">Blog Grid 2</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="gallery-01.html">Gallery</a>
                        <ul class="sub-menu-m">
                            <li><a href="gallery-01.html">Gallery 1</a></li>
                            <li><a href="gallery-02.html">Gallery 2</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="contact-01.html">Contact</a>
                        <ul class="sub-menu-m">
                            <li><a href="contact-01.html">Contact 1</a></li>
                            <li><a href="contact-02.html">Contact 2</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Modal Search -->
            <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <span class="lnr lnr-cross"></span>
                </button>

                <div class="container-search-header">
                    <form class="wrap-search-header flex-w">
                        <button class="flex-c-m trans-04">
                            <span class="lnr lnr-magnifier"></span>
                        </button>
                        <input class="plh1" type="text" name="search" placeholder="Buscar...">
                    </form>
                </div>
            </div>
        </header>