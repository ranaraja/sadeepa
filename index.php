<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SD GUEST HOUSE</title>
	<link rel="icon" type="text/css" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="b5/css/bootstrap.css">
  <script src="b5/js/bootstrap.bundle.min.js"></script>
	

  <style type="text/css">
    #myBtn{ 
      display: none;
      position: fixed;
      bottom: 100px;
      left: 20px;
      z-index: 99;
      border:none;
      outline: none;

      color: white;
      cursor:pointer;
      padding:15px;
      border-radius: 10px;
      font-size: 15px;
      font-weight: bolder;
      box-shadow: 0px 0px 5px 2px black;

    }
    #myBtn:hover{
      background-image: linear-gradient(to right,red,blue);
      color: red
    }


  </style>

  <style>
    .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #333333;
      transition: opacity 0.75s, visibility 0.75s;
    }

      .loader--hidden {
        opacity: 0;
        visibility: hidden;
      }

    .loader::after {
      content: "";
      width: 75px;
      height: 75px;
      border: 15px solid #dddddd;
      border-top-color: aqua;
      border-radius: 50%;
      animation: loading 0.75s ease infinite;
    }

      @keyframes loading {
        from {
          transform: rotate(0turn);
        }
        to {
          transform: rotate(1turn);
        }
      }
    </style>

    <script>
      window.addEventListener("load", () => {
      const loader = document.querySelector(".loader");

      loader.classList.add("loader--hidden");

      loader.addEventListener("transitionend", () => {
        document.body.removeChild(loader);
      });
    });
    </script>
  

  </head>

<body>
  
	<nav id="navbar_top" class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: aqua;">
 <div class="container-fluid">

<a class="navbar-brand" href="#" style="color: blue; font-family: calibre;" >
    <img src="images/logo.png" width="45" height="45" class="d-inline-block align-top" alt="" >
 SD GUEST HOUSE
  </a>

  <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span   class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav" >
  <ul class="navbar-nav ms-auto" >
    <li class="nav-item"><a style="color: blue; font-family: calibre;" class="nav-link" href="index.php" > Home </a></li>
   <li class="nav-item dropdown">
       <a style="color: blue; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.php" data-bs-toggle="dropdown"> Registration  </a>
        <ul class="dropdown-menu" style="background-color: darkgray">
        <li><a class="dropdown-item" href="booking.php" style="color: blue; font-family: calibre;">Online Booking</a></li>
        <li><a class="dropdown-item" href="registration1.php" style="color: blue; font-family: calibre;">Registration</a></li>
        
      
        </ul>
    </li>
    <li class="nav-item"><a style="color: blue; font-family: calibre;" class="nav-link" href="gallery.php"> Gallery </a></li>
    <li class="nav-item"><a style="color: blue; font-family: calibre;" class="nav-link" href="contact.php"> Contact </a></li>
    

<li class="nav-item dropdown">
       <a style="color: blue; font-family: calibre;" class="nav-link  dropdown-toggle" href="logim.html" data-bs-toggle="dropdown"> Login  </a>
        <ul class="dropdown-menu" style="background-color: darkgray">
        <li><a class="dropdown-item" href="user.php" style="color: darkblue; font-family: calibre;"> User </a></li>
        <li><a class="dropdown-item" href="admin.php" style="color: darkblue; font-family: calibre;"> Admin</a></li>
        
      
        </ul>
    </li>

  
        
      
        </ul>
    </li>

  </ul>
  </div> 
 </div> 
</nav>
 <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
     <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/12.jpg" alt="" class="d-block" style="width:100%;height: 900px">
      <div class="carousel-caption">
        <h3>Weclcome</h3>
        <p>SD GUEST HOUSE</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/1.jpg" alt="" class="d-block" style="width:100%;height: 900px">
      <div class="carousel-caption">
        <h3>Weclcome</h3>
        <p>SD GUEST HOUSE</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="" class="d-block" style="width:100%;height: 900px">
      <div class="carousel-caption">
       <h3>Weclcome</h3>
        <p>SD GUEST HOUSE</p>
      </div>  
    </div>
     <div class="carousel-item">
      <img src="images/6.jpg" alt="" class="d-block" style="width:100%;height: 900px">
      <div class="carousel-caption">
       <h3>Weclcome</h3>
        <p>SD GUEST HOUSE</p>
      </div>  
    </div>
     <div class="carousel-item">
      <img src="images/9.jpg" alt="" class="d-block" style="width:100%;height: 900px">
      <div class="carousel-caption">
       <h3>Weclcome</h3>
        <p>SD GUEST HOUSE</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

    </div>
  </div>
