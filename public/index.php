
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="./img/bep.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="index-content.css">
  <link rel="stylesheet" href="index.css">
  <title>TASHA   Home Page
  </title>
  <style>
    #login_render a{
      text-overflow: ellipsis;
      overflow: hidden;
      word-break: break-all;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 1;
    }

    input#user_name, input#password{
      width: 85%; 
      height: 52px; 
      border-radius: 0px; 
      border-left: 3px solid #00c6d7";
    }

    @media (max-width:580px){

      input#user_name, input#password{
      width: 100%; 
      }
      
      i.p-3.float-end{
        display: none;
      }
    }
  </style>
</head>
<body id="reponsive-font-size">
<div class="main">
  <!-- Header -->
  <header id="myHeader" class="header-main position-fixed">

    <div class="container">
      <div class="row header-height">

        <!-- Logo -->
        <div class="col-lg-2 col-sm-3 col-3 align-self-center">
          <!--icon-bars-->
          <label for="nav-mobile-input" class="nav-mobil-bars"><i class="fas fa-bars"></i></label>
          <div class="logo">
            <a href="./HRKitchen.html">
              <img style="width: 90%;height: 87px" src="./img/bep.jpg">
            </a>
          </div>
        </div>
        <div class="logo-none-lap col-sm-6 col-6">
          <div class="logo-mb-header d-flex justify-content-center">
            <div style="width: 90px">
              <a href="./HRKitchen.html">
                <img style="height: 48px" src="./img/bep.jpg">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-sm-3 col-3 order-lg-3 align-self-center">

          <div class="d-flex justify-content-end">
            <div class="main-nav col d-lex align-self-center menu-header-lap">
              <a class="nav-item active t-home" href="./HRKitchen.html">Home Page</a>
              <div class="dropdown d-inline">
                <a class="nav-item t-product" href="Display-Component/AllProduct.html">Product</a>
                <div class="dropdown-menu p-0" style="border-radius: 0;top:55px;left: 0"
                     aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item dropdown-link" href="Display-Component/CookWare1.html">Cookware</a>
                  <a class="dropdown-item dropdown-link" href="Display-Component/Freezers.html">Refrigeration</a>
                  <a class="dropdown-item dropdown-link" href="Display-Component/Appliances.html">Appliances</a>
                  <a class="dropdown-item dropdown-link" href="Display-Component/FoodStorage.html">Food Storage</a>
                </div>
              </div>
              <a class="nav-item t-blog" href="./Appliances/blog/blog.html">Blog Review</a>
              <a class="nav-item t-abouts" href="./Food%20Storage/AboutUs.html">About Us</a>
              <a class="nav-item t-contact" href="Appliances/Contact/Contract%20Us.html">Contact</a>
            </div>

            <input type="checkbox" class="nav__input" id="nav-mobile-input">
            <label for="nav-mobile-input" class="nav__overlay"></label>
            <div class="nav-mobile" id="nav-mobile-respon">
              <label for="nav-mobile-input" class="nav-mobile-close">
                <i class="fas fa-times" style="margin: 7px 0;"></i>
              </label>
              <div class="nav-mobile-list" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
                <div class="pd-menu-mb" id="myScrollspy">
                  <div class="wrap-logo-mb">
                    <a href="./HRKitchen.html" class="logo-mobile">
                      <img style="width: 100%;" src="./img/bep.jpg">
                    </a>
                  </div>
                  <div class="pd-top-nav-mn">
                    <div class="wrap-mobile-link">
                      <i class="fas fa-home"></i>
                      <a class="nav-mobile-link" href=""> Home</a>
                    </div>
                    <div class="wrap-mobile-link" style="position: relative">
                      <i class="fas fa-hamburger" style="position: absolute;"></i>
                      <div class="dropdown transition-drop" style="margin-left: 35px;position: static;width: 86%;">
                        <a class="nav-mobile-link" href="Display-Component/AllProduct.html">Product</a>
                        <ul class="dropdown-menu position-static" style="border-radius: 0;border: 0;padding: 0;">
                          <li><a href="Display-Component/CookWare1.html">Cookware</a></li>
                          <li><a href="Display-Component/Freezers.html">Refrigeration</a></li>
                          <li><a href="Display-Component/Appliances.html">Appliances</a></li>
                          <li><a href="Display-Component/FoodStorage.html">Food Storage</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="wrap-mobile-link">
                      <i class="fas fa-blog"></i>
                      <a class="nav-mobile-link" href="./Appliances/blog/blog.html">Blog review</a>
                    </div>
                    <div class="wrap-mobile-link">
                      <i class="fas fa-address-card"></i>
                      <a class="nav-mobile-link" href="./Food%20Storage/AboutUs.html">About Us</a>
                    </div>
                    <div class="wrap-mobile-link">
                      <i class="fas fa-shopping-cart"></i>
                      <a class="nav-mobile-link" href="Display-Component/shopping-cart.html">Shopping Cart</a>
                    </div>
                    <div class="wrap-mobile-link">
                      <i class="fas fa-comment-alt"></i>
                      <a class="nav-mobile-link" href="Appliances/Contact/Contract%20Us.html">Contact Us</a>
                    </div>
                    <div class="wrap-mobile-link border-0">
                      <i class="fas fa-power-off"></i>
                      <button type="button" style="background: none;border: none;padding: 0"
                              class="btn-account" id="login_render-mobile" data-bs-target="#lgBackdrop">
                        <a class="nav-mobile-link"  onclick="showModal()">Log In</a>
                      </button>
                    </div>
                  </div>
                </div>

              </div>
            </div>


            <div class="shopping-cart d-flex justify-content-center">
              <div class="align-self-center">
                  <a class="color-cart" href="Display-Component/shopping-cart.html"><i
                          class="fas fa-shopping-cart"><span id="number_Of_Item">0</span></i></a>
              </div>
          </div>
            <div class="wrap-log-in d-flex justify-content-center" id="login_render" style="width: 100px">
              <div class="log-in align-self-center">
                <button type="button" style="background: none;border: none; padding: 10px 14px;"
                        class="btn-account" onclick="showModal()" data-bs-target="#lgBackdrop">
                  <a class="color-cart"><b style="font-size: 14px;display: flex">Log In</b></a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class="banner position-relative" style="margin-top: 80px;">
    <div class="w-100 position-absolute top-0 end-0 start-0" style="z-index: 1; background-color: #0b0c10; height: 100vh; opacity: 0.1"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active position-relative text-center">
          <img src="img/slider-2.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
          <div class="position-absolute start-50 bottom-50" style="z-index: 100; transform: translate(-50%, 50%);">
            <h3 class="text-warning text-capitalize fst-italic" style="font-weight: 400 ">Welcome to TASHA !</h3>
            <h1 class="text-uppercase display-3 text-warning">It's nice to meet you</h1>
            <a href="Display-Component/AllProduct.html" class="btn btn-dark">Shop Now</a>
          </div>
        </div>
        <div class="carousel-item position-relative text-center">
          <img src="img/slider-1.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
          <div class="position-absolute start-50 bottom-50" style="z-index: 100; transform: translate(-50%, 50%);">
            <h3 class="text-warning text-capitalize fst-italic" style="font-weight: 400;">Welcome to TASHA !</h3>
            <h1 class="text-uppercase display-3 text-warning">It's nice to meet you</h1>
            <a href="Display-Component/AllProduct.html" class="btn btn-dark">Shop Now</a>
          </div>
        </div>
        <div class="carousel-item position-relative text-center">
          <img src="img/slider-3.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
          <div class="position-absolute start-50 bottom-50" style="z-index: 100; transform: translate(-50%, 50%);">
            <h3 class="text-warning text-capitalize fst-italic" style="font-weight: 400;">Welcome to TASHA !</h3>
            <h1 class="text-uppercase display-3 text-warning">It's nice to meet you</h1>
            <a href="Display-Component/AllProduct.html" class="btn btn-dark">Shop Now</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </div>

  <!--== 6. About us ==-->
  <section id="about" class="about">
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row dis-table">
          <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

          </div>
          <div class="col-xs-12 col-sm-6 dis-table-cell">
            <div class="section-content">
              <h3 class="section-content-title">About us</h3>
              <p class="section-content-para">
                TASHA  company with the purpose of specializing in the business segment: providing equipment and tools for restaurants - hotels at home and abroad.
              </p>
              <p class="section-content-para">
                With the goal of becoming a leading consultant, supplier of restaurant equipment - hotel in Vietnam, We are always at the forefront of providing quality products, international standards of brands. such as: Sirman Luigi Bormioli Pintinox (Italy), Rational Winterhalter (Germany), Ice O Matic (USA), Champion Image Royal (Thailand), Tiger (Korea), Berjaya (Malaysia), EAST (China), Minh Long (Vietnam), … Along with the pride of being a full service provider of Consulting – Design, Supply – Installation, Warranty – Maintenance services, prestige, quality and always receive high appreciation. From customers, we would like to introduce to you the product lines we provide including:
              </p>
            </div> 
          </div>
        </div> 
      </div> 
    </div> 
  </section> 

