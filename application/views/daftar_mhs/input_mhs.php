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
						<span class="label-input100">NIM</span>
						<input class="input100" type="text" name="nim" placeholder="Nim...">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "judul Harap Diisi">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Nama...">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "golongan Harap Diisi">
						<span class="label-input100">Golongan</span><br><br>
						<select name="gol">
                        <option>	</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="A">D</option>
                        <option value="A">E</option>
                  </select>     
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Nama Harap Diisi">
						<span class="label-input100">Prodi</span><br><br>
						<select name="nama_prodi">
                        <option>	</option>
        				<?php foreach ($id_prodi as $row): ?>
        				<option value="<?php echo $row->id_prodi;?>"> <?php echo $row->nama_prodi ?></option>
        				<?php endforeach;?>
        				</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "ID Harap Diisi">
						<span class="label-input100">Id Login Anda = <u><?php echo $this->session->userdata('id_login');?></u></span><br><br>
              			<select name="id_login">
                        <option>	</option>
        				<?php foreach ($id_login as $row): ?>
        				<option value="<?php echo $row->id_login;?>"> <?php echo $row->id_login ?></option>
        				<?php endforeach;?>
        				</select>
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
