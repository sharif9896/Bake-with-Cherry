<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakewithcherry";

$conn = new mysqli($servername, $username, $password, $dbname);
$i = 1;
$x = mysqli_query($conn, "SELECT * FROM `menu_entry`");
$y = mysqli_fetch_array($x);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAKE WITH CHERRY</title>
    <!-- <link rel="stylesheet" stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="Bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="images/logo.png">

    <script src="java.min.js"></script>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="flickity.css">
    <link rel="stylesheet" href="media.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {

            /* background-color: rgba(238, 7, 96, 0.144); */

            background-color: white;
        }

        html {
            overflow-x: hidden;
            scroll-behavior: smooth;
        }


        a {
            text-decoration: none;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>

    <div class="go"></div>
    <div class="barn">
        <div class="value1" style="display:flex;"><img src="logo.png" style="width:100px;height:80px" class="value">
            <div class="h5" style="margin-top:20px;">Bake with <b style="
    color: #303030;">Cherry</b><br><b style="color:rgba(172, 4, 46, 0.79);">"Where Quality and taste are known Best."</b></div>
        </div>

        <div class="mlk">
            <a href="index.php">
                <div class="home1">Home</div>
            </a>
            <a href="menu.php">
                <div class="home1">Menu</div>
            </a>

            <a href="Gallery.php">
                <div class="home1">Gallery</div>
            </a>

            <a href="about.php">
                <div class="home1">About Us</div>
            </a>

            <a href="feedback.php">
                <div class="home1">Contact Us</div>
            </a>

            <a href="admin.php">
                <div class="home1 btn-outline-danger" style="border:1px solid rgb(172, 4, 54); border-radius: 8px;">Owner</div>
            </a>
            <!-- <a href=""> -->
            <!-- <a href="" style="height: 35px;margin-top:3%;" class="home1 btn btn-outline-danger">Owner</a> -->
            <!-- </a> -->
            <div class="baar"><img src="aaaaw.png" alt=""></div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="max-w-[1390px] mx-auto">
        <div class="baar-overlay"></div>
        <div class="baaar" style="z-index:2;">
            <div class="cross">
                <img src="sde...png" alt="">
            </div>
            <br>
            <br>
            <div class="hhmc">
                <a href="index.php">
                    <div class="home4" style="border-top: 1px solid #3635354b;border-bottom: 1px solid #3635354b;">Home</div>
                </a>
                <a href="menu.php">
                    <div class="home4" style="border-bottom: 1px solid #3635354b;">Menu</div>
                </a>

                <a href="Gallery.php">
                    <div class="home4" style="border-bottom: 1px solid #3635354b;">Gallery</div>
                </a>

                <a href="feedback.php">
                    <div class="home4" style="border-bottom: 1px solid #3635354b;">Contact Us</div>
                </a>
                <a href="about.php">
                    <div class="home4" style="border-bottom: 1px solid #3635354b;">About Us</div>
                </a>

                <a href="admin.php" style="height: 35px;margin-top:3%; width:100%;" class="btn btn-outline-danger">Owner</a>
            </div>
        </div>



        <div class="con">
            <div class="slidercontainer">
                <div class="slidercontent" id="slider">
                    <div class="slide"><img src="ica3.jpg" alt="slide1" class="moc"></div>
                    <div class="slide"><img src="ica8.jpg" alt="slide1" class="moc"></div>
                    <div class="slide"><img src="ica5.jpg" alt="slide1" class="moc"></div>
                    <div class="slide"><img src="ica10.jpg" alt="slide1" class="moc"></div>
                    <div class="slide"><img src="ica2.jpg" alt="slide1" class="moc"></div>
                    <div class="slide" class="active"><img src="ica7.jpg" alt="slide1" class="moc"></div>
                    <div class="slide"><img src="ica9.jpg" alt="slide2" class="moc"></div>
                    <div class="slide"><img src="ica4.jpg" alt="slide3" class="moc"></div>
                    <div class="slide"><img src="ica6.jpg" alt="slide4" class="moc"></div>
                    <div class="slide"><img src="ica1.jpg" alt="slide5" class="moc"></div>
                </div>
            </div>
            <button class="arrow prev" onclick="prevslide()" ondblclick="cartovrlay()">&#10094;</button>
            <button class="arrow next" onclick="nextslide()" ondblclick="cartovrlay()">&#10095;</button>
        </div>
        <!-- <br>
    <br>
    <br>
    <br>
    <br>
    <br> -->
        <div class="indicator-container" id="indicators" onclick="currentSlide(event)">
            <div class="dot" class="active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>


        <section class="second-Sec" id="Second-sec-id">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mx-auto second-sec" data-aos="slide-right">
                        <h2><span id="Welcome">Welcome to</span> Bake with Cherry</h2>
                        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
                            pain, but because occasionally circumstances occur in which toil and pain can procure him some
                            great pleasure. To take a trivial example, which of us ever undertakes laborious physical
                            exercise.</p>
                        <a href="#">Scroll Down</a>
                    </div>
                    <div class="col-lg-6 col-md-6 mx-auto second-sec">
                        <img src="gf.jpg" class="container-fluid" data-aos="fade-up">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mx-auto second-sec" data-aos="slide-right">
                        <h2><span id="Welcome">Menu's of</span> Bake with Cherry</h2>
                        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
                            pain, but because occasionally circumstances occur in which toil and pain can procure him some
                            great pleasure. To take a trivial example, which of us ever undertakes laborious physical
                            exercise.</p>
                        <a href="#">Scroll Down</a>
                    </div>
                    <div class="col-lg-6 col-md-6 mx-auto second-sec" data-aos="slide-right">
                        <img src="moji.webp" class="container-fluid" data-aos="fade-up">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mx-auto second-sec" data-aos="slide-left">
                        <h2><span id="Welcome">Gallery's of</span> Bake with Cherry</h2>
                        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
                            pain, but because occasionally circumstances occur in which toil and pain can procure him some
                            great pleasure. To take a trivial example, which of us ever undertakes laborious physical
                            exercise.</p>
                        <a href="#">Scroll Down</a>
                    </div>
                    <div class="col-lg-6 col-md-6 mx-auto second-sec">
                        <img src="gf.jpg" class="container-fluid" data-aos="zoom-in-out">
                    </div>
                </div>
            </div>
        </section>
        <section class="MenuSection" id="menu-id">
            <h1>OUR SPECIALTIES</h1>
            <p>Fresh Bakery Items with the Finest Ingredients</p>
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="ni1.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Cake Rusk</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹5.00<span id="Weight"> Per Kg</span></h6> -->
                        <a href="#">NEW</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="ni2.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Carmel Crunch cake</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹20.00<span id="Weight"> 2.5 Pound</span></h6> -->
                        <a href="#">NEW</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">

                        <img src="ni3.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Chewy Fudgy Brownie Cake Bucket</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹5.00<span id="Weight">Per Bucket</span></h6> -->
                        <a href="#">NEW</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">

                        <img src="ni4.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Chocolate and Wallnut Biscuits</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹35.00<span id="Weight">Per Kg</span></h6> -->
                        <a href="#">NEW</a>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="ni5.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Julab Jaman (Brown)</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹8.00<span id="Weight"> Per Kg</span></h6> -->
                        <a href="#">NEW</a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="ni6.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>KitKat ₹ MnM Molten Dessert Box</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹5.00<span id="Weight"> Per Box</span></h6> -->
                        <a href="#">NEW</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="ni7.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Milky Malt cake</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹15.00<span id="Weight"> 2.5 Pound</span></h6> -->
                        <a href="#">NEW</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">

                        <img src="ni8.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Mix Nimco</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹2.00<span id="Weight"> Per Pack</span></h6> -->
                        <a href="#">NEW</a>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="ni9.jfif" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Fresh Bread</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹2.00<span id="Weight"> Per Pack</span></h6> -->
                        <a href="#">NEW</a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="https://s.marketwatch.com/public/resources/images/MW-BS913_butter_MG_20140120151235.jpg"
                            alt="" class="container-fluid" data-aos="fade-up">
                        <h3>Pure Butter</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹50.00<span id="Weight"> Per Kg</span></h6> -->
                        <a href="#">NEW</a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src=" https://cdn.britannica.com/94/151894-050-F72A5317/Brown-eggs.jpg" alt=""
                            class="container-fluid" data-aos="fade-up">
                        <h3>Desi Eggs</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹4.00<span id="Weight"> per Dozen</span></h6> -->
                        <a href="#">NEW</a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mx-auto Bakery-menu">
                        <img src="https://c4.wallpaperflare.com/wallpaper/319/276/863/cheese-milk-cheese-milk-wallpaper-preview.jpg" alt="" class="container-fluid" data-aos="fade-up">
                        <h3>Organic Milk</h3>
                        <h6>10% OFF</h6>
                        <!-- <h6>₹5.00<span id="Weight"> Per liter</span></h6> -->
                        <a href="#">NEW</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="Gallery" id="Gallery-Id" data-aos="fade-up">
            <h1>Gallery</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro maiores illo numquam, distinctio exercitationem reiciendis!</p>

            <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>

                <div class="carousel-cell">
                    <img src="https://images.unsplash.com/photo-1605807646983-377bc5a76493?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80">
                    <a href="#">Ice Cake</a>

                </div>

                <div class="carousel-cell">
                    <img src="https://media.istockphoto.com/photos/indian-sweets-in-a-plate-includes-gulab-jamun-rasgulla-kaju-katli-picture-id1054228718?k=20&m=1054228718&s=612x612&w=0&h=OFcioOdcbacinr2F7M0hULoAr3egWnU_BIt5XLmznf0=">
                    <a href="#">Sweets</a>

                </div>

                <div class="carousel-cell">
                    <img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29va3l8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80">
                    <a href="#">Biscuits</a>

                </div>

                <div class="carousel-cell">
                    <img src="https://w0.peakpx.com/wallpaper/754/603/HD-wallpaper-chocolate-ice-cream-close-up-sweets-ice-cream-balls-ice-cream.jpg">
                    <a href="#">Ice Cream</a>

                </div>
                <div class="carousel-cell">
                    <img src="https://c4.wallpaperflare.com/wallpaper/317/423/666/chocolate-4k-hd-pc-download-wallpaper-preview.jpg">
                    <a href="#">Chocolate</a>

                </div>
            </div>
        </section>

        <section class="Feedback" id="Feedback" data-aos="fade-up">
            <h1>Feedback</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, distinctio!</p>
            <div class="feedback-background">
                <div class="center-heading">
                    <p>Have feedback about our products or service<br> Please contact Bake with Cherry directly</p>
                    <a href="feedback.php">Send Feedback Now</a>
                </div>
            </div>
        </section>


        <section class="footer" id="footerid" style="background-color:darkpink;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mx-auto">
                        <h3>About Us</h3>
                        <p>Bake with Cherry is a cozy home bakery specializing in handcrafted cakes, cookies, and pastries made with love and premium ingredients. It offers customized treats for all occasions, focusing on taste, quality, and creative designs.<br><br><b>Bake with Cherry</b> is now reinventing the art of baking with the same tender loving care that has earned us your trust.</p>
                        <hr class="w-25 mx-auto text-dark">
                        <a href="https://www.facebook.com/" target="blank"><i class="fas fa-facebook"></i></i></a>
                        <a href="https://twitter.com" target="blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://gmail.google.com" target="blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="https://www.pinterest.com/" target="blank"><i class="fab fa-pinterest"></i></a>
                        <a href="https://instagram.com/" target="blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mx-auto">
                        <h3>Contact Us</h3>
                        <p>401 E block Aparna Prem Apartment Near Sunari Petrol pump Shastripuram Agra.</p>
                        <hr class="w-25 mx-auto text-dark">
                        <p>Hours: Opens 6-AM To 10-PM <br>
                            Monday to Monday <br>
                            Phone: (021) 35127361</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mx-auto">
                        <h3>Location</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14485.08557107192!2d67.123408!3d24.8203909!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23320c2fdcb48428!2sAptech%20Learning%20Korangi!5e0!3m2!1sen!2s!4v1633338566993!5m2!1sen!2s" height="200" style="border:0;" allowfullscreen="" loading="lazy" class="container-fluid"></iframe>
                    </div>
                </div>
            </div>
            <hr class="w-50 mt-5 mx-auto text-dark" style="width: 100%;">
            <div class="container last-footer">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mx-auto">
                        <h4 id="last-logo">Bake with Cherry</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mx-auto ">
                        <h4><span id="Name">Bake with Cherry</span> <br><span style="font-size:16px">© 2025-Copyright Privacy Policy</span></h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mx-auto ">
                        <h4>Design & Developed by <span id="Name">DIYAPRO</span></h3>
                    </div>
                </div>
            </div>
        </section>

        <button id="back-to-top" onclick="topFunction()" title="Go to top">&#8679;</button>
    </div>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            duration: 1000
        });
    </script>
</body>

</html>
