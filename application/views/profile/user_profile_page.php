
<head>
<title>My Profile Page</title>
</head>
<body>
<div class="container">

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
	<h2> <?php echo $user_name; ?></h2>
</br>

	<img
					src="http://t2.gstatic.com/images?q=tbn:ANd9GcQ8Td7gR7EGtVUXW0anusOpK5lXteu5DFavPre2sXu5rly-Kk68"
					alt="" class="img-thumbnail">
<?php
	$this->load->helper('form');
	$this->load->helper('html');
	$this->load->helper('url');

	
	
	
	
	
	echo br(1);
	echo form_label(' Questions Asked ', 'latest_question');
	
?>

<ul>
<?php foreach ($myquestions as $item):?>

<li>
<?php
 #echo $item->getQuestion();
 echo anchor('question/view_question/displayquestion/'.$item->getId(), $item->getQuestion() , 'title="'.$item->getOfferAmount().'"');

 
?>
</li>

<?php endforeach;?>

</ul>
</div>
</div>

