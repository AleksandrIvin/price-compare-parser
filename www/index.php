<?php
$params = array_merge(
    require(__DIR__ . '/config/params.php'),
    require(__DIR__ . '/config/params-local.php')
);
echo 'It works from FTP github actions!';
echo $params['adminEmail'];

?>


