

<?php $__env->startSection('content'); ?>

    <div class="container my-3">
        <h1>Listagem de Produtos</h1>

        <?php

    if (!empty($properties)) {

        // dd($properties);

        echo "<table class='table table-striped table-hover'>";

        echo "
                <thead class='bg-primary text-white'>
                    <td>Título</td>
                    <td>Valor de Locação</td>
                    <td>Valor de Compra</td>
                    <td>Ações</td>
                </thead>
                ";

        foreach ($properties as $property) {

            $linkReadMode = '/imoveis/visualizar_imovel/' . $property->name;
            $linkEditItem = '/imoveis/editar_imovel/' . $property->name;
            $linkRemoveItem = '/imoveis/remover_imovel/' . $property->name;

            echo "
                    <tr>
                        <td>{$property->title}</td>
                        <td>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
                        <td>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
                        <td><a href='$linkReadMode'>Ver mais</a> | <a href='$linkEditItem'>Editar</a> | <a href='$linkRemoveItem'>Excluir</a></td>
                    </tr>
                ";
        }

        echo "</table>";
    }

        ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('property.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laradev\prototipo\resources\views/property/index.blade.php ENDPATH**/ ?>