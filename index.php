<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calculaStem.js" defer></script>
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Estufa eléctrica</h2>
                <p>Resolver las preguntas planteadas:</p>
                <p>
                    1. ¿Qué potencia consume? <br>
                    2. ¿Qué potencia calorífica produce? <br>
                    3. ¿Qué energía eléctrica, medida en kWh, consume en 24 horas? <br>
                    4. ¿Cuánto calor produce en 24 horas?
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/estufa.jpg" alt="Esquema de una estufa">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas:</h2>
                <p>
                    - Energía eléctrica = P <br>
                    - Calor producido = Energía eléctrica consumida <br>
                    - Potencia consumida = P <br>
                    - Potencia calorífica = P <br>
                    - Calor producido = Energía eléctrica consumida
                </p>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <p>
                    - Potencia de la estufa eléctrica: P = 500 W= 0.5 kW <br>
                    - Tiempo: t = 24 h
                </p>
            </section>
            <section class="calculos">
                <h2>Solución:</h2>
                <p>Haz clic en el botón para calcular los resultados.</p>
                <button onclick="calcular();">Calcular</button>
            </section>
            <section class="resultado">
                <h2>Resultados:</h2>
                <div id="resultadoA"></div>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
