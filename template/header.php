<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
	  <?php header('Access-Control-Allow-Origin: *'); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>TIQS : Dashboard</title>
      <!-- MDB icon -->
      <link rel="icon" href="images/tiqs-ico.png" type="image/x-icon" />
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" crossorigin="anonymous"/>
      <!-- Google Fonts Roboto -->
	  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>	  
	  
      <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@702&family=Inter:wght@400;600;700&family=Montserrat:wght@900&display=swap" rel="stylesheet" crossorigin="anonymous">
      <!-- MDB -->
      <link rel="stylesheet" href="css/mdb.dark.min.css" />
      <link rel="stylesheet" href="css/tw-elements.min.css" />
      <link rel="stylesheet" href="css/select/customSelectBox.css" />
      <link rel="stylesheet" href="css/admin.style.css" />    
 
	  
   </head>
   <body class="noJS" id="custom-1">
      <script>
         var bodyTag = document.getElementsByTagName("body")[0];
         bodyTag.className = bodyTag.className.replace("noJS", "hasJS");
      </script>
      <main class="m-3 ">
      <div class="container-fluid">
      <div class="row ">
      <div class="col-md-3 col-lg-2 col-xl-2 main-sidebar ps-0 ms-0 pe-2 me-0">
         <div class="row ">
            <div class=" col-sm-7 col-md-12 col-7"> 
               <a href="dashboard.php" class="list-group-item  mb-3 text-white d-flex justify-content-start  " aria-current="true"> 
               <img src="images/logo.png" height="29" class="">
               </a>	
            </div>
            <div class=" col-sm-2 col-2 pt-0 d-bock d-md-none   ">
               <div class="dropdown float-end  ">
                  <i class="fas fa-clipboard-list ms-3 drop-icon"></i>
                  <a type="button" class="btn dropdown-toggle text-white" data-mdb-toggle="dropdown" aria-expanded="false" id="SelectLang">
                  &nbsp;
                  </a>
                  <ul class="dropdown-menu shadow-0 bg-warm" aria-labelledby="SelectLang">
                     <li>
                        <a class="dropdown-item border-bottom" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> French</a>
                     </li>
                     <li>
                        <a class="dropdown-item" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> English</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class=" col-sm-2 col-2 pt-1 d-bock d-md-none  ">
               <div class="dropdown float-end  ">
                  <img src="images/eng.png" width="20" height="auto" alt="language" class="lang-label ms-2" >
                  <a type="button" class="btn dropdown-toggle text-white" data-mdb-toggle="dropdown" aria-expanded="false" id="SelectLang">
                  &nbsp;
                  </a>
                  <ul class="dropdown-menu shadow-0 bg-warm" aria-labelledby="SelectLang">
                     <li>
                        <a class="dropdown-item border-bottom" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> French</a>
                     </li>
                     <li>
                        <a class="dropdown-item" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> English</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class=" col-sm-1 col-1 pt-3 d-flex justify-content-end align-items-start  "> 
               <button data-mdb-toggle="sidenav" data-mdb-target="#sidenav-1" class="navbar-toggler d-block d-md-none " aria-controls="#sidenav-1" aria-haspopup="true" aria-expanded="false" style="" aria-label="Toggle navigation">
               <i class="fas fa-bars"></i>
               </button>
            </div>
         </div>
         <div class="row ">
            <div class="col-md-12 ">
               <ul  data-mdb-close-on-esc="false" class=" d-none d-md-block sidenav2 sidenav-primary ps sidenav-menu ps-0 ms-0" data-mdb-hidden="true" data-mdb-position="fixed" data-mdb-focus-trap="false"  >
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link " href="dashboard.php"> 
                     <i class="fas fa-home fa-fw me-2"></i><span>Homepage</span></a>
                  </li>
                  <li class="sidenav-item border-bottom py-2 flex-row w-100 ">
                     <a class="sidenav-link  collapsed " data-mdb-toggle="collapse" href="#sidenav-collapse-2-0-5" role="button" >
                     <i class="fas fa-ticket fa-fw me-2"></i>
                     <span>E-Ticketing</span>
                     <i class="fas fa-angle-down rotate-icon justify-content-end" style="transform: rotate(0deg);"></i>
                     </a>
                     <ul class="sidenav-collapse collapse" id="sidenav-collapse-2-0-5" style="">
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="ticketing-visitors.php">E-Ticketing</a>
                        </li>
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="ticketing-visitors.php">E-Ticketing</a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary collapsed" data-mdb-toggle="collapse" href="#sidenav-collapse-2-0-0" role="button" ><i class="fas fa-qrcode fa-fw me-2"></i><span>QR Order </span><i class="fas fa-angle-down rotate-icon" style="transform: rotate(0deg);"></i></a>
                     <ul class="sidenav-collapse collapse" id="sidenav-collapse-2-0-0" style="">
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">QR Order</a>
                        </li>
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">QR Order</a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface" data-mdb-toggle="collapse" href="#sidenav-collapse-2-0-1" role="button"><i class="fas fa-bullhorn fa-fw me-2"></i><span>Marketing Campaigns </span><i class="fas fa-angle-down rotate-icon"></i></a>
                     <ul class="sidenav-collapse collapse" id="sidenav-collapse-2-0-1">
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">Campaigns</a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/baby-name-suggestions-tool"> 
                     <i class="fas fa-ticket-simple fa-fw me-2"></i><span>Vouchers</span>
                     </a> 
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-image fa-fw me-2"></i><span>Photo and Video</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-globe fa-fw me-2"></i><span>Your Webpage</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-network-wired fa-fw me-2"></i><span>Flow</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-qrcode fa-fw me-2"></i><span>Finance QR Ordering</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-credit-card fa-fw me-2"></i><span>Finance Ticketing</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-calendar-check fa-fw me-2"></i><span>Reservation</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-box fa-fw me-2"></i><span>Templates</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-location-crosshairs fa-fw me-2"></i><span>Lost & Found </span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-circle-user fa-fw me-2"></i><span>Users</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-address-card fa-fw me-2"></i><span>Business Profile</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="signup.php"> 
                     <i class="fas fa-arrow-right-from-bracket fa-fw me-2"></i><span>Logout  </span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-file-lines fa-fw me-2"></i><span>Legal  </span>
                     </a>
                  </li>
               </ul>
               <ul id="sidenav-1" data-mdb-close-on-esc="false" class="ps-4 pt-4 d-block d-md-none sidenav sidenav-primary ps sidenav-menu scroller ps-0 ms-0" data-mdb-hidden="true" data-mdb-position="fixed" data-mdb-focus-trap="false" style="width: 80%; height: 100%; position: fixed; transition: all 0.3s linear 0s; transform: translateX(-100%);">
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link " href=""> 
                     <i class="fas fa-home fa-fw me-2"></i><span>Homepage</span></a>
                  </li>
                  <li class="sidenav-item border-bottom py-2 flex-row w-100 ">
                     <a class="sidenav-link  collapsed " data-mdb-toggle="collapse" href="#sidenav-collapse-2-0-5" role="button" >
                     <i class="fas fa-ticket fa-fw me-2"></i>
                     <span>E-Ticketing</span>
                     <i class="fas fa-angle-down rotate-icon justify-content-end" style="transform: rotate(0deg);"></i>
                     </a>
                     <ul class="sidenav-collapse collapse" id="sidenav-collapse-2-0-5" style="">
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">E-Ticketing</a>
                        </li>
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">E-Ticketing</a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary collapsed" data-mdb-toggle="collapse" href="#sidenav-collapse-2-0-0" role="button" ><i class="fas fa-qrcode fa-fw me-2"></i><span>QR Order </span><i class="fas fa-angle-down rotate-icon" style="transform: rotate(0deg);"></i></a>
                     <ul class="sidenav-collapse collapse" id="sidenav-collapse-2-0-0" style="">
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">QR Order</a>
                        </li>
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">QR Order</a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface" data-mdb-toggle="collapse" href="#sidenav-collapse-2-0-1" role="button"><i class="fas fa-bullhorn fa-fw me-2"></i><span>Marketing Campaigns </span><i class="fas fa-angle-down rotate-icon"></i></a>
                     <ul class="sidenav-collapse collapse" id="sidenav-collapse-2-0-1">
                        <li class="sidenav-item">
                           <a class="sidenav-link ripple-surface" href="#">Campaigns</a>
                        </li>
                     </ul>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/baby-name-suggestions-tool"> 
                     <i class="fas fa-ticket-simple fa-fw me-2"></i><span>Vouchers</span>
                     </a> 
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-image fa-fw me-2"></i><span>Photo and Video</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-globe fa-fw me-2"></i><span>Your Webpage</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-network-wired fa-fw me-2"></i><span>Flow</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-qrcode fa-fw me-2"></i><span>Finance QR Ordering</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-credit-card fa-fw me-2"></i><span>Finance Ticketing</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-calendar-check fa-fw me-2"></i><span>Reservation</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-box fa-fw me-2"></i><span>Templates</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-location-crosshairs fa-fw me-2"></i><span>Lost & Found </span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-circle-user fa-fw me-2"></i><span>Users</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-address-card fa-fw me-2"></i><span>Business Profile</span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="signup.php"> 
                     <i class="fas fa-arrow-right-from-bracket fa-fw me-2"></i><span>Logout  </span>
                     </a>
                  </li>
                  <li class="sidenav-item border-bottom py-2">
                     <a class="sidenav-link ripple-surface-primary" href="/rashifal"> 
                     <i class="fas fa-file-lines fa-fw me-2"></i><span>Legal  </span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-lg-10 col-xl-10 col-md-9 pt-2 ps-2  ">
      <div class="row">
         <div class="col-md-3 pt-2 col-auto">
            <div class="d-none d-md-block"> 45330 TIQS QR MENU </div>
         </div>
         <div class="col-md-9 pe-0">
		   <div class="col-auto" >
            <select class="custom float-end d-none d-md-block"  name="countriesFlag">
               <option class="usa">TIQS QR Menu</option>
               <option class="italy">Italy</option>
               <option class="france">France</option>
               <option class="germany">Germany</option>
            </select>
			</div>
            <div class="dropdown me-4 float-end  d-none d-md-block">
               <img src="images/eng.png" width="20" height="auto" alt="language" class="lang-label" >
               <a type="button" class="btn dropdown-toggle ms-2 text-white" data-mdb-toggle="dropdown" aria-expanded="false" id="SelectLang">
               English &nbsp;
               </a>
               <ul class="dropdown-menu shadow-0 bg-warm" aria-labelledby="SelectLang">
                  <li>
                     <a class="dropdown-item border-bottom" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> French</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> English</a>
                  </li>
               </ul>
            </div>
            <div class="dropdown me-4 float-end d-none d-md-block">
               <i class="fas fa-clipboard-list drop-icon"></i>
               <a type="button" class="btn dropdown-toggle text-white" data-mdb-toggle="dropdown" aria-expanded="false" id="SelectLang">
               Manuals &nbsp;
               </a>
               <ul class="dropdown-menu shadow-0 bg-warm" aria-labelledby="SelectLang">
                  <li>
                     <a class="dropdown-item border-bottom" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> French</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href=" "> <i class="fas fa-arrow-alt-circle-left me-1"></i> English</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>