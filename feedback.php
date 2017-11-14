<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Infopet</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
    <link href="css/app.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">infopet</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">Home</a></li>
        <li><a href="info.html">Info</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="feedback.html">Feedback</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="subsform col-md-12">
  <div class="col-md-6">
    <?php
    if(isset($_POST['submit']))
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $feedback = $_POST['feedback'];

      $semail = "rohanjuly31@gmail.com";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
      $body = "Name : " . $fname . " " . $lname . "\n\n";
      $body .= "Email : " . $email . "\n\n";
      $body .= "Feedback : " . $feedback;

      $headers .= "From: Feedback Page <no-reply@petinfo.com>";
      $val = mail($semail, 'Website Feedback Page', $body, $headers);
      if($val == 1)
      {
      ?
        <div class="alert alert-success" role="alert">Your message is successfully sent.</div>
      <?php
      }
    }
    ?>
    <form accept="" method="post">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="First Name" name="fname" required>
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="E-mail" name="email" required>
  </div>
  <div class="form-group">
    <textarea class="txtarea" cols="72" rows="5" placeholder="Feedback" name="feedback"></textarea>
  </div><br>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
  <button type="reset" class="btn btn-default">Reset</button>
  </div>
  </form>
  
  <div class="col-md-6">
    <img src="images\feed.jpg" alt="test image" class="img-responsive">
  </div>
</div>
<hr width=100%>
<div class="reviews col-md-12">
<h3>Reviews</h3>
  <p>"People always joke that 'dog' spells 'god' backwards. They should consider that it might be the higher power coming down to see just how well they do, what kind of people they are. The animals are right here, right in front of us. And how we treat these companions is a test."</p><br><p class="pull-right">Linda Blair</p><br>
</div>
</div>
</div>
<div class="footersectn col-md-12">
 <center>Designed &amp; Developed by Rohan Kumar</center>
</div>
</body>
</html>