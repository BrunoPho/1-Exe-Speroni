<?php 
 session_start();

if (isset($_POST['user'] & $_POST['senha'])){

 $user  = $_POST['user '];
 $senha = $_POST['senha'];

   if ($user=='admin' & $senha=='1234') {

     $_SESSION['nome'] = 'administrador';
     $_SESSION['tipo'] = 'a';

   }else{
   	echo "Preencha os dados corretamente";
   }

}else{
	echo "Preencha usuário e senha";
}