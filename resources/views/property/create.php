<h1>Formulário de Cadastro :: Imóveis</h1>

<p><a href="<?= url('/imoveis'); ?>">Listar imóveis</a></p>

<form action="<?= url('/imoveis/cadastrar'); ?>" method="post">

    <?= csrf_field(); ?>

    <label for="title">Título do Imóvel:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="description">Descrição:</label><br>
    <textarea id="description" name="description" rows="10" cols="50"></textarea><br><br>

    <label for="rental_price">Valor de Locação:</label><br>
    <input type="number" id="rental_price" name="rental_price" step="0.01" required><br><br>

    <label for="sale_price">Valor de Compra:</label><br>
    <input type="number" id="sale_price" name="sale_price" step="0.01" required><br><br>

    <button type="submit">Cadastrar Imóvel</button>
</form>