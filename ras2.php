<!DOCTYPE html>
<html>
<head>
  <title>Book room</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <style type="text/css"> 
 body {
    padding-top: 75px;
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
             <a class="navbar-brand" href="../html/Room availsyst.html">Room Availability System</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="../html/Room availsyst.html">Home<span class="sr-only">(current)</span></a>
                     </li>
                     <li><a class="nav-link" href="../html/about.html">About Us</a></li>
                          </div>
         </nav>
         <div class="container">
  <h3>Choose your preferences</h3>
  <br>
  <form action=".php" method="GET">
  <div class="row">
      <div class="col-sm-3 col-md-6 col-lg-4">
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="day">
        <option selected>Choose Day of the Week</option>
        <option value="monday">Monday</option>
        <option value="tuesday">Tuesday</option>
        <option value="W">Wednesday</option>
        <option value="Th">Thursday</option>
        <option value="F">Friday</option>
      </select>
    </div>
      <div class="col-sm-3 col-md-6 col-lg-4">
       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="room">
        <option selected>Choose Room</option>
        <option value="112">112</option>
        <option value="113">113</option>
      </select>
    </div>
      <div class="col-sm-3 col-md-6 col-lg-4">
       <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>

</form> 
   <footer><center style="color:white";>Thank You for visiting</center></footer>      
</body>
</html>