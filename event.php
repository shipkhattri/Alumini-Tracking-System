<?php
	include('database_connection.php');
    session_start();
	include('session_var.php');
	if(!isset($_SESSION['user_id']))
	{
	 header("location:login.php");
	}
	$_SESSION['question'] = "true";
?>
<html>
<head>
<title>Home</title>
<?php
		include('head_links.php');
		?>
</head>
<body>
	<div class="wrapper">
		<?php
		include('header.php');
		?>

		<main>
			<div class="main-section">
			
					 </div>
				<div class="container">
				
				
					<div class="main-section-data">
						<div class="row">
						<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
									     
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="images/user_big.png" alt="">
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
												<h3><?php echo $_SESSION['username'];  ?></h3>
												<span>Graphic Designer at Self Employed</span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
											
											<li>
												<a href="my_profile.php" title="">View Profile</a>
											</li>
										</ul>
									</div><!--user-data end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Suggestions</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>C &amp; C++ Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Suggestions</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>C &amp; C++ Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="http://via.placeholder.com/35x35" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
									<div class="tags-sec full-width">
										<ul>
											<li><a href="#" title="">Help Center</a></li>
											<li><a href="#" title="">About</a></li>
											<li><a href="#" title="">Privacy Policy</a></li>
											<li><a href="#" title="">Community Guidelines</a></li>
											<li><a href="#" title="">Cookies Policy</a></li>
											<li><a href="#" title="">Career</a></li>
											<li><a href="#" title="">Language</a></li>
											<li><a href="#" title="">Copyright Policy</a></li>
										</ul>
										<div class="cp-sec">
											<img src="images/logo2.png" alt="">
											<p><img src="images/cp.png" alt="">Copyright 2018</p>
										</div>
									</div><!--tags-sec end-->
								</div><!--main-left-sidebar end-->
							</div>
							
							<div class="col-lg-6 col-md-8 no-pd">
									<div class="main-ws-sec">
									<div class="posts-section">
									  <div class="post-bar">
							    <div class="post_topbar">
								<div class="usy-dt">
													<img src="images/user_small.png" alt="">
													
													<div class="usy-name">
														<h3><?php echo $_SESSION['username'];  ?></h3><br><br><br>
														
													</div>
												</div>
	
									<div class="post_comment_sec">
										<form method="post" action="askq.php" enctype="multipart/form-data">
											
											<textarea name="describe" type="text" id="inputEmail" class="form-control" placeholder="Post any events here ..." ></textarea> 
                                 <table>
								
								 <tr> <td>
								 <button type="submit" name="upload" class="save">Post Event</button></td><td>
										  <div class="image-upload" style="padding-left:20px;" >
										   <label for="file-input">
										   <i style=" margin-top:11px;" class="fa fa-camera"></i>
										   </label>
										   <input type="file" name="file" id="file-input" style="display:none;" >
										   </div>
					                    </td></tr> </table>
					                     
											
											
										</form>
									</div><!--post_comment_sec end-->
								</div>
								</div>
								</div>
								
							
							
						
									
									<div class="posts-section">

<?php
$query = "SELECT * FROM events where confirm=1;";
$statement = $connect->prepare($query);
	$statement->execute();
$result=$statement->fetchAll();
foreach($result as $row)
{
?>	
	<div class="post-bar">
		<div class="post_topbar">
			<div class="usy-dt">
				<img src="images/user_small.png" alt="">
				<div class="usy-name">
					<h3>John Doe</h3>
					<span><?php echo $row["time"]; ?></span>
				</div>
			</div>
		
		</div>
	
		<div class="job_descp">
			
			
			<p><?php echo $row["describe"]; ?></p>
			 <img src="images/<?php echo $row['image']; ?>" style="max-width:1000px;" alt="" /> 
			 
			
		</div>
		
	</div><!--post-bar end-->										
	</div><!--posts-section end-->
<?php
}
?>
</div><!--main-ws-sec end-->
							</div>
							
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>
	</div><!--theme-layout end-->
	


</body>
</html>