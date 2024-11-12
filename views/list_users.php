
<?php
session_start();
 
if (isset($_SESSION['perfil'])):
?>
 
    <!DOCTYPE html>
    <html lang="pt-br">
 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
        <style>
        body {
            font-family: 'Poppins', sans-serif; /* Fonte mais estilizada */
            background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center fixed; /* Fundo de imagem */
            background-size: cover; /* Cobrir toda a tela */
            margin: 0;
            padding: 0;
            color: white;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8); /* Efeito de brilho no texto */
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Fundo escuro para contraste */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.35); /* Sombra mais suave */
            padding: 40px; /* Aumentar o padding */
            width: 90%;
            max-width: 800px; /* Largura máxima */
            margin: auto; /* Centraliza a div */
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #9370DB; /* Cor roxa para o título */
            text-shadow: 0 0 20px rgba(147, 112, 219, 0.8); /* Brilho no título */
        }

        table {
            width: 100%;
            border-collapse: collapse; /* Remove espaços entre bordas de células */
            margin: 20px 0;
        }

        th, td {
            padding: 12px; /* Tamanho consistente nas células */
            text-align: left; /* Alinhamento à esquerda */
            border-bottom: 1px solid rgba(255, 255, 255, 0.3); /* Linha separadora */
        }

        th {
            background-color: rgba(147, 112, 219, 0.8); /* Fundo roxo claro para cabeçalho */
            color: white;
            text-shadow: none; /* Remove brilho do cabeçalho */
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Destaca a linha ao passar o mouse */
        }

        .btn {
            display: inline-block;
            background-color: #9370DB; /* Fundo roxo */
            color: white;
            padding: 12px 20px; /* Tamanho do botão */
            border: none;
            border-radius: 4px;
            text-decoration: none; /* Sem sublinhado */
            margin-top: 15px; /* Margem superior */
            transition: background-color 0.3s ease, transform 0.2s ease; /* Animações suaves */
        }

        .btn:hover {
            background-color: #7B68EE; /* Roxo mais escuro ao passar o mouse */
            transform: translateY(-2px); /* Leve elevamento ao passar o mouse */
            box-shadow: 0 5px 15px rgba(147, 112, 219, 0.5); /* Sombra ao passar o mouse */
        }

        a {
            color: #9370DB; /* Cor roxa para links */
            text-decoration: none; /* Remover sublinhado */
            margin-right: 10px; /* Espaçamento entre links */
        }

        a:hover {
            text-decoration: underline; /* Sublinha ao passar o mouse */
            text-shadow: 0 0 10px rgba(147, 112, 219, 0.8); /* Brilho ao passar o mouse */
        }

        /* Estilo do menu de contexto */
        .context-menu {
            display: none; /* Inicialmente escondido */
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8); /* Fundo escuro */
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .context-menu a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
        }

        .context-menu a:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Efeito hover no menu de contexto */
        }
    </style>
 
    </head>
 
    <body class="<?= $_SESSION['perfil'] ?> "> <!-- Define a classe com base no perfil do usuário -->
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['perfil'] ?></td>
                            <td>
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                                    <a href="index.php?action=edit&id=<?= $user['id'] ?>">Editar</a>
 
                                <?php endif; ?>
 
                                <!-- Insere botão de exclusão apenas para perfil admin -->
                                <?php if ($_SESSION['perfil'] == 'admin'): ?>
                                    <a href="index.php?action=delete&id=<?= $user['id'] ?>">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
 
            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>
 
    </html>
 
<?php else: ?>
 
    <p>Erro: Você não tem permissão para visualizar essa página</p>
 
<?php
endif;
?>
tem menu de contexto

