<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectOne($table, $id){
        $sql = sprintf('SELECT * FROM %s WHERE id=:id LIMIT 1', $table);
         try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }


    }

    public function selectWhereLike($table, $column, $value)
{
    $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE {$column} LIKE ?");
    $statement->execute(["%$value%"]);
    return $statement->fetchAll(PDO::FETCH_CLASS);
}

    //INSERT INTO `posts`(`id`, `titulo`, `descricao`, `imagem`, `criado_em`, `id_autor`) 
    //VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
    
    public function insert($table, $parameters) {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (:%s)',
        $table,
        implode(', ', array_keys($parameters)),
        implode(', :', array_keys($parameters)),
        );
    
    try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //DELETE FROM `posts` WHERE 0
    public function delete($table, $id){
     $sql = sprintf('DELETE FROM %s WHERE %s',
        $table,
        'id = :id'
    );
    

    try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('id'));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }












    //UPDATE `posts`(`id`, `titulo`, `descricao`, `imagem`, `criado_em`, `id_autor`) 
    public function update($table, $id, $parameters) {
        $sql = sprintf('UPDATE %s SET %s WHERE id = %s',
        $table,
        implode(', ', array_map(function($param){
            return $param . '= :' .$param;
        }, array_keys($parameters))),
        $id
    );
     try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }


    }



    public function verificaLogin($email, $senha)
    {
        $sql = sprintf('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'email' => $email,
                'senha' => $senha
            ]
            );

            $user = $stmt->fetch(PDO::FETCH_OBJ);

            return $user;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    


}
