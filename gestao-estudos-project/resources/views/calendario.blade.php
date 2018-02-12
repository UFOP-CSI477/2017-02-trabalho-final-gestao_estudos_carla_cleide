@extends('layout.principal')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calendário</title>       
        
        <link rel="stylesheet" href="<?php echo asset('css/calendario-layout.css')?>" type="text/css">

        <!-- scripts necessários para suporte ao calendário -->
        <script type="text/javascript" src="<?php echo asset('js/jquery-3.2.1.js')?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/jquery-ui-1.12.1.custom/jquery-ui.js')?>"></script>
       
    </head>
    <body>
        
        <!-- CALENDÁRIO -->
        <div class="container">
            <div id="datepicker"></div>        
        </div>

        <!-- Tradução do calendário -->
        <script>        
            $( "#datepicker" ).datepicker({
                inline: true,
                showOtherMonths: true,
                dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
                dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
            });        
        </script>
        
    </body>
</html>