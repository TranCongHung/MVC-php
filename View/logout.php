<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Public/css/CSS.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="Public/CSS/font-awesome/css/fontawesome-all.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=vietnamese" rel="stylesheet">

    <script type="text/javascript">

    </script>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #cecece;
    }

    a {
        color: #00bd00;
    }

    * {
        box-sizing: border-box;
    }

    .register {
        width: 500px;
        padding: 16px;
        margin: 0 auto;
        background-color: white;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    .submit {
        background-color: #0900bd;
        color: white;
        padding: 15px 18px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .submit:hover {
        opacity: 1;
    }

    .login {
        background-color: #ffffff;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="container-fluid" style="background-color:#a9c7e1;">
    <?php include_once 'inc/header.php' ?>



        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix vi-header">
                        <h3 class="vi-left-title pull-left"> TRANG CH??? > ????NG NH???P> ????NG K?? </h3>
                    </div>
                    <br>
                </div>
            </div>

            <div class="container">


                <form action="index.php" method="POST">
                    <?php if (isset($_SESSION['errors'])) { ?>
                    <h5 style="color: red;"><?php echo $_SESSION['errors'];
                                                unset($_SESSION['errors']); ?></h5>
                    <?php } ?>
                    <h1>????ng k??</h1>
                    <p>Vui l??ng ??i???n th??ng tin ????? ????ng k??</p>
                    <label for="username"><b>T??n ????ng nh???p</b></label>
                    <input type="text" placeholder="H??? v?? t??n" name="full_name" id="full_name">
                    <p id="h4"></p>
                    <label for="username"><b>S??? ??i???n tho???i</b></label>
                    <input type="text" placeholder="Nh???p s??? ??i???n tho???i" name="phone" id="phone"
                        onfocusout="formValidate1()">
                    <P id="h2"></P>

                    <p id="h1"></p>

                    <label for="username"><b>?????a ch???</b></label>
                    <input type="text" placeholder="Nh???p ?????a ch???" name="Cminh" id="Cminh" onfocusout="formValidate2()">
                    <P id="h3"></P>
                    <label for="password"><b>M???t kh???u</b></label>
                    <input type="password" placeholder="******" name="password" id="password">
                    <P id="h4"></P>
                    <label for="password-repeat"><b>Nh???p l???i m???t kh???u</b></label>
                    <input type="password" placeholder="******" name="password-repeat" id="password-repeat">
                    <hr>
                    <P id="h5"></P>
                    <p>????? t???o t??i kho???n vui l??ng ?????ng ?? v???i ??i???u kho???n c???a ch??ng t??i</p>
                    <button type="submit" class="submit">????ng k??</button>
            </div>
            </form>
            <div class="col-md-10 col-md-offret-10">

            </div>
        </div>
    </div>
    <br>
    </div>
    </div>
    <?php include_once 'inc/foder.php' ?>
    <!--end-->
    <script src="js/dangky-js.js"></script>
</body>

</html>