<?php 
$this->load->helper('form');
	$this->load->helper('html');
	$this->load->helper('url');
?>
<div class="jumbotron">
<div class="container">
<h1>search result</h1>
<ul>
<?php foreach ($questions as $item):?>

<li>
<?php
 #echo $item->getQuestion();
 echo anchor('question/view_question/displayquestion/'.$item->getId(), $item->getTitle() , 'title="'.$item->getUsername().'"');
?>
--BY--
<?php 
echo anchor('profile/profile/viewUserProfileFromId/'.$item->getUser(), $item->getUsername() , 'title="'.$item->getOfferAmount().'"');
?>
</li>

<?php endforeach;?>
</ul>
	
</div>
</div>