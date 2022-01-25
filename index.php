<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <h1>Pour François Hollande, l’équation du passage à l’acte pas simple à résoudre</h1>
                <p>
                    Retrouvez l’article de notre journaliste Laurent Telo, qui revient sur cette sortie de François Hollande. Comme il l’écrit,
                    l’ancien chef d’Etat estime pour l’instant « qu’une candidature n’aurait aucun sens. Il n’aura, en tout cas,
                    pas la volonté d’accabler la candidate socialiste officielle, Anne Hidalgo, en difficulté dans les intentions de vote ».
                </p>
            </div>
        </body>
    </html>
';

$to = 'j.conan@fondationface.org, stefan.hanotiau@gmail.com';
$subject = 'Mon Article';
$headers = array(
    'Reply-To' => 'stefan.hanotiau@hotmail.com',
    'X-Mailer' => 'PHP/' . phpversion(),
    'Mime-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf-8',
);

if (mail($to, $subject, $html, $headers,"-f stefan.hanotiau@hotmail.com")) {
    echo "L'envoi du message est un succés !";
}
else {
    echo "Une erreure est survenue !";
}


