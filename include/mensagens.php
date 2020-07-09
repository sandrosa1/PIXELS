<?php
            if (file_exists('../php/mensagens.txt')) {
            $file = fopen('../php/mensagens.txt', 'r');
            while(!feof($file)) {
                $linha = fgets($file, 1024);
                $arrayStr = explode('|', $linha);
                if ((trim($arrayStr[0]) != 'CODIGO') && ($arrayStr[0] != '') && ($arrayStr[0] != '\n')) {                   
        ?>


            <div class="card">
                <div class="card-body p-2">
                    <h5 class="card-title"><?=$arrayStr[0]?> - <?=$arrayStr[1]?><?=$arrayStr[2]?></h5>
                    <p class="card-subtitle mb-2 text-muted"><small><?=$arrayStr[3]?></small></p>
                    <p class="card-text"><?=$arrayStr[4]?></p>
                    <p class="card-text text-right pr-2"><small class="text-muted"><?=$arrayStr[5]?></small></p>
                </div>
            </div>
            <?php
                }        
            }
            fclose($file);
            }
            else{
                ?>
                <p class="card-text text-center pt-5">Não temos mensagens recentes !</p>
        <?php
            }
    ?>