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
			<!--begin::Advance Table Widget 1-->
			<div class="card card-custom gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0 pt-10">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label font-weight-bolder text-dark">Data Tempat Wisata</span>
						<!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span> -->
					</h3>

					<div class="card-toolbar">
						<div class="dropdown dropdown-inline mr-2">
							<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-download"></i>Export</button>
							<!--begin::Dropdown Menu-->
							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
								<ul class="nav flex-column nav-hover">
									<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2 pl-3">Pilih Opsi :</li>
									<li class="nav-item">
										<a href="#" class="nav-link" id="export_print">
											<i class="nav-icon la la-print"></i>
											<span class="nav-text">Print</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link" id="export_copy">
											<i class="nav-icon la la-copy"></i>
											<span class="nav-text">Copy</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link" id="export_excel">
											<i class="nav-icon la la-file-excel-o"></i>
											<span class="nav-text">Excel</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link" id="export_csv">
											<i class="nav-icon la la-file-text-o"></i>
											<span class="nav-text">CSV</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon la la-file-pdf-o"></i>
											<span class="nav-text">PDF</span>
										</a>
									</li>
								</ul>
							</div>
							<!--end::Dropdown Menu-->
						</div>
						<a href="#" class="btn btn-success font-weight-bolder font-size-sm" data-toggle="modal" data-target="#exampleModalCenter">
							<span class="svg-icon svg-icon-md svg-icon-white">
								<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Add-user.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>Tambah Tempat Wisata</a>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body ">
					<!--begin::Table-->
					<?php
					$message = $this->session->flashdata('message');
					if (!empty($message)) {
						echo '
                            <div class="alert alert-success text-center font-size-lg" role="alert">' . $message . '</div>';
					}
					?>
					<table class="table table-head-custom table-head-bg table-borderless table-vertical-center" id="kt_datatable" style="margin-top: 13px !important">
						<thead>
							<tr class="text-uppercase text-dark-75">
								<th class="font-size-lg text-center" style="min-width: 50px" class="pl-7">
									<span class="text-dark-75">No</span>
								</th>
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 100px">Nama</th>
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 80px">Rating</th>
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 130px">Gambar</th>
								<!-- <th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 100px">Contact Person</th> -->
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 130px">Alamat</th>
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 130px">Jam Operasi</th>
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 80px">Deskripsi Tempat</th>
								<!-- <th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 110px">Ulasan</th> -->
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 100px">Harga Tiket</th>
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 130px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($data as $row) : ?>
								<tr>
									<td class="text-center">
										<span class=" font-weight-bold d-block"><?= $no++ ?></span>
									</td>
									<td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->nama_kendaraan ?></span>
									</td>
									<td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->rating ?></span>
									</td>
									<td class="text-center">
										<img src="<?= base_url('uploads/kendaraan/' . $row->foto) ?>" style="width: 200px;" alt="" srcset="">
									</td>
									<!-- <td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->contact ?></span>
									</td> -->
									<td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->alamat ?></span>
									</td>
									<td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->jam_operasi ?></span>
									</td>
									<td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->deskripsi_tempat ?></span>
									</td>
									<!-- <td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->kepopuleran ?></span>
									</td> -->
									<td class="text-center">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->rasio_harga ?></span>
									</td>
									<td class="text-center">
										<a href="#" id="edit-modal" class="btn btn-icon btn-light btn-hover-success btn-sm mx-3" data-toggle="modal" data-target="#editModal<?= $row->kode_kendaraan ?>">
											<span class="svg-icon svg-icon-md svg-icon-primary">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Write.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
														<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										<a href="<?php echo site_url('Kendaraan/delete/' . $row->kode_kendaraan) ?>" onclick="return confirm('Hapus data?')" class="btn btn-icon btn-light btn-hover-danger btn-sm">
											<span class="svg-icon svg-icon-md svg-icon-primary">

												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
														<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>

											</span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<!--end::Table-->
				</div>
				<!--end::Body-->
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Tempat Wisata</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('Kendaraan'); ?>

				<!-- <div class="form-group">
                        <label>Kode User :</label>
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Kode User" name="kode_kendaraan" />
                    </div> -->
				<?= form_error('kode_kendaraan', '<div class="alert alert-danger">', '</div>'); ?>
				<div class="form-group">
					<label>Nama Tempat Wisata :</label>
					<input type="text" class="form-control form-control-solid" placeholder="Enter Full Name" name="nama_kendaraan" />
				</div>
				<div class="form-group">
					<label>Rating :</label>
					<input type="text" class="form-control form-control-solid" placeholder="Beri Nilai Rating" name="rating" />
				</div>
				<?= form_error('nama_kendaraan', '<div class="alert alert-danger">', '</div>'); ?>
				<div class="form-group">
					<label>Foto</label>
					<input type="file" class="form-control form-control-solid" name="foto" />
				</div>
				<div class="form-group">
					<label>Alamat :</label>
					<input type="text" class="form-control form-control-solid" placeholder="Alamat" name="alamat" />
				</div>
				<div class="form-group">
					<label>Jam Operasi :</label>
					<input type="text" class="form-control form-control-solid" placeholder="Jam Operasi" name="jam_operasi" />
				</div>
				<div class="form-group">
					<label>Deskripsi Tempat :</label>
					<input type="text" class="form-control form-control-solid" placeholder="Deskripsi" name="deskripsi_tempat" />
				</div>
				<div class="form-group">
					<label>Contact Person :</label>
					<input type="text" class="form-control form-control-solid" placeholder="CP" name="contact" />
				</div>
				<div class="form-group">
					<label>Jumlah Ulasan :</label>
					<input type="text" class="form-control form-control-solid" placeholder="Jumlah Ulasan" name="kepopuleran" />
				</div>
				<div class="form-group">
					<label>Harga Tiket:</label>
					<input type="text" class="form-control form-control-solid" placeholder="Rasio Harga" name="rasio_harga" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary font-weight-bold">Tambah</button>
			</div>
			</form>
		</div>
	</div>
