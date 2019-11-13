@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Empresas</h2>
            </div>
            <div class="pull-right">
                @can('company-create')
                    <a class="btn btn-success" href="{{ route('companies.create') }}"> Crear nueva empresa</a>
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
            <th>RFC</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th width="280px">Acción</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->rfc }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->address }}</td>
            <td>
                <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('companies.show',$company->id) }}">Mostrar</a>
                    @can('company-edit')
                    <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Editar</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('company-delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $companies->links() !!}


@endsection