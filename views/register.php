<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Fonte estilizada */
            background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center fixed; /* Fundo de imagem */
            background-size: cover; /* Cobrir toda a tela */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8); /* Efeito de brilho no texto */
        }
        
        .container {
            background-color: rgba(0, 0, 0, 0.8); /* Fundo escuro para contraste */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.35); /* Sombra mais suave */
            padding: 40px; /* Aumentar o padding */
            width: 90%; /* Largura responsiva */
            max-width: 400px; /* Largura máxima */
            text-align: center;
        }
        
        h2 {
            margin-bottom: 20px;
            color: #9370DB; /* Cor roxa para o título */
            text-shadow: 0 0 20px rgba(147, 112, 219, 0.8); /* Brilho no título */
        }

        label {
            display: block; /* Faz o label ocupar uma linha completa */
            margin-bottom: 8px; /* Espaçamento entre o label e os inputs */
            color: #fff; /* Cor do texto do label */
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease; /* Transição suave nas bordas */
            background: rgba(255, 255, 255, 0.9); /* Fundo branco com leve transparência */
            color: #333; /* Cor do texto do input */
        }

        input:focus, select:focus {
            border-color: #9370DB; /* Mudança de cor na borda ao focar */
            outline: none; /* Retirar o contorno padrão */
            box-shadow: 0 0 5px rgba(147, 112, 219, 0.5); /* Brilho ao focar */
        }

        button {
            width: 100%;
            padding: 12px; /* Tamanho consistente com outros inputs */
            background-color: #9370DB; /* Fundo roxo */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            transition: background-color 0.3s ease, transform 0.2s ease; /* Animações suaves */
        }

        button:hover {
            background-color: #7B68EE; /* Roxo mais escuro ao passar o mouse */
            transform: translateY(-2px); /* Leve elevamento ao passar o mouse */
            box-shadow: 0 5px 15px rgba(147, 112, 219, 0.5); /* Sombra ao passar o mouse */
        }

        a {
            display: block;
            margin-top: 20px;
            color: #9370DB; /* Cor roxa para o link */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline; /* Sublinha ao passar o mouse */
            text-shadow: 0 0 10px rgba(147, 112, 219, 0.8); /* Brilho ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
            
            <label for="perfil">Perfil</label>
            <select name="perfil" id="perfil" required>
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            
            <button type="submit">Cadastrar</button>
            <a href="index.php?action=login">Voltar ao login</a>
        </form>
    </div>
</body>
</html>