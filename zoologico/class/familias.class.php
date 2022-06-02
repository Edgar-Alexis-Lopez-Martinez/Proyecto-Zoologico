<?php
require_once('zoologico.class.php');
class Familias extends Zoologico
{
    public function read()
    {
        $linea = $this->db->prepare("select id_familia, familia, id_atraccion , atraccion, f.foto from familia f LEFT JOIN atraccion a USING (id_atraccion) ORDER by familia;");
        $linea->execute();
        $familias = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $familias;
    }
    public function readOne($id)
    {
        $linea = $this->db->prepare("SELECT * FROM familia WHERE id_familia=:id_familia");
        $linea->bindParam(':id_familia', $id, PDO::PARAM_INT);
        $linea->execute();
        $familias = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $familias;
    }
    public function delete($id)
    {
        $borrar = $this->db->prepare("DELETE from familia WHERE id_familia=:id_familia");
        $borrar->bindParam(':id_familia', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data)
    {
        $cuenta = null;
        $foto = $this->cargarImagen("familias");
        if ($foto) {
            $sql = "INSERT into familia(familia,foto, id_atraccion) VALUES(:familia,:foto,:id_atraccion)";
            $insertar = $this->db->prepare($sql);
            $insertar->bindParam(':familia', $data['familia'], PDO::PARAM_STR);
            $insertar->bindParam(':foto', $foto, PDO::PARAM_STR);
            $insertar->bindParam(':id_atraccion', $data['id_atraccion'], PDO::PARAM_INT);
            $insertar->execute();
            $cuenta = $insertar->rowCount();
        }
        return $cuenta;
    }
    public function update($id, $data)
    {
        $foto = $this->cargarImagen(("familias"));
        if ($foto) {
            $sql = "UPDATE familia SET familia=:familia, foto=:foto, id_atraccion=:id_atraccion WHERE id_familia=:id_familia";
            $actualizar = $this->db->prepare($sql);
        } else {
            $sql = "UPDATE familia SET familia=:familia, id_atraccion=:id_atraccion WHERE id_familia=:id_familia";
        }
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':familia', $data['familia'], PDO::PARAM_STR);
        $actualizar->bindParam(':id_atraccion', $data['id_atraccion'], PDO::PARAM_INT);

        $actualizar->bindParam(':id_familia', $id, PDO::PARAM_INT);
        if ($foto) {
            $actualizar->bindParam(':foto', $foto, PDO::PARAM_STR);
        }
        $actualizar->execute();
        $cuenta = $actualizar->rowCount();
        return $cuenta;
    }
}
$Familias = new Familias;
$Familias->conexion();
