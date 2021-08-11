<?php



abstract class Conexao {

    private static string  $db = "mysql";
    private static string  $host = "localhost";
    private static string  $dbname = "cadastro";
    private static string  $user = "root";
    private static string  $pass = "";
    private static int     $port = 3306;
    private static object  $conect;

    public function conect () {
    	try {
        	self::$conect = new PDO(self::$db . ':host=' . self::$host . ';port=' . self::$port . ';dbname=' . self::$dbname, self::$user , self::$pass);    
        	return self::$conect;
			echo "Conectado com sucesso.";
	    } catch(Exception $ex) {
			die ('Erro : Por favor tente novamente . Caso o problema persista , entre em
            contato com o administrador do Site');
		}

    }
    
}
?>