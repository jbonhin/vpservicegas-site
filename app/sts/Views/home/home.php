<?php

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if(!defined('C7E3L8K9E5')){
   header("Location: /");
   die("Erro: Página não encontrada!");
}

echo "<h1>Página Inicial</h1>";

//var_dump($this->data[0]);
//echo "ID: {$this->data['id']}<br>";

// Acessa o IF quando encontrou algum registro no banco de dados
if (!empty($this->data[0])) {

   //Ler o registro da página home retornado do banco de dados
   //A função extract é utilizado para extrair o array e imprimir através do nome da chave
   extract($this->data[0]);
   echo "ID: $id <br>";
   echo "Título: $title_top <br>";
   echo "Descrição: $description_top <br>";
   echo "Link do botão: $link_btn_top <br>";
   echo "Texto do botão: $txt_btn_top <br>";
   echo "Nome da imagem: $image <br>";
} else {
   echo "<p style='color: #f00;'>Erro: Nenhum registro encontrado!</p>";
}
