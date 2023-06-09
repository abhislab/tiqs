<html lang="en">
    <head>
        <title>Signup !</title>
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
            <nav class="navbar navbar-expand-lg navbar-dark bg-darks pt-3 pb-3"> 
                <div class="container"> 
					<div class="col-md-6 " >
                    <a class="navbar-brand me-2 ms-md-4" href="#">
                        <img src="images/logo.png" height="25" alt="TOQS Logo" loading="lazy" class="header-logo"/>
                    </a>
                    </div>  
                      <div class="col-md-6 float-end "> 
                        <a href="index.php" class="btn bg-warm me-3 custom-btn btn-sm float-end">
                            Login
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
                <section class="   ">
                    <div class="container py-5 pt-0  ">
                        <div class="row d-flex align-items-start justify-content-center ">
                            <div class="d-lg-none d-xl-block d-none d-xs-none d-md-none d-sm-none d-md-block mb-sm-4 col-lg-7 col-xl-6 ps-0 me-4 bg-warm   align-items-start pb-4">
                                <section class="mt-5 text-center">
                                     <div class="header justify-content-center text-center text-black w-100">
									  The #1 platform
									  </div> 
                                    <p class="text-black brief"> for increasing your revenue, even better </br>service and lower operating costs </p>
                                </section>
                                <div class="col-11 position-relative mb-10">
                                    <img src="images/main.png" class="object-cover img-fluid mb-8" />
                                </div>
                            </div>
                            <div class="d-block col-xs-12 col-sm-12 col-md-8 col-lg-5 col-xl-5 offset-xl-1 ms-sm-4 mt-4"> 
                                <div class="row pb-1 ">
                                    <div class="col-12  ">
                                        Welcome to TIQS
                                    </div>
                                </div>
                                <div class="header">Register your business</div>
                                <form class="custom-form mt-4" autocomplete="off">
								
                                  <div class="form-outline2 mb-4">
                                        <div class="row pb-1">
                                            <div class="col-12 small">
                                                Your business name
                                            </div>
                                        </div>
                                        <input type="text" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter business name" />
                                    </div> 
                                   <div class="form-group mb-4 position-relative">
                                     <label for="">Example multiple select</label>
									 <i class="fas fa-angle-down position-absolute end-0 me-3" style="margin-top:36px"></i>
                                     <select class="form-control form-control-md pt-2 pb-2 mt-2" id="">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                     </select>
                                   </div>		 
                                    <div class="form-outline2 mb-4">
                                        <div class="row pb-1">
                                            <div class="col-12 small">
                                               Company email
                                            </div>
                                        </div>
                                        <input type="text" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter email" />
                                    </div>		
									
                                    <div class="form-outline2 mb-4">
									<div class="row pb-1">
									  <div class="col-6 small">
									   <p class="pb-0 mb-2"> Responsible person first name </p>
										
										<input type="text" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter email" />
									  </div>
									  <div class="col-6 small">
									   <p class="pb-0 mb-2"> Responsible person last name </p>
										
										<input type="text" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter email" />									  
									  </div>									  
									</div>
									</div> 
                                  <div class="form-outline2 mb-4">
                                        <div class="row pb-1">
                                            <div class="col-12 small">
                                                Company phone number
                                            </div>
                                        </div>
                                        <input type="text" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter email" />
                                    </div>	
                                    <div class="form-outline2 mb-4 position-relative">
                                        <div class="row pb-1">
                                            <div class="col-12 small">
                                                Choose a good unique password
                                            </div> 
                                        </div>
										<i class="fas fa-eye-slash trailing position-absolute end-0 mt-3 me-3" ></i>
                                        <input type="Password" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter password" />
                                    </div> 									
                                    <div class="form-outline2 mb-4">
                                        <div class="row pb-1">
                                            <div class="col-12 small">
                                                Repeat Password
                                            </div>
                                        </div>
                                        <input type="Password" class="form-control input-lg pt-2 pb-2" id="email" placeholder="Enter email" />
                                    </div>	    
                                    <!-- Register button -->
                                    <button type="button" class="btn btn-lg bg-warm text-black btn-block mb-4 text-capitalize custom-btn">Resigister Account</button> 
                                    <!-- Register buttons --> 
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </body>
</html>
 