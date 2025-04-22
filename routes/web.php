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
Route::get('/imoveis/novo', [PropertyController::class, 'create']);
/* Rota para armazenar novos registros (chamada dentro do form de cadastro) */
Route::post('/imoveis/cadastrar', [PropertyController::class, 'store']);

## VISUALIZAR

## EDITAR

## EXCLUIR