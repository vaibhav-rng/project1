<?php 
   $currentData=file_get_contents(__DIR__.'/score.json');
   $currentDataArray=json_decode($currentData,true);

   
   $newData= array
   (
      'name'=>$_POST['name'],
      'scored'=>$_POST['scored'],
      'difficulty'=>$_POST['difficulty']
   );
   $currentDataArray[]=$newData;

   $jsonData=json_encode($currentDataArray);
   
   file_put_contents(__DIR__.'/score.json',$jsonData);

   header("Location: http://localhost/project1/ScoreBoard.php");
 
    exit;
?>