<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<canvas id="arcCanvas" width="1000" height="1000"></canvas>
  <script>
    var a = parseInt(<?php echo json_encode($_GET['a']); ?>) 
    var b = parseInt(<?php echo json_encode($_GET['b']); ?>);
    var c = parseInt(<?php echo json_encode($_GET['c']); ?>);
    console.log(a,b,c);
    var canvas = document.getElementById("arcCanvas")
    var ctx = canvas.getContext("2d");

    // Define o intervalo de x que deseja plotar
    var xMin = -5;
    var xMax = 5;

    // Define o incremento de x
    var dx = 0.1;

    // Define as variáveis para armazenar os pontos x e y
    var x, y;

    // Define a cor e a largura da linha do gráfico
    ctx.strokeStyle = "black";
    ctx.lineWidth = 2;

    criarPlanoCartesiano();
    gerarEquacao();


    function gerarEquacao() {
      ctx.strokeStyle = "red";
      ctx.beginPath();
      for (x = xMin; x <= xMax; x += dx) {
        y = a * x * x + b * x + c;
        ctx.lineTo(canvas.width / 2 + x * 50, canvas.height / 2 - y * 50);
      }
      ctx.stroke();
    }

    function criarPlanoCartesiano() {
      // Desenha o eixo x
      ctx.beginPath();
      ctx.moveTo(0, canvas.height / 2);
      ctx.lineTo(canvas.width, canvas.height / 2);
      let textXValue = -50
      for (let index = 0; index <= canvas.width; index += 98) {
          ctx.fillText(textXValue, index , canvas.height/2 - 10);
        
        textXValue += 10
        
      }
      
      ctx.stroke();

      // Desenha o eixo y
      ctx.beginPath();
      ctx.moveTo(canvas.width / 2, 0);
      ctx.lineTo(canvas.width / 2, canvas.height);
      let textYValue = 50
      for (let index = 0; index <= canvas.height; index += 98) {
        if(textYValue != 0){
          ctx.fillText(textYValue,canvas.width/2 + 10, index + 10);
        }
        textYValue -= 10
        
      }
      ctx.stroke();
    }
  </script>
</body>
</html>