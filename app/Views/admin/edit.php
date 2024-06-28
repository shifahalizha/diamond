<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>HaloShop</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<div>
    <form action="/pesananvalo/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT" />
        <br />
        <div class="form-group">
            <label for="example-product-name">username</label>
            <input type="text" class="form-control" id="example-menu-name" aria-describedby="emailHelp"
                placeholder="Enter nama menu" required name="username" readonly value="<?= $data['username'] ?>">
        </div>

        <div class="form-group">
            <label for="example-product-name">ordered</label>
            <input type="text" class="form-control" id="example-caption" aria-describedby="emailHelp"
                placeholder="Enter caption" required name="ordered" readonly value="<?= $data['ordered'] ?>">
        </div>

        <div class="form-group">
        <label for="example-product-name">pembayaran</label>
            <input type="text" class="form-control" id="example-caption" aria-describedby="emailHelp"
                placeholder="Enter caption" required name="pembayaran"  readonly value="<?= $data['pembayaran'] ?>">
        </div>

        <div class="form-group">
            <label for="status">status</label>
            <select class="form-control" name="status" id="status">
                <option value="menunggu proses">menunggu proses</option>
                <option value="berhasil">Trasaksi Berhasil</option>
            </select>
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>