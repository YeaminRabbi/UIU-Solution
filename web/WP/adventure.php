<?php 

    $story_medium = $_GET['medium'];
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from e-wises.com/tf/adventure-gene/gene/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2022 13:08:36 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Site Title -->
        <title>Web Programming</title>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" >
		<!-- Bootstrap v5.0.2 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!--====== Fontawesome ======-->
        <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome.all.min.css">
		<!-- Owl carousel css -->
		<link rel="stylesheet" href="css/owl-carousel.min.css">
		<!-- Meanmenu css -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- cssanimation css -->
		<link rel="stylesheet" href="css/cssanimation.min.css">
		<!-- Default css -->
		<link rel="stylesheet" href="css/default.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
		
</head>
    <body>
     
			<section class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="index.php">Adventure</a>
				
				<div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="register.php">Register</a>
						</li>
					
					</ul>
   
				</div>
				</nav>
			</section>	
						

            <section class="main_content">
                <div class="container">
                    <h4>Adventure by <?= $story_medium ?></h4>

                    <?php 
                        if($story_medium == "bus"){
                            ?>
                        <p>
                            I had finished my night shift in the ER and was on my way home. I actually was a full two hours
                            early, as I had gone off for break so late that I was sent home by the head nurse. It was still dark
                            outside; usually I left the ER around eight, and now it was barely six fifteen. We had had a good,
                            easy night, and we certainly deserved it, as the last couple of weeks in the ER were horribly
                            hectic to the point of the entire staff being ready to quit en masse.
                            When I got into the bus, I was relieved that my favorite seat at the back was empty. From that
                            view point of the back corner of the bus, I could see everyone. I didn’t like being in a weak seat,
                            where someone I couldn’t see could be watching me.2
                            A man came in a few moments later and chose the sideway seat in front of mine. He was
                            carrying two bags. One was a red postman’s bag slung over his shoulder, the other was a black
                            heavy-duty garbage bag he was half carrying, half dragging behind him. He put them both on
                            the ground, propped his feet on them and leaned back in his seat.3, 4
                            For some kind of reason, I was particularly interested in this man. He had intrigued me, and I
                            didn’t know why. It happened sometimes that someone would catch my fancy. It made my
                            imagination soar; made me weave an intricate web involving the person and the most insane
                            stories.
                            In between quick glances, I noted that he was a middle-aged man, between forty to forty-five
                            years of age, tall, thin but muscular, with an angular face and eyes set deep within their sockets.
                            He had a five o’clock shadow and dark smudges under his eyes. His gaze was flickering around
                            nervously, fluttering on each face around him, starting with the one on his right leading all the
                            way to mine. I didn’t react to the scrutiny. I held his gaze, then slid my eyes away. Just enough
                            contact to let him know I wasn’t afraid, but not too much so that he’d think I was interested.5
                        </p>
                            <?php
                        }
                        elseif($story_medium == "bike"){
                            ?>
                            <p>
                            So, it goes like this, I was going for a ride on my bike. It was a brand new bike from my mother. For my birthday or something. Anyway, I was riding, right? And I was pedaling really fast and. . . . . . . I came up to this giant hill. It was big ….really big, so, yeah, I started pedaling up it but I really had to work it. Unfortunately as I got the top, so close to the top that I only had one more pedal to go and………it stalled. I couldn’t pedal; I didn’t go anywhere. Then I started going backwards. Down the giant hill. I couldn’t control it. I was building up speed really fast. I tried to keep it steady but I spun out, the bike flipped me off. I was flying through the air at full speed, my vision was blurred. Then I hit the ground like a sack of potatoes. After that I had no idea what happened to me. I blacked out. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . Now where am I? I can’t move, my bones are sore. I opened my eyes. I was in serious pain. I looked around. The cannibals were swarming. They ate me. . . . . . I woke up. Just a dream, a terrible dream. But I’m still a bit sore, I feel broken, disgusting. Oh relief. HOSPITAL said the sign on the wall.
                            </p>
                            <?php
                        }
                        elseif($story_medium == "motor_boat"){
                            ?>
                            <p>
                            Serge Testa is the author and subject of this riveting story about the 500 days he spent navigating the world in a boat barely larger than a bathtub. Testa sailed the world in his homemade sailboat ‘Acrohc,’ which measured less than 12 feet, and his successful completion earned him a place in the Guiness Book of World Records. Testa braved innumerable troubles aboard Acrohc and writes humbly about his experiences that included encounters with whales, cyclones, and a nearly fatal fire. There’s a welcome element of humour, especially during difficult moments, and it’ll ignite a sense of adventure in any outdoor enthusiast. The boat was barely bigger than a bathtub! 

                            </p>
                            <?php
                        }
                    ?>
                </div>

                <div class="container">
                    <div class="row" style="margin-top:150px;">
                            <div class="col-md-12">
                                <h4>Other Adventures by:</h4><br>
                                <div class="d-flex">
                                    <?php 
                                        if($story_medium == "motor_boat"){
                                    ?>
                                        <a href="adventure.php?medium=bike" class="btn btn-outline-success" style="margin-right:10px;">Bike</a>
                                        <a href="adventure.php?medium=bus" class="btn btn-outline-dark" style="margin-right:10px;">Bus</a>
                                    <?php 
                                        }
                                        elseif($story_medium == "bike"){
                                    ?>
                                        
                                        <a href="adventure.php?medium=motor_boat" class="btn btn-outline-primary" style="margin-right:10px;">Motor Boat</a>
                                        <a href="adventure.php?medium=bus" class="btn btn-outline-dark" style="margin-right:10px;">Bus</a>
                                    <?php
                                        }

                                        else{
                                    ?>
                                            <a href="adventure.php?medium=bike" class="btn btn-outline-success" style="margin-right:10px;">Bike</a>
                                            <a href="adventure.php?medium=motor_boat" class="btn btn-outline-primary" style="margin-right:10px;">Motor Boat</a>
                                    <?php
                                        }
                                    ?>
                                 
                                </div>
                            </div>
                    </div>
                </div>
            </section>

			<div class="copy-right-area" style="margin-top:30%;">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<!-- Start payment -->
							<div class="copy-payment">
								<!-- <ul>
									<li><a href="#"><img src="img/payment/1.png" alt=""></a></li>
									<li><a href="#"><img src="img/payment/2.png" alt=""></a></li>
									<li><a href="#"><img src="img/payment/3.png" alt=""></a></li>
									<li><a href="#"><img src="img/payment/4.png" alt=""></a></li>
								</ul> -->
							</div>
							<!-- End payment -->
						</div>
						<div class="col-sm-6">
							<!-- Start copyright text -->
							<div class="copyright-text">
								<p>© 2022 Web Programming.</p>
							</div>
							<!-- End copyright text -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Copyright Area -->

		</div>
        <!-- End Wrapper -->
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-3.3.1.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>	
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- owl carousel js -->
        <script src="js/owlcarousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/meanmenu.min.js"></script>
        <!-- counterup js -->
        <script src="js/counterup.min.js"></script>
        <!-- scrollup js -->
        
        <!-- waypoints js -->
        <script src="js/waypoints.min.js"></script>
        <!-- imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.min.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

</html>