<h1><?= $nombre ?></h1>

<table style="width: 100%;">
    <thead>
        <tr>
            <?php 
                for ($i=0; $i < count($campos); $i++) {
            ?>

                <th style="text-align: left; padding-left: 2px"><?= ucfirst(str_replace("_", " ", $campos[$i])) ?></th>
                
            <?php  
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php          
        
        for ($i=0; $i < count($datos); $i++) { 
        
        ?>
            <tr>
                <?php 
                    for ($a=0; $a < count($campos); $a++) {
                ?>

                    <td><?= $datos[$i][$campos[$a]] ?></td>

                <?php  
                    }
                ?>
            </tr>

        <?php } ?>
    </tbody>
</table>