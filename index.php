<!DOCTYPE html>
<?php include 'partials/_globals.php' ?>
<html>
<head>
	<title><?php echo $strings['sitename'] ?></title>
	<meta charset="utf-8"> 	
	<!--<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>-->
	<link href='<?php echo $strings['gfonts'] ?>' rel='stylesheet' type='text/css'>	
	<link rel="stylesheet" href="css/master.css">
</head>
<body id="home">
    <?php include 'partials/_header.php'; ?>
    
    <div class="main-title">
    	<a href="index.php">
	   	    <div class="logo">
		    	
		    </div>
		    <h1><?php echo $strings['sitename'] ?></h1>
	    </a>
	</div>    
	
    <div class="page-body">
    	<div class="container">
			<?php include 'partials/_pagenav.php'; ?>
			<div class="homepug">
				<div class="homepug-border"></div>
				<!--<img src="images/lookingup.jpg" alt="Pug peering at you">-->
			</div>			
    		<div class="content cf">
				<div class="cf center">
    				<div class="adoption-box"><h1>Adoption<br>Search</h1>
    				<br><br><br>
    					<form>
    						<input type="text" name="zip" placeholder="Zip/Postal">

    						<input type="text" name="radius" placeholder="Mile Radius">
    					</form>
    				<a id="homepage-search" href="adopt.php"><h2>Search</h2></a>
    				</div>
    				<div class="featured-dog-box"><h1>Featured Pug: Virginia</h1>
    					<p><img id="featured-pug" alt="Pug of the Day" src="images/pugs/virginia.jpg"></p>
    					<p id="featured-description">Meet Virginia. An 
    					established senior and the most fashionable lady pug you
    					ever did see. She's sort of a celebrity around these 
    					parts! She'll be the one walking freely around the 
    					facility wearing her pink designer sweater, leopard 
    					print bandana and sometimes even a diamond collar (when 
    					she's feeling extra fancy). She absolutely loves to give
    					and receive attention, and will definitely let you know 
    					when she feels like she's being ignored by letting out 
    					what sounds like a pterodactyl scream (very strange but 
    					endearing).</p>
    					<div id="featured-button"><a href="http://www.pugnationla.org/adopt_me!.htm">Adopt Me</a></div>
    				</div>
				</div>
				<div class="articles-container fl cf">
					<a class="blog-heading border" href="blog.php"><h1>Blog</h1></a>
					<div class="pug-articles"><h1>10 Easy Steps</h1>
						<h3>To Housetrain Your Pug</h3>
						<br>
						<p>Most dog owners would agree that if they could choose one
						skill for their dogs to have, housebroken would be the clear
						winner.<br>Pugs in particular are neither easy nor hard to
						train, and this guide will help you in housebreaking your new
						or old pup.</p>
	    				<a href="blog.php"><h5>See more...</h5></a>
					</div>
					<div class="pug-articles"><h1>Don't</h1>
						<h3>Get a Pug</h3>
							<br>
							<p>Pugs are a wonderful breed of dog, however they’re not 
							for everyone. As Pug advocates it’s our responsibility to 
							provide the negative aspects of Pug ownership. We take this 
							approach because we want Pugs to be in appropriate homes, 
							for their benefit as well as your own.</p>
		    				<a href="blog2.php"><h5>See more...</h5></a>
					</div>	
				</div>
				<div class="pug-pics cf fr">
					<a class="blog-heading fr" href="blog.php"><h1>Adopt</h1></a>
					<!-- Images injected here from js -->					
				</div>
    		</div>
    	</div>
	</div>	
    
    <?php include 'partials/_footer.php'; ?>    

	<!--<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>-->
	<!--<script type="text/javascript" src="js/master.js"></script>	-->
</body>
</html>