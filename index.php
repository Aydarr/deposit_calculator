<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="scripts\jquery-3.5.1.min.js"></script>
    <script src="scripts\jquery.mask.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="pre-header">
        <img src="pics\logo.png" id="logo">
        <div id="numbers">
            <p>8-800-100-5005</p>
            <p>+7 (3452) 522-000</p>
        </div>
    </div>
    <div id="header">
        <div class="header-nav">Кредитные карты</div>
        <div class="header-nav checked">Вклады</div>
        <div class="header-nav">Дебетовая карта</div>
        <div class="header-nav">Страхование</div>
        <div class="header-nav">Друзья</div>
        <div class="header-nav">Интернет-банк</div>
    </div>
    <div id="content">
        <div class="bread-crumbs">
            <span class="underline">Главная</span> - <span class="underline">Вклады</span> - Калькулятор
        </div>
        <div class="calculator">
            <p class="calc_title">Калькулятор</p>
            <form class="calc-form" action="calc.php" method="post">
                <table>
                    <tr>
                        <td class="left_side"><span class="input_title">Дата оформления вклада</span>
                        <td class="right_side"><span><input type="date" name="date_input"></span>
                    </tr
                    <tr>
                        <td class="left_side"><span class="input_title ">Сумма вклада</span>
                        <td class="right_side"><span><input type="text" class="inputs sum_input" name="sum_deposit"></span>
                    </tr>
                    <tr>
                        <td class="left_side"><span class="input_title">Срок вклада</span>
                        <td class="right_side">
                    <span>
                        <select name="term_deposit">
                            <option value="1">1 год</option>
                            <option value="2">2 года</option>
                            <option value="3">3 года</option>
                            <option value="4">4 года</option>
                            <option value="5">5 лет</option>
                        </select>
                    </span>
                    </tr>
                    <tr>
                        <td class="left_side"><span class="input_title">Пополнение вклада</span>
                        <td class="right_side">
                            <span class="radio"><input type="radio" checked name="rep_deposit" value="0">Нет </span>
                            <span class="radio"><input type="radio" name="rep_deposit" value="1">Да</span>
                    </tr>
                    <tr>
                        <td class="left_side"><span class="input_title">Сумма пополнения вклада</span>
                        <td class="right_side"><span><input type="text" class="inputs sum_input" name="sum_rep_deposit" disabled></span>
                    </tr>
                    <tr>
                        <td><button type="submit">Рассчитать</button>
                            <span class="result_title">Результат:</span>
                        <td><span class="result_sum"></span>
                    </tr>
                </table>
            </form>
        </div>

    </div>
    <footer id="foot">
        <div class="footer-nav">Кредитные карты</div>
        <div class="footer-nav">Вклады</div>
        <div class="footer-nav">Дебетовая карта</div>
        <div class="footer-nav">Страхование</div>
        <div class="footer-nav">Друзья</div>
        <div class="footer-nav">Интернет-банк</div>
    </footer>
    <script src="scripts\script.js"></script>
    <script src="scripts\jquery-slider-min.js"></script>
</body>
</html>