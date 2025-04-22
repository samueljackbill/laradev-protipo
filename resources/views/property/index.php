<h1>Listagem de Produtos</h1>

<p><a href="<?= url('/imoveis/novo'); ?>">Cadastrar novo imóvel</a></p>

<?php

if(!empty($properties)) {

    // dd($properties);

    echo "<table style='border:1px solid black; font-size:18; font-weight:bold'>";

    echo "
        <tr>
            <td style='border:1px solid black; font-size:18; font-weight:bold'>Título</td>
            <td style='border:1px solid black; font-size:18; font-weight:bold'>Valor de Locação</td>
            <td style='border:1px solid black; font-size:18; font-weight:bold'>Valor de Compra</td>
        </tr>
        ";

    foreach($properties as $property){

        echo "
            <tr>
                <td style='border:1px solid black; font-size:18; font-weight:bold'>{$property->title}</td>
                <td style='border:1px solid black; font-size:18; font-weight:bold'>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
                <td style='border:1px solid black; font-size:18; font-weight:bold'>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
            </tr>
        ";
    }

    echo "</table>";
}