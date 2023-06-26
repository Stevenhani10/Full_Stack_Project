    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    </head>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Aleo:wght@300&display=swap');

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .ancor{
            color: gray;
        }
        .ancor:hover{
            color: rgb(183, 34, 126);
        }

        h2 {
            width: 80%;
            text-align: center;
            border-bottom: 1px solid #000;
            line-height: 0.1em;
            margin: auto;

        }

        h2 span {
            background: whitesmoke;
            padding:0 10px;
        }

        .s1:hover{
            color: yellow;

        }
        .s2:hover{
            color: yellow;

        }
        .s3:hover{
            color: yellow;

        }.s4:hover{
             color: yellow;

         }.s5:hover{
              color: yellow;

          }
        .heart:hover{
            color: red;
        }
        .cart:hover{
            color: rgb(11, 82, 249);
        }
        .share:hover{
            color:rgb(11, 82, 249);
        }

    </style>

    <body style="background-color: whitesmoke;">




    <!-- Nav ---->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 100000;">
        <div class="container">

            <div class="navbar-brand mt-2 mt-lg-0" style="font-family: font;"><i>fashion</i></div>
            <button
                class="navbar-toggler ms-auto"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mano"
                aria-expanded="false"
                aria-label="toggle navigation">
                <i class="fas fa-bers"></i>
            </button>
            <div class="collapse navbar-collapse " id="mano" style=" justify-content: end;">
                <div class="text-light">
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
                        <li class="nav-item"> <a href="#Home" class="nav-link active ">Home</a> </li>
                        <li class="nav-item"><a href="#Women" class="nav-link ">Women</a></li>
                        <li class="nav-item"><a href="#Men" class="nav-link ">Men</a></li>
                        <li class="nav-item"><a href="" class="nav-link ">Footwear</a></li>
                        <li class="nav-item"><a href="" class="nav-link ">Accessories</a></li>
                        <li class="nav-item"><a href="" class="nav-link ">Sales</a></li>
                        <li class="nav-item"><a href="" class="nav-link  ">Blog</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>





    <!-- slider---------->
    <div id="carouselExampleFade" class="carousel slide carousel-fade p-relative d-flex justify-content-center " data-bs-ride="carousel">

        <div class="carousel-inner" >

            <div class="carousel-item active">
                <img src="img/1s.png" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/2s.png" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/3s.png" class="d-block w-100">
            </div>

        </div>

        <span class="carousel-control-prev"
              type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </span>

        <span class="carousel-control-next"type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </span>
    </div> <br><br><br><br><br>


    <!-- small nav -->

    <nav class="navbar navbar-expand navbar-lihgt" style="justify-content: center;">
        <a class="ancor" href="#Home" style="padding: 8px;"> All</a>
        <a class="ancor" href="#Men" style="padding: 8px;"> Men</a>
        <a class="ancor" href="#Women" style="padding: 8px;"> Women</a>
        <a class="ancor" href="" style="padding: 8px;">Kids</a>
    </nav>
    <br>



    <!--    Most Popular Collections ----->
    <h2 style="font-family: Aleo;"><span>Featured ITEMS  </span></h2>

    <section class="py-3"  id="Home" >
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">


                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/1c.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/2c.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/3c.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/4c.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <br>

    <img src="img/e-commerce.png" width="100%">
    <br><br>
    <br>
    <br>
    <br>
    <!-- Our Offers  ----->
    <h2 style="font-family: Aleo;"><span> TRENDING ITEMS</span></h2> <br><br>

    <section class="py-3" id="Women" >
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">


                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/10t.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/13t.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/14t.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/15t.png" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Suspendisse et.</h4>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="rating_box">
                                <div class="stars">
                                    <i class="fa-solid fa-star s1"></i>
                                    <i class="fa-solid fa-star s2"></i>
                                    <i class="fa-solid fa-star s3"></i>
                                    <i class="fa-solid fa-star s4"></i>
                                    <i class="fa-solid fa-star s5"></i>
                                </div> <br>
                                <div class="icons">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <i class="fa-solid fa-cart-shopping cart"></i>
                                    <i class="fa-solid fa-share share"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><br><br>

    <!--  -->

    <header class="container-fluid bg-dark py-5 " style="background-image: url(./img/18.png); height: 50vh; background-size: cover;">
        <div class="text-center text-white" style="font-family: Aleo;" >
            <h1 class="display-2 fw-bolder">“</h1>
            <p class="lead fw-bolder text-white mb-0 fs-3 ">"Style is a way to say who you are without having to speak. —Rachel Zoe"</p>
        </div>
        </div>
    </header> <br><br><br><br><br>


    <!-- Blogs  ---------->

    <h2 style="font-family: Aleo;"><span>Blogs</span></h2> <br><br><br>


    <section class="py-5" id="Men" >
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">


                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/19i.png"/>
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">casual Product</h5>

                                <p>is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. </p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-start"><a class="btn btn-outline-dark mt-auto" href="#">Read More</a></div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/20i.png"/>
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">Dresses Product</h5>
                                <p>is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. </p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-start"><a class="btn btn-outline-dark mt-auto" href="#">Read More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/21i.png"/>
                        <div class="card-body p-4">
                            <div class="text-start">
                                <h5 class="fw-bolder">classic Product</h5>

                                <p>is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. </p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-start"><a class="btn btn-outline-dark mt-auto" href="#">Read More</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





    <!-- Footer  ---->

    <div class="container-fluid bg-dark" id="news">

        <div class="container py-5">

            <div class="text-center">

                <h1 class="fw-bold text-light " style="font-family: alex brush; font-size: 60px;">Fashion</h1> <br>

            </div> <br><br><br>


            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                    <a class="btn text-light fw-bold px-5 py-3 " style="background-color: #3b5998; " href="https://www.facebook.com/steven.hany.925" target="_self">
                        Find Me on Facebook
                    </a>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                    <a class="btn text-light fw-bold px-5 py-3" style="background-color: #E1306C; " href="https://www.instagram.com/mazasiko/" target="_self">
                        Find Me on Instagram
                    </a>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                    <a class="btn text-light fw-bold px-5 py-3" style="background-color: #053eff; " href="" target="_self">
                        Find Me on Behance
                    </a>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">
                    <ul class="text-light ">
                        <ol class="fw-bolder pb-2 p-sm-0 ">HOME</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Women</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Men</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Accessories</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Sales</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Blogs</ol>
                    </ul>
                </div>


                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">
                    <ul class="text-light ">
                        <ol class="fw-bold pb-3 p-sm-0 pb-sm-2">CATEGORIES</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Jackets and Coats</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Skirts and Dresses</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Shoes, Boots and Slippers</ol>
                        <ol class="fw-lighter pb-2 p-sm-0">Sweaters and Waistcoats</ol>
                    </ul>
                </div>


                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">

                    <ul class="text-light ">
                        <ol class="fw-bold pb-3 p-sm-0 pb-sm-2">IMPORTANT LINKS</ol>
                        <ol class="fw-lighter pb-2 p-sm-0"><a href="https://eg.hm.com/en/?g_campaign=HM_EGY_gbs_en_4_Brand-Pure-Exact_r&g_adtype=search&g_adgroupid=84885507284&g_campaignid=8057111274&g_adid=615896644762&g_network=g&g_keyword=hm&g_keywordid=kwd-105130815&g_acctid=377-512-1586&gclid=CjwKCAiAmJGgBhAZEiwA1JZolq-gdhED38m0JxCTlztIag-OvfpfOsWw37obw_iU-xj6eKUHwjPDOxoC-9IQAvD_BwE" style="text-decoration: none; color: white;"> H&M Website</a></ol>

                        <ol class="fw-lighter pb-2 p-sm-0"><a href="https://www.lcwaikiki.eg/en-US/EG?gclid=CjwKCAiAmJGgBhAZEiwA1JZolgt7gQ2YtNB5RVS5aOWeuJOPEvZ-6Ba7BbS1QUyXEFNogtjR2gx-cBoCrIkQAvD_BwE" style="text-decoration: none; color: white;"> LC Waikiki Website</a></ol>

                        <ol class="fw-lighter pb-2 p-sm-0"><a href="https://www.versace.com/on/demandware.store/Sites-US-Site/en_US/Default-Start?&wt_mc=WW.SEM.Google.Text&utm_campaignname=01_Top_Brand_Exact_INT_WW&utm_adgroup=Exact&utm_term=versace&s_kwcid=AL!6089!3!513358848869!e!!g!!versace&gclid=Cj0KCQiA9YugBhCZARIsAACXxeK9ap8zfqbChpGs0Fm_2BOtrNTYUleTCykXygJ3Y3-EypYFnXnzJSsaAovuEALw_wcB&gclsrc=aw.ds" style="text-decoration: none; color: white;"> Versace Website</a></ol>

                    </ul>
                </div>
            </div>

            <br><hr class="text-light"><br>
            <p class="text-light fw-lighter text-center">
                <span>&#169</span> 2023 <span style="font-family: Alex brush; font-size: 28px;">Fashion</span> : Created Made by <span class="fw-bold">Steven Hani (Full Stack Developer) </span>
            </p> <br>

        </div>
    </div>






    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>





