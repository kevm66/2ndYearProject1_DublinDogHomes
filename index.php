<?php
//grab the variables from the post message and get them into php
$name = $_POST["name"];
$desc = $_POST["desc"];
$homedesc = $_POST["homedesc"];
$locationdesc = $_POST["location"];
$smalldogs = $_POST["smalldogs"];
$largedogs = $_POST["largedogs"];


$file = 'home.xml';

$xml = simplexml_load_file($file);
//$xml->preserveWhiteSpace = false;
//$xml->formatOutput = true;

//create child elements from the variables that were grabbed from the form.

$home = $xml->addChild('home');
$home->addChild('name', $name);
$home->addChild('description', $desc);
$home->addChild('homedesc', $homedesc);
$home->addChild('location', $locationdesc);
$home->addChild('smalldogs', $smalldogs);
$home->addChild('largedogs', $largedogs);

//write to file
$xml->asXML($file);



$xmla = new DOMDocument;
$xmla->load('home.xml');
$xsla = new DOMDocument;
$xsla->substituteEntities = true; 
$xsla->load('home.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsla); // attach the xsl rules

echo $proc->transformToXML($xmla);

?>


