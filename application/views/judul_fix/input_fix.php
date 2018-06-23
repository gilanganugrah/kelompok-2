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
                    <div class="wrap-input100 validate-input" data-validate = "judul Harap Diisi">
						<span class="label-input100">Judul</span>
						<input class="input100" type="text" name="judul" placeholder="Judul...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "TGL Harap Diisi">
						<span class="label-input100">Tgl Input</span>
						<input class="input100" type="date" name="tgl_input">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "judul Harap Diisi">
						<span class="label-input100">Deskripsi</span>
						<input class="input100" type="text" name="deskripsi" placeholder="Deskripsi...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Nama Harap Diisi">
						<span class="label-input100">Nama Mahasiswa</span><br><br>
						<select name="nama">
                        <option>	</option>
        				<?php foreach ($nim as $row): ?>
        				<option value="<?php echo $row->nim;?>"> <?php echo $row->nama ?></option>
        				<?php endforeach;?>
        				</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Nama Dosen Harap Diisi">
						<span class="label-input100">Nama Dosen</span><br><br>
						<select name="nama_dosen">
                        <option>	</option>
        				<?php foreach ($nip as $row){ ?>
        				<option value="<?php echo $row->nip;?>"> <?php echo $row->nama_dosen;?></option>
        				<?php }?>
        				</select>
						
					</div>
                    
						<div class="wrap-input100 validate-input" data-validate = "Judul Peneliltian Dosen Harap Diisi">
						<span class="label-input100">Judul Penelitian Dosen</span><br><br>
						<select name="judul_penelitian">
                        <?php foreach ($id_penelitian as $row){ ?>
                        <option value="NULL"> </option>
        				<option value="<?php echo $row->id_penelitian;?>"><?php echo $row->judul_penelitian;?></option>
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
			</div>
		</div>
	</div>
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>
