<!DOCTYPE html>
<html class = "h-100"lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ADMIN | BARANGAY PROFILE</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/admin_style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/table.css" type="text/css">
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/script.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/dropdown.css" type="text/css">
        <script src="<?php echo base_url();?>/assets/js/dropdown.js"></script>
        <script src="<?php echo base_url();?>/assets/js/script.js"> </script>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    </head>
  
    <div class="grid-container w-full">
        <header class="header">
        
        </header>
        
        <aside class="sidenav" id="side">
            <div class="d-flex justify-content-center align-items-center px-3 py-4">
                <img
                    class="rounded-pill img-fluid"
                    width="65"
                    src = "https://img.freepik.com/premium-vector/print-design-wolf-character-league-your-mascot_413831-70.jpg?w=2000" 
                    alt="profile">
                <div class="ms-2">
                    <span class="name">Shane Pags</span> <br>
                    <span class="name">Admin</span>
                </div>
            </div>

            <div class="ms-2 fw-bold"> <span class="name"> DASHBOARD</span></div>

            <a href="/admin_home" class="text-dark fw-bold"><i class="fa fa-home"></i> Home</a>

            <a href="/admin_brgyprofile" class="text-dark fw-bold"><i class="fa fa-info-circle"></i> Barangay Profile</a>

            <a href="/admin_brgyofficial" class="text-dark fw-bold"><i class="fa fa-file"></i> Barangay Officials</a>

            <a href="/admin_resident" class="text-dark fw-bold"><i class="fa fa-user"></i> Resident Record</a>

            <a href="/admin_blotter"class="text-dark fw-bold"><i class="fa fa-database"></i> Blotter Record</a>

            <div class="ms-2 fw-bold" class="text-dark fw-bold"><span class="name"> FORMS</span></div>

            <a role="button" class="dropdown-btn text-dark fw-bold"><i class="fa fa-list-ul"></i> Certificates</a>
            <div class="dropdown-container">
                <a href="../admin/ResidentCertificate.php" class="text-dark fw-bold"><iconify-icon icon="fa:check-square-o"></iconify-icon> Resident Certificate</a>
                <a href="../admin/indigency.php" class="text-dark fw-bold"><iconify-icon icon="fa:check-square-o"></iconify-icon> Indigency</a>
            </div>
                
            <a href="/" class="text-dark fw-bold" onclick="return confirm('Are you sure you want to log out?');">
            <i class="fas fa-sign-out-alt"></i> Logout</a>
        </aside>


        <main class="main">
            <div class="container-xl px-4 mt-4">
            <h2> BARANGAY PROFILE</h2>
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile-->
                        <div class="card mb-4 mb-xxl-0">
                            <div class="card-header">Barangay Logo</div>                                     
                            <div class="card-body text-center">
                                <!-- picture image-->         
                                <img id="output"
                                width="200"/>
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4"></div>
                                <!-- picture upload button-->
                                <div class="upload-btn-wrapper">
                                <button class="btn btn-primary" type="button">Upload Image</button>
                                <input type="file" name="image" id="file" accept=".png, .jpg, .jpeg" name="image" onchange="loadFile(event)" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Barangay details-->
                        <div class="card mb-4">
                            <div class="card-header">Barangay Details</div>
                            <div class="card-body">
                                <form>
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputBrgy">Barangay</label>
                                        <input class="form-control" id="inputBrgy" type="text" required>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- City-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputCity">City</label>
                                            <input class="form-control" id="inputCity" type="text" required>
                                        </div>
                                        <!-- Province -->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputProvince">Province</label>
                                            <input class="form-control" id="inputProvince" type="text" required>
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Region -->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputRegion">Region</label>
                                            <input class="form-control" id="inputRegion" type="text" required>
                                        </div>
                                        <!-- Location-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Location</label>
                                            <input class="form-control" id="inputLocation" type="text" required>
                                        </div>
                                    </div>
                                    <!-- Email add-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="example123@gmail.com" required>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Phone # -->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                            <input class="form-control" id="inputPhone" type="phone" required>
                                        </div>
                                        <!-- Tel # -->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputTel">Telephone number</label>
                                            <input class="form-control" id="inputTel" type="text" name="telephone" required>
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <button class="btn btn-success" type="submit">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer"></footer>
    </div>

</html>