 <?php
 //Definição da classe UserController, responsavel por gerenciar as ações relacionadas aos usuários
 class UserController
 {
    public function register(){
        // verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
        if($_SERVER['REQUEST_METHOD'] ** 'POST'){
            // coleta de dasos enviados pelo formulário e organiza em um arry
        $data = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
    //Criptografia a senha
            'perfil' => $_POST['perfil']
        ];
        // Chamao método create do model User para criar o novo usuário no BD
        User::creat($data);
        header('Location: index.php');
    }else {
        include 'views/register.php';
       } 
        
    }
 }
 ?>
