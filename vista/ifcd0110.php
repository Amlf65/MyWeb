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
    <!--Barra de Navegacion-->
    <?php 
        require_once('menu_publico.php');
    ?>
    <div class="container" style="margin-top:80px; margin-bottom:25px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10 col-lg-9 p-0">  
                <div class="card">
                    <div class="card-header bg-primary justify-content-around">
                        <span class='display-4 text-light'> IFCD0110</span>
                        <p class="display-5 font-weight-bold text-light">CONFECCIÓN Y PUBLICACIÓN DE PÁGINAS WEB</p>
                    </div>
                    <div class="card-body" id="base_ifcd0110">
                        <ul class="list-group border rounded">

                            <li class="list-group-item border-0 bg-light text-dark">MF0950_2 CONSTRUCCIÓN DE PÁGINAS WEB
                                <ul class="list-group">
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD FORMATIVA 1. UF1302 CREACIÓN DE PÁGINAS WEB CON EL LENGUAJE DE MARCAS
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 1. LOS LENGUAJES DE MARCAS.
                                                <ul class="list-group ">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1111" role="button">Características de los lenguajes de marcas.</a>
                                                    <div class="collapse" id="U1111">
                                                        <div class="card card-body text-info">
                                                            <p class="text-justify"><strong>Utilización de etiquetas.</strong></p>
                                                            <p class="text-justify">Las etiquetas están constituidas por una serie de códigos encerrados entre dos signos :”&lt;” y “&gt;”. Cuando se trate de una etiqueta de cierre, es necesario añadir el carácter “/” justo después del signo “&lt;“. También existen etiquetas que no requieren de apertura y cierre. Para estas se puede añadir el carácter “/” justo antes de “&gt;”.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;p&gt;Hola Mundo&lt;/p&gt;</code><br/>

                                                            <p class="text-justify"><strong>Compatibilidad.</strong></p>
                                                            <p class="text-justify">HTML es un lenguaje de marcas que es compatible con cualquier plataforma que permita la instalación de un navegador web (Windows, Linux, Mac Os, Android, iOS…).</p>

                                                            <p class="text-justify"><strong>Editores de texto.</strong></p>
                                                            <p class="text-justify">Los editores de texto plano, son programas que se utilizan para escribir únicamente texto, sin formato ni imágenes. El Block de notas de Windows y TextWrangler para Mac, son claros ejemplos de editores de texto plano.</p>
                                                            <p class="text-justify">Puede sustituirse por alguna herramienta de edición web.</p>

                                                            <p class="text-justify"><strong>Caracteres especiales</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13021f.png" class="img-responsive w-75 my-3 mx-auto shadow" alt="Códigos HTML" title="Códigos HTML">

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1112" role="button">Estructura de un documento creado con lenguaje de marcas.</a>
                                                    <div class="collapse" id="U1112">
                                                        <div class="card card-body text-info">
                                                            <p class="text-justify"><strong>Comienzo del archivo.</strong></p>
                                                            <!--                    <img src="img/uf13021a.png" class="img-responsive w-100 m-3" alt="Comienzo del archivo">-->
                                                           
                                                            <p class="pl-3"><strong>HTML5</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;!DOCTYPE html&gt;</code><br/>
                                                            <p class="pl-3"><strong>HTML4.01 Strict</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;</code><br/>
                                                            <p class="pl-3"><strong>HTML4.01 Transitional</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;</code><br/>
                                                            <p class="pl-3"><strong>HTML4.01 Frameset</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"&gt;</code><br/>
                                                           
                                                            <p class="text-justify"><strong>Encabezados.</strong></p>
                                                            <!--                        <img src="img/uf13021b.png" class="img-responsive w-100 m-3" alt="Encabezados">-->
            
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;head&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;&nbsp;&nbsp;&lt;/title&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;base/&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;link/&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta/&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;style&gt;&nbsp;&nbsp;&lt;/style&gt;<br />
                                                                &lt;/head&gt;<br />
                                                            </code><br />

                                                            <p class="text-justify"><strong>Título.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;title&gt;</strong>Aquí se escribe el título del documento web <strong>&lt;/title&gt;</strong></code><br/>
                                                            <p class="text-justify">El contenido de esta etiqueta suele utilizarse por los navegadores para mostrarlo en la cabecera de su interfaz.</p>
                                                            <p class="text-justify">El contenido de la etiqueta &lt;title&gt;es utilizado por los buscadores para localizar páginas web.</p>


                                                            <p class="text-justify"><strong>Estilos.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;base href</strong>=“nueva direccion base” <strong>/&gt;</strong></code><br/>
                                                            <p class="text-justify">Esta etiqueta se utiliza para establecer directorios de referencia que sean relativos al documento en cuestión</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;link rel</strong>=“StyleSheet” <strong>type</strong>=“text/css” <strong>href</strong>=“css/estilos.css”<strong>/&gt;</strong></code>
                                                            <p class="text-justify">Esta directiva se utiliza para describir para describir la relación que existe entre el documento web y otros documentos externos.</p>
                                                            <p class="text-justify">Las Hojas de estilo CSS son documentos en los que se define el aspecto de uno o varios elementos contenidos en una página web.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"> <strong>&lt;meta charset</strong> = “UTF-8”<strong>/&gt;</strong></code><br/>
                                                            <p class="text-justify">Esta etiqueta se utiliza para añadir información de utilidad que pueda ser usada por aplicaciones externas (buscadores), además de añadir metainformación (información adicional relacionada con el documento que no son visualizados en el navegador).</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;style&gt;div</strong> {border:1 solid <strong>&lt;/style&gt;</strong></code><br/>
                                                            <p class="text-justify">Mediante este etiqueta simulamos los estilos en la propia página web, a efectos de verificación, previa a la creación del fichero de estilos.</p>
                                                            <p class="text-justify"><strong>Cuerpo.</strong></p>
                                                            <!--<img src="img/uf13021c.png" class="img-responsive w-100 m-3" alt="Cuerpo">-->
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;body&gt;&nbsp;&nbsp;&lt;/body&gt;</strong></code><br/>
                                                            <p class="text-justify">Etiquetas entre las que se añade el contenido propiamente dicho del documento</p>
                                                            <p class="text-justify"><strong>Scripts</strong></p>
                                                            <p>Eventos que controlan el comportamiento de una página</p>
                                                            <code class="d-block mx-auto bg-light shadow-sm p-3" style="width:90%">&lt;DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http&#58;//www.w3.org/TR/html4/strict.dtd"&gt;<br />
                                                                &lt;html&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta http-equiv = "content-type" content = "text/html; charset=utf-8"/&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Mi primera página&lt;/title&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Hola mundo&lt;/p&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br />
                                                                &lt;/html&gt;<br />
                                                            </code>     
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1113" role="button">Navegadores web.</a>
                                                    <div class="collapse" id="U1113">
                                                        <div class="card card-body text-info">

                                                            <p class="text-justify"><strong>Navegadores modo texto.</strong> </p><br />
                                                            <!--<img src="img/uf13021a.png" class="img-responsive w-100 m-3" alt="Comienzo del archivo">-->

                                                            <p class="text-justify">Los denominados navegadores en modo texto se utilizan en sistemas operativos que funcionan bajo línea de comandos.</p>
                                                            <p class="text-justify">La línea de comandos se puede definir como la interfaz más simple de un sistema operativo, en la que todas las acciones que se desean ejecutar se tienen que hacer escribiendo instrucciones o comandos.</p>
                                                            <p class="text-justify">Estos navegadores sólo permiten visualizar texto.</p>

                                                            <p class="text-justify"><strong>Los navegadores más utilizados.</strong><br /> </p>
                                                            <img src="../recursos/img/cursos/uf13021d.png" class="img-responsive w-75 my-3 mx-auto bg-light p-3 shadow" alt="Navegadores">

                                                            <p class="text-justify"><strong>Diferencias de visualización.</strong> </p>
                                                            <p class="text-justify">Durante el desarrollo de una página web, el resultado que se verá en la pantalla dependerá, en gran medida, del navegador que se esté utilizando para verla, ya que no todos los navegadores interpretan el código HTML de la misma manera.</p>

                                                            <p class="text-justify"><strong>Motores de renderización.</strong> </p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13021e.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Motores de renderización" title="Motores de renderización">

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1114" role="button">Marcas para dar formato al documento. </a>
                                                    <div class="collapse" id="U1114">
                                                        <div class="card card-body text-info">

                                                            <p class="text-justify"><strong>Saltos de línea, espacios en blanco y párrafos </strong></p>
                                                            <p class="text-justify">Saltos de línea: <strong>&lt;br/&gt;</strong> Para establecer saltos de línea en los textos de los documentos web</p>
                                                            <p class="text-justify">Espacios en blanco: <strong>&amp;nbsp;</strong> Porque los espacios en blanco normales son ignorados por el navegador</p>
                                                            <p class="text-justify">Párrafos: <strong>&lt;p&gt;&lt;/p&gt;</strong>Consisten en agrupaciones o bloques de texto. (Como punto y aparte.)</p>

                                                            <p class="text-justify"><strong>Marcas de inicio y final.</strong></p>
                                                            <p class="text-justify pl-3"><strong>&lt;header&gt;</strong>aquí va la cabecera de la página&lt;/header&gt;</p>
                                                            <p class="text-justify pl-3"><strong>&lt;nav&gt;</strong>aquí van los elementos de navegación de la página&lt;/nav&gt;</p>
                                                            <p class="text-justify pl-3"><strong>&lt;article&gt;</strong>Aquí va el contenido externo&lt;/article&gt;</p>
                                                            <p class="text-justify pl-3"><strong>&lt;section&gt;</strong>Esta es una sección&lt;/section&gt;</p>
                                                            <p class="text-justify pl-3"><strong>&lt;aside&gt;</strong>Esto es un contenido complementario o adicional&lt;/aside&gt;</p>
                                                            <p class="text-justify pl-3"><strong>&lt;footer&gt;</strong>Este es el pie de página&lt;/footer&gt;</p>
                                                            <p class="text-justify pl-3"><strong>&lt;adress&gt;</strong>Aquí se indica la información de contacto&lt;/adress&gt;</p>

                                                            <p class="text-justify"><strong>Marcas de aspecto.</strong></p>
                                                            <p class="text-justify pl-3"><strong>&lt;abbr&gt;</strong> Marcar las abreviaturas de un texto</p>
                                                            <p class="text-justify pl-3"><strong>&lt;b&gt;</strong> Visualiza el contenido de la etiqueta en negrita</p>
                                                            <p class="text-justify pl-3"><strong>&lt;cite&gt;</strong> El contenido de la etiqueta hace referencia a un título</p>
                                                            <p class="text-justify pl-3"><strong>&lt;code&gt;</strong> Añadir un código, con un tipo de letra fijo</p>
                                                            <p class="text-justify pl-3"><strong>&lt;del&gt;</strong> El contenido dentro de esta directiva se visualizará tachado</p>
                                                            <p class="text-justify pl-3"><strong>&lt;dfn&gt;</strong> Se utiliza para mostrar definiciones</p>
                                                            <p class="text-justify pl-3"><strong>&lt;em&gt;</strong> Para dar énfasis al texto. Normalmente en cursiva</p>
                                                            <p class="text-justify pl-3"><strong>&lt;i&gt;</strong> El texto contenido se visualizará en cursiva</p>
                                                            <p class="text-justify pl-3"><strong>&lt;ins&gt;</strong> Esta etiqueta se usa para subrayar texto</p>
                                                            <p class="text-justify pl-3"><strong>&lt;kbd&gt;</strong> Petición de introducción de texto por teclado</p>
                                                            <p class="text-justify pl-3"><strong>&lt;mark&gt;</strong> Visualiza el texto con color de fondo</p>
                                                            <p class="text-justify pl-3"><strong>&lt;q&gt;</strong> Muestra el texto contenido entre comillas</p>
                                                            <p class="text-justify pl-3"><strong>&lt;samp&gt;</strong> Muestra el texto procedente de programación</p>
                                                            <p class="text-justify pl-3"><strong>&lt;small&gt;</strong> El contenido se mostrará con un tamaño de fuente pequeño</p>
                                                            <p class="text-justify pl-3"><strong>&lt;sub&gt;</strong> Se utiliza esta etiqueta para establecer subíndices</p>
                                                            <p class="text-justify pl-3"><strong>&lt;sup&gt;</strong> Se utiliza esta etiqueta para establecer superíndices</p>
                                                            <p class="text-justify pl-3"><strong>&lt;time&gt;</strong> Para marcar fechas y horas que entiendan los navegadores</p>
                                                            <p class="text-justify pl-3"><strong>&lt;var&gt;</strong> El contenido se refiere a variable o instancia de programa</p>

                                                            <p class="text-justify"><strong>Marcas de párrafo.</strong></p>
                                                            <p class="text-justify">Cabeceras</p>
                                                            <div><strong>&lt;h1&gt;&lt;h2&gt;&lt;h3&gt;&lt;h4&gt;&lt;h5&gt;&lt;h6&gt;</strong>
                                                            </div>
                                                            <p class="text-justify">Se utilizan para establecer niveles de importancia del texto.</p>
                                                            <p class="text-justify">Formato</p>
                                                            <div ><strong>&lt;align =“left”/”right”/”center”/”justify”&gt;</strong></div>
                                                            <p class="text-justify">Ajustar la alineación del texto en el párrafo</p>

                                                            <p class="text-justify"><strong>Marcas de fuentes y colores.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;font&gt;</strong><br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>face:</strong> indica el tipo de fuente a aplicar al texto<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>color:</strong> indica el color en el que se va a ver el texto<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nombre: black, red….<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RGB(ROJO,AZUL, VERDE)<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hexadecimal (#FF0000, #00FF00, #0000FF)<br />
                                                                <strong>&lt;/font&gt;</strong>
                                                            </code>


                                                            <p class="text-justify"><strong>Listas.</strong> </p>
                                                            <ul class="pl-3">
                                                                <li class="text-justify">Listas No Ordenadas
                                                                        <strong><code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;ul&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;...&lt;/li&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;...&lt;/li&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;...&lt;/li&gt;<br />
                                                                        &lt;/ul&gt;</code></strong>
                                                                </li>
                                                                <li class="text-justify">Listas Ordenadas
                                                                   
                                                                        <strong><code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;ol&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;...&lt;/li&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;...&lt;/li&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;...&lt;/li&gt;<br />
                                                                        &lt;/ol&gt;</code></strong>
                                                                </li>
                                                                <li class="text-justify">Listas de Definiciones
                                                                        <strong><code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;dl&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;...&lt;/dt&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;...&lt;/dd&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;...&lt;/dt&gt;<br />
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;...&lt;/dd&gt;<br />
                                                                        &lt;/dl&gt;</code></strong>
                                                                </li>
                                                            </ul>


                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1115" role="button">Enlaces y direccionamientos.</a>
                                                    <div class="collapse" id="U1115">
                                                        <div class="card card-body text-info">

                                                            <p class="text-justify"><strong>Creación de un enlace.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;a&gt;</strong></code><br/>
                                                            <p>Este elemento permite incluir una referencia o enlace a otro documento HTML o a un lugar dentro del mismo documento.</p>

                                                            <p class="text-justify m-2 pl-3"><strong>href</strong> dirección asociada al enlace.</p>
                                                            <p class="text-justify m-2 pl-3"><strong>title</strong> texto que aparecerá al posicionar el ratón sobre el mismo.</p>
                                                            <p class="text-justify m-2 pl-3"><strong>target</strong> referencia al lugar donde se va a abrir el contenido al que apunta el enlace.</p>
                                                            <p class="text-justify  m-2 pl-6"><strong>_blank</strong> se mostrará en una ventana/pestaña nueva.</p>
                                                            <p class="text-justify  m-2 pl-6"><strong>_parent</strong> se mostrará en el frameset padre del frame actual.</p>
                                                            <p class="text-justify  m-2 pl-6"><strong>_self</strong> se mostrará en la ventana o frame donde se encuentra el enlace.</p>
                                                            <p class="text-justify  m-2 pl-6"><strong>_top</strong> se mostrará usando todo el espacio de la ventana del navegador.</p>

                                                            <p class="text-justify"><strong>Tipos de enlace.</strong></p>
                                                            <p class="text-justify">Enlaces locales apuntan a otros documentos pertenecientes a propio sitio web.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;<strong>a href</strong>=“doc2.html”>Texto del enlace<strong>&lt;a&gt;</strong></code><br/>
                                                            <p class="text-justify">Enlaces internos o anclas apuntan a otras secciones de un mismo documento.</p>
                                                            <p class="text-justify">referenciar con name: </p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;a name</strong>=“inicio”&gt;Inicio<strong>&lt;/a&gt;</strong></code><br/>
                                                            <p class="text-justify"><strong>Los enlaces y la navegación</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;a href</strong>=“#inicio”&gt; Ir inicio <strong>&lt;/a&gt;</strong></code><br/>
                                                            <p class="text-justify">Enlaces externos apuntan a una página ajena al sitio.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;a href</strong>=http://www.google.com&gt;Ir a google<strong>&lt;/a&gt;</strong> </code><br/>
                                                            <p class="text-justify">Enlaces a direcciones de correo permiten enviar correo mediante asistente</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;a href</strong>=“mailto:ejemplo@dominio.com”>Enviar correo<strong>&lt;/a&gt;</strong></code><br/>
                                                            <p class="text-justify">Enlaces a archivos apuntan a archivos que no son documentos web</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;a href</strong>=“fichero.zip”>Descargar<strong>&lt;/a&gt;</strong></code><br/>
                                                            
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1116" role="button">Marcos y capas.</a>
                                                    <div class="collapse" id="U1116">
                                                        <div class="card card-body text-info">

                                                            <p class="text-justify"><strong>Marcos y capas</strong></p>
                                                            <p class="text-justify"><strong>Marcos</strong></p>
                                                            <p class="text-justify">Los marcos subdividen toda el área de navegación en zonas donde se pueden cargar otros documentos HTML.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;frameset&gt;&lt;/frameset&gt;</strong></code><br/>
                                                            <p class="text-justify">cols; rows; frameborder; framespacing; border; bordercolor</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;frame&gt;&lt;/frame&gt;</strong></code><br/>
                                                            <p class="text-justify">frameborder; name; noresize; marginwidth; marginheight; scrolling; src</p>
                                                            <p><strong>Iframes</strong></p>
                                                            <p class="text-justify">Los iframes consisten en áreas flotantes dentro de las cuales se pueden cargar un documento web.</p>
                                                            <p class="text-justify pl-2"><strong>name</strong> nombre del iframe</p>
                                                            <p class="text-justify pl-2"><strong>src</strong> ruta donde se encuentra el documento a cargar en el marco</p>
                                                            <p class="text-justify pl-2"><strong>width</strong> ancho del iframe en píxeles</p>
                                                            <p class="text-justify pl-2"><strong>height</strong> alto del iframe en píxeles</p>
                                                            <p class="text-justify pl-2"><strong>sandbox</strong> restricciones de seguridad</p>
                                                            <p class="text-justify pl-2"><strong>scrolling</strong> especifica si el marco tiene scroll (“Yes”) o no lo tiene (“No”)</p>
                                                            <p class="text-justify"><strong>Capas.</strong></p>
                                                            <p class="text-justify">Las capas son elementos que se utilizan para albergar a otros elementos.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;div&gt;</strong> agrupar grandes cantidades de contenido</code><br/>

                                                            <p class="text-justify">name; src; width; height; sandbox; scrolling</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;div style</strong>=“background-color: #eee; width:400px; height:400px; border-style:solid; border-width:1px; padding:10px; text-align:justify”&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;h3&gt;</strong>Loren ipsum dolor<strong>&lt;/h3&gt;</strong><br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&lt;p&gt;</strong>Lorem ...<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...placerat facer possim assum.<strong>&lt;/p&gt;</strong><br />
                                                                <strong>&lt;/div&gt;</strong><br />
                                                            </code><br />

                                                            <p class="text-justify"><strong>&lt;span&gt;</strong> agrupar no más de una o varias palabras de un párrafo</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"> class="text-justify">Hola a <strong>&lt;span style</strong>=“color:lime”>todos<strong>&lt;/span&gt;</strong></code><br />

                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 2. IMÁGENES Y ELEMENTOS MULTIMEDIA.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1121" role="button">Inserción de imágenes: formatos y atributos.</a>
                                                    <div class="collapse" id="U1121">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Formatos.</strong></p>
                                                            <p class="justify">El formato de imagen es el tipo de compresión en el que se guardan los dígitos binarios que contienen la información de la imagen.</p>
                                                            <p class="justify">.GIF: Pueden presentar transparencias y animaciones</p>
                                                            <p class="justify">.JPEG: Formato ideal por la relación calidad tamaño</p>
                                                            <p class="justify">.PNG Formato ideal para imágenes con transparencias: Fidelidad de clores, 30% menores que .GIF y velocidad, las imágenes se pueden empezar a visualizar antes de haber sido cargadas completamente.</p>
                                                            <p class="justify">Incluir imágenes en las páginas.</p>
                                                            <p class="justify">La marca &lt;IMG&gt; no necesita cierre y su sintaxis básica es:</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;IMG SRC="imagen.jpeg" alt=”Texto alternativo” title=”Texto” /&gt;</code>
                                                            <br/>
                                                            <p class="justify"><strong>Atributos de las imágenes</strong></p>
                                                            <p class="justify pl-3"><strong>alt</strong> El uso de texto para comentar las imágenes es una regla fundamental que debemos observar en la creación de sitios web.</p>
                                                            <p class="justify pl-3"><strong>title</strong> Texto explicativo que aparece cuando nos situamos con el ratón sobre la imagen.</p>
                                                            <p class="justify pl-3"><strong>border</strong> Con este atributo podemos aplicar un borde a la imagen></p>
                                                            <p class="justify"><strong>Propiedades de ubicación de las imágenes.</strong>strong></p>
                                                            <p class="justify pl-3"><strong>hspace</strong> y <strong>vspace</strong> Con estos dos atributos podemos establecer la distancia en píxel de la imagen a los objetos que se encuentran a los cuatro lados de la misma.</p>
                                                            <p class="justify pl-3"><strong>align</strong> Atributo que define la posición de la imagen respecto al texto colocado inmediatamente antes o después de la misma</p>
                                                        </div>
                                                    </div>

                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1122" role="button">Mapas de imágenes.</a>
                                                    <div class="collapse" id="U1122">
                                                        <div class="card card-body text-info">

                                                            <p class="justify"><strong>Definición de mapa.</strong></p>
                                                            <p class="justify">Son imágenes que presentan zonas concretas a las que se les ha asociado una URL.</p>
                                                            <p class="justify">Para conseguir esto se divide la imagen en zonas mediante las coordenadas de las mismas, estas zonas puede tener infinidad de formas desde sencillos círculos hasta complejas áreas poligonales</p>
                                                            <p class="justify">Cuando se hace clic en una de estas zonas, el navegador direccionará al usuario al enlace que esta tenga definido.</p>
                                                            <p class="justify"><strong>Creación de un mapa con una imagen.</strong></p>
                                                            <p class="justify">Para crear un mapa de imágenes se utiliza la etiqueta</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;map&gt;</strong></code>  
                                                            <br/>
                                                            <p class="justify pl-3"><strong>title:</strong> Texto a mostrar al posicionar el ratón sobre la zona definida</p>
                                                            <p class="justify pl-3"><strong>shape:</strong>Tipo de área: rect / circle / poly</p>
                                                            <p class="justify pl-3"><strong>coords:</strong> Coordenadas que delimitan dicho área</p>
                                                            <p class="justify pl-3"><strong>href:</strong> URL que se asocia al área definida</p>

                                                            <p class="justify"><strong>Establecer diferentes partes en la imagen</strong></p>
                                                            <p class="justify pl-3"><strong>Rect</strong> Se indican las coordenadas de los puntos de la esquina superior izquierda y la esquina inferior derecha.</p>
                                                            <p class="justify pl-3"><strong>Circle</strong> Se define con la coordenada del centro del circulo y la longitud del radio.</p>
                                                            <p class="justify pl-3"><strong>Poly</strong> Se definen todos los puntos del perímetro en orden según un camino determinado.</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13021g.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Establecer partes en mapa de imagen" title="Establecer partes en mapa de imagen"><br />
                                                            <p class="justify"><strong>Vincular las diferentes partes de una imagen</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"> class="justify">&lt;map name=”mapa_imagenes”&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;area .../&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;area .../&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
                                                                &lt;/map&gt;<br />
                                                                &lt;img src=”...” usemap=”#mapa_imagenes”/&gt;<br />
                                                                ...<br />
                                                            </code>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1123" role="button">Inserción de elementos multimedia: audio, vídeo y programas.</a>
                                                    <div class="collapse" id="U1123">
                                                        <div class="card card-body text-info">

                                                            <p class="justify"><strong>Características y propiedades de los elementos multimedia.</strong></p>
                                                            <p class="justify">Permiten que el usuario aprenda rápidamente</p>
                                                            <p class="justify">Mejoran las prestaciones basadas en imágenes y texto</p>
                                                            <p class="justify">Mantienen la atención e interés del usuario</p>
                                                            <p class="justify">La información puede ser retenida por el usuario por más tiempo</p>
                                                            <p class="justify">Hacen del contenido web más divertido y ameno</p>
                                                            <p class="justify">Por lo general requieren de algún plugin</p>


                                                            <p class="justify"><strong>Recursos necesarios para el funcionamiento de los elementos multimedia.</strong></p>
                                                            <p class="justify">El nuevo estandar HTML5 introduce unas etiquetas nuevas (&lt;video&gt; y &lt;audio&gt;) gracias a los cuales los navegadores pueden reproducir diferentes formatos de audio y video sin necesidad de plugins</p>
                                                            <p class="justify">No obstante, en la actualidad no todos los navegadores son capaces de reproducir los mismos formatos.</p>


                                                            <p class="justify"><strong>Etiquetas y propiedades para la inserción de audio..</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;audio src</strong>=”audio.mp3&gt;<strong>&lt;/audio&gt;</strong></code>
                                                            <br/>
                                                            <p class="justify pl-3"><strong>src</strong> URL del archivo de audio a reproducir</p>
                                                            <p class="justify pl-3"><strong>controls</strong> el navegador muestra una interfaz para su control</p>
                                                            <p class="justify pl-3"><strong>autoplay</strong> el audio se reproducirá automáticamente</p>
                                                            <p class="justify pl-3"><strong>loop</strong> el audio se reinicia una vez termine de reproducirse</p>
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left m-2 px-5 py-2">
                                                                <p class="justify">&lt;audio ...&gt;</p>
                                                                <p class="justify">&nbsp;&nbsp;&nbsp;&lt;source ... /&gt;</p>
                                                                <p class="justify">&nbsp;&nbsp;&nbsp;&lt;source .../&gt;</p>
                                                                <p class="justify">&lt;/audio ...&gt;</p>
                                                            </div>

                                                            <p class="justify pl-3"><strong>source</strong> comprobación de distintos formatos</p>
                                                            <p class="justify pl-3"><strong>src</strong> ruta en la que se encuentra el archivo de audio</p>
                                                            <p class="justify pl-3"><strong>type</strong> tipo MIME (audio/mpeg |audio/ogg |audio/webm)</p>

                                                            <p class="justify"><strong>Etiquetas y propiedades para la inserción de video.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;video src</strong>=”video.mp4&gt; <strong>&lt;/audio>&gt;</strong></code>
                                                            <br/>
                                                            <p class="justify pl-3"><strong>src</strong> URL del archivo de video a reproducir</p>
                                                            <p class="justify pl-3"><strong>controls</strong> el navegador muestra una interfaz para su control</p>
                                                            <p class="justify pl-3"><strong>autoplay</strong> el video se reproducirá tan pronto como pueda</p>
                                                            <p class="justify pl-3"><strong>loop</strong> el video se reinicia una vez termine de reproducirse</p>
                                                            <p class="justify pl-3"><strong>poster</strong> Url de imagen a mostrar mientras se carga el video</p>
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left m-2 px-5 py-2">
                                                                <p class="justify">&lt;video ...&gt;</p>
                                                                <p class="justify">&nbsp;&nbsp;&nbsp;&lt;source ... /&gt;</p>
                                                                <p class="justify">&nbsp;&nbsp;&nbsp;&lt;source .../&gt;</p>
                                                                <p class="justify">&lt;/video ...&gt;</p>
                                                            </div>
                                                            <p class="justify pl-3"><strong>source</strong> comprobación de distintos formatos</p>
                                                            <p class="justify pl-3"><strong>src</strong> ruta en la que se encuentra el archivo de video</p>
                                                            <p class="justify pl-3"><strong>type</strong> tipo MIME (video/mp4 |video/ogg |video/webm)</p>

                                                            <p class="justify"><strong>Otras etiquetas para la inserción de elementos multimedia.</strong></p>

                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;embed src=</strong>”...”&gt;<strong>&lt;/embed&gt;</strong></code>
                                                            <br/>
                                                            <p class="justify pl-3"><strong>src</strong> ruta en la que se encuentra el archivo multimedia</p>
                                                            <p class="justify pl-3"><strong>type</strong> tipo MIME</p>
                                                            <p class="justify pl-3"><strong>name</strong> nombre del objeto</p>
                                                            <p class="justify pl-3"><strong>height y width</strong> alto y ancho en píxeles de la ventana de visualización</p>
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left m-2 px-5 py-2">
                                                                <p class="justify">&lt;object...&gt;</p>
                                                                <p class="justify"> &lt;param …/&gt;</p>
                                                                <p class="justify"> &lt;param …/&gt;</p>
                                                                <p class="justify">&lt;/object</p>
                                                            </div>
                                                            <p class="justify pl-3"><strong>data</strong> ruta en la que se encuentra el elemento multimedia</p>
                                                            <p class="justify pl-3"><strong>form</strong> para asociar el objeto a un formulario</p>
                                                            <p class="justify pl-3"><strong>name</strong> nombre del objeto</p>
                                                            <p class="justify pl-3"><strong>usemap</strong> Inserción de una imagen que se comporte como mapa</p>
                                                            <p class="justify pl-3"><strong>height y width</strong> alto y ancho en píxeles del objeto</p>

                                                            <p class="justify"><strong>Etiquetas y propiedades para la inserción de programas.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;applet...&gt;</strong> ... <strong>&lt;/applet&gt;</strong></code>
                                                            <br/>
                                                            <p class="justify pl-3"><strong>codebase</strong> ruta en la que se localiza en applet y recursos necesarios.</p>
                                                            <p class="justify pl-3"><strong>code</strong> nombre de la clase Java que contiene el applet.</p>
                                                            <p class="justify pl-3"><strong>name</strong> nombre para la instancia del applet.</p>
                                                            <p class="justify pl-3"><strong>alt</strong> valor que aparecerá si está desactivada la ejecución de applets.</p>
                                                            <p class="justify pl-3"><strong>archive</strong> archivos precargados para la ejecución del applet.</p>
                                                            <p class="justify pl-3"><strong>object</strong> archivo de recursos para ejecución.</p>
                                                            <p class="justify pl-3"><strong>width y height</strong> alto y ancho en píxeles del área de visualización.</p>
                                                            <p class="justify pl-3"><strong>align</strong> bottom|middle|top|left|right.</p>
                                                            <p class="justify pl-3"><strong>hspace y vspace</strong> espacio para con el texto circundante.</p>
                                                            <p class="justify pl-3"><strong>myscript</strong> permite al applet acceder a funcionalidades javascript</p>


                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1124" role="button">Formatos de audio y vídeo.</a>
                                                    <div class="collapse" id="U1124">
                                                        <div class="card card-body text-info">
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left m-2 px-5 py-2">
                                                                <p class="justify pl-3 pt-2">Audio Wav; Mp3; Ogg Vorbis; Midi</p>
                                                                <p class="justify pl-3">Video Mpeg-4; H.264; Ogg Theora; WebM; FLV</p>
                                                            </div>
                                                            <p class="justify">Un codec consiste en un pequeño complemento o programa (plugin) que se instala en un sistema con el fin de poder reproducir audio o vídeo que está codificado en un cierto formato.</p>
                                                            <p class="justify">Flash es una tecnología que permite la creación de animaciones gráficas vectoriales independientes del navegador.</p>
                                                            <p class="justify">La tecnología conocida como streaming hace que sea posible recibir sonido y video a través de internet sin necesidad de esperar a que el recurso multimedia correspondiente se descargue por completo.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1125" role="button">Marquesinas.</a>
                                                    <div class="collapse" id="U1125">
                                                        <div class="card card-body text-info">

                                                            <p class="justify">Textos con movimiento.</p>
                                                            <p class="justify">Existe una etiqueta, la cual no pertenece al estandar HTML5, que sirve para insertar marquesinas en un documento web. Esta es</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;marquee&gt;</strong></code>
                                                            <br/>
                                                            <p class="justify">Una marquesina consiste en una ventana en la que aparece un texto que se desplaza.</p>
                                                            <p class="justify"><strong>Utilización de las etiquetas para incluir marquesinas.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3"><strong>&lt;marquee&gt;</strong>Este es el texto de la marquesina<strong>&lt;/marquee&gt;</strong></code>
                                                            <br/>

                                                            <p class="text-justify"><strong>Marcas de fuentes y colores.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">...&lt;MARQUEE WIDTH=70% HEIGHT=40&gt;...<br />
                                                               ...&lt;MARQUEE BGCOLOR=#7070ff&gt;...<br />
                                                               ...&lt;MARQUEE BEHAVIOR=slide/ alternate &gt;...<br />
                                                               ...&lt;MARQUEE DIRECTION=right/up/down&gt;...<br />
                                                               ...&lt;MARQUEE SCROLLAMOUNT=40&gt;...<br />
                                                               ...&lt;MARQUEE SCROLLDELAY=1000&gt;...<br />
                                                               ...&lt;MARQUEE LOOP=2&gt;...<br />

                                                            </code><br/>


                                                            <p class="justify"><strong>Las marquesinas y los distintos navegadores.</strong></p>
                                                            <p class="justify">La gran desventaja que suponía la utilización de la etiqueta &lt;marquee&gt; es que únicamente era soportada por el navegador Internet Explorer. Esto hacía que el uso de este elemento en los documentos web fuera totalmente desaconsejable.</p>

                                                            <p class="justify">No obstante, en la actualidad la mayoría de los navegadores más utilizados interpretan correctamente esta etiqueta, mostrando su contenido como un texto en movimiento.</p>

                                                            <p class="justify">Debido a no ser soportada por la nueva especificación HTML5, no se recomienda su uso.</p>

                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 3. TÉCNICAS DE ACCESIBILIDAD Y USABILIDAD.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1131" role="button">Accesibilidad web, ventajas de la accesibilidad. </a>
                                                    <div class="collapse" id="U1131">
                                                        <div class="card card-body text-info">
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left m-2 px-5 py-2">
                                                                <p class="justify"><strong>Accesibilidad:</strong><br /> Serie de normas que deben cumplirse cuando se diseña un sitio web.</p>
                                                            </div><br />
                                                            <p class="justify"><strong>Definición de Accesibilidad.</strong></p>
                                                            <p class="justify">Serie de normas que deben cumplirse cuando se diseña un sitio web, las cuales están relacionadas con el acceso de la página para usuarios con discapacidad.</p>
                                                            <p class="justify">También se aplica al acceso de la web desde los diferentes dispositivos que se puedan utilizar para visualizarla (tablets,móviles...).</p>
                                                            <p class="justify">Limitaciones</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Deficiencias visuales</li>
                                                                <li class="justify pl-3">Deficiencias auditivas</li>
                                                                <li class="justify pl-3">Deficiencias motrices</li>
                                                                <li class="justify pl-3">Deficiencias cognitivas y de lenguaje</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Aplicabilidad de la accesibilidad.</strong></p>
                                                            <p class="justify">Serie de normas que deben cumplirse cuando se diseña un sitio web, las cuales están relacionadas con el acceso de la página para usuarios con discapacidad.</p>
                                                            <p class="justify">También se aplica al acceso de la web desde los diferentes dispositivos que se puedan utilizar para visualizarla (tablets,móviles...).</p>
                                                            <p class="justify">Comprender el concepto de accesibilidad y comprometerse a garantizarla</p>
                                                            <p class="justify">Adquirir los conocimientos técnicos para saber aplicarla</p>
                                                            <p class="justify">Conocer la normativa vigente relacionada con la accesibilidad web</p>

                                                            <p class="justify"><strong>Descripción de las ventajas de la Accesibilidad.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Facilidad de acceso.</li>
                                                                <li class="justify pl-3">Mejoras en la navegación.</li>
                                                                <li class="justify pl-3">Independencia de los navegadores</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1132" role="button">Usabilidad web, importancia de la usabilidad.</a>
                                                    <div class="collapse" id="U1132">
                                                        <div class="card card-body text-info">
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left m-2 px-5 py-2">
                                                                <p class="justify"><strong>Usabilidad</strong><br /> Conjunto de recomendaciones que deben considerarse al diseñar un sitio web.</p>
                                                            </div>
                                                            <p class="justify"><strong>Definición de usabilidad.</strong></p>
                                                                <p class="justify">Un sitio web usable es aquel en el que su contenido es mostrado de forma clara y fácilmente entendible por el usuario.</p>
                                                            <p class="justify"><strong>Interacción web-individuo.</strong></p>
                                                            <p class="justify">Proceso que consiste definir las diferentes acciones que el usuario va a poder ejecutar en la página.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Elemento de interactuación deben diferenciarse claramente del resto de contenidos.</li>
                                                                <li class="justify pl-3">La interacción debe ser sencilla, rápida e intuitiva.</li>
                                                                <li class="justify pl-3">No utilizar elementos que puedan confundir al usuario.</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Aplicabilidad de la usabilidad.</strong></p>
                                                                <p class="justify">Hacer un sitio usable consiste en ofrecer en en el sitio web la mejor experiencia del usuario.</p>
                                                            <p class="justify"><strong>Recursos sobre usabilidad.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Usability.net (http://usabilitynet.org/home.htm)</li>
                                                                <li class="justify pl-3">UPA (http://www.upassoc.org/)</li>
                                                                <li class="justify pl-3">Usability.org (http://www.usability-gov/)</li>
                                                                <li class="justify pl-3">WAI (www.w3.org/WAI/)</li>
                                                            </ul><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1133" role="button">Aplicaciones para verificar la accesibilidad de sitios web (estándares).</a>
                                                    <div class="collapse" id="U1133">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Recursos web de estándares.Utilización de los recursos en las páginas web.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3"><b>TAW</b> consiste en un analizador automático de la accesibilidad de las páginas web.</li>
                                                                <li class="justify pl-3">La <b>Barra AIS</b> facilita el análisis manuel de muchos aspectos relacionados con al accesibilidad de páginas web.</li>
                                                                <li class="justify pl-3">La <b>Validator W3C permite validar que el código HTML y CSS que constituye una web es correcto.</b> facilita el análisis manuel de muchos aspectos relacionados con al accesibilidad de páginas web.</li>
                                                            </ul><br />    
                                                            <p class="justify"></p>
                                                            <p class="justify"><strong>Comprobar la accesibilidad en las páginas web.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Revisión automática</li>
                                                                <li class="justify pl-3">Revisión manual</li>
                                                            </ul><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1134" role="button">Adaptación de sitios web usables. </a>
                                                    <div class="collapse" id="U1134">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Estudio de la estructura y diseño de los sitios web usables.</strong></p>
                                                            <p class="justify">El diseño de una página web usable debe estar orientado a la sencillez para así evitar las posibles distracciones que puedan surgir.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Estructura general en función de los contenidos.</li>
                                                                <li class="justify pl-3">La navegabilidad diseñada de forma que de lugar a confusion.</li>
                                                                <li class="justify pl-3">Los elementos de la página deben ofrecer entornos homogéneos.</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Descripción de sitios web usables.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Escritura de la web.</li>
                                                                <p class="justify">Es importante escribir el contenido de la web adaptándolo al medioen el que se va a utilizar.</p>
                                                                <li class="justify pl-3">Lectura de la web.</li>
                                                                <p class="justify">Mantener un buen grado de legibilidad en los contenidos es fundamental para que el usuario pueda leer cómodamente lo que se ve en su pantalla.</p>
                                                            </ul><br />
                                                            <p class="justify"><strong>Diseño de sitios web usables.</strong></p>
                                                                <p class="justify">El uso excesivo de efectos visuales con la única finalidad de llamar la atención del usuario es algo totalmente desaconsejable.</p>
                                                            <p class="justify"><strong>Utilización de los sitios web usables.</strong></p>
                                                                <p class="justify">Los enlaces que se incluyen en las páginas web deben aplicarse en aquellos elementos que sean importantes y claros ya que, de lo contrario, poddrían provocar errores de impterpretación.</p>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 4. HERRAMIENTAS DE EDICIÓN WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1141" role="button">Instalación y configuración de herramientas de edición web.</a>
                                                    <div class="collapse" id="U1141">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Adobe Dramweaver CC en windows 7</strong> </p>
                                                            <p class="justify">Es un programa de diseño y desarrollo web muy conocido que es propiedad de la compañía Adobe.
                                                                <p class="justify">Es una aplicación de pago</p>
                                                                <p class="justify-right">www.adobe.com</p>

                                                                <p class="justify"><strong>Aptana Studio 3 en Ubuntu 12.04</strong> </p>
                                                                <p class="justify">Es una aplicación de desarrollo de páginas web, libe y de código abierto.</p>
                                                                <p class="justify">Puede descargarse como aplicación independiente o como plugin (complemento) del entorno de desarrollo conocido como Eclipse.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1142" role="button">Funciones y características.</a>
                                                    <div class="collapse" id="U1142">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de los elementos de las herramientas Web.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">El espacio de trabajo de Dreamweaver CC</li>
                                                                <li class="justify pl-3">El espacio de trabajo de Aptana Studio 3</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Ubicación de los elementos de las herramientas web. Propiedades de los elementos de las herramientas web.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Inserción y configuración de elementos web</li>
                                                                <li class="justify pl-3">Funcionalidades de tipografía de texto</li>
                                                                <li class="justify pl-3">Paneles de creación y configuración de estilos CSS</li>
                                                                <li class="justify pl-3">Definición de eventos y comportamientos Javascript</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Tareas a realizar con una herramienta de edición web. El lenguaje de marcas y las herramientas de edición web.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Código más claro, diferenciación con colores.</li>
                                                                <li class="justify pl-3">Asistente para el código.</li>
                                                                <li class="justify pl-3">Depuración, mediante puntos de ruptura.</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Adobe Dramweaver CC en windows 7.</strong></p>
                                                            <p class="justify">Es un programa de diseño y desarrollo web muy conocido que es propiedad de la compañía Adobe.</p>
                                                            <p class="justify">Es una aplicación de pago</p>

                                                            <p class="justify"><strong>Aptana Studio 3 en Ubuntu 12.04.</strong></p>
                                                            <p class="justify">Es una aplicación de desarrollo de páginas web, libe y de código abierto. </p>
                                                            <p class="justify">Puede descargarse como aplicación independiente o como plugin (complemento) del entorno de desarrollo conocido como Eclipse.</p>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD FORMATIVA 2. UF1303 ELABORACIÓN DE HOJAS DE ESTILO
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 1. HOJAS DE ESTILO EN LA CONSTRUCCIÓN DE PÁGINAS WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1211" role="button">Funciones y características.</a>
                                                    <div class="collapse" id="U1211">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de estilos.</strong></p>
                                                            <p class="justify">CSS pretende separar el contenido de su aspecto y presentación, dejando al documento HTML todo el contenido de la página para que, a través de CSS, se pueda aplicar un formato visual a cada una de las partes de ese documento.</p>

                                                            <p class="justify"><strong>Utilización de estilos.</strong></p>
                                                            <p class="justify">Las distintas formas de incluir estilos CSS en un documento HTML son:</p>
                                                            <ul class="pl-3">
                                                                <li class="pl-3">Incluir CSS en los elementos HTML</li>
                                                                <li class="pl-3">Incluir CSS en el mismo documento HTML</li>
                                                                <li class="pl-3">Definir CSS en un archivo externo</li>
                                                            </ul>
                                                            <p class="justify"><strong>Los estilos en el lenguaje de marcas.</strong></p>
                                                            <p class="justify"><strong>Estilo en línea :</strong> consiste en incluir estilos CSS en HTML aplicando el atributo style a las etiquetas.</p>

                                                            <p class="justify">En el atributo <strong>style</strong> es necesario escribir las características con sintaxis css.</p>

                                                            <p class="justify"><strong>Los estilos con herramientas de edición web.</strong></p>
                                                            <p class="justify">La generación de código CSS debe realizarse con un cierto orden y estructura, nombrando las clases y los identificadores con nombres fáciles de relacionar.</p>
                                                            <p class="justify">Lo normal es ir previsualizando losa cambios que se vayan haciendo en los distintos navegadores.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1212" role="button">Hojas de estilo y accesibilidad.</a>
                                                    <div class="collapse" id="U1212">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Adecuación de las hojas de estilos.</strong></p>
                                                            <p class="justify">Gracias a la tecnología disponible hoy día se puede diseñar un sitio web pensando en la accesibilidad por parte de personas discapacitadas, consiguiendo además tiempos de carga más rápidos a cualquier usuario de internet.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1213" role="button">Tipos de estilo: incrustados, enlazados, importados, en línea.</a>
                                                    <div class="collapse" id="U1213">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de los tipos de estilo.</strong></p>
                                                            <p class="justify">Enlazar una hoja de estilos externa a un documento HTML.</p>
                                                            <p class="justify">Incrustar el estilo en el documento HTML</p>
                                                            <p class="justify">Importar una hoja de estilos externa</p>
                                                            <p class="justify">Importar hojas de estilo a través de otro archivo de estilo</p>

                                                            <p class="justify">&gt;Se jerarquizan siempre que se solapen atendiendo primero al incrustado en etiquetas después al incrustado en el &lt;head> y en el ultimo lugar la hoja de estilos externa.</p>

                                                            <p class="justify"><strong>Enlazar una hoja de estilo externa a un documento HTML.</strong></p>
                                                            <p class="text-justify bg-light border border-secondary shadow-sm text-left px-5 py-2 m-3">&lt;link rel =“styleheet” type=“text/css” href=“css/estilos.css” title=“default” media=“screen”&gt;</p>
                                                            <p class="text-justify">Este elemento &lt;link&gt; deberá estar posicionado dentro de &lt;head&gt; con los atributos definidos para conseguir una adecuada carga de los estilos.</p>
                                                            <p class="text-justify">Un documento HTML podrá contener tantas hojas de estilos como sean necesarias.</p>
                                                            <p class="justify"><strong>Incrustar un estilo dentro de un documento HTML.</strong></p>
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left px-5 py-2 m-3">
                                                                <p>&lt;style type=“text/css”&gt;</p>
                                                                <p class="pl-3">body {</p>
                                                                <p class="pl-5">backgroud: #09F; color=#FFF; …</p>
                                                                <p class="pl-3">}</p>
                                                                <p>&lt;/style&gt;</p>
                                                            </div>
                                                            <p>Este elemento &lt;style&gt; deberá estar posicionado dentro de &lt;head&gt; pudiéndose incluir tantos estilos como sean necesarios.</p>

                                                            <p>Igualmente se puede incrustar un estilo dentro de casi cualquier etiqueta HTML.</p>
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left px-5 py-2 m-3">
                                                                <p>&lt;body style=“backgroud: #09F; color=#FFF; …”&gt;</p>
                                                            </div>
                                                            <p>Incrustar los estilos dentro de un HTML, implica que estos serán exclusivos del documento en el que se encuentre.</p>


                                                            <p class="justify"><strong>Importar una hoja de estilo desde un documento HTML.</strong></p>
                                                            <p>Se utiliza la directiva @import y solo puede utilizarse dentro de una etiqueta &lt;style&gt; en la sección del &lt;head&gt;</p>
                                                            <div class="text-justify bg-light border border-secondary shadow-sm text-left px-5 py-2 m-3">
                                                                <p>&lt;style type=“text/css”&gt;</p>
                                                                <p class="pl-3">@import url (‘/css/externo.css’);</p>
                                                                <p class="pl-3">body {</p>
                                                                <p class="pl-5">backgroud: #09F; color=#FFF; …</p>
                                                                <p class="pl-3">}</p>
                                                                <p>&lt;/style&gt;</p>
                                                            </div>
                                                            <p class="justify"><strong>Importar una hoja de estilo, a través de un archivo con estilos.</strong></p>

                                                            <p class="justify"><strong>Utilización y optimización de los tipos de estilos.</strong></p>
                                                            <p class="justify">Abreviar valores de propiedades con selector común.</p>
                                                            <p class="justify">La utilización de @import aumenta el tiempo de carga.</p>
                                                            <p class="justify">Agrupar estilos similares para evitar repeticiones innecesarias.</p>
                                                            <p class="justify">Omitir ceros y unidades de medidas innecesarias.</p>
                                                            <p class="justify">Eliminar clases e identificadores para que no se utilicen.</p>
                                                            <p class="justify">No especificar los valores por defecto de una propiedad.</p>
                                                            <p class="justify">Comprimir archivos CSS.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1214" role="button">Selectores y reglas de estilo.</a>
                                                    <div class="collapse" id="U1214">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Estructura de los estilos.</strong></p>
                                                            <p class="justify">La estructura de una hoja de estilos es muy simple. Irá declarada de arriba abajo y se compondrá de los siguientes:</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">La regla @charset en la primera línea del documento.</li>
                                                                <li class="justify pl-3">Las directivas @import si es que va a contener alguna.</li>
                                                                <li class="justify pl-3">Las distintas reglas CSS, declaradas una a una. Se recomienda agruparlas por secciones de la página.(comentarios).</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Sintaxis básica de estilos.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13031a.png" class="img-responsive d-block w-75 my-3 mx-auto p-3 shadow" alt="Sintaxis básica de estilos." title="Sintaxis básica de estilos.">
                                                            <p class="justify"><strong>Selectores.</strong></p>
                                                            <p class="justify pl-3">Los selectores son los encargados de seleccionar los elementos dentro de una página web para aplicarle las declaraciones de estilo que contenga la regla.</p>
                                                            <p class="justify pl-3">En CSS existen tipos de selectores diferentes que permiten seleccionar un elemento individual o un conjunto de elementos de forma muy precisa.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Selector universal</li>
                                                                <p class="justify pl-3">El selector universal está representado con un asterisco "*" y hace referencia a cualquier elemento de la página.</p>
                                                                <li class="justify pl-3">Selectores de tipos o de etiquetas.</li>
                                                                <p class="justify pl-3">Este selector seleccionará todos los elementos de la página HTML cuyo nombre de la etiqueta coincida con el valor del selector.</p>
                                                                <li class="justify pl-3">Selectores clases.</li>
                                                                <p class="justify pl-3">Para utilizar estos selectores es necesario haber definido previamente el atributo identificativo "class" a los diferentes elementos HTML.</p>
                                                                <p class="justify pl-3">El valor del atributo "class" puede repetirse en varios elementos HTML que vayan a compartir una serie de propiedades.</p>
                                                                <p class="justify pl-3">Se puede restingir el uso de las clases a una etiqueta determinada.</p>
                                                                <li class="justify pl-3">Selectores de ID.</li>
                                                                <p class="justify pl-3">El selector de ID es muy parecido al selector de clase. El atributo ID de un elemento se debe declarar previamente en el documento HTML, mediante el atributo "id".</p>
                                                                <p class="justify pl-3">El signo reservado en CSS para referirse al atributo "id" es el caracter "#".</p>
                                                                <p class="justify pl-3">Las etiquetas ID son únicas en un documento HTML.</p>
                                                                <li class="justify pl-3">Selector descendente.</li>
                                                                <p class="justify pl-3">Este método se utiliza para seleccionar un elemento que se encuentra dentro de otro (se encuentra dentro de las etiquetas de apertura y cierre de otro elementi).</p>
                                                                <li class="justify pl-3">Selectores de hijo.</li>
                                                                <p class="justify pl-3">Estos selectores se refieren a los "hijos directos" (descendiente directo del elemento) de los elementos y en CSS se indica mediante el signo de "&gt;".</p>
                                                                <li class="justify pl-3">Selectores adyacente.</li>
                                                                <p class="justify pl-3">Si dos elementos son "hermanos" y están inmediatamente uno junto a otro, se utiliza el selector adyacente, el cual se representa en CSS con el símbolo "+". </p>
                                                                <li class="justify pl-3">Selectores atributos.</li>
                                                                <p class="justify pl-3">Estos selectores permiten identificar elementos HTML según los atributos que tengan declarados, o incluso al valor definido de alguno de los atributos de una etiqueta.</p>
                                                                <ul class="pl-3">
                                                                    <li class="justify pl-3">[atributo].</li>
                                                                    <li class="justify pl-3">[atributo=valor].</li>
                                                                    <li class="justify pl-3">[atributo~=valor].
                                                                    <li class="justify pl-3">[atributo|=valor].(comentarios).</li>
                                                                </ul><br />
                                                                <li class="justify pl-3">Combinación de selectores.
                                                                    <p class="justify pl-3">Todos los selectores que se han mencionado se pueden combinar unos con otros para acceder de forma explícita a un elemento que cumpla una serie de condiciones, o bien, que tenga una serie de atributos definidos.</p>
                                                                </li>
                                                            </ul>
                                                            <p class="justify pl-3">Pseudoselectores.</p>
                                                            <p class="justify pl-3">CSS da la posibilidad de cambiar el estilo de un elemento según el estado que se encuentre, consiguiendo diseños dinámicos y funcionales: Pseudoclases y pseudoelementos.</p>
                                                            <p class="justify"><strong>Utilización de clases y pseudoclases.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">:first-child.
                                                                    <p class="justify pl-3">Selecciona el primer elemento hijo de un elemento concreto, o de cualquier elemento, sea cual sea su etiqueta.</p>
                                                                </li>
                                                                <li class="justify pl-3">Las pseudoclases :link y :visited.
                                                                    <p class="justify pl-3">Permite distinguir entre un enlace y un enlace visitado.</p>
                                                                </li>
                                                                <li class="justify pl-3">Las pseudoclases :hover, :active y :focus.
                                                                    <p class="justify pl-3">:hover se encarga de dar propiedades a un elemento en el momento en que el usuario ponga el ratón sobre él.</p>
                                                                    <p class="justify pl-3">:active se encarga de dar propiedades a un elemento en el momento en que el usuario pinche sobre él.</p>
                                                                    <p class="justify pl-3">:focus se utiliza para especificar cuando un elemento de una página tiene el foco.</p>
                                                                </li>
                                                                <li class="justify pl-3">Pseudoclase :lang.
                                                                    <p class="justify pl-3">En la creación de sitios web que pretenden ser visitados en muchas partes del mundo es muy frecuente proporcionar la maquetación en varios idiomas para la visualización en distintos paises.</p>
                                                                </li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Utilización de elementos y pseudoelementos.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Los pseudoelementos :first-line y :first-letter
                                                                    <p class="justify pl-3">:first-line permite modificar el aspecto de la primera línea de texto.</p>
                                                                    <p class="justify pl-3">:first-letter se utiliza para seleccionar la primera letra de la primera línea de un elemento.</p>
                                                                </li>
                                                                <li class="justify pl-3">Los pseudoelementos :before y :after
                                                                    <p class="justify pl-3">Estos selectores son uy utilizados para hacer sitios web accesibles, ya que se pueden añadir contenido informativo antes y después de uno o varios elementos, así como indicar el inicio y el fin.</p>
                                                                    <p class="justify pl-3">Es necesario combinar estos pseudoelementos con la propiedad "content".</p>
                                                                </li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Tabla de selectores.</strong></p>
                                                            <table style="width:100%; margin-left:30px">
                                                                <tr>
                                                                    <td>etiqueta</td>
                                                                    <td>[atributo=valor]</td>
                                                                    <td>:focus</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>etiqueta,etiqueta</td>
                                                                    <td>[atributo~=valor]</td>
                                                                    <td>:lang[lenguaje]</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>.class</td>
                                                                    <td>[atributo|=valor]</td>
                                                                    <td>:first-line</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#id</td>
                                                                    <td>:first-child</td>
                                                                    <td>:first-letter</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>elemento elemento</td>
                                                                    <td>:link</td>
                                                                    <td>:before</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>etiqelemento>elemento</td>
                                                                    <td>:visited</td>
                                                                    <td>:after</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>elemento+elemento</td>
                                                                    <td>:hover</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>[atributo]</td>
                                                                    <td>:active</td>
                                                                    <td></td>
                                                                </tr>
                                                            </table>
                                                            <br />

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1215" role="button">Atributos de estilo para fuentes, color y fondo, texto y bloques (párrafos).</a>
                                                    <div class="collapse" id="U1215">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de los atributos de estilo.</strong></p>
                                                            <p class="justify pl-3">Todos los atributos deberán llevar un valor definido, y se indicará en función del tipo de propiedad al que vayan a definir.</p>
                                                            <p class="justify pl-3">Para un uso óptimo de los atributos de estilo, es aconsejable agruparlos según la propiedad que estén definiendo.</p>
                                                            <p class="justify"><strong>Utilización de los atributos de estilo.</strong></p>
                                                            <code class="d-block mx-auto w-75 shadow-sm p-3">Div {<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Background-color: #cf6;<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Background-image: url(../images/fondo.png);<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Background-repeat: no repeat;<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Background-position: center;<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                                                                Div {<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: #CF6 url(../images/fondo.png) no repeat center;<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font: italic bold 1 em Arial, Helvetica, sans-serif<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                                                            </code>
                                                            <p class="justify pl-3">A esta forma de agrupar varias propiedades dentro de una sola se le denomina shortland y hará el archivo mucho más ligero.</p>
                                                            <p class="justify"><strong>Unidades de medida.</strong></p>
                                                            <p class="justify">Medidas relativas.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">em relativa según el tamaño de letra empleado (1em anchura de letra "M").</li>
                                                                <li class="justify pl-3">ex relativa según el tamaño de letra empleado (1ex altura de letra "x").</li>
                                                                <li class="justify pl-3">Porcentajes referidos al tamaño del elemento padre.</li><br/>
                                                            </ul>

                                                            <p class="justify">Medidas absolutas.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">px pixel (cantidad de puntos en los que se divide el monitor).</li>
                                                                <li class="justify pl-3">in pulgadas (2.54cm).</li>
                                                                <li class="justify pl-3">cm centímetro.</li>
                                                                <li class="justify pl-3">mm milímetro.</li>
                                                                <li class="justify pl-3">pt punto (0.014in).</li>
                                                                <li class="justify pl-3">pc picas, (12 puntos).</li></br>
                                                            </ul>
                                                            <p class="justify"><strong>Propiedades para fuentes.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Font : style variant weight size family</li>
                                                                <li class="justify pl-3">font-family : nombre de la familia tipográfica</li>
                                                                <li class="justify pl-3">font-size : tamaño de la fuente el texto</li>
                                                                <li class="justify pl-3">font-style: estilo de la fuente el texto</li>
                                                                <li class="justify pl-3">font-variant : estilo alternativo</li>
                                                                <li class="justify pl-3">font-weight : anchura de la fuente el texto</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Propiedades para color y fondo.</strong></p>
                                                            <p class="justify pl-3">La propiedad “color” establece el color de la fuente de un elemento.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">P{ color : #FC3}</li>
                                                                <li class="justify pl-3">P{ color : rgb(255, 204, 51)}</li>
                                                                <li class="justify pl-3">P{ color : rgb(100%, 80%, 20%)}</li>
                                                            </ul><br />
                                                            <p class="justify pl-3">La propiedad “background” establece el fondo de la fuente de un elemento..</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">background</li>
                                                                <li class="justify pl-3"> background-attachment</li>
                                                                <li class="justify pl-3">background-color</li>
                                                                <li class="justify pl-3">background-image</li>
                                                                <li class="justify pl-3">background-position</li>
                                                                <li class="justify pl-3">background-repeat</li>

                                                            </ul><br />
                                                            <p class="justify pl-3">Degradados.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">div {<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: #5961ba:<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: linear-gradient(top, #5961ba 0%, #60abf8 50%, #5961ba 100%)<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
                                                            </code>

                                                            <p class="justify"><strong>Propiedades para texto y bloques (párrafos).</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Color </li>
                                                                <li class="justify pl-3">Direction</li>
                                                                <li class="justify pl-3">Letter-spacing</li>
                                                                <li class="justify pl-3">Line-height</li>
                                                                <li class="justify pl-3">Text-align</li>
                                                                <li class="justify pl-3">Text-decoration</li>
                                                                <li class="justify pl-3">Text-indent</li>
                                                                <li class="justify pl-3">Text-transform</li>
                                                                <li class="justify pl-3">Vertical-align</li>
                                                                <li class="justify pl-3">White-scape</li>
                                                                <li class="justify pl-3">Word-spacing</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1216" role="button">Atributos de estilo para contenedores, imágenes, listas, tablas y formularios.</a>
                                                    <div class="collapse" id="U1216">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Propiedades de los contenedores.</strong></p>
                                                            <img class="w-100" src="../recursos/img/cursos/ifcd0110/uf1216.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Propiedades de los contenedores" title="Propiedades de los contenedores.">
                                                            <p class="justify"><strong>Propiedades de las imágenes.</strong></p>
                                                            <p class="justify pl-3">A la etiqueta <img> se le pueden aplicar width y height directamente, sin necesidad de utilizar el atributo style.</p>

                                                            <p class="justify pl-3">Cuando una imagen es utilizada como enlace</p>
                                                            <p class="justify pl-5 text-primary">img {border: none}</p>

                                                            <p class="justify"><strong>Propiedades de las listas.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">List-style </li>
                                                                <li class="justify pl-3">List-style-image</li>
                                                                <li class="justify pl-3">List-style-position</li>
                                                                <li class="justify pl-3">List-style-type</li>
                                                            </ul><br>
                                                            <p class="justify"><strong>Propiedades de las tablas.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3"> Border-collapse</li>
                                                                <li class="justify pl-3"> Border-spacing</li>
                                                                <li class="justify pl-3"> Caption-side</li>
                                                                <li class="justify pl-3"> Empty-cells</li>
                                                                <li class="justify pl-3"> Table-layout</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1217" role="button">Posicionamiento de elementos.</a>
                                                    <div class="collapse" id="U1217">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Propiedad position.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3"> Static: por defecto, flujo normal</li>
                                                                <li class="justify pl-3"> Relative: en relación a su posición static </li>
                                                                <li class="justify pl-3"> Absolute: mediante “left”,”right”,”top”,”bottom”</li>
                                                                <li class="justify pl-3"> Fixed: como absolute, pero bloqueando desplazamiento.</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Propiedad display.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">display
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">block</li>
                                                                        <li class="justify pl-3">inline</li>
                                                                        <li class="justify pl-3">none</li>
                                                                    </ul>
                                                                </li>
                                                                <li class="justify pl-3">visibility
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">visible</li>
                                                                        <li class="justify pl-3">hidden</li>
                                                                        <li class="justify pl-3">collapse</li>
                                                                    </ul>
                                                                </li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Propiedades top,left,right y bottom.</strong></p>
                                                            <p class="justify pl-3">Propiedades necesarias para indicar dónde se sitúan los elementos posicionados so no queremos que sigan el flujo normal del documento HTML.</p>

                                                            <p class="justify"><strong>Posicionamiento flotante.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">float
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">left</li>
                                                                        <li class="justify pl-3">right</li>
                                                                        <li class="justify pl-3">inherit</li>
                                                                    </ul>
                                                                </li>
                                                                <li class="justify pl-3">clear
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">left</li>
                                                                        <li class="justify pl-3">right</li>
                                                                        <li class="justify pl-3">both</li>
                                                                    </ul>
                                                                </li>
                                                                <li class="justify pl-3">overflow
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">left</li>
                                                                        <li class="justify pl-3">right</li>
                                                                        <li class="justify pl-3">auto</li>
                                                                    </ul>
                                                                </li>
                                                            </ul> <br />
                                                            <p class="justify"><strong>Propiedad z-index.</strong></p>
                                                            <p class="justify pl-3">La propiedad “z-index” sirve para organizar el orden de solapamiento de las distintas capas que forman cada elemento.</p>
                                                            <p class="justify"><strong>Posicionamiento relativo.</strong></p>
                                                            <p class="justify pl-3">Los valores que se establecen para las propiedades “top”/”bottom” y ”right” / ”left” especificarán la distancia que se desplazará un elemento respecto al posicionamiento normal que debería tener.</p>

                                                            <p class="justify"><strong>Posicionamiento absoluto.</strong></p>
                                                            <p class="justify pl-3">Los valores que se establecen para las propiedades “top”,”right”,”bottom” y ”left” especificarán la distancia desde el borde de un elemento hasta el borde del elemento que lo contiene.</p>

                                                            <p class="justify"><strong>Posicionamiento fijo.</strong></p>
                                                            <p class="justify pl-3">La diferencia con la posición absoluta es que estos son siempre relativos al contenedor inicial, en vez de ser relativos al elemento que los contiene.

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1218" role="button">Jerarquia de las reglas CSS.</a>
                                                    <div class="collapse" id="U1218">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Herencia.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Si un valor está definido en una regla, se utiliza este valor.</li>
                                                                <li class="justify pl-3">Si no está especificado, y la propiedad puede ser heredada, se usa el valor computado de su padre.</li>
                                                                <li class="justify pl-3">De otro modo, se utilizará el valor por defecto de la propiedad.</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Cascada.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Se listan todas las reglas que se asignan a cada elemento.</li>
                                                                <li class="justify pl-3">Se clasifican por importancia.</li>
                                                                <li class="justify pl-3">Después de separar las reglas con importancia las restantes se ordenarán por especificidad</li>
                                                                <li class="justify pl-3">A igual especificidad, las últimas reglas declaradas tendrán más prioridad</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1219" role="button">Creación de ficheros de estilo.</a>
                                                    <div class="collapse" id="U1219">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Definición de los ficheros de estilo.</strong></p>
                                                            <p class="justify pl-3">Es muy aconsejable agrupar estilos.</p>
                                                            <p class="justify pl-3">La regla @charset en la primera línea del documento.</p>
                                                            <p class="justify pl-3">Ordenar según secciones de html.</p>
                                                            <p class="justify pl-3">Tabular las reglas para una mayor claridad.</p>

                                                            <p class="justify"><strong>Creación de ficheros de estilo genéricos.</strong></p>
                                                            <p class="justify pl-3"> Es muy frecuente que en un sitio web se vayan a utilizar varios estilos que sean genéricos para todo el sitio, y otros que, sin embargo, sólo se aplicarán a determinadas páginas del sitio.</p>

                                                            <p class="justify"><strong>Adaptación de los ficheros de estilo para distintas páginas web.</strong></p>
                                                            <p class="justify pl-3">Consultar el tipo de medio.</p>
                                                            <p class="justify pl-3">Diseño flexible basado en una cuadrícula, utilizando tamaños relativos.</p>
                                                            <p class="justify pl-3">Contenidos e imágenes flexibles, aplicando cambios a escala según la resolución detectada.</p>


                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U121A" role="button">CSS3.</a>
                                                    <div class="collapse" id="U121A">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Selectores.</strong></p>
                                                            <p class="justify" pl-3>Tres nuevos tipos de selectores de atributos:</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">a[href^=“http://”]{ color: #303 }</li>
                                                                <li class="justify pl-3">a[href$=“.es”]{ color: #F00 }</li>
                                                                <li class="justify pl-3">a[href*=“youtube”]{ color: #06F}</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Pseudoselectores.</strong></p>
                                                            <p class="justify" pl-3>Se mantienen, modificados:
                                                                <ul class="pl-3">
                                                                    <li class="justify pl-3">::before, ::after, ::first-letter, ::first-line</li>
                                                                </ul> <br />
                                                                <p class="justify" pl-3>Nuevos selectores
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">::selection
                                                                        <li class="justify pl-3">:root</li>
                                                                        <li class="justify pl-3">:empty</li>
                                                                        <li class="justify pl-3">:enabled</li>
                                                                        <li class="justify pl-3">:disabled</li>
                                                                        <li class="justify pl-3">:checked</li>
                                                                        <li class="justify pl-3">:not()</li>
                                                                    </ul><br />
                                                                    <p class="justify" pl-3>Además:</p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">.parrafo:ntn-child(3) { color: #303}</li>
                                                                        <li class="justify pl-3">.parrafo:ntn-last-child(2) { color: #303}</li>
                                                                        <li class="justify pl-3">.parrafo:ntn-of-type(odd) { color: #303}</li>
                                                                        <li class="justify pl-3">.párrafo:ntn-last-of-type(odd) { color: #303}</li>
                                                                        <li class="justify pl-3">div>p:first-of-type { color: #303}</li>
                                                                        <li class="justify pl-3">div>p:last-of-type { color: #303}</li>
                                                                        <li class="justify pl-3">div p:only-child { color: #303}</li>
                                                                        <li class="justify pl-3">div>p:only-of-type { color: #303}</li>
                                                                    </ul> <br />

                                                                    <p class="justify"><strong>Efectos de texto.</strong></p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">Div { - webkit-column-count: 4}</li>
                                                                        <li class="justify pl-3">Div { - webkit-column-width: 20%}</li>
                                                                        <li class="justify pl-3">Div { - webkit-column-gap: 4%}</li>
                                                                        <li class="justify pl-3">Div { - webkit-column-rule: -1em solid #999}</li>
                                                                    </ul><br />
                                                                    <p class="justify"><strong>Color.</strong></p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">Div {background-color: rgba(35,50,42,.7)}</li>
                                                                        <li class="justify pl-3">Div {background-color: hsla(35,50%,42%,.7)}</li>
                                                                    </ul><br />
                                                                    <p class="justify"><strong>Propiedades de borde.</strong></p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">Div {-moz-border-radius:2em 1em .3m .3em</li>
                                                                    </ul><br />
                                                                    <p class="justify"><strong>Propiedades de fondo.</strong></p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">Background-origen</li>
                                                                        <li class="justify pl-3">Border-box
                                                                        <li class="justify pl-3">Padding-box</li>
                                                                        <li class="justify pl-3">Content-box</li>
                                                                        <li class="justify pl-3">Background-clip</li>
                                                                        <li class="justify pl-3">Border</li>
                                                                        <li class="justify pl-3">Padding</li>
                                                                        <li class="justify pl-3">content</li>
                                                                    </ul><br />
                                                                    <p class="justify"><strong>Sombras.</strong></p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3"> Div {box-shadow: distanciaX distanciaY difuminado color}</li>

                                                                        <li class="justify pl-3">Div { -webkit-box-shadow: .2em .4em 2em #999}</li>
                                                                    </ul><br />
                                                                    <p class="justify"><strong>Transformaciones.</strong></p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">Div{ -webkit-transform: rotate(40deg)}
                                                                        <li class="justify pl-3">Div{ -webkit-transform: skew(9deg, 6deg)}</li>
                                                                        <li class="justify pl-3">Div{ -webkit-transform: scale(.3, .8)}</li>
                                                                        <li class="justify pl-3">Div{ -webkit-transform: translate(20%, 30%)}</li>
                                                                    </ul><br />
                                                                    <p class="justify"><strong>Transiciones y animaciones.</strong></p>
                                                                    <ul class="pl-3">
                                                                        <li class="justify pl-3">Div{ -webkit-transition-property: background-color}</li>
                                                                        <li class="justify pl-3">Div{ -webkit-transition-duration: 2s}</li>
                                                                        <li class="justify pl-3">Div{ -webkit-transition-timing-function: linear}</li>
                                                                        <li class="justify pl-3">Div{ -webkit-transition-delay: .3s}</li>
                                                                    </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 2. DISEÑO, UBICACIÓN Y OPTIMIZACIÓN DE LOS CONTENIDOS DE UNA PÁGINA WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1221" role="button">Creación de un documento funcional.</a>
                                                    <div class="collapse" id="U1221">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de los objetivos de la página web.</strong></p>
                                                            <p class="justify pl-3">Esta etapa consiste en organizar las ideas principales que sean necesarias para la finalidad de la página web, así como definir todos los objetivos que hayan sido la motivación para la creación del sitio. </p>

                                                            <p class="justify"><strong>Definición de los elementos funcionales de la página web.</strong></p>
                                                            <p class="justify pl-3">Es realmente importante que los elementos funcionales de la página estén posicionados de manera que los usuarios los vean en un primer vistazo.</p>
                                                            <p class="justify"><strong>Descripción de cada elemento.</strong></p>
                                                            <ul pl-3>
                                                                <li class="justify pl-3">Estructura de navegación</li>
                                                                <li class="justify pl-3">Logotipo</li>
                                                                <li class="justify pl-3">Imágenes</li>
                                                                <li class="justify pl-3">Contenidos</li>
                                                                <li class="justify pl-3">Cabecera</li>
                                                                <li class="justify pl-3">Gestor de contenidos</li>
                                                                <li class="justify pl-3">E_commerce</li>
                                                                <li class="justify pl-3">Búsqueda en el sitio</li>
                                                                <li class="justify pl-3">Blogs</li>
                                                                <li class="justify pl-3">Salas de chat</li>
                                                                <li class="justify pl-3">Formularios de contacto</li>
                                                                <li class="justify pl-3">Formularios de referencia</li>
                                                                <li class="justify pl-3">Boletín de inscripción</li>
                                                                <li class="justify pl-3">Secciones protegidas</li>
                                                                <li class="justify pl-3">Archivos descargables</li>
                                                                <li class="justify pl-3">Multimedia</li>
                                                                <li class="justify pl-3">Footer o Pie de página</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1222" role="button">Diseño de los contenidos.</a>
                                                    <div class="collapse" id="U1222">
                                                        <div class="card card-body text-info">
                                                            <ul pl-3>
                                                                <li class="justify">Tipos de letra</li>
                                                                <li class="justify">Justificación</li>
                                                                <li class="justify">Fondos de página, imágenes grandes y animaciones</li>
                                                                <li class="justify">Cabecera y pie de página</li>
                                                                <li class="justify">Desplazamiento de la página</li>
                                                                <li class="justify">Títulos de las páginas</li>
                                                                <li class="justify">Menú de navegación</li>
                                                                <li class="justify">Frames</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Balance</strong></p>
                                                            <ul pl-3>
                                                                <li class="justify pl-3">Simétrico</li>
                                                                <li class="justify pl-3">Asimétrico</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Contraste</strong></p>
                                                            <ul pl-3>
                                                                <li class="justify pl-3">Contraste de figura</li>
                                                                <li class="justify pl-3">Contraste de color</li>
                                                                <li class="justify pl-3">Contraste de apariencia</li>
                                                                <li class="justify pl-3">Contraste de contorno</li>
                                                                <li class="justify pl-3">Contraste de alineación</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Ritmo</strong></p>
                                                            <ul pl-3>
                                                                <li class="justify pl-3">Regular</li>
                                                                <li class="justify pl-3">Sincopado</li>
                                                                <li class="justify pl-3">No armónico</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Proximidad</strong></p>
                                                            <p class="justify pl-3">Todos los contenidos que estén relacionados entre sí deberán aparecer próximos unos de otros, de manera que formen grupos de elementos que se puedan organizar dentro de la estructura de la página.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1223" role="button">Identificación de la información a ubicar en la página web.</a>
                                                    <div class="collapse" id="U1223">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3">La manera en la que las página web presentan la información está pensada minuciosamente con la finalidad de conseguir que la navegación por el sitio resulte muy sencilla y manejable.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1224" role="button">Selección de contenidos para cada elemento de la página.</a>
                                                    <div class="collapse" id="U1224">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3">El autor de la página o responsable de contenidos, decidirá qué contenidos llevará cada una de las distintas secciones de la página, ordenándolos de forma coherente y por importancia para los usuarios.x</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1225" role="button">Utilización del documento funcional para las especificaciones del diseño.</a>
                                                    <div class="collapse" id="U1225">
                                                        <div class="card card-body text-info">
                                                            <ul pl-3>
                                                                <li class="justify pl-3">El color</li>
                                                                <li class="justify pl-3">La tipigrafía</li>
                                                                <li class="justify pl-3">Líneas</li>
                                                                <li class="justify pl-3">Texturas</li>
                                                                <li class="justify pl-3">Formas</li>
                                                                <li class="justify pl-3">Estrucrura</li>
                                                            </ul><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1226" role="button">Tipos de página para la ubicación de contenidos.</a>
                                                    <div class="collapse" id="U1226">
                                                        <div class="card card-body text-info">
                                                            <ul pl-3>
                                                                <li class="justify pl-3">Estructura jerárquica</li>
                                                                <li class="justify pl-3">Estructura lineal</li>
                                                                <li class="justify pl-3">Estructura lineal con jerarquía</li>
                                                                <li class="justify pl-3">Estructura de red</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1227" role="button">Definición de los tipos de página en base a los contenidos y funcionalidades.</a>
                                                    <div class="collapse" id="U1227">
                                                        <div class="card card-body text-info">
                                                            <ul pl-3>
                                                                <li class="justify pl-3">Páginas web transaccionales</li>
                                                                <ul pl-3>
                                                                    <li class="justify pl-3">Cesta de la compra</li>
                                                                    <li class="justify pl-3">Catálogo</li>
                                                                    <li class="justify pl-3">Menú lateral de categorías</li>
                                                                    <li class="justify pl-3">Comprobar el estado del pedido</li>
                                                                    <li class="justify pl-3">Menú de opciones del usuario/</li>
                                                                </ul>
                                                                <li class="justify pl-3">Paginas web orientadas al servicio</li>
                                                                <li class="justify pl-3">Páginas web orientadas a la construcción de una marca</li>
                                                                <li class="justify pl-3">Paginas web de contenido</li>
                                                                <li class="justify pl-3">Comunidades, foros, redes sociales o blogs</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1228" role="button">Selección de los tipos de página para la página web.</a>
                                                    <div class="collapse" id="U1228">
                                                        <div class="card card-body text-info">
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Paginas web orientadas al servicio</li>
                                                                <li class="justify pl-3">Páginas web orientadas a la construcción de una marca</li>
                                                                <li class="justify pl-3">Paginas web de contenido</li>
                                                                <li class="justify pl-3">Comunidades, foros, redes sociales o blogs</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1229" role="button">Utilización del documento funcional para las especificaciones del tipo de página.</a>
                                                    <div class="collapse" id="U1229">
                                                        <div class="card card-body text-info">
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Colocar los elementos de navegación local e insertar la página dentro de la estructura jerárquica del sitio.</li>
                                                                <li class="justify pl-3">Definir el marco de diseño. Proporcionar a los usuarios rapidez y facilidad a la hora de acceder a los contenidos.</li>
                                                                <li class="justify pl-3">Coherencia visual flexible que se adapte a las necesidades que pueda tener cada contenido del sitio</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U122A" role="button">Especificaciones de navegación.</a>
                                                    <div class="collapse" id="U122A">
                                                        <div class="card card-body text-info">
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Integrados</li>
                                                                <ul class="pl-3">
                                                                    <li class="justify pl-3">Globales</li>
                                                                    <li class="justify pl-3">Locales</li>
                                                                    <li class="justify pl-3">Contextuales</li>
                                                                    <li class="justify pl-3">De cortesía</li>
                                                                </ul>
                                                                <li class="justify pl-3">Suplementarios</li>
                                                                <ul class="pl-3">
                                                                    <li class="justify pl-3">Mapas</li>
                                                                    <li class="justify pl-3">Indices</li>
                                                                </ul>
                                                                <li class="justify pl-3">Tipos</li>
                                                                <ul class="pl-3">
                                                                    <li class="justify pl-3">Sistema jerárquico</li>
                                                                    <li class="justify pl-3">Sistema global</li>
                                                                    <li class="justify pl-3">Sismas globales</li>
                                                                    <li class="justify pl-3">Sistema específico</li>
                                                                </ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U122B" role="button">Creación de un mapa de navegación de páginas.</a>
                                                    <div class="collapse" id="U122B">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3">El usuario espera encontrar una representación gráfica que le permita comprender toda la estructura del sitio.</p>
                                                            <p class="justify pl-3">El mapa de navegación debe ser lo suficientemente explicativo como para ofrecer un trayecto directo de manera explícita.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U122C" role="button">Utilización del documento funcional para integrar el mapa de navegación.</a>
                                                    <div class="collapse" id="U122C">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3">El mapa de navegación se convierte en una herramienta esencial para el desarrollo de cualquier proyecto web, sirviendo como punto de partida para elegir la información que se ha de ubicar en cada categoría o sección del sitio.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U122D" role="button">Elementos utilizados para la navegación.</a>
                                                    <div class="collapse" id="U122D">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Definición de los elementos utilizados para navegar.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Breadcrumbs</li>
                                                                <li class="justify pl-3">Inicio adelante y atrás</li>
                                                                <li class="justify pl-3">Mapa del sitio web</li>
                                                                <li class="justify pl-3">Buscar</li>
                                                                <li class="justify pl-3">Pie de página</li>
                                                                <li class="justify pl-3">Contactar</li>
                                                                <li class="justify pl-3">Menú de navegación</li>
                                                                <li class="justify pl-3">Barra corporativa</li>
                                                                <li class="justify pl-3">Barra de menús</li>
                                                            </ul>
                                                            <p class="justify">Utilización del documento funcional para especificar los elementos de navegación.</p>
                                                            <p class="justify pl-3">Es frecuente que esta parte del documento funcional sea la más extensa y difícil de desarrollar, ya que habrá que diseccionar cada uno de los elementos de navegación y especificar cualquier detalle, por mínimo que sea.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U122E" role="button">Elaboración de una guía de usuario.</a>
                                                    <div class="collapse" id="U122E">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3">Una guía de usuario es un documento técnico en el que se describe detalladamente cómo se utiliza un sitio web en particular</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Indice del contenido de la guía de usuario</li>
                                                                <li class="justify pl-3">Análisis de la estructura de la interfaz</li>
                                                                <li class="justify pl-3">Análisis de cada uno de los elementos funcionales de la interfaz</li>
                                                                <li class="justify pl-3">Explicación de todos los procedimientos disponibles en el sitio</li>
                                                                <li class="justify pl-3">Resolución de posibles errores de visualización o funcionamiento</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD FORMATIVA 3. UF1304 ELABORACIÓN DE PLANTILLAS Y FORMULARIOS
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 1. FORMULARIOS EN LA CONSTRUCCIÓN DE PÁGINAS WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1311" role="button">Características.</a>
                                                    <div class="collapse" id="U1311">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>La interactividad de las páginas web.</strong></p>
                                                            <p class="justify">Páginas web estáticas : contenidos fijos durante largos períodos de tiempo.</p>
                                                            <p class="justify">Páginas web dinámicas: contenidos actualizados de forma continuada y que permiten interactividad con el usuario.</p>
                                                            <p class="justify">Gestor: encargado de contenidos de la página web</p>
                                                            <p class="justify">Usuario: interactúa con la página web</p>

                                                            <p class="justify"><strong>La variabilidad de los datos de la página web.</strong></p>
                                                            <p class="justify">SGBD :Sistemas de Gestión de Bases de datos (MYSQL)</p>
                                                            <p class="justify">CMS :(Content Manager System) (joomla; Wordpress; Drupal)</p>
                                                            <p class="justify">Sistema de gestor de contenidos.</p>
                                                            <p class="justify">front: área de visualización de la información</p>
                                                            <p class="justify">back: área de actualización de la información</p>

                                                            <p class="justify"><strong>El envío de información a servidores.</strong></p>
                                                            <p class="justify">Cómo intervienen los formularios en el envío de información</p>

                                                            <p class="justify">.- Método Get : envía la información del formulario, a través de la URL.</p>
                                                            <p class="justify">.- Método Post : envía las variables de forma invisible al usuario, no se muestra en la URL.</p>
                                                            <p class="justify">Cómo funcionan los formularios en el navegador</p>

                                                            <p class="justify">.- El navegador carga la página web : controles que permiten la entrada de diversos tipos de datos</p>
                                                            <p class="justify">.- Introducción de los datos: rellenamos los controles de datos</p>
                                                            <p class="justify">.- Envío de formulario: botón de enviar para que empaquete los datos del formulario y los envíe al servidor web</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1312" role="button">Elementos y atributos de formulario.</a>
                                                    <div class="collapse" id="U1312">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción y definición de los elementos de unformulario.</strong></p>
                                                            <p class="justify">&lt;input type= ...&gt;</p>
                                                            <p class="justify">“checkbox” : Permite seleccionar o no entre varias opciones.</p>
                                                            <p class="justify">“radio”: (radiobutton) Seleccionar sólo una opción entre varias.</p>
                                                            <p class="justify">“submit”: Envío de datos al servidor para ser procesados.</p>
                                                            <p class="justify">“reset” : Limpiar el formulario, devolviendo el estado original.</p>
                                                            <p class="justify">“file”: Anexar documentos a la información enviada.</p>
                                                            <p class="justify">“hidden”: Envío de información oculta al usuario.</p>
                                                            <p class="justify">“image”: Imagen como botón para enviar información.</p>
                                                            <p class="justify">“button”: Botón genérico para ejecutar otro tipo de acción.</p>

                                                            <p class="justify">&lt;label&gt;&lt;input type="checkbox" id="cbox1" value= "first_checkbox"&gt; Este es mi primer checkbox &lt;/label&gt;&lt;br&gt;</p>
                                                            <p class="justify">&lt;input type="checkbox" id="cbox2" value= "second_checkbox"&gt;</p>
                                                            <p class="justify">&lt;label for="cbox2"&gt;Este es mi segundo checkbox&lt;/label&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041a.png" class="img-responsive w-50 my-3 mx-autop-3 shadow" alt="checkbox" title="checkbox">

                                                            <p class="justify">&lt;input type="radio" name="gender" value="male" checked>Male&lt;br&gt;</p>
                                                            <p class="justify">&lt;input type="radio" name="gender" value="female"&gt; Female&lt;br&gt;</p>
                                                            <p class="justify">&lt;input type="radio" name="gender" value="other"&gt; Other&lt;br&gt;&lt;br&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041b.png" class="img-responsive w-25 my-3 mx-auto p-3 shadow" alt="Radio" title="Radio">

                                                            <p class="justify">&lt;input type="submit" value=“Enviar"&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041c.png" class="img-responsive w-25 my-3 mx-auto p-3 shadow" alt="Submit" title="Submit" >

                                                            <p class="justify">&lt;input type="reset" value=“Reset"&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041d.png" class="img-responsive w-25 my-3 mx-auto p-3 shadow" alt="Reset" title="Reset">

                                                            <p class="justify">&lt;input type="file" name="pic" accept="image/*"&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041e.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="File" title="File">

                                                            <p class="justify">&lt;input type="hidden" name="country" value="Norway"&gt;</p>
                                                            <p class="justify">&lt;p&gt;Notice that the hidden field above is not shown to a user.&lt;/p&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041f.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow"  alt="Hidden" title="Hidden">

                                                            <p class="justify">&lt;input type="image" src="img_submit.gif" alt="Submit" width="48" height="48"&gt;&lt;/p&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041g.png" class="img-responsive w-25 my-3 mx-auto p-3 shadow" alt="Submit" title="Submit">

                                                            <p class="justify">&lt;input type="button" onclick="alert('Hello World!')"  value="Click Me!"&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041h.png" class="img-responsive w-25 my-3 mx-auto p-3 shadow" alt="Button" title="Button">

                                                            <p class="justify"><strong>Utilización de campos y textos</strong></p>
                                                            <p class="justify">&lt;input type= ...&gt;</p>
                                                            <p class="justify">“text” : Permite introducir texto</p>
                                                            <p class="justify">“password”: Permite introducir una contraseña (asteriscos)</p>
                                                            <p class="justify">“textarea”: Permite introducir más de una línea (rows; cols)</p>

                                                            <p class="justify">First name:&lt;br&gt;&lt;input type="text" name="firstname"&gt;&lt;br&gt;</p>
                                                            <p class="justify">Last name:&lt;br&gt;&lt;input type="text" name="lastname"&gt;</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041i.png" class="img-responsive w-50 my-3 mx-auto p-3 shadow"  alt="Text"  title="Text">

                                                            <p class="justify">User password:&lt;br&gt;&lt;input type="password" name="psw"&gt; </p>
                                                                <img src="../recursos/img/cursos/ifcd0110/uf13041j.png" class="img-responsive w-50 my-3 mx-auto p-3 shadow"  alt="Password" title="Password">

                                                            <p class="justify">&lt;textarea name="comments" cols=40 rows=6&gt; &lt;/textarea&gt; </p>
                                                                <img src="../recursos/img/cursos/ifcd0110/uf13041k.png" class="img-responsive w-50 my-3 mx-auto p-3 shadow" alt="Textarea" title="Textarea">

                                                            <p class="justify"><strong>Etiquetas de los formularios</strong></p>
                                                            <p class="justify">&lt;fieldset&gt;&lt;/fieldset&gt;Se utiliza para agrupar los elementos o controles de un formulario.</p>
                                                            <p class="justify">&lt;legend align ...&gt;&lt;/legend&gt; Se utilizar para nombrar o etiquetar los grupos creados a partir de la etiqueta fieldset.</p>
                                                            <p class="justify">&lt;label for ...&gt;&lt;/label&gt; Texto que va asociado a un elemento de formulario.</p>
                                                            <p class="justify">&lt;input type .../&gt; Entrada de datos al formulario en función de type.</p>
                                                            <p class="justify">&lt;form&gt; &lt;/form&gt; Etiqueta fundamental para crear un formulario</p>

                                                            <p class="justify"><strong>Tamaños, columnas y filas de los formularios.
                                                                </strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041l.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Fieldset" title="Fieldset">

                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041m.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow"  alt="Legend" title="Legend">
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041n.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="label" title="label">

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1313" role="button">Controles de formulario.</a>
                                                    <div class="collapse" id="U1313">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de los controles de los formularios.</strong></p>
                                                            <p class="justify">Radiobutton (type=”radio”)</p>

                                                            <p class="justify">Name nombre que identifica el controlador del grupo</p>
                                                            <p class="justify">Value asigna una valor a cada componente del grupo</p>
                                                            <p class="justify">Checked selecciona por defecto un componente del grupo</p>
                                                            <p class="justify">Disabled desactiva el elemento indicado. No podrá ser marcado.</p>
                                                            <p class="justify">Tabindex indica el orden del tabulador dentro del grupo</p>

                                                            <p class="justify">Ficheros adjuntos (type=”file”)</p>
                                                            <p class="justify">Title Texto a mostrar a modo de tooltip</p>
                                                            <p class="justify">Disabled desactiva el botón,impidiendo a selección del archivo.</p>
                                                            <p class="justify">Accept indica el tipo de archivo que se admite para el envío</p>
                                                            <p class="justify">Size anchura de la caja de texto asociada</p>

                                                            <p class="justify">Campos ocultos (type=”hidden”)</p>
                                                            <p class="justify">value Asigna un valor de campo</p>

                                                            <p class="justify"><strong>Utilización de botones de acción.</strong></p>
                                                            <p class="justify">Botón de envío</p>

                                                            <p class="justify">value: texto que aparecerá en el botón</p>
                                                            <p class="justify">disabled desactiva el botón</p>
                                                            <p class="justify">tabindex orden del tabulador dentro del formulario</p>

                                                            <p class="justify">Botón de reseteo</p>
                                                            <p class="justify">Value: texto que aparecerá en el botón</p>
                                                            <p class="justify">Disabled desactiva el botón</p>
                                                            <p class="justify">Tabindex orden del tabulador dentro del formulario</p>

                                                            <p class="justify">Botón de imagen</p>
                                                            <p class="justify">Src: ruta al fichero de la imagen</p>
                                                            <p class="justify">Width anchura del botón de la imagen</p>
                                                            <p class="justify">height altura del botón de la imagen</p>
                                                            <p class="justify">align=”left/middle/right/bottom/baseline”</p>
                                                            <p class="justify">Disabled desactiva el botón, impidiendo que sea pulsado</p>
                                                            <p class="justify">Tabindex Orden del tabulador dentro del formulario</p>
                                                            <p class="justify">Usemap Mapa de imágenes para la entrada de datos</p>

                                                            <p class="justify">Botón</p>
                                                            <p class="justify">Value: texto que aparecerá en el botón</p>
                                                            <p class="justify">Disabled desactiva el botón</p>
                                                            <p class="justify">Tabindex orden del tabulador dentro del formulario</p>

                                                            <p class="justify"><strong>Utilización de listas desplegables.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13041o.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Listas desplegables" title="Listas desplegables">

                                                            <p class="justify"><strong>Utilización de casillas de verificación.</strong></p>
                                                            <p class="justify">&lt;type=”checkbox”&gt;</p>

                                                            <p class="justify">Name nombre que identifica el controlador del formulario</p>
                                                            <p class="justify">Value asigna una valor a cada elemento del grupo</p>
                                                            <p class="justify">Checked selecciona por defecto un componente del grupo</p>
                                                            <p class="justify">Disabled desactiva el elemento indicado</p>
                                                            <p class="justify">Tabindex Orden de tabulador dentro del grupo</p>


                                                            <p class="justify"><strong>Utilización de campos de texto.</strong></p>
                                                            <p class="justify">Caja de texto (Type =”text”)</p>

                                                            <p class="justify">Size establece el tamaño de la caja de texto.</p>
                                                            <p class="justify">Maxlenght Maximo número de caracteres a escribir</p>
                                                            <p class="justify">Value Texto que aparecerá inicialmente en la caja de texto</p>
                                                            <p class="justify">Disabled desactiva el la caja de texto, no se podrá escribir.</p>
                                                            <p class="justify">Readonly el texto no puede ser modificado por el usuario</p>
                                                            <p class="justify">Tabindex orden de tabulación dentro del formulario</p>

                                                            <p class="justify">Caja de contraseña (Type =”password”)</p>

                                                            <p class="justify">Size establece el tamaño de la caja de texto.</p>
                                                            <p class="justify">Maxlenght Maximo número de caracteres a escribir</p>
                                                            <p class="justify">Value Texto que aparecerá inicialmente en la caja de texto</p>
                                                            <p class="justify">Disabled desactiva el la caja de texto, no se podrá escribir.</p>
                                                            <p class="justify">Readonly el texto no puede ser modificado por el usuario</p>
                                                            <p class="justify">Tabindex orden de tabulación dentro del formulario</p>

                                                            <p class="justify">&lt;textarea&gt;&lt;/textarea&gt;</p>

                                                            <p class="justify">Rows numero de filas</p>
                                                            <p class="justify">Cols número de columnas</p>
                                                            <p class="justify">Wrap Parámetros de ajuste</p>
                                                            <p class="justify">Off valor por defecto</p>
                                                            <p class="justify">Soft envía el texto como cadena continua</p>
                                                            <p class="justify">Hard envía el texto separando palabras y líneas donde necesite</p>
                                                            <p class="justify">Readonly el texto mostrado no puede ser modificado</p>
                                                            <p class="justify">Disabled desactiva el botón impidiendo su ejecución</p>


                                                            <p class="justify"><strong>Tamaños, columnas, y filas de los formularios.</strong></p>
                                                            <p class="justify">Maquetación de formularios con el uso de tablas</p>

                                                            <p class="justify">&lt;table&gt;&lt;/table&gt;</p>
                                                            <p class="justify">&lt;tr&gt;&lt;/tr&gt;</p>
                                                            <p class="justify">&lt;td&gt;&lt;/td&gt;</p>
                                                            <p class="justify">&lt;th&gt;&lt;/th&gt;</p>

                                                            <p class="justify">Maquetación de formularios con el uso de CSS</p>
                                                            <p class="justify">&lt;div&gt;&lt;/div&gt;</p>
                                                            <p class="justify">&lt;p&gt;&lt;/p&gt;</p>
                                                            <p class="justify">&lt;span&gt;&lt;/span&gt;</p>

                                                            <p class="justify">Los dos selectores más utilizados son:</p>
                                                            <p class="justify">.class</p>
                                                            <p class="justify">#id</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1314" role="button">Formularios y eventos. Criterios de accesibilidad y usabilidad en el diseño de formularios.</a>
                                                    <div class="collapse" id="U1314">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Agrupación de datos.</strong></p>
                                                            <p class="justify">Fieldset Agrupa elementos o controles de un formulario en un recuadro.</p>
                                                            <p class="justify">Legend Nombrar o etiquetar los grupos creados a partir de Fieldset</p>
                                                            <p class="justify">Label Texto que va asociado a un elemento de formulario</p>
                                                            <p class="justify">Input Indica a partir de su atributo type , el tipo de entrada de dato</p>

                                                            <p class="justify"><strong>Adecuación del tamaño del formulario (división en distintas páginas).</strong></p>
                                                            <p class="justify">Paginación: Indica página actual y número total de páginas</p>
                                                            <p class="justify">Barra de progreso Indica cuanto se ha cumplimentado y cuánto resta</p>
                                                            <p class="justify">Botones (Ste y Ant) Para la navegación por los campos del formulario</p>

                                                            <p class="justify"><strong>Identificación de los campos obligatorios.</strong></p>
                                                            <p class="justify">Mediante * junto al campo del formulario</p>
                                                            <p class="justify">Agregando la palabra “obligatorio” al campo del formulario</p>
                                                            <p class="justify">Marcando el campo en negrita</p>
                                                            <p class="justify">Utilizando Javascript de forma que al perder el foco se valide.</p>

                                                            <p class="justify"><strong>Ordenación lógica de la petición de datos.</strong></p>
                                                            <p class="justify">Disposición deductiva</p>
                                                            <p class="justify">Posición, lugar o situación en la que se colocan los elementos en un documento web con unas normas </p>
                                                            <p class="justify">lógicas para que al usuario le resulte intuitiva la navegación de la red.</p>

                                                            <p class="justify"><strong>Información correcta al usuario.</strong></p>
                                                            <p class="justify">Si se desea que el usuario de la página web rellene el formulario con facilidad es recomendable realizar una descripción de la información que se solicita</p>

                                                            <p class="justify"><strong>Utilización de páginas de error y de confirmación.</strong></p>
                                                            <p class="justify">Se recomienda utilizar una página web independiente del formulario para confirmar que el envío ha sido correcto, si es el caso, o para indicar si ha habido algún error, y si ha sido así, identificando el tipo de error de que se trata.</p>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 2. PLANTILLAS EN LA CONSTRUCCIÓN DE PÁGINAS WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1321" role="button">Funciones y características.</a>
                                                    <div class="collapse" id="U1321">
                                                        <div class="card card-body text-info">
                                                            <p class="text-justify"><strong>Descripción de una plantilla web.</strong></p>
                                                            <p class="text-justify">Es una página web desarrollada con HTML y CSS principalmente constituida por texto, imágenes video...</p>

                                                            <p class="text-justify">Su función principal es poder ser utilizada tantas veces como páginas web se deseen desarrollar</p>

                                                            <p class="text-justify"><strong>Elementos de una plantilla web.</strong></p>
                                                            <p class="text-justify"><strong>Según el lenguaje de maquetación (HTML)</strong>
                                                                HTML; Body; Head;</p>
                                                            <p class="text-justify"><strong>Según el contenido</strong>
                                                                Audio; video; imagen; texto; enlaces; documentos;</p>
                                                            <p class="text-justify"><strong>Según estructura de archivos</strong>
                                                                Páginas; Archivos; directorios;</p>
                                                            <p class="text-justify"><strong>Según maquetación y estilos</strong>
                                                                Cabecera;menú vertical; menú horizontal; contenido central; columnas derecha e izquierda;pie de pagina; sidebar</p>

                                                            <p class="text-justify"><strong>Estructura y organización de los elementos de las plantillas.</strong></p>
                                                            <p class="text-justify"><strong>Cabecera:</strong> diseño con logo, título, eslogan, igual en todas las páginas webs del sitio</p>
                                                            <p class="text-justify"><strong>Columnas:</strong> Contenido accesorio, publicidad,enlaces externos...</p>
                                                            <p class="text-justify"><strong>Contenido Central:</strong> Diseño en función de la información.</p>
                                                            <p class="text-justify"><strong>Pie de página:</strong> Contenidos importantes, autor, contacto,políticas de privacidad...</p>
                                                            <p class="text-justify"><strong>Menú:</strong> Permite la navegación del usuario por todas las páginas web del sitio.</p>

                                                            <p class="text-justify"><strong>Especificar las zonas modificables de una plantilla y las partes fijas.</strong></p>
                                                            <p class="text-justify"><strong>Regiones editables:</strong> Zonas no bloqueadas, en ellas se podrá insertar y modificar el contenido</p>
                                                            <p class="text-justify"><strong>Regiones repetidas:</strong> Zona parcialmente limitada, su estructura queda bloqueada pesro se pueda cambiar el contenido</p>
                                                            <p class="text-justify"><strong>Regiones opcionales:</strong> Zonas que el desarrollador decidirá si serán mostradas o no.</p>
                                                            <p class="text-justify"><strong>Regiones con atributos editables:</strong> Zonas en las que parte de su contenido se puede editar.</p>

                                                            <p class="text-justify"><strong>Utilización de plantillas.</strong></p>
                                                            <p class="text-justify">El uso de plantillas para un sitio web permite que, al cambiar los estilos de dicha plantilla, afecte el cambio a todas y cada una de las páginas de la web.</p>

                                                            <p class="text-justify">Básicamente, una plantilla web es un conjunto de páginas web copiadas de otra, con la posibilidad de establecer zonas editables y otras zonas que serán fijas.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1322" role="button">Campos editables y no editables.</a>
                                                    <div class="collapse" id="U1322">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Definir y crear los campos susceptibles de cambios en una plantilla.</p>
                                                            <p class="justify">Definir y crear los campos no modificables en una plantilla.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U1323" role="button">Aplicar plantillas a páginas web.</a>
                                                    <div class="collapse" id="U1323">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Las plantillas en la web.</p>
                                                            <p class="justify">Búsqueda de plantillas en la red.</p>
                                                            <p class="justify">Adaptación de plantillas a página web.</p>

                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                </ul>
                            </li>
                            <li class="list-group-item border-0 bg-light text-dark">MF0951_2 INTEGRACIÓN DE COMPONENTES SOFTWARE EN PÁGINAS WEB
                                <ul class="list-group">
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD FORMATIVA 1. UF1305 PROGRAMACIÓN CON LENGUAJES DE GUIÓN EN PÁGINAS
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 1. METODOLOGÍA DE LA PROGRAMACIÓN.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2111" role="button">Lógica de programación.</a>
                                                    <div class="collapse" id="U2111">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción y utilización de operaciones lógicas.</strong></p>
                                                            <p class="justify">La lógica es el razonamiento para poder distinguir lo verdadero de lo falso</p>
                                                            <p class="justify">Las operaciones lógicas básicas son:</p>
                                                            <ul class="ml-3">
                                                                <li class="pl-3">Suma lógica (OR)</li>
                                                                <li class="pl-3">Producto lógico (AND)</li>
                                                                <li class="pl-3">Negación (NOT)</li>
                                                                <li class="pl-3">OR Exclusivo (XOR)</li>
                                                                <li class="pl-3">NAND</li>
                                                                <li class="pl-3">NOR</li>
                                                                <li class="pl-3">XNOR</li>
                                                            </ul>
                                                            <br />
                                                            <table class="table w-75 mx-auto" >
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">A</th>
                                                                        <th scope="col">B</th>
                                                                        <th scope="col">A OR B</th>
                                                                        <th scope="col">A AND B</th>
                                                                        <th scope="col">NOT A</th>
                                                                        <th scope="col">A XOR B</th>
                                                                        <th scope="col">NAND</th>
                                                                        <th scope="col">NOR</th>
                                                                        <th scope="col">XNOR</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">0</td>
                                                                        <td class="text-center">1</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <p class="justify"><strong>Secuencias y partes de un programa.</strong></p>
                                                            <p class="justify">Consideremos un programa como un conjunto de secuencias de intrucciones que actúan sobre unos datos de entrada, procesándolos para obtener unos datos de salida</p>
                                                            <ul pl-3>
                                                                <li class="pl-2">Parte de declaraciones</li>
                                                                <li class="pl-2">Parte de instrucciones
                                                                    <ul pl-3>
                                                                        <li class="pl-2">Entrada de datos</li>
                                                                        <li class="pl-2">Proceso de datos</li>
                                                                        <li class="pl-2">Salida de datos</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2112" role="button">Ordinogramas.</a>
                                                    <div class="collapse" id="U2112">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de un ordinograma.</strong></p>
                                                            <p class="justify">Entendemos por ordinograma la representación gráfica de la secuencia de instrucciones que componen un programa.</p>
                                                            <p class="justify">Los ordinogramas también son conocidos como <strong>diagramas de flujo</strong>.</p>
                                                            <p class="justify"><strong>Elementos de un ordinograma.</strong></p>
                                                            <img class="w-75" src="../recursos/img/cursos/ifcd0110/uf13051a.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Elementos de un ordinograma" title="Elementos de un ordinograma.">
                                                            <p class="justify"><strong>Operaciones en un programa.</strong></p>
                                                            <p class="justify">Las operaciones son las instrucciones que podemos hacer en nuestro ordinograma y que al fin y al cabo van a componer nuestro programa.</p>
                                                            <p class="justify"><strong>Implementación de elementos y operaciones en un ordinograma.</strong></p>
                                                            <img class="w-75" src="../recursos/img/cursos/ifcd0110/uf13051b.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Implementación de un ordinograma" title="Implementación de un ordinograma.">
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2113" role="button">Pseudocódigos.</a>
                                                    <div class="collapse" id="U2113">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de pseudocódigo.</strong></p>
                                                            <p class="justify">El pseudocódigo también conocido como <strong>falso código</strong> es la forma de representar mediante texto un algoritmo. </p>
                                                            <p class="justify">Todo pseudocódigo se compone de: </p>
                                                            <ul class="pl-3">
                                                                <li class="pl-3"><strong>Cabecera</strong> Nombre del algoritmo a implementar.</li>
                                                                <li class="pl-3"><strong>Declaraciones</strong> Variables a utilizar en el pseudocódigo. (Númericos, Caracteres, Lógicos)<</li> 
                                                                <li class="pl-3"><strong>Cuerpo</strong> Instrucciones que componen el pseudocódigo.(Entrada, proceso, salida)</li>
                                                            </ul><br/>
                                                            <p class="justify"><strong>Creación del pseudocódigo.</strong></p>
                                                            <div class="bg-light text-secondary border border-secondary p-2 m-4">
                                                                <p>Algoritmo promedio</p>
                                                                <span class="pl-3">cal1,cal2,cal3,res: real;</span><br />
                                                                <span class="pl-3">inicio</span><br />
                                                                <span class="pl-5">cal1=0,cal2=0,cal3=0;</span><br />
                                                                <span class="pl-5">escribir "Dame tres calificaciones";</span><br />
                                                                <span class="pl-5">leer cal1,cal2,cal3;</span><br />
                                                                <span class="pl-5">res=(cal1+cal2+cal3)/3;</span><br />
                                                                <span class="pl-5">escribir "El promedio es: ",res;</span><br />
                                                                <span class="pl-3">fin</span>
                                                            </div>
                                                            <div class="bg-light text-secondary border border-secondary p-2 m-4">
                                                                <p>Algoritmo cuadrado</p>
                                                                <span class="pl-3">numero,cuadrado: entero;</span><br />
                                                                <span class="pl-3">inicio</span><br />
                                                                <span class="pl-5">numero=0,cuadrado=0;</span><br />
                                                                <span class="pl-5">escribir "Dame un número";</span><br />
                                                                <span class="pl-5">leer numero;</span><br />
                                                                <span class="pl-5">cuadrado=numero*numero;</span><br />
                                                                <span class="pl-5">escribir "El cuadrado de: ",numero, " es ",cuadrado;</span><br />
                                                                <span class="pl-3">fin</span>
                                                            </div>
                                                        </div>
                                                    </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2114" role="button">Objetos.</a>
                                                    <div class="collapse" id="U2114">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de objetos.</strong></p>
                                                            <p class="justify">Es una entidad del mundo real, que se utilizan en la Programación Orientada a Objetos o
                                                                P.O.O.</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13051c.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Descripción de objetos" title="Descripción de objetos.">

                                                            <p class="justify">Los <strong>atributos</strong> nos permiten identificar a un objeto entre otros del mismo tipo (clase).</p>
                                                            <p class="justify">Cuando estamos programando haremos referencia a instancias de un objeto, que es cuando el objeto sí se encuentra en la memoria del ordenador y podemos trabajar con él.</p>
                                                            <p class="justify">El <strong>objeto o clase</strong> es una plantilla o molde, que no se encuentra en la memoria del ordenador.</p>

                                                            <p class="justify">No confundir objeto o clase con instancia. El objeto o la clase es una definición o esbozo de lo que estamos representando, mientras que la instancia es la definición o esbozo cargada en memoria del ordenador.</p>


                                                            <p class="justify"><strong>Funciones de los objetos.</strong></p>
                                                            <p class="justify">Nos permiten realizar operaciones co los atributos (datos) del objeto, que solo son accesibles por las propias funciones del objeto.</p>

                                                            <p class="justify"><strong>Comportamientos de los objetos.</strong></p>
                                                            <p class="justify">Las instancias de los objetos pueden, en un instante determinado comunicarse con otras instancias a través del diseño de funciones (métodos) adecuadas para ello.</p>

                                                            <p class="justify"><strong>Atributos de los objetos.</strong></p>

                                                            <p class="justify">Permiten conocer las características específicas de la instancia del objeto. Solo pueden ser accesibles por métodos del mismo objeto garantizando así la seguridad de los mismos. Un atributo no declarado en un objeto no puede ser utilizado. Se pueden definir de cualquier clase</p>

                                                            <p class="justify"><strong>Creación de objetos.</strong></p>
                                                            <p class="justify">Partimos de la creación de un objeto mediante una clase, que viene a ser una plantilla o molde. Una vez que tenemos creado el molde, vamos creando instancias de ese molde.</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/uf13051d.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Descripción de objetos" title="Descripción de objetos.">
                                                            <p class="justify">Siempre que trabajemos con P.O.O esta se sustenta en cuatro pilares fundamentales:</p>
                                                            <ul pl-3>
                                                                <li class="pl-3 justify"><strong>Encapsulamiento:</strong> No es necesario conocer el funcionamiento interno del objeto,simplemente lo usamos, separando la interfaz de una clase de su implementación.</li>
                                                                <li class="pl-3 justify"><strong>Herencia:</strong> Creamos objetos derivados a partir de objetos o clases existentes, de forma que heredan las propiedades y métodos de “sus padres”, y pueden añadirse nuevas características.</li>
                                                                <li class="pl-3 justify"><strong>Sobrecarga:</strong> Es la posibilidad de crear métodos que comparten el mismo nombre no teniendo nada que ver la tarea de uno con respecto al otro.</li>
                                                                <li class="pl-3 justify"><strong>Polimorfismo:</strong> El polimorfismo es la capacidad para que varias clases u objetos derivados de otros, reaccionen de manera diferente ante los mismos métodos. El polimorfismo se puede aplicar tanto a objetos como a funciones, por lo que podemos hablar de objetos polimórficos y de funciones polimórficas.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2115" role="button">Ejemplos de códigos en diferentes lenguajes.</a>
                                                    <div class="collapse" id="U2115">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Códigos en lenguajes estructurales.</p>
                                                            <p class="justify">Códigos en lenguajes scripts.</p>
                                                            <p class="justify">Códigos en lenguajes orientados a objetos.</p>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 2. LENGUAJE DE GUIÓN.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2121" role="button">Características del lenguaje.</a>
                                                    <div class="collapse" id="U2121">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Se entiende por guión, generalmente, a un programa que es escrito bajo un determinado lenguaje de programación interpretado.</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Guiones del lado cliente</li>
                                                                <li class="justify pl-3">Guiones del lado servidor</li>
                                                            </ul><br />

                                                            <p class="justify"><strong>Descripción del lenguaje orientado a eventos.</strong></p>
                                                            <p class="justify">Definimos evento como una respuesta ante un determinado cambio en el programa. Por ejemplo, en nuestra página web tenemos un botón de “Consulta”, cuando hacemos click sobre él se genera el evento onClick y realizaremos las acciones correspondientes para ofrecer la ayuda relacionada con la sección del site en el que se encuentre el usuario en ese momento.</p>


                                                            <p class="justify">El Manejador de Eventos es la parte del programa, generalmente una función, encargada de responder de la forma adecuada a la generación de uno o varios eventos.</p>


                                                            <p class="justify">Ejemplo de eventos asociados al objeto 'Botón' (Button):</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">onClick : Al hacer click (apretar y liberar)</li>
                                                                <li class="justify pl-3">onBlur: Al perder el enfoque o foco.</li>
                                                                <li class="justify pl-3">onFocus: Al recibir el enfoque o foco.</li>
                                                                <li class="justify pl-3">onMouseDown: Al pulsar el botón del ratón.</li>
                                                                <li class="justify pl-3">onMouseUp: Al dejar de pulsar el botón del ratón.</li>
                                                            </ul><br />

                                                            <p class="justify"><strong>Descripción del lenguaje interpretado.</strong></p>
                                                            <p class="justify">También conocidos como lenguajes de 'script' es necesario un interprete que ejecuta instrucción por instrucción en tiempo de ejecución desde el lenguaje insterpretado, con una semántica 'humana' (de alto nivel), a código máquina (lenguaje de bajo nivel)</p>
                                                            <p>Ventajas:</p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Independiente de la plataforma.</li>
                                                                <li class="justify pl-3">Generación de código 'in situ' sin recurrir a la compilación.</li>
                                                                <li class="justify pl-3">Facilidad de depuración de programas.</li>
                                                                <li class="justify pl-3">De menor tamaño generalmente.</li>
                                                                <li class="justify pl-3">Dinámicos Desventajas.</li>
                                                                <li class="justify pl-3">Requieren un programa interprete.</li>
                                                                <li class="justify pl-3">Es menos eficiente que un programa complicado.</li>
                                                                <li class="justify pl-3">El código fuente es accesible. Ejemplos:
                                                                    <ul class="pl-5">
                                                                        <li class="justify pl-3">ActionScript</li>
                                                                        <li class="justify pl-3">Bash</li>
                                                                        <li class="justify pl-3">Asp</li>
                                                                        <li class="justify pl-3">JavaScript</li>
                                                                        <li class="justify pl-3">Lisp</li>
                                                                        <li class="justify pl-3">Php</li>
                                                                        <li class="justify pl-3">Perl</li>
                                                                        <li class="justify pl-3">Python</li>
                                                                        <li class="justify pl-3">Prolog</li>
                                                                        <li class="justify pl-3">IO</li>
                                                                    </ul>
                                                                </li>
                                                            </ul><br />
                                                            <p class="justify"><strong>La interactividad del lenguaje de guión.</strong></p>
                                                            <p class="justify">El lenguaje HTML es un lenguaje estático, con el lenguaje de guión conseguimos darle interactividad mediante el uso de eventos. </p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2122" role="button">Relación del lenguaje de guión y el lenguaje de marcas.
                                                    </a>
                                                    <div class="collapse" id="U2122">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Extensión de las capacidades del lenguaje de marcas.</strong></p>
                                                            <img class="img-responsive w-75 my-3 mx-auto p-3 shadow"  src="../recursos/img/cursos/ifcd0110/UF2122.png" alt="Tabla códigos HTML" title="Tabla códigos HTML">
                                                            <p class="justify"><strong>Adicción de propiedades interactivas.</strong></p>
                                                            <p class="justify pl-3">Gracias a los eventos disponibles en los lenguajes de guión vamos a poder responder ante ciertas acciones que el usuario realice en nuestra página.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2123" role="button">Sintaxis del lenguaje de guión.</a>
                                                    <div class="collapse" id="U2123">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Etiquetas identificativas dentro del lenguaje de marcas.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="pl-3">Texto</li>
                                                                <li class="pl-3">Links</li>
                                                                <li class="pl-3">Imágenes y objetos</li>
                                                                <li class="pl-3">Listas</li>
                                                                <li class="pl-3">Tablas</li>
                                                                <li class="pl-3">Formularios</li>
                                                                <li class="pl-3">Scripting</li>
                                                                <li class="pl-3">Presentación</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Especificaciones y características de las instrucciones.</strong></p>
                                                            <p class="justify pl-3">Los atributos se usan junto con ciertas etiquetas para darles más significado a estas. Nunca pueden aparecer sin la etiqueta a la que corresponden.</p>
                                                            <p class="justify"><strong>Elementos del lenguaje de guión.</strong></p>
                                                            <ul class="pl-3">
                                                                <li class="justify pl-3">Variables
                                                                    <img class="img-responsive w-75 my-3 mx-auto bg-light p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2123a.png" alt="tipos de variables" title="tipos de variables">
                                                                    <p class="justify">Dependiendo de hásta dónde son accesibles las variables las clasificamos en:</p>
                                                                    <ul class="pl-3">
                                                                        <li class="pl-5">a) Globales: Accesibles desde cualquier parte del programa.</li>
                                                                        <li class="pl-5">b) Locales: Accesibles solo en el ámbito en el que se han declarado.</li>
                                                                    </ul><br />

                                                                    <p class="justify"> Normas para la definición de nombres de variables:</p>
                                                                    <ul class="pl-3">
                                                                        <li class="pl-5">El primer carácter no puede ser un dígito.</li>
                                                                        <li class="pl-5">El resto de caracteres puede ser una combinación de dígitos o letras o guión (_).</li>
                                                                        <li class="pl-5">No se pueden usar las palabras reservadas del lenguaje de programación usado.</li>
                                                                        <li class="pl-5">Han de tener un significado acorde con los datos que almacenan.</li>
                                                                        <li class="pl-5">Dependiendo del lenguaje de programación pueden ser sensibles a las mayúsculas, recomendación; adoptar una forma y usarla siempre igual. Por ejemplo:
                                                                            <ul class="pl-3">
                                                                                <li class="pl-3">nombre_variable</li>
                                                                                <li class="pl-3">NombreVariable</li>
                                                                                <li class="pl-3">Nombre_Variable</li><br />
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="justify pl-3">La sintaxis para la definición de variables sería:</p>
                                                                    <p class="justify pl-5">var nombre_variable;</p>
                                                                    <p class="justifypl-3">Por Ejemplo: var edad; var resultado; var suma; var codigo;</p>
                                                                </li>
                                                                <li class="justify">Operaciones.

                                                                    <p class="justify">Las operaciones las vamos a realizar sobre variables y constantes, para poder actuar y obtener los resultados necesarios. Tipos:</p>
                                                                    <img class="img-responsive d-block w-75 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2123b.png" alt="tipos de operaciones" title="tipos de operaciones">
                                                                </li><br />
                                                                <li class="justify">Comparaciones.

                                                                    <p class="justify">En determinados momentos es necesario realizar comparaciones entre dos o más variables y tomar decisiones en función del resultado de dicha comparación.Tipos:</p>
                                                                    <img class="img-responsive d-block w-75 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2123c.png" alt="tipos de comparaciones" title="tipos de comparaciones">
                                                                </li><br />
                                                                <li class="justify">Asignaciones.
                                                                    <p class="justify pl-3">Nos permite establecer unos valore a las variables y asignar resultados de funciones a variables.</p>
                                                                    <code class="pl-5 d-block">
                                                                        Por ejemplo: <br />
                                                                        var edad; var area_cuadrado; var tecla; var titulo; <br />
                                                                        edad = 22;<br />
                                                                        area_cuadrado = cuadrado ( 15 );<br />
                                                                        titulo = “Bienvenido a mi web”;<br />
                                                                        tecla = 'c';<br />
                                                                    </code>
                                                                </li>
                                                            </ul>
                                                            <p class="justify"><strong>Objetos del lenguaje de guión.</strong></p>
                                                            <p class="justify pl-3">El objeto es la representación de algo concreto de nuestro mundo real y consta de propiedades o atributos y métodos. Una vez que definimos nuestra plantilla del objeto (clase),simplemente tenemos que instanciar a dicho o jeto mediante una variable, de tal forma que manejaremos al objeto a través de dicha variable.</p>
                                                            <ul pl-3>
                                                                <li class="justify pl-3"><strong>Métodos.</strong>
                                                                    <p class="justify pl-3">Es una función asociada a un objeto en particular que opera con los datos (atributos o propiedades del objeto).</p>
                                                                </li>

                                                                <li class="justify pl-3"><strong>Eventos.</strong>
                                                                    <p class="justify pl-3">El evento es la acción del usuario en el documento web, son gestionados por el manejador de eventos, encargado de detectarlos y asociarlos al código que nosotros específiquemos.</p>
                                                                </li>

                                                                <li class="justify pl-3"><strong>Atributos.</strong>
                                                                    <p class="justify pl-3">Definen los datos particulares sobre el estado en que se encuentra el objeto. Por ejemplo para una clase de objeto Coche, los atributos pueden ser color, matrícula, modelo,fabricante, etc. Dependiendo de la inst ncia de objeto que estemos manejando en ese momento su valor podría ser uno u otro.</p>
                                                                </li>

                                                                <li class="justify pl-3"><strong>Funciones.</strong>
                                                                    <p class="justify pl-3">Es un conjunto de instrucciones que agrupamos bajo un determinado nombre y que utilizamos haciendo referencia a ese nombre.</p>
                                                                    <p class="justify pl-3">Partes de una función:</p>
                                                                    <ul pl-3>
                                                                        <li class="pl-3">Definición o nombre</li>
                                                                        <li class="pl-3">Parámetros: Datos recibidos por la función.</li>
                                                                        <li class="pl-3">Cuerpo</li>
                                                                        <li class="pl-3">Devolución de resultados: Datos de salida.</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2124" role="button">Tipos de scripts: inmediatos, diferidos e híbridos.</a>
                                                    <div class="collapse" id="U2124">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Script dentro del cuerpo del lenguaje de marcas.</strong></p>
                                                            <p class="justify pl-3">Ejecutables al abrir la página.</p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2124a.png" alt="Ejecutables al abrir la página" title="Ejecutables al abrir la página"><br />
                                                            <p class="justify pl-3">Ejecutables por un evento.</p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2124b.png" alt="Ejecutables por un evento" title="Ejecutables por un evento"><br />
                                                            <p class="justify"><strong>Script dentro del encabezado del lenguajes de marcas.</strong></p>
                                                            <p class="justify pl-3">Al declarar un script en el encabezado, este se ejecutará antes que los declarados en el body.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2125" role="button">Ejecución de un script.</a>
                                                    <div class="collapse" id="U2125">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Ejecución al cargar la página.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2125a.png" alt="Ejecución al cargar la página" title="Ejecución al cargar la página"><br />
                                                            <p class="justify"><strong>Ejecución después de producirse un evento.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2125b.png" alt="Ejecución después de producirse un evento" title="Ejecución después de producirse un evento"><br />
                                                            <p class="justify"><strong>Ejecución del procedimiento dentro de la página.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2125c.png" alt="Ejecución del procedimiento dentro de la página" title="Ejecución del procedimiento dentro de la página"><br />
                                                            <p class="justify"><strong>Tiempos de ejecución.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2125d.png" alt="Tiempos de ejecución" title="Tiempos de ejecución"><br />
                                                            <p class="justify"><strong>Errores de ejecución.</strong></p>
                                                            <ul pl-3>
                                                                <li class="pl-3">Errores en tiempo de carga.</li>
                                                                <li class="pl-3">Errores en tiempo de ejecución.</li>
                                                                <li class="pl-3">Errores lógicos.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 3. ELEMENTOS BÁSICOS DEL LENGUAJE DE GUIÓN.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2131" role="button">Variables e identificadores.</a>
                                                    <div class="collapse" id="U2131">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Declaración de variables.</strong></p>
                                                            <p class="justify pl-3">Para poder trabajar con variables, previamente tenemos que declararlas y darles un identificador válido.</p>
                                                            <img class="img-responsive w-50" style="margin:0 auto" src="../recursos/img/cursos/ifcd0110/UF2131.png" alt="Tabla códigos HTML" title="Tabla códigos HTML"><br />
                                                            <p class="justify pl-3">Ámbito de las variables</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Local</li>
                                                                <li class="justify pl-3">Global</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Operaciones con variables.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Mostrar datos</li>
                                                                <li class="justify pl-3">Pedir datos</li>
                                                                <li class="justify pl-3">Enviar datos</li>
                                                                <li class="justify pl-3">Recibir datos</li>
                                                                <li class="justify pl-3">En el uso de expresiones</li>
                                                                <li class="justify pl-3">En funciones</li>
                                                                <li class="justify pl-3">En llamadas a funciones</li>
                                                                <li class="justify pl-3">En objetos</li>
                                                            </ul>
                                                        </div>
                                                    </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2132" role="button">Tipos de datos.</a>
                                                    <div class="collapse" id="U2132">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Datos booleanos.</strong></p>
                                                            <p class="justify pl-3">Un dato booleano es aquel que es capaz de representar la lógica binaria (0 [falso] y 1 [verdadero])</p>
                                                            <p class="justify"><strong>Datos numéricos.</strong></p>
                                                            <p class="justify pl-3">Enteros : parte entera (sin decimales)</p>
                                                            <p class="justify pl-3">Reales : parte entera y parte fracción</p>
                                                            <p class="justify"><strong>Datos de texto.</strong></p>
                                                            <p class="justify pl-3">Más conocidos como String. Un String es una cadena, lista o tira de caracteres.</p>
                                                            <p class="justify"><strong>Valores nulos.</strong></p>
                                                            <p class="justify pl-3">Null</p>
                                                            <p class="justify pl-3">undefined</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2133" role="button">Operadores y expresiones.</a>
                                                    <div class="collapse" id="U2133">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Operadores de asignación.</strong></p>
                                                            <img class="img-responsive w-75 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2133a.png" alt="Operadores de asignación" title="Operadores de asignación"><br />
                                                            <p class="justify"><strong>Operadores de comparación.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2133b.png"  alt="Operadores de comparación" title="Operadores de comparación"><br />
                                                            <p class="justify"><strong>Operadores aritméticos.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2133c.png" alt="Operadores aritméticos" title="Operadores aritméticos"><br />
                                                            <p class="justify"><strong>Operadores sobre bits.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2133d.png" alt="Operadores sobre bits" title="Operadores sobre bits"><br />
                                                            <p class="justify"><strong>Operadores lógicos.</strong></p>
                                                            <img class="img-responsive w-50 my-3 mx-auto p-3 shadow" src="../recursos/img/cursos/ifcd0110/UF2133e.png" alt="Operadores lógicos" title="Operadores lógicos"><br />
                                                            <p class="justify"><strong>Operadores de cadenas de caracteres.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                Var cadena1=“Hola”;><br />
                                                                Var cadena2=“ Buenos Días,”;><br />
                                                                Cadena3=cadena1+cadena2><br />
                                                            </code><br />
                                                            <p class="justify"><strong>Operadores especiales.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Operador condicional</li>
                                                                <li class="justify pl-3">Operador coma</li>
                                                                <li class="justify pl-3">Delete</li>
                                                                <li class="justify pl-3">In</li>
                                                                <li class="justify pl-3">Instanceof</li>
                                                                <li class="justify pl-3">New</li>
                                                                <li class="justify pl-3">This</li>
                                                                <li class="justify pl-3">Typeof</li>
                                                                <li class="justify pl-3">Void</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Expresiones de cadena.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                Mi_expresión=/\d/;<br />
                                                                Cadena1=“Vive en el número 10”<br />
                                                                Alert(miexpresion.test(cadena1));<br />
                                                            </code><br />
                                                            <p class="justify"><strong>Expresiones aritméticas.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                Mi_expresión=/^\d{3}-\d{3}-\d{3}$/;<br />
                                                                Cadena1=“555-555-555”<br />
                                                                Alert(miexpresion.test(cadena1));<br />
                                                            </code><br />
                                                            <p class="justify"><strong>Expresiones lógicas.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">AND</li>
                                                                <li class="justify pl-3">OR</li>
                                                                <li class="justify pl-3">NOT</li>
                                                                <li class="justify pl-3">XOR</li>
                                                            </ul><br />

                                                            <p class="justify"><strong>Expresiones de objeto.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                RegExp<br />
                                                                Var miexpresion=new RegExp(“aa”);<br />
                                                                Var miexpresion=/aa/;<br />
                                                            </code>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2134" role="button">Estructuras de control.</a>
                                                    <div class="collapse" id="U2134">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Sentencia IF.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                If (condicion) {<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Instrucciones si verdadero<br />
                                                                } else {<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Instrucciones si falso<br />
                                                                }<br />
                                                            </code><br />
                                                            <p class="justify"><strong>Sentencia WHILE.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                while (condicion) {<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Instrucciones<br />
                                                                }<br />
                                                            </code><br />
                                                            <p class="justify"><strong>Sentencia FOR.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                for (inicio; condición; incremento) {<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Instrucciones<br />
                                                                }<br />
                                                            </code><br />
                                                            <p class="justify"><strong>Sentencia BREAK.</strong></p>
                                                            <p class="justify pl-3">La sentencia “break” va a permitir alterar el comportamiento normal de los bucles, saliendo de los mismos sin cumplir la condición.</p>

                                                            <p class="justify"><strong>Sentencia CONTINUE.</strong></p>
                                                            <p class="justify pl-3">La sentencia “continue” va a permitir alterar el comportamiento normal de los bucles, volviendo al principio del bucle, ignorando el resto.</p>

                                                            <p class="justify"><strong>Sentencia SWITCH.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                switch (variable) {<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case “valor1”: <br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instrucciones; break;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case “valor2”: <br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instrucciones; break;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;…<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case “valorn”: <br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instrucciones; break;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default: <br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instrucciones;<br />
                                                                }<br />
                                                            </code><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2135" role="button">Funciones.</a>
                                                    <div class="collapse" id="U2135">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Definición de funciones.</strong></p>
                                                            <p class="justify pl-3">Conjunto de instrucciones que cumplen un determinado fin y que se asocian bajo un nombre, con el objeto de poder llamarlas desde otra parte de nuestro código, mediante el nombre de la misma.</p>
                                                            <p class="justify"><strong>Sentencia RETURN.</strong></p>
                                                            <p class="justify pl-3">La sentencia RETURN tiene como objetivo devolver datos desde la función al programa que ha llamado a dicha función.</p>
                                                            <p class="justify"><strong>Propiedades de las funciones.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Arguments</li>
                                                                <li class="justify pl-3">Caller</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Funciones predefinidas del lenguaje de guión.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Eval(string).</li>
                                                                <li class="justify pl-3">parseInt(cadena,base).</li>
                                                                <li class="justify pl-3">parseFloat(cadena).</li>
                                                                <li class="justify pl-3">isNaN(numero).</li>
                                                                <li class="justify pl-3">isFinite(valor).</li>
                                                                <li class="justify pl-3">Number(objeto).</li>
                                                                <li class="justify pl-3">String(objeto).</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Creación de funciones.</strong></p>
                                                            <p class="justify pl-3">A la hora de crear funciones se han de tener en cuenta varios aspectos tales como si recibe o no parámetros o si tiene que devolver algo.</p>

                                                            <p class="justify"><strong>Particularidades de las funciones en el lenguaje de guión.</strong></p>
                                                            <p class="justify pl-3">El lenguale javascript no permite las definiciones anidadas de funciones.</p>
                                                            <p class="justify pl-3">El paso de parámetros a las funciones es por valor.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2136" role="button">Instrucciones de entrada / salida.</a>
                                                    <div class="collapse" id="U2136">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción y funcionamiento de las instrucciones de entrada y salida.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Lectura de teclado de datos.</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                    Prompt(“texto a mostrar”, “valor por defecto”)<br />
                                                                </code><br />
                                                                <li class="justify pl-3">Almacenamiento en variables.</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                    Var=Prompt(“texto a mostrar”, “valor por defecto”)<br />
                                                                </code><br />
                                                                <li class="justify pl-3">Impresión en pantalla del resultado.</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                    Document.write(“texto a mostrar”)<br />
                                                                </code><br />
                                                            </ul>
                                                            <p class="justify"><strong>Sentencia PROMPT.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                valor=prompt(“Introducir número”, “0”)<br />
                                                            </code><br />
                                                            <p class="justify"><strong>Sentencia DOCUMENT.WRITE.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                document.write(“valor introducido ”,valor)<br />
                                                            </code><br />
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 4. DESARROLLO DE SCRIPTS.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2141" role="button">Herramientas de desarrollo, utilización.</a>
                                                    <div class="collapse" id="U2141">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Crear scripts con herramientas de texto.</strong></p>
                                                            <p class="justify pl-3">Podemos generar Script desde el Notepad o Gedit en Linux , pero hoy en día hay editores con multitud de ayudas para la programación, líneas numeradas, diferentes colores, límites de bucles….</p>
                                                            <p class="justify">Entre otros Notepad++, Sublime Text, Brackets, Visual Code</p>

                                                            <p class="justify"><strong>Crear scripts con aplicaciones web.</strong></p>
                                                            <p class="justify pl-3">Conjunto de herramientas disponibles por el usuario y que son ofrecidas por un determinado servidor web.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Servidor web</li>
                                                                <li class="justify pl-3">Conexión de red</li>
                                                                <li class="justify pl-3">Uno o más clientes</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Recursos en web para la creación de scripts.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">http://hscripts.com</li>
                                                                <li class="justify pl-3">http://scriptspot.com</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2142" role="button">Depuración de errores: errores de sintaxis y de ejecución.</a>
                                                    <div class="collapse" id="U2142">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Definición de los tipos de errores.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">Sintaxis.</li>
                                                                <li class="justify pl-3">Ejecución.</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Escritura del programa fuente.</strong></p>
                                                            <p class="justify pl-3">Indentación</p>
                                                            <p class="justify"><strong>Compilación del programa fuente.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-3">http://www.javascriptlint.com</li>
                                                                <li class="justify pl-3">http://ideone.com</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Corrección de errores de sintaxis.</strong></p>
                                                            <p class="justify pl-3">Con los nuevos editores, los errores sintácticos se minimizan, ya que estos suelen marcarlos con colores.</p>

                                                            <p class="justify"><strong>Corrección de errores de ejecución.</strong></p>
                                                            <p class="justify pl-3">La mejor forma de detectar errores de ejecución es ir dividiendo el problema en partes más pequeñas e ir probando.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2143" role="button">Mensajes de error.</a>
                                                    <div class="collapse" id="U2143">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Funciones para controlar los errores.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                Try {<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// código a evaluar<br />
                                                                } catch (identificador){<br />
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// manejo del error<br />
                                                                }<br />
                                                                </code><br />
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                onerror=// nombre de función<br />
                                                                funcion nombre de función(msn,url,l)<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// manejo del error<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return(true/false)<br />
                                                                </code><br />
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 5. GESTIÓN DE OBJETOS DEL LENGUAJE DE GUIÓN.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2151" role="button">Jerarquía de objetos.</a>
                                                    <div class="collapse" id="U2151">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de objetos de la jerarquía.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2151.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Jerarquía DOM" title="Jerarquía DOM">
                                                            <p class="justify"><strong>Propiedades compartidas de los objetos.</strong></p>
                                                            <p class="justify pl-3">Funciones para tratar texto</p>
                                                            <ul class="justify pl-5">
                                                                <li class="justify pl-3">Length</li>
                                                                <li class="justify pl-3">+</li>
                                                                <li class="justify pl-3">Concat()</li>
                                                                <li class="justify pl-3">Touppercase()</li>
                                                                <li class="justify pl-3">Tolowercase()</li>
                                                                <li class="justify pl-3">Charat(position)</li>
                                                                <li class="justify pl-3">Indexof(carácter)</li>
                                                                <li class="justify pl-3">Lastindexof(carácter)</li>
                                                                <li class="justify pl-3">Substring(inicio,final)</li>
                                                                <li class="justify pl-3">Split(separador)</li>
                                                            </ul><br />
                                                            <p class="justify pl-3">Funciones para tratar números</p>
                                                            <ul class="justify pl-5">
                                                                <li class="justify pl-3">NaN</li>
                                                                <li class="justify pl-3">isNaN()</li>
                                                                <li class="justify pl-3">infinity</li>
                                                                <li class="justify pl-3">Tofixed(dígitos)</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Navegar por la jerarquía de los objetos.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">Nombre_objeto.nombre.método([parametros])
                                                            </code><br />
                                                            <p class="justify pl-3">Para acceder a Password:</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">window.document.form.password
                                                            </code><br />
                                                            <p class="justify pl-3">window es considerado por defecto, luego</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">document.form.password
                                                            </code><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2152" role="button">Propiedades y métodos de los objetos del navegador.</a>
                                                    <div class="collapse" id="U2152">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>El objeto superior Windows.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2152a.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Objeto windows" title="Objeto windows"><br />
                                                            <p class="justify"><strong>El objeto navigator.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2152c.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Objeto navigator" title="Objeto windows"><br />
                                                            <p class="justify"><strong>URL actual (location).</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2152d.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Objeto location" title="Objeto windows"><br />
                                                            <p class="justify"><strong>URL visitada por el usuario.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2152e.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Objeto visited" title="Objeto windows"><br />
                                                            <p class="justify"><strong>Contenido del documento actual (document).</strong></p>
                                                            <p class="justify pl-3">Título, color del fondo, y formularios.</p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2152f.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Objeto document" title="Objeto windows"><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2153" role="button">Propiedades y métodos de los objetos del documento.</a>
                                                    <div class="collapse" id="U2153">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Propiedades del objeto document.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2153a.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Propiedades Objeto Document" title="Propiedades Objeto Document"><br />
                                                            <!--<p class="justify"><strong>Ejemplos de propiedades de document.</strong></p>-->
                                                            <p class="justify"><strong>Métodos de document.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2153b.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Métodos Objeto Document" title="Métodos Objeto Document"><br />
                                                            <p class="justify"><strong>Flujo de escritura del documento.</strong></p>
                                                            <p class="justify pl-3">Ejecución de los scripts mientras que carga la página. Aquí podremos ejecutar document.write() y lo hemos hecho habitualmente en los ejemplos anteriores.</p>
                                                            <p class="justify pl-3">Ejecución de los scripts cuando la página ha sido cargada, como respuesta a un evento del usuario. Aquí no podemos hacerlo porque la página ha terminado de cargarse.</p>

                                                            <p class="justify"><strong>Métodos open () y close () de document.</strong></p>
                                                            <p class="justify pl-3">Los métodos open() y close() del objeto document sirven para controlar el flujo del documento desde Javascript. Nos permiten abrir y cerrar el documento explícitamente.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2154" role="button">Propiedades y métodos de los objetos del formulario.</a>
                                                    <div class="collapse" id="U2154">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Propiedades principales del objeto form.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2154a.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Propiedades Objeto Form" title="Propiedades Objeto Form"><br />
                                                            <p class="justify"><strong>Métodos del objeto form.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2154b.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Métodps Objeto Form" title="Métodps Objeto Form"><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2155" role="button">Propiedades y métodos de los objetos del lenguaje.</a>
                                                    <div class="collapse" id="U2155">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Document.</strong></p>
                                                            <p class="justify pl-3">Obtener elementos del documento actual</p>
                                                            <ul class="justify pl-3">
                                                                <li>document.getElementById(“id name");</li>
                                                                <li class="justify pl-3">document.getElementsByTagName("tag name");</li>
                                                                <li class="justify pl-3">document.getElementsByClassName(“class name");</li>
                                                                <li class="justify pl-3">document.querySelectorAll(“css selector");</li>
                                                                <li class="justify pl-3">Document.forms[“form name”]</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Windows (open).</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2155a.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow"  alt="Windows (open)" title="Windows (open)"><br />
                                                            <p class="justify"><strong>History (go).</strong></p>
                                                            <p class="justify pl-3">El parámetro position indica la posición del historial al que se accede.</p>
                                                            <p class="justify"><strong>Locatiton (servidor).</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2155b.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Ñocation (servidor)" title="Ñocation (servidor)"><br />
                                                            <p class="justify"><strong>Navigator (nombre, versión y detalles del navegador).</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2155c.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Navigator" title="Navigator"><br />
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 6. LOS EVENTOS DEL LENGUAJE DE GUIÓN.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2161" role="button">Utilización de eventos.</a>
                                                    <div class="collapse" id="U2161">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Definición de eventos.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;etiqueta_HTML manejador_evento=“sentencias_javascript”&gt;</code></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;input name=“botón” type=“button” value=“Pulsame” onclick=“función_asociada_evento()”&gt;</code></p>
                                                            <p class="justify"><strong>Acciones asociadas a los eventos.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;html&gt;<br />
                                                                &lt;head&gt;<br />
                                                                &lt;script&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	función botón_pulsado() {<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		confirm(“botón pulsado”)<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                                                &lt;/script&gt;<br />
                                                                &lt;/head&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type=“button” value=“Pulsame” onclick=“botón_pulsado()”&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/body&gt;<br />
                                                                &lt;/html&gt;
                                                            </code><br />
                                                            <p class="justify"><strong>Jerarquía de los eventos desde el objeto Windows.</strong></p>
                                                            <p class="justify pl-2">En la captura de eventos, los eventos recorren el árbol desde el elemento mas externo al mas interno, en modo captura (addeventListener) y del más interno al más externo en modo Bubbling (onclick)</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2162" role="button">Eventos en elementos de formulario.
                                                    </a>
                                                    <div class="collapse" id="U2162">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Onselect</strong> (al seleccionar un elemento de un formulario).</p>
                                                            <p class="justify pl-2">El evento Onselect hace que se ejecute un script cuando se selecciona texto dentro de un elemento perteneciente a un formulario.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;input type=“tipo_elemento” onSelect=“función”&gt;
                                                                </code><br/>
                                                            <p class="justify"><strong>Onchange</strong> (al cambiar el estado de un elemento del formulario).</p>
                                                            <p class="justify pl-2">El evento Onchange hace que se ejecute un script cuando se cambia el valor de un elemento del formulario.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onchange=“función”&gt;
                                                                </code><br/>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2163" role="button">Eventos de ratón. Eventos de teclado.</a>
                                                    <div class="collapse" id="U2163">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Eventos de ratón.</strong></p>
                                                            <p class="justify pl-3"><strong>Onmousedown</strong> (al pulsar sobre un elemento de la página).</p>
                                                            <p class="justify pl-5">El evento Onmousedown hace que se ejecute un script cuando el usuario pulsa un botón del ratón sobre un elemento.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onmousedown=“función”&gt;
                                                            </code><br />
                                                            <p class="justify pl-3"><strong>Onmousemove</strong> (al mover el ratón por la página).</p>
                                                            <p class="justify pl-5">El evento Onmousemove hace que se ejecute un script cuando el puntero del ratón se mueve sobre un elemento.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onmousemove=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>Onmouseout</strong> (al salir del área ocupada por un elemento de la página).</p>
                                                            <p class="justify pl-5">El evento Onmouseout hace que se ejecute un script cuando el puntero del ratón se desplaza fuera de un elemento.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onmouseout=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>Onmouseover</strong> (al entrar el puntero del ratón en el área ocupada por un elemento de la página).</p>
                                                            <p class="justify pl-5">El evento Onmouseover hace que se ejecute un script cuando el puntero del ratón se desplaza al interior de un elemento.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onmouseover=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>Onmouseup</strong> (al soltar el usuario el botón del ratón que anteriormente había pulsado).</p>
                                                            <p class="justify pl-5">El evento Onmouseup hace que se ejecute un script cuando el usuario suelta el botón del raton sobre un elemento.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onmouseup=“función”&gt;
                                                                </code><br />
                                                            <p class="justify"><strong>Eventos de teclado.</strong></p>
                                                            <p class="justify pl-3"><strong>Onkeydown</strong> (al ulsar una tecla el usuario).</p>
                                                            <p class="justify pl-5">El evento Onkeydown hace que se ejecute un script cuando el usuario presiona una tecla, sobre un elemento..</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onkeydown=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>Onkeypress</strong> (al dejar pulsada una tecla un tiempo determinado).</p>
                                                            <p class="justify pl-5">El evento Onkeypress hace que se ejecute un script cuando el usuario mantiene presionada una tecla, sobre un elemento..</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onkeypress=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>Onkeyup</strong> (al liberar la tecla apretada).</p>
                                                            <p class="justify pl-5">El evento Onkeyup hace que se ejecute un script cuando el usuario libera la presión de una tecla, sobre un elemento.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onkeyup=“función”&gt;
                                                                </code><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2164" role="button">Eventos de enfoque.</a>
                                                    <div class="collapse" id="U2164">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3"><strong>onblur</strong> (cuando un elemento pierde el foco de la aplicación).</p>
                                                            <p class="justify pl-5">El evento Onblur hace que se ejecute un script cuando un elemento pierde el foco de la aplicación.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onblur=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>onfocus</strong> (cuando un elemento de la página o la ventana ganan el foco de la aplicación).</p>
                                                            <p class="justify pl-5">El evento Onfocus hace que se ejecute un script cuando un elemento toma el foco de la aplicación.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onfocus=“función”&gt;
                                                                </code><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2165" role="button">Eventos de formulario.</a>
                                                    <div class="collapse" id="U2165">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3"><strong>Onreset</strong> (al hacer clic en el botón de reset de un formulario).</p>
                                                            <p class="justify pl-5">El evento Onreset hace que se ejecute un script cuando se pulsa el botón reset de un formulario.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onreset=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>Onsubmit</strong> (al pulsar el botón de enviar el formulario).</p>
                                                            <p class="justify pl-5">El evento Onsubmit hace que se ejecute un script cuando se pulsa el botón submit de un formulario.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onsubmit=“función”&gt;
                                                                </code><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2166" role="button">Eventos de ventana.</a>
                                                    <div class="collapse" id="U2166">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3"><strong>Onmove</strong> (al mover la ventana del navegador).</p>
                                                            <p class="justify pl-5">El evento Onmove hace que se ejecute un script cuando se mueve una ventana del navegador.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onmove=“función”&gt;
                                                                </code><br />
                                                            <p class="justify pl-3"><strong>Onresize</strong> (al redimensionar la ventana del navegador).</p>
                                                            <p class="justify pl-5">El evento Onresize hace que se ejecute un script cuando se cambia el tamaño de una ventana del navegador.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onresize=“función”&gt;
                                                                </code><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2167" role="button">Otros eventos.</a>
                                                    <div class="collapse" id="U2167">
                                                        <div class="card card-body text-info">
                                                            <p class="justify pl-3"><strong>Onunload</strong> (al abandonar una página).</p>
                                                            <p class="justify pl-5">El evento Onunload hace que se ejecute un script cuando la página se ha descargado o la ventana del navegador se ha cerrado.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onunload=“función”&gt;
                                                            </code><br />
                                                            <p class="justify pl-3"><strong>Onload</strong> (al terminar de cargarse la página o imágenes).</p>
                                                            <p class="justify pl-5">El evento Onload hace que se ejecute un script cuando un objeto ha terminado de cargarse.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onload=“función”&gt;
                                                            </code><br />
                                                            <p class="justify pl-3"><strong>Onclick</strong> (al hacer clic en al botón del ratón sobre un elemento de la página).</p>
                                                            <p class="justify pl-5">El evento Onclick hace que se ejecute un script cuando el usuario hace clic en un elemento.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onclick=“función”&gt;
                                                            </code><br />
                                                            <p class="justify pl-3"><strong>Ondragdrop</strong> (al soltar algo que se ha arrastrado sobre la página).</p>
                                                            <p class="justify pl-5">El evento Ondragdrop hace que se ejecute un script cuando el usuario suelta algún objeto sobre la ventana del navegador.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Ondragdrop=“función”&gt;
                                                            </code><br />
                                                            <p class="justify pl-3"><strong>Onerror</strong> (al no poderse cargar un documento o una imagen).</p>
                                                            <p class="justify pl-5">El evento Onerror hace que se ejecute un script cuando la carga de un documento, página o imagen produce un error.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onerror=“función”&gt;
                                                            </code><br />
                                                            <p class="justify pl-3"><strong>Onabort</strong> (al detenerse la carga de una imagen, de la página o irse de la página).</p>
                                                            <p class="justify pl-5">EEl evento Onabort hace que se ejecute un script cuando se cancela la carga del documento o página web.</p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;elemento Onabort=“función”&gt;
                                                            </code><br />
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 7. BÚSQUEDA Y ANÁLISIS DE SCRIPTS.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2171" role="button">Búsqueda en sitios especializados.</a>
                                                    <div class="collapse" id="U2171">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Páginas oficiales.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">http://www.w3schools.com/defaults.asp</li>
                                                                <li class="justify pl-2">https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia</li>
                                                            </ul><br/>
                                                            <p class="justify"><strong>Tutoriales.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">http://www.w3schools.com/defaults.asp</li>
                                                            </ul><br/>
                                                            <p class="justify"><strong>Foros.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">http://www.forosdelweb.com/f13/</li>
                                                                <li class="justify pl-2">https://www.lawebdelprogramador.com/foros/JavaScript/index1.html</li>
                                                            </ul><br/>
                                                            <p class="justify"><strong>Bibliotecas.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">jQuery</li>
                                                                <li class="justify pl-2">MooTools</li>
                                                                <li class="justify pl-2">Prototype.js</li>
                                                                <li class="justify pl-2">Script.aculo.us</li>
                                                                <li class="justify pl-2">Rico</li>
                                                                <li class="justify pl-2">Yahoo! Ul Library</li>
                                                                <li class="justify pl-2">Dojo toolkit</li>
                                                            </ul><br/>
                                                        </div>
                                                    </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2172" role="button">Operadores booleanos.</a>
                                                    <div class="collapse" id="U2172">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Funcionamiento de los operadores booleanos.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">AND/</li>
                                                                <li class="justify pl-2">OR</li>
                                                                <li class="justify pl-2">NOT</li>
                                                            </ul><br/>
                                                            <p class="justify"><strong>Utilización en distintos buscadores.</strong></p>
                                                            <p class="justify pl-2">Normalmente, los operadores booleanos los vamos a usar en los buscadores de internet con el fin de acotar o restringir nuestras búsquedas para que lo que busquemos se ajuste a los resultados que obtenemos del buscador.</p>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2173" role="button">Técnicas de búsqueda.
                                                    </a>
                                                    <div class="collapse" id="U2173">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Expresiones.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2173.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Expresiones" title="Expresiones">
                                                            <p class="justify"><strong>Definiciones de búsquedas.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">El tema a buscar debe ser claro y conciso.</li>
                                                                <li class="justify pl-2">La definición del tema debe ser breve y concisa.</li>
                                                                <li class="justify pl-2">Debemos evitar buscar temas generales.</li>
                                                                <li class="justify pl-2">Debemos dividir un tema general en varios temas concretos</li>
                                                                <li class="justify pl-2">Debemos contrastar la información que estamos buscando en varios sitios distintos</li>
                                                            </ul><br/>
                                                            <p class="justify"><strong>Especificaciones.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Identificar los conceptos importantes.</li>
                                                                <li class="justify pl-2">Identificar las palabras claves.</li>
                                                                <li class="justify pl-2">Determinar sinónimos y términos relacionados.</li>
                                                                <li class="justify pl-2">Teclear palabras en minúsculas.</li>
                                                                <li class="justify pl-2">Más resultados con términos en inglés.</li>
                                                                <li class="justify pl-2">Usar plurales más que singular.</li>
                                                            </u><br/>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2174" role="button">Técnicas de refinamiento de búsquedas.</a>
                                                    <div class="collapse" id="U2174">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Utilización de separadores.</strong></p>
                                                            <p class="justify pl-2">Los buscadores interpretan los separadores como delimitadores de palabras y no los tienen en cuenta a la hora de las búsquedas.</p>
                                                            <p class="justify"><strong>Utilización de elementos de unión.</strong></p>
                                                            <img src="../recursos/img/cursos/ifcd0110/UF2174.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Diagramas de Venn" title="Diagramas de Venn">
                                                        </div>
                                                    </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2175" role="button">Reutilización de scripts.</a>
                                                    <div class="collapse" id="U2175">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Scripts gratuitos.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">http://hscripts.com</li>
                                                                <li class="justify pl-2">http://hotscripts.com</li>
                                                                <li class="justify pl-2">http://www.mybb-es.com/foro-script-web-gratuitos</li>
                                                                <li class="justify pl-2">http://www.efectosJavascript.com</li>
                                                                <li class="justify pl-2">http://www.uterra.com/codigo_javascript/codigo_fuente_javascript.php</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Generalización de códigos.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">
                                                                &lt;html&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;script src=“nombre_archivo.js”&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/script>&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;script src=“nombre_archivo2.js”&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/script>&gt;<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br/>
                                                                &lt;/html&gt;
                                                            </code><br/>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD FORMATIVA 2. UF1306 PRUEBAS DE FUNCIONALIDADES Y OPTIMIZACIÓN DE PÁGINAS WEB
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 1. VALIDACIONES DE DATOS EN PÁGINAS WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2211" role="button">Funciones de validación.</a>
                                                    <div class="collapse" id="U2211">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Descripción de las funciones.</strong></p>
                                                            <ul class="justify pl-4">
                                                                <li>Validación de formularios</li>
                                                                <ul class="justify pl-4">
                                                                    <li>Campos obligatorios.</li>
                                                                    <li>Suscripción a servicios.</li>
                                                                    <li>Ingreso de datos.</li>
                                                                    <li>Multiplataforma.</li>
                                                                </ul>
                                                                <li>Botones de interacción.</li>
                                                                <li>Botones de búsqueda.</li>
                                                                <li>Sistemas de compra.</li>
                                                                <li>Administrar error 404</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Utilidad de las funciones.</strong></p>
                                                            <p class="justify pl-2"> La validación de datos es un proceso necesario para asegurar que los datos manipulados son los requeridos.
                                                                <p class="justify"><strong>Implementación de las funciones.</strong></p>
                                                                <p class="justify pl-2">La implementación de las funciones de validación consistirá en traducir a un lenguaje de programación la funcionalidad que se quiere conseguir con ellas.</p>
                                                                <ul class="justify pl-3">
                                                                    <li class="justify pl-2">Validación de campos de texto obligtorios</li>
                                                                    <li class="justify pl-2">Validación de listas desplegables</li>
                                                                    <li class="justify pl-2">Validación de una dirección de correo electrónico</li>
                                                                    <li class="justify pl-2">Validación de elementos de tipo checkbox</li>
                                                                    <li class="justify pl-2">Validación de elementos de tipo radiobutton</li>
                                                                    <li class="justify pl-2">Validación de captcha</li>
                                                                </ul><br />

                                                                <p class="justify"><strong>Validaciones alfabéticas, numéricas y de fecha.</strong></p>
                                                                <ul class="justify pl-3">
                                                                    <li class="justify pl-2">Validación de campos alfabéticos.</li>
                                                                    <li class="justify pl-2">Validación de campos numéricos.</li>
                                                                    <li class="justify pl-2">Validación de números de teléfono.</li>
                                                                    <li class="justify pl-2">Validación de DNI/NIF/CIF.</li>
                                                                    <li class="justify pl-2">Validación de fechas.</li>
                                                                </ul><br />
                                                                <p class="justify"><strong>Definición de validaciones.</strong></p>
                                                                <p class="justify pl-2">Antes de implementar el código correspondiente a cada una de las validaciones a realizar será precisamente definir qué validaciones se van a llevar a cabo.</p>

                                                                <p class="justify"><strong>Código de validación.</strong></p>
                                                                <ul class="justify pl-3">
                                                                    <li class="justify pl-2">Función validarCampoObligatorio()</li>
                                                                    <li class="justify pl-2">Función validarCampoTexto()</li>
                                                                    <li class="justify pl-2">Función validarDni()</li>
                                                                    <li class="justify pl-2">Función validarFecha()</li>
                                                                    <li class="justify pl-2">Función validarTelefono()</li>
                                                                    <li class="justify pl-2">Función validarEmail</li>
                                                                    <li class="justify pl-2">Función validarSelect()</li>
                                                                    <li class="justify pl-2">Función validarCheckbox()</li>
                                                                    <li class="justify pl-2">Función validarRadiobutton()</li>
                                                                </ul><br />
                                                                <p class="justify"><strong>Ejecución del código de validación.</strong></p>
                                                                <p class="justify pl-2">La ejecución del código es un paso muy importante a la hora de desarrollar aplicaciones. Hay que probar todas y cada una de las funcionalidades de la aplicación.</p>

                                                        </div>
                                                    </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2212" role="button">Verificar formularios.</a>
                                                    <div class="collapse" id="U2212">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Identificación de datos.</strong></p>
                                                            <p class="justify pl-2">Los datos requeridos en un formulario dependerán de la finalidad de este.</p>

                                                            <p class="justify"><strong>Implementación del código de verificación.</strong></p>
                                                            <p class="justify pl-2">La validación del lado cliente, consigue que la notificación de un error cometido, sea instantánea, sin necesidad de recargar el formulario tras su envío.</p>

                                                            <p class="justify pl-2">La validación del lado servidor, consigue que la información que se ha de procesar en el servidor (BBDD) tiene el formato correcto.</p>


                                                            <p class="justify"><strong>Comprobación de los datos introducidos por el usuario.</strong></p>
                                                            <p class="justify pl-2">Se debe resolver el problema de la validación del formulario, intentando que los mensajes que ofrezca esta validación sean descriptivos y estén bien situados (sería de agradecer colores para diferenciar errores).</p>

                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 2. EFECTOS ESPECIALES EN PÁGINAS WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2221" role="button">Trabajar con imágenes: imágenes de sustitución e imágenes múltiples.</a>
                                                    <div class="collapse" id="U2221">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Formatos de imágenes.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">JPEG.</li>
                                                                <li class="justify pl-2">PNG.</li>
                                                                <li class="justify pl-2">GIF.</li>
                                                                <li class="justify pl-2">SVG.</li>
                                                                <li class="justify pl-2">BMP.</li>
                                                            </ul><br />
                                                            <p class="justify"><strong>Selección de imágenes.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Tipos de imagenes.</li>
                                                                <ul class="justify pl-5">
                                                                    <li class="justify pl-2">Imágenes vectoriales</li>
                                                                    <li class="justify pl-2">Imágenes bitmap</li>
                                                                </ul>
                                                                <li class="justify pl-2">Resolución</li>
                                                                <li class="justify pl-2">Profundidad del color.</li>
                                                                <li class="justify pl-2">Modo de color</li>
                                                                <ul class="justify pl-5">
                                                                    <li class="justify pl-2">HSB</li>
                                                                    <li class="justify pl-2">RGB</li>
                                                                    <li class="justify pl-2">CMYK</li>
                                                                </ul>
                                                            </ul><br />

                                                            <p class="justify"><strong>Optimización de imágenes.</strong></p>
                                                            <p class="justify pl-2">Proceso por el que aligeramos considerablemente el tamaño de una imagen mientras mantenemos una calidad suficiente.</p>

                                                            <p class="justify"><strong>Implementación de código con varias imágenes.</strong></p>
                                                            <p class="justify pl-2">Es posible conseguir efectos visuales muy llamativos usando tan solo varias imágenes a las que se aplican eventos o acciones mediante lenguajes de programación.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">imágenes de sustitución</li>
                                                                <li class="justify pl-2">imágenes secuenciales</li>
                                                                <li class="justify pl-2">Implementación de plugins y librerías</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2222" role="button">Trabajar con textos: efectos estéticos y de movimiento.</a>
                                                    <div class="collapse" id="U2222">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Creación de textos mejorados y con movimiento.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Efecto hover</li>
                                                                <li class="justify pl-2">Efecto mousedown/</li>
                                                                <li class="justify pl-2">Efecto mouseup</li>
                                                                <li class="justify pl-2">Efecto visited</li>
                                                            </ul><br/>
                                                            <p class="justify"><strong>Implementación de efectos.</strong></p>
                                                            <p class="justify pl-2">Para los textos, la mejor opción es simular el mismo efecto aplicando el código Javascript necesario y hacerlo tan complejo como se necesite.</p>

                                                            <p class="justify"><strong>Adecuación de los efectos a la página web.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;link rel=“stylesheet” type=“text/css” href=“css/styletablet.css” media=“screen and (max-device-width:1024px) and (orientation: landscape)” /&gt;</code></p>
                                                                </code><br />
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">@import url(“styletablet.css”) screen and (max-device-width:1024px) and (orientation: landscape)”;</code></p>
                                                                </code><br />
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">@media screen and (max-device-width:1024px) {<br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p{color: #36F; text-align: center; max-width:14em;}<br/>
                                                                }<br/>
                                                            </code><br />
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2223" role="button">Trabajar con marcos.</a>
                                                    <div class="collapse" id="U2223">
                                                        <div class="card card-body text-info">
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&lt;frameset cols=“20%, 80%”&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;frameset rows=“40%, 60%”&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;frame src=“marco1/index.html” noresize=“noresize”&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frame src=“marco2/index.html” noresize=“noresize”&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/frameset&gt;<br />
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;frame src=“marco3/index.html” noresize=“noresize”&gt;<br />
                                                                &lt;/frameset&gt;<br />
                                                            </code><br />
                                                            <p class="justify"><strong>Dónde utilizar los marcos.</strong></p>
                                                            <p class="justify pl-2">Normalmente, se utilizan para los sitios web complejos que pretenden mantener una o varias partes de la estructura de la página estáticas, es decir, que solo se vayan refrescando cuando haga falta y no a cada paso del usuario, como normalmente ocurre.</p>

                                                            <p class="justify"><strong>Limitaciones de los marco.</strong></p>
                                                            <p class="justify pl-2">El mayor problema es la falta de compatibilidad con cualquier software de accesibilidad, así como con dispositivos de pequeña resolución de pantalla.</p>

                                                            <p class="justify"><strong>Alternativas a los marcos.</strong></p>
                                                            <code class="d-block mx-auto bg-light shadow-sm p-3">style="width:85%">&lt;iframe width=“560” height=“315” src=“http://es.lipsum.com” frameborder=“1”&gt;<br />
                                                            &lt;/iframe&gt;<br />
                                                            </code><br />
                                                        </div>
                                                    </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2224" role="button">Trabajar con ventanas.</a>
                                                    <div class="collapse" id="U2224">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Creación de varias ventanas.</strong></p>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">window.open(“about:blank”,”_blank”,”width=1”,”height=1”);<br/>
                                                            </code><br />
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">window.open(“https://www.google.es/”, “nuevopopup”, “top=0,left=0,width=“+(screen.availWidth)+”,height=“+(screen.availHeight)+”, toolbar=0,location=0);<br/>
                                                            </code><br />
                                                            <p class="justify"><strong>Interactividad entre varias ventanas.</strong></p>
                                                            <p class="justify pl-2">Para hacer posible esta interacción, como para cerrarlas, es necesario almacenar las distintas ventanas secundarias en variables.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2225" role="button">Otros efectos.</a>
                                                    <div class="collapse" id="U2225">
                                                        <div class="card card-body text-info">
                                                            <p class="justify"><strong>Efectos con HTML.</strong></p>
                                                            <p class="justify pl-2"><strong>Canvas</strong>(Lienzo en inglés) es un elemento de HTML5, que permite la generación de gráficos dinámicamente por medio del desarrollo de scripts. Permite generar gráficos estáticos y animaciones.</p>

                                                            <p class="justify"><strong>Efectos con CSS.</strong></p>
                                                            <p class="justify pl-2">Mediante la propiedad “visibility:hidden”, conseguimos que las imágenes aparezcan o desaparezcan cuando se produzca un determinado evento.</p>

                                                            <p class="justify pl-2">La regla CSS3 “@keyframes” permite conseguir efectos muy elaborados.</p>

                                                            <p class="justify"><strong>Efectos con capas.</strong></p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Hide(), show().</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">$(selector).hide(velocidad,callback);<br />
                                                                    $(selector).show(velocidad,callback);<br />
                                                                </code><br />
                                                                <li class="justify pl-2">Los eventos fade</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">$(selector).fadeIn(velocidad,callback);<br />
                                                                    $(selector).fadeOut(velocidad,callback);<br />
                                                                    $(selector).fadeToggle(velocidad,callback);<br />
                                                                    $(selector).fadeTo(velocidad,opacidad,callback);<br />
                                                                    </code><br />
                                                            
                                                                <li class="justify pl-2">Los eventos slide</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">$(selector).slideDown(velocidad,callback);<br />
                                                                    $(selector).slideUp(velocidad,callback);<br />
                                                                    $(selector).slideToggle(velocidad,callback);<br />
                                                                </code><br />
                                                            
                                                                <li class="justify pl-2">animate()</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">$(selector).slideDown({parametros}velocidad,callback);<br />
                                                                </code><br />
                                                            
                                                                <li class="justify pl-2">stop()</li>
                                                                <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">$(selector).stop(stopAll,goToEnd);<br />
                                                                </code><br />
                                                            
                                                                <li class="justify pl-2">callback</li>
                                                                <p class="justify pl-4">Parámetro opcional que se puede incluir dentro de todos los efectos para que cuando terminen su funcionamiento llamen a una función definida.</p>

                                                                <li class="justify pl-2">Encadenamiento de efectos</li>
                                                                <code class="d-block mx-auto bg-light shadow-sm p-3">style="width:85%">$(“#logo”).anímate({top:20%},1500).fadeOut(500),anímate({top:”5%”}).fadeIn(500);</code></p>
                                                                </code><br />
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 3. PRUEBAS Y VERIFICACIÓN EN PÁGINAS WEB.
                                                <ul class="list-group">
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2231" role="button">Técnicas de verificación.</a>
                                                    <div class="collapse" id="U2231">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Fundamentales.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Estructura y contenido frente a diseño</li>
                                                                <li class="justify pl-2">Textos descriptivos</li>
                                                                <li class="justify pl-2">Páginas alternativas</li>
                                                                <li class="justify pl-2">Navegación</li>
                                                                <li class="justify pl-2">Comprensión</li>
                                                                <li class="justify pl-2">Acceso al contenido según las preferencias del usuario</li>
                                                                <li class="justify pl-2">Parpadeo de la pantalla</li>
                                                                <li class="justify pl-2">Documentos empaquetados</li>
                                                                <li class="justify pl-2">Validación</li>
                                                                <li class="justify pl-2">Audio y video</li>
                                                                <li class="justify pl-2">Información visual y movimiento</li>
                                                            </ul><br />
                                                            <p class="justify">Técnicas HTML.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Estructura del contenido y los metadatos</li>
                                                                <li class="justify pl-2">Información sobre el idioma</li>
                                                                <li class="justify pl-2">Marcado del texto</li>
                                                                <li class="justify pl-2">Listas</li>
                                                                <li class="justify pl-2">Tablas</li>
                                                                <li class="justify pl-2">Enlaces</li>
                                                                <li class="justify pl-2">Imágenes</li>
                                                                <li class="justify pl-2">Audio y video</li>
                                                                <li class="justify pl-2">Frames</li>
                                                                <li class="justify pl-2">Formularios</li>
                                                                <li class="justify pl-2">Scripts</li>
                                                            </ul><br />
                                                            <p class="justify">Técnicas CSS.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Menor número de hojas posible</li>
                                                                <li class="justify pl-2">Usar hojas de estilo vinculadas. No “style”</li>
                                                                <li class="justify pl-2">Los elementos del mismo tipo deben compartir la clase</li>
                                                                <li class="justify pl-2">El tamaños de letra en “em”, no en pixels.</li>
                                                                <li class="justify pl-2">Evitar las unidades de medida absolutas.</li>
                                                                <li class="justify pl-2">Lograr agrupar de forma sencilla imágenes importantes</li>
                                                                <li class="justify pl-2">Especificar siempre tipo de letra genérico por defecto</li>
                                                                <li class="justify pl-2">Evitar usar etiquetas de diseño con html, sino con CSS. </li>
                                                                <li class="justify pl-2">Evitar usar etiquetas de estilo con html, sino con CSS</li>
                                                                <li class="justify pl-2">&lt;blink&gt; y &lt;marquee&gt; no son estándares</li>
                                                                <li class="justify pl-2">Controlar formato y posición del texto con CSS</li>
                                                                <li class="justify pl-2">Especificar colores con número no con nombres.</li>
                                                                <li class="justify pl-2">Diferenciar las listas &lt;ol&gt; y &lt;ul&gt; ordenadas o no. </li>
                                                                <li class="justify pl-2">Evitar en lo posible tablas para maquetar.</li>
                                                                <li class="justify pl-2">Utilizar las hojas de estilo para crear líneas y bordes.</li>
                                                                <li class="justify pl-2">Estilo de texto con hojas de estilo mejor que imagenes</li>
                                                                <li class="justify pl-2">HTML coherente antes de CSS</li>
                                                                <li class="justify pl-2">Propiedades auditivas de CSS si son necesarias</li>
                                                                <li class="justify pl-2">Hojas de estilo diferentes según dispositivo de salida</li>

                                                            </ol>
                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2232" role="button">Herramientas de depuración para distintos navegadores.</a>
                                                    <div class="collapse" id="U2232">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Utilidades para Firebug.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Edición en tiempo real</li>
                                                                <li class="justify pl-2">Disposición de CSS</li>
                                                                <li class="justify pl-2">Depurador javascripts.</li>
                                                                <li class="justify pl-2">Buscador integrado.</li>
                                                                <li class="justify pl-2">Monitorización de la actividad de red.</li>
                                                                <li class="justify pl-2">Explorador de DOM</li>
                                                                <li class="justify pl-2">Gestor de errores</li>
                                                            </ul><br />

                                                            <p class="justify">Utilidades para HTML.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Pestaña Estilo</li>
                                                                <li class="justify pl-2">Pestaña Plantilla</li>
                                                                <li class="justify pl-2">Búsqueda de código HTML</li>
                                                                <li class="justify pl-2">Editar código HTML</li>
                                                            </ul><br />

                                                            <p class="justify">Utilidades para javascripts.</p>
                                                            <p class="justify pl-2">Firebug ofrece ciertas utilidades muy recomendadas a la hora de desarrollar y depurar código Javascript en el sitio.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Ejecutar código Javascript</li>
                                                                <li class="justify pl-2">Análisis del rendimiento</li>
                                                                <li class="justify pl-2">Pestaña Script</li>
                                                            </ul><br />

                                                            <p class="justify">Utilidades para CSS.</p>
                                                            <p class="justify pl-2">Con la pestaña CSS se accede al inspector de código de los distintos documentos CSS que pueda contener una página web.</p>

                                                            <p class="justify">Utilidades para DOM.</p>
                                                            <p class="justify pl-2">DOM es una interfaz de programación de aplicaciones (API) que contiene una serie de utilidades para manipular documentos HTML y XHTML de forma muy rápida y eficiente.</p>
                                                            <p class="justify">Utilidades para Red.</p>
                                                            <p class="justify pl-2">La pestaña Red se utiliza para visualizar el tiempo de carga de todos los elementos que forman una página web.</p>

                                                        </div>
                                                    </div>
                                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U2233" role="button">Verificación de la compatibilidad de scripts.</a>
                                                    <div class="collapse" id="U2233">
                                                        <div class="card card-body text-info">
                                                            <p class="justify">Parámetros para distintos navegadores.</p>
                                                            <p class="justify pl-2">Los navegadores disponen de funciones específicas de configuración que permiten mostrar el contenido web de una forma particular, pero similar al resto de navegadores.</p>

                                                            <p class="justify">Creación de código alternativo para diversos navegadores.</p>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Hacks y filtros
                                                                    <p class="justify pl-5">Un hack se utiliza cuando una regla de CSS es interpretada de forma diferente en distintos navegadores.</p>
                                                                </li>
                                                                <li class="justify pl-2">Código alternativo para detectar el nombre y la versión del navegador</li>
                                                                <ul class="justify pl-5">
                                                                    <li class="justify pl-2">appName(navigator.appName)</li>
                                                                    <li class="justify pl-2">appVersion(navigator.appVersion)</li>
                                                                </ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item border-0 bg-light text-dark">MF0952_2 PUBLICACIÓN DE PÁGINAS WEB
                                <ul class="list-group">
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 1. CARACTERÍSTICAS DE SEGURIDAD EN LA PUBLICACIÓN DE PÁGINAS WEB.
                                        <ul class="list-group">
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3111" role="button">Seguridad en distintos sistemas de archivos.</a>
                                            <div class="collapse" id="U3111">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Sistema operativo Linux.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Ext2</li>
                                                        <li class="justify pl-2">Ext3</li>
                                                        <li class="justify pl-2">Ext4</li>
                                                        <li class="justify pl-2">ReiserFS</li>
                                                        <li class="justify pl-2">XFS</li>
                                                        <li class="justify pl-2">JFS</li>
                                                    </ul><br/>
                                                    <p class="justify">Sistema operativo Windows.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Fat32</li>
                                                        <li class="justify pl-2">NFTS</li>
                                                        <li class="justify pl-2">ExFAT</li>
                                                    </ul><br/>
                                                    <p class="justify">Otros sistemas operativos.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">MAC OS X</li>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">HFs</li>
                                                            <li class="justify pl-2">HFS+</li>
                                                        </ul>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">MSDOS</li>
                                                            <li class="justify pl-2">FAT</li>
                                                        </ul>
                                                    </ul>
                                                </div>
                                            </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3112" role="button">Permisos de acceso.</a>
                                            <div class="collapse" id="U3112">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Tipos de accesos.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Linux</li>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">Cuentas y grupos</li>
                                                            <li class="justify pl-2">Tipos de permisos</li>
                                                        </ul>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">Windows</li>
                                                            <ul class="justify pl-3">
                                                                <li class="justify pl-2">Cuenta estándar</li>
                                                                <li class="justify pl-2">Cuenta invitado</li>
                                                                <li class="justify pl-2">Cuenta administrador</li>
                                                            </ul><br/>
                                                        </ul>
                                                        <p class="justify">Elección del tipo de acceso.</p>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">Linux</li>
                                                            <li class="justify pl-2">Permisos del propietario</li>
                                                            <li class="justify pl-2">Permisos del grupo</li>
                                                            <li class="justify pl-2">Permisos del resto</li>
                                                        </ul>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">Windows</li>
                                                            <li class="justify pl-2">Permisos explícitos</li>
                                                            <li class="justify pl-2">Permisos heredados</li>
                                                        </ul><br/>
                                                        <p class="justify">Implementación de accesos.</p>
                                                        <img src="../recursos/img/cursos/ifcd0110/uf3112.png" class="img-responsive d-block w-75 my-3 mx-auto bg-light p-3 shadow" alt="Implementación de accesos" title="Implementación de accesos">

                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3113" role="button">Órdenes de creación, modificación y borrado.</a>
                                            <div class="collapse" id="U3113">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Descripción de órdenes en distintos sistemas.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Linux</li>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">Creación</li>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&gt;touch[opciones][archivo]<br/>
                                                                &gt;gedit[ruta archivo]<br/>
                                                            </code><br/>
                                                            <li class="justify pl-2">Modificación</li>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&gt;mv[ruta origen][ruta destino]<br/>
                                                                &gt;vi nombre del archivo<br/>
                                                            </code><br/>
                                                            <li class="justify pl-2">Borrado</li>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">>&gt;rm [opciones][directorio]<br/>
                                                                &gt;rm [opciones][archivo]<br/>
                                                            </code><br/>
                                                        </ul>
                                                        <li class="justify pl-2">Windows</li>
                                                        <ul class="justify pl-3">
                                                            <li class="justify pl-2">Creación</li>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&gt;MD [ruta]<br/>
                                                                &gt;MKDIR [ruta]<br/>
                                                            </code><br/>
                                                            <li class="justify pl-2">Modificación </li>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">&gt;ren [ruta] archivo1 archivo2<br/>
                                                                &gt;move [ruta origen] [ruta destino]<br/>
                                                            </code><br/>
                                                            <li class="justify pl-2">Borrado</li>
                                                            <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">RD [parámetro][nombre]<br/>
                                                                &gt;DEL [parámetro][archivo]<br/>
                                                            </code><br/>
                                                        </ul>
                                                    </ul>
                                                    <p class="justify">Implementación y comprobación de las distintas órdenes.</p>
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3113.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow"  alt="Ordenes linux" title="Ordenes linux"><br />
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3113z.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Ordenes linux" title="Ordenes linux">
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 2. HERRAMIENTAS DE TRANSFERENCIA DE ARCHIVOS
                                        <ul class="list-group">
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3121" role="button">Parámetros de configuración.</a>
                                            <div class="collapse" id="U3121">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Parámetros genéricos.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">FireFTP</li>
                                                        <li class="justify pl-2">GoFTP</li>
                                                        <li class="justify pl-2">WinSCP</li>
                                                        <li class="justify pl-2">Filezilla</li>
                                                    </ul>
                                                    <p class="justify">Parámetros específicos para diferentes servidores.</p>
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3121.png" class="img-responsive w-75 my-3 mx-auto bg-light p-3 shadow" alt="Configuración filezilla" title="Configuración filezilla">
                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3122" role="button">Conexión con sistemas remotos.
                                            </a>
                                            <div class="collapse" id="U3122">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Descripción de sistemas remotos.</p>
                                                    <p class="justify pl-2">El acceso remoto es entrar desde un ordenador a un recurso ubicado físicamente en otro ordenador, a través de una red local o externa como Internet.

                                                    <p class="justify">Órdenes de conexión a sistemas remotos.</p>
                                                    <ul class="justify pl-4">
                                                        <li class="justify pl-2">Filezilla</li>
                                                        <li class="justify pl-2">Editor de páginas web</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3123" role="button">Operaciones y Comandos / órdenes para transferir archivos.</a>
                                            <div class="collapse" id="U3123">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Descripción de operaciones de transferencia de archivos.</p>
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3123a.png" class="img-responsive w-75 my-3 mx-auto bg-light p-3 shadow" alt="Transferencia de archivos"  title="Transferencia de archivos">
                                                    <p class="justify">Maneras de transferir archivos.</p>
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3123b.png" class="img-responsive w-75 my-3 mx-auto bg-light p-3 shadow"  alt="Transferencia de archivos"  title="Transferencia de archivos">
                                                    <p class="justify">Fases para la transferencia de archivos.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Configuración de las conexiones.</li>
                                                        <li class="justify pl-2">Al conectar nos muestra las ventanas origen y destino</li>
                                                        <li class="justify pl-2">Directorio public_html (crear si es necesario)</li>
                                                        <li class="justify pl-2">Transferir archivos</li>
                                                        <li class="justify pl-2">Desconexion</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3124" role="button">Operaciones y Comandos / órdenes para actualizar y eliminar archivos.</a>
                                            <div class="collapse" id="U3124">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Descripción de operaciones de actualización y borrado de archivos.</p>
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3124a.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Edición filezilla" title="Edición filezilla>
                                                    <p class="justify">Fases para la actualización de archivos.</p>
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3124b.png" class="img-responsive w-50 my-3 mx-auto p-3 shadow" alt="Actualizar filezilla" title="Actualizar filezilla">
                                                    <p class="justify">Fases para la eliminación de archivos.</p>
                                                    <img src="../recursos/img/cursos/ifcd0110/uf3124c.png" class="img-responsive w-50 my-3 mx-auto p-3 shadow" alt="Borrar filezilla" title="Borrar filezilla">
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 3. PUBLICACIÓN DE PÁGINAS WEB.
                                        <ul class="list-group">
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3131" role="button">Buscadores genéricos.</a>
                                            <div class="collapse" id="U3131">
                                               
                                                <div class="card card-body text-info">
                                                    <p class="justify pl-2">Un buscador es una página de internet que realiza búsquedas en la web usando spiders o arañas.</p>
                                                    <p class="justify pl-2">Los buscadores genéricos sirven para localizar webs cuyos contenidos traten de cualquier temática.</p>

                                                    <p class="justify">Inclusión de la página en diversos buscadores.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify">Hacer una lista con palabras clave</li>
                                                        <li class="justify">Llenar la página web con contenido optimizado</li>
                                                        <li class="justify">Herramientas de posicionamiento</li>
                                                        <li class="justify">Crear enlaces externos hacia la página web</li>
                                                        <li class="justify">Analizar tráfico</li><br/>
                                                    </ul>

                                                    <p class="justify">Google, Altavista, etc.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify">Google</li>
                                                        <li class="justify">Altavista</li>
                                                        <li class="justify">Bing</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3132" role="button">Buscadores especializados.</a>
                                            <div class="collapse" id="U3132">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Inclusión de la página en diversos buscadores.</p>
                                                    <p class="justify pl-2">Al dar de alta una web, el objetivo es lograr una presencia exitosa en internet.</p>
                                                    <p class="justify pl-2">La especialización es su principal ventaja, y ad más su principal inconveniente</p>

                                                    <p class="justify">Temáticos.</p>
                                                    <p class="justify pl-2">Es un tipo de buscador cuyas búsquedas están restringidas a un sector o dominio específico.</p>

                                                    <p class="justify">Metabuscadores.</p>
                                                    <p class="justify pl-2">Es un sistema de buscador que no dispone de motor de búsqueda propio.</p>

                                                    <p class="justify">Geográficos.</p>
                                                    <p class="justify pl-2">Es un buscador basado en directorios gráficos que utiliza los mapas geográficos</p>
                                                    <p class="justify">Por categorías.</p>
                                                    <p class="justify pl-2">Los buscadores por categorías se basan en la clasificación de los contenidos de las webs por temas, como educación, deporte, salud, etc.</p>

                                                    <p class="justify">Por palabras clave.</p>
                                                    <p class="justify pl-2">Los buscadores por palabras clave son muy útiles ya que permiten buscar uno o más términos en su motor de búsqueda.</p>

                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3133" role="button">Descriptores: palabras clave y sistemas normalizados de «metadatos».</a>
                                            <div class="collapse" id="U3133">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Definición de descriptores.</p>
                                                     <img src="../recursos/img/cursos/ifcd0110/uf3133.png" class="img-responsive w-75 my-3 mx-auto bg-light p-3 shadow" alt="Descriptores" title="Descriptores">
                                                    <p class="justify pl-2">Es una palabra o conjunto de palabras que reflejan conceptos representativos de un documento y que están dentro de un tesauro.</p>

                                                    <p class="justify">Utilidad de los descriptores.</p>
                                                    <p class="justify pl-2">Los descriptores representan la información de un documento de una manera única y específico.</p>

                                                    <p class="justify">Incorporación de los descriptores en un página web.</p>
                                                    <p class="justify pl-2">No tiene mucho sentido a la hora de optimizar una página web utilizar palabras o frases clave que no sean buscadas con mucha frecuencia o utilizar términos muy generales.</p>

                                                </div>
                                            </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3134" role="button">Aplicaciones de publicación automatizada.</a>
                                            <div class="collapse" id="U3134">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Aplicaciones gratuitas.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Software.</li>
                                                        <li class="justify pl-2">Gestores de contenidos.</li>
                                                        <li class="justify pl-2">Boletines electrónicos o newsletter</li>
                                                        <li class="justify pl-2">Autoresponders</li>
                                                        <li class="justify pl-2">Encuestas</li>
                                                        <li class="justify pl-2">Chat</li>
                                                        <li class="justify pl-2">RSS</li><br/>
                                                    </ul>    

                                                    <p class="justify">Aplicaciones incorporadas a servidores gratuitos.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Características para escoger un servidor</li>
                                                        <li class="justify pl-2">Soporte MYSQL</li>
                                                        <li class="justify pl-2">Espacio</li>
                                                        <li class="justify pl-2">Transferencia</li>
                                                        <li class="justify pl-2">Servicio Técnico</li>
                                                        <li class="justify pl-2">Subdominios</li><br/>
                                                    </ul>
                                                    <p class="justify">Aplicaciones incorporadas a servidores de pago.</p>
                                                    <p class="justify pl-2">Los hosting de pago ofrecen todos los servicios que están limitados en los alojamientos gratuitos. Ideal para fines profesionales.</p>

                                                </div>
                                            </div>
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3135" role="button">Procedimientos de publicación.
                                            </a>
                                            <div class="collapse" id="U3135">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Organización de la información a publicar.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Formato en árbol</li>
                                                        <li class="justify pl-2">Formato en red</li>
                                                        <li class="justify pl-2">Formato en lista</li>
                                                        <li class="justify pl-2">Formato en mixto</li><br/>
                                                    </ul>
                                                    <p class="justify">Ubicación de la información a publicar.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">En la raíz del sitio tiene que estar como mínimo la pagina de inicio, index.html.</li>
                                                        <li class="justify pl-2">Los tipos de archivo se organizan en carpetas.</li>
                                                        <li class="justify pl-2">Si tiene secciones claramente definidas, se pueden guardar sus páginas en subcarpetas.</li><br/>
                                                    </ul>

                                                    <p class="justify">Especificación de la ubicación de los diferentes archivos.</p>
                                                     <img src="../recursos/img/cursos/ifcd0110/uf3135.png" class="img-responsive w-75 my-3 mx-auto p-3 shadow" alt="Ubicación de archivos" title="Ubicación de archivos">
                                                    <p class="justify">Fases para publicar la página web.</p>
                                                    <ul class="justify pl-3">    
                                                        <li class="justify pl-2">Prueba de forma local.</li>
                                                        <li class="justify pl-2">Solicitar cuenta en un servidor web.</li>
                                                        <li class="justify pl-2">Transfiera la página mediante FTP.</li>
                                                        <li class="justify pl-2">Pruebe de forma remota.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="list-group-item border-0 bg-light text-dark">UNIDAD DIDÁCTICA 4. PRUEBAS Y VERIFICACIÓN DE PÁGINAS WEB.
                                        <ul class="list-group">
                                            <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3141" role="button">Técnicas de verificación.</a>
                                            <div class="collapse" id="U3141">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Verificar en base a criterios de calidad.</p>
                                                    <p class="justify pl-2">La mejor forma para analizar la calidad de una página web es utilizando el estándar W3C (World Wide Web  Consortium)</p>
                                                    <code class="d-block mx-auto w-75 bg-light shadow-sm p-3">http://validator.w3.org
                                                    </code><br/>

                                                    <p class="justify">Verificar en base a criterios de usabilidad.</p>
                                                    <p class="justify pl-2">La usabilidad orientada al diseño de páginas webs estudia la forma de diseñarlas para que se produzca una navegación cómoda y fácil para los usuarios.</p>

                                                </div>
                                            </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3142" role="button">Herramientas de depuración para distintos navegadores.</a>
                                            <div class="collapse" id="U3142">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Herramientas para Mozilla.</p>
                                                    <p class="justify pl-2">En Firefox se integran herramientas para desarrolladores.</p>
                                                    <ul class="justify pl-3">
                                                        <li>Firebug</li><br/>
                                                    </ul>
                                                    <p class="justify">Herramientas para Internet Explorer.</p>
                                                    <p class="justify pl-2">Las herramientas de desarrollo de Internet Explorer permiten analizar las hojas de estilo CSS y el código HTML.</p>

                                                    <p class="justify">Herramientas para Opera.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Opera Dragonfly</li>
                                                        <li class="justify pl-2">Opera Next</li>
                                                        <li class="justify pl-2">La consola de errores</li>
                                                        <li class="justify pl-2">Visor de código fuente</li>
                                                    </ul>

                                                    <p class="justify">Creación y utilización de funciones de depuración.</p>
                                                    <p class="justify pl-2">La herramienta consola de cualquier navegador permite registrar alertas y mensajes de error, registrados en consola.</p>

                                                    <p class="justify">Otras herramientas.</p>
                                                    <p  class="justify pl-2">Google Chrome</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Consola Javascript</li>
                                                        <li class="justify pl-2">Administrador de tareas</li>
                                                        <li class="justify pl-2">Herramientas para desarrolladores</li>
                                                        <li class="justify pl-2">Ver código fuente</li>
                                                    </ul>
                                                </div>
                                            </div><a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#U3143" role="button">Navegadores: tipos y «plug-ins».</a>
                                            <div class="collapse" id="U3143">
                                                <div class="card card-body text-info">
                                                    <p class="justify">Descripción de complementos.</p>
                                                    <p class="justify pl-2">Los plugins o complementos, son software que se agrega para aumentar las funcionalidades de las aplicaciones.</p>

                                                    <p class="justify">Complementos para imágenes.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Autocad.</li>
                                                        <li class="justify pl-2">Picasa</li>
                                                        <li class="justify pl-2">Google Earth Plug-in</li><br/>
                                                    </ul>
                                                    <p class="justify">Complementos para música.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">QuickTime.</li>
                                                        <li class="justify pl-2">Windows Media Player</li>
                                                        <li class="justify pl-2">Real Player</li><br/>
                                                    </ul>
                                                    <p class="justify">Complementos para vídeo.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Shockwave Flash o Flash Player.</li>
                                                        <li class="justify pl-2">Microsoft Silverlight</li>
                                                        <li class="justify pl-2">Real Player</li>
                                                        <li class="justify pl-2">QuickTime</li>
                                                        <li class="justify pl-2">Windows Media Player</li><br/>
                                                    </ul>
                                                    <p class="justify">Complementos para contenidos.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Microsoft Office.</li>
                                                        <li class="justify pl-2">Adobe Reader.</li><br/>
                                                    </ul>
                                                    <p class="justify">Máquinas virtuales.</p>
                                                    <p class="justify pl-2">Software que permite recrear el sistema de un ordenador en el mismo.</p>
                                                    <ul class="justify pl-3">
                                                        <li class="justify pl-2">Java</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                           <!--  <li class="list-group-item border-0 bg-light text-dark">MP0278 MÓDULOS DE PRÁCTICAS PROFESIONALES NO LABORALES DE CONFECCIÓN Y PUBLICACIÓN DE PÁGINAS WEB.

                                <ul class="list-group">
                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#UP111" role="button">Creación de páginas web.</a>
                                    <div class="collapse" id="UP111">
                                        <div class="card card-body text-info">
                                            – Descripción de los procedimientos empresariales de creación, retoque e integración de componentes software.
                                            – Entornos de desarrollo y herramientas específicas utilizadas en la empresa.
                                            – Especificaciones de diseño gráfico corporativo.
                                            – Fuentes de información utilizada y generada.
                                            – Criterios de usabilidad y accesibilidad definidos por la organización.
                                            – Documentación de los procesos de acuerdo con los procedimientos de la empresa.
                                            – Planes de seguridad y calidad de la organización.
                                        </div>
                                    </div>
                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#UP112" role="button">Publicación de páginas web.</a>
                                    <div class="collapse" id="UP112">
                                        <div class="card card-body text-info">
                                            – Descripción de los procedimientos empresariales y de seguridad en la publicación de páginas web.
                                            – Herramientas de transferencia y software específico utilizado por la empresa para la publicación de páginas web,
                                            – Documentación de los procesos de acuerdo con los procedimientos de la empresa.
                                        </div>
                                    </div>
                                    <a class="list-group-item  border-0 bg-light text-dark" data-toggle="collapse" href="#UP113" role="button">Integración y comunicación en el centro de trabajo</a>
                                    <div class="collapse" id="UP113">
                                        <div class="card card-body text-info">
                                            – Comportamiento responsable en el centro de trabajo.
                                            – Respeto a los procedimientos y normas del centro de trabajo.
                                            – Interpretación y ejecución con diligencia las instrucciones recibidas.
                                            – Reconocimiento de los canales de comunicación establecidos en el centro de trabajo.
                                            – Adecuación al ritmo de trabajo de la empresa.
                                            – Seguimiento de las normativas de prevención de riesgos, salud laboral y protección del medio ambiente.

                                        </div>
                                    </div>
                                </ul>
                            </li> -->
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
