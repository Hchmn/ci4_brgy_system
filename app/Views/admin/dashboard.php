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
    <div class="grid-container">
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
            <section class="content-header">
                <div class="col-md-12 p-1 text-center">
                    <h1><label id="lblGreetings"></label></h1> 
                </div>
                <h2>
                    <a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1711084"> <span style="color:black;"></span><br/> <center> Suarez, Iligan City </center></a>
                </h2>
                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FManila"  width="100%" height="140" frameborder="0"  seamless></iframe>
            </section>
        </main>
        <footer class="footer"></footer>
    </div>

</html>