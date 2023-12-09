<?php
$profile_estudante = $get_table->get_table("v_profile_estudante");
?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-coffee icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                Dados Estudante
                <div class="page-title-subheading">
                    <?= 'Eziste Dados Estudante ' . count($profile_estudante) . ' nebe Rejistu'; ?>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" class="btn-shadow mr-3 btn btn-primary" data-toggle="modal" data-target="#aumenta_profile_estudante">
                Aumenta <i class="fa fa-plus"></i>
            </button>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>EMIS</th>
                                    <th>Naran Estudante</th>
                                    <th>Sexu</th>
                                    <th>Munisipiu</th>
                                    <th>Parente</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($profile_estudante as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['emis'] . '</td>
                                        <td>' . $loop['naran_kompletu'] . '</td>
                                        <td>' . $loop['sexo'] . '</td>
                                        <td>' . $loop['munisipiu'] . '</td>
                                        <td>' . $loop['naran_aman'] . ' - ' . $loop['naran_inan'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#edit_profile_estudante" data-id_profile_estudante="' . $loop['id_profile_estudante'] . '">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#delete_profile_estudante" data-id_profile_estudante="' . $loop['id_profile_estudante'] . '">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>