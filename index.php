<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>QR CODE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Gerando QR CODE</h1>
        <form  method="GET">
            <input class="form-control mb-2" name="url" type="url" placeholder="Digite uma url" />
            <button type="submit" class="btn btn-primary float-right">Gerar QRCODE</button>
        </form> 
        <div class="my-4">
            <?php
                require __DIR__."/phpqrcode/qrlib.php";

                if(isset($_GET['url'])){
                    $url = $_GET['url'];
                    QRcode::png($url, "qr_img.png", QR_ECLEVEL_H, 4);
                    echo"
                        <div class='card mx-auto' style='width: 18rem;'>
                            <img src='qr_img.png' alt='qr_code'/>
                            <div class='card-body'>
                            <h5 class='card-title'>".$url."</h5>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>