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

    <link href="css/custom.css" rel="stylesheet" type="text/css" />

    <!--district-state-select-jquery-->
    <script language="Javascript" src="js/jquery.js"></script>
    <script type="text/JavaScript" src='js/state.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Font Awosome -->
    <script src="https://use.fontawesome.com/8ae6ac7a3a.js"></script>

    <!-- Keyboard CSS and js -->
    <script type="text/javascript" src="js/keyboard.js" charset="UTF-8"></script>
    <link rel="stylesheet" type="text/css" href="css/keyboard.css">
    
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip({delay: {show: 5, hide: 1200}});
        });   
    </script>
            
    <style>
  .tooltip-inner {
    background-color: #ffff99;
    color: #000;
    }
    .tooltip.top .tooltip-arrow {
        border-top-color: #ffff99;
    }
    .tooltip.right .tooltip-arrow {
        border-right-color: #ffff99;
    }
    .tooltip.bottom .tooltip-arrow {
        border-bottom-color: #ffff99;
    }
    .tooltip.left .tooltip-arrow {
        border-left-color: #ffff99;
    }
   </style>
</head>
<body>
    <div class="container">
     <div style="display: inline;"><img src="Ietlogo.png" style="float: left;" /><h1 style="text-align: center; padding-top: 10px;text-transform: uppercase; padding-bottom: 50px;font-size: 3em; font-family:serif;font-size: 2em;">institute of engineering &amp; technology, lucknow <br/>
    <small style="text-transform: capitalize;"> (an autonomous constituent institute of dr. A.P.J. Abdul Kalam technical university)
    </small><br/>
    <span style="text-transform: uppercase; font-size:.8em"> Student provisional registration form&nbsp;(<?php if(date("m"<=6)){ $a = date("Y"); echo $a-1;} else{ echo date("Y"); }  ?>-<?php if(date("m"<=6)){ echo date("Y"); } else{ $a = date("Y"); echo $a+1; } ?>)</span></h1>
    </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
        <div class="panel panel-default" style="padding: 20px;">
            <ul class="nav nav-pills nav-justified">
              <li role="presentation" class="active"><a href="#">Student Details</a></li>
              <li role="presentation" class="disabled"><a href="#">Parents Details</a></li>
              <li role="presentation" class="disabled"><a href="#">Other Details</a></li>
              <li role="presentation" class="disabled"><a href="#">Confirmation</a></li>
            </ul>
        </div>
                     <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Student Details</h2>
                     <div class="panel panel-default" style="padding: 20px;">
                   <h5 style="margin-left: 20px;"><span style="color: red; font-size: 1.5em;">  *</span>-Required Fields</h5>
                <hr>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Name<span style="color: red;">  *</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Name can contain only capital letter and spaces."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Name" id="name" name="student-name" pattern="[A-Z\s]{3,30}" data-error="Name can contain only capital letter and spaces." required>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="exampleSelect1" class="col-md-1 col-form-label" style="text-align: center;">Gender<span style="color: red;">  *</span></label>
                <div class="col-md-2">
                    <select class="form-control" data-error="Select Male or Female" name="gender">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>     
                </div>

                <br/>

           
                <br/>

                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Name (In Hindi)<span style="color: red;">  *</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Name using Hindi Keyboard."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-5">
                    <input style="font-family: 'Noto Sans', sans-serif;" type="text" value="" class="keyboardInput" lang="hi" id="form-input" name="student-name-hindi" placeholder="नाम (
हिंदी में)" pattern="\p{Devnagari}" data-error="Name can contain only capital letter and spaces." required>
                     <div class="help-block with-errors"></div>
                </div>
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Year of Admission<span style="color: red;">*</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Year of Addmission."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-2">
                    <select class="form-control" data-error="Select Any Year" name="year">
                    <option value="" disabled selected hidden>Select</option>
                    <option><?php $a = date("Y"); echo $a; ?> </option>
                    <option><?php $a = date("Y"); echo $a-1; ?></option>
                    <option><?php $a = date("Y"); echo $a-2; ?></option>
                    <option><?php $a = date("Y"); echo $a-3; ?></option>
                    <option><?php $a = date("Y"); echo $a-4; ?></option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
