<?php
require_once "autoload.php";

if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['mail']) &&
    isset($_POST['objet']) &&
    isset($_POST['message'])
) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $obj = $_POST['objet'];
    $msg = $_POST['message'];

    $data = new Email();
    $data->setNom($nom);
    $data->setPrenom($prenom);
    $data->setMail($mail);
    $data->setObjet($obj);
    $data->setMessage($msg);
    $resultat = $data->sendMail();

    if($resultat) {
       $_SESSION['flash_contact'] = 'Mail envoyé';
    }else {
        $_SESSION['flash_contact'] = 'Une erreur est survenue , merci de recommencer plus tard';
    }

    $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Retour Contact</title>
    <style type="text/css">
        body {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            margin: 0 !important;
            width: 100% !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
        }

        .tableContent img {
            border: 0 !important;
            display: block !important;
            outline: none !important;
        }

        a {
            color: #382F2E;
        }

        p, h1 {
            color: #382F2E;
            margin: 0;
        }

        p {
            text-align: left;
            color: #999999;
            font-size: 14px;
            font-weight: normal;
            line-height: 19px;
        }

        a.link1 {
            color: #382F2E;
        }

        a.link2 {
            font-size: 16px;
            text-decoration: none;
            color: #ffffff;
        }

        h2 {
            text-align: left;
            color: #222222;
            font-size: 19px;
            font-weight: normal;
        }

        div, p, ul, h1 {
            margin: 0;
        }

        .bgBody {
            background: #ffffff;
        }

        .bgItem {
            background: #ffffff;
        }

        @media only screen and (max-width: 480px) {

            table[class="MainContainer"], td[class="cell"] {
                width: 100% !important;
                height: auto !important;
            }

            td[class="specbundle"] {
                width: 100% !important;
                float: left !important;
                font-size: 13px !important;
                line-height: 17px !important;
                display: block !important;
                padding-bottom: 15px !important;
            }

            td[class="spechide"] {
                display: none !important;
            }

            img[class="banner"] {
                width: 100% !important;
                height: auto !important;
            }

            td[class="left_pad"] {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

        }

        @media only screen and (max-width: 540px) {

            table[class="MainContainer"], td[class="cell"] {
                width: 100% !important;
                height: auto !important;
            }

            td[class="specbundle"] {
                width: 100% !important;
                float: left !important;
                font-size: 13px !important;
                line-height: 17px !important;
                display: block !important;
                padding-bottom: 15px !important;
            }

            td[class="spechide"] {
                display: none !important;
            }

            img[class="banner"] {
                width: 100% !important;
                height: auto !important;
            }

            .font {
                font-size: 18px !important;
                line-height: 22px !important;

            }

            .font1 {
                font-size: 18px !important;
                line-height: 22px !important;

            }
        }

    </style>

    <script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"382F2E",
    "color":"999999",
    "bgItem":"ffffff",
    "title":"222222"
}

    </script>

</head>
<body paddingwidth="0" paddingheight="0"
      style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;"
      offset="0" toppadding="0" leftpadding="0">
<table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center"
       style=\'font-family:Helvetica, Arial,serif;\'>
    <tbody>
    <tr>
        <td>
            <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff"
                   class="MainContainer">
                <tbody>
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td valign="top" width="40">&nbsp;</td>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <!-- =============================== Header ====================================== -->
                                        <tr>
                                            <td height=\'75\' class="spechide"></td>

                                            <!-- =============================== Body ====================================== -->
                                        </tr>
                                        <tr>
                                            <td class=\'movableContentContainer \' valign=\'top\'>
                                                <div class="movableContent"
                                                     style="border: 0px; padding-top: 0px; position: relative;">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td height="35"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <table width="100%" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td valign="top" class="specbundle">
                                                                            <div class="contentEditableContainer contentTextEditable">
                                                                                <div class="contentEditable">
                                                                                    <p style=\'text-align:center;margin:auto;font-family:Georgia,Time,sans-serif;font-size:26px;color:#1A54BA;\'>
                                                                                        <img src="http://www.yuna-creation.fr/bonbon/media/logo.png" width=\'251\'
                                                                                             height=\'143\' alt=\'\'
                                                                                             data-default="placeholder"
                                                                                             data-max-width="560"
                                                                                        style="margin: auto;">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="movableContent"
                                                     style="border: 0px; padding-top: 0px; position: relative;">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                           align="center">
                                                        <tr>
                                                            <td height=\'55\'></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\'left\'>
                                                                <div class="contentEditableContainer contentTextEditable">
                                                                    <div class="contentEditable" align=\'center\'>
                                                                        <h2>Réception d\'email - Contact </h2>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td height=\'15\'></td>
                                                        </tr>

                                                        <tr>
                                                            <td align=\'left\'>
                                                                <div class="contentEditableContainer contentTextEditable">
                                                                    <div class="contentEditable" align=\'center\'>
                                                                        <p>
                                                                            Bonjour '.$prenom.', ceci est une réponse automatique qui confirme
                                                                            la récéption de votre email. Nous reviendrons vers vous très rapidement.
                                                                            <br>
                                                                            Merci de ne pas repondre à ce mail.
                                                                            <br>
                                                                            <br>
                                                                            <span style=\'color:#222222;\'>Yuna création</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td height=\'55\'></td>
                                                        </tr>

                                                        <tr>
                                                            <td align=\'center\'>
                                                                <table>
                                                                    <tr>
                                                                        <td align=\'center\' bgcolor=\'#1A54BA\'
                                                                            style=\'background:#1A54BA; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;\'>
                                                                            <div class="contentEditableContainer contentTextEditable">
                                                                                <div class="contentEditable"
                                                                                     align=\'center\'>
                                                                                    <a target=\'_blank\' href=\'http://www.yuna-creation.fr/bonbon/\'
                                                                                       class=\'link2\'
                                                                                       style=\'color:#ffffff;\'>Accèder au Blog</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height=\'20\'></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="movableContent"
                                                     style="border: 0px; padding-top: 0px; position: relative;">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td height=\'65\'>
                                                        </tr>
                                                        <tr>
                                                            <td style=\'border-bottom:1px solid #DDDDDD;\'></td>
                                                        </tr>
                                                        <tr>
                                                            <td height=\'25\'></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <table width="100%" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td valign="top" class="specbundle">
                                                                            <div class="contentEditableContainer contentTextEditable">
                                                                                <div class="contentEditable"
                                                                                     align=\'center\'>
                                                                                    <p style=\'text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;\'>
                                                                                        <span style=\'font-weight:bold;\'>Yuna Création</span>
                                                                                        <br>
                                                                                        <br>
                                                                                        <a target="_blank" class=\'link1\'
                                                                                           class=\'color:#382F2E;\'
                                                                                           href="#">Désinscription au newsletter</a>
                                                                                        <br>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td valign="top" width="30" class="specbundle">
                                                                            &nbsp;</td>

                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height=\'88\'></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>

                                                <!-- =============================== footer ====================================== -->

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td valign="top" width="40">&nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
';
    $headers = "From: \"Yuna creation\"<contact@yuna-creation.fr.3>\n";
    $headers .= "Reply-To: contact@yuna-creation.fr\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

    var_dump(mail($mail,$obj,$message,$headers));
    header('location:/bonbon/Contact');
    die();
}