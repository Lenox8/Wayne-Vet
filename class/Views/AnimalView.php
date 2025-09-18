<?php
class AnimalView {

    function exibirAnimais(){
        $animalControl = new AnimalController();
        $listaAnimal = $animalControl->listar();

        foreach ($listaAnimal as $animal) {
            echo "
                <div class='caixaAnimal'>
                    <h1>{$animal->getNome()}</h1>
                    <p>Raça: {$animal->getEspecie()->getNome()}</p>
                </div>
            ";
        }
    }
}