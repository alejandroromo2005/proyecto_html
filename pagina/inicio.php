
    <?php require_once("header.php") ?>
    <div class="text_center p_30">
        <div class="borde_top"></div>
    <h1 class="text-roman text-mayus  title">Bienvenido</h1>
    <p >No podían vivir con su comedia ¿Y eso donde los llevó? De vuelta a mi, crei que al eliminar la mitad de los comediantes la otra mitad prosperaria, pero me han demostrado que eso es imposible. En tanto exista quien tenga en su memoria lo que fueron sus chistes siempre habrá aquellos que son incapaces de aceptar lo que pueden ser y tratarán de hacer reír. Pero como lo agradezco, porque ahora ya se lo que debo hacer, ¡Voy a destrozar esta comedia, hasta que no quede ni un comediante! y luego con los chistes que recolectaron para mi crearé una comedia nueva repleta de chistes que no conocera el aburrimiento, que sabrá sólo los chistes que se les ha dado, y veré el amanecer de una comedia agradecida. </p>
    <button class="p_1020 my_30 text-roman text-mayus"><a class=" text_white" href="">Leer mas</a></button>
    </div>

    <div class="content"> <!--contenedor de imagenes-->

    <div class="fila"> <!-- primera fila-->

    <div class="columna"> <div class="filtro"></div> <img src="/proyecto/imagenes/avion.jpeg">  <div class="medio"> <!--nuevo agreagado-->
     <div class="borde_top"></div>
     <h1 class="text-roman text-mayus  title text_center">Viaja Seguro</h1>
     <div class="borde_top"></div>
    </div> <!--final nuevo agregado-->
    <!-- columna 1--> </div> 

    <div class="columna"> <div class="filtro"></div> <img src="/proyecto/imagenes/mar.jpeg"> <div class="medio"> <!--nuevo agreagado 2-->
    <div class="borde_top"></div>
     <h1 class="text-roman text-mayus  title text_center">Viaja Seguro</h1>
     <div class="borde_top"></div>
    </div>
    <!--columna 2--></div>

    </div><!-- cierre primera fila-->

    <div class="fila"> <!--segunda fila-->

    <div class="columna"> <div class="filtro"></div> <img src="/proyecto/imagenes/ciudad.jpeg"> <div class="medio">
    <div class="borde_top"></div>
     <h1 class="text-roman text-mayus  title text_center">Viaja Seguro</h1>
     <div class="borde_top"></div>   
    </div>
    <!--columna 1--></div>
    <div class="columna"> <div class="filtro"></div> <img src="/proyecto/imagenes/luces.jpeg"> <div class="medio">
    <div class="borde_top"></div>
     <h1 class="text-roman text-mayus  title text_center">Viaja Seguro</h1>
     <div class="borde_top"></div>   
    </div>

    <!--columna 2--></div>

    </div> <!--cierre fila 2-->

    
    </div> <!--ciere contenedor-->

    <div class="p_30 text_center"><!--seccion de reservacion-->
    <div class="borde_top"></div>
    <form action="inicio.php">
    <h1 class="text-roman text-mayus  title text_center">Reservacion</h1>
    <label for="nombre">Nombre</label><br>
    <input id="nombre" type="text"><br><br>
    <label for="fecha">Fecha</label><br>
    <input  class="text_white" id="fecha" type="date"><br><br>
    <label for="Mensaje">Mensaje</label><br>
    <textarea id="Mensaje"cols="100" rows="8"></textarea><br>
    <div class="p_30">
    <button class="text-roman text-mayus p_1020" type="submit">Enviar</button>
    <button  class="text-roman text-mayus p_1020" type="reset">borrar</button>
    </div>
    </form>
    </div><!-- cierre seccion de reservacion-->
    <?php require_once("footer.php") ?>