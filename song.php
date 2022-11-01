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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-icons.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">


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

</style>
</head>

<body>

	<section class="blue">
    <?php include 'header.php'; ?>
		<div class="curve"></div>
	  </section>
	  <section>
	<main class="py-5">
	  <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">

					   <h4 class="display-12 fw-bolder text-white">Video Song</h4>
                        <video class="card-img-top mb-5 mb-md-0" controls>
                            <source src="./video/Ali Zafar - Jhoom - Official Video.mp4" type="video/mp4">
                         </video><br><br><br>


                         <h4 class="display-12 fw-bolder text-white">Audio Song</h4>
                         <audio class="card-img-top mb-5 mb-md-0" controls>
                            <source src="./audio/Jhoom(PaglaSongs).mp3" type="audio/ogg">
                         </audio>
                    </div>
                    <div class="col-md-6 text-white">
                        
                        <h1 class="display-5 fw-bolder">Song Name</h1><br><br>
                        <div class="fs-5 mb-5">
                            <p>Genre: <a href="#">slow song</a></p>
							<p>Singer: <a href="#">Ali Zafar</a></p>
							<p>Released Date: <a href="#">12 April 2001</a></p>
                        </div>


						<form action="rate.php" method="POST">

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="com" required>Comment</textarea><br><br>
                        
						<div class="rateyo" id= "rating"
                        data-rateyo-rating="4"
                        data-rateyo-num-stars="5"
                        data-rateyo-score="3">
                        </div>
 
                        <span class='result'>0</span>
                        <input type="hidden" name="rating">
 
                        
						<input type="submit" name="sub" value="Submit" class="bg-primary float-end text-white input-group-text" id="basic-addon2">
                            
                            
                        
                        </form>
                    </div>
                </div>
            </div>
		<main>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
        <script>
 
 
        <!-- $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
        });
   </script>

</section>		 
  
	  


<div class="spacer layer2 flip"></div>

<section class="pink">
  <div class="blob-content">
  <h1 class="text-center">Featured Songs</h1>


  <main>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	    <script src="assets/owl_carousal/script/owl.carousel.min.js"></script>
	    <script src="assets/owl_carousal/script/jquery.mousewheel.min.js"></script>
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
  </div>

  <svg
    class="blob-motion"
    id="visual"
    viewBox="0 0 960 540"
    width="960"
    height="540"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    version="1.1"
  >
    <g transform="translate(450.7256843113689 283.4942824330989)">
      <path
        id="blob1"
        d="M148.7 -134.9C193.7 -103.7 231.9 -51.9 232.4 0.6C233 53 196.1 106.1 151.1 128.6C106.1 151.1 53 143 -4.4 147.4C-61.8 151.8 -123.5 168.5 -151.2 146C-178.8 123.5 -172.4 61.8 -172.8 -0.4C-173.1 -62.5 -180.3 -124.9 -152.6 -156.1C-124.9 -187.3 -62.5 -187.1 -5.3 -181.8C51.9 -176.5 103.7 -166 148.7 -134.9"
        fill="#BB004B"
      ></path>
    </g>
    <g transform="translate(509.54377535978017 281.49390864595887)" style="visibility: hidden">
      <path
        id="blob2"
        d="M115.4 -137.9C137.9 -92.9 136.4 -46.4 133.6 -2.8C130.8 40.8 126.6 81.6 104.1 118.4C81.6 155.2 40.8 188.1 -8.4 196.5C-57.5 204.8 -115 188.7 -151 151.9C-187 115 -201.5 57.5 -190.8 10.7C-180.1 -36.1 -144.1 -72.1 -108.1 -117.1C-72.1 -162.1 -36.1 -216.1 5.2 -221.2C46.4 -226.4 92.9 -182.9 115.4 -137.9"
        fill="#BB004B"
      ></path>
    </g>
  </svg>
  
 

		<script>
		  const tween = KUTE.fromTo(
			'#blob1',
			{ path: '#blob1' },
			{ path: '#blob2' },
			{ repeat: 999, duration: 3000, yoyo: true }
		  ).start();
		</script>
	  </section>
  
      
	  
	  
	  
	
	<?php include 'footer.php'; ?>
    
</body>

<script src="js/bootstrap.min.js"></script>
</html>




















    

	