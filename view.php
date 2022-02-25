<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Medidas</title>
</head>
<body>
    <h2>Conversor de medidas</h2>

    <div>
        <form action="model.php" action="POST">
        <label for="valor">Insira o número a ser convertido:</label><br>
        <input type="number" name="valor" step="any" required><br><br>
        <select name="opcao">
            <option value="centimetro">Centimetro para Milimetro</option>
            <option value="metro"> Metro para Centimetro</option>
            <option value="km">Quilometro para Metro</option>
        </select>
        <br><br>
        <button>
            Converter
        </button>
        </form>
    </div>
    
</body>
</html>