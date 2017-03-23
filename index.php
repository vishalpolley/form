<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <!-- Include SmartWizard CSS -->
    <link href="css/smart_wizard.css" rel="stylesheet" type="text/css" />

    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    
    <!-- Optional SmartWizard theme -->
    <link href="css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />

    <!--district-state-select-jquery-->
    <script language="Javascript" src="js/jquery.js"></script>
    <script type="text/JavaScript" src='js/state.js'></script>
</head>
<body>
    <div class="container">
     <div style="display: inline;"><img src="Ietlogo.png" style="float: left;" /><h1 style="text-align: center; padding-top: 10px;text-transform: uppercase; padding-bottom: 50px;font-size: 3em; font-family:serif;font-size: 2em;">institute of engineering &amp; technology, lucknow <br/>
    <small style="text-transform: capitalize;"> (an autonomous constituent institute of dr. A.P.J. Kalam technical university)
    </small><br/>
    <span style="text-transform: uppercase; font-size:.8em"> Student provisional registration form&nbsp;(<?php if(date("m"<=6)){ $a = date("Y"); echo $a-1;} else{ echo date("Y"); }  ?>-<?php if(date("m"<=6)){ echo date("Y"); } else{ $a = date("Y"); echo $a+1; } ?>)</span></h1>
    </div>
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Student Details</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Parents Details</small></a></li>
                <li><a href="#step-3">Step 3<br /><small>Other Details</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Hostel Details</small></a></li>
                <li><a href="#step-5">Step 5<br /><small>Confirmation</small></a></li>
            </ul>
            
            <div>
                <div id="step-1">
                <div id="form-step-0" role="form" data-toggle="validator">
                     <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Student Details</h2>
                     <div class="panel panel-default" style="padding: 20px;">
                   <h5 style="margin-left: 20px;"><span style="color: red; font-size: 1.5em;">  *</span>-Required Fields</h5>
                <hr>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Name<span style="color: red;">  *</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Name" id="name" pattern="[A-Z]{3,.}" title="eg: JOHN" required>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="exampleSelect1" class="col-md-1 col-form-label" style="text-align: center;">Gender<span style="color: red;">  *</span></label>
                <div class="col-md-2">
                    <select class="form-control" id="exampleSelect1">
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                </div>     
                </div>

                <br/>

           
                <br/>

                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Name (In Hindi)<span style="color: red;">  *</span></label>
                <div class="col-md-5">
                    <input class="form-control" style="font-family: 'Noto Sans', sans-serif;" type="text" placeholder="नाम (
हिंदी में)" id="example-text-input" required>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Year of Admission<span style="color: red;">*</span></label>
                <div class="col-md-2">
                    <input class="form-control" type="text" placeholder="Year" id="year" pattern="(20)([0-9]){2}" required>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
