<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>
        body {
            width: 50%;
            margin: 0 auto;
            padding: 0;
            font-family: sans-serif;
            font-weight: 300;
        }
    </style>
    <?php if(!empty($customStyle)): ?>
        <link rel="stylesheet" href="<?= $customStyle; ?>"/>
    <?php endif; ?>
</head>
<body>
    <div class="error__content">
        <h1 class="error__title"><?= $title; ?></h1>

        <p class="error__message"><?= $message; ?></p>
    </div>
</body>
</html>