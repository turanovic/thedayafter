<?php
session_start();
session_destroy();
//setcookie("visiter", 3, time() + (86400 * 30), "/");
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>TheFinalDay</title>
        <link rel="icon" href="assets/img/favicon.png">
        
		
		<!-- Boostrap css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>-->

		<!-- Latest compiled and minified vanilla Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		
		<link rel="stylesheet" href="./css/Style.css">
    </head>
    <body>
	<?php
    include 'resources/php/banner.php';
    ?>
        <div class="container-fluid">
             <div class="row">
         
                <div class="col-lg-6 col-md-10 col-sm-12 mainForm">

                    <h2>
						Enquête verzonden
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					</h2>
                    <p>
                        Bedankt voor het invullen van de enquête. Tot volgende week!
                    </p>
					
                </div>
         
             </div>
        
        </div>


    </body>
</html>

<script src="resources/js/script.js"></script>