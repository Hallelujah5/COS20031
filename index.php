<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TerraTech</title>
    <meta name="description" content="Real Estate" />
    <meta name="keywords" content="creative, modern, bootstrap, multipurpose, clean, Real Estate, buy, sell, Rent" />
    <meta name="author" content="TerraTech" />
    <!-- favicon -->
    <link href="images/favicon.ico" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Slider -->
    <link href="css/tiny-slider.css" rel="stylesheet" />
    <!-- Tobii -->
    <link href="css/tobii.min.css" rel="stylesheet" type="text/css" />
    <!-- Choice css -->
    <link href="css/choices.min.css" rel="stylesheet" />
    <!--Material Icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom  Css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
</head>

<body>
    <?php include('header.php'); ?>

    <!-- Hero Start -->
    <section class="bg-half-170 d-table align-items-center w-100" style="background: url('images/bg/01.jpg') top;">
        <div class="bg-overlay bg-linear-gradient-2"></div>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center">
                    <div class="title-heading text-center">
                        <h4 class="heading fw-bold text-white title-dark mb-3">Easy way to find your <br> dream property
                        </h4>
                        <p class="para-desc text-white-50 title-dark mx-auto mb-0">A great platform to buy, sell and
                            rent your properties without any agent or commisions.</p>
                    </div>

                    <div class="mt-4">
                        <ul class="nav nav-pills bg-white shadow border-bottom p-3 flex-row d-md-inline-flex nav-justified mb-0 rounded-top-3 position-relative overflow-hidden"
                            id="pills-tab" role="tablist">
                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-4 active rounded-3 fw-medium" id="buy-login"
                                    data-bs-toggle="pill" href="#buy" role="tab" aria-controls="buy"
                                    aria-selected="false">
                                    Buy
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->

                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-4 rounded-3 fw-medium" id="sold-login" data-bs-toggle="pill"
                                    href="#sold" role="tab" aria-controls="sold" aria-selected="false">
                                    Sell
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->

                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-4 rounded-3 fw-medium" id="rent-login" data-bs-toggle="pill"
                                    href="#rent" role="tab" aria-controls="rent" aria-selected="false">
                                    Rent
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->
                        </ul>
                        <div class="tab-content bg-white rounded-3 sm-rounded-0 shadow" id="pills-tabContent">
                            <div class="card border-0 tab-pane fade show active" id="buy" role="tabpanel"
                                aria-labelledby="buy-login">
                                <form class="card-body text-start">
                                    <div class="registration-form text-dark text-start">
                                        <div class="row g-lg-0">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label fs-6">Search :</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="search" class="fea icon-ex-md icons"></i>
                                                        <input name="name" type="text" id="job-keyword"
                                                            class="form-control filter-input-box bg-light border-0"
                                                            placeholder="Search your keywords">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label fs-6">Select Categories:</label>
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
                                                <div class="mb-3">
                                                    <label class="form-label fs-6">Min Price :</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-min-price-buy">
                                                            <option>Min Price</option>
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
                                                <div class="mb-3">
                                                    <label class="form-label fs-6">Max Price :</label>
                                                    <div class="filter-search-form position-relative">
                                                        <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-max-price-buy">
                                                            <option>Max Price</option>
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
                                                <input type="submit" id="search" name="search" style="height: 48px;"
                                                    class="btn btn-primary searchbtn w-100" value="Search">
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </form>
                                <!--end form-->
                            </div>
                            <!--end teb pane-->

                            <div class="card border-0 tab-pane fade" id="sold" role="tabpanel"
                                aria-labelledby="sold-login">
                                <form class="card-body text-start">
                                    <div class="registration-form text-dark text-start">
                                        <div class="row g-lg-0">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Search :</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="search" class="fea icon-ex-md icons"></i>
                                                        <input name="name" type="text" id="job-keyword"
                                                            class="form-control filter-input-box bg-light border-0"
                                                            placeholder="Search your keywords">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Select Categories:</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="home" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-catagory-sell">
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
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Min Price :</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-min-price-sell">
                                                            <option>Min Price</option>
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
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Max Price :</label>
                                                    <div class="filter-search-form position-relative">
                                                        <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-max-price-sell">
                                                            <option>Max Price</option>
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
                                                <input type="submit" id="search" name="search" style="height: 48px;"
                                                    class="btn btn-primary searchbtn w-100" value="Search">
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </form>
                                <!--end form-->
                            </div>
                            <!--end teb pane-->

                            <div class="card border-0 tab-pane fade" id="rent" role="tabpanel"
                                aria-labelledby="rent-login">
                                <form class="card-body text-start">
                                    <div class="registration-form text-dark text-start">
                                        <div class="row g-lg-0">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Search :</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="search" class="fea icon-ex-md icons"></i>
                                                        <input name="name" type="text" id="job-keyword"
                                                            class="form-control filter-input-box bg-light border-0"
                                                            placeholder="Search your keywords">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Select Categories:</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="home" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-catagory-rent">
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
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Min Price :</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-min-price-rent">
                                                            <option>Min Price</option>
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
                                                <div class="mb-3 text-start">
                                                    <label class="form-label fs-6">Max Price :</label>
                                                    <div class="filter-search-form position-relative">
                                                        <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                        <select class="form-select" id="choices-max-price-rent">
                                                            <option>Max Price</option>
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
                                                <input type="submit" id="search" name="search" style="height: 48px;"
                                                    class="btn btn-primary searchbtn w-100" value="Search">
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </form>
                                <!--end form-->
                            </div>
                            <!--end teb pane-->
                        </div>
                        <!--end tab content-->
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="position-relative overflow-hidden shadow p-3 rounded-top-pill rounded-5 bg-white">
                        <img src="images/hero.jpg" class="img-fluid rounded-top-pill rounded-5" alt="work-image">
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h6 class="text-primary fw-medium mb-2">Our story: TerraTech</h6>
                        <h4 class="title mb-3">Efficiency. <br> Transparency. Control.</h4>
                        <p class="text-muted para-desc mb-0">TerraTech developed a platform for the Real Estate
                            marketplace that allows buyers and sellers to easily execute a transaction on their own. The
                            platform drives efficiency, cost transparency and control into the hands of the consumers.
                            TerraTech is Real Estate Redefined.</p>

                        <div class="row">
                            <div class="col-4 py-3">
                                <div class="counter-box text-center">
                                    <h1 class="mb-0 fw-semibold"><span class="counter-value"
                                            data-target="1548">1</span>+</h1>
                                    <h6 class="counter-head text-muted fw-normal">Investment</h6>
                                </div>
                                <!--end counter box-->
                            </div>
                            <!--end col-->

                            <div class="col-4 py-3">
                                <div class="counter-box text-center">
                                    <h1 class="mb-0 fw-semibold"><span class="counter-value" data-target="25">1</span>+
                                    </h1>
                                    <h6 class="counter-head text-muted fw-normal">Awards</h6>
                                </div>
                                <!--end counter box-->
                            </div>
                            <!--end col-->

                            <div class="col-4 py-3">
                                <div class="counter-box text-center">
                                    <h1 class="mb-0 fw-semibold"><span class="counter-value" data-target="9">1</span>+
                                    </h1>
                                    <h6 class="counter-head text-muted fw-normal">Profitability</h6>
                                </div>
                                <!--end counter box-->
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

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-3">Property Types</h4>
                        <p class="text-muted para-desc mb-0">A great platform to buy, sell and rent your properties
                            without any agent or commisions.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 mt-0">
                <div class="col">
                    <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center">
                        <img src="images/icons/house.png" class="avatar avatar-small" alt="">

                        <div class="mt-4">
                            <a href="#" class="title text-dark fs-5 fw-medium">Houses</a>
                            <p class="text-muted small mb-0">46 Listings</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col">
                    <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center">
                        <img src="images/icons/bungalow.png" class="avatar avatar-small" alt="">

                        <div class="mt-4">
                            <a href="#" class="title text-dark fs-5 fw-medium">Villas</a>
                            <p class="text-muted small mb-0">124 Listings</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col">
                    <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center">
                        <img src="images/icons/buildings.png" class="avatar avatar-small" alt="">

                        <div class="mt-4">
                            <a href="#" class="title text-dark fs-5 fw-medium">Apartments</a>
                            <p class="text-muted small mb-0">265 Listings</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col">
                    <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center">
                        <img src="images/icons/commercial.png" class="avatar avatar-small" alt="">

                        <div class="mt-4">
                            <a href="#" class="title text-dark fs-5 fw-medium">Commercial</a>
                            <p class="text-muted small mb-0">452 Listings</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col">
                    <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center">
                        <img src="images/icons/industries.png" class="avatar avatar-small" alt="">

                        <div class="mt-4">
                            <a href="#" class="title text-dark fs-5 fw-medium">Industries</a>
                            <p class="text-muted small mb-0">12 Listings</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Featured Properties</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">A great platform to buy, sell and rent your
                            properties without any agent or commisions.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row g-4 mt-0">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                        <div class="property-image position-relative overflow-hidden shadow">
                            <img src="images/property/1.jpg" class="img-fluid" alt="">
                            <ul class="list-unstyled property-icon">
                                <li class=""><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera"
                                            class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content p-4">
                            <a href="property-detail.html" class="title fs-5 text-dark fw-medium">10765 Hillshire Ave,
                                Baton Rouge, LA 70810, USA</a>

                            <ul
                                class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">8000sqf</span>
                                </li>

                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Beds</span>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Baths</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                <li class="list-inline-item mb-0">
                                    <span class="text-muted">Price</span>
                                    <p class="fw-medium mb-0">$5000</p>
                                </li>
                                <li class="list-inline-item mb-0 text-muted">
                                    <span class="text-muted">Rating</span>
                                    <ul class="fw-medium text-warning list-unstyled mb-0">
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end items-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                        <div class="property-image position-relative overflow-hidden shadow">
                            <img src="images/property/2.jpg" class="img-fluid" alt="">
                            <ul class="list-unstyled property-icon">
                                <li class=""><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera"
                                            class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content p-4">
                            <a href="property-detail.html" class="title fs-5 text-dark fw-medium">59345 STONEWALL DR,
                                Plaquemine, LA 70764, USA</a>
                            <ul
                                class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">8000sqf</span>
                                </li>

                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Beds</span>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Baths</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                <li class="list-inline-item mb-0">
                                    <span class="text-muted">Price</span>
                                    <p class="fw-medium mb-0">$5000</p>
                                </li>
                                <li class="list-inline-item mb-0 text-muted">
                                    <span class="text-muted">Rating</span>
                                    <ul class="fw-medium text-warning list-unstyled mb-0">
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end items-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                        <div class="property-image position-relative overflow-hidden shadow">
                            <img src="images/property/3.jpg" class="img-fluid" alt="">
                            <ul class="list-unstyled property-icon">
                                <li class=""><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera"
                                            class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content p-4">
                            <a href="property-detail.html" class="title fs-5 text-dark fw-medium">3723 SANDBAR DR,
                                Addis, LA 70710, USA</a>
                            <ul
                                class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">8000sqf</span>
                                </li>

                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Beds</span>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Baths</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                <li class="list-inline-item mb-0">
                                    <span class="text-muted">Price</span>
                                    <p class="fw-medium mb-0">$5000</p>
                                </li>
                                <li class="list-inline-item mb-0 text-muted">
                                    <span class="text-muted">Rating</span>
                                    <ul class="fw-medium text-warning list-unstyled mb-0">
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end items-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                        <div class="property-image position-relative overflow-hidden shadow">
                            <img src="images/property/4.jpg" class="img-fluid" alt="">
                            <ul class="list-unstyled property-icon">
                                <li class=""><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera"
                                            class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content p-4">
                            <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Lot 21 ROYAL OAK DR,
                                Prairieville, LA 70769, USA</a>
                            <ul
                                class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">8000sqf</span>
                                </li>

                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Beds</span>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Baths</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                <li class="list-inline-item mb-0">
                                    <span class="text-muted">Price</span>
                                    <p class="fw-medium mb-0">$5000</p>
                                </li>
                                <li class="list-inline-item mb-0 text-muted">
                                    <span class="text-muted">Rating</span>
                                    <ul class="fw-medium text-warning list-unstyled mb-0">
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end items-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                        <div class="property-image position-relative overflow-hidden shadow">
                            <img src="images/property/5.jpg" class="img-fluid" alt="">
                            <ul class="list-unstyled property-icon">
                                <li class=""><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera"
                                            class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content p-4">
                            <a href="property-detail.html" class="title fs-5 text-dark fw-medium">710 BOYD DR, Unit
                                #1102, Baton Rouge, LA 70808, USA</a>
                            <ul
                                class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">8000sqf</span>
                                </li>

                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Beds</span>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Baths</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                <li class="list-inline-item mb-0">
                                    <span class="text-muted">Price</span>
                                    <p class="fw-medium mb-0">$5000</p>
                                </li>
                                <li class="list-inline-item mb-0 text-muted">
                                    <span class="text-muted">Rating</span>
                                    <ul class="fw-medium text-warning list-unstyled mb-0">
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end items-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                        <div class="property-image position-relative overflow-hidden shadow">
                            <img src="images/property/6.jpg" class="img-fluid" alt="">
                            <ul class="list-unstyled property-icon">
                                <li class=""><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart"
                                            class="icons"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera"
                                            class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content p-4">
                            <a href="property-detail.html" class="title fs-5 text-dark fw-medium">5133 MCLAIN WAY, Baton
                                Rouge, LA 70809, USA</a>
                            <ul
                                class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">8000sqf</span>
                                </li>

                                <li class="d-flex align-items-center me-3">
                                    <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Beds</span>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                    <span class="text-muted">4 Baths</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                <li class="list-inline-item mb-0">
                                    <span class="text-muted">Price</span>
                                    <p class="fw-medium mb-0">$5000</p>
                                </li>
                                <li class="list-inline-item mb-0 text-muted">
                                    <span class="text-muted">Rating</span>
                                    <ul class="fw-medium text-warning list-unstyled mb-0">
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end items-->
                </div>
                <!--end col-->

                <div class="col-12 mt-4 pt-2">
                    <div class="text-center">
                        <a href="grid.html" class="mt-3 fs-6 text-primary">View More Properties <i
                                class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">How It Works</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">A great platform to buy, sell and rent your
                            properties without any agent or commisions.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row g-4 mt-0">
                <div class="col-md-4">
                    <div class="position-relative features text-center mx-lg-4 px-md-1">
                        <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                            <i data-feather="hexagon" class="hexagon"></i>
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <i data-feather="home" class="fea icon-m-md text-primary"></i>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="fw-medium title text-dark fs-5">Evaluate Property</a>
                            <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4">
                    <div class="position-relative features text-center mx-lg-4 px-md-1">
                        <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                            <i data-feather="hexagon" class="hexagon"></i>
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <i data-feather="briefcase" class="fea icon-m-md text-primary"></i>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="fw-medium title text-dark fs-5">Meeting with Agent</a>
                            <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4">
                    <div class="position-relative features text-center mx-lg-4 px-md-1">
                        <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                            <i data-feather="hexagon" class="hexagon"></i>
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <i data-feather="key" class="fea icon-m-md text-primary"></i>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="fw-medium title text-dark fs-5">Close the Deal</a>
                            <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Property Broker</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">A great platform to buy, sell and rent your
                            properties without any agent or commisions.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row g-4 mt-0">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card team team-primary text-center">
                        <div
                            class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                            <img src="images/client/thinh.png" class="img-fluid" alt="">
                            <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                            <ul class="list-unstyled team-social mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter"
                                            class="icons fea-social"></i></a></li>
                            </ul>
                            <!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Nguyen Trung Thinh</a>
                            <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card team team-primary text-center">
                        <div
                            class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                            <img src="images/client/an.png" class="img-fluid" alt="">
                            <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                            <ul class="list-unstyled team-social mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter"
                                            class="icons fea-social"></i></a></li>
                            </ul>
                            <!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Nguyen Xuan An</a>
                            <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card team team-primary text-center">
                        <div
                            class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                            <img src="images/client/phale.png" class="img-fluid" alt="">
                            <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                            <ul class="list-unstyled team-social mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter"
                                            class="icons fea-social"></i></a></li>
                            </ul>
                            <!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Nguyen Pha Le</a>
                            <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card team team-primary text-center">
                        <div
                            class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                            <img src="images/client/tam.png" class="img-fluid" alt="">
                            <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                            <ul class="list-unstyled team-social mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram"
                                            class="icons fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter"
                                            class="icons fea-social"></i></a></li>
                            </ul>
                            <!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Nguyen Duc Tam</a>
                            <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">What Our Client Say ?</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">A great platform to buy, sell and rent your
                            properties without any agent or commisions.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 mt-4">
                    <i class="mdi mdi-format-quote-open display-1 position-absolute start-0 top-0"
                        style="opacity: 0.05;"></i>
                    <i class="mdi mdi-format-quote-open display-1 position-absolute end-0 bottom-0"
                        style="opacity: 0.05;"></i>
                    <div class="tiny-single-item">
                        <div class="tiny-slider client-testi">
                            <div class="text-center">
                                <div class="m-2">
                                    <img src="images/client/01.jpg" class="avatar avatar-small rounded-circle shadow-md"
                                        alt="">
                                    <div class="flex-1 mt-4">
                                        <h6 class="mb-0">Young Bonetti</h6>
                                        <small class="text-muted">Product Manager</small>
                                    </div>

                                    <p class="text-muted fst-italic mb-0 mt-3">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. One may speculate that
                                        over the course of time certain letters were added or deleted at various
                                        positions within the text. "</p>

                                    <ul class="list-unstyled mb-0 mt-3 text-warning fs-6">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider client-testi">
                            <div class="text-center">
                                <div class="m-2">
                                    <img src="images/client/02.jpg" class="avatar avatar-small rounded-circle shadow-md"
                                        alt="">
                                    <div class="flex-1 mt-4">
                                        <h6 class="mb-0">Ofelia Bell</h6>
                                        <small class="text-muted">Product Manager</small>
                                    </div>

                                    <p class="text-muted fst-italic mb-0 mt-3">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. One may speculate that
                                        over the course of time certain letters were added or deleted at various
                                        positions within the text. "</p>

                                    <ul class="list-unstyled mb-0 mt-3 text-warning fs-6">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider client-testi">
                            <div class="text-center">
                                <div class="m-2">
                                    <img src="images/client/03.jpg" class="avatar avatar-small rounded-circle shadow-md"
                                        alt="">
                                    <div class="flex-1 mt-4">
                                        <h6 class="mb-0">Barbara Carpenter</h6>
                                        <small class="text-muted">Product Manager</small>
                                    </div>

                                    <p class="text-muted fst-italic mb-0 mt-3">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. One may speculate that
                                        over the course of time certain letters were added or deleted at various
                                        positions within the text. "</p>

                                    <ul class="list-unstyled mb-0 mt-3 text-warning fs-6">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider client-testi">
                            <div class="text-center">
                                <div class="m-2">
                                    <img src="images/client/04.jpg" class="avatar avatar-small rounded-circle shadow-md"
                                        alt="">
                                    <div class="flex-1 mt-4">
                                        <h6 class="mb-0">Jesus Day</h6>
                                        <small class="text-muted">Product Manager</small>
                                    </div>

                                    <p class="text-muted fst-italic mb-0 mt-3">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. One may speculate that
                                        over the course of time certain letters were added or deleted at various
                                        positions within the text. "</p>

                                    <ul class="list-unstyled mb-0 mt-3 text-warning fs-6">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider client-testi">
                            <div class="text-center">
                                <div class="m-2">
                                    <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow-md"
                                        alt="">
                                    <div class="flex-1 mt-4">
                                        <h6 class="mb-0">Jennifer Smith</h6>
                                        <small class="text-muted">Product Manager</small>
                                    </div>

                                    <p class="text-muted fst-italic mb-0 mt-3">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. One may speculate that
                                        over the course of time certain letters were added or deleted at various
                                        positions within the text. "</p>

                                    <ul class="list-unstyled mb-0 mt-3 text-warning fs-6">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider client-testi">
                            <div class="text-center">
                                <div class="m-2">
                                    <img src="images/client/06.jpg" class="avatar avatar-small rounded-circle shadow-md"
                                        alt="">
                                    <div class="flex-1 mt-4">
                                        <h6 class="mb-0">Michael Wilkes</h6>
                                        <small class="text-muted">Product Manager</small>
                                    </div>

                                    <p class="text-muted fst-italic mb-0 mt-3">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. One may speculate that
                                        over the course of time certain letters were added or deleted at various
                                        positions within the text. "</p>

                                    <ul class="list-unstyled mb-0 mt-3 text-warning fs-6">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->


    </section>
    <!--end section-->
    <!-- End -->

    <?php include('footer.php')?>


    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i
            data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Tiny slider -->
    <script src="js/tiny-slider.js"></script>
    <!-- Tobii -->
    <script src="js/tobii.min.js"></script>
    <!-- Choice js -->
    <script src="js/choices.min.js"></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <!-- Custom -->
    <script src="js/plugins.init.js"></script>
    <script src="js/app.js"></script>
</body>

</html>