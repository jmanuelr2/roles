@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nueva empresa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Atras</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oh!</strong> Hubo problemas con lo ingesado.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('companies.store') }}" method="POST">
        @csrf


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RFC:</strong>
                    <input type="text" name="rfc" class="form-control" placeholder="RFC">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <textarea class="form-control" style="height:150px" name="name" placeholder="Nombre"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dirección:</strong>
                    <textarea class="form-control" style="height:150px" name="address" placeholder="Direccion"></textarea>
                </div>
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
@endsection

