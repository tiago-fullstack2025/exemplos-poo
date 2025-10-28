<?php
class Livro {
    private string $titulo;
    private string $autor;
    private ?int $paginas;

    public function __construct(
        string $valorTitulo, 
        string $valorAutor,
        ?int $valorPaginas = null
    ){
        $this->setTitulo($valorTitulo);
        $this->setAutor($valorAutor);
        $this->setPaginas($valorPaginas);
    }

    private function verificarTitulo(string $valorTitulo):string {
        if( mb_strlen($valorTitulo) < 3 ){
            echo "<p style='color:red'>
            Título não pode ter menos do que 3 letras</p>";
            return "";
        } else {
            return $valorTitulo;
        }
    }

    /* Métodos getters */
    public function getTitulo():string { return $this->titulo; }
    public function getAutor():string { return $this->autor; }
    public function getPaginas():?int { return $this->paginas; }

    /* Métodos setters */
    public function setTitulo(string $valorTitulo):void {
        $tituloVerificado = $this->verificarTitulo($valorTitulo);
        $this->titulo = $tituloVerificado;
    }

    public function setAutor(string $valorAutor):void {
        $this->autor = $valorAutor;
    }

    public function setPaginas(?int $valorPaginas):void {
        $this->paginas = $valorPaginas;
    }
}