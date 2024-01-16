<!DOCTYPE html>
<html lang="pt-br" class="h-100">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $titulo ?></title>

        <link rel="icon" type="image/x-icon" href="<?= base_url('img/favicon.ico') ?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    </head>
    <body class="bg-dark h-100">
        <?= $this->include('painel\includes\header') ?>
        <?= $this->renderSection('content') ?>
        <?= $this->include('painel\includes\footer') ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>