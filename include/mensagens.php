<?php
            if (file_exists('../php/mensagens.txt')) {
            $file = fopen('../php/mensagens.txt', 'r');
            $contadorLinha = 0;
            while(!feof($file)) {
                $linha = fgets($file, 1024);
                $contadorLinha++;
                $arrayStr = explode('|', $linha);
            
                if ((trim($arrayStr[0]) != 'CODIGO') && ($arrayStr[0] != '') && ($arrayStr[0] != '\n')) {
                    if ($contadorLinha > 4){
                        ?>
<div class="d-none">
    <?php
                    }
                    else{                                                       
                ?>

    <div class="card bg-light mb-1">
        <?php
            }
    ?>
        <div class="card-body p-2">
            <h5 class="card-title mb-0 font-weight-normal"><?=strip_tags($arrayStr[0])?> - <?=strip_tags($arrayStr[1])?><?=strip_tags($arrayStr[2])?></h5>
            <p class="card-subtitle mb-1 text-muted"><small><?=$arrayStr[3]?></small></p>
            <p class="card-text font-weight-light"><?=strip_tags($arrayStr[4])?></p>
            <p class="card-text text-right pr-2"><small class="text-muted"><?=strip_tags($arrayStr[5])?></small></p>
        </div>
    </div>

    <?php
                }        
            }
                
            fclose($file);
                ?>
    <!-- Botão para acionar modal -->
    <div class="text-right">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalLongoExemplo">Ver mais</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalLongoExemplo">Mensagens</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
            $file = fopen('../php/mensagens.txt', 'r');
            $contadorLinha = 0;
            while(!feof($file)) {
                $linha = fgets($file, 1024);
                $contadorLinha++;
                $arrayStr = explode('|', $linha);
            
                if ((trim($arrayStr[0]) != 'CODIGO') && ($arrayStr[0] != '') && ($arrayStr[0] != '\n')) {
                    ?>

                    <div class="card bg-light mb-1">
                        <div class="card-body p-2">
                            <h5 class="card-title mb-0 font-weight-normal"><?=strip_tags($arrayStr[0])?> - <?=strip_tags($arrayStr[1])?><?=strip_tags($arrayStr[2])?></h5>
                            <p class="card-subtitle mb-1 text-muted"><small><?=$arrayStr[3]?></small></p>
                            <p class="card-text font-weight-light"><?=strip_tags($arrayStr[4])?></p>
                            <p class="card-text text-right pr-2"><small class="text-muted"><?=strip_tags($arrayStr[5])?></small></p>
                        </div>
                    </div>
                    <?php
                }        
            }
                
            fclose($file);
                ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <?php
            }
            else{
                ?>
    <p class="card-text text-center">Não temos mensagens recentes !</p>
    <?php
            }
    ?>
