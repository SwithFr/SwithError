<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <style>
        body {
            padding: 0;

            font-family: sans-serif;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;

            background-color: #f0f0f1;
        }

        a {
            color: #a56259;
        }

        .error__content {
            width: 50%;
            margin: 0 auto;
        }

        .error__message {
            margin-top: 2.5em;

            color: #465256;
        }

        .error__title {
            margin-bottom: 0;

            color: #ec6858;
            font-weight: 700;
            text-transform: uppercase;
        }

        .error__backtrace {
            font-family: monospace;
            color: #465256;
        }

        .error__backtrace__line {
            color: #ec6858;
        }

        #backtrace {
            display: none;
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

    <?php if(isset($backtrace)): ?>
        <p class="error__backtrace"><?= $file; ?> <span class="error__backtrace__line">l: <?= $line; ?></span></p>
        <a id="backtraceLink" href="#backtrace">Voir le backtrace complet</a>
        <div id="backtrace">
            <?= var_dump($backtrace); ?>
        </div>
    <?php endif; ?>

</div>

<script>
    var bShown = false;

    var backtrace = document.querySelector( "#backtrace"),
        backtraceLink = document.querySelector( "#backtraceLink" );

    function toggleBacktrace( e ) {
        e.preventDefault();

        if ( !bShown ) {
            backtraceLink.innerHTML = "Masquer le backtrace︎";
            backtrace.style.display = "block"
            bShown = true;
        } else {
            backtraceLink.innerHTML = "Voir le backtrace complet";
            backtrace.style.display = "none"
            bShown = false;
        }
    }

    backtraceLink.addEventListener( "click", toggleBacktrace, false );
</script>
</body>
</html>