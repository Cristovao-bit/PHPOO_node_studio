<?php
/*
 * Interface nada mais é que criar um modelo que sirva pra outras classes
 * Na interface os atributos devem ser public e podemos atribuir um parametro
 */

interface Crud {
    public function create($data);// tipo o parametro $data
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {
    public function create($data) {
        // lógica para criar uma notícia
    }
    
    public function read() {
        // Lógica para ler uma notícia;
    }
    
    public function update() {
        // Lógica para atualizar uma notícia;
    }
    
    public function delete() {
        // Lógica para deletar uma notícia;
    }
}