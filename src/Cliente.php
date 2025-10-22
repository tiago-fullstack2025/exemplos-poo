<?php
class Cliente {
    public string $nome;
    public int $idade;
    public string $email;

    // Telefone é opcional, ou seja, caso não seja informado, ficará valendo null
    public ?string $telefone; // ? indica que este atributo PODE ser NULL

    /* Método construtor: responsável por 'construir'
    um objeto COM seus dados no momento da criação */
    public function __construct( 
        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $valorDoTelefone = null // null como valor padrão
    ) {
        
        /* Atribuindo os valores recebidos através dos parâmetros
        do construtor, aos atributos da classe */
        $this->nome = $valorDoNome;
        $this->idade = $valorDaIdade;
        $this->email = $valorDoEmail;
        $this->telefone = $valorDoTelefone;
    }
    
}
