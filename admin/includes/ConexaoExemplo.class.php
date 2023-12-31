<?php
	class Conexao
	{
	    # Variável que guarda a conexão PDO.
	    protected static $instancia;
	    # Private construct - garante que a classe só possa ser instanciada internamente.
	    private function __construct()
	    {
	        # Informações sobre o banco de dados:
	        $db_host = "localhost";
	        $db_nome = "bd_setif";
	        $db_usuario = "root";
	        $db_senha = "";
	        $db_driver = "mysql";
	        # Informações sobre o sistema:
	        $sistema_titulo = "Semana da Tecnologia da Informação do IFPR Campus Paranavaí (SETIF)";
	        $sistema_email = "setif.paranavai@gmail.com";
	        try
	        {
	            # Atribui o objeto PDO à variável $db.
	            self::$instancia = new PDO("$db_driver:host=$db_host; dbname=$db_nome; charset=utf8", $db_usuario, $db_senha);
	            # Garante que o PDO lance exceções durante erros.
	            self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            # Garante que os dados sejam armazenados com codificação UFT-8.
	            self::$instancia->exec('SET NAMES utf8');
	        }
	        catch (PDOException $e)
	        {
	        	print($e->getMessage());
	            # Envia um e-mail para o e-mail oficial do sistema, em caso de erro de conexão.
	            mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
	            # Então não carrega nada mais da página.
	            die("Connection Error: " . $e->getMessage());
	        }
	    }
	    # Método estático - acessível sem instanciação.
	    public static function getInstancia()
	    {
	        # Garante uma única instância. Se não existe uma conexão, criamos uma nova.
	        if (!self::$instancia)
	        {
	            new Conexao();
	        }
	        # Retorna a conexão.
	        return self::$instancia;
	    }
	}
?>