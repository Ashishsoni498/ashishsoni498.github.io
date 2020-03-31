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
            
            <!------- NAVBAR ------->
            <div class="navbar-begin">
                <nav class="navbar navbar-expand-md navbar-default">
                    <!----- COLLAPSE BUTTON ------>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav">
                        <i class="fas fa-bars"></i>
                    </button>
                
                    <!------ MENUS ----->
                    <div class="collapse navbar-collapse" id="nav">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item"><a href="" class="nav-link">LandLord</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tenants</a></li>
                            <li class="nav-item"><a href="additional-service.php" class="nav-link">Additional Services</a></li>
                            <li class="nav-item"><a href="index6.php" class="nav-link">Pricing</a></li>
                            <li class="nav-item"><a href="index4.php" class="nav-link">Request a Valuation</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!------- NAVBAR END ------->
            
            
            <!----- APPLICANT DETAIL ------>
            <div class="applicant-details">
                <div class="container">
                    <center><h2 class="p-3">Applicant Details</h2></center>
                    
                    <div class="form-strt">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control rounded-0" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            <span class="text-danger">Your email address is verified (TICK) Your phone number is verified by text code (TICK)</span>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Number Of Adults ?</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Number Of Kids ?</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Pet YES/NO</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Smoking YES/NO</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="date" class="form-control rounded-0" placeholder="Prefere Move In Date">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Salary">
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Occupation">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            <center><h2>REQUIREMENT</h2></center>
                            <br>
                            <br>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Property Type (House/Flat/Banglow/Rooms/Other)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Min Rent (<span>&#163;</span>) PCM</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Max Rent (<span>&#163;</span>) PCM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Min Bedrooms</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Max Bedrooms</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Area Of Interest">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Add Another Area Of Interest">
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Free Parking (Yes/No/May Be)</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Garage (Yes/No/May Be)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Garden (Yes/No/May Be)</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Let Type (Family/Professional/Students)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Let Period Min (1 Month / 2 Month So On)</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select class="form-control rounded-0">
                                            <option>Looking Furnished (Furnished/Unfurnished/Part furnished)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            <center><h2>Communication Preference</h2></center>
                            
                            <div class="row">
                                <div class="col">
                                    <h5 class="font-weight-bold">Preferred Method</h5>
                                </div>
                                
                                <div class="col">
                                    <input type="checkbox"> (Email)
                                </div>
                                
                                <div class="col">
                                    <input type="checkbox"> (Phone)
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col">
                                    <h5 class="font-weight-bold">Marketing Consents</h5>
                                </div>
                                
                                <div class="col">
                                    <input type="checkbox"> (Consent Given)
                                </div>
                                
                                <div class="col">
                                    <input type="checkbox"> (Consent Denied)
                                </div>
                            </div>
                            
                            <br>
                            <center><a href="" class="btn btn-default rounded-0" style="background-color: #422057; color: #fff;">Save</a></center>
                            <br>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <center><a href="" class="btn btn-default rounded-0 w-100" style="background-color: #422057; color: #fff;">Back To SmarPro Hub</a></center>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <center><a href="" class="btn btn-default rounded-0 w-100" style="background-color: #422057; color: #fff;">Back To Website</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!----- APPLICANT DETAIL ------>
            
                        
                        
                        
            
            
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