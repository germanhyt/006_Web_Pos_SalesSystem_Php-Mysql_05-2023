<?php
class CategoriasModel extends Mysql{

    public $id, $codigo, $categoria, $estado;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectCategorias()
    {
        $sql = "SELECT * FROM categorias WHERE estado = 1";
        $res = $this->select_all($sql);
        return $res;
    }

    public function selectCategoriasInactivos()
    {
        $sql = "SELECT * FROM categorias WHERE estado = 0";
        $res = $this->select_all($sql);
        return $res;
    }

    public function insertarCategorias(String $codigo, string $categoria)
    {
        $return = "";
        $this->codigo = $codigo;
        $this->categoria = $categoria;
        $sql = "SELECT * FROM categorias WHERE codigo = '{$this->codigo}'";
        $result = $this->select_all($sql);
        if (empty($result)) {
            $query = "INSERT INTO categorias(codigo, categoria, estado) VALUES (?,?,?)";
            $data = array($this->codigo, $this->categoria,1);
            $resul = $this->insert($query, $data);
            $return = $resul;
        }else {
            $return = "existe";
        }
        return $return;
    }

    public function editarCategorias(int $id)
    {
        $this->id = $id;
        $sql = "SELECT * FROM categorias WHERE id = '{$this->id}'";
        $res = $this->select($sql);
        if (empty($res)) {
            $res = 0;
        }
        return $res;
    }
    
    public function actualizarCategorias(String $codigo, string $categoria, string $estado, int $id)
    {
        $return = "";
        $this->codigo = $codigo;
        $this->categoria = $categoria;
        $this->estado=$estado;
        $this->id = $id;
        $query = "UPDATE categorias SET codigo=?, categoria=?, estado=? WHERE id=?";
        $data = array($this->codigo, $this->categoria,$this->estado, $this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function eliminarCategorias(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE categorias SET estado = 0 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function reingresarCategorias(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE categorias SET estado = 1 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
}
?>