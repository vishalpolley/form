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
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
        <div class="panel panel-default" style="padding: 20px;">
            <ul class="nav nav-pills nav-justified">
              <li role="presentation"><a href="step-1.php">Student Details</a></li>
              <li role="presentation" class="active"><a href="#">Parents Details</a></li>
              <li role="presentation" class="disabled"><a href="#">Other Details</a></li>
              <li role="presentation" class="disabled"><a href="#">Confirmation</a></li>
            </ul>
        </div>
                     <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Parents Details</h2>
                    <div class="panel panel-default" style="padding: 20px;">
                    <br/>
                     <h5 style="margin-left: 20px;"><span style="color: red;font-size: 1.5em;">  *</span>-Required Fields</h5>
                <hr>
                <br/>
                     <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Father's Name<span style="color: red;">*</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Name can contain only capital letter and spaces."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="father-name" placeholder="Father's Name">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession<span style="color: red;">*</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Father's Profession."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                    <div class="col-md-3">
                    <select class="form-control" name="father-profession">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    <option>Farmer</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">Annual Income<span style="color: red;">*</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter the range of your Father's annual income."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-3">
                    <select class="form-control" name="father-income">
                    <option value="" disabled selected hidden>Select</option>
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
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Mother's Name<span style="color: red;">*</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Name can contain only capital letter and spaces."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="mother-name" placeholder="Mother's Name">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession<span style="color: red;">*</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Mother's Profession."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-3">
                    <select class="form-control" name="mother-profession">
                    <option value="" disabled selected hidden>Select</option>
                    <option>House Wife</option>
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">Annual Income  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter the range of your Mother's annual income. In other cases you can select NIL option (Optional Field)."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-3">
                    <select class="form-control" name="mother-income">
                    <option value="" disabled selected hidden>Select</option>
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
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Guardian's Name<span style="color: red;">*</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Name can contain only capital letter and spaces."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="guardian-name" placeholder="Guardian's Name">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Guardian's Profession."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-3">
                    <select class="form-control" name="guardian-profession">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Retired</option>
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    </select>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Father's/ Guardian's Address (Line 1)<span style="color: red;">  *</span>  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Father's/ Guardian's address."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="guardian-address1" placeholder="Line 1">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Father's/ Guardian's Address (Line 2) &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Father's/ Guardian's address (Optional Field)."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="guardian-address2" placeholder="Line 2">
                </div>
                </div>
                <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">State<span style="color: red;">  *</span></label>
                  <div class="col-md-5">
                    <select class="form-control" id="listBox" name="guardian-state" onchange='selct_district(this.value)'></select>
                  </div>
                  </div>
                  <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">District<span style="color: red;">  *</span></label>
                     <div class="col-md-5">
                    <select class="form-control" id='secondlist' name="guardian-district"></select>
                    </div>
                  </div>
                  <br/>
                <div class="form-group row">
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Pin<span style="color: red;">*</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter 6 Digit Pin Code."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <input class="form-control" type="number" name="guardian-pin" placeholder="123456">
                </div>
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Phone<span style="color: red;">*</span> &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Father's/ Guardian's 10 Digit Mobile Number."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <input class="form-control" type="number" name="guardian-phone" placeholder="9876543210">
                </div>
                </div>
                <br/>
                <hr>
                <br/>
                 <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Local Guardian's Name  &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Name can contain only capital letter and spaces (Optional Field)."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="local-guardian-name" placeholder="Local Guardian's Name, Relationship">
                    (If Any) alongwith relationship
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Local Guardian's Address (Line 1) &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Local Guardian's Address."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="local-guardian-address1" placeholder="Line 1">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Local Guardian's Address (Line 2) &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Local Guardian's Address (Optional Field)."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="local-guardian-address2" placeholder="Line 2">
                </div>
                </div>
                <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">State</label>
                  <div class="col-md-5">
                    <select class="form-control" id="listBox" name="local-guardian-state" onchange='selct_district(this.value)'></select>
                  </div>
                  </div>
                  <br/>
                  <div class="form-group row" id="selection">
                  <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">District</label>
                     <div class="col-md-5">
                    <select class="form-control" id='secondlist' name="local-guardian-district"></select>
                    </div>
                  </div>
                  <br/>
                <div class="form-group row">
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Pin &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter 6 Digit Pin Code (Optional Field)."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <input class="form-control" type="number" name="local-guardian-pin" placeholder="123456">
                </div>
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Phone &nbsp;  <a href="#" data-toggle="tooltip" data-placement="auto top" title="Enter your Local Guardian's 10 Digit Mobile Number (Optional Field)."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <input class="form-control" type="number" name="local-guardian-phone" placeholder="9876543210">
                </div>
                </div>
                </div>
                <a href="step-1.php"><button type="button" class="btn btn-primary btn-md">Previous Step</button></a>
                <a href="step-3.php"><button type="button" class="btn btn-primary btn-md pull-right">Next Step</button></a>
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

    <script src="js/script.js"></script>

<?php
$fatherName=$fatherProfession="";
$fatherIncome=$motherName=$motherProfession=$motherIncome=$guardianName=$guardianProfession=$guardianAddress1=$guardianAddress2=$guardianState="";
$guardianDistrict=$guardianPin=$guardianPhone=$localGuardianName=$localGuardianAddress1=$localGuardianAddress2=$localGuardianState=$localGuardianDistrict=$localGuardianPin=$localGuardianPhone="";

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
    header('Location: http://localhost/form/step-3.php');
    exit;
}
}
?>

</body>
</html>
