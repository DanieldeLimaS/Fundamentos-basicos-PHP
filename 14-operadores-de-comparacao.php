<?php

//OPERADORES DE COMPARAÇÃO
// ==	se o valor for igual
// !=	se o valor for diferente
// ===	se o valor for identico ao outro
// !===
// <>
// <
// >
// <=
// >=
//<=>
echo "IGUAL<BR>";
if(10==10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";

///////////////////
echo "DIFERENTE<BR>";
if(10!=10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";

//////////////////
echo "IDENTICO<BR>";
if(10===10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";
//////////////////

echo "NÃO IDENTICO<BR>";
if(10!==10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";

//////////////////

echo "DIFERENTE (<>)<BR>";
if(10<>10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";

//////////////////

echo "MENOR QUE<BR>";
if(10<10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";


//////////////////

echo "MAIOR QUE<BR>";
if(10>10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";

//////////////////

echo "MAIOR IGUAL<BR>";
if(10>=10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";

//////////////////

echo "MENOR IGUAL<BR>";
if(10<=10):
	echo "Positivo";
else:
	echo "Negativo";
endif;
echo "<hr>";

//////////////////

echo "ESPACE CHIP - RETORNA 3 VALORES - FAZ COMPPARAÇÕES COMBINADAS<BR>";
echo var_dump(20<=>30);

 