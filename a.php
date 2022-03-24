<?php
require 'questionController.php';
$question=getQuestion();
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {box-sizing: border-box}

.mySlides 
{
  display: none
}


.slideshow-container
{
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next 
{
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next 
{
  right: 0;
  border-radius: 3px 0 0 3px;
}

</style>
</head>
<body style="background:black">
<div class="slideshow-container">
<?php foreach($question as $question):?>
  <div class="mySlides">
      <div style="color:black"><?php echo $question['question']?></div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
   </div>
<?php endforeach?>
  
</div>

<br>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides"); //array

  if (n > slides.length)
  {
    slideIndex = 1
  }    
  if (n < 1) 
  {
  slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++)
  {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html> 
