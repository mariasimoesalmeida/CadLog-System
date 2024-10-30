<?php
session_start();

// Função para exibir a mensagem de boas-vindas
function exibirMensagemBemVindo($perfil) {
    return htmlspecialchars($perfil);
}

// Definindo a classe do corpo com base no perfil
$classePerfil = $_SESSION['perfil'];
$perfilUsuario = exibirMensagemBemVindo($_SESSION['perfil']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif; 
            background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center fixed; 
            background-size: cover; 
            margin: 0;
            padding: 0;
            height: 100vh; 
            display: flex;
            justify-content: center; 
            align-items: center; 
            color: white;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8); 
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7); 
            border-radius: 10px; 
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.35); 
            padding: 40px; 
            width: 80%; 
            max-width: 400px; 
            text-align: center; 
        }

        h1 {
            margin-bottom: 20px;
            color: #9370DB; 
            text-shadow: 0 0 20px rgba(147, 112, 219, 0.8); 
        }

        .welcome-message {
            margin: 10px 0;
            font-size: 18px; 
            color: #fff; 
        }

        .btn {
            display: inline-block;
            background-color: #9370DB; 
            color: white;
            padding: 12px 20px; 
            border: none; 
            border-radius: 4px; 
            text-decoration: none; 
            margin-top: 15px; 
            transition: background-color 0.3s ease, transform 0.2s ease; 
        }

        .btn:hover {
            background-color: #7B68EE; 
            transform: translateY(-2px); 
            box-shadow: 0 5px 15px rgba(147, 112, 219, 0.5); 
        }

        a {
            color: #9370DB; 
            text-decoration: none; 
        }

        a:hover {
            text-decoration: underline; 
            text-shadow: 0 0 10px rgba(147, 112, 219, 0.8); 
        }
    </style>
</head>

<body class="<?= $classePerfil ?>">
    <div class="container">
        <h1>Bem-vindo, <?= $perfilUsuario ?>!</h1>
        <p class="welcome-message">Esta é a visão do perfil <?= $perfilUsuario ?>.</p>

        <?php if ($classePerfil == 'admin'): ?>
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif ($classePerfil == 'gestor'): ?>
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br>
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>

</html>
