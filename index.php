<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" width="100px" height="100px">
    <title>Kerala Tourism</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <!--  Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--  Boxicons CSS-- -->
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- css -->
    <!-- emailjs -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js" > </script>
    <script type="text/javascript">
      (function() {
      emailjs.init("MYx4XZcXL6nUvNUfa");
      })(); 
      </script> -->
</head>
<body>

<!-- Navbar -->
 

<header class="header">
  <a href="" class="logo"><i class="fa-solid fa-tree"></i>Kerala Tourism</a>
  <nav class="navbar">
      <a href="">home</a>
      <!-- <a href="">places</a> -->
      <a href="#packages">package</a>
      <a href="#gallary">gallery</a>
      <a href="#services">services</a>
      <a href="#contact">contact</a>
      <a href="#about">about us</a>
      <a href="login.php" class="login">log in</a>
  </nav>
  <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="search-btn"></div>
  </div>
  <form action="" class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box" class="fas fa-search"></label>
  </form>
</header>



<section class="ho">


  <div class="formscontainer">
      <form action="process.php" method="POST">
          <h3>Contact US</h3>
          <span>Name</span>
          <input type="text" placeholder="Enter Your Name" required="required" name="nm" id="nm">
          <!-- <span>Last Name</span>
          <input type="text" placeholder="Enter Your Last Name" required="
          required"><br> -->
          <span>Phone Number</span>
          <input type="number" placeholder="Enter Your Mobile Number" required="required" name="ph" id="ph"><br>
          <span>Email</span>
          <input type="email" placeholder="Enter Your Email id" required="required" name="email" id="email" ><br>
          <span>Message</span>
          <input type="text" placeholder="Enter Your Message" required="required" name="message" id="message" ><br>

          <!-- <textarea name="" id="" placeholder=" Message something..." name="message"  id="message" ></textarea><br> -->
          <input type="submit" value="SEND" id="btn">


          <!-- <button onclick="sendemail()">SEND</button> -->
      </form>

  </div>


  <video class="video-slide active" src="images/road (1).mp4" autoplay muted loop></video>
  <!-- <video class="video-slide" src="images/falls.mp4" autoplay muted loop></video> -->
  <video class="video-slide" src="images/tracking.mp4" autoplay muted loop></video>
  <video class="video-slide" src="images/see.mp4" autoplay muted loop></video>

  <div class="content active">
      <h1> Kerala<br><span>hills</span></h1>
      <p> Kerala, renowned for its pristine natural beauty, is home to an array of majestic waterfalls that captivate visitors with their charm and serenity. Nestled amidst dense forests and verdant hills, the waterfalls in Kerala not only provide a visual treat but also serve as perfect retreats for nature lovers and adventurers.</p>
      <a href="#book">Book Now</a>
  </div>
  <!-- <div class="content"></div>
  <h1> Kerala<br><span>waterfalls</span></h1>
      <p> Kerala, renowned for its pristine natural beauty, is home to an array of majestic waterfalls that captivate visitors with their charm and serenity. Nestled amidst dense forests and verdant hills, the waterfalls in Kerala not only provide a visual treat but also serve as perfect retreats for nature lovers and adventurers.</p>
      <a href="#book">Book Now</a>
  </div> -->
  <div class="content">
      <h1> kerala<br><span> trekking </span></h1>
      <p> Kerala, known for its stunning natural landscapes, is a paradise for trekking enthusiasts. From dense forests and mist-laden hills to rolling meadows and gurgling streams, Kerala offers trekking experiences that immerse you in its untouched beauty. Trekking in this tropical haven is not just an adventure but also an opportunity to witness its rich biodiversity and breathtaking scenery.</p>
      <a href="#book">Book Now</a>
  </div>
  <div class="content">
      <h1> Wonderful<br><span> beach </span></h1>
      <p> Kerala, fondly known as "God’s Own Country," is blessed with an exquisite coastline along the Arabian Sea, boasting some of the most serene and scenic beaches in India. These beaches are characterized by golden sands, swaying palm trees, and tranquil waters, making them ideal destinations for relaxation, adventure, and cultural exploration.</p>
      <a href="#book">Book Now</a>
  </div>


 

  <div class="slider-navigation">
      <div class="nav-btn active"></div>
      <!-- <div class="nav-btn"></div> -->
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
  </div>
  

