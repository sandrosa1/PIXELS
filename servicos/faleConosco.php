<?php include '../include/nossosLinksTop.php'; ?>
<?php $page = 'saiba';
include '../include/header.php';
//include '../include/resposta.php';
?>

<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid" id="inicio">
    <article class="row no-margin">
        <div class="col-sm-12 col-md-7 col-lg-7 p-4">
            <h1 class="text-left h1-arte pt-3">Fale Conosco</h1>
            <hr>
            <form class="lead" action="faleConosco.php" method="POST">
                <label>Nome:</label>
                <div class="form-row">                    
                    <div class="form-group col-md-6">
                        <input type="textl" class="form-control" id="nome" placeholder="Primeiro nome">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="sobrenome" placeholder="Último nome">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                    <label>Mensagem:</label>
                    <textarea class="form-control form-control-sm" id="mensagem" rows="3" placeholder="Escreva seu comentário"></textarea>
                </div>
                <div class="form-group text-right">
                <input class="btn btn-danger btn-lg" type="submit" value="Submit">
                <input class="btn btn-danger btn-lg" type="reset" value="Reset">
                
                </div>
            </form>
            <script>
    function enviar(){
    alert('Mensagem Enviada!');
    }
</script>
            
        </div>
    </article>

    <section>
        <?php
        include '../include/section.php'?>
    </section>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>
