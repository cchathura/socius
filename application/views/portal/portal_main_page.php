<script>
function formSubmit()
{
document.getElementById("frm1").submit();
}
</script>

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
				<li class="active"><?php $attributes = array('class' => 'ask_question_form', 'id' => 'askquestionform');
				echo form_open('question/question/askQuestion',$attributes);

				//echo form_submit('mysubmit', 'Ask Question);
				?>
					<button type="submit" class="btn btn-default">Ask Question</button>
					<?php 
					echo form_close();
					?>
				</li>
				<li>
					<!--  <a href="http://localhost/hackthon/index.php/profile/profile/viewMyProfile">Profile</a>-->
					<?php $attributes = array('class' => 'myprofile_form', 'id' => 'myprofile_form');
					//echo form_open('profile/profile/viewMyProfileFromId/'.$user_data['user_id'],$attributes);
					echo form_open('profile/profile/viewMyProfile',$attributes);
					//echo form_submit('mysubmit', 'My profile');
					?>
					<button type="submit" class="btn btn-default">My profile</button> <?php 
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
				
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>




<div
	class="container">

	<!-- Main component for a primary marketing message or call to action -->
	<div class="jumbotron">
		<table class="table table-striped">
			<thead>
				<tr>
					
				</tr>
			</thead>
			<tbody>

				<!--  
				<tr class="active">
					<td>
						<div>
							<table>
								<thead>
									<tr>
										<div>







											<span class="label label-default">Title</span> by <span
												class="label label-info">Info</span>

-->



				<label for="exampleInputPassword1">Latest Updates</label>
				<?php

				?>

				<?php foreach ($qustion_list as $item):?>

				<tr class="active">
					<td>
						<div>
							<!-- <table>
								<thead>
									<tr> -->
							<div>


								<p> <?php
								#echo $item->getQuestion();
								echo anchor('question/view_question/displayquestion/'.$item->getId(), $item->getTitle() , 'title="'.$item->getUsername().'"');
								?>
								</p> by <span class="label label-info"> <?php
								echo anchor('profile/profile/viewUserProfileFromId/'.$item->getUser(), $item->getUsername() , 'title="'.$item->getOfferAmount().'"');
								?>
								</span>

							
							
								
									    &nbsp&nbspComments <span class="label label-default">##</span> Answered &nbsp&nbsp<span
										class="label label-default">No</span>


									<button type="button" class="btn btn-link">

									</button>
							
							</div>
							<!--  </tr>-->


							<?php endforeach;?>










							<!--  
										</div>
									</tr>
									<tr>
										<div>
											<p>
												Comments <span class="label label-default">##</span>

												Answered <span class="label label-default">Yes/no</span>


												<button type="button" class="btn btn-default btn-lg">
													<span class="glyphicon glyphicon-thumbs-up"></span> Star
												</button>
										
										</div>
									</tr>
									-->
			
			
			</thead>
		</table>
	</div>
	</td>
	</tr>
	</tbody>
	</table>

</div>

</div>
<!-- /container -->

