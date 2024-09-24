<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>VegiFresh - Item</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <script type="text/javascript" src="js/index.js"></script>

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
                            <a href="#" onclick="gotoitem()" class="nav-item nav-link active">Item</a>
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
        <!-- Navbar End --><br><br><br>

        <!-- Hero Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Item</h1>
                            </div>
                        </div>
                        <div class="col-6">
                            <form action="" class="" id="itemform">
                                <!-- <select class="w-100 form-select border-0 py-3 mb-4" id="iname" name="iname"><option value="">Select item</option></select> -->
                                <select class="w-100 form-select border-0 py-3 mb-4" id="icode" name="icode"></select>
                                <input type="password" class="w-100 form-control border-0 py-3 mb-4" placeholder="Price">
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="button" onclick="itmsubmit()">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="itemdata"></div>
            </div>
            <div class="container-fluid contact py-0">
                <div class="container py-0">
                    <div class="container p-5 bg-light rounded">
                        <div class="container py-5 row g-4 justify-content-center">
                            <div class="container">
                                <div id="tablelist" class="col-md-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        

        <!-- Fact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->

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

        <script type="text/javascript">
            $(document).ready(function(){
                showlist()
                $("#itemform").submit(function(e){
                    e.preventDefault();
                    find();
                });
            });

            function showlist(){
                $.ajax({
                    type:'post',
                    data:{ },
                    url:'itemlist.php',
                    success:function(response){
                        $("#tablelist").html(response);
                    }
                })
            }
        </script>
        
    </body>

</html>