<h1>Listagem de Produtos</h1>

<p><a href="<?= url('/imoveis/cadastrar_novo_imovel'); ?>">Cadastrar novo imóvel</a></p>

<?php

if(!empty($properties)) {

    // dd($properties);

    echo "<table style='border:1px solid black; font-size:18; font-weight:bold'>";

    echo "
        <tr>
            <td style='border:1px solid black; font-size:18; font-weight:bold; text-align: center'>Título</td>
            <td style='border:1px solid black; font-size:18; font-weight:bold; text-align: center'>Valor de Locação</td>
            <td style='border:1px solid black; font-size:18; font-weight:bold; text-align: center'>Valor de Compra</td>
            <td style='border:1px solid black; font-size:18; font-weight:bold; text-align: center'>Ações</td>
        </tr>
        ";

    foreach($properties as $property){

        $linkReadMode = '/imoveis/visualizar_imovel/' . $property->name;
        $linkEditItem = '/imoveis/editar_imovel/' . $property->name;
        $linkRemoveItem = '/imoveis/remover_imovel/' . $property->name;

        echo "
            <tr>
                <td style='border:1px solid black; font-size:18; font-weight:bold'>{$property->title}</td>
                <td style='border:1px solid black; font-size:18; font-weight:bold'>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
                <td style='border:1px solid black; font-size:18; font-weight:bold'>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
                <td style='border:1px solid black; font-size:18; font-weight:bold'; text-align: center'><a href='$linkReadMode'>Ver mais</a> | <a href='$linkEditItem'>Editar</a> | <a href='$linkRemoveItem'>Excluir</a></td>
            </tr>
        ";
    }

    echo "</table>";
}