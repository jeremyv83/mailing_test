<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailing - Jérémy Vivié</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="max-width: 900px; font-family: Arial, sans-serif;margin:0 auto;padding: 0;">

    <form class="d-flex justify-content-center align-items-end" action="./mailer/mailer.php" method="post">
        <div class="form-group m-0 mr-5">
            <label for="exampleFormControlInput1">Adresse mail du destinataire</label>
            <input type="email" name="email" class="form-control pr-5" id="exampleFormControlInput1" placeholder="nom@exemple.com" required>
        </div>
        <button type="submit" name="envoyer" value="envoyer" class="btn btn-primary">Envoyer</button>
    </form>

    <div class="m-5 text-center">
        <p>Contenue du mail : </p>
    </div>
    <div style="background-color: #fff;">          
        <div style="position: relative;
        height: 300px;
        background-image: url('https://media.istockphoto.com/id/2163760886/fr/photo/section-m%C3%A9diane-dun-m%C3%A9decin-administrant-une-injection-au-patient.jpg?s=1024x1024&w=is&k=20&c=vGZFsW79ODoVGbr1YUYhe3vzwmfAAfV-PNTGKPy2jAM='); 
        background-size: cover;
        background-position: center;
        display:flex;
        align-items:center;">
            <div style="background-color: #df9586;
            color: white;
            padding: 10px 20px;
            border-radius: 0 20px 20px 0;
            font-size: 35px;
            font-weight: bold;
            box-shadow: 4px 0px 0px 4px rgba(227, 138, 124, 0.5);">| Vaccin' & Vous</div>
            <div style="position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #df9586;
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            text-align: center;">Population adolescente : comment les protéger ?</div>
        </div>
        <div style="display:flex; justify-content:center;margin-top:25px;">
            <a href="#" target="_blank" style="padding: 10px;
            background-color: #df9586;
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-weight: bold;">J'ACCÈDE À L'ESPACE VACCIN' & VOUS</a>
        </div>
        

        <div style="margin: 25px auto;color:#586975;max-width: 70%;">
            <p style="line-height: normal;margin-bottom: 20px;">Ce mois-ci, Vaccin' & Vous est de retour avec un dossier sur la vaccination d'une population qui ne
                bénéficie pas toujours du suivi qu'elle nécessite : <a href="#" target="_blank" style="color:#586975;text-decoration:underline; font-weight: bold;">les adolescents.</a> Pourtant, l'adolescence est encore
                le temps du rattrapage d'une primovaccination incomplète, des rappels nécessaires mais aussi celui d'une
                exposition à de nouveaux risques.</p>

            <p style="line-height: normal;margin-bottom: 20px;"><a href="#" target="_blank" style="color:#586975;text-decoration:underline; font-weight: bold;">Ce dossier revient sur ces sujets et vous propose un tableau de synthèse pour vous accompagner dans votre
                pratique.</a></p>

            <p style="line-height: normal;margin-bottom: 20px;"><a href="#" target="_blank" style="color:#586975;text-decoration:underline;font-weight: bold;">Sérotypes</a> et <a href="#" target="_blank" style="color:#586975;text-decoration:underline; font-weight: bold;">vaccins conjugués</a> : que se cache-t-il réellement derrière ces termes
                communément utilisés mais faisant appel à des notions parfois complexes ? Comment les définit-on ? Sur
                quelles techniques reposent-ils ? Quelles en sont les implications dans votre pratique ?</p>

            <p style="margin-bottom: 20px;"><a href="#" target="_blank" style="color:#586975;text-decoration:underline; font-weight: bold;">Retrouvez les réponses à vos questions dans les articles de synthèse du mois.</a></p>
        </div>
        <div style="width: 60%;margin:auto; margin-top: 30px;">
            <div style="background-color: #586975;padding: 10px;text-align: center;">
                <p style="font-size: 14px;color: #fff;margin: 10px;">
                    Pour retrouver les contenus de l’espace édition 2021, <br> rendez-vous dans la rubrique <a href="#" target="_blank" style="color:#fff;text-decoration:underline; font-weight: bold;">Archives</a>
                </p>
                <a href="#" style="display: inline-block;
                padding: 10px 20px;
                background-color: #fff;
                color: #586975;
                text-decoration: none;
                text-align: center;">
                    J'ACCÈDE À L'ESPACE <strong>VACCIN' & VOUS</strong>
                </a>
                <p style="font-size: 14px;color: #fff;margin: 10px;">Bonne lecture sur <strong>Vaccin' & Vous !</strong></p>
            </div>
        </div>
        <div style="display:flex;justify-content: center;align-items: center;margin-top:20px">
            <p style="margin: 15px;color: #9f9f9f;">Avec le soutien institutionnel de</p>
            <img src="https://helix-core-components.digitalpfizer.com/static/logo/pfizer-logo-color.svg"
            alt="Pfizer logo" style="width: 100px;">
        </div>

        <div style="background-color:#df9586; height: 4px; margin-bottom: 30px;"></div>

        <div style="text-align: center;font-size: 12px;color: #9f9f9f;">
            <p>Vous recevez cet e-mail car vous avez accepté de recevoir des messages d'<a href="#" target="_blank">egora.fr</a>.<br>
                Le site <a href="http://www.egora.fr target="_blank">www.egora.fr</a> est édité par la société Global Média Santé.<br>
                SAS au capital de 4 289 852 € | RCS Nanterre B422 422 063<br>
                Tour Voltaire – 1, Place des Degrés CS 80325 Puteaux | 92059 Paris La Défense Cedex
            </p>
        </div>
    </div>
</body>
</html>