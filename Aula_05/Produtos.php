<?php

require_once('Model.php');

class Produtos extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'cod_produto';
    protected $fillables = ['cod_produto', 'nome', 'descricao', 'preco', 'quantidade','fornecedor'];
}