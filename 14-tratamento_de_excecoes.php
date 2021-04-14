<?php
/*
 * Ocorrência anormal que afeta o funcionamento da aplicação
 * Exception é a classe base para todos Exceptions
 * message, code, file, line
 */

class Newsletter {
    public function cadastrarEmail($email) {
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Email inválido!", 121);
        else:
            echo "Email cadastrado com sucesso!";
        endif;
    }
}

$newsletter = new Newsletter();

try {
    $newsletter->cadastrarEmail("contato@");
} catch (Exception $ex) {
    echo "Mensagem: " . $ex->getMessage() . "<br>";
    echo "Código: " . $ex->getCode() . "<br>";
    echo "Arquivo: " . $ex->getFile() . "<br>";
    echo "Linha: " . $ex->getLine() . "<br>";
}