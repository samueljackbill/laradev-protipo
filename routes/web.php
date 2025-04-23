<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

## VISÃO GERAL
/* Rota padrão, lista todos os registros */
Route::get('/imoveis', [PropertyController::class, 'index']);

## CADASTRAR
/* Rota para criar novos registros */
Route::get('/imoveis/cadastrar_novo_imovel', [PropertyController::class, 'create']);
/* Rota para armazenar novos registros (chamada dentro do form de cadastro) */
Route::post('/imoveis/cadastrar', [PropertyController::class, 'store']);

## VISUALIZAR
Route::get('/imoveis/visualizar_imovel/{name}', [PropertyController::class, 'show']);

## EDITAR
/* Rota para editar registros */
Route::get('/imoveis/editar_imovel/{name}', [PropertyController::class, 'edit']);
/* Rota para armazenar edição dos registros (chamada dentro do form de edição) */
Route::put('/imoveis/atualizar_imovel/{name}', action: [PropertyController::class, 'update']);

## EXCLUIR
Route::get('/imoveis/remover_imovel/{name}', [PropertyController::class, 'destroy']);