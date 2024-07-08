<?php

// Variáveis
$nome = 'Guilherme';
echo 'O meu nome é: ' . $nome . ' e minha idade é ' . 21 . '<br>'; // print

$Guilherme = 'Bla blah';
// $nome  --> chama o conteúdo da variável (Guilherme)

// $$nome --> chama a variável com nome da entrada (Bla Bla)

// Comparações:
$idade = 21; // Correção: Faltava ponto e vírgula e a idade deve ser um inteiro

/*
==
===
!=
>=
<=
*/

if ($idade === 21) {
    echo 'verdadeiro<br>'; // Correção: Adiciona ponto e vírgula e <br> para nova linha
} else {
    echo 'Falso<br>'; // Correção: Adiciona ponto e vírgula e <br> para nova linha
}

// Looping
for ($i = 0; $i <= 10; $i++) {
    echo $i . '<hr>'; // Correção: Adiciona ponto e vírgula e concatena com <hr>
}

$i = 0;
while ($i < 10) {
    echo $i . '<br>'; // Correção: Adiciona ponto e vírgula e concatena com <br>
    $i++;
}

// Funções
function printNumero($n) {
    echo $n . '<br>'; // Correção: Adiciona ponto e vírgula e <br> para nova linha
}

printNumero(30);

// Objetos
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome; // Correção: Corrige erro de digitação "$trhis" para "$this"
        $this->idade = $idade;
    }

    public function printNomeIdade() {
        echo $this->nome . '<br>'; // Correção: Adiciona ponto e vírgula e concatena com <br>
        echo $this->idade . '<br>'; // Correção: Adiciona ponto e vírgula e concatena com <br>
    }
}

$pessoa = new Pessoa('Guilherme', 21);
$pessoa->printNomeIdade();

$pessoa2 = new Pessoa('Felipe', 22);
$pessoa2->printNomeIdade(); // Correção: Adiciona ponto e vírgula

?>
