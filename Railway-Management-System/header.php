<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
	li {
		font-family: sans-serif;
		font-size:18px;
	}
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body link="white" alink="white" vlink="white">
     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="index.php">Home</A></li>
            <li><A HREF="pnrstatus.php">PNR Status</A></li>
            <li><a href="booktkt.php">Book a ticket</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="index.php"><?php  
				if(isset($_SESSION['user_info'])){
					echo '<li>'.$_SESSION['name'].'</li><li><a href="logout.php" >Logout</a></li>
';
        }
				else
					echo '<li><a href="Login.php">Login</a></li>';
				?></a>
			</li>
            </ul>
          </div>
        </div>
      </div>
</body>
</html>