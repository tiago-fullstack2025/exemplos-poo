<?php
class Cliente {
    /* Atributos privados NÃO PODEM SER ACESSADOS/MODIFICADOS
    fora da própria classe em que estão declarados. */
    private string $nome;
    private int $idade;
    public string $email;
    private ?string $telefone; 

    public function __construct( 
        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $valorDoTelefone = null 
    ) {
        $this->setNome($valorDoNome);
        $this->setIdade($valorDaIdade);
        $this->setEmail($valorDoEmail);
        $this->telefone = $valorDoTelefone;
    }


    /* Métodos getters: permite acesso APENAS para leitura */
    public function getNome():string {
        return $this->nome;
    }

    public function getEmail():string {
        return $this->email;
    }
    
    public function getIdade():int {
        return $this->idade;
    }
    
    public function getTelefone():?string {
        return $this->telefone;
    }

    /* Métodos setters: permitem acesso de escrita para definir valores
    de acordo com alguma regra/validação. */
    private function setNome(string $valorNome):void {
        /* Se nome estiver vazio */
        if(empty($valorNome)){
            // apresentamos uma mensagem alertando
            echo "<p style='color:red'>Nome não pode ser vazio!</p>";
        } else {
            // senão, pegamos o valor do nome e colocamos no atributo do objeto
            $this->nome = $valorNome;
        }
    }


    private function setEmail(string $valorEmail):void { 
        /* Usamos o filter_var com a constante FILTER_VALIDATE_EMAIL
        para o PHP verificar se o valor de e-mail informado é válido.
        Se sim, retorna TRUE. Senão, retorna FALSE. */
        $validaEmail = filter_var($valorEmail, FILTER_VALIDATE_EMAIL);

        // Se o e-mail não for válido
        if(!$validaEmail){
            // Alerta o usuário
            echo "<p style='color:red'>E-mail inválido!</p>";
        } else {
            // Senão, atribui ao atributo
            $this->email = $valorEmail;
        }
    }

    private function setIdade(int $valorDaIdade):void {
        if($valorDaIdade < 0){
            echo "<p style='color:red'>Idade não pode ser negativa!</p>";
        }

        $this->idade = $valorDaIdade;
    }
}
