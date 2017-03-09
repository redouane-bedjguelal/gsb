<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Saisie d'un employé</title>
    </head>
    <body>
        <div>
            {!! Form::open(['url' => 'postEmploye']) !!}
            <p>
                <input type="radio" name="civil" value="Mme"/> Madame
                <input type="radio" name="civil" value="Mlle"/> Mademoiselle
                <input type="radio" name="civil" value="Mr"/> Monsieur
            </p>
            <p>
                Votre prénom :<br/>
                <input type="text" name="prenom" value="">
            </p>
            <p>
                Votre nom :<br/>
                <input type="text" name="nom" value="">
            </p>
            <p>
                Votre mot de passe :<br/>
                <input type="text" name="password" value="">
            </p>
            <p>
                <select name="profil">
                    <option value="parti">Un particulier</option>
                    <option value="pro" selected="selected">Un professionnel</option>
                    <option value="insti">Un institutionnel</option>
                </select>
            </p>
            <p>
                Quel type de prestation recherchez-vous ?<br/>
                <input type="checkbox" name="interet" value="loc">Location de mobilier
                <input type="checkbox" name="interet" value="achat">Achet de mobilier
            </p>
            <p>
                Votre message :<br/>
                <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message</textarea>
            </p>
            <p>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Annuler">
            </p>
            {!! Form::close() !!}
        </div>
    </body>
</html>