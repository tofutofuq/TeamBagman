
<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pahinungod 2023</title>
	<link rel="icon" type ="image/x-icon" href="ckc.png">
	<link rel="stylesheet" type="text/css" href="testing2.css">	
	<script type ="text/javascript" src="jquery.js"> </script>
	<script type ="text/javascript" src="functions.js"> </script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<script src="fifth.js"></script>
</head>
<body>
<img class = "banner" src="banner.jpg" alt="">
	<form id = "register"> 
		<div class="container">
		
			<div class ="left-box">
				
			<div class = "top-left">
			<h2 class = "suc"><?php echo $_SESSION['category']; ?><br></h2>
				<hr class = "line1">
			</div>
			<h2 class = "suc1"><?php echo $_SESSION['name']; ?> <img class = "user" src="user.png" alt=""></h2>
			<hr width = "90%" style = "margin-left: 4%;">
				<div class = "p-g-t">
					<h1 class = "tech" id = "id">Technical -  <span id = "per" class = "per"></span><br>(75%)</h1>
					<h1 class = "presentation">Presentation - <span id = "gra" class = "gra"></span><br>(25%)</h1>
					
					
					<div class = "tt"><h1 class = "tt">Total - <span id ="to" class = "to"></span><br>(100%)</h1></div>
					
			
				</div>
				

			</div>
			<div class ="content"><div class = "top_right"><img class="ckc" src="ckc.png"><h1 class = "pah">Pahinungod 2023</h1> </div>
				<div class="right-box">
					
					<input type="number" id = "mt" name = "mt" placeholder = "Execution & Synchronization (Technical)" oninput="checkMaxValue(this, 40)"> <h3>/40</h3>
					<input type="number" id = "ph" name = "ph"  placeholder = "Choreography (Technical)" oninput="checkMaxValue(this, 35)"> <h3>/35</h3>
					<input type="number" id = "ja"  name = "ja" placeholder = "Chants/Vocals (Presentation)" oninput="checkMaxValue(this, 10)"> <h3>/10</h3>
					<input type="number" id = "csa" name = "csa"  placeholder = "Costumes & Props (Presentation)" oninput="checkMaxValue(this, 15)"> <h3>/15</h3>
					<!-- <input id = "rsub" type ="submit" onclick="show_result()" value = "submit"> -->
					<a href="back2.php">Back</a>
					<button type = "submit" id ="rsub2" onclick="show_result(), validateForm() "> Submit </button>

    <script>
    function checkMaxValue(input, maxValue) {
      if (input.value > maxValue) {
        input.value = maxValue;
      }
    } 
	function validateForm() {
      var mt = document.getElementById("mt").value;

      if (!mt.trim()) {
        alert("Please fill out the required field.");
        return false;
      }
    
    }
	function validateForm() {
      var ph = document.getElementById("ph").value;

      if (!ph.trim()) {
        alert("Please fill out the required field.");
        return false;
      }
    
	  
    }
	function validateForm() {
      var ja = document.getElementById("ja").value;

      if (!ja.trim()) {
        alert("Please fill out the required field.");
        return false;
      }
    
    }
	function validateForm() {
      var csa = document.getElementById("csa").value;

      if (!csa.trim()) {
        alert("Please fill out the required field.");
        return false;
      }
    
    }
  </script>
   


					
					<br>
					<h4 id = "rresponse"></h4>
					
				</div>
			</div>
			<div class = "result">
				<h2></h2>
			</div>
			
			
		</div>
		
		
		
	</form>	
	<div></div>
	<form action="process.php" method="post">
        				<button type="submit" class = "results"><span>View Results</span></button>
    				</form>
	
	

	



</body>
</html>