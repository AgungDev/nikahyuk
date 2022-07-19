<?php
$filedata = file_get_contents('data.json');
$data = json_decode($filedata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($data->{"name"}); ?> mau nikah!</title>
</head>
<body>
    Hello World
</body>
</html>