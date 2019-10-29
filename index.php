<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>
    <head>
       <meta charset="utf-8">
       <title>PHP lydės ir <?php print date('d', strtotime('+1 day'));?></title>
    </head>
    <body>
        <h1>
            <b>Domantas</b> - HTML su manim buvo ir <?php print date('h', strtotime('-1 ')) . ' valandą!' ;?>
        </h1>
        <p>
           <?php print date('y', strtotime('+1 year')); ?> ne už kalnų!
        </p>
    </body>
</html>