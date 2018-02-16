@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nome da disciplina</div>

                <div class="panel-body">                  

                    Sala: {{$disciplina->sala}}
                    <br>Professor:{{$disciplina->nome_prof}}
                    <br>Horário de aula: {{$disciplina->horario_inicio}} = {{$disciplina->horario_fim}}
                    
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