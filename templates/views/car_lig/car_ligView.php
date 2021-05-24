<?php require_once INCLUDES.'header.php'; ?>

<div class="container">
    <br>

    <div class="clearfix">
        
        <img src="<?php echo IMAGES.'c&l.png'; ?>" class="col-12 col-md-6 float-md-end mb-3 ms-md-3">
        <h1 class="display-5 fw-bold lh-1 mb-3">Cargadores & Ligadores</h1>
        <p class="text-justify">
            La mayor parte de los programas se componen de más de un procedimiento.
            Los compiladores y ensambladores suelen traducir un procedimiento a la 
            vez y guardan en memoria secundaria el resultado de esta traducción. 
            Antes de que pueda ejecutarse el programa, todos los procedimientos 
            traducidos deben recuperarse y ligarse correctamente. Si no se dispone 
            de memoria virtual, el programa enlazado debe cargarse explícitamente 
            en memoria. Los programas que realizan estas funciones reciben varios 
            nombres, como cargador (loader), cargador montado (linking loader) y 
            editor de enlaces (linkage editor).
        </p>
        <p class="text-justify">
            La traducción completa de un programa fuente se efectúa en dos pasos: <br>
            <ul>
                <li> Compilación o ensamblaje de los procedimientos fuente. </li>
                <li> Encadenamiento (linking) o montaje de los módulos objeto. </li>
            </ul>
        </p> 
    </div>
    
    <div class="row">
        <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button onclick="tabsCargador();" class="nav-link active fw-bold bg-none" id="btnCargador">Cargadores</button>
                </li>
                <li class="nav-item">
                    <button onclick="tabsLigador();" class="nav-link text-secondary bg-none" id="btnLigador">Ligadores</button>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="clearfix" id="infoCargador"> <br>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">¿Que es?</h4>
        </p>
        <p class="text-justify">
            Es un programa especial, parte del sistema operativo que tiene como 
            propósito colocar en la memoria las instrucciones y datos de un programa 
            o información codificada en lenguaje máquina, para que entonces la 
            computadora pueda procesarla. Un cargador es un programa que realiza 
            la función de carga, pero muchos cargadores también incluyen 
            relocalización y ligado. Algunos sistemas tienen un ligador para 
            realizar las operaciones de enlace, y un cargador separado para manejar 
            la relocalización y la carga. Los procesos de ensamblado y carga están 
            íntimamente relacionados.
        </p>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">¿Como Funciona?</h4>
        </p>
        <p class="text-justify">
            Colocar un programa objeto en la memoria e iniciar su ejecución.
            Si tenemos un cargador que no necesita realizar las funciones de ligado 
            y relocalización de programas, su operación es muy simple, pues todas 
            las funciones se realizan en un solo paso. Se revisa el registro 
            de encabezamiento para comprobar se ha presentado el programa correcto 
            para la carga (entrando en la memoria disponible). A medida que se 
            lee cada registro de texto, el código objeto que contiene pasa a la 
            dirección de memoria indicada. Cuando se encuentra el registro de fin, 
            el cargador salta a al dirección especificada para iniciar la ejecución
            del programa cargado. Un programa objeto contiene instrucciones 
            traducidas y valores de datos del programa fuente, y específica 
            direcciones en memoria donde se cargarán estos elementos. Las funciones 
            de un cargador son relativamente sencillas y consisten en extraer 
            información de algún medio exterior de la memoria (por ejemplo: CD 
            Discos) y chocarlo en celdas sucesivas de la memoria a partir de una 
            celda pre especificada. El cargador realiza la última etapa del proceso 
            de traducción: cargar el programa en memoria donde puede ser ejecutado.
            Una opción típica del cargador permite la selección de fuentes 
            alternativas de entrada. Otros mandatos permiten al usuario eliminar 
            símbolos externos o secciones de control completas. También es posible 
            cambiar referencias externas dentro del programa que se está cargando, 
            La mayoría de los cargadores permiten al usuario especificar 
            alternativas para búsqueda por medio de una proposición de tipo LIBRARY.
        </p>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">Tipos de Cargadores</h4>
        </p>
        <p class="text-justify">
            <ul class="text-justify">
                <li>
                    <Strong>Cargadores Iniciales - </Strong>
                    Indican a la computadora la forma de poner, dentro de la memoria 
                    principal, unos datos que están guardados en un periférico de 
                    memoria externa (cinta, disco, etc.). Sirven para cargar en la 
                    memoria pequeños programas que inician el funcionamiento de una 
                    computadora. Algunas computadoras de carácter general no tienen 
                    en memoria ningún programa de forma permanente y cuando se 
                    desconectan pierden toda la información de su memoria interna. 
                    Al volverlos a conectar no son capaces de controlar ningún 
                    periférico (teclado, discos, etc.). Esto se hace así para que 
                    sea el usuario el que ponga los programas que le interese ejecutar.
                </li>
                <li>
                    <Strong>Cargadores Absolutos - </Strong>
                    Como ya se menciono el programa cargador pone en memoria las 
                    instrucciones guardadas en sistemas externos. Independientemente 
                    de que sea un cargador inicial o no, si dichas instrucciones se 
                    almacenan siempre en ele mismo espacio de memoria (cada vez que 
                    se ejecuta el programa cargador), se dice que es un 
                    cargador absoluto.
                </li>
                <li>
                    <Strong>Cargadores con reubicación - </Strong>
                    En ocasiones, un mismo programa necesita ejecutarse en diferentes 
                    posiciones de memoria. Para esto la traducción debe estar realizada 
                    en forma adecuada, es decir, no utilizando referencias absolutas a 
                    direcciones de memoria, sino referencias relativas a una dirección 
                    especial llamada dirección de reubicación. El cálculo de las 
                    direcciones reubicables lo realiza el propio cargador a medida 
                    que va guardando las instrucciones en el espacio de memoria que 
                    le indique el usuario o el propio sistema operativo de la máquina.
                    A los cargadores que permiten estas operaciones se les denominan 
                    cargadores con reubicación.
                </li>
                <li>
                    <Strong>Cargadores Ligadores - </Strong>
                    Conocidos también por su término inglés Link editor o simplemente 
                    Linker, es muy común también referirse a él por la castellanización 
                    del nombre inglés, 'lincador.' A la acción de montar se le llama 
                    asimismo vulgarmente 'lincar'. Montar un programa consiste en añadir 
                    al programa objeto obtenido en la traducción las rutinas externas a 
                    las que hace referencia dicho programa. El ensamblador debe permitir 
                    dichas referencias y las rutinas deben estar a su vez en lenguaje 
                    máquina guardadas en algún elemento accesible por el montador. 
                    Generalmente, dichas rutinas se encuentran guardadas en un fichero 
                    especial al que suele denominarse librería, porque están almacenadas 
                    todas las rutinas externas susceptibles de ser utilizadas por los 
                    diferentes programas del usuario. Allí va el programa ligador cuando 
                    esta realizando el montaje de un programa a buscarlas y las adjunta 
                    al programa objeto.
                </li>
            </ul>
        </p>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">Proceso de carga absoluta</h4>
        </p>
        <p class="text-justify">
          Los cargadores absolutos existen en sistemas de los que los compiladores generan 
          código absoluto (no relocalizables). De esta forma se obliga a que el programa se 
          obliga a cargar las mismas posiciones son relativamente pero no permiten tener 
          multiprogramación. 
        </p>
        <p class="text-justify">
          La carga absoluta necesita que el modulo de carga ocupe siempre 
          la misma posición de memoria principal. Así pues, todas las referencias del modulo 
          de carga para el cargador deben ser direcciones especificas o absolutas en memoria 
          principal. La asignación de direcciones específica a la referencia de memoria de un 
          programa puede ser realizada tanto por el programador en tiempo de compilación o 
          ensamblaje. 
        </p>
        <p class="text-justify">
          Con este método se tienen varias desventajas las cuales son: <br>
          ¤ Todos los programadores tendrán que conocer la estrategia de asignación deseada para 
          situar los módulos en memoria principal.  <br>
          ¤ Si se hace alguna modificación en el programa que se suponga inserciones o 
          borrados en el cuerpo modulo tendrán que cambiarse las direcciones por consiguiente
          es expresar simbólicamente y que se resuelvan en el momento de la compilación o ensamblaje. 
          Cuando se prepara el modulo para la entrada a un cargador absoluto, el ensamblador 
          o el compilador convertirá todas esas diferencias a direcciones. Se denomina cargador absoluto 
          porque carga el programa ejecutable en una posición fija. En algunas cargadores 
          absolutos la dirección de carga esta denominada por un campo en el encabezado 
          del archivo ejecutable.
        </p>
        <pre class="cpp" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/***definir la estructura del registro de encabezado ***/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">struct</span> enc_ejec<span style="color: #008000;">&#123;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">unsigned</span> <span style="color: #0000ff;">int</span> dir_ini<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/* las otras partes del encabezado del archivo ejecutable */</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#125;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/***prototipos para las funciones usadas por el cargador***/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">struct</span> enc_ejec leer_enc<span style="color: #008000;">&#40;</span> <span style="color: #0000ff;">FILE</span> <span style="color: #000040;">*</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">char</span> leer_byte <span style="color: #008000;">&#40;</span> <span style="color: #0000ff;">FILE</span> <span style="color: #000040;">*</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/***--------el cargador ---------***/</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">char</span> <span style="color: #000040;">*</span>carga <span style="color: #008000;">&#40;</span>File <span style="color: #000040;">*</span>arch_ejec<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#123;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">struct</span> enc enc_ejec encabezado <span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">char</span> <span style="color: #000040;">*</span>dire_byte<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/* leer encabezado del archivo */</span><span style="color: #000040;">*</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">encabezado <span style="color: #000080;">=</span> leer enc<span style="color: #008000;">&#40;</span>arch_ejec<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/*copiar a la memoria los segmentos de texto y datos */</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">dir_byte <span style="color: #000080;">=</span> DIR_CARGA<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span>leof<span style="color: #008000;">&#40;</span>arch_ejec<span style="color: #008000;">&#41;</span><span style="color: #008000;">&#41;</span><span style="color: #008000;">&#123;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">dir_byte<span style="color: #000080;">=</span>leer <span style="color: #008000;">&#40;</span>arch_ejec<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">dir_byte<span style="color: #000080;">=</span> dir_byte<span style="color: #000040;">+</span><span style="color: #0000dd;">1</span> <span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#125;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">return</span> <span style="color: #008000;">&#40;</span><span style="color: #0000ff;">char</span><span style="color: #000040;">*</span><span style="color: #008000;">&#41;</span> encabezado dir_ini<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#125;</span></div></li></ol></pre>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">Proceso de carga relocalizable</h4>
        </p>
        <p class="text-justify">
          En la relocalización dinámica se establece la correspondencia entre las direcciones usadas 
          en el programa a y direcciones físicas cada vez que se utilizan durante la ejecución del 
          programa. Las direcciones 1ógicas generadas por el ensamblador y el enlazador no se alteran 
          durante la carga. Comenzaremos por ver un sencillo método en el cual el programa se carga en 
          posiciones contiguas de la memoria; es decir, el programa no esta disperso por la memoria. 
          En la figura 1.2 se presenta un cargador sencillo que puede usarse con la relocalización 
          dinámica. En este caso, el cargador lee el encabezado del archivo ejecutable y determina 
          la cantidad de espacio necesaria para el programa. Después asigna espacio suficiente para 
          el programa y copia el archivo ejecutable a memoria. Cuando se carga el programa en la memoria, 
          el cargador establece la correspondencia necesaria para el programa, pasando la dirección de 
          carga y el tamaño del programa a una rutina llamada establecer_ correspondencia. AI leer este 
          código, observe que la función de carga devuelve un entero sin signo en lugar de un apuntador. 
          Esto refleja el hecho de que la dirección inicial es una dirección 1ógica y no una dirección física.
        </p>
        <pre class="cpp" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/*Pseudo código para un cargador sencillo (relocalización dinámica)*/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">Struct enc_ejc<span style="color: #008000;">&#123;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">Unsigned <span style="color: #0000ff;">int</span> dir_ini<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">Unsigned <span style="color: #0000ff;">int</span> tamaño_texto, tamaño_datos, tamaño_bss<span style="color: #008080;">;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/*otros campos del registro de encabezado*/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#125;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/***prototipo para las funciones usadas por el cargador***/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">struct</span> enc_leer_enc<span style="color: #008000;">&#40;</span><span style="color: #0000ff;">FILE</span><span style="color: #000040;">*</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">char</span> leer_byte<span style="color: #008000;">&#40;</span><span style="color: #0000ff;">FILE</span><span style="color: #000040;">*</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">char</span><span style="color: #000040;">*</span>obtener_memoria<span style="color: #008000;">&#40;</span><span style="color: #0000ff;">unsigned</span> <span style="color: #0000ff;">int</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">void</span> establecer_correspondencia<span style="color: #008000;">&#40;</span><span style="color: #0000ff;">char</span><span style="color: #000040;">*</span><span style="color: #0000ff;">unsigned</span> <span style="color: #0000ff;">int</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/***el cargador***/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">unsigned</span> <span style="color: #0000ff;">int</span><span style="color: #000040;">*</span>carga <span style="color: #008000;">&#40;</span><span style="color: #0000ff;">FILE</span><span style="color: #000040;">*</span>arch_ejec<span style="color: #008000;">&#41;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#123;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">struct</span> enc_ejec encabezado<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">char</span><span style="color: #000040;">*</span>dir<span style="color: #000040;">-</span>byte, <span style="color: #000040;">*</span>dir_carga<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">unsigned</span> <span style="color: #0000ff;">int</span> tamaño_prog<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">encabezado<span style="color: #000080;">=</span>leer_rnc<span style="color: #008000;">&#40;</span>arch_ejec<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/*determinar el tamaño del programa y asignar el espacio*/</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">tamaño_prog<span style="color: #000080;">=</span>encabezado.<span style="color: #007788;">tama</span>ño_texto <span style="color: #000040;">+</span> encabezado. <span style="color: #007788;">Tama</span>ño_datos<span style="color: #000040;">+</span> encabezado.<span style="color: #007788;">tama</span>ño_bss<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">dir_carga<span style="color: #000080;">=</span>obtener_memoria <span style="color: #008000;">&#40;</span>tamaño_prg<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/*copiar los segmentos de texto y datos*/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">dir_byte <span style="color: #000080;">=</span>dir_carga<span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">while</span><span style="color: #008000;">&#40;</span><span style="color: #000040;">!</span>eof<span style="color: #008000;">&#40;</span>arch_ejec<span style="color: #008000;">&#41;</span><span style="color: #008000;">&#123;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #000040;">*</span>dir_byte<span style="color: #000080;">=</span>leer_byte<span style="color: #008000;">&#40;</span>arch_ejec<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">dir_byte<span style="color: #000080;">=</span>dir_byte<span style="color: #000040;">+</span><span style="color: #0000dd;">1</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#125;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #ff0000; font-style: italic;">/*establecer la correspondencia de direcciones*/</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">establecer_correspondencia<span style="color: #008000;">&#40;</span>dir_carga,tamaño_prog<span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #0000ff;">return</span> <span style="color: #008000;">&#40;</span><span style="color: #008000;">&#40;</span><span style="color: #0000ff;">char</span><span style="color: #000040;">*</span><span style="color: #008000;">&#41;</span>encabezado.<span style="color: #007788;">dir_ini</span><span style="color: #008000;">&#41;</span><span style="color: #008080;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #008000;">&#125;</span></div></li></ol></pre>
    </div>

    <div class="clearfix hidden" id="infoLigador"> <br>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">¿Que es?</h4>
        </p>
        <p class="text-justify">
            Es un programa que enlaza todos los programas o módulos obteniendo lo 
            que denominamos programa ejecutable. Es un programa que enlaza 
            distintos módulos o programas que poseen subprogramas. Además 
            incorporan las denominadas rutinas de librerías en caso de solicitarlas 
            el propio programa.
        </p>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">¿Como Funciona?</h4>
        </p>
        <p class="text-justify">
            Los editores de ligado pueden efectuar varias funciones últimas a demás 
            de la simple preparación de un programa objeto para su ejecución estos 
            también se pueden utilizar para construir paquetes de subrutinas u 
            otras secciones que suelen utilizar juntas. Esto puede ser útil al 
            tratar con bibliotecas de subrutinas que manejan lenguajes de 
            programación de alto nivel. Comparados con los cargadores de ligadores 
            los editores de ligado en general tienden a ofrecer mayor flexibilidad 
            y control con el correspondiente incremento e complejidad y sobrecarga.
            La tarea principal del enlazador es resolver referencias externas lleva 
            a cabo la siguiente etapa del proceso de traducción enlazando los 
            módulos ensambladores y los acervos para formar un programa completo. 
            En algunos sistemas el cargador simplemente copia el programa ejecutable 
            a las posiciones de memorias apropiadas.
        </p>
        <p class="text-justify">
            Sus principales funciones son:
            <ul class="text-justify">
                <li>Enlazar código intermedio compilado independientemente en un solo módulo de carga resolviendo las diferencias entre Tokens.</li>
                <li>Incorpora las denominadas rutinas de librerías en caso de solicitarlas el propio programa.</li>
                <li>Su función es reducir procedimientos traducidos por separado y enlazarlos para que se ejecuten como una unidad llamada programa binario ejecutable.</li>
            </ul>
        </p>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">Tipos de Ligadores</h4>
        </p>
        <p class="text-justify">
            <ul class="text-justify">
                <li>
                    <Strong>Editores de Ligado - </Strong>
                    La diferencia fundamental entre un editor de ligado y un cargador 
                    ligador es: Primero se ensambla o compila el programa fuente, produciendo 
                    un programa objeto (que puede contener varias secciones de control 
                    diferentes). Un cargador ligador realiza todas las operaciones de ligado 
                    y relocalización, incluyendo búsqueda automática en bibliotecas, si se 
                    especifica, y carga el programa ligado directamente en la memoria para 
                    su ejecución. Por otro lado, un editor de ligado produce una versión 
                    ligada del programa (llamada a menudo módulo de carga o imagen ejecutable), 
                    que se escribe un archivo o biblioteca para su ejecución posterior. Cuando 
                    el usuario esta listo para ejecutar el programa ligado, se puede utilizar 
                    un cargador relocalizador simple para cargar el programa en la memoria.
                    El editor de ligado realiza relocalización de todas las secciones de 
                    control relativas al inicio del programa ligado.
                </li>
                <li>
                    <Strong>Ligador Dinamico - </Strong>
                    El ligador dinámico ofrece algunas ventajas sobre los otros tipos de ligado. 
                    Proporciona la posibilidad de cargar las rutinas sólo cuando y si se necesitan. Si las subrutinas son grandes o tienen muchas referencias externas, se pueden conseguir ahorros considerables de tiempo y espacio de memoria.
                    Cuando se util ligador dinámico, la asociación de una dirección real y el 
                    nombre simbólico de la rutina llamada no se hace hasta que se ejecuta la 
                    proposición llamada.
                </li>
                <li>
                    <Strong>Ligador del Sistema Vax - </Strong>
                    El ligador VAX es un editor de ligado que realiza las mismas funciones 
                    básicas alcanzadas con anterioridad. La acción del ligador en la creación 
                    de las secciones de imagen está controlada por ensamblador o compilador 
                    por medio de una secuencia de mandatos que forman parte del programa objeto.
                    El lenguaje de mandatos ofrece una gran diversidad de posibilidades: hay 
                    más de 50 códigos de mandatos posibles. El ligador VAX puede generar tres 
                    tipos de imágenes. Una imagen ejecutable es aquella adecuada para la carga 
                    y ejecución; sin embargo, el ligador no puede reprocesar este tipo de imagen. 
                    Una imagen compartible no es ejecutable, pero el ligador puede reprocesarla, 
                    y se puede utilizar, por ejemplo como tapa intermedia en el ligado de un 
                    programa muy grande. Las imágenes compartibles también hacen posibles que 
                    diferentes Programas compartan la misma copia de ciertas instrucciones o 
                    área de datos. El tercer tipo de imagen que puede crear el ligado es una 
                    imagen de sistema, concebida para ser ejecutada directamente en la máquina VAX.
                </li>
                <li>
                    <Strong>Editor de Ligado del Sistama /370 - </Strong>
                    El formato de los programas objeto manejado por el editor de ligado del 
                    SISTEMA /370 es muy parecido al analizado para SIC/XE. La técnica de 
                    referencia a un número se usa para mejorar la eficiencia. El programa 
                    de salida del editor de ligado se llama módulo de carga, y puede cargarse 
                    en la memoria para su ejecución, y suele contener suficiente información 
                    para permitir que el editor de ligado los reprocese.
                </li>
            </ul>
        </p>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">Ligadura de Subrutinas</h4>
        </p>
        <p class="text-justify">
          El enlace de una subrutina es la estructura con que se comparte la información entere 
          el involucrado. El involucrado proporciona la dirección de retorno al involucrado como 
          parte del enlace de subrutina .El involucrado establece lo que resta del enlacen de 
          subrutina en el programa el cual puede establecer estar vació.
        </p>
        <p class="text-justify">
        Ligar un programa consiste en añadir al programa objeto u programa ejecutable. El ensamblador 
        debe permitir dichas referencias y las rutinas deben esta a su vez en lenguaje maquina 
        guardadas en alguna elemento accesible por el montador .Dichas subrutinas se encuentran 
        guardadas en algún elemento accesible por el que se suele denominarse librería porque ahí 
        están almacenados todas las rutinas externas susceptibles de ser utilizadas por los diferentes 
        programas del usuario ahí va el programa ligado cuando esta realizando el montaje de un 
        programa a buscarlas y las adjunta sal programa objeto as esto a este proceso se le llama 
        ligadura de rutinas y subrutinas.
        </p>
        <p class="text-justify">
          Los siguientes puntos son razones para un programa en subprogramas: <br>
          <ul>
            <li>Vincular entre lenguajes es decir combinar el poder computacional de un lenguaje de 
              alto nivel con el eficiente procesamiento del lenguaje ensamblador.</li>
            <li>Facilitar el desarrollo de proyectos largos en los cuales equipos diferentes proceden 
              sus módulos separadamente.</li>
            <li>Incrustar partes de un programa durante su ejecución a causa del gran tamaño del programa.</li>
          </ul> 
        </p>
        <p class="text-justify">
          Cuando se utilizan subrutinas en unos programas, el código ejecutable de cada una de ellas debe 
          encontrarse en memoria al tiempo de ejecución. Para esto antes de cargar un programa debe 
          ligarse su código objeto de cada una de las subrutinas involucradas por el obtenido así por 
          un programa ejecutable que tiene tanto el código del modulo involucrado como el código de los 
          módulos involucrados.
        </p>
    </div>

    

    <br>
</div>

<script>

    function tabsCargador() {
        var btnCargador = $('#btnCargador');
        var btnLigador = $('#btnLigador');
        var cargador = $('#infoCargador');
        var ligador = $('#infoLigador');
        cargador.removeClass('hidden');
        btnCargador.addClass('active fw-bold text-dark');
        ligador.addClass('hidden');
        btnLigador.removeClass('active fw-bold text-dark');
    }
    function tabsLigador() {
        var btnCargador = $('#btnCargador');
        var btnLigador = $('#btnLigador');
        var cargador = $('#infoCargador');
        var ligador = $('#infoLigador');
        cargador.addClass('hidden');
        btnCargador.removeClass('active fw-bold text-dark');
        ligador.removeClass('hidden');
        btnLigador.addClass('active fw-bold text-dark');
    }
</script>

<?php require_once INCLUDES.'footer.php'; ?>