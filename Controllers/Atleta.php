<?php

class Atleta extends Controllers{
    public function __construct(){
        // Llama al constructor de la clase padre (Controllers)
        parent::__construct();
        // Inicia la sesión
        session_start();
        // Verifica si no hay sesión iniciada
        if (empty($_SESSION['login'])) {
            // Redirige al usuario a la página de login si no está logueado
            header('Location: ' . base_url() . '/Login');
            die();
        }
    }

    // Método para mostrar la vista de registro de atletas
    public function registroAtleta($id){
        // Configura los datos de la página
        $data['id_atleta'] = intval($id);
        $data['page_title'] = APP_NAME;

        if( $data['id_atleta'] > 0) $data['page_name'] = "Actualizar Atleta";
        else $data['page_name'] = "Registro de Atleta";

        $data['page_functions'] = functions($this, "registroAtleta");
        // Carga la vista 'registroAtleta' con los datos configurados
        $this->views->getView($this,"registroAtleta",$data);
    }

    // Método para mostrar la vista de ver atletas
    public function verAtletas(){
        // Configura los datos de la página
        $data['page_title'] = APP_NAME;
        $data['page_name'] = "Atletas";
        $data['page_functions'] = functions($this, "verAtletas");
        // Carga la vista 'verAtletas' con los datos configurados
        $this->views->getView($this,"verAtletas",$data);
    }

     // Método para mostrar la vista de ver atletas
     public function generarReportes(){
        // Configura los datos de la página
        $data['page_title'] = APP_NAME;
        $data['page_name'] = "Generar reportes de atleta";
        $data['page_functions'] = functions($this, "generarReportes");
        // Carga la vista 'verAtletas' con los datos configurados
        $this->views->getView($this,"generarReportes",$data);
    }

    // Método para registrar un atleta
    public function setAtleta(){
        // Verifica si hay datos en el POST
        if($_POST){
            // Obtiene y sanitiza los datos del formulario
            $id_atleta = strClean($_POST['id_atleta']);
            $nombre = strClean($_POST['nombreCompleto']);
            $talla_zapato = intval($_POST['talla_zapato']);
            $talla_franela = strClean($_POST['talla_franela']);
            $talla_pantalon = strClean($_POST['talla_pantalon']);
            $estatura = intval($_POST['estatura']);
            $peso = intval($_POST['peso']);
            $alergias = strClean($_POST['alergias']);
            $patologias = strClean($_POST['patologias']);
            $disciplina = $_POST['disciplina'];
            $sexo = strClean($_POST['sexo']);
            $tipo_sangre = strClean($_POST['tipo_sangre']);
            $tipo_string = strClean($_POST['tipo']);
            $tipo=0;
            switch ($tipo_string) {
                case 'Estudiante':
                    $tipo=1;
                    break;
                case 'Obrero':
                    $tipo=2;
                    break;
                case 'Docente':
                    $tipo=3;
                    break;
                case 'Administrativo':
                    $tipo=4;
                    break;
            }

            if($id_atleta == 0){
            // Inserta los datos del atleta en la base de datos
                $cedula = intval($_POST['cedula']);
                $insert = $this->model->insertAtleta($cedula, $nombre, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso, $alergias, $patologias, $disciplina, $tipo_sangre, $tipo, $sexo);
            }else{
                $insert = $this->model->updateAtleta($id_atleta, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso, $alergias, $patologias, $disciplina, $tipo_sangre, $tipo, $sexo);
            }
            // Verifica si la inserción fue exitosa
            if($insert > 0){
                // Respuesta en caso de éxito
                $arrResponse = array("status" => true, "title" => "Exito!", "msg" => "Atleta registrado correctamente!");
            } else {
                // Respuesta en caso de error (atleta ya registrado)
                $arrResponse = array("status" => false, "title" => "Atleta ya registrado!", "msg" => "Revise sus datos!");
            }

            // Envía la respuesta en formato JSON
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function getAtletas(){

      $arrData = $this->model->selectAtletas();

      for ($i=0; $i < count($arrData); $i++) { 
        $arrData[$i]['options'] = '<a class="btn btn-primary" href="'.base_url().'/Atleta/registroAtleta/'.$arrData[$i]['ID_ATLETA'].'">Editar</a>';
      }

      echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

    }

    public function getAtleta($id){
      
      $arrData = $this->model->selectAtleta($id);

      echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

    public function getAtletaCI($cedula){
      
        $arrData = $this->model->selectAtletaCI($cedula);
  
        echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
      }

    public function reporteAtletas(){

        $campos = $_POST['campos'];

        $nombre = strClean($_POST['nombre']);
       
        $filtro = $_POST['filtro'];
        $tipo = $_POST['tipo'];

        $filtro2 = $_POST['filtro2'];

        if($tipo == 0){
            $tipo = "1,2,3,4";
        }

        if($filtro != "Ninguno"){
            $valor = $_POST['valor'];
        }else{
            $valor = "";
        }

        if($filtro2 != "Ninguno"){
            $valor2 = $_POST['valor2'];
        }else{
            $valor2 = "";
        }

        $datos = $this->model->selectAtletaReporte($campos, $tipo, $filtro, $valor, $filtro2, $valor2);
        
        $mpdf = new \Mpdf\Mpdf();

        $mpdf->setFooter('{PAGENO}');

        ob_start();

        require_once('Views/Template/pdf/reporteAtleta.php');

        $html = ob_get_clean();
        // Write some HTML code:
        $mpdf->WriteHTML($html);
        
        // Output a PDF file directly to the browser
        $mpdf->Output();
    }
}
?>