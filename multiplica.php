<!--kjfñsdjfñsadfj-->

<html>

    <body>

    <?php
    
        
        echo "<h2>Tabla de multiplicar</h2>";
        
        $numero = (int)$_POST['numero'];
        for($i=1;$i<13;$i++){
            echo "$numero x $i = ".($numero*$i)."<br>\n";
        }
    ?>

    </body>

</html>

