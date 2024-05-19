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
				<div class="card-header border-0 pt-10">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label font-weight-bolder text-dark">Hasil Penghitungan</span>
					</h3>
                    
					<div class="card-toolbar">
                        <div class="dropdown dropdown-inline mr-2">
							<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="la la-download"></i>Export</button>
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
						</div>
					</div>
				</div>

				<div class="card-body ">
                    <table class="table table-bordered table-vertical-center" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
							<tr class="text-uppercase text-white bg-primary">
								<th class="font-size-lg text-center" style="min-width: 100px" class="pl-7">
									<span class="text-white font-weight-bolder">Rank</span>
								</th>
								<th class="font-size-lg text-center" style="min-width: 200px" class="pl-7">
									<span class="text-white font-weight-bolder">Nama Tempat Wisata</span>
								</th>
								<th class="font-size-lg text-center text-white font-weight-bolder" style="min-width: 100px">Total</th>
							</tr>
						</thead>
						<tbody>
                        <?php
						// $mins = array();
						// foreach ($kriteria as $kode => $kriteria_val){
						// 	$d_aksen = array();
                        //     $temp = array();
                        //     foreach ($Si as $key => $val){
						// 		if ($kode != $key) 
						// 		{
						// 			$a = $val[0] - $Si[$kode][2];
						// 			$b = $Si[$kode][1] - $Si[$kode][2];
						// 			$c = $val[1] - $val[0];
						// 			$d = $b - $c;
						// 			$e = $a / $d;
						// 			$d_aksen[$key] = ($Si[$kode][1] >= $Si[$key][1]) ? 1 : (($Si[$key][0] >= $Si[$kode][2]) ? 0 : $e);
						// 			if ($d_aksen[$key] != 0)
						// 			{
						// 				$temp[] = $d_aksen[$key];
						// 			}
						// 		}
						// 	}
						// 	$mins[$kode] = min($temp);
						// }
						// include('function.php');
						// $total = get_total($data, $mins);
                        // // var_dump($total);
                        // arsort($total);
                        // $no = 1;
                        // foreach ($total as $key => $val) {
                        //     $this->db->query("UPDATE tb_kendaraan SET total='$val', rank='$no' WHERE kode_kendaraan='$key'");
                        //     $no++;
                        // }
                        $rows = $this->db->query("SELECT * FROM tb_kendaraan ORDER BY total DESC")->result();

                         foreach ($rows as $row) : ?>
                            <tr>
								<td class="text-center">
                                    <!-- <span hidden><?= $key ?></span> -->
                                    <span class=" font-weight-bold d-block"><?= $row->rank ?></span>
								</td>
                                <td class="text-center">
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $row->nama_kendaraan ?></span>
                                </td>
								</td>
                                <td class="text-center">
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= round($row->total, 3) ?></span>
                                </td>
							</tr>
                        <?php endforeach; ?>
                        </tbody>
					</table>
                    <div class="border-0 pt-10 text-center">
                        <h5 class="card-title flex-column">
                            <span class="card-label font-weight-bolder text-dark">Dapat Disimpulkan Bahwa <?= $rows[0]->nama_kendaraan ?> merupakan Tempat Wisata terbaik dengan nilai <?= round($rows[0]->total, 3) ?></span>
                        </h5>
                    </div>
				</div>
			</div>
        </div>
    </div>
</div>
