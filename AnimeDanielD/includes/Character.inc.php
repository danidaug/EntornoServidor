<?php
class Character{
    private string $name;
    private int $age;
    private string $genre;
    private string $species;

    public function __construct(string $name, string $genre, int $age = -1, string $species='humano'){
        $this->name = $name;
        if($this->chekAge($age)===true){
            $this->age = $age;
        }else{
            $this->age = -1;
        }
        
        $this->genre = $genre;

        if($this->chekSpecies($species)===true){
            $this->species = $species;
        }else{
            $this->species = 'desconocida';
        }
        
    }
    
    private function chekAge(int $age): bool{
        if ($age < 0){
            return false;
        }else{
            return true;
        }
    }

    private function chekSpecies(string $species):bool{
        if (preg_match('/\d/',$species)){
            return false;
        }else{
            return true;
        }
    }

    public function __set ($property, $value){
        if($property=='age' && $this->chekAge($value)==true){
            $this->$property = $value;
        }else{
            $this->age = -1;
        }
        if($property=='species' && $this->chekSpecies($value)==true ){
            $this->$property = $value;
        }else{
            $this->species = 'desconocida';
        }
        
        
    }
    
    public function data(){
        return $this->name .' tiene '. $this->age .' años, es '. $this->genre .' y es de la especie '. $this->species;
    }




}

?>

