<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <?php if(!empty($customStyle)): ?>
        <link rel="stylesheet" href="<?= $customStyle; ?>"/>
    <?php endif; ?>

    <style>
        body {
            width: 50%;
            margin: 0 auto;
            padding: 0;
            font-family: sans-serif;
            font-weight: 300;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1><?= $title; ?></h1>

        <p class="message <?= $messageClass; ?>"><?= $message; ?></p>
    </div>
</body>
</html>