<?php
class Database{
   //Ultiliza padrão Singleton, cujo objetivo é garantir que apenas uma única instância de classe seja criada durante a execução do programa, e que essa instância seja ultilizado sempre que o nescessário
   private static  $instance = null:

   //Método público que retorna a conexão com o BD
   public static function getConnection(){
      //verifica se a instância de conexão ainda não foi criada 
      if(self::$instance){
      $host   =  'Localhost';
      $db     =  'sistema_usuarios';
      $user   =  'root';
      $password = '';

      //a conexão usa o driver mysql e as informações de host e db

      self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);
     // Define o modo de erro para execeções,facilitando a depuração do tratamento do erro
      self::$instance->setAttribute(POD::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
return self::$instance;
   }
}
?>