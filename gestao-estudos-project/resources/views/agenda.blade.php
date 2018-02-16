@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Tarefas</div>

                <div class="panel-body">                  

                    
           
    
                    <ul id="tarefa" class="task">
                        <li class="list">Colocar matéria em dia</li>
                        <li class="list">Estudar JavaScript</li>
                        <li class="list">Cobrar do grupo a parte restante do trabalho</li>
                        <li class="list">Enviar atividade para o moodle</li>
                        <li class="checked">Incluir CSS no repositório da proposta</li>
                    </ul>

                </div>                
            </div>
        </div>
    </div>
</div>

@endsection