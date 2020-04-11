<?php  
	require 'includes/_header.php';
?>
	<nav class="navbar">
		<div class="logo flex"><a href="index.php"><img	src="abc.jpeg" alt=""></a>
		<h1 style=margin:auto;margin-left:30px;>Welcome To Naukri Khojo.com </h1>
		</div>
		
		
			<form method="POST" action="index.php" class="flex" style="padding-right:80px;">
				<div class="search-input">
					<input type="text" name="search" placeholder="Enter a job skill"></input>
				</div>
				<input type="submit" text="Search" value="Find a Job" class="button search-btn"></input>
			</form>
	</nav>
		<div style="padding-top: 100px;padding-right:80px; position: fixed; right:0">

			<a href="add_post.php"><button class="button add-btn">Add a Job Post</button></a>
		</div>

		
	<div class="container">
		<?php 
			if(isset($_POST["search"])){			
				require 'includes/_search.php';
			}  else {
				require 'includes/_job_posts.php';	
			}
		?>

	</div>
	<?php  
		
	?>
<?php  
	require 'includes/_footer.php';
?>