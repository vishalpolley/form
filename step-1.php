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
</head>
<body>
    <div class="container">
     <div style="display: inline;"><img src="Ietlogo.png" style="float: left;" /><h1 style="text-align: center; padding-top: 10px;text-transform: uppercase; padding-bottom: 50px;font-size: 3em; font-family:serif;font-size: 2em;">institute of engineering &amp; technology, lucknow <br/>
    <small style="text-transform: capitalize;"> (an autonomous constituent institute of dr. A.P.J. Kalam technical university)
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
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Name<span style="color: red;">  *</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Name" id="name" name="student-name" pattern="[A-Z]{3,.}">
                </div>
                <label for="exampleSelect1" class="col-md-1 col-form-label" style="text-align: center;">Gender<span style="color: red;">  *</span></label>
                <div class="col-md-2">
                    <select class="form-control" name="gender">
                    <option value="" disabled selected hidden>Select</option>
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
                    <input class="form-control" style="font-family: 'Noto Sans', sans-serif;" type="text" name="student-name-hindi" placeholder="नाम (हिंदी में)">
                </div>
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Year of Admission<span style="color: red;">*</span></label>
                <div class="col-md-2">
                    <select class="form-control" name="year">
                    <option value="" disabled selected hidden>Select</option>
                    <option><?php $a = date("Y"); echo $a; ?> </option>
                    <option><?php $a = date("Y"); echo $a-1; ?></option>
                    <option><?php $a = date("Y"); echo $a-2; ?></option>
                    <option><?php $a = date("Y"); echo $a-3; ?></option>
                    <option><?php $a = date("Y"); echo $a-4; ?></option>
                    </select>
                </div>
                </div>
<br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">DEGREE SOUGHT<span style="color: red;">*</span></label>
                <div class="col-md-2">
                    <select class="form-control" id="degree" name="degree">
                    <option value="" disabled selected hidden>Select</option>
                    <option>B. TECH</option>
                    <option>M. TECH</option>
                    <option>MCA</option>
                    <option>MBA</option>
                    <option>PhD</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">COURSE/ BRANCH<span style="color: red;">*</span></label>
                <div class="col-md-2">
                    <select class="form-control" id="branch" name="branch">
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
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">SEMESTER<span style="color: red;">  *</span></label>
                <div class="col-md-2">
                    <select class="form-control" id="sem" name="semester">
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
                </div>
                </div>
                <br/>
            <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="form-group row">
                <label for="example-color-input" class="col-md-3 col-form-label" style="text-align: center;">University Roll No.<span style="color: red;">*</span></label>
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
                <label for="example-text-input" class="col-md-3 col-form-label" style="text-align: center;">Street Address<span style="color: red;">  *</span></label>
                <div class="col-md-7">
                    <input class="form-control" type="text" name="street-address" placeholder="Street Address">
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
                <label for="example-text-input" class="col-md-1 col-form-label" style="text-align: center;">Pin<span style="color: red;">  *</span></label>
                <div class="col-md-2">
                    <input class="form-control" type="text" placeholder="123456" name="pin" pattern="\d{6}">
                </div>
                <label for="example-search-input" class="col-md-1 col-form-label" style="text-align: center;">Phone<span style="color: red;">  *</span></label>
                <div class="col-md-3">
                    <input class="form-control" type="text" placeholder="9876543210" name="phone" pattern="\d{10}">
                </div>
                <label for="example-search-input" class="col-md-1 col-form-label" style="text-align: center;">E-mail<span style="color: red;">  *</span></label>
                <div class="col-md-4">
                    <input class="form-control" type="email" name="email" placeholder="email@abc.com">
                </div>
                </div>
                </div>
                <button type="submit" name = "submit" class="btn btn-primary btn-md pull-right">Next Step</button>
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

    <script src="js/script.js"></script>
</body>
</html>
<?php
$studentName=$gender="";
$studentNameHindi=$year=$degree=$branch=$semester=$rollNo=$birthDay=$streetAddress="";
$state=$district=$profilePhoto=$signature=$pin=$phone=$email="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$studentName=trim($_POST['student-name']);
$gender=$_POST['gender'];
$studentNameHindi=trim($_POST['student-name-hindi']);
$year=$_POST['year'];
$degree=$_POST['degree'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$rollNo=trim($_POST['roll-no']);
$birthDay=$_POST['birth-day'];
$streetAddress=trim($_POST['street-address']);
$state=$_POST['state'];
$district=$_POST['district'];
$profilePhoto=$_POST['profile-photo'];
$signature=$_POST['signature'];
$pin=trim($_POST['pin']);
$phone=trim($_POST['phone']);
$email=trim($_POST['email']);

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
$streetAddress= addslashes($streetAddress);
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
('".$rollNo."', '".$studentName."', '".$gender."', '".$studentNameHindi."', '".$year."' , '".$degree."' , '".$semester."' , '".$birthDay."' , '".$streetAddress."' , '".$state."' , '".$district."' , '".$profilePhoto."' , '".$signature."' , '".$pin."' , '".$phone."' , '".$email."')";
$result = $db->query($query);
if($result)
{
    header('Location: http://localhost/form/step-2.php');
    exit;
}
}
?>

