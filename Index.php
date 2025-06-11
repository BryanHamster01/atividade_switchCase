<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Dia da Semana</title>
<style>
  body {
    margin: 0;
    height: 100vh;
    background: #0d1b2a;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #222;
  }
  .box {
    background: #f7f7f7;
    padding: 25px 20px;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    width: 280px;
    text-align: center;
  }
  label {
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
    color: #222;
  }
  input[type=number] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 12px;
    box-sizing: border-box;
  }
  input[type=number]:focus {
    outline: none;
    border-color: #5a87d9;
    box-shadow: 0 0 6px #5a87d9;
  }
  button {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    border-radius: 15px;
    border: none;
    background: #5a87d9;
    color: white;
    font-weight: bold;
    cursor: pointer;
  }
  button:hover {
    background: #4171c9;
  }
  .resultado {
    margin-top: 20px;
    font-weight: bold;
    font-size: 1.2rem;
    color: #4171c9;
  }
  .erro {
    color: #d9534f;
  }
</style>
</head>
<body>
  <div class="box">
    <form method="POST">
      <label for="numero">Digite um número (1 a 7):</label>
      <input type="number" id="numero" name="numero" min="1" max="7" required />
      <button type="submit">Ver o dia</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num = intval($_POST['numero']);
        $dias = [1=>"Domingo", 2=>"Segunda-feira", 3=>"Terça-feira", 4=>"Quarta-feira", 5=>"Quinta-feira", 6=>"Sexta-feira", 7=>"Sábado"];
        if (isset($dias[$num])) {
            echo "<p class='resultado'>{$dias[$num]}</p>";
        } else {
            echo "<p class='resultado erro'>Número inválido. Digite de 1 a 7.</p>";
        }
    }
    ?>
  </div>
</body>
</html>