<h1>Listar usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd >0) {
        print "<table class=''>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de nascimento</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                    <button class='btnenviar' onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btnexcluir'>Excluir</button>
                  </td>"; 
            print "</tr>";
        }
        print "</table>";
    }else{
            print "<p class=''>Não encontrou resultados!</p>";
    }
?>