<br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">DEGREE SOUGHT<span style="color: red;">*</span></label>
                <div class="col-md-2">
                    <select class="form-control" id="degree">
                    <option>B. TECH</option>
                    <option>M. TECH</option>
                    <option>MCA</option>
                    <option>MBA</option>
                    <option>PhD</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">COURSE/ BRANCH<span style="color: red;">*</span></label>
                <div class="col-md-2">
                    <select class="form-control" id="branch">
                    <option>CSE</option>
                    <option>IT</option>
                    <option>Civil</option>
                    <option>EE</option>
                    <option>ME</option>
                    <option>EC</option>
                    <option>EI</option>
                    <option>Chemical</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">SEMESTER<span style="color: red;">  *</span></label>
                <div class="col-md-2">
                    <select class="form-control" id="sem">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    </select>
                </div>
                </div>
                <br/>
            <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="form-group row">
                <label for="example-color-input" class="col-md-3 col-form-label" style="text-align: center;">University Roll No.<span style="color: red;">*</span></label>
                <div class="col-md-7">
                    <input class="form-control" type="number" placeholder="15052xxxxx" min="1000000000" max="9999999999" id="example-number-input" required>
                    (Except First Semester)
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-date-input" class="col-md-3 col-form-label" style="text-align: center;">Date of Birth<span style="color: red;">  *</span></label>
                <div class="col-md-7">
                    <input class="form-control" type="date" placeholder="yyyy-mm-dd" id="example-date-input" required>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>

                <div class="form-group row">
                <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">Street Address<span style="color: red;">  *</span></label>
                <div class="col-md-7">
                    <input class="form-control" type="text" placeholder="Street Address" id="example-text-input" required>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">State<span style="color: red;">  *</span></label>
                  <div class="col-md-7">
                    <select class="form-control" id="listBox" onchange='selct_district(this.value)'></select>
                  </div>
                  </div>
                  <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">District<span style="color: red;">  *</span></label>
                     <div class="col-md-7">
                    <select class="form-control" id='secondlist'></select>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 col-sm-3" style="text-align:center">
                <div style="margin:auto; border:1px solid black; height:180px; width:150px">
                </div>
                
                <input type="file" id="upload_photo" style="margin-top:7px;">
                
                <div style="margin-top:20px;width:210px ;height: 70px; border:1px solid black;margin-right:auto;margin-left:auto;">
                </div>
                
                <input type="file" id="upload_sign" style="margin-top:7px;" />
                

            </div>
            </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-1 col-form-label" style="text-align: center;">Pin<span style="color: red;">  *</span></label>
                <div class="col-md-2">
                    <input class="form-control" type="text" placeholder="123456" pattern="\d{6}" id="example-number-input">
                </div>
                <label for="example-search-input" class="col-md-1 col-form-label" style="text-align: center;">Phone<span style="color: red;">  *</span></label>
                <div class="col-md-3">
                    <input class="form-control" type="text" placeholder="9876543210" pattern="\d{10}" id="example-number-input">
                </div>
                <label for="example-search-input" class="col-md-1 col-form-label" style="text-align: center;">E-mail<span style="color: red;">  *</span></label>
                <div class="col-md-4">
                    <input class="form-control" type="email" placeholder="email@abc.com" id="example-email-input">
                </div>
                </div>
                </div>
                </div>
                </div>
                <div id="step-2" class="">
                <div id="form-step-1" role="form" data-toggle="validator">
                    <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Parents Details</h2>
                    <div class="panel panel-default" style="padding: 20px;">
                    <br/>
                     <h5 style="margin-left: 20px;"><span style="color: red;font-size: 1.5em;">  *</span>-Required Fields</h5>
                <hr>
                <br/>
                     <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" pastyle="text-align: center;">Father's Name<span style="color: red;">*</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Father's Name" id="example-text-input" required>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession<span style="color: red;">*</span></label>
                    <div class="col-md-3">
                    <select class="form-control" id="exampleSelect1">
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    <option>Farmer</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">Annual Income<span style="color: red;">*</span></label>
                <div class="col-md-3">
                    <select class="form-control" id="exampleSelect1">
                    <option>Under 2 Lakhs</option>
                    <option>2 Lakhs - 5 Lakhs</option>
                    <option>5 Lakhs - 10 Lakhs</option>
                    <option>Above 10 Lakhs</option>
                    </select>
                </div>
                </div>
                <br/>
                <hr>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Mother's Name<span style="color: red;">*</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Mother's Name" id="example-text-input" required>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession<span style="color: red;">*</span></label>
                <div class="col-md-3">
                    <select class="form-control" id="exampleSelect1">
                    <option>House Wife</option>
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">Annual Income</label>
                <div class="col-md-3">
                    <select class="form-control" id="exampleSelect1">
                    <option>Nil</option>
                    <option>Under 2 Lakhs</option>
                    <option>2 Lakhs - 5 Lakhs</option>
                    <option>5 Lakhs - 10 Lakhs</option>
                    <option>Above 10 Lakhs</option>
                    </select>
                </div>
                </div>
                <br/>
                <hr>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Guardian's Name<span style="color: red;">*</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Guardian's Name" id="example-text-input">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession</label>
                <div class="col-md-3">
                    <select class="form-control" id="exampleSelect1">
                    <option></option>
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    </select>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Father's/ Guardian's Address<span style="color: red;">  *</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Street Address" id="example-text-input" required>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">State<span style="color: red;">  *</span></label>
                  <div class="col-md-5">
                    <select class="form-control" id="listBox" onchange='selct_district(this.value)'></select>
                  </div>
                  </div>
                  <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">District<span style="color: red;">  *</span></label>
                     <div class="col-md-5">
                    <select class="form-control" id='secondlist'></select>
                    </div>
                  </div>
                  <br/>
                <div class="form-group row">
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Pin<span style="color: red;">*</span></label>
                <div class="col-md-4">
                    <input class="form-control" type="number" placeholder="123456" min="1" max="999999" id="example-number-input">
                </div>
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Phone<span style="color: red;">*</span></label>
                <div class="col-md-4">
                    <input class="form-control" type="number" placeholder="9936899500" min="0" max="999999999999" id="example-number-input">
                </div>
                </div>
                <br/>
                <hr>
                <br/>
                 <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Local Guardian's Name</label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Local Guardian's Name, Relationship" id="example-text-input">
                    (If Any) alongwith relationship
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Local Guardian's Address<span style="color: red;">  *</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Street Address" id="example-text-input" required>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">State<span style="color: red;">  *</span></label>
                  <div class="col-md-5">
                    <select class="form-control" id="listBox" onchange='selct_district(this.value)'></select>
                  </div>
                  </div>
                  <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">District<span style="color: red;">  *</span></label>
                     <div class="col-md-5">
                    <select class="form-control" id='secondlist'></select>
                    </div>
                  </div>
                  <br/>
                <div class="form-group row">
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Pin</label>
                <div class="col-md-4">
                    <input class="form-control" type="number" placeholder="123456" min="1" max="999999" id="example-number-input">
                </div>
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Phone</label>
                <div class="col-md-4">
                    <input class="form-control" type="number" placeholder="9876543210" min="0" max="999999999999" id="example-number-input">
                </div>
                </div>
                </div>
                </div>
                </div>
                <div id="step-3" class="">
                <div id="form-step-2" role="form" data-toggle="validator">
                 <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Other Details</h2>
                 <div class="panel panel-default" style="padding: 20px;">
                 <br/>
                 <h5 style="margin-left: 20px;"><span style="color: red;font-size: 1.5em;">  *</span>-Required Fields</h5>
                <hr>
                <br/>
                   <div class="form-group row">
                <label for="exampleSelect2" class="col-md-4 col-form-label">If student belongs to minority community<span style="color: red;">*</span></label>
                <div class="col-md-3">
                    <select class="form-control" id="exampleSelect2">
                    <option>Yes</option>
                    <option>No</option>
                    </select>
                </div>
                <label for="example-text-input" class="col-md-1 col-form-label" style="text-align: center;">Detail</label>
                <div class="col-md-4">
                    <input class="form-control" type="text" value="General" id="example-text-input">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="exampleSelect2" class="col-md-4 col-form-label">Whether belong to Rural or Urban area<span style="color: red;">*</span></label>
                <div class="col-md-3">
                    <select class="form-control" id="exampleSelect2">
                    <option>Urban</option>
                    <option>Rural</option>
                    </select>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Cast<span style="color: red;">*</span></label>
                <div class="col-md-4">
                    <input class="form-control" type="text" value="General" id="example-text-input">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Category<span style="color: red;">*</span></label>
                <div class="col-md-4">
                    <input class="form-control" type="text" value="General" id="example-text-input">
                </div>
                <label for="exampleSelect2" class="col-md-2 col-form-label" style="text-align: center;">Sub-Category</label>
                <div class="col-md-4">
                    <select class="form-control" id="exampleSelect2">
                    <option>OBC (Creamy Layer)</option>
                    <option>OBC (Non -Creamy Layer)</option>
                    <option>SC</option>
                    <option>ST</option>
                    </select>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="exampleSelect2" class="col-md-2 col-form-label" style="text-align: center;">Whether admitted in</label>
                <div class="col-md-4">
                    <select class="form-control" id="exampleSelect2">
                    <option>None of these</option>
                    <option>NRI Seat</option>
                    <option>Govt. Sponsered Seat</option>
                    </select>
                </div>
                </div>
                <br/>
                <hr>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Blood Group</label>
                <div class="col-md-4">
                    <select class="form-control" id="exampleSelect2">
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB</option>
                    <option>O+</option>
                    <option>O-</option>
                    </select>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Hoobies</label>
                <div class="col-md-5">
                    <input class="form-control" type="text" value="General" id="example-text-input">
                </div>
                </div>
                </div>
                </div>
                </div>
                <div id="step-4" class="">
                <div id="form-step-3" role="form" data-toggle="validator">
                    <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Hostel Request</h2>
                    <div class="panel panel-default" style="padding: 20px;">
                    <br/>
                    <h5 style="margin-left: 20px;"><span style="color: red;font-size: 1.5em;">  *</span>-Required Fields</h5>
                    <hr>
                    <br/>
                         <div class="form-group row">
                            <label for="exampleSelect2" class="col-md-2 col-form-label" style="text-align: center;">Hostel Request<span style="color: red;">*</span></label>
                            <div class="col-md-3">
                                <select class="form-control" id="exampleSelect2">
                                <option>Yes</option>
                                <option>No</option>
                                </select>
                            </div>
                        </div> 
                        <br/>
                        <div class="form-group row">
                            <label for="exampleSelect2" class="col-md-2 col-form-label" style="text-align: center;">Hostel Name<span style="color: red;">*</span></label>
                            <div class="col-md-3">
                                <select class="form-control" id="exampleSelect2">
                                <option>A-Block</option>
                                <option>B-Block</option>
                                <option>C-Block</option>
                                <option>D-Block</option>
                                <option>E-Block</option>
                                </select>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <label for="exampleSelect2" class="col-md-2 col-form-label" style="text-align: center;">Room No. Request</label>
                            <div class="col-md-3">
                                <input class="form-control" type="text" placeholder="123" id="example-text-input">
                            </div>
                        </div> 
                        </div>
                        </div> 
                </div>
                <div id="step-5" class="">
                <div id="form-step-4" role="form" data-toggle="validator">
                    <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Confirmation</h2>
                    <div class="panel panel-default" style="padding: 20px;">
                        <h3 style="text-align: center;font-size: 1.5em;">Decleration</h3>
                        I undertake that the information submitted is true to the best of my knowledge and belief. I shall bear
the consequences if any of them are found to be wrong.
                        <h3 style="text-align: center; padding-top: 20px;">Undertaking by the Student</h3>
                         I will attend all the classes from the opening day of the Institute and I will be regular
and punctual to all the classes i.e (Theory/Practical) and i am aware that if I don’t secure attendance more than
75% I shall be detained and not allowed to appear for the Term End Examination.
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        </form>
    </div>
    <!--footer-->
    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy;  IET,Lucknow</span>
      </div>
    </footer>
    
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="js/jquery.smartWizard.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            // Step show event 
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }
            });
            
            // Toolbar extra buttons
            var btnFinish = $('').text('')
                                             .addClass('')
                                             .on('click', function(){ 
                                                    if( !$(this).hasClass('disabled')){ 
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate'); 
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('Oops we still have error in the form');
                                                                return false;    
                                                            }else{
                                                                alert('Great! we are ready to submit form');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            var btnCancel = $('').text('')
                                             .addClass('')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });                         
            
            
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'arrows',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'both',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    }
                 });
            
            
        });   
    </script>
    <script src="js/script.js"></script>
</body>
</html>
