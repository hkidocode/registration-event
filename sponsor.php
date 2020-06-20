<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="exibitor.css">
    <title>Sponsor Informations</title>
</head>

<body>
    <div class="wrapper-form">
        <form role="form">
            <div class="col1">
                <div class="input-container">
                    <label for="s-full-name" class="title">Full Name :</label>
                    <input type="text" id="s-full-name" name="s-full-name">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="s-organization" class="title" required>Organization/Company :</label>
                    <input type="text" id="s-organization" name="s-organization">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="s-phone" class="title">Phone Number :</label>
                    <input type="tel" id="s-phone" name="s-phone">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="s-email" class="title">Email Address :</label>
                    <input type="text" id="s-email" name="s-email">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="s-postal-code" class="title">Postal Address :</label>
                    <input type="number" id="s-postal-code" name="s-postal-code">
                    <small id="error-message"></small>
                </div>
                <div class="input-container">
                    <label for="s-country" class="title">Country :</label>
                    <input type="text" id="s-country" name="s-country">
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
    <script src="sponsor.js"></script>
</body>

</html>