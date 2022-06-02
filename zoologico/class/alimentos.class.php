<?php
require_once('zoologico.class.php');
class Alimentos extends Zoologico
{
    public function read()
    {
        $linea = $this->db->prepare("select * from alimento;");
        $linea->execute();
        $alimentos = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $alimentos;
    }
    public function readOne($id)
    {
        $linea = $this->db->prepare("SELECT * FROM alimento WHERE id_alimento=:id_alimento");
        $linea->bindParam(':id_alimento', $id, PDO::PARAM_INT);
        $linea->execute();
        $alimentos = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $alimentos;
    }
    public function delete($id)
    {
        $borrar = $this->db->prepare("DELETE from alimento WHERE id_alimento=:id_alimento");
        $borrar->bindParam(':id_alimento', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data)
    {
        $cuenta = null;
        $sql = "INSERT into alimento(alimento) VALUES(:alimento)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':alimento', $data['alimento'], PDO::PARAM_STR);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id, $data)
    {
        $sql = "UPDATE alimento SET alimento=:alimento WHERE id_alimento=:id_alimento";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':alimento', $data['alimento'], PDO::PARAM_STR);
        $actualizar->bindParam(':id_alimento', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuenta = $actualizar->rowCount();
        return $cuenta;
    }
}
$Alimentos = new Alimentos;
$Alimentos->conexion();
