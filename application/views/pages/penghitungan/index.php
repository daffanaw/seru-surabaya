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
            <div class="card card-custom gutter-b" data-card="true">
                <!--begin::Header-->
                <div class="card-header border-0 pt-10">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Matriks Bobot Kriteria</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                    </div>
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
                                    <tr class="text-center pt-5">
                                        <td class="text-left">
                                            <span class=" font-weight-bold d-block"><?= $val->nama_kriteria ?></span>
                                        </td>
                                        <?php foreach ($ahp1['hasil'][$key] as $keys => $values) : ?>
                                            <td>
                                                <span class=" font-weight-bold d-block"><?= $values ?></span>
                                            </td>
                                        <?php endforeach ?>
                                    </tr>
                                <?php endforeach ?>
                                <tr class="text-center pt-5 bg-danger rounded">
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
            <div class="card card-custom gutter-b" data-card="true">
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Matriks Perbandingan Kriteria Fuzzy AHP</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body pb-10 pt-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table  table-bordered table-vertical-center">
                            <thead class="bg-danger text-white font-weight-bold">
                                <tr>
                                    <th class="font-weight-bold" style="width: 150px">Kriteria</th>
                                    <?php foreach ($kriteria as $key => $value) : ?>
                                        <th class="font-weight-bold text-center" colspan="3"><?= $value->nama_kriteria ?></th>
                                    <?php endforeach ?>
                                    <th class="font-weight-bold text-center" colspan="3">Jumlah Baris</th>
                                </tr>
                            </thead>
                            <tbody class="border border-primary">
                                <tr class="text-center">
                                    <td></td>
                                    <?php foreach ($matriks_fahp as $key => $value) : ?>
                                        <th class="font-weight-bold">L</th>
                                        <th class="font-weight-bold">M</th>
                                        <th class="font-weight-bold">U</th>
                                    <?php endforeach ?>
                                    <th class="font-weight-bold">L</th>
                                    <th class="font-weight-bold">M</th>
                                    <th class="font-weight-bold">U</th>
                                </tr>
                                <?php
                                //menampilkan matriks_fahp dalam bentuk tabel 
                                foreach ($matriks_fahp as $key => $value) : ?>
                                    <tr class="text-center">
                                        <th class="font-weight-bold text-left"><?= $kriteria[$key]->nama_kriteria ?></th>
                                        <?php foreach ($value as $k => $v) :
                                            $class = ($key == $k) ? 'bg-danger text-white' : '';
                                        ?>
                                            <td class="<?= $class ?>"><?= round($v[0], 2) ?></td>
                                            <td class="<?= $class ?>"><?= round($v[1], 2) ?></td>
                                            <td class="<?= $class ?>"><?= round($v[2], 2) ?></td>
                                        <?php endforeach ?>
                                        <td><?= round($lmu[$key][0], 2) ?>
                                        <td><?= round($lmu[$key][1], 2) ?>
                                        <td><?= round($lmu[$key][2], 2) ?>
                                    </tr>
                                <?php endforeach ?>
                                <tr class="text-center font-weight-bolder">
                                    <td colspan="<?= count($kriteria) * 3 + 1 ?>">Total [L, M, U]</td>
                                    <td><?= round($total_lmu[0], 2) ?>
                                    <td><?= round($total_lmu[1], 2) ?>
                                    <td><?= round($total_lmu[2], 2) ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>

            <div class="card card-custom gutter-b" data-card="true">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Matriks Nilai Sintetis</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-10">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-bordered table-vertical-center">
                            <thead class="font-weight-bold">
                                <tr class="bg-danger text-white text-center">
                                    <th class="font-weight-bold">Nama Kriteria</th>
                                    <th colspan="3"><b>Jumlah Baris</b> </th>
                                    <th colspan="3"><b>Nilai Sintesis</b> </th>
                                </tr>
                                <tr class="text-center">
                                    <th></th>
                                    <td>L</td>
                                    <td>M</td>
                                    <td>U</td>
                                    <td>L</td>
                                    <td>M</td>
                                    <td>U</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lmu as $key => $val) : ?>
                                    <tr class="text-center">
                                        <th class="text-left"><b><?= $kriteria[$key]->nama_kriteria ?></b> </th>
                                        <td><?= round($val[0], 3) ?></td>
                                        <td><?= round($val[1], 3) ?></td>
                                        <td><?= round($val[2], 3) ?></td>
                                        <td><?= round($Si[$key][0], 3) ?></td>
                                        <td><?= round($Si[$key][1], 3) ?></td>
                                        <td><?= round($Si[$key][2], 3) ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <div class="card card-custom gutter-b" data-card="true">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Penentuan Nilai Vektor (V) dan Nilai Ordinat Defuzzifikasi (D)</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-10">
                    <!--begin::Table-->
                    <?php
                    $mins = array();
                    foreach ($kriteria as $kode => $kriteria_val) : ?>
                        <hr>
                        <h5 class="card-title text-center flex-column font-weight-bolder mt-10"><?= $kriteria_val->nama_kriteria ?></h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-vertical-center">
                                <thead class="font-weight-bold bg-success">
                                    <tr class="text-center">
                                        <th></th>
                                        <!-- <th class="font-weight-bolder">a = l-u<?= $kode ?></th>
                                    <th class="font-weight-bolder">b = m<?= $kode ?>-u<?= $kode ?></th>
                                    <th class="font-weight-bolder">c = m-l</th>
                                    <th class="font-weight-bolder">d = b-c</th>
                                    <th class="font-weight-bolder">e = a/d</th> -->
                                        <th class="font-weight-bolder">d'</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $d_aksen = array();
                                    $temp = array();
                                    foreach ($Si as $key => $val) : ?>
                                        <?php if ($kode != $key) :
                                            $a = $val[0] - $Si[$kode][2];
                                            $b = $Si[$kode][1] - $Si[$kode][2];
                                            $c = $val[1] - $val[0];
                                            $d = $b - $c;
                                            $e = $a / $d;
                                            $d_aksen[$key] = ($Si[$kode][1] >= $Si[$key][1]) ? 1 : (($Si[$key][0] >= $Si[$kode][2]) ? 0 : $e);
                                            // if ($d_aksen[$key] != 0)
                                            $temp[] = $d_aksen[$key];
                                        ?>
                                            <tr class="text-center">
                                                <td class="font-weight-bold"><?= $kode . '&gt;' . $key ?></td>
                                                <!-- <td><?= round($a, 4) ?></td>
                                        <td><?= round($b, 4) ?></td>
                                        <td><?= round($c, 4) ?></td>
                                        <td><?= round($d, 4) ?></td>
                                        <td><?= round($e, 4) ?></td> -->
                                                <td><?= round($d_aksen[$key], 3) ?></td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>

                                    <?php $mins[$kode] = min($temp); ?>
                                    <tr class="text-center bg-success">
                                        <td class="font-weight-bolder">MIN</td>
                                        <td class="font-weight-bolder"><?= round($mins[$kode], 3) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <h6 class="mb-10 ml-10 mt-5">MIN : <?= round($mins[$kode], 3) ?></h6> -->
                        </div>
                    <?php endforeach ?>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 10-->
            <div class="card card-custom gutter-b" data-card="true">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Normalisasi Bobot Vektor (W)</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table  table-vertical-center">
                            <thead class="bg-danger">
                                <tr class="text-center text-white">
                                    <th class="pl-0" style="min-width: 100px">Nama Kriteria</th>
                                    <th class="pl-0" style="min-width: 100px">W</th>
                                    <th class="pl-0" style="min-width: 100px">W Lokal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sum = array_sum($mins);
                                foreach ($mins as $key => $val) : ?>
                                    <tr class="text-center pt-5">
                                        <td class="text-left">
                                            <span class=" font-weight-bold d-block"><?= $kriteria[$key]->nama_kriteria ?></span>
                                        </td>
                                        <td>
                                            <span class=" font-weight-bold d-block"><?= round($val, 3) ?></span>
                                        </td>
                                        <td>
                                            <span class=" font-weight-bold d-block"><?= round($val / $sum, 3) ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <div class="card card-custom gutter-b" data-card="true">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Hasil Pembobotan</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-vertical-center">
                            <thead>
                                <tr class="text-center">
                                    <th class="pl-0" style="min-width: 100px">Nama Tempat Wisata</th>
                                    <?php foreach ($kriteria as $key => $val) : ?>
                                        <th style="min-width: 110px"><?= $val->nama_kriteria ?></th>
                                    <?php endforeach ?>
                                    <th class="pl-0" style="min-width: 100px">Total</th>
                                </tr>
                                <tr class="text-center">
                                    <th></th>
                                    <?php
                                    foreach ($mins as $key => $val) : ?>
                                        <th class="pl-0 font-weight-bolder" style="min-width: 100px"><?= round($val / $sum, 3) ?></th>
                                    <?php endforeach ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('function.php');
                                $total = get_total($data, $mins);
                                foreach ($data as $key => $val) : ?>
                                    <tr class="text-center pt-5">
                                        <td class="text-left">
                                            <span class=" font-weight-bold d-block"><?= $kendaraan[$key]->nama_kendaraan ?></span>
                                        </td>
                                        <?php
                                        foreach ($val as $k => $v) : ?>
                                            <td>
                                                <span class=" font-weight-bold d-block"><?= $v ?></span>
                                            </td>
                                        <?php endforeach ?>
                                        <td class=" font-weight-bolder d-block"><?= round($total[$key], 4) ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
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
                                        <a href="#" class="nav-link">
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
                            <tr class="text-uppercase text-white bg-danger">
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
                            <th>
                            <?php
                            // var_dump($total);
                            arsort($total);
                            $no = 1;
                            foreach ($total as $key => $val) {
                                $this->db->query("UPDATE tb_kendaraan SET total='$val', rank='$no' WHERE kode_kendaraan='$key'");
                                $no++;
                            }
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
                            </th>
                        </tbody>
                    </table>
                </div>


            </div>

            <div class="card card-custom gutter-b">
                <div class="card-header border-0 pt-10">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Hasil Penghitungan</span>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-vertical-center" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr class="text-uppercase text-white bg-danger">
                                <th class="font-size-lg text-center" style="min-width: 100px" class="pl-7">
                                    <span class="text-white font-weight-bolder">Rank</span>
                                </th>
                                <th class="font-size-lg text-center" style="min-width: 200px" class="pl-7">
                                    <span class="text-white font-weight-bolder">Nama Tempat Wisata</span>
                                </th>
                                <th class="font-size-lg text-center" style="min-width: 200px" class="pl-7">
                                    <span class="text-white font-weight-bolder">Image</span>
                                </th>
                                <th class="font-size-lg text-center text-white font-weight-bolder" style="min-width: 100px">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php


                            $rel_alternatif = $this->db->select('*')->from('tb_rel_kendaraan')->where('kode_kendaraan', $rows[0]->kode_kendaraan)->join('tb_kriteria', 'tb_kriteria.kode_kriteria = tb_rel_kendaraan.kode_kriteria')->get()->result();

                            ?>
                            <tr>
                                <td class="text-center">
                                    <!-- <span hidden><?= $key ?></span> -->
                                    <span class=" font-weight-bold d-block"><?= $rows[0]->rank ?></span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $rows[0]->nama_kendaraan ?></span>
                                </td>
                                <td class="text-center">
                                    <img style="width: 300px;" src="<?php echo base_url(); ?>uploads/kendaraan/<?= $rows[0]->foto ?>" alt="">
                                </td>
                                <td class="text-center">
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= round($rows[0]->total, 3) ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-vertical-center" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr class="text-uppercase text-white bg-danger">
                                <th class="font-size-lg text-center" style="min-width: 100px" class="pl-7">
                                    <span class="text-white font-weight-bolder">Kriteria</span>
                                </th>
                                <th class="font-size-lg text-center" style="min-width: 200px" class="pl-7">
                                    <span class="text-white font-weight-bolder">Value</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rel_alternatif as $data2) : ?>
                                <tr>
                                    <td class="text-center">
                                        <span class=" font-weight-bold d-block"><?= $data2->nama_kriteria ?></span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?= $data2->nilai ?></span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>