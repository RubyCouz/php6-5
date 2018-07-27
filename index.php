<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>

    <?php
    if (isset($_GET['week'])) // si on a le paramêtre, test de la variable week
    {
echo $_GET['week'];
} else //manque de paramêtre
{
  echo 'manque de renseignement';
}
     ?>
   </p>
  </body>
</html>
