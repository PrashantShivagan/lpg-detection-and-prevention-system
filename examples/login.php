<?php

require_once 'server.php';

require_once 'db_connect.php';
if(isset($_POST)){
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['logged'] = true;
    header("Location: dashboard.php");
  }
}

require_once 'head.php';
?>
<body class="landing-page">
    <nav class="navbar navbar-transparent navbar-absolute">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">LPG</a>
          </div>

          <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
            
                <li>
                    <a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank" class="btn btn-simple btn-white btn-just-icon">
              <i class="fa fa-google-plus"></i>
            </a>
                </li>
                <li>
                    <a href="https://www.facebook.com" target="_blank" class="btn btn-simple btn-white btn-just-icon">
              <i class="fa fa-facebook-square"></i>
            </a>
                </li>
          <li>
                </li>
            </ul>
          </div>
      </div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
            <div class="container">
                <div class="row">
          <div class="col-md-6">
            <h1 class="title">Write the best title for your page.</h1>
                      <h4></h4>
                      <br />
                                </div>
                </div>
                <div class="row">
                  <div class="col-md-3">

            
  <button type="button" class="btn btn-success btn-lg" id="myBtn" style="z-index: 5">Login</button>
                  </div>
                </div>
            </div>

          </div>

        </div>

  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      z-index: 2;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:15px 40px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:20px 40px;">
          <form role="form" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="email" class="form-control" id="usrname" name="username" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="http://localhost/LPG/register.php">Sign Up</a></p>
          <p>Forgot <a href="resetpass.php">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>

<?php

require_once 'footer.php'

?>





 