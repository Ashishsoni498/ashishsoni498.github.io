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
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#addproperty" role="tab" aria-controls="home" aria-selected="true">Add Property Detail</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content mt-5" id="myTabContent">
                            <!----- ADD PROPERTY FORM START FORM HERE ------->
                            <div class="tab-pane fade show active" id="addproperty" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="font-weight-bold">Property / Room Details</h3>
                                
                                <br>
                                
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <lable class="font-weight-bold">Post Code <i class="fas fa-exclamation-circle"></i></lable>
                                                <input type="text" class="form-control rounded-0" placeholder="Post Code">
                                                <button type="button" class="btn btn-default rounded-0 mt-2" style="background-color: #422057; color: #fff;">Find Address</button>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <lable class="font-weight-bold">Property & Rental Type</lable>
                                                <select class="form-control rounded-0">
                                                    <option>Select</option>
                                                    <option>Semi-Detached House</option>
                                                </select>
                                            </div>  
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <lable class="font-weight-bold">Flat or House Number (Kept Private) <i class="fas fa-exclamation-circle"></i></lable>
                                                <input type="text" class="form-control rounded-0" placeholder="Flat or House Number">
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <lable class="font-weight-bold">Number Of Bedrooms</lable>
                                                        <input type="text" class="form-control rounded-0" placeholder="Number Of Bedrooms">
                                                    </div>  
                                                </div>
                                                
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <lable class="font-weight-bold">Number Of Bathrooms</lable>
                                                        <input type="text" class="form-control rounded-0" placeholder="Number Of Bathrooms">
                                                    </div>  
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <lable class="font-weight-bold">Address Line 2 (Optional) <i class="fas fa-exclamation-circle"></i></lable>
                                                <input type="text" class="form-control rounded-0" placeholder="Eg. 10 Downing St or Westminster">
                                            </div>  
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <lable class="font-weight-bold">Furnishing Options</lable>
                                            <select class="form-control rounded-0">
                                                <option>Please Select -></option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <lable class="font-weight-bold">Address Line 3 (Optional)</lable>
                                                <input type="text" class="form-control rounded-0" placeholder="Eg. 10 Downing St or Westminster">
                                            </div>  
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <lable class="font-weight-bold">EPC Rating (<span class="text-primary">Purchase EPC  For <span>&#163;</span>49</span>) <i class="fas fa-exclamation-circle"></i></lable>
                                            <input type="text" class="form-control rounded-0" placeholder="">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <lable class="font-weight-bold">Town</lable>
                                                <input type="text" class="form-control rounded-0" placeholder="">
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    <h3>Property Description</h3>
                                    <div class="row" id="align-one">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6 mt-2">
                                                    <a href="" class="btn btn-default rounded-0" style="background-color: #422057; color: #fff;">Add Description Now</a>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <a href="" class="btn btn-default rounded-0" style="background-color: #fff; color: #422057; border: 1px solid #ddd;">Add Description Later</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <textarea class="form-control rounded-0 mt-3" rows="5" placeholder="Add Description Here"></textarea>
                                    
                                    <br>
                                    <br>
                                    
                                    <h3>Tenancy Details</h3>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="font-weight-bold">Monthly Rent For Entire Property <i class="fas fa-exclamation-circle"></i></label>
                                                <div class="" style="display: flex;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text rounded-0"><span>&#163;</span>s</span>
                                                    </div>
                                                    <input type="text" class="form-control rounded-0" placeholder="0.00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text rounded-0">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">    
                                            <div class="form-group mb-3">
                                                <label class="font-weight-bold">Minimum Tenancy Lenght <i class="fas fa-exclamation-circle"></i></label>
                                                <div class="" style="display: flex;">
                                                    <input type="text" class="form-control rounded-0" placeholder="0.00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text rounded-0">Months</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">    
                                            <div class="form-group mb-3">
                                                <label class="font-weight-bold">Earliest Move In Date</label>
                                            </div>
                                        </div>
                                    </div>
                                        
                                        
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form=group mb-3">
                                                <label class="font-weight-bold">Weekly Rent For Entrie Property <i class="fas fa-exclamation-circle"></i></label>
                                                <div class="mb-3" style="display: flex;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text rounded-0"><span>&#163;</span>s</span>
                                                    </div>
                                                    <input type="text" class="form-control rounded-0" placeholder="0.00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text rounded-0">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="font-weight-bold">Maximum Number Of Tenants <i class="fas fa-exclamation-circle"></i></label>
                                                <input type="text" class="form-control rounded-0" placeholder="0.00">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form=group mb-3">
                                                <label class="font-weight-bold">Deposit Amount <i class="fas fa-exclamation-circle"></i></label>
                                                <div class="mb-3" style="display: flex;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text rounded-0"><span>&#163;</span>s</span>
                                                    </div>
                                                    <input type="text" class="form-control rounded-0" placeholder="0.00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text rounded-0">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    
                                    <h3>Feature</h3>
                                    <p>Please tell us about any particular features of your property / tenancy.</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Bills Included</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch1">
                                                            <label for="switch1">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Parking</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch3">
                                                            <label for="switch3">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Garden Access</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch4">
                                                            <label for="switch4">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Fireplace</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch6">
                                                            <label for="switch6">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <br>
                                    <br>
                                    <br>
                                    
                                    
                                    <h3>Tenants Preferences</h3>
                                    <p>Please tell us about who can apply for your property.</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Students Allowed</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch6">
                                                            <label for="switch6">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Pets Allowed</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch7">
                                                            <label for="switch7">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Families Allowed</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch8">
                                                            <label for="switch8">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Smokers Allowed</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch9">
                                                            <label for="switch9">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">DSS Available</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch10">
                                                            <label for="switch10">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold">Students Only</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="outerDivFull" >
                                                        <div class="switchToggle-addpropertydashboard">
                                                            <input type="checkbox" id="switch11">
                                                            <label for="switch11">Toggle</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <br>
                                <br>
                                
                                <h3>Photos & Videos</h3>
                                <p>Over research form over 3,01,000 property rental shows professional quality photographs obtain 10% higher rental value, whilst still generation the same number of tenants leads.</p>
                                
                                <br>
                                
                                <p>OpenRent can send a photographer to your property and have professional photos automatically added to your advert in days.</p>
                                
                                <center><a href="" class="btn btn-default rounded-0" style="background-color: #fff; border: 1px solid #ddd; color: #000;">Learn More</a></center>
                                
                                <br>
                                
                                <p>Have your own photos? Please the photos you would like to display on your listing page:</p>
                                
                                <br>
                                <br>
                                
                                <h3>Terms</h3>
                                <input type="checkbox" id="checkmark" name="markcheck"> <strong>Tick Here To Agree To The OpenRent Terms:</strong></div>
                                <span>I confirm that  I change no admin fees to tenants, that I am the landlord of this property and have the right to offer it for rental, and i agree to the OpenRent <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>.</span><br>
                                <br>
                                <span>I also agree to the additional promotional terms outlines below.</span>
                            
                                <br>
                                <br>
                            
                                <center><div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-default rounded-0">Submit & Preview</button>
                                    <button type="button" class="btn btn-default rounded-0">Save </button>
                                    <button type="button" class="btn btn-default rounded-0">Reset</button>
                                </div></center>
                                
                            <br>
                            <br>
                            <br>
                            
                            <h6 class="font-weight-bold">Promotional Listing Terms and Conditions</h6>
                            <p>All promotional listing will be treated as fully paid listings as advertised on our website (and described here), bar the following restrictions:</p>
                            
                            <ul>
                                <li>Zoopla Property Group and Rightmove: We can only list promotional listing on Zoopla Property Group and Rightmove owned and syndicated portals for 5 days. After this time you will be given the option to upgrade for <span>&#163;</span>24, thus keeping your property on the portals until you tell us it has been let. If you don't upgrade, this won't affect you presence on other partner portals or OpenRent itself, and enquiries will come thought as normal.</li>
                            </ul>
                        </div>
                   
                    
                            <!----- ADD PROPERTY FORM END FORM HERE ------->
                            
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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