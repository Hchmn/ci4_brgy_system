<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/admin_style.css" type="text/css">
    <script src="<?php echo base_url();?>/assets/js/script.js"></script>

    </head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5"> 

                        <div class="row px-4 justify-content-center mt-4 mb-5 border-line">
                            <img src="<?php echo base_url(); ?>/assets/image/wolfie.png" class="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <form method="post" action="login">
                        <div class="row px-2 mb-5">
                        
                        </div>

                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Username</h6></label>
                            <input class="mb-4" type="text" name="username" required="" placeholder="Enter your Username">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                            <input type="password" name="password" autocomplete="current-password" id="text" required="" class="text" placeholder="Enter your Password">
                            <span class="p-viewer"> 
                                <i class="fa fa-eye-slash" aria-hidden="true" onclick="managePassword()" id="iconPassword"></i> 
                        </span>                 
                        </div>
                        <?php 
                            if(session()->has("Invalid")): 
                        ?> 
                        <div class="row  ml-1 mr-1 mt-2 px-3 alert alert-danger text-center">
                            
                            <?php echo session()->get("Invalid");?>
                        </div>
                        <?php
                             endif;
                        ?>
                        <?php 
                            if(session()->has("registered")): 
                        ?> 
                        <div class="row  ml-1 mr-1 mt-2 px-3 alert alert-success text-center">
                            
                            <?php echo session()->get("registered");?>
                        </div>
                        <?php
                             endif;
                        ?>
                        <div class="row mb-3 px-3 mt-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="row mb-4 px-3">
                            <small class="font-weight-bold">Don't have an account? <a href="signup">Register here.</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                    <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. All rights reserved.</small>
                        <div class="social-contact ml-4 ml-sm-auto">
                        
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
