<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/signup.css" type="text/css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/validateAddRes.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

    <div class="body"> 
        <div class="container register">
            <div class="row ">
                <div class="col-md-3 register-left">
                    <img src="../assets/image/wolfie.png" class="image">
                    <h3>Welcome</h3>
                    <p>Barangay Web System</p>
                    <a href="/" class="btn btn-sm btn-primary" id="submit" type="submit">Login</a>	  
                </div>
                <div class="col-md-9 register-right">
                    
                    <div class="tab-content" id="myTabContent">
                        <form action="registration" method="post">

                    
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Please fill out the required fields *</h3>
                
                            <div class="row register-form">
                                <div class="col-md-6">
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" required placeholder="First Name *" id="fname" name="fname" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="firstName" class="text text-danger" style="display:none;">First Name Is Required</p> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required placeholder="Middle Name *" id="mname" name="mname" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="midName" class="text text-danger" style="display:none;">Middle Name Is Required</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required placeholder="Last Name *" id="lname" name="lname" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="lastName" class="text text-danger" style="display: none;">Last Name Is Required</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required placeholder="Place of Birth *" id="place" name="place" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="placeOfBirth" class="text text-danger" style="display: none;">Required*</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="zone" id="zone" required class="form-control" onclick="checkZone()">
                                            <option selected hidden value="">Zone</option>
                                            <option value = "Zone 1">Zone 1</option>
                                            <option value = "Zone 2">Zone 2</option>
                                            <option value = "Zone 3">Zone 3</option>
                                            <option value = "Zone 4">Zone 4</option>
                                        </select>
                                        <div>
                                            <p id="zoneName" class="text text-danger" required style="display: none;">Please select an option</p>
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <input type="text" class="form-control" required placeholder="Barangay *" id="brgy" name="brgy" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="barangay" class="text text-danger" style="display: none;">Required*</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="cstatus" required id="cstatus" class="form-control" onclick="checkStatus()"> 
                                        <option disabled selected hidden value="">Civil Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Divorced">Divorced</option>
                                        </select> 
                                        <div>
                                            <p id="cStatus" class="text text-danger" style="display: none;">Please select an option</p>
                                        </div>       
                                    </div>   
                                    <div class="form-group">
                                        <input type="occupation" required class="form-control" placeholder="Occupation *" id="occupation" name="occupation" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="occupationName" class="text text-danger" style="display: none;">Required*</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" required class="form-control" id="bdate" name="bdate" onclick="checkBdate()" value ="">
                                        <p id="bdateName" class="text text-danger" style="display: none;">Required*</p>
                                    </div>
                                    <div class="form-group">
                                    <input type="file"  class="form-control" accept= ".png, .jpg, .jpeg" id="photo" name="photo" onclick="checkFile()">
                                    <div>
                                        <p id="photoName" class="text text-danger" style="display: none;">Please upload file</p>
                                    </div>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" required class="form-control" placeholder="Age *" id="age" name="age" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="ageName" class="text text-danger" style="display: none;">Required*</p>
                                        </div>
                                    </div>
                                    <div class="form-group">                      
                                        <select name="sex" required id="sex" class="form-control" onclick="checkSex()"> 
                                            <option disabled selected hidden value="">Sex</option>
                                            <option value = "0">Female</option>
                                            <option value = "1">Male</option>
                                        </select>
                                        <div>
                                            <p id="sexName" class="text text-danger" style="display: none;">Please select an option</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="btype" required id="btype" class="form-control input-lg" onclick="checkBtype()"> 
                                            <option disabled selected hidden value="">Blood Type</option>
                                            <option value = "AB+">AB+</option>
                                            <option value ="AB-">AB-</option>
                                            <option value = "A+">A+</option>
                                            <option value = "A-">A-</option>
                                            <option value = "B+">B+</option>
                                            <option value = "B-">B-</option>
                                            <option value = "O+">O+</option>
                                            <option value = "O-">O-</option>
                                        </select>  
                                        <div>
                                            <p id="btypeName" class="text text-danger" style="display: none;">Please select an option</p>
                                        </div>      
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" required class="form-control" placeholder="Nationality *"  id="nationality" name="nationality" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="nationalityName" class="text text-danger" style="display: none;">Required*</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" required min="1" class="form-control" id="member" name="member" onclick="checkMember()" placeholder="No. of Household Members" value="">
                                        <div>
                                            <p id="numberName" class="text text-danger" style="display: none;">Required*</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="education" required id="education" class="form-control" onclick="checkEduc()">
                                                <option disabled selected hidden value="">Educational Attainment</option>
                                                <option value = "Not Applicable">Not Applicable</option>
                                                <option value = "Elementary Level">Elementary Level</option>
                                                <option value = "Elementary Graduate">Elementary Graduate</option>
                                                <option value = "Completer">Completer</option>
                                                <option value = "Senior High School">Senior High School</option>
                                                <option value = "College Level">College Level</option>
                                                <option value = "Vocational/TVET">Vocational/TVET</option>
                                                <option value = "Undergraduate (Bachelor’s Degree)">Undergraduate (Bachelor’s Degree)</option>
                                                <option value = "Postgraduate (Master’s Degree)">Postgraduate (Master’s Degree)</option>
                                                <option value = "Doctorate Degree (PhD)">Doctorate Degree (PhD)</option>
                                        </select>
                                        <div>
                                            <p id="educName" class="text text-danger" style="display: none;">Please select an option</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="voter" required id="voter" class="form-control" onclick="checkVoter()"> 
                                            <option disabled selected hidden value="">Voter Status</option>
                                            <option value = "Active">Active</option>
                                            <option value = "Inactive">Inactive</option>
                                            <option value = "Cancelled">Cancelled</option>
                                            <option value = "Not Registered">Not Registered</option>
                                        </select>	
                                        <div>
                                            <p id="voterName" class="text text-danger" style="display: none;">Select an option</p>
                                        </div>			
                                    </div>
                                    <div class="form-group">
                                        <input type="text" required class="form-control" placeholder="Username *" id="username" name="username" onkeyup="checkValidation()" value="" />
                                        <div>
                                            <p id="userName" class="text text-danger" style="display: none;">Input your Username.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required class="form-control" id="password" name="password" onkeyup="checkValidation()" placeholder="Password *" value="" />
                                        <div>
                                            <p id="passName" class="text text-danger" style="display: none;">Input your Password.</p>
                                        </div>
                                    </div>
                                    <!-- <input type="submit" class="btnRegister" value="Register"/> -->
                                    <button type="submit" id="btnRegister" class="btn btn-success" onclick="validateForm()">Register</button>
                        
                                </div>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>