<DOCTYPE html>
    <html lang="en">
        <head>
            <title>Smart Pro Hub</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!--- FONT AWESOME --->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

            <!--- ENTERNAL CSS --->
            <link rel="stylesheet" href="css/style.css">
            
            <!----- GOOGLE FONT ------>
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        </head>
        <body>   
            <!------ ADVERTISE NOW BUTTON ------->
            <div class="advertise-btn mt-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!---- LOGO ---->
                            <a href="index.php" class="navbar-brand"><img src="img/logos2.png" class="img-fluid" alt="promptmove" width="150"></a>
                        </div>
                    
                        <div class="col text-right mt-4">
                            <a href="" class="btn btn-default rounded-0">Sign Out <i class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!------ ADVERTISE NOW BUTTON END ------->
            
            <br>
            
            <!----- NAVITEM ----->
            <nav class="navbar navbar-expand-md navbar-default">
                <div class="container">
                    <!----- COLLAPSE BUTTON ------>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav">
                        <i class="fas fa-bars"></i>
                    </button>
                    <!------ MENUS ----->
                    <div class="collapse navbar-collapse" id="nav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Price & Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-circle fa-2x"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!----- NAVITEMS END ------>
            
            
            <!----- SIDE BAR ----->
            <div class="side-bar">
                <div class="row no-gutter m-0">
                    <div class="col-md-3 p-4">
                        <div class="user-icon">
                            <i class="fas fa-user-circle text-white fa-4x"></i>
                            <br>
                            <span class="font-weight-bold text-white">Welcome Jhon</span>
                        </div>
                        <br>
                        <br>
                        <div class="user-menus">
                            <a href="user-profile.php" class="">Profile</a>
                            <hr>
                            <a href="property-listing.php" class="">My Recent Listing</a>
                            <hr>
                            <a href="index11.php" class="">Saved Property</a>
                            <hr>
                            <a href="viewing-property.php" class="">Viewings</a>
                            <hr>
                            <a href="landloard-complicance.php" class="">Landlord Compliance</a>
                            <hr>
                            <a href="payment_history.php" class="">Payment History</a>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-9 card-header p-3">
                        <center><img src="img/userlogo.png" class="img-fluid" alt="" width="200"></center>
                        <center><input type="file"></center>
                        
                        <br>
                        <br>
                        
                        <form>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="font-weight-bold mb-3" style="color: #422057;"> LANDLORD DETAIL</h3>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" name="ind"> Individual
                                        </div>
                                        <div class="col">
                                            <input type="radio" name="ind"> Companies
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="User Name" name="usrname" required="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Last Name" name="lstname" required="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Company Name" name="cmpnyname" required="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control rounded-0" placeholder="Address" rows="3" name="cmpnyname" required=""></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Phone" name="phn" required="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control rounded-0" placeholder="E-mail" name="emal" required="">
                                    </div>
                                    
                                    <span>Point of Contact</span><br>
                                    <input type="radio" name="sel"> Yes &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sel"> No
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <a href="" class="btn btn-default rounded-0 mt-2">Add Another Landlord</a>
                                        </div>
                                        <div class="col">
                                            <a href="" class="btn btn-default rounded-0 mt-2">Remove</a>
                                        </div>
                                        <div class="col">
                                            <a href="" class="btn btn-default rounded-0 mt-2">Edit</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                            
                            
                        <hr>
                        
                          <div class="row">  
                            <div class="col-md-12">
                                <h3 class="font-weight-bold mb-3" style="color: #422057;"> Add Another Landlord Info</h3>
                                <form action="" method="post">
                                    <div class="form-group mb-3">
                                        <textarea class="form-control rounded-0" placeholder="Current Address" rows="3" name="curadd" required=""></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control rounded-0" placeholder="Flat/House No." rows="3" name="flthou" required=""></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Number" name="num" required="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Street" name="strt" required="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Select City</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Postcode" name="pstcode" required="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Country</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    
                                    <span><strong>Coresponding Address If Different:</strong></span> &nbsp;
                                    <input type="radio" name="sel"> Yes &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sel"> No
                                    <br>
                                    <br>
                                    
                                    <div class="form-group mb-3">
                                        <textarea class="form-control rounded-0" placeholder="Coresponding Address" rows="3" name="flthou" required=""></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                            
                            <center><a href="" class="btn btn-success rounded-0">SAVE</a></center>
                        </form>
                        
                        <br>
                        
                        <h5 class="font-weight-bold" style="color: #422057;">Communication Preferences</h5>
                        
                        <span class="text-danger" style="text-decoration: underline;">SMS Preferences+</span>
                        
                        <p>We will contact you by SMS about each and every viewing request that is submitted for all of your properties. You can change this default behaviour here.</p>
                        
                        
                        
                        <p><strong>NOTE:-</strong> Regardless of your entries here, tenants will be able to contact you 27/7 about your property and your enquiries will appear in your dashboard. We will always expect you to contact all tenants within 48 hour of viewing request.</p>
                        
                        <div class="row">
                            <div class="col">
                                <strong>SMS Sent for each viewing request.</strong>  
                            </div>
                            
                            <div class="col">
                                <div class="outerDivFull" >
                                    <div class="switchToggle">
                                        <input type="checkbox" id="switch">
                                        <label for="switch">Toggle</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col">
                                <strong>Send SMS 24 hours a day (I don't mind)</strong>  
                            </div>
                            
                            <div class="col">
                                <div class="outerDivFull" >
                                    <div class="switchToggle1">
                                        <input type="checkbox" id="switch1">
                                        <label for="switch1">Toggle</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <strong>Send SMS as long as it is after (GMT 24-hour clock);</strong>
                        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="8:00">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                        </div>
                        
                        <strong>Send SMS as long as it is after (GMT 24-hour clock);</strong>
                        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="22:00">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                        </div>
                        
                        <span class="text-danger" style="text-decoration: underline;">Tenant Pre_Screening Preferences+</span>
                        
                        <p>If your listings are attracting many enquiries, you can enable automatic pre-screening. This introduces an extra step for tenants, asking them to provide additional information. While this means your listing may receive less enquiries, it also give you more information on the ones that reach you.</p>
                        
                        <p>We may enable this option automatically if we feel that your listing is getting an excessive number of enquiries.</p>
                        
                        <strong>Default Screening <i class="fas fa-question-circle"></i></strong>
                    </div> 
                        
                        
                        
            
            
            <!------ BOTTOM DIV ------->
            <div class="bottom-div">
                <div class="container">
                    <div class="bottom-anchor">
                        <a href="">Where to Find Us</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Contact us</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Terms</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Social Media Connect</a>
                    </div>
                </div>
            </div>   
            <!------ BOTTOM DIV END ------->
        </body>
    </html>