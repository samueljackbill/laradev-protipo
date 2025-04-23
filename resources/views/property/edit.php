<h1>Formulário de Edição :: Imóveis</h1>

<p><a href="<?= url('/imoveis'); ?>">Listar imóveis</a></p>

<?php  $property = $property[0]; ?>

<form action="<?= url('/imoveis/atualizar_imovel', ['id' => $property->id]); ?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <label for="title">Título do Imóvel:</label><br>
    <input type="text" id="title" name="title" value="<?= $property->title; ?>" required><br><br>

    <label for="description">Descrição:</label><br>
    <textarea id="description" name="description" rows="10" cols="50"><?= $property->description; ?></textarea><br><br>

    <label for="rental_price">Valor de Locação:</label><br>
    <input type="number" id="rental_price" name="rental_price" step="0.01" value="<?= $property->rental_price; ?>"><br><br>

    <label for="sale_price">Valor de Compra:</label><br>
    <input type="number" id="sale_price" name="sale_price" step="0.01" value="<?= $property->sale_price; ?>"><br><br>

    <button type="submit">Atualizar Imóvel</button>
</form>