<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 6
* --------------------------------------------------------------------------
* Crie uma função que recebe como parâmetro um array que representa itens 
* de uma lista html e um identificador que representa o tipo da lista 
* ordenada (ol) ou não ordenada (ul). A função deverá imprimir a lista em 
* formato html. Caso nenhum tipo for informado, o valor padrão deverá ser 
* lista não ordenada (ul)
* Teste a Função
* --------------------------------------------------------------------------
*/


function gerarLista($itens, $tipo = 'ul') {
    echo "<$tipo>";
    foreach ($itens as $item) {
        echo "<li>$item</li>";
    }
    echo "</$tipo>";
}

gerarLista(['Casa', 'Apartamento', 'Sobrado', 'Sala Comercial']);
gerarLista(['Abrir Porta', 'Entrar', 'Fechar Porta'], 'ol');