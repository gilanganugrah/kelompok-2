<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	
				<form class="login100-form validate-form" method="post" action="input">
					<span class="login100-form-title p-b-59">
						Form Review Judul TA
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Id Review Harap Diisi">
						<span class="label-input100">Id Review</span>
						 <input class="input100" type="text" name="id_review">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Judul Peneliltian Dosen Harap Diisi">
						<span class="label-input100">Judul</span><br><br>
						<select name="judul_penelitian">
                        <?php foreach ($id_ta as $row){ ?>
                        <option value="NULL"> </option>
        				<option value="<?php echo $row->id_ta;?>"><?php echo $row->judul;?></option>
        				<?php }?>
        				</select>
						<span class="focus-input100"></span>
					</div>
                  

					<div class="wrap-input100 validate-input" data-validate>
						<span class="label-input100">Hasil Review</span><br>
						<textarea name="hasil_review" class="input100" placeholder="Deskripsi..."></textarea>
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Status</span><br>
                        <input class="input100" type="text" name="status" placeholder="Terima / Tidak">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Id TA</span><br>
						<select name="id_ta">
                        <option>	</option>
        				<?php foreach ($id_ta as $row): ?>
        				<option value="<?php echo $row->id_ta;?>"> <?php echo $row->id_ta ?></option>
        				<?php endforeach;?>
        				</select>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="btnTambah">
								Ok
							</button>
						</div>

				</form>
		
	
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>
