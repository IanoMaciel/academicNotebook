<?php
    class db
    {
        //host
        private $host = 'localhost';

        //usuário
        private $usuario = 'root';

        //senha 
        private $senha = '';

        //banco de dados 
        private $database = 'registro_pg';

        public function conecta_mysql()
        {
            //cria conexão
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

            //ajusta o charset
            mysqli_set_charset($con, 'utf8');

            //verifica se houve erro na conexão
            if(mysqli_connect_errno())
            {
                echo 'Houve um erro ao tentar se conectar com o banco MySql: ' . mysqli_connect_errno();
            }
            return $con;
        }
    }
?>