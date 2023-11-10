<?php

include __DIR__ . '/Evaluation.php';

Model::createConnection(new SQLite3(__DIR__ . '/database.sqlite'));

Model::createModel(
    'CREATE TABLE IF NOT EXISTS evaluations
    (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        objetivo TEXT,
        conteudo_personalizado TEXT,
        usabilidade TEXT,
        organizacao_elementos TEXT,
        cores TEXT,
        comentario TEXT
    );'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if (isset($_POST['objetivo']))
    {
        $evaluation = new Evaluation(
            $_POST['objetivo'],
            $_POST['conteudo_personalizado'],
            $_POST['usabilidade'],
            $_POST['organizacao_elementos'],
            $_POST['cores'],
            $_POST['comentario']
        );

        $evaluation->save();

        header('Location: /forms.html', 302);

        exit;
    }
}
