<?php
    if(isset($_POST['function']) && !empty($_POST['function'])) {
        $function = $_POST['function'];
        switch($function) {
            case 'GetOpciones' : GetOpciones();break;
            case 'GetRuletaInfo': GetRuletaInfo();break;
            case 'ActualizarOpcion': ActualizarOpcion();break;
            case 'EliminarOpcion': EliminarOpcion();break;
            case 'AgregarOpcion': AgregarOpcion();break;
            case 'EnviarAudio': EnviarAudio();break;
            case 'ListarAudios': ListarAudios();break;
            case 'ActualizarAudio': ActualizarAudio();break;
            case 'other' : // do something;break;
            // other cases
        }
    }

     function GetOpciones(){
        include('./connection/config.php');
        $id =  $_POST['id'];
        $sqlRequest = "SELECT * from rul_opciones WHERE estado=1 and id_ruleta= '$id'  order by id ASC";
        $result = mysqli_query($link, $sqlRequest); //save result
        $registros = $result->num_rows;
        if ($registros>0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }else{
            $data = [];
        }
        echo json_encode($data);
    }

    function GetRuletaInfo(){
        include('./connection/config.php');
        $id =  $_POST['id'];
        $sqlRequest = "SELECT * from rul_opciones WHERE estado=1 and id_ruleta= '$id'  order by id ASC";
        $result = mysqli_query($link, $sqlRequest); //save result
        $registros = $result->num_rows;
        if ($registros>0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }else{
            $data = [];
        }
        //echo json_encode($data);

        $sql2 = "SELECT r.*, a.NOMBRE_ARCHIVO AS NOMBRE_AUDIO, a.RUTA AS  RUTA_AUDIO from rul_ruletas as r
        LEFT JOIN rul_audios as a
        ON a.ID = r.ID_AUDIO
        WHERE r.estado=1 and r.id= '$id'
        order by r.id ASC";
        $result2 = mysqli_query($link, $sql2); //save result
        $registros2 = $result2->num_rows;
        if ($registros2>0) {
            while ($row = $result2->fetch_assoc()) {
                $data2[] = $row;
            }
        }else{
            $data2 = [];
        }
        //echo json_encode($data2);

        $datos = array(
            'TITULO' => $data2[0]['TITULO'],
            'RUTA_AUDIO' => $data2[0]['RUTA_AUDIO'],
            'NOMBRE_AUDIO' => $data2[0]['NOMBRE_AUDIO'],
            'DURACION' => $data2[0]['DURACION'],
            'VELOCIDAD' => $data2[0]['VELOCIDAD'],
            'OPCIONES' => $data,
        );

        echo json_encode($datos);
    }

    function ActualizarOpcion(){
        include('./connection/config.php');
        $id_opcion =  $_POST['id_opcion'];
        $opcion =  $_POST['opcion'];
        $descripcion =  $_POST['descripcion'];
        $color_fondo = $_POST['color_fondo'];
        $color_fuente =  $_POST['color_fuente'];

        mysqli_query($link, "UPDATE rul_opciones SET OPCION= '$opcion', DESCRIPCION= '$descripcion', COLOR_FONDO= '$color_fondo', COLOR_LETRA = '$color_fuente' WHERE id = $id_opcion");
            if(mysqli_affected_rows($link)>=0){
                echo "OK";
            }else{
                echo "ERROR";
                echo die(mysqli_error($link));
            }
    }

    function ActualizarAudio(){
        include('./connection/config.php');
        $id_audio =  $_POST['id_audio'];
        $id_ruleta =  $_POST['id_ruleta'];

        mysqli_query($link, "UPDATE rul_ruletas SET ID_AUDIO= '$id_audio' WHERE id = $id_ruleta");
            if(mysqli_affected_rows($link)>=0){
                echo "OK";
            }else{
                echo "ERROR";
                echo die(mysqli_error($link));
            }
    }

    function EliminarOpcion(){
        include('./connection/config.php');
        $id_opcion =  $_POST['id_opcion'];

        mysqli_query($link, "UPDATE rul_opciones SET ESTADO= 0 WHERE id = $id_opcion");
            if(mysqli_affected_rows($link)>=0){
                echo "OK";
            }else{
                echo "ERROR";
                echo die(mysqli_error($link));
            }
    }

    function AgregarOpcion(){
        include('./connection/config.php');
        $id_ruleta =  $_POST['id_ruleta'];
        $opcion =  $_POST['opcion'];
        $descripcion =  $_POST['descripcion'];
        $color_fondo =  $_POST['color_fondo'];
        $color_letra =  $_POST['color_letra'];

        mysqli_query($link, "INSERT INTO rul_opciones (ID_RULETA, OPCION, DESCRIPCION, COLOR_FONDO, COLOR_LETRA) VALUES
                ('$id_ruleta', '$opcion', '$descripcion', '$color_fondo', '$color_letra')");

            if(mysqli_affected_rows($link)>=0){
                echo "OK";
            }else{
                echo "ERROR";
                echo die(mysqli_error($link));
            }
    }

        function EnviarAudio(){
            include('./connection/config.php');
            $id_ruleta =  $_POST['id_ruleta'];
            foreach($_FILES['archivo']['tmp_name'] as $key => $tmp_name)
                {
                    $file_name = $_FILES['archivo']['name'][$key];
                    $file_size =$_FILES['archivo']['size'][$key];
                    $file_tmp =$_FILES['archivo']['tmp_name'][$key];
                    $file_type=$_FILES['archivo']['type'][$key];
                    $RUTA = './assets/audio/'.$id_ruleta.'_'.time().$file_name;
                    $ext = pathinfo($_FILES["archivo"]["name"][$key])['extension'];

                    move_uploaded_file($file_tmp, $RUTA);
                    mysqli_query($link, "INSERT INTO rul_audios (NOMBRE_ARCHIVO, RUTA, EXTENSION, SIZE) VALUES
                        ('$file_name', '$RUTA', '$ext', '$file_size')");
                    $last_id = $link->insert_id;
                    mysqli_query($link, "UPDATE rul_ruletas SET  ID_AUDIO = '$last_id' WHERE id = $id_ruleta");
                    //move_uploaded_file($file_tmp,'archivos/'.$id_cliente.'/'.$data."_".$conn->insert_id."/".time().$file_name);
                }

                if(mysqli_affected_rows($link)>=0){
                    $output = array('uploaded' => 'OK' );
                }else{
                    $output = array('uploaded' => 'FAILED' );
                    echo die(mysqli_error($link));
                }

            echo json_encode($output);
        }

        function ListarAudios(){
            include('./connection/config.php');
            $sqlRequest = "SELECT * from rul_audios  order by id ASC";
            $result = mysqli_query($link, $sqlRequest); //save result
            $registros = $result->num_rows;
            if ($registros>0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }else{
                $data = [];
            }

            echo json_encode($data);
        }
?>