</section>

<a href="#" class="to-top">
  <i class="fas fa-chevron-up"></i>
</a>
<a href="#" class="em" id="mail">
  <i class="fa-solid fa-envelope"></i></i>
</a>





   <!-- Navbar end -->

   

      <!-- HOME Start -->
      <div class="home" id="home">
        <div class="content">
            <h5>Welcome To Kerala</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Explore God's Own Country</p>
            <a href="#book">Book Place</a>
        </div>
    </div>
      <br>
      <br>
      <!-- Home End -->


      <!-- Place start -->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="main-text" id="Places">
          <h1><span>P</span>OPULAR DESTINATION</h1>
        </div>
        <br>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/alappyy.jpg" class="d-block w-100" alt="..." width="500px" height="600px" style="box-shadow: 1px 1px 20px black;">
            <div class="carousel-caption d-none d-md-block">
              <h3>ALLAPPUZHA</h3>
              <p>Allappuzha, also known as Alleppey, is situated on the shores of the Arabian Sea close to the banks of Vembanad Lake. It is the administrative headquarters of the Alappuzha district and the 6th largest city in Kerla.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/munnar.jpg" class="d-block w-100" alt="..." width="500px" height="600px">
            <div class="carousel-caption d-none d-md-block">
              <h3>MUNNAR</h3>
              <p>Munnar is a tranquil hill station nestled in the hills of Idukki district in Kerala. One of the most popular tourist destinations in Kerala, Munnar is located at a height of 1600 m above the sea level</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/kochi.jpg" class="d-block w-100" alt="..." width="500px" height="600px">
            <div class="carousel-caption d-none d-md-block">
              <h3>FORT KOCHI</h3>
              <p>Fort Kochi, also known as Fort Cochin in English, traces its roots back to the first European fort on Indian soil, Fort Manuel of Cochin. West Cochin, a cluster of water-bound islands and islets nestled southwest of mainland Kochi.</p>
            </div>
          </div>
          <div class="carousel-item">
              <img src="images/Kolukkumalai-view-from-ft-green-mountain-Nature-Mountains-2k-4k-5k-8k-[7680x4293] [wallpapersbin.com].jpg" class="d-block w-100" alt="..." width="500px" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h3>KOLUKKUMALAI</h3>
                <p>Allappuzha, also known as Alleppey, is situated on the shores of the Arabian Sea close to the banks of Vembanad Lake. It is the administrative headquarters of the Alappuzha district and the 6th largest city in Kerla.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/koli card.jpg" class="d-block w-100" alt="..." width="500px" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h3>KOZHIKODE</h3>
                <p>Allappuzha, also known as Alleppey, is situated on the shores of the Arabian Sea close to the banks of Vembanad Lake. It is the administrative headquarters of the Alappuzha district and the 6th largest city in Kerla.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/wayan.jpg" class="d-block w-100" alt="..." width="500px" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h3>WAYANAD</h3>
                <p>Allappuzha, also known as Alleppey, is situated on the shores of the Arabian Sea close to the banks of Vembanad Lake. It is the administrative headquarters of the Alappuzha district and the 6th largest city in Kerla.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/925013728s.jpg" class="d-block w-100" alt="..." width="500px" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h3>THEKKADY</h3>
                <p>Allappuzha, also known as Alleppey, is situated on the shores of the Arabian Sea close to the banks of Vembanad Lake. It is the administrative headquarters of the Alappuzha district and the 6th largest city in Kerla.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/trivandrum.jpg" class="d-block w-100" alt="..." width="500px" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h3>THIRUVANANTHAPURAM</h3>
                <p>Allappuzha, also known as Alleppey, is situated on the shores of the Arabian Sea close to the banks of Vembanad Lake. It is the administrative headquarters of the Alappuzha district and the 6th largest city in Kerla.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/Varkala.jpg" class="d-block w-100" alt="..." width="500px" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h3>VARKALA</h3>
                <p>Allappuzha, also known as Alleppey, is situated on the shores of the Arabian Sea close to the banks of Vembanad Lake. It is the administrative headquarters of the Alappuzha district and the 6th largest city in Kerla.</p>
              </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- place end -->

      