<br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">DEGREE SOUGHT<span style="color: red;">*</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Degree."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-2">
                    <select class="form-control" id="degree" data-error="Select Degree" name="degree">
                    <option value="" disabled selected hidden>Select</option>
                    <option>B. TECH</option>
                    <option>M. TECH</option>
                    <option>MCA</option>
                    <option>MBA</option>
                    <option>PhD</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">COURSE/ BRANCH<span style="color: red;">*</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Branch."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-2">
                    <select class="form-control" id="branch" data-error="Select Branch" name="branch">
                    <option value="" disabled selected hidden>Select</option>
                    <option>CSE</option>
                    <option>IT</option>
                    <option>Civil</option>
                    <option>EE</option>
                    <option>ME</option>
                    <option>EC</option>
                    <option>EI</option>
                    <option>Chemical</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">SEMESTER<span style="color: red;">  *</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your semester currently pursuing."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-2">
                    <select class="form-control" id="sem" data-error="Select Branch" name="semester">
                    <option value="" disabled selected hidden>Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <br/>
            <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="form-group row">
                <label for="example-color-input" class="col-md-3 col-form-label" style="text-align: center;">University Roll No.<span style="color: red;">*</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your University Roll Number."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-7">
                    <input class="form-control" type="number" name="roll-no" placeholder="15052xxxxx">
                    (Except First Semester)
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-date-input" class="col-md-3 col-form-label" style="text-align: center;">Date of Birth<span style="color: red;">  *</span></label>
                <div class="col-md-7">
                    <input class="form-control" type="date" name="birth-day" placeholder="yyyy-mm-dd">
                </div>
                </div>
                <br/>

                <div class="form-group row">
                <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">Street Address (Line 1)<span style="color: red;">  *</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your address."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-7">
                    <input class="form-control" type="text" name="street-address1" placeholder="Line 1">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">Street Address (Line 2) &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your address (Optional Field)."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-7">
                    <input class="form-control" type="text" name="street-address2" placeholder="Line 2">
                </div>
                </div>
                <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">State<span style="color: red;">  *</span></label>
                  <div class="col-md-7">
                    <select class="form-control" id="listBox" name="state" onchange='selct_district(this.value)'></select>
                  </div>
                  </div>
                  <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">District<span style="color: red;">  *</span></label>
                     <div class="col-md-7">
                    <select class="form-control" name="district" id='secondlist'></select>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 col-sm-3" style="text-align:center">
                <div style="margin:auto; border:1px solid black; height:180px; width:150px">
                </div>
                
                <input type="file" id="upload_photo" name="profile-photo" style="margin-top:7px;">
                
                <div style="margin-top:20px;width:210px ;height: 70px; border:1px solid black;margin-right:auto;margin-left:auto;">
                </div>
                
                <input type="file" id="upload_sign" name="signature" style="margin-top:7px;" />
                

            </div>
            </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-1 col-form-label" style="text-align: center;">Pin<span style="color: red;">  *</span>&nbsp;<a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter 6 Digit Pin Code."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-2">
                    <input class="form-control" type="text" placeholder="123456" name="pin" pattern="\d{6}">
                </div>
                <label for="example-search-input" class="col-md-1 col-form-label">Phone<span style="color: red;"> *</span> &nbsp; <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your 10 Digit Mobile Number."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-3">
                    <input class="form-control" type="text" placeholder="9876543210" name="phone" pattern="\d{10}">
                </div>
                <label for="example-search-input" class="col-md-1 col-form-label">E-mail<span style="color: red;"> *</span> &nbsp; <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Email Address."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <input class="form-control" type="email" name="email" placeholder="email@abc.com">
                </div>
                </div>
                </div>
                <button type="submit" name = "submit" class="btn btn-primary btn-md pull-right">Next Step</button>
               </form>
    </div>
    <!--footer-->
    <br/>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy;  IET,Lucknow</span>
      </div>
    </footer>
    
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- validater-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

    <script src="js/script.js">
    </script>

<?php
$studentName=$gender="";
$studentNameHindi=$year=$degree=$branch=$semester=$rollNo=$birthDay=$streetAddress1=$streetAddress2="";
$state=$district=$profilePhoto=$signature=$pin=$phone=$email=$messageErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$studentName= test_input($_POST['student-name']);
$gender=$_POST['gender'];
$studentNameHindi= test_input($_POST['student-name-hindi']);
$year=$_POST['year'];
$degree=$_POST['degree'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$rollNo= test_input($_POST['roll-no']);
$birthDay=$_POST['birth-day'];
$streetAddress1= test_input($_POST['street-address1']);
$streetAddress2= test_input($_POST['street-address2']);
$state=$_POST['state'];
$district=$_POST['district'];
$profilePhoto=$_POST['profile-photo'];
$signature=$_POST['signature'];
$pin= test_input($_POST['pin']);
$phone= test_input($_POST['phone']);
$email= test_input($_POST['email']);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(!$studentName || !$gender || !$studentNameHindi || !$year || !$degree || !$branch || !$semester || !$rollNo || !$birthDay || !$streetAddress1 || !$state || !$district || !$profilePhoto || !$signature || !$pin || !$phone || !$email){
    $messageErr = 'You have not entered the required details !!';
}

if (!get_magic_quotes_gpc()) {

$studentName= addslashes($studentName);
$gender= addslashes($gender);
$studentNameHindi= addslashes($studentNameHindi);
$year= addslashes($year);
$degree= addslashes($degree);
$branch= addslashes($branch);
$semester= addslashes($semester);
$rollNo= addslashes($rollNo);
$birthDay= addslashes($birthDay);
$streetAddress1= addslashes($streetAddress1);
$streetAddress2= addslashes($streetAddress2);
$state= addslashes($state);
$district= addslashes($district);
$profilePhoto= addslashes($profilePhoto);
$signature= addslashes($signature);
$pin= addslashes($pin);
$phone= addslashes($phone);
$email= addslashes($email);

}

@ $db = new mysqli('localhost', 'root', '', 'form');
if (mysqli_connect_errno()) {
exit;
}

$query = "insert into student values
('".$rollNo."', '".$studentName."', '".$gender."', '".$studentNameHindi."', '".$year."' , '".$degree."' , '".$semester."' , '".$birthDay."' , '".$streetAddress1."' , '".$streetAddress2."' , '".$state."' , '".$district."' , '".$profilePhoto."' , '".$signature."' , '".$pin."' , '".$phone."' , '".$email."')";
$result = $db->query($query);
if($result)
{
    header('Location: http://localhost/form/step-2.php');
    exit;
}
}
?>

</body>
</html>