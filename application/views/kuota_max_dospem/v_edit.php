<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<form  class="login100-form validate-form" action="<?php echo base_url()?>kuota_dospem/update" method="post">
					<span class="login100-form-title p-b-59">
						JUMLAH MAX SETIAP DOSEN PEMBIMBING
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
                     <?php
        					echo '<select class="form-control" name="nama_prodi">';
            				foreach($nama_prodi as $rows)
         				   {
               				 if($rows->id==@$user[0]['id_prodi']){
                   			 echo '<option value="'.$rows->id.'" selected="selected">'.$rows->nama_prodi.'</option>';
               				 }else{
                    		echo '<option value="'.$rows->id.'">'.$rows->nama_prodi.'</option>';
              					  }
           						 }
           					 echo '</select>';
       				 ?>
       				<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Login</span>
                     <?php
        					echo '<select class="form-control" name="id_login">';
            				foreach($id_login as $rows)
         				   {
               				 if($rows->id==@$user[0]['id_login']){
                   			 echo '<option value="'.$rows->id.'" selected="selected">'.$rows->id_login.'</option>';
               				 }else{
                    		echo '<option value="'.$rows->id.'">'.$rows->id_login.'</option>';
              					  }
           						 }
           					 echo '</select>';
       				 ?>
       				<span class="focus-input100"></span>
					</div>
					
					
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Kuota</span><br><br>
                        <select name="kuota">
                        <option><font color="#FF3333"><?php echo @$user[0]['kuota']; ?></font></option>
                        <option>---</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        
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
								Simpan
							</button>
						</div>

						<a href="<?php echo base_url('kuota_dospem/update'); ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Batal
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
				</form>
			</div>
		</div>
	</div>
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>