<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
     <link href="{{ asset('css2/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <!-- main css -->
            <link href="{{ asset('css2/style.css') }}" rel="stylesheet">

    <!-- font awesome -->
    {{-- <link rel="stylesheet" href="css/all.css"> --}}
    <link href="{{ asset('css2/all.css') }}" rel="stylesheet">



    <title>Metameta-shop</title>
    <style>

    </style>
</head>

<body>
    <!-- header -->
    <header>
        <!-- navbar  -->
        <!--
https://www.iconfinder.com/icons/2427887/dessert_donut_doughnut_fat_sweets_icon
Creative Commons (Attribution 3.0 Unported);
https://www.iconfinder.com/korawan_m
     -->
        <nav class="navbar navbar-expand-lg px-4">
            <a class="navbar-brand" href="#"><img src="img/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
        <span class="toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav mx-auto text-capitalize">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">store</a>
                    </li>
                     <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
                        {{-- <span class="info-icon mx-lg-3"><i class="fas fa-phone"></i></span> --}}
                            <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                            </li>
                         <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                            </li>
                            {{-- <li class="nav-item">

                            <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                        <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart"></i></span>
                        <p class="mb-0 text-capitalize"><span id="item-count"> </span> items - $<span class="item-total"></span></p>
                                                    </li> --}}

                    </div>
                 </div>

                </ul>
                <div class="nav-info-items d-none d-lg-flex ">
                    <!-- single info -->
                    <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
                        <span class="info-icon mx-lg-3"><i class="fas fa-phone"></i></span>
                        <p class="mb-0">+ 254 798 288 410</p>
                    </div>



                    <!-- end of single info -->
                    <!-- single info -->
                    <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                        <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart"></i></span>
                        <p class="mb-0 text-capitalize"><span id="item-count"> </span> items - $<span class="item-total"></span></p>
                    </div>
                    <!-- end of single info -->
                </div>
            </div>
        </nav>
        <!-- end of nav -->
        <!-- banner  -->
        <div class="container-fluid">
            <div class="row max-height justify-content-center align-items-center">
                <div class="col-10 mx-auto banner text-center">
                    <h1 class="text-capitalize">welcome to <strong class="banner-title ">Metameta shop</strong></h1>
                    <a href="#store" class="btn banner-link text-uppercase my-2">explore</a>

                </div>
                <div id="cart" class="cart">
                    <!-- cart item -->
                    <div class="cart-item d-flex justify-content-between text-capitalize my-3">
                        <img src="img-cart/cake-2.jpeg" class="img-fluid rounded-circle" id="item-img" alt="">
                        <div class="item-text">

                            <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
                            <span>$</span>
                            <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
                        </div>
                        <a href="#" id='cart-item-remove' class="cart-item-remove">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                    <!--end of  cart item -->
                    <!-- cart item -->
                    <div class="cart-item d-flex justify-content-between text-capitalize my-3">
                        <img src="img-cart/doughnut-2.jpeg" class="img-fluid rounded-circle" id="item-img" alt="">
                        <div class="cart-item-text">

                            <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
                            <span>$</span>
                            <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
                        </div>
                        <a href="#" id='cart-item-remove' class="cart-item-remove">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                    <!--end of  cart item -->
                    <!-- cart total -->
                    <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
                        <h5>total</h5>
                        <h5> $ <strong id="cart-total" class="font-weight-bold">10.00</strong> </h5>
                    </div>
                    <!--end cart total -->
                    <!-- cart buttons -->
                    <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                        <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
                        <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">checkout</a>
                    </div>
                    <!--end of  cart buttons -->
                    <!--  -->
                </div>
            </div>
        </div>




        <!--end of  banner  -->
    </header>
    <!-- header -->
    <!-- about us -->
    <section class="about py-5" id="about">
        <div class="container">

            <div class="row">
                <div class="col-10 mx-auto col-md-6 my-5">
                    <h1 class="text-capitalize">about <strong class="banner-title ">us</strong></h1>
                    <p class="my-4 text-muted w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam voluptas beatae vitae expedita consectetur nesciunt quia deserunt asperiores facere fuga dicta fugiat corrupti et omnis porro at dolorum! Ad!</p>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase ">explore</a>

                </div>
                <div class="col-10 mx-auto col-md-6 align-self-center my-5">
                    <div class="about-img__container">
                        <img src="img/sweets-1.jpeg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of about us -->


    <!-- store -->
    <section id="store" class="store py-5">
        <div class="container">
            <!-- section title -->
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">our <strong class="banner-title ">store</strong></h1>
                </div>
            </div>
            <!-- end of section title -->
            <!--filter buttons -->
            <div class="row">
                <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="all"> all</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cakes">cakes</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cupcakes">cupcakes</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="sweets">sweets</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="doughnuts">doughnuts</a>
                </div>
            </div>
            <!-- search box -->
            <div class="row">

                <div class="col-10 mx-auto col-md-6">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend ">
                                <span class="input-group-text search-box" id="search-icon"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder='item....' id="search-item">
                        </div>

                    </form>
                </div>
            </div>
            <!--end of filter buttons -->
            <!-- store  items-->
            <div class="row" class="store-items" id="store-items">
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/sweets-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cupcake-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cupcake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cake-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/doughnut-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                    </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">dougnut item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/sweets-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon"><i class="fas fa-shopping-cart"></i>
                            </span>
                        </div>
                    <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div> --}}
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cupcake-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cupcake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cake-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/doughnut-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">dougnut item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/sweets-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cupcake-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cupcake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cake-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/doughnut-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">dougnut item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->

            </div>
    </section>
    <!--end of store items -->


    <!-- modal-container -->
    <div class="container-fluid ">
        <div class="row lightbox-container align-items-center">
            <div class="col-10 col-md-10 mx-auto text-right lightbox-holder">
                <span class="lightbox-close"><i class="fas fa-window-close"></i></span>
                <div class="lightbox-item"></div>
                <span class="lightbox-control btnLeft"><i class="fas fa-caret-left"></i></span>
                <span class="lightbox-control btnRight"><i class="fas fa-caret-right"></i></span>
            </div>

        </div>
    </div>


    <!-- jquery -->
    <script src="js2/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js2/bootstrap.bundle.min.js"></script>
    <!-- script js -->
    <script src="js2/app.js"></script>
</body>

</html>
