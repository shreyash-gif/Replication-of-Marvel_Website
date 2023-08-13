
<?php

require('db.php');
include("auth_session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marvel Landing Page Video Background | Landing Page</title>
	<link rel="icon" href="img/logo-name.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Roboto&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">

	<style>
			
*{
	margin: 0;
	padding: 0;
	color: #fff;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}

/*Page Section, Video*/
section{
	position: relative;
	width: 100%;
	min-height: 100vh;
	padding: 100px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	background: #FE0000;
}

section video{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	object-fit: cover;
}

img {
      width: 7.5rem;
      height: 7.5rem;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1005;
    }

    header .logo {
      position: absolute;
      top: -1.3vh;
      left: 30vh;

    }

    header ul {
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      top: 2vh;
      right: 2vh;
    }

    header ul li {
      list-style: none;
    }

    header ul li a {
      text-decoration: none;
      padding: 0.375rem 1.5rem;
      color: white;
      transition: font-size 0.5s;
    }

    header ul li a:hover {
      color: rgb(251, 0, 0);
      font-size: 1.125rem;
    }



    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 1rem;
      border: none;
      outline: none;
      color: white;
      padding: 0.875rem 1rem;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
      text-transform: uppercase;
      transition: font-size 0.5s;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      color: red;
      font-size: 1.125rem;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background: transparent;
      width: 15.625rem;
      box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
      z-index: 1;
      right: 0.1rem;
    }

    .dropdown-content a {
      float: none;
      color: rgb(255, 255, 255);
      padding: 0.75rem 1rem;
      text-decoration: none;
      display: block;
      text-align: left;
      transition: font-size 0.5s;
      text-transform: uppercase;
    }

    .dropdown-content a:hover {
      color: red;
      font-size: 1.125rem;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

/*Content Text*/
.content{
	position: relative;
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	z-index: 1;
}

.content .textBox{
	position: relative;
	max-width: 700px;
}

.content .textBox h2{
	font-size: 100px;
	line-height: 1.4em;
	font-weight: 700;
	word-spacing: 20px;
	line-height: 100px;
	text-transform: uppercase;
	color: white;
    font-family: 'Stick No Bills', sans-serif;
}

.content .textBox h2 span{
	text-transform: uppercase;
	color: white;
      font-family: 'Stick No Bills', sans-serif;
      font-weight: 700;
      font-size: 100px;
}


.content .textBox p{
	font-size: 15px;
	word-spacing: 5px; 
	line-height: 25px; 
}

.content .textBox a{
	display: inline-block;
	margin-top: 20px;
	padding: 13px 40px;
	background: #fff;
	color: #000;
	font-weight: 600;
	border: 2px solid #fff;
	text-decoration: none;
	transition: 0.5s ease-in-out;
}

.content .textBox a:hover{
	background: transparent;
	color: #fff;
}

.down {
      float: left;
      overflow: hidden;
      width: 300px;
      height: 250px;
    }

    .drop-content {
      display: none;
      position: relative;
      background: transparent;
      width: 20rem;
      box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
      left: 20px;
      margin-top: 25px;
    }

    .drop-content a {
      float: none;
      color: rgb(255, 255, 255);
      padding: 0.75rem 1rem;
      text-decoration: none;
      display: block;
      text-align: left;
      transition: font-size 0.5s;
      text-transform: uppercase;

    }

    .drop-content a:hover {
      color: red;
      font-size: 1.125rem;
    }

    .drop {
      position: relative;
      top: 20px;
      left: 18px;
      font-size: 1.5rem;
      border: none;
      outline: none;
      color: white;
      padding: 0.875rem 1rem;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
      text-transform: uppercase;
      transition: font-size 0.5s;
    }

    .drop b {
      color: gray;
      font-weight: 800;
    }

    .drop b:hover {
      cursor: pointer;
    }

    .down:hover .drop-content {
      display: block;
    }
    .cursor {
        position: fixed;
        border-radius: 50%;
        transform: translateX(-50%) translateY(-50%);
        pointer-events: none;
        left: -100px;
        top: 50%;
        mix-blend-mode: difference;
        background-color: rgb(255, 255, 255);
        z-index: 10000;
        border: 2px solid rgb(255, 255, 255);
        height: 30px;
        width: 30px;
        transition: all 300ms ease-out;
      }
	</style>
</head>
<body>

	<!--Page Section Start-->
	<section>
	<header id="myHeader">
      <div class="down">
        <button class="drop"><b><?php echo $_SESSION['username']; ?></b>
        </button>
        <div class="drop-content">
          <a href="https://help.marvel.com/">HELP/FAQS</a>
          <a href="#">Account Setting </a>
          <a href="http://localhost/php/logout.php">Logout</a>
        </div>
      </div>
      <a href="http://localhost/php/homepage.php" target="_blank" class="logo"><img src="marvel-logo.png" /></a>
      <ul>
        <li><a href="http://localhost/php/characters.php">CHARACTERS</a></li>
        <li><a href="http://localhost/php/Marvel%20Comics.php">COMICS</a></li>
        <li><a href="http://localhost/php/movies.php">
          <font style="color: red;">MOVIES</font>
        </a></li>
        <li><a href="http://localhost/php/marvell.php">TV SHOWS</a></li>
        <li><a href="http://localhost/php/music.php">MUSIC</a></li>
        <li><a href="http://localhost/php/Games.php">GAMES</a></li>
        <li><a href="http://localhost/php/MARVEL%20NEWS.php">NEWS</a></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">More
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="https://www.marvel.com/culture-lifestyle">Culture & Lifestyle</a>
              <a href="https://www.marvel.com/podcasts">Podcast</a>
              <a href="https://www.shopdisney.com/marvel-content/?CMP=SYN-MARVELCOM:NAV_MORE">Shop</a>
            </div>
          </div>
        </li>
    </header>

		<!-- Video Background -->
		<video src="img/bg-video.mp4" muted loop autoplay></video>

		<!--Content Text-->
		<div class="content">
			<div class="textBox">
				<h2><span>Ironman</span>   3</h2>
				<p>Tony Stark encounters a formidable foe called the Mandarin. After failing to defeat his enemy, Tony embarks on a journey of self-discovery as he fights against the powerful Mandarin.</p>
				<a href="https://www.youtube.com/watch?v=Ke1Y3P9D0Bc">Watch trailer now</a>
			</div>
		</div>
	</section>
	<!--Page Section End-->
	
	<!--Script-->
	<script src="script.js"></script>
  <script>
      var cursor = document.getElementById("cursor");
      document.body.addEventListener("mousemove", function(e) {
        cursor.style.left = e.clientX + "px",
          cursor.style.top = e.clientY + "px";
      });
      </script>
</body>
</html>