<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A.M.L.F.</title>

    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../recursos/css/main.css">
    <link rel="icon" type="image/svg+xml" href="../recursos/img/admin.svg" sizes="any">
</head>
<body>
    <?php 
        require_once('menu_publico.php');
    ?>
    <div class="container" style="margin-top:80px; margin-bottom:25px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10 col-lg-9 p-0">  
                <div class="card">
                    <div class="card-header bg-primary justify-content-around">
                        <span class='display-4 text-light'> IFCD0109</span>
                        <p class="display-5 font-weight-bold text-light">SEGURIDAD INFORMÁTICA</p>
                    </div>
                    <div class="card-body " id="base_ifct0109">
                        <ul class="list-group border rounded">
                            <li class="list-group-item border-0 bg-light text-primary">MF0486_3 SEGURIDAD EN EQUIPOS INFORMÁTICOS
                                <ul class="list-group">

                                    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 1. CRITERIOS GENERALES COMÚNMENTE ACEPTADOS SOBRE SEGURIDAD DE LOS EQUIPOS INFORMÁTICOS
                                        <ul class="list-group ">

                                            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1111" role="button">Modelo de seguridad orientada a la gestión del riesgo relacionado con el uso de los sistemas de información</a>
                                            <div class="collapse" id="U1111">
                                                <div class="card card-body text-info">
                                                   <img src="../recursos/img/cursos/ifct0109/mf048612a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Modelo de seguridad" title="Modelo de seguridad">

                                                    <p class="text-center"><strong>Amenazas, vulnerabilidades e incidentes de seguridad</strong></p>
                                                    <ul class="pl-3">
                                                        <li>Amenaza: Acciones posibles que dañarían los equipos informáticos.</li>
                                                        <ul class="pl-3">
                                                            <li>Incendio; robo,</li>
                                                            <li>No se pueden eliminar, sólo minimizar daños</li>
                                                        </ul>
                                                        <li>Vulnerabilidad: Debilidad del equipo informático ante las amenazas.</li>
                                                        <ul class="pl-3">
                                                            <li>Intervención para evitarlas, contramedidas o salvaguardas.</li>
                                                        </ul>
                                                        <li>Incidente de seguridad: Daño o impacto al equipo informático</li>
                                                        <ul class="pl-3">
                                                            <li>Reducir la frecuencia</li>
                                                            <li>Reducir el daño</li>
                                                        </ul>
                                                    </ul>
                                                    <img src="../recursos/img/cursos/ifct0109/mf048612b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="AMENAZAS, VULNERABILIDADES E INCIDENTES DE SEGURIDAD" title="AMENAZAS, VULNERABILIDADES E INCIDENTES DE SEGURIDAD">
                                                    <p class="text-center"><strong>Principios de seguridad</strong></p>
                                                    <p class="text-justify">Es imposible alcanzar la completa ausencia de inseguridad, o lo que es lo mismo, no existe la seguridad total.</p>
                                                    <ul class="pl-3">
                                                        <li class="text-justify"><strong>Confidencialidad:</strong> que la información solo esté accesible para quien esté autorizado a ello. Virus informático capaz de capturar tráfico de red</li>
                                                        <li class="text-justify"><strong>Integridad:</strong> es decir, que la información sea exacta y completa. Extravío tarjeta magnética de identificación.</li>
                                                        <li class="text-justify"><strong>Disponibilidad:</strong> que la información esté accesible cuando sea necesario. Corte de suministro eléctrico</li>
                                                    </ul>
                                                    <img src="../recursos/img/cursos/ifct0109/mf048612c.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="CIA" title="CIA">
                                                    <img src="../recursos/img/cursos/ifct0109/mf048612d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="PRINCIPIOS DE SEGURIDAD" title="PRINCIPIOS DE SEGURIDAD">
                                                    <p class="text-center"><strong>Riesgo de un incidente de seguridad</strong></p>
                                                    <p class="text-justify">Medida del daño probable que causará una amenaza, que aprovecha una vulnerabilidad para causar un daño.</p>
                                                    <img src="../recursos/img/cursos/ifct0109/mf048612e.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="RIESGO" title="RIESGO">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>Justificar la inversión en seguridad.</p>
                                                            <p>Evaluación sistemática del estado de riesgo</p>
                                                        </div>
                                                        <div class="col-5">
                                                            <img src="../recursos/img/cursos/ifct0109/mf048612f.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="RIESGO" title="RIESGO">
                                                        </div>
                                                    </div>
                                                    <p class="text-center"><strong>Estudio</strong></p>
                                                    <p class="text-justify">El análisis de riesgos: consiste en identificar amenazas, determinar las vulnerabilidades, y medir el impacto o daño que causaría un incidente.</p>
                                                    <p class="text-justify">La gestión de riesgos: permite elegir las contramedidas de seguridad que se implantarán, a partir de los resultados del análisis de riesgos, una vez determinados los criterios para aceptar un riesgo (legales, económicos, etc.)</p>
                                                    <p class="text-justify">El análisis y gestión de riesgos aporta un valor extraordinario a la gestión de seguridad, reduciendo la probabilidad de fracaso de una empresa, y protegiéndola, al ser una herramienta que facilita que la actividad futura se realice de manera efectiva y controlada.</p>
                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1112" role="button">Relación de las amenazas más frecuentes, los riesgos que implican y las salvaguardas más frecuentes</a>
                                            <div class="collapse" id="U1112">
                                                <div class="card card-body text-info">
                                                    <ul class="pl-3">
                                                        <li>Desastres naturales</li>
                                                        <li>De origen industrial</li>
                                                        <li>Errores y fallos no intencionados</li>
                                                        <li>Ataque intencionados</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1113" role="button">Salvaguardas y tecnologías de seguridad más habituales.</a>
                                            <div class="collapse" id="U1113">
                                                <div class="card card-body text-info">
                                                    <p class="text-justify"><strong>Las salvaguardas, o contramedidas</strong>, persiguen detectar, prevenir, impedir, reducir, y controlar una amenaza y el daño que pueda generar.</p>
                                                    <p>Son elementos de defensa, para que las amenazas no causen tanto daño.</p>
                                                    <p class="text-justify">Como en el caso de las amenazas, las salvaguardas se pueden clasificar según distintas categorías. Por ejemplo, existirán:</p>
                                                    <ul class="pl-3">
                                                        <li class="text-justify"><strong>Salvaguardas preventivas o proactivas</strong>, que persiguen anticiparse a la ocurrencia del incidente (contraseñas).</li>
                                                        <li class="text-justify"><strong>Salvaguardas reactivas</strong>, que persiguen reducir el daño una vez ocurre el incidente. (copias de seguridad)</li>
                                                        <li class="text-justify"><strong>Salvaguarda de "no hacer nada"</strong>, o de aceptar el riesgo existente para los equipos (cuando se cumplan los criterios de aceptación de riesgo de la empresa, y solo cuando esta decisión sea autorizada por la Dirección).</li>
                                                    </ul>
                                                    <p><strong>Seguridad de recursos humanos</strong></p>
                                                    <ul class="pl-3">
                                                        <li>Definición de roles y responsabilidades que contraerá el trabajador.</li>
                                                        <li>Investigación de antecedentes.</li>
                                                        <li>Formación y capacitación de los trabajadores en seguridad de la información.</li>
                                                        <li>Definición de procesos disciplinarios.</li>
                                                        <li>Definir las responsabilidades a la terminación del contrato.</li>
                                                        <li>Devolución de activos.</li>
                                                        <li>Retirada de derechos de acceso a la información.</li>
                                                    </ul>
                                                    <p><strong>Seguridad ambiental</strong></p>
                                                    <ul class="pl-3">
                                                        <li class="text-justify">Medidas que eviten el fuego, el humo o el agua: sistema anti-incendio y antiinundaciones, bien solo de alarma, o incluso de extinción del incendio, o deevacuación del agua.</li>
                                                        <li class="text-justify">Medidas que eviten las vibraciones, golpes, y caídas accidentales: como la fijación en armarios industriales para fijación de equipos informáticos, o armarios tipo rack).</li>
                                                        <li class="text-justify">Medidas para proporcionar temperatura y humedad adecuadas, como equipos de aire acondicionado, y alarmas por exceso, o por defecto (riesgo de condensación).</li>
                                                        <li class="text-justify">Medidas que eviten fallos de suministro eléctrico (corte del suministro, variaciones de tensión por encima o por debajo del suministro nominal, caídas de rayos, etc.).</li>
                                                        <li class="text-justify">Seguridad del cableado, tanto en los materiales empleados, como en su disposición o tendido, siguiendo pautas de un sistema de cableado estructurado, que aseguren una correcta acometida al CPD, un trazado interior adecuado, y unas conexiones a losequipos correctas, de manera practicable, ordenada, e identificada.</li>
                                                        <li class="text-justify">Un mantenimiento preventivo de los equipos, según indicaciones del fabricante, y almenos con chequeos periódicos generales (vías de salida de aire de los chasis,revisiones de temperatura de los procesadores y/o placa base, revisiones de leds, uotros indicadores funcionamiento de discos duros, fuentes de alimentación, etc.).</li>
                                                        <li class="text-justify">Asegurar condiciones de seguridad para desplazamientos del equipo fuera del CPD(vigilancia, exposición a campos electromagnéticos, condiciones de embalaje, ytransporte).</li>
                                                    </ul>
                                                    <p><strong>Seguridad física</strong></p>
                                                    <ul class="pl-3">
                                                        <li class="text-justify">Establecer un perímetro de seguridad física (local, habitaciones), con elementos constructivos acordes (puertas, paredes, ventanas, techos, suelos, etc.).</li>
                                                        <li class="text-justify">Mecanismos de control de ingreso físico (acreditaciones, cerraduras automáticas, etc.).</li>
                                                        <li class="text-justify">Establecer y definir áreas de acceso público, de entrega, de carga, etc.</li>
                                                        <li class="text-justify">Protección contra locales o actividades cercanas (incendios, explosiones, vías de vehículos, o cargas en movimiento).</li>
                                                    </ul>
                                                    <p><strong>Seguridad de acceso lógico</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Definir una política de control de acceso, que identifique la información relacionada con actividades comerciales, los responsables de conceder-configurar-revocar los accesos, el procedimiento de solicitud, etc.</li>
                         <li class="text-justify">Existencia de un registro de usuarios, y de los servicios a los que acceden.</li>
                         <li class="text-justify">Nota: Es importante mantener un registro actualizado de los usuarios, de los servicios, y de los accesos autorizados de los usuarios a los servicios.</li>
                         <li class="text-justify">Gestión de privilegios de acceso, sobre la base de "solo lo que necesitan saber "</li>
                         <li class="text-justify">Gestión de claves de usuario, tanto de las características técnicas o de complejidad, como de la prohibición de divulgación de las mismas. </li>
                         <li class="text-justify">Revisiones periódicas de los derechos de acceso de los usuarios.</li>
                         <li class="text-justify">El establecimiento de responsabilidades del usuario, en cuanto al uso de claves secretas, equipos desatendidos, políticas de "mesas" y pantallas " limpias" (que no muestren información que no sea de carácter público). </li>
                         <li class="text-justify">La existencia de una política de uso de los servicios de red (internet, correo electrónico, etc.).</li>
                         <li class="text-justify">Mecanismos de autenticación y registro para las conexiones externas a la empresa o remotas, como técnicas de redes privadas virtuales (VPN).</li>
                         <li class="text-justify">Separaciones de redes, por ejemplo, en base a servicios de información, o grupos de usuarios o sistemas.</li>
                         <li class="text-justify">Controles de las conexiones que realizan los usuarios hacia fuera de la empresa.</li>
                         <li class="text-justify">Controles de acceso al sistema operativo, como la identificación y autenticación del usuario, un sistema automático de gestión de contraseñas, la restricción del uso de las utilidades del sistema operativo, el cierre de sesiones por inactividad, y la limitación de los periodos válidos para los inicios de sesión.</li>
                         <li class="text-justify">Controles de acceso a las aplicaciones y la información, como controles de lectura, escritura, modificación de archivos, y carpetas; o el aislamiento de la información confidencial, por ejemplo, en sistemas con cifrado integrado. </li>
                         <li class="text-justify">Establecimiento de una política para trabajo en movilidad, que incluya las comunicaciones móviles y el teletrabajo.</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1114" role="button">La gestión de la seguridad informática como complemento a salvaguardas y medidas tecnológicas.</a>
             <div class="collapse" id="U1114">
                 <div class="card card-body text-info">
                     <p class=text-center><strong>Sistema de Gestión de Seguridad de la Información (SGSI)</strong></p>
                     <p class=text-center>Sistema de gestión usado para establecer y mantener un entorno seguro.</p>
                     <p class="text-justify">Se trata, sencillamente, de analizar la empresa, y fijar sus necesidades de seguridad iniciales, de poner en práctica las medidas de protección para lograr alcanzar estas necesidades, de ser capaz de medir si se han alcanzado o no, y de detectar las mejoras en las medidas de protección para alcanzar las necesidades.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048615a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="ciclo de mejora continua de Dening" title="ciclo de mejora continua de Dening">
                     <p class="text-justify">«asegurar la continuidad del negocio, minimizando los riesgos, maximizando el retorno de la inversión y permitiendo nuevas oportunidades para la empresa»</p>
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 2. ANÁLISIS DE IMPACTO DE NEGOCIO
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1121" role="button">Identificación de procesos de negocio soportados por sistemas de información</a>
             <div class="collapse" id="U1121">
                 <div class="card card-body text-info">
                     <p class="text-justify">En general, existirán salvaguardas de diferentes precios, que conducirán a diferentes tiempos de recuperación. Minimizando el coste total (suma del coste de la parada del servicio y del coste de la recuperación), se determina el tiempo de recuperación, las salvaguardas a implementar, y otros requerimientos de seguridad.</p>
                     <p class="text-justify">El BIA estudia las consecuencias que tendría en el negocio en una parada de sus procesos vitales por un determinado tiempo: qué hay que recuperar, cuánto cuesta hacerlo, y cómo hay que recuperarlo.</p>
                     <p class="text-justify">El punto de partida del BIA es identificar los procesos de negocio y su criticidad.</p>
                     <p class="text-justify">Existen 3 técnicas generalmente aceptadas para enumerar los procesos de negocio soportados por sistemas de información, junto a su criticidad, y coste de interrupción:</p>
                     <ul class="pl-3">
                         <li>Formularios.</li>
                         <li>Entrevistas a los usuarios avanzados o dueños de los procesos.</li>
                         <li>Reuniones entre personal de TIC y los usuarios avanzados.</li>
                     </ul><br/>
                     <p><strong>FORMULARIOS</strong></p>
                     <p class="text-justify">Se puede distribuir un formulario a todos los trabajadores, o solo a los responsables de área, en los que respondan una serie de preguntas que ayuden a identificar las funciones clave para esa área.</p>
                     <p class="text-justify">La información recogida debe permitir evaluar los siguientes resultados del BIA:</p>
                     <ul class="pl-3">
                         <li>A. Cuáles son los procesos críticos, u ordenarlos por prioridad.</li>
                         <li>B. Cuál es el daño/ impacto, en función del tiempo que se tarde en restablecerse el servicio.</li>
                         <li>C. Cuál es el coste de las diferentes estrategias de recuperación, que proporcionarán un tiempo y un punto objetivo de recuperación.</li>
                     </ul><br/>
                     <p><strong>ENTREVISTAS A LOS USUARIOS CLAVE.</strong></p>
                     <p class="text-justify">Una entrevista resulta adecuada cuando no haya certeza de que las preguntas previstas identifiquen todos los aspectos de valoración de la importancia de un proceso: las entrevistas dan cabida a recoger información bajo criterios desconocidos a priori.</p>
                     <p><strong>REUNIONES ENTRE PERSONAL DE TIC Y LOS USUARIOS AVANZADOS.</strong></p>
                     <p class="text-justify">Esta técnica puede emplearse después de tener datos recogidos mediante formularios. Permite, de manera rápida, decidir el impacto de los diferentes procesos o funciones, y el tiempo de parada admisible en cada uno de ellos.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048622a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Costes de incidente" title="Costes de incidente">
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1122" role="button">Valoración de los requerimientos de confidencialidad, integridad y disponibilidad de los procesos de negocio.</a>
             <div class="collapse" id="U1122">
                 <div class="card card-body text-info">
                     <p class="text-justify">La fiabilidad o seguridad, se apoya en tres aspectos o principios de seguridad esenciales:</p>
                     <ul class="pl-3">
                         <li class="text-justify">La confidencialidad, es decir, que la información solo esté accesible para quien esté autorizado a ello.
                         <li class="text-justify">La integridad, es decir, que la información sea exacta y completa, de manera que solo pueda modificarla quien esté autorizado a ello.
                         <li class="text-justify">La disponibilidad, es decir, que la información esté accesible cuando sea necesario
                     </ul><br/>
                     <p><strong>PROCESOS</strong></p>
                     <p class="text-justify">Conjunto de las fases sucesivas de un fenómeno natural o de una operación artificial.</p>
                     <p class="text-justify">«Conjunto de actividades mutuamente relacionadas o que interactúan, las cuales transforman elementos de entrada en resultados.» (ISO9000).</p>
                     <p class="text-justify">Un proceso de negocio representa al conjunto de trabajos que se realizan para generar un producto o servicio. En un proceso, desde el punto de vista de la información, intervendrán tres elementos únicos: personas, equipos (que incluyen aplicaciones) e información.</p>
                     <p class="text-justify">Las posibles relaciones entre tres estos elementos son múltiples. En el ámbito del procesamiento automático de la información, se encontrarán personas que manejan equipos con una información de entrada, para generar una información de salida o resultado.</p>
                     <p class="text-justify">Un proceso tiene valor por su resultado, es decir, por la información que genera.</p>
                     <p><strong>VALORACION CIA DE LA INFORMACION</strong></p>
                     <p class="text-justify">No toda la información tiene la misma importancia en una empresa. En consecuencia, es necesario clasificarla, valorándola según diferentes aspectos, para posteriormente asignar unos recursos u otros a su protección.</p>
                     <p class="text-justify">La información:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Es un elemento concreto, definido, independiente de cómo se almacena o conserva.</li>
                         <li class="text-justify">Es valiosa para la empresa, y no se puede reemplazar sin coste, esfuerzo, tiempo, u otros recursos.</li>
                         <li class="text-justify">Forma parte de la empresa, sin ella la empresa sufre un daño.</li>
                     </ul><br/>
                     <p><strong>VALORACION DE LA INFORMACION</strong></p>
                     <p class="text-justify">Desde la perspectiva de la seguridad la información se clasifica en :</p>
                     <ul class="pl-3">
                         <li class="text-justify">.Confidencial</li>
                         <ul class="pl-3">
                             <li class="text-justify ">Sujeta a legalismos, normativas y reglamentos.</li>
                             <li class="text-justify">Su difusión genera una grave daño para la empresa</li>
                         </ul>
                         <li class="text-justify">.Interna</li>
                         <ul class="pl-3">
                             <li class="text-justify">Su difusión genera un daño leve a la empresa</li>
                             <li class="text-justify">Acceso libre para el personal interno de la empresa</li>
                         </ul>
                         <li class="text-justify">.Público</li>
                         <ul class="pl-3">
                             <li class="text-justify">La no disponibilidad no tiene ninguna consecuencia</li>
                             <li class="text-justify">Su difusión no genera daño o pérdida para la empresa</li>
                         </ul>
                     </ul><br/>
                     <p><strong>VALORACION CIA DE LA INFORMACION - CONFIDENCIALIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048623.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="confidencialidad" title="confidencialidad">
                     <p><strong>VALORACION CIA DE LA INFORMACION - INTEGRIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048623a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="integridad" title="integridad">
                     <p><strong>VALORACION CIA DE LA INFORMACION - DISPONIBILIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048623b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="disponibilidad" title="disponibilidad">
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1123" role="button">Determinación de los sistemas de información que soportan los procesos de negocio y sus requerimientos de seguridad.</a>
             <div class="collapse" id="U1123">
                 <div class="card card-body text-info">
                     <p><strong>VALORACIÓN CIA DE LAS PERSONAS.</strong></p>
                     <p class="text-justify">La información es manejada por personas, y resulta importante tener identificadas a dichas personas, que serán empleados de la empresa, o externos (proveedores, clientes, visitas, y otros).</p>
                     <p class="text-justify">El responsable de identificar las personas que acceden a la información de un proceso, es el responsable de dicho proceso; y puede coincidir habitualmente con el responsable o jefe del área o departamento que desempeña dicho proceso en la empresa.</p>
                     <p><strong>VALORACION CIA DE LA PERSONAS - CONFIDENCIALIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048624.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="confidencialidad" title="disponibilidad">
                     <p><strong>VALORACION CIA DE LA PERSONAS - INTEGRIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048624a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="integridad" title="disponibilidad">
                     <p><strong>VALORACION CIA DE LA PERSONAS - DISPONIBILIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048624b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="disponibilidad" title="disponibilidad">
                     <p><strong>VALORACIÓN CIA DE SISTEMAS FÍSICOS, PROGRAMAS Y SERVICIOS DE SOPORTE</strong></p>
                     <p class="text-justify">En esta categoría se deben clasificar los componentes que intervienen en el proceso, al margen de las personas y de la información. Se clasifican aqtú los requisitos para los equipos físicos (hardware, incluyendo ordenadores, equipos de comunicaciones y soportes de almacenamiento (CD, discos duros extraíbles, etc.), para las aplicaciones o programas (software, incluyendo sistemas operativos y aplicaciones), e incluso para los servicios de soporte necesarios, como el suministro eléctrico, la climatización, o el alojamiento.</p>
                     <p><strong>VALORACIÓN CIA DE SISTEMAS FÍSICOS, PROGRAMAS Y SERVICIOS DE SOPORTE - CONFIDENCIALIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048624c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="confidencialidad" title="confidencialidad">
                     <p><strong>VALORACIÓN CIA DE SISTEMAS FÍSICOS, PROGRAMAS Y SERVICIOS DE SOPORTE - INTEGRIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048624d.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="integridad" title="integridad">
                     <p><strong>VALORACIÓN CIA DE SISTEMAS FÍSICOS, PROGRAMAS Y SERVICIOS DE SOPORTE - DISPONIBILIDAD</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048624e.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3"  alt="disponibilidad" title="disponibilidad">
                     <p class="text-justify">La siguiente es una enumeración sencilla de los posibles elementos que intervienen en un proceso de negocio:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Equipos hardware de procesamiento: servidores, estaciones de trabajo críticas, estaciones de trabajo, ordenadores portátiles, dispositivos móviles como tablet-PC, PDA, smartphones, e impresoras.</li>
                         <li class="text-justify">Equipos de comunicaciones de red: ro u ter, switches, firewalls, líneas de comunicaciones, centralitas telefónicas, faxes, terminales telefónicos fijos, y móviles.</li>
                         <li class="text-justify">Programas: sistemas operativos, aplicaciones y utilidades, y códigos fuente de programas.</li>
                         <li class="text-justify">Soportes de información: soportes con backup de sistemas operativos y aplicaciones, soportes con backup de código fuente de programas, y soportes con backup de datos (bases de datos y archivos).</li>
                         <li class="text-justify">Servicios de soporte: sistema eléctrico y de alimentación ininterrumpida, aire acondicionado, y elementos de fijación (armarios de rack y otra mecánica).</li>
                     </ul><br/>
                     <p><strong>HERRAMIENTAS DE AYUDA PARA DETERMINAR LOS COMPONENTES.</strong></p>
                     <p class="text-justify">Partiendo de la narrativa, se enumeran en listas independientes los elementos de cada tipo que intervengan en cada categoría: personas, sistemas, e información de entrada. Esta enumeración es importante, porque constituye una forma elemental del inventario básico de los activos de información del proceso.</p>
                     <p class="text-justify">Posteriormente, cada uno de estos elementos se relaciona con los demás mediante una acción que puede resumirse en un verbo (genera, autoriza, procesa, transmite, etc.).</p>
                     <p class="text-justify">De esta manera, se puede ordenar de manera jerárquica la dependencia de los componentes, y su progreso, hasta el resultado final.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048624f.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="funcion venta de una libreria" title="Función de venta de una libreria">
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 3. GESTIÓN DE RIESGOS
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1131" role="button">Aplicación del proceso de gestión de riesgos y exposición de las alternativas más frecuentes.</a>
             <div class="collapse" id="U1131">
                 <div class="card card-body text-info">
                     <p class="text-justify">Será recomendable realizar un AGR en todas las empresas que dependan de los sistemas de información y comunicaciones para el cumplimiento de su misión.</p>
                     <p class="bg-light text-primary border border-secondary my-3 p-2 text-center">ES PREFERIBLE PREVENIR A RECUPERAR, O A CORREGIR.</p>
                     <p class="text-justify">Será necesario realizar un AGR. cuando la empresa quiera obtener determinadas certificaciones de cumplimiento de normas (v.g. ISO 27001).</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048632a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Proceso de gestión del riesgo" title="Proceso de gestión del riesgo">
                     <p class="text-justify">Realizar un AGR puede ser muy costoso; requiere de la intervención de diferentes personas en la empresa, y del acuerdo de un criterio homogéneo para cuantificar los riesgos.</p>
                     <p class="text-justify">Primero, lo más importante, es decir, donde haya máximo impacto (daño posible) y máximo riesgo (daño probable).</p>
                     <p class="text-justify">Como criterio de valoración puede decidirse dar máximo valor a la confidencialidad de la información, y a la imagen corporativa de la empresa, apoyada en la máxima defensa de la privacidad de los datos de los clientes.</p>
                     <p class="text-justify">Como se mencionó en la introducción, el AGR consta de 2 fases: en la primera (AR), se mide el riesgo, y en la segunda (GR), se decide qué hacer con el riesgo.</p>
                     <p class="text-justify">Ejercicio</p>
                     <p class="text-justify">En una empresa de proyectos de ingeniería trabajan 7 personas: 2 dueños de la empresa, 2 técnicos que elaboran proyectos (uno de los cuales se encarga del sistema informático de la empresa), 1 comercial, 1 delineante y 1 administrativo.</p>
                     <p class="text-justify">Proponga el equipo que debe participar en un AGR, y formule un criterio para valorar homogéneamente los riesgos.</p>
                     <p class="text-justify">Para la primera fase existen diferentes métodos, que difieren en las fórmulas empleadas para calcular los riesgos, o en otros detalles técnicos no esenciales; estos métodos se estudiarán más adelante (3.3).</p>
                     <p class="text-justify">La segunda fase, la gestión o tratamiento de riesgos, es el proceso de seleccionar e implementar medidas para modificar el riesgo:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Mitigar el riesgo: la empresa puede optar por aplicar contramedidas que reduzcan el impacto de un incidente, o aplicar contramedidas para reducir la probabilidad de la amenaza.</li>
                         <li class="text-justify">Evitar el riesgo: la empresa puede decidir eliminar los activos o servicios bajo riesgo. Puede interpretarse como una forma de mitigación extrema.</li>
                         <li class="text-justify">Transferir el riesgo: la empresa puede mitigar el riesgo propio, trasladándoselo a otros. Por ejemplo, puede compartir el activo o función bajo riesgo con otra empresa, o subcontratar la función completamente a terceros, o contratar pólizas de seguros con empresas aseguradoras.</li>
                         <li class="text-justify">Aceptar el riesgo: la empresa decide no hacer nada. Esta medida siempre debe autorizarla la Dirección de la empresa.</li>
                     </ul>
                     <p class="text-justify">La decisión de adoptar una acción u otra se tomará atendiendo a diversos criterios, entre los cuales estarán estos 4 aspectos:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Requisitos legales o regulatorios, tanto de ámbito nacional como internacional. Estos requisitos siempre deben cumplirse.</li>
                         <li class="text-justify">Requisitos operacionales, como normas que deba cumplir la empresa.</li>
                         <li class="text-justify">Objetivos de la empresa, como los derivados de su estrategia.</li>
                         <li class="text-justify">Rentabilidad de la acción, comparando el coste de la acción frente al beneficio o daño probable que evita.</li>
                     </ul>
                     <p class="text-justify">La aplicación sistemática de este proceso de Gestión de riesgos permite repartir las inversiones en seguridad, minimizando el riesgo residual total de la empresa.</p>
                     <p class="text-justify">Los pasos generales de un proceso clásico y simplificado de Gestión de riesgos, aunque pueden variar ligeramente dependiendo de la metodología concreta que se aplique, son los siguientes:</p>
                     <ul class="p-3">
                         <li class="text-justify">AR (análisis de riesgos):</li>
                         <ul class="p-3">
                             <li class="text-justify">Identificar los activos y sus relaciones de dependencia.</li>
                             <li class="text-justify">Identificar las amenazas y sus vulnerabilidades.</li>
                             <li class="text-justify">Estimar el impacto (daño posible), y la probabilidad del mismo.</li>
                             <li class="text-justify">Estimar el nivel de riesgo de la ocurrencia de la amenaza.</li>
                             <li class="text-justify">Estimar el coste de mitigar el riesgo (incluyendo evitarlo o transferirlo).</li>
                         </ul>
                         <li class="text-justify">GR (gestión de riesgos):</li>
                         <ul class="p-3">
                             <li class="text-justify">Identificar los criterios de aceptación de riesgo (regulatorios, normativos, objetivos de la empresa, y rentabilidad).</li>
                             <li class="text-justify">Determinar, según esos criterios, si el riesgo calculado en AR es aceptable, o si debe mitigarse.</li>
                             <li class="text-justify">Identificar las medidas de seguridad necesarias, y evaluar la reducción de riesgo que aportan (plan de acción).</li>
                             <li class="text-justify">Seleccionar las medidas que se implementarán (comparación de coste vs. beneficio).</li>
                             <li class="text-justify">Estimar el nivel de riesgo residual.</li>
                             <li class="text-justify">Adoptar las medidas según sean:</li>
                             <ul class="p-3">
                                 <li class="text-justify">Medidas proactivas (preventivas).</li>
                                 <li class="text-justify">Medidas reactivas (continuidad y recuperación).</li>
                                 <li class="text-justify">Aceptar el riesgo residual si se cumplen los criterios de aceptación (no hacer nada).</li>
                             </ul>
                             <li class="text-justify">Evaluar la efectividad de las medidas (vulnerabilidades corregidas, amenazas evitadas en impacto y/o frecuencia), para volver a iniciar el AR .</li>
                         </ul>
                     </ul>
                     <p class="text-justify">Proponga soluciones que mitiguen, eviten, o transfieran los riesgos de inundación, corte de suministro eléctrico, robo de información por boicot interno, y error lógico de una aplicación de contabilidad interna.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1132" role="button">Metodologías comúnmente aceptadas de identificación y análisis de riesgos.</a>
             <div class="collapse" id="U1132">
                 <div class="card card-body text-info">
                     <p><strong>MAGERIT</strong></p>
                     <p class="text-justify">El Consejo Superior de Administración Electrónica, dentro del Ministerio de Administraciones Públicas, publicó en 2006 una Metodología de Análisis y Gestión de Riesgos de los Sistemas de Información (MAGERIT).</p>
                     <p class="bg-light text-primary border border-secondary  p-2 text-center">CONOCER PARA CONFIAR: CONOCER LOS RIESGOS PARA PODER AFRONTARLOS Y CONTROLARLOS</p>
                     <ul class="pl-3">
                         <li class="text-justify">Si el sistema es simple o reducido, o solo se requiere una primera aproximación, puede bastar un planteamiento informal.</li>
                         <li class="text-justify">Que solo se requiera el estudio de los ficheros afectados por la legislación LOPD.</li>
                         <li class="text-justify">Que solo se requiera el estudio de las garantías de confidencialidad.</li>
                         <li class="text-justify">Que solo se requiera el estudio de la disponibilidad de los servicios, por ejemplo, para desarrollar un plan de contingencia.</li>
                     </ul>
                     <p><strong>FASE 1. ANÁLISIS DE RIESGOS</strong></p>
                     <p class="text-justify">Se trata de ejecutar 5 pasos sencillos, para obtener una lista de los riesgos que soporta el sistema de información:</p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Paso 1:</strong> determinar los activos y su valoración de C, I y A</li>
                         <li class="text-justify"><strong>Paso 2:</strong> determinar las amenazas, cuánto degradan la C, I y A de un activo, y con qué frecuencia o probabilidad aparecen.</li>
                         <li class="text-justify"><strong>Paso 3:</strong> determinar las salvaguardas existentes y su eficacia (cuánto evitan la degradación C, I, y A de un activo, y cuánto reducen la frecuencia de la amenaza).</li>
                         <li class="text-justify"><strong>Paso 4:</strong> determinar el impacto, o medida del daño posible al activo por la materialización de una amenaza.</li>
                         <li class="text-justify"><strong>Paso 5:</strong> determinar el riesgo, o medida del daño probable al activo (impacto ponderado por la tasa de ocurrencia de la amenaza).</li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048633a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Análisis de riesgo, sin salvaguardas" title="Análisis de riesgo, sin salvaguardas">
                     <p><strong>FASE 1. Activos</strong></p>
                     <p class="bg-light text-primary border border-secondary  p-2 text-center">son los recursos del sistema de información o relacionados con este, necesarios para que la organización funcione correctamente, y alcance los objetivos propuestos por su Dirección.</p>
                     <p class="text-justify">El activo esencial es la información, o datos (D), y alrededor se encuentran también las siguientes familias de activos :</p>
                     <ul class="p-3">
                         <li class="text-justify">Los servicios (S), que se prestan gracias a los datos, y que se necesitan para los mismos.</li>
                         <li class="text-justify">Las aplicaciones (SW), que manejan dichos datos.</li>
                         <li>Los equipos informáticos (HW), que ejecutan las aplicaciones, y entregan los servicios y los datos.</li>
                         <li class="text-justify">Los soportes de almacenamiento (SI), que almacenan los datos.</li>
                         <li class="text-justify">El equipamiento auxiliar (AUX), que complementa a los equipos.</li>
                         <li class="text-justify">Las redes de comunicaciones (COM), que intercambian los datos.</li>
                         <li class="text-justify">Las instalaciones (L), donde residen los equipos y las redes.</li>
                         <li class="text-justify">Las personas (P), que explotan u operan los elementos anteriores.</li>
                     </ul>
                     <p><strong>Fase 1. Paso 1: activos</strong></p>
                     <p class="text-justify">La dependencia de los activos se organizan en capas, según:</p>
                     <ul class="p-3">
                         <li class="text-justify"><strong>Capa 4:</strong> las funciones y procesos de la organización (objetivos, bienes, y servicios producidos).</li>
                         <li class="text-justify"><strong>Capa 3:</strong> la información y los datos.</li>
                         <li class="text-justify"><strong>Capa 2:</strong> el sistema de información propiamente dicho (aplicaciones, equipos, soportes, equipamiento auxiliar, y redes de comunicaciones).</li>
                         <li class="text-justify"><strong>Capa 1:</strong> el entorno que se precisa (equipamiento y suministros eléctricos de climatización y de comunicaciones, el personal, y otros, como el edificio o el mobiliario).</li>
                     </ul>
                     <p class="text-justify">Para analizar un sistema complejo, e intentar comprenderlo en su conjunto, hay que realizar una reflexión sobre cuáles son sus componentes, y cómo están relacionados entre ellos. Para ello, es habitual enumerar los elementos que se comprenden como integrantes del sistema, para posteriormente agruparlos en categorías o grupos, según algún criterio de agrupación. Por último, hay que definir un criterio de relación, y representar las relaciones entre elementos gráficamente, mediante flechas, arcos, o conectores.</p>
                     <p class="text-justify">El criterio de relación puede ser "depende de'; o "se necesita para': Así, se forma un diagrama en capas (que agrupen elementos de mayor a menor complejidad de arriba abajo), con conexiones que reflejan la dependencia que los elementos superiores (más complejos), tienen de los elementos inferiores (menos complejos).</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048633b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Dependencia de los activos." title="Dependencia de los activos.">
                     <p class="text-justify">Realice una representación gráfica en 4 etapas del servicio de impresión digital en una imprenta pequeña..</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048633c.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Representación gráfica en cuatro etapas." titile="Representación gráfica en cuatro etapas.">
                     <p><strong>Valoración de los activos</strong></p>
                     <p>Para la seguridad de la información, la valoración de los activos no se correspondecon lo que cuesta; el valor habrá que averiguarlo. (propio o acumulado)</p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>La autenticidad</strong>, midiendo el perjuicio que causaría no saber exactamente quién ha hecho cada cosa, es decir, ¿quién hace qué?, distinguiendo:</li>
                         <ul class="pl-3">
                             <li class="text-justify">.En el uso de un servicio, o autenticidad del usuario.</li>
                             <li class="text-justify">.En el acceso a los datos, o autenticidad de quién accede para consultar los datos o para modificarlos.</li>
                         </ul>
                         <li class="text-justify"><strong>La trazabilidad</strong>, es decir, ¿quién hace qué, y cuándo? en dos aspectos:</li>
                         <ul class="pl-3">
                             <li class="text-justify">.En el uso de un servicio, midiendo el perjuicio que causaría no saber exactamente quién ha usado un servicio.</li>
                             <li class="text-justify">.En el acceso a datos, midiendo el perjuicio que causaría no saber exactamente quién ha accedido a unos datos, y qué ha hecho con ellos.</li>
                         </ul>
                     </ul>
                     <p>En MAGERIT, se propone determinar el valor de un activo como el coste que supondría salir de una incidencia que destrozara el activo. Para ello, se pueden considerar, entre otros, los siguientes factores:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Coste de reposición (adquisición e instalación).</li>
                         <li class="text-justify">Coste de mano de obra invertida en recuperar el activo.</li>
                         <li class="text-justify">Lucro cesante o pérdida de ingresos.</li>
                         <li class="text-justify">Capacidad de operar (confianza usuarios y proveedores).</li>
                         <li class="text-justify">Sanciones por incumplimiento de ley u obligaciones contractuales.</li>
                         <li class="text-justify">Daño a otros activos propios o ajenos.</li>
                         <li class="text-justify">Daño a personas.</li>
                         <li class="text-justify">Daños medioambientales.</li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048633d.png" class="img-responsive d-block mx-auto p-3 w-175 mb-3" alt="Valoración de activos." title="Valoración de activos.">
                     <p><strong>FASE 1. Paso 2: amenazas</strong></p>
                     <p class="text-justify">El siguiente paso consiste en analizar las amenazas para los activos considerados. Esto supone reflexionar sobre qué cosas pueden ocurrirle al activo que puedan causarle daño.</p>
                     <p class="text-justify">Es el paso más complejo y costoso.</p>
                     <p class="bg-light border border-secondary text-center pl-2">¿Cuáles son las amenazas?</p>
                     <p class="text-justify">No existe un listado completo siempre válido. El analista de riesgos, debe construir en cada caso la lista de amenazas de interés, basándose en su experiencia, y en el alcance del AGR que esté realizando.</p>
                     <p class="text-justify">Existen catálogos de amenazas publicados y de libre acceso, muchos incluidos en las diferentes metodologías de análisis de riesgos, o en normas de seguridad de la información:</p>
                     <ul class="pl-3">
                         <li class="text-justify">El método MAGERIT incluye un catálogo de amenazas.</li>
                         <li class="text-justify">La norma ISO 13335-4:2000 incluye un catálogo de amenazas y de salvaguardas para ellas.</li>
                         <li class="text-justify">El ISF (Information Security Forum), en su publicación anual "The 2013 Standard of Good Practice for Information Security", también incluye una amplia lista de amenazas.</li>
                         <li class="text-justify">La "Federal Office for Information Security (BSI)" alemana, entrega un catálogo de amenazas elementales, para aplicar su metodología IT-Grundschutz, (BSIStandard 100-2)'~</li>
                     </ul>
                     <p>Para los elementos dados en la actividad anterior, enumere todas las amenazas que podrían presentarse. Dentro de cada categoría (desastre natural, desastre industrial, errores no intencionados, y ataques intencionados), señalar el20% de amenazas que se estimen más relevantes.</p>
                     <p><strong>Degradación</strong></p>
                     <p class="text-justify">De las amenazas, se deberá calcular la degradación que producen, y la frecuencia con que aparecen. Como se verá, estos datos son imposibles de calcular, o hacerlo con precisión supondría un esfuerzo desproporcionado a la finalidad del AGR. La solución es emplear aproximaciones proporcionales al objetivo del análisis de riesgos, que, normalmente, se concretan en usar valoraciones cualitativas.</p>
                     <p class="text-justify">Caracterizar el daño que una amenaza puede causar en un activo, es prácticamente imposible, o extremadamente complejo.</p>
                     <p class="text-justify">Por ejemplo, para un activo como un ordenador, y una amenaza de incendio. La degradación en la confidencialidad e integridad será nula, pero máxima en la disponibilidad.</p>
                     <p class="text-justify">Para un activo como una aplicación, y una amenaza de un programa malintencionado,la degradación en confidencialidad e integridad puede ser mediana o baja, y puede ser alta en la disponibilidad. </p>
                     <p class="text-justify">Para un activo como una base de datos, y una amenaza de error de usuario, la degradación en confidencialidad puede ser nula, alta en integridad, y mediana en disponibilidad.</p>
                     <p class="text-justify">La degradación mide el daño causado por un incidente si ocurriera. Se debe estimar para cada activo, y para cada dimensión de valor del activo. Este trabajo suele ser extenso, y exige reflexionar sobre múltiples combinaciones. En la mayoría de las ocasiones, resultará imposible dar un valor preciso.</p>
                     <table class="table table-responsive w-75  mx-auto" >
                         <th colspan="3">Valoración cualitativa</th>
                         <tr>
                             <td><strong>"la dimensión se ve ... "</strong></td>
                             <td><strong>Degradación</strong></td>
                             <td style="text-align:right;"><strong>MAGERIT</strong></td>
                         </tr>
                         <tr>
                             <td>Totalmente degradada</td>
                             <td>Completa</td>
                             <td style="text-align:right;">100%</td>
                         </tr>
                         <tr>
                             <td>Algo afectada</td>
                             <td>Parcial</td>
                             <td style="text-align:right;">10%</td>
                         </tr>
                         <tr>
                             <td>Prácticamente nada afectada</td>
                             <td>Inexistente</td>
                             <td style="text-align:right;">1%</td>
                         </tr>
                     </table>
                     <p><strong>FRECUENCIA DE LA AMENAZA</strong></p>
                     <p class="text-justify">Introduce el carácter temporal o la posibilidad de ocurrencia de una amenaza, ya que esta puede acarrear una degradación completa en el valor del activo, pero ser de muy improbable materialización. Otras amenazas, como los errores de usuario, pueden producir menor degradación, pero ser mucho más frecuentes.</p>
                     <p>Nuevamente, la dificultad para determinar con qué frecuencia ocurrirá una amenaza es muy alta.</p>
                     <table class="table table-responsive w-75  mx-auto" >
                         <th colspan="3">Valoración cualitativa</th>
                         <tr>
                             <td><strong>"la amenaza sucede ... "</strong></td>
                             <td><strong>Frecuencia</strong></td>
                             <td style="text-align:right;"><strong>MAGERIT</strong></td>
                         </tr>
                         <tr>
                             <td>A diario </td>
                             <td>Muy frecuente (MF) </td>
                             <td style="text-align:right;">100</td>
                         </tr>
                         <tr>
                             <td>Mensualmente </td>
                             <td>Frecuente (F) </td>
                             <td style="text-align:right;">10</td>
                         </tr>
                         <tr>
                             <td>Una vez al año </td>
                             <td>Normal (N)</td>
                             <td style="text-align:right;">1</td>
                         </tr>
                         <tr>
                             <td>Cada varios años </td>
                             <td>Poco frecuente (PF) </td>
                             <td style="text-align:right;">1/10</td>
                         </tr>
                     </table>
                     <p><strong>FASE 1. Paso 4: impacto</strong></p>
                     <p class="text-justify">El impacto es la medida del daño sobre el activo por la materialización de la amenaza. Se calcula para cada activo, para cada amenaza, y para cada dimensión.</p>
                     <p class="bg-light border border-secondary text-center p-2">Impacto = Valor x Degradación.</p>
                     <p class="bg-light text-primary border border-secondary text-center p-2">Por ejemplo, si un activo tiene un valor CIA = (5, 8, 6), y se conoce una amenaza conuna degradación CIA = ( 100 %, 0 %, 50 % ), el impacto de la amenaza en el activo será ( 5,0, 3), que es el daño que causa en el valor.</p>
                     <p class="bg-light border border-secondary text-center p-2">Valor final= Valor inicial - Impacto</p>
                     <p class="bg-light text-primary border border-secondary text-center p-2">Valor final= (5, 8, 6) - (5, 0, 3) -> (0, 8, 3)</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048633e.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3"  alt="Tabla Impacto" title="Tabla Impacto">
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Impacto acumulado</strong></li>
                         <p class="text-justify">Es el impacto producido sobre el valor acumulado de un activo, a raíz de sus amenazas. Facilita determinar las salvaguardas a aplicar a los medios.</p>
                         <li class="text-justify"><strong>Impacto repercutido</strong></li>
                         <p class="text-justify">Es el impacto en un activo a consecuencia de su valor propio (no del acumulado), y de las amenazas a las que están expuestos sus activos inferiores.</p>
                         <li class="text-justify"><strong>Agregación de impactos</strong></li>
                         <ul class="pl-3">
                             <li class="text-justify">Cuando se precise agregar impactos, se debe observar que:</li>
                             <li class="text-justify">Se pueden agregar impactos repercutidos sobre diferentes activos.</li>
                             <li class="text-justify">Se pueden agregar impactos acumulados sobre diferentes activos que no dependan entre ellos, ni de ningún activo superior común (o se sobrevalorarían los activos superiores comunes).</li>
                             <li class="text-justify">En general, puede agregarse el impacto de diferentes amenazas sobre un mismo activo, pero conviene considerar en qué medida las amenazas son independientes, y pueden ser concurrentes.</li>
                             <li class="text-justify">Puede agregarse el impacto de una amenaza en diferentes dimensiones</li>
                         </ul>
                     </ul>
                     <p><strong>FASE 1. Paso 5: riesgo</strong></p>
                     <p class="text-justify">Conocido el impacto y la frecuencia con que ocurre una amenaza, derivar el riesgo es inmediato. El riesgo crece con la frecuencia y con el impacto. Se calcula para cada activo, para cada amenaza, y en cada dimensión.</p>
                     <p class="bg-light border border-secondary text-center">Riesgo = Impacto x Frecuencia</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048633f.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tabla de riesgo." title="Tabla de riesgo.">
                     <ul class="pl-3">
                         <p><strong>Riesgo acumulado</strong></p>
                         <p class="text-justify">Es el riesgo producido por el impacto acumulado de un activo, a raíz de la frecuencia de su amenaza. </p>
                         <p><strong>Riesgo repercutido</strong></p>
                         <p class="text-justify">Es el riesgo en un activo a consecuencia de su impacto repercutido, y de la frecuencia de la amenaza. </p>
                         <p><strong>Agregación de riesgos</strong></p>
                         <p class="text-justify">Cuando se precise agregar riesgos, se debe observar que:</p>
                         <ul class="pl-3">
                             <li class="text-justify">Se pueden agregar riesgos repercutidos sobre diferentes activos.</li>
                             <li class="text-justify">Se pueden agregar riesgos acumulados sobre diferentes activos que no dependan entre ellos, ni de ningún activo superior común (o se sobrevalorarían los activos superiores comunes).</li>
                             <li class="text-justify">En general, puede agregarse el riesgo de diferentes amenazas sobre un mismo activo, pero conviene considerar en qué medida las amenazas son independientes, y pueden ser concurrentes.</li>
                             <li class="text-justify">Puede agregarse el riesgo de una amenaza en diferentes dimensiones.</li>
                         </ul>
                     </ul>
                     <p class="text-justify">Tras la ejecución de estos pasos (fase 1, paso 1, paso 2, paso 4, y paso 5), se dispone del riesgo máximo potencial, que es al que está expuesto el sistema si no hay ninguna salvaguarda. </p>
                     <p class="text-justify">Este análisis, aunque parezca irreal, es importante, porque dará la línea base de máxima inseguridad del sistema de información.</p>
                     <p class="text-justify">La siguiente iteración en el AGR, consiste en tener en cuenta las salvaguardas o contramedidas que ya estén instaladas en el sistema (fase 1, paso 3). Este punto se detallará en el punto 3.4.</p>
                     <div class="bg-light text-primary border border-secondary text-center p-2">
                         <p><strong>Actividad practica 4</strong></p>
                         <p class="text-justify">Para el cálculo de riesgo de un servicio, se tomará el ejemplo de un servicio de "cálculo de nóminas", con valoración (CIA =muy alto, muy alto, bajo), formado por los activos: nóminas, aplicación de cálculo de nóminas, servidor, electricidad, y asesor Laboral. </p>
                         <p class="text-justify">El valor que estos activos tienen aislados no es relevante frente al del servicio, y se considera que las degradaciones se acumulan.</p>
                         <p class="text-justify">Por su frecuencia, se desea realizar una primera aproximación al análisis de riesgos para la amenaza de errores de configuración (el servidor se detiene una vez al mes, y es necesario reiniciarlo para que opere).</p>
                         <p class="text-justify">Por la degradación se quiere analizar la amenaza de divulgación de la información (supondría un daño máximo, por la pérdida de confianza de los clientes, aunque su frecuencia es “muy poco frecuente” por tratarse de ataques muy aislados, que suceden una vez cada varios años).</p>
                         <p class="text-justify">Determinar el riesgo del servicio, justificando las valoraciones que se estime oportuno realizar.</p>
                     </div><br/>
                     <p><strong>Otras metodologías comúnmente adoptadas</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>ISO 27005</strong> Forma parte de la familia de normas ISO 27000, dedicadas a la seguridad de la información,</li>
                         <li class="text-justify"><strong>OCTAVE</strong> Son las siglas de Operationally Critica/ Threat, Asset and Vulnerability Evaluation. El método está desarrollado por la Universidad de Carnegie Mellon, y define un conjunto de criterios, para poder emplear métodos más flexibles según la empresa.</li>
                         <li class="text-justify"><strong>CRAMM</strong> Es una metodología de la Agencia Central de Cómputo y Telecomunicaciones del Reino Unido, que data de los años 80.</li>
                         <li class="text-justify"><strong>UNE71504</strong> Desarrollado por AENOR en 2008,</li>
                         <li class="text-justify"><strong>FAIR</strong> Pretende aprovechar metodologías del análisis de riesgos en otros ámbitos empresariales</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1133" role="button">Aplicación de controles y medidas de salvaguarda para obtener una reducción del riesgo.</a>
             <div class="collapse" id="U1133">
                 <div class="card card-body text-info">
                     <img src="../recursos/img/cursos/ifct0109/mf048634a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Análisis de riesgos con salvaguardas." title="Análisis de riesgos con salvaguardas.">
                     <p><strong>Riesgo tras la introducción de salvaguardas</strong></p>
                     <p class="text-justify">Las salvaguardas o contramedidas son los procedimientos o mecanismos tecnológicos que reducen el riesgo.</p>
                     <p><strong>FASE l. Paso 3: salvaguardas o contramedidas</strong></p>
                     <p class="text-justify">Las salvaguardas intervienen reduciendo el riesgo de dos maneras: </p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Limitando el daño causado</strong></li>
                         <p class="text-justify">Se aplican cuando la amenaza se materializa, limitando sus consecuencias. Por ejemplo, pueden reducir la degradación, o pueden ayudar a detectar la materialización de la amenaza, para frenar el avance de la degradación. Incluso pueden consistir en facilitar la pronta recuperación del sistema, una vez que la amenaza ha destruido el activo.</p>
                         <li class="text-justify"><strong>Reduciendo la frecuencia de las amenazas.</strong></li>
                         <p class="text-justify">Son las medidas preventivas. Idealmente, llegan a impedir completamente que la amenaza se materialice. Estimar la reducción en la frecuencia es nuevamente tarea muy compleja, por lo que se emplearán valores cualitativos para estimar la nueva ocurrencia de la amenaza con la contramedida aplicada.</p>
                     </ul>
                     <p class="text-justify">Existen metodologías y documentación que recogen miles de controles o salvaguardas,como por ejemplo:</p>
                     <ul class="pl-3">
                         <li class="text-justify">El método CRAMM, introducido en el epígrafe anterior.</li>
                         <li class="text-justify">La asociación sin ánimo de lucro JSF (Information Security Forum) publica anualmente un documento, The standard of good practice for Information Security (SOGP JSF), que recoge más de 3.000 salvaguardas, o controles para reducir lasamenazas.</li>
                         <li class="text-justify">La norma IT-Grundschutz, publicada por la Oficina Federal Alemana de Seguridad de la Información, recoge también un catálogo exhaustivo de salvaguardas y controles.</li>
                         <li class="text-justify">ISO 27002, introduce 133 controles o contramedidas, agrupadas en diferentes</li>
                     </ul>
                     <p class="text-justify">Analizadas las salvaguardas, obtenemos una nueva degradación moderada así como una frecuencia mejorada.</p>
                     <p><strong>Revisión del paso 4: Impacto residual</strong></p>
                     <p class="bg-light border border-secondary text-center">Degradación mejorada= Degradación x (100 - Eficacia Contra medida)</p>
                     <p class="bg-light border border-secondary text-center">Impacto Residual = Valor x Degradación mejorada</p>
                     <p class="bg-light border border-secondary text-center">Impacto Residual= Impacto x ( 100-Eficacia Contramedida)</p>
                     <p class="text-justify">Analizadas las salvaguardas, obtenemos una nueva degradación moderada así como una frecuencia mejorada.</p>
                     <p><strong>Revisión del paso 5: Riesgo residual</strong></p>
                     <p class="text-justify">Si las salvaguardas son 100 % eficaces, eliminan completamente la frecuencia de las amenazas, y el riesgo residual sería despreciable. En la realidad, el sistema de información permanece sometido a un riesgo residual.</p>
                     <p class="bg-light border border-secondary text-center">Riesgo Residual= Impacto Residual x Frecuencia mejorada.</p>
                     <div class="bg-light text-primary border border-secondary text-center p-2">
                         <p><strong>Actividad practica 4b</strong></p>
                         <p class="text-justify">Continuando el AGR de la aplicación práctica anterior, calcular el riesgo residual tras introducir las siguientes salvaguardas:</p>
                         <ul class="pl-3">
                             <li class="text-justify">Un procedimiento de gestión de cambios y configuración, que se espera que logre reducir a la cuarta parte los errores del sistema</li>
                             <li class="text-justify">Un mecanismo de encriptación de los datos personales de las nóminas, mediante claves diferentes para cada cliente.</li>
                         </ul>
                         <p class="text-justify">Justificar las valoraciones realizadas.</p>
                     </div><br/>
                     <p><strong>GESTION DEL RIESGO RESIDUAL</strong></p>
                     <p class="text-justify">Si el riesgo residual es despreciable, o admisible para las normas de aceptación de la empresa, se ha terminado. En caso contrario, es preciso reducirlo aún más.</p>
                     <p class="text-justify">Un riesgo residual no despreciable precisa ser interpretado más allá de su simple valor numérico. Por ejemplo, si el valor es similar al riesgo potencial (sin considerar ninguna salvaguarda), se puede concluir que las salvaguardas aplicadas no sirven; no significa que no se haya hecho nada, sino que hay cosas fundamentales sin hacer. Retrocediendo en las amenazas o sumandos del riesgo, se obtendrá la lista de cosas por corregir, que debe derivar en un informe de tareas o informe de insuficiencias.</p>
                     <p class="text-justify">MAGERIT concreta que la aplicación de salvaguardas debe realizarse de manera ordenada, siguiendo 5 etapas</p>
                     <ul class="pl-3">
                         <li class="text-justify">Debe existir una política de organización que determine los responsables de cada cosa.</li>
                         <li class="text-justify">Hay que establecer unos objetivos claros, para decidir si la amenaza ha sido conjurada.</li>
                         <li class="text-justify">Hay que establecer unas instrucciones paso a paso (un procedimiento) de lo que hay que hacer.</li>
                         <li class="text-justify">Hay que desplegar las salvaguardas.</li>
                         <li class="text-justify">Hay que desplegar los controles que permitan saber que las salvaguardas están funcionando como se había previsto.</li>
                     </ul><br/>
                     <p><strong>SELECCIÓN DE MEDIDAS A APLICAR</strong></p>
                     <p class="text-justify">Las medidas deseables son preventivas, pero no siempre será posible o su coste asumible. Inmediatamente después, conviene disponer de contramedidas de detección, ya que en ningún caso debe permitirse que un ataque pase inadvertido. Posteriormente, conviene aplicar las medidas reactivas de emergencia, que paren y limiten el incidente; y por último, las medidas reactivas de recuperación, para regresar a donde se debe estar, con un plan de continuidad adecuado.</p>
                     <p class="text-justify">Por su naturaleza, las salvaguardas pueden ser de tipo técnico (aplicaciones, equipos, y comunicaciones), físicas (aplicadas para proteger el entorno y los equipos), organizativas (de prevención y gestión de incidencias) y la política de personal (contratación, formación, organización, plan de reacción y por último, medidas disciplinarias).</p>
                     <p><strong>ACTITUD DE LA DIRECCIÓN</strong></p>
                     <p class="text-justify">La Dirección debe determinar el nivel de impacto y riesgo que está dispuesta a asumir. Dicho de otra manera, debe asumir la responsabilidad derivada del informe de insuficiencias, u ordenar que se mitiguen los riesgos inaceptables.</p>
                     <p class="text-justify">Los requisitos que intervendrán en la determinación de este umbral de riesgo serán al menos los 4 ya introducidos en el capítulo 2: </p>
                     <ul class="pl-3">
                         <li class="text-justify">requisitos legales,
                         <li>
                         <li class="text-justify">operacionales o normativos, </li>
                         <li class="text-justify">Requisitos para el logro de los objetivos de la empresa, </li>
                         <li class="text-justify">y requisitos económicos.</li>
                     </ul><br/>
                     <img src="../recursos/img/cursos/ifct0109/mf048634b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Equilibrio económico de una salvaguarda." title="Equilibrio económico de una salvaguarda.">
                     <p><strong>Revisión del riesgo introducido por las salvaguardas</strong></p>
                     <p class="text-justify">Es frecuente olvidar que las salvaguardas, sobre todo las técnicas, introducen indirectamente en los sistemas de información nuevos riesgos, porque los activos a los que protegen pasan a depender de ellas, y porque las propias salvaguardas están sujetas a amenazas. Las contramedidas pueden verse como subsistemas de soporte que repercuten riesgo hacia los equipos superiores que protegen.</p>
                     <p class="text-justify">Es preciso iterar el AGR, para que el riesgo residual del sistema con las contramedidas añadidas (es decir, restando el riesgo que quitan pero sumando el que las propias salvaguardas pueden aportar) sea inferior al riesgo residual previo a la adición de la salvaguarda. Esta diferencia es la protección efectiva que aportan.</p>
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 4. PLAN DE IMPLANTACIÓN DE SEGURIDAD
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1141" role="button">Determinación del nivel de seguridad existente de los sistemas frente a la necesaria en base a los requerimientos de seguridad de los procesos de negocio.</a>
             <div class="collapse" id="U1141">
                 <div class="card card-body text-info">
                     <p><strong>DETERMINACIÓN DE LOS REQUISITOS DE SEGURIDAD</strong></p>
                     <p class="text-justify">Existen 3 fuentes principales de requerimientos de seguridad, que deben documentarse por escrito, para poder estudiar más adelante la seguridad existente respecto a estos requisitos:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Una fuente deriva de evaluar los riesgos para la organización, tomando en cuenta la estrategia general, y los objetivos de la empresa.</li>
                         <li class="text-justify">Otra fuente son los requisitos legales, reguladores, estatutarios, o los requisitos incluidos o derivados de los contratos contraídos por la empresa con sus socios comerciales, proveedores, y clientes</li>
                         <li class="text-justify">La última fuente para recopilar los requisitos, procede del conjunto particular de principios, objetivos, y requerimientos comerciales que el sistema de información debe cumplir para sostener las operaciones de la empresa.</li>
                     </ul><br/>
                     <p><strong>DETERMINACIÓN DEL NIVEL DE SEGURIDAD EXISTENTE</strong></p>
                     <p class="text-justify">Para determinar el nivel de seguridad existente, hay que estudiar y analizar información procedente básicamente de 4 fuentes:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Auditorías basadas en riesgo, que implican realizar un AR.</li>
                         <li class="text-justify">Registros de incidentes de seguridad.</li>
                         <li class="text-justify">Mediciones de efectividad de las salvaguardas.</li>
                         <li class="text-justify">Sugerencias y retroalimentación de los interesados.</li>
                     </ul>
                     <p class="text-justify">Las diferencias entre el nivel de seguridad existente y el nivel requerido, servirán para elaborar un informe de insuficiencias (usando terminología habitual en auditoría), que será el punto final del AR.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1142" role="button">Selección de medidas de salvaguarda para cubrir los requerimientos de seguridad de los sistemas de información.</a>
             <div class="collapse" id="U1142">
                 <div class="card card-body text-info">
                     <p><strong>SELECCIÓN DE CONTROLES EN MAGERIT</strong></p>
                     <p class="text-justify">En MAGERIT, la aplicación de contramedidas es un proceso ordenado, que resumidamente consiste en </p>
                     <ul class="pl-3">
                         <li class="text-justify">determinar responsables, </li>
                         <li class="text-justify"> establecer objetivos para saber que la amenaza ha sido tratada, </li>
                         <li class="text-justify"> dar procedimientos paso a paso de cómo ejecutar la contramedida, </li>
                         <li class="text-justify"> ejecutar la contramedida, y </li>
                         <li class="text-justify"> evaluar si todo está funcionando según lo previsto,</li>
                     </ul><br/>
                     <p><strong>CRITERIO GENERAL DE SELECCIÓN</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048643a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Incidente de sseguridad." title="Incidente de sseguridad.">
                     <p><strong>CRITERIO DE PÉRDIDAS Y GANANCIAS</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Ganancias:</strong> se deben realizar valoraciones del coste de la seguridad o contramedidas, frente al nivel de protección que logran (lo que resulta difícil de cuantificar, como se vio en el capítulo anterior). Existen en general tendencias crecientes y exponenciales (que reflejan que inicialmente se logra mucha seguridad con poca inversión, y que posteriormente, incluso pequeños incrementos de la seguridad son cada vez más caros).</li>
                         <li class="text-justify"><strong>Pérdidas:</strong> el coste de la inseguridad o riesgo, decrece exponencialmente (reflejando que el riesgo desciende inicialmente muy rápido con pequeñas medidas, para posteriormente precisar muchas medidas para reducirlo un poco).</li>
                     </ul><br/>
                     <p><strong>CATÁLOGO DE SALVAGUARDAS DE MAGERIT</strong></p>
                     <p class="text-justify">MAGERIT clasifica las salvaguardas en 4 tipos (medidas organizativas o procedimientos, política de personal, seguridad física de los locales y áreas de trabajo, y soluciones técnicas en hardware-software-comunicaciones). </p>
                     <p class="text-justify">MAGERIT también agrupa las salvaguardas según el tipo de activo al que defiende, encontrando servicios (capa 4), la información o los datos (capa 3), las aplicaciones, equipos, y las comunicaciones (en capa 2), y el entorno y las personas (capa 1); existiendo controles que afectan a todas las capas.</p>
                     <p class="text-justify">Según los activos: Todos, Servicios, Información, Aplicciones, Seguridad Física y Personal.</p>
                     <p><strong>PROTECCIÓN BÁSICA SEGÚN MAGERIT</strong></p>
                     <p class="text-justify">Las medidas de protección básica constituyen una ‘línea base" de seguridad, que debe tenerse en todos los sistemas de información, salvo que se demuestre que no son pertinentes en algún caso particular. Conllevan medidas que podrían calificarse de puro sentido común, y por tanto, absolutamente necesarias; sin excepción. Una vez alcanzada esta línea base, puede progresarse, con mayor confianza, a niveles más elaborados y específicos para cada subsistema.</p>
                     <p><strong>PROTECCIÓN BÁSICA SEGÚN MAGERIT. MEDIDAS ESENCIALES</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">En base a la tipificación de los activos.</li>
                         <li class="text-justify">En base al valor de los activos.</li>
                         <li class="text-justify">En base a las amenazas.</li>
                         <li class="text-justify">En base las vulnerabilidades</li>
                     </ul><br/>
                     <p><strong>SELECCIÓN DE CONTROLES EN IS017799:2005, ISO 27002</strong></p>
                     <p class="text-justify">El Apartado 4.2 de la norma ISO 17799 especifica que los controles deben asegurar que se reduzcan los riesgos a un nivel aceptable, según:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Los requerimientos y restricciones de la legislación y regulaciones nacionales e internacionales.</li>
                         <li class="text-justify">Los objetivos organizacionales.</li>
                         <li class="text-justify">Los requerimientos y restricciones operacionales.</li>
                         <li class="text-justify">El coste de implementación y operación en relación a los riesgos que se están reduciendo manteniéndolo proporcional a los requisitos de la empresa.</li>
                         <li class="text-justify">La necesidad de equilibrar la inversión en implementación y operación de las contramedidas, con el daño probable resultado de las amenazas.</li>
                     </ul>
                     <p class="text-justify">La norma ISO 27001 marca que debe existir un documento que proporcione un resumen de las decisiones referentes a la selección de salvaguardas y tratamiento del riesgo. Este documento se denomina declaración de aplicabilidad, y debe incluir al menos lo siguiente:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Controles seleccionados. Incluir los objetivos de control y los controles seleccionados, así como los motivos para seleccionarlos.</li>
                         <li class="text-justify">Controles existentes. Incluir los objetivos de control y los controles actualmente implementados.</li>
                         <li class="text-justify">Controles excluidos. Se deben enumerar expresamente los objetivos de control y los controles, excluidos de los propuestos en el anexo A de la norma IS027001 (es decir, los recomendados por la norma IS027002 e ISO 17799:2005), justificando por qué se excluyen .</li>
                     </ul>
                     <ul class="pl-3">
                         <li class="text-justify">OTROS CONTROLES</li>
                         <ul class="pl-3">
                             <li class="text-justify">IT-Grundschutz, de la Federal Office for Information Security (BSI).</li>
                             <li class="text-justify">EN ISA (European Un ion A gene y for Network and Information Security ).</li>
                             <li class="text-justify">ISF (Information Security Forum).</li>
                         </ul>
                         <li class="text-justify">ISO 13335-4</li>
                         <li class="text-justify">NIST (NATIONAL INSTITUTE OF STANDARDS AND TECHNOLOGY, U.S. DP.OF COMMERCE)</li>
                         <li class="text-justify">COBIT (CONTROL OBJECTIVES FOR INFORMATION AND RELATED TECHNOLOGY)</li>
                         <li class="text-justify">REGLAMENTO DE DESARROLLO DE LA LOPD (R.D 1720/2007)</li>
                         <li class="text-justify">ENS (ESQUEMA NACIONAL DE SEGURIDAD).</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1143" role="button">Guía para la elaboración del plan de implantación de las salvaguardas seleccionadas.</a>
             <div class="collapse" id="U1143">
                 <div class="card card-body text-info">
                     <p><strong>Plan para el tratamiento del riesgo en IS027001</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048644a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tratamiento del riesgo en IS027001." title="Tratamiento del riesgo en IS027001.">
                     <p class="text-justify">El plan de implantación de las salvaguardas según se recoge en IS027001, y con Los detalles de JS027003</p>
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 5. PROTECCIÓN DE DATOS DE CARÁCTER PERSONAL.
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1151" role="button">Principios generales de protección de datos de carácter personal.</a>
             <div class="collapse" id="U1151">
                 <div class="card card-body text-info">
                     <p class="text-justify">El objeto de la LOPD, según indica su artículo 1, es «garantizar y proteger, en lo que concierne al tratamiento de los datos personales, las libertades públicas, y los derechos fundamentales de las personas físicas, y especialmente, de su honor e intimidad personal y familiar».</p>
                     <p><strong>Ámbito de aplicación y conceptos fundamentales.</strong></p>
                     <p class="text-justify">De manera resumida, se trata de proteger los datos sobre una persona (el afectado o interesado) recogidos con su consentimiento, que se almacenan junto a otros en un fichero para ser procesados (el tratamiento de los datos); en este proceso también se define un responsable del fichero, y un encargado del tratamiento.</p>
                     <p class="text-justify">Se definen los datos de carácter personal (artículo 3-a), como cualquier información concerniente a personas físicas, identificadas o identificables. De acuerdo con la Directiva 95/46/CE, "se considerará identificable toda persona cuya identidad pueda determinarse, directa o indirectamente, en particular mediante un número de identificación o uno o varios elementos específicos, característicos de su identidad física, fisiológica, psíquica, económica, cultural, o social";</p>
                     <ul class="pl-3">
                         <li class="text-justify">Un fichero (artículo 3-b) es un conjunto de datos de carácter personal, sin importar la forma o modalidad de su creación, almacenamiento, organización y acceso.</li>
                         <li class="text-justify">El afectado o interesado (artículo 3-e) es la persona física titular de los datos que sean objeto del tratamiento.</li>
                         <li class="text-justify">El consentimiento (artículo 3-h) es toda manifestación de voluntad, libre, inequívoca, específica e informada, por la que el interesado consiente el tratamiento de datos personales concernientes.</li>
                         <li class="text-justify">Se define el tratamiento de los datos (artículo 3-c) como las operaciones y procedimientos técnicos de carácter automatizado o no, que permitan la recogida, grabación, conservación, elaboración, modificación, bloqueo y cancelación, así como las cesiones de datos que resulten de comunicaciones, consultas, interconexiones, y transferencias.</li>
                         <li class="text-justify">El responsable del fichero o tratamiento (artículo 3-d) es la persona física o jurídica, de naturaleza pública o privada, u órgano administrativo, que decida sobre la finalidad, contenido, y uso del tratamiento.</li>
                         <li class="text-justify">El encargado del tratamiento (artículo 3-g), es la persona física o jurídica que, solo, o conjuntamente con otros, trate datos personales por cuenta del responsable de tratamiento.</li>
                         <li class="text-justify">La cesión o comunicación de datos (artículo 3-i) es toda revelación de datos a personas distinta del interesado.</li>
                         <li class="text-justify">Son fuentes accesibles al público (artículo 3-j) los ficheros consultables por cualquier persona sin ninguna norma que lo limite.</li>
                         <p class="text-justify">Sobre el ámbito de aplicación de la LOPD, es importante señalar que se aplicará para controlar todo tratamiento de datos de carácter personal:</p>
                         <ul class="pl-3">
                             <li class="text-justify">Que se realice en territorio español, en el marco de las actividades de un establecimiento del responsable del tratamiento</li>
                             <li class="text-justify">Que se realice en territorio español, en el marco de las actividades de un establecimiento del responsable del tratamiento</li>
                             <li class="text-justify">Ficheros de especial tratamiento que se regirán por disposiciones específicas, y por lo especialmente previsto en la LOPD (Título IV)</li>
                             <li class="text-justify">No se aplica a los ficheros mantenidos por personas físicas, en el ejercicio de actividades personales o domésticas.</li>
                             <li class="text-justify">No se aplica a ficheros sometidos a normativa de materias clasificadas; a los establecidos para investigación del terrorismo, o formas graves de delincuencia organizada.</li>
                         </ul>
                     </ul><br/>
                     <p><strong>Principios de protección y derechos de las personas</strong></p>
                     <p class="text-justify">Calidad y seguridad de los datos (artículo 4,9 y 10).</p>
                     <p class="text-justify">En la LOPD se establece que solo se podrán recoger aquellos datos de carácter personal que sean estrictamente necesarios para la finalidad del tratamiento al que se les va a someter, y donde el responsable del fichero debe velar por la confidencialidad, integridad, y disponibilidad de esta información.</p>
                     <p class="text-justify">Sobre la calidad, la LOPD dicta que los DCP Deben ser adecuados, pertinentes, y no excesivos en relación al fin para el que se recaban y tratan, y no podrán usarse para otros fines incompatibles (artículo 4).</p>
                     <p class="text-justify">Sobre la seguridad, la LOPD dicta que los DCP (artículo 4-6) deberán almacenarse de forma que se permita el ejercicio del derecho de acceso que se verá más adelante, salvo que legalmente sean cancelados.</p>
                     <p class="text-justify">El RLOPD sí detalla las medidas de seguridad que deben aplicarse en función de la valoración de los activos, valoración que no es económica, sino que se mide en términos del mayor o menor intimidad recogida por los datos de carácter personal.</p>
                     <p><strong>Derechos de las personas</strong></p>
                     <p class="text-justify">Los afectados a los que se soliciten DCP, de acuerdo con su derecho de información en la recogida de datos (artículo 5) deberán ser informados previamente de modo expreso, preciso, e inequívoco de:</p>
                     <ul class="pl-3">
                         <li class="text-justify">La existencia de un fichero o tratamiento, de la finalidad de la recogida de los DCP, y de los destinatarios de la información.</li>
                         <li class="text-justify">Del carácter obligatorio o facultativo de su respuesta a las preguntas que se les planteen.</li>
                         <li class="text-justify">Las consecuencias de la obtención de datos, o de su negativa a suministrarlos.</li>
                         <li class="text-justify">La posibilidad de ejercer sus derechos de acceso, rectificación, cancelación, y oposición (derechos ARCO).</li>
                         <li class="text-justify">La identidad y dirección del responsable del tratamiento o su representante.</li>
                     </ul>
                     <p class="text-justify">Las personas tienen el derecho de consulta al Registro General de Protección de Datos (artículo 14) de manera pública y gratuita, para conocer la existencia de DCP, su finalidad, e identidad del responsable del tratamiento.</p>
                     <p class="text-justify">Las personas tienen también derechos de acceso, rectificación, cancelación y oposición (derechos ARCO), cuyo objetivo último reconocido por el Tribunal Constitucional es garantizar a la persona un poder de control sobre sus datos personales</p>
                     <p><strong>Comunicación y acceso por terceros</strong></p>
                     <p class="text-justify">La LOPD establece que los DCP solo podrán ser comunicados o cedidos a un tercero, cuando concurran dos circunstancias (artículo 11):</p>
                     <ul class="pl-3">
                         <li class="text-justify">Con el previo consentimiento del afectado, para fines directamente relacionados con las funciones legítimas del cedente y del cesionario</li>
                         <li class="text-justify">Sin el previo consentimiento del interesado, cuando la cesión esté autorizada en una ley.</li>
                     </ul>
                     <p class="text-justify">No se considera comunicación el acceso de un tercero (artículo 12), cuando resulte necesario para la prestación de un servicio al responsable del tratamiento.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1152" role="button">Infracciones y sanciones contempladas en la legislación vigente en materia de protección de datos de carácter personal.</a>
             <div class="collapse" id="U1152">
                 <div class="card card-body text-info">
                     <p><strong>Infracciones</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Leves</li>
                         <ul class="pl-3">
                             <li class="text-justify">No remitir a la AEPD las notificaciones dispuestas en la LOPD.</li>
                             <li class="text-justify">No solicitar la inscripción de ficheros DCP.</li>
                             <li class="text-justify">Incumplir el deber de información al afectado acerca del tratamiento cuando los datos sean recogidos del propio afectado.</li>
                             <li class="text-justify">La transmisión de datos a un encargado sin cumplir el artículo 12.</li>
                         </ul>
                         <li class="text-justify">Graves</li>
                         <ul class="pl-3">
                             <li class="text-justify">Proceder a la creación de ficheros de titularidad pública o iniciar la recogida de DCP para los mismos sin autorización pública oficial.</li>
                             <li class="text-justify">Tratar DCP sin el consentimiento de los afectados, cuando sea necesario conforme a la LOPD y sus disposiciones de desarrollo.</li>
                             <li class="text-justify">Tratar DCP o usarlos posteriormente, con quebrantamiento de los principios y garantías de calidad de los datos (artículo 4).</li>
                             <li class="text-justify">La vulneración del deber de secreto (artículo JO) sobre el tratamiento DCP. </li>
                             <li class="text-justify">El impedimento o la obstaculización de los derechos ARCO.</li>
                             <li class="text-justify">Incumplir el deber de información al afectado acerca del tratamiento cuando los datos no hayan sido recabados del propio interesado.</li>
                             <li class="text-justify">Incumplir los restantes deberes de notificación o requerimiento al afectado, impuestos por la LO PD y sus disposiciones de desarrollo.</li>
                             <li class="text-justify">Mantener los ficheros locales, programas, o equipos que contengan DCP, sin las debidas condiciones de seguridad determinadas por vía reglamentaria.</li>
                             <li class="text-justify">No atender los requerimientos o apercibimientos de la AEPD, o no proporcionarle cuantos documentos e informaciones sean solicitados por la misma.</li>
                             <li class="text-justify">Obstruir al ejercicio de la función inspectora.</li>
                             <li class="text-justify">Comunicar o ceder los DCP sin contar con legitimación para ello, en los términos dispuestos por la LO PD, y sus disposiciones de desarrollo.</li>
                         </ul>
                         <li class="text-justify">Muy Graves</li>
                         <ul class="pl-3">
                             <li class="text-justify">La recogida de DCP de forma engañosa o fraudulenta.</li>
                             <li class="text-justify">Tratar de ceder los DCP especialmente protegidos según el artículo 7 (sobre ideología, afiliación sindical, religión y creencias, los que hagan referencia al origen racial, a la salud y a la vida sexual, y los referentes a la comisión de infracciones penales o administrativas) de la LOPD, salvo en los supuestos en que la misma lo autoriza, o crear ficheros con la finalidad exclusiva de almacenar DCP especialmente protegidos.</li>
                             <li class="text-justify">No cesar el tratamiento ilícito de DCP cuando existe un requerimiento previo del director de la AEPD para ello.</li>
                             <li class="text-justify">La transferencia internacional de DCP a países que no proporcionen un nivel de protección equiparable, sin autorización del director de la AEPD, salvo cuando no resulte necesaria la autorización conforme a la LOPD.</li>
                         </ul>
                     </ul>
                     <div class="bg-light text-primary border border-secondary text-justify m-3 p-3">
                         <p><strong>Clasifique las siguientes infracciones:</strong></p>
                         <ul class="pl-3">
                             <li class="text-justify">Un trabajador, copia DCP que usa en su propio beneficio cuando abandona la empresa en la que trabajaba.</li>
                             <li class="text-justify">Una empresa ha declarado un fichero en la AEPD, y recopila DCP de los formularios de contratos de servicio que hace a sus clientes, sin informarles de ello.</li>
                             <li class="text-justify">Una empresa vende bases de datos DCP sin solicitar consentimiento a los afectados.</li>
                             <li class="text-justify">Una empresa ha recibido instrucción de la AEPD de cesar un tratamiento ilícito de los DCP que guarda en sus bases de datos, pero está segura de que no se están usando esos datos, por lo que desoye el requerimiento de la AEPD, pensando que es un error.</li>
                             <li class="text-justify">El responsable de seguridad de la información no está aplicando una medida obligatoria para el cumplimiento de la LOPD, que consiste en realizar copias de respaldo semanales de los DCP.</li>
                         </ul>
                     </div>
                     <p><strong>Sanciones</strong></p>
                     <p class="text-justify">Se multarán de 900 a 40.000 euros las infracciones leves, de 40.001 a 300.000 € las infracciones graves, y de 300.001 a 600.000 € las infracciones muy graves.</p>
                     <p class="text-justify">Las sanciones se graduarán atendiendo a los siguientes criterios (artículo 45):</p>
                     <ul class="pl-3">
                         <li class="text-justify">El carácter continuado de la infracción.</li>
                         <li class="text-justify">El volumen de los tratamientos efectuados.</li>
                         <li class="text-justify">El vínculo de la actividad del infractor con la realización de tratamientos de DCP.</li>
                         <li class="text-justify">El volumen de negocio o actividad del infractor.</li>
                         <li class="text-justify">Los beneficios obtenidos a consecuencia de la infracción.</li>
                         <li class="text-justify">El grado de intencionalidad.</li>
                         <li class="text-justify">La reincidencia en la comisión de las mismas infracciones.</li>
                         <li class="text-justify">La naturaleza de los perjuicios causados a los afectados.</li>
                         <li class="text-justify">La acreditación de que el infractor tenía implantados procedimientos de seguridad adecuados para la recogida y tratamiento, siendo la infracción una anomalía en el funcionamiento de dichos controles, no debida a una falta de diligencia exigible al infractor.</li>
                         <li class="text-justify">Otras circunstancias relevantes, para determinar el grado de ilegalidad y de culpabilidad presentes en la infracción concreta.</li>
                     </ul><br/>
                     <p><strong>Reducciones y apercibimiento</strong></p>
                     <p class="text-justify">El órgano sancionador establecerá la cuantía, aplicando la escala relativa de la clase de infracciones que preceda inmediatamente en gravedad, en los siguientes supuestos:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Cuando concurran muchos de los hechos anteriores, de manera que haya una apreciable disminución de la culpabilidad del infractor.</li>
                         <li class="text-justify">Cuando el infractor haya regularizado la situación irregular de manera diligente.</li>
                         <li class="text-justify">Cuando pueda apreciarse que la conducta del afectado ha podido inducir a la comisión de la infracción.</li>
                         <li class="text-justify">Cuando el infractor haya reconocido espontáneamente su culpabilidad.</li>
                         <li class="text-justify">Cuando se haya producido un proceso de fusión de empresas por absorción, y la infracción fuese anterior a dicho proceso, no siendo imputable a la entidad absorbente.</li>
                     </ul><br/>
                     <p><strong>Inmovilización de ficheros</strong></p>
                     <p class="text-justify">El artículo 49 da potestad a la AEPD para inmovilizar los ficheros de DCP, a los efectos de restaurar los derechos de los afectados cuando las infracciones sean graves o muy graves, y la persistencia en el tratamiento de los DCP o su comunicación o transferencia internacional puedan suponer un grave menoscabo de los derechos fundamentales de los afectados; además de sancionar al infractor, y requerirle la terminación en la utilización o cesión ilícita.</p>
                     <div class="bg-light text-primary border border-secondary text-justify m-3 p-3">
                         <p>Indique las multas que corresponderían a las infracciones clasificadas en la actividad anterior.</p>
                     </div>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1153" role="button">Identificación y registro de los ficheros con datos de carácter personal utilizados por la organización.</a>
             <div class="collapse" id="U1153">
                 <div class="card card-body text-info">
                     <p><strong>DCP especialmente protegidos</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Los DCP que revelen la ideología, afiliación sindical, religión, y creencias, origen racial, a la salud, y a la vida sexual advirtiendo al interesado expresamente sobre su derecho a no Prestarlo.</li>
                         <li class="text-justify">Los DCP relativos a la comisión de infracciones penales o administrativas, solo podrán incluirse en ficheros de Administración Pública cuando una normativa así lo regule</li>
                         <li class="text-justify">Los DCP relacionados con la salud, que son las informaciones concernientes a la salud pasada, presente y futura, física o mental, de un individuo;</li>
                     </ul><br/>
                     <p><strong>DCP sujetos a medidas de nivel básico</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">A todos los DCP (artículo 81-1).</li>
                         <li class="text-justify">A los DCP que se refieran a ideología, afiliación sindical, religión, creencias, origen racial, salud, o vida sexual, cuando se usen para realizar una transferencia dineraria a las entidades de las que los afectados sean asociados o miembros, o cuando los DCP aparezcan de forma accesoria o incidental en ficheros no automatizados, y sin guardar relación con la finalidad del mismo (artículo 81-5).</li>
                         <li class="text-justify">A los DCP que contengan datos relativos a la salud, referentes exclusivamente al grado de discapacidad, o la simple declaración de la condición de discapacidad o invalidez del afectado, con motivo del cumplimiento de deberes públicos (RLOPD artículo 81-6).</li>
                     </ul><br/>
                     <ul class="pl-3">
                         <li class="text-justify">Medida 1: Funciones y obligaciones del personal. El RLOPD, articulo 89.</li>
                         <li class="text-justify">Medida 2: Registro de incidencias. El RLOPD, artículo 90.</li>
                         <li class="text-justify">Medida 3: Medida 3: control de acceso. El RLOPD, artículo 91.</li>
                         <li class="text-justify">Medida 4: Gestión de soportes y documentos. El RLOPD, artículo 92.</li>
                         <li class="text-justify">Medida 5: Identificación y autenticación. El RLOPD, artículo 93.</li>
                         <li class="text-justify">Medida 6: Copias de respaldo y recuperación. El RLOPD, artículo 94.</li>
                     </ul><br/>
                     <p><strong>DCP sujetos a medidas de nivel medio</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Relativos a la comisión de infracciones administrativas o penales.</li>
                         <li class="text-justify">Referentes a la prestación de servicios de información sobre solvencia patrimonial y crédito</li>
                         <li class="text-justify">Aquellos de los que sean responsables las Administraciones Tributarias relacionados con el ejercicio de su potestad tributaria.</li>
                         <li class="text-justify">Aquellos de los que sean responsables las entidades financieras, para la prestación de sus servicios financieros.</li>
                         <li class="text-justify">Aquellos de los que sean responsables las entidades gestoras, y de servicios de la Seguridad Social, así como las mutuas de accidentes de trabajo y enfermedades profesionales de la Seguridad social, siempre en relación al ejercicio de sus competencias.</li>
                         <li class="text-justify">Aquellos que contengan un conjunto de DCP que ofrezcan una definición de las características o personalidad de los ciudadanos, y permitan evaluar determinados aspectos de la personalidad o comportamiento de los mismos.</li>
                     </ul><br/>
                     <ul class="pl-3">
                         <li class="text-justify">Medida 1: Responsable de seguridad. El RLOPD, artículo 95.</li>
                         <li class="text-justify">Medida 2: Auditoría. El RLOPD, artículo 96,.</li>
                         <li class="text-justify">Medida 3: Gestión de soportes y documentos. El RLOPD, artículo 97.</li>
                         <li class="text-justify">Medida 4: Identificación y autenticación. El RLOPD, artículo 98.</li>
                         <li class="text-justify">Medida 5: Control de acceso físico. El RLOPD, artículo 99.</li>
                         <li class="text-justify">Medida 6: Registro de incidencias. El RLOPD, artículo 100.</li>
                     </ul><br/>
                     <p><strong>DCP sujetos a medidas de nivel alto</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Los que se refieran a ideología, afiliación sindical, religión, creencias, origen racial, salud, o vida sexual.</li>
                         <li class="text-justify">Los que se refieran a datos recabados para fines policiales, sin consentimiento de los afectados.</li>
                         <li class="text-justify">Aquellos derivados de actos de violencia de género.</li>
                         <li class="text-justify">A los datos de tráfico y de localización de los operadores que presten servicios de comunicaciones electrónicas, o exploten redes públicas de comunicaciones electrónicas, se les aplicarán además de las medidas de nivel básico y medio, la medida de nivel alto del artículo 103.</li>
                     </ul>
                     <ul class="pl-3">
                         <li class="text-justify">Medida 1: Gestión de soportes y documentos. El RLO PD, artículo 101.</li>
                         <li class="text-justify">Medida 2: Copias de respaldo y recuperación. El RLOPD, artículo 102.</li>
                         <li class="text-justify">Medida 3: Registro de accesos. El RLOPD, artículo 103.</li>
                         <li class="text-justify">Medida 4: Telecomunicaciones. El RLOPD, artículo 104.</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1154" role="button">Elaboración del documento de seguridad requerido por la legislación vigente en materia de protección de datos de carácter personal.</a>
             <div class="collapse" id="U1154">
                 <div class="card card-body text-info">
                     <p><strong>Inscripción de ficheros</strong></p>
                     <p class="text-justify">Para la creación de ficheros, la LOPD, en su artículo 25, dice que podrán crearse ficheros de titularidad privada, cuando resulte necesario para el logro de la actividad legítima de la persona, empresa, o entidad titular, y siempre que se respeten las garantías que la ley establece para proteger las personas.</p>
                     <p class="text-justify">El procedimiento de inscripción se recoge en los artículos 55 a 64 del RLOPD, así como en los artículos 130 a 134. Se establece que se deben notificar a la AEPD, por la persona o entidad que pretenda crearlos, y con carácter previo a su creación.</p>
                     <p class="text-justify">Serán objeto de inscripción en el Registro General de Protección de Datos:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Los ficheros de las Administraciones Públicas.</li>
                         <li class="text-justify">Los ficheros de titularidad privada.</li>
                         <li class="text-justify">Las autorizaciones de transferencias internacionales de datos de carácter personal con destino a países que no presten un nivel de protección equiparable al que presta la LOPD, al que se refiere el artículo 33.1 de la citada ley.</li>
                         <li class="text-justify">Los códigos tipo (LOPD artículo 32}.</li>
                         <li class="text-justify">Los datos relativos a los ficheros que sean necesarios para el ejercicio de los derechos de información, acceso, rectificación, cancelación, y oposición.</li>
                     </ul>
                     <p class="text-justify">El RLOPD establece en su artículo 88 que el responsable de los ficheros o tratamientos debe elaborar un documento de seguridad que recoja las medidas de índole técnica y organizativa, acordes a la normativa de seguridad vigente, que serán de obligado cumplimiento para el personal con acceso a los sistemas de información.</p>
                     <p class="text-justify">El documento de seguridad tiene carácter interno, y será relativo a uno, a varios, o a todos los ficheros DCP. Su contenido mínimo lo establece el artículo 88-3</p>
                     <p class="text-justify">El documento de seguridad deberá contener contenido adicional si las medidas de seguridad a aplicar a los DCP son de carácter medio o alto.</p>
                     <p class="text-justify">El documento de seguridad deberá contener contenido adicional si existe tratamiento por cuenta de terceros.</p>
                     <p class="text-justify">Por último, el artículo 85-7-8 del RLOPD, establece que el contenido del documento de seguridad se debe mantener actualizado, revisándose cuando haya cambios relevantes (es decir, que puedan repercutir en el cumplimiento de las medidas de seguridad) en el sistema de información, en el sistema de tratamiento, en su organización, en el contenido de los DCP, o a consecuencia de los controles periódicos realizados. También se deberá mantener adecuado a las disposiciones vigentes en materia de seguridad de los DCP.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Ambito de aplicación del documento.</li>
                         <li class="text-justify">Medidas, normas, procedimientos, reglas, y estándares encaminados a garantizar los niveles de seguridad exigidos en este documento.</li>
                         <li class="text-justify">Información y obligaciones del personal.</li>
                         <li class="text-justify">Procedimientos de notificación, gestión y respuestas ante las incidencias.</li>
                         <li class="text-justify">Procedimientos de revisión.</li>
                         <li class="text-justify">ANEXO l. Descripción de ficheros.</li>
                         <li class="text-justify">ANEXO II. Nombramientos.</li>
                         <li class="text-justify">ANEXO III. Autorizaciones de salida o recuperación de datos.</li>
                         <li class="text-justify">ANEXO IV. Delegación de autorizaciones.</li>
                         <li class="text-justify">ANEXO V. Inventario de soportes.</li>
                         <li class="text-justify">ANEXO VI. Registro de incidencias.</li>
                         <li class="text-justify">ANEXO VII. Encargados de tratamiento.</li>
                     </ul>
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 6. SEGURIDAD FÍSICA E INDUSTRIAL DE LOS SISTEMAS. SEGURIDAD LÓGICA DE SISTEMAS.
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1161" role="button">Determinación de los perímetros de seguridad física.</a>
             <div class="collapse" id="U1161">
                 <div class="card card-body text-info">
                     <p><strong>Conceptos generales de seguridad física</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Las obstrucciones físicas</strong>, que plantean un reto a quien pretenda traspasarlas.</li>
                         <li class="text-justify"><strong>Las técnicas de vigilancia</strong>, que alertan de cualquier movimiento percibido en el perímetro de acceso.</li>
                         <li class="text-justify"><strong>Los sistemas de inteligencia</strong>, que analizan la in formación de vigilancia, e incluso indagan más allá de sus límites, para obtener ventajas tácticas y operativas ante amenazas.</li>
                         <li class="text-justify"><strong>Los guardias o personal de seguridad</strong>, que aportan la inteligencia humana, y efectividad operacional ante una amenaza, actuando y decidiendo frente a una alarma.</li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048662a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Seguridad física" title="Seguridad física">
                     <ul class="pl-3">
                         <p class="text-justify">El elemento central de la seguridad es el activo</p>
                         <li class="text-justify">Un <strong>ordenador central o servidor</strong>, que aloja los datos (activos) y puede alojar también las aplicaciones empresariales.</li>
                         <li class="text-justify">Un <strong>cliente</strong>, que se conecta al servidor para acceder a los datos de éste, y que también puede albergar datos y aplicaciones</li>
                         <li class="text-justify">Una <strong>red de comunicaciones</strong> que conecta al cliente y al servidor, y por la que transitan los activos o datos.</li>
                     </ul>
                     <p class="text-justify"> Habitualmente, el CPD donde se aloja el servidor también alojará los equipos más importantes de la red de comunicaciones LAN (aunque la red se extienda hasta la toma de usuario), lo que refuerza aún más la práctica habitual de que el CPD sea el primer perímetro físico de defensa.</p>
                     <ul class="pl-3">
                         <li class="text-justify">La sala de computadoras o CPD.</li>
                         <li class="text-justify">Los armarios de comunicaciones que pueda haber fuera del CPD.</li>
                         <li class="text-justify">Los equipos de telecomunicaciones, incluyendo las conexiones de red externas.</li>
                         <li class="text-justify">Él área de desarrollo o de programación.</li>
                         <li class="text-justify">Las consolas y terminales de los operadores.</li>
                         <li class="text-justify">Las bibliotecas de cintas, discos, CD, soportes USB, y otros medios de almacenamiento, incluidas las copias de seguridad, las salas donde se guarden estos soportes o sus suministros, y los emplazamientos ex1ernos, si las copias de respaldo se sacan de la empresa.</li>
                         <li class="text-justify">Las estaciones de trabajo y computadores personales.</li>
                         <li class="text-justify">Las fuentes de energía.</li>
                         <li class="text-justify">Los sitios donde se guardan temporalmente los desechos.</li>
                         <li class="text-justify">Los teléfonos y líneas telefónicas dedicadas.</li>
                         <li class="text-justify">Los equipos portátiles, como ordenadores portátiles, tablet-pc, smartphones, impresoras, lectores de códigos de barra, etc.</li>
                         <li class="text-justify">Las impresoras locales.</li>
                         <li class="text-justify">La red de área local, en todas sus tomas y recorridos.</li>
                         <li class="text-justify">La documentación del sistema y de la infraestructura.</li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048662b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="En construcción">
                     <strong>Norma IS027002</strong>
                     <p class="text-justify">Se establece que los sistemas de información deberían ubicarse en áreas seguras, protegidas por los perímetros de seguridad que se definan, con barreras de seguridad, y controles de acceso apropiados.</p>
                     <ul class="pl-3">
                         <li class="text-justify">9.1.1. Un perímetro de seguridad física mediante barreras, como paredes, rejas, u otros, que proteja las áreas seguras que contengan los sistemas de información,</li>
                         <li class="text-justify">9.1.2. Controles de acceso físico</li>
                         <li class="text-justify">9.1.3. Asegurar oficinas y recintos, aplicando SF,</li>
                         <li class="text-justify">9.1.4. Protección frente a amenazas externas, como fuego, inundación, terremotos, y explosiones</li>
                         <li class="text-justify">9.1.5. Trabajo en las zonas seguras</li>
                         <li class="text-justify">9.1.6. Deben existir áreas de acceso público para la entrada/salida de mercancía</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1162" role="button">Sistemas de control de acceso físico mas frecuentes a las instalaciones de la organización y a las áreas en las que estén ubicados los sistemas informáticos.</a>
             <div class="collapse" id="U1162">
                 <div class="card card-body text-info">
                     <p><strong>Riesgos del acceso físico</strong></p>
                     <p class="text-justify">El riesgo existe siempre que haya acceso, autorizado o no.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Empleados o personal subcontratado por la empresa, autorizados o no.</li>
                         <li class="text-justify">Personal técnico de proveedores.</li>
                         <li class="text-justify">Visitas.</li>
                         <li class="text-justify">Personal antiguo, empleado o subcontratado por la empresa.</li>
                         <li class="text-justify">Ladrones u otros delincuentes, en beneficio propio, o contratados por la competencia.</li>
                     </ul><br/>
                     <p><strong>Tipos de incidentes por acceso físico</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Accidentes con carácter involuntario o no intencionado</li>
                         <li class="text-justify">Incidente intencionado</li>
                         <ul class="pl-3">
                             <li class="text-justify">Destrucción absoluta de la información y los equipos.</li>
                             <li class="text-justify">Daño a los equipos.</li>
                             <li class="text-justify">Sustracción de los equipos.</li>
                             <li class="text-justify">Acceso y publicación de información confidencial.</li>
                             <li class="text-justify">Modificación del sistema o de la información privada que guarden.</li>
                             <li class="text-justify">Acceso no autorizado al sistema y su configuración, reduciendo su disponibilidad.</li>
                             <li class="text-justify">Uso fraudulento del sistema o de la información privada.</li>
                             <li class="text-justify">Secuestro o chantaje.</li>
                             <li class="text-justify">Ejecución de aplicaciones maliciosas ,espionaje y control remoto de los sistemas</li>
                         </ul>
                     </ul><br/>
                     <p><strong>Controles de acceso físico</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Área de recepción de personas:</strong> Conviene adecuar una zona para identificar y admitir o no a las personas que atraviesen (ingresando o abandonando) el perímetro de seguridad.</li>
                         <li class="text-justify"><strong>Registro de entradas y salidas:</strong> Deberían existir procedimientos (automáticos o no), donde se registre la fecha y hora de cada movimiento a través del perímetro de seguridad, ingresando o abandonando el recinto.</li>
                         <li class="text-justify"><strong>Tratamiento de personal externo:</strong> El acceso de personal subcontratado, de proveedores o visitas, es decir, del personal ajeno a la instalación, requiere un tratamiento especial: Identificación plena y deben ser controladas y vigiladas durante el acceso</li>
                         <li class="text-justify"><strong>Guardias:</strong> Están ubicados en lugares estratégicos del perímetro más vulnerable, como son las entradas y salidas del mismo.</li>
                         <li class="text-justify"><strong>Entradas de doble puerta:</strong> Por cada puerta solo puede pasar una persona. Tras acceder por la primera puerta, esta se cierra, quedando la persona atrapada y expuesta,</li>
                         <li class="text-justify"><strong>Puertas de control electrónico:</strong> En la recepción y otras zonas a proteger, se debería incluir una puerta validable por la propia persona, mediante algún proceso de autenticación.</li>
                         <li class="text-justify"><strong>Cámaras de circuito cerrado de televisión (CCTV):</strong> El empleo de cámaras permite monitorizar espacios grandes, y concentrar la atención en los puntos de entrada y salida más vulnerables.</li>
                         <li class="text-justify"><strong>Alarmas contra robo:</strong> Sistemas eléctricos y electrónicos que permiten enviar una señal de alarma cuando se detecta un movimiento, cuando se abre una puerta o ventana, o cuando se produce una vibración.</li>
                         <li class="text-justify"><strong>Medidas constructivas en paredes y ventanas:</strong> Debe prestarse especial atención a que dispongan de una sólida construcción, evitándose paredes falsas o débiles.</li>
                     </ul><br/>
                     <p><strong>Norma ISO 27002</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>9.1.2</strong> Las áreas seguras deben protegerse mediante controles de acceso físico, para asegurar que solo acceda el personal autorizado:
                         <li class="text-justify"><strong>9.1.6</strong> Las áreas de entrada y salida de mercancía deberían controlarse, porque son un punto de entrada para personal no autorizado.
                     </ul><br/>
                     <p><strong>Métodos de identificación de las personas</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048662c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Identificación de personas." title="Identificación de personas.">
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1163" role="button">Criterios de seguridad para el emplazamiento físico de los sistemas informáticos.</a>
             <div class="collapse" id="U1163">
                 <div class="card card-body text-info">
                     <p><strong>Consideraciones en la localización del CPD</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">
                             <p><strong>Frente a desastres naturales</strong></p>
                             <p class="text-justify">El CPD debe ubicarse lejos de áreas con fenómenos naturales probables, como: terremotos, maremotos, erupciones volcánicas, huracanes, tornados, tormentas eléctricas, incendios, e inundaciones naturales.</p>
                         </li>
                         <li class="text-justify">
                             <p><strong>Frente a desastres industriales</strong></p>
                             <p class="text-justify">El CPD debe estar alejado de empresas con actividades potencialmente peligrosas, como industrias químicas, aeropuertos, o sus inmediaciones.</p>
                         </li>
                         <li class="text-justify">
                             <p><strong>Frente a la amenaza de incendio:</strong></p>
                             <p class="text-justify">El CPD debe estar alejado de almacenes de productos inflamables o con elevado riesgo de incendio, gasolineras, refinerías, industrias químicas, almacenes de papel, talleres, hornos, etc. También debe estar alejado de las conducciones de gas y combustibles.</p>
                         </li>
                         <li class="text-justify">
                             <p><strong>Frente a la amenaza de inundación</strong></p>
                             <p class="text-justify">El CPD debe alejarse:</p>
                             <ul class="pl-3">
                                 <li class="text-justify">Del cauce natural de ríos con caudal actual, o que lo tuvieran en el pasado.</li>
                                 <li class="text-justify">De rutas de evacuación de presas y pantanos.</li>
                                 <li class="text-justify">De zonas costeras inundables o de poca altitud.</li>
                                 <li class="text-justify">De tuberías de agua o depósitos de agua.</li>
                                 <li class="text-justify">El CPD no debería situarse en sótanos ni en áticos.</li>
                             </ul>
                         </li>
                         <br />
                         <li class="text-justify">
                             <p><strong>Frente a la amenaza de falta de suministro eléctrico</strong></p>
                             <p class="text-justify">Debería ubicarse en emplazamientos donde haya suministro de energía por empresas y redes diferentes; y a ser posible, por rutas de distribución procedentes de dos subestaciones diferentes.</p>
                         </li>
                     </ul>
                     <p class="text-justify">Norma IS027002</p>
                     <ul class="pl-3">
                         <p class="text-justify">9.2.1. Se deberían ubicar los equipos para reducir amenazas, peligros ambientales, y oportunidades de accesos no autorizados.</p>
                     </ul>
                     <p><strong>Controles ambientales del CPD</strong></p>
                     <p class="text-justify">Equipos de control de temperatura y humedad, y revisiones periódicas del CPD para verificarlo.</p>
                     <p class="text-justify">Los detectores de agua deben ubicarse en el suelo técnico, y cerca de los desagües, incluso aunque el CPD se ubique en plantas altas, porque el riesgo procede de
                         cualquier escape de agua.</p>
                     <p class="text-justify">Los paneles de control de alarmas deben estar separados de los sistemas antirrobo o de seguridad.</p>
                     <p class="text-justify">Deben prohibirse actividades dentro del CPD, como el consumo de comidas, bebida,
                         y por supuesto fumar.</p>
                     <p class="text-justify">Planes documentados y probados de evacuación durante emergencias.</p>
                     <p class="text-justify">Controles ambientales para incendios</p>
                     <p class="text-justify">Controles ambientales frente a fallos eléctricos de causa natural o no</p>
                     <p><strong>Norma ISO27002</strong></p>
                     <ul class="pl-3">
                         <p class="text-justify">9.1.4. Se deberían aplicar medidas contra el fuego, inundaciones, terremotos,explosiones, y otros desastres</p>
                         <li class="text-justify">9.2.3. El cableado de energía y telecomunicaciones debería protegerse</li>
                         <li class="text-justify">9.2.4. Los equipos se deben mantener, para asegurar su disponibilidad e integridad</li>
                         <li class="text-justify">9.2.5. Se deben considerar las medidas de seguridad a aplicar cuando los equipos operan fuera de la empresa</li>
                         <li class="text-justify">9.2.6. En la eliminación o reutilización del equipo, se deben chequear los medios de almacenamiento que incorpore, para asegurar que no haya datos confidenciales ni
                             licencias de software antes de su eliminación.</li>
                         <li class="text-justify">9.2.7. El equipo, la información o el software, no debieran salir de la empresa sin autorización previa.</li>
                     </ul>
                     <p><strong>Norma TIA492</strong></p>
                     <p class="text-justify">Es un estándar que marca las pautas para el diseño de las salas de un CPD. La norma fue revisada en 2013, y marca directrices y recomendaciones prácticas muy valiosassobre cómo debe diseñarse y construirse un CPD, permitiendo medir la fiabilidad de suoperación en términos de su disponibilidad anual.</p>
                     <p class="text-justify">Abarca criterios fundamentales, sobre el diseño y el uso del espacio en el CPD, la infraestructura de cableado, los niveles de fiabilidad del CPD, y las consideraciones ambientales.</p>
                     <p class="text-justify">También son especialmente interesantes las consideraciones sobre el uso del espacio, que indican que al diseñar el CPD debe elegirse un lugar no restringido por elementos arquitectónicos que limiten su crecimiento (como ascensores o escaleras, muros, u otros), así como asegurar que el espacio reservado contemple amplias áreas vacías y libres, y que en el cálculo se considere que el CPD pueda experimentar expansiones futuras.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1164" role="button">Exposición de elementos mas frecuentes para garantizar la calidad y continuidad del suministro eléctrico a los sistemas informáticos.</a>
             <div class="collapse" id="U1164">
                 <div class="card card-body text-info">
                     <p class="text-justify">La electricidad es, de entre todos, el componente vital de un centro de datos. Una anomalía en el suministro de energía, de solo una fracción de segundo, puede ocasionar un fallo en un servidor. La falta de suministro eléctrico es una amenaza particularmente común, y que como tal, debe ser atendida convenientemente. Sin suministro eléctrico, la disponibilidad de los sistemas es nula, y si el tránsito "suministro-ausencia-suministro' no está controlado, puede verse afectada la integridad de la información.</p>
                     <p><strong>Anomalías en el suministro eléctrico</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Interrupciones del suministro : Perdida completa del suministro</li>
                         <li class="text-justify">Caídas de tensión: El suministro eléctrico es muy inferior al esperado, generalmente por problemas de capacidad del proveedor, o por defectos en la instalación propia.</li>
                         <li class="text-justify">Picos y valles de tensión: El suministro de energía alterna supera ampliamente sus máximos y sus mínimos.</li>
                         <li class="text-justify">Interferencias electromagnéticas o ruido eléctrico : generadas por tormentas geomagnéticas (solares), así como aparatos eléctricos o electrónicos;</li>
                         <li class="text-justify">Corriente estática: Se trata de corriente de muy poca intensidad pero altísimo voltaje, inducido o conducido por la persona,</li>
                     </ul><br/>
                     <p><strong>Medidas para garantizar el suministro eléctrico</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Interrupciones del suministro
                             <ul class="pl-3">
                                 <li class="text-justify">SAI Capacidad: KVA (KVA *0,8 =Potencia máxima)
                                 <li class="text-justify">SAI Autonomía: Mayor cuanto menor es la demanda
                             </ul>
                         </li>
                         <li class="text-justify">Caídas de tensión
                             <ul class="pl-3">
                                 <li class="text-justify">Protectores de voltaje y SAI (estabilizar)
                             </ul>
                         </li>
                         <li class="text-justify">Sobretensiones (picos y valles)
                             <ul class="pl-3">
                                 <li class="text-justify">Protectores de voltaje y SAI (estabilizar)
                                 <li class="text-justify">Descargadores de gas (fusible)
                             </ul>
                         </li>
                         <li class="text-justify">Interferencias y ruido
                             <ul class="pl-3">
                                 <li class="text-justify">Buena conexión de toma de tierra (&lt;10ohms)
                                 <li class="text-justify">Cuadro eléctrico de protección.
                             </ul>
                         </li>
                     </ul><br/>
                     <p><strong>NORMA ISO27002</strong></p>
                     <p class="text-justify">9.2.2. Se deben proteger los equipos de fallos de energía y otros servicios de soporte, mediante:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Inspecciones regulares de las instalaciones.</li>
                         <li class="text-justify">Asegurar suministros eléctricos según indique el fabricante.</li>
                         <li class="text-justify">Uso de SAl, y un plan previsto en caso de fallo prolongado del suministro (como un generador, combustible, etc.).</li>
                         <li class="text-justify">Uso de fuentes de energía múltiples.</li>
                         <li class="text-justify">Colocar interruptores de energía cerca de las salidas de emergencia, para facilitar el apagado en caso de emergencia.</li>
                         <li class="text-justify">Alumbrado de emergencia en caso de fallo del suministro.</li>
                         <li class="text-justify">Suministro de energía estable para el aire acondicionado, y equipos contra incendios.</li>
                         <li class="text-justify">Alarmas en caso de fallo de los servicios de soporte.</li>
                         <li class="text-justify">Los equipos de telecomunicaciones se deben conectar por dos rutas al proveedor, para que un fallo no anule las comunicaciones.</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1165" role="button">Requerimientos de climatización y protección contra incendios aplicables a los sistemas informáticos.</a>
             <div class="collapse" id="U1165">
                 <div class="card card-body text-info">
                     <p><strong>Climatización</strong></p>
                     <p class="text-justify">Los equipos que se acumulan en un CPD (servidores, unidades de almacenamiento, equipos de comunicaciones) tienen un elevado consumo eléctrico, que conlleva una elevada disipación de calor.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Una medida esencial es disponer de elementos de refrigeración, sin los cuales no se puede mantener bajo control y de manera estable la temperatura.</li>
                         <li class="text-justify">Una adecuada circulación del aire, que redundará en la eficiencia del equipo de refrigeración, tanto más cuanto mayor sea el CPD.</li>
                         <li class="text-justify">Control de la humedad relativa (30% y 55%)
                             <ul class="pl-3">
                                 <li class="text-justify">Alta -> Condensación</li>
                                 <li class="text-justify">Baja -> Electricidad estática</li>
                             </ul>
                         </li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048662d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Climatización. Armarios en CPD." title="Climatización. Armarios en CPD.">
                     <img src="../recursos/img/cursos/ifct0109/mf048662e.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Climatización. Circulación del aire." title="Climatización. Circulación del aire.">
                     <p><strong>Protección contra incendios</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Paredes, techos, y suelos a prueba de incendios, que cierren el recinto.</li>
                         <li class="text-justify">Puerta con suficiente grado de protección frente al fuego</li>
                         <li class="text-justify">Detectores de humo, que se deben situar en el falso techo, que es donde primero se acumulará el humo.</li>
                         <li class="text-justify">Alarmas de incendio manuales, localizadas en sitios estratégicos, generalmente cerca de puertas y salidas de emergencia.</li>
                         <li class="text-justify">Extintores de incendio manuales.</li>
                         <li class="text-justify">Sistemas de extinción de incendio automático.</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1166" role="button">Elaboración de la normativa de seguridad física e industrial para la organización.</a>
             <div class="collapse" id="U1166">
                 <div class="card card-body text-info">
                     <p><strong>Normativa de seguridad física</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Legislación aplicable</li>
                         <ul class="pl-3">
                             <li class="text-justify">Reglamento de desarrollo de la LOPD (art99. control acceso físico)</li>
                             <li class="text-justify">Esquema Nacional de Seguridad (Art 17 medidas de protección de las instalaciones e infraestructuras</li>
                             <li class="text-justify">Norma básica de codificación sobre protección de incendios (NCB-CP195)</li>
                             <li class="text-justify">Reglamento de Infraestructuras Comunes de Telecomunicaciones (ICT)</li>
                             <li class="text-justify">Reglamento electrónico de baja tensión (RBT)</li>
                         </ul>
                         <li class="text-justify">Normas de Referencia</li>
                         <ul class="pl-3">
                             <li class="text-justify">Interferencia electromagnética (EMI) y compatibilidad electromagnética (EMC)</li>
                             <li class="text-justify">UNE EN 50174 de instalación del cableado</li>
                             <li class="text-justify">TIA5588 de estándar de cableado</li>
                             <li class="text-justify">TIA942 de diseño de datacenter</li>
                             <li class="text-justify">ISO17779 para la práctica de la gestión de la seguridad de la información</li>
                         </ul>
                         <li class="text-justify">Medidas aplicadas en la empresa, acordes con la norma 27002</li>
                         <ul class="pl-3">
                             <li class="text-justify">C1 Perímetro de seguridad física (9.1.1)</li>
                             <li class="text-justify">C2 Controles físicos de entrada (9.1.2)</li>
                             <li class="text-justify">C3 Seguridad de las oficinas, despachos e instalaciones (9.1.3)</li>
                             <li class="text-justify">C4 Protección para amenazas externas y de origen ambiental (9.1.4)</li>
                             <ul class="pl-3">
                                 <li class="text-justify">Incendios</li>
                                 <li class="text-justify">Inundaciones</li>
                                 <li class="text-justify">Otras (terremotos, huracanes, revueltas, terrorismo)</li>
                             </ul>
                             <li class="text-justify">C5 Trabajo en áreas seguras (9.1.5)</li>
                             <li class="text-justify">C6 Áreas de acceso público y de carga y descarga (9.1.6)</li>
                             <li class="text-justify">C7 Emplazamiento y protección de equipos (9.2.1)</li>
                             <ul class="pl-3">
                                 <li class="text-justify">Emplazamiento y distribución ( de acuerdo con recomendaciones TIA 942)</li>
                                 <li class="text-justify">Amenazas físicas como polvo humo</li>
                                 <li class="text-justify">Protección ambiental: climatización, distribución de pasillos fríos y calientes</li>
                             </ul>
                             <li class="text-justify">C8 Instalaciones de suministro (9.2.2)</li>
                             <ul class="pl-3">
                                 <li class="text-justify">Sistemas de aire acondicionado</li>
                                 <li class="text-justify">Suministro eléctrico (SAI, grupo electrógeno, etc)</li>
                                 <li class="text-justify">Suministro de servicios de voz</li>
                             </ul>
                             <li class="text-justify">C9 Seguridad en el cableado (9.2.3)</li>
                             <li class="text-justify">C10 Mantenimiento de equipos (9.2.4)</li>
                             <li class="text-justify">C11 Seguridad de los equipos fuera de las instalaciones (9.2.5)</li>
                             <li class="text-justify">C12 Reutilización o retirada segura (9.2.6)</li>
                             <li class="text-justify">C13 Salida de materiales (9.2.7)</li>
                         </ul>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1167" role="button">Sistemas de ficheros más frecuentemente utilizados.</a>
             <div class="collapse" id="U1167">
                 <div class="card card-body text-info">
                     <p><strong>FICHEROS</strong></p>
                     <p class="text-justify"><strong>Información:</strong> comunicación o adquisición de conocimientos que permiten ampliar o precisar los que se poseen sobre una materia determinada.</p>
                     <p class="text-justify"><strong>Dato:</strong> Información dispuesta de manera adecuada para su tratamiento por un ordenador.</p>
                     <p class="text-justify">Tanto la codificación como la decodificación, deben seguir mecanismos o convenciones conocidas por quienes se quieran intercambiar información.</p>
                     <p class="text-justify"><em>Un fichero</em> es un conjunto de datos, con al menos un nombre asociado.</p>
                     <p class="text-justify">La unidad elemental de información es el bit, y 8 bits forman 1 byte (1B), que representa 1 carácter alfanumérico. El byte es habitualmente la unidad elemental del tamaño de los ficheros, siendo normal usar sus múltiplos: KB, MB, GB, y TB.</p>
                     <ul class="pl-3">
                         <li class="text-justify">1 kilobyte (1 KB) = 1.024 B.</li>
                         <li class="text-justify">1 megabyte (1 MB) = 1.024 KB = 1.048.576 B.</li>
                         <li class="text-justify">1 gigabyte (1 GB) = 1.024MB= 1.048.576 KB = 1.073.741.824 B.</li>
                         <li class="text-justify">1 terabyte ( 1 TB) = 1.024 GB = 1.048.576 MB=1.073.741.824 B.=1,0995x1012.</li>
                     </ul><br/>
                     <p class="text-justify">Los ficheros se almacenan en medios de almacenamiento, existiendo una amplia variedad de tecnologías, algunas de los cuales son:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Medios magnéticos: discos duros (de un GB a varios TB), disquetes flexibles (3 .5'; desde 1.44MB hasta 200MB), cintas de backup (GB, TB).</li>
                         <li class="text-justify">Medios ópticos: CD (de 650 a 900MB/ GB) , DVD (4.7GB/8.5GB), HD-DVD (15GB/30GB), Blue-ray (27GB/54GB).</li>
                         <li class="text-justify">Medios de estado sólido, o semiconductores: memorias ROM, PROM, EPROM, EEPROM (de un KB a varios MB), memorias flash USB (de varios MB a varios GB).</li>
                     </ul>
                     <p class="text-justify"><strong>Un sistema de ficheros</strong> es la especificación de todos los aspectos que resulten necesarios para administrar los ficheros en un medio de almacenamiento.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048662f.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Sistemas de ficheros." title="Sistemas de ficheros.">
                     <p><strong>Sistema de ficheros EXT3 del sistema operativo Linux</strong></p>
                     <p class="text-justify">El primer sistema de archivos nativo de Linux es el EXT (Extended File System), y fue desarrollado en 1992 por Rémy Card, en la Universidad Pierre et Marie Curie. Posteriormente, en 1993, se introdujo la revisión EXT2, y más tarde la revisión EXT3, que añade a EXT2 la funcionalidad de registro en diario.</p>
                     <p><strong>Estructura</strong></p>
                     <p class="text-justify">El sistema EXT3 está diseñado de una manera que permite acceder a otros sistemas de archivos. El sistema de archivos se divide en una zona de arranque o boot, y en varias zonas posteriores, que se denominan grupos.</p>
                     <p><strong>Funciones</strong></p>
                     <p class="text-justify">Los tipos de archivos que define son archivos normales, directorios, archivos de dispositivo, tuberías o pipelines (para la comunicación entre procesos), y enlaces (blandos o duros).</p>
                     <p><strong>Seguridad</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf048662g.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Archivos en linux." title="Archivos en linux.">
                     <p class="text-justify"><strong>Sistema de ficheros NTFS de sistemas operativos Windows de Microsoft</strong></p>
                     <p class="text-justify">Con el sistema operativo Windows NT, que sentó la base del resto de sistemas operativos de Microsoft, este fabricante comenzó a aplicar un sistema de archivos llamado New Technology File System o NTFS, cuyas elevadas posibilidades lo mantienen plenamente vigente en los sistemas operativos de última generación de este fabricante.</p>
                     <p class="text-justify"><strong>Estructura</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Sector: es el espacio más pequeño que puede ocupar un archivo, y normalmente serán 512 bytes, o un múltiplo de esta cantidad.</li>
                         <li class="text-justify">Cluster: es un conjunto de uno o más sectores contiguos. Es la unidad de alojamiento fundamental para NTFS, que no puede manejar sectores individuales</li>
                         <li class="text-justify">Volumen: es una partición lógica del disco, consistente en uno o más clusters. Es el espacio usado por el sistema de archivos para alojar los ficheros.</li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048662h.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Sistema de ficheros NTFS." title="Sistema de ficheros NTFS."> 
                     <p><strong>Funciones</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Facilitar la recuperación en caso de fallo, lo que logra con las copias de los elementos críticos descritos antes.</li>
                         <li class="text-justify">Eliminar el problema del tamaño de las particiones o unidades lógicas en que se segmenta los discos, en previsión de la aparición de discos de muy alta capacidad.</li>
                         <li class="text-justify">Lograr un almacenamiento eficiente, y permitir nombres de archivos largos de hasta 255 caracteres (no limitado a Jos 8+3 del sistema FAT).</li>
                         <li class="text-justify">Facilitar la indexación, lo que es posible, ya que se pueden definir palabras clave para el contenido del archivo, como si se tratara de propiedades personalizadas del fichero.</li>
                         <li class="text-justify">Proporcionar un sistema robusto de control de acceso y de control de la seguridad, lo que se permite con las prestaciones que se verán a continuación.</li>
                         <li class="text-justify">Permite que un archivo soporte distintos flujos de información, o que sea accedido por diferentes aplicaciones, con distintos atributos o propiedades, pero siempre con los mismos permisos de seguridad. Por ejemplo, un fichero de texto puede ser abierto por dos aplicaciones a la vez.</li>
                         <li class="text-justify">NTFS soporta compresión de ficheros (con cluster de hasta 4KB) para ahorrar el uso de disco.</li>
                         <li class="text-justify">NTFS soporta encriptación de los archivos, empleando una combinación de algoritmo simétrico y de clave pública, de manera que solo el propietario del fichero pueda acceder a él, presentando su certificado digital al sistema.</li>
                     </ul> <br/>
                     <p><strong>Seguridad</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Lista de control de acceso de permisos, que enumera los permisos que los usuarios o grupos tienen sobre el archivo, o que se deniegan explícitamente.</li>
                         <li class="text-justify">Lista de control de acceso de auditoría, que es una lista con las acciones que el sistema debe auditar sobre el acceso al fichero.</li>
                         <li class="text-justify">Identificador del propietario, que es un código conocido como SID, que identifica al propietario (inicialmente quien crea el fichero).</li>
                         <li class="text-justify">Tamaño en bytes.</li>
                         <li class="text-justify">Fecha de creación, modificación, y último acceso.</li>
                         <li class="text-justify">Nombre del archivo.</li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048662i.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Seguridad de archivos windows." title="Seguridad de archivos windows.">
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1168" role="button">Establecimiento del control de accesos de los sistemas informáticos a la red de comunicaciones de la organización.</a>
             <div class="collapse" id="U1168">
                 <div class="card card-body text-info">
                     <p class="text-justify">La SL se ocupa de las barreras, procedimientos, y mecanismos para mantener el resguardo e integridad de los activos físicos o lógicos de la empresa, de forma que solo se permita acceder lógicamente a ellos a las personas autorizadas para hacerlo.</p>
                     <p class="text-justify">Se trata de proteger frente a accesos no autorizados y ataques lógicos, y para ello, el principal elemento es el control de acceso lógico (CAL).</p>
                     <p class="text-justify">El CAL se ocupa de los procesos de identificación, autenticación, y autorización. Del correcto establecimiento de estos tres procesos se obtendrá una seguridad lógica adecuada, que asegure que solo los usuarios identificados y autenticados acceden a los recursos autorizados.</p>
                     <p class="right">ISO 17799:2005</p>
                     <p><strong>Identificación y autenticación</strong></p>
                     <p class="text-justify">La <strong>identificación</strong> es el proceso por el que una persona dice quién es. La <strong>autenticación</strong> es el proceso por el que se comprueba que una persona es quien dice ser. La identificación y la autenticación protegen el acceso al sistema.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048662j.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Identificación y autenticación" title="Identificación y autenticación">
                     <p><strong>Autorización</strong></p>
                     <p class="text-justify">La autorización es el proceso por el que se comprueba si se puede llevar a cabo una acción sobre un recurso.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Control de acceso discrecional (DACL), en el que es el propietario del recurso el que determina quién puede acceder al mismo y qué acciones puede realizar.</li>
                         <li class="text-justify">Control de acceso mandatorio (MAC), donde es el propio sistema quien protege los recursos. El sistema clasifica a usuarios y recursos en niveles de seguridad, mediante una etiqueta de seguridad asignada por el sistema, con diferentes niveles o categorías.</li>
                         <li class="text-justify">Control de acceso basado en roles (RBAC), que intenta aunar los métodos anteriores: el sistema es quien tiene la autoridad para decidir el control de accesos, pero no emplea etiquetas, sino roles basados en los requisitos funcionales de la actividad que realiza la persona.</li>
                     </ul><br/>
                     <p><strong>Establecimiento del control de accesos</strong></p>
                     <p><strong>Usuarios</strong></p>
                     <p class="text-justify">Un usuario es toda persona que puede hacer uso de cualquier recurso del sistema, incluidos los mínimos o esenciales, como pueda ser usar exclusivamente el servicio de autenticación.</p>
                     <p class="text-justify">Toda esta información sobre el usuario, su ficha, se agrupa en lo que se denomina cuenta de usuario.</p>
                     <p class="text-justify">Al conjunto de cuentas se le suele denominar directorio de usuarios</p>
                     <p class="right">Normas X.500 - LDAP</p>
                     <p><strong>Servicio de directorio</strong></p>
                     <p class="text-justify">Los servicios de directorio se extienden para contener no solo la información de las cuentas de usuario, sino la de otros elementos que las aplicaciones puedan necesitar conocer desde cualquier ubicación de la red.</p>
                     <p class="text-justify">El conjunto de ordenadores que comparten un servicio de directorio se denomina dominio. Este es el modo de configurar una red de Microsoft Windows actual, frente al modo de grupo de trabajo usado en sistemas anteriores.</p>
                     <p class="text-justify">En sistemas Linux es muy frecuente emplear la solución OpenLDAP,</p>
                     <p><strong>Servicio de autenticación</strong></p>
                     <p class="text-justify">El ordenador donde resida la base de datos de usuarios y la información para su autenticación, es decir, el servidor del directorio, parece el sitio idóneo donde llevar a cabo la autenticación, que es una función crucial del CAL.</p>
                     <p class="text-justify">Las aplicaciones que necesiten usar de los servicios de autenticación deben saber cómo iniciar una solicitud de autenticación, y cómo interpretar la respuesta cuando sea positiva o negativa, etc. Para ello se definen los protocolos de autenticación, que gobiernan estas comunicaciones.</p>
                     <p class="text-justify">Los sistemas Microsoft Windows emplean el protocolo Kerberos, y en Linux, OpenLDAP también lo admite.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf04869a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Control de acceso lógico." title="Control de acceso lógico.">
                     <p><strong>NORMA ISO27002</strong></p>
                     <p class="text-justify">La norma ISO 27002 incluye un objetivo para el control de acceso lógico a la información, que se presentará resumidamente a continuación, incluyendo las salvaguardas recomendadas para su cumplimiento.</p>
                     <p class="text-justify">El objetivo "11.4 Control de acceso a la red'; establece que se debe evitar el acceso no autorizado a la red y, por lo tanto, a sus servicios.</p>
                     <ul class="pl-3">
                         <li class="text-justify"> Política sobre el uso de los servicios de red: basada en que los usuarios solo tengan acceso a los servicios que les hayan sido específicamente autorizados.</li>
                         <li class="text-justify"> Autenticación de usuario para los usuarios remotos, o conexiones externas</li>
                         <li class="text-justify">Identificación del equipo automática: es un medio válido para iniciar la autenticación de las ubicaciones desde donde se realizan las conexiones.</li>
                         <li class="text-justify">Protección de puertos de diagnostico y configuración remota: son habituales para las labores de administración o soporte a los usuarios.</li>
                         <li class="text-justify">Segregación de redes: para separar usuarios y/o sistemas de información y/o
                             servicios.</li>
                         <li class="text-justify">Control de conexión de red</li>
                         <li class="text-justify">Control de rutas del tráfico de la red</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1169" role="button">Configuración de políticas y directivas del directorio de usuarios.</a>
             <div class="collapse" id="U1169">
                 <div class="card card-body text-info">
                     <p class="text-justify">Las GPO son objetos del directorio activo (aunque también existen para los sistemas locales) que tiene como atributos cada una de las políticas (también denominadas directivas) que puede establecerse. Existen dos tipos de directivas, según afecten a los usuarios, o a los equipos (ordenadores).</p>
                     <p class="text-justify">Cada GPO contiene un árbol de políticas, que se divide en directivas de configuración de equipo y directivas de configuración de usuario.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Configuración de software</li>
                         <li class="text-justify">Configuración de Windows</li>
                         <li class="text-justify">Plantillas administrativas</li>
                     </ul><br/>
                     <p><strong>Políticas de seguridad</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Políticas de cuentas: se pueden configurar los periodos de caducidad de las contraseñas, las condiciones de bloqueo de las cuentas, la configuración de Kerberos, etc.</li>
                         <li class="text-justify">Políticas locales: se configuran aqtú las opciones de auditoría, y asignación de derechos y privilegios de usuario</li>
                         <li class="text-justify">Registro de eventos: se controla el registro de eventos del sistema, en las categorías del visor de sucesos para el registro de aplicación, el registro de seguridad, y el registro del sistema.</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U116A" role="button">Establecimiento de las listas de control de acceso (ACLs) a ficheros.</a>
             <div class="collapse" id="U116A">
                 <div class="card card-body text-info">
                     <p class="text-justify">Las listas de control de acceso para un fichero o directorio definen qué usuarios autenticados pueden acceder al fichero, y qué tareas pueden realizar. Normalmente los permisos de acceso se pueden establecer a nivel de un usuario concreto, o de un grupo de usuarios, lo que facilita enormemente la gestión de estos permisos.</p>
                     <p><strong>ACL por usuario o por grupos de usuarios</strong></p>
                     <p class="text-justify">La elección de una opción u otra (agregar usuarios directamente a la ACL, o agregar los usuarios a grupos existentes en la ACL) dependerá principalmente de lo diversificados que sean los permisos de acceso, pero en general, resulta más adecuada la segunda opción, es decir, otorgar permisos de manera indirecta, mediante la inclusión o exclusión de los usuarios en los grupos. Sin embargo, cuando la diversificación de permisos es amplia, de forma que el número de grupos se hace comparable al número de usuarios, el empleo de grupos comienza a perder su utilidad.</p>
                     <p><strong>Propietario</strong></p>
                     <p class="text-justify">El propietario de un fichero es su creador, y habitualmente dispondrá de permisos funcionales completos. No obstante, incluso el propietario de un fichero puede carecer de otros permisos especiales; por ejemplo, puede carecer del privilegio de cambiar el propietario del mismo.</p>
                     <p><strong>Herencia</strong></p>
                     <p class="text-justify">Los ACL que se definen en los niveles superiores, se añaden automáticamente a los ACL de los elementos de niveles inferiores.</p>
                     <p class="text-justify"><strong>ACL en sistemas Windows (NTFS)</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf0486Ba.png"class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="ACL en sistemas windows." title="ACL en sistemas windows.">
                     <p class="text-justify"><strong>ACL en sistemas Linux(EXT3)</strong></p>
                     <img src="../recursos/img/cursos/ifct0109/mf0486Bb.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="ACL en sistemas linux." title="ACL en sistemas linux.">
                 </div>
             </div>

             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U116B" role="button">Gestión de altas, bajas y modificaciones de usuarios y los privilegios que tienen asignados.</a>
             <div class="collapse" id="U116B">
                 <div class="card card-body text-info">
                     <p class="text-justify">Como se introdujo en el epígrafe 3.1, el infractor más habitual es el accidental, que genera el incidente por error, o sin saber Jo que está haciendo. Además de aplicar medidas de control de acceso a los ficheros para su protección, se debe mantener bajo control cuáles son los usuarios del sistema.</p>
                     <p class="text-justify">Usuarios en sistemas Windows</p>
                     <img src="../recursos/img/cursos/ifct0109/mf0486Ca.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Usuarios en sistemas Windows" title="Usuarios en sistemas Windows">
                     <p class="text-justify">Usuarios en sistemas Linux</p>
                     <img src="../recursos/img/cursos/ifct0109/mf0486Cb.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Usuarios en sistemas Linux" title="Usuarios en sistemas Linux">
                     <p><strong>Gestión de usuarios</strong></p>
                     <p><strong>Norma ISO27002</strong></p>
                     <p class="text-justify">El objetivo "11.2 Gestión de acceso de usuario" tanto para asegurar que pueden acceder los usuarios autorizados, como que no pueden acceder los no autorizados.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Registro del usuario, procedimentado y formal, para otorgar el acceso a los sistemas y servicios (altas), y para el de-registro o revocación de permisos (bajas).</li>
                         <li class="text-justify">Gestión de los privilegios de acción en el sistema, por ejemplo, para la administración y mantenimiento, cuyo uso y asignación se debe restringir y controlar.</li>
                         <li class="text-justify">Gestión de claves secretas de los usuarios</li>
                         <li class="text-justify">Revisión de los derechos de acceso del usuario, que se debe realizar a intervalos regulares, por ejemplo, cada 6 meses. Los privilegios sobre el sistema se deben revisar con más frecuencia, por ejemplo, de manera regular cada 3 meses.</li>
                     </ul>
                     <p class="text-justify">El objetivo de control "11.3 Responsabilidades del usuario', persigue evitar accesos no autorizados que pongan en peligro la información, así como evitar el robo de la misma, o de los sistemas de procesamiento.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Uso de claves secretas, que deben seleccionarse y mantenerse confidenciales correctamente, evitando registrarlas</li>
                         <li class="text-justify">Equipo del usuario desatendido, cerrando las sesiones cuando se abandone, o mediante salvapantallas reanudados por contraseña.</li>
                         <li class="text-justify">Política de escritorio y pantalla limpio, incluidos los papeles y medios de almacenamiento portátiles, para reducir el riesgo de acceso no autorizado, pérdida, o daño a la información durante y fuera del horario de trabajo normal.</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U116C" role="button">Requerimientos de seguridad relacionados con el control de acceso de los usuarios al sistema operativo.</a>
             <div class="collapse" id="U116C">
                 <div class="card card-body text-info">
                     <p class="text-justify">Se recomienda ajustarse a lo dispuesto por la norma ISO 27002, que incluye el objetivo" 11.5 Control del acceso al sistema operativo': para evitar el acceso no autorizado a los sistemas operativos, y fija que los medios y controles para ello deben ser capaces de: autenticar a los usuarios autorizados según la política de control de acceso, proporcionar medios de autenticación apropiados, registrar los intentos de acceso, tanto exitosos como fallidos, registrar el uso de los privilegios especiales del sistema, generar alarmas cuando se violen las políticas de seguridad, y restringir el tiempo de conexión de los usuarios.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Procedimientos para un registro seguro, de manera que el acceso sea controlado.</li>
                         <li class="text-justify">Identificación y autenticación de usuarios, de manera que todos los usuarios tengan un ID de usuario único para su uso personal, junto a una técnica de autenticación que sustente dicha identidad.</li>
                         <li class="text-justify">Sistemas de gestión de claves, que permita la aplicación de ID de usuario, y sus claves secretas para mantener la responsabilidad.</li>
                         <li class="text-justify">Uso de las utilidades del sistema, que se debe restringir y controlar, ya que puede permitir adquirir más privilegios o evitar controles de acceso lógico.</li>
                         <li class="text-justify">Cierre por inactividad, de manera automática superado un tiempo dado</li>
                         <li class="text-justify">Limitar el tiempo de conexión, proporcionando seguridad adicional a las aplicaciones de riesgo elevado o desde ubicaciones de alto riesgo, como equipos expuestos al público.</li>
                     </ul>
                     <p class="text-justify">El objetivo de control "11.6 Control de acceso a las aplicaciones y a la información'; incluye dos controles o salvaguardas:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Restricción del acceso a las funciones de la aplicación y a su información, tanto de los usuarios como del personal de soporte, proporcionando menús para controlar el acceso a las funciones, diferenciando los derechos de acceso (lectura, escritura, eliminación, ejecución), controlando los derechos de acceso de otras aplicaciones y por último, asegurando que las salidas de información solo contengan la información solicitada, e incluso que solo se envíe a los terminales y ubicaciones autorizadas.</li>
                         <li class="text-justify">Aislar sistemas confidenciales, que deben tener un entorno informático aislado (tanto física como lógicamente) y dedicado, para lo cual es el propietario de la aplicación quien debe identificar y documentar la confidencialidad de la aplicación y de su información, así como aceptar con qué otras aplicaciones o sistemas puede compartir recursos
                         </li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U116D" role="button">Sistemas de autenticación de usuarios débiles, fuertes y biométricos.</a>
             <div class="collapse" id="U116D">
                 <div class="card card-body text-info">
                     <p><strong>Factores de autenticación</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Algo que se tiene.</li>
                         <li class="text-justify">Algo que se sabe.</li>
                         <li class="text-justify">Algo que se es.</li>
                     </ul><br/>
                     <p><strong>Métodos débiles y fuertes</strong></p>
                     <p class="text-justify">Un sistema de autenticación que solo emplea mecanismos de un factor de autenticación, suele ser referido como un <strong>mecanismo de autenticación débil</strong>.</p>
                     <p class="text-justify">Cuando se emplean mecanismos de varios de los factores anteriores, se habla de sistemas de autenticación multifactoriales, también conocidos como sistemas de autenticación fuertes.</p>
                     <p><strong>Métodos biométricos (algo que se es)</strong></p>
                     <p class="text-justify">Se reconocen como el mejor medio para autenticar la identidad de un ser hmnano, pero suelen conllevar una inversión en infraestructura (lectores, centrales de seguridad, y servidor con aplicación de autenticación).</p>
                     <p class="text-justify">A la hora de elegir un sistema de autenticación biométrico, debe considerarse la tasa de falsos negativos (tasa de rechazos incorrectos, o recuento de no aceptaciones de la autenticación de usuarios válidos), y la tasa de falsos positivos (tasa de aceptaciones incorrectas, o recuento de las ocasiones en que se da por válida la autenticación de un usuario inválido).</p>
                     <p><strong>Mejores prácticas en el uso de contraseñas (algo que se sabe)</strong></p>
                     <p class="text-justify">Se reconocen como el mejor medio para autenticar la identidad de un ser hmnano, pero suelen conllevar una inversión en infraestructura (lectores, centrales de seguridad, y servidor con aplicación de autenticación).</p>
                     <p class="text-justify">A la hora de elegir un sistema de autenticación biométrico, debe considerarse la tasa de falsos negativos (tasa de rechazos incorrectos, o recuento de no aceptaciones de la autenticación de usuarios válidos), y la tasa de falsos positivos (tasa de aceptaciones incorrectas, o recuento de las ocasiones en que se da por válida la autenticación de un usuario inválido).</p>
                     <ul class="pl-3">
                         <li class="text-justify">Debe ser fácil de recordar para el usuario,</li>
                         <li class="text-justify">Debe ser difícil de adivinar para un usuario no autorizado,</li>
                         <li class="text-justify">No deberían emplearse palabras contenidas en diccionarios.</li>
                         <li class="text-justify">No deberían ser inferiores a 6 caracteres, y cumplir unos requisitos de complejidad aplicables automáticamente por el sistema.</li>
                         <li class="text-justify">Un olvido de la contraseña debe ser comunicado al administrador.</li>
                         <li class="text-justify">Solo un administrador debe poder restablecer las contraseñas.</li>
                         <li class="text-justify">Un número de fallos debe bloquear la cuenta automáticamente.</li>
                         <li class="text-justify">Las contraseñas se deben almacenar y transmitir encriptadas.</li>
                         <li class="text-justify">Las contraseñas deben cambiarse regularmente, al menos 1 vez al año.</li>
                         <li class="text-justify">Las contraseñas deben ser únicas para una persona.</li>
                         <li class="text-justify">La contraseña del administrador debe ser conocida únicamente por una persona y custodiarse de manera especial</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U116E" role="button">Relación de los registros de auditoría del sistema operativo necesarios para monitorizar y supervisar el control de accesos.</a>
             <div class="collapse" id="U116E">
                 <div class="card card-body text-info">
                     <p><strong>Registro y monitorización en sistemas Windows</strong></p>
                     <p class="text-justify">Los sistemas de Microsoft Windows incorporan la herramienta Visor de Sucesos, que permite filtrar y configurar los diferentes registros.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf0486Fa.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" title="Usuarios en sistemas Linux" alt="Usuarios en sistemas Linux">
                     <p><strong>Registro y monitorización en sistemas Linux</strong></p>
                     <p class="text-justify">Linux emplea el subsistema syslog para todas las funciones de registro y monitorización de los eventos que ocurren en el sistema.</p>
                     <img src="../recursos/img/cursos/ifct0109/mf0486Fb.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" title="Usuarios en sistemas Linux" alt="Usuarios en sistemas Linux">
                     <p><strong>Norma ISO 27002</strong></p>
                     <p class="text-justify">El capítulo 10 de la norma, establece el objetivo " 10.10 Monitorización': para detectar las actividades no autorizadas.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Registro de auditoría,</li>
                         <li class="text-justify">Uso del sistema de monitorización,</li>
                         <li class="text-justify">Protección del registro,</li>
                         <li class="text-justify">Registros del administrador y del personal de operaciones,</li>
                         <li class="text-justify">Registros de fallos,</li>
                         <li class="text-justify">Sincronización horaria,</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U116F" role="button">Elaboración de la normativa de control de accesos a los sistemas informáticos.</a>
             <div class="collapse" id="U116F">
                 <div class="card card-body text-info">
                     <p class="text-justify">A la hora de elaborar una normativa, se recomienda seguir un esquema donde se prioricen y se tengan en cuentan las fuentes a considerar: la legislación que sea de aplicación, las normas de referencia, y finalmente el detalle de los controles aplicados en la empresa.</p>
                     <p class="text-justify">Se empleará como referencia la norma ISO 27002, que define el concepto de política de control de acceso como el documento de partida, que recoja las directrices a partir de las que se redacten los diferentes procedimientos necesarios para llevar a cabo el control de acceso lógico.</p>
                     <p><strong>Norma ISO27002</strong></p>
                     <p class="text-justify">El objetivo "1 1.1 Requisitos del negocio para el control de acceso ", establece que se debe controlar el acceso sobre la base de los requisitos comerciales, y de seguridad de la información de la empresa. Para ello, propone una única contramedida, que es la existencia de una política de control de acceso, que se debe documentar y mantener revisada, en base a los mencionados requisitos comerciales y de seguridad de la información.</p>
                     <p class="text-justify">Esta política debe ocuparse del control de acceso, tanto físico como lógico, y que se deben considerar en conjunto. Los requisitos que sustenten la política, se deben proporcionar tanto a los usuarios y a los proveedores</p>
                     <ul class="pl-3">
                         <li class="text-justify">Los requisitos de las aplicaciones de la empresa.</li>
                         <li class="text-justify">Una relación de toda la información relacionada con las aplicaciones empresariales.</li>
                         <li class="text-justify">La política para la divulgación y autorización de la in formación, como la necesidad de conocer la clasificación de la información.</li>
                         <li class="text-justify">La explicación de la consistencia entre la política de clasificación de la información y el control de accesos.</li>
                         <li class="text-justify">La legislación relevante y otras obligaciones contractuales.</li>
                         <li class="text-justify">Los perfiles de acceso de los usuarios en puestos de trabajo comunes.</li>
                         <li class="text-justify">La gestión de derechos de acceso.</li>
                         <li class="text-justify">La segregación de roles para el punto anterior: solicitud de acceso, autorización de acceso, y administración del acceso.</li>
                         <li class="text-justify">Los requisitos para la autorización del acceso.</li>
                         <li class="text-justify">Los requisitos para la revisión de los accesos.</li>
                         <li class="text-justify">La revocación de los derechos de acceso.</li>
                     </ul><br/>
                     <p><strong>Normativa de control de accesos</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Legislación aplicable</li>
                          <li class="text-justify">Reglamento de desarrollo de la LOPD.</li>
                          <ul class="pl-3">
                             <li class="text-justify">art.99, control de acceso físico.</li>
                         </ul>
                         <li class="text-justify">Esquema Nacional de Seguridad.</li>
                         <li class="text-justify">art. 16, autorización y control de los accesos (medidas de carácter operacional relacionadas con el control de acceso).</li>
                         <li class="text-justify">art. 21, protección de información almacenada y en tránsito.</li>
                         <li class="text-justify">art. 22, prevención ante sistemas interconectados.</li>
                         <li class="text-justify">art. 23, registro de actividad.</li>
                     </ul><br/>
                     <p class="text-justify pl-3">Normas de referencia</p>
                     <ul class="pl-3">
                         <li class="text-justify">TIA942, de diseño de datacenter y su acceso físico (5.3.3).</li>
                         <li class="text-justify">ISO17779, para la práctica de la gestión de la seguridad de la información.</li>
                     </ul><br/>
                     <p class="text-justify pl-3">Medidas aplicadas en la empresa acorde con la norma ISO 27002</p>
                     <ul class="pl-3">
                         <li class="text-justify">C.1: perímetro de seguridad física (9.1.1).</li>
                         <li class="text-justify">C.2: controles físicos de entrada (9.1.2).</li>
                         <li class="text-justify">C.3: seguridad de las oficinas, despachos e instalaciones (9.1.3).</li>
                         <li class="text-justify">C.4: trabajo en áreas seguras (9.1.5).</li>
                         <li class="text-justify">C.5: áreas de acceso público y de carga y descarga (9.1.6).</li>
                         <li class="text-justify">C.6: política de control de acceso (11.1).</li>
                         <li class="text-justify">C.7: gestión del acceso de los usuarios (11.2).</li>
                         <li class="text-justify">C.8: responsabilidades de los usuarios (11.3).</li>
                         <li class="text-justify">C.9: control del acceso a la red (11.4).</li>
                         <li class="text-justify">C.10: control del acceso al sistema operativo (11.5).</li>
                         <li class="text-justify">C.11: control del acceso a las aplicaciones y a la información (11.6).</li>
                     </ul>
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 7. IDENTIFICACIÓN DE SERVICIOS
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1171" role="button">Identificación de los protocolos, servicios y puertos utilizados por los sistemas de información.</a>
             <div class="collapse" id="U1171">
                 <div class="card card-body text-info">
                     <p><strong>Arquitectura TCP/IP</strong></p>
                     <p class="text-justify">Modelo OSI de 7 capas</p>
                     <ul class="pl-3">
                         <li class="text-justify">Nivel 1: capa física, debe proporcionar conexiones (fiables o no) punto a punto.</li>
                         <li class="text-justify">Nivel 2: capa de enlace, debe proporcionar una conexión fiable, punto a punto</li>
                         <li class="text-justify">Nivel 3: capa de red, debe proporcionar direccionamiento y enrutamiento para la entrega, fiable o no, de datagramas entre puntos de la red.</li>
                         <li class="text-justify">Nivel 4: capa de transporte, debe proporcionar entrega fiable de paquetes entre puntos de la red.</li>
                         <li class="text-justify">Nivel 5: capa de sesión, debe manejar las sesiones entre aplicaciones internas al nodo.</li>
                         <li class="text-justify">Nivel 6: capa de presentación, debe presentar la información con independencia del nodo.</li>
                         <li class="text-justify">Nivel 7: capa de aplicación, protocolos, funciones o servicios que usan la red.</li>
                     </ul>
                     <p class="text-justify">Modelo TCP/IP</p>
                     <ul class="pl-3">
                         <li class="text-justify">Capa 1, o capa de acceso al medio o de enlace, que dicta que debe existir un protocolo para conectar el nodo a la red.</li>
                         <li class="text-justify">Capa 2, o capa inter-redes, que permite que los nodos envíen paquetes a la red, y que estos lleguen (ordenados o no, con errores o no) a su destino, quizá por diferentes caminos. (IP).</li>
                         <li class="text-justify">Capa 3, o capa de transporte, que permite que los nodos establezcan una conversación (resolución de los errores y ordenación de los paquetes). Los protocolos más importantes son TCP (orientado a establecer o mantener la conversación mediante una conexión fiable nodo a nodo), y UDP (que no está orientado al establecimiento de una conexión nodo a nodo, y que no es fiable). </li>
                         <li class="text-justify">Capa 4, o capa de aplicación, que entrega unos protocolos de red disponibles para las aplicaciones del usuario. El más conocido es el protocolo HTTP, que emplean las aplicaciones de navegación web.</li>
                     </ul>
                     <img src="../recursos/img/cursos/ifct0109/mf048672a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Modelo OSI" title="Modelo OSI">
                     <img src="../recursos/img/cursos/ifct0109/mf048672b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Cable Lan Ethernet" title="Cable Lan Ethernet">
                     <img src="../recursos/img/cursos/ifct0109/mf048672c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Modelo TCP-IP" title="Modelo TCP-IP">
                     <p><strong>Protocolos, servicios y puertos más habituales</strong></p>
                     <p class="text-justify">Cada nodo de la red dispone de una dirección. En la capa de acceso se usa la dirección MAC (o Medium Access Control), del adaptador de red que conecta el nodo al medio físico, y en la capa de inter-red se usa la dirección IP (o Internet Protocol), que se configura para cada conexión de red.</p>
                     <p class="text-justify">Para diferenciar las distintas aplicaciones que usan una misma conexión de red, se emplean los puertos, que son como una dirección en la capa de transporte.</p>
                     <p class="text-justify">Existen 65535 puertos disponibles para el protocolo TCP, y también hay 65535 puertos definibles para el protocolo UDP, siendo la entidad lANA ((Internet Assigned Numbers Authority ), el órgano responsable de mantener la definición de las asignaciones estándar, dividiendo los puertos en tres rangos (RFC 6335):</p>
                     <ul class="pl-3">
                         <li class="text-justify">Puertos de sistema o puertos bien conocidos: 0-1023</li>
                         <li class="text-justify">Puertos de usuario o puertos registrados: 1024-49151</li>
                         <li class="text-justify">Puertos dinámicos o privados o efímeros: 49152-65535</li>
                     </ul><br/>
                     <p class="right">http://www.iana.org/assignments/service-names-port-numbers/service-names-port-numbers.xhtml</p>
                     <p class="text-justify">Servicios de usuario / Protocolo / Puerto</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1172" role="button">Utilización de herramientas de análisis de puertos y servicios abiertos para determinar aquellos que no son necesarios.</a>
             <div class="collapse" id="U1172">
                 <div class="card card-body text-info">
                     <p><strong>Herramientas básicas de trabajo en red</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>PING</strong></li>
                         <ul class="pl-3">
                             <li class="text-justify">Orientada al diagnóstico de conexión, esta utilidad se emplea para comprobar la conexión a nivel de red con el nodo cuya dirección se indique.</li>
                             <li class="text-justify">IP 127.0.0.1 o localhost: permite revisar la correcta instalación de protocolos TCP/IP en el nodo.</li>
                             <li class="text-justify">IP del nodo: permite asegurar que la tarjeta de red funciona, ya que el mensaje sale y regresa al equipo.</li>
                             <li class="text-justify">IP de otro nodo de la LAN: permite asegurar que hay conexión con otro nodo, es decir, que parte de la LAN funciona.</li>
                             <li class="text-justify">IP de la pasarela (máquina que conecta a internet, o gateway): permite confirmar que puede haber conexión hacia internet</li>
                             <li class="text-justify">IP de un servidor DNS del proveedor de la conexión a internet (ISP}: permite confirmar que hay conexión a internet.</li>
                         </ul>
                         <li class="text-justify"><strong>TRACEROUTE</strong></li>
                         <p class="text-justify">Orientada al diagnóstico de la ruta de conexión. Empleando el campo TTL (Time To Live) de los paquetes o datagramas del protocolo de red IP, permite averiguar qué ruta sigue un paquete hasta alcanzar su destino. (En sistemas Windows, esta aplicación se denomina tracert.)</p>

                         <li class="text-justify"><strong>NETSTAT</strong></li>
                         <p class="text-justify">Orientado a conocer todas las conexiones activas del nodo donde se ejecuta, Netstat permite saber en un momento dado qué puertos TCP y UDP se están usando, además de estadísticas de dicho uso.</p>

                         <li class="text-justify"><strong>NSLOOKUP</strong></li>
                         <p class="text-justify">Orientada a obtener información de un dominio o de una dirección IP, este comando realiza consultas a un servidor de nombre (DNS), para averiguar la traducción de un nombre de internet o dominio, a su dirección IP; o viceversa. (dig en Linux)</p>

                         <li class="text-justify"><strong>WHOIS</strong></li>
                         <p class="text-justify">Orientada a obtener información de un dominio, o de una dirección IP, esta aplicación permite averiguar quién es el propietario de un nombre de dominio o de una dirección IP, dirigiendo la consulta a un servidor whois (por ejemplo a whois.nic.es, responsable de los dominios ".es").</p>

                         <li class="text-justify"><strong>TELNET</strong></li>
                         <p class="text-justify">Orientado al establecimiento de una conexión, esta aplicación permite iniciar una sesión remota en un nodo remoto, siempre en modo carácter o modo terminal, para gestionar el equipo remoto mediante</p>
                     </ul>

                     <p><strong>Herramientas de análisis de puertos</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>SUPERSCAN</strong></li>
                         <p class="text-justify">Esta aplicación gratuita desarrollada por FoundStone permite realizar múltiples intentos de conexión. Se puede fijar el rango de direcciones IP que se desean analizar, el tipo de análisis que se realizará, por ejemplo, si solo se empleará el protocolo TCP o el UDP, los puertos que se analizarán (partiendo de una lista que obedece a un conjunto frecuente de servicios), y el tipo de escaneo se realizará.</p>
                         <li class="text-justify"><strong>NMAP</strong></li>
                         <p class="text-justify">Disponible para sistemas Windows y Linux, es la herramienta de uso más extendido, siendo su empleo casi un estándar de facto. Permite con mucha facilidad llevar a cabo un completo análisis de toda una red, de un rango de direcciones, o de una sola dirección IP, centrándose en determinar qué puertos y servicios se encuentran disponibles.</p>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1173" role="button">Utilización de herramientas de análisis de tráfico de comunicaciones para determinar el uso real que hacen los sistemas de información de los distintos protocolos, servicios y puertos.</a>
             <div class="collapse" id="U1173">
                 <div class="card card-body text-info">
                     <p><strong>Herramientas de 1 instante de tiempo</strong></p>
                     <p class="text-justify">La aplicación <strong>NetStat</strong> permite conocer las conexiones existentes en un momento del tiempo. No obstante, si se le indica como argumento un número, lo interpretará como la pausa en segundos que debe esperar antes de volver a ejecutarse de manera periódica.</p>

                     <p><strong>Herramientas de registro continuo</strong></p>
                     <p class="text-justify">Mejorando la solución anterior, existen herramientas que registran todas las conexiones que se establecen, lo que ofrece mayores garantías de que se detecten todos los servicios en uso, aunque sean breves y muy esporádicos. Por contrapartida, el espacio requerido para registrar la actividad es grande, sobre todo si se ejecuta en un servidor, y la penalización en las comunicaciones también resulta apreciable. Entre las soluciones más sencillas, destaca Microsoft Port Reporter, que funciona como un servicio de Windows, que registra la actividad en un archivo de texto. Para interpretar este archivo de texto, se emplea la herramienta complementaria Microsoft Report Parser, también gratuita.</p>

                     <p><strong>Herramientas de captura de tráfico</strong></p>
                     <p class="text-justify">La última categoría de herramientas que permiten analizar los puertos, son las aplicaciones de captura de tráfico o sniffers, que no solo registran las conexiones, sino que registran el tráfico cursado. Todas necesitan tener acceso directo al adaptador de red, ya que de otra manera el sistema operativo procesaría el tráfico, sin permitir que estas aplicaciones intermedias lo capturaran.</p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>MICROSOFT NETWORK MONITOR</strong>
                             <p class="text-justify">Esta aplicación gratuita de Microsoft, además de capturar el tráfico, es capaz de interpretar multitud de protocolos. De la misma manera que Nmap, no solo se puede ver el tráfico capturado, sino que este se traduce en los protocolos y tramas en una forma legible para el usuario; lo que de otra manera haría inutilizable la información capturada.</p>
                         </li>
                         <li class="text-justify"><strong>TCPDUMP</strong>
                             <p class="text-justify">Esta aplicación original de Linux para el registro continuo resulta muy eficiente y práctica, por ejecutarse en línea de comandos. Junto a la herramienta tcpflow, pueden ejecutarse para capturar tráfico que posteriormente se analizará con intérpretes de protocolos adecuados.</p>
                         </li>
                         <li class="text-justify"><strong>WIRESHARK (ETHEREAL)</strong>
                             <p class="text-justify">Tanto para sistemas Windows como Linux, esta herramienta es el capturador de paquetes más extendido, y al igual que nmap, es casi un estándar de facto, por lo que se recomienda al lector relacionarse con ella. Su funcionamiento básico supone empezar a capturar datos para posteriormente procesarlos, aplicando el amplio conjunto de protocolos que es capaz de interpretar, de manera que puede presentar la información de una forma fácilmente interpretable para el usuario.</p>
                         </li>
                     </ul>
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 8. ROBUSTECIMIENTO DE SISTEMAS
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1181" role="button">Modificación de los usuarios y contraseñas por defecto de los distintos sistemas de información.</a>
             <div class="collapse" id="U1181">
                 <div class="card card-body text-info">
                     <p class="text-justify">La norma ISO 17799:2005 El control" 11.2.3 Gestión de claves secretas de los usuarios",</p>
                     <ul class="pl-3">
                         <li class="text-justify">Los usuarios deben firmar un compromiso para mantener la confidencialidad de las claves.</li>
                         <li class="text-justify">Cuando se proporcione una contraseña temporal a los usuarios, debe ser segura, y deben estar obligados a cambiarla.</li>
                         <li class="text-justify">Al entregar una clave secreta a un usuario, se debe hacer de modo que se verifique su identidad.</li>
                         <li class="text-justify">Las claves deben entregarse a Jos usuarios de manera segura.</li>
                         <li class="text-justify">Las claves temporales serán seguras y únicas.</li>
                         <li class="text-justify">Los usuarios deben reconocer la recepción de claves temporales.</li>
                         <li class="text-justify">Las claves no se almacenarán sin protección.</li>
                         <li class="text-justify">Las claves predeterminadas deben cambiarse tras la instalación del sistema o aplicación.</li>
                     </ul>

                     <p class="text-justify">No solo deben modificarse las contraseñas de los usuarios por defecto, de manera que la autenticación sea factible, sino que siempre que sea posible, deben deshabilitarse los usuarios que el sistema incorpora por defecto. El acceso lógico precisa conocer un usuario y su contraseña, de manera que conocer un nombre de usuario válido, ya supone una debilidad del sistema, incluso cuando el nombre del usuario conocido dispone de privilegios (como suele ser el caso de los usuarios facilitados por el fabricante).</p>

                     <p class="text-justify">Debe aplicarse también especial precaución en los mecanismos que permitan retornar el equipo a su estado de fábrica, y por lo tanto, volver a habilitar y restablecer las contraseñas por defecto de un sistema.</p>

                     <p><strong>Referencias y directrices</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">INTECO (Instituto Nacional de Tecnologías de la Comunicación), que proporciona guía para securizar servidores web, etc.</li>

                         <li class="text-justify">CCN (Centro Criptológico Nacional), que bajo registro proporciona gtúas para securizar sistemas operativos Windows Server 2003, Windows Server 2008, Red Hat Linux, Suse, Debían, etc.</li>

                         <li class="text-justify">NIST (National Institute of Standards and Technology ), que proporciona una extensa biblioteca sobre seguridad de la información.</li>
                         <li class="text-justify">CJS (Center for Internet Security), que proporciona una extensa colección de guías de comparación o benchmarking, de robustecimiento de distintos sistemas ( Windows, Linux, etc.).</li>
                     </ul><br/>

                     <p><strong>Directrices en guías CIS</strong></p>

                     <p class="text-justify">Las principales referencias en la guía CJS (v 2.1) para sistemas Windows Server 2008 R2, relativas a modificar los usuarios y contraseñas por defecto, son las siguientes: (1.1.1.2.1.9) deshabilitar el estado de la cuenta de invitado, (1.1.1.2. 1.10) renombrar la cuenta de administrador, ( 1.1.1.2.1.48) renombrar la cuenta de invitado, (1.1.1.2.1.47) deshabilitar la traducción anónima de SID a nombre de cuenta, y (1.1.1.2.1.72) y ( 1.1.1.2.1.85) deshabilitada enumeración anónima de cuentas.</p>

                     <p class="text-justify">Las principales referencias en la guía CJS (v 1.0.5) para sistemas Red Hat Linux, son (7.7) restringir el inicio de root a la consola de sistema, (7.8) establecer una contraseña en el sistema de arranque (LILO/GRUB), y (8.11) limitar el acceso de la cuenta root desde el comando su.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1182" role="button">Configuración de las directivas de gestión de contraseñas y privilegios en el directorio de usuarios.</a>
             <div class="collapse" id="U1182">
                 <div class="card card-body text-info">
                     <p class="text-justify">La norma ISO 17799:2005 establece en su control "11.2.2 Gestión de privilegios': que se debe restringir y controlar la asignación y uso de privilegios mediante un proceso de autorización formal, que contemple:</p>
                     <ul class="pl-3">

                         <li class="text-justify">Identificar a que usuarios hay que dar acceso a cada recurso.</li>
                         <li class="text-justify">Los privilegios deben otorgarse en base a la necesidad de saber.</li>
                         <li class="text-justify">Mantener proceso de autorización y registro, y no otorgarlos hasta que se complete.</li>
                         <li class="text-justify">Es preferible el empleo de rutinas, u otros mecanismos automáticos del sistema, que eviten la necesidad de otorgar privilegios.</li>
                         <li class="text-justify">Es preferible usar programas que eviten la necesidad de ejecutarse con privilegios.</li>
                         <li class="text-justify">Los privilegios deben otorgarse a un identificador de usuario, diferente del utilizado en el uso normal y diario de la empresa.</li>
                     </ul><br/>

                     <p class="text-justify">Sobre las condiciones que deben cumplir las contraseñas, la norma ISO 17799:2005 establece en el control «11.3.1 Uso de claves secretas»: que deben ser de calidad, con longitud suficiente, y que además, cumplan:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Que sean fáciles de recordar.</li>
                         <li class="text-justify">Que no se basen en nada fácilmente adivinable como información de la persona.</li>
                         <li class="text-justify">Que no incluyan palabras incluidas en diccionarios.</li>
                         <li class="text-justify">Que estén libres de caracteres consecutivos idénticos, todos numéricos o alfanuméricos.</li>
                         <li class="text-justify">Que se cambien regularmente, o en base al número de accesos, evitando reutilizar de claves anteriores.</li>
                     </ul><br/>

                     <p><strong>Directrices en guías NIST</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">La guía de referencia NIST 800-123, dedicada a la seguridad general de servidores, establece en su punto 4.2.2 que las reglas o política de contraseñas debe fijar:</li>
                         <li class="text-justify">la longitud mínima</li>
                         <li class="text-justify">La complejidad, empleando mezcla de diferentes tipos de caracteres para reducir el posible éxito de un ataque de ensayo de error de palabras contenidas en diccionarios,</li>
                         <li class="text-justify">El periodo de validez de una contraseña,</li>
                         <li class="text-justify">La reutilización de contraseñas que evite emplear las anteriores,</li>
                         <li class="text-justify">La autoridad para cambiar o restablecer las contraseñas,</li>
                         <li class="text-justify">La seguridad de las contraseñas en lo referente a que se almacenen cifradas en el servidor, e incluso que se usen claves diferentes para la administración del servidor, y para otras labores de administración.</li>
                     </ul><br/>

                     <p><strong>Directrices en guías CIS</strong></p>
                     <p class="text-justify">Para Windows Server 2008 R2, se establecen los siguientes elementos a configurar, desde las políticas de grupo del directorio activo para los requisitos de las contraseñas:</p>
                     <ul class="pl-3">
                         <li class="text-justify">( 1.1.1.5.2.2) Longitud mínima de la contraseña de 8 caracteres, salvo en entornos de alta seguridad, donde se recomiendan 14 caracteres.</li>
                         <li class="text-justify">(1.1.1.5.2.3) Edad máxima de la contraseña de 60 días.</li>
                         <li class="text-justify">( 1.1.1.5.2.5) Edad mínima de la contraseña de 1 día.</li>
                         <li class="text-justify">( 1.1.1.5.2.6) Complejidad de la contraseña requerida.</li>
                         <li class="text-justify">(1.1.1.5.2.4) Histórico de contraseñas a recordar, para no repetir ninguna de las últimas 24 contraseñas empleadas.</li>
                         <li class="text-justify">( 1.1.1.5.2.1) Deshabilitar almacenamiento de contraseñas con cifrado reversible.</li>
                     </ul>
                     <p class="text-justify">Para Linux, se establecen los siguientes elementos a configurar para el subsistema de contraseñas PAM, que extiende el sistema de contraseñas por defecto, e integrable con OpenLDAP:</p>
                     <ul class="pl-3">
                         <li class="text-justify">(7.9) Requerir autenticación para el modo de arranque de un solo usuario (que con acceso a la consola local, permite arrancar el sistema sin contraseña, y operativo como el usuario root), configurando la aplicación de arranque.</li>
                         <li class="text-justify">(8.2) Verificar que no hay cuentas con contraseñas vacías.</li>
                         <li class="text-justify">(8.3) Ajustar el periodo en que expiran las contraseñas así como el periodo mínimo de vigencia.</li>
                         <li class="text-justify">(8.4) Asegurar que no quedan entradas"+" en archivos de contraseñas o de grupos, procedentes de sistemas antiguos.</li>
                         <li class="text-justify">(7.1) Deshabilitar ".rhosts" de la configuración PAM.</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1183" role="button">Eliminación y cierre de las herramientas, utilidades, servicios y puertos prescindibles</a>
             <div class="collapse" id="U1183">
                 <div class="card card-body text-info">
                     <p><strong>Herramientas y otras aplicaciones</strong></p>

                     <p class="text-justify">Como se mencionó en la introducción, el robustecimiento persigue minimizar la superficie de ataque de un sistema, que se acepta que es mayor cuanto mayor sea el número de servicios y aplicaciones que realice. Por lo tanto, es una cuestión primordial eliminar todas las herramientas, utilidades, aplicaciones, y servicios que no sean estrictamente necesarios. Para ello se precisan medidas técnicas de revisión, y desinstalación de aplicaciones innecesarias; y medidas normativas que regulen la instalación de software.</p>

                     <p class="text-justify">La norma ISO 17799:2005 contempla el proceso para añadir o quitar una aplicación al sistema, como un cambio del mismo, y dispone para ello el objetivo de control "12.5 Seguridad en los procesos de desarrollo y soporte'; que aporta las siguientes pautas de control:</p>
                     <ul class="pl-3">
                         <li class="text-justify">"12.5.1 Procedimientos de control del cambio'; se deben controlar los cambios con procedimientos formales para minimizar la corrupción de los sistemas.</li>
                         <li class="text-justify">"12.5.4 Filtrado de información': para el que deben evitarse oportunidades como las que ofrecen el uso y explotación de puertos o canales de manera disimulada, o encubierta por algunas aplicaciones.</li>
                         <li class="text-justify">El objetivo de control "15.1 Cumplimiento de los requerimientos legales':</li>
                         <li class="text-justify">"15.1.5 Prevención del mal uso de los medios de procesamiento de la información': que fija que se debe disuadir a los usuarios de emplear los medios de procesamiento de la información para propósitos no autorizados</li>
                     </ul><br/>

                     <p><strong>La guía CCN -STI C 821</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Solo el personal de soporte técnico autorizado podrá instalar software en los equipos informáticos o de comunicaciones de los usuarios, con la excepción de las herramientas de uso común, que puedan ser descargables desde servidores internos.</li>
                         <li class="text-justify">Los usuarios podrán solicitar la inclusión de una aplicación, lo que debe ser estudiado, al menos por el personal técnico de seguridad.</li>
                         <li class="text-justify">No se podrá instalar software que no disponga de licencia correspondiente, o cuya utilización no sea conforme con la legislación vigente en materia de propiedad intelectual.</li>
                         <li class="text-justify">Se prohíbe la reproducción, modificación, transformación, cesión, comunicación, o uso fuera de la empresa de los programas y aplicaciones informáticas instaladas en los equipos que pertenecen a la empresa.</li>
                         <li class="text-justify">No se podrán deshabilitar o eliminar las aplicaciones instaladas por la empresa, especialmente las relacionadas con la seguridad.</li>
                     </ul><br/>

                     <p><strong>Comunicaciones y puertos de red</strong></p>
                     <p class="text-justify">La norma ISO 17799:2005 en su objetivo de control "11.4 Control de acceso a la red‘.</p>
                     <ul class="pl-3">
                         <li class="text-justify">"11.4.1 Política sobre el uso de los servicios de red'; resulta relevante, porque dicta que los usuarios sólo deberían tener acceso a los servicios para los cuales hayan sido autorizados.</li>
                         <li class="text-justify">"11.4.2 Autenticación del usuario para conexiones externas'; ya que no basta con deshabilitar el resto de puertos, sino que en los puertos habilitados el acceso debe mantenerse autenticado (empleando técnicas de criptografía, dispositivos hardware o un mecanismo de desafío/respuesta, o redes privadas virtuales).</li>
                         <li class="text-justify">"11.4.5 Segregación de redes'; que establece que los sistemas y/o grupos de usuarios deben separarse en diferentes redes.</li>
                         <li class="text-justify">"11.4.6 Control de conexión a la red'; que establece que se debe restringir la capacidad de conexión de los usuarios a la red, empleando, por ejemplo, pasarelas de red o gateways, con tablas o reglas predefinidas para restringir el uso del correo, la transferencia de archivos, el acceso para iniciar una sesión interactiva remota, o el acceso a una aplicación concreta.</li>
                     </ul><br/>

                     <ul class="pl-3">
                         <li class="text-justify">Usar internet para fines profesionales.</li>
                         <li class="text-justify">No visitar páginas de contenido poco ético, ofensivo o ilegal.</li>
                         <li class="text-justify">No visitar páginas no fiables o sospechosas.</li>
                         <li class="text-justify">Cuidar la información que se publica en interne!.</li>
                         <li class="text-justify">Observar las restricciones legales que sean de aplicación.</li>
                         <li class="text-justify">Realizar descargas solo si se tiene autorización.</li>
                         <li class="text-justify">No descargar código o programas no confiables.</li>
                         <li class="text-justify">Asegurar la autenticidad de la página visitada.</li>
                         <li class="text-justify">Comprobar la seguridad de la conexión.</li>
                         <li class="text-justify">Cerrar las sesiones al terminar la conexión.</li>
                         <li class="text-justify">Utilizar herramientas contra código dañino.</li>
                         <li class="text-justify">Mantener actualizado el navegador y las herramientas de seguridad.</li>
                         <li class="text-justify">Utilizar los niveles de seguridad del navegador.</li>
                         <li class="text-justify">Desactivar las cookies.</li>
                         <li class="text-justify">Eliminar la información privada.</li>
                         <li class="text-justify">No instalar complementos desconocidos.</li>
                         <li class="text-justify">Limitar y vigilar la ejecución de programas en el navegador como applets y scripts</li>
                     </ul><br/>

                     <p><strong>Pasarelas de seguridad.</strong></p>

                     <p class="text-justify">Una pasarela, puerta de enlace o puerta de acceso ("gateway") es un equipo de comunicaciones que interconecta redes con arquitecturas diferentes, realizando para ello funciones avanzadas de traducción de protocolos entre ambas redes.</p>

                     <p class="text-justify">Normalmente, la empresa empleará arquitectura de red TCP/ IP, y estará conectada a internet, de manera que las pasarelas serán dispositivos que extiendan las funciones de un router. Tal es el caso de las pasarelas de seguridad, que añaden normalmente servicios de antivirus o de detección de intrusos, para tomar decisiones sobre las conexiones que se permiten .</p>

                     <p><strong>Directrices en guías NIST</strong></p>
                     <p class="text-justify">Servicios que se deben revisar expresamente</p>
                     <ul class="pl-3">

                         <li class="text-justify">Servicios para compartir archivos e impresoras.</li>
                         <li class="text-justify">Servicios de comunicaciones inalámbricas.</li>
                         <li class="text-justify">Servicios de control y acceso remoto, especialmente los no cifrados, como es el caso de Telnet.</li>
                         <li class="text-justify">Servicios de directorio (LDAP).</li>
                         <li class="text-justify">Servidores web.</li>
                         <li class="text-justify">Servidores de correo electrónico.</li>
                         <li class="text-justify">Compiladores y librerías de lenguajes.</li>
                         <li class="text-justify">Herramientas de desarrollo.</li>
                         <li class="text-justify">Herramientas y utilidades de gestión de red como el protocolo SNMP.</li>
                     </ul><br/>

                     <p><strong>Directrices en guías CIS</strong></p>

                     <p class="text-justify">Para sistemas operativos Linux, CJS recomienda en su guía de comparación v.1.0.5 para Red Hat Linux instalar el paquete Bastille, que simplifica el robustecimiento del sistema, mediante unas preguntas previas en base a las cuales, el paquete desactiva aquellos servicios que no son verdaderamente necesarios.</p>

                     <p class="text-justify">Para sistemas operativos Windows Server 2008R2, CIS recomienda en su guía v2.1 revisar unos 160 aspectos sobre los servicios del sistema, detallados en la sección 1.1.1.1 (por ejemplo servicio de fax, de replicación de archivos, FTP, servicio de ayuda y soporte, el servicio HTTPS, servicio de indexación de contenidos, Messenger, POP3, servicio de impresión, etc.).</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1184" role="button">Configuración de los sistemas de información para que utilicen protocolos seguros donde sea posible.</a>
             <div class="collapse" id="U1184">
                 <div class="card card-body text-info">
                     <img src="../recursos/img/cursos/ifct0109/mf048685.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Protección mediante criptosistema" title="Protección mediante criptosistema">

                     <p><strong>Criptosistemas de clave secreta y criptosistemas de clave pública</strong></p>

                     <p class="text-justify">La criptografía es la ciencia que estudia cómo proporcionar comunicaciones seguras a través de canales inseguros. Para que el intercambio de un texto entre dos personas sea seguro, el texto se cifra, de manera que el texto obtenido o criptograma resulte ilegible para quien no sepa realizar el proceso inverso: el de descifrarlo para recuperar el texto original.</p>

                     <p><strong>Criptosistemas de clave pública y privada</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Criptosistemas de clave simétrica o de clave secreta

                             <p class="text-justify">Son aquellos en los que la clave que se emplea para cifrar y descifrar la información es la misma, es decir, emplean una clave que de antemano es conocida por el emisor y el receptor del mensaje (de ahí el nombre de simétrico). Por lo tanto, la clave debe permanecer secreta, porque de conocerse se puede descifrar la información.</p>
                         </li>

                         <li class="text-justify">Criptosistemas de clave asimétrica o de clave pública

                             <p class="text-justify">Son aquellos en los que se emplea una clave que conoce todo el mundo (por lo tanto es pública), que pertenece al receptor del mensaje; de manera que todos los emisores que quieran enviarle un mensaje al receptor emplean esa clave para cifrar la información. Para descifrar la información, el receptor dispone de una segunda clave que solo él conoce (por lo tanto esa es privada), de manera que solo él puede descifrar la información.</p>
                         </li>
                     </ul>

                     <img src="../recursos/img/cursos/ifct0109/mf048685a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Cifrado de mensaje" title="Cifrado de mensaje.">

                     <img src="../recursos/img/cursos/ifct0109/mf048685b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Firma digital con clave asimétrica." title="Firma digital con clave asimétrica.">

                     <p><strong>Firma electrónica y firma digital</strong></p>

                     <p class="text-justify">Una firma electrónica es lo mismo que una firma manual o rúbrica, y cuando se añade a un documento aporta a este la identidad del propietario de la firma; en España está regulada por la Ley 59/2003, de 19 de noviembre. Un caso específico de la firma electrónica es la firma digital, que es aquella firma electrónica que hace uso de clave pública.</p>

                     <p class="text-justify">La firma digital permite asegurar la integridad del documento, porque se sabe que no ha sido alterado. Sin embargo, no aporta confidencialidad, porque cualquiera que intercepte el mensaje puede descifrarlo con la clave pública del remitente.</p>

                     <p><strong>Certificado digital</strong></p>

                     <p class="text-justify">Un certificado digital es un documento emitido por una autoridad de certificación, que identifica a una persona (física o jurídica) vinculándola con sus claves públicas y privadas. La autoridad hace de notario entre las partes (emisor y receptor), garantizando la autenticidad de las claves pública y privada para la identidad del propietario de ambas.</p>

                     <p><strong>Protocolos seguros</strong></p>
                     <p class="text-justify">El empleo de criptosistemas otorga seguridad a las comunicaciones y servicios, en mayor o menor medida, según la complejidad de las medidas técnicas aplicadas (cifrado simétrico o asimétrico, empleo de firmas electrónicas, de firmas digitales, e incluso de certificados digitales).</p>
                     <p class="text-justify">Los diferentes protocolos de los servicios de internet hacen uso de estas técnicas, de manera que se obtienen sus variantes seguras. A continuación, se resumen los más habituales para el servicio web, la conexión remota y transferencia de ficheros, y para el correo electrónico. Para otros servicios específicos, debe investigarse siempre qué soluciones existen disponibles, y en la medida de lo posible, elegir siempre servicios protegidos mediante cifrado; preferiblemente asimétrico, y con empleo de certificados digitales.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1185" role="button">Actualización de parches de seguridad de los sistemas informáticos.</a>
             <div class="collapse" id="U1185">
                 <div class="card card-body text-info">
                     <p><strong>Actualización de parches</strong></p>
                     <p class="text-justify">La norma ISO 17799:2005 establece como objetivo de control 12.6 la gestión de la vulnerabilidad técnica de manera sistemática y efectiva, para lo que dispone como única contramedida la 12.6.1, relativa al control de las vulnerabilidades técnicas.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Búsqueda activa de información, y monitorización de aparición de nuevas vulnerabilidades</li>
                         <li class="text-justify">Establecimiento de un cronograma, para reaccionar a las nuevas vulnerabilidades aparecidas.</li>
                         <li class="text-justify">La evaluación del riesgo vinculado a la vulnerabilidad aparecida para determinar las acciones a emprender, como aplicar un parche, o corrección a la aplicación.</li>
                         <li class="text-justify">Se debe considerar el riesgo de aplicar un parche frente al de no aplicarlo. Antes de aplicarlo, preferiblemente se debería probar y evaluar su efectividad, y ausencia de efectos secundarios.</li>
                     </ul><br/>

                     <p><strong>Directrices en guías NIST</strong></p>
                     <p class="text-justify">La guía NIST 800-123, en su apartado 4.1, indica que una vez que la aplicación servidor ha sido instalada, es esencial aplicar los parches para corregir las vulnerabilidades conocidas, antes de que el sistema sea accesible o entre en producción. Para ello, los administradores del servidor deberían:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Seguir un procedimiento organizado para aplicar actualizaciones.</li>
                         <li class="text-justify">Reducir las vulnerabilidades como sea posible, hasta que haya un parche disponible.</li>
                         <li class="text-justify">Identificar vulnerabilidades y aplicar los parches oportunos.</li>
                         <li class="text-justify">Instalar correcciones de manera permanente (paquetes de mejora, mejoras del producto o upgrades, nuevas versiones, etc.).</li>
                     </ul><br/>

                     <p><strong>Directrices en guías CIS</strong></p>

                     <p class="text-justify">Para sistemas operativos Linux, ClS recomienda en la gtúa de comparación de seguridad v.1.0.5 para Red Hat Linux, instalar los últimos parches al sistema operativo. Esto es un punto fundamental para robustecer un servidor, y se destaca entre sus primeras medidas (apartado 1.1).</p>

                     <p class="text-justify">También para sistemas operativos Windows Server 2008 R2, CIS recomienda en su guía v.2.1 configurar el sistema para que se apliquen automáticamente las actualizaciones automáticas ( 1.1.1.1.8), lo que abarca tanto los paquetes de mejoras y correcciones de mayor envergadura, como los parches y correcciones menores que el fabricante haga disponibles.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1186" role="button">Protección de los sistemas de información frente a código malicioso.</a>
             <div class="collapse" id="U1186">
                 <div class="card card-body text-info">
                     <p><strong>Ataque de código malicioso</strong></p>

                     <img src="../recursos/img/cursos/ifct0109/mf048687a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Ataque código malicioso." title="Ataque código malicioso.">

                     <p><strong>La norma ISO 17799:2005</strong> "1 0.4.1 «Controles contra código malicioso»</p>
                     <ul class="pl-3">
                         <li class="text-justify">Una política formal, que prohíba el uso de software no autorizado.</li>
                         <li class="text-justify">Establecer una política formal respecto a la obtención de software, desde redes externas u otros medios.</li>
                         <li class="text-justify">Realizar revisiones regulares de las aplicaciones y archivos de los sistemas críticos, investigando la presencia de aplicaciones o modificaciones no autorizadas.</li>
                         <li class="text-justify">La instalación y actualización regular de software específico, para la detección de código malicioso como medida preventiva, y los chequeos rutinarios de: cualquier archivo recibido antes de ejecutarlo, todos los adjuntos de los correos electrónicos (tanto en los servidores de correo como en las computadoras), y también de las páginas web, para detectar código malicioso.</li>
                         <li class="text-justify">La definición de procedimientos y responsabilidades, para la protección frente a código malicioso.</li>
                         <li class="text-justify">La preparación de planes apropiados, para la continuidad del negocio en caso de la materialización de un ataque por código malicioso.</li>
                         <li class="text-justify">Mantenerse informado, por ejemplo, mediante subscripción a boletines de noticias de seguridad, de los códigos maliciosos nuevos.</li>
                         <li class="text-justify">Verificar la información relacionada con códigos maliciosos nuevos, diferenciando, por ejemplo, amenazas reales de bromas pesadas.</li>
                     </ul>

                     <p class="text-justify">Tipos de código malicioso</p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Virus</strong>, que infectan a otros ficheros ejecutables (aplicaciones convencionales, controladores de dispositivos), o con alguna capacidad de ejecución (algunos tipos de documentos que incluyen parte de información correspondiente a acciones ejecutables, como macros o repeticiones de tareas).</li>

                         <li class="text-justify"><strong>Gusanos</strong>, que no infectan a otros ficheros ejecutables sino que constituyen un fichero por sí mismo.</li>

                         <li class="text-justify"><strong>Troyanos</strong>, carecen de mecanismo propio de replicación, y suelen propagarse al visitar una página web, estando incluidos en otras aplicaciones aparentemente inofensivas, o al ser descargados por un programa malicioso que ya exista en el sistema.</li>

                         <li class="text-justify">Aplicaciones que muestran <strong>publicidad no deseada</strong> (en inglés adware) al usuario.</li>
                         <li class="text-justify"><strong>Bloqueador</strong>, que impiden la ejecución de determinados programas, como antivirus u otros programas de seguridad, o impiden el acceso a determinadas páginas web.</li>
                         <li class="text-justify"><strong>Bombas lógicas</strong>, que actúan bajo una circunstancia programada, por ejemplo una fecha, o bajo control remoto.</li>
                         <li class="text-justify"><strong>Broma</strong> (en inglés joke), que al ejecutarse hace pensar al usuario que el ordenador se va a borrar, que está averiado, etc.</li>
                         <li class="text-justify"><strong>Bulo</strong> (en inglés hoax), que en forma de correo electrónico engaña al destinatario en relación a la existencia de un nuevo virus</li>
                         <li class="text-justify"><strong>Capturador de teclado</strong> (en inglés keylogger), que registra todas las pulsaciones logrando así obtener las claves de acceso a los servicios.</li>
                         <li class="text-justify"><strong>Redireccionador</strong> (en inglés clicker ), que redirecciona el navegador web del usuario a una página en concreto, por ejemplo, a una página falsa de un banco, u otros servicios, como el correo electrónico.</li>
                         <li class="text-justify"><strong>Criptovirus</strong> (en inglés ransomware), que cifran un fichero y coaccionan al usuario a que pague un rescate para descifrarlos.</li>
                         <li class="text-justify"><strong>Descargador</strong> (en inglés downloader), que acceden a interne! para descargar otros programas normalmente maliciosos.</li>
                         <li class="text-justify"><strong>Espía</strong> (en inglés, spyware), que envían información del equipo a un equipo remoto, bien sean las páginas visitadas y otra información sobre hábitos de uso, o documentos completos.</li>
                         <li class="text-justify">Que <strong>explotan una vulnerabilidad</strong> (en inglés exploit), generalmente para tener control remoto del sistema infectado, o tener acceso no autorizado al sistema. Algunos troyanos también tienen este objetivo.</li>
                         <li class="text-justify"><strong>Fraude</strong>, que simulan un comportamiento anormal, e incitan a la compra. Generalmente, un falso antivirus u otra aplicación, que informa que se tiene un virus, y puede eliminarse comprando la aplicación.</li>
                         <li class="text-justify"><strong>Instalador</strong> (en inglés dropper), que permite la instalación de otros códigos maliciosos en el sistema</li>
                         <li class="text-justify"><strong>Ladrón de contraseñas</strong> (en inglés password stealer), que accede a ficheros conocidos del sistema, donde se registran usuarios y sus contraseñas para enviarlos al atacante.</li>
                         <li class="text-justify"><strong>Marcador</strong> (en inglés dialer), que aprovechan las conexiones a internet vía modem que hacen marcado telefónico, para hacer llamadas a números de cobro adicional.</li>
                         <li class="text-justify"><strong>Puerta trasera</strong> (en inglés backdoor), que permite el acceso al sistema operativo, aplicación o página web, eludiendo los controles de acceso que haya. La finalidad es obtener información, acceder a los ficheros, reiniciar el ordenador, etc.</li>
                         <li class="text-justify"><strong>Herramientas de control total</strong> (en inglés rootkit), que permiten al atacante tomar el control del sistema como su administrador (en Linux el usuario root), permitiendo al atacante remoto hacer lo que desee.</li>
                         <li class="text-justify"><strong>Secuestrador del navegador</strong> (en inglés browser hijacker ), que modifica la página de inicio del navegador, añade barras de botones, modifica las direcciones de páginas más visitadas o favoritos, generalmente con la finalidad de aumentar las visitas a una página determinada.</li>
                     </ul><br/>

                     <p><strong>Directrices en guías NIST</strong></p>
                     <p class="text-justify">La guía NIST 800-123, en su apartado 4.3.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Aplicaciones específicas contra software malicioso, como aplicaciones antivirus, aplicaciones anti-espías, y detectores de rootkit, que permitan detectar y erradicar las infecciones que puedan ocurrir.</li>
                         <li class="text-justify">Aplicaciones de detección y prevención de intrusiones (en inglés Intrusion detection and prevention software, IDPS) para detectar ataques dirigidos contra el servidor. Aplicaciones de chequeo de la integridad de los archivos, que detecten cuando un fichero crítico ha cambiado.</li>
                         <li class="text-justify">Aplicaciones de cortafuegos (firewalls) instalados en el equipo, para protegerlo de accesos no autorizados.</li>
                         <li class="text-justify">Aplicaciones de gestión de actualizaciones o correcciones, que faciliten que las nuevas vulnerabilidades se atienden de manera temprana.</li>
                     </ul><br/>

                     <p><strong>Directrices en guías CIS</strong></p>

                     <p class="text-justify">CIS en la guía v. 1.0.5 para Red Hat Linux y dentro de su apartado 1 O, incluye recomendaciones sobre aplicaciones antivirus, indicando que es muy recomendable que se instalen, especialmente en los servidores de correo y en los servidores de ficheros, para proteger a los clientes de sus servicios.</p>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1187" role="button">Gestión segura de comunicaciones, carpetas compartidas, impresoras y otros recursos compartidos del sistema.</a>
             <div class="collapse" id="U1187">
                 <div class="card card-body text-info">
                     <p class="text-justify">La red de comunicaciones de la empresa es la infraestructura que interconecta aquellos elementos que precisan intercambiar información, habitualmente estaciones de trabajo, clientes, servidores, impresoras para la salida de documentación impresa, y quizás escáner, para la entrada de documentos por red. La generalización de las redes TCP/IP hace que se puedan conectar otros muchos dispositivos a la red, por ejemplo, cámaras web, dispositivos de reproducción multimedia, unidades de disco de red, y todo tipo de sistemas del ámbito industrial que admitan gestión TCP/IP.</p>

                     <img src="../recursos/img/cursos/ifct0109/mf048688a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Diagrama de red" title="Diagrama de red">

                     <p class="text-justify">La norma ISO 17799:2005 establece el objetivo" 10.6 Gestión de seguridad de red':</p>
                     <ul class="pl-3">
                         <li class="text-justify">Que haya responsables separados para la gestión de redes y para la gestión de los equipos de cómputo, cuando sea posible.</li>
                         <li class="text-justify">Asignar responsabilidades y procedimientos para la gestión de los equipos remotos y las estaciones de trabajo que se conectan a la red.</li>
                         <li class="text-justify">Establecer medidas especiales, de cara a preservar la confidencialidad e integridad de los datos que emplean redes públicas, y las medidas que correspondan para una adecuada disponibilidad de los equipos de red y computadoras conectadas.</li>
                         <li class="text-justify">Realizar un registro y monitorización adecuada de las comunicaciones.</li>
                         <li class="text-justify">La aplicación de controles debe ser consistente en toda la infraestructura, y ser acorde con el servicio que se debe entregar a la organización.</li>
                     </ul><br/>

                     <p><strong>Cifrado de las comunicaciones: Ipsec</strong></p>

                     <p class="text-justify">Es un protocolo de la capa de ínter-red, que aporta seguridad al protocolo IP, añadiéndole posibilidades de cifrado. Al operar en la capa de ínter-red, aporta seguridad a todos los protocolos superiores (principalmente a los protocolos de transporte TCP/UDP), sin necesidad de modificación alguna, ya que todo se gestiona y configura a nivel de red.</p>
                     <ul class="pl-3">
                         <li class="text-justify">El <strong>modo transporte</strong>, orientado a comunicaciones de ordenador a ordenador, en el que solo se cifra el contenido del paquete, y la cabecera se mantiene intacta como en el protocolo IP.</li>
                         <li class="text-justify">El <strong>modo túnel</strong>, orientado a comunicaciones red a red, en el que se cifra completamente el paquete (incluida su cabecera) y el resultado se considera como la información útil de un nuevo paquete IP, que se procesa normalmente.</li>
                     </ul><br/>

                     <p><strong>Carpetas, impresoras y otros recursos</strong></p>
                     <ul class="pl-3">
                         <li class="text-justify">Además de las medidas de protección que se pueden aplicar en la red que da acceso a los recursos compartidos, se deberían considerar las siguientes medidas específicas referentes a las impresoras:</li>
                         <li class="text-justify">Solo deben ser instalables por usuarios con privilegios para ello. Así se valora en la guía CIS vl.2 para sistemas Windows, en su punto 3.2.1. 11, que también señala en la medida 4.1.19 que el servidor de impresión es uno de los servicios que solo deberían estar activos en caso de ser estrictamente necesario.</li>
                         <li class="text-justify">Una medida organizativa es que los controladores de las impresoras deberían gestionarse según un procedimiento formal, para asegurar la homogeneidad de las versiones, y la rápida distribución de parches que solucionen vulnerabilidades.</li>
                         <li class="text-justify">Siempre que sea posible, las impresoras no deberían tener conexión hacia o desde internet, y de ser necesarias, deberían restringirse las comunicaciones con direcciones IP conocidas y fijadas de antemano.</li>
                         <li class="text-justify">Las impresoras deberían disponer de un sistema de control de acceso, preferiblemente integrado con el sistema de información de la empresa, para controlar qué usuarios tienen permisos de impresión.</li>
                         <li class="text-justify">Las impresoras deberían tener un modo de impresión segura, de manera que no se inicie el trabajo de impresión hasta que el usuario esté delante de la máquina y aporte un código.</li>
                     </ul><br/>
                     <p class="text-justify">Los administradores deberían controlar el acceso a los recursos del servidor en dos aspectos: controlar el acceso de la aplicación, y controlar el acceso de los usuarios. Un adecuado cumplimiento de lo anterior, confiere protección para los ataques de denegación de servicio, así:</p>
                     <ul class="pl-3">
                         <li class="text-justify">Las carpetas para compartir ficheros o aplicaciones que realicen esta función, deberían emplear discos duros o unidades lógicas diferentes a los empleados por el sistema operativo</li>
                         <li class="text-justify">Se pueden emplear sistemas de cuota de disco para limitar el espacio que los usuarios pueden consumir cargando archivos; incluso, idealmente, los archivos cargados por los usuarios deberían ir a otro disco duro o partición separada. También se podrían aplicar limitaciones al tamaño máximo de los ficheros que se pueden cargar.</li>
                         <li class="text-justify">Los ficheros que los usuarios carguen, podrían no estar disponibles para el servidor, hasta que, mediante un proceso automático o manual, se revisarán en busca de código malicioso, aplicaciones ilegales o con licencias sustraídas, aplicaciones de ataque de red, pornografía, etc</li>
                     </ul>
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1188" role="button">Monitorización de la seguridad y el uso adecuado de los sistemas de información.</a>
             <div class="collapse" id="U1188">
                 <div class="card card-body text-info">
                     <p><strong>Monitorización y registro</strong></p>

                     <p class="text-justify">La norma ISO 17799:2005 establece, en su objetivo de control «10.10 Monitorización»</p>
                     <ul class="pl-3">
                         <li class="text-justify">"1 0.1 0.1 Registro de Auditoría'; de toda actividad de seguridad que suceda en el sistema (cambios, aciertos, errores, eventos, alarmas, etc.).</li>
                         <li class="text-justify">"1 0.1 0.2 Uso del sistema de monitorización'; que debe realizarse de acuerdo con un procedimiento formal y documentado.</li>
                         <li class="text-justify">"1 0.1 0.3 Protección de los registros'; ya que si se pueden alterar, no habrá evidencia de un acceso no autorizado, de manera que los registros serán un objetivo importante para un atacante.</li>
                         <li class="text-justify">"1 0.1 0.4 Registros de los usuarios con privilegios y de los operadores del sistema'; que se deben revisar regularmente para detectar eventos de seguridad que sean indicio de un incidente;</li>
                         <li class="text-justify">"1 0.10.5 Registro de fallos y errores" detectados por el sistema, o notificados por los usuarios.</li>
                         <li class="text-justify">"10.10.6 Sincronización de relojes" de manera que haya precisión al revisar eventos en distintos sistemas con diferentes relojes. </li>
                     </ul><br/>

                     <p><strong>Recomendaciones NIST sobre monitorización y registro</strong></p>

                     <p class="text-justify">La guía NIST 800-123, en su apartado 6.1, indica que el registro de la actividad, y en especial de los eventos de seguridad, es una labor vital para el mantenimiento continuo de la seguridad en los servidores. Elegir los datos correctos que se registren, y monitorizar los registros, es una tarea vital para el mantenimiento de los sistemas de información.</p>
                     <ul class="pl-3">
                         <li class="text-justify">Un sistema de alerta sobre actividades sospechosas a investigar.</li>
                         <li class="text-justify">La trazabilidad de una actividad hostil.</li>
                         <li class="text-justify">Información de ayuda para recuperar un servidor.</li>
                         <li class="text-justify">Información de ayuda en la investigación posterior a un incidente.</li>
                         <li class="text-justify">Información que se pueda requerir legalmente.</li>
                     </ul><br/>
                     <p class="text-justify">Otra protección que se debe aplicar a los registros es su copia de seguridad, para archivarlos durante un periodo de tiempo, que dependerá:</p>
                     <ul class="pl-3">
                         <li class="text-justify">De las obligaciones legales de la empresa.</li>
                         <li class="text-justify">De los requisitos de la empresa, por ejemplo para analizar problemas del servidor largo plazo.</li>
                         <li class="text-justify">Del tamaño de los registros.</li>
                         <li class="text-justify">Del valor del servidor y sus servicios.</li>
                         <li class="text-justify">Del nivel de amenaza que soporte el servidor.</li>
                     </ul><br/>
                     <p class="text-justify">El análisis de los registros suele consumir bastante tiempo, e informa de eventos que ya han sucedido, y también permite corroborar otras evidencias de actividades sospechosas (como un tráfico de red anómalo del que alerte un sistema de intrusión).</p>

                     <p class="text-justify">El periodo con que se revise puede depender de:</p>
                     <ul class="pl-3">
                         <li class="text-justify">La cantidad de tráfico del servidor.</li>
                         <li class="text-justify">El nivel de amenaza general que soporte el servili
                         <li class="text-justify">Las vulnerabilidades del servidor.</li>
                         <li class="text-justify">El valor de los datos y servicios del servidor.</li>
                     </ul><br/>

                     <p class="text-justify"><strong>Uso adecuado de los sistemas de información</strong></p>
                     <p class="text-justify">(STIC-821) No se podrá acceder a los recursos informáticos y telemáticos para desarrollar actividades que persigan o tengan como consecuencia:</p>
                     <ul class="pl-3">
                         <li class="text-justify">El uso intensivo de recursos de proceso, memoria, almacenamiento o comunicaciones, para usos no profesionales.</li>
                         <li class="text-justify">La degradación de los servicios.</li>
                         <li class="text-justify">La modificación no autorizada y premeditada de información.</li>
                         <li class="text-justify">La violación de la intimidad, del secreto de las comunicaciones y del derecho a la protección de los datos personales.</li>
                         <li class="text-justify">El deterioro intencionado del trabajo de otras personas.</li>
                         <li class="text-justify">El uso de los sistemas de información para fines ajenos a los de la organización, salvo excepciones que se contemplen expresamente.</li>
                         <li class="text-justify">Dañar intencionadamente los recursos informáticos de la organización o de otras instituciones.</li>
                         <li class="text-justify">Incurrir en cualquier otra actividad ilícita, del tipo que sea.</li>
                     </ul>
                 </div>
             </div>
         </ul>
     </li>
     <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 9. IMPLANTACIÓN Y CONFIGURACIÓN DE CORTAFUEGOS
         <ul class="list-group">
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1191" role="button">Relación de los distintos tipos de cortafuegos por ubicación y funcionalidad.</a>
             <div class="collapse" id="U1191">
                 <div class="card card-body text-info">
                     <p class="text-justify">La norma ISO 17799:2005 establece explícitamente controles relacionados con la implantación y uso de sistemas que separen las redes de comunicaciones. En concreto, el objetivo de control " 11.4 Control de acceso a la red'; persigue evitar el acceso no autorizado a la red, para lo cual establece, entre otras medidas, que deben existir sistemas apropiados para la interconexión entre la red de la empresa, y las redes de otras empresas o las redes públicas.</p>

                     <img src="../recursos/img/cursos/ifct0109/mf048692a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Cortafuegos." title="Cortafuegos.">

                     <p><strong>Tipos de ataques</strong></p>
                     <p class="text-justify">El atacante debe obtener información del sistema atacado, para explotar sus vulnerabilidades y que un acceso forzado al sistema le resulte más fácil, cómodo, y rápido.</p>
                     <p class="text-justify">Para la obtención de información que facilite dirigir el ataque, conviene mencionar especialmente las siguientes técnicas que podría emplear un atacante:</p>
                     <ul class="pl-3">
                         <li class="text-justify">El empleo de material físico, como la correspondencia, los estados de cuenta que llegan a los domicilios, cualquier tipo de papel, incluso los desechados a la basura, o simplemente la vigilancia y observación.</li>
                         <li class="text-justify">Las técnicas de ingeniería social, que son un conjunto de prácticas activas como conversaciones, o llamadas telefónicas, correos electrónicos, generalmente con suplantación de la identidad, para engañar al usuario y obtener información de manera directa o indirecta (por negación).</li>
                     </ul>

                     <img src="../recursos/img/cursos/ifct0109/mf048692b.png"  class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tipos de ataques" title="Tipos de ataques.">

                     <p><strong>Tipos de cortafuegos</strong></p>
                     <p class="text-justify">Se entiende por cortafuegos o firewall, al conjunto de equipos existentes entre dos redes, con la finalidad de restringir y filtrar el flujo de información entre ellas.</p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Firewalls a nivel de red</strong>, que actúan exclusivamente a este nivel, y por lo tanto están constituidos por encaminadores o routers, que son elementos de la capa de red. Estos equipos se ubican entre la red interna y la red externa (internet), y solo pueden proteger mediante filtrado de los paquetes de red. El filtrado permite aceptar, rechazar, o simplemente no responder, a los paquetes que procedan de un origen o hacia un destino concreto.</li>
                         <li class="text-justify"><strong>Firewall a nivel de aplicación</strong>, denominados proxy, que se ubican entre clientes de la red interna y un servidor ubicado en la red externa, de manera que no hay comunicación directa de los clientes internos a los servidores de aplicaciones externos. Por el contrario, un cliente se conecta al proxy, y este (si el acceso está autorizado), se conecta al servidor de aplicación externo. Técnicamente, un proxy no es un firewall, sino que más bien forma parte del mismo: el firewall bloquea tráfico no permitido, y el proxy (que normalmente es un programa que se ejecuta en el firewall) permite acceso controlador</li>
                     </ul>

                     <p class="text-justify">Protección mediante filtrado de paquetes (este es el único método de protección que pueden aplicar los firewall de red), que puede realizarse de dos maneras:</p>
                     <ul class="pl-3">
                         <li class="text-justify"><strong>Filtrado estático de paquetes</strong>, en el cual tanto los paquetes entrantes (de internet a la red interna), como los paquetes salientes (de la red interna hacia internet) se filtran, para autorizar o rechazar su progreso en base a unas reglas fijas definidas, es decir que no cambian. El caso más habitual es un router.</li>
                         <li class="text-justify"><strong>Filtrado dinámico de paquetes</strong> o de inspección y seguimiento de estado (en inglés se conocen como Stateful inspection firewalls), en los cuales también se aplican reglas para el filtrado, pero estas son dinámicas, por ejemplo, según el estado de la comunicación. Puede ser que el firewall pueda recordar los paquetes salientes para permitir los paquetes de respuesta entrantes; es decir, se admiten todas las respuestas que obedezcan a conexiones iniciadas desde la red interna de la empresa, sin necesidad de definir reglas fijas para ello.</li>
                     </ul>

                     <p class="text-justify">Protección mediante servidores proxy (este método solo pueden aplicarlo los firewalls a nivel de aplicación), que también contempla dos tipos básicos:</p>

                     <ul class="pl-3">
                         <li class="text-justify"><strong>Definición de Proxy:</strong> elemento que se interpone entre dos segmentos de redes de computadores, para filtrar los servicios que se pueden pedir de un segmento a otro, y convertir en su caso direcciones identificativas de red.</li>

                         <li class="text-justify"><strong>Definición de Servidor proxy:</strong> elemento cortafuegos que gestiona el tráfico con interne! entrante y saliente de una red de área local, y que puede proporcionar otras funciones, como el almacenamiento en caché de las URL más visitadas.</li>
                     </ul>

                     <ul class="pl-3">
                         <li class="text-justify">Pasarelas o proxy de aplicación, que permiten o no la conexión a una aplicación (HTTP, FTP, SMTP), casi siempre con mecanismos de autenticación para saber si el usuario tiene autorizado o no para el uso del protocolo concreto, y para un origen y destino concretos. Por ejemplo, un proxy de aplicación FTP podría rechazar los comandos para borrar archivos, o podría rechazar la transferencia de ficheros de tamaño superior a uno dado, o de un tipo concreto, con el propósito de reducir el riesgo de evasión de información.</li>

                         <li class="text-justify">Proxy a nivel de circuito, que crean un canal de comunicación entre el cliente y el servidor, independientemente del tipo de solicitud que haga el cliente. Suelen requerir que el cliente ejecute un software específico. La funcionalidad es más compleja que la de un router, y suelen incluir funciones de seguridad como autenticación mediante contrasellas.</li>
                     </ul>

                     <p class="text-justify">Construcción de cortafuegos</p>

                     <p class="text-justify">Router de filtrado (screening router))</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048692c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Router de filtrado" title="Router de filtrado">
                     <p class="text-justify">Bastión con una red (bastion host o single-homed host)</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048692d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Bastión con una red" title="Bastión con una red">
                     <p class="text-justify">Bastión con dos redes (dual-homed host</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048692e.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Bastión con dos redes" title="Bastión con dos redes">
                     <p class="text-justify">Servidor proxy</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048692f.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Servidor proxy" title="Servidor proxy">
                     <p class="text-justify">Bastión filtrado (screened host)</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048692g.png"  class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Bastión filtrado" title="Bastión filtrado">
                     <p class="text-justify">Subred filtrada (screened subnet))</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048692h.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Subred filtrada" title="Subred filtrada">
                     <p class="text-justify">Firewalls personales</p>
                     <img src="../recursos/img/cursos/ifct0109/mf048692i.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Firewalls personales" title="Firewalls personales">
                 </div>
             </div>
             <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1192" role="button">Criterios de seguridad para la segregación de redes en el cortafuegos mediante Zonas Desmilitarizadas / DMZ.</a>
             <div class="collapse" id="U1192">
                 <div class="card card-body text-info">
                     <p class="text-justify">La norma ISO 17799:2005 establece en el control" 11.4.5 segregación en redes': que los grupos de servicios de información, usuarios, y sistemas de información debieran ser segregados en subredes.</p>
                     <p class="text-justify">Los criterios de segregación de redes deberían contemplar:</p>
                     <ul class="pl-3">
                         <li class="text-justify">La política de control de accesos.</li>
                         <li class="text-justify">El coste de estas medidas, en términos materiales y de horas de trabajo necesarios para la necesaria monitorización de estos dispositivos.</li>
                         <li class="text-justify">El valor y clasificación de la información almacenada o procesada.</li>
                         <li class="text-justify">Separar diferentes áreas de negocio, o diferentes líneas comerciales, reduciendo el impacto que un incidente en una subred tendría en otra subred. Por ejemplo, separar sistemas de producción, separar compras y ventas, separar redes de oficina, separar redes de control industrial, separar las redes de datos confidenciales, etc.</li>
                         <li class="text-justify">Debe tenerse en cuenta la separación de redes inalámbricas.</li>
                     </ul>

                     <img src="../recursos/img/cursos/ifct0109/mf048693a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Subredes con cortafuegos." title="Subredes con cortafuegos.">

                     <p class="text-justify">Al igual que la norma ISO, el Esquema Nacional de Seguridad, dispone la medida 5.4.4,referente a la segregación de redes, para acotar el acceso a la información, y por lo tanto la propagación de incidentes de seguridad. Indica además que debe segregarse empleando medidas que garanticen:</p>
                     <ul class="pl-3">
                         <li class="text-justify">El control de entrada de los usuarios que llegan a cada segmento</li>
                         <li class="text-justify">El control de salida de la información disponible en cada segmento</li>
                         <li class="text-justify">Los medios físicos y lógicos que se empleen para segmentar la red deblen estar particularmente asegurados, mantenidos y monitorizados, como en el caso de los firewalls de acceso a internet.</li>
                     </ul><br/>

                     <p><strong>Uso de zonas desmilitarizadas</strong></p>

                           <p class="text-justify">Redes falsas o honeypots</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048693b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Redes señuelo." title="Redes señuelo.">
                           <p class="text-justify">Ubicación de servidores accesibles desde el exterior</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048693c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Servidor basitonado" title="Servidor basitonado">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1193" role="button">Utilización de Redes Privadas Virtuales / VPN para establecer canales seguros de comunicaciones.</a>
                   <div class="collapse" id="U1193">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048694a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Túnel" title="Túnel">
                           <p><strong>Ataques de interrupción y ataques de fabricación</strong></p>
                           <p class="text-justify">Se busca especialmente asegurar la disponibilidad de las comunicaciones, que es la dimensión de seguridad más frecuentemente amenazada por estos ataques.</p>
                           <p class="text-justify">Ante un <strong>ataque de interrupción</strong> a los equipos o líneas de un proveedor de acceso a internet, las medidas que se pueden emplear consisten principalmente en la redundancia en el servicio, es decir, disponer al menos de dos conexiones a interne! por medios físicos, diferentes en la mayor parte del recorrido,</p>
                           <p class="text-justify">Ante un <strong>ataque de fabricación</strong>, las medidas de seguridad se aplicarán normalmente a los elementos de red intermedios, y/o equipos de seguridad perimetral de los extremos, por ejemplo dotándolos de capacidad para detectar que se está repitiendo el envío de un mismo paquete (o ligeramente modificado) de manera masiva, en un intento de ataque de denegación de servicio que acabaría con su disponibilidad.</p>
                           <p class="text-justify">Criptografía en comunicaciones tcp/ip</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048694b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Ruta de emisión a través de routers." title="Ruta de emisión a través de routers.">
                           <img src="../recursos/img/cursos/ifct0109/mf048694c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Cifrado de extremo a extremo." title="Cifrado de extremo a extremo.">
                           <img src="../recursos/img/cursos/ifct0109/mf048694d.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Cifrado de nodo a nodo." title="Cifrado de nodo a nodo.">
                           <p><strong>Protocolos VPN</strong></p>
                           <p class="text-justify">Las redes privadas virtuales (VPN) surgen para proporcionar una conexión segura a través de redes públicas no seguras, aunando el uso de criptografía, mecanismos de autenticación, y la encapsulación de protocolos.</p>
                           <ul class="pl-3">
                               <li class="text-justify">VPN sitio a sitio, para conectar diferentes oficinas de una misma empresa, que precisen intercambiar datos confidenciales, evitando el alquiler de circuitos dedicados, considerablemente más costosos (pero con otras ventajas)</li>
                               <li class="text-justify">VPN de acceso remoto, para permitir el teletrabajo sin comprometer la seguridad. Es posible tener acceso de un ordenador a una red, o bien acceso de ordenador a ordenador. En ambos casos, existe un cliente y un servidor, y la VPN puede ser iniciada por el cliente (estación remota externa a la LAN), o por el servidor de la red privada.</li>
                           </ul><br/>
                           <p><strong>PPTP (Point to Point Tunneling Protocol)</strong></p>
                           <p class="text-justify">Es uno de los más antiguos, y opera en el nivel de enlace (capa 2 del modelo OSI), de manera que se emplea cifrado nodo a nodo.</p>
                           <p class="text-justify">Se apoya en el protocolo PPP (Point to Point Protocol), y está soportado por sistemas Microsoft Windows, permitiendo a dos ordenadores construir una VPN entre ellos. La autenticación se realiza mediante el protocolo CHAP (Microsoft Chal/enge Handshake Authentication Protoco/), que emplea el algoritmo MD4 para asegurar la integridad de la información, y el algoritmo RCA para asegurar la confidencialidad.</p>
                           <p class="text-justify">El algoritmo de encriptación empleado se considera débil, por lo que está prácticamente en desuso, y no es recomendable usar VPN con PPTP si los requisitos de seguridad son altos.</p>
                           <p><strong>L2TP (Layer 2 Tunneling Protocol)</strong></p>
                           <p class="text-justify">Este protocolo tiene como base PPTP, de manera que también opera en capa 2, y está orientado a comunicaciones nodo a nodo, por lo que se precisa que todos los elementos intermedios cumplan con el protocolo L2TP, que sí es un estándar reconocido por IETF. Emplea autenticación PPP que se realiza entre los puntos finales del túnel, lo que permite una suplantación de identidad por el camino.</p>
                           <p class="text-justify">No encripta los datos de usuario, lo que supone una falta de confidencialidad, y tampoco se asegura la integridad de cada paquete. Por todo lo anterior, el protocolo L2TP se mejora con las prestaciones de cifrado de IPsec que se verán a continuación, conformando la pareja L2TP/1Psec, que está estandarizado en la RFC 3193.</p>
                           <p><strong>IPsec (IP Security)</strong></p>
                           <p class="text-justify">Es un conjunto de protocolos estándar, recogidos en varias normas de internet (RFC 4301 y RFC 4309}, y son el conjunto de protocolos de uso más extendido. Consta del protocolo AH, que aporta autenticación e integridad, del protocolo ESP, que aporta confidencialidad, y de una asociación de seguridad (SA) con la configuración VPN, que permite el intercambio de claves.</p>
                           <p class="text-justify">IPsec funciona en el nivel de red (capa 3}, aunque está orientado a conexión (capa 2), y tiene 2 funcionamientos, en modo transporte, o en modo túnel, que se resumen a continuación:</p>
                           <p class="text-justify"><strong>IPsec en modo transporte:</strong> está orientado al cifrado extremo a extremo, por lo que no se precisa que los dispositivos intermedios estén adaptados, ni realicen ningún procesamiento adicional.</p>
                           <p class="text-justify"><strong>IPsec en modo túnel</strong>. Está orientado al cifrado nodo a nodo, y se usa para proteger redes completas, estando normalmente implementado por los firewa/ls de los extremos (nodos); por lo tanto, los miembros de las redes no tienen por qué implementar IPsec.</p>
                           <p><strong>Recomendaciones de uso de VPN</strong></p>
                           <p class="text-justify">La norma ISO 17799:2005 recomienda el uso de redes privadas virtuales como medida técnica para implementar el control "11.4.2 Autenticación del usuario para las conexiones externas'; ya que muchos protocolos de VPN aportan autenticación (del usuario o de la máquina). Por otro lado, también el control " 11.4.5 Segregación en redes" sugiere el empleo de VPN para segregar en dominios lógicos separados la red; por ejemplo, restringiendo el acceso a la red, utilizando redes privadas virtuales para grupos de usuarios dentro de la organización.</p>
                           <p class="text-justify">El Esquema Nacional de Seguridad, dentro de las medidas para la protección de las comunicaciones en la dimensión de la confidencialidad, medida 5.4.2, promueve el uso de redes privadas virtuales, cuando las comunicaciones discurran por redes ajenas al propio dominio de seguridad .</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1194" role="button">Definición de reglas de corte en los cortafuegos.</a>
                   <div class="collapse" id="U1194">
                       <div class="card card-body text-info">
                           <p class="text-justify">Las reglas de corte se deben definir partiendo de la situación de todo prohibido, para a continuación habilitar exclusivamente los flujos de tráfico permitidos. Este diseño es el habitual, ya visto en otras situaciones donde se precisa un control de acceso lógico adecuado.</p>
                           <p class="text-justify">Las reglas de filtrado de un firewall presentan la peculiaridad de poder establecerse de manera independiente, según el sentido del tráfico, y existen:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Reglas de tráfico entrante (incoming) para filtrar el tráfico que procede de internet y va destinado a la red privada.</li>
                               <li class="text-justify">Reglas de tráfico saliente (outcoming) para filtrar el tráfico que procede de la red privada y va destinado a internet.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048695a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Paquete IPv4." title="Paquete IPv4.">
                           <p class="text-justify">Las reglas pueden especificar multitud de condiciones, que dependerán de cada cortafuegos concreto, pero siempre han de contener al menos las siguientes cinco informaciones:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Protocolo de transporte: TCP o UDP.</li>
                               <li class="text-justify">Puerto de comunicaciones: sirve para identificar la aplicación.</li>
                               <li class="text-justify">Dirección IP origen: quién origina el paquete.</li>
                               <li class="text-justify">Dirección IP destino: a quién va destinado el paquete.</li>
                               <li class="text-justify">Acción: permitido o prohibido.</li>
                           </ul><br/>
                           <p class="text-justify">De esta manera, resulta inmediato definir reglas para permitir el acceso desde un cliente externo a un servidor web interno, o reglas para permitir que un servidor de correo privado pueda enviar correo al exterior.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1195" role="button">Relación de los registros de auditoría del cortafuegos necesarios para monitorizar y supervisar su correcto funcionamiento y los eventos de seguridad.</a>
                   <div class="collapse" id="U1195">
                       <div class="card card-body text-info">
                           <ul class="pl-3">
                               <li class="text-justify">Las fechas y horas de los eventos clave, como inicio y fin de conexiones de entrada.</li>
                               <li class="text-justify">La identidad de quién realiza la conexión cuando sea posible; por ejemplo si la conexión es al propio cortafuegos, para modificar su configuración, debe conservarse el registro del usuario.</li>
                               <li class="text-justify">Las alarmas activadas del sistema de control de acceso al cortafuegos.</li>
                               <li class="text-justify">Los cambios en la configuración del cortafuegos.</li>
                               <li class="text-justify">La activación o desactivación de funcionalidades de seguridad del cortafuegos, como sistemas antivirus que incorpore, o las funcionalidades de detección y/o prevención de intrusiones.</li>
                               <li class="text-justify">Registros de las intentos de comunicaciones rechazadas, por ejemplo, registrar las direcciones IP que persistentemente inician comunicaciones, para las que las reglas de acceso tienen marcada una acción de "prohibir': de los protocolos (puertos) empleados.</li>
                               <li class="text-justify">Las direcciones de red de las conexiones establecidas y rechazadas, y de los protocolos (puertos) empleados.</li>
                           </ul>
                           <p class="text-justify">Además de los registros mencionados, son de interés los siguientes:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Las actividades de los usuarios con privilegios, como el administrador o el personal que opere el cortafuegos, deben registrarse especialmente, y revisarse de manera regular. Se debe incluir la información sobre el evento (error, una modificación, un reinicio, etc.), la cuenta desde la que se realiza la operación, y qué funciones o procesos se ven involucrados. Se puede emplear un sistema de detección de intrusiones que no sea controlable por los mismos usuarios que administran el cortafuegos, para monitorizar las actividades de configuración de cara al cumplimiento de las condiciones que deriven de la política de seguridad.</li>
                               <li class="text-justify">Los fallos del equipo se deben registrar y analizar especialmente, y por supuesto, asegurar que se corrigen los problemas. Para ello, deben existir procedimientos claros, como la revisión de los registros de error, la revisión de las medidas correctivas aplicadas para asegurar que han sido autorizadas, y que el cortafuegos no se vea comprometido.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U1196" role="button">Establecimiento de la monitorización y pruebas del cortafuegos.</a>
                   <div class="collapse" id="U1196">
                       <div class="card card-body text-info">
                           <p class="text-justify">La norma ISO 17799:2005 establece el control " 10.10.2 Uso del sistema de monitorización':para los sistemas de información, que se aplicará de manera específica al cortafuegos, con las siguientes recomendaciones:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Debe existir un procedimiento formal de monitorización del cortafuegos, así como de revisión regular de los resultados de dicha monitorización; ambas tareas son vitales.</li>
                               <li class="text-justify">Los recursos que se dediquen a la monitorización, generalmente traducidos en la frecuencia y exhaustividad de la revisión, se deben asignar tras una evaluación del riesgo, pero siempre se deben cumplir los requisitos que puedan venir derivados del cumplimiento de la legislación que pudiera aplicar.</li>
                               <li class="text-justify">Se deben monitorizar los accesos autorizados (quién y cuándo accede, a qué se accede, y para qué se accede).</li>
                               <li class="text-justify">Se deben monitorizar especialmente las operaciones que requieran del uso de privilegios (como el inicio y apagado, o la carga de plantillas de configuración).</li>
                               <li class="text-justify">Se deben monitorizar los accesos no autorizados, como: las comunicaciones rechazadas en base a las reglas de filtrado existentes, los intentos de acceso internos, los accesos externos rechazados, las comunicaciones rechazadas según condiciones expresamente especificadas en la política de seguridad (horarios, destinos expresamente prohibidos, etc.), o las alarmas que pueda iniciar el subsistema de detección de intrusiones.</li>
                               <li class="text-justify">Se deben monitorizar las alarmas o fallos del equipo, como: alertas o mensajes en el visor de sucesos o consola de control, excepciones, alarmas de gestión, alarmas por control de accesos u otras según terminología, y categorización concreta del.firewall que se emplee.</li>
                               <li class="text-justify">Se deben monitorizar los cambios de configuración (o los intentos).</li>
                           </ul>
                       </div>
                   </div>
               </ul>
           </li>
       </ul>
   </li>
   <li class="list-group-item border-0 bg-light text-primary">MF0487_3 AUDITORÍA DE SEGURIDAD INFORMÁTICA
       <ul class="list-group">
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 1. CRITERIOS GENERALES COMÚNMENTE ACEPTADOS SOBRE AUDITORÍA INFORMÁTICA
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2111" role="button">Código deontológico de la función de auditoría.</a>
                   <div class="collapse" id="U2111">
                       <div class="card card-body text-info">
                           <p class="text-justify">La <strong>auditoría</strong> es el análisis exhaustivo de los sistemas informáticos con la finalidad de detectar, identificar y describir las distintas vulnerabilidades que puedan presentarse.</p>
                           <p class="text-justify"><strong>ISACA</strong> (Information Systems Audit and Control Association), una organización internacional que diseña los estándares de auditoría y control de sistemas de información aceptados por la comunidad general de auditoría.</p>
                           <p class="text-justify">(ISACA) Las diez Normas de Auditoría de Sistemas de Información:</p>
                           <ul class="pl-3">
                               <li class="text-justify">El auditor de los sistemas de información debe ser independiente del ente auditado, tanto en actitud como en apariencia.</li>
                               <li class="text-justify">Para que la auditoría se desarrolle de un modo objetivo, la función de auditoría debe ser independiente del área que se pretende auditar. </li>
                               <li class="text-justify">El auditor debe cumplir con los preceptos del Código de Ética Profesional de la ISACA. </li>
                               <li class="text-justify">El auditor debe tener los suficientes conocimientos técnicos y destrezas.</li>
                               <li class="text-justify">El auditor de sistemas de información debe reciclar continuamente sus conocimientos para mantener en un nivel adecuado su competencia técnica.</li>
                               <li class="text-justify">Las auditorías de sistemas de información deben ser planificadas y supervisadas con suficiente rigor para mantener la seguridad de que se cumplen los objetivos de auditoría establecidos y las normas estipuladas. </li>
                               <li class="text-justify">En el proceso de auditoría, el auditor debe respaldarse necesariamente con evidencias que confirmen sus hallazgos, resultados y conclusiones. </li>
                               <li class="text-justify">Durante la realización del informe, el auditor debe expresar con claridad los objetivos de la auditoría, su duración (de fecha a fecha) y las tareas realizadas en todo el proceso.
                                   Las tareas de auditoría deben llevarse a cabo con sumo cuidado profesional, cumpliendo las normativas de auditoría aplicables.</li>
                               <li class="text-justify">En el mismo informe, el auditor también deberá mencionar las observaciones necesarias para una mejor comprensión y las conclusiones obtenidas con las distintas tareas realizadas.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048712a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Normas profesionales de la ISACA" title="Normas profesionales de la ISACA">
                           <p class="text-justify"><strong>Código de Ética de la ISACA</strong></p>
                           <p class="text-justify">Establece una serie de preceptos con el fin de guiar la conducta profesional de los miembros de la organización y de los poseedores de su certificación.</p>
                           <p class="text-justify"><strong>Código deontológico de la auditoría</strong></p>
                           <p class="text-justify">Está formado por una serie de principios morales elaborados que sirvan de guía a los auditores informáticos en el momento de ejercer su profesión, teniendo en cuenta una ética de la informática.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2112" role="button">Relación de los distintos tipos de auditoría en el marco de los sistemas de información.</a>
                   <div class="collapse" id="U2112">
                       <div class="card card-body text-info">
                           <p class="text-justify">En la siguiente tabla, se muestran varios tipos de auditoría, atendiendo al tipo de información que se maneja:</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048713a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3"  alt="Tipos de auditoría." title="Tipos de auditoría.">
                           <img src="../recursos/img/cursos/ifct0109/mf048713b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3"  alt="Tipos de auditoría." title="Tipos de auditoría.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2113" role="button">Criterios a seguir para la composición del equipo auditor.</a>
                   <div class="collapse" id="U2113">
                       <div class="card card-body text-info">
                           <p class="text-justify">El auditor planificará los objetivos a cumplir y los métodos y procedimientos que se van a proseguir para lograr dichos objetivos de un modo eficaz y eficiente</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048714a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="En construcción">
                           <p class="text-justify"><strong>Características y capacidades del equipo auditor</strong></p>
                           <p class="text-justify">Para seleccionar el equipo adecuado, en un primer lugar hay que pensar en profesionales con suficiente nivel para realizar una correcta coordinación del desarrollo de las tareas de la auditoría, siendo capaz de facilitar la información requerida en todo momento.</p>
                           <p class="text-justify">A estos conocimientos básicos habría que añadir otros conocimientos más especializados, atendiendo a las características de los sistemas y organizaciones a auditar.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2114" role="button">Tipos de pruebas a realizar en el marco de la auditoría, pruebas sustantivas y pruebas de cumplimiento.</a>
                   <div class="collapse" id="U2114">
                       <div class="card card-body text-info">
                           <p class="text-justify">Las pruebas clásicas consisten en el desarrollo de un conjunto de técnicas para probar las aplicaciones y sistemas operativos con datos de prueba. Mediante la observación de los datos de entrada, los datos de salida obtenidos y los datos de salida esperados, se pueden realizar comparaciones para verificar la calidad, eficiencia y eficacia de los sistemas evaluados.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048715a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3"  alt="Pruebas de auditoría." title="Pruebas de auditoría.">
                           <p class="text-justify">Relación entre las pruebas de cumplimiento y las pruebas sustantivas.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048715b.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3"  alt="Relación entre pruebas de cumplimiento y sustantivas" title="Relación entre pruebas de cumplimiento y sustantivas">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2115" role="button">Tipos de muestreo a aplicar durante el proceso de auditoría</a>
                   <div class="collapse" id="U2115">
                       <div class="card card-body text-info">
                           <p class="text-justify">El muestreo es una herramienta de investigación científica muy utilizado para obtener las evidencias necesarias para detectar estas deficiencias. Su finalidad principal es determinar y facilitar información sobre cuáles son las partes analizadas que requieren un examen más exhaustivo para obtener los resultados y conclusiones más relevantes.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048716a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3"  alt="Tipos de muestreo." title="Tipos de muestreo.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2116" role="button">Utilización de herramientas tipo CAAT (Computer Assisted Audit Tools)</a>
                   <div class="collapse" id="U2116">
                       <div class="card card-body text-info">
                           <p class="text-justify">Las herramientas tipo CAAT (Computer Assisted Audit Tools) están formadas por un conjunto de herramientas y técnicas cuya función es facilitar al auditor informático el desarrollo de sus tareas y actividades. Las más utilizadas son las aplicaciones de auditoría generalizadas, los datos de prueba y los sistemas expertos de auditorías.</p>
                           <p class="text-justify">Las herramientas CAAT son muy útiles para desarrollar la auditoría. No obstante, es imprescindible que el auditor documente los resultados de las pruebas obtenidas para dotarlas de confiabilidad y exactitud.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048717a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3"  alt="Análisis y tareas ejecutadas por la CAAT." title="Análisis y tareas ejecutadas por la CAAT.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2117" role="button">Explicación de los requerimientos que deben cumplir los hallazgos de auditoría</a>
                   <div class="collapse" id="U2117">
                       <div class="card card-body text-info">
                           <p class="text-justify">Dentro del ámbito de la auditoría, un hallazgo se refiere a un conjunto de información que recopila información específica sobre la actividad, tarea, proceso, condición, etc., analizados y evaluados, que sea considerada de interés para la organización.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048718a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3"  alt="REquisistos de los hallazgos de auditoría." title="REquisistos de los hallazgos de auditoría.">
                           <p class="text-justify">Pasos a seguir en el desarrollo de hallazgos</p>
                           <ul class="pl-3">
                               <li class="text-justify">Identificación de la condición o asuntos deficientes o debilidades del sistema de información según los criterios aceptables definidos.</li>
                               <li class="text-justify">Identificación de los responsables respecto a las operaciones implicadas en el hallazgo.</li>
                               <li class="text-justify">Verificación de la causa o causas de la deficiencia detectada.</li>
                               <li class="text-justify">Determinación de si la deficiencia es un caso aislado o una condición generalizada y difundida.</li>
                               <li class="text-justify">Determinación de la relevancia y consecuencias de la deficiencia.
                               <li class="text-justify">Entrevista con los interesados que puedan estar afectados con el hallazgo para obtener datos adicionales.</li>
                               <li class="text-justify">Determinación de las conclusiones de auditoría obtenidas por el análisis de la evidencia a raíz del hallazgo.</li>
                               <li class="text-justify">Definición de las acciones correctivas y/o recomendaciones que subsanen la deficiencia detectada.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2118" role="button">Aplicación de criterios comunes para categorizar los hallazgos como observaciones o no conformidades</a>
                   <div class="collapse" id="U2118">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048719a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3"  alt="Tipos de hallazgos." title="Tipos de hallazgos.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2119" role="button">Relación de las normativas y metodologías relacionadas con la auditoría de sistemas de información comúnmente aceptadas</a>
                   <div class="collapse" id="U2119">
                       <div class="card card-body text-info">
                           <p class="text-justify">En cuanto a las metodologías de la auditoría de sistemas, cabe destacar dos fundamentales:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Metodología tradicional: en la que el auditor se encarga sobre todo de revisar los controles del sistema, ayudándose de una lista de control que incluirá varias preguntas pendientes de verificar. La evaluación del sistema consistirá en identificar y verificar una serie de controles establecidos o estandarizados previamente.</li>
                               <li class="text-justify">Metodología basada en la evaluación de riesgos: en este caso, el auditor no hace un chequeo simple, sino que hace evaluaciones de los riesgos potenciales existentes, bien por la ausencia de controles bien por la deficiencia del sistema. Aquí, el auditor deberá verificar y cuantificar los riesgos para conocer el grado de confiabilidad del sistema, atendiendo a la exactitud y a la integridad de su información.</li>
                           </ul>
                       </div>
                   </div>
               </ul>
           </li>
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 2. APLICACIÓN DE LA NORMATIVA DE PROTECCIÓN DE DATOS DE CARÁCTER PERSONAL
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2121" role="button">Principios generales de protección de datos de carácter personal.</a>
                   <div class="collapse" id="U2121">
                       <div class="card card-body text-info">
                           <p class="text-justify">La protección de datos de carácter personal forma parte de uno de los derechos fundamentales de las personas y consiste fundamentalmente en la capacidad de estas de decidir sobre la utilización de sus datos personales.</p>
                           <p class="text-justify">En España, la protección de estos datos se garantiza con la Ley 15/1999 de Protección de Datos de Carácter Personal (LOPD) y su reglamento de desarrollo.</p>
                           <p class="text-justify"><strong>Conceptos principales de la protección de datos.</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify"><strong>Datos de carácter personal:</strong> cualquier tipo de dato que concierna a las personas físicas identificadas o identificables.</li>
                               <li class="text-justify"><strong>Fichero:</strong> conjunto organizado de datos personales, independiente de cómo se haya realizado su creación, almacenamiento, organización y acceso.</li>
                               <li class="text-justify"><strong>Tratamiento de datos:</strong> conjunto de operaciones (automatizadas o no) con las que se pueda recoger, grabar, conservar, elaborar, modificar, bloquear y cancelar datos, además de aquellas cesiones de datos que deriven de comunicaciones, consultas, interconexiones y transferencias.</li>
                               <li class="text-justify"><strong>Responsable del fichero o tratamiento:</strong> persona (tanto física como jurídica) que tiene capacidad de decisión sobre la finalidad, el contenido y el uso de los datos.</li>
                               <li class="text-justify"><strong>Interesado o afectado:</strong> persona física cuyos datos han sido o pueden ser tratados.</li>
                               <li class="text-justify"><strong>Procedimiento de disociación:</strong> tratamiento de datos de carácter personal con el fin de aislar la información del interesado que se obtenga de ellos.</li>
                               <li class="text-justify"><strong>Encargado del tratamiento:</strong> persona física o jurídica, autoridad pública, servicio u otros organismos (solos o conjuntamente con otros) que traten datos personales por cuenta del responsable del tratamiento.</li>
                               <li class="text-justify"><strong>Consentimiento del interesado:</strong> cualquier manifestación de voluntad libre, inequívoca, específica e informada con la que el interesado consiente el tratamiento de sus datos personales.</li>
                               <li class="text-justify"><strong>Cesión o comunicación de datos:</strong> cualquier revelación de datos que se realice a otras personas distintas del interesado.
                               <li class="text-justify"><strong>Fuentes accesibles al público:</strong> ficheros que pueden ser consultados por cualquier persona (exceptuando que estén limitados por alguna norma limitativa) sin más exigencia que el abono de una contraprestación. Se considerarán fuentes accesibles al público exclusivamente las siguientes:</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Censo promociona!.</li>
                                   <li class="text-justify">Repertorios telefónicos (según lo establecido en su normativa específica). </li>
                                   <li class="text-justify">Diarios y boletines oficiales. </li>
                                   <li class="text-justify">Medios de comunicación.</li>
                                   <li class="text-justify">Listas de personas de ciertos grupos profesionales que solo contengan información sobre:</li>
                                   <ul class="pl-3">
                                       <li class="text-justify">Nombre, Título, Profesión., Actividad, Grado académico, Dirección, Indicación de su pertenencia al grupo.</li>
                                   </ul>
                               </ul>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048722a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Principios de la protección de datos de carácter personal." title="Principios de la protección de datos de carácter personal.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2122" role="button">Normativa europea recogida en la directiva 95/46/CE.</a>
                   <div class="collapse" id="U2122">
                       <div class="card card-body text-info">
                           <p class="text-justify">Principios de protección de datos personales de la Directiva 95/46/CE</p>
                           <ul class="pl-3">
                               <li class="text-justify">Principio de calidad de los datos</li>
                               <li class="text-justify">Principio de legitimación del tratamiento</li>
                               <li class="text-justify">Categorías especiales de tratamiento</li>
                               <li class="text-justify">Principio de información</li>
                               <li class="text-justify">Principio de derecho de acceso</li>
                               <li class="text-justify">Principio de oposición</li>
                               <li class="text-justify">Principio de seguridad</li>
                               <li class="text-justify">Principio de notificación</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2123" role="button">Normativa nacional recogida en el código penal, Ley Orgánica para el Tratamiento Automatizado de Datos (LORTAD), Ley Orgánica de Protección de Datos (LOPD) y Reglamento de Desarrollo de La Ley Orgánica de Protección de Datos (RD 1720/2007)</a>
                   <div class="collapse" id="U2123">
                       <div class="card card-body text-info">
                           <p class="text-justify">La protección de datos personales en el Código Penal</p>
                           <p class="text-justify pl-3">Artículo 197, que trata sobre el delito de apoderamiento.</p>
                           <p class="text-justify">Ley Orgánica para el Tratamiento Automatizado de Datos (LORTAD)</p>
                           <p class="text-justify pl-3">Fue la primera norma en materia de protección de datos aprobada en España, en 1999, esta norma fue derogada por la actual Ley Orgánica de Protección de Datos de Carácter Personal (LOPD).</p>
                           <p class="text-justify">Ley Orgánica de Protección de Datos de Carácter Personal (LOPD)</p>
                           <p class="text-justifypl-3">La LOPD tiene su ámbito de aplicación en los datos de carácter personal registrados en soporte físico que los haga susceptibles de tratamiento y a su utilización posterior por los sectores público y privado.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048724a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Contenido de la LOPD." title="Contenido de la LOPD.">
                           <p class="text-justify">En 2008 entró en vigor el Reglamento de desarrollo de la LOPD (Real Decreto 1720/2007) con la finalidad de establecer medidas de protección de datos personales referentes al derecho de la intimidad.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048724b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Contenido de la LOPD." title="Contenido de la LOPD.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2124" role="button">Identificación y registro de los ficheros con datos de carácter personal utilizados por la organización.</a>
                   <div class="collapse" id="U2124">
                       <div class="card card-body text-info">
                           <p class="text-justify">Proceso de implantación de la LOPD.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048725a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Proceso de implementación de la LOPD." title="Proceso de implementación de la LOPD.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2125" role="button">Explicación de las medidas de seguridad para la protección de los datos de carácter personal recogidas en el Real Decreto 1720/2007.</a>
                   <div class="collapse" id="U2125">
                       <div class="card card-body text-info">
                           
                           <p class="text-justify">La Ley de Protección de Datos, en su artículo 9, establece el principio de seguridad de los datos, en el que se indica que el responsable del fichero o el encargado del tratamiento deberán implantar las medidas de seguridad, tanto técnicas como organizativas, que garanticen una adecuada protección de los datos en cuanto a su confidencialidad, integridad y disponibilidad.</p>
                           <p class="text-justify">Las medidas que deberán adoptarse serán distintas en función de la naturaleza de los datos, los riesgos a los que se exponen y el estado de la tecnología en sí.</p>
                           <p class="text-justify">En caso de incumplimiento de estas medidas de seguridad, se estará incurriendo en una infracción grave, con multas de 40.001 a 300.000 €.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048726a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Niveles de seguridad de los datos de carácter personal." title="Niveles de seguridad de los datos de carácter personal.">
                           <p class="text-justify">Medidas de seguridad generales para todo tipo de ficheros.</p>
                           <p class="text-justify">En todos los casos, el documento de seguridad contendrá las delegaciones de las funciones del responsable del fichero y todas las autorizaciones emitidas a otras personas, determinando obligatoriamente el período de validez de esta autorización. Los ficheros de carácter temporal deberán ser eliminados una vez ya no se utilicen para cumplir la finalidad definida inicialmente.</p>
                           <ul class="pl-3">
                               <li class="text-justify">Medidas de nivel alto</li>
                               <li class="text-justify">Medidas de nivel medio</li>
                               <li class="text-justify">Medidas de nivel bajo</li>
                           </ul>
                           <p class="text-justify">Medidas de seguridad para el tratamiento de datos automatizado.</p>
                           <p class="text-justify">Las medidas de seguridad para el tratamiento de datos automatizado se establecen con la finalidad de garantizar un nivel de protección de dichos datos adecuado en las redes de comunicaciones públicas o privadas.</p>
                           <p class="text-justify">Tratamiento de datos automatizado</p>
                           <p class="text-justify">Aquel que se realiza con datos almacenados en ficheros y soportes informatizados.</p>
                           <ul class="pl-3">
                               <li class="text-justify">Medidas de nivel alto</li>
                               <li class="text-justify">Medidas de nivel medio</li>
                               <li class="text-justify">Medidas de nivel bajo</li>
                           </ul>
                           <p class="text-justify">Medidas de seguridad para el tratamiento de datos no automatizado.</p>
                           <p class="text-justify">El tratamiento de datos no automatizado es aquel en el que no se utiliza ningún medio informático. En este caso, los datos suelen estar almacenados en formato papel.</p>
                           <ul class="pl-3">
                               <li class="text-justify">Medidas de nivel alto</li>
                               <li class="text-justify">Medidas de nivel medio</li>
                               <li class="text-justify">Medidas de nivel bajo</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2126" role="button">Guía para la realización de la auditoría bienal obligatoria de ley orgánica 15-1999 de protección de datos de carácter personal.</a>
                   <div class="collapse" id="U2126">
                       <div class="card card-body text-info">
                           <p class="text-justify">La LOPD 15/1999 obliga a las organizaciones y entidades que traten ficheros de nivel medio o alto a realizar una auditoría mínimo cada dos años. En los otros casos, no hay ninguna obligación respecto a auditorías, pero se recomienda realizar alguna periódicamente para conocer el estado y el grado de cumplimiento de las obligaciones definidas en esta normativa.</p>
                           <p class="text-justify">Pasos:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Determinación del alcance de la auditoría</li>
                               <li class="text-justify">Planificación de recursos</li>
                               <li class="text-justify">Obtención de los datos a auditar</li>
                               <li class="text-justify">Evaluación de las pruebas</li>
                           </ul>
                       </div>
                   </div>
               </ul>
           </li>                                   
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 3. ANÁLISIS DE RIESGOS DE LOS SISTEMAS DE INFORMACIÓN
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2131" role="button">Introducción al análisis de riesgos.</a>
                   <div class="collapse" id="U2131">
                       <div class="card card-body text-info">
                           <p class="text-justify">Un riesgo es un evento o conjunto de eventos que puede poner en peligro un proyecto de la organización o que puede impedir su éxito.</p>
                           <p class="text-justify">La definición de riesgo en sí siempre ha ocasionado grandes debates. Aun así, existe un acuerdo sobre las características comunes que debe tener todo riesgo informático:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Incertidumbre: el evento que caracteriza al riesgo puede ocurrir o no ocurrir, no hay certeza sobre su ocurrencia.</li>
                               <li class="text-justify">Pérdida: en caso de materializarse el riesgo, habría varias consecuencias negativas para la organización. Si no hay efectos negativos, no hay riesgo en sí.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048732a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Incertidumbre y pérdida." title="Incertidumbre y pérdida.">
                           <p class="text-justify"><strong>Conceptos básicos de la gestión de riesgos.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048732b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Caracterísricas básicas de la informactón." title="Caracterísricas básicas de la informactón.">
                           <ul class="pl-3">
                               <li class="text-justify">Riesgo: estimación de las probabilidades de que una amenaza se materialice sobre los activos de la organización, causando efectos negativos o pérdidas.</li>
                               <li class="text-justify">Análisis de riesgos: proceso y metodología utilizados para estimar la magnitud de los riesgos a los que se expone una organización.</li>
                               <li class="text-justify">Tratamiento del riesgo: procesos realizados para modificar los riesgos de una organización.</li>
                           </ul>
                           <p class="text-justify"><strong>Estándar ISO 31000 de gestión y tratamiento de riesgos.</strong></p>
                           <p class="text-justify"><strong>Principios de la ISO 31000.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048732c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Principios de la ISO 3100." title="Principios de la ISO 3100.">
                           <p class="text-justify"><strong>Marco de trabajo para la gestión del riesgo.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048732d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Marco de trabajo para la gestión del riesgo." title="Marco de trabajo para la gestión del riesgo.">
                           <p class="text-justify"><strong>Proceso de gestión del riesgo.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048732e.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Proceso de gestión del riesgo." title="Proceso de gestión del riesgo.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2132" role="button">Principales tipos de vulnerabilidades, fallos de programa, programas maliciosos y su actualización permanente, así como criterios de programación segura.</a>
                   <div class="collapse" id="U2132">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Principales tipos de vulnerabilidades/fallos de programa.</strong></p>
                           <p class="text-justify">Una vulnerabilidad es un fallo de seguridad en un programa o en un sistema de información. No todos los fallos de programas son fallos de seguridad, hay errores que simplemente provocan que funcione incorrectamente o que tenga comportamientos inesperados, sin que ello suponga un riesgo para la información que manejan.</p>
                           <ul class="pl-3">
                               <li class="text-justify">Vulnerabilidades de configuración</li>
                               <li class="text-justify">Validación de entrada</li>
                               <li class="text-justify">Salto de directorio</li>
                               <li class="text-justify">Inyección de comandos en el sistema operativo</li>
                               <li class="text-justify">Inyección SQL</li>
                               <li class="text-justify">Error de búfer</li>
                               <li class="text-justify">Fallo de autenticación</li>
                               <li class="text-justify">Error en la gestión de recursos</li>
                               <li class="text-justify">Error de diseño</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Programas maliciosos y su actualización permanente.</strong></p>
                           <p class="text-justify">Un programa malicioso o malware es un tipo de programa diseñado para que usuarios no autorizados accedan a un sistema de información sin autorización de su propietario y producir efectos indeseados en este.</p>
                           <p class="text-justify">Dentro de estos programas se engloban una gran variedad de software: virus, troyanos, gusanos, spyware, etc., que se describirán más adelante.</p>
                           <p class="text-justify">Los programas maliciosos suelen diseñarse para modificar o eliminar datos e información almacenada en el disco duro, incurriendo en ilegalidades que pueden ser penalizadas.</p>
                           <p class="text-justify">Otra de sus funcionalidades principales es conseguir el control del sistema de información en el que consiguen acceder para envíos masivos de spam por correo electrónico o para alojar información ilegal (como pornografía infantil), entre otras utilidades no autorizadas.</p>
                           <p class="text-justify"><strong>Criterios de programación segura.</strong></p>
                           <p class="text-justify">La programación segura se define como una rama de la programación encargada de la seguridad del código fuente de una aplicación con el fin de solucionar fallos y errores de programa descritos en apartados anteriores.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2133" role="button">Particularidades de los distintos tipos de código malicioso.</a>
                   <div class="collapse" id="U2133">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Sus principales objetivos son</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Destrucción o modificación de información.</li>
                               <li class="text-justify">Robo de información y de claves de acceso.</li>
                               <li class="text-justify">Propagación a otros equipos de una misma red o a través de Internet.</li>
                               <li class="text-justify">Introducir publicidad de forma masiva.</li>
                               <li class="text-justify">Comprometer la integridad de aplicaciones y sistemas operativos.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Tipos de códigos maliciosos</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Virus.</li>
                               <li class="text-justify">Cookies.</li>
                               <li class="text-justify">Troyanos.</li>
                               <li class="text-justify">Keyloggers.</li>
                               <li class="text-justify">Spyware.</li>
                               <li class="text-justify">Gusanos o worms.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2134" role="button">Principales elementos del análisis de riesgos y sus modelos de relaciones.</a>
                   <div class="collapse" id="U2134">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Elementos del análisis de riesgos</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Activo.</li>
                               <li class="text-justify">Amenaza.</li>
                               <li class="text-justify">Vulnerabilidad.</li>
                               <li class="text-justify">Riesgo.</li>
                               <li class="text-justify">Control atenuante.</li>
                               <li class="text-justify">Impacto.</li>
                               <li class="text-justify">Probabilidad.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Modelos de relaciones de conceptos de gestión de riesgos.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048735a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="En Modelos de relaciones de conceptos de gestión de riesgos." title="Modelos de relaciones de conceptos de gestión de riesgos.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2135" role="button">Metodologías cualitativas y cuantitativas de análisis de riesgos.</a>
                   <div class="collapse" id="U2135">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Modelos de relaciones de conceptos de gestión de riesgos.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048736a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Modelos de relaciones de conceptos de gestión de riesgos." title="Modelos de relaciones de conceptos de gestión de riesgos.">
                           <ul class="pl-3">
                               <li class="text-justify">Metodología cuantitativa.</li>
                               <li class="text-justify">Metodología cualitativa.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Metodología cuantitativa de análisis de riesgos</strong></p>
                           <p class="text-justify">El enfoque cuantitativo del análisis de riesgos tiene en cuenta dos elementos: la probabilidad de ocurrencia de un evento y el impacto que puede provocar en caso de que suceda.</p>
                           <p class="text-justify">Para determinar y analizar los riesgos, la metodología cuantitativa se basa en un modelo matemático que sirva de apoyo a la toma de decisiones.</p>
                           <p class="text-justify"><strong>Metodología cualitativa de análisis de riesgos</strong></p>
                           <p class="text-justify">La metodología cualitativa se basa en el raciocinio humano para calcular las pérdidas potenciales estimadas sin necesidad de utilizar métodos probabilísticos.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2136" role="button">Identificación de los activos involucrados en el análisis de riesgos y su valoración.</a>
                   <div class="collapse" id="U2136">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048737a.png" class="img-responsive d-block mx-auto p-3  mb-3" alt="Fases del proceso de análisis y gestión de riesgos." title="Fases del proceso de análisis y gestión de riesgos.">
                           <p class="text-justify"><strong>Tipos de valoraciones de activos.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048737b.png" class="img-responsive d-block mx-auto p-3  mb-3" alt="Tipos de valoraciones de activos." title="Tipos de valoraciones de activos.">
                           <ul class="pl-3">
                               <li class="text-justify">Homogeneidad</li>
                               <li class="text-justify">Relatividad</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Las dimensiones de valoración de los activos.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048737c.png" class="img-responsive d-block mx-auto p-3  mb-3" alt="Dimensiones de valoración de los activos" title="Dimensiones de valoración de los activos">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2137" role="button">Identificación de las amenazas que pueden afectar a los activos identificados previamente.</a>
                   <div class="collapse" id="U2137">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048738a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tipos de Amenazas." title="Tipos de Amenazas.">
                           <p class="text-justify"><strong>Identificación de las amenazas.</strong></p>
                           <p class="text-justify">La identificación de las amenazas se lleva a cabo con el fin de conocer con mayor profundidad el entorno al que se enfrenta el sistema de información. Más concretamente, se pretende conocer qué es lo que puede ocurrir, cuáles serían sus consecuencias y cuál es la probabilidad de que estas ocurran.</p>
                           <p class="text-justify"><strong>Ejemplos de amenazas frecuentes.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048738b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Ejemplos de amenazas frecuentes." title="Ejemplos de amenazas frecuentes.">
                           <p class="text-justify"><strong>Valoración de las amenazas.</strong></p>
                           <p class="text-justify">Cuando se produce una amenaza, los efectos sobre los activos no son igual de perjudiciales para todas sus dimensiones, pudiendo, por ejemplo, afectar gravemente a la integridad de la información, pero no tener efectos sobre su confidencialidad.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048738c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Valoración de las amenazas." title="Valoración de las amenazas.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2138" role="button">Análisis e identificación de las vulnerabilidades existentes en los sistemas de información que permitirían la materialización de amenazas incluyendo el análisis local, análisis remoto de caja blanca y de caja negra.</a>
                   <div class="collapse" id="U2138">
                       <div class="card card-body text-info">
                           <p class="text-justify">Una vulnerabilidad es la probabilidad de que una amenaza se materialice sobre un activo.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048739a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tipos de vulnerabilidades." title="Tipos de vulnerabilidades.">
                           <p class="text-justify">Algunos ejemplos de vulnerabilidades son:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Vulnerabilidades de seguridad física:</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Accesos de personal no autorizado al recinto.</li>
                                   <li class="text-justify">Desastres naturales (rayos, inundaciones, etc.).</li>
                                   <li class="text-justify">Incendios.</li>
                               </ul>
                               <li class="text-justify">Vulnerabilidades en las conexiones de red:</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Fallos en el cortafuegos o firewall.</li>
                                   <li class="text-justify">Intrusiones y accesos no autorizados a través de la red.</li>
                               </ul>
                               <li class="text-justify">Vulnerabilidades en la infraestructura de red:</li>
                               <ul class="pl-3">
                                   <li class="text-justify">o Fallos y vulnerabilidades presentes en dispositivos de red</li>
                               </ul>
                               <li class="text-justify">Vulnerabilidades en el correo electrónico.</li>
                               <li class="text-justify">Vulnerabilidades en las aplicaciones de gran valor y en sistemas operativos.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048739b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Valoración de la vulnerabilidad." title="Valoración de la vulnerabilidad.">
                           <p class="text-justify">Para detectar y analizar las vulnerabilidades de un sistema de información, se utilizan ciertas herramientas y técnicas de análisis de las que cabe destacar las siguientes:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Análisis local:</li>
                               <ul class="pl-3">
                                   <li class="text-justify">o Pruebas estáticas</li>
                                   <li class="text-justify">o Pruebas dinámicas</li>
                               </ul>
                               <li class="text-justify">Análisis remoto de caja blanca.</li>
                               <li class="text-justify">Análisis de caja negra .</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2139" role="button">Optimización del proceso de auditoría y contraste de vulnerabilidades e informe de auditoría.</a>
                   <div class="collapse" id="U2139">
                       <div class="card card-body text-info">
                           <p class="text-justify">Una vez realizada la gestión del riesgo del sistema de información, ya se conocen con más profundidad las vulnerabilidades a las que está expuesto. Con esta información y las vulnerabilidades detectadas, se pueden proponer una serie de recomendaciones que las eliminen o que reduzcan su probabilidad de materialización.</p>
                           <p class="text-justify">Con la corrección de las vulnerabilidades detectadas y la continua evaluación de los sistemas de información, debe producirse un proceso de aprendizaje que deberá reflejarse en el informe de auditoría, permitiendo así una optimización constante y progresiva del proceso de auditoría.</p>
                           <p class="text-justify"><strong>El informe de auditoría</strong></p>
                           <p class="text-justify">El informe de auditoría es un documento formalizado que contiene los objetivos de la auditoría, las metodologías utilizadas, los resultados obtenidos y las conclusiones y recomendaciones aportadas por los auditores.</p>
                           <p class="text-justify">Este informe tiene que ser claro, conciso, oportuno, objetivo e imparcial y debe ser elaborado por auditores independientes.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213A" role="button">Identificación de las medidas de salvaguarda existentes en el momento de la realización del análisis de riesgos y su efecto sobre las vulnerabilidades y amenazas.</a>
                   <div class="collapse" id="U213A">
                       <div class="card card-body text-info">
                           <ul class="pl-3">
                               <li class="text-justify">La reducción de la probabilidad de materialización de las amenazas
                                   <p class="text-justify">Son también salvaguardas preventivas. La salvaguarda ideal sería aquella que impidiese completamente que se materializara cualquier tipo de amenaza.</p>
                               </li>
                               <li class="text-justify">La reducción de la probabilidad de materialización de las amenazas
                                   <p class="text-justify">Son también salvaguardas preventivas. La salvaguarda ideal sería aquella que impidiese completamente que se materializara cualquier tipo de amenaza.</p>
                               </li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048738a.png" class="img-responsive w-75 m-3" alt="En construcción">
                           <p class="text-justify">Existe la posibilidad de que algunas salvaguardas pasen a formar parte del equipamiento de un sistema de información. El coste de implantación de la salvaguarda hace que el activo al que protege aumente de valor, convirtiéndose en parte de él.</p>
                           <p class="text-justify">Hay que tener en cuenta que, en el momento en que pasa a formar parte de un activo, también está expuesto a los riesgos del sistema y puede tener vulnerabilidades, a la vez que puede sufrir las mismas amenazas que los otros activos.</p>
                           <p class="text-justify">Por eso, cuando se implantan salvaguardas que forman parte del activo, hay que realizar un nuevo análisis de riesgos con el nuevo sistema desplegado para asegurarse de que el riesgo al que se expone el sistema es inferior a aquel al que estaba expuesto antes de implantarse la salvaguarda.</p>
                       </div>
                   </div>
                    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213B" role="button">Establecimiento de los escenarios de riesgo entendidos como pares activo-amenaza susceptibles de materializarse.</a>
                   <div class="collapse" id="U213B">
                       <div class="card card-body text-info">
                           <ul class="pl-3">
                               <li class="text-justify">Estimación del impacto potencial
                                   <p class="text-justify">El impacto potencial está formado por el conjunto de los efectos perjudiciales que pueden sufrir los activos del sistema de información en el caso de materializarse la amenaza.</p>
                                   <ul class="pl-3">
                                       <li class="text-justify">Identificación y valoración de los activos</li>
                                       <li class="text-justify">Identificación y valoración de las amenazas</li>
                                   </ul>
                               </li>
                               <li class="text-justify">Estimación del impacto residual
                                   <p class="text-justify">Se define el impacto residual como los daños a los que se expone el sistema de información cuando este está protegido por las salvaguardas implantadas.</p>
                                   <ul class="pl-3">
                                       <li class="text-justify">Identificación y valoración de los activos</li>
                                       <li class="text-justify">Identificación y valoración de las amenazas</li>
                                       <li class="text-justify">Identificación y valoración de las salvaguardas</li>
                                   </ul>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213C" role="button">Determinación de la probabilidad e impacto de materialización de los escenarios.</a>
                   <div class="collapse" id="U213C">
                       <div class="card card-body text-info">
                           <ul class="pl-3">
                               <li class="text-justify">Probabilidad de materialización de los escenarios de riesgo.
                                   <ul class="pl-3">
                                       <li class="text-justify">Raro: entre 0 y 19% de probabilidad.</li>
                                       <li class="text-justify">Improbable: entre 20% y 39% de probabilidad.</li>
                                       <li class="text-justify">Probable: entre 40% y 59% de probabilidad.</li>
                                       <li class="text-justify">Altamente Probable: entre 60% y 79% de probabilidad.</li>
                                       <li class="text-justify">Casi certeza: entre 80% y 100% de probabilidad.</li>
                                   </ul><br/>
                               </li>
                               <li class="text-justify">Impacto de materialización de los escenarios de riesgo.
                               <ul class="pl-3">
                                       <li class="text-justify">Muy bajo: degradación prácticamente nula.</li>
                                       <li class="text-justify">Bajo: Impacto irrelevante para la organizción.</li>
                                       <li class="text-justify">Medio: Impacto merecedor de atención por nivel alto de degradación.</li>
                                       <li class="text-justify">Alto: EL impacto puede ocasionar daños importantes para la organización.</li>
                                       <li class="text-justify">Muy alto: Impacto muy grave y su degradación prácticamente total.</li>
                                   </ul>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213D" role="button">Establecimiento del nivel de riesgo para los distintos pares de activo y amenaza.</a>
                   <div class="collapse" id="U213D">
                       <div class="card card-body text-info">
                           <p class="pl-3">La estimación del riesgo no puede hacerse de un modo global para la organización; deberá efectuarse activo por activo ( valorando el impacto y la probabilidad de materialización de las amenazas sobre todos y cada uno de los activis del sistema de información.)</p>
                           <p class="pl-3">Nivel de riesgo de los escenarios de los pares activo/amenaza</p>
                           <ul class="pl-3">
                               <li class="text-justify">Nivel de riesgo despreciable..</li>
                               <li class="text-justify">Nivel de riesgo bajo.</li>
                               <li class="text-justify">Nivel de riesgo moderado.</li>
                               <li class="text-justify">Nivel de riesgo importante.</li>
                               <li class="text-justify">Nivel de riesgo crítico.</li>
                           </ul>
                           <p class="pl-3">La ubicación de cada riesgo en una u otra categoría se calculará con el producto de las calificaciones de su impacto y de su probabilidad:</p>
                           <p class="pl-3"><strong>RIESGO= IMPACTO x PROBABILIDAD</strong></p>
                           <p class="pl-3">Atendiendo al nivel de riesgo estimado para cada amenaza y activo, la actuación de la organización sobre estos deberá ser diferente, dando prioridad a aquellos pares con mayor riesgo y aplazando la actuación de aquellos pares cuyo nivel de riesgo sea inferior.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213E" role="button">Determinación por parte de la organización de los criterios de evaluación del riesgo, en función de los cuales se determina si un riesgo es aceptable o no.</a>
                   <div class="collapse" id="U213E">
                       <div class="card card-body text-info">
                           <p class="pl-3">La organización deberá valorar la importancia y el coste de establecer medidas correctivas que disminuyan o eliminen los riesgos de cada activo.</p>
                           <p class="pl-3">Se tendrá que evaluar caso por caso para determinar si la implantación de la medida correctiva compensa para la reducción de riesgo que se puede obtener con ello.</p>
                           <p class="pl-3">Con la evaluación de cada riesgo por separado, la organización obtendrá información valiosa que le permitirá:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Establecer la probabilidad de materialización de amenazas que puedan afectar a la correcta actividad de la organización y que puedan obstaculizar el cumplimiento de sus objetivos.</li>
                               <li class="text-justify">Calcular y estimar el impacto de las amenazas sobre las personas y los demás activos y recursos de la organización. Con ello, podrá seleccionar los activos con más impacto y establecer medidas que les otorguen una mayor protección ante posibles amenazas.</li>
                               <li class="text-justify">Establecer criterios de valoración, calificación y evaluación de los riesgos que permita realizar una toma de decisiones de seguridad adecuadas para garantizar el correcto funcionamiento de la organización.</li>
                           </ul><br/>
                           <p class="pl-3"><strong>Visión general de la gestión de riesgos</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Las amenazas se materializan sobre los activos, a los que degradan, y ocurren con una frecuencia estimada.</li>
                               <li class="text-justify">El valor de los activos es lo que les da importancia dentro de una organización.</li>
                               <li class="text-justify">El valor de los activos y su degradación son los que permiten calcular el impacto de una amenaza.</li>
                               <li class="text-justify">Por otro lado, la frecuencia con la que se materializa la amenaza y el impacto de esta sobre un activo determinarán su nivel de riesgo.</li>
                               <li class="text-justify">Para mitigar el riesgo están las salvaguardas, que lo llevarán a cabo limitando el impacto o reduciendo la frecuencia de la amenaza, llegando así a la estimación del riesgo residual (nivel de riesgo reducido por la protección de las salvaguardas)..</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213F" role="button">Relación de las distintas alternativas de gestión de riesgos.</a>
                   <div class="collapse" id="U213F">
                       <div class="card card-body text-info">
                           <p class="pl-3">La política de gestión de riesgos de la organización decidirá qué tipo de control se va a implantar en su sistema de información, distinguiendo entre:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Controles disuasorios.</li>
                               <li class="text-justify">Controles preventivos.</li>
                               <li class="text-justify">Controles detectores.</li>
                               <li class="text-justify">Controles correctivos.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213G" role="button">Guía para la elaboración del plan de gestión de riesgos.</a>
                   <div class="collapse" id="U213G">
                       <div class="card card-body text-info">
                       <p class="pl-3"><strong>Recomendaciones básicas para la elaboración del plan</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Conocer y entender el funcionamiento de la administración de riesgos activo, salvaguarda,etc.</li>
                               <li class="text-justify">Definir las acciones del plan de gestión de riesgos.</li>
                               <li class="text-justify">Conseguir el apoyo de la dirección y de profesionales externos.</li>
                               <li class="text-justify">Identificar las consecuencias de cada riesgo.</li>
                               <li class="text-justify">Eliminar las amenazas irrelevantes.</li>
                               <li class="text-justify">Inventariar los activos susceptibles de riesgo.</li>
                               <li class="text-justify">Asignar probabilidades.</li>
                               <li class="text-justify">Asignar el impacto.</li>
                               <li class="text-justify">Determinar el riesgo para cada activo.</li>
                               <li class="text-justify">Clasificar los riesgos.</li>
                               <li class="text-justify">Calcular el riesgo total.</li>
                               <li class="text-justify">Diseñar estrategias de reducción de riesgos.</li>
                               <li class="text-justify">Desarrollar planes de contingencia.</li>
                               <li class="text-justify">Analizar la efectividad de las estrategias implantadas.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213H" role="button">Exposición de la metodología NIST SP 800-30.</a>
                   <div class="collapse" id="U213H">
                       <div class="card card-body text-info">
                       <p class="pl-3"><strong>Esta metodología desarrolla la gestión y análisis de riesgo a través de nueve pasos básicos:</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Caracterización del sistema.</li>
                               <li class="text-justify">Identificación de la amenaza.</li>
                               <li class="text-justify">Identificación de las vulnerabilidades del sistema.</li>
                               <li class="text-justify">Análisis de los controles establecidos.</li>
                               <li class="text-justify">Determinación de las probabilidades.</li>
                               <li class="text-justify">Análisis del impacto de la amenaza.</li>
                               <li class="text-justify">Determinación del riesgo.</li>
                               <li class="text-justify">Recomendación de controles adicionales.</li>
                               <li class="text-justify">Documentación de los resultados del análisis.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U213I" role="button">Exposición de la metodología Magerit versión 2</a>
                   <div class="collapse" id="U213I">
                       <div class="card card-body text-info">
                       <p class="pl-3">Entre los principales objetivos de esta metodología, cabe destacar los siguientes:</p>
                           <ul class="pl-3">
                               <li class="text-justify">La concienciación de los encargados de los sistemas de información de la existencia de riesgos y de la importancia de una gestión de riesgos adecuada.</li>
                               <li class="text-justify">Facilitar una metodología que permita analizar sistemáticamente los riesgos de las organizaciones.</li>
                               <li class="text-justify">Proporcionar un apoyo a las organizaciones para que sean capaces de diseñar sus propias medidas para combatir los riesgos de sus activos.</li>
                           </ul>
                       <p class="pl-3">Estructura de las guías Magerit</p>
                           <ul class="pl-3">
                               <li class="text-justify">Volumen I: Método.</li>
                               <li class="text-justify">Volumen II: Catálogo de elementos.</li>
                               <li class="text-justify">Volumen III: Guía de técnicas.</li>
                           </ul>
                        <p class="pl-3">Metodología Magerit</p>
                           <ul class="pl-3">
                               <li class="text-justify">Un glosario con los términos principales de la gestión de riesgos tanto en español como en inglés.</li>
                               <li class="text-justify">Las referencias de la bibliografía utilizada para la elaboración de la guía.</li>
                               <li class="text-justify">El marco legal de la seguridad de los sistemas de información.</li>
                               <li class="text-justify">El marco de evaluación y certificación de los sistemas de gestión de la seguridad de la información.</li>
                               <li class="text-justify">La herramienta Pilar: herramienta para la gestión de riesgos que utilizan las Administraciones Públicas en España.</li>
                               <li class="text-justify">La evolución de la metodología Magerit en sus versiones vl y v2 respecto a la última versión.</li>
                           </ul>
                       </div>
                   </div>
               </ul>
           </li>
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 4. USO DE HERRAMIENTAS PARA LA AUDITORÍA DE SISTEMAS
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2141" role="button">Herramientas del sistema operativo tipo Ping, Traceroute, etc.</a>
                   <div class="collapse" id="U2141">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Herramienta ping.</strong></p>
                           <p class="text-justify">El nombre de la herramienta ping proviene de packet internet groper (rastreador de paquetes de red) y se puede utilizar en cualquier sistema operativo accediendo mediante comandos.</p>
                           <p class="text-justify"><strong>Verificación del funcionamiento de la red con el comando ping.</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048742a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Comando PING." title="Comando PING.">
                           <p class="text-justify"><strong>Herramienta Traceroute.</strong></p>
                           <p class="text-justify pl-3">La herramienta traceroute se utiliza para seguir la ruta de los paquetes en una red IP y el retardo que se produce en este tránsito.</p>
                           <p class="text-justify"><strong>Herramienta whois.</strong></p>
                           <p class="text-justify pl-3">La herramienta whois se utiliza para realizar consultas en una base de datos de Internet con la finalidad de obtener información sobre alguna IP, algún dominio o alguna organización determinados.</p>
                           <p class="text-justify"><strong>Herramienta NSLookup.</strong></p>
                           <p class="text-justify pl-3">La herramienta Name System Lookup se utiliza como herramienta de diagnóstico para la detección de problemas de configuración en el DNS.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2142" role="button">Herramientas de análisis de red, puertos y servicios tipo Nmap, Netcat, NBTScan, etc..</a>
                   <div class="collapse" id="U2142">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Herramienta Nmap.</strong></p>
                           <p class="text-justify pl-3">La aplicación Nmap es gratuita y de código abierto y se utiliza principalmente para la evaluación de la seguridad de sistemas de información.</p>
                           <p class="text-justify pl-3">El objetivo y la utilidad principal de la herramienta Nmap: el descubrimiento e identificación de posibles aplicaciones y equipos no autorizados en el sistema de información.</p>
                           <p class="text-justify"><strong>Herramienta Netcat.</strong></p>
                           <p class="text-justify pl-3">Netcat funciona a través de comandos y tiene como función principal la apertura de puertos TCP/UDP y la escucha de los datos que se transmiten a través de ellos.</p>
                           <p class="text-justify"><strong>Herramienta de red NBTScan.</strong></p>
                           <p class="text-justify pl-3">NBTScan es una herramienta que funciona con comandos y que escanea los servidores NetBIOS en una red TCP/IP local o remota.</p>
                           <p class="text-justify"><strong>Otras herramientas de red: Snort y Network Miner</strong></p>
                           <p class="text-justify pl-3"><strong>Snort</strong>: se trata de una de las herramientas más utilizadas para detectar intrusiones en la red, aunque también es frecuentemente utilizada como analizador.</p>
                           <p class="text-justify pl-3"><strong>Network Miner</strong>: es actualmente una de las herramientas más utilizadas para el análisis forense digital.
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2143" role="button">Herramientas de análisis de vulnerabilidades tipo Nessus.</a>
                   <div class="collapse" id="U2143">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048744a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Escáner de vulnerabilidades." title="Escáner de vulnerabilidades.">
                           <p class="text-justify"><strong>Herramienta Nessus.</strong></p>
                           <p class="text-justify pl-3">Nessus Security Scanner es una de las herramientas más utilizadas para el análisis de vulnerabilidades de un sistema. Está basada en un modelo cliente/ servidor, lo que permite escanear las vulnerabilidades del equipo diente desde un equipo servidor.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2144" role="button">Analizadores de protocolos tipo WireShark, DSniff, Cain & Abel, etc.</a>
                   <div class="collapse" id="U2144">
                       <div class="card card-body text-info">
                           <p class="text-justify">Los analizadores de protocolos, también llamados analizadores de red, son herramientas que analizan el tráfico de datos de una red en tiempo real o en momentos posteriores a la captura de los datos. Este análisis lo efectúan mediante la captura, decodificación y transmisión de paquetes.</p>
                           <ul class="pl-3">
                               <li class="text-justify">Analizador de protocolos WireShark</li>
                               <li class="text-justify">Analizador Dsniff</li>
                               <li class="text-justify">Analizador Caín &amp; Abel</li>
                               <li class="text-justify">IP Sniffer</li>
                               <li class="text-justify">Tcpdump</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2145" role="button">Analizadores de páginas web tipo Acunetix, Dirb, Parosproxy, etc.</a>
                   <div class="collapse" id="U2145">
                       <div class="card card-body text-info">
                           <p class="text-justify">En la actualidad, hay numerosos analizadores de páginas web en el mercado y cada uno tiene características distintas y detecta fallos diferentes, por lo que se recomienda utilizar varios de ellos para detectar el mayor número de vulnerabilidades posible.</p>
                           <ul class="pl-3">
                               <li class="text-justify">Acunetix</li>
                               <li class="text-justify">Dirb</li>
                               <li class="text-justify">Parosproxy</li>
                               <li class="text-justify">Virus Total.</li>
                               <li class="text-justify">URLVoid</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2146" role="button">Ataques de diccionario y fuerza bruta tipo Brutus, John the Ripper, etc.</a>
                   <div class="collapse" id="U2146">
                       <div class="card card-body text-info">
                           <p class="text-justify">Las técnicas de descubrimiento de contraseñas se clasifican en:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Ataques de fuerza bruta: aquellos que pretenden recuperar una contraseña probando todas las combinaciones posibles hasta dar con la correcta.</li>
                               <li class="text-justify">Ataques de diccionario: estos, por el contrario, no encuentran la contraseña probando todas las combinaciones posibles, sino que intentan averiguarla probando todas las palabras del diccionario.</li>
                               <ul class="pl-3">
                                   <li class="text-justify">John the Ripper.</li>
                                   <li class="text-justify">Brutus.</li>
                                   <li class="text-justify">Bruter.</li>
                                   <li class="text-justify">OphCrack.</li>
                               </ul>
                           </ul>
                       </div>
                   </div>
               </ul>
           </li>
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 5. DESCRIPCIÓN DE LOS ASPECTOS SOBRE CORTAFUEGOS EN AUDITORÍAS DE SISTEMAS INFORMÁTICOS.
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2151" role="button">Principios generales de cortafuegos.</a>
                   <div class="collapse" id="U2151">
                       <div class="card card-body text-info">
                           <p class="text-justify">Un cortafuegos o .firewall es un sistema compuesto por uno o varios dispositivos cuya función principal es la separación entre la red local de un sistema de información y la red exterior para impedir la entrada de ataques y aumentar el nivel de seguridad de la organización.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048752a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Cortafuegos." title="Cortafuegos.">
                           <img src="../recursos/img/cursos/ifct0109/mf048752b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Separación de zonas." title="Separación de zonas.">
                           <img src="../recursos/img/cursos/ifct0109/mf048752c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Red Interna/Red Externa." title="Red Interna/Red Externa.">
                           <br/>    
                           <p class="text-justify"><strong>Características de diseño de un cortafuegos</strong></p>
                           <p class="text-justify pl-3">Para maximizar la fiabilidad y eficiencia de un cortafuegos, es fundamental que su diseño e implantación se tomen de un modo razonado, debiéndose estudiar todos los aspectos de la organización que puedan ser influyentes.</p>
                           <p class="text-justify"><strong>Objetivos fundamentales</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Todo el tráfico de datos desde la red interna hacia el exterior debe pasar por el cortafuegos.</li>
                               <li class="text-justify">Solo se permitirá pasar a la red local el tráfico autorizado específicamente por la política de seguridad de la organización.</li>
                               <li class="text-justify">El cortafuegos debe ser inmune a posibles penetraciones de intrusos, mediante la utilización de sistemas confiables acordes y de sistemas operativos seguros.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048752d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Control de accesos del cortafuegos." title="Control de accesos del cortafuegos.">
                           <p class="text-justify"><strong>Servicios de control de accesos que deben poder cubrirse:</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Control de servicios: establece a qué tipo de servicios de la organización se puede acceder desde las redes internas y externas.</li>
                               <li class="text-justify">Control de dirección: establece las direcciones de entrada y salida en las que se permitirá el tráfico de datos desde/hacia la red externa.</li>
                               <li class="text-justify">Control de usuarios: establece controles de acceso para determinar a qué servicios puede acceder cada usuario.</li>
                               <li class="text-justify">Control de comportamiento: establece el uso concreto de ciertos servicios particulares.</li>
                           </ul>
                           <ul class="pl-3">
                               <li class="text-justify">Política de seguridad</li>
                               <p class="text-justify pl-3">Cada organización debe establecer la protección del cortafuegos, atendiendo a la utilización de la red y a las características de los usuarios</p>
                               <li class="text-justify">Monitorización</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Política restrictiva: en la que se deniega todo lo que no se permite.</li>
                                   <li class="text-justify">Política permisiva: en la que se permite todo lo que no se deniega.</li>
                               </ul>
                               <li class="text-justify">Economía</li>
                               <p class="text-justify pl-3">Es evidente que, cuanto mayor sea el valor de los activos a proteger, mayor será el gasto que deberá soportar la organización para la implantación del cortafuegos y mayor calidad deberá tener el sistema a implantar.
                               </p>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2152" role="button">Componentes de un cortafuegos de red.</a>
                   <div class="collapse" id="U2152">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048753a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Componentes del cortafuegos." title="Componentes del cortafuegos.">
                           <p class="text-justify"><strong>Filtrado de paquetes</strong></p>
                           <p class="text-justify pl-3">Generalmente, los cortafuegos utilizan reglas de filtrado de paquetes con el objetivo de disminuir la carga de la red. El filtrado de paquetes se utiliza para cumplir con los objetivos de seguridad de una red establecidos por la organización, evitando los accesos no autorizados, pero permitiendo en todo momento los accesos autorizados.</p>
                           <p class="text-justify pl-3">Las reglas de permisión y bloqueo de acceso a paquetes de acceso se establecen en una tabla de condiciones y acciones relacionadas que se van consultando ordenadamente hasta detectar una condición que indique el bloqueo o el reenvío del paquete.</p>
                           <p class="text-justify">El funcionamiento del componente de filtrado de paquetes es bastante sencillo:</p>
                           <ul class="pl-3">
                               <li class="text-justify pl-3">En un primer momento se analiza la cabecera de cada paquete de datos que pretende entrar en la red local de la organización.
                               </li>
                               <li class="text-justify pl-3">Según las reglas preestablecidas por la organización y atendiendo al análisis del paquete, se le permitirá el acceso o será bloqueada. Los aspectos más habituales por analizar son:
                               </li>
                               <ul class="pl-3">
                                   <li class="text-justify">Protocolo utilizado.</li>
                                   <li class="text-justify">Dirección de origen y dirección de destino.</li>
                                   <li class="text-justify">Puerto de destino.</li>
                               </ul><br/>
                           </ul>
                           <p class="text-justify">La tabla siguiente es un ejemplo de reglas de filtrado por la IP de origen y/o destino de la trama de datos.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048753b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Reglas de filtrado." title="Reglas de filtrado.">
                           <p class="text-justify"><strong>Proxy de aplicación</strong></p>
                           <p class="text-justify">Aparte de las reglas de filtrado de paquetes de datos, los cortafuegos suelen incorporar paquetes de aplicaciones software que reenvíen o bloqueen conexiones a unos servicios concretos.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048753c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Proxy de aplicación." title="Proxy de aplicación.">
                           <p class="text-justify"><strong>Monitorización de la actividad</strong></p>
                           <p class="text-justify">La monitorización de la actividad del cortafuegos es imprescindible para la seguridad de los elementos que protege, ya que permite obtener información sobre:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Todos los ataques que se han producido (o se están produciendo).</li>
                               <li class="text-justify">La presencia de paquetes de datos sospechosos (independientemente de si finalmente son ataques reales o no).</li>
                           </ul>
                           <p class="text-justify">¿Qué información debe registrar y almacenar el cortafuegos?</p>
                           <ul class="pl-3">
                               <li class="text-justify">Información general en la que se incluyan estadísticas de los tipos de paquetes de datos recibidos, las direcciones de origen y destino más frecuentes, etc.</li>
                               <li class="text-justify">Información adicional de las conexiones al sistema, como el origen y destino de la conexión, el nombre del usuario, etc.</li>
                               <li class="text-justify">Intentos denegados de utilización de protocolos.</li>
                               <li class="text-justify">Intentos de acceso de paquetes de datos externos con direcciones de equipos internos (a través de falsificación de direcciones).</li>
                               <li class="text-justify">Paquetes de datos cuyo origen es desconocido y/o sospechoso.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2153" role="button">Relación de los distintos tipos de cortafuegos por ubicación y funcionalidad.</a>
                   <div class="collapse" id="U2153">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048754a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tipos de cortafuegos." title="Tipos de cortafuegos.">
                           <p class="text-justify"><strong>Routers con filtrado de paquetes</strong></p>
                           <p class="text-justify">Los routers con filtrado de paquetes son un tipo de cortafuegos que filtran los paquetes IP entrantes, atendiendo a una serie de reglas predefinidas: según la definición de estas reglas, estos routers descartan el paquete o lo reenvían.</p>
                           <p class="text-justify"><strong>Routers con filtrado de paquetes</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048754b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Filtrado de paquetes." title="Filtrado de paquetes.">
                           <img src="../recursos/img/cursos/ifct0109/mf048754c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Filtrado de paquetes." title="Filtrado de paquetes.">
                           <p class="text-justify">Este tipo de cortafuegos son especialmente susceptibles a unos ataques determinados:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Suplantación de direcciones IP por direcciones internas: se aconseja borrar los paquetes de datos que contengan direcciones internas que provienen del exterior.</li>
                               <li class="text-justify">Ataques de encaminamiento de fuente: al bloquear ciertas direcciones IP, los routers de filtrado no pueden impedir los ataques de encaminamiento de fuente. Para solucionar este problema, se aconseja eliminar los paquetes de datos que utilizan esta opción.</li>
                               <li class="text-justify">Fragmentos de reducido tamaño: este tipo de cortafuegos falla bastante con paquetes de datos con encabezados TCP por su fragmentación.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Gateways a nivel de aplicación</strong></p>
                           <p class="text-justify">Los gateways a nivel de aplicación se asocian al componente de servidores proxy de los cortafuegos.</p>
                           <p class="text-justify">Son repetidores de tráfico a nivel de aplicación: cuando un usuario solicita un servicio, lo realiza a través del proxy. Una vez recibida la petición, el proxy realiza el pedido al servidor real y devuelve la información solicitada al usuario.</p>
                           <p class="text-justify">Su finalidad principal es el análisis de los paquetes de datos para detectar contenidos que puedan violar la seguridad de la red</p>
                           <p class="text-justify"><strong>Routers con filtrado de paquetes</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048754d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Gateway de aplicación." title="Gateway de aplicación.">
                           <img src="../recursos/img/cursos/ifct0109/mf048754e.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Gateway de aplicación." title="Gateway de aplicación.">
                           <p class="text-justify"><strong>Gateways a nivel de circuito</strong></p>
                           <p class="text-justify">Los gateways o pasarelas a nivel de circuito son sistemas que redirigen los paquetes de datos cuando se ha comprobado que se ha establecido la conexión.</p>
                           <p class="text-justify">Para establecer la conexión, estos gateways validan el inicio de la comunicación para verificar si se realiza correctamente según el protocolo de trasportes. Cuando ya se ha validado la comunicación, todos los paquetes que se reenvíen a continuación no son verificados (solo se revisan las cabeceras de los paquetes). En términos generales, los gateways a nivel de circuito establecen funciones que determinan qué conexiones serán permitidas para la transmisión de datos.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048754f.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Gateway a nivel de circuito." title="Gateway a nivel de circuito.">
                           <p class="text-justify"><strong>Host bastion</strong></p>
                           <p class="text-justify">Host bastion es un punto crítico del sistema en la seguridad de la red identificado por el administrador del cortafuegos. No es un tipo de cortafuegos en sí, pero es interesado mencionarlo porque sirve como plataformas para:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Gateways a nivel de aplicación.</li>
                               <li class="text-justify">Gateways a nivel de circuito.</li>
                           </ul>
                           <p class="text-justify">Se trata de una aplicación ubicada en un punto crítico de un servidor para proteger a la red interna de la organización. Este punto crítico ha sido configurado previamente para que atraiga los posibles ataques que intenten acceder al sistema.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048754g.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Bastion Host." title="Bastion Host.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2154" role="button">Arquitecturas de cortafuegos de red.</a>
                   <div class="collapse" id="U2154">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048755a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Arquitectura de conrtafuegos." title="Arquitectura de conrtafuegos.">
                           <p class="text-justify"><strong>Dual-homed host</strong></p>
                           <p class="text-justify">Las arquitecturas de cortafuegos dual-homed host ofrecen una mayor protección que los cortafuegos simples y están compuestas por dos placas de red:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Una de las tarjetas suele conectarse a la red interna.</li>
                               <li class="text-justify">La otra tarjeta se conecta a la red externa de la organización.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048755b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Dual-homed host" title="Dual-homed host">
                           <p class="text-justify"><strong>Screened host (single-homed host)</strong></p>
                           <p class="text-justify">Los cortafuegos single-homed host están formados por dos sistemas de protección que filtran conexiones a nivel de circuito y a nivel de aplicación:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Un router con filtrado de paquetes.</li>
                               <li class="text-justify">Un host bastion.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048755c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Screened host." title="Screened host.">
                           <p class="text-justify"><strong>Arquitecturas de cortafuegos screened subnet (DMZ)</strong></p>
                           <p class="text-justify">Estas arquitecturas se ofrecen como solución al problema de seguridad del establecimiento de host bastion: en las arquitecturas anteriores, si un atacante puede acceder al host bastion, podrá también acceder a toda la red interna.</p>
                           <p class="text-justify">Las arquitecturas de cortafuegos screened subnet añaden un elemento más de seguridad que evite el acceso a la red por vulneración del host bastion.</p>
                           <p class="text-justify">Este elemento de seguridad se establece con una red de perímetro en la que se conecta el host bastion, la red llamada "zona desmilitarizada DMZ'.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048755d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="screened subnet." title="screened subnet.">
                           <p class="text-justify">Para establecer esta arquitectura de cortafuegos se añade otro router entre el host bastion y la red interna, de modo que el host bastion se ubica entre:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Un router interno situado entre la red interna y la red perimetral.</li>
                               <li class="text-justify">Un router externo ubicado entre la red perimetral y la red externa.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2155" role="button">Otras arquitecturas de cortafuegos de red.</a>
                   <div class="collapse" id="U2155">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Utilización de varios host bastions</strong></p>
                           <p class="text-justify">Una de las posibles configuraciones alternativas es la utilización de varios host bastions con algunos de los siguientes objetivos:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Aumentar el rendimiento de los servicios de red.</li>
                               <li class="text-justify">Aumentar el rendimiento de los servicios de red.</li>
                               <li class="text-justify">Separar servicios determinados por necesitar niveles distintos de seguridad.</li><br/>
                           </ul>
                           <p class="text-justify"><strong>Red perimetral con un solo router</strong></p>
                           <p class="text-justify">Otra opción sería utilizar un solo router para la implantación de una red perimetral: este router haría las funciones de router interno y externo a la vez.</p>
                           <p class="text-justify">El requisito fundamental para el establecimiento de esta arquitectura es que el router sea capaz de procesar todo el tráfico de datos que reciba, ya que debe filtrar tanto los datos de la red interna como los de la red externa.</p>
                           <p class="text-justify"><strong>Utilización del host bastion como router externo</strong></p>
                           <p class="text-justify">Cuando se quieren conectar dos redes con interfaces de red distintas, se puede utilizar el host bastion como router externo.</p>
                           <p class="text-justify">Con esta arquitectura, el host bastion ejecuta a la vez el filtrado de paquetes de datos y los servicios proxy.</p>
                           <p class="text-justify">El principal inconveniente de esta configuración es su elevado coste para el desempeño de los servicios proxy. Además, aunque no se expone a vulnerabilidades, sí es cierto que el host bastion está más expuesto a posibles ataques, al no haber ninguna barrera entre la red local y este.</p>
                           <p class="text-justify">Por ello, se recomienda el establecimiento de medidas adicionales de seguridad que añadan protección extra al host bastion y minoren su vulnerabilidad ante intrusiones y ataques .</p>
                       </div>
                   </div>
               </ul>
           </li>                               
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 6. GUÍAS PARA LA EJECUCIÓN DE LAS DISTINTAS FASES DE LA AUDITORÍA DE SISTEMAS DE INFORMACIÓN
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2161" role="button">Guía para la auditoría de la documentación y normativa de seguridad existente en la organización auditada.</a>
                   <div class="collapse" id="U2161">
                       <div class="card card-body text-info">    
                           <p class="text-justify">Este proceso de auditoría se divide en cuatro fases o procesos diferenciados:</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048762a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Fases de la auditoría." title="Fases de la auditoría.">
                           <p class="text-justify"><strong>Guía para la auditoría de la documentación</strong></p>
                           <p class="text-justify">Son varios los motivos que justifican la elaboración de la documentación a lo largo de todo el proceso de auditoría, como se ve en la siguiente tabla.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048762b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3"  alt="Documentación de la auditoría." title="Documentación de la auditoría.">
                           <img src="../recursos/img/cursos/ifct0109/mf048762c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3"  alt="Características básicas de los papeles de trabajo." title="Características básicas de los papeles de trabajo.">
                           <p class="text-justify">Es de vital importancia que los papeles de trabajo posean las siguientes características:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Completos: deben abarcar todas las tareas ejecutadas y los principales resultados detectados.</li>
                               <li class="text-justify">Claros: deben redactarse de una forma clara para que sean comprensibles para todos los destinatarios de la auditoría.</li>
                               <li class="text-justify">Concisos: solo incluirán aquella información que se considere relevante para una mejor comprensión de las tareas de auditoría realizadas. No se deben incluir detalles innecesarios que solo dificultarán su lectura y comprensión.</li>
                           </ul>
                           <p class="text-justify"><strong>Es de vital importancia que los papeles de trabajo posean las siguientes características:</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048762d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" a alt="Tipos de archivo." title="Tipos de archivo.">    
                           <p class="text-justify"><strong>Archivo permanente (archivo continuo de auditoría)</strong></p>
                           <p class="text-justify">El archivo permanente deberá contener todos los papeles de trabajo que tengan interés continuo; es decir, que también sean de utilidad no solo en la auditoría que se realiza, sino que además sirvan como documento de consulta en futuras auditorías. Se consideran papeles que deben incluirse en el archivo permanente:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Aspectos generales y consideraciones sobre la organización.</li>
                               <li class="text-justify">Aspectos generales y consideraciones sobre el sector de la organización.</li>
                               <li class="text-justify">Composición de los directivos y miembros del consejo de administración.</li>
                               <li class="text-justify">Organigrama de la organización.</li>
                               <li class="text-justify">Características de los equipos que forman parte de los sistemas de información.</li>
                               <li class="text-justify">Manuales de instrucciones y utilización de los equipos, dispositivos y aplicaciones del sistema.</li>
                               <li class="text-justify">Esquema de la planificación plurianual de auditoría.</li>
                               <li class="text-justify">Toda la información restante que se considere importante para futuras auditorías.
                               </li>
                           </ul><br/>
                           <p class="text-justify"><strong>Archivo corriente</strong></p>
                           <p class="text-justify">El archivo corriente, también llamado archivo de la auditoría en curso, deberá contener papeles que solo sean de utilidad para la auditoría que se está realizando. No se incluirán los documentos importantes para auditorías posteriores. Este tipo de archivo se divide también en dos tipologías:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Archivo general.</li>
                               <li class="text-justify">Archivo por tareas.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Guía para la documentación: la utilización de los archivos</strong></p>
                           <p class="text-justify">Los documentos que se archivarán en el archivo general son los que no se pueden englobar en ninguna tarea ni área específica del trabajo de auditoría. Son sobre todo:</p>
                           <ul class="pl-3">
                               <li class="text-justify">El informe elaborado por el auditor.</li>
                               <li class="text-justify">La carta con las recomendaciones del auditor.</li>
                               <li class="text-justify">El esquema de planificación de la auditoría realizada.</li>
                               <li class="text-justify">La información intercambiada con los directivos de la organización.</li>
                               <li class="text-justify">El tiempo que cada miembro del equipo auditor ha utilizado para el desarrollo de cada tarea.</li>
                               <li class="text-justify">Los acontecimientos posteriores a la finalización de la auditoría.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Guía para la documentación: la utilización de los archivos</strong></p>
                           <p class="text-justify">En cuanto al archivo por áreas, se recomienda elaborar y mantener un archivo de papeles de trabajo para cada área definida de la auditoría realizada. Es aconsejable recopilar todos los documentos que hacen referencia a cada área para tener una visión más global de las tareas llevadas a cabo en cada una de las áreas. Más concretamente, se incluirán en el archivo por áreas:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Programa de auditoría de cada área.</li>
                               <li class="text-justify">Conclusiones específicas de cada área.</li>
                               <li class="text-justify">Conclusiones de las tareas de auditoría y de los resultados obtenidos em cada área.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Normativa de auditoría de sistemas de información</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048762e.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Normas de auditoría." title="Normas de auditoría.">
                           <img src="../recursos/img/cursos/ifct0109/mf048762f.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Normas de auditoría." title="Normas de auditoría.">
                           <p class="text-justify"><strong>Normativa referente a la protección de datos de carácter personal</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048762g.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Normativa de seguridad de auditoría." title="Normativa de seguridad de auditoría.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2162" role="button">Guía para la elaboración del plan de auditoría.</a>
                   <div class="collapse" id="U2162">
                       <div class="card card-body text-info">
                           <p class="text-justify">Para que la auditoría de seguridad se desarrolle correctamente, será necesario elaborar un plan de auditoría.</p>
                           <p class="text-justify">El objetivo de esta planificación es la recopilación de información de la organización y de sus sistemas de información para obtener una información global del área a auditar.</p>
                           <p class="text-justify">La recopilación de información se deberá realizar a través de observaciones, entrevistas con los agentes que interactúan con el sistema y con la solicitud de documentos e información a los responsables de la organización</p>
                           <p class="text-justify">Con esta información, el auditor ya será capaz de definir concretamente:</p>
                           <ul class="pl-3">
                               <li class="text-justify">El objetivo general del estudio.</li>
                               <li class="text-justify">El alcance que la auditoría deberá tener.</li>
                               <li class="text-justify">El programa desarrollado de las tareas de auditoría.</li>
                           </ul>
                           <p class="text-justify">El plan de auditoría deberá señalar detalladamente el objetivo, el alcance y la dirección de la misma y deberá comprender también un plan de trabajo para que, cuando se produzca algún cambio o modificación inesperada al plan general, estos se documenten debidamente en el plan de auditoría general.</p>
                           <p class="text-justify"><strong>Recolección de información para el plan de auditoría</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048763a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Recolección de información para el plan de auditoría." title="Recolección de información para el plan de auditoría.">
                           <p class="text-justify"><strong>Información a nivel del área de informática</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Objetivos a corto y largo plazo específicos del área de informática.</li>
                               <li class="text-justify">Organigrama del área.</li>
                               <li class="text-justify">Manual de políticas, reglamentos y normativas del área.</li>
                               <li class="text-justify">Número de personas trabajando en el área y cantidad de puestos de trabajo.</li>
                               <li class="text-justify">Procedimientos administrativos desarrollados.</li>
                               <li class="text-justify">Presupuestos y gastos del área.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Recursos materiales y técnicos</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Documentos, localización y características principales de los equipos del sistema (tanto los instalados como los almacenados sin instalar).</li>
                               <li class="text-justify">Fechas de instalación de todos los equipos y previsiones de instalación de los equipos almacenados.</li>
                               <li class="text-justify">Contratos de adquisición, alquiler y mantenimiento en vigor de los equipos y dispositivos de la organización.</li>
                               <li class="text-justify">Contratos de seguros del sistema de información.</li>
                               <li class="text-justify">Convenios establecidos con otras instalaciones y organizaciones.</li>
                               <li class="text-justify">Configuraciones de los equipos.</li>
                               <li class="text-justify">Capacidad actual y máxima de los equipos.</li>
                               <li class="text-justify">Planes de expansión del sistema de información.</li>
                               <li class="text-justify">Políticas de utilización de los equipos.</li>
                               <li class="text-justify">Políticas de procedimientos y operaciones de la organización.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Información a nivel de los sistemas de información </strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Manual de los formularios que rellenan los empleados en el desarrollo de sus tareas con el sistema.</li>
                               <li class="text-justify">Manual de los procedimientos de los sistemas de información.</li>
                               <li class="text-justify">Descripción genérica del sistema.</li>
                               <li class="text-justify">Proceso de documentación y archivo de la información del sistema.</li>
                               <li class="text-justify">Fechas de instalación de los equipos y dispositivos del sistema a auditar.</li>
                               <li class="text-justify">Proyectos de instalación de ampliaciones y renovaciones de los sistemas.</li>
                           </ul><br>
                           <p class="text-justify"><strong>Elaboración del plan de auditoría y de los programas de trabajo</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048763b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Elaboración del plan de auditoría y de los programas de trabajo." title="Elaboración del plan de auditoría y de los programas de trabajo.">
                           <ul class="pl-3">
                               <li class="text-justify">Auditoría general/específica
                                   <p class="text-justify pl-3">Hay que tener en cuenta que no es lo mismo realizar una evaluación del sistema o de la organización en general que evaluar un área concreta de la organización. En el caso de una auditoría general, la auditoría será más compleja y costosa y requerirá una mayor asignación de recursos. Por el contrario, si solo se va a evaluar un área específica de la organización, los costes y recursos asignados serán bastante inferiores. </p>
                               </li>
                               <li class="text-justify">Auditoría global/parcial
                                   <p class="text-justify pl-3">Además, el plan de auditoría deberá considerar si la auditoría será a nivel global de todo el sistema de información o a nivel parcial (en el que se evaluarán solo una serie de equipos y procesos muy concretos y específicos). El volumen de la auditoría será el que determinará la cantidad de auditores y recursos necesarios, además de las características y conocimientos especializados que deberán tener los auditores.</p>
                               </li>
                           </ul>
                           <!-- <p class="text-justify">Este plan se debe elaborar ateniéndose a las recomendaciones reflejadas en la siguiente tabla.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048763b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Criterios para la elaboración del plan de auditoría." title="Criterios para la elaboración del plan de auditoría."> -->
                           <p class="text-justify"><strong>Contenido del plan de auditoría</strong></p>
                           <p class="text-justify">El plan de auditoría deberá contener, como mínimo, los siguientes aspectos:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Objetivos y alcance de la auditoría.</li>
                               <li class="text-justify">Criterios utilizados.</li>
                               <li class="text-justify">Identificación de las áreas que serán auditadas.</li>
                               <li class="text-justify">Identificación del personal y de las funciones de las áreas auditadas.</li>
                               <li class="text-justify">Identificación de los aspectos de calidad a los que se les debe asignar una prioridad alta.</li>
                               <li class="text-justify">Identificación de la documentación de referencia.</li>
                               <li class="text-justify">Tiempo y duración estimados para las entrevistas iniciales.</li>
                               <li class="text-justify">Ubicación de la auditoría y fechas estimadas.</li>
                               <li class="text-justify">Cronograma de las reuniones del responsable de seguridad de la organización o del sistema informático con el auditor.</li>
                               <li class="text-justify">Requerimientos confidenciales.</li>
                               <li class="text-justify">Contenido, formato y estructura básica del informe de auditoría.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2163" role="button">Guía para las pruebas de auditoría.</a>
                   <div class="collapse" id="U2163">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048764a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Guía para las pruebas de auditoría." title="Guía para las pruebas de auditoría.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U2164" role="button">Guía para la elaboración del informe de auditoría.</a>
                   <div class="collapse" id="U2164">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Documentos específicos</strong></p>
                           <img src="../recursos/img/cursos/ifct0109/mf048765a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Informe de auditoría." title="Informe de auditoría.">
                           <p class="text-justify"><strong>Carta de envío</strong></p>
                           <p class="text-justify">La carta de envío debe ser la presentación del auditor y de la empresa a la que pertenece como trabajador.</p>
                           <p class="text-justify">Es imprescindible que se muestre la profesionalidad del auditor y que tiene un extenso conocimiento, tanto en la materia auditora como en la organización que se ha estado evaluando.</p>
                           <p class="text-justify"><strong>Resumen ejecutivo</strong></p>
                           <p class="text-justify">El resumen ejecutivo incluirá los aspectos generales de la auditoría. Más específicamente, deberá contener:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Antecedentes.</li>
                               <li class="text-justify">Fundamento legal y normativa.</li>
                               <li class="text-justify">Objetivos y alcance de la auditoría.</li>
                               <li class="text-justify">Procedimientos relevantes utilizados y limitaciones encontradas.</li>
                               <li class="text-justify">Resumen breve de los resultados de la auditoría.</li>
                               <li class="text-justify">Identificación de los hechos que deben originar responsabilidades.</li>
                               <li class="text-justify">Comentarios de la organización sobre la aceptación del informe de auditoría.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Informe de auditoría informática</strong></p>
                           <p class="text-justify">En este documento se deberá incluir, como mínimo:</p>
                           <ol class="pl-3">
                               <li class="text-justify">Fecha de emisión del informe.</li>
                               <li class="text-justify">Alcance de la auditoría, limitaciones y objetivos establecidos.</li>
                               <li class="text-justify">Descripción de la metodología aplicada para la realización del proceso de auditoría.</li>
                               <li class="text-justify">Documentación revisada en la auditoría.
                                   <p class="text-justify pl-3">Nota: Además de la documentación revisada en la auditoría, también se incluirá toda la documentación elaborada por el auditor a lo largo de todo el proceso auditor.
                                   </p>
                               </li>
                               <li class="text-justify">Pruebas de auditoría realizadas.</li>
                               <li class="text-justify">Fechas en las que se ha llevado a cabo el proceso de auditoría (concretándose las fechas del trabajo de campo, de las entrevistas, reuniones y revisiones técnicas ejecutadas).</li>
                               <li class="text-justify">Limitaciones detectadas en la realización de las pruebas que impidan la emisión de un juicio del auditor sobre ciertos aspectos de la seguridad del sistema informático.</li>
                               <li class="text-justify">Informe ejecutivo en el que se incluya un resumen de los aspectos más destacables y del grado general de cumplimiento de los objetivos de auditoría.</li>
                               <li class="text-justify">Sección de recomendaciones. Estas deben cumplir dos requisitos:</li>
                               <ul class="pl-3">
                                   <li class="text-justify"> Las recomendaciones deben ser abiertas, facilitando varias alternativas de solución posibles que permitan elegir al responsable de seguridad.</li>
                                   <li class="text-justify"> Las recomendaciones deben formularse indicando específicamente la existencia de riesgos e implicaciones.</li>
                               </ul>
                               <li class="text-justify">Sección de anexos: donde se describirán los detalles y resultados de las pruebas de auditoría ejecutados que fundamentan las conclusiones del auditor mostradas en el informe ejecutivo.</li>
                           </ol>
                       </div>
                   </div>
               </ul>
           </li>
       </ul>
   </li>
   <li class="list-group-item border-0 bg-light text-primary">MF0488_3 GESTIÓN DE INCIDENTES DE SEGURIDAD INFORMÁTICA
       <ul class="list-group">
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 1. SISTEMAS DE DETECCIÓN Y PREVENCIÓN DE INTRUSIONES (IDS/IPS)
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3111" role="button">Conceptos generales de gestión de incidentes, detección de intrusiones y su prevención.</a>
                   <div class="collapse" id="U3111">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048812a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Propiedades de seguridad informática." title="Propiedades de seguridad informática.">
                           <img src="../recursos/img/cursos/ifct0109/mf048812b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Incidentes de seguridad." title="Incidentes de seguridad.">
                           <p class="text-justify"><strong>Gestión y medidas de incidentes de seguridad</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Tipos de medidas</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Preventivas</li>
                                   <li class="text-justify">De detección</li>
                                   <li class="text-justify">Correctivas</li>
                               </ul>
                               <li class="text-justify">Pautas generales a seguir para que esta gestión de incidentes</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Prevención de los incidentes</li>
                                   <li class="text-justify">Detección y reporte de los incidentes</li>
                                   <li class="text-justify">Clasificación del incidente</li>
                                   <li class="text-justify">Análisis del incidente</li>
                                   <li class="text-justify">Respuesta al incidente</li>
                                   <li class="text-justify">Registro de incidentes</li>
                                   <li class="text-justify">Aprendizaje</li>
                               </ul>
                               <li class="text-justify">Beneficios de una gestión de incidentes efectiva</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Rápida restauración del sistema informático garantizando la mínima pérdida de información posible.</li>
                                   <li class="text-justify">Generación de una base de datos con el histórico de los incidentes y de las medidas tomadas para una mayor rapidez ante próximos incidentes.</li>
                                   <li class="text-justify">Mejora continua de la gestión y tratamiento de incidentes.</li>
                                   <li class="text-justify">Eliminación de la aparición de incidentes repetitivos.</li>
                                   <li class="text-justify">Optimización de los recursos disponibles.</li>
                                   <li class="text-justify">Mayor productividad de los usuarios.</li>
                                   <li class="text-justify">Mayor control de los procesos del sistema de información y del proceso de monitorización del mismo.</li>
                               </ul>
                               <li class="text-justify">Efectos adversos de una gestión de incidentes deficiente</li>
                               <ul class="pl-3">
                                   <li class="text-justify">Desperdicio y bajo rendimiento de los recursos.</li>
                                   <li class="text-justify">Pérdida de información valiosa para la organización.</li>
                                   <li class="text-justify">Pérdida de productividad en los servicios y como consecuencia, peor calidad de servicio a los dientes.</li>
                               </ul>
                           </ul><br/>
                           <p class="text-justify"><strong>Detección de intrusiones y su prevención</strong></p>
                           <p class="text-justify">Los intentos de intrusión son aquellos intentos que pueden afectar negativamente a la confidencialidad, integridad y disponibilidad de la información de un equipo o que intentan evitar los mecanismos de seguridad que hay establecidos.</p>
                           <p class="text-justify">Estas intrusiones pueden producirse de varios modos: desde usuarios no autorizados que acceden al sistema a través de internet, usuarios que sí están autorizados pero que intentan acceder a privilegios para los que no tienen autorización, hasta usuarios autorizados que utilizan malintencionadamente los privilegios que les han sido otorgados.</p>
                           <p class="text-justify">Para evitar este tipo de intrusiones están los sistemas de prevención de intrusiones o IPS que son sistemas que permiten establecer una protección adicional a los equipos y redes de una organización ante las posibles amenazas que pueden aparecer debido al uso exhaustivo de las redes y de los sistemas de información externos.</p>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3112" role="button">Identificación y caracterización de los datos de funcionamiento del sistema.</a>
                   <div class="collapse" id="U3112">
                       <div class="card card-body text-info">
                           <p class="text-justify">Un log es un registro oficial de los eventos del sistema producidos a lo largo de un período de tiempo determinado.</p>
                           <p class="text-justify">En los logs se registran datos de eventos referentes a:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Qué tipo de evento ha ocurrido.</li>
                               <li class="text-justify">Quién ha originado el evento.</li>
                               <li class="text-justify">Cuándo se ha producido el evento.</li>
                               <li class="text-justify">Dónde se ha producido el evento.</li>
                               <li class="text-justify">Por qué se ha producido el evento.</li>
                           </ul>
                           <p class="text-justify">Así, para comprobar el correcto funcionamiento del sistema e identificar los distintos eventos sucedidos se recomienda evaluar los logs de los equipos, ya que se podrán detectar fallos y eventos como:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Incidentes de seguridad.</li>
                               <li class="text-justify">Funcionamientos anómalos.</li>
                               <li class="text-justify">Cambios de configuración de aplicaciones o dispositivos.</li>
                               <li class="text-justify">Utilización y rendimiento de los recursos.</li>
                               <li class="text-justify">Intentos fallidos de acceso de usuarios no autorizados.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048813a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Visor de eventos." title="Visor de eventos.">
                           <p class="text-justify">Con esta herramienta se pueden visualizar distintos tipos de eventos sucedidos junto con la fecha y hora, el origen, su identificador, el usuario que lo ha generado y otras características:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Registros de aplicación: eventos registrados por aplicaciones o programas.</li>
                               <li class="text-justify">Registros de seguridad: eventos ocurridos en los accesos del sistema como los intentos de inicio de sesión (tanto exitosos como fallidos), las introducciones de contraseñas erróneas, la utilización de los recursos, etc.</li>
                               <li class="text-justify">Registros de instalación: eventos que hacen referencia a la instalación de aplicaciones en el equipo. Se suelen utilizar para comprobar si se ha instalado algún código malicioso en el equipo.</li>
                               <li class="text-justify">Registros de eventos reenviados: eventos que se han reenviado a este registro desde otros equipos.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3113" role="button">Arquitecturas más frecuentes de los sistemas de detección de intrusos.</a>
                   <div class="collapse" id="U3113">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048814a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Funcionamiento de un IDS." title="Funcionamiento de un IDS.">
                           <p class="text-justify"><strong>Funcionamiento de un IDS</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Previenen de posibles problemas porque disuaden individuos hostiles.</li>
                               <li class="text-justify">Detectan ataques y otras vulneraciones de la seguridad que otros sistemas de protección no previenen</li>
                               <li class="text-justify">Detectan preámbulos de ataques: normalmente, antes de intentar acceder y atacar a un sistema, los atacantes suelen examinarlo y hacer pruebas para tantear el ataque. </li>
                               <li class="text-justify">Justifican y documentan el riesgo de la organización: en el momento en el que se elaboran las políticas de seguridad de la empresa es necesario realizar una evaluación de los riesgos justificada con indicadores y datos.</li>
                               <li class="text-justify">Aportan información útil sobre las intrusiones y ataques que se producen en el equipo.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Arquitectura de los IDS</strong></p>
                           <p class="text-justify">Elementos comunes entres distintos IDS</p>
                           <ul class="pl-3">
                               <li class="text-justify">La fuente de recogida de datos. Las fuentes pueden ser logs, dispositivos de red o el mismo sistema de información.</li>
                               <li class="text-justify">Las reglas que definen los patrones y directrices para detectar las anomalías de seguridad de un sistema.</li>
                               <li class="text-justify">Los filtros que comparan los datos o los logs que se han obtenido con los patrones definidos en las reglas.</li>
                               <li class="text-justify">Los detectores de los eventos anormales que suceden en el tráfico de la red.</li>
                               <li class="text-justify">El sistema que genera los informes y las alarmas en caso de encontrar alguna intrusión o ataque.</li>
                           </ul><br/>
                           <img src="../recursos/img/cursos/ifct0109/mf048814b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipo de arquitectura IDS." title="Tipo de arquitectura IDS.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3114" role="button">Relación de los distintos tipos de IDS/IPS por ubicación y funcionalidad.</a>
                   <div class="collapse" id="U3114">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Tipos de IDS</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">IDS basados en red (NIDS)</li>
                               <li class="text-justify">IDS basados en host (HIDS)</li>
                               <li class="text-justify">IDS de detección de abusos o firmas</li>
                               <li class="text-justify">IDS de detección de anomalías</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Tipos de IPS</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">IPS de filtrado de paquetes</li>
                               <li class="text-justify">IPS de bloqueo de IP</li>
                               <li class="text-justify">IPS con acción de decepción</li>
                           </ul><br/>
                           <p class="text-justify"><strong>IDS basados en red (NIDS)</strong></p>
                           <p class="text-justify">Los IDS basados en red detectan los ataques mediante la captura y análisis de los paquetes de la red. La gran mayoría de los IDS están basados en red. Una vez capturados y analizados los paquetes de la red, los IDS se encargan de buscar patrones que supongan algún tipo de ataque.</p>
                           <p class="text-justify">Los NIDS analizan el tráfico de toda la red examinando paquetes para buscar opciones no permitidas y diseñadas para no ser detectadas por los cortafuegos. Además, emite alertas cuando hay intentos de acceso o análisis externo de alguna vulnerabilidad del sistema.</p>
                           <p class="text-justify">Su funcionamiento consiste en:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Unos sensores o agentes que se sitúan en varios puntos de la red para monitorizar el tráfico buscando tráfico sospechoso. Lo habitual es que estos sensores analicen los paquetes en modo oculto para no ser descubiertos.</li>
                               <li class="text-justify">Una consola que recibe las alarmas emitidas por los sensores y que, atendiendo al tipo de alarma, producirá algún tipo de respuesta.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>IDS basados en host (HIDS)</strong></p>
                           <p class="text-justify">Los IDS basados en host o HIDS detectan las intrusiones a nivel de un equipo informático, analizando su tráfico para comprobar si ha habido algún tipo de alteración de los archivos del sistema operativo y para localizar actividades sospechosas.</p>
                           <p class="text-justify">A diferencia de los NIDS, los IDS basados en host informan del resultado del ataque en cuanto a su éxito o fracaso.</p>
                           <p class="text-justify">Sus funcionalidades principales se concretan en:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Análisis del tráfico sobre un servidor o sobre un equipo concreto.</li>
                               <li class="text-justify">Detección de los intentos de acceso, tanto fallidos como exitosos.</li>
                               <li class="text-justify">Detección de las modificaciones realizadas en archivos críticos.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>IDS de detección de abusos o firmas</strong></p>
                           <p class="text-justify">Los IDS de detección de abusos o firmas tienen como funcionalidad principal buscar eventos que coincidan con un patrón predefinido o con una firma que describa un ataque conocido.</p>
                           <p class="text-justify">Entre las ventajas de este tipo de IPS destacan:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Elevado grado de efectividad sin generar en exceso falsas alarmas.</li>
                               <li class="text-justify">Rápido diagnóstico del uso de un ataque determinado.</li>
                           </ul>
                           <p class="text-justify">Sin embargo, también tiene como desventaja la constante necesidad de actualización continua para que la detección de los abusos o firmas sea eficaz.</p>
                           <p class="text-justify"><strong>IDS de detección de anomalías</strong></p>
                           <p class="text-justify">Este tipo de IDS, en lugar de buscar abusos conforme a unos patrones, tiene como función principal la detección de comportamientos inusuales que sucedan en un host de una red.</p>
                           <p class="text-justify">Sus ventajas principales son:</p>
                           <ul class="pl-3">
                               <li class="text-justify">La elevada capacidad de detectar ataques de los que no hay un conocimiento determinado.</li>
                               <li class="text-justify">La posibilidad de definir firmas en la detección de abusos con la información que obtienen.</li>
                           </ul>
                           <p class="text-justify">Sin embargo, también tiene como desventaja la constante necesidad de actualización continua para que la detección de los abusos o firmas sea eficaz.</p>
                           <p class="text-justify"><strong>Tipos de IPS</strong></p>
                           <p class="text-justify">Los sistemas de prevención de intrusiones o IPS se desarrollaron en 1990 con la finalidad de monitorizar el tráfico de una red en tiempo real y conseguir prevenir las intrusiones al sistema. Se consideran una evolución de los sistemas de detección de intrusiones (IDS).</p>
                           <p class="text-justify">Los IPS tratan de prevenir que se filtre cualquier intrusión: en cuanto se produce la caída de algún paquete o se detecta que está dañado o incompleto, la red bloquea la transmisión de este paquete con el fin de prevenir un posible ataque.</p>
                           <ul class="pl-3">
                               <li class="text-justify">IPS de filtrado de paquetes</li>
                               <li class="text-justify">IPS de bloqueo de IP</li>
                               <li class="text-justify">IPS con acción de decepción</li>
                           </ul><br/>
                           <p class="text-justify"><strong>IPS de filtrado de paquetes</strong></p>
                           <p class="text-justify">Los IPS de filtrado de paquetes tienen como función principal determinar el tipo de tráfico que puede entrar y salir de un equipo o servidor.</p>
                           <p class="text-justify"><strong>Hogwash</strong>: es un sistema que funciona tanto como IDS, como IPS (es un IDS/IPS). Monitoriza el tráfico de una o varias redes y genera alertas. Además, puede detectar los ataques de la red y filtrarlos.</p>
                           <p class="text-justify"><strong>Dragon IPS</strong>: herramienta cuya funcionalidad principal es bloquear a los atacantes, reducir los ataques DoS y prevenir el acceso a la información del sistema convirtiendo la red en una red invisible.</p>
                           <p class="text-justify"><strong>Snort_Inline</strong>: está basado y construido sobre el IDS Snort, con la función añadida de la capacidad de cambiar o descartar paquetes mientras circulan por el host.</p>
                           <p class="text-justify"><strong>IPS de bloqueo de IP</strong></p>
                           <p class="text-justify">Este tipo de IPS tiene como funcionalidad principal bloquear direcciones IP que puedan ser causantes de algún tipo de ataque.</p>
                           <p class="text-justify"><strong>Snortsam</strong>: herramienta gratis y de código abierto que bloquea las direcciones IP por periodos de tiempo que pueden ir desde segundos hasta tiempo indefinido.</p>
                           <p class="text-justify"><strong>Portsentry</strong>: herramienta de libre distribución desarrollada por Cisco. Su función principal es rastrear las conexiones sobre el host donde es ejecutada e identificar los intentos de exploración contra dicho host. En cuanto se detecta algún intento Portsentry niega el acceso a la exploración del host.</p>
                           <p class="text-justify"><strong>IPS con acción de decepción</strong></p>
                           <p class="text-justify">Los IPS con acción de decepción están basados en la decepción o en el engaño hacia el atacante, de modo que cuando se produce algún ataque el IPS remite al atacante información errónea del host. </p>
                           <p class="text-justify"><strong>DTK o Toolkit Deception</strong>: conjunto de herramientas cuya función principal es emitir respuestas falsas al atacante para que este entienda que hay un número muy elevado de vulnerabilidades en el sistema al que está atacando.</p>
                           <p class="text-justify"><strong>Honeyd</strong>: herramienta que crea hosts virtuales sobre una red con el fin de crear una simulación de la misma y engañar a los atacantes.</p>
                           <p class="text-justify"><strong>Specter</strong>: es un honeypot o sistema de engaño que realiza la simulación de un equipo completo para atraer a los atacantes y alejarlos de los equipos reales. Además, en el momento en el que se produce algún ataque Specter investiga el rastro de los atacantes.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048815a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Otros tipos de IPS." title="Otros tipos de IPS.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3115" role="button">Criterios de seguridad para el establecimiento de la ubicación de los IDS/IPS.</a>
                   <div class="collapse" id="U3115">
                       <div class="card card-body text-info">
                           <p class="text-justify">Atendiendo a los criterios de seguridad para el establecimiento de la ubicación de los IDS/IPS se distinguen tres zonas en las que se puede ubicar un sistema IDS/IPS:</p>
                           <p class="text-justify"><strong>Zona roja</strong>: es una zona de riesgo elevado. En esta zona el sistema IDS/IPS debe configurarse de modo que tenga poca sensibilidad, ya que observará todo el tráfico de la red y habrá una elevada posibilidad de falsas alarmas.
                           </p>
                           <p class="text-justify"><strong>Zona verde</strong>: esta zona tiene menos riesgo que la zona roja y en ella el IDS/IPS debe configurarse de modo que tenga mayor sensibilidad que en la zona roja porque aquí el firewall o cortafuegos realiza un filtrado de accesos predefinidos por la organización</p>
                           <p class="text-justify"><strong>Zona azul</strong>: es la zona de confianza. En esta zona cualquier tipo de acceso anómalo que haya en la red hay que considerarlo como acceso hostil. </p>
                           <img src="../recursos/img/cursos/ifct0109/mf048816a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Ubicación de los sistemas IDS/IPS." title="Ubicación de los sistemas IDS/IPS.">
                       </div>
                   </div>
               </ul>
           </li>
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 2. IMPLANTACIÓN Y PUESTA EN PRODUCCIÓN DE SISTEMAS IDS/IPS
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3121" role="button">Análisis previo de los servicios, protocolos, zonas y equipos que utiliza la organización para sus procesos de negocio..</a>
                   <div class="collapse" id="U3121">
                       <div class="card card-body text-info">
                           <p class="text-justify">Los sistemas de detección y prevención de intrusiones (IDS/IPS) cada vez resultan más imprescindibles para cualquier empresa que trabaje con alguna infraestructura de red.</p>
                           <p class="text-justify">Es necesario que las organizaciones realicen previamente un estudio de sus infraestructuras, servicios, equipos, zonas y protocolos, entre otros muchos elementos, para que la implantación del sistema IDS/IPS y de las demás medidas de seguridad se realicen de un modo correcto y efectivo.</p>
                           <p class="text-justify">La implementación de los sistemas IDS/IPS dependen en mayor parte de los recursos y políticas de la organización y debe realizarse escalonadamente para que el proceso de aprendizaje de los administradores sea profundo y basado en la experiencia que vaya adquiriendo a medida que se completa la implementación.</p>
                           <p class="text-justify"><strong>Delante del cortafuegos o firewall.</strong></p>
                           <p class="text-justify">La colocación de los sistemas NIDPS delante del cortafuegos externo permite una monitorización de los ataques (tanto en tipo de ataque como en número de ataques) contra la infraestructura de una organización y detecta principalmente aquellos ataques que van dirigidos contra el firewall de la red.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048822a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Delante del cortafuegos." title="Delante del cortafuegos.">
                           <p class="text-justify"><strong>Detrás del cortafuegos o firewall.</strong></p>
                           <p class="text-justify">El sistema NIDPS se sitúa entre la red externa y la red interna en una zona llamada DMZ (zona desmilitarizada).</p>
                           <p class="text-justify">Esta localización permite comprobar la totalidad de los ataques que se producen en la red de la organización, tanto exitosos como no exitosos.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048822b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Detrás del cortafuegos." title="Detrás del cortafuegos.">
                           <p class="text-justify"><strong>Combinación de los dos anteriores.</strong></p>
                           <p class="text-justify">Una opción muy válida que contrarresta las desventajas de la ubicación del sistema de detección y prevención de intrusiones antes o después del cortafuegos es la combinación de ambas: situar sistemas antes y después del cortafuegos.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048822c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Delante y detrás del cortafuegos." title="Delante y detrás del cortafuegos.">
                           <p class="text-justify"><strong>Combinación firewall/NIDPS.</strong></p>
                           <p class="text-justify">Cuando la organización no dispone de máquinas suficientes para que haya una de ellas destinada exclusivamente a la detección y prevención de intrusiones, una buena alternativa es utilizar un equipo que funcione como cortafuegos y NIDPS a la vez.</p>
                           <p class="text-justify">Con esta opción se monitoriza todo el tráfico de la red con las ventajas y desventajas que ello implica, pero se reduce el gasto al ser necesaria una inversión menor por un solo equipo</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048822d.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Equipo utilizado como cortafuegos y NDIS." title="Equipo utilizado como cortafuegos y NDIS.">
                           <p class="text-justify"><strong>Ubicación en las redes principales de la organización.</strong></p>
                           <p class="text-justify">La ubicación en las redes generales de la organización monitoriza una cantidad más elevada de tráfico, lo que aumenta las posibilidades de encontrar posibles ataques.</p>
                           <p class="text-justify">Además, también permite detectar aquellos ataques que se producen dentro de la misma red interna de la organización, normalmente ocasionada por empleados y otro personal interno.</p>
                           <p class="text-justify"><strong>Ubicación en las redes críticas de la organización.</strong></p>
                           <p class="text-justify">En numerosas ocasiones la información más valiosa de una organización no se almacena en sus redes generales, sino que utilizan otras subredes separadas para aumentar su nivel de seguridad y ser tratados de un modo acorde con su valor.</p>
                           <p class="text-justify">La ubicación de los IDS/IPS en estas redes permite la detección y prevención de los ataques realizados específicamente contra los datos críticos y añaden un nivel de seguridad adicional a los mismos, minimizando aún más los posibles riesgos de ataques.</p>
                           <p class="text-justify"><strong>Sistemas de detección y prevención de intrusiones en equipos (hosts) o HIDPS.</strong></p>
                           <p class="text-justify">Los sistemas de detección y prevención de intrusiones basados en hosts son los que residen en el mismo equipo que monitorizan y solo se preocupan de proteger a dicho equipo sin necesitad de monitorizar todo el tráfico de la red de una organización.</p>
                           <p class="text-justify">Aunque implican un mejor rendimiento del sistema, estos tipos de sistema combaten las intrusiones una vez que el equipo ya está en peligro, lo que el riesgo es bastante mayor.</p>
                           <p class="text-justify">Los IDPS basados en hosts monitorizan con más profundidad los datos del equipo (que puede ser un servidor, ordenador o, incluso, alguna aplicación específica) que los IDPS basados en red como, el tráfico inalámbrico, el tráfico de red.</p>
                           <p class="text-justify"><strong>IDS/IPS en ambientes virtuales.</strong></p>
                           <p class="text-justify">La utilización de ambientes virtuales (información en "la nube") es cada vez mayor debido a sus numerosas ventajas:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Hay un ahorro de energía al ser necesaria una infraestructura menor en la organización para almacenar datos.</li>
                               <li class="text-justify">Suponen un coste reducido de mantenimiento.</li>
                           </ul>
                           <p class="text-justify">El nivel de seguridad en este tipo de sistemas es bastante elevado al estar las estructuras físicas situadas fuera de la organización. Además, al utilizar soluciones de detección y prevención de ataques facilitadas por proveedores que ofrecen servicio a muchas otras organizaciones, la base de datos de posibles vulnerabilidades y ataques es mucho mayor y hay más posibilidad de detección y reacción.</p>
                           <p class="text-justify"><strong>IDS/IPS inalámbricos o wireless IDS/IPS.</strong></p>
                           <p class="text-justify">Este tipo de sistemas analizan los protocolos inalámbricos para detectar las actividades sospechosas.</p>
                           <p class="text-justify">Su funcionamiento es igual a los IDPS basados en red, con servidor, consola y base de datos y permite la monitorización del tráfico de red que circula por la red inalámbrica de la organización.</p>
                           <p class="text-justify">Como desventaja principal cabe señalar que los análisis de estos sistemas se limitan a un solo canal, por lo que si la organización utiliza varios canales inalámbricos no podrán realizarse análisis de todos los canales simultáneamente.</p>
                           <p class="text-justify"><strong>Decisiones de la organización para ubicar un sistema de detección y prevención de intrusiones.</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Análisis de los procesos de negocio e identificación de la información valiosa en cada uno de los procesos.</li>
                               <li class="text-justify">Análisis de los protocolos de red utilizados para transferir datos entre los equipos de la organización y al exterior.</li>
                               <li class="text-justify">Análisis de los protocolos y políticas de la organización para ser coherentes con su política de seguridad y su política de costes en el momento de implantar el sistema IDS/IPS apropiado.</li>
                               <li class="text-justify">Análisis de las distintas zonas que forman parte de la organización y la ubicación de sus equipos y servidores para ver qué ubicación del IDS/IPS puede ser más conveniente según sus características.</li>
                               <li class="text-justify">Análisis de los servicios que ofrece la organización para averiguar cuáles de ellos necesitan un nivel de seguridad especial debido a la tipología de información con la que trabajan.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3122" role="button">Definición de políticas de corte de intentos de intrusión en los IDS/IPS.</a>
                   <div class="collapse" id="U3122">
                       <div class="card card-body text-info">
                           <p class="text-justify">Antes de comentar las distintas políticas de corte de intentos de intrusión en los IDS/IPS es fundamental conocer los diversos tipos de análisis que realizan estos sistemas para entender sus diferentes modos de funcionamiento.</p>
                           <p class="text-justify">Hay dos tipos fundamentales de análisis:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Detección de usos indebidos (misuse): los IDS/IPS utilizan una base de datos para encontrar usos indebidos mediante la comparación de las firmas de la base de datos con la información recogida previamente.</li>
                               <li class="text-justify">Detección de anomalías: en este caso no se utiliza una base de datos como elemento de comparación, sino que se emplean técnicas estadísticas para definir y aproximar los patrones que se corresponden con un comportamiento normal.</li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048823a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipos de análisis de detección de intrusiones." title="Tipos de análisis de detección de intrusiones.">
                           <p class="text-justify">Otra manera de distinguir los tipos de análisis de los sistemas de detección y prevención de intrusiones es teniendo en cuenta el tiempo de realización de los análisis, distinguiendo entre:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Análisis por lotes (batch mode): el análisis de los datos para detectar intrusiones se realiza cada cierto intervalo de tiempo definido. Al finalizar cada período de tiempo el sistema realiza el análisis de los datos recibidos en ese período. Tiene como inconveniente principal que las posibles alarmas de las intrusiones sucedidas no se hacen en tiempo real, sino que se originan después de haberse producido las intrusiones.
                               <li class="text-justify">Análisis en tiempo real: en este tipo de análisis se examinan los datos conforme se van recibiendo a tiempo real o con un retardo mínimo de tiempo. Son más utiliza
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048823b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Análisis de los datos obtenidos por los IDS/IPS-" title="Análisis de los datos obtenidos por los IDS/IPS-">
                           <p class="text-justify">Otra manera de distinguir los tipos de análisis de los sistemas de detección y prevención de intrusiones es teniendo en cuenta el tiempo de realización de los análisis, distinguiendo entre:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Análisis por lotes (batch mode): el análisis de los datos para detectar intrusiones se realiza cada cierto intervalo de tiempo definido. Al finalizar cada período de tiempo el sistema realiza el análisis de los datos recibidos en ese período. Tiene como inconveniente principal que las posibles alarmas de las intrusiones sucedidas no se hacen en tiempo real, sino que se originan después de haberse producido las intrusiones.
                               <li class="text-justify">Análisis en tiempo real: en este tipo de análisis se examinan los datos conforme se van recibiendo a tiempo real o con un retardo mínimo de tiempo. Son más utiliza
                           </ul>
                           <p class="text-justify">Ante estos tipos de análisis las organizaciones pueden definir cuándo quieren que se realice la detección y qué tipo de detección se quiere implementar.</p>
                           <p class="text-justify">El siguiente paso consiste en definir las políticas de actuación del sistema IDS/IPS cuando se detecta algún intento de intrusión. </p>
                           <p class="text-justify">De este modo se puede distinguir entre dos líneas actuación en cuanto a políticas de seguridad:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Política prohibitiva: política en la que se prohíbe todo lo que no se ha definido como permitido expresamente.</li>
                               <li class="text-justify">Política permisiva: esta política es todo lo contrario. En la política permisiva se define todo lo que se va a prohibir y todo lo demás se considera permitido.</li>
                           </ul>
                           <p class="text-justify">Lo más habitual en las organizaciones en cuanto a políticas de seguridad es utilizar políticas permisivas, ya que las prohibitivas son demasiado restrictivas y pueden ocasionar bloqueos de acciones rutinarias o básicas que se pueden haber pasado por alto en la definición de las permisiones.</p>
                           <p class="text-justify"><strong>Políticas de corte de intrusiones en sistemas IDS/IPS</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify"><strong>Políticas de respuesta pasiva</strong>
                                   <p class="text-justify">Análisis por lotes (batch mode): el análisis de los datos para detectar intrusiones se realiza cada cierto intervalo de tiempo definido. Al finalizar cada período de tiempo el sistema realiza el análisis de los datos recibidos en ese período. Tiene como inconveniente principal que las posibles alarmas de las intrusiones sucedidas no se hacen en tiempo real, sino que se originan después de haberse producido las intrusiones.</p>
                               </li>
                               <li class="text-justify"><strong>Políticas de respuesta activa</strong>ç
                                   <p class="text-justify">El sistema de detección y prevención cuando detecta una intrusión, además de generar una alarma y remitirla al responsable, modifica el entorno para evitar que la intrusión tenga éxito.</p>
                               </li>
                           </ul>
                           <img src="../recursos/img/cursos/ifct0109/mf048823c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Políticas de corte de intrusiones." title="Políticas de corte de intrusiones.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3123" role="button">Análisis de los eventos registrados por el IDS/IPS para determinar falsos positivos y caracterizarlos en las políticas de corte del IDS/IPS.</a>
                   <div class="collapse" id="U3123">
                       <div class="card card-body text-info">
                           <img src="../recursos/img/cursos/ifct0109/mf048824a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Posibilidad de detección de ataques." title="Posibilidad de detección de ataques.">
                           <p class="text-justify">Ante estas posibilidades el objetivo que debe establecerse en un IDS/IPS es minimizar el número de errores (falsos positivos y falsos negativos) en la detección y maximizar el número de aciertos (verdaderos positivos y verdaderos negativos) por varios motivos: </p>
                           <ul class="pl-3">
                               <li class="text-justify">Un elevado nivel de falsos positivos y negativos puede difuminar los motivos por los que se implantó el IDS/IPS, obteniendo bajos niveles de efectividad del sistema.</li>
                               <li class="text-justify">Los falsos positivos ocupan tiempo y recursos cuando el IDS/IPS genera alarmas cuando no debe.</li>
                               <li class="text-justify">La no detección de ataques (falsos negativos) puede tener graves consecuencias en la información de la organización.</li>
                           </ul>
                           <p class="text-justify">La relación entre la reducción de la sensibilidad del sistema para emitir alertas y el incremento de la cantidad de paquetes inspeccionados:</p>
                           <ul class="pl-3">
                               <li class="text-justify">A mayor sensibilidad del sistema, mayor posibilidad de detección de falsos positivos y menor aparición de falsos negativos.</li>
                               <li class="text-justify">A menor sensibilidad, menor detección de falsos positivos y mayor aparición de falsos negativos.</li>
                               <li class="text-justify">A mayor cantidad de paquetes inspeccionados, mayor posibilidad de detectar falsos positivos y menor aparición de falsos negativos.</li>
                               <li class="text-justify">A menor cantidad de paquetes inspeccionados, menor posibilidad de detección de falsos positivos y mayor aparición de falsos negativos.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Causas más frecuentes de falsos positivos:</strong></p>
                           <ul class="pl-3">
                               <li class="text-justify">Actividad del sistema de supervisión de red</li>
                               <li class="text-justify">Escaneo de vulnerabilidad y escáneres de puertos de red</li>
                               <li class="text-justify">Actividad del usuario</li>
                               <li class="text-justify">Comportamientos similares a troyanos o gusanos</li>
                               <li class="text-justify">Cadenas largas de registro web</li>
                               <li class="text-justify">Actividad de autenticación de base de datos</li>
                           </ul>
                           <p class="text-justify">Hay dos metodologías de libre configuración que se utilizan para evaluar y realizar test de los distintos elementos de seguridad de una organización, entre ellos los sistemas IDS/IPS:</p>
                           <ul class="pl-3">
                               <li class="text-justify"><strong>Metodología OSSTM</strong> (Open Source Security Testing Methodology): la metodología de testeo de seguridad de código abierto ha sido elaborada por el Instituto para la Seguridad y Código Abierto (ISECOM) y ofrece una metodología de evaluación de sistemas de seguridad, sobretodo de cortafuegos e IDS/IPS.</li>
                               <li class="text-justify"><strong>Metodología OSEC</strong> (Open Security Evaluation Criteria): el Criterio de Evaluación de Código Abierto es similar al OSSTM pero está concentrado fundamentalmente en estandarizar productos de seguridad relativos a los NIDS y a los cortafuegos.</li>
                           </ul>
                           <p class="text-justify">Herramientas de libre distribución capaces de generar elevadas cantidades de falsos ataques que pueden facilitar a la organización la configuración de los sistemas IDS/IPS</p>
                           <ul class="pl-3">
                               <li class="text-justify"><strong>IDSWakeup:</strong> genera falsos ataques desde direcciones IP que pueden ser tanto aleatorias como específicas para comprobar si el sistema IDS/IPS los detecta correctamente.</li>
                               <li class="text-justify"><strong>Sneeze:</strong> también es un generador de falsos positivos, en este caso diseñado específicamente para Snort.</li>
                               <li class="text-justify"><strong>Stick:</strong>herramienta que se utiliza para evaluar la capacidad del sistema para detectar intrusiones y testear las reglas del IDS y del cortafuegos.</li>
                               <li class="text-justify"><strong>Ftester:</strong> esta herramienta envía ataques de red a equipos remotos.</li>
                           </ul>
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3124" role="button">Relación de los registros de auditoría del IDS/IPS necesarios para monitorizar y supervisar su correcto funcionamiento y los eventos de intentos de intrusión.</a>
                   <div class="collapse" id="U3124">
                       <div class="card card-body text-info">
                           <p class="text-justify">Los registros de auditoría son aquellos en los que se registran las acciones realizadas por los usuarios en un sistema. Estos registros son vitales para las organizaciones, ya que cuando se produce un incidente de seguridad facilitan información sobre el usuario que haya podido cometer la infracción.</p>
                           <p class="text-justify">El registro de auditoría no solo contiene información de los usuarios, sino que también contiene información importante sobre las infracciones de seguridad sucedidas en el sistema.</p>
                           <p class="text-justify">Para la definición de la política de auditoría se plantean una serie de recomendaciones:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Determinar los equipos y dispositivos en los que se va a configurar la auditoría.</li>
                               <li class="text-justify">Determinar los eventos que se quieren auditar (por ejemplo los accesos a archivos y carpetas, el inicio de sesión de los usuarios, el encendido del servidor, etc.).</li>
                               <li class="text-justify">Determinar si se quiere auditar el éxito del evento, el fallo del evento o ambos casos.</li>
                               <li class="text-justify">Determinar la necesidad real de auditar las tendencias de uso del sistema.</li>
                               <li class="text-justify">Determinar la periodicidad de las revisiones de los registros de seguridad.</li>
                           </ul>
                           <p class="text-justify">Un registro de auditoría puede clasificarse en una de las categorías mostradas en la tabla siguiente:</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048825a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Clasificación de categoría del registro." title="Clasificación de categoría del registro.">
                           <p class="text-justify">Sea de la categoría que sea, un evento en el registro de auditoría contiene información sobre:</p>
                           <ul class="pl-3">
                               <li class="text-justify">La acción realizada.</li>
                               <li class="text-justify">El usuario que ha realizado la acción.</li>
                               <li class="text-justify">El éxito o fracaso del evento.</li>
                               <li class="text-justify">Cuándo se ha producido el evento.</li>
                               <li class="text-justify">Información adicional como, por ejemplo, el sistema desde el que se realiza la acción.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Relación de los registros de auditoría del IDS/IPS necesarios para un correcto control de intrusiones</strong></p>
                           <p class="text-justify"><strong>Sucesos de inicio de sesión en cuenta</strong></p>
                           <p class="text-justify">Es necesario configurar los IDS/IPS para que auditen los intentos de inicio de sesión de cuenta, tanto exitosos como no exitosos.</p>
                           <p class="text-justify">Las auditorías de inicios de sesión con éxito sirven sobre todo para poder comprobar qué ha realizado cada usuario y descubrir quién es el responsable de cualquier incidente de seguridad en el momento de su investigación: se puede comprobar quién accedió, cómo consiguió acceder y en qué equipo accedió.</p>
                           <p class="text-justify">Las auditorías de inicios de sesión sin éxito también resultan muy útiles para detectar intentos de intrusiones y prevenir futuros intentos.</p>
                           <p class="text-justify"><strong>Administración de cuentas</strong></p>
                           <p class="text-justify">En estos registros de auditoría se reflejan los distintos sucesos de administración de cuentas de un equipo como, por ejemplo:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Cuando se crea, modifica o se elimina alguna cuenta de usuario.</li>
                               <li class="text-justify">Cuando se modifica alguna contraseña.</li>
                               <li class="text-justify">Cuando se activa o desactiva alguna cuenta de usuario.</li>
                               <li class="text-justify">Cuando se modifica el nombre de alguna cuenta de usuario.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Sucesos de inicio de sesión</strong></p>
                           <p class="text-justify">Los registros de auditoría de sucesos de inicio de sesión facilitan información de los eventos generados cada vez que un usuario inicia o cierra una sesión, además de cada vez que se realiza alguna conexión de red al equipo.</p>
                           <p class="text-justify"><strong>Acceso a objetos</strong></p>
                           <p class="text-justify">Los registros de auditoría de acceso a objetos contienen información sobre los accesos de un usuario a cualquier tipo de objeto del sistema (como carpetas, archivos, dispositivos, etc.) que esté incluido en una lista de control predefinida por el administrador.</p>
                           <p class="text-justify">Del mismo modo que en las anteriores, la organización también puede decidir si registrar los accesos con éxito, los intentos fracasados, ambos o, directamente, no auditar este tipo de sucesos.</p>
                           <p class="text-justify"><strong>Uso de privilegios</strong></p>
                           <p class="text-justify">Los registros de auditoría sobre el uso de privilegios contienen información de cada evento sucedido cuando un usuario realiza alguna acción bajo unos privilegios que le han sido otorgados previamente.</p>
                           <p class="text-justify">Del mismo modo que en las anteriores, la organización también puede decidir si registrar los accesos con éxito, los intentos fracasados, ambos o, directamente, no auditar este tipo de sucesos.</p>
                           <ul class="pl-3">
                               <li class="text-justify">Cuando un administrador realiza copias de seguridad de algún archivo o directorio.</li>
                               <li class="text-justify">Cuando un usuario sin privilegios intenta realizar alguna acción para la que no tiene permiso (se genera un registro de error).</li>
                               <li class="text-justify">Cuando el usuario con privilegios de administrador restaura algún archivo o directorio.</li>
                           </ul><br/>
                           <p class="text-justify"><strong>Seguimiento de procesos</strong></p>
                           <p class="text-justify">En cuanto al seguimiento de procesos, sus registros de auditoría contienen información detallada de los sucesos ocurridos en el sistema como pueden ser: la activación de alguna aplicación, el acceso o salida a un proceso, etc.</p>
                           <p class="text-justify">No se recomienda la activación de este tipo de registro de auditoría, ya que debido al elevado número de procesos que acontecen en el sistema puede ser difícil localizar la información de los sucesos más valiosos.</p>
                           <p class="text-justify"><strong>Sucesos del sistema</strong></p>
                           <p class="text-justify">Los registros de auditoría de los sucesos del sistema facilitan información sobre el reinicio o cierre de un equipo por parte de un usuario o generado por algún suceso que haya afectado a la seguridad del sistema.</p>
                           <p class="text-justify">Es de gran utilidad activar la generación de este tipo de registros, ya que los sucesos que acontecen son pocos y la información que se puede obtener puede ser de gran valor: siempre es útil conocer por qué se ha reiniciado o apagado el equipo para detectar qué fue lo que falló y poder evitarlo en otras ocasiones.</p>
                           <img src="../recursos/img/cursos/ifct0109/mf048825b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Registro de auditoría." title="Registro de auditoría.">
                       </div>
                   </div>
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3125" role="button">Establecimiento de los niveles requeridos de actualización, monitorización y pruebas del IDS/IPS.</a>
                   <div class="collapse" id="U3125">
                       <div class="card card-body text-info">
                           <p class="text-justify">Los sistemas de detección y prevención de intrusiones siguen una serie de fases en sus procesos:</p>
                           <ul class="pl-3">
                               <li class="text-justify"><strong>Prevención:</strong> en un momento inicial, los IDS/IPS intentan evitar los ataques mediante mecanismos que dificulten el acceso de intrusos.</li>
                               <li class="text-justify"><strong>Monitorización de la intrusión:</strong> si, a pesar de todas las medidas preventivas ha habido una intrusión o actividad sospechosa, los IDS/ IPS detectan esta actividad y monitorizan el tráfico de datos sospechoso para que pueda ser analizado y revisado por el administrador del sistema.</li>
                               <li class="text-justify"><strong>Detección de la intrusión:</strong> cuando se ha analizado el tráfico, si el IDS/IPS determina que la actividad sospechosa es efectivamente una intrusión, el sistema genera una alarma para notificar esta intrusión al administrador.</li>
                               <li class="text-justify"><strong>Respuesta</strong>: determinada la intrusión como ataque los sistemas IDS/IPS pueden adoptar una serie de medidas que intenten bloquear el acceso del atacante al sistema.</li>
                           </ul><br/>
                           <!-- <img src="../recursos/img/cursos/ifct0109/mf048826c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title=""> -->
                           <p class="text-justify">Aunque la determinación de los niveles adecuados de monitorización, prueba y actualización de los sistemas de detección y prevención de intrusiones dependa de las directrices y requerimientos de cada organización, para medir la eficiencia del sistema IDS/IPS y establecer estos niveles se deben tener en cuenta las características siguientes:</p>
                           <ul class="pl-3">
                               <li class="text-justify"><strong>Precisión:</strong> Capacidad para detectar ataques y diferenciarlos del tráfico normal de una red.
                                   <img src="../recursos/img/cursos/ifct0109/mf048826a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title="">
                               </li>
                               <li class="text-justify"><strong>Rendimiento:</strong> Cantidad de eventos que el sistema puede analizar.</li>
                               <li class="text-justify"><strong>Completitud:</strong> Cuando detecta todos los tipos de ataques sucedidos en el equipo.
                                   <div class="row justify-content-center">
                                       <div class="col-8">
                                       </div>
                                       <img src="../recursos/img/cursos/ifct0109/mf048826b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title="">
                                   </div>
                               </li>
                               <li class="text-justify"><strong>Tolerancia a fallos:</strong> Capacidad para resistir a los ataques y a los fallos del sistema.</li>
                               <li class="text-justify"><strong>Tiempo de respuesta:</strong> Tiempo que tarda en reaccionar cuando se produce un ataque.</li>
                           </ul>
                       </div>
                   </div>
               </ul>
           </li>
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 3. CONTROL DE CÓDIGO MALICIOSO.
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3131" role="button">Sistemas de detección y contención de código malicioso.</a>
                   <div class="collapse" id="U3131">
                       <div class="card card-body text-info">
                           <p class="text-justify"><strong>Códigos maliciosos: conceptos básicos y tipos.</strong></p>
                           <p class="text-justify">La comunidad de intrusos cada vez es más amplia y la decisión de a quién atacar puede tomar varias vertientes:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Pueden decidir atacar a objetivos claros y específicamente definidos (un usuario u organización determinada, etc.).
                               <li class="text-justify">Pueden decidir atacar a un público objetivo definido atendiendo al grupo de interés. Por ejemplo, ataques a los usuarios de un sistema operativo específico, ataques a las bases de datos de un tipo de empresa definido, etc.
                               <li class="text-justify">Pueden decidir sus objetivos aleatoriamente sin ningún racionamiento previo.
                           </ul>
                           <p class="text-justify">Del mismo modo las motivaciones de los intrusos también pueden ser de lo más diversas:</p>
                           <ul class="pl-3">
                               <li class="text-justify">Motivaciones lucrativas: robar y vender posteriormente información de valor, entrar en bases de datos para conseguir direcciones de correo electrónico al que mandar publicidad o SPAM, etc.</li>
                               <li class="text-justify">Entretenimiento: los intrusos pueden moverse por mera diversión o para aumentar su ego. También es frecuente que los intrusos utilicen códigos maliciosos para propagar elementos pornográficos.</li>
                               <li class="text-justify">Motivaciones ideológicas: los intrusos pueden fundamentar sus ataques también para realizar apología del terrorismo o para difundir sus ideologías políticas, éticas o religiosas.</li>
                           </ul>
                           <p class="text-justify">Los códigos maliciosos o malware son una serie de programas informáticos que han sido diseñados con fines destructivos para conseguir ciertos objetivos como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Destruir datos, eliminando archivos o, incluso, formateando discos.</li>
                      <li class="text-justify">Robar información y claves.</li>
                      <li class="text-justify">Extenderse a través de un equipo a los demás equipos que forman una red o por internet.</li>
                      <li class="text-justify">Comprometer sistemas operativos.</li>
                      <li class="text-justify">Mostrar publicidad invasiva.</li>
                  </ul>
                  <p class="text-justify">Aun así, los distintos tipos de malware tienen ciertos aspectos comunes:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Suelen ser componentes de software diseñados con un fin específico.</li>
                      <li class="text-justify">En su funcionamiento interfieren con la operación normal del sistema al que atacan.</li>
                      <li class="text-justify">Es muy habitual que se instalen y ejecuten sin que haya un consentimiento expreso del usuario del equipo.</li>
                      <li class="text-justify">Para lograr sus objetivos necesitan un sistema de cómputo anfitrión, un equipo en el que instalarse y propagarse.</li>
                  </ul>
                  <p class="text-justify">Atendiendo a características como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Forma.</li>
                      <li class="text-justify">Origen.</li>
                      <li class="text-justify">Daños provocados.</li>
                      <li class="text-justify">Finalidad para la que se diseñan.</li>
                  </ul>
                  <p class="text-justify">Atendiendo a estas características se distingue entre varios tipos de malware:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Virus.
                      <li class="text-justify">Troyanos.
                      <li class="text-justify">Cookies.
                      <li class="text-justify">Keyloggers.
                      <li class="text-justify">Spyware.
                      <li class="text-justify">Worms o gusanos.
                  </ul><br/>
                  <p><strong>Virus</strong></p>
                  <p class="text-justify">Son programas informáticos diseñados con la finalidad de producir algún tipo de daño en el equipo, trabajando sin que el usuario se dé cuenta.</p>
                  <p class="text-justify">Para funcionar necesitan un anfitrión o huésped en el que alojarse, que puede ser de lo más variado: desde archivos ejecutables hasta discos de arranque o unidades de memoria del equipo.</p>
                  <p class="text-justify">Cuando se ejecuta un virus se producen dos acciones:</p>
                  <ul class="pl-3">
                      <li class="text-justify">El daño al dispositivo.</li>
                      <li class="text-justify">La propagación del virus infectando otros dispositivos o archivos.</li>
                  </ul><br/>
                  <p><strong>Troyanos</strong></p>
                  <p class="text-justify">Son aquellos programas con funcionalidades ocultas diseñadas para fines maliciosos contra el usuario que los tiene instalados.</p>
                  <p class="text-justify">A diferencia de los virus, los troyanos no tienen capacidad de multiplicarse. Además suelen formar parte del código fuente del programa que se va a instalar, mientras que el virus se limita a suplantar el programa originario o a añadirse.</p>
                  <p class="text-justify">Su funcionamiento se divide en tres fases diferenciadas:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Entrada al dispositivo o sistema a infectar.</li>
                      <li class="text-justify">Consolidación de la posición del código malicioso.</li>
                      <li class="text-justify">Comunicación del sistema atacado con el equipo del atacante.</li>
                  </ul><br/>
                  <p><strong>Cookies</strong></p>
                  <p class="text-justify">Se diseñaron con la finalidad de que los sitios web pudiesen detectar y almacenar las preferencias del usuario en su navegación por dicha web para ofrecer servicios más acordes en sus próximas visitas</p>
                  <p class="text-justify">La introducción en el sistema se produce cada vez que el usuario visita una página web que tenga habilitada la utilización de cookies y su funcionamiento se establece en varias fases:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Las cookies se envían desde el servidor al navegador del usuario y se almacenan en él.</li>
                      <li class="text-justify">El navegador envía las cookies al servidor con el fin de identificar al usuario/diente y conocer su comportamiento de navegación.</li>
                  </ul><br/>
                  <p><strong>Keyloggers</strong></p>
                  <p class="text-justify">Son aplicaciones diseñadas con el fin de registrar el comportamiento de un usuario en un ordenador de modo remoto.</p>
                  <p class="text-justify">En general están diseñados para pasar inadvertidos por parte del usuario y su funcionamiento básico consiste en:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Configuración de los distintos aspectos del keylogger atendiendo a la información que se pretende obtener.</li>
                      <li class="text-justify">Instalación del keylogger en el equipo víctima.</li>
                      <li class="text-justify">Recuperación de la información obtenida y almacenada por el keylogger.</li>
                  </ul>
                  <p class="text-justify">Actualmente, numerosos virus, gusanos y troyanos incorporan keyloggers en su código para obtener información de la víctima, además de las funcionalidades propias que tienen asignadas.</p>
                  <p><strong>Spyware</strong></p>
                  <p class="text-justify">Se define como la aplicación diseñada para controlar el comportamiento de los usuarios con finalidades lucrativas.</p>
                  <p class="text-justify">A pesar de la gran variedad de spyware su funcionamiento sigue el siguiente procedimient:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Entrada al sistema del usuario.</li>
                      <li class="text-justify">Recolección de la información local del sistema del usuario.</li>
                      <li class="text-justify">Monitorización del sistema del usuario víctima.</li>
                      <li class="text-justify">Registro de la actividad del usuario.</li>
                      <li class="text-justify">Actuación de las empresas de marketing y publicidad atendiendo a la información obtenida del usuario.</li>
                  </ul>
                  <p class="text-justify">Aunque su procedimiento de funcionamiento sea similar, son varias e importantes las diferencias que existen entre los distintos tipos de spyware, distinguiendo entre:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Adware: aplicaciones que incluyen ventanas de publicidad en sus interfaces de usuario.</li>
                      <li class="text-justify">Scumware: personalizan la publicidad que se muestra en el navegador del usuario.</li>
                      <li class="text-justify">Browser Hijackers: modifican características del explorador, actuando sobre el registro del sistema operativo.</li>
                      <li class="text-justify">Server Side Spyware: spyware que se implementa en los servidores de los atacantes en lugar de instalarse en el equipo del usuario víctima.</li>
                  </ul><br/>
                  <p><strong>Gusanos o worms</strong></p>
                  <p class="text-justify">Son programas autocontenidos diseñados con el fin de propagarse de un sistema a otro para degradar el rendimiento de sus recursos.</p>
                  <p class="text-justify">Su misión es simplemente autoreplicarse, no pretenden causar daño directo aunque se pueden adjuntar a otros tipos de códigos maliciosos como complemento.</p>
                  <p><strong>Sistemas de detección y contención de código malicioso</strong></p>
                  <p><strong>IDS/IPS</strong></p>
                  <p class="text-justify">A modo de recopilación y resumen, estos sistemas sirven para detectar e informar a los administradores sobre los intentos de intrusión que se producen en un equipo, red o dispositivo.</p>
                  <p><strong>Antivirus</strong></p>
                  <p class="text-justify">Los antivirus son programas que tienen como función detectar y eliminar tanto virus como otros tipos de código malicioso.</p>
                  <ul class="pl-3">
                      <li class="text-justify">Revisan el correo electrónico.</li>
                      <li class="text-justify">Revisan el historial de páginas web visitadas para detectar código malicioso oculto.</li>
                      <li class="text-justify">Revisan los sistemas para detectar si hay algún troyano o gusano.</li>
                      <li class="text-justify">Realizan tareas propias de los sistemas IDS/IPS y de los cortafuegos.</li>
                  </ul><br/>
                  <p><strong>Firewall o cortafuegos</strong></p>
                  <p class="text-justify">Son elementos tanto de software como de hardware que se utilizan en un equipo o en una red de equipos como medida de control de las comunicaciones establecidas, permitiendo o denegando el acceso a los sistemas según las políticas de seguridad determinadas por la organización.</p>
                  <p class="text-justify">Así, un cortafuegos configurado correctamente funciona eficazmente como barrera para evitar el acceso de código malicioso a los sistemas de la organización, aunque por sí solo no es suficiente: es necesaria la instalación de medidas de protección adicionales como antivirus o sistemas IDS/IPS.</p>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3132" role="button">Relación de los distintos tipos de herramientas de control de código malicioso en función de la topología de la instalación y las vías de infección a controlar.</a>
          <div class="collapse" id="U3132">
              <div class="card card-body text-info">
                  <p><strong>ESET NOD 32</strong></p>
                  <p class="text-justify pl-3">ESET NOD32 es una herramienta de protección ante amenazas desarrollada por la empresa ESET y se puede utilizar en varios sistemas operativos: Windows, Mac, Linux e, incluso, Android.</p>
                  <p><strong>Virus total</strong></p>
                  <p class="text-justify pl-3">Es un servicio gratuito cuya funcionalidad es analizar archivos y URL sospechosas para detectar cualquier tipo de malware.</p>
                  <p><strong>Filelnsight</strong></p>
                  <p class="text-justify pl-3">Desarrollada por la empresa McAfee Labs y se trata de una herramienta de análisis remoto (vía web también) de archivos para detectar virus y otros tipos de malware</p>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3133" role="button">Criterios de seguridad para la configuración de las herramientas de protección frente a código malicioso.</a>
          <div class="collapse" id="U3133">
              <div class="card card-body text-info">
                  <p><strong>Indicios</strong></p>
                  <p class="text-justify">Para detectar estos ataques se enumeran a continuación una serie de síntomas que pueden ser indicios de que hay una infección en el equipo o en el sistema:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Las aplicaciones cargan lentamente o tardan en cargar (bajo rendimiento).</li>
                      <li class="text-justify">Aparecen archivos desconocidos en el disco duro.</li>
                      <li class="text-justify">Desaparecen del disco duro archivos necesarios para ejecutar alguna aplicación habitual.</li>
                      <li class="text-justify">La pantalla no se comporta de una forma habitual.</li>
                      <li class="text-justify">Hay cambios repentinos en el tamaño de los archivos respecto a su tamaño original.</li>
                      <li class="text-justify">El sistema operativo se resetea inesperadamente.</li>
                      <li class="text-justify">El sistema operativo muestra algún mensaje de error o no se inicia correctamente.</li>
                      <li class="text-justify">Se cargan aplicaciones desconocidas o extrañas al iniciar el sistema operativo.</li>
                      <li class="text-justify">Las aplicaciones tienen comportamientos erróneos o inesperados.</li>
                  </ul><br/>
                  <p><strong>Criterios de seguridad preventivos</strong></p>
                  <ul class="pl-3">
                      <li class="text-justify">Mantener [os sistemas operativos, las herramientas y las aplicaciones actualizadas.</li>
                      <li class="text-justify">Implementar software antivirus en equipos, archivos y servidores de correo.</li>
                      <li class="text-justify">Implementar software de administración de contenidos.</li>
                      <li class="text-justify">Configurar las herramientas de contención de código malicioso atendiendo a las políticas de filtrado de contenidos definida en la organización.</li>
                      <li class="text-justify">Implementar herramientas de búsqueda y actualización de vulnerabilidades.</li>
                      <li class="text-justify">Implementar un sistema de alarmas en la herramienta de contención de código malicioso.</li>
                      <li class="text-justify">Utilizar claves y contraseñas de alta seguridad.</li>
                      <li class="text-justify">Realización periódica de copias de seguridad del sistema operativo.</li>
                      <li class="text-justify">Navegar por páginas web seguras y de confianza, configurando las herramientas y navegadores para que bloqueen temporalmente las webs potencialmente peligrosas.</li>
                      <li class="text-justify">Implementar un cortafuegos.</li>
                      <li class="text-justify">Configurar el navegador para que rechacen los diferentes tipos de cookies.</li>
                  </ul>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3134" role="button">Determinación de los requerimientos y técnicas de actualización de las herramientas de protección frente a código malicioso.</a>
          <div class="collapse" id="U3134">
              <div class="card card-body text-info">
                  <p class="text-justify">Atendiendo a la ya mencionada norma ISO 27001, el responsable de seguridad debe definir los controles de detección y prevención para la protección contra el software malicioso, además debe desarrollar procedimientos adecuados de concienciación de usuarios en cuanto a seguridad, controles de acceso al sistema y administración de cambios.</p>
                  <p class="text-justify">Los controles a establecer deben comprender una serie de acciones.</p>
                  <p class="text-justify">Siguiendo las recomendaciones y controles descritos en la ISO 27001 se establecen una serie de requerimientos y técnicas de actualización para las herramientas de control y contención de código malicioso.</p>
                  <p class="text-justify">Los controles a establecer deben comprender una serie de acciones.</p>
                  <ul class="pl-3">
                      <li class="text-justify">Prohibir la instalación y uso de software no autorizado por la organización.</li>
                      <li class="text-justify">Redactar procedimientos para evitar los riesgos relacionados con la obtención de archivos y software externos desde o a través de redes, o por cualquier otro medio, señalando las medidas de protección a tomar.</li>
                      <li class="text-justify">Instalar y actualizar periódicamente el software de detección y reparación de virus, examinando los equipos y medios informáticos.</li>
                      <li class="text-justify">Mantener los sistemas al día con las últimas actualizaciones de seguridad disponibles. Se recomienda realizar previamente pruebas y comprobaciones en un entorno de prueba si las actualizaciones provocan cambios críticos en el sistema.</li>
                      <li class="text-justify">Revisar periódicamente el contenido del software y los datos de los equipos que sustentan procesos críticos de la organización.</li>
                      <li class="text-justify">Verificar previamente la presencia de virus en archivos de medios electrónicos de origen incierto o en archivos recibidos a través de redes poco confiables.</li>
                      <li class="text-justify">Redactar procedimientos para verificar la información relativa a software malicioso, garantizando que los mensajes de alerta sean exactos e informativos.</li>
                      <li class="text-justify">Concienciar al personal sobre el problema de los falsos antivirus, de las cadenas falsas y de cómo proceder frente a los mismos.</li>
                      <li class="text-justify">Redactar normas de protección y habilitación de puertos de conexión de dispositivos móviles y sus derechos de acceso.</li>
                  </ul><br/>
                  <p class="text-justify">Siguiendo las recomendaciones y controles descritos en la ISO 27001 se establecen una serie de requerimientos y técnicas de actualización para las herramientas de control y contención de código malicioso:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Protección antivirus continua, 24 horas al día los 7 días de la semana.</li>
                      <li class="text-justify">Herramientas de actualización automática.</li>
                      <li class="text-justify">Herramientas de actualización que no provoquen interrupciones en el trabajo.</li>
                      <li class="text-justify">Aparición rápida y continua de actualizaciones.</li>
                      <li class="text-justify">Generación periódica de informes y estadísticas. Gestión avanzada de informes.</li>
                      <li class="text-justify">Protección para todo tipo de servidores (Linux, Windows, etc.).</li>
                      <li class="text-justify">Métodos de escaneo y análisis de posibles códigos maliciosos que permitan la detección de virus anómalos y desconocidos.</li>
                      <li class="text-justify">Comprobación y seguridad remota del estado de los equipos y dispositivos.</li>
                      <li class="text-justify">Realización de copias de seguridad y discos de arranque periódicos.</li>
                      <li class="text-justify">Detección de virus en tiempo real.</li>
                      <li class="text-justify">Velocidad de escaneo para una rápida detección y eliminación de cualquier código malicioso.</li>
                      <li class="text-justify">Utilización de distintos métodos de escaneo, detección y eliminación de códigos maliciosos para incrementar el grado de protección de los equipos.</li>
                      <li class="text-justify">Facilidad de manejo y gestión de las herramientas de protección y contención.</li>
                      <li class="text-justify">Administración centralizada en la que se puedan recibir reportes de virus, actualizaciones y personalizar configuraciones según el tipo de usuario.</li>
                  </ul><br/>
                  <p class="text-justify">Herramientas de protección frente a código malicioso</p>
                  <ul class="pl-3">
                      <li class="text-justify">Sistemas de fichero.
                          <p>Pueden ser tanto discos duros, pendrives, CD como cualquier otro dispositivo que soporte sistemas de archivo.</p>
                      </li>
                      <ul class="pl-3">
                          <li class="text-justify">Los programas antivirus deben estar instalados tanto en clientes como en servidores.</li>
                          <li class="text-justify">Deben realizar una gestión eficiente del escritorio,</li> controlando y realizando un inventario del software instalado en el dispositivo.
                          <li class="text-justify">Debe gestionar las vulnerabilidades del sistema, debiendo identificarlas y parchearlas de modo automático.</li>
                          <li class="text-justify">Deben ofrecer una protección especial a códigos maliciosos adware y spyware.</li>
                      </ul><br/>
                      <li class="text-justify">Red local.
                          <p class="text-justify">En una gran mayoría de veces la transmisión de códigos maliciosos se produce internamente a través de la red local en lugar de provenir del exterior.</li>
                      <li class="text-justify">Correo electrónico.
                          <p class="text-justify">Las herramientas deben contener programas antivirus especializados para controlar y detectar códigos maliciosos en los correos electrónicos que circulan por los equipos y dispositivos de la organización.</p>
                      </li>
                      <li class="text-justify">Navegadores.
                          <p class="text-justify">Las herramientas de protección ante códigos maliciosos deben proteger la actividad y acciones de los navegadores instalados tanto en los servidores como en los equipos cliente de la red de la organización.</p>
                      </li>
                  </ul>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3135" role="button">Relación de los registros de auditoría de las herramientas de protección frente a código maliciosos necesarios para monitorizar y supervisar su correcto funcionamiento y los eventos de seguridad.</a>
          <div class="collapse" id="U3135">
              <div class="card card-body text-info">
                  <p class="text-justify">La auditoría de seguridad se concibe para analizar y evaluar la planificación, el control, la eficacia y la seguridad de la estructura informática de una organización mediante una serie de pruebas realizadas por personal independiente. Estas auditorías responden a preguntas como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">¿Es adecuada la seguridad de los equipos y dispositivos?</li>
                      <li class="text-justify">¿La información está almacenada en medios fiables?</li>
                      <li class="text-justify">¿Existe la posibilidad de que haya pérdidas de información irreversibles?</li>
                      <li class="text-justify">¿La seguridad de los sistemas permite la consecución de los objetivos y las metas de la organización?</li>
                      <li class="text-justify">¿La infraestructura de seguridad es eficiente? ¿Se aprovechan los recursos de un modo adecuado?</li>
                  </ul><br/>
                  <p class="text-justify">Requisitos y funcionalidades de las auditorías de seguridad</p>
                  <ul class="pl-3">
                      <li class="text-justify">Análisis de los costes que supondría una ruptura de la seguridad de la información.</li>
                      <li class="text-justify">Informe de la situación actual de los distintos equipos y dispositivos (tanto locales como remotos) y el nivel de seguridad establecido en cada uno de ellos.</li>
                      <li class="text-justify">Auditorías de seguridad de los distintos sistemas de información de la organización.</li>
                      <li class="text-justify">Pruebas y test de intrusiones.</li>
                      <li class="text-justify">Búsqueda de vulnerabilidades en los sistemas.</li>
                      <li class="text-justify">Prevención de ataques mediante antivirus y antispyware, entre otras herramientas de prevención.</li>
                      <li class="text-justify">Control de acceso a los sistemas y a las aplicaciones instaladas en ellos.</li>
                      <li class="text-justify">Análisis de registros de seguridad (o logs) para detectar los ataques producidos.</li>
                  </ul><br/>
                  <p><strong>Los archivos de registro o archivos de log</strong></p>
                  <p class="text-justify">En cuanto a la seguridad del sistema, los archivos de registro permiten descubrir posibles ataques a los sistemas, detectando información sobre problemas o incidencias de seguridad producidas en ellos.</p>
                  <p class="text-justify">Con los registros de auditoría se genera información sobre las actividades que los administradores y usuarios realizan sobre un sistema y si se emplean las herramientas y procedimientos adecuados se puede conseguir información sobre violaciones de la seguridad del sistema y otros datos que servirán para comprobar el grado de cumplimiento de las políticas de seguridad definidas en una organización.</p>
                  <p><strong>Los archivos de registro o archivos de log</strong></p>
                  <p class="text-justify">Los logs, como mínimo, deben registrar información sobre los siguientes eventos:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Intentos de acceso al sistema o a alguna aplicación, tanto exitosos como fallidos.</li>
                      <li class="text-justify">Identidad del usuario.</li>
                      <li class="text-justify">Fecha del intento de acceso.</li>
                      <li class="text-justify">Tiempo de cada intento de entrada.</li>
                      <li class="text-justify">Fecha y tiempo de salida del sistema o de la aplicación.</li>
                      <li class="text-justify">Dispositivos utilizados en la conexión.</li>
                      <li class="text-justify">Las actividades y funciones ejecutadas por el usuario que ha accedido.</li>
                  </ul>
                  <p class="text-justify">Con esta información facilitada los registros de auditoría sirven para ayudar a los responsables de seguridad a tener controlada una serie de aspectos:</p>
                  <p class="text-justify"><strong>Control de acceso:</strong> a través de los logs se pueden conocer las acciones que los usuarios autorizados realizan y así poder evaluar y tomar decisiones sobre la asignación de autorizaciones y permisos de usuario.</p>
                  <p class="text-justify"><strong>Reconstrucción de eventos:</strong> con una revisión de los logs se puede realizar un seguimiento de las últimas operaciones llevadas a cabo en el sistema y detectar cómo, cuándo y por qué se ha generado cualquier incidencia de seguridad.</p>
                  <p class="text-justify"><strong>Detección de intrusos:</strong> los registros de auditoría se pueden diseñar e implementar de modo que sean un apoyo a la detección de intrusiones. Configurados correctamente pueden llegar a detectar intrusiones a tiempo real o después de haberse producido el incidente de seguridad.</p>
                  <p class="text-justify">Las herramientas de análisis de logs de auditorías pueden ejecutar los análisis de dos modos:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Realizando comprobaciones periódicas definidas previamente por el administrador. Estos análisis tienen como ventaja que solo se ejecutan una vez cada cierto tiempo, lo que implica que la utilización de recursos es escasa y por cortos periodos de tiempo. Sin embargo es necesario configurar las herramientas para que analicen solo los registros nuevos para evitar pérdidas de eficiencia.</li>
                      <li class="text-justify">Realizando comprobaciones constantes mediante la lectura continua de los archivos de log. En este caso los archivos de log se van analizando conforme se van generando: consume más recursos pero la información se obtiene de un modo inmediato habiendo más posibilidades de evitar ataques.</li>
                  </ul><br/>
                  <p class="text-justify"><strong>Herramientas de auditoría de seguridad y archivos de registro</strong></p>
                  <p class="text-justify"><strong>Nessus Security Scanner</strong></p>
                  <p class="text-justify">Es una herramienta de auditoría de seguridad que trabaja en modo remoto.</p>
                  <p class="text-justify">Evalúa los módulos de seguridad con la finalidad de detectar vulnerabilidades que pueden repararse.</p>
                  <p class="text-justify">Además es compatible con varios sistemas operativos como Microsoft Windows, Linux, BSD, Solaris y otros sistemas Unix. Realiza numerosas pruebas de seguridad remotas, genera reportes de información y propone soluciones ante los problemas de seguridad detectados</p>
                  <p class="text-justify"><strong>Ethereal</strong></p>
                  <p class="text-justify">Ethereal es un analizador de protocolos de red que permite analizar el tráfico de una red o de registros de auditoría almacenados en el disco.</p>
                  <p class="text-justify">Desde 2006 es conocido como Wireshark y dispone de las características siguientes:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Captura los paquetes directamente desde una interfaz de red.</li>
                      <li class="text-justify">Permite obtener información detallada del protocolo utilizado en el paquete de datos capturado.</li>
                      <li class="text-justify">Puede importar y/o exportar los registros capturados desde/hacia otras aplicaciones.</li>
                      <li class="text-justify">Busca los registros de información que cumplan con un criterio establecido previamente por el usuario.</li>
                      <li class="text-justify">Ofrece informes y estadísticas.</li>
                  </ul>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3136" role="button">Establecimiento de la monitorización y pruebas de las herramientas de protección frente a código malicioso.</a>
          <div class="collapse" id="U3136">
              <div class="card card-body text-info">
                  <p class="text-justify">La monitorización de las herramientas de protección frente a código malicioso y las pruebas que deben realizar se definen en el procedimiento establecido ante la aparición de algún código malicioso. Este procedimiento está formado por una serie de pasos:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Contención de los daños provocados por el malware. Si no hubiese soluciones conocidas de contención se recomienda:
                          <ul class="pl-3">
                              <li class="text-justify">Identificar el software malicioso y extraer una muestra.</li>
                              <li class="text-justify">Monitorizar las comunicaciones y los cambios que pueda ocasionar el código malicioso.</li>
                              <li class="text-justify">Realizar pruebas para comparar los distintos comportamientos en un entorno controlado antes y después de la ejecución del software malicioso.</li>
                              <li class="text-justify">Realizar pruebas que verifiquen el grado de confiabilidad, integridad y validez de la información facilitada por la herramienta de protección.</li>
                              <li class="text-justify">Realizar pruebas que verifiquen el grado de efectividad de las her.ramientas de protección y contención de código malicioso utilizado.
                              </li>
                          </ul>
                      <li class="text-justify">Evaluación de los daños producidos por el código malicioso. Una vez contenidos los daños hay que analizarlos y evaluarlos en varios aspectos como: el coste de la pérdida de los datos eliminados, la pérdida de productividad causada, el grado de propagación del código malicioso tanto a nivel interno como a nivel externo, etc.</li>
                      <li class="text-justify">Reparación y revisión de la infección. En el momento de la evaluación de los daños causados por el código malicioso debe adoptarse una serie de medidas con el fin de restaurar el sistema y volver al estado anterior en el menor tiempo posible. Estas medidas consisten en la reversión de las alteraciones producidas.</li>
                  </ul>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3137" role="button">Análisis de los programas maliciosos mediante desensambladores y entornos de ejecución controlada.</a>
          <div class="collapse" id="U3137">
              <div class="card card-body text-info">
                  <p class="text-justify">Esta técnica se refiere a la creación de entornos simulados de ejecución controlada. Reciben los paquetes que van llegando del malware y van generando respuestas falsas acordes con lo esperado por el código malicioso.</p>
                  <p class="text-justify">Con esto se consigue un conocimiento más profundo y exacto del comportamiento del código malicioso que intenta acceder al equipo evitando que haya una conexión directa entre el equipo y el servidor malicioso. Las herramientas con funcionalidades de simular entornos de ejecución controlada son numerosas pero merece la pena destacar dos de ellas:</p>
                  <ul class="pl-3">
                      <li class="text-justify"><strong>Fakenet:</strong> herramienta que se puede ejecutar desde la línea de comando de Windows y permite obtener información sobre los sitios web visitados por el malware. No dispone de interfaz gráfica.</li>
                      <li class="text-justify"><strong>INetSim:</strong> herramienta que genera un entorno virtual encargado de recibir el tráfico de red de la máquina infectada, registrar las peticiones que recibe y enviar respuestas simuladas de protocolos de red.</li>
                  </ul><br/>
                  <p><strong>Desemsambladores</strong></p>
                  <ul class="pl-3">
                      <li class="text-justify">Otra alternativa para conocer el comportamiento de los códigos maliciosos son los desensambladores. Aunque tienen otras utilidades, se encargan de desensamblar archivos de códigos maliciosos para identificarlos y entender sus actuaciones.</li>
                      <li class="text-justify">Los usuarios están utilizando técnicas de ingeniería inversa: pretenden obtener información del código malicioso que ha intentado acceder al sistema para conocer cómo está diseñado, cómo funciona y cómo actúa para crear herramientas que puedan detectarlos y contenerlos con más facilidad.</li>
                      <li class="text-justify">Un buen desensamblador (que se puede utilizar tanto en Windows, Linux o Mac) es el llamado IDA Pro. La alternativa gratuita es el software Rasta Ring 0 Debugger:</li>
                  </ul>
              </div>
          </div>
      </ul>
  </li>
  <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 4. RESPUESTA ANTE INCIDENTES DE SEGURIDAD.
      <ul class="list-group">
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3141" role="button">Procedimiento de recolección de información relacionada con incidentes de seguridad.</a>
          <div class="collapse" id="U3141">
              <div class="card card-body text-info">
                  <p class="text-justify">Como ya se sabe, un incidente de seguridad es un evento o conjunto de eventos que pueden provocar la interrupción de los servicios ofrecidos por un sistema informático e incluso la pérdida de información y de activos valiosos para la organización.</p>
                  <p class="text-justify">La gestión de incidentes de seguridad es la parte de la seguridad de la información encargada de asignar los recursos adecuados y necesarios a la prevención, detección y corrección de incidentes que afecten a la seguridad de la información.</p>
                  <p class="text-justify">Numerosas organizaciones aprenden a responder a incidentes y a amenazas de seguridad una vez ya sufrido el ataque, lo que implica un coste mayor de recuperación del sistema. Por ello es necesario concienciar a las organizaciones de las ventajas de establecer políticas de seguridad ante incidentes.</p>
                  <p class="text-justify">La seguridad de la información consiste en el establecimiento de una serie de medidas por parte de las organizaciones que permitan proteger la información manteniendo sus propiedades de confidencialidad, disponibilidad e integridad. Estas medidas se clasifican en:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Medidas preventivas: establecimiento de contraseñas, políticas de seguridad,cortafuegos, procedimientos de copias de respaldo, concienciación del personal, etc.</li>
                      <li class="text-justify">Medidas correctivas: procedimientos de restauración del sistema, establecimiento deesquemas de tolerancia a fallos, etc.</li>
                      <li class="text-justify">Medidas de detección: revisiones de seguridad, análisis de registros de auditoría,análisis de logs, etc.</li>
                  </ul><br/>
                  <p class="text-justify">Los beneficios de aplicar una gestión de incidentes son incalculables, pero se destacan los siguientes:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Respuesta sistemática a los incidentes de seguridad.</li>
                      <li class="text-justify">Agiliza y facilita el proceso de recuperación de equipos y sistemas ante el acontecimiento de incidentes de seguridad. Además reduce la pérdida de datos y el tiempo de interrupción de servicios.</li>
                      <li class="text-justify">A través del aprendizaje se previenen los incidentes reiterados.</li>
                      <li class="text-justify">Mejora continua de la seguridad de la organización y del proceso de gestión y tratamiento de incidentes.</li>
                      <li class="text-justify">Facilita la gestión de los aspectos legales referentes a los incidentes de seguridad.</li>
                  </ul></br>
                  <p class="text-justify"><strong>Equipo de respuesta de incidentes de seguridad informática ( CSIRT)</strong></p>
                  <p class="text-justify">La rapidez con la que se detecte, reconozca, analice y responda a una amenaza minimiza los daños y disminuye considerablemente los costes ligados a la recuperación de la información.</p>
                  <p class="text-justify">Toda organización, sea del tamaño que sea, debe designar a uno o varios responsables que se encarguen de ejecutar con detalle las tareas asignadas en el plan de respuesta a incidentes definido en cada organización.</p>
                  <p class="text-justify">En ocasiones, las empresas tienen un tamaño tan reducido que les es imposible designar a responsables de la gestión de incidentes. Ante estas situaciones es conveniente contratar a especialistas externos que realicen estas gestiones y mantengan sus datos protegidos ante todo tipo de amenazas.</p>
                  <p class="text-justify">El Plan de Gestión de Incidentes está elaborado por el responsable de seguridad informática de la empresa y consiste en un conjunto de tareas y procedimientos encaminados a la correcta y adecuada gestión de incidentes de seguridad junto con las personas designadas para llevar a cabo todas y cada una de estas tareas.</p>
                  <p class="text-justify">El equipo de respuesta ante incidentes de seguridad, además de la confección del Plan de Gestión de Incidentes, deberá encargarse de establecer:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Una política general de gestión de incidentes en la que se deberá basar el plan de gestión.</li>
                      <li class="text-justify">Los procedimientos a seguir para la gestión de incidentes basados en la política e incluidos en el plan.</li>
                      <li class="text-justify">Relaciones entre el equipo de respuesta a incidentes y otros grupos de la organización internos y externos.</li>
                      <li class="text-justify">Las guías en las que se defina el procedimiento a seguir en la comunicación de la organización con terceros en caso de ocurrencia de incidentes.</li>
                      <li class="text-justify">Organización de los responsables de la gestión de respuesta a incidentes y definición y asignación de funciones.</li>
                  </ul>
                  <img src="../recursos/img/cursos/ifct0109/mf048842a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Procedimiento de gestión de incidentes." title="Procedimiento de gestión de incidentes.">
                  <p class="text-justify"><strong>Preparación y prevención de incidentes</strong></p>
                  <p class="text-justify">La fase de prevención y preparación de incidentes consiste en definir una serie de medidas que eviten lo máximo posible la entrada de intrusiones al sistema y minimicen la producción de incidentes en la organización.</p>
                  <ul class="pl-3">
                      <li class="text-justify">Definición de las políticas, normas y procedimientos para la gestión de incidentes.</li>
                      <li class="text-justify">Definición de los criterios de clasificación y priorización de incidentes.</li>
                      <li class="text-justify">Preparación del equipo de respuesta a incidentes de seguridad.</li>
                      <li class="text-justify">Entrenamiento del personal de la organización.</li>
                      <li class="text-justify">Diseño y formalización un documento en el que aparezca reflejada la topología y arquitectura de la red.</li>
                      <li class="text-justify">Elaboración de un documento en el que se plasmen las configuraciones de los equipos de la organización.</li>
                      <li class="text-justify">Creación de los patrones de las redes y [os sistemas.</li>
                      <li class="text-justify">Activación de los logs en las aplicaciones y sistemas de la organización.</li>
                      <li class="text-justify">Centralización y definición de una política de gestión y almacenamiento de los logs.</li>
                      <li class="text-justify">Sincronización de los relojes de todos los equipos.</li>
                      <li class="text-justify">Definición e implementación de sistemas de realización de copias de respaldo de datos.</li>
                  </ul><br/>
                  <p class="text-justify"><strong>Según el tipo de incidente y los efectos negativos producidos o potenciales:</strong> teniendo en cuenta los efectos negativos que produce o puede producir un incidente se puede elaborar una tabla de categorización de incidentes como la que se muestra:</p>
                  <img src="../recursos/img/cursos/ifct0109/mf048842b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tabla control incidentes" title="Tabla control incidentes">
                  <p class="text-justify"><strong>Según la envergadura de los daños producidos:</strong> teniendo en cuenta la envergadura de los daños producidos y del nivel de criticidad de los recursos que han sido afectados por la incidencia, también se puede elaborar una tabla de clasificación de incidentes como la siguiente:</p>
                  <img src="../recursos/img/cursos/ifct0109/mf048842c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tabla control de recursos." title="Tabla control de recursos.">
                  <img src="../recursos/img/cursos/ifct0109/mf048842d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Tabla control de recursos." title="Tabla control de recursos.">
                  <img src="../recursos/img/cursos/ifct0109/mf048842e.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Fórmula de criticidad del incidente" title="Fórmula de criticidad del incidente">
                  <p class="text-justify">De este modo, según la criticidad del incidente, dentro de las medidas de preparación será necesario establecer también el tiempo máximo en el que se deben tratar los incidentes desde el momento de su detección, siendo los siguientes:</p>
                  <img src="../recursos/img/cursos/ifct0109/mf048842f.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tabla de criticidad del incidente" title="Tabla de criticidad del incidente">
                  <p class="text-justify">En cuanto a las medidas de prevención de incidentes también hay que destacar algunas de ellas:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Análisis de riesgos periódicos.</li>
                      <li class="text-justify">Establecimiento de auditorías periódicas.</li>
                      <li class="text-justify">Gestión eficaz de las actualizaciones.</li>
                      <li class="text-justify">Establecimiento de un sistema de seguridad en la red.</li>
                      <li class="text-justify">Incremento en todo lo posible de la seguridad de los equipos de la organización.</li>
                      <li class="text-justify">Establecimientos de sistemas de detección y prevención de códigos maliciosos.</li>
                      <li class="text-justify">Concienciación del personal de la organización.</li>
                  </ul><br/>
                  <p class="text-justify"><strong>Detección y notificación</strong></p>
                  <p class="text-justify">En la fase de detección de un incidente hay que tener clara la diferencia entre advertencias e indicadores:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Una advertencia es una señal que indica al usuario que es posible que haya ocurrido un accidente.</li>
                      <li class="text-justify">Un indicador, sin embargo, señala que el incidente ya se ha producido o que se está produciendo en ese mismo momento.</li>
                  </ul>
                  <img src="../recursos/img/cursos/ifct0109/mf048842g.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Fase de detección." title="Fase de detección.">
                  <p class="text-justify">Se consideran advertencias, por ejemplo, las amenazas de ataques web o las alertas que emiten los IDS al realizar un escaneo de la red. En cuanto a los indicadores se pueden encontrar ejemplos como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Detección de un virus por el antivirus.</li>
                      <li class="text-justify">Ejecución lenta de las aplicaciones del equipo.</li>
                      <li class="text-justify">Ralentización del acceso a webs de internet.</li>
                      <li class="text-justify">Bloqueo de una cuenta de usuario por exceso de intentos fallidos de acceso.</li>
                      <li class="text-justify">Cambios de configuraciones de aplicaciones sin permiso del usuario.
                      </li>
                  </ul><br/>
                  <p class="text-justify">Para llevar a cabo la fase de detección de incidentes las organizaciones pueden implantar herramientas y técnicas de detección de incidentes como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Sistemas IDS/IPS.</li>
                      <li class="text-justify">Antivirus.</li>
                      <li class="text-justify">Sistemas de monitorización de la red.</li>
                      <li class="text-justify">Análisis de los registros de auditoría o logs.</li>
                      <li class="text-justify">Aplicaciones de control de integridad de los archivos y datos.
                      </li>
                  </ul>
                  <img src="../recursos/img/cursos/ifct0109/mf048842h.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tabla de características del incidente." title="Tabla de características del incidente.">
                  <p class="text-justify"><strong>Análisis preliminar</strong></p>
                  <p class="text-justify">La fase de análisis preliminar del posible incidente consiste en realizar un análisis de los indicadores y advertencias disponibles para detectar si realmente es un incidente de seguridad o es una falsa alarma. En caso de ser un incidente real se debe seguir un proceso de recolección de información para analizar una serie de ítems como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">El alcance del incidente: redes, equipos, sistemas y aplicaciones afectados.</li>
                      <li class="text-justify">Qué ha sido lo que ha originado el incidente.</li>
                      <li class="text-justify">Impacto del incidente en las actividades, servicios y procesos de la organización.</li>
                      <li class="text-justify">Cómo ha ocurrido o está ocurriendo el incidente en cuanto a métodos y herramientas utilizadas, vulnerabilidades detectadas y explotadas, etc.</li>
                  </ul><br/>
                  <p class="text-justify">En cuanto al alcance del incidente se puede determinar teniendo en cuenta aspectos como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Cantidad de equipos comprometidos.</li>
                      <li class="text-justify">Cantidad de redes afectadas.</li>
                      <li class="text-justify">Nivel de privilegio alcanzado por la intrusión.</li>
                      <li class="text-justify">Nivel de riesgo de las aplicaciones críticas.</li>
                      <li class="text-justify">Nivel de riesgo general de los equipos y de la red.</li>
                      <li class="text-justify">Nivel de conocimiento de la vulnerabilidad explotada por la intrusión. Análisis de los demás equipos para comprobar si tienen la misma vulnerabilidad.</li>
                  </ul>
                  <img src="../recursos/img/cursos/ifct0109/mf048842i.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Procedimiento de detecciñon de incidentes." title="Procedimiento de detecciñon de incidentes.">
                  <p class="text-justify">Cuando se ha clasificado el incidente como real, se pueden utilizar varios métodos y formas de recolectar información para obtener un conocimiento más profundo y detallado del incidente y de su alcance:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Indagación a los administradores del sistema.</li>
                      <li class="text-justify">Indagación al personal que forma parte de la organización.</li>
                      <li class="text-justify">Revisión de los reportes de los sistemas y herramientas IDS.</li>
                      <li class="text-justify">Revisión de los logs referentes a las comunicaciones y sistemas.</li>
                      <li class="text-justify">Revisión de la topología y arquitectura de la red.</li>
                      <li class="text-justify">Revisión de las listas de acceso a la red.</li>
                  </ul><br/>
                  <p class="text-justify">La utilización de estas herramientas y técnicas será muy útil para obtener información vital del incidente que permitirá el establecimiento de medidas de contención y erradicación del mismo, además de la propuesta de medidas correctivas para impedir futuras ocurrencias de este incidente. Algunos de los datos recolectados a través del proceso de recogida de información pueden ser:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Información de los sucesos anormales en los sistemas y en las actividades rutinarias.</li>
                      <li class="text-justify">Detección de actividades anormales.</li>
                      <li class="text-justify">Conocimiento de los detalles concretos del incidente.</li>
                      <li class="text-justify">Detección de cambios no autorizados.</li>
                  </ul>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3142" role="button">Exposición de las distintas técnicas y herramientas utilizadas para el análisis y correlación de información y eventos de seguridad.</a>
          <div class="collapse" id="U3142">
              <div class="card card-body text-info">
                  <p class="text-justify">Una gestión adecuada facilitará al responsable de seguridad conocer con detalle todo lo que está ocurriendo (en términos de seguridad) en los equipos de la red a tiempo real, reducirá el tiempo de reacción y de toma de medidas correctivas ante incidentes y, como consecuencia, disminuirá considerablemente los daños que pueda ocasionar algún incidente de seguridad.</p>
                  <p class="text-justify">Las herramientas de gestión de información y eventos de seguridad son un conjunto de productos cuya función es la gestión de eventos o incidentes de seguridad en cualquiera de sus fases, tanto antes, como durante o después de la ocurrencia del incidente. Se encargan de recoger, cotejar y elaborar informes con los datos facilitados por los logs.</p>
                  <p class="text-justify">Un sistema de análisis y correlación de eventos adecuado debe permitir:</p>
                  <ul class="pl-3">
                      <li class="text-justify">La determinación en tiempo real de la probabilidad de materializarse una amenaza en un momento concreto.</li>
                      <li class="text-justify">La detección a tiempo real del inicio de un ataque, emitiendo alertas con la menor demora posible.</li>
                      <li class="text-justify">El conocimiento del éxito o fracaso de un ataque y de su impacto real sobre el sistema.</li>
                      <li class="text-justify">La determinación de los patrones de materialización de las amenazas para ser utilizados en la implantación de nuevas medidas de seguridad.</li>
                  </ul><br/>
                  <p class="text-justify">Entre las técnicas y herramientas utilizadas para el análisis y correlación de información y eventos de seguridad se distinguen tres tipos de sistemas:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Sistemas de gestión de la seguridad de la información o SIM (Security Information Management).</li>
                      <li class="text-justify">Sistemas de gestión de eventos o SEM (Security Event Management).</li>
                      <li class="text-justify">Sistemas de gestión de información y eventos de seguridad o SIEM (Security Information and Event Management).</li>
                  </ul>
                  <img src="../recursos/img/cursos/ifct0109/mf048843a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Esquema de herramientas de análisis." title="Esquema de herramientas de análisis.">
                  <p class="text-justify"><strong>Sistemas de gestión de la seguridad de la información (SIM)</strong></p>
                  <p class="text-justify">Las herramientas de gestión de seguridad de la información o SIM son sistemas de supervisión cuyas metas principales son la recogida, correlación y el análisis de la información de seguridad en diferido, no a tiempo real. Estas funciones las llevan a cabo mediante la creación de una base de datos indexada basada en los datos obtenidos en las supervisiones realizadas a los equipos y dispositivos.</p>
                  <p class="text-justify">Las herramientas de gestión de seguridad de la información se utilizan sobre todo para:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Administrar la infraestructura de la red y de los activos de la organización.</li>
                                 <li class="text-justify">Centralizar y monitorizar los componentes de la infraestructura de seguridad de la organización.</li>
          <li class="text-justify">Analizar con mayor facilidad la información suministrada por los componentes de seguridad.</li>
          <li class="text-justify">Predecir y pronosticar amenazas.</li>
          <li class="text-justify">Correlacionar eventos de seguridad.</li>
          <li class="text-justify">Detectar, identificar y emitir reportes de eventos de seguridad.</li>
          <li class="text-justify">Realizar un análisis forense de los eventos.</li>
          <li class="text-justify">Establecer políticas de seguridad más adecuadas.</li>
      </ul><br/>


      <p class="text-justify"><strong>Sistemas de gestión de eventos (SEM)</strong></p>

      <p class="text-justify">Los sistemas de gestión de eventos o sistemas SEM se encargan de monitorizar y gestionar los eventos prácticamente a tiempo real. Su función principal consiste en recoger los datos de los eventos de seguridad producidos en los distintos equipos, sistemas y dispositivos con el fin de realizar análisis a tiempo real y responder en el menor tiempo posible.</p>

                             <p class="text-justify">En definitiva, las herramientas SEM permiten la visualización, monitorización y gestión de eventos que detecten las situaciones anómalas y automaticen las respuestas y medidas correctivas en caso de aparición de incidentes de seguridad.</p>

                             <p class="text-justify">Los beneficios principales que aportan estas herramientas de gestión de eventos son:</p>

                             <ul class="pl-3">
                                 <li class="text-justify">Acceso a los registros a través de una interfaz central consistente.</li>
                                 <li class="text-justify">Almacenamiento seguro de los registros, manteniendo su integridad.</li>
                                 <li class="text-justify">Representación gráfica de la actividad para una elaboración de informes más sencilla, visual y práctica.</li>
                                 <li class="text-justify">Activación de alertas programadas.</li>
                                 <li class="text-justify">Gestión de eventos de varios sistemas operativos.</li>
                                 <li class="text-justify">Recuperación de registros ante bloqueos del sistema o eliminación inesperada de registros.</li>
                             </ul><br/>

                             <p class="text-justify"><strong>Sistemas de información y eventos de seguridad (SIEM)</strong></p>

                             <p class="text-justify">Las herramientas de información y eventos de seguridad o herramientas SIEM son una mezcla de las herramientas SIM y SEM, englobando las funcionalidades de ambas: recogen los logs de los equipos, sistemas y dispositivos monitorizados, los almacenan a largo plazo y, además, agregan y correlacionan en tiempo real la información recibida, todo ello para lograr una detección y establecimiento de medidas más eficaz, minimizando los daños ocasionados.</p>

                             <p class="text-justify">Son herramientas que permiten una gestión de incidentes de seguridad más global y entre sus funciones principales destacan:</p>
                             <ul class="pl-3">
                                 <li class="text-justify">Detección de anomalías y amenazas.</li>
                                 <li class="text-justify">Análisis de todas las fases del incidente.</li>
                                 <li class="text-justify">Captura total de los paquetes de la red.</li>
                                 <li class="text-justify">Conocimiento del comportamiento del usuario y su contexto.</li>
                                 <li class="text-justify">Cumplimiento de nuevas normativas.</li>
                                 <li class="text-justify">Administración más efectiva del riesgo gracias a información obtenida como:</li>
                                 <ul class="pl-3">
                                     <li class="text-justify">Topología y arquitectura de la red.</li>
                                     <li class="text-justify">Vulnerabilidades detectadas.</li>
                                     <li class="text-justify">Parámetros de configuración del equipo y de los dispositivos.</li>
                                     <li class="text-justify">Análisis de fallos.</li>
                                     <li class="text-justify">Priorización de vulnerabilidades.</li>
                                     <li class="text-justify">Correlación avanzada y profunda de los eventos.</li>
                                 </ul>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3143" role="button">Proceso de verificación de la intrusión.</a>
            <div class="collapse" id="U3143">
                <div class="card card-body text-info">
                    <p class="text-justify">Contención, erradicación y recuperación ante incidentes de seguridad</p>
                    <p class="text-justify">La contención consiste en evitar que el incidente siga produciendo más daños, la erradicación en eliminar aquello que provocó el incidente y todo el rastro de los daños producidos y la recuperación en devolver los sistemas, dispositivos y equipos a su estado original antes de producirse el incidente.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf048844a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Fases de contención, erradicación y recuperación." title="Fases de contención, erradicación y recuperación.">
                    Elaboración del informe final del incidente
                    Cuando ya se ha eliminado el incidente y se ha podido volver a la situación original, lo siguiente que debe realizarse es el proceso de investigación del incidente y la realización de actividades posteriores (como la definición de nuevas medidas de seguridad) con la información obtenida en el proceso de investigación.
                    <img src="../recursos/img/cursos/ifct0109/mf048844b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Aspectos a reflejar en el informe." title="Aspectos a reflejar en el informe.">
                    <img src="../recursos/img/cursos/ifct0109/mf048844c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Aspectos a reflejar en el informe." title="Aspectos a reflejar en el informe.">
                    <img src="../recursos/img/cursos/ifct0109/mf048844d.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Aspectos a reflejar en el informe." title="Aspectos a reflejar en el informe.">
                    <p class="text-justify"><strong>Documentación del incidente</strong></p>
                    <p class="text-justify">Para que el proceso de aprendizaje del incidente sea más efectivo y no se olviden detalles se recomienda llevar a cabo una documentación del incidente comentando su evolución en todas las fases. ¿Qué documentar del incidente? Hay que documentar de un modo concreto y preciso los aspectos más fundamentales y que no deben olvidarse una vez solucionado el incidente. Más concretamente, la documentación del incidente de seguridad debe incluir:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Reporte del incidente en el que se debe especificar:</li>
                        <ul class="pl-3">
                            <li class="text-justify">Tipo de incidente.</li>
                            <li class="text-justify">Hechos ocurridos.</li>
                            <li class="text-justify">Daños ocasionados.</li>
                        </ul>
                        <li class="text-justify">Estado actual del incidente (fechando las distintas etapas por las que ha ido pasando el incidente).</li>
                        <li class="text-justify">Conclusiones del análisis.</li>
                        <li class="text-justify">Acciones y medidas tomadas para erradicar el incidente y restaurar los equipos afectados.</li>
                        <li class="text-justify">Evidencias obtenidas en el proceso de análisis posterior.</li>
                        <li class="text-justify">Personas involucradas, tanto a nivel interno de la empresa como a nivel externo (terceros).</li>
                        <li class="text-justify">Acciones futuras y recomendaciones para aumentar el nivel de seguridad y evitar incidencias similares en próximas ocasiones.</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3144" role="button">Naturaleza y funciones de los organismos de gestión de incidentes tipo CERT nacionales e internacionales.</a>
            <div class="collapse" id="U3144">
                <div class="card card-body text-info">
                    <p class="text-justify"><strong>Organismos CERT/CSIRT</strong></p>
                    <p class="text-justify">Para combatir más eficazmente estas amenazas a la seguridad de los sistemas informáticos se han ido creando estos últimos años distintos organismos encargados de realizar tareas de información y concienciación hacia los gobiernos, empresas y usuarios para conseguir contener amenazas y reducir los daños que pueden ocasionar.</p>
                    <p class="text-justify">Con estas motivaciones surgieron los CERT (Computer Emergency Response Team) o equipo de respuesta ante emergencias informáticas. Son centros de respuesta a incidentes de seguridad en tecnologías de información formados por un grupo de expertos encargados de diseñar medidas preventivas y reactivas ante incidentes de seguridad.</p>
                    <p class="text-justify">También surgieron los CSIRT (Computer Security Incident Response Team) o equipo de respuesta a incidentes de seguridad informática, organización encargada de recibir, revisar y responder a actividades y reportes de incid·entes de seguridad informática ya vista anteriormente.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf048845a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Servicios CERT/CSIRT." title="Servicios CERT/CSIRT.">
                    <p class="text-justify">En cuanto a funciones de estos organismos cabe destacar las siguientes:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Ayudar al público objetivo a prevenir y atenuar incidentes graves de seguridad.</li>
                        <li class="text-justify">Ayudar a proteger informaciones y datos de gran valor.</li>
                        <li class="text-justify">Coordinar centralizadamente la seguridad de la información.</li>
                        <li class="text-justify">Apoyar y asistir a los usuarios para que el proceso de recuperación ante incidentes de seguridad sea lo más leve posible.</li>
                        <li class="text-justify">Dirigir centralizadamente la respuesta ante incidentes de seguridad.</li>
                    </ul>
                    <ul class="pl-3">
                        <p class="text-justify">Para desempeñar sus funciones los CSIRT/CERT las llevan a cabo mediante:</p>
                        <li class="text-justify"> El mantenimiento de una base de datos de vulnerabilidades de seguridad para consulta, seguimiento y registro histórico.</li>
                        <li class="text-justify">El mantenimiento de una base de datos de incidentes de seguridad de las organizaciones integrantes.</li>
                        <li class="text-justify">Prov</li>isión de un servicio de asesoramiento especializado en seguridad de la información.
                        <li class="text-justify">Mantenimiento de contactos con otros CSIRT /CERT del mundo y sus organizaciones para intercambiar información.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Otros organismos de gestión de incidentes</strong></p>
                    <p class="text-justify pl-3">CERT/CC (Computer Emergency Response Team/Coordination Center)</p>
                    <p class="text-justify pl-3">Cert lnteco</p>
                    <p class="text-justify pl-3">Agencia Europea de Seguridad de las Redes de la Información</p>
                    <p class="text-justify pl-3">Forum of Incident Response and Security Teams (FIRST)</p>
                </div>
            </div>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 5. PROCESO DE NOTIFICACIÓN Y GESTIÓN DE INTENTOS DE INTRUSIÓN.
    <ul class="list-group">
        <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3151" role="button">Establecimiento de las responsabilidades en el proceso de notificación y gestión de intentos de intrusión o infecciones.</a>
        <div class="collapse" id="U3151">
            <div class="card card-body text-info">
                <p class="text-justify">Una intrusión, como ya se sabe, es un evento en el cual un usuario no autorizado intenta acceder a los equipos y/o dispositivos de una red para comprometer la integridad, confidencialidad y disponibilidad de la información poniendo en peligro su seguridad y la puesta a disposición de la misma a manos de usuarios malintencionados.</p>
                <p class="text-justify">Se recomienda seguir una serie de criterios en el momento de realizar la elección:</p>
                <ul class="pl-3">
                    <li class="text-justify"><strong>Escalabilidad:</strong> capacidad de la herramienta de adaptarse a los cambios de tráfico de la red. Es recomendable que los IDS/IPS sigan funcionando correctamente tanto a niveles mínimos de tráfico de red como en momentos de hora punta en el que el tráfico es mucho más elevado.</li>
                    <li class="text-justify"><strong>Firmas de ataque utilizadas:</strong> los IDS/IPS son de mayor calidad cuando utilizan un mayor número de firmas de ataque porque se reducen las posibilidades de obtener falsos positivos o negativos al disponer de una base de datos de ataques más amplia.</li>
                    <li class="text-justify"><strong>Capacidad de administración y gestión:</strong> cuantas más funcionalidades de autogestión y de administración tenga el IDS/IPS, más sencilla será su utilización. Por ello se recomienda buscar herramientas que tengan funciones propias de examen de logs, capacidad de archivo, gestión de alarmas, consola centralizada, etc.</li>
                    <li class="text-justify"><strong>Tipo de estructura de hardware utilizada:</strong> la topología de la red y la disposición de los equipos y cortafuegos también son unos elementos a tener en cuenta en el momento de elegir el IDS/IPS adecuado. </li>
                    <p class="text-justify">Atendiendo a la ubicación del cortafuegos puede interesar un IDS/IPS con funcionalidades distintas. Por ejemplo, en la siguiente imagen se ha decidido ubicar varios IDS antes y después del cortafuegos para aumentar el nivel de seguridad de la información:</p>
                </ul>
                <img src="../recursos/img/cursos/ifct0109/mf048852a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Red con sistema IDS implantado." title="Red con sistema IDS implantado.">
                <p class="text-justify"><strong>Responsabilidades de gestión y notificación de intrusiones</strong></p>
                <p class="text-justify">Las organizaciones deben establecer un procedimiento de gestión y notificación de intrusiones para que el tiempo de respuesta sea lo más reducido posible y los daños producidos sean los mínimos.</p>
                <p class="text-justify">De este modo las organizaciones, atendiendo a sus necesidades de protección de datos, deberán formar una estructura integrada por varias áreas que sea capaz de:</p>
                <ul class="pl-3">
                    <li class="text-justify">Detectar cualquier alteración de los servicios ofrecidos por la organización.</li>
                    <li class="text-justify">Registrar y clasificar estos incidentes.</li>
                    <li class="text-justify">Asignar al personal encargado de restaurar la situación al punto previo de la producción del incidente.</li>
                </ul>
                <img src="../recursos/img/cursos/ifct0109/mf048852b.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Procedimiento de gestión de incidentes." title="Procedimiento de gestión de incidentes.">
                <p class="text-justify"><strong>Obligaciones legales de gestión y notificación de incidentes de seguridad e intrusiones</strong></p>
                <p class="text-justify">En las medidas de seguridad básicas el procedimiento de notificación y gestión de incidencias deberá contener necesariamente un registro en el que se haga constar:</p>
                <ul class="pl-3">
                    <li class="text-justify">El tipo de incidencia.</li>
                    <li class="text-justify">El momento en el que se ha producido la incidencia.</li>
                    <li class="text-justify">La persona que realiza la notificación.</li>
                    <li class="text-justify">A quién se le comunica.</li>
                    <li class="text-justify">Los efectos que han derivado de la misma.</li>
                </ul><br/>
                <p class="text-justify">En las medidas de seguridad de nivel medio el procedimiento de gestión y notificación de incidencias deberá indicar, además de lo mencionado en las medidas de nivel básico, los procedimientos realizados de recuperación de los datos en los que deben constar:</p>
                <ul class="pl-3">
                    <li class="text-justify">La persona que ejecutó el proceso.</li>
                    <li class="text-justify">Los datos restaurados.</li>
                    <li class="text-justify">Y, en su caso, qué datos han sido necesarios grabar manualmente en el proceso de recuperación.</li>
                </ul><br/>
                <p class="text-justify">El reglamento de desarrollo de la LOPD exige además la autorización por escrito del responsable del fichero para la ejecución de los procedimientos de recuperación de los datos.</p>
                <p class="text-justify">En cuanto a las medidas de seguridad de nivel alto no se habla específicamente de procedimientos de notificación y gestión de incidencias. En este aspecto solo cabe destacar la exigencia de conservar una copia de respaldo y que los procedimientos de recuperación de los datos estén en un lugar diferente de aquel en el que se encuentren los equipos informáticos, añadiendo una mayor protección y más posibilidades de éxito para restaurar los equipos a situaciones anteriores de producirse cualquier intrusión.</p>
            </div>
        </div>
        <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3152" role="button">Categorización de los incidentes derivados de intentos de intrusión o infecciones en función de su impacto potencial.</a>
        <div class="collapse" id="U3152">
            <div class="card card-body text-info">
                <p class="text-justify">El proceso de clasificación de un incidente es necesario que contenga, por lo menos:</p>
                <ul class="pl-3">
                    <li class="text-justify">Categorización del incidente: hay que asignarle una categoría (que puede contener más subcategorías) según el tipo de incidente que sea y los responsables designados para su gestión.</li>
                    <li class="text-justify">Nivel de prioridad: según los daños causados y la urgencia del incidente se le asignará un nivel de prioridad u otro. A mayores daños y urgencia, mayor nivel de prioridad.</li>
                    <li class="text-justify">Asignación de recursos: en el caso de que el centro de servicios no pueda combatir la incidencia deberán designarse técnicos especializados y recursos específicos para su resolución.</li>
                    <li class="text-justify">Monitorización del estado del incidente y del tiempo de respuesta esperado: hay que asociar al incidente un estado (detectado, activo, resuelto, etc.) y un tiempo de respuesta y resolución atendiendo a sus niveles de prioridad y criticidad.</li>
                </ul><br/>
                <p class="text-justify"><strong>Tipos de ataques</strong></p>
                <ul class="pl-3">
                    <li class="text-justify"><strong>Ataques de interrupción:</strong> destruyen o inutilizan la información e influyen en su accesibilidad y/o disponibilidad. Son ejemplos de ataques de interrupción la destrucción de algún dispositivo o la saturación de la capacidad del procesador con el fin de dificultar la accesibilidad de los datos.</li>
                    <img src="../recursos/img/cursos/ifct0109/mf048853a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Ataques de interrupción" title="Ataques de interrupción">
                </ul>
                <li class="text-justify"><strong>Ataques de intercepción:</strong> usuarios no autorizados acceden a los datos del sistema afectando a la confidencialidad de la información. Por ejemplo, realización de copias de información no autorizadas o la obtención de contraseñas.</li>
                                                    <img src="../recursos/img/cursos/ifct0109/mf048853b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Ataques de intercepción" title="Ataques de intercepción">
            <li class="text-justify"><strong>Ataques de modificación:</strong> usuarios no autorizados modifican la información contenida en los equipos atacando a su integridad. Son ejemplos de ataques de modificación el cambio de contenidos de bases de datos, cambios en aplicaciones, cambios en datos bancarios para realizar transferencias, etc.</li>
            <img src="../recursos/img/cursos/ifct0109/mf048853c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Ataques de modificación" title="Ataques de modificación">
            <li class="text-justify"><strong>Ataques de fabricación:</strong> los intrusos en este caso falsifican la información del sistema atacando a su autenticidad. Por ejemplo, la adición de campos o registros en bases de datos y la adición de líneas de una aplicación (adición de virus, etc.).</li>
            <img src="../recursos/img/cursos/ifct0109/mf048853d.png"class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Ataques de fabricación" title="Ataques de fabricación">
            <img src="../recursos/img/cursos/ifct0109/mf048853e.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Clasificación de los ataques." title="Clasificación de los ataques.">
            <p class="text-justify">Así, los ataques de intercepción se consideran ataques pasivos al no alterar el tráfico de red, mientras que los ataques de interrupción, modificación y fabricación son ataques activos al alterar la información que se pretende transmitir.</p>
            <p class="text-justify"><strong>Categorización de los incidentes</strong></p>
            <p class="text-justify">Cuando se produce un incidente el responsable de gestionarlo debe garantizar la recuperación de la actividad normal en el mínimo tiempo posible. Por lo tanto, un factor clave para que la recuperación sea rápida y completa es la elaboración de planes de contingencia que analicen los efectos de posibles intrusiones y la definición de procedimientos que permitan mantener la integridad, confidencialidad y disponibilidad de la información y recuperar el máximo de datos perdidos posible.</p>
            <p class="text-justify">Lo que no puede faltar en un plan de contingencia es la categorización de los incidentes derivados de intentos de intrusión o infecciones según su impacto potencial. La categorización consistirá en calcular la prioridad del incidente atendiendo a su impacto y urgencia y teniendo en cuenta:</p>
            <ul class="pl-3">
                <li class="text-justify">Los costes potenciales que se producirían si no se resuelve el incidente.
                <li class="text-justify">El daño que puede causar a los distintos miembros de la organización y los costes implícitos que se pueden producir por una interrupción de la comunicación entre ellos.
                <li class="text-justify">Las implicaciones legales que puede suponer.
                </li>
            </ul>
            <img src="../recursos/img/cursos/ifct0109/mf048853f.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Niveles de impacto." title="Niveles de impacto.">
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3153" role="button">Criterios para la determinación de las evidencias objetivas en las que se soportara la gestión del incidente.</a>
    <div class="collapse" id="U3153">
        <div class="card card-body text-info">
            <p class="text-justify">La recolección de evidencias debe realizarse de un modo muy metódico para evitar borrar "huellas" del incidente que dificulten su identificación.</p>
            <p class="text-justify">Una recomendación importante es la creación de una copia de seguridad en CD o DVD como herramienta básica para la respuesta a incidentes: hay que tener en cuenta que numerosas intrusiones pueden modificar las aplicaciones y utilidades de seguridad que incluyen los sistemas operativos y al realizar la recopilación de evidencias, si ha habido modificaciones que sean difíciles de percibir, será complicado detectarlas. En este CD/DVD se recomienda que se incluyan las siguientes tareas:</p>
            <ul class="pl-3">
                <li class="text-justify">Enumerar los puertos TCP y UDP abiertos y las aplicaciones que llevan asociadas cada uno de ellos.</li>
                <li class="text-justify">Interpretación de los comandos en modo consola.</li>
                <li class="text-justify">Enumeración de los usuarios que se conectan al sistema tanto en local como en modo remoto.</li>
                <li class="text-justify">Obtención de la hora y fecha del sistema operativo.</li>
                <li class="text-justify">Elaboración de una lista de los procesos activos, los recursos utilizados y los usuarios o aplicaciones que los iniciaron.</li>
                <li class="text-justify">Listar las direcciones IP.</li>
                <li class="text-justify">Búsqueda de los ficheros ocultos o eliminados.</li>
                <li class="text-justify">Visualizar los distintos logs y registros del sistema.</li>
                <li class="text-justify">Lectura, copia y escritura a través de la red.</li>
                <li class="text-justify">Realización de copias de discos duros y particiones.</li>
                <li class="text-justify">Análisis del tráfico de d!atos de la red.</li>
                <li class="text-justify">Visualización de la configuración de seguridad del sistema.</li>
            </ul><br/>
            <p class="text-justify"><strong>Visor de eventos</strong></p>
            <img src="../recursos/img/cursos/ifct0109/mf048854a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Visor de eventos." title="Visor de eventos.">
            <p class="text-justify"><strong>/var/log/messages:</strong> contiene los mensajes generales del sistema.</p>
            <p class="text-justify"><strong>/var/log/secure:</strong> almacena los sistemas de autenticación y seguridad.</p>
            <p class="text-justify"><strong>/var/log/wmtp:</strong> almacena un historial de los inicios y cierres de sesión acontecidos.</p>
            <p class="text-justify"><strong>/var/log/btmp:</strong> almacena los inicios de sesión fallidos o erróneos.</p>
            <p class="text-justify">Además de los archivos de registros mencionados también se pueden detectar evidencias de incidentes en archivos como:</p>
            <p class="text-justify"><strong>/etc/passwd:</strong> contiene información de las claves del sistema.</p>
            <p class="text-justify"><strong>/etc/shadow:</strong> incluye información de los usuarios.</p>
            <p class="text-justify"><strong>/etc/group:</strong> incluye información sobre los grupos del sistema.</p>
            <p class="text-justify"><strong>Criterios para la recolección de evidencias</strong></p>
            <ul class="pl-3">
                <li class="text-justify">Criterios de sensores basados en equipo o Host Based Sensors
                    <p class="text-justify">Se encargan de obtener información de los eventos a nivel del sistema operativo (intentos de conexión, accesos al sistema operativo, etc.).</p>
                </li>
                <li class="text-justify">Criterios de sensores basados en aplicación o Application Based Sensors
                    <p class="text-justify">La función principal de estos sensores es obtener información de las aplicaciones que se ejecutan en el sistema: son una peculiaridad de los sensores basados en equipo.</p>
                </li>
                <li class="text-justify">Criterios de sensores basados en red o Network Based Sensors
                    <p class="text-justify">Recolectan información de los eventos que suceden en el tráfico de datos de la red. Permiten trabajar y obtener información sin afectar a los recursos del equipo ni a la infraestructura de red.</p>
                </li>
            </ul>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3154" role="button">Establecimiento del proceso de detección y registro de incidentes derivados de intentos de intrusión o infecciones.</a>
    <div class="collapse" id="U3154">
        <div class="card card-body text-info">
            <img src="../recursos/img/cursos/ifct0109/mf048855a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Registro del incidente." title="Registro del incidente.">
            <p class="text-center">A continuación se resumen sus tipologías clasificadas según el modo en el que detectan el tráfico de red malicioso</p>
            <img src="../recursos/img/cursos/ifct0109/mf048855b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipos de detecciones." title="Tipos de detecciones.">
            <p class="text-justify"><strong>Fase de monitorización de incidentes</strong></p>
            <p class="text-justify">En esta fase se monitoriza el tráfico de red del sistema con la finalidad de poder analizarlo y comprobar que todo funciona como se espera o, en caso contrario, incidir en el análisis para averiguar con profundidad los detalles de la actividad inusual.</p>
            <p class="text-justify">Con la utilización de sistemas de alertas se consigue una reacción más rápida y, por tanto, unas medidas más eficaces que consigan contener y eliminar la intrusión con mayor rapidez y menor cantidad de daños originados.</p>
            <p class="text-justify"><strong>Fase de detección de la intrusión</strong></p>
            <p class="text-justify">Con la monitorización del tráfico de red y de los procesos que se están ejecutando ya habrá indicios suficientes que determinarán si la actividad sospechosa es realmente una intrusión o no.</p>
            <p class="text-justify">En este caso la configuración de los IDS/IPS debe realizarse por técnicos experimentados que prueben la sensibilidad de la herramienta y encuentren el punto de equilibrio entre la detección de amenazas reales y la detección de falsas alarmas.</p>
            <p class="text-justify"><strong>Respuesta</strong></p>
            <p class="text-justify">Los sistemas IDS, en general, no pueden combatir y eliminar la amenaza, simplemente se limitan a su detección y a la generación de alertas que permitan a los responsables la toma de medidas reactivas.</p>
            <p class="text-justify">Las respuestas que pueden generar los sistemas IDS se pueden clasificar en:</p>
            <ul class="pl-3">
                <li class="text-justify">Respuestas pasivas: notificación a los responsables de seguridad de la intrusión o ataque detectado.</li>
                <li class="text-justify">Respuestas activas: realización de acciones automáticas configuradas específicamente para que obtengan más información sobre el posible ataque.</li>
            </ul><br/>
            <p class="text-justify"><strong>Registro del incidente</strong></p>
            <p class="text-justify">El procedimiento de registro del incidente consiste en la generación de un archivo de registro en el que se vayan almacenando todos los detalles detectados de la intrusión y todas las acciones tomadas a cabo para su contención, erradicación y restauración del sistema.</p>
            <p class="text-justify">El registro de los incidentes es una herramienta muy útil en el momento de realizar un análisis forense de la intrusión, ya que facilita información sobre todo lo que ha estado ocurriendo en el desarrollo de la misma junto con el orden cronológico de las acciones tomadas.</p>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3155" role="button">Guía para la clasificación y análisis inicial del intento de intrusión o infección, contemplando el impacto previsible del mismo.</a>
    <div class="collapse" id="U3155">
        <div class="card card-body text-info">
            <p class="text-justify"><strong>Clasificación de los intentos de intrusión atendiendo a su naturaleza:</strong></p>
            <ul class="pl-3">
                <li class="text-justify">Intrusiones de uso erróneo: intrusiones diseñadas para atacar los puntos débiles de un sistema. Se pueden detectar con la observación de acciones sucedidas en dicho sistema.</li>
                <li class="text-justify">Intrusiones de anomalía: intrusiones que atacan desviando las acciones de un sistema de su utilización habitual. Se pueden detectar guardando los perfiles del sistema en situaciones normales y comparándolas periódicamente para detectar alteraciones y anomalías importantes.</li>
                <li class="text-justify">Intrusión física: el intruso accede al equipo a través de un medio físico (por ejemplo, con el teclado).</li>
                <li class="text-justify">Intrusión del sistema: el intruso utiliza una cuenta de usuario del sistema con pocos privilegios sobre la que actuará para que se le asignen otros privilegios más significativos y poder atacar en consecuencia.</li>
                <li class="text-justify">Intrusión alejada: el intruso accede al sistema con acceso remoto a través de la red.</li>
            </ul>
            <img src="../recursos/img/cursos/ifct0109/mf048856a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Intrusiones." title="Intrusiones.">
            <p class="text-justify"><strong>Clasificación de los intentos de intrusión según su impacto</strong>
            </p>
            <img src="../recursos/img/cursos/ifct0109/mf048856b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipos de intrudiones." title="Tipos de intrusiones.">
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3156" role="button">Establecimiento del nivel de intervención requerido en función del impacto previsible.</a>
    <div class="collapse" id="U3156">
        <div class="card card-body text-info">
            <p class="text-justify">El impacto previsible de una intrusión viene determinado también por los efectos negativos producidos o potenciales que se pueden originar y por la criticidad de los recursos que se van a ver afectados por dicha intrusión.</p>
            <p class="text-justify">El Esquema Nacional de Seguridad clasifica los incidentes según su criticidad en cinco categorías o niveles:</p>
            <img src="../recursos/img/cursos/ifct0109/mf048857a.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Niveles de incidentes." title="Niveles de incidentes.">
            <p class="text-justify">El nivel de criticidad de las intrusiones en función de su impacto se recoge en la tabla siguiente:
                <img src="../recursos/img/cursos/ifct0109/mf048857b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Niveles de incidentes." title="Niveles de incidentes.">
                <p class="text-justify">Nivel de intervención requerido en función del impacto y criticidad de la intrusión.</p>
                <p class="text-justify">En el momento que se confirma que el intento de intrusión es real y no es una falsa alarma es de vital importancia que el tiempo de reacción sea el adecuado, teniendo en cuenta su nivel de criticidad.</p>
                <img src="../recursos/img/cursos/ifct0109/mf048857c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Nivel de intervención requerido." title="NIvel de intervención requerido.">
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3157" role="button">Guía para la investigación y diagnostico del incidente de intento de intrusión o infecciones.</a>
    <div class="collapse" id="U3157">
        <div class="card card-body text-info">
            <p class="text-justify">Los tiempos máximos de contención y erradicación de la intrusión según su nivel de criticidad quedan reflejados en la tabla siguiente:</p>
            <img src="../recursos/img/cursos/ifct0109/mf048858a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tiempos mácximos de contención" title="Tiempos mácximos de contención">
            <p class="text-justify">Cuando se tienen sospechas de que ha habido algún ataque o intrusión en el sistema hay que tener en cuenta los siguientes aspectos:</p>
            <ul class="pl-3">
                <li class="text-justify">Si es realmente una amenaza o ataque.</li>
                <li class="text-justify">Si ha sido un ataque con éxito o fallido.</li>
                <li class="text-justify">Los daños producidos y el nivel de compromiso del sistema afectado por el ataque.</li>
            </ul><br/>
            <p class="text-justify">Averiguar los usuarios que están utilizando las aplicaciones y sistemas en el momento de la intrusión:</p>
            <ul class="pl-3">
                <li class="text-justify">Visualizar los usuarios logueados en el sistema.</li>
                <li class="text-justify">Visualizar los procesos activos.</li>
            </ul><br/>
            <p class="text-justify"><strong>Investigación y diagnóstico de una incidencia ya ocurrida</strong></p>
            <ul class="pl-3">
                <li class="text-justify"><strong>Examen de los archivos de registro o logs</strong> Con el examen de los archivos de registro o logs se podrá obtener información sobre conexiones a lugares poco frecuentes, utilización de aplicaciones in usuales y otras actividades sospechosas de intrusión.</li>
                <li class="text-justify"><strong>Comprobación de los permisos del sistema</strong> Es necesario comprobar los permisos de los usuarios del sistema para detectar si alguno de ellos dispone de permisos para más acciones de las que debería estar autorizado.</li>
                <li class="text-justify"><strong>Chequeo de los archivos binarios del sistema</strong> Es habitual que los intrusos modifiquen los archivos binarios del sistema para ocultarse e intentar borrar huellas.</li>
                <li class="text-justify"><strong>Comprobación de los puertos abiertos</strong> Cuando se ha producido una intrusión y el intruso ya no está en el sistema es posible que se haya dejado un puerto de conexión abierto.</li>
                <li class="text-justify"><strong>Comprobar la existencia de sniffers</strong> Ante la posibilidad de que haya instalado algún sniffer sin autorización en el sistema se recomienda visualizar los procesos activos para detectar la ejecución de sniffers que no hayan sido instalados voluntariamente o sin autorización.</li>
                <li class="text-justify"><strong>Comprobar la existencia de servicios no autorizados</strong> Se aconseja comprobar si hay dado de alta en el sistema algún servicio no autorizado.</li>
                <li class="text-justify"><strong>Comprobar las contraseñas del sistema</strong> Se recomienda realizar una comprobación de todas las contraseñas del sistema para detectar si ha habido alguna modificación no autorizada de las mismas.</li>
                <li class="text-justify"><strong>Comprobar la configuración del sistema y de la red</strong> Hay que examinar los accesos en los archivos de configuración del sistema y de la red para detectar algún acceso no autorizado que haya podido modificar cualquier propiedad o herramienta del sistema.</li>
                <li class="text-justify"><strong>Buscar todos los archivos ocultos o poco habituales</strong> Es muy frecuente que los intrusos se oculten en el sistema mediante archivos ocultos o inusuales en los que puedan ocultar herramientas y aplicaciones que les permitan saltar los sistemas de seguridad del sistema y acceder a archivos comprometidos y/o críticos.</li>
                <li class="text-justify"><strong>Examinar todos los equipos de la red local</strong> No solo hay que examinar el equipo del que se sospecha que ha podido sufrir un ataque, también se deben examinar todos los equipos que formen parte de su red para comprobar si han sido afectados.</li>
            </ul>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3158" role="button">Establecimiento del proceso de resolución y recuperación de los sistemas tras un incidente derivado de un intento de intrusión o infección.</a>
    <div class="collapse" id="U3158">
        <div class="card card-body text-info">
            <p class="text-justify">Proceso de resolución y recuperación de incidentes
                <img src="../recursos/img/cursos/ifct0109/mf048859a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Proceso de resolución y recuperación de incidentes" title="Proceso de resolución y recuperación de incidentes">
                <ul class="pl-3">
                    <li class="text-justify"><strong>Contención del incidente</strong>
                        <p>Tomar las medidas necesarias para impedir que el incidente de seguridad siga propagándose y dañando al sistema. Se recomienda que la ejecución de estas medidas sea lo más rápida posible para minimizar los riesgos y daños del sistema.</p>
                    </li>
                    <li class="text-justify"><strong>Medidas de erradicación</strong>
                        <p> Se llevarán a cabo todas las actividades y medidas necesarias que permitan asegurar que el incidente deja de estar presente en los equipos y recursos afectados.</p>
                    </li>
                    <li class="text-justify"><strong>Recuperación</strong>
                        <p>Cuando ya se ha confirmado la eliminación de la intrusión y del incidente se puede iniciar la fase de recuperación.</p>
                    </li>
                </ul>
                <p class="text-justify"><strong>El plan de recuperación ante desastres</strong></p>
                <ul class="pl-3">
                    <li class="text-justify">Determinación de las vulnerabilidades que puedan interrumpir el servicio ofrecido y definición de las medidas preventivas que permitan reducir al mínimo la probabilidad e impacto de estas interrupciones.</li>
                    <li class="text-justify">Identificación y análisis del coste, imagen y otras consecuencias que deriven de la interrupción de la actividad de la organización a causa de la intrusión.</li>
                    <li class="text-justify">Determinación de las necesidades inmediatas, tanto a medio como a largo plazo, de recuperación del servicio y de los recursos que sean necesarios para ello.</li>
                    <li class="text-justify">Identificación de las distintas alternativas posibles y selección de las más rentables para facilitar las operaciones de copia de seguridad y de restauración de la actividad a tiempo.</li>
                    <li class="text-justify">Desarrollo e implantación de planes de contingencia que se encarguen de ejecutar las medidas inmediatas y de largo plazo.
                    </li>
                </ul><br/>
                <p class="text-justify">La estructura de un plan de recuperación de desastres debería contener, como mínimo, lo siguiente:</p>
                <ul class="pl-3">
                    <li class="text-justify">Plan de trabajo con la planificación de actividades de recuperación de la información.</li>
                    Informes de evaluación de la seguridad y la vulnerabilidad de los sistemas.
                    <li class="text-justify">Análisis de impacto al negocio.</li>
                    <li class="text-justify">Definición de los requisitos de la organización en cuanto a las necesidades de recuperación, el ámbito de aplicación y sus objetivos.</li>
                    <li class="text-justify">Plan de desarrollo de la organización en el que se establezcan las normas de recuperación, los responsables de seguridad y las copias de respaldo de la información.</li>
                    <li class="text-justify">Programa de pruebas en el que se establezcan las estrategias de la organización para ejecutar pruebas, ensayos y ejercicios con el fin de comprobar la seguridad de sus equipos y sistemas.</li>
                    <li class="text-justify">Programa de mantenimiento en el que se establezcan todas las medidas de actualización de sistemas y de aplicaciones de los equipos de la organización.</li>
                    <li class="text-justify">Prueba inicial del plan de recuperación de desastres e implantación.</li>
                </ul><br/>
                <p class="text-justify">La correcta definición e implantación de un plan de respuesta a incidentes, para terminar, implica numerosos beneficios para las organizaciones.</p>
                <p class="text-justify">Se destacan los siguientes:</p>
                <ul class="pl-3">
                    <li class="text-justify">Reducción de daños y pérdidas ante la presencia de un incidente.</li>
                    <li class="text-justify">Mayor capacidad de protección de los sistemas críticos para la organización.</li>
                    <li class="text-justify">Reducción del riesgo de interrupción de la actividad.</li>
                    <li class="text-justify">Minimización de la toma de decisiones en caso de detección de incidentes.</li>
                    <li class="text-justify">Mejora de la eficiencia general de la organización con la identificación de sus recursos y activos críticos.</li>
                    <li class="text-justify">Reducción de las responsabilidades legales que puedan venir ocasionadas por la producción de incidentes.</li>
                    <li class="text-justify">Garantía de la fiabilidad de los sistemas reserva de la organización.</li>
                </ul>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3159" role="button">Proceso para la comunicación del incidente a terceros, si procede.</a>
    <div class="collapse" id="U3159">
        <div class="card card-body text-info">
            <p class="text-justify">Las acciones a tomar en cuanto a comunicaciones a terceros se resumen en la tabla siguiente:</p>
                                                    <img src="../recursos/img/cursos/ifct0109/mf04885Aa.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Comunicaciones a terceros." title="Comunicaciones a terceros.">
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U315A" role="button">Establecimiento del proceso de cierre del incidente y los registros necesarios para documentar el histórico del incidente.</a>
          <div class="collapse" id="U315A">
              <div class="card card-body text-info">
                  <p class="text-justify">Durante todo el ciclo de vida del incidente hay que elaborar y mantener un registro sobre todas las acciones que se van tomando y su evolución para que los agentes encargados de la solución y los usuarios afectados dispongan de información actualizada sobre el estado del incidente.</p>
                  <p class="text-justify">Cuando ya se ha solucionado hay que llevar a cabo una serie de acciones que permitan cerrar el incidente:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Comprobar con los usuarios que el incidente ha sido solucionado satisfactoriamente.</li>
                      <li class="text-justify">Incorporar las acciones y medidas tomadas para la resolución del incidente en la base de datos de su histórico.</li>
                      <li class="text-justify">Reclasificar el incidente como "resuelto" o "cerrado'.</li>
                      <li class="text-justify">Actualizar la información (en la base de datos de la organización) de las configuraciones del sistema que han intervenido en el proceso de gestión del incidente.</li>
                      <li class="text-justify">Cerrar el incidente.</li>
                  </ul><br/>
                  <p class="text-justify"><strong>Soporte de incidentes</strong>
                      <img src="../recursos/img/cursos/ifct0109/mf04885Ba.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Soporte de incidentes." title="Soporte de incidentes.">
              </div>
          </div>
      </ul>
  </li>
  <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 6. ANÁLISIS FORENSE INFORMÁTICO.
      <ul class="list-group">
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3161" role="button">Conceptos generales y objetivos del análisis forense.</a>
          <div class="collapse" id="U3161">
              <div class="card card-body text-info">
                  <p class="text-justify">El análisis forense es una disciplina dentro de la seguridad informática cuya función es analizar los incidentes de seguridad a posteriori con la finalidad de reconstruir los hechos para responder preguntas como:</p>
                  <ul class="pl-3">
                      <li class="text-justify">¿Quién ha sido el atacante?</li>
                      <li class="text-justify">¿Cómo se ha producido el incidente de seguridad?</li>
                      <li class="text-justify">¿Cuáles han sido las vulnerabilidades explotadas?</li>
                      <li class="text-justify">¿Cuáles fueron las acciones del intruso cuando consiguió acceder al sistema?</li>
                  </ul>
                  <p class="text-justify">El número de incidentes de seguridad crece día a día, lo que hace justificable invertir en herramientas de análisis forense para localizar a los atacantes y condenarles por ello.</p>
                  <p class="text-justify"><strong>Objetivos y usos de la informática forense</strong></p>
                  <p class="text-justify">El análisis forense informático consiste en capturar, procesar e investigar la información de los sistemas informáticos en búsqueda de evidencias utilizando la metodología apropiada para que la investigación pueda utilizarse con fines legales.</p>
                  <p class="text-justify">El objetivo principal de esta metodología es recoger las evidencias digitales presentes en cualquier tipo de incidencia y delito informático.</p>
                                                    <p class="text-justify">El objetivo principal de esta metodología es recoger las evidencias digitales presentes en cualquier tipo de incidencia y delito informático.</p>
           <p class="text-justify">Además de este objetivo principal hay que destacar otros objetivos secundarios:</p>
           <ul class="pl-3">
               <li class="text-justify">Compensar los daños causados por los intrusos.</li>
               <li class="text-justify">Perseguir y aplicar medidas judiciales a los atacantes.</li>
               <li class="text-justify">Crear e implantar medidas para prevenir incidentes futuros similares.</li>
           </ul><br/>
           <p class="text-justify"><strong>Los usos de la informática forense pueden ser de lo más variado.</strong></p>
           <ul class="pl-3">
               <li class="text-justify">Persecución criminal</li>
               <li class="text-justify">Litigación civil</li>
               <li class="text-justify">Investigación de seguros</li>
               <li class="text-justify">Mantenimiento de la ley</li>
               <li class="text-justify">Usuario final</li>
               <li class="text-justify">Organizaciones y temas corporativos</li>
           </ul><br/>
           <p class="text-justify"><strong>Metodología del análisis forense informático</strong></p>
           <p class="text-justify">El análisis forense informático es una parte fundamental dentro del procedimiento de gestión de incidentes de seguridad. Con estos análisis se consigue averiguar cómo, quién y qué daños ha causado cualquier tipo de intrusión o ataque.</p>
           <p class="text-justify">Las técnicas de análisis forense se llevan a cabo dentro de las fases de "análisis preliminar" e "investigación" del proceso de gestión de incidentes.</p>
           <img src="../recursos/img/cursos/ifct0109/mf048862a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Procedimiento de gestión de incidentes." title="Procedimiento de gestión de incidentes.">
       </div>
   </div>
   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3162" role="button">Exposición del Principio de Lockard.</a>
   <div class="collapse" id="U3162">
       <div class="card card-body text-info">
           <p class="text-justify">En cuanto a los principios, todo procedimiento de recolección y análisis de evidencias debe tener en cuenta y llevar a cabo los siguientes aspectos:</p>
           <ul class="pl-3">
               <li class="text-justify">Recogida y examen de las huellas dactilares y ADN.</li>
               <li class="text-justify">Recuperación de los documentos de los dispositivos dañados.</li>
               <li class="text-justify">Realización de copias exactas de las evidencias digitales detectadas.</li>
               <li class="text-justify">Generación de una huella digital de los textos y evidencias para asegurarse que no se modifican.</li>
               <li class="text-justify">Utilización de la firma digital para confirmar la autenticidad de los documentos y mantener la cadena de custodia de evidencias.</li>
           </ul>
           <img src="../recursos/img/cursos/ifct0109/mf048863a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Principio de intercambio de Lockard." title="Principio de intercambio de Lockard.">
           <p class="text-justify"><strong>Aplicación del principio de Locard al análisis forense digital</strong></p>
           <p class="text-justify">Cualquier atacante deja siempre algún tipo de "huella digital" en el sitio atacado además de llevarse algo con él. Con el análisis de las huellas digitales y de las evidencias se podrá reconstruir qué ha ocurrido para relacionar al atacante con la víctima y, a su vez, con la escena del crimen (en este caso los equipos o dispositivos afectados).</p>
           <p class="text-justify">A través de la determinación de ¿cómo ha sucedido?, ¿dónde ha sucedido? Y ¿qué se ha afectado? se podrán detectar las evidencias digitales y relacionarlas entre ellas para resolver el crimen.</p>
           <img src="../recursos/img/cursos/ifct0109/mf048863b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Principio de intercambio de Lockard." title="Principio de intercambio de Lockard.">
           <p class="text-justify"><strong>Aplicación del principio de Locard al análisis forense digital</strong></p>
           <p class="text-justify">Una evidencia digital, a diferencia de las evidencias físicas, es cualquier documento, fichero, registro, etc. que está contenido en un soporte informático o digital y que es susceptible de tratamiento. Son ejemplos de evidencias digitales cualquier documento de ofimática (archivos Excel, Word, etc.), imagen, base de datos, registro de actividad, comunicación digital (correo electrónico, etc.), etc.</p>
           <p class="text-justify">Las evidencias digitales son uno de los pilares más importantes de la informática forense, ya que suministran un gran valor en las investigaciones y pueden aportarse en procesos judiciales.</p>
       </div>
   </div>
   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3163" role="button">Guía para la recogida de evidencias electrónicas.</a>
   <div class="collapse" id="U3163">
       <div class="card card-body text-info">
           <p class="text-justify">La recopilación de evidencias electrónicas es una de las fases más críticas y vitales del análisis forense digital. Si la recopilación no se realiza bien puede invalidarse todo el análisis posterior, ya que la información obtenida no sería correcta y los resultados pueden ser erróneos.</p>
           <p class="text-justify">Más concretamente, cuando hay que recoger evidencias electrónicas hay que tener en cuenta una serie de conceptos imprescindibles:</p>
           <ul class="pl-3">
               <li class="text-justify">Evidencias volátiles y no volátiles.</li>
               <li class="text-justify">Etiquetado de evidencias.</li>
               <li class="text-justify">Cadena de custodia.</li>
               <li class="text-justify">Ficheros y directorios ocultos.</li>
               <li class="text-justify">Recuperación de ficheros borrados.</li>
           </ul><br/>
           <p class="text-justify"><strong>Evidencias volátiles y no volátiles</strong></p>
           <p class="text-justify">Las evidencias digitales se clasifican en evidencias volátiles y no volátiles:</p>
           <ul class="pl-3">
               <li class="text-justify">Las evidencias volátiles son aquellas que se pierden cuando se apaga el equipo (estado de la memoria, procesos en ejecución, etc.).</li>
               <li class="text-justify">Las evidencias no volátiles, sin embargo, se almacenan en el sistema de ficheros y no se pierden al apagar el equipo (aplicaciones, configuraciones, etc.).
               </li>
           </ul>
           <img src="../recursos/img/cursos/ifct0109/mf048864a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Orden de preservación de evidencias digitales." title="Orden de preservación de evidencias digitales.">
           <p class="text-justify"><strong>Etiquetado de evidencias</strong></p>
           <p class="text-justify">Para que las evidencias se puedan admitir como tal deben cumplir con una serie de requisitos:</p>
           <ul class="pl-3">
               <li class="text-justify pl-3">Deben conservarse en un estado lo más parecido posible al estado en el que se encontraron.</li>
               <li class="text-justify pl-3">En la medida de lo posible, debe realizarse una copia exacta de la evidencia original para realizar los trabajos de investigación sobre la misma y no dañar los datos originales.</li>
               <li class="text-justify pl-3">Las copias realizadas deberán realizarse en medios estériles, es decir, en medios que no hayan contenido ningún dato anteriormente.</li>
               <li class="text-justify pl-3">Las evidencias deberán etiquetarse y documentarse debidamente en la cadena de custodia. Además, cada acción realizada sobre la evidencia o sobre su copia deberá ser también documentada con detalle.</li>
               <li class="text-justify pl-3">Las evidencias digitales deberán documentarse con firmas digitales del investigador para garantizar que nadie más realiza ninguna acción sobre ellas.</li>
           </ul><br/>
           <p>En el momento de etiquetar las evidencias digitales hay que tener en cuenta que se clasifican en varias categorías:</p>
           <ul class="pl-3">
               <li class="text-justify">Registros generados por ordenador: se generan por la programación de un equipo y son inalterables por un usuario. Estos registros son los llamados registros de eventos de seguridad o logs y se utilizan como medio probatorio para demostrar el correcto o incorrecto funcionamiento del sistema cuando se generó el registro.</li>
               <li class="text-justify">Registros almacenados por ordenador es: estos registros no son generados por un equipo, los genera una persona y posteriormente son almacenados en un equipo (por ejemplo, un documento de Word). De estos registros se puede deducir la identidad del usuario que los generó y probar hechos que estén contenidos en este.</li>
           </ul>
           <ul class="pl-3">
               <li class="text-justify">Registros híbridos: son registros que combinan acciones </li>
               <li class="text-justify">Registros de cada servidor: son los registros del sistema y de los programas en ejecución.</li>
               <li class="text-justify">Registros de tráfico de red: registros que incluyen la actividad de red generada en el equipo.</li>
               <li class="text-justify">Registros de aplicación: estos registros son almacenados por cada aplicación e incluyen datos sobre el acceso de usuarios, los errores ocurridos e información sobre las acciones que ha realizado cada usuario.</li>
               <br/>
               <p class="text-justify"><strong>Cadena de custodia</strong></p>
               <p class="text-justify">Como ya se ha indicado anteriormente, la cadena de custodia está formada por una serie de procedimientos y documentos relacionados con la recolección, copia, traslado, tratamiento, verificación y análisis de las evidencias encargados de su preservación para evitar que la manipulación de estas pueda llevar a error en los resultados del análisis.
                   La cadena de custodia debe realizarse en todas las fases del análisis forense digital, desde el momento de la recolección hasta la emisión del informe final.</p>
               <p class="text-justify">Para una correcta preservación de la cadena de custodia es necesario que las evidencias sean tratadas por profesionales con conocimientos especializados y correctamente identificados. En la documentación de la evidencia debe plasmarse quién realizó cada acción, cuándo la realizó y dónde la realizó para evitar problemas de falta de integridad en los datos de la evidencia.</p>
           </ul>
           <p class="text-justify">En concreto, la cadena de custodia debe:</p>
           <ul class="pl-3">
               <li class="text-justify">Reducir todo lo posible la cantidad de agentes que traten las evidencias.</li>
               <li class="text-justify">Mantener la identidad de las personas implicadas en todo el proceso de gestión de la evidencia.</li>
               <li class="text-justify">Asegurar la firmeza de las evidencias cuando estén almacenadas para asegurar su protección.</li>
               <li class="text-justify">Registrar los tiempos firmados por cada agente en los intercambios de evidencias entre ellos para detectar al responsable de su tratamiento en cada momento.
               </li>
           </ul><br/>
           <p class="text-justify"><strong>Ficheros y directorios ocultos</strong></p>
           <p class="text-justify">En el momento de realizar la recolección de evidencias hay que tener en cuenta que puede haber evidencias escondidas en ficheros o directorios ocultos.</p>
           <p class="text-justify">Es más, los atacantes suelen esconderse en archivos ocultos, por lo que es fundamental averiguar su localización y de qué tipo son para considerar si pueden ser evidencias ocultas o si deben descartarse por ser archivos inofensivos.</p>
           <p class="text-justify"><strong>Información oculta del sistema</strong></p>
           <p class="text-justify">No solo hay que localizar los archivos y directorios ocultos en el sistema, también deben encontrarse los distintos parámetros e informaciones del sistema que se han mantenido ocultos para protegerlos de atacantes para comprobar si han sido alterados.</p>
           <p class="text-justify">De estas alteraciones, con herramientas de análisis adecuadas, se podrán encontrar evidencias electrónicas y pruebas que podrán utilizarse para incriminar al atacante.</p>
           <p class="text-justify">Hay que tener en cuenta que la información oculta del sistema contiene detalles importantes sobre la utilización del equipo como puede ser el historial de páginas web visitadas, correos electrónicos enviados y recibidos, documentos creados, modificados y eliminados, etc.</p>
           <p class="text-justify"><strong>Recuperación de ficheros borrados</strong></p>
           <p class="text-justify">En general, cuando un archivo se elimina no es borrado definitivamente, sino que se mantiene en la papelera de reciclaje durante un período determinado. Es más, cuando este archivo se borra de la papelera de reciclaje queda marcado como borrado pero sigue físicamente en el disco duro a pesar de estar oculto para los usuarios.</p>
           <p class="text-justify">En cuanto al análisis forense se recomienda localizar estos archivos eliminados que no han desaparecido definitivamente del equipo para intentar descubrir archivos sospechosos y, por lo tanto, posibles evidencias digitales.</p>
       </div>
   </div>
   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3164" role="button">Guía para el análisis de las evidencias electrónicas recogidas, incluyendo el estudio de ficheros y directorios ocultos, información oculta del sistema y la recuperación de ficheros borrados.</a>
   <div class="collapse" id="U3164">
       <div class="card card-body text-info">
           <p class="text-justify">Una vez recopiladas las evidencias digitales y almacenadas adecuadamente, el análisis forense digital debe encargarse de la reconstrucción y temporalización de los hechos ocurridos con los datos recopilados. Con este análisis deberán recopilarse los hechos desde el momento inicial del incidente hasta su descubrimiento y se dará por finalizado cuando se detecte quién realizó el ataque, cómo se produjo, cuál fue su objetivo y bajo qué circunstancias se cometió.</p>
           <p class="text-justify">El proceso de análisis de evidencias se divide en varias fases que se irán describiendo a continuación.</p>
           <p class="text-justify"><strong>Preparación del entorno de trabajo para el análisis</strong></p>
                            <p class="text-justify">Antes de empezar el análisis deberá prepararse el entorno de trabajo para que sea adecuado para llevar a cabo las investigaciones previstas. Se recomienda no tocar los dispositivos originales y trabajar con las copias de las evidencias. Para ello se aconseja preparar dos estaciones de trabajo:</p>

                            <ul class="pl-3">
                                <li class="text-justify">Una de ellas deberá contener dos discos duros: en uno se instalará el sistema operativo que servirá de anfitrión y con el que se realizará el análisis de las evidencias y en otro se volcará la imagen del disco duro del equipo atacado.</li>
                                <li class="text-justify">En la otra estación de trabajo se instalará un sistema operativo configurado exactamente igual que el equipo atacado.</li>
                            </ul><br/>
                            <p class="text-justify"><strong>Reconstrucción de la secuencia temporal del ataque</strong></p>

                            <p class="text-justify">Una vez preparado el entorno de trabajo para un análisis forense adecuado, el siguiente paso a realizar será la creación de una secuencia temporal de los sucesos que se produjeron durante el ataque. Para ello se deberá recopilar y analizar la siguiente información de los ficheros:</p>

                            <ul class="pl-3">
                                <li class="text-justify">Tamaño y tipo de fichero.</li>
                                <li class="text-justify">Usuarios y grupos a los que pertenece el fichero.</li>
                                <li class="text-justify">Permisos de acceso.</li>
                                <li class="text-justify">Detección sobre si el fichero fue borrado o no.</li>
                                <li class="text-justify">Trazado de ruta completo.</li>
                                <li class="text-justify">Marcas de tiempo: fecha y hora de su creación, modificación, borrado y acceso.</li>
                            </ul><br/>


                            <p class="text-justify"><strong>Determinación de cómo se realizó el ataque</strong></p>

                            <p class="text-justify">Cuando ya se ha determinado el orden de los acontecimientos producidos en el ataque deberá realizarse un análisis para detectar cómo se accedió al sistema, investigando las vulnerabilidades de las que se haya podido aprovechar el atacante para acceder a este.</p>
                            <p class="text-justify">También se deberá investigar cuáles fueron las herramientas utilizadas por el atacante que le permitieron aprovecharse de la vulnerabilidad o fallo de administración y acceder al sistema.</p>
                            <p class="text-justify">Para ello se realizarán consultas y se analizarán archivos de logs, registros, cuentas de usuarios, etc.</p>

                            <p class="text-justify"><strong>Identificación del atacante o atacantes</strong></p>

                            <p class="text-justify">La identificación del atacante o atacantes es fundamental sobre todo cuando la organización quiere tomar acciones legales contra los responsables.</p>

                            <p class="text-justify">En el proceso de identificación deberá intentar averiguarse inicialmente la dirección IP del atacante mediante la revisión de los registros de las conexiones de red.</p>

                            <p class="text-justify">La identificación será posible sobre todo con el análisis de las evidencias volátiles, ya que son los que contienen información sobre conexiones fallidas, archivos temporales, archivos eliminados, información sobre correos electrónicos, etc.</p>

                            <p class="text-justify"><strong>Evaluación del impacto causado</strong></p>

                            <p class="text-justify">En el análisis de las evidencias es fundamental analizar el impacto causado por el atacante en el sistema: hay que averiguar qué han hecho los atacantes una vez han accedido al sistema y si dicho ataque ha podido comprometer la información de los equipos. Se distinguirán dos tipos de ataques: activos y pasivos.</p>

                            <img src="../recursos/img/cursos/ifct0109/mf048865a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipos de ataques." title="Tipos de ataques.">

                            <p class="text-justify"><strong>Documentación del ataque</strong></p>
                            <p class="text-justify">Tan pronto como se haya detectado el ataque, es imprescindible dejar anotadas todas las actividades ejecutadas para aumentar la eficiencia del análisis forense y disminuir las posibilidades de error en la obtención de resultados. Para que la documentación sea correcta y efectiva se recomienda la utilización de formularios que deberán ser rellenados por los responsables de la gestión del ataque y de las evidencias.</p>

                            <p class="text-justify">En concreto deberían elaborarse formularios como mínimo de los siguientes aspectos:</p>
                            <ul class="pl-3">
                                <li class="text-justify">Cadena de custodia de la evidencia.</li>
                                <li class="text-justify">Identificación de los equipos, componentes y dispositivos.</li>
                                <li class="text-justify">Ataques tipificados.</li>
                                <li class="text-justify">Recolección y almacenamiento de las evidencias.</li>
                                <li class="text-justify">Discos duros de la organización.</li>
                            </ul><br/>

                            <p class="text-justify"><strong>Elaboración del informe</strong></p>
                            En general, este informe deberá contener los aspectos siguientes:
                            <ul class="pl-3">
                                <li class="text-justify">Antecedentes del ataque.</li>
                                <li class="text-justify">Recolección previa de datos y evidencias.</li>
                                <li class="text-justify">Descripción de la evidencia.</li>
                                <li class="text-justify">Herramientas utilizadas en el análisis.</li>
                                <li class="text-justify">Análisis de la evidencia (incluyendo toda la información de los equipos y dispositivos analizados).</li>
                                <li class="text-justify">Descripción de los hallazgos encontrados (huellas del ataque, vulnerabilidades aprovechadas, origen del ataque, alcance, etc.).</li>
                                <li class="text-justify">Cronología del ataque.</li>
                                <li class="text-justify">Conclusiones.</li>
                                <li class="text-justify">Recomendaciones.</li>
                            </ul>

                            <img src="../recursos/img/cursos/ifct0109/mf048865b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Pasos para la realizacion del informe." title="Pasos para la realizacion del informe.">
                        </div>
                    </div>

                    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U3165" role="button">Guía para la selección de las herramientas de análisis forense.</a>
                    <div class="collapse" id="U3165">
                        <div class="card card-body text-info">
                            <p class="text-justify"><strong>EnCase</strong></p>
                            <p class="text-justify">Esta herramienta es un software comercial de pago que se utiliza sobre todo para analizar los medios de comunicación digitales. Incluye herramientas de recopilación de datos, recuperación de archivos, análisis y búsqueda de archivos. Actualmente es una de las herramientas líderes de análisis forense aunque no hay versión íntegra en español de la aplicación.</p>

                            <p class="text-justify"><strong>The Forensic ToolKit</strong></p>
                            <p class="text-justify">En este caso The Forensic Too/Kit es una aplicación de software libre diseñado para utilizarse en Microsoft Windows. Con esta herramienta se puede recopilar información sobre los ataques y dispone de una serie de funcionalidades que permiten la generación de informes y estadísticas del sistema de archivos que se pretende investigar.</p>

                            <p class="text-justify"><strong>The Sleuth Kit y Autopsy</strong></p>
                            <p class="text-justify">Se trata de un conjunto de herramientas forenses diseñadas para sistemas operativos UNIX/Linux y Microsoft Windows cuya función principal es el análisis de datos de evidencias generadas con unidades de disco.</p>
                            <p class="text-justify">También permite acceder a archivos eliminados, genera la línea temporal de actividad de los archivos y crea informes y notas del investigador entre otras muchas funcionalidades.</p>
                        </div>
                    </div>
                </ul>
            </li>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">MF0489_3 SISTEMAS SEGUROS DE ACCESO Y TRANSMISIÓN DE DATOS
        <ul class="list-group">
            <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 1. CRIPTOGRAFÍA.
                <ul class="list-group">
                    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4111" role="button">Perspectiva histórica y objetivos de la criptografía.</a>
                    <div class="collapse" id="U4111">
           <div class="card card-body text-info">
               <ul class="pl-3">
                   <li class="text-justify">Escítala</li>
                   <li class="text-justify">Cifrado de César</li>
                   <li class="text-justify">Cifrado de Vigenere</li>
                   <li class="text-justify">Enigma</li>
                   <li class="text-justify">Clave privada y clave pública</li>
                   <li class="text-justify">Esteganografía</li>
               </ul>
               <img src="../recursos/img/cursos/ifct0109/mf048912a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Criptoanálisis." title="Criptoanálisis.">
               <p class="text-justify"><strong>Fundamentos del criptoanálisis</strong></p>
               <p class="text-justify">De acuerdo a la Real Academia Española, el criptoanálisis es el “arte de descifrar criptogramas”.</p>
               <p class="text-justify">Esta definición afecta exclusivamente a los sistemas criptográficos centrados en el cifrado, aunque en la actualidad es común considerar que esta disciplina persigue frustrar el uso de cualquier mecanismo criptográfico.</p>
               <p class="text-justify">El criptoanalista trata de adivinar el funcionamiento de un mecanismo criptográfico para poder predecir cual será el resultado sobre cualquier mensaje. Por ello, para estudiar un sistema habitualmente lo considera como una caja negra que produce una salida a partir de una entrada.</p>
           </div>
       </div>
       <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4112" role="button">Teoría de la información.</a>
       <div class="collapse" id="U4112">
           <div class="card card-body text-info">
               <p class="text-justify">Se relaciona con los limites que se pueden alcanzar en la transmisión de datos sin errores y en la compresión de los mismos. El impacto de dicha teoría es evidente en el campo de la criptografía, donde la transmisión de mensajes entre dos o más entidades es la base de muchos algoritmos criptográficos. Con ello, es posible estimar la robustez y seguridad que ofrece un determinado mecanismo.</p>
               <p class="text-justify">Si un canal de comunicación (por ejemplo, Internet) tiene pérdidas de datos o no siempre llegan correctamente, parece claro que no es posible enviar cualquier cantidad de información a cualquier velocidad. En realidad, el canal presentará una máxima capacidad efectiva de transmisión de información.
               </p>
               <p class="text-justify"><strong>Cantidad de información. Concepto de entropía</strong></p>
               <p class="text-justify"> La entropía es, precisamente, una magnitud que permite medir esa incertidumbre (o aleatoriedad) y, con ello, la cantidad de información de un determinado mensaje.</p>
               <p class="text-justify">La entropía es mayor cuanto mayor sea el grado de incertidumbre</p>
               <p class="text-justify">Si se consultan otras fuentes de información, es posible que utilicen la notación H(X) para referirse a la entropía.</p>
               <p class="text-justify"><strong>Estableciendo la seguridad de un sistema</strong></p>
               <p class="text-justify">El concepto de entropía anterior mide la incertidumbre de un evento. Dando un paso más allá, otra cuestión que puede resultar de interés es medir la incertidumbre que el conocimiento de un evento aporta sobre otro.</p>
               <p class="text-justify">Parece claro que la seguridad de un sistema criptográfico (por ejemplo, de cifrado), será mayor si la información que se deduce sobre la entrada a partir de la salida es pequeña o nula.</p>
               <p class="text-justify">En el marco de la Teoría de la información, Shannon determinó que un sistema se considera incondicionalmente seguro si no se obtiene ninguna información sobre la entrada obtenida a partir de la salida.
               </p>
               <p class="text-justify"><strong>Redundancia y compresión óptima de datos</strong></p>
               <p class="text-justify">En lo referente a la redundancia, lo deseable sería eliminarla antes de la transmisión para que esta fuese más corta. Sin embargo, algunos canales de comunicación no están libres de errores y, por tanto, pueden producirse pérdidas o alteraciones de la información enviada.</p>
               <p class="text-justify">Teniendo en cuenta lo anterior, es necesario establecer un equilibrio entre la eficiencia de la comunicación y la redundancia introducida. Con este fin se desarrollaron los Códigos de Redundancia Cíclica (CRC). Estos permiten añadir al mensaje una pequeña porción (idealmente mínima), asegurando que proporcionan una alta redundancia. Es importante tener en cuenta que los CRC no pueden utilizarse como mecanismo para comprobar si un mensaje ha sido manipulado. Dado que el cálculo del CRC es público y solo depende del mensaje, un atacante podría alterar el mismo y calcular el CRC correspondiente, con lo que no podría detectarse la modificación.</p>
               <p class="text-justify">En lo referente a la compresión de datos, la información proporcionada por la entropíaresulta de gran interés. Si, por ejemplo, la salida de un cifrador tiene una alta entropía, se puede decir que existe un gran grado de desorden 0, lo que es lo mismo, que hay gran aleatoriedad entre los valores que puede tomar esa salida.</p>
               <p class="text-justify">Esta situación es la peor desde el punto de vista de la compresión, pues todos los datos son útiles o necesarios.</p>
               <p class="text-justify">Por el contrario, una baja entropía es indicativa de uniformidad y, por tanto, es posible que haya patrones de valores de la salida que se repitan a lo largo del tiempo.</p>
           </div>
       </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4113" role="button">Propiedades de la seguridad que se pueden controlar mediante la aplicación de la criptografía: confidencialidad, integridad, autenticidad, no repudio, imputabilidad y sellado de tiempos.</a>
     <div class="collapse" id="U4113">
         <div class="card card-body text-info">
             <p class="text-justify"><strong>CONFIDENCIALIDAD</strong></p>
             <p class="text-justify">La información ha de permanecer secreta desde el origen hasta ser recibida por destinarios autorizados.</p>
             <p class="text-justify">En este contexto, el cifrado es uno de los mecanismos de prevención más utilizados. Si los datos están cifrados desde el origen con una determinada clave, solo el que tenga disposición de la clave de descifrado podrá obtener la información, satisfaciéndose así esta propiedad.</p>
             <p class="text-justify">Son muchas las amenazas que atentan contra la confidencialidad. Un ejemplo es el software maligno que se ejecute en el ordenador del emisor y cambie las claves de cifrado. Otro ejemplo es la ingeniería social, que se basa en engañar a los usuarios para conseguir información confidencial.</p>
             <p class="text-justify"><strong>INTEGRIDAD</strong></p>
             <p class="text-justify">La información ha de permanecer inalterable desde el origen al destino, donde inalterable significa exacta y completa.</p>
             <p class="text-justify">De este modo, la integridad garantiza que los datos recibidos son exactamente los mismos que fueron enviados. Nuevamente la aplicación de técnicas criptográficas es uno de los principales mecanismos de prevención de amenazas contra la integridad; en concreto, se aplican funciones resumen, que se explican más adelante.</p>
             <p class="text-justify">Una de las amenazas más conocidas que atentan contra esta propiedad es la modificación de la información. Esta puede realizarse, por ejemplo, a través de un ataque de hombre en el medio (man-in-the-middle).</p>
             <p class="text-justify"><strong>AUTENTICIDAD</strong></p>
             <p class="text-justify">Esta propiedad afecta tanto al mensaje como a las entidades participantes. Autenticidad del mensaje se corresponde con recibir exactamente la misma información que fue enviada. Por otro lado, la autenticación de una entidad se corresponde con determinar que una entidad es quien dice ser.</p>
             <p class="text-justify">Una de las técnicas utilizadas para satisfacer la autenticidad de los mensajes es la utilización de cifrado, códigos de autenticación de mensaje o funciones resumen.</p>
             <p class="text-justify">Dentro de las amenazas frente a la autenticación de entidades se puede subrayar la suplantación. En ella, un atacante consigue actuar en nombre de la entidad legítima (por ejemplo, tomando el control de su ordenador).</p>
             <ul class="pl-3">
                 <p class="text-justify"><strong>Autenticación simple.</strong></p>
                 <p class="text-justify">Se envía el mensaje identificando al emisor.</p>
                 <p class="text-justify"><strong>Autenticación fuerte unidireccional.</strong></p>
                 <p class="text-justify">Envío de único mensaje y el receptor autentique al emisor.</p>
                 <p class="text-justify"><strong>Autenticación fuerte bidireccional.</strong></p>
                 <p class="text-justify">En este caso se consigue que ambas entidades queden autenticadas frente a su interlocutor.</p>
                 <p class="text-justify"><strong>Autenticación fuerte de 3 sentidos.</strong></p>
                 <p class="text-justify">Añade un mensaje a la propuesta anterior (no necesita marcas de tiempo).</p>
             </ul>
             <p class="text-justify"><strong>NO REPUDIO</strong></p>
             <p class="text-justify">Se asegura que una determinada entidad no puede alegar que no ha realizado una acción.</p>
             <p class="text-justify">El mecanismo más utilizado para satisfacer no repudio en emisión es la utilización de firmas. En el momento en el que el emisor firma el mensaje a enviar, este solo podrá ser verificado utilizando la clave pública del firmante, acreditándose así la autoría de la firma.</p>
             <p class="text-justify">No obstante, esta propiedad puede verse amenazada por situaciones tales como el robo de los elementos de firma (las claves), llegando a conseguirse repudiar información enviada.</p>
             <p class="text-justify">Para el resto de tipos de no repudio lo más habitual es hacer uso de protocolos, como son los de intercambio justo, basados en garantizar que las partes involucradas obtienen lo deseado.</p>
             <p class="text-justify"><strong>Tipos</strong></p>
             <ul class="pl-5">
                 <li>No repudio en creación</li>
                 <li>No repudio en envío</li>
                 <li>No repudio en origen</li>
                 <li>No repudio en recepción</li>
                 <li>No repudio en conocimiento</li>
                 <li>No repudio en entrega</li>
                 <li>No repudio en presentación</li>
                 <li>No repudio en transporte</li>
             </ul><br/>
             <p class="text-justify"><strong>IMPUTABILIDAD</strong></p>
             <p class="text-justify">Se realiza un seguimiento de todas las acciones de los usuarios del sistema, de modo que todos ellos sean responsables de sus acciones. Parece claro que esta propiedad tiene una relación muy estrecha con la de no repudio. Para realizar el seguimiento de un usuario hay que conseguir el no repudio de las acciones realizadas. Por tanto, las firmas electrónicas vuelven a convertirse en un mecanismo que permite satisfacer esta propiedad, aunque debe acompañarse de otros procedimientos como son los ficheros de auditoria.
             </p>
             <p class="text-justify"><strong>SELLADO DE TIEMPO</strong></p>
             <p class="text-justify">Se asegura que la información existió en un momento concreto y no ha sido modificada desde entonces. El sellado de tiempo está normalizado según las especificaciones del estándar RFC-3161, propuesto por el Internet Engineering Task Force (IETF).</p>
             <p class="text-justify">Para realizar un sellado de tiempo se envía la información que se desea acreditar a una autoridad de sellado de tiempo. Esta entidad firmará la información recibida, así como una marca de tiempo adjunta (es decir, una indicación de la fecha y hora de realización de la firma).</p>
             <p class="text-justify">Una de las cuestiones más importantes es la fiabilidad de la marca de tiempo. En otras palabras, ¿cómo garantizar que realmente era esa hora? Con este fin se necesita utilizar una fuente fiable de tiempo. Un ejemplo de fuente fiable es el Real instituto y Observatorio de la Armada (ROA).</p>
         </div>
     </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4114" role="button">Elementos fundamentales de la criptografía de clave privada y de clave publica.</a>
     <div class="collapse" id="U4114">
         <div class="card card-body text-info">
             <p class="text-justify">“Solo el secreto de la clave proporciona un cifrado seguro” (Principio de Kerchkoff). Existen muchos algoritmos de cifrado pero todos ellos son bien conocidos y es en el secreto de las claves donde se encuentra la principal fortaleza. Por ello, los elementos fundamentales dentro de la criptografía son las claves y, junto con ello, los canales utilizados para su intercambio.</p>
             <p class="text-justify">Se distinguen dos tipos de criptografía: la criptografía de clave privada y la criptografía de clave pública. En las siguientes secciones se detallan los elementos concretos que caracterizan cada una de ellas.</p>
             <p class="text-justify"><strong>Elementos fundamentales de la criptografía de clave privada</strong></p>
             <p class="text-justify">La criptografía de clave privada considera que los mensajes intercambiados por los usuarios son cifrados y descifrados por una misma clave, secreta entre ambos.</p>
             <img src="../recursos/img/cursos/ifct0109/mf048915a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Criptografía de clave privada." title="Criptografía de clave privada.">
             <p class="text-justify"><strong>Cifradores de flujo</strong></p>
             <p class="text-justify">Permiten el cifrado de uno o pocos símbolos. Por un lado, la información a cifrar se divide en caracteres o bits. Por otro lado, tanto el emisor como el receptor comparten una clave, denominada serie cifrante, que se corresponde con un conjunto de caracteres o bits aleatorios.</p>
             <p class="text-justify">El cifrado consiste en realizar operaciones matemáticas con cada carácter/bit de la información y de la serie cifrante. Dentro de los cifradores de flujo, entre los que se pueden mencionar RC4, Seal o eSTREAM, el más conocido es el cifrado de Vernam o One Time Pad.</p>
             <p class="text-justify">En él, la operación matemática es el OR-exclusivo (o XOR).</p>
             <img src="../recursos/img/cursos/ifct0109/mf048915b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Criptografía de clave compartida." title="Criptografía de clave compartida.">
             <p class="text-justify"><strong>Cifradores síncronos</strong></p>
             <p class="text-justify">Estos cifradores se caracterizan por que la generación de la serie cifrante (K), que se construye a partir de una clave base, es independiente del texto en claro (M) y del criptograma (C).</p>
             <img src="../recursos/img/cursos/ifct0109/mf048915c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Cifrador síncrono." title="Cifrador síncrono.">
             <p class="text-justify">Los cifradores de flujo síncronos tienen las siguientes propiedades:</p>
             <ul class="pl-3">
                 <li class="text-justify"><strong>Sincronización entre emisor y receptor.</strong> Los participantes involucrados en la transmisión han de estar sincronizados, ya que, de lo contrario, el descifrado sería incorrecto.
                 <li class="text-justify"><strong>Inexistencia de errores de propagación.</strong> Si un bit/carácter es modificado durante la transmisión, pero no eliminado, solo dicho elemento será incorrecto al llegar al receptor. El error no afecta a otros bits.
                 <li class="text-justify"><strong>Ataques activos.</strong> Un ataque de borrado o inserción puede afectar a la sincronización, siendo posible que el receptor lo identifique. Asimismo, un ataque de modificación contra un conjunto de bits/caracteres provoca que partes del texto en claro no sean comprensibles, Io cual alertaría al receptor.
             </ul><br/>
             <p class="text-justify"><strong>Cifradores autosíncronos</strong></p>
             <p class="text-justify">Estos cifradores, también conocidos como asíncronos, se caracterizan por que la serie cifrante (K) es generada en función de una clave base y de un conjunto fijo de caracteres previamente cifrados</p>
             <img src="../recursos/img/cursos/ifct0109/mf048915d.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Cifrador autosíncrono." title="Cifrador autosíncrono.">
             <p class="text-justify">Los cifradores autosíncronos presentan las siguientes propiedades:</p>
             <ul class="pl-3">
                 <li class="text-justify"><strong>Sincronización automática de emisor y receptor. .</strong> El descifrado depende de un conjunto de caracteres que preceden al criptograma. </li>
                 <li class="text-justify"><strong>Errores limitados de propagación. .</strong> Suponiendo que un cifrador autosíncrono depende de un número t de caracteres que preceden al criptograma, si un bit/carácter es modificado, solo se verán afectados un máximo de t.</li>
                 <li class="text-justify"><strong>Ataques activos. </strong> Cualquier modificación, eliminación o inserción provoca que un conjunto de bits/caracteres no sean recibidos correctamente, de modo que hay muchas posibilidades de que un ataque pueda ser detectado. </li>
                 <li class="text-justify"><strong>Difusión estadística en el texto en claro. </strong> Dado que cada bit/carácter del texto en claro influye en el siguiente, las propiedades estadísticas están dispersas en el criptograma. Por ello, este tipo de cifradores son más resistentes que los síncronos a ataques basados en la redundancia del texto en claro.</li>
             </ul><br/>
             <p class="text-justify"><strong>Cifradores de bloque</strong></p>
             <p class="text-justify">Permiten el cifrado de un gran conjunto de símbolos. La información a cifrar se divide en bloques de una determinada longitud (tamaños típicos 64, 128 y 256 bits) y cada uno de ellos se cifra con una misma clave.</p>
             <p class="text-justify">Uno de los métodos de cifrado de bloques más destacable es el cifrado de Feistel, el cual es utilizado por algunos de los algoritmos más conocidos, como es el Data Encryption Standard (DES), presentado más adelante.</p>
             <img src="../recursos/img/cursos/ifct0109/mf048915e.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Cifrado de bloques." title="Cifrado de bloques.">
             <p class="text-justify"><strong>Electronic Code Book (ECB)</strong></p>
             <p class="text-justify">Un mismo bloque de entrada (P, en la figura) genera un mismo bloque de salida (C). El proceso de cifrado y descifrado, mostrado en la siguiente imagen, es equivalente, a cada bloque se le aplica una función de cifrado o de descifrado junto con una clave (K).</p>
             <p class="text-justify"><strong>Cipher Block Chaining (CBC)</strong></p>
             <p class="text-justify">En el proceso de cifrado a cada bloque se le aplica una XOR con el bloque cifrado anterior y sobre el resultado se ejecuta una función de cifrado junto con una clave. De forma similar, al descifrar, tras aplicar a un bloque cifrado la función de descifrado, al resultado se le aplica una función XOR con el bloque cifrado anterior</p>
             <p class="text-justify"><strong>Cipher Feedback (CFB)</strong></p>
             <p class="text-justify">el proceso de cifrado consiste en, primero, aplicar una función de cifrado sobre un bloque cifrado anteriormente (C¡) y segundo, realizar una XOR del resultado con el siguiente bloque de texto en claro (P¡+¡). De forma similar, el descifrado consiste en aplicar la misma función de cifrado sobre un bloque cifrado anterior y, tras ello, ejecutar una XOR con el resultado de dicha operación y el bloque a descifrar.</p>
             <p class="text-justify"><strong>Output Feedback (OFB)</strong></p>
             <p class="text-justify">Los cifrados y descifrados son similares a CFB. La diferencia radica en que en ambas operaciones la entrada a la función de cifrado se corresponde con la salida de la función anterior</p>
             <p class="text-justify">
                 <strong>Counter Mode (CTR)</strong> </p> <p class="text-justify">Los procesos de cifrado y descifrado son análogos. A cada bloque se le realiza una XOR con un nonce al que previamente se le aplica una función de cifrado (equivalente en cifrado y descifrado).
             </p>
             <p class="text-justify">La criptografía de clave pública hace uso de claves distintas para el cifrado y el descifrado de los mensajes, de modo que cada usuario tiene un par de claves: una pública y una privada. En concreto, el usuario escoge una clave privada y, por medio de una relación matemática, se obtiene la clave pública, garantizándose la unicidad de dicha pareja de claves. El esquema general de un algoritmo asimétrico se presenta en la siguiente imagen.</p>
             <!-- <img src="../recursos/img/cursos/ifct0109/mf048915f.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title=""> -->
             <p class="text-justify">En función de la relación matemática utilizada, se distinguen:</p>
             <ul class="pl-3">
                 <li class="text-justify"><strong>Reversibles</strong> las operaciones de cifrar y descifrar el mensaje se anulan entre sí, por lo que es posible obtener el mensaje en claro a partir del cifrado. El algoritmo reversible más popular es RSA (descrito más adelante).</li>
                 <li class="text-justify"><strong>Irreversibles</strong> no es posible obtener el texto en claro a partir del texto cifrado. Este tipo de algoritmos permiten verificar con la clave pública correspondiente que una determinada firma, realizada por la clave privada asociada, es correcta. Por este motivo, este tipo de algoritmos se conocen con el nombre de solo-firma (signature- only). Uno de los algoritmos irreversibles más conocidos es El Gamal (descrito más adelante).</li>
             </ul>
             <!-- <img src="../recursos/img/cursos/ifct0109/mf048915g.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title=""> -->
             <p class="text-justify">Es importante considerar que los sistemas de clave pública han de basarse en problemas matemáticos (conocidos como problemas NP y NP-completos) que sean complejos de resolver con la ayuda de ordenadores. Los algoritmos más conocidos, descritos más adelante, son el algoritmo RSA, basado en el problema de la factorización, y el algoritmo El Gamal, basado en el problema del logaritmo discreto.</p>
             <p class="text-justify"><strong>Problema de la factorización (Ej. RSA)</strong></p>
             <p class="text-justify">Calcular la descomposición de un número como producto de números primos elevados a potencias.</p>
             <p class="text-justify">Por ejemplo: 3630 = 10*363 = 2*3*5*121 = 2*3*5*112</p>
             <p class="text-justify"><strong>Problema del logaritmo discreto (Ej. El Gamal)</strong></p>
             <p class="text-justify">El logaritmo consiste en calcular la potencia x, a la que hay que elevar un número, utilizando como base a, para obtener otro número dado b, logab=x.</p>
             <p class="text-justify">Por ejemplo: In 375 = 5,926926 log10 375 = 2,574031 log2 375 = 8,</p>
             <p class="text-justify"><strong>Criptografía de clave pública, curvas elípticas</strong></p>
             <p class="text-justify">La criptografía de curvas elípticas es una alternativa de la criptografía de clave pública cuya aparición está basada en la eficiencia de los algoritmos de curvas elípticas que estaban siendo desarrollados y en los progresos en la resolución de los cálculos relacionados con el problema del logaritmo discreto, puesto que algunos de los algoritmos de clave pública existentes se están consiguiendo romper (o criptoanalizar, tal y como se explicó anteriormente) y se hace indispensable el aumento del tamaño de las claves de cifrado.</p>
             <p class="text-justify">Entre las ventajas principales de esta rama de la criptografía está la utilización de claves de menor tamaño que en criptosistemas de clave pública. Esto acelera el cálculo de las claves, disminuyendo la cantidad de memoria utilizada y reduciendo el coste de transferencia de datos. </p>
             <p class="text-justify">En la actualidad, la criptografía de curvas elípticas es susceptible de ser utilizada en dispositivos móviles, tarjetas inteligentes o redes de sensores, entre otras aplicaciones.</p>
         </div>
     </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4115" role="button">Características y atributos de los certificados digitales.</a>
     <div class="collapse" id="U4115">
         <div class="card card-body text-info">
             <p class="text-justify">Un certificado digital es un documento electrónico que vincula a una entidad (persona, servidor, etc.) con un par de claves que pueden utilizarse tanto para firmar digitalmente como para cifrar. La clave pública se almacena dentro del certificado mientras que la privada tendrá que ser almacenada y protegida por la entidad correspondiente.</p>
             <p class="text-justify">Atendiendo a la definición de certificado, hay que subrayar la necesidad de tener control sobre nuestra clave privada, evitando posibles pérdidas, en cuyo caso sería necesario realizar la revocación del certificado asociado. Revocar un certificado consiste en invalidarlo, consiguiendo que posteriores usos de la clave privada no se consideren legítimos.</p>
             <p class="text-justify">Los certificados se pueden utilizar en distintas operaciones electrónicas. En base a las clases de certificados establecidas por VeriSign, se encuentran los certificados de:</p>
             <ul class="pl-3">
                 <li class="text-justify">Clase 1, para los usuarios, especialmente para el correo.</li>
                 <li class="text-justify">Clase 2, para las organizaciones, de modo que se pueda probar su identidad.</li>
                 <li class="text-justify">Clase 3, para los servidores y las firmas de los programas.</li>
                 <li class="text-justify">Clase 4, para trámites online entre empresas.</li>
                 <li class="text-justify">Clase 5, para empresas privadas y de seguridad gubernamentales.</li>
             </ul><br/>
             <p class="text-justify">Hay que tener en cuenta la falta de estandarización de estas clases, de modo que es posible la existencia de otra clasificación en función del vendedor (AC) escogido.</p>
         </div>
     </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4116" role="button">Identificación y descripción del funcionamiento de los protocolos de intercambio de claves usados más frecuentemente.</a>
     <div class="collapse" id="U4116">
         <div class="card card-body text-info">
             <p class="text-justify">Los protocolos de intercambio de claves son mecanismos por los que un par de entidades se comunican sobre un canal inseguro para generar una clave secreta común.
                 <p class="text-justify">El diseño y análisis de los protocolos de claves no es sencillo y hay numerosos modos de realizarlo. Se han de considerar las siguientes características:</p>
                 <p class="text-justify"><strong>Naturaleza de la autenticación:</strong> determinar si las entidades que participan han de estar autenticadas, así como la clave.</p>
                 <p class="text-justify"><strong>Reciprocidad de la autenticación:</strong> la autenticación puede realizarse de forma unilateral o mutua.</p>
                 <p class="text-justify"><strong>Frescura de la clave:</strong> la frescura se corresponde con el periodo de validez de una clave, es decir, la clave ha de permanecer fresca, evitando que pueda ser comprometida por un atacante.</p>
                 <p class="text-justify"><strong>Control sobre la clave:</strong> en algunos protocolos una única entidad escoge una clave y se la envía a la otra parte. Sin embargo, otros protocolos permiten que ambas partes interactúen para establecer una clave derivada de la información proporcionada por ambas.</p>
                 <p class="text-justify"><strong>Eficiencia:</strong> se ha de considerar el número de mensajes intercambiados, el ancho de banda (bits transmitidos) para la transmisión de los mensajes y la complejidad computacional de cada una de las entidades involucradas.</p>
                 <p class="text-justify"><strong>Requisitos de tercera parte:</strong> ante la necesidad de involucrar a una tercera entidad en el protocolo, se ha de considerar si es on-line u off-line.</p>
                 <p class="text-justify"><strong>Uso de certificados, en caso de utilizarse:</strong> en relación con la existencia de una tercera parte, si se requieren certificados se ha de valorar el modo de distribuirlos.</p>
                 <p class="text-justify"><strong>Protocolo Diffie-Hellman</strong></p>
                 <p class="text-justify">Está basado en las propiedades de los logaritmos discretos y no proporciona ningún tipo de autenticación, permitiendo la existencia de un ataque de hombre en el medio.</p>
                 <p class="text-justify text-primary bg-light p-3"><strong>Bob necesita enviarle un texto cifrado a Alice pero sin compartir la clave de cifrado. </strong></p>
                 <ol class="pl-3 text-primary bg-light px-5 py-3">
                     <li class="text-justify">Alice elige un número secreto a=6, el número primo p=23 y la base g=5. Luego envía a Bob la llave pública de Alice (ga mod p), p y g: 56 mod 23 = 8, 23,5 </li>
                     <li class="text-justify">Bob elige un número secreto b=15, luego Bob calcula la llave de cifrado común (ga mod p)b mod p: 815 mod 23 = 2.</li>
                     <li class="text-justify">Bob cifra, con un cifrador simétrico usando la llave de cifrado generada.<br/>
                         TextoCifrado = CifradorSimetrico ( TextoClaro, 2 )
                     </li>
                     <li class="text-justify">Bob envía a Alice el texto cifrado y la llave pública de Bob (gb mod p) :515 mod 23 = 19,</li>
                     <li class="text-justify">Alice calcula (gb mod p)a mod p 196 mod 23 = 2.</li>
                     <li class="text-justify">Alice usa esa clave de cifrado generada para descifrar los datos enviados por Bob <p>TextoClaro = DescifradorSimetrico ( TextoCifrado, 2 )</p>
                     </li>
                 </ol>
         </div>
     </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4117" role="button">Algoritmos criptográficos mas frecuentemente utilizados.</a>
     <div class="collapse" id="U4117">
         <div class="card card-body text-info">
             <p class="text-justify"><strong>Algoritmos de criptografía de clave secreta.</strong></p>
             <ul class="pl-3">
                 <li class="text-justify"><strong>Data Encryption Standard (DES)</strong>
                     <p class="text-justify">El algoritmo DES se basa en un cifrador de bloque en el que la clave es de 64 bits, dividiendo el mensaje en bloques de igual tamaño a la clave. Recuérdese que el bit es la unidad mínima de información y su valor puede ser 'O' o `l'. Además, se hace uso de un total de 16 rondas, en las que se utilizan claves internas de 48 bits. En cuanto a la base matemática que lo soporta, esta consiste en sustituciones, lineales y no lineales, y en permutaciones.</p>
                     <p class="text-justify">En 2001 este algoritmo es sustituido por AES.</p>
                 </li>
                 <li class="text-justify"><strong>Triple DES</strong>
                     <p class="text-justify">En 1999 se crea Triple DES, que consiste en el encadenamiento de tres funciones DES. Particularmente, su forma más común está basada en el uso de dos claves, de forma que se cifra con la primera, el resultado se descifra con la segunda y a su vez el resultado se cifra con la primera.</p>
                 </li>
                 <li class="text-justify"><strong>International Data Encryption Algorithm (IDEA)</strong>
                     <p class="text-justify">IDEA, creado en 1991, tenía como objetivo reemplazar al algoritmo DES. Es un cifrador de bloque que opera sobre bloques de 64 bits, claves de 128 bits y un total de 8 rondas. Además, este algoritmo fue utilizado en las primeras versiones de PGP, uno de los programas de cifrado más comúnmente utilizados en los últimos tiempos.</p>
                     <p class="text-justify">El proceso de funcionamiento de IDEA se basa en ejecutar operaciones algebraicas no conmutativas de grupos algebraicos diferentes (XOR, sumas y multiplicaciones) sobre los bloques y las subclaves utilizadas.</p>
                 </li>
                 <li class="text-justify"><strong>Blowfish</strong>
                     <p class="text-justify">Se desarrolló en 1993 con el objetivo de reemplazar al algoritmo DES o IDEA, pero no llegó a convertirse en estándar. Actualmente Blowfish es un algoritmo público que está a disposición de los usuarios.</p>
                                                            <p class="text-justify">Blowfish es un cifrador de bloque que opera sobre bloques de 64 bits con unos tamaños de claves desde 32 a 448 bits. Su funcionamiento consiste en la ejecución de 16 rondas, aplicando el cifrado de Feistel, en las que se hace uso de claves dependientes de las Cajas S (igual a DES).</p>
             </li>
             <li class="text-justify"><strong>Advanced Encryption Standard (AES)</strong>
                 <p class="text-justify">Como mejora de DES y Triple DES se propone AES, basado en el algoritmo Rijndael. Este algoritmo fue escogido en 2001 por el NIST como el nuevo estándar para comunicaciones gubernamentales, transferencias de fondos bancarios, comunicaciones por satélite y software libre.</p>
                 <p class="text-justify">Es un cifrador de bloque que opera sobre bloques de 128 bits y claves de 120, 192 o 256 bits con subclaves de 128 bits. Este algoritmo es rápido tanto a nivel hardware como software, fácil de implementar y requiere poca memoria. Matemáticamente está basado en cuatro funciones invertibles que se aplican a los bytes de una matriz llamada Estado, durante un número determinado de rondas.</p>
             </li>
             <li class="text-justify"><strong>RSA</strong>
                 <p class="text-justify">Antes de explicar en detalle el funcionamiento del algoritmo, es preciso señalar los dos conceptos básicos sobre los que se desarrolla RSA.</p>
                 <p class="text-justify">En primer lugar, la operación módulo (que aparece en la ya citada aritmética modular) que ya se introdujo anteriormente.</p>
                 <p class="text-justify">El segundo concepto es el indicador de Euler para un determinado número n, que se representa como ø (n). Se define como la cantidad de números naturales menores o iguales a n cuyo máximo común divisor (m.c.d.) con n es exactamente 1. Los números que cumplen esta propiedad se denominan primos relativos.</p>
                 <ul class="pl-3 text-primary bg-light px-5 py-3">
                     <li>p = 61 1º nº primo privado</li>
                     <li>q = 53 2º nº primo privado</li>
                     <li>n = pq = 3233 producto p×q</li>
                     <li>e = 17 exponente público</li>
                     <li>d = 2753 exponente privado</li><br/>
                     <ul class="pl-3 text-primary bg-light">
                         <p>La clave pública es (e, n). La clave privada es (d, n). La función de cifrado es:</p>
                         <li>encrypt ( m ) = me ( mod n ) = m17 ( mod 3233 )</li>
                         <li>Donde m es el texto sin cifrar. La función de descifrado es:
                             <p>decrypt(c) = c d ( mod n ) = c 2753 ( mod 3233 )</p>
                         </li>
                         <li>Donde c es el texto cifrado. Para cifrar el valor del texto sin cifrar 123, calculamos:
                             <p>encrypt(123) = 123 17 ( mod 3233 ) = 855</p>
                         </li>
                         <li>Para descifrar el valor del texto cifrado, calculamos:
                             <p>decrypt(855) = 855 2753 ( mod 3233 ) = 123</p>
                         </li>
                     </ul>
                 </ul>
             </li><br/>
             <li class="text-justify"><strong>El Gamal</strong>
                 <p class="text-justify">Es un algoritmo basado en el protocolo de intercambio de claves Diffie-Hellman. Fue creado en 1984 y es utilizado en versiones recientes del programa de ordenador PGP.</p>
                 <p class="text-justify">El Gamal se basa en el problema del logaritmo discreto y puede utilizarse tanto para cifrar como para firmar, aunque los algoritmos son distintos. Por brevedad, solo se mostrará el algoritmo de firma (que se verá más adelante). La principal diferencia frente a RSA radica en que en El Gamal cada operación de cifrado sobre el mismo dato produce un resultado distinto, lo que complica el criptoanálisis.</p>
             </li>
         </ul>
         <p class="text-justify"><strong>Algoritmos híbridos</strong></p>
         <p class="text-justify">Como se indica en secciones anteriores, la criptografía de clave secreta y pública tiene ventajas y desventajas opuestas. Es posible destacar que la criptografía de clave secreta, en contraposición con la de clave pública, es rápida pero necesita de la existencia de un canal seguro para los intercambios de las claves y, además, la gestión de un elevado número de claves es un proceso complejo.</p>
         <p class="text-justify">Por tanto, haciendo uso de las ventajas de la criptografía de clave pública y privada simultáneamente, se desarrollan los criptosistemas híbridos. Estos algoritmos están basados en la aplicación de un algoritmo de clave pública y otro de clave privada.</p>
         <p class="text-justify">Asumiendo que se desea enviar un mensaje desde A a B, el proceso de ejecución consiste en los siguientes pasos:</p>
         <ol class="pl-3">
             <li class="text-justify">A cifra un mensaje utilizando un algoritmo de cifrado de clave privada, como por ejemplo DES.</li>
             <li class="text-justify">La clave utilizada en el paso anterior (representada por KS) se cifra utilizando un algoritmo de clave pública (como RSA) usando la clave pública de B.</li>
             <li class="text-justify">A envía el resultado de ambas operaciones a B.</li>
             <li class="text-justify">B descifra primero la clave simétrica KS haciendo uso de su clave privada.</li>
             <li class="text-justify">Posteriormente, utiliza KS para descifrar el mensaje.</li>
         </ol><br/>
         <p class="text-justify"><strong>Robustez y eficiencia práctica de los algoritmos</strong></p>
         <ul class="pl-3">
             <li class="text-justify"><strong>Vulnerabilidades del software</strong>
                 <p class="text-justify">Uno de los principales problemas en la aplicación práctica de los algoritmos criptográficos reside en la calidad de su programación. No es extraño encontrar boletines de seguridad que describan la existencia de un error de programación o de configuración que da lugar a la creación de un procedimiento que pone en riesgo la seguridad del algoritmo.</p>
             </li>
             <li class="text-justify"><strong>Gestión de claves</strong>
                 <p class="text-justify">Otra de las cuestiones que suelen provocar incidentes es la inadecuada gestión de las claves. Particularmente, algunos algoritmos de cifrado simétrico no utilizan la clave proporcionada por el usuario. En su lugar, utilizan el resultado de aplicar sobre dicha clave algún proceso, que habitualmente es una función resumen. Gracias a ello, se hace más difícil que un atacante pueda adivinar la clave utilizada. Sin embargo, aparece un problema si dicho proceso es predecible.</p>
                 <p class="text-justify">Igualmente, algunos programas que hacen uso de cifrado incorporan la clave en su interior. De este modo, es posible que un atacante suficientemente preparado pueda extraer dicha clave del código del programa.</p>
             </li>
             <li class="text-justify"><strong>Relevancia de la auditoría y certificación</strong>
                 <p class="text-justify">Con el fin de garantizar que un determinado programa hace lo que debe hacer, en los últimos tiempos se está generalizando la realización de auditorías sobre el código del programa. Dado que una parte significativa de algoritmos criptográficos están descritos en sus respectivas normas (e.g. estándares ISO, FIPS, etc.) permite que se pueda realizar una verificación objetiva del funcionamiento.</p>
                 <p class="text-justify">Por ejemplo, el National Institute of Standards and Technology de Estados Unidos (NIST) verifica el cumplimiento de la norma FIPS 140-1 relativa al funcionamiento de módulos criptográficos. Si la verificación es satisfactoria, se obtiene la certificación “FIPS 140-1 Validated”.</p>
             </li>
             <li class="text-justify"><strong>Eficiencia práctica</strong>
                 <p class="text-justify">La utilización práctica de estos algoritmos está sujeta en buena medida a su eficiencia computacional. Así, debe consumir pocos recursos computacionales (memoria, procesador), ejecutarse en poco tiempo y, en dispositivos con batería reducida (e.g. teléfonos móviles), debe emplear una cantidad moderada de energía.</p>
                 <p class="text-justify">Para alcanzar estos objetivos y, de paso, garantizar una mayor disponibilidad, se puede recurrir a programarlos físicamente. En ellos, la secuencia de operaciones no está programada, sino definida en un circuito lógico. Con ello mejora la eficiencia de la ejecución al evitarse la sobrecarga de la propia ejecución del código.</p>
                 <p class="text-justify">Otra de las posibilidades es la utilización de coprocesadores criptográficos, es decir, procesadores especialmente optimizados para tareas lógicas. A diferencia de las implementaciones físicas, los coprocesadores no son específicos de un algoritmo concreto, sino que incluyen funciones que aceleran los cálculos habituales en los procesos criptográficos</p>
             </li>
         </ul>
     </div>
 </div>
 <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4118" role="button">Elementos de los certificados digitales, los formatos comúnmente aceptados y su utilización</a>
 <div class="collapse" id="U4118">
     <div class="card card-body text-info">
         <p class="text-justify">Existen distintos formatos de certificados, pudiendo destacar los certificados X.509 y PGP.</p>
         <p class="text-justify">Ambos tipos presentan importantes diferencias pero el contenido es similar. En líneas generales, los certificados contienen:</p>
         <ul class="pl-3">
             <li class="text-justify">Número de serie.</li>
             <li class="text-justify">Nombre de la entidad emisora.</li>
             <li class="text-justify">Periodo de validez.</li>
             <li class="text-justify">Nombre del sujeto propietario del certificado.</li>
             <li class="text-justify">Clave pública del sujeto propietario del certificado.</li>
         </ul><br/>
         <p class="text-justify"><strong>Certificados X.509</strong></p>
         <p class="text-justify">Los certificados X.509 presentan 3 versiones, siendo la última versión la vigente en la actualidad.</p>
         <p class="text-justify">El principal contenido de los certificados x.509v3 es el siguiente:</p>
         <ul class="pl-3">
             <li class="text-justify"><strong>Versión:</strong> número de la versión del certificado, actualmente puede utilizarse 1, 2 o 3.</li>
             <li class="text-justify"><strong>Número de serie:</strong> número entero único asignado por la AC emisora.</li>
             <li class="text-justify"><strong>Identificador del algoritmo de firma:</strong> identificador de firma del certificado.</li>
             <li class="text-justify"><strong>Nombre del emisor:</strong> nombre de la AC que emite el certificado.</li>
             <li class="text-justify"><strong>Validez:</strong> fecha de inicio de validez de certificado y fecha de fin.</li>
             <li class="text-justify"><strong>Nombre del sujeto:</strong> nombre del usuario al que se le otorga el certificado.</li>
         </ul>
         <p class="text-justify">Se estructura de acuerdo al <strong>estándar X500</strong> y pretende ser único a través de Internet.</p>
         <p class="text-justify"><strong>Información de la clave pública del sujeto:</strong> clave pública del sujeto, parámetros asociados a la clave e identificador del algoritmo con el que ha de utilizarse la clave.</p>
         <p class="text-justify"><strong>Firma digital del emisor:</strong> firma de la AC emisora.</p>
         <p class="text-justify"><strong>Extensiones (opcional):</strong> proporcionan información adicional y pueden dividirse en tres categorías:</p>
         <ul class="pl-3">
             <li class="text-justify"><strong>Información de la clave y la política.</strong></li>
             <li class="text-justify"><strong>Atributos del sujeto y dela AC emisora.</strong></li>
             <li class="text-justify"><strong>Limitaciones del camino de los certificados.</strong></li>
         </ul><br/>
         <p class="text-justify"><strong>Certificados PGP</strong></p>
         <p class="text-justify">Pretty Good Privacy (PGP) es un algoritmo desarrollado en 1991 por Phil Zimmermann con el propósito de transmitir información por Internet de forma segura, haciendo uso de la criptografía de clave pública. Actualmente PGP sigue el estándar de OpenPGP.</p>
         <p class="text-justify">Al contrario que los certificados X509 que son emitidos por AC, los certificados de PGP son habitualmente creados por los propios usuarios. Cada usuario crea un par de claves (pública-privada), almacenando la pública en un certificado PGP y haciendo uso de las mismas de igual modo que con otros certificados.</p>
            <p class="text-justify"><strong>Certificados PGP</strong></p>
            <p class="text-justify">El contenido de los certificados PGP se puede resumir en:</p>
            <ul class="pl-3">
                <li class="text-justify">Número de versión: identifica el número de la versión de PGP utilizada para crear las claves asociadas al certificado.</li>
                <li class="text-justify">Clave pública: clave pública del propietario del certificado.</li>
                <li class="text-justify">Algoritmo de creación de claves: algoritmo empleado para la creación de las claves asociadas al certificado.</li>
                <li class="text-justify">Información del sujeto: datos del propietario del certificado como son su nombre, dirección de correcto, etc.</li>
                <li class="text-justify">Firma digital del sujeto: se denomina auto-firma y se corresponde con la firma del certificado, haciendo uso de la clave privada asociada al mismo. De este modo, el certificado se considera auto-firmado.</li>
                <li class="text-justify">Periodo de validez: fecha de inicio y de fin de validez del certificado.</li>
                <li class="text-justify">Algoritmo simétrico preferido: elección del algoritmo de cifrado de clave privada que el propietario del usuario prefiere utilizar.</li>
            </ul>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4119" role="button">Elementos fundamentales de las funciones resumen y los criterios para su utilización</a>
    <div class="collapse" id="U4119">
        <div class="card card-body text-info">
            <p class="text-justify">En el ámbito de la criptografía, se denominan funciones resumen a aquellos procedimientos que, dado un mensaje de un tamaño cualquiera, producen una salida de un tamaño fijo. Como consecuencia de esta definición, el conjunto de mensajes de entrada es siempre mayor que el de las salidas. Por ello, parece claro que más de un mensaje de entrada ofrecerá la misma salida. A esta situación se le denomina colisión.</p>
            <p class="text-justify">Las aplicaciones más extendidas de las funciones resumen son el control de integridad y la creación de firmas digitales. Gracias a las funciones resumen, ambas cuestiones se realizan de forma más eficiente.</p>
            <p class="text-justify">Funciones resumen criptográficamente robustas. Dichas funciones deben satisfacer las tres propiedades siguientes:</p>
            <ul class="pl-3">
                <li class="text-justify">Resistencia a la primera pre-imagen. A partir de la salida de la función, debe ser computacionalmente imposible obtener el mensaje de entrada.</li>
                <li class="text-justify">Resistencia a la segunda pre-imagen. Dado un mensaje de entrada, debe ser computacionalmente imposible encontrar otro mensaje que produzca la misma salida de la función.</li>
                <li class="text-justify">Resistencia a colisiones. Es computacionalmente imposible encontrar dos mensajes de entrada que produzcan el mismo resumen.
                </li>
            </ul><br/>
            <p class="text-justify">A fin de satisfacer las propiedades anteriores, las funciones resumen se basan en el concepto efecto avalancha. Dicho efecto produce que un cambio en un bit de entrada produzca un cambio en la mitad de los bits de la salida. Con ello, la salida de la función resumen se comporta de una manera aleatoria, lo que dificulta la búsqueda de colisiones.</p>
            <p class="text-justify">Por tanto, considerando todo lo anterior, se puede indicar que las funciones resumen tienen las propiedades de:</p>
            <ul class="pl-3">
                <li class="text-justify"><strong>Difusión</strong>, asociado con el efecto avalancha.</li>
                <li class="text-justify"><strong>Determinismo</strong>, la misma función sobre los mismos datos producen el mismo resultado.</li>
                <li class="text-justify"><strong>Eficiencia</strong>, rápidas tanto en hardware como en software</li>
            </ul><br/>
            <p class="text-justify"><strong>Funciones resumen con clave</strong></p>
            <p class="text-justify">Además de las anteriores funciones resumen, existe una variante conocida como funciones resumen con clave, comúnmente conocidas como HMAC. En este caso, la salida se calcula en función del mensaje de entrada y de la clave introducida. Dado que se emplea una clave durante el proceso, permite autenticar el origen del mensaje.</p>
            <p class="text-justify">Un caso de ejemplo sería un banco electrónico que quiere evitar transferencias no deseadas. Si cada cliente dispone de una clave compartida con el banco, se puede enviar junto con la orden de transferencia, el resultado de aplicar la función HMAC sobre este mensaje usando la citada clave. El banco puede estar seguro de que la orden ha sido efectuada por alguien que conocía la clave.</p>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U411A" role="button">Requerimientos legales incluidos en la ley 59/2003, de 19 de diciembre, de firma electrónica</a>
    <div class="collapse" id="U411A">
        <div class="card card-body text-info">
            <p class="text-justify">La Ley 59/2003 dota de marco legal a la utilización de la firma electrónica. La firma electrónica, de acuerdo a la definición prevista en la Ley, es “el conjunto de datos en forma electrónica, consignados junto a otros o asociados con ellos, que pueden ser utilizados como medio de identificación del firmante”. Así, la firma electrónica es un mecanismo que permite la autenticación del emisor.</p>
            <p class="text-justify">Se denominan prestadores de servicios de certificación, a cualquier persona física o jurídica que expida certificados electrónicos o, en general, preste cualquier servicio relacionado con la firma electrónica. Entre las obligaciones que se imponen a estas entidades está proteger los datos personales, no almacenar ni copiar los datos que sirven para crear una firma electrónica por parte del titular del certificado y proporcionar la información correspondiente sobre el proceso de certificación a la persona afectada.</p>
            <p class="text-justify">Entre los certificados electrónicos que pueden utilizarse para acreditar electrónicamente la identidad de un sujeto, la Ley introduce el concepto de certificado reconocido como aquel expedido por un prestador de servicios de certificación que cumpla una serie de condiciones.</p>
            <p class="text-justify">Particularmente, deben comprobar la identidad del sujeto, verificar que la información contenida en el certificado es exacta y asegurarse de que el sujeto está en posesión de los datos de creación de firma.</p>
            <p class="text-justify">Con respecto al uso del Documento Nacional de Identidad electrónico (DNIe), el texto establece que es el documento que acredita la identidad del titular y que permite la firma de documentos. Se impone que la entidad encargada de emitirlo deberá cumplir las condiciones impuestas a los prestadores que emitan certificados reconocidos. De esta manera, los certificados que constan en el DNIe son reconocidos.</p>
            <p class="text-justify">En lo referente a los dispositivos de verificación, estos deben asegurar que el proceso, además de realizar la verificación (y mostrar el resultado) de forma fiable, cumple los siguientes aspectos:</p>
            <ul class="pl-4">
                <li class="text-justify">Que los datos utilizados para verificar la firma sean los mostrados a la persona que efectúa la verificación.</li>
                <li class="text-justify">Que la persona que verifica la firma pueda establecer si los datos han sido modificados.</li>
                <li class="text-justify">Que se muestren los datos de identidad del firmante y que se verifique su certificado electrónico.</li>
                <li class="text-justify">Que pueda detectarse cualquier cambio que afecte a la seguridad del proceso.</li>
            </ul>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U411B" role="button">Elementos fundamentales de la firma digital, los distintos tipos de firma y los criterios para su utilización.</a>
    <div class="collapse" id="U411B">
        <div class="card card-body text-info">
            <p class="text-justify"><strong>Elementos fundamentales. Esquema básico</strong></p>
            <p class="text-justify">En un sistema de firma digital entran en juego, además del mensaje a firmar, cuatro elementos fundamentales: el algoritmo de firma, el material criptográfico del firmante, la identidad del mismo y el sistema sobre el que se realiza la firma.</p>
            <p class="text-justify">La firma electrónica se asienta sobre los principios de la criptografía de clave pública. Así, el firmante debe disponer de un par de claves pública-privada, que se utilizarán durante el proceso.</p>
            <p class="text-justify">Para la realización de la firma se aplica un algoritmo criptográfico sobre el mensaje en juego, utilizando la clave privada del firmante. Dicho algoritmo puede ser el mismo que se emplea para realizar un cifrado (como en el caso de RSA) 0 puede ser distinto (como sucede con El Gamal).</p>
            <p class="text-justify"><strong>Tipos de firma y criterios de uso</strong></p>
            <p class="text-justify">La Ley define tres tipos de firmas, que se construyen de manera incremental. Así, basándose en la definición de firma electrónica, correspondiente con el primer tipo, se identifica la <strong>firma electrónica avanzada</strong>. Dicha firma permite no solo identificar al firmante, sino también detectar cualquier cambio que se realice sobre los datos firmados. <br/>
            <strong>La firma electrónica reconocida</strong>. Esta variante se construye sobre la avanzada pero exigiendo que se cumplan dos condiciones: que haga uso de un certificado reconocido y que sea creada utilizando un dispositivo seguro de creación de firma. Si se cumplen estas condiciones, el proceso de firma alcanza un elevado grado de seguridad. De hecho, la Ley equipara la firma electrónica reconocida con la firma manuscrita.</p>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U411C" role="button">Criterios para la utilización de técnicas de cifrado de flujo y de bloque.</a>
    <div class="collapse" id="U411C">
        <div class="card card-body text-info">
            <p class="text-justify">Los cifradores de flujo presentan la gran ventaja de ser muy rápidos y sencillos. Además, evitan la propagación de errores en la transmisión y son capaces de descifrar sin necesidad de esperar a que se reciba un bloque entero de datos. No obstante, requiere sincronización (si se cifra un bit, se ha de esperar por el siguiente). Sin embargo, también presenta dos inconvenientes principales. Por un lado, estos cifradores consiguen poca difusión en la información, es decir, cada símbolo en claro se corresponde con un único símbolo cifrado. Por otro lado, es difícil (computacionalmente imposible) conseguir una serie cifrante completamente aleatoria, así como no reutilizarla en numerosas ocasiones. Por estos motivos, la implementación adecuada de estos cifradores es compleja y la seguridad de los mismos se puede ver afectada.</p>
            <p class="text-justify">Por otro lado, los cifradores de bloque también presentan pros y contras. En cuanto a las ventajas, estos destacan por conseguir una alta difusión de los elementos que forman el criptograma. Sin embargo, presentan los inconvenientes de ser vulnerables a ataques si existen bloques repetidos, pueden ocurrir problemas de transmisión y es necesario que los bloques sean múltiplos del tamaño de bloque para evitar rellenar el último bloque y facilitar el criptoanálisis del mismo. También se ha de tener en cuenta, al contrario que los de ﬂujo, la necesidad de disponer de la memoria suficiente para almacenar y procesar cada uno de los bloques.</p>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U411D" role="button">Protocolos de intercambio de claves.</a>
    <div class="collapse" id="U411D">
                <div class="card card-body text-info">
                    <p class="text-justify">Los protocolos de intercambio de claves requieren, con frecuencia, el uso de claves maestras, utilizadas y válidas por un largo periodo de tiempo, y de claves de sesión, empleadas temporalmente entre dos entidades.</p>
                    <p class="text-justify">Estos tipos de protocolos se pueden clasificar según el tipo de claves intercambiadas, secretas o públicas. Asimismo, los intercambios de claves privadas se pueden realizar mediante criptografía simétrica o asimétrica.</p>
                    <p class="text-justify"><strong>Intercambio de claves secretas mediante criptografía simétrica</strong></p>
                    <p class="text-justify">Dos entidades han de intercambiar una clave, secreta entre ambos, la cual ha de ser protegida contra el acceso de la misma por un tercero. </p>
                    <p class="text-justify">Dadas dos entidades, A y B, la distribución de una clave se podría realizar de los siguientes modos:</p>
                    <ul class="pl-3">
                        <li class="text-justify">A genera la clave y se la entrega físicamente a B.</li>
                        <li class="text-justify">Una tercera parte puede elegir la clave y entregarla físicamente a A y B.</li>
                        <li class="text-justify">Si A y B se han comunicado previamente, pueden utilizar la clave anterior para cifrar la actual.</li>
                        <li class="text-justify">Si A y B tienen un enlace seguro con una tercera parte e, e puede generar y reenviar la clave a A y B.</li>
                    </ul><br/>
                    <p class="text-justify">A pesar de la simplicidad de este tipo de protocolos, el hecho de requerir el intercambio previo de una clave, bien físicamente o mediante una tercera parte, supone un gran problema que durante muchos años se pensó irresoluble. No obstante, esto cambió con Whitfield Diffie y Martin E. Hellman cuando, en 1976, surgió la criptografía de clave pública.</p>
                    <p class="text-justify"><strong>Controlando el uso de las claves</strong></p>
                    <p class="text-justify">Utilización de vectores de control, los cuales son un conjunto de campos que especifican el uso y las restricciones de la clave. Los vectores de control son generados conjuntamente con las claves en el centro de gestión de claves y presentan las ventajas de no tener limitación de tamaño y de ser distribuidos en claro.</p>
                    <p class="text-justify">El protocolo sería el siguiente:</p>
                    <ol class="pl-3">
                        <li class="text-justify">A envía a B los datos N1 + IDA, cifrados con la clave pública de B, a modo de identificación de la transacción.</li>
                        <li class="text-justify">B obtiene esos datos y envia N2 + N1 a A, cifrado con su clave pública. Puesto que sólo B podría haber descifrado el mensaje enviado en 1, la presencia de N1 en este mensaje asegura a A que la entidad con la que se está comunicando es B.</li>
                        <li class="text-justify">A obtiene N2+ N1 y envía a B N2 (con lo que demuestra a B que es realmente A) y una clave de sesión (KS) firmada.</li>
                        <li class="text-justify">B obtiene KS. La firma garantiza que sólo A ha podido mandarlo y, al cifrarlo con la clave pública de B, se asegura de que sólo B puede recibirlo.</li>
                    </ol><br/>
                    <p class="text-justify">Por tanto, con este esquema se garantiza confidencialidad y autenticidad en los mensajes intercambiados.</p>
                    <p class="text-justify"><strong>Intercambio de claves públicas</strong></p>
                    <p class="text-justify">Muchas han sido las técnicas propuestas para la distribución de claves públicas. Todas ellas se pueden agrupar en los protocolos de:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Anuncio público</li>
                        <li class="text-justify">Directorio público</li>
                        <li class="text-justify">Autoridad de clave pública</li>
                        <li class="text-justify">Certificados de clave pública</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U411E" role="button">Uso de herramientas de cifrado tipo PGP, GPG o CryptoLoop.</a>
            <div class="collapse" id="U411E">
                <div class="card card-body text-info">
                    <p class="text-justify">La herramienta GPG permite cifrar y firmar documentos. Para la firma y, en general, para el cifrado de clave pública, es necesario disponer de un par de claves pública-privada junto con el certificado correspondiente. Para crear estos materiales, se hace uso de la utilidad Kleopatra, instalada junto con la herramienta.</p>
                    <ul class="pl-3">
                        <li class="text-justify">Creación del certificado.</li>
                        <li class="text-justify">Uso del certificado para cifrar.</li>
                        <li class="text-justify">Descifrando un fichero recibido.</li>
                    </ul>
                </div>
            </div>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 2. APLICACIÓN DE UNA INFRAESTRUCTURA DE CLAVE PÚBLICA (PKI)
        <ul class="list-group">
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4121" role="button">Identificación de los componentes de una PKI y su modelo de relaciones.</a>
            <div class="collapse" id="U4121">
                <div class="card card-body text-info">
                    <p class="text-justify"><strong>Entidades participantes</strong></p>
                    <p class="text-justify">La entidad que emite un certificado de clave pública se denomina Autoridad de Certificación (en adelante CA, del inglés Certiffication Authority). Sus funciones son similares a las de un notario, en tanto que acredita o certifica la identidad de una determinada entidad. Esta cuestión es clave para la autenticación, la cual es fundamental para una parte importante de los intercambios de datos que se producen en Internet.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf048922a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Funciones de la autoridad de certificación." title="Funciones de la autoridad de certificación.">
                    <img src="../recursos/img/cursos/ifct0109/mf048922b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Elementos de una infraestructura de clave púvlica." title="Elementos de una infraestructura de clave púvlica.">
                    <p class="text-justify"><strong>Modelo de relaciones</strong></p>
                    <p class="text-justify">Las autoridades en una PKI se relacionan habitualmente de manera jerárquica. No obstante, más adelante se presentarán otras alternativas.</p>
            <p class="text-justify">En el modelo jerárquico, se establece una CA raíz en la que se deposita toda la confianza. Por debajo de esta CA pueden existir una o varias CA subordinadas, las cuales tienen la potestad de emitir y gestionar certificados digitales.</p>
            <p class="text-justify"><strong>Arquitectura de una PKI</strong></p>
            <p class="text-justify"><strong>Red</strong></p>
            <p class="text-justify">Las CA se verifican independiente unas a otras, dando como resultado una red de confianza entre las CA cercanas.</p>
            <p class="text-justify"><strong>Puente</strong></p>
            <p class="text-justify">Este tipo fue diseñado para conectar las PKI de dos empresas con independencia del tipo de arquitectura (jerárquica o de red). Para ello, se introduce una nueva CA, denominada CA puente (Bridge CA), cuya función es establecer relaciones entre las PKI de las empresas correspondientes.</p>
            <img src="../recursos/img/cursos/ifct0109/mf048922c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="PKI Arquitecturas." title="PKI Arquitecturas.">
            <img src="../recursos/img/cursos/ifct0109/mf048922d.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="PKI Aquitectura puente." title="PKI Arquitectura puente.">
            <p class="text-justify"><strong>Arquitectura física</strong></p>
            <p class="text-justify">Una de las soluciones más comunes se basa en crear un directorio, en el que se almacenan las claves públicas, situado en el exterior del cortafuegos. A este directorio, dada su localización, se le conoce con el nombre de directorio de borde.</p>
            <p class="text-justify">Por otra parte, habría un directorio principal, dentro del cortafuegos, el cual actualizaría periódicamente el directorio de borde.</p>
            <p class="text-justify">Por este motivo, al directorio de borde accederían las entidades de las empresas externas y al directorio principal accederían las entidades de la propia empresa. Todo lo comentado se presenta en la siguiente imagen.</p>
            <img src="../recursos/img/cursos/ifct0109/mf048922e.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="PKI Arquitectura física." title="PKI Arquitectura física.">
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4122" role="button">Autoridad de certificación y sus elementos.</a>
    <div class="collapse" id="U4122">
        <div class="card card-body text-info">
            <p class="text-justify"><strong>Funciones de gestión (norma x.509)</strong></p>
            <ul class="pl-3">
                <li class="text-justify">Identificación del registro</li>
                <li class="text-justify">Inicialización</li>
                <li class="text-justify">Certificación</li>
                <li class="text-justify">Copia de respaldo</li>
                <li class="text-justify">Actualización del par de claves</li>
                <li class="text-justify">Revocación de la clave</li>
                <li class="text-justify">Certificación cruzada</li>
            </ul><br/>
            <p class="text-justify"><strong>Validación de una cadena de certificación</strong></p>
            <p class="text-justify"><strong>El proceso, persigue comprobar que:</strong></p>
            <ul class="pl-3">
                <li class="text-justify">El primer certificado de la cadena pertenece a una CA de confianza o ha sido emitido por ella. De acuerdo a la norma X. 509, este certificado es auto-firmado (es decir, se refiere a la misma entidad que lo firma).</li>
                <li class="text-justify">Para cada uno de los certificados intermedios, se cumple que:</li>
                <ul class="pl-3">
                    <li class="text-justify">La entidad que figura como sujeto de un certificado es la que emite el certificado siguiente.</li>
                    <li class="text-justify">Todos los certificados en juego eran válidos en el momento de su utilización.</li>
                </ul>
                <li class="text-justify">El último certificado de la cadena es el de la entidad final que participa en el proceso.</li>
                <li class="text-justify">A lo largo de la cadena no pueden producirse ciclos (un mismo certificado no puede aparecer más de una vez).</li>
            </ul>
            <img src="../recursos/img/cursos/ifct0109/mf048923a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Cadena de certificación." title="Cadena de certificación.">
            <p class="text-justify"><strong>VAspectos prácticos: validación en los navegadores</strong></p>
            <p class="text-justify">Como parte de la navegación por Internet, los navegadores realizan de manera automática la validación de los certificados. Esto ocurre, por ejemplo, cuando se ingresa en una página utilizando el protocolo SSL, que se presentará más adelante.</p>
            <p class="text-justify">Gracias a esta validación, el usuario que navega puede tener la plena garantía de que se está conectando a la página legítima y no a una copia manipulada.</p>
            <p class="text-justify">Para que esta validación se pueda realizar de manera automática, el navegador debe conocer cuáles son las CA raíz que son confiables.</p>
            <img src="../recursos/img/cursos/ifct0109/mf048923b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Autoridades de certificación confiables." title="Autoridades de certificación confiables.">
            <img src="../recursos/img/cursos/ifct0109/mf048923c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Aviso de certificado no confiable." title="Aviso de certificado no confiable.">
            <img src="../recursos/img/cursos/ifct0109/mf048923d.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Aviso de certificado caducado o no válido." title="Aviso de certificado caducado o no válido.">
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4123" role="button">Política de certificado y declaración de practicas de certificación (CPS).</a>
    <div class="collapse" id="U4123">
        <div class="card card-body text-info">
            <p class="text-justify"><strong>Política de certificación</strong></p>
            <p class="text-justify">Considerando que un certificado es emitido por una determinada CA, vinculando a una entidad final (por ejemplo, un usuario) con un par de claves, hay que determinar el grado con el que el usuario puede confiar en el certificado obtenido.</p>
            <p class="text-justify">En el estándar X.509 una CP se define como "un conjunto de reglas que indican la
                aplicación de un certificado en una comunidad y/o en un tipo de aplicación con objetivos comunes de seguridad".
            </p>
            <p class="text-justify">En base a esto, se distinguen un par de categorías: </p>
            <ul class="pl-3">
                <li class="text-justify">Las CP que indican la aplicación de un certificado en una comunidad concreta, enfocadas a establecer los requisitos para el uso de los certificados y para los miembros de la comunidad que hace uso de ellos; y</li>
                <li class="text-justify">Las CP que indican la aplicación de un certificado a un tipo de aplicación con unos objetivos comunes de seguridad, cuyo propósito es identificar el conjunto de aplicaciones y los usos de los certificados y establecer los niveles de seguridad en cada caso, los cuales se dividen en tipos o clases.</li>
            </ul><br/>
            <p class="text-justify">Además, esta última categoría establece los requisitos que la PKI ha de cumplir en las aplicaciones y usos identificados.</p>
            <p class="text-justify"><strong>Declaración de prácticas de certificación</strong></p>
            <p class="text-justify">El término CPS (Certification Practice Statements) se define como "declaración de las prácticas que una CA ha de realizar a la hora de expedir certificados".</p>
            <p class="text-justify">Asimismo, incluye la emisión, la revocación y la renovación de certificados</p>
            <p class="text-justify">Una CPS se puede definir como una declaración realizada por una determinada CA que indica la confianza del sistema asociado y los procedimientos utilizados en la ejecución de las operaciones realizadas</p>
            <p class="text-justify"><strong>Diferencias entre política de certificación y declaración de prácticas de certificación</strong></p>
            <ul class="pl-3">
                <li class="text-justify">El objetivo de la CP es establecer qué deben hacer los participantes. En cambio, la CPS determina cómo una CA y sus participantes, en un determinado dominio, implementan los procedimientos y controles para satisfacer los requisitos establecidos por la CP.</li>
                <li class="text-justify">CP sirve para transmitir mínimas guías de operación a seguir por PKI que son compatibles (interoperables) entre sí. Por tanto, una CP es generalmente aplicable a múltiples CA, organizaciones o dominios. Por el contrario, una CPS es aplicable a una única CA u organización, la cual no es generalmente utilizada para facilitar interoperabilidad.</li>
                <li class="text-justify">Una CPS generalmente incluye más detalle que una CP y especifica cómo las CA han de satisfacer los requisitos establecidos en una o varias CP bajo los cuales emiten los certificados.</li>
            </ul><br/>
            <p class="text-justify"><strong>Provisiones: política de certificación y declaración de prácticas de certificación</strong></p>
            <p class="text-justify">Es posible indicar, tal y como establece la norma RFC 3647, que el contenido de un conjunto de provisiones se corresponde con el siguiente marco compuesto por nueve componentes:
            </p>
            <ul class="pl-3">
                <li class="text-justify">Introducción.</li>
                <li class="text-justify">Publicación y repositorio.</li>
                <li class="text-justify">Identificación y autenticación.</li>
                <li class="text-justify">Ciclo de vida de los certificados, requisitos operaciones.</li>
                <li class="text-justify">Facilidades, gestión y controles de operación.</li>
                <li class="text-justify">Controles técnicos de seguridad.</li>
                <li class="text-justify">Perfiles de certificado, CRL y OCSP.</li>
                   <li class="text-justify">Auditoría de cumplimiento.</li>
                   <li class="text-justify">Otros asuntos legales y de negocio.</li>
               </ul>
           </div>
       </div>
       <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4124" role="button">Lista de certificados revocados (CRL).</a>
       <div class="collapse" id="U4124">
           <div class="card card-body text-info">
               <p class="text-justify">Las razones de revocación de un certificado son numerosas y, en base al estándar X.509, estas pueden ser:</p>
               <ul class="pl-3">
                   <li class="text-justify">Inespecífica, ninguna razón se señala.</li>
                   <li class="text-justify">La clave privada asociada al certificado es comprometida.</li>
                   <li class="text-justify">La clave privada de la CA que emitió certificados es comprometida.</li>
                   <li class="text-justify">El propietario del certificado rompe el vínculo con el emisor del certificado y o no tiene derecho de acceso al mismo o no lo necesita.</li>
                   <li class="text-justify">Otro certificado reemplaza a uno existente.</li>
                   <li class="text-justify">La CA que emitió un certificado deja de ser operable.</li>
                   <li class="text-justify">Un certificado se mantiene a la espera de alguna acción. En este estado se considera revocado hasta el momento en que sea activado y nuevamente válido.</li>
               </ul><br/>
               <p class="text-justify"><strong>Formato de una lista de revocación de certificados</strong></p>
               <p class="text-justify">Aunque una CRL se puede definir como una lista con los números de serie de los certificados revocados, la CRL X.509 está compuesta por los siguientes campos:</p>
               <ul class="pl-3">
                   <li class="text-justify">Algoritmo de firma: algoritmo utilizado por la entidad correspondiente para firmar la lista.</li>
                   <li class="text-justify">Valor de la firma: firma de la lista.</li>
                   <li class="text-justify">Nombre emisor: nombre de la CA o de la entidad emisora de CRL encargada de emitir la CRL.</li>
                   <li class="text-justify">Día de emisión: día en el que se realiza la emisión de la CRL.</li>
                   <li class="text-justify">Día emisión nueva lista: día en el que se ha de realizar la emisión de la nueva CRL.</li>
                   <li class="text-justify">Lista de certificados revocados: por cada certificado se ha de indicar su número de serie y el momento de la revocación.</li>
                   <li class="text-justify">Extensiones: campos opcionales como el identificador de la clave utilizada para realizar la firma de la CRL, un nombre alternativo de la entidad emisora de la CRL, identificadores de Delta CRL (CRL que contienen actualizaciones sobre otras distribuidas previamente), etc.</li>
               </ul><br/>
               <p class="text-justify"><strong>Concepto de Delta CRL</strong></p>
               <p class="text-justify">Fragmentos reducidos de CRL que contienen los certificados revocados desde la última lista publicada, para paliar el problema de cómo difundir, en el intervalo entre dos CRL, los certificados que quedan revocados.</p>
               <p class="text-justify">Las Delta CRL suponen una reducción del problema planteado, pero no proporcionan una inmediatez completa. Por este motivo surgió el protocolo OCSP, que se introduce en el apartado siguiente.</p>
               <p class="text-justify"><strong>Online Certificate Status Protocol (OCSP)</strong></p>
               <p class="text-justify">OCSP, definido en la RFC 2560, es un protocolo también utilizado en la revocación de los certificados X.509, el cual se desarrolló como alternativa a las CRL. El propósito de OCSP es facilitar la verificación en línea de los certificados evitando posibles fallos en el proceso de revocación debido a CRL desactualizadas.</p>
               <p class="text-justify">La comunicación entre cliente y servidor se compone de un par de mensajes:</p>
               <ul class="pl-3">
                   <li class="text-justify"><strong>Solicitud:</strong> se realiza desde un cliente OCSP a un servidor OCSP y contiene la versión del protocolo, el servicio solicitado, el identificador del certificado del cual se desea conocer el estado y, opcionalmente, extensiones.</li>
                   <li class="text-justify"><strong>Respuesta:</strong> el servidor OCSP responde al cliente OCSP. Hay múltiples tipos de respuesta y no todas son soportadas por los servidores OCSP, aunque sí un tipo básico.</li>
               </ul>
           </div>
       </div>
       <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4125" role="button">Funcionamiento de las solicitudes de firma de certificados (CSR).</a>
       <div class="collapse" id="U4125">
           <div class="card card-body text-info">
               <p class="text-justify">La solicitud de firma de un certificado (del inglés Certijicate Signing Request, CSR), es un formato para realizar la solicitud de certificados, definidos en el estándar PKCS#10/RFC 2986.</p>
               <p class="text-justify">En el proceso de solicitud de un certificado se pueden distinguir las siguientes fases:</p>
               <ul class="pl-3">
                   <li class="text-justify">La entidad que solicita el certificado construye una solicitud del mismo, la cual está compuesta por tres grandes campos de información:</li>
                   <ul class="pl-3">
                       <li class="text-justify">Información de solicitud del certificado. Esta información contiene:</li>
                       <ul class="pl-3">
                           <li class="text-justify">Firma de la solicitud. Versión de la solicitud.</li>
                           <li class="text-justify">Nombre del solicitante.</li>
                           <li class="text-justify">Clave pública del solicitante.</li>
                           <li class="text-justify">Otros atributos.</li>
                       </ul>
                       <li class="text-justify">Firma de la solicitud.</li>
                       <li class="text-justify">Algoritmo utilizado para realizar la firma.</li>
                   </ul>
                   <li class="text-justify">El solicitante firma la solicitud (con su clave privada).</li>
                   <li class="text-justify">La solicitud, la firma y el algoritmo de firma son enviados a la CA deseada o a una AR delegada, la cual completa la petición autenticando al solicitante y verificando la firma realizada. También comprueba que la solicitud se ajusta a la PC de la CA, tal y como se introdujo anteriormente. Así, por ejemplo, si la solicitud especifica que el certificado tenga una validez de 10 años, una CA cuyo plazo máximo de certificación sea 4 años impondrá esta duración en los certificados, ignorando la duración solicitada.</li>
                   <li class="text-justify">Si la solicitud es válida y se puede ajustar a la CP establecida, se construye un certificado X.509 indicando el nombre del solicitante y su clave pública, el nombre de la CA emisora, el número de serie de la CA, el periodo de validez del certificado y el algoritmo de firma, es decir, se construye un certificado de clave pública con todos los campos indicados en el Capítulo 1</li>
               </ul>
           </div>
       </div>
       <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4126" role="button">Infraestructura de gestión de privilegios (PMI).</a>
       <div class="collapse" id="U4126">
           <div class="card card-body text-info">
               <p class="text-justify">Las infraestructuras de gestión de privilegios, habitualmente referidas por sus siglas en inglés PMI (de Privilege Management Infrastructure), permiten administrar de manera eficaz los permisos o acciones que una determinada entidad está autorizada a realizar.</p>
               <p class="text-justify"><strong>Entidades participantes.</strong></p>
               <p class="text-justify">Una PMI se compone de diversas entidades, de acuerdo a la especificación prevista en la norma X.509. Debe tenerse en cuenta que existen diferentes fases dentro del ciclo de vida de un certificado de atributos: emisión, verificación y revocación. En cada una de ellas, un grupo distinto de entidades participan en diverso grado.</p>
               <p class="text-justify">El titular del certificado puede tener la capacidad para transferir el privilegio. En función de esto, surgen dos tipos de entidades que pueden ser titulares: Autoridad de Atributos (Attribute Authority, AA) y Propietario del Privilegio (habitualmente referido como Privilege Holder, PH). La AA puede transferir los privilegios, mientras que el PH no. Además de esta diferencia, se destaca también que, mientras que el PH puede ejercer siempre el privilegio, la AA no siempre puede hacerlo.</p>
               <p class="text-justify"><strong>Proceso de verificación de privilegios.</strong></p>
               <p class="text-justify">El proceso de verificación comprende las siguientes acciones:</p>
               <ul class="pl-3">
                <li class="text-justify">El propietario del privilegio solicita realizar una determinada acción sobre un recurso.</li>
                <li class="text-justify">El verificador comprueba que los atributos (privilegios) del solicitante se ajustan a los necesarios para realizar la acción. Para ello, toma en consideración los datos del certificado, el recurso solicitado y, eventualmente, otros parámetros del contexto (por ejemplo, la fecha y hora en que se produce la solicitud). En caso de que no se ajuste a lo establecido, deniega el permiso.</li>
                <li class="text-justify">El verificador establece ahora la vigencia del certificado de atributos, para lo que efectúa dos acciones principales:</li>
                <ul class="pl-3">
                    <li class="text-justify">Comprobar la validez de la cadena de certificación</li>
                    <li class="text-justify">Comprobar si el certificado está revocado</li>
                </ul>
            </ul>
            <p class="text-justify"><strong>Aplicación de PMI para el control de acceso.</strong></p>
            <p class="text-justify">Una de las aplicaciones más habituales de los PMI es en los sistemas de control de acceso. Dichos sistemas se encargan de controlar quién puede acceder a qué recursos y con qué fines.</p>
            <p class="text-justify">Uno de los modelos clásicos de control de acceso es ·el modelo discrecional (DAC, del inglés Discretionary Access Control), en el que la asignación de privilegios a personas y recursos se hace de forma particularizada. Este modelo es típico de sistemas de información (por ejemplo, bases de datos o servidores), donde el administrador otorga permisos a determinados usuarios sobre ciertos recursos. Sería el caso, por ejemplo, del administrador de un portal web que permite que los empleados accedan a la intranet de la empresa.</p>
            <p class="text-justify"><strong>Comparación con respecto a una PKI</strong></p>
            <p class="text-justify">En primer lugar, tanto PKI como PMI se centran en la gestión de certificados: mientras que los certificados de clave pública ligan a una entidad con dicha clave, los de atributos relacionan al titular con ciertas propiedades.</p>
            <p class="text-justify">En segundo lugar, se observa el concepto de jerarquía de entidades. En una PKI, existe una autoridad raíz (CA) y una o varias autoridades subordinadas. En PMI, el SOA ejerce de autoridad raíz mientras que las AA pueden emitir certificados para delegar sus privilegios a un tercero.</p>
            <p class="text-justify">Finalmente, en ambas estructuras existe un mecanismo similar para la gestión de la revocación. Si bien en una PKI los certificados se incluyen en una CRL, en la PMI lo hacen en una ACRL. El contenido de ambas listas es análogo en ambos casos.</p>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4127" role="button">Campos de certificados de atributos, incluyen la descripción de sus usos habituales y la relación con los certificados digitales.</a>
    <div class="collapse" id="U4127">
        <div class="card card-body text-info">
            <p class="text-justify">En base al estándar X.509, los CA están compuestos por los siguientes campos:</p>
            <ul class="pl-3">
                <li class="text-justify"><strong>Versión:</strong> versión del certificado, la cual debe ser "v2". Nótese que "v2" no se aplica retroactivamente y, por tanto, no sería compatible con versiones anteriores.
                <li class="text-justify"><strong>Propietario (holder):</strong> es una secuencia cuyo propósito es la identificación del propietario. Esta puede consistir en el identificador del certificado PKC asociado, el nombre de sujeto indicado en el PKC asociado o en el resultado de aplicar un resumen sobre un objeto (clave pública, certificado, etc.).</li>
                <li class="text-justify"><strong>Nombre del emisor:</strong> nombre de la SOA emisora de los certificados de atributos.</li>
                <li class="text-justify"><strong>Algoritmo de firma:</strong> algoritmo utilizado por la SOA para firmar el certificado.</li>
                <li class="text-justify"><strong>Firma:</strong> firma del certificado, la cual es realizada por la SOA emisora.</li>
                <li class="text-justify"><strong>Número de serie:</strong> número entero positivo, el cual se espera que sea largo debido a su unicidad y utilización en el tiempo.
                <li class="text-justify"><strong>Periodo de validez:</strong> fecha de inicio de validez de certificado y fecha de fin.</li>
                <li class="text-justify"><strong>Atributos:</strong> proporcionan información sobre el propietario del certificado. Además, si el certificado se utiliza para autorización, este campo incluirá un conjunto de privilegios.</li>
            </ul><br/>
            <p class="text-justify"><strong>Usos habituales de los certificados de atributos</strong></p>
            <p class="text-justify">Los certificados de atributos se pueden utilizar en gran variedad de servicios, entre los que se incluyen el control de acceso, la autenticación en el origen y el no repudio.</p>
            <p class="text-justify">Cuando se solicita acceso con un certificado de atributos, se ha de determinar que el propietario del certificado es el que ha realizado la solicitud. Un modo de realizarlo es incluyendo una referencia a un PKC contenido en el certificado de atributos, de modo que la autenticación se realice utilizando la clave privada que se incluye dentro de la solicitud de acceso.</p>
            <p class="text-justify"><strong>Certificados digitales frente a certificados de atributos</strong></p>
            <p class="text-justify">Los certificados digitales vinculan a un individuo (Subject) con una clave pública (Subject Public Key lnfo), manteniéndose en secreto la clave privada asociada. En cambio, los AC vinculan un conjunto de atributos (Attributes) bien con un individuo o con el identificador de un certificado digital (Holder), el cual es un PKC</p>
            <img src="../recursos/img/cursos/ifct0109/mf048928a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Certificado de clave pública." title="Certificado de clave pública.">
            <!-- <img src="../recursos/img/cursos/ifct0109/mf048928b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Certificado de clave pública." title="Certificado de clave pública."> -->
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4128" role="button">Aplicaciones que se apoyan en la existencia de una PKI.</a>
    <div class="collapse" id="U4128">
        <div class="card card-body text-info">
            <p class="text-justify"><strong>Uso de PKI para autenticación</strong></p>
            <p class="text-justify">la PKI es una alternativa más segura en la que la autenticación se produce probando la posesión de una clave privada en lugar de una contraseña, la cual puede verse comprometida con cierta facilidad, como por ejemplo, si la contraseña es una palabra del diccionario se podría conocer con mucha facilidad.</p>
                <p class="text-justify">Es cierto que la clave privada está protegida, se protege por medio de una contraseña, una característica biométrica, etc., pero su utilización es local y nunca llegan a ser conocidas por ninguna aplicación. Un ejemplo típico de autenticación es la utilización del protocolo SSL, el cual será estudiado más adelante.</p>
                <p class="text-justify"><strong>Uso de PKI en firma</strong></p>
                <p class="text-justify">La firma digital es otra de las aplicaciones más frecuentes de las PKI, las cuales se pueden definir como un esquema matemático que permite demostrar la autenticidad de un mensaje digital. En el mundo digital, la firma de documentos (especialmente XML) así como los correos electrónicos, constituyen claros ejemplos de esta aplicación.</p>
                <p class="text-justify">Una cuestión crítica en el ámbito de las firmas es asegurar su validez a lo largo del tiempo. Debe tenerse en cuenta que, para que una firma sea válida, es preciso:</p>
                <ul class="pl-3">
                    <li class="text-justify">1. Realizar la verificación criptográfica de la firma, de acuerdo al algoritmo seleccionado.</li>
                    <li class="text-justify">2. Verificar la cadena de certificación.</li>
                </ul><br/>
                <p class="text-justify"><strong>Uso de PKI para cifrado</strong></p>
                <p class="text-justify">Finalmente, la PKI es frecuentemente utilizada para el cifrado de datos. Cualquier usuario puede cifrar datos pero estos solo podrán ser descifrados por los usuarios que dispongan de las claves de descifrado. Por tanto, la privacidad se asegura siempre que la clave privada se mantenga secreta.</p>
                <p class="text-justify">El cifrado es comúnmente utilizado en tarjetas inteligentes para almacenar información sensible (ej. PIN de las tarjetas de crédito), en el envío de correos (ej. utilizando programas como thunderbird) o en el almacenamiento de datos de carácter confidencial (ej. Utilizando programas como GPG4Win).</p>
            </div>
        </div>
    </ul>
</li>
<li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 3. COMUNICACIONES SEGURAS
    <ul class="list-group">
        <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4131" role="button">Definición, finalidad y funcionalidad de redes privadas virtuales</a>
        <div class="collapse" id="U4131">
            <div class="card card-body text-info">
                <p class="text-justify">Las redes privadas virtuales, habitualmente llamadas VPN (del inglés Virtual Prívate Network), son un tipo de red de comunicaciones que se construye sobre otra ya existente. La característica fundamental es que pueden permitir que distintos equipos en diversas partes del mundo puedan comunicarse como si estuviesen en una red de área local.</p>
                <p class="text-justify">Niveles OSI :</p>
                <ul class="pl-3">
                    <li class="text-justify"><strong>Físico</strong> – Cable de red</li>
                    <li class="text-justify"><strong>Enlace</strong> – Direcciones MAC (tarjetas de red)</li>
                    <li class="text-justify"><strong>Red</strong> – Direcciones IP</li>
                    <li class="text-justify"><strong>Transporte</strong> – Canal comunicaciones – Puerto – (TCP/UDP)</li>
                    <li class="text-justify"><strong>Sesión</strong> – Sesión entre aplicaciones</li>
                    <li class="text-justify"><strong>Presentación</strong> – Diferente información mismo funcionamiento</li>
                    <li class="text-justify"><strong>Aplicación</strong> – Protocolos que siguen los programas</li>
                </ul><br/>
                <p class="text-justify"><strong>Descripción de las VPN</strong></p>
                <p class="text-justify">Las VPN permiten que equipos físicamente distantes se comporten como si estuvieran dentro del mismo dominio de seguridad, es decir, en la misma red.</p>
                <p class="text-justify">Una adecuada política de seguridad debería establecer los mecanismos de protección que asegurasen que solo los equipos que están dentro de una determinada red (por ejemplo, la que agrupa a los ordenadores de la oficina) puedan tener acceso a dichos recursos.</p>
                <p class="text-justify">Las VPN permiten esto, pues los equipos conectados a ella se comportan como si estuviesen en dicha red: su configuración, incluyendo su dirección IP, hace que lógicamente pertenezca a esa red.</p>
         <img src="../recursos/img/cursos/ifct0109/mf048932a.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Diagrama de una red privada virtual." title="Diagrama de una red privada virtual.">
         <p class="text-justify">Además de la confidencialidad, las VPN suelen proporcionar autenticación de origen (para evitar que terceros no autorizados entren en la red) e integridad de los datos (asegurando que estos no son alterados durante la comunicación).</p>
         <p class="text-justify">Las VPN pueden servir para dos cuestiones distintas: por un lado, el hecho de que un empleado pueda acceder desde su domicilio a la red de la oficina. Este tipo de conexión sería ordenador-a-red. Por otro lado, puede posibilitar que dos o más edificios de una misma empresa se comporten como una única red. Este sería el caso de las conexiones sitio-a-sitio.</p>
         <p class="text-justify">Los principales protocolos a través de los cuales se puede establecer una VPN son los siguientes:</p>
         <ul class="pl-3">
             <li class="text-justify">IPSec (Internet Protocol Security ).</li>
             <li class="text-justify">SSL (Secure Socket Layer).</li>
             <li class="text-justify">SSH (Secure Shell).</li>
             <li class="text-justify">PPTP (Point-to-Point Tunnelling Protocol).</li>
             <li class="text-justify">L2TP (Layer 2 Tunnelling Protocol).</li>
             <li class="text-justify">DTLS (Datagram Transport Layer Security).</li>
         </ul><br/>
         <p class="text-justify"><strong>Ventajas de las VPN</strong></p>
         <ul class="pl-3">
             <li class="text-justify">Bajo coste de despliegue:</li>
             <li class="text-justify">Transparencia de comunicación</li>
             <li class="text-justify">Seguridad en los sistemas</li>
             <li class="text-justify">Simplicidad administrativa</li>
         </ul><br/>
         <p class="text-justify"><strong>Desventajas de las VPN</strong></p>
         <ul class="pl-3">
             <li class="text-justify">Fiabilidad de la red</li>
             <li class="text-justify">Velocidad de acceso</li>
             <li class="text-justify">Confianza de las entidades</li>
             <li class="text-justify">Incompatibilidad de las redes</li>
         </ul>
     </div>
 </div>
 <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4132" role="button">Protocolo IPSec.</a>
 <div class="collapse" id="U4132">
     <div class="card card-body text-info">
         <p class="text-justify">IPsec (Internet Protocol security) es un conjunto de protocolos cuya función es asegurar las comunicaciones sobre el Protocolo de Internet (IP) autenticando y/o cifrando cada paquete IP en un flujo de datos. IPsec también incluye protocolos para el establecimiento de claves de cifrado.</p>
         <p class="text-justify">Una característica importante de IPSec es que actúa en el nivel de red (nivel 3 del modelo OSI) a diferencia de otros mecanismos que, ofreciendo unos servicios de seguridad similares, actúan en capas superiores.</p>
         <p class="text-justify">Los protocolos que forman IPSec son esencialmente dos: Internet Key Exchange (IKE) y Encapsulating Security Payload (ESP). Generalmente, se apunta que existe un tercer protocolo (Authenticated Header, AH).</p>
         <p class="text-justify"><strong>Internet Key Exchange (IKE)</strong></p>
         <p class="text-justify">Este protocolo permite establecer una asociación de seguridad entre dos partes comunicantes. La asociación de seguridad establece los parámetros que permitirán a las dos entidades comunicarse de forma segura. Así, se determina el algoritmo criptográfico a utilizar y su modo de operación junto con la clave de cifrado para los datos que se intercambien.</p>
         <ul class="pl-3">
             <li class="text-justify">IKE_SA_INIT: este intercambio se produce antes que cualquiera de los demás y permite negociar algunos parámetros de la asociación de seguridad, intercambiar valores aleatorios y ejecutar el algoritmo Diffie-Hellman para establecer una clave compartida.</li>
             <li class="text-justify">KE_AUTH: en esta fase se autentican mutuamente los comunicantes y se establece la asociación de seguridad que se utilizará en ESP</li>
         </ul><br/>
         <p class="text-justify"><strong>Escenarios de uso</strong></p>
         <ul class="pl-3">
             <li class="text-justify">Según la configuración física
                 La configuración física se refiere a si los participantes en IPSec son ordenadores de usuario (por ejemplo, el ordenador portátil de un empleado) o si son equipos intermedios que específicamente se dedican a establecer este tipo de conexiones.</li>
             <li class="text-justify">Según el tipo de protección
                 De acuerdo al tipo de protección aplicada, se especifican dos posibles modos de uso:
                 <ul class="pl-3">
                     <li class="text-justify">En el modo transporte, solo se protege la carga útil de cada uno de los paquetes que se envían.</li>
                     <li class="text-justify">En el modo túnel, el paquete que contiene la información intercambiada se encapsula dentro de otro paquete.</li>
                 </ul>
                 </li>
             </ul><br/>
             <p class="text-justify"><strong>Encapsulating Security Payload (ESP)</strong></p>
             <p class="text-justify">El protocolo ESP se encarga de proporcionar confidencialidad, autenticación e integridad de la información en tránsito. Para ello, ESP introduce esa información en otro paquete, sobre el que se aplican los mecanismos de seguridad. Los mecanismos que se eligen y cómo se aplican se basan en la asociación de seguridad establecida tras IKE.</p>
         </div>
     </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4133" role="button">Protocolos SSL y SSH.</a>
     <div class="collapse" id="U4133">
         <div class="card card-body text-info">
             <p class="text-justify"><strong>Los protocolos SSH y SSL</strong> permiten construir un túnel confidencial por el que enviar los datos de forma segura, además de verificar la integridad de los datos transmitidos. Sin embargo, hay diferencias entre ambos, entre las que es posible destacar que en SSH lo más habitual es que la autenticación se realice utilizando usuario y contraseña y en SSL se utilicen certificados. Además, SSL es utilizado frecuentemente en aplicaciones en las que se hace uso de datos sensibles, por ejemplo, en aplicaciones bancarias, mientras que SSH es utilizado habitualmente para enviar órdenes o comandos a otro ordenador a través de Internet.</p>
             <p class="text-justify"><strong>Secure Sockets Layer (SSL)</strong></p>
             <p class="text-justify">Este protocolo se caracteriza por soportar compresión (aunque es opcional), hacer uso de certificados X.509 v3 y proporcionar los servicios de seguridad de autenticación en servidor (obligatoria), autenticación en cliente (opcional), integridad, confidencialidad y no repudio del cliente (opcional).</p>
             <p class="text-justify">SSL está formado por varios subprotocolos</p>
             <ul class="pl-3">
                 <li class="text-justify">Protocolo de salutación.</li>
                 <li class="text-justify">Protocolo de registro.</li>
                 <li class="text-justify">Protocolo de cambio de especificación de cifrado.</li>
                 <li class="text-justify">Protocolo de aviso.</li>
             </ul><br/>
             <!-- <img src="../recursos/img/cursos/ifct0109/mf048934.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title=""> -->
             <p class="text-justify"><strong>Variante de SSL. SSL Extended Validation (EV-SSL)</strong></p>
             <p class="text-justify"><strong>Restricciones adicionales</strong></p>
             <ul class="pl-3">
                 <li class="text-justify">Las Autoridades de Certificación están obligadas a pasar una auditoría periódica, que verifique el rigor del proceso de emisión de certificados.</li>
                 <li class="text-justify">Para los certificados que se emiten a páginas web, solo se emiten si lo solicita la persona responsable del dominio o con control exclusivo sobre él.</li>
                 <li class="text-justify">Las Autoridades de Certificación deben implementar el protocolo OCSP, de forma que el navegador pueda comprobar inmediatamente la vigencia del certificado.</li>
                 <li class="text-justify">Los certificados se emiten con una política de certificación distinta que permite a los navegadores reconocer este tipo de certificados.</li>
             </ul>
             <!-- <img src="../recursos/img/cursos/ifct0109/mf048933.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title=""> -->
             <p class="text-justify">Representación en los navegadores de SSL ExtetJded Validation (EV-SSL)</p>
             <p class="text-justify"><strong>Secure Shell (SSH)</strong></p>
             <p class="text-justify">es un protocolo diseñado con los propósitos de ser simple y fácil de programar. La versión inicial estaba pensada para permitir que una persona pudiese abrir una sesión en un ordenador remoto. El propósito era reemplazar al popular protocolo TELNET y a otros esquemas que no proporcionaban seguridad.</p>
             <p class="text-justify">SSH se compone de tres tipos de protocolos:</p>
             <ul class="pl-3">
                 <li class="text-justify">el Protocolo de la capa de transporte,</li>
                 <li class="text-justify">el Protocolo de autenticación de usuarios y</li>
                 <li class="text-justify">el Protocolo de conexión.</li>
             </ul><br/>
             <p class="text-justify"><strong>Protocolo de la capa de transporte</strong></p>
             <p class="text-justify">Este protocolo proporciona autenticación de las entidades y de los mensajes, confidencialidad e integridad de los datos.</p>
             <p class="text-justify">Como su propio nombre indica, se ejecuta en la capa de transporte (nivel 4 del Modelo OSI). Dentro de este protocolo se establecen las claves de los Host.</p>
             <p class="text-justify">La autenticación del servidor se realiza en base al par o pares de claves (público-privada) que dicho servidor posee.</p>
             <p class="text-justify"><strong>Protocolo de autenticación de usuarios</strong></p>
             <p class="text-justify">Este protocolo autentica a los usuarios frente al servidor y está pensado para ejecutarse sobre protocolos que proporcionen confidencialidad e integridad.</p>
             <p class="text-justify">En cuanto a los métodos de autenticación, es posible indicar el método de clave pública, en el que el cliente envía al servidor su clave pública firmada para que la verifique; el método de contraseña, en el que el cliente envía una contraseña al servidor; y el método hostbased, en el que el cliente envía una firma al servidor haciendo uso de la clave de su host, consiguiendo que el servidor confíe en el host cuando éste indique que el usuario se ha autenticado.</p>
             <p class="text-justify"><strong>Protocolo de conexión</strong></p>
             <p class="text-justify">Funciona sobre el Protocolo de la capa de transporte y permite que una misma conexión pueda ser utilizada a la vez para distintos propósitos, conocidos como canales.</p>
            <p class="text-justify">Un canal pasa por tres estados distintos en función del momento de transmisión de datos:</p>
            <ul class="pl-3">
                <li class="text-justify">Apertura del canal, indicando esencialmente el tipo de canal, el tamaño de datos a enviar y el tamaño máximo de los paquetes.</li>
                <li class="text-justify">Transmisión de los datos, es decir, el uso propiamente dicho del canal.</li>
                <li class="text-justify">Cierre del canal, para concluir la comunicación por parte de cualquiera de los participantes.</li>
            </ul>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4134" role="button">Sistemas SSL VPN.</a>
    <div class="collapse" id="U4134">
        <div class="card card-body text-info">
            <p class="text-justify">SSL VPN es una forma de utilizar VPN en la que se utiliza el navegador web para establecer la conexión entre dos extremos. Una de las características más relevantes es que en SSL VPN no se requiere instalación de ningún cliente en el ordenador del usuario final. Por tanto, la utilización de este tipo de SSL se puede considerar muy sencilla para los usuarios.</p>
            <ul class="pl-3">
                <li class="text-justify">SSL VPN no requiere la instalación de ningún software en el cliente.</li>
                <li class="text-justify">Otro de los riesgos se asocia con la información almacenada en los historiales. Cuando se realiza una conexión con un navegador, se dejan rastros indicando dónde y para qué fueron utilizados (cookies, historial de URL, etc.).</li>
                <li class="text-justify">Como no se requiere la instalación de ningún software en el cliente, cualquier usuario con acceso a la web puede acceder a una VPN SSL.</li>
            </ul><br/>
            <p class="text-justify"><strong>Tipos de SSL VPN</strong></p>
            <ul class="pl-3">
                <li class="text-justify"><strong>VPN SSL portal</strong>
                    <p class="text-justify">Permiten a los usuarios establecer una única conexión SSL con un sitio web para poder acceder remotamente y de forma segura a distintos servicios de red. El funcionamiento es muy sencillo: el usuario accede a una página web, la cual es una puerta de entrada a los servicios, de ahí el nombre de portal. Posteriormente, tras el acceso se produce la autenticación y, tras ello, dicha página web presenta los servicios a los que el usuario tiene acceso.</p>
                </li>
                <li class="text-justify"><strong>SSL VPN túnel</strong>
                    <p class="text-justify">Permite a los usuarios usar un navegador web para acceder de forma remota y segura a múltiples servicios web utilizando un túnel que hace uso de SS L. En este caso, se necesita que el navegador soporte, ·entre otros, el uso de Java, JavaScript, ActiveX, aplicaciones Flash o plugins.</p>
                </li>
            </ul>
        </div>
    </div>
    <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4135" role="button">Túneles cifrados.</a>
    <div class="collapse" id="U4135">
        <div class="card card-body text-info">
            <p class="text-justify"><strong>Un túnel</strong> se define como la encapsulación de un protocolo de red en otro, de modo que las solicitudes puedan llegar de un origen a un destino. De esta forma, se permite la utilización de un protocolo en un entorno de red que no lo permitiría.</p>
            <p class="text-justify">Recordando la analogía del correo entre urbanizaciones, para comunicar ambas urbanizaciones fue necesario meter el sobre en otro. De lo contrario, una carta de una urbanización a otra jamás habría podido enviarse por las restricciones de seguridad (que, en ese caso, solo permitían el envío de correo entre vecinos de una misma urbanización).</p>
            <p class="text-justify"><strong>Point-to-Point Tunneling Protocol (PPTP)</strong></p>
            <p class="text-justify">Fue un protocolo desarrollado por Microsoft y normalizado por la JETF (RFC 2637). PPTP hace uso de la seguridad de otro protocolo, llamado Point-to-Point (PPP), para realizar la comunicación en el túnel. Así, se proporcionan los servicios de autenticación y confidencialidad haciendo uso de PPP.</p>
            <p class="text-justify">Respecto a la autenticación</p>
            <ul class="pl-3">
                <li class="text-justify">Password Authentication Protocol (PAP).</li>
                <li class="text-justify">Shiva Password Authentication Protocol (SPAP).</li>
                <li class="text-justify">Challenge Handshake Authentication Protocol (CHAP).</li>
                <li class="text-justify">Microsoft CHAP vi (MS-CHAP vi).</li>
                <li class="text-justify">MS-CHAP v2.</li>
            </ul><br/>
            <p class="text-justify">En relación con la confidencialidad, se hace uso del protocolo Microsoft Point-to-Point Encryption (MPPE) para cifrar los mensajes.</p>
            <p class="text-justify">En cuanto a la comunicación por PPTP se pueden distinguir dos tipos: de control y de datos. La comunicación de control se basa en controlar y gestionar la información que pasa por el canal. Por otro lado, la comunicación de datos consiste en realizar el encapsulado y transmisión de datos mediante el protocolo GRE, presentado anteriormente.</p>
            <p class="text-justify"><strong>Layer 2 Tunnelling Protocol (L2TP)</strong></p>
            <p class="text-justify">El protocolo L2TP permite esencialmente construir túneles para que dos equipos o subredes puedan conectarse a través del protocolo PPP.</p>
                                                    <p class="text-justify">Para conseguirlo, la arquitectura de L2TP se compone de:</p>
             <ul class="pl-3">
                 <li class="text-justify">Un equipo (o subred) origen.</li>
                 <li class="text-justify">Un punto de acceso (denominado LAC).</li>
                 <li class="text-justify">Un terminador del túnel (denominado LNS).</li>
                 <li class="text-justify">Y una red (o un equipo) destino.</li>
             </ul>
             <img src="../recursos/img/cursos/ifct0109/mf048936a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Diagrama de conexión L2TP/IPSec" title="Diagrama de conexión L2TP/IPSec">
             <p class="text-justify"><strong>Datagram Transport Layer Security (DTLS)</strong></p>
             <p class="text-justify">es un protocolo basado en TLS que proporciona comunicaciones seguras para la transmisión de datagramas.</p>
             <p class="text-justify">Su utilización es adecuada para asegurar programas que sean sensibles a los retardos en la información (por ejemplo, escuchar música a través de Internet). Permite prevenir posibles escuchas, manipulaciones y falsificación de mensajes.</p>
             <p class="text-justify">Dado que en DTLS se intercambian datagramas, incluye mecanismos para gestionar la pérdida y el reordenamiento de paquetes, junto con la detección de reenvíos.</p>
         </div>
     </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U4136" role="button">Ventajas e inconvenientes de las distintas alternativas para la implantación de la tecnología de VPN.</a>
     <div class="collapse" id="U4136">
         <div class="card card-body text-info">
             <p class="text-justify"><strong>Pros y contras de IPSec VPN</strong></p>
             <p class="text-justify">La tecnología IPSec está especialmente diseñada para aquellas situaciones en las que se quiere realizar una red privada estable a lo largo del tiempo. Además, permite ofrecer un servicio de comunicaciones cifradas a diversas aplicaciones, ya que se sitúa en la capa de red (es decir, por debajo de las aplicaciones).</p>
             <p class="text-justify">Entre las principales desventajas de IPSec, destaca la complejidad de su administración y configuración. Esta situación es particularmente desaconsejable cuando se trata de permitir, por ejemplo, que los empleados accedan desde los ordenadores de sus hogares a la red de la empresa. Para utilizar IPSec es necesario instalar en dichos equipos un programa que aplique la configuración necesaria. Esto dificulta el mantenimiento por parte del personal de Tecnologías de la Información de la empresa.</p>
             <p class="text-justify"><strong>Pros y contras de SSL VPN</strong></p>
             <p class="text-justify">La utilización del protocolo SSL para establecer una red privada virtual constituye una alternativa sencilla. Esto es importante para los escenarios en los que se persigue que un equipo se conecte a una determinada red empresarial: no es necesario que en dicho equipo se instale ningún programa especialmente complejo. Esto simplifica su puesta en marcha y disminuye la necesidad de mantenimiento, lo que en la práctica se traduce en una reducción de costes.</p>
             <p class="text-justify">Entre los aspectos menos favorables, esta tecnología es más adecuada cuando las aplicaciones se ejecutan en el navegador web, algo que no siempre ocurre. Por otro lado, es necesario tener en cuenta que SSL permite que los algoritmos criptográficos se negocien en cada una de las sesiones. Esto puede dar lugar a la elección de algoritmos o claves que sean poco robustos, lo que puede comprometer la seguridad de la comunicación.</p>
             <p class="text-justify"><strong>Pros y contras de SSL VPN</strong></p>
             <p class="text-justify">La utilización del protocolo SSL para establecer una red privada virtual constituye una alternativa sencilla. Esto es importante para los escenarios en los que se persigue que un equipo se conecte a una determinada red empresarial: no es necesario que en dicho equipo se instale ningún programa especialmente complejo. Esto simplifica su puesta en marcha y disminuye la necesidad de mantenimiento, lo que en la práctica se traduce en una reducción de costes.</p>
             <p class="text-justify">Entre los aspectos menos favorables, esta tecnología es más adecuada cuando las aplicaciones se ejecutan en el navegador web, algo que no siempre ocurre. Por otro lado, es necesario tener en cuenta que SSL permite que los algoritmos criptográficos se negocien en cada una de las sesiones. Esto puede dar lugar a la elección de algoritmos o claves que sean poco robustos, lo que puede comprometer la seguridad de la comunicación.</p>
             <p class="text-justify"><strong>Análisis de costes</strong></p>
             <p class="text-justify">Con respecto al equipamiento necesario para incorporar estas tecnologías, ambas necesitan algún equipamiento de red que permita utilizarlo en el entorno corporativo. En el caso de IPSec, esto suele ser un dispositivo de red (como un encaminador o router), mientras que en SSL se emplea un servidor especialmente dedicado.</p>
             <p class="text-justify">La otra fuente de coste que debe considerarse es la relativa a la puesta en funcionamiento de todos los programas que deben poder ejecutarse a través de la VPN. En el caso de IPSec, una vez que se ha establecido la conexión todos los programas pueden emplearla. Por el contrario, cada uno de los programas necesita un soporte específico si la tecnología seleccionada es SSL.</p>
         </div>
     </div>
               </ul>
           </li>
       </ul>
   </li>
   <li class="list-group-item border-0 bg-light text-primary">MF0490_3 GESTIÓN DE SERVICIOS EN EL SISTEMA INFORMÁTICO.
       <ul class="list-group">
           <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 1. GESTIÓN DE LA SEGURIDAD Y NORMATIVAS
               <ul class="list-group">
                   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5111" role="button">Norma ISO 27002 Código de buenas practicas para la gestión de la seguridad de la información.</a>
                   <div class="collapse" id="U5111">
       <div class="card card-body text-info">
           <p class="text-justify">La norma ISO 17799 consiste en un manual de buenas prácticas para una adecuada gestión de la seguridad de la información.</p>
           <ul class="pl-3">
               <li class="text-justify">ISO 27000: incluye fundamentalmente el vocabulario que se va a utilizar en las normas incluidas en toda la serie para una mayor comprensión de las mismas.</li>
               <li class="text-justify">ISO/ IEC 27001: también es un manual de buenas prácticas pero, en este caso, se incluyen los requisitos necesarios de los sistemas de gestión de seguridad de la información.</li>
               <li class="text-justify">ISO/IEC 27002: es un estándar para la seguridad de la información (también se considera una guía de buenas prácticas) en el que se incluyen los distintos objetivos de control y controles recomendados para mantener un nivel de seguridad de la información óptimo.</li>
           </ul>
           <p class="text-justify">La norma ISO/IEC 27002 está formada por una serie de secciones que se van a describir y detallar brevemente en este apartado:</p>
           <ul class="pl-3">
               <li class="text-justify">1. Introducción</li>
               <li class="text-justify">2. Campo de aplicación.</li>
               <li class="text-justify">3. Términos y definiciones.</li>
               <li class="text-justify">4. Estructura del estándar.</li>
               <li class="text-justify">5. Evaluación y tratamiento del riesgo.</li>
               <li class="text-justify">6. Política de seguridad.</li>
               <li class="text-justify">7. Organización de la seguridad de la información.</li>
               <li class="text-justify">8. Gestión de activos.</li>
               <li class="text-justify">9. Seguridad ligada a los recursos humanos.</li>
               <li class="text-justify">10. Seguridad física y del entorno.</li>
               <li class="text-justify">11. Gestión de comunicaciones y operaciones.</li>
               <li class="text-justify">12. Control de accesos.</li>
               <li class="text-justify">13. Adquisición, desarrollo y mantenimiento de sistemas de información.</li>
               <li class="text-justify">14. Gestión de incidentes de seguridad de información.</li>
               <li class="text-justify">15. Gestión de continuidad del negocio.</li>
               <li class="text-justify">16. Cumplimientos legales</li>
           </ul><br/>
           <p class="text-justify"><strong>1. Introducción</strong></p>
           <ul class="pl-3">
               <li class="text-justify">Identificar los requerimientos de seguridad, evaluando los distintos riesgos de la organización.</li>
               <li class="text-justify">Evaluar metódicamente los riesgos de seguridad para establecer prioridades de gestión de riesgos y controles.</li>
               <li class="text-justify">Selección de los controles adecuados que se deben implantar para reducir los riesgos a un nivel aceptable.</li>
               <li class="text-justify">Establecimiento de un punto de inicio de la seguridad como, por ejemplo, implantar una serie de controles como esenciales.</li>
               <li class="text-justify">Identificación de los factores críticos de éxito en la implementación de la seguridad de la información de la organización.</li>
               <li class="text-justify">Desarrollo y adaptación de controles propios.</li>
           </ul><br/>
           <p class="text-justify"><strong>2.Objeto y campo de aplicación</strong></p>
           <p class="text-justify">Los objetivos de control y los controles de la ISO 27002 se diseñan para que, al implementarse, se satisfagan los requerimientos identificados mediante la evaluación de los riesgos de la organización.</p>
           <p class="text-justify">Esta normativa, aparte de mostrar y definir unos controles recomendados, también sirve como orientación de partida para las organizaciones con el fin de elaborar e implantar sus propias medidas de seguridad y para fomentar un ambiente de confianza y participación de las distintas áreas organizativas en las actividades relacionadas con la seguridad de la información.</p>
           <p class="text-justify"><strong>3.Términos y definiciones</strong></p>
           <ul class="pl-3">
               <li class="text-justify">Control: medios para manejar el riesgo, incluyendo políticas, procedimientos, prácticas o estructuras organizacionales, que pueden ser administrativas, técnicas, de gestión o de naturaleza legal.</li>
               <li class="text-justify">Medios de procesamiento de la información: cualquier sistema, servicio o infraestructura de procesamiento de la información.</li>
               <li class="text-justify">Seguridad de la información: preservación de la confidencialidad, integración y disponibilidad de la información. También puede involucrar otras propiedades como la autenticidad, responsabilidad, no repudiación y confiabilidad.</li>
               <li class="text-justify">Incidente de seguridad de la información: evento o serie de eventos inesperados de seguridad de la información que tienen una probabilidad significativa de comprometer las operaciones comerciales y amenazar la seguridad de la información.</li>
               <li class="text-justify">Análisis del riesgo: uso sistemático de la información para identificar las fuentes y calcular el riesgo.</li>
               <li class="text-justify">Evaluación del riesgo: proceso de comparar el riesgo estimado con un criterio de riesgo dado para determinar la importancia del riesgo.</li>
               <li class="text-justify">Gestión del riesgo: actividades para dirigir y controlar una organización con relación al riesgo.</li>
               <li class="text-justify">Tratamiento del riesgo: proceso de selección e implementación de medidas para modificar el riesgo.</li>
           </ul><br/>
           <p class="text-justify"><strong>4.Estructura de la norma</strong></p>
           <p class="text-justify">La norma ISO/IEC 27002 contiene quince capítulos y once cláusulas de control que incluyen en total treinta y nueve categorías de seguridad principales, además de una cláusula de introducción que trata la evaluación y el tratamiento del riesgo.</p>
           <p class="text-justify"><strong>5.Evaluación y tratamiento del riesgo</strong></p>
           <p class="text-justify">En este apartado se describen una serie de indicaciones para:</p>
           <ul class="pl-3">
               <li class="text-justify">Evaluar los riesgos de seguridad de la información: donde se debe identificar, cuantificar y priorizar los riesgos en comparación con los criterios y los objetivos de la organización. En esta evaluación se tienen en cuenta tanto la magnitud del daño posible como la probabilidad de que este ocurra.</li>
               <li class="text-justify">Tratar los riesgos de la seguridad de la información: se toman una serie de decisiones sobre si compensa aceptar los riesgos o no. Normalmente, se acepta tomar el riesgo si este es bajo o si, asumiendo los costes del tratamiento, se consigue reducirlo considerablemente.</li>
           </ul><br/>
           <p class="text-justify"><strong>6.Política de seguridad</strong></p>
           <p class="text-justify">La dirección de una organización debe aprobar un documento donde se recoja una política de seguridad de la información acorde con sus objetivos principales. También se debe encargar de que este documento esté a disposición de todos los empleados y de aquellos agentes externos relevantes para la organización.</p>
           <p class="text-justify"><strong>7.Organización de la seguridad de la información</strong></p>
           <p class="text-justify">Este apartado trata sobre la organización de la seguridad de la información en una organización, tanto a nivel interno como externo.</p>
           <p class="text-justify">En cuanto a organización interna, es necesario el establecimiento de una estructura firme de recursos técnicos capaces de implantar y mantener un sistema seguro de gestión de información.</p>
           <p class="text-justify">A nivel externo, se debe asegurar que el acceso de agentes externos a la información no implique una reducción de la seguridad de la misma.</p>
           <p class="text-justify"><strong>8.Gestión de activos</strong></p>
           <p class="text-justify">El objetivo de este apartado es conseguir y mantener una protección adecuada de los activos de la organización (la información es considerada como un activo intangible de la organización).</p>
           <p class="text-justify">Es necesario que la organización realice un inventario de todos sus activos. En este inventario, los activos deben estar correctamente identificados en un documento elaborado para ello y, además, deben ser identificados los propietarios de cada uno de ellos (cuya responsabilidad sobre los archivos también debe quedar reflejada en esta documentación).</p>
           <p class="text-justify"><strong>9.Seguridad ligada a los recursos humanos</strong></p>
           <p class="text-justify">Se establecen una serie de controles, que debe aplicar la organización para mantener la seguridad de la información, que prevengan un uso inadecuado de la información por parte de los empleados antes de trabajar en la empresa, durante su período de trabajo y una vez se ha extinguido su contrato de trabajo con la misma.</p>
           <p class="text-justify"><strong>10.Seguridad física y del entorno</strong></p>
           <p class="text-justify">Este capítulo describe una serie de controles que pueden servir para evitar el acceso físico no autorizado, daño o interferencia a las instalaciones y a la información de la organización.</p>
           <p class="text-justify">Los medios físicos de procesamiento de información deben estar situados en áreas seguras, protegidas por perímetros de seguridad definidos, con barreras de seguridad y controles de entrada y salida apropiados. La información crítica y confidencial debe tener un mayor nivel de protección física ante accesos no autorizados y amenazas físicas y ambientales; por ejemplo, protección del sol directo o de exceso de polvo en oficinas con maquinaria, etc.</p>
           <p class="text-justify"><strong>11.Gestión de las comunicaciones y operaciones</strong></p>
           <p class="text-justify">El objetivo aquí está en asegurar un correcto y seguro funcionamiento de los medios de procesamiento de la información. Para ello, hay que establecer los procedimientos de operación, detallando las personas responsables de cada uno de los pasos a seguir.</p>
           <p class="text-justify"><strong>12.Control de acceso</strong></p>
           <p class="text-justify">Se debe establecer una serie de procedimientos formales que sirvan para asegurar el acceso del usuario autorizado y, por otro lado, evitar el acceso no autorizado a los sistemas de información de la organización.</p>
           <p class="text-justify">Adquisición, desarrollo y mantenimiento de los sistemas de información</p>
           <p class="text-justify">El diseño e implementación del sistema de información es vital para la seguridad. Por ello, es necesario garantizar que la seguridad sea una parte integral de los sistemas de información.</p>
           <p class="text-justify">Para que esta garantía sea real, antes de desarrollar e implementar los sistemas de información es necesario identificar y acordar los distintos requerimientos de seguridad de cada área de la organización implicada en dicha implementación. La identificación de los requisitos de seguridad se realiza en la fase de requerimientos de un proyecto.</p>
           <p class="text-justify"><strong>13.Gestión de incidentes de seguridad de la información</strong></p>
           <p class="text-justify">Cualquier incidente o debilidad que afecte a la seguridad de la información debe ser comunicado correctamente a los responsables del establecimiento de las medidas correctivas oportunas.</p>
           <p class="text-justify">Para ello, se necesita establecer procedimientos formales de reporte en los que se especifiquen qué hay que comunicar, a quién, cómo y cuándo hay que hacerlo. Aparte, estos procedimientos deben estar en conocimiento de todos los usuarios implicados en la gestión de la información.</p>
           <p class="text-justify"><strong>14.Gestión de la continuidad del negocio</strong></p>
           <p class="text-justify">La gestión de la continuidad del negocio debe tener incluida la seguridad de la información, ya que cualquier fallo en la seguridad puede influir negativamente en la estabilidad de la organización y llegar a provocar auténticas debacles.</p>
           <p class="text-justify">Por ello, es necesario identificar los procesos críticos que afecten a la continuidad del negocio de integrar en ellos los requerimientos de gestión de la seguridad de la información, implantar controles preventivos que minimicen los riesgos y establecer medidas que permitan continuar con la actividad de la organización (asegurando que la información esté siempre disponible para los procesos comerciales) en el momento en el que se produzca cualquier incidencia.</p>
           <p class="text-justify"><strong>15.Cumplimiento</strong></p>
           <p class="text-justify">El objetivo de este apartado consiste en evitar cualquier incumplimiento legal, estatutario, regulador o contractual, y cualquier requerimiento de seguridad.</p>
           <p class="text-justify">En el uso y gestión de los sistemas de información pueden verse implicados requerimientos de seguridad estatutarios, reguladores y contractuales.</p>
           <p class="text-justify">Para garantizar el cumplimiento de estos requerimientos y de la legislación aplicable, se recomienda consultar con asesores y profesionales legales calificados y realizar auditorías de los sistemas de información de forma periódica.</p>
       </div>
   </div>
   <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5112" role="button">Metodología ITIL Librería de infraestructuras de las tecnologías de la información.</a>
   <div class="collapse" id="U5112">
       <div class="card card-body text-info">
           <p class="text-justify">Hasta hace pocos años, las tecnologías de la información y las estructuras informáticas se limitaban a dar apoyo a las distintas áreas de un negocio. Sin embargo, en la actualidad han cobrado suma importancia y en lugar de dar apoyo a las áreas de negocio han pasado a formar parte de las mismas, integrándose en ellas.</p>
           <p class="text-justify">La Biblioteca de Infraestructura de Tecnologías de Información (ITIL o lnformation Technology infrastructure Librar y) se concibe como un conjunto de buenas prácticas dirigidas a alcanzar una correcta gestión de los servicios TI.</p>
           <p class="text-justify">En ella, se describen detalladamente procedimientos de gestión que servirán para:</p>
           <ul class="pl-3">
               <li class="text-justify">Aumentar la eficiencia de las organizaciones.</li>
               <li class="text-justify">Lograr una gestión de la calidad adecuada.</li>
               <li class="text-justify">Disminuir los riesgos relacionados con las TI.</li>
               <li class="text-justify">Desarrollar conjuntamente los procesos de negocio y la infraestructura de las TI.</li>
        </ul><br/>
        <p class="text-justify"><strong>Historia de la Biblioteca de Infraestructura de Tecnologías de la Información (ITIL)</strong></p>

        <p class="text-justify">La Biblioteca de Infraestructura de Tecnologías de la Información se desarrolló sobre 1980, aunque no fue hasta mediados de los años noventa cuando tuvo una mayor adopción y estandarización.</p>

        <p class="text-justify">La primera versión de ITIL (vi) constaba de diez libros centrales que cubrían las áreas de Soporte del Servicio y Prestación del Servicio, orientadas exclusivamente a aspectos relacionados con la tecnología de los mainframe (o computadoras centrales), sin tener en cuenta los servicios de los negocios.</p>

        <p class="text-justify">En la v2 ya no solo se tienen en cuenta las tecnologías, sino que empiezan a tomar relevancia los procesos y servicios. Aparte de incluir recomendaciones de buenas prácticas para la Provisión de Servicio y para el Soporte de Servicio, también se trabajan las áreas siguientes:</p>
        <ul class="pl-3">

            <li class="text-justify">Gestión de la infraestructura de tecnologías de la información.</li>
            <li class="text-justify">Gestión de la seguridad.</li>
            <li class="text-justify">Perspectiva de negocio.</li>
            <li class="text-justify">Gestión de aplicaciones.</li>
            <li class="text-justify">Gestión de activos de software.</li>
            <li class="text-justify">Planeando implementar la Gestión de Servicios.</li>
            <li class="text-justify">Implementación de ITIL a pequeña escala.</li>
        </ul><br/>
        <p class="text-justify">La versión 3 de ITIL (ITIL v3) nace en 2007 (aunque es actualizada en 2011) para proseguir con la integración de la tecnología con el negocio, comenzada en la versión anterior.</p>

        <p class="text-justify">Se mantienen los conceptos de Provisión de Servicio y Soporte de Servicio (y, por lo tanto, sigue estando orientada a procesos), aunque se han reformulado en cinco fases correspondientes al Ciclo de Vida del Servicio, dando flexibilidad en la gestión de los servicios y un enfoque más empresarial</p>

        <p class="text-justify"><strong>ITIL v3 y Ciclo de Vida del Servicio</strong></p>

        <p class="text-justify">El Ciclo de Vida del Servicio está compuesto por cinco fases que se retroalimentan entre ellas de un modo cíclico.</p>

        <ul class="pl-3">

            <li class="text-justify">Estrategia del servicio.</li>
            <li class="text-justify">Diseño del servicio.</li>
            <li class="text-justify">Transición del servicio.</li>
            <li class="text-justify">Operación del servicio.</li>
            <li class="text-justify">Mejora continua del servicio.</li>
        </ul><br/>

        <img src="../recursos/img/cursos/ifct0109/mf049013a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Ciclo de vida del Servicio." title="Ciclo de vida del Servicio.">
    </div>
 /div>
 a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5113" role="button">Ley orgánica de protección de datos de carácter personal.</a>
 div class="collapse" id="U5113">
    <div class="card card-body text-info">
        <p class="text-justify">La protección de datos de carácter personal es un derecho fundamental que tienen las personas.</p>
        <p class="text-justify">Se trata de la potestad de control de las personas sobre el uso de sus datos personales.</p>
        <p class="text-justify">Mediante este control se evita la violación de varios derechos reflejados en la Constitución española referentes a la intimidad y a las libertades públicas.</p>


        <p class="text-justify"><strong>Ámbito de aplicación</strong></p>
        <p class="text-justify">Esta ley regirá los datos de carácter personal en las siguientes casuísticas:</p>
        <ul class="pl-3">
            <li class="text-justify">Cuando el tratamiento de los datos se efectúe en territorio español en el marco de las actividades de un establecimiento del responsable del tratamiento.</li>

            <li class="text-justify">Cuando el responsable del tratamiento no esté establecido en territorio español pero le sea de aplicación la legislación española según las normas de Derecho Internacional Público.</li>

            <li class="text-justify">Cuando el responsable del tratamiento no esté establecido en territorio de la Unión Europea y utilice medios situados en territorio español para realizar el tratamiento de los datos, excepto cuando dichos medios sean utilizados solamente con fines de tránsito.</li>
        </ul><br/>
        <p class="text-justify"><strong>Conceptos fundamentales de la LOPD</strong></p>

        <ul class="pl-3">
            <li class="text-justify">Datos de carácter personal.</li>
            <li class="text-justify">Fichero.</li>
            <li class="text-justify">Tratamiento de datos.</li>
            <li class="text-justify">Responsable del tratamiento o fichero.</li>
            <li class="text-justify">Afectado o interesado.</li>
            <li class="text-justify">Procedimiento de disociación.</li>
            <li class="text-justify">Encargado del tratamiento.</li>
            <li class="text-justify">Consentimiento del interesado.</li>
            <li class="text-justify">Cesión o comunicación de los datos.</li>
            <li class="text-justify">Fuentes accesibles al público.</li>
        </ul><br/>
        <p class="text-justify"><strong>Principios fundamentales de la protección de datos</strong></p>

        <ul class="pl-3">
            <li class="text-justify">Principio de calidad.</li>
            <li class="text-justify">Principio de información.</li>
                 <li class="text-justify">Principio de consentimiento del afectado.</li>
                 <li class="text-justify">Datos especialmente protegidos.</li>
                 <li class="text-justify">Datos relativos a la salud.</li>
                 <li class="text-justify">Principio de seguridad de los datos.</li>
                 <li class="text-justify">Principio de deber de secreto.</li>
                 <li class="text-justify">Principio de comunicación de datos.</li>
                 <li class="text-justify">Principio de acceso a los datos por cuenta de terceros.</li>
             </ul><br/>
             <p class="text-justify"><strong>Derechos de las personas</strong></p>

             <ul class="pl-3">
                 <li class="text-justify">Derecho de acceso.</li>
                 <li class="text-justify">Derecho de rectificación.</li>
                 <li class="text-justify">Derecho de cancelación.</li>
                 <li class="text-justify">Derecho de oposición.</li>
                 <li class="text-justify">Derecho de impugnación de valoraciones.</li>
                 <li class="text-justify">Derecho de consulta al Registro General de Protección de Datos.</li>
                 <li class="text-justify">Derecho de indemnización.</li>
             </ul><br/>

             <p class="text-justify"><strong>La seguridad de los datos y el documento de seguridad.</strong></p>

             <ul class="pl-3">
                 <li class="text-justify">Derecho de acceso.</li>
                 <li class="text-justify">Derecho de rectificación.</li>
                 <li class="text-justify">Derecho de cancelación.</li>
                 <li class="text-justify">Derecho de oposición.</li>
                 <li class="text-justify">Derecho de impugnación de valoraciones.</li>
                 <li class="text-justify">Derecho de consulta al Registro General de Protección de Datos.</li>
                 <li class="text-justify">Derecho de indemnización.</li>
             </ul><br/>

             <p class="text-justify">Se establecen tres niveles de seguridad a aplicar al documento, dependiendo de la naturaleza de los datos:</p>

             <ul class="pl-3">
                 <li class="text-justify">Nivel básico Aplicable a todos los ficheros que incluyan datos de carácter personal.</li>

                 <li class="text-justify">Nivel medio información financiera información de seguros y planes de seguros, comisión de infracciones penales, comisión de infracciones tributarias, etc.</li>

                 <li class="text-justify">Nivel alto información sobre ideología, religión, origen racial, salud, vida sexual, datos recabados para fines policiales sin consentimiento del afectado; ficheros que contengan datos referentes a actos de violencia de género.</li>
             </ul><br/>

             <p class="text-justify"><strong>Medidas de seguridad de los datos</strong>

                 <p class="text-justify">El documento de seguridad debe incluir una serie de medidas exigibles a los ficheros y a los tratamientos automatizados. Estas medidas se distinguen atendiendo al nivel de seguridad que contengan:</p>

                 <ul class="pl-3">
                     <li class="text-justify">Medidas de nivel básico</li>
                     <li class="text-justify">Medidas de nivel medio</li>
                     <li class="text-justify">Medidas de nivel alto</li>
                 </ul><br/>


                 <p class="text-justify"><strong>La Agencia Española de Protección de Datos</strong>

                     <p class="text-justify">La Agencia Española de Protección de Datos es un ente de derecho público, con personalidad jurídica propia y plena capacidad pública y privada, que actúa con plena independencia de las Administraciones Públicas en el ejercicio de sus funciones.</p>

                     <p class="text-justify">En términos generales, la AEPD se encarga de comprobar la legalidad de los tratamientos de los datos y de sancionar a aquellos que no cumplan con la legislación vigente. También es la responsable de difundir y dar publicidad a toda normativa referente a la protección de datos.</p>

                     <p class="text-right"><a href="http://www.agpd.es">http://www.agpd.es</a></p>

                     <p class="text-justify"><strong>Infracciones y sanciones</strong></p>

                     <img src="../recursos/img/cursos/ifct0109/mf049014a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title="">
         </div>
     </div>
     <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5114" role="button">Normativas más frecuentemente utilizadas para la gestión de la seguridad física.</a>
     <div class="collapse" id="U5114">
         <div class="card card-body text-info">
             <p class="text-justify"><strong>Áreas seguras</strong></p>
             <ul class="pl-3">

                 <li class="text-justify">Perímetro de seguridad física</li>
                 <li class="text-justify">Controles físicos de entrada</li>
                 <li class="text-justify">Seguridad de oficinas, habitaciones y medios</li>
                 <li class="text-justify">Protección contra amenazas externas e internas</li>
                 <li class="text-justify">Trabajo en áreas seguras</li>
                 <li class="text-justify">Áreas aisladas de carga y descarga</li>
             </ul><br/>
             <p class="text-justify"><strong>Seguridad de los equipos</strong></p>
             <ul class="pl-3">
                 <li class="text-justify">Ubicación y protección del equipo</li>
                 <li class="text-justify">Servicios públicos de soporte</li>
                 <li class="text-justify">Seguridad del cableado</li>
                 <li class="text-justify">Mantenimiento de los equipos</li>
                 <li class="text-justify">Seguridad de los equipos fuera de las instalaciones</li>
                 <li class="text-justify">Seguridad de la reutilización o retirada de los equipos</li>
                 <li class="text-justify">Retirada de propiedades de la organización</li>
             </ul>
                </div>
            </div>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 2. ANÁLISIS DE LOS PROCESOS DE SISTEMAS.
        <ul class="list-group">
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5121" role="button">Identificación de procesos de negocio soportados por sistemas de información.</a>
            <div class="collapse" id="U5121">
      <div class="card card-body text-info">
          <p class="text-justify">Proceso “Conjunto de actividades mutuamente relacionadas o que interactúan, las cuales transforman elementos de entrada en resultados“</p>

          <img src="../recursos/img/cursos/ifct0109/mf049022a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Proceso." title="Proceso.">

          <p class="text-justify">En este esquema se pueden diferenciar claramente cinco partes:</p>
          <ul class="pl-3">

              <li class="text-justify">Proceso: definido anteriormente como el conjunto de tareas realizadas para conseguir un objetivo.</li>
              <li class="text-justify">Entradas (o inputs): conjunto de características definidas de antemano para llevar a cabo las actividades del proceso.</li>
              <li class="text-justify">Salidas (u outputs): conjunto de objetivos y/o productos/servicios que se lograrán una vez finalizado el proceso.</li>
              <li class="text-justify">Recursos: recursos materiales (materias primas, instalaciones, maquinaria, herramientas, personal, etc.) e inmateriales (formación del personal, instrucciones de trabajo, definición de procedimientos, etc.) necesarios para llevar a cabo el proceso y conseguir los outputs deseados.</li>
              <li class="text-justify">Sistema de control: indicadores utilizados para comprobar el seguimiento de las actividades del proceso y ver si realmente se están cumpliendo las directrices definidas.</li>
          </ul><br/>
          <ul class="pl-3">
              Se distinguen varios tipos de procesos:
              <li class="text-justify">Procesos para la gestión de una organización: son los procesos estratégicos de la organización. Incluyen procesos de establecimiento de políticas o de fijación de objetivos, entre otros.</li>
              <li class="text-justify">Procesos para la gestión de recursos: procesos cuyo objetivo es realizar una correcta provisión de los recursos necesarios para la gestión de una organización.</li>
              <li class="text-justify">Procesos operativos: procesos que transforman los recursos en el producto/servicio, añadiéndole valor. Por ejemplo, proceso productivo, proceso de ventas, etc.</li>
              <li class="text-justify">Procesos de apoyo: procesos que proporcionan recursos al resto de procesos, atendiendo a sus requisitos. Por ejemplo, gestión financiera, gestión de personal, etc.</li>
              <li class="text-justify">Procesos de medición, análisis y mejora: incluyen procesos de medición, seguimiento y auditoría necesarios para analizar el desempeño y medir la eficacia y la eficiencia de los otros procesos.</li>
          </ul><br/>
          <ul class="pl-3"></ul>
          <p class="text-justify"><strong>Los procesos de negocio y su gestión</strong></p>

          <p class="text-justify">Un "proceso de negocio" es un conjunto de tareas o actividades que se llevan a cabo de un modo lógico para conseguir un negocio definido. Del mismo modo que en los procesos, los procesos de negocios están formados por entradas (inputs), salidas (outputs) y por una serie de funciones que se aplicarán a los inputs para conseguir las salidas buscadas. Más concretamente, las funciones sirven para transformar los inputs de modo que aumenten su valor para producir una salida, que puede ser un producto físico o un servicio.</p>

          <p class="text-justify">Se distinguen tres tipos de procesos:</p>
          <ul class="pl-3">
              <li class="text-justify">Procesos estratégicos: dan orientación al negocio.</li>
              <li class="text-justify">Procesos sustantivos: surgen a partir de las solicitudes del cliente externo.</li>
              <li class="text-justify">Procesos de apoyo vertical: Por ejemplo, la recepción de los clientes.</li>
              <li class="text-justify">Procesos de apoyo horizontal: Son de este tipo los apoyos informáticos o administrativos.</li>
          </ul><br/>
          <p class="text-justify"><strong>Enfoque de gestión por procesos</strong></p>
          <p class="text-justify">Las organizaciones son tan eficientes como lo son sus procesos.</p>
          <p class="text-justify">Este enfoque enfatiza principalmente los siguientes aspectos:</p>
          <ul class="pl-3">
              <li class="text-justify">rientación hacia las necesidades y expectativas de los clientes.</li>
              <li class="text-justify">Identificación de los requisitos a cumplir.</li>
              <li class="text-justify">Identificación del mapa de procesos de la organización.</li>
              <li class="text-justify">Identificación y diseño de procesos clave que aporten valor al producto/servicio final.</li>
              <li class="text-justify">Control y mejora de los procesos clave.</li>
              <li class="text-justify">Aplicación de la gestión de la calidad al proceso.</li>
              <li class="text-justify">Evaluación de la eficacia y eficiencia de los procesos mediante un sistema de indicadores.</li>
              <li class="text-justify">Documentación de los distintos procedimientos de los procesos para verificar su grado de cumplimiento y eficacia.</li>
              <li class="text-justify">Mejora continua del proceso una vez evaluados los indicadores.</li>
          </ul><br/>
          <p class="text-justify"><strong>Procesos de negocio y sistemas de información</strong></p>

          <p class="text-justify">Como ya se ha comentado anteriormente, un proceso de negocio se puede definir como el modo en que se organiza, coordina y enfoca el trabajo para producir un bien o servicio, añadiéndole valor. En el proceso de negocio se incluyen:</p>
          <ul class="pl-3">
              <li class="text-justify">Flujos concretos de materiales, información y conocimientos.</li>
              <li class="text-justify">Normas en las que las organizaciones coordinan el trabajo, la información y los conocimientos.</li>
          </ul><br/>
          <p class="text-justify">Los sistemas de información se crearon para apoyar uno o más procesos de negocio dentro de las organizaciones. El entorno donde las compañías desarrollan sus actividades cada vez resulta más complejo debido a la globalización, a los procesos de internacionalización de las empresas y al incremento de competencia en los mercados, entre muchos otros factores.</p>
      </div>
  </div>
  <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5122" role="button">Características fundamentales de los procesos electrónicos.</a>
  <div class="collapse" id="U5122">
      <div class="card card-body text-info">
          <p class="text-justify">Los datos de las empresas son una fuente de información básica que los directivos y ejecutivos utilizan para decidir sus futuras acciones (tanto para grandes como pequeñas o medianas empresas), realizando tareas de recolección, análisis y procesamiento de datos. Por este motivo, en la actualidad los datos de una empresa son considerados uno de sus activos fundamentales.</p>

          <p class="text-justify">Un proceso necesita varios recursos para que pueda realizar su tarea con éxito:</p>
          <ul class="pl-3">
              <li class="text-justify">Tiempo de CPU.</li>
              <li class="text-justify">Memoria.</li>
              <li class="text-justify">Archivos.</li>
              <li class="text-justify">Dispositivos de entrada/salida.</li>
          </ul><br/>
          <p class="text-justify"><strong>Estados de un proceso</strong></p>

          <img src="../recursos/img/cursos/ifct0109/mf049023a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Esquema de los estados de los procesos." title="Esquema de los estados de los procesos.">

          <ul class="pl-3">
              <li class="text-justify">Nuevo (new): el proceso se acaba de crear, pero todavía no ha sido admitido en el grupo de procesos ejecutables por el sistema operativo.</li>
              <li class="text-justify">Listo (ready): el proceso está listo y esperando a ser asignado al procesador para ser ejecutado.</li>
              <li class="text-justify">Ejecutando (running): el proceso ya ha sido asignado y está en la CPU ejecutando sus instrucciones.</li>
              <li class="text-justify">Bloqueado (waiting): el proceso está esperando a que ocurra un suceso determinado (como, por ejemplo, la recepción de una señal o la terminación de una operación de entrada/salida).</li>
              <li class="text-justify">Terminado (terminated): el proceso ya ha finalizado su ejecución y, por tanto, ya no ejecuta más acciones. El proceso se ha sacado del grupo de procesos ejecutables por el sistema operativo y se han liberado los recursos que ha utilizado.</li>
          </ul> <br/>
          <p class="text-justify">Los eventos que pueden dar lugar a un cambio de estado son los siguientes:</p>
          <ul class="pl-3">
              <li class="text-justify">De Ninguno a Nuevo: se crea un proceso nuevo para ejecutar un programa.</li>
              <li class="text-justify">De Nuevo a Listo: el sistema está preparado para aceptar un proceso porque dispone de recursos suficientes.</li>
              <li class="text-justify">De Preparado a Ejecutando: el sistema elige uno de los procesos que están en estado de "Listo“ para llevarlo a ejecución.</li>
              <li class="text-justify">De Ejecutando a Terminado: el sistema operativo finaliza el proceso que se está ejecutando, indicando si este se abandona o se cancela.</li>
              <li class="text-justify">De Ejecución a Terminado: el proceso ya ha agotado su tiempo de ejecución y cede voluntariamente su tiempo de ejecución o queda interrumpido para atender a otro proceso de mayor prioridad.</li>
              <li class="text-justify">De Ejecución a Bloqueado: el proceso solicita algo por lo que debe esperar.</li>
              <li class="text-justify">De Bloqueado a Listo: se produce el suceso que estaba esperando el proceso y se pone en la cola de espera para ser ejecutado.</li>
              <li class="text-justify">De Bloqueado a Terminado (y de Listo a Terminado): un proceso padre termina con un proceso hijo y ya no es necesario ejecutar el proceso hijo.</li>
          </ul><br/>
          <p class="text-justify">En resumen, los estados de ejecución de un proceso (que forman su ciclo de vida) son sencillos, constan de la creación, ejecución y terminación de instrucciones. No obstante, es importante destacar que un proceso en el transcurso de su ciclo puede terminar de diferentes formas:</p>
          <ul class="pl-3">
              <li class="text-justify">Salida normal: cuando el proceso termina de forma voluntaria. Por ejemplo, cuando se cierra una aplicación.</li>
              <li class="text-justify">Salida por error: cuando el proceso tiene que salir porque los datos son insuficientes. Por ejemplo, cuando se solicita información de un archivo inexistente.</li>
              <li class="text-justify">Error fatal: cuando hay algún error en el programa.</li>
              <li class="text-justify">Eliminado por otro proceso: ocurre sobre todo cuando un proceso se queda colgado. Cuando esto sucede, se ejecutan otros procesos encargados de eliminar los procesos colgados.</li>
          </ul><br/>
          <p class="text-justify">Manejo de señales, su administración y los cambios de prioridades</p>

          <p class="text-justify">La gestión de procesos comprende la monitorización, detención y cambio de prioridad de los procesos. Aunque de modo general, los procesos son gestionados directamente por el kernel del sistema operativo sin necesidad de que tenga que intervenir el usuario en ningún momento; en ocasiones, los procesos pueden sufrir problemas inesperados y requerirán la intervención del usuario:</p>
          <ul class="pl-3">
              <li class="text-justify">Algunas veces los procesos se pueden detener por razones desconocidas y es necesario reiniciar el proceso.</li>
              <li class="text-justify">Otras veces, algún proceso se puede ejecutar descontroladamente malgastando los recursos del sistema. En este caso, es necesario que intervenga el administrador para detener el proceso.</li>
          </ul><br/>
          <p class="text-justify"><strong>Manejo y administración de señales</strong></p>

          <p class="text-justify">Una señal es un mecanismo utilizado para notificar a los procesos los eventos que se producen en el sistema. También se pueden utilizar como mecanismo de comunicación y sincronización en los procesos.</p>
                  <p class="text-justify">Cuando un proceso recibe una señal, deja de ejecutar su código para atender la señal, por lo que recibe prioridad sobre la ejecución del código. Después de atender y responder a la señal, el proceso vuelve al punto en el que se interrumpió y continúa con la ejecución prevista. Cuando el proceso recibe una señal y este no se ha preparado para recibirla, se produce la muerte de dicho proceso.</p>
                  <p class="text-justify"><strong>Fuentes de generación de señales</strong></p>
                  <ul class="pl-3">
                      <li class="text-justify">Excepciones: el núcleo genera una señal y la notifica al proceso cuando se produce un intento de ejecutar una instrucción ilegal (o excepción) durante la ejecución del mismo.</li>
                      <li class="text-justify">Otros procesos: un proceso puede enviar una señal a otro proceso o a un conjunto de procesos. Se suele utilizar para "matar" procesos que se quedan colgados. Por ejemplo, mediante el comando kill (utilizado en el sistema operativo Linux) se matan los procesos colgados. Algo similar se puede realizar con el Administrador de tareas de Windows.</li>
                      <li class="text-justify">Interrupciones del terminal: cuando el usuario pulsa una combinación de teclas (como, por ejemplo, [Ctrl] + [C]), se produce el envío de señales a los procesos que se están ejecutando en el primer plano de un terminal.</li>
                  
                      <li class="text-justify">Control de tareas: se generan señales tanto para manipular a los procesos que se están ejecutando en primer plano como para los que lo hacen en segundo plano. Cuando un proceso termina, el núcleo lo notifica a su padre mediante una señal.</li>
                      <li class="text-justify">Cuotas: cuando un proceso se .excede en tiempo de uso de la CPU o en tamaño máximo de un fichero, el núcleo envía una señal a un proceso.</li>
                      <li class="text-justify">Notificaciones: un proceso puede requerir al núcleo que le notifique ciertos eventos mediante una señal. Por ejemplo, cuando un dispositivo se encuentra listo para ser utilizado.</li>
                  
                      <li class="text-justify">Alarmas: el proceso puede configurar una alarma para que el núcleo le envíe una señal cuando pase un tiempo determinado.</li>
                      <li class="text-justify">Cada señal tiene asignada por defecto una acción. Esta acción es la que realizará el núcleo si el proceso no ha especificado alguna acción alternativa. Por defecto, se reflejan cinco posibles acciones:</li>
                      <ul class="pl-3">
                          <li class="text-justify">Abortar el proceso.</li>
                          <li class="text-justify">Finalizar el proceso.</li>
                          <li class="text-justify">Ignorar la señal.</li>
                          <li class="text-justify">Parar o suspender el proceso.</li>
                          <li class="text-justify">Continuar el proceso.</li>
                      </ul>
                  </ul><br/>
                  <p class="text-justify"><strong>Cambios de prioridades.</strong></p>
                  <p class="text-justify">Cuando hay más de un proceso en el estado "Listo': el kernel le asigna el uso de la CPU al de mayor prioridad en ese momento; cada proceso tiene asignada una determinada prioridad de ejecución al necesitar más o menos tiempo de CPU que otros.</p>
                  <p class="text-justify">Aunque habitualmente el kernel es el encargado de gestionar la prioridad de los procesos de modo automático, el usuario también tiene la posibilidad de cambiar estas prioridades manualmente. Se suelen cambiar prioridades cuando se necesita que alguna aplicación funcione con mayor soltura (por ejemplo, aplicaciones de edición de vídeo o fotografía digital) dejando en segundo plano otros procesos que no necesiten un acceso tan intensivo a los recursos del sistema.</p>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5125" role="button">Determinación de los sistemas de información que soportan los procesos de negocio y los activos y servicios utilizados por los mismos.</a>
          <div class="collapse" id="U5125">
              <div class="card card-body text-info">
                  <p class="text-justify">Un sistema se define como el conjunto de elementos que interactúan entre sí para alcanzar un fin determinado. Un sistema de información es el conjunto de elementos que interactúan entre sí con el fin de apoyar las actividades de una empresa u organización.</p>
                  <p class="text-justify">Un sistema de información realiza cuatro actividades básicas</p>
                  <ul class="pl-3">
                      <li class="text-justify">Entrada de información</li>
                      <li class="text-justify">Almacenamiento de información</li>
                      <li class="text-justify">Procesamiento de información</li>
                      <li class="text-justify">Salida de información</li>
                  </ul><br/>
                  <p class="text-justify">Además de las actividades básicas de un SI, es importante describir sus componentes o activos principales:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Financieros: aspecto económico que permite la adquisición, contratación y mantenimiento de los recursos que integran un SI.</li>
                      <li class="text-justify">Administrativos: estructura orgánica de objetivos, lineamientos, funciones, procedimientos, departamentalización, dirección y control de las actividades que sustenta la creación y el uso de los sistemas.</li>
                      <li class="text-justify">Humanos: compuesto por el técnico (que posee conocimientos especializados para desarrollar los sistemas) y por el usuario (personas interesadas en el uso y gestión de la información de los SI).</li>
                      <li class="text-justify">Materiales: elementos físicos que soportan el funcionamiento de un SI (local de trabajo, instalaciones eléctricas y de comunicaciones, etc.).</li>
                      <li class="text-justify">Tecnológicos: conjunto de experiencias, conocimientos, técnicas y metodologías que orientan la creación, operación y mantenimiento de un sistema.</li>
                  </ul><br/>
                  <p class="text-justify">Tipos de sistemas de información básicos que soportan los procesos de negocio</p>
                  <p class="text-justify">Los sistemas de información están clasificados en cuatro niveles, atendiendo al nivel de la organización al que dan servicio:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Sistemas a nivel operativo: apoyan a los gerentes operativos en el seguimiento de la actividades y transacciones elementales de la organización (ventas, ingresos, etc.).</li>
                      <li class="text-justify">Sistemas a nivel de conocimiento: SI que apoyan a los trabajadores del conocimiento y de datos de una organización.</li>
                      <li class="text-justify">Sistemas a nivel administrativo: sistemas que apoyan las actividades de supervisión, control, de toma de decisiones y administrativas de los gerentes de nivel medio.</li>
                      <li class="text-justify">Sistemas a nivel estratégico: apoyan a las actividades de planificación a largo plazo de la dirección general de las empresas. Ayudan a los directores a tomar decisiones en aspectos estratégicos a largo plazo.</li>
                  </ul><br/>
                  <img src="../recursos/img/cursos/ifct0109/mf049024a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Niveles de la organización." title="Niveles de la organización.">
                  <p class="text-justify">Atendiendo a las funciones a las que dan apoyo:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Sistemas de ventas y marketing</li>
                      <li class="text-justify">Sistemas de manufactura y producción</li>
                      <li class="text-justify">Sistemas de finanzas y sistemas de contabilidad</li>
                      <li class="text-justify">Sistemas de recursos humanos</li>
                  </ul><br/>
                  <img src="../recursos/img/cursos/ifct0109/mf049024b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Pirámide de relaciones" title="Pirámide de relaciones">
                  <p class="text-justify">Desarrollo de un sistema de información para una organización o empresa</p>
                  <ul class="pl-3">
                      <li class="text-justify">Conocimiento de la organización</li>
                      <li class="text-justify">Identificación de problemas y oportunidades</li>
                      <li class="text-justify">Determinación de necesidades</li>
                      <li class="text-justify">Diagnóstico</li>
                      <li class="text-justify">Propuesta</li>
                      <li class="text-justify">Diseño del SI</li>
                      <li class="text-justify">Codificación</li>
                      <li class="text-justify">Implementación</li>
                      <li class="text-justify">Mantenimiento</li>
                  </ul>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5126" role="button">Análisis de las funcionalidades de sistema operativo para la monitorización de los procesos y servicios.</a>
          <div class="collapse" id="U5126">
              <div class="card card-body text-info">
                  <p class="text-justify">Los sistemas operativos actuales contienen varias aplicaciones o funcionalidades que sirven para monitorizar los procesos y servicios de las computadoras. Sea cual sea el sistema operativo, hay una serie de requisitos que deben tener en cuenta estas funcionalidades:</p>
                  <ul class="pl-3">
                      <li class="text-justify">La cantidad de usuarios que accederá al sistema (tanto de modo recurrente como en accesos diferidos).</li>
                      <li class="text-justify">Los picos de tráfico de información y el tráfico medio, para establecer unos sistemas de comunicación adecuados.</li>
                      <li class="text-justify">El tipo de dispositivo por el que acceden los usuarios, que puede ir desde un ordenador personal hasta teléfonos móviles o estaciones de trabajo remotas.</li>
                      <li class="text-justify">Los derechos de acceso de cada usuario a las aplicaciones. Es necesario dar derechos de acceso a los usuarios según la aplicación a la que quieren acceder y también según el dispositivo desde el cual quieren acceder.</li>
                  </ul>   <br/>
                  <p class="text-justify">En cuanto a la monitorización de los sistemas operativos, el objetivo principal debe ser la reducción de la latencia y el aumento máximo del rendimiento, utilización y eficiencia:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Latencia: indicador que mide el tiempo transcurrido entre la realización de una petición y la visualización de los resultados. Se mide en unidades de tiempo.</li>
                      <li class="text-justify">Utilización: indicador que mide el porcentaje de un componente o servicio que se utiliza realmente. En este indicador hay que encontrar el equilibrio para que un nivel de utilización elevado no provoque problemas de sobrecarga del sistema.</li>
                      <li class="text-justify">Rendimiento: cantidad de trabajo capaz de ser procesada por unidad de tiempo. Se mide en bits por segundo, Kbyte por hora, etc.</li>
                      <li class="text-justify">Eficiencia: indicador resultante del cociente entre rendimiento y utilización:<br/>
              
                          <p class="text-center bg-light w-50 mx-auto p-3">Eficiencia= Rendimiento / Utilización</p>
                      </li>
                  </ul>
                  <p class="text-justify"><strong>Monitorización de procesos y servicios en entorno Windows.</strong></p>
                  <ul class="pl-3">
                      <li class="text-justify">Administrador de tareas de Windows</li>
                      <li class="text-justify">Process Monitor</li>
                  </ul><br/>
                  <p class="text-justify"><strong>Monitorización de procesos y servicios en entorno Linux</strong></p>
                  <ul class="pl-3">
                      <li class="text-justify">Sistema-> Administración->Monitor del sistema.</li>
                      <li class="text-justify">Sistema / Procesos / Recursos / Sistema de archivos</li>
                  </ul>
              </div>
          </div>
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5127" role="button">Técnicas utilizadas para la gestión del consumo de recursos.</a>
          <div class="collapse" id="U5127">
              <div class="card card-body text-info">
                  <p class="text-justify">Para llevar a cabo una gestión del consumo de recursos eficiente es necesario realizar una serie de tareas previas de prevención. Las tareas previas imprescindibles son las siguientes:</p>
                  <ul class="pl-3">
                      <li class="text-justify">Identificación de los procesos y sus estados.</li>
                      <li class="text-justify">Determinación de las características y elementos que forman parte de los procesos.</li>
                      <li class="text-justify">Planificación de la ejecución de los procesos.</li>
                      <li class="text-justify">Interpretación de las técnicas de gestión de memoria.</li>
                      <li class="text-justify">Diferenciación e individualización de las técnicas de gestión de memoria.</li>
                      <li class="text-justify">Conocimiento profundo de la gestión de entrada/salida del sistema operativo.</li>
                  </ul><br/>
                  <p class="text-justify">La gestión de la incidencia contiene tres fases:</p>
                  <ol class="pl-3">
                      <li class="text-justify"><strong>Diagnóstico.</strong> Consultando toda la información facilitada por las herramientas de monitorización estudiadas, el administrador podrá identificar aquellos procesos, aplicaciones, usuarios o dispositivos que pueden estar causando este mal funcionamiento del sistema. Puede ser que estén utilizando demasiada memoria, que estén realizando un uso excesivo del disco, del ancho de banda, etc.</li><br/>
                      <li class="text-justify"><strong>Detección.</strong> Una vez realizado el diagnóstico y detectado el elemento que provoca el mal funcionamiento del sistema, el administrador debe identificar qué agente está ocasionando dicho problema y por qué está sobrecargando el sistema.</li><br/>
                      <li class="text-justify"><strong>Resolución.</strong> Cuando ya está detectado el agente que ocasiona el problema, el administrador debe tomar las medidas necesarias para que el sistema se restaure en el punto justo anterior de la incidencia. La resolución puede consistir en la detención de algún dispositivo que esté funcionando incorrectamente, la eliminación o detección de algún proceso bloqueado, el reinicio de algún dispositivo, el cierre de sesión de algún usuario, etc.</li><br/>
                  </ol>
              </div>
          </div>
      </ul>
  </li>
  <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 3. DEMOSTRACIÓN DE SISTEMAS DE ALMACENAMIENTO.
      <ul class="list-group">
          <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5131" role="button">Tipos de dispositivos de almacenamiento más frecuentes.</a>
          <div class="collapse" id="U5131">
              <div class="card card-body text-info">
                  <p class="text-justify">Los dispositivos de almacenamiento (también llamados unidades de almacenamiento) son aquellos cuya función principal es almacenar datos y programas de forma temporal y permanente; son un sistema de almacenamiento secundario del ordenador. </p>
                  <p class="text-justify">En estos dispositivos se almacenan temporal o permanentemente los programas y datos que son gestionados por las aplicaciones que se ejecutan en los sistemas operativos, de modo que se facilita el transporte de la información y la distribución de la misma en varios equipos.</p>
                  <p class="text-justify">Se distinguen tres tipos de almacenamiento de datos:</p>
                  <ul class="pl-3">
                                                        <li class="text-justify"><strong>Dispositivos de almacenamiento por medio magnético.</strong></li>
                        <p class="text-justify">Los dispositivos de almacenamiento por medio magnético son aquellos en los que la información se lee y se graba mediante la manipulación de partículas magnéticas presentes en la superficie del medio magnético.</p>
                        <ul class="pl-3">
                            <li class="text-justify"><strong>Discos Duros</strong></li>
                            <p class="text-justify">Los discos duros (HDD, Hard Disk Drive) son unidades de almacenamiento permanentes de gran capacidad y constituyen el medio de almacenamiento de información más importante de un ordenador</p>
                             <img src="../recursos/img/cursos/ifct0109/mf049032a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Disco Duro." title="Disco Duro.">
                            <li class="text-justify"><strong>Cabinas de discos</strong></li>
                            <p class="text-justify">Las cabinas de discos son sistemas de almacenamiento de datos formados por varios discos físicos. Requieren ser gestionadas por profesionales técnicos especializados.</p>
                            <img src="../recursos/img/cursos/ifct0109/mf049032b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Cabinas de discos." title="Cabinas de discos.">
                            
                            <li class="text-justify"><strong>Disquetes</strong></li>
                            Los disquetes están formados por una pieza circular de material magnético, fina y flexible, protegida por una cubierta de plástico cuadrada o rectangular.
                            <img src="../recursos/img/cursos/ifct0109/mf049032c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Disquetes." title="Disquetes.">
                            
                            <li class="text-justify"><strong>Cintas magnéticas</strong></li>
                            Soporte de almacenamiento que graba pistas sobre una banda plástica con un material
                            magnetizado. En la actualidad es un sistema prácticamente obsoleto y se utiliza como respaldo de archivos.
                            <img src="../recursos/img/cursos/ifct0109/mf049032d.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Cintas magnéticas." title="Cintas magnéticas.">
                            
                        </ul>
                        <li class="text-justify"><strong>Dispositivos de almacenamiento por medio óptico.</strong></li>
                        <ul class="pl-3">
                            <li class="text-justify"><strong>CD-ROM (Compact Disc)</strong></li>
                            Estos son soportes digitales de almacenamiento óptico cuya superficie está recubierta de un material que refleja la luz. Su capacidad de almacenamiento en los soportes estándar es de 650- 700 Mb de información, aunque también hay soportes de gran capacidad que almacenan 800 y 900Mb de información.
                            Existen muchos formatos de disco, que se diferencian en la forma en la que se codifica la información (CD-ROM, CD-R, CD-RW, etc.).
                            <img src="../recursos/img/cursos/ifct0109/mf049032e.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="CD-ROM." title="CD-ROM.">
                            
                            <li class="text-justify"><strong>DVD-ROM</strong></li>
                            Los DVD-ROM son discos compactos con capacidad de almacenar 4,7 Gb en una cara del disco, aumentando en más de siete veces la capacidad de los CD-ROM. También hay DVD-ROM que guardan información en las dos caras del disco, siendo su capacidad de almacenaje todavía mayor.
                            Al igual que los CD-ROM, hay varios formatos de DVD-ROM según la forma en la que estos almacenan la información (por ejemplo, mientras el DVD-ROM no permite la sobre escritura de la información una vez grabado al completo, los DVD-RW permiten la reescritura de la información hasta unas mil veces).
                            <img src="../recursos/img/cursos/ifct0109/mf049032f.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="DVD-ROM." title="DVD-ROM.">
                            
                            <li class="text-justify"><strong>Blu-Ray</strong></li>
                            Es un formato de disco óptico cuya función principal es almacenar vídeo de alta definición y datos con grandes volúmenes debido a su alta capacidad de almacenamiento: el modelo básico de una capa tiene una capacidad de 25 Gb y el de doble capa, 50Gb.
                            Utilizan tecnología láser ultravioleta (a diferencia de los CD y DVD, que utilizan láser rojo) y tienen una velocidad de transferencia mayor que cualquier otro formato de disco óptico
                            <img src="../recursos/img/cursos/ifct0109/mf049032g.png" class="img-responsive d-block mx-auto p-3 w- mb-3" alt="BLU-RAY." title="BLU-RAY.">
                            
                        </ul>
                        <li class="text-justify"><strong>Dispositivos de almacenamiento por medio electrónico.</strong></li>
                        <p class="text-justify">Dispositivos que almacenan la in formación a través de cargas eléctricas que pueden mantener el dato almacenado de manera temporal o a largo plazo, dependiendo de la tecnología utilizada.</p>
                        <p class="text-justify">También son conocidos como SSDs (Solid State Drive) y su principal ventaja es que no hay elementos móviles, por lo que no se genera calor ni fricción, además de adquirir una alta velocidad de transmisión de datos.</p>
                        <p class="text-justify">Estos dispositivos son inmunes a los campos magnéticos, pero son susceptibles a los movimientos bruscos, la temperatura y la humedad.</p>
                        <ul class="pl-3">
                            <li class="text-justify"><strong>Discos duros SSD (Solid State Disc)</strong></li>
                            <p class="text-justify">Son discos duros que utilizan memoria de semiconductores de estado sólido para almacenar la información en lugar de elementos móviles (se consideran elementos móviles los platos que forman parte de los discos duros convencionales). Al no tener elementos móviles, son más rápidos y silenciosos, desprenden menos calor, consumen menos energía y tienen una mayor resistencia a los golpes. El inconveniente principal es su elevado precio.</p>
                            <img src="../recursos/img/cursos/ifct0109/mf049032h.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Discos Duros SSD." title="Discos Duros SSD.">
                            
                            <li class="text-justify"><strong>Pc-Cards</strong></li>
                            Tienen el tamaño de una tarjeta de crédito y son utilizadas para el almacenamiento de datos, aplicaciones, tarjetas de memoria, cámaras electrónicas, teléfonos móviles, etc.
                            <img src="../recursos/img/cursos/ifct0109/mf049032i.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="PC-Cards." title="PC-Cards.">
                            
                            <li class="text-justify"><strong>Flash cards (tarjetas de memoria flash)</strong></li>
                            Las flash cards son tarjetas de memoria no volátil que almacenan datos que pueden ser leídos, modificados o borrados. Son de pequeño tamaño, con gran capacidad de almacenamiento, bastante resistentes a los golpes y generan un bajo consuno. Se utilizan en cámaras digitales y móviles, entre otros.
                            Compactflash, Secure Digital (SD) o Multimedia Card (MMC), entre muchas otras.
                            
                                <img src="../recursos/img/cursos/ifct0109/mf049032j.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Flash Cards." title="Flash Cards.">
                            
                            <li class="text-justify"><strong>Pen drives</strong></li>
                            Los pen drives son dispositivos pequeños de almacenamiento que utilizan memoria flash para guardar la información y que se conectan al ordenador mediante un puerto USB.
                            <img src="../recursos/img/cursos/ifct0109/mf049032k.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Pen-Drives." title="Pen-Drives.">
                            
                        </ul>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5132" role="button">Características de los sistemas de archivo disponibles.</a>
            <div class="collapse" id="U5132">
                <div class="card card-body text-info">
                    <p class="text-justify"><strong>El sistema de archivos</strong> (filesystem) es la forma en la que el sistema operativo organiza la información dentro de una memoria externa o secundaria (normalmente discos duros o SSD) para su grabación y posterior recuperación. Cada sistema operativo maneja su propio y único sistema de archivos, lo que hace que no pueda funcionar con otros.</p>
                    <p class="text-justify">El software del sistema de archivos es el que se encarga de organizar estos sectores en archivos y directorios y establece un registro en el que se almacena información sobre qué sectores pertenecen a cada archivo y cuáles de ellos no se han utilizado</p>
                    <p class="text-justify">Se distinguen entre tres tipos de sistemas de archivo:</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Sistemas de archivos de disco:</strong> son sistemas de archivos cuya función principal es almacenar los archivos de una unidad de disco y los datos que estos contienen. Tienen asignadas las siguientes funciones:
                            <ul class="pl-3">
                                <li class="text-justify">Tener conocimiento de todos los archivos del sistema.</li>
                                <li class="text-justify">Controlar la compartición y forzar la protección de los archivos.</li>
                                <li class="text-justify">Gestionar el espacio de disco, su asignación y su designación.</li>
                                <li class="text-justify">Traducir las direcciones lógicas de los archivos a direcciones físicas de disco.</li>
                            </ul>
                        </li>
                        <li class="text-justify"><strong>Sistemas de archivos de red:</strong> sistemas de archivos que acceden a sus archivos a través de una red.</li>
                        <li class="text-justify"><strong>Sistemas de archivos de propósito especial:</strong> aquellos sistemas de archivos que no son ni de disco ni de red.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Rutas y nombres de archivos.</strong></p>
                    <p class="text-justify">El sistema de archivos es una gran colección de directorios y archivos que guardan todo tipo de Información</p>
                    <p class="text-justify">La estructura de estos directorios puede ser jerárquica, ramificada o en árbol, aunque en algún caso puede ser también plana</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049033a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title="">
                    
                    <p class="text-justify"><strong>La estructura de esta ruta se compone de los siguientes elementos:</strong></p>
                    <ul class="pl-3">
                        <li class="text-justify">"C:": que es la unidad de almacenamiento en la que se encuentra el archivo.</li>
                        <li class="text-justify">"\Documents and Settings\User\Documents\": que es la ruta del archivo.</li>
                        <li class="text-justify">"Informe.doc": que es el nombre del archivo. La extensión de este archivo es ".doc" y se corresponde con un archivo de texto.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Utilizando Linux como sistema operativo, un ejemplo de ruta podría ser:</strong></p>
                    <ul class="pl-3">
                        <li class="text-justify">"/home/User/Documents/ informe.doc“ (Ojo !! diagonales invertidas!!.)</li>
                        <li class="text-justify">"/" representa el directorio raíz donde está montado todo el sistema de archivos.</li>
                        <li class="text-justify">"home/User/Documents/" es la ruta del archivo.</li>
                        <li class="text-justify">"informe.doc" es el nombre del archivo, donde ".doc" corresponde con su extensión.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Principales características de los sistemas de archivos</strong></p>
                    <ul class="pl-3">
                        <li class="text-justify">Abstracción</li>
                        <li class="text-justify">Capacidad de enlaces duros</li>
                        <li class="text-justify">Capacidad de enlaces simbólicos</li>
                        <li class="text-justify">Seguridad o permisos:</li>
                        <ul class="pl-3">
                            <li class="text-justify">Listas de control de acceso (ACLs, Access Control Lists)</li>
                            <li class="text-justify">UGO (Usuario, Grupo, Otros: User, Group, Others)</li>
                            <li class="text-justify">Capacidades granuladas.</li>
                            <li class="text-justify">Atributos extendidos</li>
                        </ul>
                        <li class="text-justify">Integridad del sistema de archivos (journaling</li>
                        <li class="text-justify">Capacidades para la reducción de la fragmentación</li>
                        <li class="text-justify">Soporte para cuotas de discos</li>
                        <li class="text-justify">Soporte para archivos dispersos</li>
                        <li class="text-justify">Soporte de crecimiento del sistema de archivos nativo</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Tipos de sistemas de archivos existentes</strong></p>
                    <img src="../recursos/img/cursos/ifct0109/mf049033b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Sistemas de archivos." title="Sistemas de archivos.">
                    <img src="../recursos/img/cursos/ifct0109/mf049033c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Sistemas de archivos." title="Sistemas de archivos.">
                    <p class="text-justify">Un archivo es la estructura bajo la cual se guarda la información en disco. Por definición, es un conjunto organizado y con nombre de información estructurada almacenada en un soporte no volátil.</p>
                    <p class="text-justify">El tamaño de un archivo de datos se expresa en bytes</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049033d.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Unidades de medida de almacenamiento." title="Unidades de medida de almacenamiento.">
                    <p class="text-justify">Exabytes, Zettabyte, YottaByte, Brontobyte, GeopByte, Saganbyte, …</p>
                    <p class="text-justify"><strong>Clasificación de los archivos</strong></p>
                    <ul class="pl-3">
                        <li class="text-justify">Según el formato de los registros:
                            <ul class="pl-3">
                                <li class="text-justify">Homogéneos: todos los registros son del mismo tipo.</li>
                                <li class="text-justify">Heterogéneos: hay varios tipos de registro dentro del mismo fichero.</li>
                            </ul>
                        </li>
                        <li class="text-justify">Según el tamaño de los registros:
                            <ul class="pl-3">
                                <li class="text-justify">Longitud fija: ficheros compuestos de registros fijos con formato definido.</li>
                                <li class="text-justify">De longitud variable: ficheros compuestos de registros variables y de formato definido.</li>
                            </ul>
                        </li>
                        <li class="text-justify">Según su unidad básica de información:
                            <ul class="pl-3">
                                <li class="text-justify">Binarios: utilizan bits como unidad básica de información.</li>
                                <li class="text-justify">Textuales: utilizan caracteres como unidad básica de información.</li>
                                <li class="text-justify">Tipados: utilizan registros como unidad básica de información.</li>
                            </ul>
                        </li>
                        <li class="text-justify">Por la función del archivo:
                            <ul class="pl-3">
                                <li class="text-justify">Permanentes: ficheros ordenados para el almacenamiento de datos.
                                <li class="text-justify">Temporales: ficheros con uso temporal, orientados al procesamiento. En cuanto se termina la transacción para la que fueron creados, se eliminan.
                            </ul>
                        </li>
                        <li class="text-justify">Por su vigencia:
                            <ul class="pl-3">
                                <li class="text-justify">Borradores: ficheros que no han entrado en uso.
                                <li class="text-justify">Vigentes: ficheros que ya se están utilizando.
                            </ul>
                        </li>
                        <li class="text-justify">Por la función de su contenido:
                            <ul class="pl-3">
                                <li class="text-justify">Maestros: contienen información de situación diversa que puede ir variando con el tiempo. Suelen reflejar situaciones reales.</li>
                                <li class="text-justify">Constantes: ficheros que contienen información prácticamente permanente e inalterable en el tiempo.</li>
                                <li class="text-justify">Históricos: ficheros que almacenan datos históricos, principalmente para fines estadísticos o de elaboración de informes</li>
                            </ul>
                        </li>
                    </ul><br/>
                    <p class="text-justify"><strong>Registros</strong></p>
                    <p class="text-justify">Los archivos están formados por una colección de registros. Se definen dos variedades de registros atendiendo a sus definiciones:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Registro físico o bloque: cantidad de datos que se pueden transferir en una sola operación de lectura/escritura. Se trata del conjunto de bytes que se transfieren en una operación de lectura/escritura desde la memoria principal al dispositivo de almacenamiento o viceversa.</li>
                        <li class="text-justify">Registro lógico: conjunto de datos que constituyen una unidad de almacenamiento para un proceso ejecutable cualquiera. Viene definido por el programador.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Tipos de Registros</strong></p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>De longitud física:</strong> registros que ocupan el mismo espacio en disco, independientemente de la cantidad de información que contengan (incluso existe la posibilidad de que no contengan información). Puede haber tres variedades de registros de este tipo:
                            <ul class="pl-3">
                                <li class="text-justify">Con el mismo número de campos por registro, pero campos de distinta longitud.</li>
                                <li class="text-justify">Con el mismo número de campos por registro y la misma longitud de los campos que hay dentro de cada registro.</li>
                                <li class="text-justify">Con distinto número de campos por registro.</li>
                            </ul>
                        </li>
                        <li class="text-justify"><strong>De longitud indefinida:</strong> cada registro puede ser de distinta longitud (la longitud es imposible de determinar). Con estos registros no se desaprovecha espacio pero tienen el inconveniente de la elevada dificultad que hay para localizarlos.</li>
                        <li class="text-justify"><strong>De longitud variable:</strong> cada registro puede ser de distinta longitud pero entre un máximo y un mínimo. Todos los registros tienen reservado el mismo espacio en memoria para sus campos. En caso de que no tenga todos los campos hay un desperdicio de espacio.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Campos</strong></p>
                    <p class="text-justify">Un campo es un espacio de almacenamiento designado para guardar un dato en particular</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049033e.png" class="img-responsive d-block mx-auto p-3 w-50 mb-3" alt="Sistema de almacenamiento." title="Sistema de almacenamiento.">
                    <div class="col-10">
                        <p class="text-justify">Organización de almacenamiento de archivos</p>
                        <ul class="pl-3">
                            <li class="text-justify">Pila</li>
                            <li class="text-justify">Organización secuencial</li>
                            <li class="text-justify">Organización directa o aleatoria</li>
                            <li class="text-justify">Organización indexada:</li>
                            <ul class="pl-3">
                                <li class="text-justify">Área de índices.</li>
                                <li class="text-justify">Área primaria o de datos.</li>
                                <li class="text-justify">Área de excedentes (overflow).</li>
                            </ul>
                            <li class="text-justify">Organización secuencial indexada</li>
                        </ul>
                    </div>
                </div>
                <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5133" role="button">Organización y estructura general de almacenamiento.</a>
                <div class="collapse" id="U5133">
                    <div class="card card-body text-info">
                    </div>
                </div>
                <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5134" role="button">Herramientas del sistema para gestión de dispositivos de almacenamiento.</a>
                <div class="collapse" id="U5134">
                    <div class="card card-body text-info">
                        <p class="text-justify">Un buen sistema de almacenamiento de la información y un correcto mantenimiento son fundamentales para preservar la integridad, privacidad y disponibilidad de la información. Por ello, en el momento en el que se debe elegir el sistema de almacenamiento y sus características hay que tener en cuenta una serie de factores:</p>
                        <ul class="pl-3">
                            <li class="text-justify">Rendimiento: rapidez con la que se obtiene la información en relación al tamaño de la misma.</li>
                            <li class="text-justify">Disponibilidad de la información: permanente o solo en ocasiones puntuales.</li>
                            <li class="text-justify">Privacidad de la información: quién va a acceder a la información y qué acciones se podrán realizar con la misma.</li>
                            <li class="text-justify">Capacidad: tamaño o cantidad de información que se va a almacenar.</li>
                            <li class="text-justify">Accesibilidad: cómo se va a acceder a la información.</li>
                        </ul>
                        <p class="text-justify"><strong>Herramientas de Windows para la gestión de dispositivos de almacenamiento</strong></p>
                        <p class="text-justify">Inicio -> Panel de control -> Herramientas administrativas -> Administración de equipos</p>
                        
                            <img src="../recursos/img/cursos/ifct0109/mf049034a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title="">
                        
                        <p class="text-justify">Herramientas de Linux para la gestión de dispositivos de almacenamiento
                            Una de las diferencias entre Windows y Linux es que en este último la estructura de archivos no se basa en los dispositivos.</p>
                        <p class="text-justify">Aplicaciones-> Sistema -> Administración -> Editor de particiones o a Aplicaciones-> Herramientas del sistema -> GParted.</p>
                        
                            <img src="../recursos/img/cursos/ifct0109/mf049034b.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="" title="">
                        
                    </div>
                </div>
            </div>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 4. UTILIZACIÓN DE MÉTRICAS E INDICADORES DE MONITORIZACIÓN DE RENDIMIENTO DE SISTEMAS
        <ul class="list-group">
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5141" role="button">Criterios para establecer el marco general de uso de métricas e indicadores para la monitorización de los sistemas de información.</a>
            <div class="collapse" id="U5141">
                <div class="card card-body text-info">
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Datos:</strong> representación de la información mediante algún formato que permita su comunicación, interpretación, almacenamiento y procesamiento automático.</li>
                        <li class="text-justify"><strong>Medición:</strong> proceso en el que se asignan números a atributos o entidades en el mundo real tal y como son definidos, de acuerdo con las reglas claramente definidas.</li>
                        <li class="text-justify"><strong>Medida:</strong> número o símbolo que proporciona una indicación cuantitativa de cantidad, dimensiones, capacidad, tamaño y extensión de algunos de los atributos de una entidad o proceso.</li>
                        <li class="text-justify"><strong>Métrica:</strong> unidad de medida utilizada como herramienta para entender la realidad y tomar decisiones al respecto. El IEEE (Institute of Electrical and Electronics Engineers) define el concepto métrica como una medida cuantitativa del grado en que un sistema, componente o proceso posee un atributo dado.</li>
                        <li class="text-justify"><strong>Indicador:</strong> procedimiento que permite cuantificar alguna dimensión conceptual y que cuando se aplica produce un número. En este caso, es un instrumento utilizado para la monitorización de los sistemas en sentido general.</li>
                        <li class="text-justify"><strong>Cuadro de mando:</strong> conjunto de indicadores utilizados para resumir el desempeño de un sistema.</li>
                        <li class="text-justify"><strong>Indicador clave de rendimiento (KPI):</strong> medida cuantificable o conjunto de datos utilizados para medir sus resultados con respecto a algún objetivo. Para algunos objetivos puede haber muchos indicadores; los KPI serán solo los dos o tres puntos de datos más impactantes (con mediciones más precisas), que indicarán si un negocio progresa adecuadamente hacia un objetivo o meta.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Medidas</strong></p>
                    <p class="text-justify">Los datos en sí no tienen importancia en la práctica. Para que tomen relevancia es necesario poder cuantificarlos e interpretarlos. Cuando los datos se analizan con algún criterio de evaluación, se obtiene una medida.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049042a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipos de medidas." title="Tipos de medidas.">
                    <p class="text-justify"><strong>Métricas</strong></p>
                    <p class="text-justify">Mientras que las medidas sirven de herramienta para comparar atributos, las métricas se utilizan para interpretar lo que ocurre y de referencia para que los responsables tomen decisiones lo más fundamentadas posible.</p>
                    <ul class="pl-3">
                        <li class="text-justify">La métrica debe dar los mismos resultados, independientemente de la aplicación que se utilice para medirla.</li>
                        <li class="text-justify">En el momento de realizar las mediciones, es necesario que se haya establecido cuándo hay que hacerlas y con qué frecuencia.</li>
                        <li class="text-justify">Para una métrica de calidad, hay que trabajar con equipos y profesionales capaces de establecer objetivos claros y definir las métricas que ayudarán a evaluarlos.</li>
                        <li class="text-justify">Cuanto más fáciles sean de obtener, mejor.</li>
                        <li class="text-justify">Las métricas deben estar bien detalladas para evitar problemas de interpretación.</li>
                        <li class="text-justify">Las métricas tienen que ser mecanismos eficaces para la realimentación de calidad.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Indicadores</strong></p>
                    <p class="text-justify">Los indicadores son útiles por varios motivos:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Precisan las variables que serán medidas y que constituirán la base del sistema de información.</li>
                        <li class="text-justify">Permiten acceder a la información de la realidad de un modo comprensible y fácil de interpretar.</li>
                        <li class="text-justify">Objetivan el grado de cumplimiento y de éxito en la implementación de las decisiones tomadas.</li>
                        <li class="text-justify">Proporcionan información que apoya el diseño, monitoreo y evaluación del sistema de información evaluado.</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049042b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Clasificación de indicadoeres." title="Clasificación de indicadoeres.">
                    <img src="../recursos/img/cursos/ifct0109/mf049042c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Clasificación de indicadoeres." title="Clasificación de indicadoeres.">
                    <p class="text-justify">Sean de cualquier tipo, los indicadores deben cumplir una serie de criterios para que estos sean de calidad:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Deben ser específicos: tienen que medir variables concretas y proporcionar información concreta y específica.</li>
                        <li class="text-justify">Deben ser específicos: tienen que medir variables concretas y proporcionar información concreta y específica.</li>
                        <li class="text-justify">Deben poder ser medidos y alcanzados.</li>
                        <li class="text-justify">Deben ser específicos: tienen que medir variables concretas y proporcionar información concreta y específica.</li>
                        <li class="text-justify">Tienen que ser realistas, es decir, mostrar una imagen fiel de la realidad de lo que se pretende medir.</li>
                        <li class="text-justify">Tienen que estar circunscritos a una determinada unidad de tiempo: del mismo modo que con las métricas, un indicador de calidad debe establecer cuándo hay que medirlo y cada cuánto hay que repetir la medición para obtener una información fiable y de utilidad.</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5142" role="button">Identificación de los objetos para los cuales es necesario obtener indicadores.</a>
            <div class="collapse" id="U5142">
                <div class="card card-body text-info">
                    <p class="text-justify">La finalidad fundamental de un indicador es que con él se puedan tomar decisiones con la información que proporciona.</p>
                    <p class="text-justify">Para construir un indicador hay que seguir una serie de pasos básicos:</p>
                    <ol class="pl-3">
                        <li class="text-justify">Establecer los objetivos y las metas referentes de la medición.</li>
                        <li class="text-justify">Establecer las áreas de desempeño relevantes que se van a medir.</li>
                        <li class="text-justify">Formular el indicador y establecer su fórmula de cálculo.</li>
                        <li class="text-justify">Validar los indicadores mediante criterios técnicos.</li>
                        <li class="text-justify">Recopilar los datos necesarios para ejecutar el indicador.</li>
                        <li class="text-justify">Establecer las metas o los valores deseados del indicador y la periodicidad de la medición.</li>
                        <li class="text-justify">Realizar observaciones de los resultados obtenidos y establecer supuestos con ellos.</li>
                        <li class="text-justify">Señalar la fuente de los datos obtenidos y los medios de verificación de los indicadores.</li>
                        <li class="text-justify">Evaluar los indicadores mediante el establecimiento de referentes comparativos y formular juicios.</li>
                        <li class="text-justify"> Comunicar los resultados del desempeño logrado medido con el indicador.</li>
                    </ol><br/>
                    <p class="text-justify">Las metas son logros cuantificables al final de un proceso, usando criterios de cantidad, calidad y tiempo. Están fundamentadas en la necesidad de explicar qué se quiere lograr de un modo más específico.</p>
                    <p class="text-justify">Para una correcta definición de las metas, hay que tener en cuenta una serie de aspectos:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Cuantificación: hay que definir en términos absolutos, de porcentaje o de forma nominal qué es lo que se quiere modificar.</li>
                        <li class="text-justify">Calidad: se debe definir el referente a utilizar para definir lo que se va a mejorar, según los objetivos marcados.</li>
                        <li class="text-justify">Temporalidad: es imprescindible definir el horizonte temporal en el que deben alcanzarse los resultados (metas).</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049043a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Definición de meta, mediante objetivos." title="Definición de meta, mediante objetivos.">
                    <p class="text-justify">Para que un indicador tenga sentido es indispensable que esté siempre asociado directamente a un objetivo. Si el objetivo no está bien definido, el indicador tampoco lo estará y ofrecerá informaciones erróneas.</p>
                    <p class="text-justify">Por todo ello, para que los indicadores sean fiables y de buena calidad, los objetivos deben estar bien definidos.</p>
                    <p class="text-justify">Por ejemplo:</p>
                    <p class="text-justify pl-3">Un objetivo de una organización puede ser bajar el número de incidentes de los equipos informáticos de una empresa.</p>
                    <p class="text-justify pl-3">Un indicador adecuado sería el porcentaje de incidentes ocurridos en los equipos en relación al año anterior.</p>
                    <p class="text-justify pl-3">En este caso, el objetivo y el indicador están bien relacionados: si el indicador muestra que el porcentaje de incidentes se reduce es que el objetivo marcado se está cumpliendo correctamente.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049043b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Características de un objetivo (SMART)." title="Características de un objetivo (SMART).">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5143" role="button">Aspectos a definir para la selección y definición de indicadores.</a>
            <div class="collapse" id="U5143">
                <div class="card card-body text-info">
                    <p class="text-justify">La definición de los objetivos que se pretenden conseguir es necesaria para un correcto establecimiento de los indicadores, pero no es suficiente. Para cada indicador también es necesario definir qué se va a medir, cómo se va a medir, quién lo medirá, cada cuánto y cuándo debe revisarse.</p>
                    <p class="text-justify">Una organización, por lo tanto, debe definir los indicadores dando respuesta a las preguntas siguientes:</p>
                    <ul class="pl-3">
                        <li class="text-justify">¿Qué se debe medir?
                        <li class="text-justify">¿Dónde es conveniente medir?
                        <li class="text-justify">¿Cuándo hay que medir? ¿Con qué frecuencia?
                        <li class="text-justify">¿Quién debe realizar la medición?
                        <li class="text-justify">¿Cómo se debe hacer la medición?
                        <li class="text-justify">¿Cómo se difundirán los resultados de la medición?
                        <li class="text-justify">¿Quién debe y con qué frecuencia hay que revisar el sistema de revisión?
                    </ul><br/>
                    <img src="../recursos/img/cursos/ifct0109/mf049044a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Componenentes del sistema de revisión." title="Componenentes del sistema de revisión.">
                    <img src="../recursos/img/cursos/ifct0109/mf049044b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Valores prestablecidos del sistema de revisión." title="Valores prestablecidos del sistema de revisión.">
                    <img src="../recursos/img/cursos/ifct0109/mf049044c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Elementos recomendados del sistema de revisión." title="Elementos recomendados del sistema de revisión.">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5144" role="button">Establecimiento de los umbrales de rendimiento de los sistemas de información.</a>
            <div class="collapse" id="U5144">
                <div class="card card-body text-info">
                    <p class="text-justify">Una vez definidos los indicadores y sus características fundamentales, hay que fijar los umbrales fijados a los mismos. Los encargados de fijar estos umbrales suelen ser los mismos que definieron el indicador porque el umbral dependerá de las especificaciones que este tenga.</p>
                    <p class="text-justify">Los umbrales son puntos de referencia respecto a los cuales se puede comparar una medición.</p>
                    <p class="text-justify">Tipos de umbrales</p>
                    <ul class="pl-3">
                        <li class="text-justify">Según el tipo de datos y su medida resumen:<br/><br/>
                            <ul class="pl-3">
                                <li class="text-justify"><strong>Porcentajes:</strong> son los más comunes, y miden proporciones de cumplimiento de algún proceso.
                                    <img src="../recursos/img/cursos/ifct0109/mf049045a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipo de umbrales: porcentajes." title="Tipo de umbrales: porcentajes.">
                                </li>
                                <li class="text-justify"><strong>Tasas:</strong> muestran la frecuencia de un evento ocurrido en el sistema de información o proceso.
                                    <img src="../recursos/img/cursos/ifct0109/mf049045b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipos de umbrales: tasas de frecuencia." title="Tipos de umbrales: tasas de frecuencia.">
                                </li>
                            </ul>
                        </li>
                        <li class="text-justify">Según la forma de definir el valor umbral:
                            <ul class="pl-3">
                                <li class="text-justify"><strong>Valores puntuales:</strong> cuando se define un punto de corte en términos absolutos. Un ejemplo de definición de puntos de corte según el grado de cumplimiento del objetivo marcado sería:</li>
                                <li class="text-justify"><strong>Tendencias:</strong> cuando no se establecen puntos de corte, sino que se evalúa si el resultado del indicador sigue una determinada trayectoria de aumento o disminución mediante porcentajes que deben cumplirse en un plazo determinado</li>
                            </ul><br/>
                        </li>
                        <li class="text-justify">Según las categorías de cumplimiento definidas:
                            <ul class="pl-3">
                                <li class="text-justify"><strong>Valores óptimos:</strong> aquellos valores del indicador deseados por la organización. Son una meta que se espera lograr cuando los procesos y los sistemas de información evaluados alcanzan su madurez.</li>
                                <li class="text-justify"><strong>Valores aceptables:</strong> valores no ideales pero que reflejan un grado de cumplimiento adecuado según el comportamiento normal del sistema o proceso. Son valores inferiores a los óptimos, lo que deben venir seguidos de acciones de mejora para llegar a los óptimos.</li>
                                <li class="text-justify"><strong>Valores críticos o insuficientes:</strong> valores insuficientes de cumplimiento de objetivos. Son signos de necesidad de establecimiento urgente de medidas correctoras y oportunas.</li>
                            </ul><br/>
                    </ul>
                    <p class="text-justify">Algunos de los criterios que se recomienda tener en cuenta para establecer un buen umbral son los siguientes:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Basados en las evidencias y en los datos: siempre que sea posible, los umbrales deben estar apoyados en situaciones y resultados similares ocurridos en ocasiones anteriores.</li>
                        <li class="text-justify">Orientados a la mejor práctica: los umbrales deben reflejar el desempeño óptimo hacia el cual la organización debe aspirar.</li>
                        <li class="text-justify">Flexibles y dinámicos: los umbrales deben poder revisarse periódicamente y amoldarse a la evolución de los niveles de desempeño de la organización.</li>
                        <li class="text-justify">Claramente definidos, medibles y alcanzables: los umbrales no pueden ser ambiguos, sino que deben estar definidos con claridad y con valores medibles y alcanzables de manera objetiva. No merece la pena establecer umbrales imposibles de alcanzar.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Límites de umbral</strong></p>
                    <p class="text-justify">En el momento de la definición de los indicadores hay que indicar los límites mínimo y máximo permitidos para que cuando se sobrepasen se active un evento de umbral. Cuando los datos de rendimiento se salen de los límites concretados, el sistema envía un mensaje de alerta y activa una serie de medidas (si se han definido anteriormente) para volver a una situación estable.</p>
                    <p class="text-justify"><strong>Evento de umbral</strong></p>
                    <p class="text-justify">Es el momento en el que se dispara una alarma o se activa una acción automática en el sistema cuando se sobrepasan los límites de un umbral.</p>
                    <p class="text-justify"><strong>Línea base de rendimiento del sistema de información</strong></p>
                    <p class="text-justify">El conjunto de límites de umbral establecidos para un sistema es llamado línea base de rendimiento del sistema.</p>
                    <p class="text-justify">Para determinarla, hay que realizar una serie de escenarios prueba que permitan identificar las distintas configuraciones de un sistema, que aseguren un nivel de rendimiento adecuado ante las distintas circunstancias que pueden suceder. A partir de estas pruebas se obtienen los distintos límites de umbral y se define la línea base de rendimiento.</p>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5145" role="button">Recolección y análisis de los datos aportados por los indicadores.</a>
            <div class="collapse" id="U5145">
                <div class="card card-body text-info">
                    <p class="text-justify">Para que este sea válido, hay una serie de criterios que deben cumplirse:</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Pertinencia:</strong> debe referirse específicamente a los procesos esenciales.</li>
                        <li class="text-justify"><strong>Relevancia:</strong> debe proporcionar datos relevantes para la consecución de los objetivos buscados.</li>
                        <li class="text-justify"><strong>Homogeneidad:</strong> el indicador tiene que utilizar un sistema de unidades que use la misma unidad de medida en cada momento de la medición.</li>
                        <li class="text-justify"><strong>Independencia:</strong> el indicador no puede estar condicionado por factores externos, tiene que ser completamente independiente.</li>
                        <li class="text-justify"><strong>Coste:</strong> el coste del indicador debe compensar el valor de la información que facilita este.</li>
                        <li class="text-justify"><strong>Simplicidad y comprensibilidad:</strong> debe ser simple y comprensible para que los destinatarios puedan entender e interpretar los resultados fácilmente.</li>
                        <li class="text-justify"><strong>No redundancia:</strong> el indicador no debe dar información ya facilitada por otros indicadores. Cada indicador debe proporcionar información única.</li>
                        <li class="text-justify"><strong>Focalizado en áreas controlables:</strong> focalizar un indicador en áreas incontrolables no tiene sentido, ya que cuando se obtienen resultados negativos no se pueden establecer medidas de mejora, porque el comportamiento del elemento medido es impredecible. El indicador debe medir comportamientos de elementos controlables para que las acciones que se realicen realmente sean eficaces y supongan mejoras en el rendimiento.</li>
                        <li class="text-justify"><strong>Participación:</strong> el indicador debe involucrar a todos los intervinientes relevantes.</li>
                    </ul><br/>
                    <p class="text-justify">Para llevar a cabo el análisis de los resultados se recomienda realizar una serie de acciones:</p>
                    <ol class="pl-3">
                        <li class="text-justify">Comparar el valor del indicador al final del periodo y la meta establecida.</li>
                        <li class="text-justify">Establecer las desviaciones acontecidas en los valores del indicador: los no cumplimientos y los sobrecumplimientos.</li>
                        <li class="text-justify">Analizar las causas de los resultados.</li>
                        <li class="text-justify">Proponer recomendaciones para corregir las desviaciones.</li>
                        <li class="text-justify">Establecer compromisos para implementar las recomendaciones formuladas.</li>
                        <li class="text-justify">Definir nuevos plazos de cumplimiento de los compromisos.</li>
                        <li class="text-justify">Definir responsables del cumplimiento de estos compromisos.</li>
                        <li class="text-justify">Establecer un programa de seguimiento de compromisos en el que se compruebe la correcta ejecución de las acciones anteriores.</li>
                    </ol><br/>
                    <p class="text-justify">Asimismo, con un correcto análisis de resultados y de las desviaciones se ofrece una valiosa información para que los responsables tomen decisiones coherentes como:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Revisar las metas que se definieron anteriormente, comprobando si estas fueron o no realistas.</li>
                        <li class="text-justify">Priorizar la asignación de recursos hacia determinados procesos o actividades.</li>
                        <li class="text-justify">Realizar una reorganización de recursos hacia aquellos procesos que ofrezcan un mayor rendimiento.</li>
                        <li class="text-justify">Justificar la asignación de más recursos hacia unos u otros procesos.</li>
                        <li class="text-justify">Justificar el abandono de unos procesos o bien justificar el fortalecimiento de otros al comprobar que realmente se consigue batir los objetivos y unos notables resultados positivos.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Herramientas de monitorización de rendimiento de sistemas.</strong></p>
                    <img src="../recursos/img/cursos/ifct0109/mf049046a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Monitor de rendimiento." title="Monitor de rendimiento.">
                    <img src="../recursos/img/cursos/ifct0109/mf049046b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Monitor de recursos." title="Monitor de recursos.">
                    <img src="../recursos/img/cursos/ifct0109/mf049046c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Monitor del sistema." title="Monitor del sistema.">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5146" role="button">Consolidación de indicadores bajo un cuadro de mandos de rendimiento de sistemas de información unificado.</a>
            <div class="collapse" id="U5146">
                <div class="card card-body text-info">
                    <p class="text-justify">Un cuadro de mando es una de las herramientas de gestión más valiosas e importantes para los directivos en el momento de realizar la evaluación de los sistemas de información y la toma de decisiones.</p>
                    <p class="text-justify">Esta herramienta refleja de un modo global y unificado la información facilitada por los indicadores de una organización y se utiliza para ver cuáles de ellos no cumplen con los límites fijados y cuáles pueden llegar a superar los límites elegidos. Agrupa gráficamente los indicadores clave de una organización o de algún departamento para que los responsables puedan tomar decisiones más fácil y rápidamente.</p>
                    <p class="text-justify">Elaboración e implantación de un cuadro de mando</p>
                    <p class="text-justify">Para elaborar un cuadro de mando se procede de un modo muy similar que con los indicadores, debiendo contener como mínimo los siguientes conceptos:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Datos: se definen los indicadores que se incluyen en el cuadro de mando. Deben ser relevantes, útiles y fáciles de entender y visualizar.</li>
                        <li class="text-justify">Propósito y responsables: también hay que fijar desde un principio quién va a utilizar el cuadro de mando y para qué lo va a utilizar.</li>
                        <li class="text-justify">Periodicidad: hay que marcar cada cuánto tiempo se debe actualizar el cuadro de mando. La periodicidad, del mismo modo que los indicadores, puede ser mensual, trimestral, semestral, etc.</li>
                        <li class="text-justify">Formato: el formato del cuadro de mando es recomendable que sea digital para que su actualización y acceso sea rápido y sencillo. Por ejemplo, se pueden utilizar hojas de cálculo o archivos en formato PDF.</li>
                        <li class="text-justify">Hay que señalar toda la información que sea totalmente necesaria de un modo resumido, entendible, sencillo, eficaz y sin complicaciones para facilitar la toma de decisiones.</li>
                        <li class="text-justify">Se puede representar la información de un modo resumido mediante un juego de colores que sirva para indicar los cambios de estado de los indicadores: rojo, amarillo y verde. Por ejemplo:
                            <img src="../recursos/img/cursos/ifct0109/mf049047a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Representación mediante colores de los cambios de estado de los indicadores." title="Representación mediante colores de los cambios de estado de los indicadores.">
                        </li>
                        <li class="text-justify">Es recomendable situar los indicadores junto con sus objetivos, para que sea fácilmente localizable y comprensible lo que se está midiendo.</li>
                        <li class="text-justify">Debe facilitar la comparación de los resultados entre las distintas áreas de la organización.</li>
                        <li class="text-justify">Hay que remarcar lo importante para la organización, señalando los indicadores que no obtienen los resultados previstos ni evolucionan según lo planificado.</li>
                        <li class="text-justify">Para su diseño, es imprescindible tener el apoyo de la dirección y obtener el mayor consenso posible entre los distintos participantes del diseño.</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049047b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tabla de indicadores de la organización." title="Tabla de indicadores de la organización.">
                </div>
            </div>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 5. CONFECCIÓN DEL PROCESO DE MONITORIZACIÓN DE SISTEMAS Y COMUNICACIONES.
        <ul class="list-group">
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5151" role="button">Identificación de los dispositivos de comunicaciones.</a>
            <div class="collapse" id="U5151">
                <div class="card card-body text-info">
                    <p class="text-justify">Los dispositivos de comunicación son los distintos periféricos y medios que son necesarios para lograr que los elementos de una red se comuniquen entre ellos y puedan intercambiar información. Se define el término "red" como un conjunto de dispositivos físicos (hardware) y de programas (software) mediante el cual se comunican varios ordenadores para compartir información. Cada uno de los ordenadores conectados a la red se denomina “nodo”</p>
                    <p class="text-justify">Los dispositivos de red se clasifican en tres grupos: equipos de red, medios de comunicación y conectores.</p>
                    <p class="text-justify"><strong>Equipos de red</strong></p>
                    <p class="text-justify">Los equipos de red son aquellos componentes que emitirán y recibirán la información. Hay equipos de red de varios tipos:</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Servidores:</strong> nodos cuya función principal es facilitar información como respuesta a solicitudes externas de otros nodos, llamados “clientes”.</li>
                        <li class="text-justify"><strong>Ordenadores:</strong> componentes que emiten o reciben los datos transmitidos. Son los elementos de origen o de finalización de la transmisión (dependiendo de si emiten o reciben los datos). En la red, cualquier ordenador puede enviar datos o ser receptor de información.</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049052a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="MOdelo cliente-servidor." title="MOdelo cliente-servidor.">
                    <p class="text-justify"><strong>Medios de comunicación</strong></p>
                    <p class="text-justify">Los medios de comunicación son los dispositivos de la red a través de los cuales se produce el proceso de comunicación de datos: según el medio de comunicación elegido, el proceso de transmisión de los datos se producirá de un modo u otro. Se distinguen varios medios de comunicación:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Módems</li>
                        <li class="text-justify">Tarjetas de interfaz de red (NIC, Network Interface Card)</li>
                        <li class="text-justify">Concentradores o hubs</li>
                        <li class="text-justify">Repetidores o repeaters</li>
                        <li class="text-justify">Conmutadores o switches</li>
                        <li class="text-justify">Enrutadores o routers</li>
                        <li class="text-justify">Pasarelas, puertas de enlace o gateways</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Conectores</strong></p>
                    <p class="text-justify">Los conectores son el conjunto de componentes que conectan los equipos de red y los medios de comunicación. Son los componentes a través de los que "viaja" la información. Hay varios tipos de componentes distintos:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Sistema de cableado</li>
                        <li class="text-justify">Cableado de fibra óptica</li>
                        <li class="text-justify">Enlaces inalámbricos</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5152" role="button">Análisis de los protocolos y servicios de comunicaciones.</a>
            <div class="collapse" id="U5152">
                <div class="card card-body text-info">
                    <p class="text-justify ">Al conjunto de normas y reglas establecidas que permite la comunicación entre varias entidades se le denomina protocolo. El protocolo define la forma en la que la información circula en una red de ordenadores</p>
                    <ul class="pl-3">
                        <li class="text-justify">Detección de la conexión física sobre la que se realiza la conexión, que puede ser cableada o inalámbrica.</li>
                        <li class="text-justify">Definición de los pasos necesarios para comenzar a comunicarse (también llamado handshaking).</li>
                        <li class="text-justify">Negociación de las características de la conexión.</li>
                        <li class="text-justify">Cómo iniciar y cómo terminar un mensaje.</li>
                        <li class="text-justify">Determinación del procedimiento de formateo de los mensajes.</li>
                        <li class="text-justify">Definición del sistema de corrección de errores que se va a utilizar: qué se va a hacer con los mensajes erróneos o corruptos.</li>
                        <li class="text-justify">Cómo detectar la pérdida inesperada de la conexión y qué hacer en cada caso.</li>
                        <li class="text-justify">Determinación de la terminación de la sesión/conexión.</li>
                        <li class="text-justify">Definición de las estrategias que garantizarán la seguridad de la comunicación con técnicas como autenticación o cifrado, entre otras.</li>
                        <li class="text-justify">Cómo se construye una red física.</li>
                        <li class="text-justify">Cómo los distintos ordenadores se conectan a la red.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Modelo OSI</strong></p>
                    <p class="text-justify">El modelo OSI es un marco de referencia para la definición de arquitecturas en la interconexión de los sistemas de comunicaciones.</p>
                    <p class="text-justify">Hay una serie de principios que fueron los que formularon la creación del modelo:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Cada capa se refiere a un nivel de abstracción distinto.</li>
                        <li class="text-justify">Cada capa tiene que realizar una función definida con claridad.</li>
                        <li class="text-justify">La función de cada capa se debe definir tomando en consideración que se está creando a definición de protocolos estandarizados.</li>
                        <li class="text-justify">El número de capas tiene que ser lo suficientemente pequeño para que la arquitectura no sea difícil de gestionar, pero también lo suficientemente grande para que cada función distinta de la arquitectura se realice en una capa.</li>
                        <li class="text-justify">Los límites de cada capa deben facilitar el flujo de la información mediante la utilización de las interfaces.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Capas modelo OSI</strong></p>
                    <img src="../recursos/img/cursos/ifct0109/mf049053a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Modelo OSI." title="Modelo OSI.">
                    <ul class="pl-3">
                        <li class="text-justify">Capa 1. Física
                            <p class="text-justify">La capa física es la encargada de la topología de la red y de las conexiones físicas del equipo con la red.</p>
                        </li>
                        <li class="text-justify">Capa 2. Enlace de datos
                            <p class="text-justify">La capa de enlace de datos es una de las más importantes, ya que en ella se regula la forma de la conexión que habrá entre los equipos.</p>
                        </li>
                        <li class="text-justify">Capa 3. Red
                            <p class="text-justify">Esta capa es la responsable de identificar el enrutamiento entre una o varias redes y del envío de paquetes de información entre redes.</p>
                        </li>
                        <li class="text-justify">Capa 4. Transporte
                            <p class="text-justify">La función principal de la capa de transporte es la de trasladar los datos, asegurando que estos llegan correctamente del origen al destino, independientemente del tipo de red física que se utilice.</p>
                        </li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049053b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="MOdelo OSI." title="MOdelo OSI.">
                    <p class="text-justify"><strong>La arquitectura TCP/IP y su comparación con el modelo OSI</strong></p>
                    <p class="text-justify">Mientras que el modelo OSI tiene siete capas, el modelo TCP/IP tiene solo cuatro y están jerarquizadas:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Capa 1 o capa de acceso al medio: define las rutinas para acceder al medio físico. Se corresponde con las capas 1 y 2 del modelo OSI.</li>
                        <li class="text-justify">Capa 2 o capa de Internet: define el datagrama y gestiona el enrutamiento de la información. Es similar a la capa 3 del modelo OSI.</li>
                        <li class="text-justify">Capa 3 o capa de transporte: se ocupa de los servicios de entrega de los datos entre los nodos que forman parte de la red. Es similar a la capa 4 del modelo OSI.</li>
                        <li class="text-justify">Capa 4 o capa de aplicación: capa en la que se definen y gestionan las aplicaciones y los procesos que están utilizando la red. Maneja aspectos de representación, control, codificación y control de diálogo. Es asimilable a las capas S, 6 y 7 del modelo OSI.</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049053c.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Correspondencia de capas entre modelos TCP/IP y OSI." title="Correspondencia de capas entre modelos TCP/IP y OSI.">
                    <p class="text-justify"><strong>Diferencias entre OSI y TCP/IP:</strong></p>
                    <ul class="pl-3">
                        <li class="text-justify">El modelo OSI se fundamenta en los conceptos de Servicios, Interfaces y Protocolos, mientras que en el TCP/IP estos se obvian.</li>
                        <li class="text-justify">En OSI se ocultan mejor los protocolos y tienen más independencia.</li>
                        <li class="text-justify">El modelo OSI fue desarrollado teóricamente antes de la implementación de los protocolos. Sin embargo, la arquitectura TCP/IP fue posterior y el modelo no es más que la descripción de los protocolos.</li>
                        <li class="text-justify">La cantidad de capas es diferente en cada modelo: OSI tiene 7 y TCP/IP tiene 4. Por ello, el modelo TCP/IP parece ser más simple al tener menos capas.</li>
                    </ul><br/>
                    <p class="text-justify">No hay que confundir la arquitectura de red TCP/IP con el protocolo TCP/IP. La arquitectura TCP/IP está formada por una gran variedad de protocolos, entre ellos el TCP/IP (uno de los más utilizados, pero no el único).</p>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5153" role="button">Principales parámetros de configuración y funcionamiento de los equipos de comunicaciones.</a>
            <div class="collapse" id="U5153">
                <div class="card card-body text-info">
                    <p class="text-justify">Cada capa del modelo TCP/IP incorpora servicios de:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Control de errores.</li>
                        <li class="text-justify">Control del flujo de datos.</li>
                        <li class="text-justify">Fragmentación (divide los ficheros y posteriormente los une de nuevo).</li>
                        <li class="text-justify">Gestión del establecimiento de la conexión.</li>
                        <li class="text-justify">Direccionamiento: cada componente de una red se diferencia de los demás por una dirección IP.</li>
                        <li class="text-justify">Multiplexación: que permite que varias sesiones de nivel superior puedan compartir una sola conexión de un nivel inferior.</li>
                        <li class="text-justify">Nomenclatura.</li>
                    </ul><br/>
                    <p class="text-justify">Una red TCP/IP transfiere los datos mediante el ensamblaje de bloques de datos en paquetes.</p>
                    <p class="text-justify">Cuando se envía un archivo, su contenido se fragmenta mediante una serie de paquetes distintos, que contienen información de control (como la dirección de destino) y los datos que se envían.</p>
                    <p class="text-justify">El TCP es un protocolo de la capa de transporte que se encarga de asegurar que se recibe exactamente lo que se ha enviado y que el envío se ha realizado correctamente, de modo que los paquetes se reciban en el mismo orden en el que fueron enviados.</p>
                    <p class="text-justify">En cambio, el IP no es más que el protocolo de la capa de red que permite que las aplicaciones se ejecuten sobre redes interconectadas, sin necesidad de conocer qué hardware se utiliza.</p>
                    <p class="text-justify"><strong>Dirección IPv4</strong></p>
                    <img src="../recursos/img/cursos/ifct0109/mf049054a.png" class="img-responsive d-block mx-auto p-3 w-75 mb-3" alt="Dirección IPV4." title="Dirección IPV4.">
                    <p class="text-justify">Se divide en dos partes:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Una correspondiente al identificador de la red donde se encuentra el equipo.</li>
                        <li class="text-justify">Otra correspondiente al identificador del equipo en la red (host).</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049054b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Clases de red IPV4." title="Clases de red IPV4.">
                    <p class="text-justify">La máscara de subred es aquella que permite distinguir los bits que identifican la red y los que identifican el host de una dirección IP.</p>
                    <ul class="pl-3">
                        <li class="text-justify">Dirección broadcast: dirección que sirve para enviar un paquete a todos los hosts de una red. Esta dirección tiene los bits correspondientes a host iguales a 255.</li>
                        <li class="text-justify">Dirección IP de la puerta de enlace: es la dirección del router de la red. Puede tomar cualquiera de las direcciones de un rango.</li>
                        <li class="text-justify">Dirección de red: dirección que tiene los bits de host iguales a cero. Sirve para definir la red en la que se ubica.</li>
                        <li class="text-justify">Dirección de bucle local o loopback: son direcciones " 127.x.x.x" que se reservan para designar la propia máquina. Se suelen utilizar para comprobar las propias interfaces de red.
                        </li>
                    </ul><br/>
                    <p class="text-justify"><strong>Configuración de una red IPv4</strong></p>
                    <ol class="pl-3">
                        <li class="text-justify">Instalación de los drivers de los distintos componentes de la red para que el equipo los localice.
                        <li class="text-justify">Seleccionar el protocolo a utilizar en función de la red utilizada. Lo más habitual es que sea TCP/IP.
                        <li class="text-justify">Definir los distintos parámetros del protocolo, que serán:
                            <ul class="pl-3">
                                <li class="text-justify">Dirección de red IP.
                                <li class="text-justify">Máscara de red.
                                <li class="text-justify">Dirección de la puerta de enlace.
                                <li class="text-justify">Dirección de broadcast.
                                <li class="text-justify">Rango de direcciones IP que se podrán usar para el host.
                            </ul>
                        <li class="text-justify">Establecer cuáles serán los recursos compartidos de la red: carpetas, impresoras y equipos.</li>
                        <li class="text-justify">Establecer servicios de red (web, FTP, etc.)</li>
                        <li class="text-justify">Definir los aspectos de seguridad de la red (acceso restringido a recursos, control de accesos, etc.)</li>
                    </ol><br/>
                    <p class="text-justify"><strong>Dirección IPv6</strong></p>
                    <p class="text-justify">La función de la dirección IPv6 es la misma que la de su predecesora, la IPv4. La diferencia fundamental es que esta está formada por 128 bits agrupados de 16 en 16, separados por ":”</p>
                    <p class="text-justify">Del mismo modo que las direcciones IPv4, en las IPv6 también hay bits que identifican la red (en este caso los 64 primeros) y bits que identifican al host (los siguientes).</p>
                    <p class="text-justify"><strong>Fases de la administración del rendimiento de la red</strong></p>
                    <p class="text-justify">La administración del rendimiento de la red se divide en dos fases: monitorización y análisis de resultados.</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Monitorización</strong>
                            <p class="text-justify">La monitorización consiste en recolectar toda la información del comportamiento de la red.</p>
                            <ul class="pl-3">
                                <li class="text-justify">Utilización de enlaces</li>
                                <li class="text-justify">Caracterización de tráfico:</li>
                                <li class="text-justify">Porcentaje de transmisión y recepción de información</li>
                                <li class="text-justify">Utilización de procesamiento</li>
                            </ul>
                        </li><br/>
                        <li class="text-justify"><strong>Análisis</strong>
                            <p class="text-justify">Cuando ya se ha recolectado la información, hay que interpretarla para analizar el comportamiento de la red y poder definir patrones determinados. Con un análisis adecuado, ya se puede hacer una toma de decisiones correcta y pertinente que ayude a mejorar el rendimiento de la red.</p>
                        </li>
                        <p class="text-justify">Con el proceso de análisis se pueden detectar comportamientos de la red tales como:</p>
                        <ul class="pl-3">
                            <li class="text-justify">Tráfico inusual</li>
                            <li class="text-justify">Elementos principales de la red.</li>
                            <li class="text-justify">Utilización elevada</li>
                            <li class="text-justify">Control de tráfico</li>
                            <li class="text-justify">Calidad del servicio</li>
                        </ul>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5154" role="button">Procesos de monitorización y respuesta.</a>
            <div class="collapse" id="U5154">
                <div class="card card-body text-info">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5155" role="button">Herramientas de monitorización de uso de puertos y servicios tipo Sniffer</a>
            <div class="collapse" id="U5155">
                <div class="card card-body text-info">
                    <p class="text-justify">Un sniffer es un programa cuya función es capturar todos los datos que circulan a través del medio físico, los dispositivos y los equipos que forman parte de una red.</p>
                    <p class="text-justify">Lo que hace el sniffer es poner la tarjeta de red en modo promiscuo, un modo en el que no hay filtrado de datos de entrada, ya que hace que la tarjeta capture todos los paquetes aunque no vayan dirigidos a ella.</p>
                    <p class="text-justify">Los sniffers ofrecen una serie de funcionalidades de gran utilidad:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Análisis de fallos, que sirve para encontrar problemas en la red.</li>
                        <li class="text-justify">Medición del tráfico de datos, permitiendo la detección de los cuellos de botella.</li>
                        <li class="text-justify">Captura de nombres de usuarios en la red y de contraseñas enviadas sin cifrar.</li>
                        <li class="text-justify">En las aplicaciones cliente-servidor, los sniffers permiten analizar la información real que se transmite por la red.</li>
                    </ul><br/>
                    <p class="text-justify">Algunas aplicaciones tipo sniffer más habituales son las siguientes</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Kismet:</strong> sniffer que contiene un sistema de detección de intrusiones para redes inalámbricas 802.1 1.</li>
                        <li class="text-justify"><strong>Wireshark:</strong> es un analizador de protocolos que se utiliza para realizar análisis y soluciona problemas en redes de comunicaciones para desarrollo de software y protocolos.</li>
                        <li class="text-justify"><strong>Ettercap:</strong> esta herramienta es un interceptor/sniffer/registrador para redes de área local con switch.</li>
                        <li class="text-justify"><strong>TcpDump:</strong> herramienta en línea de comandos que analiza el tráfico que circula por la red y que ofrece al usuario la posibilidad de capturar y mostrar a tiempo real los paquetes transmitidos y recibidos en la red a la que está conectado el ordenador.</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5156" role="button">Herramientas de monitorización de sistemas y servicios tipo Hobbit, Nagios o Cacti</a>
            <div class="collapse" id="U5156">
                <div class="card card-body text-info">
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Hobbit Monitor:</strong> es un sistema de monitorización bajo licencia libre mediante el cual se puede monitorizar cualquier cosa, desde redes pequeñas hasta sistemas de grandes magnitudes.
                            <p class="text-justify">Actualmente es llamada Hobbit-Xymon.</p>
                        </li>
                        <li class="text-justify"><strong>Nagios:</strong> es una herramienta un poco más complicada que Hobbit, ya que requiere más tiempo para configurarla correctamente. Como ventaja destaca su mayor potencia respecto a la otra herramienta.</li><br/>
                        <li class="text-justify"><strong>Cacti:</strong> es una herramienta de código abierto que permite monitorizar y visualizar gráficas y estadísticas de dispositivos conectados a una red que tengan habilitado el protocolo SNMP.</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5157" role="button">Sistemas de gestión de información y eventos de seguridad (SIM/SEM).</a>
            <div class="collapse" id="U5157">
                <div class="card card-body text-info">
                    <p class="text-justify"><strong>Sistemas de gestión de la seguridad de la información, SIM</strong></p>
                    <p class="text-justify">Los sistemas de gestión de la seguridad de la información, SIM (Security Information Management), son procedimientos de supervisión que se encargan de recolectar, correlacionar y analizar la información de seguridad en diferido, mediante la creación de un repositorio indexado con datos obtenidos de los dispositivos supervisados.</p>
                    <p class="text-justify"><strong>Sistemas de gestión de eventos, SEM</strong></p>
                    <p class="text-justify">Los sistemas de gestión de eventos o SEM (Security Event Management) facilitan la monitorización y gestión de los eventos casi en tiempo real. Su funcionamiento consiste en recolectar información de los registros de seguridad de los sistemas, equipos y dispositivos que forman parte de la red para recopilarla y realizar análisis a tiempo real.</p>
                    <p class="text-justify"><strong>Sistemas de gestión de información y eventos de seguridad, SIEM</strong></p>
                    <p class="text-justify">Los sistemas de gestión de información y eventos de seguridad o SIEM (Security Information and Event Management) engloban funcionalidades de SIM y SEM: recogen o reciben los registros de actividad (logs) de todos los dispositivos monitorizados, los almacenan a largo plazo y, además, agregan y correlacionan en tiempo real la información recibida para una detección y actuación sobre los eventos más eficaz, mediante alertas, respuesta automática, etc.</p>
                    <ul class="pl-3">
                        <p class="text-justify">Tivoli Security Information and Event Manager</p>
                        <p class="text-justify">OSSIM, Open Source Security Information Management</p>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5158" role="button">Gestión de registros de elementos de red y filtrado (router, switch, firewall, IDS/IPS, etc.).</a>
            <div class="collapse" id="U5158">
                <div class="card card-body text-info">
                    <p class="text-justify">La gestión de redes consiste en una serie de actividades que controlan, planifican, coordinan, asignan y monitorizan los recursos de una red para conseguir los requerimientos a tiempo real, con una calidad de servicio y un coste razonables.</p>
                    <p class="text-justify">Mediante los SNMP se pueden consultar routers y switches para obtener información como:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Los octetos entrantes y salientes mediante el cálculo del tráfico de datos por segundo</li>
                        <li class="text-justify">El nivel de carga de la CPU.</li>
                        <li class="text-justify">La memoria utilizada y la memoria disponible.</li>
                        <li class="text-justify">El tiempo de cada operación.</li>
                        <li class="text-justify">El estado de las sesiones BGP (el BGP es el protocolo de encaminamiento más utilizado en Internet).</li>
                        <li class="text-justify">Tablas ARP (tablas que establecen enlaces entre las capas de protocolo y las capas de enlace).</li>
                        <li class="text-justify">Tablas de reenvío de eventos.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Gestión de filtrado de red</strong></p>
                    <p class="text-justify">El firewall o cortafuegos es un mecanismo de control de accesos formado por componentes hardware y software cuya función principal es separar la red interna de los equipos externos mediante el control del tráfico (denegando intentos de conexión no autorizados).</p>
                    <p class="text-justify"><strong>Sistemas de protección de ataques IPS/IDS</strong></p>
                    <p class="text-justify">La tecnología IPS/IDS es un componente clave del sistema de detección de ataques y vulnerabilidades que, junto con otros controles, protegen las redes en términos de seguridad</p>
                </div>
            </div>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 6. SELECCIÓN DEL SISTEMA DE REGISTRO DE EN FUNCIÓN DE LOS REQUERIMIENTOS DE LA ORGANIZACIÓN
        <ul class="list-group">
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5161" role="button">Determinación del nivel de registros necesarios, los periodos de retención y las necesidades de almacenamiento.</a>
            <div class="collapse" id="U5161">
                <div class="card card-body text-info">
                    <p class="text-justify">Para un correcto control de los registros hay que tener en cuenta una serie de parámetros:</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Identificación de los registros</strong>: los registros deben poder identificarse con facilidad. Esta identificación hay que realizarla en dos niveles: en el primero se identifican los registros según el formato utilizado para su cumplimentación y en el segundo ya se diferencian por un campo identificador presente en el propio formato. Ejemplos de campos identificadores podrían ser el número de registro, la fecha de cumplimentación, etc.</li>
                        <li class="text-justify"><strong>Almacenamiento:</strong> para un control correcto es fundamental establecer dónde se van almacenar los archivos de los registros para que sean de fácil localización en el momento de necesitarlos.</li>
                        <li class="text-justify"><strong>Protección:</strong> hay que determinar una serie de controles y medidas de seguridad para evitar cambios indeseados en la información y el acceso de personas no autorizadas.<br/>
                            Ejemplos de medidas podrían ser el establecimiento de contraseñas de acceso o la realización de copias de seguridad.
                        </li>
                        <li class="text-justify"><strong>Recuperación:</strong> debido al alto volumen de registros almacenados, hay que establecer una metodología que permita encontrar y acceder a los datos históricos con facilidad.</li>
                        <li class="text-justify"><strong>Retención:</strong> según el tipo de registro que se esté tratando, estos requieren ser conservados un determinado intervalo de tiempo u otro. Si se toman en consideración las recomendaciones de la norma ISO 9001:2000, se recomienda que los registros se conserven durante tres años.</li>
                        <li class="text-justify"><strong>Disposición de los registros:</strong> hay que establecer qué se va a hacer con los registros una vez terminado el período de retención, cómo va a ser el procedimiento para eliminarlos o dónde se van a almacenar o a archivar en caso de decidir conservarlos de modo indefinido.</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049062b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Listado de registros." title="Listado de registros.">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5162" role="button">Análisis de los requerimientos legales en referencia al registro.</a>
            <div class="collapse" id="U5162">
                <div class="card card-body text-info">
                    <p class="text-justify">Los requerimientos legales son aquellos que indican las condiciones necesarias específicas que debe reunir una actividad, proceso o servicio determinado para cumplir con los postulados que se establecen en los textos legales. En el caso de los registros, los requerimientos legales se referirán a los modos de obtención, tratamiento, sistemas de almacenamiento y medidas de seguridad de los registros.</p>
                    <p class="text-justify">Una de las legislaciones que hace mayor énfasis en la temática de los registros es la Ley Orgánica 15/ 1999, de 13 de diciembre, de Protección de Datos de Carácter Personal (LOPD).</p>
                    <ul class="pl-3">
                        <li class="text-justify">Obligaciones del responsable del fichero</li>
                        <li class="text-justify">Contenidos mínimos que deben tener los ficheros</li>
                        <li class="text-justify">Informar a los titulares de los datos personales</li>
                        <li class="text-justify">Establecer un control, actualización e inventariado de dispositivos</li>
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049063a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Obligaciones del responsable del fichero." title="Obligaciones del responsable del fichero.">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5163" role="button">Selección de medidas de salvaguarda para cubrir los requerimientos de seguridad del sistema de registros.</a>
            <div class="collapse" id="U5163">
                <div class="card card-body text-info">
                    <p class="text-justify">Como ya se ha mencionado anteriormente, antes de implementar los sistemas de información es fundamental identificar y acordar los requerimientos de seguridad que se van a incorporar a estos sistemas de información y de registros.</p>
                    <p class="text-justify">Los controles de salvaguarda de los sistemas de registros se pueden dividir en tres partes diferenciadas:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Medidas de seguridad administrativa.</li>
                        <li class="text-justify">Medidas de seguridad física.</li>
                        <li class="text-justify">Medidas de seguridad técnica.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>Las medidas de seguridad administrativas</strong> son aquellas que se deben implementar para conseguir los objetivos definidos por la organización</p>
                    <p class="text-justify"><strong>Medidas de seguridad física:</strong> es necesario establecer una serie de controles para mantener un perímetro de seguridad física adecuado y que se ubiquen los dispositivos en un entorno ambiental apropiado (zonas libres de humedad, zonas donde la luz solar no dé directamente a los equipos, etc.).</p>
                    <p class="text-justify"><strong>Las medidas de seguridad técnica</strong> son aquellas que se aplican a sistemas de datos personales en soportes electrónicos, servicios e infraestructuras de tecnologías de la información.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049064a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Tipos de medoda de seguridad técnica." title="Tipos de medoda de seguridad técnica.">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5164" role="button">Asignación de responsabilidades para la gestión del registro.</a>
            <div class="collapse" id="U5164">
                <div class="card card-body text-info">
                    <p class="text-justify">La gestión de los registros es un tema muy delicado para las organizaciones. Es de vital importancia tener mucho cuidado en la recogida, tratamiento y análisis de la información, aparte de tomar medidas de seguridad para evitar que los registros se eliminen o modifiquen involuntariamente y que haya manipulaciones no autorizadas de los mismos.</p>
                    <p class="text-justify">La LOPD obliga a las organizaciones a designar en su documento de seguridad a un responsable de seguridad que se encargue de autorizar, coordinar, controlar y, en ocasiones, ejecutar las medidas definidas en ese mismo documento.</p>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5165" role="button">Alternativas de almacenamiento para los registros del sistemas y sus características de rendimiento, escalabilidad, confidencialidad, integridad y disponibilidad.</a>
            <div class="collapse" id="U5165">
                <div class="card card-body text-info">
                    <p class="text-justify">El registro de un sistema es una base de datos jerárquica que almacena sus ajustes de configuración.</p>
                    <p class="text-justify">Contiene la configuración de los componentes de bajo nivel del sistema operativo, como las aplicaciones, los controladores de dispositivos, los servicios, la interfaz de usuario y las aplicaciones de terceros.</p>
                    <p class="text-justify">Además, también facilita información para comprobar el rendimiento, escalabilidad, confidencialidad, integridad y disponibilidad del sistema.</p>
                    <p class="text-justify">La escalabilidad de un sistema describe la facilidad con la que se pueden agregar o quitar componentes del sistema a la vez que se mantiene su confiabilidad.</p>
                    <p class="text-justify">Para entrar en el registro de Windows vaya a Inicio -> Ejecutar... e introduzca el comando regedit.</p>
                    <p class="text-justify">Pulse en Aceptar y aparecerá una consola del sistema, el Editor del Registro, con una serie de categorías agrupadas en forma de árbol como la que se puede ver en la siguiente imagen:</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049066a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Editor de registro." title="Editor de registro.">
                    <ul class="pl-3">
                        <li class="text-justify"><strong>HKEY _ CLASSES_ROOT:</strong> contiene información sobre las aplicaciones registradas y los sistemas de archivos. En esta carpeta se define qué programa debe abrir cada aplicación por defecto.</li>
                        <li class="text-justify"><strong>HKEY _ CURRENT _ USER:</strong> contiene información sobre las configuraciones del usuario que está utilizando Windows en ese momento.</li>
                        <li class="text-justify"><strong>HKEY_LOCAL_MACHINE:</strong> es uno de los apartados más importantes del equipo porque contiene información sobre las configuraciones de software, hardware y las cuentas de usuario que puede haber en el ordenador.</li>
                        <li class="text-justify"><strong>HKEY _ USERS:</strong> contiene los datos sobre los distintos perfiles de usuario que haya en Windows.</li>
                        <li class="text-justify"><strong>HKEY_CURRENT_CONFIG:</strong> contiene información acerca del hardware del equipo.</li>
                    </ul><br/>
                    <p class="text-justify">En el Visor de eventos se pueden observar distintos tipos de registros, en la carpeta Registro de Windows:</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Registros de aplicación:</strong> contiene los eventos registrados por aplicaciones o programas.</li>
                        <li class="text-justify"><strong>Registros de seguridad:</strong> contiene los eventos ocurridos en los accesos del sistema. Por ejemplo, intentos de inicio de sesión, introducción de contraseñas erróneas, etc.</li>
                        <li class="text-justify"><strong>Registros de instalación:</strong> incluye los eventos relacionados con la instalación de aplicaciones en el equipo.</li>
                        <li class="text-justify"><strong>Registros de sistema:</strong> contiene los eventos que han sido generados por componentes del sistema operativo como, por ejemplo, errores al cargar alguno de sus componentes.</li>
                        <li class="text-justify"><strong>Registros de eventos reenviados:</strong> contiene eventos que han sido reenviados a este registro desde otros equipos.</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5166" role="button">Guía para la selección del sistema de almacenamiento y custodia de registros.</a>
            <div class="collapse" id="U5166">
                <div class="card card-body text-info">
                    <img src="../recursos/img/cursos/ifct0109/mf049067a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Sistema de almacenamiento." title="Sistema de almacenamiento.">
                </div>
            </div>
        </ul>
    </li>
    <li class="list-group-item border-0 bg-light text-primary">UNIDAD DIDÁCTICA 7. ADMINISTRACIÓN DEL CONTROL DE ACCESOS ADECUADOS DE LOS SISTEMAS DE INFORMACIÓN.
        <ul class="list-group">
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5171" role="button">Análisis de los requerimientos de acceso de los distintos sistemas de información y recursos compartidos.</a>
            <div class="collapse" id="U5171">
                <div class="card card-body text-info">
                    <p class="text-justify"><strong>Requisitos de negocio para el control de accesos</strong></p>
                    <p class="text-justify">Según la normativa ISO/IEC 27002:2005, la principal finalidad del establecimiento del control de accesos en una organización es controlar el acceso a la información, tanto externo como interno.</p>
                    <p class="text-justify">Una buena práctica recomendada por la normativa es el establecimiento de una política de control de accesos adecuada y documentada, además de su revisión periódica.</p>
                    <p class="text-justify"><strong>Otros puntos importantes sobre el control de accesos en ISO 27002:2005</strong></p>
                    <ul class="pl-3">
                        <li class="text-justify">Gestión de acceso del usuario</li>
                        <li class="text-justify">Responsabilidad del usuario</li>
                        <li class="text-justify">Control de acceso a la red</li>
                        <li class="text-justify">Controlar los accesos al sistema operativo para evitar accesos no autorizados</li>
                        <li class="text-justify">Control de acceso a la aplicación y la información</li>
                        <li class="text-justify">Informática móvil y teletrabajo</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5172" role="button">Principios comúnmente aceptados para el control de accesos y de los distintos tipos de acceso locales y remotos.</a>
            <div class="collapse" id="U5172">
                <div class="card card-body text-info">
                    <p class="text-justify">Siguiendo con el estudio de la normativa ISO/ IEC 27002:2005, en esta también hay recogidos una serie de principios comúnmente aceptados para ejecutar el control de accesos y para tener bajo control también los distintos tipos de accesos locales y remotos.</p>
                    <p class="text-justify">El objetivo común de estos principios consiste en asegurar el acceso del usuario autorizado, mientras se evita el acceso de los no autorizados a los sistemas de información de la organización (tanto locales como remotos).</p>
                    <p class="text-justify">En concreto, se recomienda establecer una serie de procedimientos formales que sirvan para controlar la asignación de los derechos de acceso a los distintos sistemas de información.</p>
                    <p class="text-justify"><strong>Registro del usuario</strong></p>
                    <p class="text-justify">En cuanto al registro del usuario, en las organizaciones debe haber establecido un procedimiento formal para el registro y la eliminación del registro del usuario, que permita otorgar y revocar el acceso a todos los sistemas de información de la organización.</p>
                    <p class="text-justify">Se recomienda también incluir en los contratos de personal y en los contratos de servicio unas cláusulas en las que se indiquen las sanciones y faltas en las que se puede incurrir en caso de realizar accesos no autorizados.</p>
                    <p class="text-justify"><strong>Gestión de privilegios</strong></p>
                    <p class="text-justify">A modo de control, hay que restringir y controlar adecuadamente la asignación y el uso de los privilegios de la organización. Así, hay que establecer también un procedimiento de autorización formal que controle la asignación de privilegios para una mayor protección contra el acceso no autorizado.</p>
                    <p class="text-justify"><strong>Gestión de contraseñas de usuario</strong></p>
                    <p class="text-justify">Para las organizaciones también es fundamental establecer un procedimiento formal de gestión para la asignación de contraseñas a las cuentas de usuario.</p>
                    <p class="text-justify">Las contraseñas sirven como medio común para identificar y dar permiso a los usuarios antes de acceder a un sistema de información. No obstante, como precaución, también se recomienda la utilización de otras alternativas tecnológicas para identificar a los usuarios, como utilización de firmas electrónicas o sistemas de verificación de huellas digitales, entre otras.</p>
                    <p class="text-justify"><strong>Revisión de los derechos de acceso del usuario</strong></p>
                    <p class="text-justify">Los directivos y gerentes de la organización deben encargarse de la revisión periódica de los distintos derechos de acceso de los usuarios</p>
                    <p class="text-justify">En resumen, las organizaciones deben llevar a cabo revisiones periódicas en los derechos de acceso de los usuarios para tener un control completo y efectivo sobre el acceso a sus sistemas de información.</p>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5173" role="button">Requerimientos legales en referencia al control de accesos y asignación de privilegios.</a>
            <div class="collapse" id="U5173">
                <div class="card card-body text-info">
                    <p class="text-justify">Los requerimientos legales en referencia al control de accesos y a la asignación de privilegios que hay que tener en cuenta se refieren sobre todo a la Ley de Protección de Datos de Carácter Personal (LOPD 15/1999} y al Real Decreto 994/1999, de 11 de junio, por el que se aprueba el Reglamento de medidas de seguridad de los ficheros automatizados que contengan datos de carácter personal.</p>
                    <p class="text-justify">Ambas normativas establecen como principio fundamental la garantía de las tres propiedades de la información: Integridad, Confidencialidad y Disponibilidad</p>
                    <p class="text-justify">Los responsables del fichero deben encargarse de adoptar e implantar una serie de medidas, que pueden ser:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Medidas organizativas
                        <li class="text-justify">Medidas técnicas
                    </ul>
                    <img src="../recursos/img/cursos/ifct0109/mf049074a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Niveles de seguridad." title="Niveles de seguridad.">
                    <img src="../recursos/img/cursos/ifct0109/mf049074b.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Medidas de seguridad." title="Medidas de seguridad.">
                    <img src="../recursos/img/cursos/ifct0109/mf049074c.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Medidas de seguridad." title="Medidas de seguridad.">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5174" role="button">Perfiles de de acceso en relación con los roles funcionales del personal de la organización.</a>
            <div class="collapse" id="U5174">
                <div class="card card-body text-info">
                    <p class="text-justify">Un organigrama no es más que la representación gráfica de la estructura de una empresa u organización. En él se representan los distintos departamentos que forman parte de la organización, sus competencias y las relaciones jerárquicas que hay establecidas entre los distintos puestos y departamentos.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049075a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Consejo de daministración." title="Consejo de daministración.">
                    <p class="text-justify">los accesos que se quieren otorgar a cada empleado de la organización, estos podrán distinguirse entre:</p>
                    <ul class="pl-3">
                        <li class="text-justify">Solo lectura: el usuario con estos permisos solo podrá leer y visualizar los ficheros.</li>
                        <li class="text-justify">Lista de contenidos: el usuario podrá abrir las carpetas para visualizar los archivos que hay en ella, pero no podrá acceder a ellos.</li>
                        <li class="text-justify">Leer y ejecutar: el usuario podrá ejecutar aquellas aplicaciones que no influyan en los datos de la organización y también podrá visualizar los archivos.</li>
                        <li class="text-justify">Leer y modificar: con estos privilegios, el usuario, además de poder visualizar los archivos, podrá realizar modificaciones en los archivos vistos.</li>
                        <li class="text-justify">Control total: el usuario ya está autorizado para hacer cualquier tipo de operación en los archivos sobre los que se les ha asignado este permiso, desde su creación, modificación hasta su eliminación.</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5175" role="button">Herramientas de directorio activo y servidores LDAP en general.</a>
            <div class="collapse" id="U5175">
                <div class="card card-body text-info">
                    <p class="text-justify"><strong>Funciones del directorio activo</strong></p>
                    <p class="text-justify">Las funciones del directorio activo se definen en torno a tres áreas:</p>
                    <ul class="pl-3">
                        <li class="text-justify"><strong>Gestión de identidad.</strong> En cuanto a gestión de identidad, el directorio activo se encarga de identificar inequívocamente a cualquier persona de una organización mediante:</li>
                        <li class="text-justify"><strong>Seguridad.</strong> El directorio activo tiene como función la organización y simplificación de la localización y el acceso a los distintos recursos de la red de la organización. Además, también aplica las políticas de seguridad establecidas en la organización mediante una herramienta de gestión unificada.</li>
                        <li class="text-justify"><strong>Gestión de la configuración.</strong> El directorio activo realiza una gestión de la configuración de los elementos de la red para conseguir aumentar la productividad del usuario y reducir los costes de administración, soporte y aprendizaje.</li>
                    </ul><br/>
                    <p class="text-justify"><strong>LDAP o Protocolo Ligero para Acceder al Servicio de Directorio y herramientas de directorio activo</strong></p>
                    <p class="text-justify">El Protocolo Ligero para Acceder al Servicio de Directorio o LDAP (Lightweight Directory Access Protocol) es aquel que almacena la información de los usuarios que forman parte de una red y permite el acceso a los datos de un directorio ordenado y distribuido cuando se pretende localizar algún tipo de información.</p>
                    <ul class="pl-3">
                        <li class="text-justify">Active Directory (AD)</li>
                        <li class="text-justify">OpenLDAP</li>
                        <li class="text-justify">Apache Directory Server/Apache Directory Studio</li>
                    </ul>
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5176" role="button">Herramientas de sistemas de gestión de identidades y autorizaciones (IAM).</a>
            <div class="collapse" id="U5176">
                <div class="card card-body text-info">
                </div>
            </div>
            <a class="list-group-item  border-0 bg-light text-primary" data-toggle="collapse" href="#U5177" role="button">Herramientas de Sistemas de punto único de autenticación Single Sign On (SSO).</a>
            <div class="collapse" id="U5177">
                <div class="card card-body text-info">
                    <p class="text-justify">La identidad es la representación de un individuo o entidad dentro de un sistema de información.</p>
                    <img src="../recursos/img/cursos/ifct0109/mf049077a.png" class="img-responsive d-block mx-auto p-3 w-100 mb-3" alt="Herramientas de Sistemas de punto único de autenticación Single Sign On (SSO)." title="Herramientas de Sistemas de punto único de autenticación Single Sign On (SSO).">
                </div>
            </div>
        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../recursos/js/jquery-3.4.1.min.js"></script>
    <script src="../recursos/js/bootstrap.min.js"></script>
    <script src="../recursos/js/popper.min.js"></script>
    <script>
          $(document).ready(function() {
            $("#mp_certificados").addClass("text-warning")
            listar();
        });
        function cerrar() {
            $.ajax({
                url: '../controlador/usuario.php',
                type: 'POST',
                data: "boton=cerrar"
            }).done(function(resp) {
                window.location.href = "index.php";
            });
        }

    </script>

</body>

</html>
