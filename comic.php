<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Comics</title>
</head>
<style>
    body {
        background-color: black;
        
        min-height: 100vh;
    }
    img{ 
        z-index: -1;
        
        opacity: 40%;
    }
    
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }
  .section{
     background-color: white;


  }
    .slider {
        display: block;
        position: relative;
        width: 100%;
        max-width: 1400px;
        margin: 10px;
        background-color: white;
        overflow: hidden;
    }

    .slider__slides {
        width: 100%;
        padding-top: 50%;
    }

    .slider__slide {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px;
        font-weight: bold;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
        transition: 1s;
        opacity: 0;
    }

    .slider__slide.active {
        opacity: 1;
    }

    .slider__slide img {
        width: 100%;
    }

    .slider__nav-button {
        position: absolute;
        height: 70px;
        width: 70px;
        
        opacity: .8;
        cursor: pointer;
    }

    #nav-button--prev {
        top: 50%;
        left: 0;
        transform: translateY(-50%);
    }

    #nav-button--next {
        top: 50%;
        right: 0;
        transform: translateY(-50%);
    }

    #nav-button--prev::after,
    #nav-button--next::after {
        content: "";
        position: absolute;
        border: solid white;
        border-width: 0 4px 4px 0;
        display: inline-block;
        padding: 3px;
        width: 40%;
        height: 40%;
    }

    #nav-button--next::after {
        top: 50%;
        right: 50%;
        transform: translate(25%, -50%) rotate(-45deg);
    }

    #nav-button--prev::after {
        top: 50%;
        right: 50%;
        transform: translate(75%, -50%) rotate(135deg);
    }

    .slider__nav {
        position: absolute;
        bottom: 3%;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
    }

    .slider__navlink {
        display: inline-block;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        border: 1px #fff solid;
        background-color: white;
        opacity: 1;
        margin: 0 10px 0 10px;
        cursor: pointer;
    }

    .slider__navlink.active {
        background-color: yellow;
        border: 1px #333 solid;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
    }
    p{
        position: absolute;
        top: 270px;
        left: 250px;
        color: white;
        text-shadow: 2px 2px 4px red;
        text-decoration-color: rgb(9, 226, 107);
    }
    .section {
            width: 20%;
            height: 100%;
            flex: 1 1 auto;
            float: left;
            display: flex;
            padding: 35px;
            padding-top: 100px;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }


    @media screen and (max-width: 640px) {
        .slider__nav-button {
            height: 40px;
            width: 40px;
        }

        .slider__navlink {
            height: 12px;
            width: 12px;
        }
        
    }
    p.one{
        position: absolute;
        top: 800px; 
        color: black;
        font-size: 2.5em;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-shadow: none;
    }
    
</style>
<body>
    <img style="opacity: 100% ; z-index: 0;  " src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\MARVEL COMICS1.jpg" class="center"  height="80" >
