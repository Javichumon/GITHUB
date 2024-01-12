<?php

class UserDataAccess
{
	
	function __construct()
    {
    }

	function insertar($usuario,$perfil,$clave)
	{
        if (strlen($clave) >= 8) {
            
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		
        mysqli_select_db($conexion, 'chess_game');
		$consulta = mysqli_prepare($conexion, "insert into T_Players(name,password,perfil) values (?,?,?);");
        $hash = password_hash($clave, PASSWORD_DEFAULT);
        $consulta->bind_param("sss", $usuario,$hash,$perfil);
        $res = $consulta->execute();
        
		return $res;
    }
    else
    {
        echo "La contraseña tiene que tener minimo 8 caracteres";
    }
	}

    function verificar($usuario,$clave)
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
        mysqli_select_db($conexion, 'chess_game');
        $consulta = mysqli_prepare($conexion, "select name,password,perfil from T_Players where name = ?;");
        $sanitized_usuario = mysqli_real_escape_string($conexion, $usuario);       
        $consulta->bind_param("s", $sanitized_usuario);
        $consulta->execute();
        $res = $consulta->get_result();


        if ($res->num_rows==0)
        {
            return 'NOT_FOUND';
        }

        if ($res->num_rows>1) //El nombre de usuario debería ser único.
        {
            return 'NOT_FOUND';
        }

        $myrow = $res->fetch_assoc();
        $x = $myrow['password'];
        if (password_verify($clave, $x))
        {
            return $myrow['perfil'];
        } 
        else 
        {
            return 'NOT_FOUND';
        }
    
    }
}




















