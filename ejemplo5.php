<?php 
interface Nadador 
{ 
    public function nadar(): string; 
    } 
  
class Pato implements Nadador 
{ 
    public function nadar(): string 
    { 
        return "El pato nada en la superficie."; 
    } 
} 
  
class Pez implements Nadador 
{ 
    public function nadar(): string 
    { 
        return "El pez nada bajo el agua."; 
    } 
} 
class Humano implements Nadador 
{ 
    public function nadar(): string 
    { 
        return "El humano nada en la superficie."; 
    } 
} 
  
$animales = [new Pato(), new Pez(), new Humano()]; 
  
foreach ($animales as $animal) { 
    echo $animal->nadar() . PHP_EOL; 
} 
  
echo "¿Pato es Nadador? " . ($animales[0] instanceof Nadador ? "Sí" : "No") . PHP_EOL; 
echo "¿Pato es un tipo de Pez? " . ($animales[0] instanceof Pez ? "Sí" : "No") . PHP_EOL; 
echo "¿Humano es un tipo de Nadador? " . ($animales[2] instanceof Nadador ? "Sí" : "No") . PHP_EOL;  
