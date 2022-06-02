<?php
require_once('zoologico.class.php');
class Atracciones extends Zoologico
{
    public function read()
    {
        $linea = $this->db->prepare("SELECT * FROM atraccion");
        $linea->execute();
        $atracciones = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $atracciones;
    }
    public function readOne($id)
    {
        $linea = $this->db->prepare("SELECT * FROM atraccion WHERE id_atraccion=:id_atraccion");
        $linea->bindParam(':id_atraccion', $id, PDO::PARAM_INT);
        $linea->execute();
        $atracciones = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $atracciones;
    }
    public function delete($id)
    {
        $borrar = $this->db->prepare("DELETE from atraccion WHERE id_atraccion=:id_atraccion");
        $borrar->bindParam(':id_atraccion', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data)
    {
        $cuenta = null;
        $foto = $this->cargarImagen("atraccion");
        if ($foto) {
            $sql = "INSERT into atraccion(atraccion,latitud,longitud,descripcion,foto) VALUES(:atraccion,:latitud,:longitud,:descripcion,:foto)";
            $insertar = $this->db->prepare($sql);
            $insertar->bindParam(':atraccion', $data['atraccion'], PDO::PARAM_STR);
            $insertar->bindParam(':latitud', $data['latitud'], PDO::PARAM_STR);
            $insertar->bindParam(':longitud', $data['longitud'], PDO::PARAM_STR);
            $insertar->bindParam(':descripcion', $data['descripcion'], PDO::PARAM_STR);
            $insertar->bindParam(':foto', $foto, PDO::PARAM_STR);
            $insertar->execute();
            $cuenta = $insertar->rowCount();
        }
        return $cuenta;
    }
    public function update($id, $data)
    {
        $foto = $this->cargarImagen(("atraccion"));
        if ($foto) {
            $sql = "UPDATE atraccion SET atraccion=:atraccion, latitud=:latitud, longitud=:longitud, descripcion=:descripcion, foto=:foto
                WHERE id_atraccion=:id_atraccion";
            $actualizar = $this->db->prepare($sql);
        } else {
            $sql = "UPDATE atraccion SET atraccion=:atraccion, latitud=:latitud, longitud=:longitud, descripcion=:descripcion
                WHERE id_atraccion=:id_atraccion";
        }
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':atraccion', $data['atraccion'], PDO::PARAM_STR);
        $actualizar->bindParam(':latitud', $data['latitud'], PDO::PARAM_STR);
        $actualizar->bindParam(':longitud', $data['longitud'], PDO::PARAM_STR);
        $actualizar->bindParam(':descripcion', $data['descripcion'], PDO::PARAM_STR);

        $actualizar->bindParam(':id_atraccion', $id, PDO::PARAM_INT);
        if ($foto) {
            $actualizar->bindParam(':foto', $foto, PDO::PARAM_STR);
        }
        $actualizar->execute();
        $cuenta = $actualizar->rowCount();
        return $cuenta;
    }
}
$Atracciones = new Atracciones;
$Atracciones->conexion();
