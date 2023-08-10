<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR HOTEL- About</title>
    <?php require('inc/link.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .box:hover{
            border-top-color: var(--teal_hover) !important;
        }
    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="hr-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Laboriosam libero dolorem debitis. <br> Unde 
            ratione non exercitationem, a accusantium vel quod?
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-log-6 col-md-5 mb-4 order-lg-1 order-2 oder-md-1">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere 
                    cupiditate, incidunt dolorum architecto numquam dicta!
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1 order-md-2">
                <img src="imagess/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="imagess/about/hotel.svg" width="70px">
                    <h4 class="mt-4">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="imagess/about/customers.svg" width="70px">
                    <h4 class="mt-4">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="imagess/about/rating.svg" width="70px">
                    <h4 class="mt-4">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="imagess/about/staff.svg" width="70px">
                    <h4 class="mt-4">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imagess/about/team.jpg" class="w-100">
                <h5 class="mt-2">Rajesh Hamal</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imagess/about/team.jpg" class="w-100">
                <h5 class="mt-2">Aakash Baral</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imagess/about/team.jpg" class="w-100">
                <h5 class="mt-2">Sagar Shrestha</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imagess/about/team.jpg" class="w-100">
                <h5 class="mt-2">Anjan Parajuli</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imagess/about/team.jpg" class="w-100">
                <h5 class="mt-2">Saroj Manandhar</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="imagess/about/team.jpg" class="w-100">
                <h5 class="mt-2">Manas Subedi</h5>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    </div>

    <?php require('inc/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320:{
                slidesPerView: "1",
            },
            640:{
                slidesPerView: "1",
            },
            768:{
                slidesPerView: "3",
            },
            1024:{
                slidesPerView: "3",
            },
        }
        });
    </script>
</body>
</html>