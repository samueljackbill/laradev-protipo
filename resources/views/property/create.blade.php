@extends('property.master')

@section('content')

    <div class="container my-3">

        <h1>Formulário de Cadastro :: Imóveis</h1>

        <form action="<?= url('/imoveis/cadastrar'); ?>" method="post">

            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="title">Título do Imóvel</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label><br>
                <textarea id="description" name="description" rows="10" cols="50" class="form-control"></textarea>
            </div>
            
            <div class="form-group">
                <label for="rental_price">Valor de Locação</label><br>
                <input type="number" id="rental_price" name="rental_price" step="0.01" class="form-control">
            </div>

            <div class="form-group">
                <label for="sale_price">Valor de Compra</label><br>
                <input type="number" id="sale_price" name="sale_price" step="0.01" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary my-3">Cadastrar Imóvel</button>
        </form>
    </div>  

@endsection