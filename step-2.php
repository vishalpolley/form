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
                <label for="example-text-input" class="col-md-2 col-form-label" pastyle="text-align: center;">Father's Name<span style="color: red;">*</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Father's Name">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession<span style="color: red;">*</span></label>
                    <div class="col-md-3">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    <option>Farmer</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">Annual Income<span style="color: red;">*</span></label>
                <div class="col-md-3">
                    <select class="form-control">
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
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Mother's Name<span style="color: red;">*</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Mother's Name">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession<span style="color: red;">*</span></label>
                <div class="col-md-3">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>House Wife</option>
                    <option>Business</option>
                    <option>Service</option>
                    <option>Government Employee</option>
                    </select>
                </div>
                <label for="example-search-input" class="col-md-2 col-form-label" style="text-align: center;">Annual Income</label>
                <div class="col-md-3">
                    <select class="form-control">
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
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Guardian's Name<span style="color: red;">*</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Guardian's Name">
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Profession</label>
                <div class="col-md-3">
                    <select class="form-control">
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
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Father's/ Guardian's Address<span style="color: red;">  *</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Street Address">
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
                    <input class="form-control" type="number" placeholder="123456">
                </div>
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Phone<span style="color: red;">*</span></label>
                <div class="col-md-4">
                    <input class="form-control" type="number" placeholder="9876543210">
                </div>
                </div>
                <br/>
                <hr>
                <br/>
                 <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Local Guardian's Name</label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Local Guardian's Name, Relationship">
                    (If Any) alongwith relationship
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Local Guardian's Address<span style="color: red;">  *</span></label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Street Address">
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
                    <input class="form-control" type="number" placeholder="123456">
                </div>
                <label for="example-number-input" class="col-md-2 col-form-label" style="text-align: center;">Phone</label>
                <div class="col-md-4">
                    <input class="form-control" type="number" placeholder="9876543210">
                </div>
                </div>
                </div>
                <a href="step-1.php"><button type="button" class="btn btn-primary btn-md">Previous Step</button></a>
                <a href="step-3.php"><button type="button" class="btn btn-primary btn-md pull-right">Next Step</button></a>
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
