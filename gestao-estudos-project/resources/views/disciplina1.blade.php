@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                @foreach($disciplina as $d)   
                    <div class="panel-heading">{{$d->nome}}</div>

                    <div class="panel-body"> 

                     

                    Sala: {{$d->sala}}
                    <br>Professor:{{$d->nome_prof}}
                    <br>Horário de aula: {{$d->horario_inicio}} = {{$d->horario_fim}}

                    <form action="disciplina1" method="get">

                    <br><br>Nota 1: <input type="text" name="nota1">
                    <br><br>Nota 2: <input type="text" name="nota2">
                    <br><br>Nota 3: <input type="text" name="nota3">

                    <br><br>Média total: <input type="text" name="nota1">

                    <input type="submit" name="calcular" value="Calcular">

                    </form>
                    
                    
                    
                @endforeach

                </div>                
            </div>
        </div>
    </div>
</div>

@endsection