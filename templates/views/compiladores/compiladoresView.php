<?php require_once INCLUDES.'header.php'; ?>

<div class="container">
    <br>

    <div class="clearfix">
        <img src="<?php echo IMAGES.'compiladores.png'; ?>" height="100%" class="col-12 col-md-6 float-md-end mb-3 ms-md-3">
        <h1 class="display-5 fw-bold lh-1 mb-3">Compiladores</h1>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">¿Que es?</h4>
        </p>
        <p class="text-justify">
            Es un Software que traduce un programa escrito en un lenguaje de programación de alto nivel (C / C ++, COBOL, etc.) en lenguaje de máquina. Un compilador generalmente genera lenguaje ensamblador primero y luego traduce el lenguaje ensamblador al lenguaje máquina. Una utilidad conocida como «enlazador» combina todos los módulos de lenguaje de máquina necesarios en un programa ejecutable que se puede ejecutar en la computadora.
        </p>
        <img src="<?php echo IMAGES.'compiladores1.png'; ?>" alt="" width="60%">
    </div>
    
    <div class="clearfix" id="infoCargador"> <br>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">Un poco de Historia</h4>
        </p>
        <p class="text-justify">
            El término «compilador» fue acuñado a principios de 1950 por Grace Murray Hopper. La traducción fue vista entonces como la «compilación» de una secuencia de rutinas seleccionadas.
            Grace Brewster Murray Hopper fue una científica informática estadounidense y contraalmirante de la Marina de los Estados Unidos. Una de las primeras programadoras de la computadora Harvard Mark I, fue una pionera en programación que inventó una de las primeras herramientas relacionadas con el compilador. Ella popularizó la idea de los lenguajes de programación independientes de la máquina, lo que condujo al desarrollo de COBOL, un lenguaje de programación de alto nivel que todavía se usa en la actualidad.
            El primer compilador del lenguaje de alto nivel FORTRAN se desarrolló entre 1954 y 1957 en IBM por un grupo dirigido por John Backus. 
        </p>
        <img src="<?php echo IMAGES.'compilador2.png'; ?>" alt="" width="60%">
    </div>

    <div class="clearfix" id="infoCargador"> <br>
        <p class="text-justify">
            <h4 class="display-12 fw-bold lh-1 mb-3">¿En qué se diferencia de un Intérprete?</h4>
        </p>
        <p class="text-justify">
        Un intérprete lee un programa fuente ejecutable, escrito en un lenguaje de programación de alto nivel, así como datos para este programa, y ​​ejecuta el programa contra los datos para producir algunos resultados. Un ejemplo es el intérprete de shell de Unix, que ejecuta comandos del sistema operativo de forma interactiva.  <br><br>
        Un intérprete generalmente es más lento que un compilador porque procesa e interpreta cada enunciado de un programa tantas veces como el número de evaluaciones de esta afirmación. Por ejemplo, cuando se interpreta un bucle for, las afirmaciones dentro del cuerpo for-loop se analizarán y evaluarán en cada paso del bucle. Algunos lenguajes, como Java y Lisp, vienen con un intérprete y un compilador. Los programas fuente de Java (clases Java con extensión .java) son traducidos por el compilador javac en archivos de códigos de bytes (con extensión .class).
        </p>
        <p class="text-justify">
            <h5 class="fw-bold lh-1 mb-3">Analizador léxico:</h5>
        </p>
        <p class="text-justify">
            El analizador léxico o lexicográfico (Scanner en inglés) es la primera etapa del proceso de compilación, el cual se encarga de dividir el programa en Tokens, los cuales, según una tabla de símbolos definida por el mismo lenguaje.
            De esta forma cada token del programa es clasificado según su significado para ser procesados en la segunda etapa del proceso de compilación
        </p>
        <p class="text-justify">
            <h5 class="fw-bold lh-1 mb-3">Analizador sintáctico:</h5>
        </p>
        <p class="text-justify">
            El analizador sintáctico (Parse en inglés), es la segunda fase del proceso de compilación y tiene como finalidad la generación de un Árbol sintáctico, el cual no es más que una estructura de datos compleja que permite representar de una forma más simple al programa fuente.
            Los compiladores modernos utilizan estructuras de objetos para representa a un programa, de esta forma existe una clase específica para representa cada posible token de nuestra tabla de símbolos.
        </p>
        <p class="text-justify">
            <h5 class="fw-bold lh-1 mb-3">Analizador semántico:</h5>
        </p>
        <p class="text-justify">
            El analizador semántico es el último paso antes de empezar a compilar realmente el código, prepara el programa para ser compilado. El analizador semántico parte del árbol sintáctico abstracto y tiene la finalidad de validar los puntos más finos del programa, como por ejemplo, validar compatibilidad en tipos de datos, que la variable utilizada en una instrucción este previamente declara o que estén dentro del contexto, si implementamos una interface que todos los métodos estén definidos, etc.
            El analizador semántico es el que analiza que todo el programa tenga un significado exacto y que este no pueda fallar en tiempo de ejecución,
        </p>
    </div>
</div>

<?php require_once INCLUDES.'footer.php'; ?>