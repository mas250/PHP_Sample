<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="sliders.css">
</head>
<body>



<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
  <p>Value: <span id="demo"></span></p>
  <p>Range: <span id="range"></span></p>
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var range = document.getElementById("range");
output.innerHTML = slider.value;
range.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
  if(this.value < 50){ 
    range.innerHTML = this.value * 2;
  }
  if(this.value > 50 ){
    range.innerHTML = 100;
  }
  
}
</script>

</body>
</html>
