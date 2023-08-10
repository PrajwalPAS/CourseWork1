<?php

    require('inc/essentials.php');
    adminLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Rooms</title>
    <?php require('inc/link.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php')?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
               <h3 class="mb-4">Our Rooms</h3>  

               <!-- General settings section -->

               <div class="card">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Simple Room</h5>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Features</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">1 Bathrooms</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">3 sofas</div>
                    <h6 class="card-subtitle mb-1 fw-bold">Facilities</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Wifis</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Telivisions</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">AC</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Room heater</div>
                    <h6 class="card-subtitle mb-1 fw-bold">Guests</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">4 Children</div>
                    <h6 class="mb-4">$10 per night</h6>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark">More details</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Suite Room</h5>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Features</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">1 Bathrooms</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">3 sofas</div>
                    <h6 class="card-subtitle mb-1 fw-bold">Facilities</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Wifis</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Telivisions</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">AC</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Room heater</div>
                    <h6 class="card-subtitle mb-1 fw-bold">Guests</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">4 Children</div>
                    <h6 class="mb-4">$30 per night</h6>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark">More details</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Deluxe Room</h5>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Features</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">1 Bathrooms</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">3 sofas</div>
                    <h6 class="card-subtitle mb-1 fw-bold">Facilities</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Wifis</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Telivisions</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">AC</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">Room heater</div>
                    <h6 class="card-subtitle mb-1 fw-bold">Guests</h6>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</div>
                    <div class="badge rounded-pill bg-light text-dark text-wrap">4 Children</div>
                    <h6 class="mb-4">$100 per night</h6>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark">More details</a>
                    </div>
                </div>

                <!-- General settings modal -->

                
            </div>
        </div>
    </div>

    <?php require('inc/script.php'); ?>

</body>
</html>

