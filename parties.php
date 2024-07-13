<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Real Estate using Bootstrap" />
    <title>TerraTech</title>
    <meta name="keywords"
        content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, Real Estate, buy, sell, Rent" />
    <meta name="author" content="Hallelujah" />
    <meta name="email" content="tdmhale5@gmail.com" />
    <meta name="version" content="1.0.0" />
    <!-- favicon -->
    <link href="images/favicon.ico" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Tobii -->
    <link href="css/tobii.min.css" rel="stylesheet" type="text/css" />
    <!-- Choice css -->
    <link href="css/choices.min.css" rel="stylesheet" />
    <!--Material Icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom  Css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link rel="stylesheet" href="css/agent.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <?php include('header.php'); ?>
    <!-- Navbar STart -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/bg/03.jpg');">
        <div class="bg-overlay bg-gradient-overlay-2"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <p class="text-white-50 para-desc mx-auto mb-0">List view</p>
                        <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Parties</h5>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="features-absolute">
                        <div class="card border-0 bg-white shadow mt-5">
                            <form class="card-body text-start">
                                <div class="registration-form text-dark text-start">
                                    <div class="row g-lg-0">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="mb-3 mb-sm-0">
                                                <label class="form-label d-none fs-6">Search :</label>
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i data-feather="search" class="fea icon-ex-md icons"></i>
                                                    <input name="name" type="text" id="job-keyword"
                                                        class="form-control filter-input-box bg-light border-0"
                                                        placeholder="Search your keaywords">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="mb-3 mb-sm-0">
                                                <label class="form-label d-none fs-6">Select Categories:</label>
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i data-feather="home" class="fea icon-ex-md icons"></i>
                                                    <select class="form-select" id="choices-catagory-buy">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="mb-3 mb-sm-0">
                                                <label class="form-label d-none fs-6">Price :</label>
                                                <div class="filter-search-form position-relative">
                                                    <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                    <select class="form-select" id="choices-min-price-buy">
                                                        <option>Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3 col-md-6 col-12">
                                            <input type="submit" id="search" name="search" style="height: 60px;"
                                                class="btn btn-primary searchbtn w-100" value="Search">
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </form>
                            <!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 mb-lg-5">
                <div class="overflow-hidden card table-nowrap table-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Parties list</h5>
                        <a href="#!" class="btn btn-light btn-sm">View All</a>
                    </div>
                    <input type="text" id="searchInput" class="form-control search-input"
                        placeholder="Search party name...">
                    <div class="table-responsive">
                        <table class="table mb-0" id="agentTable">
                            <thead class="small text-uppercase bg-body text-muted">
                                <tr>
                                    <th>Party </th>
                                    <th>Nature</th>
                                    <th>Email</th>
                                    <th id="uuid">UUID</th>
                                    <th>Password</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                    <div class="pagination-container">
                        <ul id="pagination" class="pagination">
                            <!-- Pagination buttons will be inserted here by JavaScript -->
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>









    <!-- Footer Start -->
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60 footer-border">
                        <div class="row">
                            <div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="images/logo-light.png" alt="">
                                </a>
                                <p class="mt-4">A great plateform to buy, sell and rent your properties without any
                                    agent or commisions.</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="https://1.envato.market/towntor"
                                            target="_blank" class="rounded-3"><i data-feather="shopping-cart"
                                                class="fea icon-sm align-middle" title="Buy Now"></i></a></li>
                                    <li class="list-inline-item"><a href="https://dribbble.com/shreethemes"
                                            target="_blank" class="rounded-3"><i data-feather="dribbble"
                                                class="fea icon-sm align-middle" title="dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="http://linkedin.com/company/shreethemes"
                                            target="_blank" class="rounded-3"><i data-feather="linkedin"
                                                class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.facebook.com/shreethemes"
                                            target="_blank" class="rounded-3"><i data-feather="facebook"
                                                class="fea icon-sm align-middle" title="facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/shreethemes/"
                                            target="_blank" class="rounded-3"><i data-feather="instagram"
                                                class="fea icon-sm align-middle" title="instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/shreethemes"
                                            target="_blank" class="rounded-3"><i data-feather="twitter"
                                                class="fea icon-sm align-middle" title="twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="mailto:support@shreethemes.in"
                                            class="rounded-3"><i data-feather="mail" class="fea icon-sm align-middle"
                                                title="email"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Team</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Pricing</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Project</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Careers</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Blog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Login</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Terms of
                                            Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Privacy Policy</a>
                                    </li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Listing</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Contact us</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Contact Details</h5>

                                <div class="d-flex mt-4">
                                    <i data-feather="map-pin" class="fea icon-sm text-primary mt-1 me-3"></i>
                                    <div class="">
                                        <p class="mb-2">C/54 Northwest Freeway, <br> Suite 558, <br> Houston, USA 485
                                        </p>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                            data-type="iframe" class="text-primary lightbox">View on Google map</a>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">
                                    <i data-feather="mail" class="fea icon-sm text-primary mt-1 me-3"></i>
                                    <a href="mailto:contact@example.com" class="text-foot">contact@example.com</a>
                                </div>

                                <div class="d-flex mt-4">
                                    <i data-feather="phone" class="fea icon-sm text-primary mt-1 me-3"></i>
                                    <a href="tel:+152534-468-854" class="text-foot">+152 534-468-854</a>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())
                                </script> Towntor. Design with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i
            data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Tobii -->
    <script src="js/tobii.min.js"></script>
    <!-- Choice js -->
    <script src="js/choices.min.js"></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <!-- Custom -->
    <script src="js/plugins.init.js"></script>
    <script src="js/app.js"></script>

    <script src="js/parties_paging.js"></script>
</body>


</html>