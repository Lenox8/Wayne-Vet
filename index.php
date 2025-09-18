<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/styles/estilo.css">
</head>

<body>
    <div class="container">
        <div class="pesquisaDiv">
            <i class="fa-solid fa-magnifying-glass" id="search"></i>
            <input type="search" placeholder="Pesquise o seu animal aqui" name="barraSearch">
        </div>
        <div class="container_card">


            <?php
        include_once 'config.php';
        $animal = new AnimalView();
        $animal->exibirAnimais();
    ?>
        </div>
    </div>
</body>

</html>