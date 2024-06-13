<?php 
	class AtletaModel extends Mysql
	{
        private $intCedula;
    
		public function __construct()
		{
			parent::__construct();
		}

        public function insertAtleta($cedula, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso, $alergias, $patologias, $disciplina, $tipo_sangre){
            $this->intCedula = $cedula;

            $sqlSelect = "SELECT * FROM atleta WHERE cedula = '$this->intCedula'";
            $select = $this->select_all($sqlSelect);

            if(count($select) > 0) $return = 0;

            else{
            $sql = "INSERT INTO atleta(cedula,talla_zapato,talla_franela,talla_pantalon,estatura,peso,id_disciplina) VALUES (?,?,?,?,?,?,?)";
            $arrData = array($cedula, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso, $disciplina);

            $insert_id = $this->insert($sql, $arrData);

            $sqlFicha = "INSERT INTO ficha_medica(id_atleta,alergias,patologias,tipo_sangre) VALUES (?,?,?,?)";
            $arrDataFicha = array($insert_id, $alergias, $patologias, $tipo_sangre);

            $this->insert($sqlFicha, $arrDataFicha);

            $return = $insert_id;
            }
            return $return;
        }

        public function selectAtletas(){
            $sql = "SELECT * FROM atleta";

            $request = $this->select_all($sql);

            return $request;
        }

    }
 ?>