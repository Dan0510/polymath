<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Polymath Ventures</title>

        <script src="js/jquery-3.6.0.min.js"></script>
         <script src="js/js.js"></script>
        <link href='css/style.css' rel='stylesheet' />
    </head>
    <body>
        <div class="contenedor">
            <div class="contenedor1">
                <span>Datos de entrada</span>
                <textarea id="textarea-input" value="">
                    
                </textarea>
            </div>

            <div class="contenedor2">
                <span>Seleccione un método</span>
                <div class="contenedor-btn">
                    <button type="button" id="letterify" onclick="faker('letterify')">
                        Letterify
                    </button>
                </div>
                <div class="contenedor-btn">
                    <button type="button" id="numerify" onclick="faker('numerify')">
                        Numerify
                    </button>
                </div>
                <div class="contenedor-btn">
                    <button type="button" id="bothify" onclick="faker('bothify')">
                        Bothify
                    </button>
                </div>
            </div>

            <div class="contenedor3">
                <span>Datos de salida</span>
                <textarea id="textarea-output" disabled >
                    
                </textarea>
            </div>
        </div>
    </body>
</html>