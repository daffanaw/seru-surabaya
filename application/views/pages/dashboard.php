<script src="templates/assets/chart.js"></script>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Heading-->
				<div class="d-flex flex-column">
					<!--begin::Title-->
					<h2 class="text-white font-weight-bold my-2 mr-5">SPK Rekomendasi Tempat Wisata Surabaya</h2>
					<!--end::Title-->
				</div>
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
			<!--begin::Dashboard-->

			<!--begin::Row-->
			<div class="row">
				<div class="col-xl-12">
					<!--begin::Charts Widget 6-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header h-auto border-0">
							<div class="card-title py-5">
								<h3 class="card-label">
									<span class="d-block text-dark font-weight-bolder">Peringkat SPK FAHP</span>
									<!-- <span class="d-block text-muted mt-2 font-size-sm">More than 500+ new orders</span> -->
								</h3>
							</div>
							<div class="card-toolbar">
								<span class="mr-5 d-flex align-items-center font-weight-bold">
									<i class="label label-dot label-xl label-primary mr-2"></i>Tempat Wisata</span>
								<!-- <span class="d-flex align-items-center font-weight-bold">
								<i class="label label-dot label-xl label-info mr-2"></i>Authors</span> -->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex flex-column">
									<!--begin::Block-->
									<div class="bg-light-warning p-8 rounded-xl flex-grow-1">
										<!--begin::Item-->
										<?php foreach ($data as $value) { ?>
											<?php
											$rand = rand(1, 4); ?>
											<div class="d-flex align-items-center mb-5">
												<div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
													<div class="symbol-label">
														<span class="svg-icon svg-icon-md svg-icon-<?php if ($rand == 1) {
																										echo 'danger';
																									}
																									if ($rand == 2) {
																										echo 'primary';
																									}
																									if ($rand == 3) {
																										echo 'success';
																									}
																									if ($rand == 4) {
																										echo 'warning';
																									}  ?>">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Shopping/Cart3.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
												</div>
												<div>
													<div class="font-size-sm font-weight-bold"><?= round($value->total, 4) ?></div>
													<div class="font-size-sm text-muted font-weight-bold"><?= $value->nama_kendaraan ?></div>
												</div>
											</div>
										<?php } ?>
										<!--end::Item-->

									</div>
									<!--end::Block-->
								</div>
								<div class="col-8">
									<canvas id="myChart"></canvas>
								</div>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Charts Widget 6-->
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<!--begin::Charts Widget 8-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header h-auto border-0">
							<div class="card-title py-5">
								<h3 class="card-label">
									<span class="d-block text-dark font-weight-bolder">Prioritas Kriteria</span>
									<!-- <span class="d-block text-muted mt-2 font-size-sm">More than 500+ new orders</span> -->
								</h3>
							</div>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<div class="row">
								<div class="col-8">
									<canvas id="myChart2"></canvas>
								</div>
								
									<!-- <a href="#" class="mt-5 btn btn-block text-center btn-primary font-weight-bold">Generate Report</a> -->
								</div>
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Charts Widget 8-->
				</div>
			</div>

		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>

<script>
	var ctx2 = document.getElementById("myChart2").getContext('2d');
	var myChart2 = new Chart(ctx2, {
		type: 'bar',
		data: {
			labels: [<?php foreach ($kriteria as $row2) {
							echo "'" . $row2->nama_kriteria . "',";
						} ?>],
			datasets: [{
				label: 'Nilai',
				data: [<?php foreach ($ahp2['prioritas'] as $row2) {
							echo "'" . round($row2, 4) . "',";
						} ?>],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
				],
				borderWidth: 1,
				borderRadius: 4,
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});

	var ctx1 = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: [<?php foreach ($data as $row) {
							echo "'" . $row->nama_kendaraan . "',";
						} ?>],
			datasets: [{
				label: 'Nilai',
				data: [<?php foreach ($data as $row3) {
							echo "'" . round($row3->total, 4) . "',";
						} ?>],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
				],
				borderWidth: 1,
				borderRadius: 4,
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>