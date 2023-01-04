<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="aos.css">
    <!--     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    -->
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="#home"><span class="text-primary">HCOE</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#about" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Service
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#services">Mobile App Development</a></li>
                  <li><a class="dropdown-item" href="#services">Web Design</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Our Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <?php
          include("config/db_config.php");
          $listData = mysqli_query($connection, "SELECT * FROM sliders ORDER BY id DESC");
          ?>
          <?php
          $rows = array();
          while($row = mysqli_fetch_array($listData))
          $rows[] = $row;
          foreach($rows as $key=>$row){
          $imagePath = "image/slider/".$row['image'];
          ?>
          <?php
          if($key==1)
          {
          ?>
          <div class="carousel-item active">
            <img src="<?php echo $imagePath ?>" class="d-block w-100" alt="...">
          </div>
          <?php  } else{ ?>
          <div class="carousel-item">
            <img src="<?php echo $imagePath ?>" class="d-block w-100" alt="...">
          </div>
          <?php } ?>
          <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    <!-- for about us -->
    <section id="about" class="about">
      <div class="container">
        <div class="text-center my-5">
          <h1 data-aos="fade-up" data-aos-offset>About <span class="text-primary">me</span></h1>
          <hr / class="w-25 m-auto">
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-12" data-aos="zoom-in">
            <h1>What do <span class="text-primary mb-5">you want?</span></h1>
            <p class="p-2">
            In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
            <button type="button" class="btn btn-light">More about me</button>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-center">
            <img src="assets/img/s4.jpg" class="img-fluid img-thumbnail">
          </div>
        </div>
      </div>
      
    </section>
    <section id="services" class="services">
      <div class="container">
        <div class="text-center my-5">
          <h1>Our <span class="text-primary">Services</span></h1>
          <hr / class="w-25 m-auto">
        </div>
        <div class="row" data-aos="zoom-in-up">
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded"></i>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded"></i>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded"></i>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded"></i>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded"></i>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-users bg-primary p-2 text-white rounded"></i>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="team" class="team my-5 text-center">
        <div class="container">
          <div class="text-center my-5">
            <h1>Our <span class="text-primary">Team</span></h1>
            <hr / class="w-25 m-auto">
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="card">
                <div class="card-body">
                  <img src="assets/img/s4.jpg" class="img-fluid rounded-circle border border-primary p-2">
                  <h5 class="card-title  mt-4">Ram Sharma</h5>
                  <p class="card-text">CEO</p>
                  <a href="#" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="card">
                <div class="card-body">
                  <img src="assets/img/s4.jpg" class="img-fluid rounded-circle border border-primary p-2">
                  <h5 class="card-title  mt-4">Ram Sharma</h5>
                  <p class="card-text">CEO</p>
                  <a href="#" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="card">
                <div class="card-body">
                  <img src="assets/img/s4.jpg" class="img-fluid rounded-circle border border-primary p-2">
                  <h5 class="card-title  mt-4">Ram Sharma</h5>
                  <p class="card-text">CEO</p>
                  <a href="#" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
            
          </div>
          
        </section>
        <section id="contact" class="contact py-5 ">
          <div class="container">
            <div class="text-center my-5">
              <h1>Connect <span class="text-primary">with us</span></h1>
              <hr / class="w-25 m-auto">
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                <form class="row g-3">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </form>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end">
                <img src="assets/img/s4.jpg" class="img-fluid img-thumbnail">
                
              </div>
            </div>
          </div>
          
        </section>
        <div class="container-fluid p-2 text-white bg-primary text-center fs-4">
          Design by Us
        </div>
        <!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>
      </body>
    </html>