<h1>listado</h1>
<?php

    $listados = $this->Persona->findAll("personas");
    
    ?>
<table class="ui table" border=1>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
<?php    
foreach ($listados as $listado) {?>
        <tr>
            <td> <?php echo $listado->persona_id;?>  </td>
            <td> <?php echo $listado->nombre;?>  </td>
            <td> <?php echo $listado->apellido;?>    </td>
            <td> <?php echo $listado->edad;?>    </td>
        </tr>
<?php } ?>
    

</table>