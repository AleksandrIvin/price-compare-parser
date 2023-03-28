<?php
$params = array_merge(
    require(__DIR__ . '/config/params.php'),
    require(__DIR__ . '/config/params-local.php')
);
echo 'This code has been deployed by the FTP github action! <br/>';
echo 'These params have been ovewritten by params-local.php: <br/>';
echo 'Github secret: ';
echo $params['adminEmail'];
echo 'Github variable: ';
echo $params['adminName'];
echo 'github context variable: ';
echo $params['context'];

?>


