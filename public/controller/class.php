<?php
class j_membru
{
    protected $conn = null;
    protected $db_pgconnect = null;
    public  $PSQLHOST;
    public  $PSQLUSER;
    public  $PSQLDB;
    public $PSQLPW;
    public function __construct($PSQLHOST, $PSQLUSER, $PSQLPW, $PSQLDB)
    {
        $con = new connection($PSQLHOST, $PSQLUSER, $PSQLPW, $PSQLDB);
        $this->conn = $con->open();
        $this->db_pgconnect = $con->open_pgconnect();
    }

    //  Hamos dadus husi tabela base de dadus sira
    public function delete($table_name, $id, $id_dados)
    {
        try {
            $sql = "DELETE FROM $table_name WHERE $id='$id_dados'";
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    // Identificacao
    public function aumenta_identidade($naran_kompletu, $sexo, $id_pozisaun, $data_moris, $email, $nu_telemovel, $id_membru)
    {
        $sql = $this->conn->prepare("CALL aumenta_identidade_pessoal (:naran_kompletu, :sexo, :id_pozisaun, :data_moris, :email, :nu_telemovel, :id_membru)");
        $sql->bindParam(":naran_kompletu", $naran_kompletu);
        $sql->bindParam(":sexo", $sexo);
        $sql->bindParam(":id_pozisaun", $id_pozisaun);
        $sql->bindParam(":data_moris", $data_moris);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":nu_telemovel", $nu_telemovel);
        $sql->bindParam(":id_membru", $id_membru);

        $sql->execute();
        return header("location: ../index.php?c=membru");
    }

    public function edit_identidade($id_identidade_pessoal, $naran_kompletu, $sexo, $data_moris, $email, $nu_telemovel, $id_pozisaun)
    {
        $sql = "UPDATE identidade_pessoal SET naran_kompletu = '$naran_kompletu', sexo = '$sexo', data_moris = '$data_moris', email = '$email', nu_telemovel = '$nu_telemovel', id_pozisaun = '$id_pozisaun' WHERE id_identidade_pessoal = '$id_identidade_pessoal'";

        $this->conn->exec($sql);
        return header("location: ../index.php?c=membru");
    }
}
