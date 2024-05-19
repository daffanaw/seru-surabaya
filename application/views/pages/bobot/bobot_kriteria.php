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
            <!--begin::Advance Table Widget 10-->
			<div class="card card-custom gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0 pt-10">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label font-weight-bolder text-dark">Bobot Kriteria</span>
					</h3>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body py-0">
                    <?php 
                        $message = $this->session->flashdata('message');
                        $error = $this->session->flashdata('error');
                        if (!empty($message)) {
                            echo '
                            <div class="alert alert-success text-center font-size-lg" role="alert">' . $message . '</div>';
                        } elseif (!empty($error)) {
                            echo '
                            <div class="alert alert-danger text-center font-size-lg" role="alert">' . $error . '</div>';
                        }
                        ?>
					<!--begin::Table-->
					<div class="table-responsive">
						<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
							<thead>
								<tr class="text-center">
									<th class="pl-0" style="min-width: 110px">Kriteria 1</th>
									<th style="min-width: 310px">Nilai</th>
									<th style="min-width: 110px">Kriteria 2</th>
								</tr>
							</thead>
							<tbody>
								<form action="<?= base_url('BobotKriteria/ins_nilai_kriteria') ?>" method="POST">
                                    <?php foreach($kriteria_option as $key => $value) : ?>
                                        <?php foreach($kriteria_option as $keys => $values) : ?>
                                            <?php if($key < $keys){ ?>
                                                <tr class="text-center">
                                                    <td class="text-center">
                                                        <input type="text" class="form-control form-control-solid" readonly value="<?= $value->nama_kriteria ?>" />
                                                        <input type="hidden" name="ID1[<?= $key ?>][<?= $keys ?>]" value="<?= $value->kode_kriteria ?>"></input>
                                                    </td>
                                                    <td class="text-center">
                                                        <div>
                                                            <?php $cek = $this->db->query('select * from tb_rel_kriteria where ID1 = ? and ID2 = ?',array($value->kode_kriteria, $values->kode_kriteria))->row(); ?>
                                                            <select class="form-control" name="nilai[<?= $key ?>][<?= $keys ?>]">
                                                                <?php foreach($nilai as $key_nilai => $row) : ?>
                                                                    <option value="<?= $key_nilai ?>" <?= $key_nilai == $cek->nilai ? 'selected':'' ?>><?= $key_nilai ?> - <?= $row ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="text" class="form-control form-control-solid" readonly value="<?= $values->nama_kriteria ?>" />
                                                        <input type="hidden" name="ID2[<?= $key ?>][<?= $keys ?>]" value="<?= $values->kode_kriteria ?>"></input>
                                                    </td>
                                                </tr>
                                            <?php }; ?>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
									<td></td>
									<td class="text-center">
                                        <button type="submit" class="btn btn-info font-weight-bolder font-size-sm">Submit</button>
                                    </td>
                                </form>
                                <!-- <form action="<?= base_url('BobotKriteria') ?>" method="POST">
                                    <tr class="text-center">
                                        <td class="text-center">
                                            <select class="form-control" name="ID1">
                                                <?php foreach ($kriteria_option as $row): ?>
                                                    <option value='<?= $row->kode_kriteria?>' ><?= $row->nama_kriteria ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <div>
                                            <select class="form-control" style="width: 100%; height:36px;" name="nilai">
                                                <?php foreach ($nilai as $key => $value): ?>
                                                    <option value='<?= $key ?>'><?= $key?> - <?= $value ?></option>
                                                <?php endforeach; ?>                                  
                                            </select>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control" style="width: 100%; height:36px;" name="ID2">
                                                <?php foreach ($kriteria_option as $row): ?>
                                                    <option value='<?= $row->kode_kriteria?>' ><?= $row->nama_kriteria ?></option>
                                                <?php endforeach; ?>                                  
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" class="btn btn-info font-weight-bolder font-size-sm">Submit</button>
                                        </td>
                                    </tr>
                                </form> -->
							</tbody>
						</table>
					</div>
					<!--end::Table-->
				</div>
				<!--end::Body-->
			</div>
        </div>
    </div>
</div>
