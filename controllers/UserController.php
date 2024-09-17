 <?php
 //Definição da classe UserController, responsavel por gerenciar as ações relacionadas aos usuários
 class UserController
 {
    public function register(){
        $data = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'],
            'perfil' => $_POST['perfil'],
        ]
    }
 }
 ?>
