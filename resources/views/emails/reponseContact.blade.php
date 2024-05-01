<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body
        {
            background-color: white !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse à un message</title>
</head>
<body class="p-4">
    <p>Bonjour {{ $prenom }} {{ $nom }},</p>
    {{-- <p>Suite à votre demande au sujet de {{ $sujetUser }} : {{ $message->getBody() }}</p> --}}

    <p>Cordialement,</p>
    <p>Votre équipe de support E-SHOP</p>
</body>
</html>
