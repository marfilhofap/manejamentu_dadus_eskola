<?php
$profile_professor = $get_table->get_table("v_profile_professor");
?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-coffee icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                Dados Professor
                <div class="page-title-subheading">
                    <?= 'Eziste Dados Professor ' . count($profile_professor) . ' nebe Rejistu'; ?>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" class="btn-shadow mr-3 btn btn-primary" data-toggle="modal" data-target="#aumenta_profile_professor">
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
                                    <th>Naran professor</th>
                                    <th>Sexu</th>
                                    <th>Munisipiu</th>
                                    <th>Estadu Sivil</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($profile_professor as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['naran_kompletu'] . '</td>
                                        <td>' . $loop['sexo'] . '</td>
                                        <td>' . $loop['munisipiu'] . '</td>
                                        <td>' . $loop['estadu_sivil'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#edit_profile_professor" data-id_profile_professor="' . $loop['id_profile_professor'] . '">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#delete_profile_professor" data-id_profile_professor="' . $loop['id_profile_professor'] . '">
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