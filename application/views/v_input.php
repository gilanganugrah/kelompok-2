<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><center><h1>Deadline Tanggal Penginputan Judul TA</h1></center></strong>
                        </div>
                        <div class="card-body">
							<strong class="card-title"><center><h3>Tambah Data Baru</h3></center></strong>
						</div>
							<form action="<?php echo base_url(). 'tgl_judul/tambah_aksi'; ?>" method="post">
						<div class="card-body">
						<center>
                            <table class="table">
							<table style="margin:15px auto;">
                              <thead class="thead-dark">
				<tr>
					<td>ID</td>
					<td><input type="text" name="id_jadwal"></td>
				</tr>
				<tr>
					<td>Nama Jadwal</td>
					<td><input type="text" name="nm_jadwal"></td>
				</tr>
				<tr>
					<td>Penginputan Judul</td>
					<td><input type="text" name="tgl_input"></td>
				</tr>
				<tr>
					<td>Batas Penginputan Judul</td>
					<td><input type="text" name="tgl_batas"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Tambah"></td>
				</tr>
				
			</table>
			</center>
			</form>	
                        </div>
                    </div>
                </div>
