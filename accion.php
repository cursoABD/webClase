<html>
    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    </head>
        Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
        Usted tiene <?php echo (int)$_POST['edad']; ?> años.
        Usted es 
        <?php 
        if ((int)$_POST['edad'] < 18) {
            echo "Menor de edad";
        }else{
            echo "Mayor de edad";
        }
        ?>
</html>