<!-- package start -->
<div class="main-txt">
  <h1><span>P</span>ackages</h1>
</div><br>

<section class="packages" id="packages">

  <div class="container">
    

    <div class="row" style="margin-top: 30px;">

      <div class="col-md-4 py-3 py-md-0">

        <div class="card">
          <img src="images/wayanad card (1).jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Wayanad</h3>
            <p>Wayanad is a beautiful district in Kerala, India, known for its lush greenery, serene landscapes, and rich cultural heritage. A popular tourist, offering breathtaking natural attractions like mist-covered hills</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>3 Days 2 Night</h4><br>
            <h6>Price: <strong>$ 2500</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div>

      </div>
      <div class="col-md-4 py-3 py-md-0">

        <div class="card">
          <img src="images/munnar.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Munnar</h3>
            <p>Munnar is a picturesque hill station located in the Western Ghats of Kerala, India. Renowned for its lush green tea plantations, misty hills, and serene valleys,one of the most popular touristdestinations in South India.</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>3 Days 2 Night</h4><br>
            <h6>Price: <strong>$ 3500</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div>

      </div>
      <div class="col-md-4 py-3 py-md-0">

        <div class="card">
          <img src="images/Kolukkumalai card.jpeg.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Kolukkumali</h3>
            <p>Kolukkumalai is a stunning hilltop located near Munnar in Kerala, India, and is famous for being home to the world’s highest tea plantation, perched at an altitude of around 7,130 feet above sea level.</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>2 Days 1 Night</h4><br>
            <h6>Price: <strong>$ 1800</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 30px;">

      <div class="col-md-4 py-3 py-md-0">

        <div class="card">
          <img src="images/kochi card.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Kochi</h3>
            <p>Kochi, also known as Cochin, is a vibrant coastal city in Kerala, India, with a rich history, diverse culture, and bustling modernity. Often referred to as the "Queen of the Arabian Sea," Kochi is a melting pot of heritage and contemporary charm</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>3 Days 2 Night</h4><br>
            <h6>Price: <strong>$ 3500</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div><br>

      </div><br>
      <div class="col-md-4 py-3 py-md-0">

        <div class="card">
          <img src="images/alappy card.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Alappuzha</h3>
            <p>Alappuzha, also known as Alleppey, is a picturesque district in the Indian state of Kerala, celebrated as the "Venice of the East." Renowned for its intricate network of backwaters, lagoons, and canals, This is a key  for those seeking tranquil natural beauty.</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>2 Days 1 Night</h4><br>
            <h6>Price: <strong>$ 2500</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div><br>
      </div><br>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/koli card.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Kozhikode</h3>
            <p>Kozhikode, historically known as Calicut, is a vibrant city in the southern Indian state of Kerala, renowned for its rich cultural heritage and historical significance. Once a major trading hub on the Malabar Coast, Kozhikode played a pivotal role </p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>2 Days 1 Night</h4><br>
            <h6>Price: <strong>$ 1500</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div>
      </div><br>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/varkala card.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>varkala</h3>
            <p>Varkala is a picturesque coastal town in the southern Indian state of Kerala, renowned for its stunning natural beauty, serene beaches, and spiritual significance. Nestled along the Arabian Sea, it is the only place in Kerala where majestic cliffs meet the sea, earning it the name "Varkala Cliff."</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>2 Days 1 Night</h4><br>
            <h6>Price: <strong>$ 2000</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div><br>
      </div><br>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/7.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Thiruvananthapuram</h3>
            <p>Thiruvananthapuram, also known as Trivandrum, is the capital city of Kerala, blending a rich cultural heritage with modern urban development. Renowned for its historic  Padmanabhaswamy Temple, a masterpiece of Dravidian architecture and one of the wealthiest temples in the world.</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>2 Days 1 Night</h4><br>
            <h6>Price: <strong>$1000</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div><br>
      </div><br>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/thekkady.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Thekkady</h3>
            <p>Thekkady, located in Kerala's Idukki district, is a picturesque destination known for its rich biodiversity, lush greenery, and tranquil ambiance. It is home to the famous Periyar Wildlife Sanctuary, lush greenery, and tranquil ambiance a protected area surrounding the serene Periyar Lake. </p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>3 Days 2 Night</h4><br>
            <h6>Price: <strong>$2400</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div><br>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/palakadu card.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Palakkadu</h3>
            <p>Palakkad, also known as Palghat, is a scenic district in Kerala often referred to as the "Gateway of Kerala." Nestled at the foot of the Western Ghat The district derives its name from the Palakkad Gap, a natural mountain pass that connects Kerala to Tamil Nadu</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>2 Days 1 Night</h4><br>
            <h6>Price: <strong>$1200</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/guru card.jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Guruvayur</h3>
            <p>Guruvayur, a small yet spiritually significant town in Kerala, is one of the most revered pilgrimage destinations in India. It is famously home to the Guruvayur Sri Krishna Temple, dedicated to Lord Krishna in his divine infant form, Guruvayurappan.</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>2 Days 1 Night</h4><br>
            <h6>Price: <strong>$1000</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/vagamon card (1).jpg" alt="" height="220px">
          <div class="card-body">
            <h3>Vagamon</h3>
            <p>Vagamon, a serene hill station nestled in the Idukki district of Kerala, is a tranquil escape known for its lush greenery, rolling meadows, and pleasant climate. Perched at an altitude of about 1,100 meters above sea level</p>
            <div class="star">
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </div>
            <br>
            <h4>3 Days 2 Night</h4><br>
            <h6>Price: <strong>$2800</strong></h6><br>
            <a href="#book">Book Now</a>
          </div>
        </div>
      </div>


    </div>


  </div>
