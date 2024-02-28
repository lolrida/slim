<?php
    class Alunni implements JsonSerializable{
        protected $nome;
        protected $cognome;
        protected $dataNascita;
    
        public function Alunni($nome, $cognome, $dataNascita){
            $this->nome=$nome;
            $this->cognome=$cognome;
            $this->dataNascita=$dataNascita;
        }
    
    
        public function getNome(){
            return $this->nome;
        }
        public function getCognome(){
            return $this->cognome;
        }
        public function getDataNascita(){
            return $this->dataNascita;
        }
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
    
    
    
        public function setCognome($cognome) {
            $this->cognome = $cognome;
        }
    
    
    
    
        public function setDataNascita($dataNascita) {
            $this->dataNascita = $dataNascita;
        }
        
        public function stampa(){
            return "Nome: ".$this->nome." Cognome: ".$this->cognome." Data di nascita: ".$this->dataNascita;
        }
    
    
        public function jsonSerialize(){
            return [
                'nome' => $this->nome,
                'cognome' => $this->cognome,
                'dataNascita' => $this->dataNascita
            ];
        }
    
        


    
        
    }


?>