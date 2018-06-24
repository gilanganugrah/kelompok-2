<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="input">
                   <?php echo form_open_multipart('sempro/input');?>
					<span class="login100-form-title p-b-59">
						INPUT PENDAFTARAN PROPOSAL
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "TGL Harap Diisi">
						<span class="label-input100">Tanggal</span>
						<input class="input100" type="date" name="tanggal">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Waktu Harap Diisi">
						<span class="label-input100">Waktu</span>
						<input class="input100" type="time" name="waktu">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Tempat Harap Diisi">
						<span class="label-input100">Tempat</span>
						<input class="input100" type="text" name="tempat" placeholder="Tempat...">
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100 validate-input" data-validate = "Tempat Harap Diisi">
						<span class="label-input100">Upload File</span>
						<input class="input100" type="file" name="file">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Nama Harap Diisi">
						<span class="label-input100">NIM</span><br><br>
						<select name="nim">
                        <option>	</option>
        				<?php foreach ($nim as $row): ?>
        				<option value="<?php echo $row->nim;?>"> <?php echo $row->nim ?></option>
        				<?php endforeach;?>
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
							<button class="login100-form-btn" type="submit" value="upload" name="btnTambah">
								Daftar
							</button>
						</div>

				</form>
			</div>
		</div>
	</div>
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.js'?>"></script>
	<script type="text/javascript">
    $(document).ready(function(){
 
        $('#submit').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>sempro/input',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Berhasil.");
                   }
                 });
            });
         
 
    });
     
</script>