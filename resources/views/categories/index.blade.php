@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categorias</h2>
            </div>
            <div class="pull-right">
                @can('category-create')
                    <a class="btn btn-success" href="{{ route('categories.create') }}"> Crear nueva empresa</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>            
            <th>Nombre</th>
            <th>Descripción</th>
            <th width="280px">Acción</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Mostrar</a>
                    @can('category-edit')
                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Editar</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('category-delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $categories->links() !!}


@endsection