<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="side.css" />

	<link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
  
	<title>
		School Management System
	</title>
</head>

<body>
	
	<div id="sideMenu" class="sideMenu">
		<a href="javascript:void(0)"
			class="closeBtn"
			onclick="closeNav()">×</a>
		<div class="mainMenu">
			<h2>Dashboard</h2>
			<a href="#"
				onclick="showContent('Student')"><i class="fas fa-user-graduate">Student</i></a>
			<a href="#"
				onclick="showContent('Tutors')"><i class="fas fa-award">Tutors</i></a>
			<a href="#"
				onclick="showContent('Register')"><i class="">Register</a>
			<a href="#"
				onclick="showContent('Results')">Results</a>
			<a href="#"
				onclick="showContent('Timetable')">Timetable</a>
		</div>
	</div>
	
	<div id="contentArea">
		<span style="font-size: 30px; cursor: pointer"
			onclick="openNav()">☰</span>
		
	</div>
	<script src="side.js"></script>
</body>

</html>
