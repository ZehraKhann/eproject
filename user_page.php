<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>user page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;900&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="assets/owl_carousal/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owl_carousal/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-icons.min.css">
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/custom.css">

   <style>


	
      body {
        margin: 0;
        
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







:root{
   --blue:#0097e6;
   --orange:#f39c12;
   --red:#e74c3c;
   --white:#fff;
   --light-color:#aaa;
   --black:#222;
   --light-bg:#333;
}



*::-webkit-scrollbar{
   height: 5px;
   width:10px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}


.message{
   position: sticky;
   top:0;
   max-width: 1200px;
   padding:1.5rem 2rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
   z-index: 1000;
   background-color: var(--light-bg);
   margin:0 auto;
}

.message span{
   color:var(--white);
   font-size: 2rem;
}

.message i{
   color:var(--red);
   font-size: 2.5rem;
   cursor: pointer;
}

.message i:hover{
   color:var(--white);
}

.title{
   padding:1.5rem 1rem;
   text-align: center;
   
   font-size: 3rem;
   text-transform: uppercase;
   color:var(--white);
}

.title span{
   color:var(--red);
}

.btn,
.delete-btn,
.option-btn{
   display: block;
   width: 100%;
   border-radius: .5rem;
   color:var(--white);
   font-size: 1.8rem;
   cursor: pointer;
   padding:1rem 3rem;
   text-transform: capitalize;
   text-align: center;
   margin-top: 1rem;
}

.btn{
   background-color: var(--blue);
}

.delete-btn{
   background-color: var(--red);
}

.option-btn{
   background-color: var(--orange);
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--white);
   color:var(--black);
}

.flex-btn{
   display: flex;
   flex-wrap: wrap;
   gap:1rem;
}

.flex-btn > *{
   flex:1;
}

.form-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.form-container form{
   width: 50rem;
   border-radius: .5rem;
   background-color: var(--black);
   padding:2rem;
   text-align: center;
}

.form-container form h3{
   font-size: 3rem;
   margin-bottom: 1rem;
   color:var(--white);
   text-transform: uppercase;
}

.form-container form .box{
   width: 100%;
   border-radius: .5rem;
   padding:1.2rem 1.4rem;
   font-size: 1.8rem;
   color:var(--white);
   background-color: var(--light-bg);
   margin:1rem 0;
}

.form-container form p{
   font-size: 2.3rem;
   color:var(--light-color);
   padding:1rem 0;
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.profile-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.profile-container .profile{
   width: 40rem;
   border-radius: .5rem;
   background-color: var(--black);
   padding:2rem;
   text-align: center;
}

.profile-container .profile img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: .5rem;
}

.profile-container .profile h3{
   font-size: 2.5rem;
   padding:.5rem 0;
   color:var(--white);
}

.update-profile-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.update-profile-container form{
   width: 70rem;
   border-radius: .5rem;
   background-color: var(--black);
   padding:2rem;
   text-align: center;
}

.update-profile-container form .flex{
   text-align: left;
   display: flex;
   flex-wrap: wrap;
   justify-content: space-between;
}

.update-profile-container form .flex .inputBox{
   width: 49%;
}

.update-profile-container form img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
   margin-bottom: 1rem;
}

.update-profile-container form .flex .inputBox span{
   font-size: 2rem;
   color:var(--light-color);
   display: block;
   padding-top: 1rem;
}

.update-profile-container form .flex .inputBox .box{
   width: 100%;
   padding:1.2rem 1.4rem;
   border-radius: .5rem;
   font-size: 1.8rem;
   color:var(--white);
   margin:1rem 0;
   background-color: var(--light-bg);
}


/* media queries  */



@media (max-width:768px){

   .update-profile-container form .flex .inputBox{
      width:100%;
   }

}

@media (max-width:450px){

   

   .flex-btn{
      flex-flow: column;
      gap:0;
   }

}
   </style>

</head>
<body>


<main>
<section class="blue" id="Albums">
    <?php include 'header.php'; ?>
    <br><br><br><h1 class="title"> <span>user</span> profile page </h1>
		<div class="curve"></div>
	  </section>
<section class="profile-container">


<?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

   <br><br><br><br><br><div class="profile">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
      <h3><?= $fetch_profile['name']; ?></h3>
      <a href="user_profile_update.php" class="btn">update profile</a>
      <a href="logout.php" class="delete-btn">logout</a>
      <div class="flex-btn">
         <a href="login.php" class="option-btn">login</a>
         <a href="register.php" class="option-btn">register</a>
      </div>
   </div>
</section>
</main>
<div class="spacer layer1 flip"></div>
   <sectiopn>
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
















