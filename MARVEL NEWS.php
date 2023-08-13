<?php

require('db.php');
include("auth_session.php");

?>

<html>
<head>
    <title>Marvel News</title>
    <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica&family=Oswald:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
</head>
<style>
  *{
    font-family: 'Poppins', sans-serif;
  }
    body{
        margin: 0;
    }
    div.one {
        position: relative;
        background-color: black;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 20%;
    }

    p {
        color: black;
        font-size: 2.5em;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        position: absolute;
        left: 75px;
    }

    h1 {
        position: absolute;
        top: 300px;
        right: 220px;
        color: black;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    h3 {
        color: black;
        text-decoration: none;
    }

    h1:link,
    h3:link {
        color: red;
        text-decoration: none;
    }


    h1:visited,
    h3:visited {
        color: green;
        text-decoration: none;
    }


    h1:hover,
    h3:hover {
        color: red;
        text-decoration: none;
    }


    h1:active,
    h3:active {
        color: blue;
        text-decoration: none;
    }

    .section {
        width: 31%;
        height: 100%;
        flex: 1 1 auto;
        float: left;
        display: flex;
        padding-right: 35px;

        align-items: center;
        justify-content: center;
        color: #ffffff;
    
    }
    .wow {
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
        background-color: black;
        height: 100px;
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
        padding: 0.375rem 0.9375rem;
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
        background-color: black;
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
    
      .span {
        color: white;
        transition: font-size 0.5s;
      }
    
      .span:hover {
        font-size: 1.125rem;
      }
    
      .user {
        position: relative;
        top: 0;
      }
      .down{
        float: left;
        overflow: hidden;
        width: 300px;
        height: 250px;
        position: absolute;
        top: 10px;
      }
    
      .drop-content {
        display:none;
        position: relative;
        background-color: black;
        width: 20rem;
        box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
        left:20px;
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
      .drop{
        position: relative;
        top: 20px;    
        left: 18px;
        font-size:1.5rem;
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
      .drop b{
        color: gray;
        font-weight: 800;
      }
      .drop b:hover{
        cursor: pointer;
      }
      .down:hover .drop-content {
        display: block;
      }
</style>

<body>
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
        <a href="http://localhost/php/homepage.php" target="_blank" class="logo"><img class="wow" src="marvel-logo.png" /></a>
        <ul>
          <li><a href="http://localhost/php/characters.php">CHARACTERS</a></li>
          <li><a href="http://localhost/php/Marvel%20Comics.php">COMICS</a></li>
          <li><a href="http://localhost/php/movies.php" target="_blank">MOVIES</a></li>
          <li><a href="http://localhost/php/marvell.php">TV SHOWS</a></li>
          <li><a href="http://localhost/php/music.php">MUSIC</a></li>
          <li><a href="http://localhost/php/Games.php">GAMES</a></li>
          <li><a href="http://localhost/php/MARVEL%20NEWS.php#">NEWS</a></li>
          <li>
            <div class="dropdown">
              <button class="dropbtn">More
              </button>
              <div class="dropdown-content">
                <a href="https://www.marvel.com/culture-lifestyle">Culture & Lifestyle</a>
                <a href="https://www.marvel.com/podcasts">Podcast</a>
                <a href="https://www.shopdisney.com/marvel-content/?CMP=SYN-MARVELCOM:NAV_MORE">Shop</a>
              </div>
            </div>
          </li>
      </header>
    <div class="one">
        <img src="MARVEL NEWS.jpg" class="center" height="80">
    </div>
    
        <p>LATEST MOVIES NEWS</p>
        <div class="two">
        <a
            href="https://www.marvel.com/articles/movies/doctor-strange-in-the-multiverse-of-madness-character-costumes-explained">
            <img style="position: relative ; top: 100px;left: 75px;"
                src="N1.jpg" height="350" width="600">
            <h1> The Many Faces of Doctor Strange in the<br> Multiverse of Madness Explained</h1>
        </a>
        </div>
        <div class="section" id="1">
            <a href="https://www.marvel.com/articles/movies/thor-love-and-thunder-legacy-featurette">
                <img src="N2.jpg">


                <h3> 'Thor: Love and Thunder' New Featurette Celebrates<br> the God of Thunder</h3>
            </a>
        </div>
        <div class="section" id="2">
            <a href="https://www.marvel.com/articles/movies/marvel-cinematic-universe-timeline-disney-plus">
                <img src="N3.jpg">
                <h3>The Marvel Cinematic Universe Timeline on Disney+</h3>


            </a>
         </div>
         <div class="section" id="3">
            <a href="https://www.marvel.com/articles/movies/doctor-strange-in-the-multiverse-of-madness-disney-plus-now-streaming">
                <img src="N4.jpg">
                <h3>'Doctor Strange in the Multiverse of Madness' Portals onto Disney+</h3>
        </a>
      </div>
      <p style="top: 1180px;">LATEST COMICS NEWS </p>
      <div class="two">
      <a
          href="https://www.marvel.com/articles/comics/start-reading-comics-with-these-thor-stories">
          <img style="position: relative ; top: 100px;left: 75px;"
              src="N5.jpg" height="350" width="600">
          <h1 style="top: 1470px ;right: 320px;">Thor Stories To Read Right Now</h1>
      </a>
      </div>
      <div class="section" id="1">
          <a href="https://www.marvel.com/articles/comics/demon-wars-the-iron-samurai-1-first-look-sends-mariko-into-battle">
              <img src="N6.jpg">


              <h3>'Demon Wars: The Iron Samurai' #1 First Look Sends<br> Mariko into Battle</h3>
          </a>
      </div>
      <div class="section" id="2">
          <a href="https://www.marvel.com/articles/comics/new-on-marvel-unlimited-july-2022">
              <img src="N7.jpg">
              <h3>What's Coming to Marvel Unlimited This July</h3>


          </a>
       </div>
       <div class="section" id="3">
          <a href="https://www.marvel.com/articles/comics/dan-slott-mark-bagley-spider-verse-spider-man-1">
              <img src="N8.jpg">
              <h3>Dan Slott and Mark Bagley Bring About the End of the<br> Spider-Verse in 'Spider-Man' #1</h3>
      </a>
    </div>
    <script>
      var cursor = document.getElementById("cursor");
      document.body.addEventListener("mousemove", function(e) {
        cursor.style.left = e.clientX + "px",
          cursor.style.top = e.clientY + "px";
      });
      </script>
    
</body>

</html>