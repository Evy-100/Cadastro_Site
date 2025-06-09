<?php

declare(strict_types=1);

//busca as infomações no banco de dados 
function get_user(object $pdo, string $usuario) {
    
        $query = "SELECT * FROM clientes WHERE usuario = :username;";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $usuario);
        
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    
}