<?php

// Date

// d = dia
// m = mês
// Y = Ano

date_default_timezone_set('America/Sao_Paulo'); // Script para indicar o fuso-horário de hora atual

echo "Hoje é dia " .date("d/m/Y"). "<br>"; //Conjuto para indicar data no formato em português
echo "Hoje é dia " .date("d.m.Y"). "<br>"; // Outra forma de expor o data
echo "Hoje é dia " .date("Y-m-a"). "<br>"; // Formato americano de apresentação de data
echo "Hoje é dia " .date("l"). "<br>"; //Formato apresenta somente as horas
echo "<hr>";

echo "Agora é " .date("h.i.s"); // Forma de se apresentar conjuto de data e hora
echo "<hr>";

echo "Agora a hora completa " .date("d.m.Y : h.i.s"); // Uma das mutias formas de apresentação de data e hora
