<?php include('dbconn.php'); ?>
<head>
    <link rel="stylesheet" href="wcss/search.css">
</head>
<span class="menu"></span>
<div class="menu-strip">
				<ul>           
					<li><a href="index.php">HOME</a></li>
					<li><a href="visual.php">VIDEOS</a></li>
					<li><a href="audio.php">AUDIO</a></li>
					<li><a href="0g/">MOBILE GAMES</a></li>
					<!--<li><a href="#">TOP MUSIC</a></li>-->
					<li><a href="about.php">ABOUT US</a></li>
					<li><a href="news_loaded.php">NEWS</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
                    <!doctype html>

	               <li>
                    <form id="searchform" action="find.php" method="post">
                      <input type="search" name="search_input" placeholder="What are you looking for?" required/>
                      <input type="submit" name="search_button" value="Search" />
                       </form>
                    </li>
	

	                                  
                </ul>
                        </div>
                        <!-- script for menu -->
                                    <script>
                                        $( "span.menu" ).click(function() {
                                          $( ".menu-strip" ).slideToggle( "slow", function() {
                                            // Animation complete.
                                          });
                                        });
                                    </script>
                        <!-- script for menu -->
                        <!-- script for search -->
                            
                        <!--script for search-->
                       



<style>

#search-form {
	background: #e1e1e1; /* Fallback color for non-css3 browsers */
	width: 365px;

	/* Gradients */
	background: -webkit-gradient( linear,left top, left bottom, color-stop(0, rgb(243,243,243)), color-stop(1, rgb(225,225,225)));
	background: -moz-linear-gradient( center top, rgb(243,243,243) 0%, rgb(225,225,225) 100%);

	/* Rounded Corners */
	border-radius: 17px;
	-webkit-border-radius: 17px;
	-moz-border-radius: 17px;

	/* Shadows */
	box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3);
	-webkit-box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3);
	-moz-box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3);
}

/*** TEXT BOX ***/
input[type="search"]{
	background: #fafafa; /* Fallback color for non-css3 browsers */

	/* Gradients */
	background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(250,250,250)), color-stop(1, rgb(230,230,230)));
	background: -moz-linear-gradient( center top, rgb(250,250,250) 0%, rgb(230,230,230) 100%);

	border: 0;
	border-bottom: 1px solid #fff;
	border-right: 1px solid rgba(255,255,255,.8);
	font-size: 16px;
	margin: 4px;
	padding: 5px;
	width: 250px;

	/* Rounded Corners */
	border-radius: 17px;
	-webkit-border-radius: 17px;
	-moz-border-radius: 17px;

	/* Shadows */
	box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2);
	-webkit-box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2);
	-moz-box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2);
}

/*** USER IS FOCUSED ON TEXT BOX ***/
input[type="search"]:focus{
	outline: none;
	background: #fff; /* Fallback color for non-css3 browsers */

	/* Gradients */
	background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(255,255,255)), color-stop(1, rgb(235,235,235)));
	background: -moz-linear-gradient( center top, rgb(255,255,255) 0%, rgb(235,235,235) 100%);
}

/*** SEARCH BUTTON ***/
input[name="search"]{
	background: #E12B22;/* Fallback color for non-css3 browsers */

	/* Gradients */
	background: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(79,188,32)), color-stop(0.15, rgb(73,157,34)), color-stop(0.88, rgb(62,135,28)), color-stop(1, rgb(49,114,21)));
	background: -moz-linear-gradient( center top, rgb(79,188,32) 0%, rgb(73,157,34) 15%, rgb(62,135,28) 88%, rgb(49,114,21) 100%);

	border: 0;
	color: #eee;
	cursor: pointer;
	float: right;
	font: 16px Arial, Helvetica, sans-serif;
	font-weight: bold;
	height: 30px;
	margin: 4px 4px 0;
	text-shadow: 0 -1px 0 rgba(0,0,0,.3);
	width: 84px;
	outline: none;

	/* Rounded Corners */
	border-radius: 30px;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;

	/* Shadows */
	box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4);
	-moz-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.2);
	-webkit-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4);
}
/*** SEARCH BUTTON HOVER ***/
input[name="search"]:hover {
	background: #E12B22; /* Fallback color for non-css3 browsers */

	/* Gradients */
	background: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(89,222,27)), color-stop(0.15, rgb(83,179,38)), color-stop(0.8, rgb(66,143,27)), color-stop(1, rgb(54,120,22)));
	background: -moz-linear-gradient( center top, rgb(89,222,27) 0%, rgb(83,179,38) 15%, rgb(66,143,27) 80%, rgb(54,120,22) 100%);
}
input[name="search"]:active {
	background: #E12B22; /* Fallback color for non-css3 browsers */

	/* Gradients */
	background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(89,222,27)), color-stop(0.15, rgb(83,179,38)), color-stop(0.8, rgb(66,143,27)), color-stop(1, rgb(54,120,22)));
	background: -moz-linear-gradient( center bottom, rgb(89,222,27) 0%, rgb(83,179,38) 15%, rgb(66,143,27) 80%, rgb(54,120,22) 100%);
}

</style>



<!--

<li>
				    <?php 
                       /* if(isset($_SESSION['username'])){
                            $username = $_SESSION['username'];
                            echo '<li><a href="logout.php">LOGOUT</a></li>'; 
                        }*/
                    ?>
                                          
                                                <div style="margin-right: 20px;">
                                                <form action="search.php" method="post">
                                                    <div>
                                                    <input style="float:left;" type="text"  size="10" placeholder="SEARCH" required/>
                                                    <input style="float:left;" type="submit" value="SEARCH"/>
                                                    </div>
                                                </form>
                                                </div>
                    </li>
-->