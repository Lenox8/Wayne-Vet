<?php
require '../../config/dbconnection.php';

    class AnimalController{

        public function listar(){
            $sql = "SELECT * FROM animal ORDER BY id ASC";
            global $conexao;
            $result = mysqli_query($conexao, $sql);
            
            $lista = array();
            if ($result) {
                while ($linha = mysqli_fetch_assoc($result)) {
                    $id = $linha[0];
                    $nome = $linha[1];
                    $id_especie = $linha[2];
                    $especie = new Especie();
                    $animal = new Animal($id, $nome, $id_especie);
                    // $lista[] = $linha;
                    array_push($animais, $animal);
                }
            }
            return $animais;
        }
    }

?>