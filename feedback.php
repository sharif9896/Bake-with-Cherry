  <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bakewithcherry";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // $email = $_POST['email'];
    // $x = mysqli_query($conn, "SELECT * FROM patinsignin WHERE Email='$email'");
    // $y = mysqli_fetch_array($x);

    if (isset($_POST['register'])) {

        $pn = $_POST['pn'];
        $nm = $_POST['nm'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $fe = $_POST['fe'];
        $sta = $_POST['sta'];
        $pin = $_POST['pin'];
        $ln = $_POST['ln'];

        $sql = mysqli_query($conn, "INSERT INTO `feedbacks`(`name`, `email`, `mobileno`, `city`, `state`, `las`, `pin`, `feemes`) VALUES ('$nm','$email','$pn','$city','$sta','$ln','$pin','$fe')");

        if ($sql) {
    ?>
          <div class="hos">
              <script>
                  alert("Sucessfully Entered!")
              </script>
              <!-- <h4><i class="fas fa-check"></i> Successfully Entered!</h4> -->
          </div>
  <?php
        } else {
            echo "Invalid Username and Password";
        }
    }
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

          <section class="MenuSection" id="menu-id">
              <h1 id="ADD MENU">ADD MENU</h1>
              <p>Fresh Bakery Items with the Finest Ingredients</p>
          </section>
          <section class="Contact-us" id="Contact-us">
              <div class="container">
                  <div class="row">
                      <form class="row g-3 needs-validation" method="post">
                          <div class="col-md-6">
                              <label for="validationCustom01" class="form-label">First name</label>
                              <input type="text" class="form-control" name="nm" id="validationCustom01" required placeholder="Enter Your First Name">
                              <div class="valid-feedback">
                                  Looks good!
                              </div>
                          </div>
                          <div class="col-md-6">
                              <label for="validationCustom02" class="form-label">Last name</label>
                              <input type="text" class="form-control" name="ln" id="validationCustom02" placeholder="Enter Your Last Name" required>
                              <div class="valid-feedback">

                              </div>
                          </div><br>
                          <div class="col-8">
                              <label for="validationCustom02" class="form-label">Email</label>
                              <input type="Email" class="form-control" name="email" id="validationCustom02" placeholder="Enter Your Email" required>
                              <div class="valid-feedback">

                              </div>
                          </div>
                          <div class="col-md-8">
                              <label for="validationCustom02" class="form-label">Phone Number:</label>
                              <input type="number" class="form-control" name="pn" id="validationCustom02" placeholder="Enter Your Phone Number" required>
                              <div class="valid-feedback">

                              </div>
                          </div>

                          <div class="col-md-6">
                              <label for="validationCustom03" class="form-label">City</label>
                              <input type="text" class="form-control" name="city" id="validationCustom03" placeholder="London" required>
                              <div class="invalid-feedback">

                              </div>
                          </div>
                          <div class="col-md-3">
                              <label for="validationCustom04" class="form-label">State</label>
                              <input type="text" class="form-control" name="sta" id="validationCustom03" placeholder="Branford" required>
                              <div class="invalid-feedback">

                              </div>
                              <div class="invalid-feedback">

                              </div>
                          </div>
                          <div class="col-md-3">
                              <label for="validationCustom05" class="form-label">Pin-Code</label>
                              <input type="text" class="form-control" name="pin" id="validationCustom05" placeholder="....." required>
                              <div class="invalid-feedback">
                              </div>
                          </div>
                          <div class="mb-3">
                              <textarea class="form-control mt-4" name="fe" id="exampleFormControlTextarea1" rows="3" placeholder="Your FeedBack"></textarea>
                          </div>

                          <div class="invalid-feedback">

                          </div>

                          <div class="col-12">
                              <input type="submit" id="Touch" class="btn btn-secondary" name="register"></i>
                          </div>
                      </form>
                  </div>
              </div>
          </section>
          <button id="back-to-top" onclick="topFunction()" title="Go to top">&#8679;</button>

          <section class="footer" id="footerid" style="background-color:darkpink;">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-4 col-md-4 col-12 mx-auto">
                          <h3>About Us</h3>
                          <p>Bake with Cherry is a cozy home bakery specializing in handcrafted cakes, cookies, and pastries made with love and premium ingredients. It offers customized treats for all occasions, focusing on taste, quality, and creative designs.<br><br><b>Bake with Cherry</b> is now reinventing the art of baking with the same tender loving care that has earned us your trust.</p>
                          <hr class="w-25 mx-auto text-dark">
                          <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
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
          AOS.init();
      </script>
  </body>

  </html>
