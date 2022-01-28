<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/bills/store" method="post">
        @csrf
        <input type="text" name="client_id" placeholder="Cod Cliente">
        <input type="number" name="invoice" placeholder="Fatura">
    <input type="number" name="value" placeholder="Valor"><br>
    <input type="number" name="instalment" placeholder="Prestação">
    <input type="text" name="due_date" placeholder="Data Vencimento">
    <input type="text" name="payment_date" placeholder="Data Pagamento "><br>
    <button type="submit">Salvar Fatura</button>
</form>
</body>
</html>