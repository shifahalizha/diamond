<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>HaloShop</title>

<!-- Bootstrap core CSS -->
<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="/assets/css/fontawesome.css">
<link rel="stylesheet" href="/assets/css/templatemo-lugx-gaming.css">
<link rel="stylesheet" href="/assets/css/owl.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Daftar Pesanan</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">username</th>
                        <th scope="col ">ordered</th>
                        <th scope="col ">Pembayaran</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($pesananvalo as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['username'] ?></td>
                        <td><?= $item['ordered'] ?></td>
                        <td><?= $item['pembayaran'] ?></td>
                        <td><?= $item['status'] ?></td>
                        <td>
                        <div>
                        <form action="/pesananvalo/<?= $item['id']; ?>" method="post"
                          onsubmit="return confirm('Apakah Anda yakin?')">
                          <input type="hidden" name="_method" value="DELETE" />
                          <button type="submit" style="background: none; border: none; cursor: pointer;"><i
                              class="fas fa-trash-alt"></i></button>
                          <a href="/pesananvalo/<?= $item['id']; ?>/edit" style="text-decoration: none; color: inherit;"><i
                              class="fas fa-edit"></i></a>
                        </form>
                      </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>