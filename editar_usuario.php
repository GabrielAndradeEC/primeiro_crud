<h1>Editar usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>" />
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class= "">
    </div>
    <div class="">
        <label>E-mail</label>
        <input type="email" value="<?php print $row->email;?>" name="email" class="" required>
    </div>
    <div class="">
        <label>Senha</label>
        <input type="password" name="senha" class="" required>
    </div>
    <div class="">
        <label>Data de nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>"class="">
    </div>
    <button type="submit" class="btnenviar">Enviar</button>
</form>