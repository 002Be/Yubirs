<?php
    require_once("../includes/sections.php");
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

        <div class="contents" style="margin-top: 100px; margin-bottom: 100px;">
            <form class="col-md form" action="../includes/transactions.php" method="POST">
                <h1 style="text-align: center;">Yubirs Partner</h1>
                <div class="mb-3">
                    <label for="exampleInputBusinessName1" class="form-label">İşletme Adı</label>
                    <input type="text" name="businessName" class="form-control" id="exampleInputBusinessName1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputBusinessAddress1" class="form-label">İşletme Adresi</label>
                    <input type="text" name="businessAddress" class="form-control" id="exampleInputBusinessAddress1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Ad</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSurname1" class="form-label">Soyad</label>
                    <input type="text" name="surname" class="form-control" id="exampleInputSurname1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone1" class="form-label">Telefon Numarası</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPhone1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-Posta</label>
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputTC1" class="form-label">TC</label>
                    <input type="text" name="TC" class="form-control" id="exampleInputTC1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Parola</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPasswordRep1" class="form-label">Parola Tekrar</label>
                    <input type="password" name="repassword" class="form-control" id="exampleInputPasswordRep1" required>
                </div>
                <div class="d-grid gap-2">
                    <div class="form-text">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1"><a href="#" style="text-decoration: none;">Aydınlatma metni</a>ni okudum kabul ediyorum</label>
                        <br><br>
                        <a href="login.php" style="float: right; text-decoration: none;">Zaten bir hesabınız var mı?</a>
                    </div>
                    <button type="submit" name="registerP" class="btn btn-primary">Partner Ol</button>
                </div>
            </form>
        </div>

        <?php footerP(); ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>