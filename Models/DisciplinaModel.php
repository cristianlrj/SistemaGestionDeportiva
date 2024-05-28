<?php 
	class DisciplinaModel extends Mysql
	{
        private $strNombre;
        private $strDescripcion;
		public function __construct()
		{
			parent::__construct();
		}

        public function insertDisciplina(string $nombre, string $descripcion){
            $this->strNombre = $nombre;
            $this->strDescripcion = $descripcion;

            $sql = "INSERT INTO disciplina(nombre, descripcion) VALUES (?,?)";
            $arrData = array($this->strNombre,
                            $this->strDescripcion);

            $insert = $this->insert($sql, $arrData);

            return $insert;
        }

    }
 ?>