</div>

<?php foreach ($data as $row) : ?>
	<div class="modal fade" id="editModal<?= $row->kode_kendaraan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Tempat Wisata <?= $row->nama_kendaraan ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('Kendaraan/edit'); ?>
					<h5>Isi semua data dengan benar!</h5>
					<div class="form-group">
						<!-- <label>Kode User :</label> -->
						<input type="hidden" value="<?= $row->kode_kendaraan ?>" name="kode_kendaraan" />
					</div>
					<?= form_error('kode_kendaraan', '<div class="alert alert-danger">', '</div>'); ?>
						<div class="form-group">
						<label>Nama Tempat Wisata :</label>
						<input type="text" class="form-control form-control-solid" placeholder="Enter Full Name" value="<?= $row->nama_kendaraan ?>" name="nama_kendaraan" />
					</div>
					<?= form_error('nama_kendaraan', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Rating :</label>
						<input type="text" class="form-control form-control-solid" placeholder="Beri Rating" name="rating" value="<?= $row->rating ?>" />
					</div>
					<?= form_error('kode_kendaraan', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Gambar :</label> <br>
						<img src="<?= base_url('uploads/kendaraan/' . $row->foto) ?>" style="width: 200px; height=300px";></br>
						<input type="file" class="form-control form-control-solid" name="foto" value="<?= $row->foto ?>"/>
					</div>
					<?= form_error('foto', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Alamat :</label>
						<input type="text" class="form-control form-control-solid" placeholder="Alamat" name="alamat" value="<?= $row->alamat ?>" />
					</div>
					<?= form_error('alamat', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Jam Operasi :</label>
						<input type="text" class="form-control form-control-solid" placeholder="Jam Operasi" name="jam_operasi" value="<?= $row->jam_operasi ?>" />
					</div>
					<?= form_error('contact', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Deskripsi Tempat :</label>
						<input type="text" class="form-control form-control-solid" placeholder="Deskripsi Tempat" name="deskripsi_tempat" value="<?= $row->deskripsi_tempat ?>" />
					</div>
					<?= form_error('contact', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Contact Person :</label>
						<input type="text" class="form-control form-control-solid" placeholder="Enter CP" name="contact" value="<?= $row->contact ?>" />
					</div>
					<?= form_error('contact', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Kepopuleran:</label>
						<input type="text" class="form-control form-control-solid" placeholder="Banyak Ulasan" name="kepopuleran" value="<?= $row->kepopuleran ?>" />
					</div>
					<?= form_error('kepopuleran', '<div class="alert alert-danger">', '</div>'); ?>
					<div class="form-group">
						<label>Harga Tiket:</label>
						<input type="text" class="form-control form-control-solid" placeholder="Harga Tiket" name="rasio_harga" value="<?= $row->rasio_harga ?>" />
					</div>
					<?= form_error('rasio_harga', '<div class="alert alert-danger">', '</div>'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary font-weight-bold">Ubah</button>
				</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>