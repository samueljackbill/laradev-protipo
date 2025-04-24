

<?php $__env->startSection('content'); ?>

    <div class="container my-3">

        <h1>Visualizando Imóvel</h1>

        <?php 

        if (!empty($property)) {

        foreach ($property as $prop) {
                ?>

        <h2>Título do Imóvel: <?= $prop->title; ?></h2>
        <p>Descrição: <?= $prop->description; ?></p>
        <p>Valor de Locação: R$ <?= number_format($prop->rental_price, 2, ',', '.'); ?></p>
        <p>Valor de Venda: R$ <?= number_format($prop->sale_price, 2, ',', '.'); ?></p>

        <?php
        }
    }

        ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('property.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laradev\prototipo\resources\views/property/show.blade.php ENDPATH**/ ?>