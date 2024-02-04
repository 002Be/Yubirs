<<<<<<< HEAD
<?php
    require_once("includes/sections.php");
    require_once("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="FooYes - Quality delivery or takeaway food">
        <meta name="author" content="Ansonika">
        <title>Yubirs - Kaliteli teslimat veya paket yemek</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

        <!-- GOOGLE WEB FONT -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <!-- BASE CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="assets/css/home.css" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/CustomerRegisterPage.css"/>

        <!-- FONT AWESOME -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/><!-- Font Awesome -->
    </head>
    <body>

        <?php headerC(); ?>

        <form action="includes/transactions.php" method="POST">
            <div class="container" style="width: 1000px; height: 700px; margin-top:100px; margin-bottom:100px;">
                <div class="login">
                    <div class="container">
                        <h1>Üye Ol</h1>
                        <input name="name" type="text" placeholder="Ad" required>
                        <input name="surname" type="text" placeholder="Soyad" required>
                        <input name="phone" type="text" placeholder="Telefon Numarası" required>
                        <input name="mail" type="email" placeholder="E-Posta" required>
                        <input name="password" type="password" placeholder="Parola" required>
                        <input name="repassword" type="password" placeholder="Parola Tekrar" required>
                        <a href="login.php" style="text-decoration: none;">Zaten bir hesabınız var mı?</a>
                        <div style="margin-top: 20px;">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-decoration: none; color:blue;">Aydınlatma metni</a>ni okudum kabul ediyorum</label>
                        </div>
                        <button type="submit" name="registerC" class="btn btn-primary">Üye Ol</button>
                    </div>
                </div>
                <div class="register">
                    <div class="container">
                        <i class="fas fa-user-plus fa-5x"></i>
                        <h2>Yubirs</h2>
                        <p>Tek adımla üye olun ve Yubirs dünyasını keşfetmeye başlayın!</p>
                        <!-- <button>Üye Ol <i class="fas fa-arrow-circle-right"></i></button> -->
                    </div>
                </div>
            </div>
        </form>

<!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <br><br><br><br>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Aydınlatma Metni</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-dialog modal-dialog-scrollable">
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okudum ve Kabul Ediyorum</button>
                        <!-- Bu butona tıklandıktan sonra js ile checkbox'ın durumu checked hale getirilecek -->
                        <!-- <button type="button" class="btn btn-primary">Okudum ve Kabul Ediyorum</button> -->
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </div>

        <?php footerC(); ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
=======
<?php
    require_once("includes/sections.php");
    require_once("assets/languages/tr_TR.php"); //Fonksiyon olarak eklenecek
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="FooYes - Quality delivery or takeaway food">
        <meta name="author" content="Ansonika">
        <title>Yubirs - Kaliteli teslimat veya paket yemek</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

        <!-- GOOGLE WEB FONT -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <!-- BASE CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="assets/css/home.css" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/CustomerRegisterPage.css"/>

        <!-- FONT AWESOME -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/><!-- Font Awesome -->
    </head>
    <body>

        <?php headerC(); ?>

        <form action="includes/transactions.php" method="POST">
            <div class="container" style="width: 1000px; height: 700px; margin-top:100px; margin-bottom:100px;">
                <div class="login">
                    <div class="container">
                        <h1>Üye Ol</h1>
                        <input name="name" type="text" placeholder="Ad" required>
                        <input name="surname" type="text" placeholder="Soyad" required>
                        <input name="phone" type="text" placeholder="Telefon Numarası" required>
                        <input name="mail" type="email" placeholder="E-Posta" required>
                        <input name="password" type="password" placeholder="Parola" required>
                        <input name="repassword" type="password" placeholder="Parola Tekrar" required>
                        <a href="login.php" style="text-decoration: none;">Zaten bir hesabınız var mı?</a>
                        <div style="margin-top: 20px;">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-decoration: none; color:blue;">Aydınlatma metni</a>ni okudum kabul ediyorum</label>
                        </div>
                        <button type="submit" name="registerC" class="btn btn-primary">Üye Ol</button>
                    </div>
                </div>
                <div class="register">
                    <div class="container">
                        <i class="fas fa-user-plus fa-5x"></i>
                        <h2>Yubirs</h2>
                        <p>Tek adımla üye olun ve Yubirs dünyasını keşfetmeye başlayın!</p>
                        <!-- <button>Üye Ol <i class="fas fa-arrow-circle-right"></i></button> -->
                    </div>
                </div>
            </div>
        </form>

<!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <br><br><br><br>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Aydınlatma Metni</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-dialog modal-dialog-scrollable">
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam tempore fugit aut ut fuga repellat pariatur sunt cupiditate rerum iure officia ducimus perferendis harum voluptate iusto animi, praesentium vel.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okudum ve Kabul Ediyorum</button>
                        <!-- Bu butona tıklandıktan sonra js ile checkbox'ın durumu checked hale getirilecek -->
                        <!-- <button type="button" class="btn btn-primary">Okudum ve Kabul Ediyorum</button> -->
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </div>

        <?php footerC(); ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
>>>>>>> cb155594332c919c0d31763cde7af1a0934c6844
</html>