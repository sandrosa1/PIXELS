<?php include '../include/nossosLinksTop.php'; ?>
<?php $page = 'saiba';
include '../include/header.php';

?>

<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid" id="inicio">
    <div class="row no-margin">
        <article class="col-sm-12 col-md-6 col-lg-6 p-4">
            <h1 class="text-left h1-arte pt-2">Fale Conosco</h1>
            <hr>
            <form class="lead" action="../php/resposta.php" method="POST">
                <label>Nome:</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="textl" class="form-control" name="nome" placeholder="Primeiro nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="sobrenome" placeholder="Último nome" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email@exemplo.com" required>
                </div>
                <div class="form-group">
                    <label>Mensagem:</label>
                    <textarea class="form-control form-control-sm" name="mensagem" rows="3" placeholder="Escreva seu comentário" required></textarea>
                </div>
                <div class="form-group text-right">
                    <input class="btn btn-danger btn-lg" type="submit" value="Submit">
                    <input class="btn btn-danger btn-lg" type="reset" value="Reset">
                </div>
            </form>
        </article>
        <aside class="col-sm-12 col-md-6 col-lg-6 p-4">
            <h2 class="text-center h2-ilust pt-4">Mensagens</h2>
            <?php include '../include/mensagens.php'?>
        </aside>


    </div>

    <section>
        <?php        
        include '../include/section.php'?>
    </section>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>
