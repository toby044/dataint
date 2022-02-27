<?php
$xml = simplexml_load_file('data.xml');

$skills = $xml->skill;


echo '<h1>My skills</h1>';

foreach($skills as $data) {
    foreach($data->language as $txt){
        echo $txt.'<br>';    
    }
    foreach($data->program as $txt){
        echo $txt.'<br>';    
    }
    foreach($data->description as $txt){
        echo $txt.'<br>';    
    }
    foreach($data->experience as $txt){
        echo $txt.'<br>';    
    }
    
    echo '<br>';
}


echo '<br>' . '<p>This is made with data from XML: eXtensible Markup Language</p>';

echo '<h2>Pro / Cons of XML</h2>';
echo '<h3>Pros</h3>';
echo '<ul>';
echo '<li>Independant programming language</li>';
echo '<li>Supports unicode</li>';
echo '<li>Liquid data changing. If you change data in your XML file, it will automatically update because other languages like html will draw directly from the data file</li>';
echo '<li>Data validation with DTD, Schema or VSCode extensions</li>';
echo '</ul>';

echo '<h3>Cons</h3>';
echo '<ul>';
echo '<li>Redundant compared to JSON</li>';
echo '<li>Higher storage because of the redundant syntax</li>';
echo '<li>Less readable than other text-based data transmissions like JSON</li>';
echo '<li>XML files can get big because of the nature of the syntax</li>';
echo '</ul>';
