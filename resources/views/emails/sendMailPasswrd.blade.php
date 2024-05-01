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
    <title>Nouveau compte utilisateur</title>
</head>
<body class="p-4">
    <p>Bonjour {{ $prenom }} {{ $nom }},</p>
    <p>Votre compte utilisateur a été créé avec succès.</p>
    <p>Voici vos informations de connexion :</p>
    <ul>
        <li><strong>Nom :</strong> {{ $nom }}</li>
        <li><strong>Prénom :</strong> {{ $prenom }}</li>
        <li><strong>E-mail :</strong> {{ $email }}</li>
        <li><strong>Mot de passe :</strong> {{ $password }}</li>
    </ul>
    <p>Nous vous recommandons de changer votre mot de passe après vous être connecté.</p>
    <p class="text-center"><a href="http://localhost:8000/login" class="btn btn-primary fw-bolder">Connecter-vous</a></p>
    <p>Cordialement,</p>
    <p>Votre équipe de support</p>
</body>
</html>
