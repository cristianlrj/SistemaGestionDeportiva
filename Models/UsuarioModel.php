<?php 
	class UsuarioModel extends Mysql
	{
        private $strNombre;
        private $strDescripcion;
		public function __construct()
		{
			parent::__construct();
		}

        public function insertUsuario(string $nombre, string $descripcion){
            $this->strNombre = $nombre;
            $this->strDescripcion = $descripcion;

            $sqlSelect = "SELECT * FROM usuario WHERE nombre = '$this->strNombre'";
            $select = $this->select_all($sqlSelect);

            if(count($select) > 0) $return = 0;

            else{
            $sql = "INSERT INTO usuario(nombre, descripcion) VALUES (?,?)";
            $arrData = array($this->strNombre,
                            $this->strDescripcion);

            $insert = $this->insert($sql, $arrData);

            $return = $insert;
            }
            return $return;
        }

        public function updateUsuario(int $id_usuario, string $nombre, string $descripcion){
            $this->strNombre = $nombre;
            $this->strDescripcion = $descripcion;

            $sqlSelect = "SELECT * FROM usuario WHERE nombre = '$this->strNombre' AND id_usuario != $id_usuario";
            $select = $this->select_all($sqlSelect);

            if(count($select) > 0) $return = 0;

            else{
            $sql = "UPDATE usuario SET nombre=?, descripcion=? WHERE id_usuario = $id_usuario";
            $arrData = array($this->strNombre,
                            $this->strDescripcion);

            $insert = $this->update($sql, $arrData);

            $return = 1;
            }
            return $return;
        }

        public function selectUsuarios(){
            $sql = "SELECT id_usuario,nombre,descripcion FROM usuario";

            $request = $this->select_all($sql);

            return $request;
        }

        public function selectUsuario($id){
            $sql = "SELECT id_usuario,nombre,descripcion FROM usuario 
                    WHERE id_usuario = $id";

            $request = $this->select($sql);

            return $request;
        }

    }
 ?>