</section><br>

      <!-- package end -->


      


      <!-- Special Offer -->

      <!-- <div class="main-txt">
        <h1><span>S</span>PECIAL OFFER</h1>
      </div><br> -->

      <section class="package" id="package">
        <div class="container">

          <h2 style="text-align: center; font-weight: bolder; font-size: 30px; text-transform: uppercase;">Popular Packeges</h2>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="images/pack1.webp" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Experience Our Great Holiday in Kochi</h3>

                  <p class="card-text">Kochi Wonderla , Allappuzha , Around Kochi<br>4Days 3Night With Affordable Hotel , Food , Pick up Drop</p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-regular fa-clock"></i>


                        <p class="text">4D/3N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-solid fa-user-group"></i>


                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-solid fa-location-dot"></i>


                        <p class="text">Kochi</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(100+ reviews)</p>

                    <div class="card-rating">
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;" ></i>
                      <i class="fa-solid fa-star-half-stroke" style="color: #ffa500;"></i>

                    </div>

                  </div>

                  <p class="price">
                    $2250
                    <span>/ per person</span>
                  </p>

                  <a href="#book">BOOK NOW</a>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="images/pack2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Experience Our Great Holiday in munnar</h3>

                  <p class="card-text">
                    Kolukkumali , Munnar<br>
                    4Days 3Night With Affordable Hotel , Food , Pick up Drop
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-regular fa-clock"></i>


                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-solid fa-user-group"></i>


                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-solid fa-location-dot"></i>


                        <p class="text">Munnar</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(100+ reviews)</p>

                    <div class="card-rating">
                      <i class="fa-solid fa-star checked"style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked " style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star-half-stroke" style="color: #ffa500;"></i>

                    </div>

                  </div>

                  <p class="price">
                    $1950
                    <span>/ per person</span>
                  </p>

                  <a href="#book">BOOK NOW</a>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="images/pack3.jpg" alt="Experience Our Great Holiday" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Experience Our Great Holiday in varkala</h3>

                  <p class="card-text">
                    varkala , Vagamon<br>
                    4Days 3Night With Affordable Hotel , Food , Pick up Drop
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-regular fa-clock"></i>


                        <p class="text">3D/2N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-solid fa-user-group"></i>


                        <p class="text">pax: 5</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <i class="fa-solid fa-location-dot"></i>


                        <p class="text">Varkala</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(75 reviews)</p>

                    <div class="card-rating">
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star checked" style="color: #ffa500;"></i>
                      <i class="fa-solid fa-star-half-stroke" style="color: #ffa500;"></i>

                    </div>

                  </div>

                  <p class="price">
                    $1500
                    <span>/ per person</span>
                  </p>

                  <a href="#book">BOOK NOW</a>

                </div>

              </div>
            </li>

          </ul>
        </div>
      </section>
   



      <!-- Special Offer End -->


      <!-- book start -->
      <div class="main-text">
        <h1><span>B</span>OOK</h1>
      </div><br>

      <section class="book" id="book">
        <div class="container">
  
          
          
          <div class="row">
  
            <div class="col-md-6 py-3 py-md-0">
              <div class="card">
                <img src="images/book (2).jpg" alt="">
              </div>
            </div>
  
            <div class="col-md-6 py-3 py-md-0">
              <form action="book.php" method="POST">
                <h2 style="text-align: center; padding: 30PX; font-weight: bolder;">BOOK NOW</h2>
                <h4>Location</h4>
                <input type="text" class="form-control" placeholder="Where To" required name="lo" id="lo"><br>
                <h4>Adult</h4>
                <input type="text" class="form-control" placeholder="How Many" required name="ad" id="ad"><br>
                <h4>Check In</h4>
                <input type="date" class="form-control" placeholder="check In" required><br>
                <h4>Check Out</h4>
                <input type="date" class="form-control" placeholder="Check out" required><br>
                <h4>Message</h4>
                <input type="text" class="form-control" placeholder="Enter Your Name & Details" required name="de" id="de"><br>
                <!-- <textarea class="form-control" rows="5" name="text" placeholder="Enter Your Name & Details"></textarea> -->
                <input type="submit" value="Book Now" class="submit" required>
  
              </form>
            </div>
  
          </div>
        </div>
      </section>
  

      <!-- book end -->




          <!-- Section Gallery Start -->
          <div class="main-txt" >
            <h1 style="text-align: center; font-weight: bold;"><span style="color: #ffa500;">G</span>ALLERY</h1>
          </div>
    <section class="gallary" id="gallary">
      <div class="container">
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/1.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/2.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/3.jpg" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/4.avif" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/5.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/6.jpg" alt="" height="230px">
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/7.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/8.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="images/9.jpg" alt="" height="230px">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Gallery End -->


