<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Fonte mais estilizada */
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
        main {
            background-color: rgba(0, 0, 0, 0.7); /* Fundo escuro para contraste */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.35); /* Sombra mais suave */
            padding: 40px; /* Aumentamos o padding */
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #9370DB; /* Cor roxa para o título */
            text-shadow: 0 0 20px rgba(147, 112, 219, 0.8); /* Brilho no título */
        }
        input {
            width: 100%;
            padding: 12px; /* Maior espaçamento interno */
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease; /* Transição suave */
            background: rgba(255, 255, 255, 0.9); /* Fundo branco com leve transparência */
        }
        input:focus {
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
            box-shadow: 0 5px 15px rgba(147, 112, 219, 0.5); /* Sombra na mouse hover */
        }
        a {
            display: block;
            margin-top: 20px;
            color: #9370DB; /* Cor roxa para o link */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
            text-shadow: 0 0 10px rgba(147, 112, 219, 0.8); /* Brilho ao passar o mouse */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> <!-- Link da fonte -->
</head>

<body>
    <main>
        <h2>Login</h2>
        <form method="post" action="index.php?action=login">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>
</body>
</html>
