
<body>
<div class="jumbotron">
<div calss = "container">




	
	<?php
	$this->load->helper('form');
	$this->load->helper('html');
	
	
	
	
	$attributes = array('class' => 'qdisplay_form', 'id' => 'displayquestionform');
	
	echo form_open('',$attributes);
	
	
	?>
	<h2>
	<?php echo $question_data->getTitle();
	?>
	</h2>
	<h3>
	<?php 
	
	
	
            echo $question_data->getQuestion();
      ?>
      </h3>
      <?php 
	
	echo form_label('Comments', 'comments');
	
	
	
	
	
	if ($comments_data != NULL){
		?>
		<ul>
		<?php foreach ($comments_data as $item):?>

		<li>
		<?php 
		echo $item->getComment();
		echo "---";
		echo $item->getUsername();
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
	
	
	echo form_close();
	
	
	$attributes = array('class' => 'addcomment_form', 'id' => 'addcommentform');
	echo form_open('comment/comment/addComment/'.$question_data->getId(),$attributes);
	
	
	/*$questionId = array(
              'name'        => 'question_id',
              'id'          => 'question_id',
              'value'       => $question_data->getId(),
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => '',
            );*/

	echo form_hidden('question_id',$question_data->getId());
	echo br(1);
	$comment_text = array(
              'name'        => 'comment_text',
              'id'          => 'question_text',
              'value'       => '',
              'rows'        => '4',
              'cols'        => '30',
			  'class'  => 'form-control',
              
            );

	echo form_textarea($comment_text);
	
	
	//echo form_submit('mysubmit', 'Add Comment');
	?>
	</br>
	<button type="submit" class="btn btn-lg btn-primary btn-block">Add Comment</button>
	<?php 
	
	echo form_close();
	?>
	number of likes  <?php echo $like_count; 
	if ($islike == FALSE){
		$attributes_like = array('class' => 'like_form', 'id' => 'displayquestionform');
		echo form_open('question/like_question/likeQuestion/'.$question_data->getId(),$attributes_like);
		//echo form_submit('like', 'Like');
		?>
			
			<button type="submit" class="glyphicon glyphicon-thumbs-up"></button>
			<button type="submit" class="glyphicon glyphicon-thumbs-down"></button>
			<?php
		echo form_close();
	}

	?>
	</div>


</div>	
</body>
</html>
