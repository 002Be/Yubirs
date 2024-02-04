<?php
    require_once("includes/sections.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php title(); ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            .contents{
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto;
                height: 100vh;
                width: 400px;
                border: 1px;
            }
        </style>
    </head>
    <body>

        <?php navbar3("Partner"); ?>

        <div class="contents">
            <form class="col-md form" action="includes/transactions.php" method="POST">
                <h1 style="text-align: center;">Yubirs</h1>
                <div class="progress"  role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 2px; margin-bottom: 15px;">
                        <div class="progress-bar" style="width: 50%"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-Posta</label>
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="d-grid gap-2">
                    <div class="form-text">
                            <a href="login.php" style="float: left; text-decoration: none;">Giriş yap</a>
                            <a href="register.php" style="float: right; text-decoration: none;">Hesabınız yok mu?</a>
                    </div>
                    <button type="submit" name="resetPasswordC" class="btn btn-primary">Devam Et</button>
                </div>
            </form>
        </div>

        <?php footer(); ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>