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

            $sqlSelect = "SELECT * FROM disciplina WHERE nombre = '$this->strNombre'";
            $select = $this->select_all($sqlSelect);

            if(count($select) > 0) $return = 0;

            else{
            $sql = "INSERT INTO disciplina(nombre, descripcion) VALUES (?,?)";
            $arrData = array($this->strNombre,
                            $this->strDescripcion);

            $insert = $this->insert($sql, $arrData);

            $return = $insert;
            }
            return $return;
        }

        public function selectDisciplinas(){
            $sql = "SELECT * FROM disciplina";

            $request = $this->select_all($sql);

            return $request;
        }

    }
 ?>