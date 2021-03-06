<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<form  class="login100-form validate-form" action="<?php echo base_url()?>kuota_dospem/update" method="post">
					<span class="login100-form-title p-b-59">
						Edit Hak Akses
					</span>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">NIP</span>
						<input class="input100" disabled name="nip" value="<?php echo @$user[0]['nip']; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Nama Dosen</span>
						<input class="input100" name="nama_dosen" value="<?php echo @$user[0]['nama_dosen']; ?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Prodi</span>
						<input class="input100" name="id_prodi" value="<?php echo @$user[0]['id_prodi']; ?>">
						<span class="focus-input100"></span>
					</div>
                    
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Kuota</span>
						<input class="input100" name="kuota" value="<?php echo @$user[0]['kuota']; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<span class="label-input100">ID Login</span>
						<input class="input100" name="id_login" value="<?php echo @$user[0]['id_login']; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Username</span>
						<input class="input100" name="username" value="<?php echo @$user[0]['username']; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Level</span>
						<input class="input100" name="level" value="<?php echo @$user[0]['level']; ?>">
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

						<a href="<?php echo base_url('hak_akses_dosen/index'); ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Batal
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
				</form>
			</div>
		</div>
	</div>
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>