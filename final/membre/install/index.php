<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>Installation Administrateur Enerbioflex Think Tank</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<form method="post" action="creer_config.php">
    	<br />
    	<table align="center" width="750">
        	<tr>
            	<td class="titre_form" align="center" colspan="2">Etape 1 => Création de la connexion mysql</td>
            </tr>
            <tr>
            	<td colspan="2" align="center">
                <br />
                Si vous avez les droits SQL requis, pensez &agrave; cr&eacute;er votre base de donn&eacute;es avant de commencer l'installation.<br />
              <br /></td>
            </tr>
            <tr>
            	<td class="titre_form" align="center" colspan="2">Remplir le formulaire</td>
            </tr>
            <tr>
            	<td align="right"><br />Nom du Site : </td>
                <td><br /><input type="text" name="Nom_Site" size="50" value="Enerbioflex Think Tank" required /></td>
            </tr>
            <tr>
            	<td align="right">Email du Site : </td>
                <td><input type="email" name="Email_Site"  size="50" placeholder="L'adresse qui enverra/recevra les mails du site" required /></td>
            </tr>
			<tr>
            	<td align="right">Mot de passe</td>
                <td><input type="password" name="Pass_Site" size="50" placeholder="Le mot de cette boite mail, PAS celui du site" required /></td>
            </tr>
            <tr>
            	<td align="right">Url de l'espace membre sans '/' a la fin : </td>
                <td><input type="text" name="Url_Site" placeholder="ex : http:www.mon.site.fr/membre" size="50" required /></td>
            </tr>
            <tr>
            	<td align="right">Url Serveur Mysql : </td>
                <td><input type="text" name="Url_Serveur" placeholder="ex : localhost" size="50" required /></td>
            </tr>
            <tr>
            	<td align="right">Login admin Mysql : </td>
                <td><input type="text" name="Admin" size="50" required /></td>
            </tr>
            <tr>
            	<td align="right">Pass Mysql : </td>
                <td><input type="text" name="Passe" size="50"/></td>
            </tr>
            <tr>
            	<td align="right">Nom de la base de données : </td>
                <td><input type="text" name="Base" size="50" placeholder="db6560..." required /></td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><br /><input type="submit" name="creer_base" value="Créer la page de connexion" class="input" /><br /><br /></td>
            </tr>
        </table>
    </form>

</body>
</html>