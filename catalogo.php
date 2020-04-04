

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Catalogo</title>
</head>
<body>
<?php
require 'script.php';

$usuario = $_SESSION['user3'];
    echo "<h2>Hola $usuario estos son los juguetes que te recomendamos:</h2>"
?>
    <from action="enviar.php" >
    <section class="product-list">
    <article class="product">
            <figure class="product-imageContainer">
            <img class="product-image" src="images/car-one.jpg"/>
            </figure>
            <div class="product-detail">
            <h3 class="product-title">Carro hot wheels</h3>
            <p class="product-description">Juguete de coleccion, carro a escala. $150</p>
            <input type="submit" name="submit2" value="Enviar">
            </div>
        </article>

        <article class="product">
            <figure class="product-imageContainer">
            <img class="product-image" src="images/car2.jpg"/>
            </figure>
            <div class="product-detail">
            <h3 class="product-title">Carro hot wheels</h3>
            <p class="product-description">Juguete de coleccion, carro a escala. $150</p>
            <input type="submit" name="submit2" value="Enviar">
            </div>
        </article>
    </section>
    </from>
    <?php
    echo "<a href='logout.php'>SALIR</a>"
    ?>
</body>
</html>
