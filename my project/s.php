<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.products
{
width:30%;
height:40%;

 filter: blur(.5px);
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

border-radius:25px;
}


.product-item .down-content {
	padding: 5px;
	position: relative;
}


 .product-item .down-content h4 {
	font-size: 20px;
	color: #1a6692;
	
}

.product-item .down-content h6 {
	font-size: 20px;
	
	color: #1a6692;
}

.product-item .down-content h6 small{
	color: #1a6692;
}

</style>
</head>
<body>
<center><h1>OFFERS</h1>
</center>
<div class="row">
   <div class="column" style="background-color:">
    <img src="chj25.jpg"><h2>Lorem ipsum dolor sit amet</h2>
    <p><small>from</small> $99 <small>per weekend</small>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>
  </div>

    <div class="column" style="background-color:">
    <img src="cha.jpg"><h2>Lorem ipsum dolor sit amet</h2>
    <p><small>from</small> $99 <small>per weekend</small>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>
  </div>

  <div class="column" style="background-color:">
    <img src="chj1.5.jpg"><h2>Lorem ipsum dolor sit amet</h2>
    <p><small>from</small> $99 <small>per weekend</small>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>
  </div>
</div>
<br><br><br>

<div class="row">
   <div class="column" style="background-color:">
    <img src="chj.jpg"><h2>Lorem ipsum dolor sit amet</h2>
    <p><small>from</small> $99 <small>per weekend</small>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>
  </div>

    <div class="column" style="background-color:">
    <img src="ch37.jpg"><h2>Lorem ipsum dolor sit amet</h2>
    <p><small>from</small> $99 <small>per weekend</small>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>
  </div>

  <div class="column" style="background-color:">
    <img src="chp.jpg"><h2>Lorem ipsum dolor sit amet</h2>
    <p><small>from</small> $99 <small>per weekend</small>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>
  </div>
</div>

</body>
</html>
