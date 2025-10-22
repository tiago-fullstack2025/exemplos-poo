<?php
class Cliente {
    public string $nome;
    public int $idade;
    public string $email;

    /* Método construtor: responsável por 'construir'
    um objeto COM seus dados no momento da criação */
    public function __construct( 
        string $valorDoNome, int $valorDaIdade, string $valorDoEmail ) {
        
        /* Atribuindo os valores recebidos através dos parâmetros
        do construtor, aos atributos da classe */
        $this->nome = $valorDoNome;
        $this->idade = $valorDaIdade;
        $this->email = $valorDoEmail;
    }
    
}
