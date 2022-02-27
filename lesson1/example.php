<?php
$skills = simplexml_load_file('data.xml');

echo '<h1>My skills</h1>' . '<br>';
echo $skills->codingskills->skill[0]->language;
echo '<br>';
echo $skills->codingskills->skill[0]->description;
echo '<br>';
echo $skills->codingskills->skill[0]->experience;
echo '<br>';
echo '<br>';

echo $skills->codingskills->skill[1]->language;
echo '<br>';
echo $skills->codingskills->skill[1]->description;
echo '<br>';
echo $skills->codingskills->skill[1]->experience;
echo '<br>';
?>