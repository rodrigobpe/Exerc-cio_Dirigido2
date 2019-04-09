<?php

print "Digite o 1°Número: ";
$Base=fgets(STDIN);

print "Digite o 2°Número: ";
$Expoente=fgets(STDIN);

$potencia= ($Base**$Expoente);

print $potencia;
