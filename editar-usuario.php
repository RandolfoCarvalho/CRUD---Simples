<h1>
Editar Usuário

<?php
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST['id'];
$resultado = $conexão->query($sql);
$row = $resultado->fetch_object();

?>
</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <!-- mb-3 significa margin-bottom -->
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name='nome' value="<?php print $row->nome;?>" class="form-control">

    </div>
    <div>
        <label for="">E-mail</label>
        <input type="email" name='email' value="<?php print $row->email;?> " class="form-control">
    </div>
    <div>
        <label for="">senha</label>
        <input type="password" name='senha' required class="form-control">
    </div>
    <div>
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>"class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>