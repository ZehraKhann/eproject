<!DOCTYPE html>
<html>
<head>
	<title>Soundwave Template</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-icons.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;900&display=swap" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>

	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="assets/owl_carousal/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owl_carousal/css/owl.theme.default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
	<style>


@font-face {
  font-family: pop;
  src: url(./fonts/Poppins-Regular.ttf);
}
.about_section{
  width: 100%;
  height: auto;
  
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 50px 13%;
  font-family: pop;
}
.about_img img{
  width: 430px;
  transform: translateY(80px);
}
.about_details h1{
  font-size: 58px;
  color: #fff;
  position: relative;
}
.about_details h1::after{
  content: " ";
  position: absolute;
  width: 120px;
  height: 4px;
  background-color: #f39c12;
  border-radius: 5px;
  left: 0;
  bottom: 2px;
}
.about_details p{
  font-size: 15px;
  color: #fff;
  max-width: 480px;
  margin: 30px 0 45px 0;
  line-height: 29px;
}
.btn{
  padding: 10px 25px;
  border: 2px solid #f39c12;
  border-radius: 5px;
  color: #f39c12;
  text-decoration: none;
  margin: 30px 0;
  transition: all .5s ease;
  font-weight: 600;
}
.btn:hover{
  background-color: #f39c12;
  color: #333;
}
.btn1{
  margin-right: 15px;
  background-color: #f39c12;
  color: #000;
}
.btn1:hover{
  background-color: transparent;
  color: #f39c12;
}



		h1 {
        font-size: 4rem;
      }
      p {
        font-size: 1.5rem;
      }
      body {
        margin: 0;
        font-family: 'Prompt', sans-serif;
        color: white;
        background: #202731;
        overflow-x: hidden;
      }

      section {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 400px;
        padding-top: 100px;
      }

      .blue {
        background: #3c31dd;
      }

      .red {
        background: #dd3f31;
      }

      .pink {
        background: #ff0066;
        overflow: hidden;
      }

      .dark {
        background: #0f0f10;
      }

      /* Curved bg with plain CSS */

      .curve {
        position: absolute;
        height: 250px;
        width: 100%;
        bottom: 0;
        text-align: center;
      }

      .curve::before {
        content: '';
        display: block;
        position: absolute;
        border-radius: 100% 50%;
        width: 55%;
        height: 100%;
        transform: translate(85%, 60%);
        background-color: hsl(216, 21%, 16%);
      }

      .curve::after {
        content: '';
        display: block;
        position: absolute;
        border-radius: 100% 50%;
        width: 55%;
        height: 100%;
        background-color: #3c31dd;
        transform: translate(-4%, 40%);
        z-index: -1;
      }

      /* Bubble bg with plain CSS */

      .bubble::after {
        content: '';
        border-top-left-radius: 50% 100%;
        border-top-right-radius: 50% 100%;
        position: absolute;
        bottom: 0;
        z-index: -1;
        width: 100%;
        background-color: #0f0f10;
        height: 85%;
      }

      /* Curved bg with SVG via https://www.shapedivider.app/ */

      .wave {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
      }

      .wave svg {
        position: relative;
        display: block;
        width: calc(103% + 1.3px);
        height: 262px;
      }

      .wave .shape-fill {
        fill: hsl(240, 3%, 6%);
      }

      /* SVG background image via https://haikei.app/ */

      .spacer {
        aspect-ratio: 960/300;
        width: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
      }

      .layer1 {
        background-image: url('./layer1.svg');
      }
      .layer2 {
        background-image: url('./layer2.svg');
      }

      .flip {
        transform: rotate(180deg);
      }

      /* Blobs SVG background image via https://haikei.app/ */

      .blob-motion {
        position: absolute;
        transform: translateY(-20%);
        z-index: 0;
      }

      .blob-content {
        z-index: 1;
      }

      .blobs {
        width: 100%;
        background: url('./blobs.svg') no-repeat bottom / cover;
      }


/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  -webkit-animation: bgcolor 20s infinite;
    animation: bgcolor 10s infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
  padding: 10px;
}


/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #ddd;
  cursor: pointer;
}

