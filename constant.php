<?php

define('NAMA', 'Budi Sahputra');
echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR;

class Coba {
    const NAMA = "Budi Sahputra";
}

echo "<br>";
echo Coba::NAMA;
echo "<br>";

function Coba()
{
    return __FUNCTION__ . "<br>";
}

echo Coba();

// Magic Constant
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
echo __FUNCTION__ . "<br>";
echo __CLASS__ . "<br>";
echo __TRAIT__ . "<br>";
echo __METHOD__ . "<br>";
echo __NAMESPACE__ . "<br>";