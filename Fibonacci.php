<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Sequência de Fibonacci</h2>
            <p>A sequência de Fibonacci é uma série de números onde cada número é a soma dos dois anteriores.</p>
            <p>Insira um número para gerar os primeiros n números na sequência de Fibonacci:</p>
            
            <form method="get">
                <label for="number">Número:</label>
                <input type="number" id="number" name="number" min="1" required>
                <button type="submit">Gerar Sequência</button>
            </form>
        </div>

        <?php
        function fibonacci_sequence($n) {
            $fib_sequence = []; 
            $a = 0; 
            $b = 1; 
            
            for ($i = 0; $i < $n; $i++) {
                $fib_sequence[] = $a; 
                $next = $a + $b;
                $a = $b; 
                $b = $next;
            }
            
            return $fib_sequence; 
        }

        if (isset($_GET["number"])) {

            $number = $_GET["number"];

            if (is_numeric($number) && $number > 0) {

                $result = fibonacci_sequence($number);

                echo '<div class="result-container">';
                echo "<h3>Os primeiros $number números na sequência de Fibonacci são:</h3>";
                echo "<p class='result'>" . implode(", ", $result) . "</p>";
                echo '</div>';
            } else {

                echo "<p class='result' style='color: red; text-align: center;'>Por favor, insira um número inteiro positivo válido.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