<!--  Modal Sign In -->
  <div  class="modal fade" id="lgBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="lgBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lgBackdropLabel">Sign In</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-12 mt-3">
            <label for="user_name" style="font-weight: 500;">User Name</label>
            <input id="user_name" class="form-control d-inline-block" type="text" >
            <i class="fas fa-user p-3 float-end" style="color:white; background-color: #00c6d7; font-size:20px"></i>
          </div>
          <div class="col-12 mt-3">
            <label for="password" style="font-weight: 500;">Password</label>
            <input id="password" class="form-control d-inline-block" type="password">
            <i class="fas fa-lock p-3 float-end" style="color:white; background-color: #00c6d7; font-size:20px"></i>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center" style="border: 0px">
          <div id="error_login"></div>
          <button type="button" class="btn btn-info text-white w-100" style="border-radius: 0px; height: 52px" onclick="checkLogin()">Sign In</button>
          <span style="color:black;">Don't have an Account.<a href="Display-Component/Sign-Up.html">   Sign Up Now ! </a></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="mt-2 mt-lg-5 mt-md-4 mt-sm-3">
      <div class="row">

        <div class="col-xxl-12 col-xl-12 col-lg-12">
          <div class="heading-minimal">
            <h3 class="head-title">Product Category </h3>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6 category-items-new">
          <div class="category-main">
            <a href="Display-Component/CookWare1.html">
              <img
                      loading="lazy" alt="" class="cate-images"
                      src="./img/sp1.jpg" style="object-fit: cover;width: 61% !important;border-radius: 50%"></a>
            <div class="category-text-box">
              <div class="category-text-inner">
                <a href="Display-Component/CookWare1.html">
                  <h3>Cookware</h3>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6 category-items-new">
          <div class="category-main">
            <a href="Display-Component/Freezers.html">
              <img
                      loading="lazy" alt="" class="cate-images"
                      src="./img/Freezers2.jpg" style="object-fit: cover;width: 61% !important;border-radius: 50%"></a>
            <div class="category-text-box">
              <div class="category-text-inner">
                <a href="Display-Component/Freezers.html">
                  <h3>Refrigeration</h3>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6 category-items-new">
          <div class="category-main">
            <a href="Display-Component/Appliances.html">
              <img
                      loading="lazy" alt="" class="cate-images"
                      src="./Appliances/singleproduct/img/FoodChoppers2.jpg" style="object-fit: cover;width: 61% !important;border-radius: 50%"></a>
            <div class="category-text-box">
              <div class="category-text-inner">
                <a href="Display-Component/Appliances.html">
                  <h3>Appliances</h3>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6 category-items-new">
          <div class="category-main">
            <a href="Display-Component/FoodStorage.html">
              <img
                      loading="lazy" alt="" class="cate-images"
                      src="./Food%20Storage/product4.jpg" style="object-fit: cover;width: 61% !important;border-radius: 50%"></a>
            <div class="category-text-box">
              <div class="category-text-inner">
                <a href="Display-Component/FoodStorage.html">
                  <h3>Food Storage</h3>
                </a>
              </div>
            </div>
          </div>
        </div>

