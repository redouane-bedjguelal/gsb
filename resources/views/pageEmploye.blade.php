<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les employes</title>
    </head>
    <body>
        <h1>Affichage de l'employé</h1>
        <ul>
            <li>{{ $unEmp->getCivilite() }}</li>
            <li>{{ $unEmp->getNom() }}</li>
            <li>{{ $unEmp->getPrenom() }}</li>
            <li>{{ $unEmp->getPwd() }}</li>
            <li>{{ $unEmp->getInteret() }}</li>
            <li>{{ $unEmp->getProfil() }}</li>
            <li>{{ $unEmp->getMessage() }}</li>
        </ul>
        <br/>
    <li><h2><a href="{{url('/')}}">Retour</a></h2></li>
    </body>
</html>
