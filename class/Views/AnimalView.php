<?php

    class AnimalView{
        
         function exibirAnimais(){
            $animalControl = new AnimalController();
            $listaAnimal = $animalControl -> listar();

            for($i = 0; $i < count($listaAnimal); $i++){
                echo "
                    <div class='caixaAnimal' >
                        <h1> {$listaAnimal[$i] -> Nome}</h1>
                        <p>PitBull</p>
                    </div>
                ";
            }
        }
    }

?>