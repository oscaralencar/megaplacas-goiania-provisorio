<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Megaplacas</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="processa.php">
                        <h2 class="form-title">Faça seu pedido online na Mega Placas Goiânia</h2>
                        <p>Você faz seu pedido através do formulário e entraremos em contato em breve</p>
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-xs-12"></div>
                        </div>
                        <div class="form-group">
                            <input value="" type="text" required class="form-input" name="nome" id="nome" placeholder="Nome completo / Empresa *"/>
                        </div>
                        <div class="form-group">
                            <input value="" type="email" required class="form-input" name="email" id="email" placeholder="Email *"/>
                        </div>
                        <div class="form-group">
                            <input value="" type="text" required class="form-input" name="telefone" id="telefone" placeholder="Telefone com DDD *"/>
                        </div>
                        <div class="form-group">
                            <input value="" type="text" required class="form-input" name="nrPlaca" id="nrPlaca" placeholder="Número da placa *"/>
                        </div>
                        <div class="form-group">
                            <input value="" type="text" required class="form-input" name="chassis" id="chassis" placeholder="Chassis *"/>
                        </div>
                        <div class="form-group">
                            <input value="" type="text" required class="form-input" name="cdBoletoDetran" id="cdBoletoDetran" placeholder="Código do Boleto do Detran *"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Fazer pedido"/>
                        </div>

                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
