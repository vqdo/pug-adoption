<!DOCTYPE html>
<?php include 'partials/_globals.php' ?>
<html>
<head>
	<title><?php echo $strings['sitename'] ?> - Forum </title>
	<meta charset="utf-8"> 	
	<!--<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>-->	
	<link rel="stylesheet" href="css/master.css">
</head>
<body id="forum">
    <?php include 'partials/_header.php'; ?>
    
    <div class="pugs-main">
   	    <div class="pugs-logo">
   	       <a href="forum.php">
	    	    <h1>Forum</h1>
	        </a>
	    </div>
	</div>    
	 
	
    <div class="page-body">
    	<div class="container">
			<?php include 'partials/_pagenav.php'; ?>
    		<div class="content">
    		    <div class="forum-intro">
    		        <h1>Welcome to our pug community!</h1>
    		        <p>Have a question? Looking for a puggy playmate? Look no further! Join our community of pug owners and enthusiasts. </p>
    		        
    
    		    </div>
    		    
                <table class="forum-table">
                    <thead>
                        <tr>
                            <td class="col-subject">Subject</td>
                            <td>Threads</td>
                            <td>Posts</td>
                            <td class="col-date">Last Posted</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong class="board-title"><a href="http://www.pugvillage.com/forum/pug-life/">New Pug Owners</a></strong>
                                <span class="board-subtitle">Nervous about owning a new pug?</span>
                            </td>
                            <td><strong>1</strong></td>   
                            <td><strong>50,096</strong></td>   
                            <td><strong>Dec. 7, 2014</strong></td>   
                        </tr>
                        <tr>
                            <td>
                                <strong class="board-title"><a href="http://www.pugvillage.com/forum/meet-greet/">Meet and Greet</a></strong>
                                <span class="board-subtitle">New to We ❤ Pugs? Stop on by, introduce yourself and get a great big We ❤ Pugs welcome.</span>
                            </td>
                            <td><strong>4,205</strong></td>   
                            <td><strong>59,029</strong></td>   
                            <td><strong>Today: 3:05pm</strong></td>   
                        </tr>
                        <tr>
                            <td>
                                <strong class="board-title"><a href="http://www.pugvillage.com/forum/pug-life/">Pug Life</a></strong>
                                <span class="board-subtitle">Come here to share your Pug related stories, questions and experiences! **Please note: Posts concerning Health, Care and Training should be made in the appropriate forum.</span>
                            </td>
                            <td><strong>38,415</strong></td>   
                            <td><strong>524,545</strong></td>   
                            <td><strong>Today: 1:21pm</strong></td>   
                        </tr>
                        <tr>
                            <td>
                                <strong class="board-title"><a href="http://www.pugvillage.com/forum/pug-events/">Pug Events</a></strong>
                                <span class="board-subtitle">A place to post about pug-related gatherings, meet-ups, shows, get-togethers, and dog-related events.</span>
                            </td>
                            <td><strong>222</strong></td>   
                            <td><strong>1,314</strong></td>   
                            <td><strong>Nov. 11, 2014</strong></td>   
                        </tr>
                        <tr>
                            <td>
                                <strong class="board-title"><a href="http://www.pugvillage.com/forum/senior-pug/">The Senior Pug</a></strong>
                                <span class="board-subtitle">Questions and Answers about pugs 8 years of age or older...</span>
                            </td>
                            <td><strong>221</strong></td>   
                            <td><strong>3,009</strong></td>   
                            <td><strong>Dec. 2, 2014</strong></td>   
                        </tr>                        
                    </tbody>
                </table>
                
                <table class="forum-table recent-posts">
                    <thead>
                        <tr>
                            <td colspan="2">Recent Posts</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong class="board-title"><a href="#">HELP! Wumpykins got into the Halloween stash!!</a> </strong> 
                                <span class="board-subtitle">He found my kid's leftover Halloween candy and somehow got his paws on it! i think he swallowed a couple of tootsie rolls before I caught him. I called my vet and she said not to worry but... </span>
                            </td>
                            <td class="byline">by <a href="#">annie78</a><br> at Dec. 9, 11:21 AM PST</td>   
                        </tr>
                        <tr>
                            <td>
                                <strong class="board-title"><a href="#">If you're in the San Diego area, come meet us this Saturday!</a></strong>
                                <span class="board-subtitle">The event flier is attached. There will be plenty of drinks, chew toys, and pug treats!</span>
                            </td>
                            <td class="byline">by <a href="#">ClairemontPugOwners</a><br> at Dec. 5, 8:03 PM PST</td>   
                        </tr>                   
                    </tbody>
                </table>                
    		</div>
    	</div>
	</div>	
    
    <?php include 'partials/_footer.php'; ?>    
</body>
</html>