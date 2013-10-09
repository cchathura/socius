<html>
<head>
<title>Ask Question Page</title>
</head>

<body>
<div class="jumbotron">
<div class = "container">
	<h1>Ask A Question!!</h1>
	<?php
	$this->load->helper('form');
	$this->load->helper('html');
	$attributes = array('class' => 'qadd_form', 'id' => 'addquestionform');
	echo form_open('question/question/addQuestion',$attributes);
	
	echo form_label('Enter Title Here', 'question');
	echo br(1);
	$question_title = array(
			'name'        => 'question_title',
			'id'          => 'question_title',
			'value'       => '',
			'rows'        => '1',
			'class'=> 'form-control',
	
	);
	
	echo form_textarea($question_title);
	echo br(1);
	
	echo form_label('Enter Your Question Here', 'question');
	echo br(1);
	$question_text = array(
              'name'        => 'question_text',
              'id'          => 'question_text',
              'value'       => '',
              'rows'        => '10',
			  'class'=> 'form-control',
              
            );

	echo form_textarea($question_text);
	echo br(1);
	echo form_label('Tag Your Question', 'username');
	echo br(1);
	$question_tag = array(
              'name'        => 'qustion_tag',
              'id'          => 'qustion_tag',
              'value'       => '',
              'maxlength'   => '20',
			'class'=> 'form-control',
	      
              
            );

	echo form_input($question_tag);
	echo br(1);
	
	echo form_label('Maximum Points You Can Offer : '.$avaible_credit, 'question');
	$question_offer_amount = array(
              'name'        => 'offer_amount',
              'id'          => 'offer_amount',
              'value'       => '',
              'maxlength'   => '5',
			'class'=> 'form-control',
	     
              
            );

	echo form_input($question_offer_amount);
	echo br(1);
	
	//echo form_submit('mysubmit', 'Add Question');
	
	?>
				
				<button type="submit" class="btn btn-default">Add Question</button>
				<?php
	echo form_close();

	?>
	</div>
	</div>
</body>
</html>
