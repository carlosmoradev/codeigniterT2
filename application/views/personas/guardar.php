<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Guardar registros</title>
</head>

<body>

    <div class="container">

        <div class="form_group">
            <?php
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

        <?php echo form_submit('mysubmit', 'Enviar', "class='btn btn-primary'" ); ?>
        <?php echo form_close()?>

    </div>
</body>

</html>