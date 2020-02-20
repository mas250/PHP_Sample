<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<?php $step = 10 ?>
<div class="slidecontainer">
  <input type="range"  min="0" max="120" value="60" class="slider" id="myRange" step="10">
  
  <span id="range">
  <p>Value: <span id="demo"></span></p>
  
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var range = document.getElementById("range");

output.innerHTML = slider.value;
range.innerHTML = 20000;

slider.oninput = function() {
  output.innerHTML = this.value;
  if(this.value == 0){ 
    range.innerHTML = 6000;
  }
  
  if(this.value > 1 && this.value < 75){ 
    range.innerHTML = this.value * 100 + 6000;
  }
  if(this.value == 40){ 
    range.innerHTML = 10000;
  }

  if(this.value == 50){ 
    range.innerHTML = 15000;
  }
  if(this.value == 60){ 
    range.innerHTML = 20000;
  }
  if(this.value == 70){ 
    range.innerHTML = 25000;
  }
  if(this.value == 80){ 
    range.innerHTML = 30000;
  }
  if(this.value == 90){ 
    range.innerHTML = 35000;
  }
  if(this.value == 100){ 
    range.innerHTML = 40000;
  }
  if(this.value == 110){ 
    range.innerHTML = 45000;
  }
  if(this.value == 120){ 
    range.innerHTML = 50000;
  }
  
  
  
}
</script>

</body>
</html>
