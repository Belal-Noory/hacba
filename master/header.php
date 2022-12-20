<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
$menues = [
    array("name" => "Home", "url" => "index.php", "child" => []),
    array("name" => "About", "url" => "about.php", "child" => [
        array("name" => "Who we are?", "url" => "about.php?content=who"),
        array("name" => "How we are different?", "url" => "about.php?content=different"),
        array("name" => "Why we are helping?", "url" => "about.php?content=helping"),
        array("name" => "Our Vision, Mission, and Goals", "url" => "about.php?content=vision"),
        array("name" => "Organization Chart", "url" => "about.php?content=org_chart"),
    ]),
    array("name" => "Projects/Causes", "url" => "about.php", "child" => [
        ["name" => "Ongoing", "url" => "#causes"],
        ["name" => "Completed", "url" => "projects.php?link=completed"],
    ]),
    array("name" => "Contact", "url" => "contact.php", "child" => [])
];
?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small class="text-white"><i class="fa fa-map-marker-alt me-2 text-second"></i>Qowai Markaz, Kabul, Afghanistan</small>
                <small class="ms-4 text-white"><i class="fa fa-envelope me-2 text-second"></i>info@hacba.help</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <a class="text-second ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-second ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-second ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-main m-0">HAC<span class="text-second">BA</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <?php
                    foreach ($menues as $menue) {
                        if (count($menue["child"]) > 0) {
                            $class = $page["parent"] == $menue["name"] ? "active" : "";
                            echo "<div class='nav-item dropdown'>
                                        <a href='#' class='nav-link dropdown-toggle $class' data-bs-toggle='dropdown'>$menue[name]</a>
                                        <div class='dropdown-menu m-0'>";
                            foreach ($menue["child"] as $child) {
                                $class = $page["child"] == $child["name"] ? "active" : "";
                                echo "<a href='$child[url]' class='dropdown-item $class'>$child[name]</a>";
                            }
                            echo "</div>
                                    </div>";
                        } else {
                            $class = $page["parent"] == $menue["name"] ? "active" : "";
                            echo "<a href='$menue[url]' class='nav-link $class'>$menue[name]</a>";
                        }
                    }
                    ?>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-danger text-white py-2 px-3" href="#donation">
                        Donate Now
                        <div class="d-inline-flex btn-sm-square bg-white text-main rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->