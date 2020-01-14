<?php
echo('Hoe oud ben je?'.PHP_EOL);
$age = readline('');
if($age >= 16.5){
    echo("Je mag beginnen met rijlessen!"); 
}
else{
    echo("Je bent nog te jong om rijlessen te nemen!");
}