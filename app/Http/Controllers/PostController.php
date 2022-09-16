<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use GuzzleHttp\Psr7\Request;

class PostController extends Controller
{
    //index serve para mostrar todos os itens
    public function index(Request $request) {
        
    }


    public function store(Request $request) {
        $post = new Post;

        //id, usuario, titulo, descricao
        $post -> id = $request -> id;
        $post -> usuario = $request -> usuario;
        $post -> titulo = $request -> titulo;
        $post -> descricao = $request -> descricao;
        
    }

    //Show serve pra mostrar um item
    public function show(Request $request) {
        
    }


    public function edit(Request $request) {
        
    }



    public function destroy(Request $request) {
        
    }
}
