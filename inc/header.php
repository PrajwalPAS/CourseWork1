

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">PR HOTEL</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="rooms.php">Rooms</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilities</a>
            </li> 
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contact us</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="about.php">About</a>
            </li>
        </ul>
        <?php if (isset($user)): ?>
            <li>
    <a  href="logout.php"><?= htmlspecialchars($user["name"]) ?> | Logout</a>
    </li>
    <?php else: ?>
        <div class="d-flex">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
            </button>
        </div>
        <?php endif; ?>

        </div>
        </div>
    </nav>

<!-- Login -->


<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="process-login.php" method="post">
                <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" >
                    <i class="bi bi-person-square fs-3 me-2"></i>User Login
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control shadow-none"  aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control shadow-none"  aria-describedby="emailHelp">
                    </div>
                    <div class="d-flex align-items-center justify-content-between md-2" >
                        <button type="submit" class="btn-dark shadow-none" >LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoraton-none">Forgot Password</a>
                    
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Registration -->

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="process-signup.php" method="post" >
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" >
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your details must match with your ID (passport, driving license, etc.)
                        that will be required during check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control shadow-none"  >
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control shadow-none" >
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" name="phone_number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="address" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" name="pincode" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-1">
                    <button type="submit" class="btn-dark shadow-none" >REGISTER</button>
                </div>
            </form>
        </div>
    </div>
</div>