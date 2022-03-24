<?php
function getQuestion()
{
   return json_decode(file_get_contents(__DIR__.'/qustionDb.json'),true);
}

function getscore()
{
   return json_decode(file_get_contents(__DIR__.'/score.json'),true);
}

?>