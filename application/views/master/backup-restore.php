<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; $subtitle;?></title>
</head>

<body>

    <head>
        <h1>Menu Backup</h1>
    </head>

    <div class="container">
        <a href="<?= base_url();?>Backup/backup" titl="Backup Database">Klik untuk backup database</a>
    </div>

    <head>
        <h1>Menu Restore</h1>
    </head>

    <form action="<?= base_url(); ?>Restore/restore" method="POST" enctype="multipart/form-data">
        <input type="file" name="datafile" title="Pilih File">
        <input type="submit" value="Klik untuk Restore">
    </form>
</body>

</html>