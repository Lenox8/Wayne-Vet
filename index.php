<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet</title>
</head>

<body>
    <?php
        include_once 'config.php';
        
        $animal = new AnimalView();
        $animal->exibirAnimais();
    ?>
</body>

</html>