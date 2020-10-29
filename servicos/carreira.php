<?php $page = 'saiba'; include '../include/nossosLinksTop.php'; ?>
<?php $page = 'saiba'; include '../include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid pixel-index mx-auto" id="inicio">
  <h1 class="text-center my-3 p-2 h1-arte">Carreira</h1>
  <article class="row justify-content-center pixel-index mx-auto">

    <div class="col-md-12 col-lg-6 carreira my-3 text-sm-center">
      <img src="../imagem/coworking.webp" class="img-fluid" alt="Foto de um espaço coworking com quatro jovens trabalhando em seus computadores dividindo uma mesa extensa">
    </div>

    <div class="col-md-12 col-lg-6 pixel-index mx-auto">
      <h4 id="conteudo" class=" mb-3">Venha fazer parte da nossa equipe, cadastre-se!</h4>

      <form method="POST" action="../php/cadastroCurriculo.php">
        <h5 class="mt-3">Dados pessoais</h5>
        <hr>
        <div class="form-group mb-3">
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" class="form-control" required aria-required="true"  placeholder="exemplo: João" inputmode="text">
        </div>
        <div class="form-group mb-3">
          <label for="sobrenome">Sobrenome:</label>
          <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="exemplo: Silva" required  aria-required="true" inputmode="text">
        </div>
        <div class="form-group mb-3">
          <label for="nascimento">Data de Nascimento:</label>
          <input type="date" name="nascimento" id="nascimento" class="form-control" required aria-required="true">
        </div>

        <h5 class="mt-3">Informações para contato</h5>
        <hr>
        <div class="form-group mb-3">
          <label for="endereco">Endereço:</label>
          <input type="text" name="endereco" id="endereco" class="form-control" placeholder="exemplo: Rua Marechal Deodoro da Fonseca, 132" required aria-required="true" inputmode="text">
        </div>
        <div class="form-row">
          <div class="form-group col-sm-7 mb-3">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="exemplo: São Roque" required aria-required="true" inputmode="text">
          </div>
          <div class="form-group col-sm-5 mb-3">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control">
              <option value="">Selecione</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6 mb-3">
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="exemplo: DDD + 4712-3229" required aria-required="true" inputmode="tel">
          </div>
          <div class="form-group col-sm-6 mb-3">
            <label for="celular">Celular:</label>
            <input type="tel" name="celular" id="celular" class="form-control" placeholder="exemplo:  DDD + 94712-3229" inputmode="tel">
          </div>
        </div>

        <h5 class="mt-3">Atividade Profissional Atual</h5>
        <hr>
        <div class="form-group mb-3">
          <label for="empresa">Empresa:</label>
          <input type="text" name="empresa" id="empresa" class="form-control" placeholder="exemplo: Accenture Brasil" inputmode="text">
        </div>
        <div class="form-group mb-3">
          <label for="cargo">Cargo:</label>
          <input type="text" name="cargo" id="cargo" class="form-control" placeholder="exemplo: Desenvolvedor Angular Jr." inputmode="text">
        </div>
        <div class="form-group mb-3">
          <label for="atividade">Atividade:</label>
          <textarea name="atividade" id="atividade" cols="30" rows="10" class="form-control" placeholder="Conte-nos um pouco de suas atividades" inputmode="text"></textarea>
        </div>

        <h5 class="mt-3">Caso seja estudante</h5>
        <hr>
        <div class="form-group mb-3">
          <label for="universidade">Universidade:</label>
          <input type="text" name="universidade" id="universidade" class="form-control" placeholder="exemplo: Fatec São Roque" required aria-required="true" inputmode="text"> 
        </div>
        <div class="form-row mb-3">
          <div class="form-group col-sm-4 mb-3">
            <label for="periodo">Período:</label>
            <select name="periodo" id="periodo" class="form-control">
              <option value="">Período</option>
              <option value="1">1º</option>
              <option value="2">2º</option>
              <option value="3">3º</option>
              <option value="4">4º</option>
              <option value="5">5º</option>
              <option value="6">6º</option>
              <option value="7">7º</option>
              <option value="8">8º</option>
            </select>
          </div>
          <div class="form-group col-sm-8 mb-3">
            <label for="anoLetivo">Ano / Semestre:</label>
            <select name="anoLetivo" id="anoLetivo" class="form-control">
              <option value="">Ano ou Semestre</option>
              <option value="ano">Ano</option>
              <option value="semestre">Semestre</option>
            </select>
          </div>
        </div>

        <div class="col-md-12 text-right  mx-0 px-0">
          <button class="btn btn-outline-secondary btn-lg" type="reset">Limpar</button>
          <button class="btn btn-primary btn-lg" type="submit">Enviar</button>

        </div>
    </div>
    </form>
</div>
</article>
<section class="pixel-index mx-auto my-3">
  <?php include '../include/section.php' ?>
</section>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>