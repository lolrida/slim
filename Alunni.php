<?php
    class Alunni {
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
        
    
    
    
    
        


    
        
    }


?>