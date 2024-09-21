<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
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
                            <a href="#" onclick="goback()" class="nav-item nav-link active">Go Back</a>
                        </div>
                    </div>
                    <div class="me-0">
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Terms of Use</h1>
        </div>
        <!-- Single Page Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-1">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">VegiFresh</h1>
                                <p class="mb-4">
                                    These Terms of Use govern your use of [Website Name] (the "Website"), a platform that provides information about and facilitates the purchase and sale of vegetables.
                                    By accessing or using the Website, you agree to be bound by these Terms.
                                    If you do not agree to these Terms, please do not use the Website.
                                    
                                    <h5 class="text-primary">Use of the Website</h5>
                                    <h6 class="text-warning">You may use the Website for personal, non-commercial purposes only. You agree not to:</h6>

                                    Use the Website in any manner that could damage, disable, overburden, or impair the Website or interfere with any other party's use of the Website.
                                    Use the Website to collect or harvest any information about other users.
                                    Use the Website to transmit any harmful or offensive material.
                                    Violate any applicable laws or regulations.

                                    <h5 class="text-primary">Intellectual Property</h5>

                                    All content on the Website, including text, graphics, images, and logos, is the property of [Website Name] or its licensors and is protected by copyright and other intellectual property laws.
                                    You may not reproduce, modify, distribute, or otherwise use any content from the Website without our prior written permission.

                                    <h5 class="text-primary">Disclaimer of Warranties</h5>

                                    The Website is provided "as is" without any warranties, express or implied.
                                    [Website Name] makes no representations or warranties about the accuracy, completeness, or reliability of the content on the Website.
                                    You use the Website at your own risk.

                                    <h5 class="text-primary">Limitation of Liability</h5>

                                    [Website Name] shall not be liable for any damages, including but not limited to direct, indirect, incidental, special, or consequential damages, arising out of or in connection with your use of the Website.
                                    
                                    <h5 class="text-primary">Indemnification</h5>
                                    You agree to indemnify and hold [Website Name] harmless from and against any claims, liabilities, damages, and expenses (including reasonable attorneys' fees) arising out of or in connection with your use of the Website or your violation of these Terms.

                                    <h5 class="text-primary">Governing Law</h5>
                                    These Terms shall be governed by and construed in accordance with the laws of [Jurisdiction], without regard to its conflict of law principles.

                                    <h5 class="text-primary">Changes to Terms</h5>
                                    [Website Name] may revise these Terms from time to time. By continuing to use the Website after such revisions are effective, you agree to be bound by the revised Terms.

                                    <h5 class="text-primary">Contact Us</h5>
                                    If you have any questions about these Terms, please contact us at vegifresh@gmail.com or +94 70 518 6009.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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