@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nome da disciplina</div>

                <div class="panel-body">                  

                    Sala:
                    <br>Professor:
                    <br>Horário de aula:
                    
                    <br><br>Nota 1: <input type="text" name="nota1">
                    <br><br>Nota 2: <input type="text" name="nota1">
                    <br><br>Nota 3: <input type="text" name="nota1">
                    <br><br>Média total: <input type="text" name="nota1">

                </div>                
            </div>
        </div>
    </div>
</div>

@endsection