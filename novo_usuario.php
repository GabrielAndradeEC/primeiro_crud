<h1>Novo usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="">
        <label>Nome</label>
        <input type="text" name="nome" class= "">
    </div>
    <div class="">
        <label>E-mail</label>
        <input type="email" name="email" class="">
    </div>
    <div class="">
        <label>Senha</label>
        <input type="password" name="senha" class="">
    </div>
    <div class="">
        <label>Data de nascimento</label>
        <input type="date" name="data_nasc" class="">
    </div>
    <button type="submit" class="">Enviar</button>
</form>