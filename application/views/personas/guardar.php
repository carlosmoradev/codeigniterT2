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

        <div class="form_group">
            <?php
            echo form_open();
                echo form_label('Nombre', 'nombre');

                $input = array(
                    'name' => 'nombre',
                    'value' => '',
                    'class' => 'form_control input_lg'
                );
                echo form_input($input);
            ?>
        </div>

        <div class="form_group">
            <?php
            echo form_label('Apellido', 'apellido');

            $input = array(
                'name' => 'apellido',
                'value' => '',
                'class' => 'form_control input_lg'
            );
            echo form_input($input);
            ?>
        </div>

        <div class="form_group">
            <?php
                echo form_label('Edad', 'edad');
                $input = array(
                    'name' => 'edad',
                    'type'  => 'number',
                    'value' => '',
                    'class' => 'form_control input_lg'
                );
            echo form_input($input);
            ?>
        </div>

        <?php 
        echo form_submit('$data', 'Enviar', "class='ui primary button'" ); 
        // var_dump($_GET);
        var_dump($_POST);
        echo form_close();
        ?>

    </div>
</body>

</html>