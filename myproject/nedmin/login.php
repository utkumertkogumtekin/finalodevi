<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Giriş Sayası</title>

  <!-- Bootstrap -->
  <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="./vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="./build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="process.php" method="POST">
            <h1>Giriş</h1>
            <?php if (@$_GET['status'] == 'ok') {
            ?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hoşgeldin</strong> Başarılı şekilde kayıt oldunuz.
              </div>
            <?php   } elseif (@$_GET['login'] == 'no') {     ?>

              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong> girilen bilgiler yanlış.
              </div>
            <?php } elseif (@$_GET['logout'] == 'ok') {     ?>

              <div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Çıkış yapıldı,</strong> Başarılı bir şekilde çıkış yapıldı.
              </div>
            <?php } ?>
            <div>
              <input type="text" name="user_name" class="form-control" placeholder="Kullanıcı Adı" required="" />
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Şifre" required="" />
            </div>
            <div>
              <button class="btn btn-default submit" name="login" href="index.html">Giriş</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">
                <?php
                $control = $db->prepare('SELECT * FROM user');
                $control->execute();
                $has_admin = $control->rowcount();
                if ($has_admin == 0) { ?>
                  <a href="#signup" class="to_register"> Kayıt Ol </a>
                <?php } ?>


              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1>ProjePlanlama</h1>

              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form method="POST" action="./process.php">
            <h1>Kayıt Ol</h1>
            <?php if (@$_GET['register'] == 'no') {
            ?>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong>Bizimle iletişime geçin.
              </div>
            <?php   } elseif (@$_GET['register'] == 'hasadmin') { ?>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong>Kayıtlı Admin mevcut.
              </div>
            <?php } elseif (@$_GET['register'] == 'lowchar') { ?>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong>Şifre en az 6 karakter olmalıdır.
              </div>
            <?php } elseif (@$_GET['register'] == 'inegual') { ?>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong>Girilen şifreler eşleşmemektedir.
              </div>
            <?php } ?>


            <div>
              <input type="text" name="user_name" class="form-control" placeholder="Kullanıcı adı" required="" />
            </div>
            <div>
              <input type="email" name="email" class="form-control" placeholder="E-posta" required="" />
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Şifre" required="" />
            </div>
            <div>
              <input type="password" name="password_2" class="form-control" placeholder="Şifre Tekrarı" required="" />
            </div>
            <div>
              <button class="btn btn-default submit" name="signup">Kayıt Ol</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">
                <a href="#signin" class="to_register"> Giriş </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1>ProjePlanlama</h1>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

<!-- jQuery -->
<script src="./vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>


</html>