<?php

//exercício de ler 5 números e imformar soma e media deles //

print "Digite o 1° número: \n";
$N1= (int) fgets (STDIN);

print "Digite o 2° número: \n";
$N2= (int) fgets (STDIN);

print "Digite o 3° número: \n";
$N3= (int ) fgets (STDIN);
 
print "Digite o 4° número: \n";
$N4= (int)fgets (STDIN);

print "Digite o 5° número: \n";
$N5= (int) fgets (STDIN);

print "Digite o 6° número: \n";
$N6= (int) fgets (STDIN);

print "Digite o 7° número: \n";
$N7= (int) fgets (STDIN);

print "Digite o 8° número: \n";
$N8= (int) fgets (STDIN);

print "Digite o 9° número: \n";
$N9= (int) fgets (STDIN);

print "Digite o 10° número: \n";
$N10= (int) fgets (STDIN);

$soma=$N1+$N2+$N3+$N4+$N5+$N6+$N7+$N8+$N9+$N10;

print "A soma dos números deu $soma ";

$contador=0;



    while($contador<$soma) {
        $contador_impar=0;
        $contador_par=0;
        $contador++;

if($soma%2<>0){
    
    $contador_impar++;
    

}
else{
   
    $contador_par++;
    
    
}
    }


print "Existem números $contador_impar ímpares \n";
print "Existem números $contador_par pares \n";


