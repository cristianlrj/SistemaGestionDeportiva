<?php 
	class AtletaModel extends Mysql
	{
        private $intCedula;
    
		public function __construct()
		{
			parent::__construct();
		}

        public function insertAtleta($cedula, $nombre, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso, $alergias, $patologias, $disciplina, $tipo_sangre){
            $this->intCedula = $cedula;

            $sqlSelect = "SELECT * FROM atleta WHERE cedula = '$this->intCedula'";
            $select = $this->select_all($sqlSelect);

            if(count($select) > 0) $return = 0;

            else{
            $sql = "INSERT INTO atleta(cedula,nombre,talla_zapato,talla_franela,talla_pantalon,estatura,peso) VALUES (?,?,?,?,?,?,?)";
            $arrData = array($cedula, $nombre, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso);

            $insert_id = $this->insert($sql, $arrData);
            
            
            $sqlDisciplina = "INSERT INTO atleta_asigna_disciplina(id_atleta,id_disciplina) VALUES (?,?)";
            $arrDataDisciplina = array($insert_id, $disciplina);

            $this->insert($sqlDisciplina, $arrDataDisciplina);

            $sqlFicha = "INSERT INTO ficha_medica(id_atleta,alergias,patologias,tipo_sangre) VALUES (?,?,?,?)";
            $arrDataFicha = array($insert_id, $alergias, $patologias, $tipo_sangre);

            $this->insert($sqlFicha, $arrDataFicha);

            $return = $insert_id;
            }
            return $return;
        }

        public function updateAtleta($id_atleta, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso, $alergias, $patologias, $disciplina, $tipo_sangre){
            $sql = "UPDATE atleta SET talla_zapato = ?,talla_franela = ?,talla_pantalon = ?,estatura = ?,peso = ? WHERE id_atleta = $id_atleta";
            $arrData = array($talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso);

            $insert_id = $this->update($sql, $arrData);
             return 1;
        }

        public function selectAtletas(){
            $sql = "SELECT a.*,d.disciplina as DISCIPLINA FROM atleta a
            INNER JOIN atleta_asigna_disciplina ad ON a.id_atleta = ad.id_atleta
            INNER JOIN disciplina_deportiva d ON ad.id_disciplina = d.id_disciplina";

            $request = $this->select_all($sql);

            return $request;
        }

        public function selectAtleta($id){
            $sql = "SELECT a.*,d.disciplina as DISCIPLINA, d.id_disciplina,f.* FROM atleta a 
            INNER JOIN atleta_asigna_disciplina ad ON a.id_atleta = ad.id_atleta
            INNER JOIN disciplina_deportiva d ON ad.id_disciplina = d.id_disciplina
            INNER JOIN ficha_medica f ON f.id_atleta = a.id_atleta
            WHERE a.id_atleta = $id";

            $request = $this->select($sql);

            return $request;
        }

        public function selectAtletaCI($cedula){
            $sql = "SELECT a.*,d.disciplina as DISCIPLINA, d.id_disciplina,f.* FROM atleta a 
            INNER JOIN atleta_asigna_disciplina ad ON a.id_atleta = ad.id_atleta
            INNER JOIN disciplina_deportiva d ON ad.id_disciplina = d.id_disciplina
            INNER JOIN ficha_medica f ON f.id_atleta = a.id_atleta
            WHERE a.cedula = '$cedula'";

            $request = $this->select($sql);

            return $request;
        }

        public function selectAtletaReporte($campos, $tipo, $filtro, $valor, $filtro2, $valor2){

            $where = "WHERE tipo IN ($tipo)";

            $camposTabla = "";

            foreach ($campos as $camp) {
                $camposTabla .= $camp.",";
            }

            $camposTabla = substr($camposTabla, 0, -1);

            if($filtro == "Disciplina"){
                $where .= " AND ad.id_disciplina = $valor";
            }elseif($filtro == "Sexo"){

                if($valor == "Femenino") $valor = "F";
                else $valor = "M";

                $where .= " AND a.sexo = '$valor'";

            }elseif($filtro == "talla_franela"){
                $where .= " AND a.talla_franela = '$valor'";
            }
            elseif($filtro == "talla_pantalon"){
                $where .= " AND a.talla_pantalon = '$valor'";
            }
            elseif($filtro == "talla_zapato"){
                $where .= " AND a.talla_zapato = '$valor'";
            }
            else{
                $where .= "";
            }

            if($filtro2 == "Disciplina"){
                $where .= " AND ad.id_disciplina = $valor2";
            }elseif($filtro2 == "Sexo"){

                if($valor2 == "Femenino") $valor2 = "F";
                else $valor2 = "M";

                $where .= " AND a.sexo = '$valor2'";
                
            }elseif($filtro2 == "talla_franela"){
                $where .= " AND a.talla_franela = '$valor2'";
            }
            elseif($filtro2 == "talla_pantalon"){
                $where .= " AND a.talla_pantalon = '$valor2'";
            }
            elseif($filtro2 == "talla_zapato"){
                $where .= " AND a.talla_zapato = '$valor2'";
            }
            else{
                $where .= "";
            }

            $sql = "SELECT ".$camposTabla." FROM atleta a 
            INNER JOIN atleta_asigna_disciplina ad ON a.id_atleta = ad.id_atleta
            INNER JOIN disciplina_deportiva d ON ad.id_disciplina = d.id_disciplina
            INNER JOIN ficha_medica f ON f.id_atleta = a.id_atleta ".$where;

            $request = $this->select_all($sql);

            return $request;
        }


    }
 ?>