<!-- Section Services Start -->
<div class="main-txt" >
  <h1 style="text-align: center; font-weight: bold;"><span style="color: #ffa500;">S</span>ERVICES</h1>
</div>
    <section class="services" id="services"><br>
      
      <div class="container">
        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Affordable Hotel</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p> -->
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Food & Drinks</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p> -->
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Safty Guide</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p> -->
              </div>
            </div>

          </div>



        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Around The Kerala</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p> -->
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-car"></i>
              <div class="card-body">
                <h3>Fastest Travel</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p> -->
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Adventures</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p> -->
              </div>
            </div>

          </div>



        </div>

      </div>
    </section>
    <!-- Section Services End -->





    <!-- About Start -->
    <div class="main-txt" >
      <h1 style="text-align: center; font-weight: bold;"><span style="color: #ffa500;">A</span>BOUT US</h1>
    </div>
    <section class="about" id="about">
      
      <div class="container">
        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="images/about.jpg" alt="" height="500px">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>About Us</h2>
            <p>Welcome to Kerala Tourism, your gateway to exploring the enchanting beauty of “God’s Own Country.” Nestled in the southern part of India, Kerala is a land of unparalleled natural beauty, rich cultural heritage, and warm hospitality.From serene backwaters and pristine beaches to misty hill stations and vibrant festivals, Kerala offers an unforgettable experience for every traveler. Our mission is to promote sustainable tourism that celebrates Kerala's unique ecosystems, traditions, and way of life while creating lasting memories for visitors.Whether you’re a nature lover seeking tranquil landscapes, an adventurer yearning for thrilling escapades, or a history enthusiast eager to explore ancient stories, Kerala has something to captivate your soul.</p>
              
              <h3 style="font-size: 25px;font-weight: 500;">At Kerala Tourism we strive to:</h3>
              
              <p>Provide comprehensive travel resources and information to plan your journey.
              Showcase the authentic culture, cuisine, and customs of our vibrant communities.
              Support eco-friendly and community-driven tourism initiatives.
              Join us in discovering Kerala’s timeless charm and let us help you craft an experience that you’ll cherish forever.</p>
            <button id="about-btn">Read More...</button>
          </div>

        </div>

      </div>
    </section>
    <!-- About End -->

