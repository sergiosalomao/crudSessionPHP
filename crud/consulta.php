<?php include 'header.php' ?>

<?php if (isset($_GET['msg'])) { ?>
    <?php
    if ($_GET['msg'] == 'sucesso') {
        $msg = 'Salvo com sucesso';
        $tipoAlerta = 'alert alert-success';
    }

    if ($_GET['msg'] == 'delete') {
        $msg = 'Excluido com sucesso';
        $tipoAlerta = 'alert alert-warning';
    };

    if ($_GET['msg'] == 'deleteError') {
        $msg = 'Error ao excluir';
        $tipoAlerta = 'alert alert-danger';
    }; ?>

    <div class='<?php echo $tipoAlerta ?>' role="alert">
        <?php echo $msg; ?>
    </div>

<?php }
$_SESSION['nome'] = '';
$_SESSION['email'] = '';
$_SESSION['tel'] = '';
?>

<div class="container">
    <button class="btn btn-primary" onclick='window.location.href = ("cadastro.php?acao=create")'>Cadastrar Novo</button>
    <br><br>

    <table class="table">

        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col" style="width: 300px">Email</th>
            <th scope="col">Telefone</th>
            <th colspan="2" scope="col" style="text-align: center">Acoes</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $dados = [];
        $dados = $_SESSION['dados'];

        foreach ($dados as $key => $dado): ?>
            <tr>
                <th scope="row"><?php echo $key ?> </th>
                <td style="width: 350px"><?php echo $dado['nome'] ?></td>
                <td style="width: 350px"><?php echo $dado['email'] ?></td>
                <td style="width: 250px"><?php echo $dado['tel'] ?></td>
                <td>
                    <button class="btn btn-primary"
                            onclick='window.location.href = "cadastro.php?id=<?php echo $key ?>&acao=edit"'>Editar
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick='window.open("excluir.php?id=<?php echo $key ?>")'>Excluir
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
