<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
    <title>Guardar registros</title>
</head>

<body>
    <div class="container ui">
            <h1>Guardar</h1>
        <div class="ui form">
        <div class="field">
            <?php
            echo form_open();
                echo form_label('Nombre', 'nombre');

                $input = array(
                    'name' => 'nombre',
                    'value' => '',
                    'class' => 'ui form'
                );
                echo form_input($input);
            ?>
        </div>

        <div class="field">
            <?php
            echo form_label('Apellido', 'apellido');

            $input = array(
                'name' => 'apellido',
                'value' => '',
                'class' => 'ui form'
            );
            echo form_input($input);
            ?>
        </div>

        <div class="field">
            <?php
                echo form_label('Edad', 'edad');
                $input = array(
                    'name' => 'edad',
                    'type'  => 'number',
                    'value' => '',
                    'class' => 'ui form'
                );
            echo form_input($input);
            ?>
        </div>

        <?php 
        echo form_submit('$data', 'Enviar', "class='ui primary button'" ); 
        
        echo form_close();
        ?>
        </div>

    </div>
</body>

</html>