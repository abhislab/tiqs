<html lang="en">
   <head>
      <title>Login</title>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@702&family=Inter:wght@400;600;700&family=Montserrat:wght@900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/core.css" /> 
      <link rel="stylesheet" href="css/login.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
      <script type="text/javascript" src="js/mdb.min.js" as="script"></script> 
   </head>
   <body class="text-white">
      <header>
         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-darks pt-3 pb-3">
            <!-- Container wrapper -->
            <div class="container">
               <!-- Navbar brand -->
               <div class="col-md-6 " >
                  <a class="navbar-brand me-2 ms-md-4" href="#">
                  <img src="images/logo.png" height="25" alt="TOQS Logo" loading="lazy" class="header-logo"/>
                  </a>
               </div>
               <div class="col-md-6 float-end ">
                  <a href="signup.php" class="btn bg-warm custom-btn me-3 btn-sm float-end">
                     Register
                  </a>	 
                  <div class="dropdown me-4 float-end">
                     <img src="images/eng.png" width="20" height="auto" alt="language" class="lang-label" >
                     <a type="button" class="btn dropdown-toggle text-white" data-mdb-toggle="dropdown" aria-expanded="false" id="SelectLang">
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
               </div>
            </div>
         </nav>
         <!-- Navbar -->
      </header>
      <main class="mb-5">
         <div class="container ps-md-0 mt-0 pt-0 pe-md-0">
            <!--Grid row-->
            <section class="vh-100">
               <div class="container py-5 pt-0 h-100">
                  <div class="row d-flex align-items-center justify-content-center h-100">
                     <div class="d-lg-none d-xl-block d-none d-xs-none d-md-none d-sm-none d-md-block mb-sm-4 col-lg-7 col-xl-6 ps-0 me-4 bg-warm">
                        <section class="mt-5 text-center">
                           <div class="header justify-content-center text-center text-black w-100">
                              The #1 platform
                           </div>
                           <p class="text-black brief"> for increasing your revenue, even better </br>service and lower operating costs </p>
                        </section>
                        <div class="col-11 position-relative">
                           <img src="images/main.png" class="object-cover img-fluid mb-8" />
                        </div>
                     </div>
                     <div class="d-block  col-xs-12 col-sm-12 col-md-8 col-lg-5 col-xl-5 offset-xl-1 ms-sm-4 mt-xs-5 mt-sm-5 align-items-start" >
                        <div class="btn-group col-12 mb-5" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-warm border border-warning login-option bg-warm">Company</button>
                           <button type="button" class="btn btn-warm border border-warning login-option text-white">Employee</button>
                           <button type="button" class="btn btn-warm border border-warning login-option text-white">Merchant</button>
                           <button type="button" class="btn btn-warm border border-warning login-option text-white">Persnol</button>
                        </div>
                        <div class="row pb-1">
                           <div class="col-12 ">
                              Welcome back
                           </div>
                        </div>
                        <div class="header">Login to your account</div>
                        <form class="custom-form mt-4  " autocomplete="off">
                           <div class="form-outline2 mb-4">
                              <div class="row pb-1">
                                 <div class="col-12  ">
                                    Email
                                 </div>
                              </div>
                              <input type="text" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter email" />
                           </div>
                           <div class="form-outline2 mb-4 position-relative">
                              <div class="row pb-1">
                                 <div class="col-6  ">
                                    Password
                                 </div>
                                 <div class="col-6 text-end">
                                    <a href="#!" class="text-warm">Forgot password?</a>
                                 </div>
                              </div>
                              <i class="fas fa-eye-slash trailing position-absolute end-0 mt-3 me-3"></i>
                              <input type="text" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter password" />
                           </div>
                           <!-- Submit button -->
                           <button type="button" class="btn btn-lg bg-warm custom-btn text-black w-100 mb-4 text-capitalize">Login</button>
                           <!-- Register buttons -->
                           <div class="text-center " style="margin-top:140px">
                              <p>Don't have an account? <a href="#!" class="text-warm">Join free today</a></p>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </main>
   </body>
</html>