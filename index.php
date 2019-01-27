<!DOCTYPE html>
<html>
<head>
	<title>School Bhuvan</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/sb-admin-2.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: grey;" background="image/bg.gif">
	<nav class="navbar navbar-inverse" style="color:  blue;">
		<div class="container">
			<a class="navbar-brand mr-0 mr-md-2" href="index.php">School Bhuvan</a>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="index.php">HOME</a>
				</li>
				<li class="dropdown dropdown-hover">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">USER<span class="caret"></span></a>				
					<ul class="dropdown-menu" role="menu">
						<li><a href="editprofile.php">Edit Profile</a></li>
						<li><a href="#"></a></li>
						<li><a href="#">Setting</a></li>
						<li class="divider"></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>                
			    </li>
            </ul>
	  	</div>
	</nav>
	<div class="container">
		<br><br>
		<div class="panel">	
			<h1 align="center">Welcome to School Bhuvan Gaming Portal</h1>
			<hr>
			<div class="align=center" class="row">
				<div class="col-md-6">
					<div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gamepad fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Class IX</div>
                                    <div>New Games</div>
                                </div>
                            </div>
                        </div>
                        <a href="class_IX.php">
                            <div class="panel-footer">
                                <span class="pull-left">Play to Learn</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                	</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gamepad fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Class X</div>
                                    <div>New Games</div>
                                </div>
                            </div>
                        </div>
                        <a href="class_X.php">
                            <div class="panel-footer">
                                <span class="pull-left">Play to Learn</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                	</div>
				</div>
			</div>
			
			<br><br><br>
			<center><img class="img-responsive" src="image/logo_game_on.png" alt="" align="center"></center>
			<br><br><br>
		</div>
	</div>
</body>
</html>