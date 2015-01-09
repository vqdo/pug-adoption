<!DOCTYPE html>
<?php include 'partials/_globals.php' ?>
<html>
<head>
	<title><?php echo $strings['sitename'] ?> - Forum </title>
	<meta charset="utf-8"> 	
	<!--<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>-->	
	<link rel="stylesheet" href="css/master.css">
</head>
<body id="adopt">
    <?php include 'partials/_header.php'; ?>
    
    <div class="pugs-main">
    	<div class="pugs-logo">
    		<a href="adopt.php">
		    	<h1>Adopt a Pug</h1>
	    	</a>
	    </div>
	</div>   
	 
	
    <div class="page-body">
    	<div class="container">
			<?php include 'partials/_pagenav.php'; ?>
    		<div class="content">
    		    <div class="adoption-search-main cf">
    		    	<div class="fl">
	    		    	<h2>Adoption Search</h2>
	    		    	<p>Find the perfect pug to adopt right here!</p>
    		    	</div>
    		    	
    		    	<div class="fr">
	    		    	<form>
	    		    		<div class="field">
		    					<label>Zip Code</label>
		    		    		<input type="text" name="zip" placeholder="92122" />
	    		    		</div>
	    		    		
	    		    		<div class="field">
		    					<label>Radius (mi.)</label>
		    		    		<input type="text" name="radius" placeholder="50" />   
		    		    	</div>	
	    		    	</form>
	    		        <button class="pug-search-button fr" value="search">Find Pugs</button>
    		        </div>
    		    </div>
    		    <div id="pug-results" class="cf">
                    <div class="col-half">
                        
                    </div>
                    <div class="col-half">
                        
                    </div>                
                </div>
    		</div>
    	</div>
	</div>	
    
    <?php include 'partials/_footer.php'; ?>    
</body>
</html>