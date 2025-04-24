<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraDev: CRUD Imobi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="<?= url('/imoveis') ?>" class="navbar-brand">Lara<b>Dev</b></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= url('/imoveis') ?>" class="nav-link">Listar todos os Imóveis</a></li>
            <li class="nav-item"><a href="<?= url('/imoveis/cadastrar_novo_imovel') ?>" class="nav-link">Cadastrar novo imóvel</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>