<!-- Concact start -->
<div class="main-txt" >
  <h1 style="text-align: center; font-weight: bold;"><span style="color: #ffa500;">C</span>ONTACT</h1>
</div>

<section class="contact" id="contact"> 
  <div class="cont">
    <!-- <h1> Contact Us</h1> -->
    <h2>Contact For Tour Packages</h2>
  </div>
  <div class="containe">
    <div class="contactinfo">
      <div class="box">
        <div class="ico"><i class="fa-solid fa-location-dot"></i></div>
          <div class="text">
            <h3>Address</h3>
            <p>5467 Main Road,<br> kochi,Kerala<br> 559796 </p>
          </div>
      </div>
      <div class="box">
        <div class="ico"><i class="fa fa-phone" aria-hidden="true"></i></div>
          <div class="text">
            <h3>Phone</h3>
            <p>123-456-7890</p>
          </div>
      </div>
      <div class="box">
        <div class="ico"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="text">
            <h3>Email</h3>
            <p>keralatourism@gmail.com</p>
          </div>
      </div>
    </div>
    <div class="contactform">
      <h2>Send Message</h2>
      <div class="inputbox">
        <input type="text" name="" required="required">
        <span>Full Name</span>
      </div>
      <div class="inputbox">
        <input type="email" name="" required="required">
        <span>Email</span>
      </div>
      <div class="inputbox">
        <textarea required="required"></textarea>
        <span>Type Your Message...</span>
      </div>
      <div class="inputbox">
        <input type="submit" name="" value="Send">
      </div>
    </div>
  </div>
</section>
<!-- Contact end -->
    <!-- Footer Start -->
     <footer class="footer">
      <div class="footer-container">
          <div class="footer-column">
              <h3>About Us</h3>
              <p>We aim to deliver top-notch services and maintain strong relationships with our clients.</p>
          </div>
          <div class="footer-column">
              <h3>Quick Links</h3>
              <ul>
                  <li><a href="#home">Home</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="#packages">Packages</a></li>
              </ul>
          </div>
          <div class="footer-column">
              <h3>Follow Us</h3>
              <ul class="social-icons">
                  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
              </ul>
          </div>
      </div>
      <div class="footer-bottom">
          <p>&copy; 2025 kerala Tourism. All rights reserved.</p>
      </div>
  </footer>

    <!-- Footer End -->

    <!--js file  -->
    <script src="script.js"></script>

         
</body>
</html>