</div>  

<div class="row" style="margin-top: 25px">
  <div class="col-md-7">
    <div class="card">
      <div class="card-body">
        <center><img src="images/logo.png" style="width: 90px;height: 100px"></center>
       <h3>SD Guest House</h3>
       <h5>No: 33 Swarna Jayanthi Mawatha Kaduruwela, Kaduruwela, Polonnaruwa, Sri Lanka</h5><hr>
       The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Kaduruwela part of Polonnaruwa, this property puts you close to attractions and interesting dining options. As an added bonus, restaurant is provided on-site to conveniently serve your needs.
        
      </div>
    </div>
  </div>
  <div class="col-md-5">
    <div class="card">
      <div class="card-body">
         <h1 style="text-align: center;">Features</h1><hr>
         <ul>
            <li>Comfortable Rooms(AC/Non AC)</li>
            <li>Free Wi-Fi</li>
            <li>Parking Lot</li>
            <li>Swimming Pool</li>
            <li>Foods</li>
            with 24 hours Costumer Service


         </ul>
      </div>
    </div>
    
  </div>
</div><!--end of row1-->

<div class="row" style="margin-top: 25px">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <center><iframe width="560" height="315" src="https://www.youtube.com/embed/4IE3h6Z8sjI?si=UHJj33KN0SmNc1qJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <a href="gallery.php"><img src="images/9.jpg" style="width: 630px;height: 380px"></a>
        <a href="gallery.php" style="font-size: 20px">More photos...</a>

      </div>
    </div>
    
  </div>
</div>


<hr>

<div class="container-fluid" style="background-color: lightgray;padding: 30px;margin-top: 30px ">
  <div class="row">
    <div class="col-sm-4"><p style="font-size: 20px;font-weight: bold;">Contacts
      <li style="font-family: arial">Address: SD GUEST HOUSE,Polonnaruwa,Sri Lanka</li>
      <li style="font-family: arial">E-mail: SDguest@gmail.com</li>
      <li style="font-family: arial">Telephone: +94 78 8531533/ +94 272242081</li>
    </div>
    <div class="col-sm-4"><p style="font-size: 20px;font-weight: bold;">Quick Links
      <li><a href="index.php" style="font-family: calibre">Home</a></li>
      <li><a href="onlinebooking.php" style="font-family: calibre">Online Booking</a></li>
      <li><a href="registration.php" style="font-family: calibre">Registraion</a></li>
      <li><a href="gallery.php" style="font-family: calibre">Gallery</a></li>
      <li><a href="contact.php" style="font-family: calibre">Contact</a></li>
      <li><a href="user.php" style="font-family: calibre">User Login</a></li>
      <li><a href="admin.php" style="font-family: calibre">Admin Login</a></li>
    
  </div>
    <div class="col-sm-4"><p style="font-size: 20px;font-weight: bold;">Search
      <input type="text" class="form-control">
          
          <button type="Submit" class="btn btn-secondary" style="margin-top: 10px">Search</button>
</div>

</div>

<button onclick="topFunction()" id="myBtn" type="" ><img src="images/logo.png" width="50" height="65" alt="submit">
    
  </button>
  
  <script type="text/javascript">

  //get the button
  var mybutton=document.getElementById("myBtn");

  window.onscroll=function(){scrollFunction()};
  function scrollFunction(){
    if(document.body.scrollTop>20||document.documentElement.scrollTop>20){
      mybutton.style.display="block";

    }else{
      mybutton.style.display="none";

    }
  }
  function topFunction(){
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
  }


</script>



</body>
<div class="loader"></div>

</html>

