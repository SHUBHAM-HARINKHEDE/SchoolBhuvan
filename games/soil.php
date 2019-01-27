<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>soil</title>
		
		<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="../css/sb-admin-2.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<style type="text/css" media="screen">
		#flashContent { width:100%; height:100%; }
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
			<div class="container">
				<a class="navbar-brand mr-0 mr-md-2" href="index.html">School Bhuvan</a>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="../index.php">HOME</a>
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
		 <!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		  <div class="modal-dialog">
		  
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Instructions</h4>
		      </div>
		      <div class="modal-body">
		        <img class="img-responsive" src="../image/instruction1.gif" alt="" />
		        1.Select color and put on right place/area of map.<br>
		        2.If you select right color shows "Good".<br>
			    3.If you select wrong color shows "Incorrect! Try Again".<br>
		        4.If all color are put right place/area user won the game.
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
		      </div>
		    </div>
		    
		  </div>
		</div>
		<script>
		  $(window).on('load',function(){
		       $("#myModal").modal();
		  });
		 </script>
		<div class="container">
			<br><br><br><br>
			<div class="panel">
				<h3>Type of Soil in India</h3>
				<hr>
			<div class="panel">
				<div id="flashContent">
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1000" height="700" id="soil" align="middle">
						<param name="movie" value="soil.swf" />
						<param name="quality" value="high" />
						<param name="bgcolor" value="#ffffff" />
						<param name="play" value="true" />
						<param name="loop" value="true" />
						<param name="wmode" value="window" />
						<param name="scale" value="showall" />
						<param name="menu" value="true" />
						<param name="devicefont" value="false" />
						<param name="salign" value="" />
						<param name="allowScriptAccess" value="sameDomain" />
						<!--[if !IE]>-->
						<object type="application/x-shockwave-flash" data="soil.swf" width="1000" height="700">
							<param name="movie" value="soil.swf" />
							<param name="quality" value="high" />
							<param name="bgcolor" value="#ffffff" />
							<param name="play" value="true" />
							<param name="loop" value="true" />
							<param name="wmode" value="window" />
							<param name="scale" value="showall" />
							<param name="menu" value="true" />
							<param name="devicefont" value="false" />
							<param name="salign" value="" />
							<param name="allowScriptAccess" value="sameDomain" />
						<!--<![endif]-->
							<a href="http://www.adobe.com/go/getflash">
								<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
							</a>
						<!--[if !IE]>-->
						</object>
						<!--<![endif]-->
					</object>
				</div>
			</div>
		</div>
	</body>
</html>
