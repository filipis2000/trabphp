<h1>Listar usuario</h1>
<?php
$sql = "SELECT * FROM usuario";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
  print "<table class ='table table-hover table-bordered'>";
  print "<tr>";
  print "<th>#</th>";
  print "<th>Nome</th>";
  print "<th>Usuario</th>";
  print "<th>E-mail</th>";
  print "<th>Ações</th>";
  print "</tr>";
  while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>" . $row->id . "</td>";
    print "<td>" . $row->nome . "</td>";
    print "<td>" . $row->usuario . "</td>";
    print "<td>" . $row->email . "</td>";
    print "<td>
     <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>
    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}\" class='btn btn-danger'>Excluir</button></td>";
    print "</td>";
  }
  print "</table>";
} else {
  print "<p class='alert alert-danger'>Nenhum resultado encontrado!</p>";

}
?>