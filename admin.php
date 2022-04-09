<?php
    include('./connection/config.php');
?>
<!DOCTYPE html>
<html lang="es" data-xadprotection="true" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Menu | CAMIPER</title>
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./libs/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="fileupload/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="fileupload/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <style>
        .card {
    padding-bottom: 20px
}

.card-header {
    padding: 20px 60px
}

.card-body {
    display: none;
    padding-left: 55px;
    padding-right: 55px
}

.card-body.show {
    display: block
}

.card-block {
    width: 235px;
    border: 1px solid lightgrey;
    padding: 20px;
    border-radius: 5px !important;
    background-color: #FAFAFA;
    margin-bottom: 30px
}

.btn-blue {
    margin-top: 40px;
    background-color: #ce1618;
    color: #fff;
    width: 28%
}

.btn-blue:hover {
    background-color: #CE1618;
    color: #fff;

}

.sweet-danger{
 background-color: black;
}

</style>
</head>

<body style="background: url(./assets/imagenes/fdg.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #ffffff;padding-top: 0px;">
    <div class="wrapper" style="padding-top: 0px;">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-5 col-md-5"><img src="./assets/imagenes/logo-camiper-horizontal.svg" height="110" class="logo-cam-me" alt="camaraminera"></div>
            <div class="col-5 col-md-5"><img src="./assets/imagenes/Logo_Camara.svg" height="110" class="logo-cam-me" alt="camaraminera" style="float: right;"></div>
            <div class="col-1 col-md-1"></div>
        </div>
        <div class="container-fluid" id="body" style="margin-top: -10px">
            <div class="container-fluid px-1 py-5 mx-auto" style="color:black;">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-11">
                        <div class="card rounded-0 b-0" style="padding-bottom: 0px !important;">
                            <div class="card-header" style="background-color: #969da5 !important; padding: 0px 60px;">
                                <h3 align="center" style=" font-family: Arial, Helvetica, sans-serif; color: white; font-weight: bold"> RULETA <span><img style="margin-top: -8px;" src="./assets/imagenes/logo_white.svg" height="60" class="logo-cam-me" alt="camaraminera"></span></h3>
                                <h3 align="center" style="font-size: 1.7em !important; margin-top: -8px;" id="title" style="font-family: Arial, Helvetica, sans-serif">Módulo Admin</h3>
                            </div>
                            <div style="background-color: #e5e5e5 !important;">
                                    <div class="card-body show">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6" style="position: relative; width: 600px">
                                            <input type="hidden" id="tiempo_girando">
                                            <canvas id="canvas" width="600" height="600" style="display: block; margin: 0 auto"></canvas>
                                            <img src="assets/imagenes/logo_small_red.svg" style="position: absolute;  top: 270px; left: 273px; width: 180px;">
                                            <button class="btn btn-blue" style="font-size: 20px; font-weight: bold; display: block; margin: 0 auto" id="play" onclick="spin();">¡Girar!
                                                <span class="fa fa-long-arrow-right"></span>
                                            </button>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 table-responsive">
                                            <h3 style="color: #CE1618; font-weight: bold; display: inline-block;">CONFIGURACIÓN</h3>
                                            <button type="button" class="btn" style="float: right; margin-top: 8px; margin-right: -30px; background-color: #CE1618; color: white;" data-toggle="modal" data-target="#myModal" tabindex="-1"><span><i  class="fa fa-plus" style="font-weight: 600" aria-hidden="true"> Agregar Opción</i></span></button>
                                            <p>Agregar Nueva opción</p>

                                            <table id="tabla_opciones" class="table table-stripped text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Nº</th>
                                                        <th>OPCIÓN</th>
                                                        <th>DESCRIPCIÓN</th>
                                                        <th>FONDO</th>
                                                        <th>COLOR FUENTE</th>
                                                        <th>EDITAR</th>
                                                        <th>ELIMINAR</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 style="color: #CE1618; font-weight: bold">CONFIGURACIÓN DE AUDIO</h4>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="text_audio_actual"><i class="far fa-arrow-alt-circle-right"></i> Audio Actual:</label>
                                            <p id="text_audio_actual"></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="combo_audio"><i class="far fa-arrow-alt-circle-right"></i> Actualizar Audio:</label>
                                            <div class="input-group">
                                                <select name="combo_audio" id="combo_audio" class="form-control" required></select>
                                                <span class="input-group-btn">
                                                    <button title="Actualizar" class="btn btn-warning" type="button" onclick="ActualizarAudio()"><span><i class="fas fa-save"></i></span></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="combo_audio"><i class="far fa-arrow-alt-circle-right"></i> Vista Previa:</label><br>
                                            <audio style="padding-top: 10px; margin-top: -10px" id="audio" type="audio/mpeg" controls loop></audio>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <form id="FormAdjuntarArchivos" enctype="multipart/form-data">
                                                <br>
                                                <label for="combo_audio"><i class="far fa-arrow-alt-circle-right"></i> Subir nuevo audio mp3:</label>
                                                <div class="file-loading">
                                                    <input id="file-es" name="archivo[]" type="file" multiple>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Agregar Opción</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-3">
                  <div class="form-group">
                        <label for="opcion"><i class="far fa-arrow-alt-circle-right"></i> Opción:</label>
                        <input type="text" class="form-control" id="opcion" name="opcion">
                    </div>
              </div>
              <div class="col-sm-3">
                  <div class="form-group">
                        <label for="descripcion"><i class="far fa-arrow-alt-circle-right"></i> Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                    </div>
              </div>
              <div class="col-sm-3">
                  <div class="form-group">
                        <label for="color_fondo"><i class="far fa-arrow-alt-circle-right"></i> Color de Fondo:</label>
                        <input type="color" value="#000000" class="form-control" id="color_fondo" name="color_fondo">
                    </div>
              </div>
              <div class="col-sm-3">
                  <div class="form-group">
                        <label for="color_letra"><i class="far fa-arrow-alt-circle-right"></i> Color de letra:</label>
                        <input type="color" value="#ffffff" class="form-control" id="color_letra" name="color_letra">
                    </div>
              </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" id="btn-guardar" onclick="AgregarOpcion()" style="color: black !important">Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

