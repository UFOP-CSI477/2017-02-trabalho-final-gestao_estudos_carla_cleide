@extends('layout.principal')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calendário</title>

        <link rel="stylesheet" href="<?php echo asset('css/calendario-layout.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('js/jquery-ui-1.12.1.custom/jquery-ui.css')?>" type="text/css">

        <!-- scripts necessários para suporte ao calendário -->
        <script type="text/javascript" src="<?php echo asset('js/jquery-3.2.1.js')?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/jquery-ui-1.12.1.custom/jquery-ui.js')?>"></script>

       


    </head>
    <body>

        

        <div id="datepicker"></div>


        <script>

            $( "#datepicker" ).datepicker({
                inline: true
            });
        
        </script>

        
    </body>
</html>