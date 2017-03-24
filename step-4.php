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
              <li role="presentation"><a href="step-3.php">Other Details</a></li>
              <li role="presentation" class="active"><a href="#">Confirmation</a></li>
            </ul>
        </div>
                     
                <h2 style="text-align: center;padding-top: 20px; padding-bottom: 20px; font-family: serif;font-size: 2.5em;">Confirmation</h2>
                    <div class="panel panel-default" style="padding: 20px;">
                        <h3 style="text-align: center;font-size: 1.5em;">Decleration</h3>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" name="decleration" value="yes">I undertake that the information submitted is true to the best of my knowledge and belief. I shall bear
the consequences if any of them are found to be wrong.
                            </label>
                        </div>
                        <h3 style="text-align: center; padding-top: 20px;">Undertaking by the Student</h3>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" name="undertaking" value="yes">I will attend all the classes from the opening day of the Institute and I will be regular
and punctual to all the classes i.e (Theory/Practical) and i am aware that if I don’t secure attendance more than
75% I shall be detained and not allowed to appear for the Term End Examination.
                            </label>
                        </div>
                    </div>
                <a href="step-3.php"><button type="button" class="btn btn-primary btn-md">Previous Step</button></a>
                <div style="text-align: center;"><button type="submit" class="btn btn-primary btn-md">Submit</button></div>
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

    <script src="js/script.js"></script>
</body>
</html>
