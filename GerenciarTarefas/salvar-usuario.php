<?php
switch ($_REQUEST["acao"]) {
  case 'cadastrar':
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];

    $sql = "INSERT INTO usuario (nome, usuario, senha, email)VALUES ('{$nome}','{$usuario}','{$senha}','{$email}')";

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Cadastrado com sucesso');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('Não foi possivel cadastrar');>/script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;
  case 'editar':
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $senha = md5($_POST["senha"]);
    $email = $_POST["email"];

    $sql = "UPDATE usuario SET
      nome='{$nome}',
      usuario='{$usuario}',
      senha='{$senha}',
      email='{$email}'
      WHERE 
        id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Dados atualizados com sucesso');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('Não foi possivel atualizar');>/script>";
      print "<script>location.href='?page=listar';</script>";
    }

    break;
  case 'excluir':

    $sql = "DELETE FROM usuario WHERE id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Dados excluidos com sucesso');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('Não foi possivel excluir');>/script>";
      print "<script>location.href='?page=listar';</script>";
    }

    break;
}
?>