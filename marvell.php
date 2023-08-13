<?php

require('db.php');
include("auth_session.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Marvel characters</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica&family=Oswald:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />
  <style>
   *{
        font-family: 'Poppins', sans-serif;
      }
      body {
        margin: 0;
      }
      header {
        width: 100%;
        height: 100px;
        background-color: black;
      }

        
      a{
        color: black;
      }
      .middlediv {
        width: 70%;
        background-color: white;
        display: flex;
        position: relative;
        margin-left: 17%;
        
        font-family: 'Poppins', sans-serif;
      }

      .B {
        margin-right: 20px;
      }

      .C {
        margin-top: 7px;
        margin-bottom: 0px;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        transition: color 0.3s;
      }
      .C:hover {
        color: red;
      }

      .D {
        margin-top: 0px;
        margin-bottom: 0px;
        font-style: normal;
        font-variant-ligatures: normal;
        font-variant-caps: normal;
        font-variant-numeric: normal;
        font-variant-east-asian: normal;
        font-weight: 400;
        font-stretch: normal;
        font-size: 12px;
        line-height: 1;
        font-family: "RobotoCondensed Bold", "Trebuchet MS", Helvetica, Arial,
          sans-serif;
      }
      .top {
        position: absolute;
        top: 6.2rem;
        left: 33rem;
        width: 30.5%;
        height: 379px;
        background-color: rgba(0, 0, 0, 0.589);
      }
      .text {
        position: absolute;
        display: inline-block;
        width: 20rem;
        top: 11rem;
        left: 4.5rem;
        height: 2rem;
        font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
          "Lucida Sans", Arial, sans-serif;
        font-size: 2.5rem;
        text-transform: uppercase;
        text-align: center;
        color: white;
        font-weight: 700;
        opacity: 1;
      }
      .E {
        margin: 50px;
        margin-left: 0;
        width: 100%;
        height: 300px;
      }

      .F {
        color: white;
        background-color: red;

        position: absolute;
        top: 1200px;
        left: 200px;
        padding : 10px;
        border : 1px solid red;
         border-radius: 50px ;

      }

.F :hover{
  padding:20px;
cursor:pointer;
transition: 1s;
}


      .G {
        color: white;
        position: absolute;
        top: 1150px;
        left: 100px;
      }

      .H {
        color: white;
        position: absolute;
        top: 1100px;
        left: 100px;
      }
      .I {
        position: absolute;

        left: 150px;
        background-color: white;
      }
      .box {
        width: 100%;
        height: 500px;
        display: flex;
        justify-content: center;
        position: relative;
        top: 80px;
      }
      .img1 {
        width: 20%;
        height: 400px;
        background: url("p19575003_b_v13_aa.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .img2 {
        width: 20%;
        height: 400px;
        background: url("p19222939_b_v13ab.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .img3 {
        width: 20%;
        height: 400px;
        background: url("Moon.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .img4 {
        width: 20%;
        height: 400px;
        background: url("hawkeye.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .img5 {
        width: 20%;
        height: 400px;
        background: url("ik.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      
    .wow img {
      position: relative;
      width:50px;
      height: 50px;
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
      width: 50px;
      height: 50px;
      top: -30px;
      left: 260px;
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
    }

    .drop-content {
      display:none;
      position: absolute;
      background: transparent;
      width: 20rem;
      box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
      left:20px;
      margin-top: 25px;
      top: 70px;
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
      position: absolute;
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

    @media (max-width: 600px) {
      .middlediv {
        white-space: nowrap;
        overflow-x: auto;
        width: 100%;
        border-bottom: 5px solid;
        padding: 0px;
        margin: 5px;
      }

      .top .text {
        display: none;
      }

      .E {
        white-space: nowrap;
        overflow-x: auto;
      }
      .F:hover{
      cursor: pointer;
      }

      .B {
        margin-left: 5px;
      }

      .e {
        margin-left: 5px;

      }

      .h {
        margin-left: 5px;

      }

      header ul li a {
        margin-left: 5px;
      }

      hr {
        display: none;
      }

      .f {
        color: red;
      }
      .F{
        top: 1114px;
        display: flex;
    left: 25%;
      }

      .spot {
        color: red;
      }

      header .logo {
        position: absolute;
        top: -1.3vh;
        left: 10vh;
      }

      .drop {
        position: relative;
        top: 10vh;
        left: 8vh;
        z-index: 1;
        font-size: 1rem;
      }

      .wow img {
        box-shadow: 0px 0px 0px rgb(31, 30, 30);
      }

      header ul {
        top: 15vh;
        z-index: 1;
        width: 100%;
        white-space: nowrap;
        overflow-x: auto;
        justify-content: start;
      }

      #myHeader {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .drop-content {
        display: none;
        position: relative;
        background: white;
        width: 20rem;
        z-index: 10;
        box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
        left: 10vh;
        margin-top: 0;
      }

      .drop-content a {
        color: black;
      }

      .a {
        display: none;
      }
      .I{
        top: 925px;
        left: 0;
    width: 30%;
      }
      .H,.G{
        color:black;
        left: 0;
      }
      .H{
        top: 1020px;
        font-size: 2.5vh;
      }
      .G{
        top:1053px;
        text-wrap: balance;

      }
      .lokiimg{
      
    width: 45.5vh;
    height: 20vh;
    background-size: cover;
    background-position: center;
      }
      .lokiimgg{
        width: 45.5vh;
    height: 20vh;
    background-size: cover;
    background-position: center;
      }
      .b {
        display: none;
      }

      .top {
        display: none;
      }
      
    }
  </style>
</head>

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
    <a href="http://localhost/php/homepage.php" target="_blank" class="logo"><img src="marvel-logo.png" width="160px" height="160px" /></a>
    <ul>
      <li><a href="http://localhost/php/characters.php">CHARACTERS</a></li>
      <li><a href="http://localhost/php/Marvel%20Comics.php">COMICS</a></li>
      <li><a href="http://localhost/php/movies.php" target="_blank">MOVIES</a></li>
      <li><a href="http://localhost/php/marvell.php">TV SHOWS</a></li>
      <li><a href="http://localhost/php/music.php">MUSIC</a></li>
      <li><a href="http://localhost/php/Games.php">GAMES</a></li>
      <li><a href="http://localhost/php/MARVEL%20NEWS.php">NEWS</a></li>
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
  <div class="box">
    <div class="img1"></div>
    <div class="img2"></div>
    <div class="img3"></div>
    <div class="img4"></div>
    <div class="img5"></div>
  </div>

  <div class="top">
    <div class="text">TOP SHOWS</div>
  </div>
  <br />

  <div class="middlediv">
    <div class="B">
      <img src="hawkeye_lob_crd_04.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/hawkeye/1">
        <h3 class="C">Hawkeye</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="moonknight_lob_crd_05.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/moon-knight/1">
        <h3 class="C">Moon Knight</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="whatif_lob_crd_01.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/animation/what-if/1">
        <h3 class="C">What If..?|Season 1</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="msmarvel_lob_crd_04.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/ms-marvel/1">
        <h3 class="C">Ms. Marvel</h3>
      </a>
      <h3 class="D">JUN 8, 2022</h3>
    </div>
    <div class="B">
      <img src="shehulk_lob_crd_03.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/she-hulk/1">
        <h3 class="C">She-Hulk</h3>
      </a>
      <h3 class="D">AUG 17, 2022</h3>
    </div>
    <div class="B">
      <img src="iamgroot_lob_crd_03.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/i-am-groot/1">
        <h3 class="C">I Am Groot</h3>
      </a>
      <h3 class="D">AUG 10,2022</h3>
    </div>
  </div>
  <div class="E">
    <img src="Disney.png" class="I" />
    <center class="lokiimg"><img class="lokiimgg" src="okkkk.jpg" /></center>

    <h1 class="H">A UNIVERSE OF SUPER HEROES</h1>
    <h4 class="G">ALL YOUR FAVORITE STORIES AND MORE. START STREAMING NOW</h4>
    <h3 class="F"><b>STREAM NOW</b></h3>
  </div>
 
  <div class="middlediv">
    <h2>MARVEL ON DISNEY+</h2>
  </div>
  <br /><br />
  <div class="middlediv">
    <div class="B">
      <img src="a1.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">Marvel Studios: Legends</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="a2.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">WandaVision</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="a3.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">The Falcon And The Winter Soldier</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="a4.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">Loki</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="a5.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/animation/what-if/1">
        <h3 class="C">What if?</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="a6.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/hawkeye/1">
        <h3 class="C">Hawkeye</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
  </div>
  <br><br><br>
  <div class="middlediv">
    <div class="B">
      <img src="a7.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/moon-knight/1">
        <h3 class="C">Moonknight</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a8.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/ms-marvel/1">
        <h3 class="C">Ms Marvel</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a16.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">What if? Season 2</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a17.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">Echo</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a18.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">Spider-Man</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a19.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/agatha-house-of-harkness/1">
        <h3 class="C">Agatha: House of Harkness</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
  </div>
  <br><br><br>
  <div class="middlediv">
    <div class="B">
      <img src="a20.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">Marvel Zombies</h3>
      </a>
      <h3 class="Dhttps://www.marvel.com/tv-shows/marvel-zombies/1">2022</h3>
    </div>
    <div class="B">
      <img src="a9.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/i-am-groot/1">
        <h3 class="C">I Am Groot</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a10.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/she-hulk/1">
        <h3 class="C">She Hulk</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a11.jpg" width="160px" height="236px" />
      <a href="">
        <h3 class="C">Secret Invasion</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a12.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/ironheart/1">
        <h3 class="C">Iron Heart</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
    <div class="B">
      <img src="a13.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/armor-wars/1">
        <h3 class="C">Armor Wars</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
  </div>
  <br><br><br>
  <div class="middlediv">
    <div class="B">
      <img src="a14.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/guardians-of-the-galaxy-holiday-special/1">
        <h3 class="C">The Guardians Of Galaxy <br>Holiday Special</h3>
      </a>
      <h3 class="D">2023</h3>
    </div>
    <div class="B">
      <img src="a15.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/x-men-97/1">
        <h3 class="C">X-Men 97</h3>
      </a>
      <h3 class="D">2022</h3>
    </div>
  </div>
  <br><br><br>
  <div class="middlediv">
    <h2>NON-FICTION DISNEY+</h2>
  </div>
  <br /><br />
  <div class="middlediv">
    <div class="B">
      <img src="b1.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-studios-assembled/1">
        <h3 class="C">Marvel Studios Assembled</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="b2.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-behind-the-mask/1">
        <h3 class="C">Marvel's Behind The Mask</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
    <div class="B">
      <img src="b3.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-616/1">
        <h3 class="C">Marvel's 616</h3>
      </a>
      <h3 class="D">2016</h3>
    </div>
    <div class="B">
      <img src="b4.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-hero-project/1">
        <h3 class="C">Marvel's Hero Project</h3>
      </a>
      <h3 class="D">2021</h3>
    </div>
  </div>
  <br><br><br>
  <br><br><br>
  <div class="middlediv">
    <h2>Marvel Series On DISNEY+</h2>
  </div>
  <br /><br />
  <div class="middlediv">
    <div class="B">
      <img src="c1.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-daredevil/3">
        <h3 class="C">Marvel's Daredevil</h3>
      </a>
      <h3 class="D">2018</h3>
    </div>
    <div class="B">
      <img src="c2.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-the-defenders/1">
        <h3 class="C">Marvel's The Defenders</h3>
      </a>
      <h3 class="D">2017</h3>
    </div>
    <div class="B">
      <img src="c3.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv/marvel-s-iron-fist/2">
        <h3 class="C">Marvel's Iron Fist</h3>
      </a>
      <h3 class="D">2018</h3>
    </div>
    <div class="B">
      <img src="c4.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv/marvel-s-iron-fist/2">
        <h3 class="C">Marvel's Jessica Jones</h3>
      </a>
      <h3 class="D">2019</h3>
    </div>
    <div class="B">
      <img src="c5.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-luke-cage/2">
        <h3 class="C">Marvel's Luke Cage</h3>
      </a>
      <h3 class="D">2019</h3>
    </div>
    <div class="B">
      <img src="c6.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-the-punisher/2">
        <h3 class="C">Marvel's The Punisher</h3>
      </a>
      <h3 class="D">2019</h3>
    </div>
  </div>
  <br><br><br>
  <div class="middlediv">
    <div class="B">
      <img src="c7.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-agent-carter/2">
        <h3 class="C">Marvel's Agent Carter</h3>
      </a>
      <h3 class="D">2016</h3>
    </div>
    <div class="B">
      <img src="c8.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-agents-of-s-h-i-e-l-d/7">
        <h3 class="C">Marvel's Agents Of Sheild</h3>
      </a>
      <h3 class="D">2020</h3>
    </div>
    <div class="B">
      <img src="c9.jpg" width="160px" height="236px" />
      <a href="https://www.marvel.com/tv-shows/marvel-s-inhumans/1">
        <h3 class="C">Marvel's Inhumans</h3>
      </a>
      <h3 class="D">2017</h3>
    </div>
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