<DOCTYPE html>
    <html lang="en">
        <head>
            <title>Smart Pro Hub</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?php include 'header.php' ?>
            
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
                            <li class="nav-item"><a href="" class="nav-link">LandLords</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Tenants</a></li>
                            <li class="nav-item"><a href="additional-service.php" class="nav-link">Additional Services</a></li>
                            <li class="nav-item"><a href="index6.php" class="nav-link">Pricing</a></li>
                            <li class="nav-item"><a href="index4.php" class="nav-link">Request a Valuation</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Applicant Registration</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate Program</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!------- NAVBAR END ------->
            
            
            <!----- RENT ----->
            <div class="">
                <div class="rent-label container">
                    <div class="row">
                        <div class="col-md-8 p-3">
                            <div class="text p-3">
                                <h4>RENT</h4>
                            </div>
                            <br>
                            <div class="card rounded-0 p-3 mb-3">
                                <form action="" method="post">
                                    
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="input-group mb-3 text-center">
                                                <input type="search" class="form-control rounded-0" placeholder="Enter Postcode" required=""/>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <input type="text" class="form-control rounded-0" placeholder="Miles">
                                            </div>
                                        </div>
                                        
                                        
<!--                                        <button type="button" class="btn btn-default rounded-0" style="background-color: #FCF951; color: #201E44; font-weight: bold;">Radius</button>-->
                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control mb-3 rounded-0">
                                                <option>Property Type</option>
                                                <option>Property Type</option>
                                                <option>Property Type</option>
                                                <option>Property Type</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <select class="form-control mb-3 rounded-0">
                                                <option>Min Price</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <select class="form-control mb-3 rounded-0">
                                                <option>Max Price</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control mb-3 rounded-0">
                                                <option>Min Bed Room</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <select class="form-control mb-3 rounded-0">
                                                <option>Max Bed Room</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!------ BUTTON FIND ------>
                                    <center><a href="index2.php" class="btn btn-default rounded-0">Find</a></center>
                                </form>                          
                            </div>



                            <!------ REQUEST FOR FREE VALUVATION -------->
                            <div class="card free-valuation pb-3">
                                <div class="card-header">
                                    <h4 class="text-center" style="color: #fff;">REQUEST FOR FREE VALUATION</h4>
                                </div>
                                <br>
                                
                                <div class="container">
                                    <a href="index4.php"><button type="button" class="btn btn-default w-100">Free Online Valuation</button></a>
                                    &nbsp;
                                    <a href="index5.php"><button type="button" class="btn btn-default w-100">Book Local Expert</button></a>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-4 m-auto">
                            <img src="img/ee-banner.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>    
            </div>
            <!----- RENT ----->
            
            
            <!------ FETURED PROPERTY CAROUSEL -------->
            <div class="jumbotron">
                <div class="container">
                    <h3 class="text-center">Featured Property</h3>
                    <br>
                    <div id="myid" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>
                                                
                                                <hr style="background-color: #000;">
                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <div class="card p-2">
                                            <img src="img/carouslimg1.jpeg" class="img-fluid" alt="">
                                            <div class="row py-1">
                                                <div class="col-md-6">
                                                    <h5>For Sale</h5>
                                                    <p>Alkury, Tring</p>
                                                </div>

                                                <div class="col-md-6 text-danger" id="right">
                                                    <h6 class="font-weight-bold"><span>&#163;</span>25000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myid" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myid" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!------ FETURED PROPERTY CAROUSEL END ------>
            
            <br>
            <!------ OUR CLIENTS ----->
            <div class="our-clients">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="img/clientlogos.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="img/clientlogos.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="img/clientlogos.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="img/clientlogos.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="img/clientlogos.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="img/clientlogos.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!------ OUR CLIENTS END ------>
                
                
            <!------ CUSTOMERS REVIEWS ------->
            <div class="customers-review mt-3">
                <div class="container">
                    <h2 class="pb-4 text-center">Customer Review</h2>
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <center><img src="img/cusomreviewimg.jpg" class="rounded-circle pb-3" alt="" width="100">
                                    <h5>Name Here</h5>
                                </center>  
                                <br>
                                <div class="container">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p></div>
                            </div>
                            <div class="carousel-item">
                                <center><img src="img/cusomreviewimg.jpg" class="rounded-circle pb-3" alt="" width="100">
                                    <h5>Name Here</h5>
                                </center>
                                <br>
                                <div class="container">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p></div>
                            </div>
                            <div class="carousel-item">
                                <center><img src="img/cusomreviewimg.jpg" class="rounded-circle pb-3" alt="" width="100">
                                    <h5>Name Here</h5>
                                </center>
                                <br>
                                <div class="container">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p></div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
            </div>
            <!------ CUSTOMERS REVIEW SECTION END HERE ------->      
            
            
            
            <!------- AFTER REVIEW SECTION -------->
            <div class="after-review-section py-5 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <div class="">
                                <img src="img/meetourexpert.png" class="img-fluid" alt="" width="200">
                                <br>
                                <h5>Meet Our Experts</h5>
                            </div>  
                        </div>
                        
                        <div class="col-md-4 m-auto">
                            <div class="">
                                <img src="img/landloardservice.png" class="img-fluid" alt="" width="200">
                                <br>
                                <h5>Landlord Services</h5>
                            </div>  
                        </div>
                        
                        <div class="col-md-4 m-auto">
                            <div class="">
                                <img src="img/lettingservice.png" class="img-fluid" alt="" width="200">
                                <br>
                                <h5>Letting Services</h5>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <!------- AFTER REVIEW SECTION -------->
            
            
            <hr class="p-0 m-0">
            
            
            <!------- BOTTOM LINKS ------->
            <div class="bottom-links text-center">
                <div class="container">
                    <div class="">
                        <a href="">Registration Office</a>
                        &nbsp;
                        &nbsp;
                        <a href="">About us</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Join us</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Contact us</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Social Media Connect</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Sitemap</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Latest Article/Blogs</a>
                    </div>  
                    
                    <br>
                    
                    <div class="">
                        <a href="">Terms & Conditions</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Policies</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Cookies Policy</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Disclaimer</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Lettings Terms</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Refund Policy</a>
                        &nbsp;
                        &nbsp;
                        <a href="">Complain Procedure</a>
                    </div>
                </div>
            </div>
            <!------- BOTTOM LINKS ------->
            
        </body>
    </html>