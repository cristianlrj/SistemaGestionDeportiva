<h1><?= $nombre ?></h1>

<table style="width: 100%;">
    <thead>
        <tr>
            <th style="text-align: left;">Cedula</th>
            <th style="text-align: left; padding-left: 2px">Nombre</th>
            <th style="text-align: left; padding-left: 2px">Disciplina</th>
            <th style="text-align: left; padding-left: 2px">Talla Franela</th>
            <th style="text-align: left; padding-left: 2px">Talla Pantalon</th>
            <th style="text-align: left; padding-left: 2px">Talla Zapato</th>
        </tr>
    </thead>
    <tbody>
        <?php          
        
        for ($i=0; $i < count($datos); $i++) { 
        
        ?>
        
            <tr>
                 <td><?= $datos[$i]['CEDULA'] ?></td>
                 <td><?= $datos[$i]['NOMBRE'] ?></td>
                 <td><?= $datos[$i]['DISCIPLINA'] ?></td>
                 <td><?= $datos[$i]['TALLA_FRANELA'] ?></td>
                 <td><?= $datos[$i]['TALLA_PANTALON'] ?></td>
                 <td><?= $datos[$i]['TALLA_ZAPATO'] ?></td>
            </tr>

        <?php } ?>
    </tbody>
</table>