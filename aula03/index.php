<?php if (isset($_GET['error'])):?>
    <span style="color:red")>
    Error, <?php echo $_GET['campo']?> Obrigatorio
</span>
<?php endif;?>


<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";
    </head>
<body>
<div class="container">
<h1>Cadastro</h1><br>

<form action="login.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $_GET['nome'] ?? '' ?>"><br>

    <label>Email</label>
    <input type="text" name="email" value="<?php echo $_GET['email'] ?? '' ?>"><br>
    <label>Ano Nascimento</label>
   <select name="ano_nascimento">
       <option value="<?php echo $_GET['ano_nascimento'] ?? '--Selecione--' ?>" selected><?php echo $_GET['ano_nascimento'] ?? '--Selecione--' ?></option>
       <?php
       for ($ano = 2018;$ano>=1980;$ano--){?>

           <option value="<?php echo $ano?>"><?php echo $ano?></option>
         <?php } ?>
           echo $ano?></option>
   </select><br>

    <input type="submit" value="Enviar" class="btn btn-success">
    <input type="button" value="Cancelar" class="btn btn-info">
</form>
</div>
</body>
