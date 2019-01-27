<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="../../css/bootstrap.min.css">

<meta charset="UTF-8">
<script>
	var submi='<?=$_POST['submit']?>';
	
			var q=new Array(12);
			var count=0;
			var notatmp=0;
			var Wrong=0;

	if (submi!=null) {		
			q[0]='<?=$_POST['q0']?>';
			q[1]='<?=$_POST['q1']?>';
			q[2]='<?=$_POST['q2']?>';
			q[3]='<?=$_POST['q3']?>';
			q[4]='<?=$_POST['q4']?>';
			q[5]='<?=$_POST['q5']?>';
			q[6]='<?=$_POST['q6']?>';
			q[7]='<?=$_POST['q7']?>';
			q[8]='<?=$_POST['q8']?>';
			q[9]='<?=$_POST['q9']?>';
			for (var i = 0; i < 10; i++) {

				if(i==3||i==6){
					if(q[i]==1)
						count++
				}
				if(i==0||i==4||i==7||i==8||i==9){
					if(q[i]==2)
						count++
				} 
				if(i==5){
					if(q[i]==3)
						count++
				} 
				if(i==1||i==2){
					if(q[i]==4)
						count++
				}  
				if(q[i]==0)
					notatmp++;

			}
			Wrong=10 - notatmp - count;

	}	


window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Result",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 25,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: notatmp, label: "Not Answered" },
			{ y: Wrong, label: "Wrong" },
			{ y: count, label: "Correct" }
		]
	}]
});
chart.render();

}
</script>
<style>
	.zoom {      
-webkit-transition: all 0.35s ease-in-out;    
-moz-transition: all 0.35s ease-in-out;    
transition: all 0.35s ease-in-out;     
cursor: -webkit-zoom-in;      
cursor: -moz-zoom-in;      
cursor: zoom-in;  
}     

.zoom:hover,  
.zoom:active,   
.zoom:focus {
/**adjust scale to desired size, 
add browser prefixes**/
-ms-transform: scale(2.5);    
-moz-transform: scale(2.5);  
-webkit-transform: scale(2.5);  
-o-transform: scale(2.5);  
transform: scale(2.5);    
position:relative;      
z-index:100;  
}
</style>
</head>
<body style="background-color: gray;">
	<nav class="navbar navbar-inverse navbar-custom ">
		<div class="container">
			<a class="navbar-brand mr-0 mr-md-2" href="../../index.php">School Bhuvan</a>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="../../index.php">HOME</a>
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
	<div class="panel">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<br>
					<div id="chartContainer" style="height: 550px; max-width: 430px; margin: 0px auto;"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="../../js/canvasjs.min.js"></script>
</body>
</html>