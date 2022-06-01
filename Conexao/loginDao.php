<?php

require_once 'Conexao.php';
class loginDao {

    public function login($usuario, $senha) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT u.usuario, p.perfil, p.idperfil FROM usuario u
                    INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil) 
                    WHERE u.usuario = ? AND u.senha = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $usuario = $stmt->fetch();
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
