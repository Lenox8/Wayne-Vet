<?php
require_once __DIR__ . '/../../config/dbconnection.php';

class AnimalController {

    public function listar(){
        global $conexao;
        $sql = "SELECT a.id, a.nome, e.id AS especie_id, e.nome AS especie_nome
        FROM animal a
        JOIN especie e ON a.especie = e.id
        ORDER BY a.id ASC";
        $result = mysqli_query($conexao, $sql);

        $animais = [];
        if ($result) {
            while ($linha = mysqli_fetch_assoc($result)) {
                $id = $linha['id'];
                $nome = $linha['nome'];

                $especie = new Especie($linha['especie_id'], $linha['especie_nome']);

                $animal = new Animal($id, $nome, $especie);
                $animais[] = $animal;
            }
        }
        return $animais;
    }
}