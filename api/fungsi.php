<!DOCTYPE html>
<html>
<head>
  <title> pengenalan fungsi </title>
  <style type="text/css">
    .container{
      width: 800px;
      height: 1000px;
      border: 1px solid #ccc;
    }
  	.box{
  	  width: 100px;
  	  height: 100px;
  	  border: 2px dotted #000;
  	  float: left;
  	  margin-right: 15px;
  	  margin-bottom: 15px;
  	}
  </style>
</head>
<body>
  <?php 
    
    function BuildBox($row)
    {
      for ($i=0; $i < $row; $i++) { 
      	echo "<div class=box>
              </div>";	
      }	
    }

    BuildBox(12);
    
  ?>	

 
  
</body>
</html>