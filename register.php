<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
  
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = $conn->prepare("INSERT INTO `users`(name, email, password, image) VALUES(?,?,?,?)");
         $insert->execute([$name, $email, $cpass, $image]);
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered succesfully!';
            header('location:login.php');
         }
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <style>
       @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');

:root{
   --blue:#0097e6;
   --orange:#f39c12;
   --red:#e74c3c;
   --white:#fff;
   --light-color:#aaa;
   --black:#222;
   --light-bg:#333;
   --dark-black:#000000;
}

*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
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

html{
   font-size: 62.5%;
   overflow-x: hidden;
   background-color: var(--dark-black);
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
   background-color: var(--dark-black);
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
   background-color: var(--red);
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
   background-color: var(--dark-black);
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

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   .update-profile-container form .flex .inputBox{
      width:100%;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .flex-btn{
      flex-flow: column;
      gap:0;
   }

}
   </style>

</head>
<body>



<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
   
<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3><span style="color:#FFA500;">r</span>egister <span style="color:#FFA500;">n</span>ow</h3>
      <input type="text" required placeholder="enter your username" class="box" name="name">
      
      <input type="email" required placeholder="enter your email" class="box" name="email">
      <input type="password" required placeholder="enter your password" class="box" name="pass">
      <input type="password" required placeholder="confirm your password" class="box" name="cpass">
      <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
      <p>already have an account? <a href="login.php">login now</a></p>
      <input type="submit" value="register now" class="btn" name="submit">
   </form>

</section>

</body>
</html>