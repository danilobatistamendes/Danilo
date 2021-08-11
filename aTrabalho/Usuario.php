<?php



 class usuario extends Conexao {
     public array $formDados;
     public object $conexao;



         public function Cadastrar (){
             $this->conexao = $this->conect();
             $query_usuario= "INSERT INTO usuario (nome , cpf , email , telefone , senha )
             values (:nome , :cpf , :email , :telefone ,   :senha)";

             $cadastro =$this->conexao->prepare($query_usuario);

             $cadastro->bindParam(':nome' , $this->formDados ['nome']);
             $cadastro->bindParam(':cpf' , $this->formDados ['cpf']);
             $cadastro->bindParam(':email' , $this->formDados ['email']);
             $cadastro->bindParam(':telefone' , $this->formDados ['telefone']);

             $cadastro->bindParam(':senha' , $this->formDados ['senha']);

             $cadastro->execute();
              if($cadastro->rowCount()){
                  return true;
              }else {
                  return false;
              }
         }





    public function username(){
        $this->conexao = $this->conect();
        $query_usuario = " SELECT nome
        FROM usuario
        WHERE nome  = :nome";
        $cadastro = $this->conexao->prepare($query_usuario);
        $cadastro->bindParam(':nome', $this->formDados['nome']);
        $cadastro->execute();
        if($cadastro->rowCount()){
            return true;
        }else{
            return false;
        }}}

        class login extends conexao
        {
            public array $formDados;
            public object $conexao;

            public function validar(){
                $this->conexao = $this->conect();
                $query_login = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
                $result_login = $this->conexao->prepare($query_login);
                $result_login->bindParam(':email', $this->formDados['email']);
                $result_login->bindParam(':senha', $this->formDados['senha']);
                $result_login->execute();
                $retorno = $result_login->fetchAll();
                return $retorno;
            }
        }



    class Produto extends Conexao {
        public array $formDados;
        public object $conexao;

        public function Listar (): array{
            $this->conexao =$this->conect();
            $query_produto="SELECT id,locacao,descricao,diaria,contato FROM empresa
            order by id ASC limit 40 ";
            $resultado_prods=$this->conexao->prepare($query_produto);
            $resultado_prods->execute();
            $retorno=$resultado_prods->fetchAll();
            return $retorno;

        }

            public function Cadastrar (){
                $this->conexao = $this->conect();
                $query_produto= "INSERT INTO empresa (razao, locacao, descricao, diaria, contato) values (:razao, :locacao, :descricao, :diaria, :contato)";

                $cadastroProduto = $this->conexao->prepare($query_produto);

                $cadastroProduto->bindParam(':razao' , $this->formDados ['razao']);
                $cadastroProduto->bindParam(':locacao' , $this->formDados ['locacao']);
                $cadastroProduto->bindParam(':descricao' , $this->formDados ['descricao']);
                $cadastroProduto->bindParam(':diaria' , $this->formDados ['diaria']);
                $cadastroProduto->bindParam(':contato' , $this->formDados ['contato']);

                $cadastroProduto->execute();
                 if($cadastroProduto->rowCount()){
                     return true;
                 }else {
                     return false;
                 }}


      public function Podu(){
        $this->conexao = $this->conect();
        $query_produto = " SELECT razao
    FROM empresa
    WHERE razao = :razao";
        $cadastroProduto = $this->conexao->prepare($query_produto);
        $cadastroProduto->bindParam(':razao', $this->formDados['razao']);
        $cadastroProduto->execute();
        if($cadastroProduto->rowCount()){
           return true;
        }else{
          return false;
     }
       }
    }
?>
