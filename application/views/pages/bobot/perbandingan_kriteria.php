<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" >
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
				<div class="card-header border-0 py-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label font-weight-bolder text-dark">Matriks Bobot Kriteria</span>
					</h3>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body py-0">
					<!--begin::Table-->
					<div class="table-responsive">
						<table class="table table-head-custom table-vertical-center">
							<thead>
								<tr class="text-center">
									<th class="pl-0" style="min-width: 100px">Nama Kriteria</th>
                                    <?php foreach ($kriteria as $key => $val) : ?>
                                        <th style="min-width: 110px"><?= $val->nama_kriteria ?></th>
                                     <?php endforeach ?>
								</tr>
							</thead>
							<tbody>
                            <?php foreach ($kriteria as $key => $val) : ?>
                                <tr class="text-center pt-5" >
                                    <td class="text-left">
                                        <span class=" font-weight-bold d-block"><?= $val->nama_kriteria ?></span>
                                    </td>
                                    <?php foreach ($ahp1['hasil'][$key] as $keys => $values) :  ?>
                                        <td>
                                            
                                            <span class=" font-weight-bold d-block"><?= $values ?></span>
                                        </td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>
                                <tr class="text-center pt-5 bg-success rounded">
                                    <td class="text-left">
                                        <span class="text-white font-weight-bolder d-block">Total</span>
                                    </td>
                                    <?php foreach ($ahp1['total_bawah'] as $keys => $values) : ?>
                                        <td>
                                            <span class="text-white font-weight-bolder d-block"><?= $values ?></span>
                                        </td>
                                    <?php endforeach ?>
                                </tr>
							</tbody>
						</table>
					</div>
					<!--end::Table-->
				</div>
				<!--end::Body-->
			</div>
			<div class="card card-custom gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0 py-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label font-weight-bolder text-dark">Normalisasi Kriteria</span>
					</h3>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body py-0">
					<!--begin::Table-->
					<div class="table-responsive">
						<table class="table table-head-custom table-vertical-center">
							<thead>
								<tr class="text-center">
									<th class="pl-0" style="min-width: 100px">Nama Kriteria</th>
                                    <?php foreach ($kriteria as $key => $val) : ?>
                                        <th style="min-width: 110px"><?= $val->nama_kriteria ?></th>
                                     <?php endforeach ?>
                                     <th style="min-width: 110px">Jumlah</th>
                                     <th style="min-width: 110px">Bobot Prioritas</th>
								</tr>
							</thead>
							<tbody>
                            <?php foreach ($kriteria as $key => $val) : ?>
                                <tr class="text-center pt-5" >
                                    <td class="text-left">
                                        <span class=" font-weight-bold d-block"><?= $val->nama_kriteria ?></span>
                                    </td>
                                    <?php foreach ($ahp2['hasil'][$key] as $keys => $values) : ?>
                                        <td>
                                            <span class=" font-weight-bold d-block"><?= $values ?></span>
                                        </td>
                                    <?php endforeach ?>
                                    <td>
                                        <span class=" font-weight-bold d-block"><?= $ahp2['jumlah'][$key] ?></span>
                                    </td>
                                    <td>
                                        <span class=" font-weight-bold d-block"><?= $ahp2['prioritas'][$key] ?></span>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                                <tr class="text-center pt-5 bg-danger">
                                    <td class="text-left">
                                        <span class="text-white font-weight-bolder d-block">Total</span>
                                    </td>
                                    <?php foreach ($ahp2['total'] as $keys => $values) : ?>
                                        <td>
                                            <span class="text-white font-weight-bolder d-block"><?= $values ?></span>
                                        </td>
                                    <?php endforeach ?>
                                    <td></td>
                                    <td></td>
                                </tr>
							</tbody>
						</table>
					</div>
					<!--end::Table-->
				</div>
				<!--end::Body-->
			</div>

			<!--end::Advance Table Widget 10-->
			<div class="card card-custom gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0 pt-10">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label font-weight-bolder text-dark">Uji Kompetensi</span>
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
										<a href="#" class="nav-link" >
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
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-bordered table-vertical-center" id="kt_datatable" style="margin-top: 13px !important">
                            <thead>
								<tr class="text-uppercase text-dark-75">
									<th class="font-size-lg text-center" style="min-width: 150px" class="pl-7">
										<span class="text-dark-75 font-weight-bold">Nama Kriteria</span>
									</th>
                                    <?php foreach ($kriteria as $key => $val) : ?>
                                            <th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 100px"><?= $val->nama_kriteria ?></th>
                                    <?php endforeach ?>
									<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 100px">Prioritas</th>
									<th class="font-size-lg text-center text-dark-75 font-weight-bolder" style="min-width: 100px">Vektor</th>
								</tr>
							</thead>
							<tbody>
                            <?php
                             foreach ($kriteria as $key => $value) : ?>
                                <tr>
									<td class="">
                                        <span hidden><?= $key ?></span>
                                        <span class=" font-weight-bold d-block"><?= $value->nama_kriteria ?></span>
									</td>
                                    <?php foreach ($ahp1['hasil'][$key] as $keys => $values) : ?>
                                        <td class="text-center">
                                            <span class="text-dark-75 d-block "><?= $values ?></span>
                                        </td>
                                    <?php endforeach ?>
                                    <td class="text-center">
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $ahp2['prioritas'][$key] ?></span>
                                    </td>
									</td>
                                    <td class="text-center">
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $ahp2['vector'][$key] ?></span>
                                        <input type="hidden" name="prioritas[]" value="<?= $ahp2['prioritas'][$key] ?>">
                                    </td>
								</tr>
                            <?php endforeach; ?>
                                <tr class="bg-primary">
                                    <td><span class=" font-weight-bolder text-white d-block">Total</span></td>
                                    <?php foreach ($ahp1['total_bawah'] as $key => $value) : ?>
                                        <td class="font-size-lg font-weight-bolder text-white text-center"><?= $value ?></td>
                                    <?php endforeach; ?>
                                    <td class="font-size-lg font-weight-bolder text-white text-center">Jumlah Rata Vektor</td>
                                    <td class="font-size-lg font-weight-bolder text-white text-center"><?= round( $ahp3['lamdamax'],4) ?></td>
                                </tr>
                            </tbody>
						</table>
                    </div>
					<!--end::Table-->
                </div>
            </div>
            <div class="card card-custom gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0 pt-10 ">
					<h3 class="card-title flex-column">
						<span class="card-label font-weight-bolder text-dark text-center">Hasil Bobot Kriteria</span>
						<!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span> -->
					</h3>
                </div>
                <div class="card-body">
                    <div class="col-lg-6 col-xl-12 ">
                        <div class="table-responsive">
                            <table class="table table-vertical-center" >
                                <thead class="bg-warning text-white">
                                    <tr class="text-left">
                                        <th class="text-white font-weight-bolder" style="width: 300px"></th>
                                        <th class="pr-0 text-white font-weight-bolder" style="width: 400px">Keterangan</th>
                                        <th class="text-white font-weight-bolder" style="min-width: 400px">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lamda Max </span>
                                        </td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"><?= round($ahp3['lamdamax'], 4) ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Consistency Index (CI) </span>
                                        </td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"><?= round($ahp3['ci'], 4) ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Consistency Ratio (CR) </span>
                                        </td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"><?= round($ahp3['cr'], 4) ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Status </span>
                                        </td>
                                        <td class="pl-5">
                                            <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                <?php if($ahp3['cr'] > 0.10) { ?>
                                                    <span class="font-weight-bolder text-danger mb-1 font-size-lg">Tidak konsisten </span>
                                                    <?php 
                                                } else { ?>
                                                    <span class="font-weight-bolder text-success mb-1 font-size-lg">Konsisten </span>
                                                    <?php 
                                                } ?>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
				<!--end::Body-->
			</div>
        </div>
    </div>
</div>
