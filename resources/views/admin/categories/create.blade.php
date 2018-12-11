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
                Crear Nuevo Categoria
            </div>
            <div class="card-body">


                <form action="{{ route('post_store') }}" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nombre de la Categoria</label>
                        <input type="text" name="name" class="form-control" id="name" >
                    </div>
                    <button class="btn btn-success">Guardar</button>
                </form>

            </div>
        </div>
    </div>
@endsection
