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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <!-- Font Awosome -->
    <script src="https://use.fontawesome.com/8ae6ac7a3a.js"></script>
    <style>
        #info-1, #info-2{
            display:none;
        }
    </style>
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
                <label for="exampleSelect2" class="col-md-4 col-form-label">If student belongs to minority community<span style="color: red;">*</span> &nbsp;<a href="#" data-toggle="tooltip" data-placement="auto top" title="Select Yes, if you belong to minority community."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-3">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Yes</option>
                    <option>No</option>
                    </select>
                </div>
                <label for="example-text-input" class="col-md-1 col-form-label" style="text-align: center;">Detail &nbsp;<a href="#" data-toggle="tooltip" data-placement="auto top" title="If Yes, enter the name of the minority community which you belong to."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <input class="form-control" type="text" placeholder=""Details>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="exampleSelect2" class="col-md-4 col-form-label">Whether belong to Rural or Urban area<span style="color: red;">*</span> &nbsp;<a href="#" data-toggle="tooltip" data-placement="auto top" title="Select if you belong to Urban or Rural area."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-3">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Urban</option>
                    <option>Rural</option>
                    </select>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Cast<span style="color: red;">*</span> &nbsp;<a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Cast."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>General</option>
                    <option>Other Backward Class (OBC)</option>
                    <option>Scheduled Class (SC)</option>
                    <option>Scheduled Tribe (ST)</option>
                    </select>
                </div>
                </div>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Student's Category<span style="color: red;">* </span> <p onclick="ftoggle();"><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="auto top" title="Select your Category. Click here for more info." style="font-size:15px;color: #bfbfbf;"></i><font color=green size="1.8"> &nbsp; Click here For more info</font></p>
                </label>
                <script>
                    function ftoggle(){
                        var x=document.getElementById("info-1");
                        if(x.style.display==="none"){
                            x.style.display="block"
                        }
                        else{
                            x.style.display="none";
                        }
                        var y=document.getElementById("info-2");
                        y.style.display="none";
                         
                    }
                     function ftoggle1(){
                        var x=document.getElementById("info-2");
                        if(x.style.display==="none"){
                            x.style.display="block"
                        }
                        else{
                            x.style.display="none";
                        }
                        var y=document.getElementById("info-1");
                        y.style.display="none";
                    }
                </script>
                <div class="col-md-4">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>UPGE</option>
                    <option>UPSC</option>
                    <option>UPST</option>
                    <option>UPBC</option>
                    <option>UPGD</option>
                    <option>GDSC</option>
                    <option>GDST</option>
                    <option>GDBC</option>
                    <option>GDDA</option>
                    <option>OSGE</option>
                    </select>
                </div>
                <label for="exampleSelect2" class="col-md-2 col-form-label" style="text-align: center;">Sub-Category  <p onclick="ftoggle1();"><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="auto top" title="Select your Sub-Category. Click here for more info." style="font-size:15px;color: #bfbfbf;"></i><font color=green size="1.8"> &nbsp; Click here For more info</font></p></label>
                <div class="col-md-4">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>UPFF</option>
                    <option>UPAF</option>
                    <option>UPHC</option>
                    <option>UPGL</option>
                    </select>
                </div>
                </div>
                <div id="info-1" style="clear: both;">
                      <div class="container" style="padding-right:90px;">
                        <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Student's Category</h2>
                        <table class="table table-bordered">
                        <thead><tr><th style="text-align:center;font-family: serif;font-size: 1.3em;">Category</th><th style="text-align:center;font-family: serif;font-size: 1.3em;">Explanation</th></tr></thead>
                        <tbody>
        <tr><td style="font-weight: bold;">UPGE</td><td>Candidates, who have passed the qualifying examination from an institution located in the State of Uttar Pradesh and who do not claim for any reserved category are eligible for admission to all the courses at all the institutions against available General (OPEN) seats. (no certificate required)</td></tr>
        <tr><td style="font-weight: bold;">UPSC / UPST / UPBC</td><td>Candidates, who have passed the qualifying examination from an institution located in State of U.P.; and are domicile of U.P.; and belong to Schedule Caste (SC) of U.P. / Schedule Tribe (ST) of U.P. / Other Backward Classes of U.P. are eligible for admission against available reserved seats of their category. (require certificate no. 1 or 2)</td></tr>
        <tr><td style="font-weight: bold;">UPGD</td><td>Candidates, who have passed the qualifying examination from an institution located outside U.P.; and whose parents are domicile of U.P.; and who have not claimed for any reserved category, are also eligible for admission to courses offered at all institutions under General (OPEN) category. Such candidate has to produce the domicile certificate of his/her parents (Father OR Mother only) at the time of counselling. (require certificate no. 3)</td></tr>
        <tr><td style="font-weight: bold;">GDSC / GDST / GDBC</td><td>Candidates, who have passed the qualifying examination from an institution located outside U.P.; and whose parents are domicile of U.P.; and who belong to Schedule Caste of U.P. / Schedule Tribe of U.P. / Other Backward classes of U.P. are also eligible for admission against reserved seats of their category. (require certificate no. 3 / 1 or 2)</td></tr>
        <tr><td style="font-weight: bold;">GDDA</td><td>The domicile requirement to son/daughter of following is relaxed and admission is permitted to such:defence personnel settled in U.P.  (require certificate no. 5)defence personnel who are not domicile of U.P., but are posted in U.P.  (require certificate no. 5)employee of All India Services belonging to U. P. cadre  (require certificate no. 11)</td></tr>
        <tr><td style="font-weight: bold;">OSGE</td><td>Candidates, who have passed the qualifying examination from an institution located outside U.P. and whose parents are NOT domicile of U.P. (no certificate required)</td></tr>
                                </tbody>
                        </table>
                        <div style="text-align:center; margin :auto;"><button type="button" class="btn btn-default btn-md" onclick="ftoggle();"><i class="fa fa-angle-double-left"></i>&nbsp;Hide</button></div>

                    </div> 
                 </div>
                 <div id="info-2" style="clear: both;">
                      <div class="container" style="padding-right:90px;">
                        <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Student's Sub-Category</h2>
                        <table class="table table-bordered">
                        <thead><tr><th style="text-align:center;font-family: serif;font-size: 1.3em;">Sub-Category</th><th style="text-align:center;font-family: serif;font-size: 1.3em;">Explanation</th></tr></thead>
                        <tbody>
        <tr><td style="font-weight: bold;">UPFF</td><td>Dependents of Freedom Fighters from U.P.</td></tr>
        <tr><td style="font-weight: bold;">UPAF</td><td> Sons / Daughters of defence personnel of U.P. either retired (superannuated) or killed / disabled
