<html>
<head>
<title>View Question Page</title>
</head>
<body>
	<h1>Welcome offer credit!</h1>
	<?php
	$this->load->helper('form');
	$this->load->helper('html');
	
	#$attributes = array('class' => 'qdisplay_form', 'id' => 'displayquestionform');
	#echo form_open('',$attributes);
	//echo form_label('Enter your Question here', 'username');
	echo br(1);
	if ($question_data != NULL){ 
	$question_text = array(
              'name'        => 'question_text',
              'id'          => 'question_text',
              'value'       => $question_data->getQuestion(),
              'rows'        => '10',
              'cols'        => '50',
              'style'       => 'width %25',
            );

	echo form_textarea($question_text);
	}else
	{
	echo "no question on this ID";
	}
	echo br(1);
	echo form_label('Comments', 'comments');
	echo br(1);
	if ($comments_data != NULL){
		?>
		<ul>
		<?php foreach ($comments_data as $item):?>

		<li>
		<?php 
		$attributes = array('class' => 'sendcredit', 'id' => 'sendcredit');
		echo form_open('profile/offer_credit/transferCredit',$attributes);
	
		echo $item->getComment();
		echo "---";
		echo $item->getUsername();
		echo form_hidden('u_id', $user_id);
		echo form_hidden('transfer_u_id', $item->getUser_id());
		echo form_hidden('ques_id', $question_id);
		echo form_submit('mysubmit', 'offer credit');
		echo form_close();
		?>
		
		</li>

		<?php endforeach;?>
		</ul>
			<?php
		
		}
	else
		{
			echo " no comments for this question";
		}
	
	echo br(1);
	#echo form_close();
	
	
	

	?>
</body>
</html>
