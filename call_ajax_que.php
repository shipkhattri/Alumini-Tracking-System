<body>
<div class="wrapper">
    <section class="forum-page">
            <div class="container">
                <div class="forum-questions-sec">
                    <div class="row">
                        <div class="col-lg-12">
<?php
include('database_connection.php');
include('config.php');

$s1=$_REQUEST["n"];
$s1 = htmlspecialchars($s1); 

$query="SELECT * FROM questions WHERE (`q_tag` LIKE '%".$s1."%') OR (`q_title` LIKE '%".$s1."%') GROUP BY `q_tag` ";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$s="";

if($result > 0)
{
	foreach($result as $row)
	{
		$s=$s."
								<div class=\"forum-post-view\">
									<div class=\"usr-question\">
										<div class=\"usr_img\">
											<img src=\"images/user_small.png\" alt=\"\">
										</div>
										<div class=\"usr_quest\">
											<h3>".$row["q_title"]."</h3>
											<span>".$row["time"]."</span>										
											<ul class=\"quest-tags\">
												<li><a href=\"#\" title=\"\">".$row["q_tag"]."</a></li>
											</ul>
											<p>".$row["q_description"]."</p>										
											
											<div class=\"comment-section\">
											<h3>Answers</h3>";
											
											
													$query_ans = "SELECT * FROM answers where q_no=".$row["q_id"]." ";
													$statement_ans = $connect->prepare($query_ans);
													$statement_ans->execute();
													$result_ans = $statement_ans->fetchAll();
													foreach($result_ans as $row_ans)
														{ 						
															
											$s=$s."		<div class=\"comment-sec\">
															<ul>
																<li>
																	<div class=\"comment-list\">
																		<div class=\"bg-img\">
																			<img src=\"images/user_small.png\" alt=\"\">
																		</div>
																		<div class=\"comment\">
																			<h3>".$row_ans["answer_username"]."</h3>
																			<span><img src=\"images/clock.png\" alt=\"\">";
																			echo date('d M H:i',strtotime($row_ans["time"])); 
											$s=$s."								</span>
																			<p>".$row_ans["answer"]."</p>
																		</div>
																	</div>
																</li>																									
															</ul>											
														</div>";
														}

											$s=$s."<div class=\"post-comment-box\">
												<div class=\"user-poster\">
													<div class=\"usr-post-img\">
														<img src=\"images/user_small.png\" alt=\"\">
													</div>
													<div class=\"post_comment_sec\">
														<form method=\"post\"  enctype=\"multipart/form-data\"  action=\"post_answer.php\">													
															<textarea name=\"answer\" placeholder=\"Enter Answer\"></textarea>
															<input type=\"hidden\" name=\"id\" value=".$row["q_id"]."\" >													
															<button type=\"submit\" name=\"submit\" value=\"Submit\">Post Answer</button>
														</form>
													</div>
												</div>
											</div>		
										</div>
									</div>
								
								<div class=\"next-prev\">	
								</div>";
						
}
if(strlen($s1)>0);
echo $s;
}
else{
    echo "No results";
}
?>
