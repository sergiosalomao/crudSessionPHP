<?php
session_start();

if (isset($_SESSION['alunos'])){
    echo("Nao existe alunos cadastrados");
    echo '<a href="cadastro.php">cadastrar agora</a>';
}

$alunos = $_SESSION['alunos'];

$_SESSION['alunos'] = [
    0 => [
        'nome' => 'Sergio',
        'email' => 'Sergio@mail.com',
        'tel' => '85 9999-9999',
    ],
    1 => [
        'nome' => 'Manel',
        'email' => 'manel@mail.com',
        'tel' => '85 9998-9999',
    ]
];
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </tr>

    <tr>
        <?php
        foreach ($_SESSION['alunos'] as $key=>$aluno) { ?>

            <td><?php echo $alunos[$key]['nome'] ?></td>
            <td><?php echo $alunos[$key]['email'] ?></td>
            <td><?php echo $alunos[$key]['tel'] ?></td>

    </tr>
    <?php } ?>
</table>
