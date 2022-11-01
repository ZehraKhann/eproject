
<main>
			<!--start navigation-->
		<nav class="mainnav shadow navbar-expand-lg navbar navbar-dark bg-dark fixed-top" style="min-width: 350px">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#">
			  <span style="color:#FFA500;">M</span>usify.
				  <div style="font-size: 13px">Listen Your Song Now!!!</div>
			  </a>
  
			  <div>
				<form action="" method="POST">
				  <div class="input-group ">
					
					<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
					<input type="button" class="bg-black text-white border-0 input-group-text" id="basic-addon2"><i class="bi bi-search"></i>
					
				  </div>
				</form>
			  </div>
  
			  <div class="text-white h4 mx-3">
				  <a href="">
					  <i class="bi bi-facebook"></i>
				  </a>
				  <a href="">
					  <i class="bi bi-twitter"></i>
				  </a>
				  <a href="">
					  <i class="bi bi-instagram"></i>
				  </a>
			  </div>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				  <li class="nav-item"> 
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#Albums">Albums</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#featured">Featured Songs</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#About">About Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#testim">Our Users</a>
				  </li>
				  
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  Categories
					</a>
					<?php
					include 'connect.php';
					$sql = "SELECT * FROM cat";
                            $result = mysqli_query($conn , $sql) or die ("Query Unsuccessful");
                            if(mysqli_num_rows($result) > 0){

                            
					?>
					<ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
					<?php while($row = mysqli_fetch_assoc($result)){ ?> 
					  <li><a class="dropdown-item text-white" href='song-category.php?id=<?php echo $row['cat_id'] ?>'><?php echo $row['cat_name'] ?></a></li>
					  
					  <?php } 
					?>
				 	</ul>
					<?php } 
					?>	
				  </li>
				  
  
				  <img class="rounded-circle" src="images/06.jpg" style="width:40px;height:40px">
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  Hi, John
					</a>
					<ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
					  <li><a class="dropdown-item text-white" href="#"><i class="bi bi-person"></i> Profile</a></li>
					  <li><a class="dropdown-item text-white" href="#"><i class="bi bi-gear"></i> Settings</a></li>
					  <li><hr class="dropdown-divider"></li>
					  <li><a class="dropdown-item text-white" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
					</ul>
				  </li>
				</ul>
			  </div>
			</div>
		  </nav>
		  <!--end navigation -->
		</main>