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

            $sqlSelect = "SELECT * FROM disciplina_deportiva WHERE nombre_disciplina = '$this->strNombre'";
            $select = $this->select_all($sqlSelect);

            if(count($select) > 0) $return = 0;

            else{
            $sql = "INSERT INTO disciplina_deportiva(nombre_disciplina, descripcion) VALUES (?,?)";
            $arrData = array($this->strNombre,
                            $this->strDescripcion);

            $insert = $this->insert($sql, $arrData);

            $return = $insert;
            }
            return $return;
        }

        public function updateDisciplina(int $id_disciplina, string $descripcion){
            $this->strDescripcion = $descripcion;

            // $sqlSelect = "SELECT * FROM disciplina WHERE id_disciplina != $id_disciplina";
            // $select = $this->select_all($sqlSelect);

            // if(count($select) > 0) $return = 0;

            // else{
            $sql = "UPDATE disciplina_deportiva SET  descripcion=? WHERE id_disciplina = $id_disciplina";
            $arrData = array(
                            $this->strDescripcion);

            $insert = $this->update($sql, $arrData);

            $return = 1;
            // }
            return $return;
        }

        public function selectDisciplinas(){
            $sql = "SELECT id_disciplina,nombre_disciplina,descripcion FROM disciplina_deportiva";

            $request = $this->select_all($sql);

            return $request;
        }

        public function selectDisciplina($id){
            $sql = "SELECT id_disciplina,nombre_disciplina,descripcion FROM disciplina_deportiva 
                    WHERE id_disciplina = $id";

            $request = $this->select($sql);

            return $request;
        }

    }
 ?>