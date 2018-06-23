<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="input">
					<span class="login100-form-title p-b-59">
						INPUT DATA MAHASISWA
					</span>
                    
                    <div class="wrap-input100 validate-input" data-validate = "judul Harap Diisi">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Nama...">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "judul Harap Diisi">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email...">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "judul Harap Diisi">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "judul Harap Diisi">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Password...">
						<span class="focus-input100"></span>
					</div>


                    <div class="wrap-input100 validate-input" data-validate = "golongan Harap Diisi">
						<span class="label-input100">Level</span><br><br>
						<select name="level">
                        <option>	</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                        <option value="reviewer">Reviewer</option>
                        <option value="koordinator">Koordinator</option>
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
                        <a href="<?php echo base_url('akun/index'); ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Kembali
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
				</form>
			</div>
		</div>
	</div>
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>
