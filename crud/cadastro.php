<?php include 'header.php' ?>

<?php
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
} ?>

<?php if (isset($_GET['msg'])) { ?>
    <?php
    if ($_GET['msg'] == 'nome') {
        $msg = 'Nome não Informado';
        $tipoAlerta = 'alert-danger';
    };
    if ($_GET['msg'] == 'email') {
        $msg = 'Email não Informado';
        $tipoAlerta = 'alert alert-danger';
    };
    if ($_GET['msg'] == 'tel') {
        $msg = 'Telefone não Informado';
        $tipoAlerta = 'alert alert-danger';
    };

    ?>

    <div class='<?php echo $tipoAlerta ?>' role="alert">
        <?php echo $msg; ?>
    </div>
<?php } ?>
<br>


<?php
if (isset($_SESSION)):
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $tel = $_SESSION['tel'];
endif;

if (isset($_GET['acao']) && $_GET['acao'] == 'edit') {
    $dados = [];
    $dados = $_SESSION['dados'][$_GET['id']];

    $nome = $dados['nome'];
    $tel = $dados['tel'];
    $email = $dados['email'];

}
 if (isset($_GET['id'])) {$id = $_GET['id'];} else $id = ' ';


if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'create'){
        $path = "salva_contato.php?acao=$acao";
    }

    if ($_GET['acao'] == 'edit'){
        $path = "salva_contato.php?id=$id&acao=$acao";
    }
}


?>
<div class="container">
    <h3>Cadastro de Clientes</h3>
    <form class="form-Group" action=<?php echo $path?> method="post">
        <label for="nome">Nome</label>
        <input class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>"><br>
        <label for="email">email</label>
        <input class="form-control" id="email" name="email" value="<?php echo $email ?>"><br>
        <label for="tel">Telefone</label>
        <input class="form-control" id="tel" name="tel" value="<?php echo $tel; ?>"><br>
        <br>
        <button type="submit" class="btn btn-success">Gravar</button>
        <button type="button" class="btn btn-secondary" onclick='window.location.href = "consulta.php?tela=edit"'>
            Voltar
        </button>
    </form>
</div>