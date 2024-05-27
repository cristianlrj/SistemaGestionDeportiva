<?php 
	class LoginModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function sessionLogin($email, $clave){
			$sql = "SELECT idusuario, nombre FROM usuario WHERE email = '$email' AND clave = '$clave'";

			$select = $this->select($sql);

			return $select;
		}

	}
 ?>