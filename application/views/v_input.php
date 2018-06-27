<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="login100-form validate-form" action="input" method="post">
					<span class="login100-form-title p-b-59">
							INPUT TGL DEADLINE
					</span>
						<div class="wrap-input100 validate-input" data-validate = "jadwal Harap Diisi">
						<span class="label-input100">Nama Jadwal</span>
					<input class="input100" type="text" name="nm_jadwal" placeholder="Jadwal...">
						<span class="focus-input100"></span>
					</div>
						<div class="wrap-input100 validate-input" data-validate = "TGL Harap Diisi">
						<span class="label-input100">Tgl Input</span>
						<input class="input100" type="date" name="tgl_input">
						<span class="focus-input100"></span>
					</div>
				
                <div class="wrap-input100 validate-input" data-validate = "TGL Harap Diisi">
						<span class="label-input100">Tgl Batas</span>
						<input class="input100" type="date" name="tgl_batas">
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
			</div>
		</div>
	</div>
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>