in action or defence personnel posted in U.P./defence personnel domicile of U.P. &amp; posted outside U.P.</td></tr>
        <tr><td style="font-weight: bold;">UPHC</td><td>Handicapped / Disabled of U.P.</td></tr>
        <tr><td style="font-weight: bold;">UPGL</td><td>Girls of Uttar Pradesh</td></tr>
                                </tbody>
                        </table>
                        <div style="text-align:center; margin :auto;"><button type="button" class="btn btn-default btn-md" onclick="ftoggle1();"><i class="fa fa-angle-double-left"></i>&nbsp;Hide</button></div>

                    </div> 
                 </div>
                <br/>
                <div class="form-group row">
                <label for="exampleSelect2" class="col-md-2 col-form-label" style="text-align: center;">Whether admitted in&nbsp;<a href="#" data-toggle="tooltip" data-placement="auto top" title="Select your Alotted Seat."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-4">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
                    <option>NRI Seat</option>
                    <option>Govt. Sponsered Seat</option>
                    <option>None of these</option>
                    </select>
                </div>
                </div>
                <br/>
                <hr>
                <br/>
                <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Blood Group</label>
                <div class="col-md-4">
                    <select class="form-control">
                    <option value="" disabled selected hidden>Select</option>
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
                <label for="example-text-input" class="col-md-2 col-form-label" style="text-align: center;">Hoobies&nbsp;<a href="#" data-toggle="tooltip" data-placement="auto top" title="Mention your Hoobies, if multiple, separate them with commas."><i class="fa fa-info-circle" aria-hidden="true" style="font-size:16px;color: #bfbfbf;"></i></a> </label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Hobbies">
                </div>
                </div>
                </div>
                <a href="step-2.php"><button type="button" class="btn btn-primary btn-md">Previous Step</button></a>
                <a href="step-4.php"><button type="button" class="btn btn-primary btn-md pull-right">Next Step</button></a>
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
</body>
</html>

