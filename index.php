<!DOCTYPE html>
<html>
  <head>
  <title>Questionário</title>
  <style>
      body {
          width: 35em;
          margin: 0 auto;
          font-family: Tahoma, Verdana, Arial, sans-serif;
      }
  </style>
  </head>
    <?php
    $sucess = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $q1 = strtolower($_POST['q1']);
      $q2 = strtolower($_POST['q2']);
      $q3 = strtolower($_POST['q3']);

      if (($q1 == 'mídia' or $q1 == 'midia') and ($q2 == 'marola') and (($q3 == '1980' or $q3 == '80'))){
        $sucess = true;
      }else{
        echo "<center><h1>Você reprovou no teste.</h1></center>";
      }
    }
    if (!$sucess){
    echo '
    <body style="background-color:#ededed;">
      <center>
      <h1>Questionário MC Poze</h1>
      <br>
      <img src="https://i.ytimg.com/vi/WZIGwN-5Ioo/maxresdefault.jpg" style="width:200px;height:100px;">
      <h4>Complete a frase: "No baile nós é..."</h4>
      <form method="post" action="">
      <input type="integer" name="q1" id="q1" value="">
      <br>
      <h4>Complete a frase: "No baile os menó..."</h4>
      <input type="integer" name="q2" id="q2" value="">
      <br>
      <h4>Qual o ano de MC Poze?</h4>
      <input type="integer" name="q3" id="q3" value="">
      <br>
      <br>
      <input type="submit" value="Submit"></center>
    </form>
    ';
  }else {
      echo '<body style="background-color:#ededed;">';
      echo "<center><h1> Parabéns, você passou no teste!</h1></center>";
     echo '
  <center><iframe width="640" height="360" src="https://www.youtube.com/embed/WZIGwN-5Ioo?autoplay=1" frameborder="1" allow="accelerometer; autoplay; encrypted-media;"></iframe>
  </center>';
  echo "<center><h1>No Baile Nós É Mídia</h1><h2>MC Poze<h2><h5><p>No baile nóis é mídia<br>No baile os menor marola<br>Aperta o balão<br>Acende, puxa, prende e solta</p><p>Numa mão tá o copão<br>Com whisky e Red Bull<br>Na outra o lança perfume<br>Encomendei mais um</p><p>Com o tênis de mil<br>Joguei o boné pra traz<br>Não sei se hoje eu vou de Lacoste<br>Armani Oakley ou Calvin Klein</p><p>As pirinha me olhando piscando a buceta<br>Eu tranzudão, naquele pique, arrastei pra treta<br>Comi a bunda dela, taquei sem compromisso<br>Por onde o poze passa nunca é esquecido<br>Por onde o poze passa nunca é esquecido</p><p>Comi a xota dela, taquei sem compromisso<br>Por onde o poze passa nunca é esquecido<br>Por onde o poze passa nunca é esquecido</p><p>No baile nóis é mídia<br>No baile os menor marola<br>Aperta o balão<br>Acende, puxa, prende e solta</p><p>Numa mão tá o copão<br>Com whisky e Red Bull<br>Na outra o lança perfume<br>Encomendei mais um</p><p>Com o tênis de mil<br>Joguei o boné pra traz<br>Não sei se hoje eu vou de Lacoste<br>Armani Oakley ou Calvin Klein</p><p>As pirinha me olhando piscando a buceta<br>Eu tranzudão, naquele pique, arrastei pra treta<br>Comi a bunda dela, taquei sem compromisso<br>Por onde o poze passa nunca é esquecido<br>Por onde o poze passa nunca é esquecido</p><p>Comi a xota dela, taquei sem compromisso<br>Por onde o poze passa nunca é esquecido<br>Por onde o poze passa nunca é esquecido</p></h5></center>";
}
  ?>
  </body>
</html>
