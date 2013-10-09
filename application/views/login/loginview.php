<head>

    <?php  $this->load->helper('url'); ?>
   
	
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/application/views/assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/application/views/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/application/views/dist/css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>/application/views/assets/js/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>/application/views/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	
	<?php
	$this->load->helper('form');
	$this->load->helper('html');
	?>
	<div class="container">
	<?php 
	
	$attributes = array('class' => 'form-signin', 'id' => 'loginformform');
	echo form_open('login/login/validateuser',$attributes);?>


<h2 class="form-signin-heading">Welcome to Socius</h2>
        <input type="text"  name="username" class="form-control" placeholder="Email address" autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

 </div> <!-- /container -->

<?php
	echo form_close();

?>

<?php
	//$attributes_1 = array('class' => 'l_form', 'id' => 'registerform');
        echo form_open('login/login/register_user');


?>
<!--  button type="submit" class="btn btn-success">Register</button>-->
<?php
        echo form_close();
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
