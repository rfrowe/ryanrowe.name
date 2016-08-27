<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Access Denied</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>
</head>

<body>
<?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
<main class="valign-wrapper">
    <div class="container">
        <div class="card grey lighten-3">
            <div class="card-content">
                <h1>403! Access Denied</h1>
                <div class="flow-text">
                    <p>You shouldn&apos;t go there</p>
                </div>
            </div>
            <div class="card-action">
                <a href="javascript:history.back()" class="blue-text">Try going back</a>
            </div>
        </div>
    </div>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</body>
</html>
