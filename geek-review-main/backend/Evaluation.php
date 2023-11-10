<?php

include __DIR__ . '/Model.php';

class Evaluation extends Model
{
   public function __construct(
        private $objetivo,
        private $conteudo_personalizado,
        private $usabilidade,
        private $organizacao_elementos,
        private $cores,
        private $comentario
    ) {}

    public function save()
    {
        $statement = self::$connection->prepare(
            "INSERT INTO evaluations (objetivo, conteudo_personalizado, usabilidade, organizacao_elementos, cores, comentario) VALUES (:objetivo, :conteudo_personalizado, :usabilidade, :organizacao_elementos, :cores, :comentario);");

        $statement->bindValue(
            ':objetivo', $this->objetivo, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':conteudo_personalizado', $this->conteudo_personalizado, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':usabilidade', $this->usabilidade, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':organizacao_elementos', $this->organizacao_elementos, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':cores', $this->cores, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':comentario', $this->comentario, SQLITE3_TEXT
        );
        
        return $statement->execute();
    }
}