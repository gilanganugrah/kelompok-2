<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form role="form" action="<?php echo base_url();?>login/do_login" method="post">
<input type="text" name="uname" placeholder="Username" /><?php echo form_error('username');?>
<input type="text" name="pass" placeholder="Password" /><?php echo form_error('password');?>
<button type="submit" name="login" value="login">Sign in </button>
</body>
</html>