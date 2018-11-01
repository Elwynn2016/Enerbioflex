<?php
include('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>Installation Espace Membres</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post" action="creer_admin.php" id="form">
    	<br />
    	<table align="center" width="450">
        	<tr>
            	<td class="titre_form" align="center">Etape 2 => Installation des Tables Mysql</td>
            </tr>
            <tr>
            	<td align="center">
                <br />
                <?php
				// if(!empty($er) and isset($er)) {
					// foreach($er as $a=>$b){ 
						// echo "- ".$b."<br />"; 
					// }
				// }
				// if(!empty($ok) and isset($ok)) {
					// foreach($ok as $c=>$d){ 
						// echo "- ".$d."<br />"; 
					// }
				// }
				?>
                <br /><br /></td>
            </tr>
            <tr>
            	<td align="center"><br />
                <?php
				if(empty($er)) {
					echo '<input type="submit" name="submit" value="Passer &agrave; l\'&eacute;tape suivante" class="input" />';
				}
				?>
                <br /><br /></td>
            </tr>
        </table>
    </form>
</body>
</html>