<!doctype html>
<html lang="en">
	
    <head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>TerraTech - Estate Listing</title>
	    <meta name="description" content="Real Estate" />
	    <meta name="keywords" content="creative, modern, bootstrap, multipurpose, clean, Real Estate, buy, sell, Rent" />
	    <meta name="author" content="TerraTech" />

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
	</head>

	<body>
        <?php include('header.php'); ?>

        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" style="background: url('images/bg/03.jpg');">
            <div class="bg-overlay bg-gradient-overlay-2"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <p class="text-white-50 para-desc mx-auto mb-0">List view</p>
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Property Listing</h5>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

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
                                                        <input name="name" type="text" id="job-keyword" class="form-control filter-input-box bg-light border-0" placeholder="Search your keywords">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            
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
                                            </div><!--end col-->

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
                                            </div><!--end col-->

                                            <div class="col-lg-3 col-md-6 col-12">
                                                <input type="submit" id="search" name="search" style="height: 60px;" class="btn btn-primary searchbtn w-100" value="Search">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </form><!--end form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container">
                <div class="row g-4 mt-0">
                <?php
                    require_once("settings.php");    
                    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
                    if (!$conn) {
                        echo "<p>Database connection failure</p>";
                    } else {
                        $sql_table_properties = "Properties";
                        $sql_table_images = "PropertyImages";

                        $query = "
                            SELECT p.UUID, p.Address, p.Name, p.PropertyType, p.Size, p.NumberOfRooms, p.NumberOfBathrooms, 
                                p.NumberOfFloors, p.YearBuilt, p.EstimatedValue, i.ImageURL, i.Description
                            FROM $sql_table_properties AS p
                            LEFT JOIN (
                                SELECT PropertyUUID, ImageURL, Description
                                FROM $sql_table_images
                                GROUP BY PropertyUUID
                            ) AS i ON p.UUID = i.PropertyUUID
                        ";

                        $result = mysqli_query($conn, $query);

                        if (!$result) {
                            echo "<p>Something is wrong with the query: $query</p>";
                        } else {
                            while ($propertydata = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-lg-6 col-12">';
                                echo '<div class="card property property-list border-0 shadow position-relative overflow-hidden rounded-3">';
                                echo '<div class="d-md-flex">';
                                echo '<div class="property-image position-relative overflow-hidden shadow flex-md-shrink-0 rounded-3 m-2">';
                                if ($propertydata['ImageURL']) {
                                    echo '<img src="' . htmlspecialchars($propertydata['ImageURL']) . '" class="img-fluid h-100 w-100" alt="' . htmlspecialchars($propertydata['Description']) . '">';
                                } else {
                                    echo '<img src="images/property/placeholder.jpg" class="img-fluid h-100 w-100" alt="Placeholder Image">';
                                }
                                echo '<ul class="list-unstyled property-icon">';
                                echo '<li><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>';
                                echo '<li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>';
                                echo '<li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>';
                                echo '</ul>';
                                echo '</div>';
                                echo '<div class="card-body content p-3">';
                                echo '<a href="property-detail.php?uuid=' . htmlspecialchars($propertydata['UUID']) . '" class="title fs-5 text-dark fw-medium">' . htmlspecialchars($propertydata['Address']) . '</a>';

                                echo '<ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">';
                                echo '<li class="d-flex align-items-center me-3">';
                                echo '<i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>';
                                echo '<span class="text-muted">' . htmlspecialchars($propertydata['Size']) . '</span>';
                                echo '</li>';

                                echo '<li class="d-flex align-items-center me-3">';
                                echo '<i class="mdi mdi-bed fs-5 me-2 text-primary"></i>';
                                echo '<span class="text-muted">' . htmlspecialchars($propertydata['NumberOfRooms']) . ' Beds</span>';
                                echo '</li>';

                                echo '<li class="d-flex align-items-center">';
                                echo '<i class="mdi mdi-shower fs-5 me-2 text-primary"></i>';
                                echo '<span class="text-muted">' . htmlspecialchars($propertydata['NumberOfBathrooms']) . ' Baths</span>';
                                echo '</li>';
                                echo '</ul>';

                                echo '<ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">';
                                echo '<li class="list-inline-item mb-0">';
                                echo '<span class="text-muted">Price</span>';
                                echo '<p class="fw-medium mb-0">$' . htmlspecialchars($propertydata['EstimatedValue']) . '</p>';
                                echo '</li>';
                                echo '<li class="list-inline-item mb-0 text-muted">';
                                echo '<span class="text-muted">Property Type</span>';
                                echo '<ul class="fw-medium text-warning list-unstyled mb-0">';

                                echo '<li class="list-inline-item mb-0 text-dark">' . htmlspecialchars($propertydata['PropertyType']) . '</li>';
                                echo '</ul>';
                                echo '</li>';
                                echo '</ul>';

                                echo '</div>'; // card-body
                                echo '</div>'; // d-md-flex
                                echo '</div>'; // card
                                echo '</div>'; // col-lg-6
                            }
                            mysqli_free_result ($result);
                        } 
                        mysqli_close($conn);
                    }
                ?> 

                </div><!--end row-->

                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-left fs-6"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-right fs-6"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <?php include('footer.php')?>

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
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
    </body>

</html>