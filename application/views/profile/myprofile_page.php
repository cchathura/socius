
<head>
<title>My Profile Page</title>
</head>
<body>
	<?php 
	$this->load->helper('form');
	$this->load->helper('html');
	$this->load->helper('url');
	?>
	<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Socius</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active">
				<?php $attributes = array('class' => 'ask_question_form', 'id' => 'askquestionform');
											echo form_open('question/question/askQuestion',$attributes);

											//echo form_submit('mysubmit', 'ASK QUESTION');
											?>
											<button type="submit" class="btn btn-default">Ask Question</button>
											<?php 
											echo form_close();
											?>
				</li>
				<li><!--  <a href="http://localhost/hackthon/index.php/profile/profile/viewMyProfile">Profile</a>-->
				<?php $attributes = array('class' => 'myprofile_form', 'id' => 'myprofile_form');
											//echo form_open('profile/profile/viewMyProfileFromId/'.$user_data['user_id'],$attributes);
											echo form_open('profile/profile/viewMyProfile',$attributes);
											//echo form_submit('mysubmit', 'My profile');
											?>
											<button type="submit" class="btn btn-default">My profile</button>
											<?php 
											echo form_close();
											?>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown">Options <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>

					</ul></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../../login/logout/logout_user">Log Out</a></li>
				<li class="active"><a href="../../login/login/showMainPage">Home</a></li>
				<li><a href="#exit">Exit</a></li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
	
	
	

<?php 
//$this->load->library('session');

//$ses_data = $this->session->all_userdata();

?>
<?php //if ($ses_data['user_id'] == $user_id)	{?>


	<div class="container">

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div>
			
			<br>
				<img
					src="http://t2.gstatic.com/images?q=tbn:ANd9GcQ8Td7gR7EGtVUXW0anusOpK5lXteu5DFavPre2sXu5rly-Kk68"
					alt="" class="img-thumbnail">
					 
			</div>
			<div>
				<p>
					<i class="glyphicon glyphicon-envelope"></i> <span class="label label-default"><?php echo $user_name; ?></span>  <br> 
					<i class="glyphicon glyphicon-bookmark"></i> <span class="label label-default">Credit avaible <?php echo $avaible_credit_amount;?></span><br>
					<i class="glyphicon glyphicon-calendar"></i> January 30, 1974
				</p>

				
				
				<ul>
				
<?php foreach ($myquestions as $item):?>

<tr class="active">
<td>
<div>
<!-- <table>
<thead>
<tr> -->
<div>

<?php
 #echo $item->getQuestion();

	
	

 
 
 
?>

		</div>
								<!-- 	</tr>
									<tr> -->
										<div>
										
											<p>
												 
												 <?php 
												 
												 echo anchor('question/view_question/displayquestion/'.$item->getId(), $item->getQuestion() , 'title="'.$item->getUsername().'"');
												 $attributes = array('id' => 'deletequestionform');
												 echo form_open('question/question/deleteQuestion',$attributes);
												 echo form_hidden('question_id', $item->getId());
												 //echo form_submit('mysubmit', 'Delete QUESTION');
												 ?>
												 <button type="submit" class="btn btn-default">Delete Question</button>
												 <?php 
												 echo form_close();
												 ?>
												 

												</div>
												<div>
												<?php 
												if($item->getSolved() == 0)
												{
													$attributes1 = array('class' => 'offer_credit_form', 'id' => 'offer_credit_form');
													echo form_open('profile/offer_credit/viewOfferCredit',$attributes1);
													echo form_hidden('question_id', $item->getId());
													//echo form_submit('mysubmit', 'Offer credit !!');
													?>
													 <button type="submit" class="btn btn-default">Offer credit !!</button>
													<?php 
													echo form_close();
												}
												?>
												
											
										
										</div>
<?php endforeach;

?>

</ul>
				
				
				
				

			</div>

		</div>

	</div>
	<!-- /container -->
<?php
	
	
	
	
	
	
	