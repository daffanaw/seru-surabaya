<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.css" integrity="sha512-g4B+TyvVE4aa0Y1SgjMHnT/4M4IRl8jnG3Ha9ebg8VhLyrfaAqL5AHDh7zo0/ZdES57Y1E7wvWwsDzX806b1Gw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.css" integrity="sha512-0GlDFjxPsBIRh0ZGa2IMkNT54XGNaGqeJQLtMAw6EMEDQJ0WqpnU6COVA91cUS0CeVA5HtfBfzS9rlJR3bPMyw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				
				<!--end::Heading-->
			</div>
			<!--end::Info-->
			
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-8">
					<!--begin::Advance Table Widget 1-->
					<div class="card card-custom gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-10">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">Update Profile</span>
							</h3>
						</div>
						<div class="card-body">
						<?php 
								$message = $this->session->flashdata('message');
								if (!empty($message)) {
									echo '
									<div class="alert alert-success text-center font-size-lg" role="alert">' . $message . '</div>';
								}
								?>
							<form class="form" method="POST" action="<?= base_url('UpdateProfile') ?>">
								<!-- <div class="form-group">
									<label>Kode User :</label>
									<input type="text" class="form-control form-control-solid" placeholder="Enter Kode User" name="kode_kendaraan" />
								</div> -->
								<input type="hidden" value="<?= $data->kode_kendaraan ?>" name="kode_kendaraan" />
		
								<div class="form-group row mb-10">
									<label class="col-lg-2 col-form-label text-lg-right">Nama Lengkap :</label>
									<div class="col-lg-3">
										<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_kendaraan" value="<?= $data->nama_kendaraan ?>" />
										<?= form_error('nama_nasanah', '<div class="alert alert-danger mt-4">', '</div>'); ?>
									</div>
									<label class="col-lg-2 col-form-label text-lg-right">Alamat :</label>
									<div class="col-lg-3">
										<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $data->alamat ?>" />
										<?= form_error('alamat', '<div class="alert alert-danger mt-4">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row mb-10">
									<label class="col-lg-2 col-form-label text-lg-right">Tanggal Lahir</label>
									<div class="col-lg-3">
										<input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?= $data->tgl_lahir ?>" />
										<?= form_error('tgl_lahir', '<div class="alert alert-danger mt-4">', '</div>'); ?>
									</div>
									<label class="col-lg-2 col-form-label text-lg-right">Janis Kelamin :</label>
									<div class="col-lg-3">
										<div class="col-9 col-form-label">
											<div class="radio-inline">
												<label class="radio radio-success">
													<input type="radio" name="jenis_kelamin" value="laki" <?= $data->jenis_kelamin == 'laki' ? 'checked' : '' ?> />
												<span></span>Laki - Laki</label>
												<label class="radio radio-success">
													<input type="radio" name="jenis_kelamin" <?= $data->jenis_kelamin == 'perempuan' ? 'checked' : '' ?> value="perempuan" />
												<span></span>Perempuan</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row mb-10">
									<label class="col-lg-2 col-form-label text-lg-right">Pekerjaan:</label>
									<div class="col-lg-3">
										<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?= $data->pekerjaan ?>" />
										<?= form_error('pekerjaan', '<div class="alert alert-danger mt-4">', '</div>'); ?>
									</div>
									<label class="col-lg-2 col-form-label text-lg-right">Username :</label>
									<div class="col-lg-3">
										<input type="text" class="form-control" placeholder="Username" name="user" value="<?= $data->user ?>" />
										<?= form_error('user', '<div class="alert alert-danger mt-4">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row mb-10">
									<label class="col-lg-2 col-form-label text-lg-right">Password :</label>
									<div class="col-lg-3">
										<input type="password" class="form-control" placeholder="Password" name="pass" />
										<?= form_error('pass', '<div class="alert alert-danger mt-4">', '</div>'); ?>
									</div>
									<label class="col-lg-2 col-form-label text-lg-right">Confirm Password:</label>
									<div class="col-lg-3">
										<input type="password" class="form-control" placeholder="Confirm Password" name="pass2" />
									</div>
									<?= form_error('pass2', '<div class="alert alert-danger mt-4" style="margin:auto;">', '</div>'); ?>
								</div>
								<div class="text-center mt-20">
									<button type="reset" class="btn btn-warning font-weight-bold mr-5">Reset</button>
									<button type="submit" class="btn btn-success font-weight-bold">Update Profile</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card card-custom gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-10">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">Update Data Kendaraan</span>
							</h3>
						</div>
						<div class="card-body">
						<?php 
								$messages = $this->session->flashdata('messages');
								if (!empty($messages)) {
									echo '
									<div class="alert alert-success text-center font-size-lg" role="alert">' . $messages . '</div>';
								}
								?>
								<div class="mb-10 text-center">
									<a href="<?= base_url('UpdateProfile/download_file') ?>" class="font-bold">Download Format Berkas</a>
								</div>
								<?php
									echo form_open_multipart('UpdateProfile/uploadBerkas');
									?>
									<input type="hidden" name="id_berkas" value="<?= $cekKendaraan->id_berkas ?>">
								<div class="form-group">
									<h6 class="mb-5">Upload Berkas</h6>
									<input type="file" name="file" id="">
								</div>
								<?php if (!empty($cekKendaraan)) { ?>
									<?php if ($cekKendaraan->status == 1) { ?>
										<p class="text-success text-center">Berkas Anda Sedang DIproses</p>
									<?php } elseif($cekKendaraan->status == 2) {?>
										<p class="text-success text-center">Berkas Anda Telah Disetujui</p>
									<?php } else { ?>
										<p class="text-danger text-center">Berkas Anda Ditolak</p>
									<?php } ?>
								<?php } ?>
								<div class="text-center mt-10">
									<button type="submit" class="btn btn-success font-weight-bold">Upload Data</button>
								</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.js" integrity="sha512-0hFHNPMD0WpvGGNbOaTXP0pTO9NkUeVSqW5uFG2f5F9nKyDuHE3T4xnfKhAhnAZWZIO/gBLacwVvxxq0HuZNqw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.js" integrity="sha512-k59zBVzm+v8h8BmbntzgQeJbRVBK6AL1doDblD1pSZ50rwUwQmC/qMLZ92/8PcbHWpWYeFaf9hCICWXaiMYVRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script>
	$( ".kt_touchspin_2_5" ).TouchSpin({
    min: 1,
    max: 5,
    mousewheel: true,
    stepinterval: 50,
    verticalbuttons: true,
    verticalupclass: 'glyphicon glyphicon-plus',
    verticaldownclass: 'glyphicon glyphicon-minus'
});
</script>