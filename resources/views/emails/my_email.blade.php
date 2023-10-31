<!DOCTYPE html>
<html>
<head>
    <title>Porachunki-formularz kontaktowy</title>
</head>
<body>
    <p>Imie i nazwisko: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Treść wiadomości:</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>