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
						<span class="card-label font-weight-bolder text-dark">Data Alternatif / Tempat Wisata</span>
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
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 200px">Nama</th>
								<?php foreach ($KRITERIA as $key => $val) : ?>
									<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 100px"><?= $val->nama_kriteria ?></th>
								<?php endforeach ?>
								<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 130px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($data as $key => $val) : ?>
								<tr>
									<td class="text-center">
										<span class=" font-weight-bold d-block"><?= $no++ ?></span>
									</td>
									<td class="text-left">
										<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $kendaraan[$key]->nama_kendaraan ?></span>
									</td>
									<?php foreach ($val as $k => $v) : ?>
										<td class="text-center">
											<span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $v ?></span>
										</td>
									<?php endforeach ?>
									<td class="text-center">
										<a href="#" id="edit-modal" class="btn btn-icon btn-light btn-hover-success btn-sm mx-3" data-toggle="modal" data-target="#editModal<?= $key ?>">
											<span class="svg-icon svg-icon-md svg-icon-primary">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
														<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													</g>
												</svg>
											</span>
										</a>
									</td>
								</tr>
							<?php

							endforeach; ?>
						</tbody>
					</table>
					<!--end::Table-->
				</div>
				<!--end::Body-->
			</div>
		</div>
	</div>
</div>


<?php foreach ($data as $key => $val) :  ?>
	<div class="modal fade" id="editModal<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Nilai</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<form class="form" method="POST" action="<?= base_url('BobotAlternatif') ?>">
						<?php
						$kode_n = $kendaraan[$key]->kode_kendaraan;
						$rows = $this->db->query("SELECT ra.ID, k.kode_kriteria, k.nama_kriteria, ra.nilai, ra.kode_kendaraan FROM tb_rel_kendaraan ra INNER JOIN tb_kriteria k ON k.kode_kriteria=ra.kode_kriteria WHERE kode_kendaraan='$kode_n' ORDER BY kode_kriteria")->result();
						foreach ($rows as $row) : ?>
							<div class="form-group">
								<label>Bobot <?= $row->nama_kriteria ?></label>
								<input id="kt_touchspin_5" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="<?= $row->nilai ?>" name="nilai[<?= $row->ID ?>]" />
							</div>
						<?php
						endforeach; ?>
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