/* Add a grey background color on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background color to the active button */
.btn.active {
  background-color: #666;
   color: white;
}
.testim{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.testim .wrap{
    position: relative;
    width: 100%;
    max-width: 1020px;
    padding: 40px 20px;
    margin: auto;
}
.testim .arrow{
    display: block;
    position: absolute;
    color: #eee;
    cursor: pointer;
    font-size: 2em;
    top: 50%;
    transform: translateY(-50%);
    transition: all .3s ease-in-out;
    padding: 5px;
    z-index: 22222222;
}
.testim .arrow:before{
    cursor: pointer;
}
.testim .arrow.left{
    left: 10px;
}
.testim .arrow.right{
    right: 10px;
}
.testim .arrow:hover{
    color: #ea830e;
}
.testim .dots{
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 60px;
    left: 0;
    display: block;
    z-index: 3333;
    height: 12px;
}
.testim .dots .dot{
    list-style-type: none;
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 1px solid #eee;
    margin: 0 10px;
    cursor: pointer;
    transition: all .5s ease-in-out;
    position: relative;
}
.testim .dots .dot.active,
.testim .dots .dot:hover{
background: #ea830e;
border-color: #ea830e;
}

.testim .dots .dot.active{
    animation: testim-scale .5s ease-in-out forwards;
}
.testim .cont{
    position: relative;
    overflow: hidden;
}
.testim .cont > div{
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 0 70px 0;
    opacity: 0;
}
.testim .cont > div.inactive{
    opacity: 1;
}
.testim .cont > div.active{
    
    position: relative;
    opacity: 1;
    
}
.testim .cont div .img img{
    display: block;
    width: 100px;
    height: 100px;
    margin: auto;
    border-radius: 50%;
}
.testim .cont div h2{
    color: #ea830e;
    font-size: 1em;
    margin: 15px 0;
}
.testim .cont div p{
    font-size: 1.15em;
    color: #eee;
    width: 80%;
    margin: auto;
}

.testim .cont div.active .img img{
    animation: testim-show .5s ease-in-out forwards;
}
.testim .cont div.active h2{
    animation: testim-content-in .4s ease-in-out forwards;
}
.testim .cont div.active p {
    animation: testim-content-in .5s ease-in-out forwards;
}
.testim .cont div.inactive .img img{
    animation: testim-hide .5s ease-in-out forwards;
}
.testim .cont div.inactive h2{
    animation: testim-content-out .4s ease-in-out forwards;
}
.testim .cont div.inactive p {
    animation: testim-content-out .5s ease-in-out forwards;
}

@keyframes testim-scale {
    0% {
        box-shadow: 0px 0px 0px 0px #eee;
    }
    35% {
        box-shadow: 0px 0px 10px 5px #eee;
    }
    70% {
        box-shadow: 0px 0px 10px 5px #ea830e;
    }
    100% {
        box-shadow: 0px 0px 0px 0px #ea830e;
    }
}

@keyframes testim-content-in {
    from {
        opacity: 0;
        transform: translateY(100%);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes testim-content-out {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-100%);
    }
}
@keyframes testim-show {
    from {
        opacity: 0;
        transform: scale(0);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}
@keyframes testim-hide {
    from {
        opacity: 1;
        transform: scale(1);
    }
    to {
        opacity: 0;
        transform: scale(0);
    }
}
/* coding with nick */

/* Responsive */

@media all and (max-width: 300px) {
    body {
        font-size: 14px;
    }
}
@media all and (max-width: 500px) {
    .testim .arrow{
        font-size: 1.5rem;
    }
    .testim .cont div p{
        line-height: 25px;
    }
}
*,
*:after,
*:before{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    user-select: none;
    cursor: default;
}
html{
    width: 100%;
    height: auto;
}
body{
    width: 100%;
    height: auto;
    font-size: 16px;
    font-weight: 300;
    font-family: 'Roboto',sans-serif;
   
}


/* Position text in the middle of the page/image */



	</style>
	

</head>
<body>

	<section class="blue" id="Albums">
    <?php include 'header.php'; ?>
    <div class="bg-text">
  <br><br><br><h1>
    <img src="images/logo.png" width="150" height="150">
    <span class="display-1">Welcome<span style="color:#FFA500;">.....</span></span>
  </h1>
  
</div>
		<div class="curve"></div>
	  </section>
  
	  <section>
		<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	    <script src="assets/owl_carousal/script/owl.carousel.min.js"></script>
	    <script src="assets/owl_carousal/script/jquery.mousewheel.min.js"></script>
		<h1><span style="color:#FFA500;">A</span>lbums</h1>
		<main>
			<!-- Artist Start -->
			<div class="container owl-theme owl-stage py-5">
				<div class="owl-carousel">
					<img src="images/04.jpg" alt="">
					<img src="images/04.jpg" alt="">
					<img src="images/04.jpg" alt="">
					<img src="images/04.jpg" alt="">
					<img src="images/04.jpg" alt="">
					<img src="images/04.jpg" alt="">
				</div>
        
            </div>
			<!--Script Owl Carousel-->
			<script>
				$(document).ready(function(){
		
					$(".owl-carousel").owlCarousel({
						nav: true,
						navText: ["<i class='fas fa-chevron-left text-white'></i>","<i class='fas fa-chevron-right text-white'></i>"],
						slideBy: 2,
						margin: 10,
						autoplay: true,
						loop: true,
						responsive: {
							0 : {
								items: 1,
								nav: false
							},
							425 : {
								items: 2
							},
							786 : {
								items: 3
							}
						}
						
					});
					$(".owl-carousel").on("mousewheel",'.owl-stage',function(e) {
						if(e.deltaY > 0){
							$(".owl-carousel").trigger('next.owl');
						} else{
							$(".owl-carousel").trigger('prev.owl');
						}
						e.preventDefault();
					})
				});
			</script>
            <!-- Artist End -->
		</main>
	  </section>
  
	  <section class="bubble" id="featured">
		<br><br><br><br><br><br><br><br><h1><span style="color:#FFA500;">F</span>eatured <span style="color:#FFA500;">S</span>ongs</h1>
		
	  </section>
	  <section class="dark">
		
		<main class="pt-2 p-4 mx-5 d-flex justify-content-center" style="flex-wrap: wrap;">
    <div class="m-4" style="width: 200px;">
				<div style="position: relative;">
					<img src="images/04.jpg" class="big-song-img rounded img-fluid" >
					<a href="#">
						<div class="big-song-hover " >
							<i class="h1 bi bi-play"></i>
						</div>
					</a>
					</div>
				<div>
					<div class="lead text-white">My love</div>
					<small class="text-muted">Song description</small>
				</div>
			</div>
            <div class="m-4" style="width: 200px;">
				<div style="position: relative;">
					<img src="images/04.jpg" class="big-song-img rounded img-fluid" >
					<a href="#">
						<div class="big-song-hover " >
							<i class="h1 bi bi-play"></i>
						</div>
					</a>
					</div>
				<div>
					<div class="lead text-white">My love</div>
					<small class="text-muted">Song description</small>
				</div>
			</div>
            <div class="m-4" style="width: 200px;">
				<div style="position: relative;">
					<img src="images/04.jpg" class="big-song-img rounded img-fluid" >
					<a href="#">
						<div class="big-song-hover " >
							<i class="h1 bi bi-play"></i>
						</div>
					</a>
					</div>
				<div>
					<div class="lead text-white">My love</div>
					<small class="text-muted">Song description</small>
				</div>
			</div>
            <div class="m-4" style="width: 200px;">
				<div style="position: relative;">
					<img src="images/04.jpg" class="big-song-img rounded img-fluid" >
					<a href="#">
						<div class="big-song-hover " >
							<i class="h1 bi bi-play"></i>
						</div>
					</a>
					</div>
				<div>
					<div class="lead text-white">My love</div>
					<small class="text-muted">Song description</small>
				</div>
			</div>
            <div class="m-4" style="width: 200px;">
				<div style="position: relative;">
					<img src="images/04.jpg" class="big-song-img rounded img-fluid" >
					<a href="#">
						<div class="big-song-hover " >
							<i class="h1 bi bi-play"></i>
						</div>
					</a>
					</div>
				<div>
					<div class="lead text-white">My love</div>
					<small class="text-muted">Song description</small>
				</div>
			</div>
            <div class="m-4" style="width: 200px;">
				<div style="position: relative;">
					<img src="images/04.jpg" class="big-song-img rounded img-fluid" >
					<a href="#">
						<div class="big-song-hover " >
							<i class="h1 bi bi-play"></i>
						</div>
					</a>
					</div>
				<div>
					<div class="lead text-white">My love</div>
					<small class="text-muted">Song description</small>
				</div>
			</div>
		</main>
		<!--Script gallery-->
		<script>
			filterSelection("all") // Execute the function and show all columns
	        function filterSelection(c) {
	        var x, i;
	        x = document.getElementsByClassName("column");
	        if (c == "all") c = "";
	        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
	       for (i = 0; i < x.length; i++) {
		    w3RemoveClass(x[i], "show");
		    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	    }
	    }
	
	// Show filtered elements
	function w3AddClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {
		  element.className += " " + arr2[i];
		}
	  }
	}
	
	// Hide elements that are not selected
	function w3RemoveClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		  arr1.splice(arr1.indexOf(arr2[i]), 1);
		}
	  }
	  element.className = arr1.join(" ");
	}
	
	// Add active class to the current button (highlight it)
	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	  });
	}
		</script>
	  </section>
  
	  <section class="red" id="About">
		<main class=" about_section">
			<div class="about_img">
				<img src="images/hd.png" alt="">
			</div>
			<div class="about_details">
				<h1><span style="color:#FFA500;">A</span>bout <span style="color:#FFA500;">U</span>s</h1>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae ipsam voluptas perspiciatis voluptatum magnam fugit deleniti, dolorem rerum excepturi quasi! <br><br>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore consectetur quidem animi at debitis.</p>
				
			</div>
		</main>
			
		<div class="wave">
		  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path
			  d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
			  class="shape-fill"
			></path>
		  </svg>
		</div>
	  </section>
  
	  <div class="spacer layer1"></div>
  
	  <section>
		
		
		<main class="testim" id="testim">
			<h1 class="text-center"><span style="color:#FFA500;">O</span>ur <span style="color:#FFA500;">C</span>lients</h1>
			<div class="wrap">

				<span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
				<span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
	
				<ul class="dots" id="testim-dots">
					<li class="dot active"></li>
					<li class="dot"></li>
					<li class="dot"></li>
					<li class="dot"></li>
					<li class="dot"></li>
				</ul>
	
				<div class="cont" id="testim-content">
	
					<div class="active">
						<div class="img"><img src="images/06.jpg"></div>
						<h2>Lorem N. Ipsum</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
							deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
					</div>
					
					<div>
						<div class="img"><img src="images/06.jpg"></div>
						<h2>Lorem L. Ipsum</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
							deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
					</div>
					
					<div>
						<div class="img"><img src="images/06.jpg"></div>
						<h2>Lorem R. Ipsum</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
							deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
					</div>
					
					<div>
						<div class="img"><img src="images/06.jpg"></div>
						<h2>Lorem P. Ipsum</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
							deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
					</div>
					
					<div>
						<div class="img"><img src="images/06.jpg"></div>
						<h2>Lorem Q. Ipsum</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
							deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
					</div>
				</div>
	
			</div>	 
		</main>
		<!--testimonial script start-->
		<script>
			// coding with nick
// vars
'use strict'
var testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimleftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer
    ;
// coding with nick
window.onload = function () {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }
        if (slide < 0) {
            slide = currentSlide = testimContent.length - 1;
        }
        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }
        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimTimer);
        testimTimer = setTimeout(function () {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }
// coding with nick
    testimleftArrow.addEventListener("click", function () {
        playSlide(currentSlide -= 1);
    })
    testimRightArrow.addEventListener("click", function () {
        playSlide(currentSlide += 1);
    })

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function () {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }
    playSlide(currentSlide);

}
// coding with nick

		</script>
	  </section>
  
	  

		<script>
		  const tween = KUTE.fromTo(
			'#blob1',
			{ path: '#blob1' },
			{ path: '#blob2' },
			{ repeat: 999, duration: 3000, yoyo: true }
		  ).start();
		</script>
	  </section>
  
	  
	  <section class="blobs">
		
		
	  </section>
	  
	
	<?php include 'footer.php'; ?>
</body>

<script src="js/bootstrap.min.js"></script>
</html>


