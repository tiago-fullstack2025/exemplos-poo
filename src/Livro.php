<?php
class Livro {
    public string $titulo;
    public string $autor;
    public ?int $paginas;

    public function __construct(
        string $valorTitulo, 
        string $valorAutor,
        ?int $valorPaginas = null
    ){
        $this->titulo = $valorTitulo;
        $this->autor = $valorAutor;
        $this->paginas = $valorPaginas;
    }
}