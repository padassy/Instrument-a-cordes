<?php
        foreach($category as $item):
    ?>
        <a href="?idCategory=<?=$item['idCategory']?>"><?=$item['nameCategory']?></a>
    <?php
        endforeach;
    ?>

