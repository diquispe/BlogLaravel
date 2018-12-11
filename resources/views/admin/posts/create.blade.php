@extends('layouts.app')

@section('content')

    <div class="container">

        @if(count($errors)> 0)
            <ul class="list-group mb-3">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif


        <div class="card">
            <div class="card-header">
                Crear Nuevo Post
            </div>
            <div class="card-body">


                <form action="{{ route('post_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" name="title" class="form-control" id="titulo" >
                    </div>
                    <div class="form-group">
                        <label for="titulo">Imagen Destacada</label>
                        <input type="file" name="featured" class="form-control-file" id="titulo" >
                    </div>
                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea name="content" id="contenido" class="form-control"  cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-success">Guardar</button>
                </form>

            </div>
        </div>
    </div>
@endsection
