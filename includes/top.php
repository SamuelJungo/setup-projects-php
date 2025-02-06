
<?php
session_start(); // Inicia a sessão

// Verifica se a sessão do usuário existe
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario']; // Recupera todos os dados do usuário da sessão

    // Acessa o ID do usuário (ou qualquer outro dado necessário)
    $id = $usuario['id_usuario']; // Certifique-se de que 'id' corresponde ao nome do campo do banco de dados
    $nomeEmpresa = $usuario['nome_usuario']; // Exemplo: acessa o nome do usuário
    $email = $usuario['email']; // Exemplo: acessa o email do usuário
} else {
    header("location: ../");
    exit;
}
?>

<!doctype html>
<html lang="pt" class="semi-light">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="../assets/css/pace.min.css" rel="stylesheet" />
  <script src="../assets/js/pace.min.js"></script>
  <script src="../assets/jquery.js"></script>

  <!--plugins-->
  <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="../assets/css/dark-theme.css" rel="stylesheet" />
  <link href="../assets/css/semi-dark.css" rel="stylesheet" />
  <link href="../assets/css/header-colors.css" rel="stylesheet" />


  <title>Sistema Faturação</title>
</head>

<body>