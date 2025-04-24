

<?php $__env->startSection('content'); ?>

    <div class="container my-3">

        <h1>Formulário de Edição :: Imóveis</h1>

        <?php  $property = $property[0]; ?>

        <form action="<?= url('/imoveis/atualizar_imovel', ['id' => $property->id]); ?>" method="post">

            <?= csrf_field(); ?>
            <?= method_field('PUT'); ?>

            <div class="form-group">
                <label for="title">Título do Imóvel</label>
                <input type="text" id="title" name="title" class="form-control" value="<?= $property->title; ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea id="description" name="description" rows="10" cols="50"
                    class="form-control"><?= $property->description; ?></textarea>
            </div>

            <div class="form-group">
                <label for="rental_price">Valor de Locação</label>
                <input type="number" id="rental_price" name="rental_price" step="0.01" class="form-control"
                    value="<?= $property->rental_price; ?>">
            </div>

            <div class="form-group">
                <label for="sale_price">Valor de Compra</label>
                <input type="number" id="sale_price" name="sale_price" step="0.01" class="form-control"
                    value="<?= $property->sale_price; ?>">
            </div>

            <button type="submit" class="btn btn-primary  my-3">Atualizar Imóvel</button>
        </form>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('property.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laradev\prototipo\resources\views/property/edit.blade.php ENDPATH**/ ?>