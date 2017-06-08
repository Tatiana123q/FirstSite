  <!DOCTYPE html>
<html>
    <head>
        <title>Библиотека</title>
        <?php require_once "head.php";
        ?>
         
        
    </head>
  

    <body>
  
      <center><canvas id="myCanvas" width="750" height="50" style="border:1px solid #ff0000;"> 
Your browser does not support the HTML5 canvas tag. 
</canvas></center> 
<script> 
var canvas = document.getElementById('myCanvas'); 
var ctx = canvas.getContext("2d"); 
ctx.fillStyle = "#00F"; 
ctx.strokeStyle = "#F00"; 
ctx.font = "italic 30pt Arial"; 
///////ctx.fillText("Fill text", 20, 50); 
ctx.font = 'bold 27px sans-serif'; 
ctx.strokeText("Проживання з тваринами категорично заборонене !!!", 10, 30); 
ctx.moveTo(110, 5);
ctx.lineTo(110, 375);
</script>
    
       
  </body>
</html>