</body>
<div class="container">
    <div class="slider">
      <div class="slider__slides">
        <div class="slider__slide active">
            <a href="https://www.marvel.com/articles/comics/the-young-avengers-return-in-new-infinity-comics-arc-written-by-anthony-oliveira">
           <img src="https://i.annihil.us/u/prod/marvel/i/mg/1/40/62bd980087687.jpg ">
           <p>THE YOUNG AVENGERS ARE BACK</p>
        </a>
        </div>
        <div class="slider__slide">
            <a href="https://www.marvel.com/articles/comics/june-29-2022-new-marvel-comics-collections-releases-full-list">
          <img src="https://i.annihil.us/u/prod/marvel/i/mg/e/b0/62ba2a4f2bcb9.jpg" >
          <p>NEW COMICS THIS WEEK</p>
          </a>
        </div>
        <div class="slider__slide">
            <a href="https://www.marvel.com/articles/comics/gambit-1-first-look-preview-chris-claremont-return-x-men-sid-kotian">
          <img src="https://i.annihil.us/u/prod/marvel/i/mg/5/c0/62ba2b5602d38.jpg" >
          <p>YOUR FIRST LOOK AT CHRIS <br> CLAREMONT'S 'GAMBIT' #1</p>
          </p>
          </a>
        </div>
        <div class="slider__slide">
            <a href="https://www.marvel.com/articles/spider-man-2099-exodus-5-x-men-only-hope">
          <img src="https://i.annihil.us/u/prod/marvel/i/mg/1/d0/62ba2c3debfb6.jpg">
          <p>THE X-MEN 2099 DISCOVERE NEW <br> HOPE FOR MUTANTKIND </p>
          </a>
        </div>
        <div class="slider__slide">
            <a href="https://www.marvel.com/articles/comics/gorr-first-appearance-in-the-comics-thor-god-of-thunder-series-spotlight">
            <img src="https://i.annihil.us/u/prod/marvel/i/mg/8/90/62ba33bd517d0.jpg">
            <p>A LOOK BACK AT THE THOR'S FIRST <br> CLASH WITH GORR</p>
            </a>
          </div>
      </div>
      <div id="nav-button--prev" class="slider__nav-button"></div>
      <div id="nav-button--next" class="slider__nav-button"></div>
      <div class="slider__nav">
        <div class="slider__navlink active"></div>
        <div class="slider__navlink"></div>
        <div class="slider__navlink"></div>
        <div class="slider__navlink"></div>
        <div class="slider__navlink"></div>
      </div>
    </div>
  </div>
    <script>
        let slides = document.getElementsByClassName("slider__slide");
        let navlinks = document.getElementsByClassName("slider__navlink");
        let currentSlide = 0;

        document.getElementById("nav-button--next").addEventListener("click", () => {
            changeSlide(currentSlide + 1)
        });
        document.getElementById("nav-button--prev").addEventListener("click", () => {
            changeSlide(currentSlide - 1)
        });

        function changeSlide(moveTo) {
            if (moveTo >= slides.length) { moveTo = 0; }
            if (moveTo < 0) { moveTo = slides.length - 1; }

            slides[currentSlide].classList.toggle("active");
            navlinks[currentSlide].classList.toggle("active");
            slides[moveTo].classList.toggle("active");
            navlinks[moveTo].classList.toggle("active");

            currentSlide = moveTo;
        }

        document.querySelectorAll('.slider__navlink').forEach((bullet, bulletIndex) => {
            bullet.addEventListener('click', () => {
                if (currentSlide !== bulletIndex) {
                    changeSlide(bulletIndex);
                }
            })
        })
    </script>
    <p class="one"> JUNE 29: NEW RELEASES</p>
    <div class="section" id="1">
        <a href="https://www.marvel.com/comics/issue/101198/thor_lightning_and_lament_2022_1" >
        <img style="opacity: 100%" src="https://i.annihil.us/u/prod/marvel/i/mg/c/20/62b9e0abe47c3/portrait_uncanny.jpg">
        
        </a>
    </div>
    <div class="section" id="2">
        <a href="https://www.marvel.com/comics/issue/101188/star_wars_obi-wan_2022_2">
        <img style="opacity: 100%;" src="https://i.annihil.us/u/prod/marvel/i/mg/0/04/62b9e0ef6ec8f/portrait_uncanny.jpg">
        </a>
    </div>
    <div class="section" id="3">
        <a href="https://www.marvel.com/comics/issue/100730/iron_cat_2022_1" >
        <img style="opacity: 100%;" src="https://i.annihil.us/u/prod/marvel/i/mg/6/30/62b9e0c9100e8/portrait_uncanny.jpg">
        </a>
    </div>
    <div class="section" id="4">
        <a href="https://www.marvel.com/comics/issue/99828/iron_manhellcat_annual_2022_1" >
        <img style="opacity: 100%;" src="https://i.annihil.us/u/prod/marvel/i/mg/5/d0/62b9e0d4e1015/portrait_uncanny.jpg">
        </a>
    </div>
    <div class="section" id="5">
        <a href="https://www.marvel.com/comics/issue/99736/mech_strike_monster_hunters_2022_1" >
        <img style="opacity: 100%;" src="https://i.annihil.us/u/prod/marvel/i/mg/9/50/62b9e0c6f1c36/portrait_uncanny.jpg">
        </a>
    </div>
    <div class="section" id="6">
        <a href="https://www.marvel.com/comics/issue/98322/star_wars_doctor_aphra_2020_21" >
        <img style="opacity: 100%;" src="https://i.annihil.us/u/prod/marvel/i/mg/9/40/62b9e0be3418d/portrait_uncanny.jpg">
        </a>
    </div>
    <div class="section" id="7">
        <a href="https://www.marvel.com/comics/issue/98304/spider-man_2099_exodus_2022_3" >
        <img style="opacity: 100%;" src="https://i.annihil.us/u/prod/marvel/i/mg/f/10/62b9e0b69abac/portrait_uncanny.jpg">
        </a>
    </div>
    <div class="section" id="8">
        <a href="https://www.marvel.com/comics/issue/96268/x-men_red_2022_4" >
        <img style="opacity: 100%;" src="https://i.annihil.us/u/prod/marvel/i/mg/9/20/62b9e09030efb/portrait_uncanny.jpg">
        </a>
    </div>

</body>

</html>