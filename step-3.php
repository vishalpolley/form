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
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
        <div class="panel panel-default" style="padding: 20px;">
            <ul class="nav nav-pills nav-justified">
              <li role="presentation"><a href="step1.php">Student Details</a></li>
              <li role="presentation"><a href="step-2.php">Parents Details</a></li>
              <li role="presentation" class="active"><a href="#">Other Details</a></li>
              <li role="presentation" class="disabled"><a href="#">Confirmation</a></li>
            </ul>
        </div>
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
                    <option>AB+</option>
                    <option>AB-</option>
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
                <a href="step-2.php"><button type="button" class="btn btn-primary btn-md">Previous Step</button></a>
                <a href="step-4.php"><button type="button" class="btn btn-primary btn-md pull-right">Next Step</button></a>
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
