<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/logo polije.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="input">
					<span class="login100-form-title p-b-59">
						INPUT JUDUL FIX
					</span>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Judul</span>
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Tgl Input</span>
						<input class="input100" type="date" name="email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Nama Mahasiswa</span>
						<input class="input100" type="text" name="username" placeholder="Nama...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Nama Dosen</span><br><br>

						<select name="prodi">
                        <option value="">---</option>
        				<?php foreach ($prodi as $row){ ?>
        				<option value="<?php echo $row->id;?>"><?php echo $row->prodi;?></option>
        				<?php }?>
        				</select>
						
					</div>
                    
						<div class="wrap-input100 validate-input">
						<span class="label-input100">Judul Penelitian Dosen</span><br><br>
						<select name="prodi">
                        <option value="">---</option>
        				<?php foreach ($prodi as $row){ ?>
        				<option value="<?php echo $row->id;?>"><?php echo $row->prodi;?></option>
        				<?php }?>
        				</select>
						<span class="focus-input100"></span>
					</div>
                        
                        	
				
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
								</span>
							</label>
						</div>
	
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="btnTambah">
								Daftar
							</button>
						</div>

				</form>

	
<!--===============================================================================================-->
	<script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(''); ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(''); ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(''); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(''); ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(''); ?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(''); ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>

</body>
</html>