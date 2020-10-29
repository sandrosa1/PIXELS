<?php $page = 'saiba'; include '../include/nossosLinksTop.php'; ?>
<?php $page = 'saiba'; include '../include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid container-max mx-auto" id="inicio">
  <h1 id="conteudo" class="text-center h1-arte py-3">Fale Conosco</h1>
  <div class="row no-margin mb-5">
    <article class="col-sm-12 col-md-6 col-lg-6 border-right">
      <h2 class="text-center h2-mobile pb-4">Deixe sua mensagem</h2>
      <form class="lead" action="../php/gravarMensagem.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome:</label>
            <input type="text" id="nome" class="form-control" name="nome" placeholder="Primeiro nome" required aria-required="true" inputmode="text">
          </div>
          <div class="form-group col-md-6">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" class="form-control" name="sobrenome" placeholder="Último nome" required aria-required="true" inputmode="text">
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" class="form-control" name="email" placeholder="email@exemplo.com" required aria-required="true" inputmode="email">
        </div>
        <div class="form-group">
          <label for="mensagem">Mensagem:</label>
          <textarea id="mensagem" class="form-control form-control-sm" name="mensagem" rows="3" placeholder="Escreva seu comentário" required aria-required="true" inputmode="text"></textarea>
        </div>
        <div class="form-group text-right">
          <input class="btn btn-outline-danger" type="reset" value="Limpar">
          <input class="btn btn-danger" type="submit" value="Enviar">
        </div>
      </form>
    </article>
    <aside class="col-sm-12 col-md-6 col-lg-6">
      <h2 class="text-center h2-mobile pb-4">Mensagens</h2>

      <?php include '../include/mensagens.php' ?>
    </aside>
  </div>
  <section>
    <?php
    include '../include/section.php' ?>
  </section>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>