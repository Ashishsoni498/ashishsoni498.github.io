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
<!--
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
-->
                            <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal">Add Service</a></li>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <span>New Services Fields Are Here.......</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        
                                    </div>

                                    <div class="col">
                                        <strong>Expiry Date</strong>
                                    </div>

                                    <div class="col">
                                        <strong>Upload Document</strong>
                                    </div>
                                </div>
                                
                                <hr>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Electrical Safety Certificate</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Gas Safety Certificate</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>PAT Testing</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Legionella Risk Assessment</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>EPC Rating</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Deed Or Title Copy</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Insurance</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Mortgoge Lender Letter</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>How to Rent Guide Supplied(YES/NO)</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Smoke Alarm</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        
                                    </div>

                                    <div class="col">
                                        <strong>Expiry Date</strong>
                                    </div>

                                    <div class="col">
                                        <strong>Upload Document</strong>
                                    </div>
                                </div>
                                
                                <hr>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Co2 Alarm</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Deposit Registration</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Landlord Id Check</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Landlord HMRC Tax Code(Yes/No)</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Credit Check</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Tenant Reference Check</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Tenant ID Check</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Fire Risk Assessment</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" width="25px" height="25px"><strong>Landlord Licence</strong>
                                    </div>

                                    <div class="col">
                                        <strong>01/05/2019</strong>
                                    </div>

                                    <div class="col">
                                        <strong><a href="">View Doc.</a></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
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