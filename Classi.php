<?php
require_once './Alunni.php';

        class Classi implements JsonSerializable{
            private $students = [];
            public function __construct(){
                $this ->students=array();
                $this ->students[0] = new Alunni("Rida", "Carola", "02/04/2005");
                $this ->students[1] = new Alunni("Giovanni", "Carola", "02/04/2005");
                $this ->students[2] = new Alunni("Marco", "Carola", "02/04/2005");
                $this ->students[3] = new Alunni("Mario", "Carola", "02/04/2005");
                $this ->students[4] = new Alunni("Claudio", "Benve", "02/04/2005");
            }
            
            public function displayStudents(){
                $msg = '';
                foreach($this->students as $student){
                    $msg .= $student->stampa()."<br>";
                    
                }
                return $msg;
            }

            public function searchStudent($nome){
                $msg;
                foreach($this->students as $student){
                    if($student->getNome() == $nome){
                        $msg = [
                            'nome' => $student->getNome(),
                            'cognome' => $student->getCognome(),
                            'dataNascita' => $student->getDataNascita()
                        ];
                    }
                }
                return $msg;
            }

            

            public function stampa(){
               
                $msg = '';
                foreach($this->students as $student){
                    $msg .= $student->stampa();
                }
                return $msg;
            }

            public function jsonSerialize()
            {
                return [
                    'students' => $this->students
                ];
            }
        }

        

    ?>
