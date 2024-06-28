<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>HaloShop</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <form action="/bayarvalo" method="post" enctype="multipart/form-data" onsubmit="return confirm('Pesanan anda akan diproses mohon ditunggu')">
                <label for="name">Username</label>
                <br />
                <input type="text" class="form-control" id="namamenu" placeholder="Your Username"
                    name="username" />

                <br />
                <label for="stock">Game</label>
                <br />
                <label for="stock">Valorant</label>
                
                <br />
                <br />
                <label for="">Order</label>
                <br />
                <input type="text" class="form-control" id="order" placeholder="Your Order"
                    name="ordered" />
                <br />
                <div class="form-group">
                    <label for="example-product-category">Pembayaran</label>
                    <select class="form-control" name="pembayaran" id="example-product-category">
                        <option value="gopay">Gopay</option>
                        <option value="ovo">Ovo</option>
                        <option value="dana">Dana</option>
                    </select>
                </div>
                <br />
                <br />

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>