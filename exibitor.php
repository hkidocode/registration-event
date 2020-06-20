<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="exibitor.css">
    <title>Exibitor Informations</title>
</head>

<body>
    <div class="wrapper-form">
        <form role="form">
            <div class="col1">
                <div class="input-container">
                    <label for="e-full-name" class="title">Full Name :</label>
                    <input type="text" id="e-full-name" name="e-full-name">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="e-organization" class="title">Organization/Company :</label>
                    <input type="text" id="e-organization" name="e-organization">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="e-phone" class="title">Phone Number :</label>
                    <input type="tel" id="e-phone" name="e-phone">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="e-email" class="title">Email Address :</label>
                    <input type="text" id="e-email" name="e-email">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="e-postal-code" class="title">Postal Address :</label>
                    <input type="number" id="e-postal-code" name="e-postal-code">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="e-country" class="title">Country :</label>
                    <input type="text" id="e-country" name="e-country">
                    <small id="error-message"></small>
                </div>
            </div>
            <label class="title">Method of payment :</label><br>
            <div class="col2" id="col2">
                <div class="credit-card">
                    <input type="radio" id="card-radio" value="card-radio" name="payment-method"><label for="card-radio">Card
                        Payment</label>
                </div>
                <div class="bank-transfer">
                    <input type="radio" id="transfer-radio" value="transfer-radio" name="payment-method"><label for="transfer-radio">Bank
                        Transfer</label>
                </div>
            </div>
            <button id="submit" class="submit" type="submit">NEXT</button>
        </form>
    </div>
    <script src="exibitor.js"></script>
</body>

</html>