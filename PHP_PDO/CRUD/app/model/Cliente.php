<?php

class Cliente{

    private $nome;
    private $sobrenome;
    private $email;
    private $idade;


 
    // GET e SET
    public function getNome()
    {
        return $this->nome;
    }
 
    public function setNome($nome)
    {
        $this->nome = $nome;

    }
 
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

    }
  
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

    }
}
