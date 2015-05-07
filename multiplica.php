<!--kjfñsdjfñsadfj-->

<html>

    <body>

    <?php
    
        
        echo "Tu color favorito es el ";
        echo $_POST['colorFavorito'];
        echo "<h2>Tabla de multiplicar</h2>";
        
        $numero = (int)$_POST['numero'];
        for($i=1;$i<13;$i++){
            echo "$numero x $i = ".($numero*$i)."<br>\n";
        }
    ?>

    </body>

</html>