<!--        product-->
        <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
          <div class="heading-minimal">
            <h3 class="head-title">New Product</h3>
          </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
          <div class="row">
            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="Cookware/cookware/Detail-product-2.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="Cookware/cookware/product-2.jpg" alt=""/>
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="Cookware/cookware/Detail-product-2.html">
                        <div class="text-s1">Cooking Pan with Soft Bakelite Handle</div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                   $29.99
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="Cookware/cookware/Detail-product-2.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="Cookware/cookware/Detail-product-5.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="Cookware/cookware/product-5.jpg" alt="">
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="Cookware/cookware/Detail-product-5.html">
                        <div class="text-s1">Shradha Trading Aluminium Kadai</div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                   $24.99
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="Cookware/cookware/Detail-product-5.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="./Food%20Storage/Detail-product-3.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="./Food%20Storage/product3.jpg" alt="">
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="./Food%20Storage/Detail-product-3.html">
                        <div class="text-s1">Amazon Basics Vacuum Compression Storage Bags</div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                   $15
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="./Food%20Storage/Detail-product-3.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="./Food%20Storage/Detail-product-7.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="./Food%20Storage/product7.jpg" alt="">
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="./Food%20Storage/Detail-product-7.html">
                        <div class="text-s1">Goodful Lunch to Go Salad Container</div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                    $30
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="./Food%20Storage/Detail-product-7.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="Appliances/singleproduct/icecreammaker1.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="./Appliances/singleproduct/img/icecreammaker1.jpg" alt="">
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="Appliances/singleproduct/icecreammaker1.html">
                        <div class="text-s1">Cuisinart ICE-20 Automatic Ice Cream Maker</div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                   $69.95
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="Appliances/singleproduct/icecreammaker1.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="Appliances/singleproduct/blender2.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="./Appliances/singleproduct/img/blender2.jpg" alt="">
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="Appliances/singleproduct/blender2.html">
                        <div class="text-s1">NutriBullet NBY-50100 Baby Complete Food</div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                   $69.99
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="Appliances/singleproduct/blender2.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="Refrigeration/Detail/Detail-Freezers2.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="Refrigeration/Detail/Freezers2.jpg" alt="">
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="Refrigeration/Detail/Detail-Freezers2.html">
                        <div class="text-s1">YouCopia FreezeUp Freezer Bin, 15", Clear</div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                    $69.99
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="Refrigeration/Detail/Detail-Freezers3.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
              <div class="res-3-box">
                <div class="res-2-img parallex-new">
                  <a href="Refrigeration/Detail/Detail-Freezers3.html">
                    <img height="200px" width="100%" style="object-fit: cover"
                         src="Refrigeration/Detail/Freezers3.jpg" alt="">
                  </a>
                </div>
                <div class="res-2-bg-white">
                  <div class="res-2-inner">
                    <div class="res-2-text">
                      <a href="Refrigeration/Detail/Detail-Freezers3.html">
                        <div class="text-s1">Full Circle Scrap Happy Food Scrap Collector </div>
                      </a>
                    </div>
                  </div>
                  <div class="res-2-box">
                    <ul>
                      <li>
                        <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                   $69.99
                                                </span>
                          <span class="location-png wrap-adding">
                                                    <a href="Refrigeration/Detail/Detail-Freezers3.html">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="ndElDd">
        <g-more-link class="mIKy0c OSrXXb dGWpb">
          <hr class="pb5vrc">
          <div class="MXl0lf mtqGb">
            <span class="wUrVib OSrXXb">BENEFITS AT TASHA </span>
          </div>
        </g-more-link>
      </div>
    </div>

    <section>
      <div class="row my-lg-5 mt-0 my-sm-4 my-md-4">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 div-an-toan">
          <div class="icon-box-img mb-4">
            <i class="fas fa-hand-holding-heart fa-5x"></i>
          </div>
          <div class="icon-box-text">
            <h4 style="text-align: center;">Quality and safe products</h4>
            <p style="text-align: center;">all items TASHA  sells are quality products, safe and of clear origin.</p>
            <p style="text-align: center;">TASHA  has the most stringent quality standards to deliver quality products.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 div-dich-vu" style="border-left: 1px solid #ececec;">
          <div class="icon-box-img mb-4 check-img">
            <i class="fas fa-check fa-5x"></i>
          </div>
          <div class="icon-box-text last-reset text-center">
            <h4>Best service, free return.</h4>
            <p>We guarantee free returns for any reason.</p>
            <p>TASHA supports home delivery for customers.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 div-sale" style="border-left: 1px solid #ececec;">
          <div class="icon-box-img mb-4">
            <i class="fas fa-piggy-bank fa-5x"></i>
          </div>
          <div class="icon-box-text last-reset text-center">
            <h4>Promotions, gifts and discounts for gratitude</h4>
            <p>TASHA always wants customers to save more when shopping </p>
            <p>TASHA regularly has promotions, gifts, discounts for all its loyal customers.</p>
          </div>
        </div>
      </div>
    </section>

  </div>
  <footer class="text-left" style="background-color: #0b0c10;color: #c5c6c7">
    <section class="">
      <div class="container text-sm-left text-md-start mt-5">
        <div class="row pt-5 wrap-footer">
          <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3 col-8 mx-auto mb-lg-4 mb-md-4 mb-sm-3 img-nd">
            <h5 class="wrap-img-footer">
              <a href="HRKitchen.html" class="d-inline-block">
                <img style="width: 86%;height:80px;margin-right: 20px" src="./img/bep.jpg">
              </a>
            </h5>
            <p>Good product, beautiful, rich.</p>
            <p>Strictly guarantee product quality.</p>
            <p>Best service.</p>
          </div>
          <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 col-4 mx-auto mb-lg-4 mb-md-4 mb-sm-3 menu-footer">
            <h5 class="fw-bold mb-4" style="color: #c5c6c7">
              List
            </h5>
            <p>
              <a href="Display-Component/CookWare1.html" class="text-reset">Cookware</a>
            </p>
            <p>
              <a href="Display-Component/Freezers.html" class="text-reset">Refrigeration</a>
            </p>
            <p>
              <a href="Display-Component/Appliances.html" class="text-reset">Appliances</a>
            </p>
            <p>
              <a href="Display-Component/FoodStorage.html" class="text-reset">Food Storage</a>
            </p>
          </div>
          <div id="contact-mobile" class="col-md-4  col-sm-4 col-lg-3 col-xl-3 col-8 mx-auto mb-md-0 mb-lg-4 mb-sm-3 color-icon">
            <h5 class="fw-bold mb-4" style="color: #c5c6c7">
             Contact
            </h5>
            <p><i class="fas fa-home me-3"></i>Cau Giay street- Ha Noi City</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              kitchenwera@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 84 567 467 678</p>
            <p><i class="fas fa-print me-3"></i> + 84 345 686 868</p>
          </div>
          <div class="col-md-3 col-sm-2 col-lg-2 col-xl-2 col-4 mx-auto mb-lg-4 mb-md-4 mb-sm-3 support-link">
            <h5 class="fw-bold mb-4" style="color: #c5c6c7">
              Support
            </h5>
            <p>
              <a href="./Food%20Storage/AboutUs.html" class="text-reset">About TASHA </a>
            </p>
            <p>
              <a href="Appliances/Contact/Contract%20Us.html" class="text-reset">Contact</a>
            </p>
          </div>
          <div id="contact-auto" class="col-md-4  col-sm-4 col-lg-3 col-xl-3 col-8 mx-auto mb-md-0 mb-lg-4 mb-sm-3 color-icon">
            <h5 class="fw-bold mb-4" style="color: #c5c6c7">
              Contact
            </h5>
            <p><i class="fas fa-home me-3"></i> Cau Giay street- Ha Noi City</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              kitchenwera@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 84 567 467 678</p>
            <p><i class="fas fa-print me-3"></i> + 84 345 868 868</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center copy-respon" style="padding:20px;background-color: #1f2833;color: #45A29E">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="HRKitchen.html">TASHA </a>
    </div>
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="fitler-search-and-shopping-cart/Log-In.js"></script>
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="fitler-search-and-shopping-cart/shopping-cart.js"></script>
<script src="fitler-search-and-shopping-cart/products.js"></script>
</body>
</html>
