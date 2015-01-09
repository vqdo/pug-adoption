<!DOCTYPE html>
<?php include 'partials/_globals.php' ?>
<html>
<head>
	<title><?php echo $strings['sitename'] ?> - Blog </title>
	<meta charset="utf-8"> 	
	<!--<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>-->	
	<link rel="stylesheet" href="css/master.css">
</head>
<body id="blog">
    <?php include 'partials/_header.php'; ?>
    
    <div class="pugs-main">
	   	    <div class="pugs-logo">
		    	   <a href="blog.php"><h1>News and Blog Articles</h1></a>
		    </div>
	</div>   
	 
	
    <div class="page-body">
    	<div class="container">
			<?php include 'partials/_pagenav.php'; ?>
			<div class="blog-pug"></div>
    		<div class="content cf">
    	        <!--<div class="blog-heading">
					<h1>Blog</h1>
				</div-->
				<div class="blog-articles"><h1>10 Easy Steps</h1><h2>Posted: 12/12/2014</h2>
					<h3>To housetrain your pug</h3>
					
					<img src="../images/pugpotty.png" alt="Pug and a firehydrant">
					<p>
					1. Prevent undesirable elimination by not allowing your 
					dog to wander all over the house without supervision and by
					keeping your dog confined in a small area when you can’t 
					observe him constantly.
                    <br><br>
                    2. When your dog sniffs the ground or circles around, quickly
                    but calmly take him to the desired elimination area. Ideally,
                    don’t wait for these behaviors. Take your dog outside regularly
                    as described below.
                    <br><br>
                    3. Feed your dog a measured amount of food at the same time
                    every day. When your dog walks away, or after about 10 to
                    15 minutes, pick up the bowl.
                    <br><br>
                    4. Be aware that puppies instinctively desire to eliminate after
                    eating, drinking, playing, resting, sleeping, or being confined.
                    These rules apply to most adult dogs as well.
                    <br><br>
                    5. Five to 30 minutes after any of the above activities, take
                    your dog to the selected place for elimination.
                    <br><br>
                    6. Use a specific verbal cue that you want your dog to
                    associate with desirable elimination, such as “Go potty”
                    or “Do your business.”
                    <br><br>
                    7. When your dog begins to eliminate, quietly praise him.
                    <br><br>
                    8. When your dog is done, praise him enthusiastically, pet
                    him, and reward him with food immediately. Don’t wait
                    until he heads for the house. If he doesn’t eliminate, return
                    him to his confinement area, and take him outside again in
                    about 15 minutes.
                    <br><br>
                    9. Reward each time with praise, but as your dog learns, give
                    food rewards intermittently.
                    <br><br>
                    10. Remember, it is your responsibility to prevent accidents!
                    Prevention is the key to success, but if someone fails to prevent
                    your dog from having an accident, don’t scold the dog,
                    and quietly clean up and deodorize the soiled area. Preventing
                    accidents requires that you become aware of how
                    often your puppy needs to eliminate. Young puppies (8 to
                    10 weeks of age) may need to be taken outside every 30 to
                    60 minutes. 
                    </p>
    				<a href="http://pinterest.com"><img alt="social link" src="../images/social/pinterest.png"></a>
    				<a href="http://facebook.com"><img alt="social link" src="../images/social/facebook.png"></a>
    				<a href="http://tumbler.com"><img alt="social link" src="../images/social/tumblr.png"></a>
    				<a href="http://twitter.com"><img alt="social link" src="../images/social/twitter.png"></a>
    				<a href="http://rss.com"><img alt="social link" src="../images/social/rss.png"></a>
				</div>
				    <a href="blog2.php" class="blog-prev">Previous >></a>
    		</div>
    	</div>
	</div>	
    
    <?php include 'partials/_footer.php'; ?>    
</body>
</html>