<html>
<head>
<title>Login Page</title>


</head>
<body>
	<h1>Welcome Login page!</h1>
	<?php
	$this->load->helper('form');
	$this->load->helper('html');
	$attributes = array('class' => 'l_form', 'id' => 'loginformform');
	echo form_open('login/login/validateuser',$attributes);
	echo form_label('Username', 'username');
	$username = array(
              'name'        => 'username',
              'id'          => 'username',
              'value'       => 'usename',
              'maxlength'   => '20',
              'size'        => '50',
              'style'       => 'width:10%',
            );

	echo form_input($username);
	echo br(1);
	echo form_label('Password', 'password');
	$password = array(
              'name'        => 'password',
              'id'          => 'password',
              'value'       => '',
              'maxlength'   => '20',
              'size'        => '50',
              'style'       => 'width:10%',
            );

	echo form_password($password);
	echo br(1);
	echo form_submit('mysubmit', 'Login');
	echo form_close();

	?>
</body>
</html>
