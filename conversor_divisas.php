
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de divisas</title>
    <link rel='stylesheet' href='https://necolas.github.io/normalize.css/8.0.1/normalize.css'>
</head>
<body>
     <h1>
       Mi conversor
       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calculator" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="4" y="3" width="16" height="18" rx="2" />
        <rect x="8" y="7" width="8" height="3" rx="1" />
        <line x1="8" y1="14" x2="8" y2="14.01" />
        <line x1="12" y1="14" x2="12" y2="14.01" />
        <line x1="16" y1="14" x2="16" y2="14.01" />
        <line x1="8" y1="17" x2="8" y2="17.01" />
        <line x1="12" y1="17" x2="12" y2="17.01" />
        <line x1="16" y1="17" x2="16" y2="17.01" />
       </svg>
      </h1>
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST'>
        <input type="text" name="value" id="">
        <select name="currency1" id="currency1">
          <option value="dolar">Dólar Estadounidense</option>
          <option value="euro">Euro</option>
          <option value="yen">Yen Japonés</option>
          <option value="libra">Libra Esterlina</option>
        </select>
        <svg id = 'switch'xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-down-up" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="17" y1="3" x2="17" y2="21" />
          <path d="M10 18l-3 3l-3 -3" />
          <line x1="7" y1="21" x2="7" y2="3" />
          <path d="M20 6l-3 -3l-3 3" />
        </svg>
        <select name="currency2" id="currency2">
          <option value="dolar">Dólar Estadounidense</option>
          <option value="euro" selected>Euro</option>
          <option value="yen">Yen Japonés</option>
          <option value="libra">Libra Esterlina</option>
        </select>
        <button type="submit" name='submit'>Calcular</button>
      </form>
      <div id="output">
        <?php
          if(isset($_POST['submit'])){
            $value = $_POST['value'];
            $currency1 = $_POST['currency1'];
            $currency2 = $_POST['currency2'];
          switch ($currency1) {
            case 'dolar':
                echo '<p> $'.$value.' USD</p>';
                echo '<p> = </p>';
                if($currency2=='euro'){
                  $value = $value*0.88;
                  echo '<p> €'.$value.' EUR</p>';
                }elseif ($currency2=='dolar') {
                  break;
                }elseif ($currency2=='yen') {
                  $value = $value*115.43;
                  echo '<p> ¥'.$value.' JPY</p>';
                }else{
                  $value = $value*0.73;
                  echo '<p> £'.$value.' GBP</p>';
                }
              break;
            case 'euro':
                echo '<p> €'.$value.' EUR</p>';
                echo '<p> = </p>';
                if($currency2 == 'dolar'){
                  $value = $value*1.14;
                  echo '<p> $'.$value.' USD</p>';
                }elseif ($currency2=='yen') {
                  $value = $value*130.60;
                  echo '<p> ¥'.$value.' JPY</p>';
                }else{
                  $value = $value*0.83;
                  echo '<p> £'.$value.' GBP</p>';
                }
              break;
            case 'yen':
              echo '<p> ¥'.$value.' JPY</p>';
              echo '<p> = </p>';
              if($currency2 == 'dolar'){
                $value = $value*0.0087;
                echo '<p> $'.$value.' USD</p>';
              }elseif ($currency2=='euro'){
                $value = $value*0.0076;
                echo '<p> €'.$value.' EUR</p>';
              }else{
                $value = $value*0.0064;
                echo '<p> £'.$value.' GBP</p>';
              }
              break;
            case 'libra':
              if($currency2 == 'dolar'){
                $value = $value*1.36;
                echo '<p> $'.$value.' USD</p>';
              }elseif ($currency2=='euro'){
                $value = $value*1.20;
                echo '<p> €'.$value.' EUR</p>';
              }else{
                $value = $value*156.68;
                echo '<p> ¥'.$value.' JPY</p>';
              }
              break;
          }
          }
        ?>
      </div>
      
      <script>
        const svg = document.querySelector('#switch')
        const currency1 = document.querySelector('#currency1')
        const currency2 = document.querySelector('#currency2')
        svg.onclick = wakanda;
        function wakanda(){
          var memoria = currency1.selectedIndex
          currency1.selectedIndex = currency2.selectedIndex;
          currency2.selectedIndex = memoria;
        }
      </script>
</body>
</html>