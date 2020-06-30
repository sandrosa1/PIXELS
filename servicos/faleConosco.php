<?php include '../include/nossosLinksTop.php'; ?>
<?php $page = 'saiba';
include '../include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid" id="inicio">
    <article class="row no-margin">
        <div class="col-lg-12">
            <h1 class="text-center">Fale Conosco</h1>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>


        </div>

    </article>

    <section>
        <?php include '../include/section.php'?>
    </section>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>