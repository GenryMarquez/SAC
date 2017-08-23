
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
    	<?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Open4Lab | Login</title>
	    <?= $this->Html->meta('icon') ?>
	    <!-- Tell the browser to be responsive to screen width -->
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	   <!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/',true)?>css/bootstrap.min.css" media="screen, projection">
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="screen, projection">
		<!-- Ionicons -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" media="screen, projection">
    	<!-- Theme style -->
	    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/',true)?>LTE/dist/css/AdminLTE.min.css" media="screen, projection">
	    <!-- iCheck -->
	    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/',true)?>LTE/plugins/iCheck/square/blue.css" media="screen, projection">
    </head>

 	<body class="hold-transition login-page">
 		<div class="login-box">
		  <div class="login-logo">
		    <b>Open4</b>Lab
		  </div>
		  <!-- /.login-logo -->
		  <div class="login-box-body">
		  	<p class="login-box-msg"><?= $this->Flash->render() ?></p>
        	<?= $this->fetch('content') ?>
		  </div>
		  <!-- /.login-box-body -->
		</div>
		<?= $this->Html->script([
                'jQuery/jQuery-2.2.0.min.js',
                'bootstrap.min.js'
    	]) ?>
		<!-- iCheck -->
		<script src="<?= $this->Url->build('/', true)?>LTE/plugins/iCheck/icheck.min.js"></script>

		<script>
		  $(function () {
		    $('input').iCheck({
		      checkboxClass: 'icheckbox_square-blue',
		      radioClass: 'iradio_square-blue',
		      increaseArea: '20%' // optional
		    });
		  });
		</script>
    </body>
</html>