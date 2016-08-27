<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Server Error</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>
</head>

<body>
<?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
<main class="valign-wrapper grey">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <h1>500! Server Error</h1>
                <div class="flow-text">
                    <p>Well, that did&apos;t work. Our servers are having trouble.</p>
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

