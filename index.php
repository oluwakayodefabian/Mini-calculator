<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculator</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>Mini Calculator</h1>
    <div class="form-container">
        <div>
            <form action="./Calculator.php" method="post">
                <input type="number" name="first_num" placeholder="First_num">
                <select name="operator1" id="">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
                <input type="number" name="second_num" placeholder="second_num">
                <select name="operator2" id="">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
                <input type="number" name="third_num" placeholder="third_num"> 
                <input type="submit" value="calculate" class='btn'>
            </form>
        </div>
    </div>
</body>
</html>