</div>
    <!-- Footer -->
    <footer class="footer" style="background-color: #969da5 !important;color:#ffffff">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    CAMIPER 2021
                </div>
            </div>
        </div>
    </footer>
    <section>
    </section>
    <script src="./libs/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.3.3/dist/confetti.browser.min.js"></script>
    <script src="fileupload/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="fileupload/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="fileupload/js/fileinput.js" type="text/javascript"></script>
    <script src="fileupload/js/locales/fr.js" type="text/javascript"></script>
    <script src="fileupload/js/locales/es.js" type="text/javascript"></script>
    <script src="fileupload/themes/fas/theme.js" type="text/javascript"></script>
    <script src="fileupload/themes/explorer-fas/theme.js" type="text/javascript"></script>
    <script>
    let duration
    let title
    let options_length
    let velocity
    let colors_background = []
    let colors_font = []
    let options = []
    let descriptions = []
    let flags_es_premio = []
    let arc
    let toadd = 1
    let basic_time = 10000000000000000000
    let first_game = true

    var seconds = 0;

    let url = new URL(window.location.href);
    let searchParams = new URLSearchParams(url.search);
    let id = searchParams.get('id')
    if (!id) {id = 1}

    function incrementSeconds() {
        seconds += toadd;
        $('#tiempo_girando').val(seconds)
    }

    $(document).ready(function() {
       let str = "";
        $.ajax({
             data: {function: 'GetRuletaInfo', id:id},
             type: 'post',
             url: "./controller.php",
             dataType : "text",
             success: function(data){
                var data = JSON.parse(data);
                console.log(data);
                    duration = data.DURACION
                    velocity = data.VELOCIDAD
                    ruta_audio = data.RUTA_AUDIO
                    nombre_audio = data.NOMBRE_AUDIO
                    options_length = data.OPCIONES.length
                    arc = Math.PI / (options_length / 2);
                    $('#audio').attr("src", ruta_audio)
                    $('#text_audio_actual').text(nombre_audio);
                    for (var i = 0; i < data.OPCIONES.length; i++) {
                        colors_background.push(data.OPCIONES[i].COLOR_FONDO)
                        options.push('\t\t\t\t\t\t\t\t\t\t\t\t\t'+data.OPCIONES[i].OPCION)
                        colors_font.push(data.OPCIONES[i].COLOR_LETRA)
                        descriptions.push(data.OPCIONES[i].DESCRIPCION)
                        flags_es_premio.push(data.OPCIONES[i].FLAG_ES_PREMIO)
                        drawRouletteWheel()

                        str = str
                        +'<tr id="row_'+data.OPCIONES[i].ID+'"><td>'+ (i+1) + '</td>'
                        + '<td>' + data.OPCIONES[i].OPCION + '</td>'
                        + '<td>' + data.OPCIONES[i].DESCRIPCION + '</td>'
                        + '<td>' + data.OPCIONES[i].COLOR_FONDO + '</td>'
                        + '<td>' + data.OPCIONES[i].COLOR_LETRA  + '</td>'
                        +'<td><button id="btn_'+(i+1)+'" title="Editar" onclick="Editar('+ data.OPCIONES[i].ID +')" class="btn btn-warning"><span><i style="color: black" id="icon_'+data.OPCIONES[i].ID+'" class="fa fa-edit" aria-hidden="true"></i></span></button></td>'
                        +'<td><button id="btn_'+(i+1)+'" title="Eliminar" onclick="Eliminar('+ data.OPCIONES[i].ID +')" class="btn btn-danger"><span><i style="color: black" id="icon_'+data.OPCIONES[i].ID+'" class="fa fa-trash" aria-hidden="true"></i></span></button></td>'
                        + '</td></tr>'
                        $("#tabla_opciones tbody").append(str);
                        str="";
                     }
            }
        })
        ListarAudios();
    });

    var startAngle = 0;
    var spinTimeout = null;

    var spinArcStart = 10;
    var spinTime = 0;
    var spinTimeTotal = 0;

    var ctx;

    function drawRouletteWheel() {
        var canvas = document.getElementById("canvas");
        if (canvas.getContext) {
            var outsideRadius = 250;
            var textRadius = 180;
            var insideRadius = 50;

            ctx = canvas.getContext("2d");
            ctx.clearRect(0, 0, 600, 600);


            ctx.strokeStyle = "white"; //Borde delgado
            ctx.lineWidth = 7;

            ctx.font = 'bold 16px Helvetica, Arial';

            for (var i = 0; i < options_length; i++) {
                var angle = startAngle + i * arc;
                ctx.fillStyle = colors_background[i];

                ctx.beginPath();
                ctx.arc(300, 300, outsideRadius, angle, angle + arc, false);
                ctx.arc(300, 300, insideRadius, angle + arc, angle, true);
                ctx.fill();
                ctx.stroke();

                ctx.save();
                ctx.shadowOffsetX = -1;
                ctx.shadowOffsetY = -1;
                ctx.shadowBlur = 0;
                ctx.shadowColor = "rgb(74, 67, 67)";
                ctx.fillStyle = colors_font[i];
                ctx.translate(300 + Math.cos(angle + arc / 2) * textRadius,
                    300 + Math.sin(angle + arc / 2) * textRadius);
                //ctx.rotate(angle + arc / 2 + Math.PI / 2);
                ctx.rotate(angle + arc / 2 + Math.PI); //texto largo
                var text = options[i];
                ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
                ctx.restore();
            }

            //Arrow
            ctx.fillStyle = "#CE1618";
            ctx.beginPath();
            ctx.moveTo(300 - 10, 300 - (outsideRadius + 10));
            ctx.lineTo(300 + 10, 300 - (outsideRadius + 10));
            ctx.lineTo(300 + 10, 300 - (outsideRadius - 5));
            ctx.lineTo(300 + 16, 300 - (outsideRadius - 5));
            ctx.lineTo(300 + 0, 300 - (outsideRadius - 20));
            ctx.lineTo(300 - 16, 300 - (outsideRadius - 5));
            ctx.lineTo(300 - 10, 300 - (outsideRadius - 5));
            ctx.lineTo(300 - 10, 300 - (outsideRadius + 5));
            ctx.fill();
        }
    }

    function spin() {
        toadd = 1
        seconds = 0
        $('#tiempo_girando').val(0)
        if (first_game) {
          setInterval(incrementSeconds, 1000);
        }
        $('#play').attr('onclick', 'stop()')
        $('#play').text('¡Stop!')
        spinAngleStart = Math.random() * 10 + 10;
        spinTime = 0;
        spinTimeTotal = Math.random() * 3 + parseInt(duration) * basic_time; //para duracion indefinida es 10000000000000000000000000, sino, reemplazar por 1000 y setear la duracion en el json
        rotateWheel();
    }

    function stop() {
        let tiempo_girando = $('#tiempo_girando').val()
        toadd = 0 //Ya no aumenta el contador de tiempo girando, pues ya lo detuvo
        if (tiempo_girando<=5) {
          spinTimeTotal = (tiempo_girando * 10000) + 20000;
        }else{
          spinTimeTotal = (tiempo_girando * 10000) / 2 + 30000;
        }
        console.log(spinTimeTotal)
        rotateWheel();
        $('#play').prop('disabled', true)
    }

    function rotateWheel() {
        spinTime += 30;
        if (spinTime >= spinTimeTotal) {
            stopRotateWheel();
            $('#play').prop('disabled', false)
            $('#play').text('¡Girar!')
            $('#play').attr('onclick', 'spin()')
            return;
        }
        var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
        startAngle += (spinAngle * Math.PI / 180);
        drawRouletteWheel();
        spinTimeout = setTimeout('rotateWheel()', velocity); //velocidad, a menor cantidad, mas rapido
    }

    function stopRotateWheel() {
        clearTimeout(spinTimeout);
        var degrees = startAngle * 180 / Math.PI + 90;
        var arcd = arc * 180 / Math.PI;
        var index = Math.floor((360 - degrees % 360) / arcd);
        ctx.save();
        //ctx.font = 'bold 30px Helvetica, Arial';
        let text = options[index] //Nombre de la opcion
        let flag_es_premio = flags_es_premio[index]
        let modal_title
        let description
        let modal_image_url
        let modal_button_text

        if (flag_es_premio == '1') {
            modal_title = '¡Felicidades!'
            modal_image_url = 'hat.png'
            modal_button_text = 'Genial'
            description = 'Premio: '+descriptions[index]
        }else{
            modal_title = 'Lo siento...'
            modal_image_url = 'sad.png'
            modal_button_text = 'Vale'
            description = descriptions[index]
        }
        //ctx.fillText(text, 300 - ctx.measureText(text).width / 2, 300 + 10); quitar el texto en medio de la ruleta
        Swal.fire({
            title: modal_title,
            text: description,
            imageUrl: "./assets/imagenes/"+modal_image_url,
            //instead of imageSize use imageWidth and imageHeight
            imageWidth: 60,
            imageHeight: 60,
            confirmButtonText: modal_button_text,
            confirmButtonColor: "#CE1618"
        }).then(function() {
            //window.location.reload();
            $('#tiempo_girando').val(0)
            toadd = 0
            seconds = 0
            first_game = false
            basic_time = 10000000000000000000
        });
        ctx.restore();
        Celebracion()
    }

    function easeOut(t, b, c, d) {
        var ts = (t /= d) * t;
        var tc = ts * t;
        return b + c * (tc + -3 * ts + 3 * t);
    }

    function Celebracion() {
        var count = 200;
        var defaults = {
            origin: { y: 0.7 }
        };

        function fire(particleRatio, opts) {
            confetti(Object.assign({}, defaults, opts, {
                particleCount: Math.floor(count * particleRatio)
            }));
        }

        var end = Date.now() + (10 * 1000);

        // go Buckeyes!
        var colors = ['#bb0000', '#ffffff'];

        (function frame() {
            confetti({
                particleCount: 2,
                angle: 60,
                spread: 55,
                origin: { x: 0 },
                colors: colors
            });
            confetti({
                particleCount: 2,
                angle: 120,
                spread: 55,
                origin: { x: 1 },
                colors: colors
            });

            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        }());
    }

    function Editar(row_id){

        let clase = $('#icon_'+row_id).attr('class');

        if (clase == 'fa fa-edit') {

            $('#procesar').prop('disabled', true);

            var opcion                  = $('#row_'+row_id).find("td:eq(1)").text();
            var descripcion                    = $('#row_'+row_id).find("td:eq(2)").text();
            var color_fondo                 = $('#row_'+row_id).find("td:eq(3)").text();
            var color_fuente             = $('#row_'+row_id).find("td:eq(4)").text();

            ReemplazarInput(row_id, 1, opcion, '100px' ,'text');
            ReemplazarInput(row_id, 2, descripcion, '150px' ,'text');
            ReemplazarInput(row_id, 3, color_fondo, '50px','color');
            ReemplazarInput(row_id, 4, color_fuente, '50px','color');

            $('#icon_'+row_id).removeClass().addClass('fas fa-save');

        }else{
            var opcion                      = $('#'+row_id+'1').val();
            var descripcion               = $('#'+row_id+'2').val();
            var color_fondo              = $('#'+row_id+'3').val();
            var color_fuente             = $('#'+row_id+'4').val();

                SetearNuevosValores(row_id, 1, opcion);
                SetearNuevosValores(row_id, 2, descripcion);
                SetearNuevosValores(row_id, 3, color_fondo);
                SetearNuevosValores(row_id, 4, color_fuente);

                ActualizarOpcion(row_id,opcion,descripcion, color_fondo, color_fuente)

                $('#icon_'+row_id).removeClass().addClass('fa fa-edit');

        }

     }

     function ActualizarOpcion(id_opcion,opcion,descripcion, color_fondo, color_fuente){
        $.ajax({
                 type: 'post',
                 url: "./controller.php",
                 data: {
                    function: 'ActualizarOpcion',
                    id_opcion: id_opcion,
                    opcion   : opcion,
                    descripcion: descripcion,
                    color_fondo: color_fondo,
                    color_fuente: color_fuente
                },
                 dataType : "text",
                 success: function(data){
                    window.location.reload();
                }
            })
     }

     function ActualizarAudio(){
        $.ajax({
                 type: 'post',
                 url: "./controller.php",
                 data: {
                    function: 'ActualizarAudio',
                    id_ruleta: id,
                    id_audio   : $('#combo_audio').val()
                },
                 dataType : "text",
                 success: function(data){
                    window.location.reload();
                }
            })
     }

     function Eliminar(id_opcion){
        var data = {id_opcion: id_opcion, function: 'EliminarOpcion',};
        $.ajax({
            type: 'post',
            beforeSend : function(xhr, opts) {
                  var confirmacion = confirm("¿Desea eliminar esta opción?");
                  if (confirmacion == true) {
                  } else {
                  xhr.abort();
                  }
             },
            url: "./controller.php",
            data: data,
            success: function (data) {
                window.location.reload();
            },
            error: function () {
                console.log('No pasa nada');
            },
        });
     }

     function AgregarOpcion(){
        var data = {id_ruleta: id,
                         opcion: $('#opcion').val(),
                         descripcion: $('#descripcion').val(),
                         color_fondo: $('#color_fondo').val(),
                         color_letra: $('#color_letra').val(),
                         function: 'AgregarOpcion',};
        $.ajax({
            type: 'post',
            beforeSend : function(xhr, opts) {
                  var confirmacion = confirm("¿Desea agregar esta opción?");
                  if (confirmacion == true) {
                  } else {
                  xhr.abort();
                  }
             },
            url: "./controller.php",
            data: data,
            success: function (data) {
                window.location.reload();
            },
            error: function () {
                console.log('No pasa nada');
            },
        });
     }

     function ReemplazarInput(row_id, index, value, width, type){
        var prev = $('#row_'+row_id).find('td:eq('+index+')');
        prev.text('');
        var html = '';
        html = '<input type="'+type+'" class="form-control" style="font-size: 12px; width:'+width+' ;" name="'+row_id+index+'" id="'+row_id+index+'" value="'+value+'">'
        prev.html(html);
    }

    function SetearNuevosValores(row_id, index, value){
        var prev = $('#row_'+row_id).find('td:eq('+index+')');
        prev.html('');
        prev.text(value);
    }

    function ListarAudios(){

        $.ajax({
            data: {function: 'ListarAudios'},
             type: 'post',
             url: "./controller.php",
            success: function (data) {
                var data = JSON.parse(data);
                console.log(data)
                $('#combo_audio').empty();
                if (data.length > 0) {
                   $.each(data, function(j, result2) {
                        $('#combo_audio').append($("<option/>", {
                           value: result2.ID,
                           text:  result2.NOMBRE_ARCHIVO
                        }));
                   });
                } else {
                        $('#combo_audio').append($("<option/>", {
                           value: '0',
                           text: 'ERROR'
                       }));
                    }
                },
            error: function () {
                console.log('No pasa nada');
            },
            complete: function () {

            }
        });
    }

    $("#combo_audio").change(function(){
        let selected = $(this).find('option:selected');
        let nombre_archivo = selected.text();
        let ruta = './assets/audio/'+nombre_archivo
        $('#audio').attr("src", ruta)
    });

    $('#file-es').fileinput({
        theme: 'fas',
        uploadExtraData:function(previewId, index) {
            var data = {
                id_ruleta : id,
                function: 'EnviarAudio'
            };
            return data;
        },
        language: 'es',
        showRemove:true,
        showPreview: true,
        uploadUrl: "controller.php",
        uploadAsync: false,
        overwriteInitial: false,
        maxFileSize: 10000,
        maxFileCount: 1,
        allowedFileExtensions: ['mp3']
    });

    // CATCH RESPONSE
    $('#file-es').on('filebatchuploaderror', function(event, data, previewId, index) {
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    });

    $('#file-es').on('filebatchuploadsuccess', function(event, data, previewId, index) {
        var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
        //alert (extra.bdInteli + " " +  response.uploaded);
        Swal.fire({
              icon: 'success',
              title: 'Éxito',
              confirmButtonText: `De Acuerdo`,
            }).then((result) => {
              if (result.isConfirmed) {
                $('#file-es').fileinput('reset');
                window.location.reload();
              }
            })
    });
    </script>
</body>

</html>