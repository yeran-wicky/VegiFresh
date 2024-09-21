<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>VegiFresh - Profile</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <?php
        include "php/head.php";
        ?>

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">123, Nuwara Eliya, Sri Lanka</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">vegifresh@gmail.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white" onclick="gotoprivacypolicy()"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white" onclick="gototermsofuse()"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white" onclick="gotoaboutus()"><small class="text-white mx-2">About Us</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="#" class="navbar-brand"><h1 class="text-primary display-6">VegiFresh</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="#" onclick="gotoadminhome()" class="nav-item nav-link">Dashboard</a>
                            <a href="#" onclick="gotoitem()" class="nav-item nav-link">Item</a>
                            <a href="#" onclick="gotocustomer()" class="nav-item nav-link">Customer</a>
                            <a href="#" onclick="gotoweighting()" class="nav-item nav-link">Weighting</a>
                            <a href="#" onclick="gotoreport()" class="nav-item nav-link">Report</a>
                        </div>
                    </div>
                    <div class="me-0">
                        <a href="#" onclick="gotocart()" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                        </a>
                        <a href="#" onclick="gotoprofile()" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Profile</h1>
        </div>
        <!-- Single Page Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-1">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h6 class="text-warning">Logged in as</h6>
                                <h1 class="text-primary">Yeran Wickramaarachchi</h1>
                                <br><button type="button" class="btn btn-primary border-2 border-secondary py-2 px-3 rounded-pill text-white h-150" data-bs-toggle="modal" data-bs-target="#confirmationModal">Log Out</button><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!--Logout confirmation modal-->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Log Out</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                    </div>
                    <div class="modal-body">
                        Are you sure you want to log out?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger text-white" id="confirmAction">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Logout confirmation modal end-->

        <!--Cart not supported modal popup-->
        <div class="modal fade" id="nocartModal" tabindex="-1" role="dialog" aria-labelledby="nocartModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="nocartModalLabel">Alert</h5>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>This option isn't avaliable to admin users.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Cart not supported modal popup end-->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">VegiFresh</h1>
                                <p class="text-secondary mb-0">Fresh products</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">VegiFresh emphasizes that your produce is sourced from nearby farms, ensuring freshness and supporting local agriculture.</p>
                            <a href="#" onclick="gotoadminhome()" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Go to Dashboard</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="#" onclick="gotoaboutus()">About Us</a>
                            <a class="btn-link" href="#" onclick="gotocontact()">Contact Us</a>
                            <a class="btn-link" href="#" onclick="gotoprivacypolicy()">Privacy Policy</a>
                            <a class="btn-link" href="#" onclick="gototermsofuse()">Terms & Condition</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="#" onclick="gotoadminhome()">Dashboard</a>
                            <a class="btn-link" href="#" onclick="gotoitem()">Item</a>
                            <a class="btn-link" href="#" onclick="gotocustomer()">Customer</a>
                            <a class="btn-link" href="#" onclick="gotoweighting()">Weighting</a>
                            <a class="btn-link" href="#" onclick="gotoreport()">Report</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 123, Nuwara Eliya, Sri Lanka</p>
                            <p>Email: vegifresh@gmail.com</p>
                            <p>Phone: +94 70 518 6009</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><i class="fas fa-copyright text-light me-2"></i>VegiFresh, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        Designed By Yeran Wicky - CotDevOps 2024
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <?php
        include "php/foot.php";
        ?>

    </body>
    
</html>