<!DOCTYPE html>
<html>
<head>
      <title>My Coco</title>
</head>
<body>
<!-- 
-->
<div class="content">
	<header>
	</header>
	<div class="menu">
		<ul>
		</ul>
	</div>
	<div class="badan">
	    
	    
	 <?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		
	}
 
	 ?>	
</div>
</body>
</html>
