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

    public function selectAll($table, $inicio = null, $rows_count = null)
    {
        $sql = "select * from {$table}";

        if($inicio >= 0 && $rows_count > 0) {
            $sql .= " LIMIT {$inicio}, {$rows_count}";
        }
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    #INSERT INTO `usuarios`(`id`, `nome`, `email`, `senha`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    public function insert($table, $parametros) {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (:%s)',
        $table,
        implode(', ', array_keys($parametros)),
        implode(', :', array_keys($parametros)),
    );

    try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    #UPDATE `usuarios` SET `id`='[value-1]',`nome`='[value-2]',`email`='[value-3]',`senha`='[value-4]' WHERE 1
    public function update($table, $id, $parametros)
    {
        $sql = sprintf('UPDATE %s SET %s WHERE id = %s',
        $table,
        implode(', ', array_map(function($param) {
            return $param . ' = :' . $param;
        }, array_keys($parametros))),
        $id,
    );
    
    try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function countAll($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return intval($stmt->fetch(PDO::FETCH_COLUMN));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}