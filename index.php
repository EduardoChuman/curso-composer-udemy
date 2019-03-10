<?php

// Primeiro realiza o require do autoload
require 'vendor/autoload.php';

// usa os namespaces para não ter que settar toda vez que usar uma nova classe
use app\classes\general\Done;
use aux\OtherClassToAutoload;


// Testes
$teste = new Done;
echo $teste->done();

echo "<br>";

$foi = new OtherClassToAutoload;
echo $foi->works();