<html>
<head>
<title>Login Page</title>
<link href="<?php echo base_url(); ?>/application/views/dist/css/signin.css" rel="stylesheet">
</head>
<body>
<div class="container">


	<h2 class="form-signin-heading">New To Socius!</h2>
	<?php
	$this->load->helper('form');
	$this->load->helper('html');
	$attributes = array('class' => 'form-signin', 'id' => 'loginformform');
	echo form_open('login/login/register_user',$attributes);
	/*echo form_label('Username', 'username');
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
        echo form_label('Re-Enter Password', 'password');
	$re_password = array(
              'name'        => 're-password',
              'id'          => 're-password',
              'value'       => '',
              'maxlength'   => '20',
              'size'        => '50',
              'style'       => 'width:10%',
            );

	echo form_password($re_password);
	echo br(1);
	echo form_submit('mysubmit', 'Register');
	echo form_close();

*/	?>


<input type="text" name="username" id="disabledTextInput" class="form-control" placeholder="username">


<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">


<input type="password" name="re-password" class="form-control" id="exampleInputPassword1" placeholder="confirm password">

<button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
<?php echo form_close(); ?>
</div>
</body>
</html>
