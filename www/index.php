<?php
$params = array_merge(
    require(__DIR__ . '/config/params.php'),
    require(__DIR__ . '/config/params-local.php')
);
echo 'This code has been deployed by the FTP github action! <br/>';
echo 'These params have been ovewritten by params-local.php: <br/>';
echo $params['adminEmail'];

?>


