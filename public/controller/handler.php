<?php
include_once '../autentication/connection.php';
include_once '../../config/parametros_db.php';
include_once 'class.php';
include_once 'get_table.php';

if (!isset($_SESSION)) {
    session_start();
}

$class = new j_membru(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);
$get_table = new gestaoTabelas(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

$dt = new DateTime("now", new DateTimeZone('Asia/Dili'));


// Utilijador
if (isset($_POST['aumenta_identidade'])) {
    $naran_kompletu = $_POST['naran_kompletu'];
    $sexo = $_POST['sexo'];
    $id_pozisaun = $_POST['id_pozisaun'];
    $data_moris = $_POST['data_moris'];
    $email = $_POST['email'];
    $nu_telemovel = $_POST['nu_telemovel'];
    $sura_id = $get_table->get_table('identidade_pessoal');
    $konta = count($sura_id) + 1;
    $id_membru = 'LS-' . $konta;

    $insert_status = $class->aumenta_identidade($naran_kompletu, $sexo, $id_pozisaun, $data_moris, $email, $nu_telemovel, $id_membru);
}

if (isset($_POST['edit_identidade'])) {
    $id_identidade_pessoal = $_POST['id_identidade_pessoal'];
    $naran_kompletu = $_POST['naran_kompletu'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];
    $email = $_POST['email'];
    $nu_telemovel = $_POST['nu_telemovel'];
    $id_pozisaun = $_POST['id_pozisaun'];

    $insert_status = $class->edit_identidade($id_identidade_pessoal, $naran_kompletu, $sexo, $data_moris, $email, $nu_telemovel, $id_pozisaun);
}
