<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script type="text/javascript"></script>
     <title>Faculty Locator</title>
       <script>
         $(document).ready(function () {
         $('.dropdown-toggle').dropdown();
         });
       </script>
   <style type="text/css">
              body{
    padding-top: 55px;
   }
     footer {
       position: absolute;
       width:100%;
       height:10%;
       bottom: 0;
            }
     footer {
       background: #1e1d26;
            }
   </style>
   </head>
   <body>
   <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ed8244;">
     <a class="navbar-brand" href="Faculty locator.php">Faculty Locator</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="C:Faculty locator.php">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="about.html">About Us</a>
         </li>
       </ul>
     </div>
   </nav>

     <div class="jumbotron jumbotron-fluid">
       <div class="container">
         <h1 class="display-3">Faculty Locator</h1>
         <p class="lead">One stop to find the current location of the faculty in the college</p>
       </div>
     </div>

   <center>
     <p>Choose the branch of the faculty</p>
       <div class="dropdown">
           <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Branch 
           </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
           <a class="dropdown-item" href="chfaculty.php">CE</a>
           <a class="dropdown-item" href="#">EXTC</a>
           <a class="dropdown-item" href="#">ME</a>
           <a class="dropdown-item" href="#">IT</a>
           <a class="dropdown-item" href="#">PPT</a>
         </div>
       </div>
     </center>
   <footer><center style="color:white";>Thank You for visiting</center></footer>
 </body>
</html>
