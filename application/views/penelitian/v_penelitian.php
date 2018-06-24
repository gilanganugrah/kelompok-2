<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/logo polije.png"/>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>	

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="input">
					<span class="login100-form-title p-b-59">
						INPUT JUDUL PENELITIAN DOSEN
					</span>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Judul Penelitian</span>
						<input class="input100" type="text" name="judul_penelitian" placeholder="Judul...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Kuota Mahasiswa</span><br><br>
						<select name="kuota">
                        <option>	</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                  </select>     
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Nama Dosen</span><br><br>
						<select name="nip">
                        <option> </option>
        				<?php foreach ($nip as $row){ ?>
        				<option value="<?php echo $row->nip;?>"> <?php echo $row->nip;?></option>
        				<?php }?>
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
								SUBMIT
							</button>
						</div>

				</form>

</body>
</html>