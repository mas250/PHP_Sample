<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="sliders.css">
</head>
<body>


<?php $step = 10 ?>
<div class="slidecontainer">
  <input type="range"  min="0" max="210" value="10" class="slider" id="myRange" step="10">
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
  if(this.value == 0){ 
    range.innerHTML = 250;
  }
  
  if(this.value > 1 && this.value < 75){ 
    range.innerHTML = this.value * 10 +250;
  }
  if(this.value == 70){ 
    range.innerHTML = 1000;
  }

  if(this.value > 70){ 
    range.innerHTML = this.value * 100 +250;
  }
  
  if(this.value == 70){ 
    range.innerHTML = 1000;
  }
  if(this.value == 80){ 
    range.innerHTML = 2000;
  }
  if(this.value == 90){ 
    range.innerHTML = 3000;
  }
  if(this.value == 100){ 
    range.innerHTML = 4000;
  }
  if(this.value == 110){ 
    range.innerHTML = 5000;
  }
  if(this.value == 120){ 
    range.innerHTML = 6000;
  }
  if(this.value == 130){ 
    range.innerHTML = 7000;
  }
  if(this.value == 140){ 
    range.innerHTML = 8000;
  }
  if(this.value == 150){ 
    range.innerHTML = 9000;
  }
  if(this.value == 160){ 
    range.innerHTML = 10000;
  }
  if(this.value == 170){ 
    range.innerHTML = 11000;
  }
  if(this.value == 180){ 
    range.innerHTML = 12000;
  }
  if(this.value == 190){ 
    range.innerHTML = 13000;
  }
  if(this.value == 200){ 
    range.innerHTML = 14000;
  }
  if(this.value == 200){ 
    range.innerHTML = 14000;
  }
  if(this.value == 210){ 
    range.innerHTML = 15000;
  }
  
}
</script>

</body>
</html>
