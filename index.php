<?php
declare(strict_types=1);

class Pessoas{
    
    private string $nome;
    private int $cpf;
    private string $email;
     
    public function __construct(string $nome, int $cpf, string $email){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }
}



$Nicolas = new Pessoas('Nicolas',59766151261,
'pirespardon@gmail.com');

class Produto{ 
    private string $nome;
    private int $preço;
    private string $categoria;
     
    public function __construct(string $nome, int $preço, string $categoria){

        $this->nome = $nome;
        $this->preço= $preço;
        $this->categoria = $categoria;
}
}
$produto = new Produto('macarrão', 22, 'alimento');

function pegarNome (){
    

}

?>