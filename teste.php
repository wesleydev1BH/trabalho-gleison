<!DOCTYPE html>
<html>
<head>
    <title>Quiz One Piece</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .question {
            margin-bottom: 10px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 5px;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz One Piece</h1>
        <form method="post" action="">
            <div class="question">
                <label>Qual é o nome do protagonista de One Piece?</label><br>
                <input type="text" name="answers[]" required>
            </div>
            <div class="question">
                <label>Qual é o nome do barco de Luffy?</label><br>
                <input type="text" name="answers[]" required>
            </div>
            <div class="question">
                <label>Quem é o criador de One Piece?</label><br>
                <input type="text" name="answers[]" required>
            </div>
            <div class="question">
                <label>Qual é o nome do médico da tripulação dos Chapéu de Palha?</label><br>
                <select name="answers[]" required>
                    <option value="">Selecione...</option>
                    <option value="Chopper">Chopper</option>
                    <option value="Sanji">Sanji</option>
                    <option value="Zoro">Zoro</option>
                    <option value="Nami">Nami</option>
                </select>
            </div>
            <div class="question">
                <label>Qual é a fruta do diabo que Luffy comeu?</label><br>
                <select name="answers[]" required>
                    <option value="">Selecione...</option>
                    <option value="Gomu gomu no mi">Gomu gomu no mi</option>
                    <option value="Ope ope no mi">Ope ope no mi</option>
                    <option value="Uga uga no mi">Uga uga no mi</option>
                    <option value="Borracha no mi">Borracha no mi</option>
                </select>
            </div>
            <div class="question">
                <label>Qual o nome do espadachin do bando de luffy?</label><br>
                <select name="answers[]" required>
                    <option value="">Selecione...</option>
                    <option value="Chopper">Chopper</option>
                    <option value="Sanji">Sanji</option>
                    <option value="Zoro">Zoro</option>
                    <option value="Nami">Nami</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $answers = $_POST['answers'];
            $correct_answers = array('Luffy', 'Going Merry', 'Eiichiro Oda', 'Chopper', 'Gomu gomu no mi', 'Zoro');
            $score = 0;

            for ($i = 0; $i < count($answers); $i++) {
                if ($answers[$i] == $correct_answers[$i]) {
                    $score++;
                }
            }

            echo "<div class='result'>Sua pontuação: $score / " . count($correct_answers) . "</div>";
        }
        ?>
    </div>
</body>
</html>
