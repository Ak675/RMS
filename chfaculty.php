<!DOCTYPE html>
<html>
<head>
	<title>Faculty Locator|C.E.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script type="text/javascript">
  <script>
    $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
    });
</script>
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
.submit
  {
    padding-top: 100px;
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
        <a class="nav-link" href="Faculty locator.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
    </ul>
  </div>
</nav>
<center><h3>Select your preferences</h3></center>
<br>
<div class="container">
  <form action="location.php">
  <div class="row">
    <div class="col-sm-3 col-md-6 col-lg-4">
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="facultyname">
       <option selected>Choose the faculty</option>
        <option value="Aparna Bannore">Aparna Bannore</option>
        <option value="Prof. Monika Sharma">Prof. Monika Sharma</option>
        <option value="K">Prof. Anindita Khade</option>
        <option value="M">Dr. Geetanjali Mishra</option>
        <option value="A">Prof. Ravindra Agrawal</option>
        <option value="P">Prof. Namrata Patel</option>
      </select>
    </div>

      <div class="col-sm-3 col-md-6 col-lg-4">
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="day" >
        <option selected>Choose Day of the Week</option>
        <option value="monday">Monday</option>
        <option value="tuesday">Tuesday</option>
        <option value="W">Wednesday</option>
        <option value="Th">Thursday</option>
        <option value="F">Friday</option>
      </select>
    </div>
      <div class="col-sm-3 col-md-6 col-lg-4">
       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="time">
        <option selected>Choose Time</option>
        <option value="1">9:00 am-10:00 am</option>
        <option value="2">10:00 am-11:00 am</option>
        <option value="3">11:00 am-12:00 noon</option>
        <option value="4">12:00 noon-1:00 pm</option>
        <option value="break">1:00 pm-1:30 pm(Break)</option>
        <option value="5">1:30 pm-2:30 pm</option>
        <option value="6">2:30 pm-3:30 pm</option>
        <option value="7">3:30 pm-4:30 pm</option>
      </select>
    </div>
  </div>
</div>
<div class=submit>
    <center><button type="submit" class="btn btn-primary">Submit</button></center>  
  </div>
</form> 
<footer><center style="color:white";>Thank You for visiting</center></footer>
</body>
</html>