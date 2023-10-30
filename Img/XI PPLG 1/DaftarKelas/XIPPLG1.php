<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="https://pplg.smkn1purwokerto.sch.id/assets/img/LogoPPLG.png">
  <title>XI PPLG 1</title>
</head>
<?php
include 'connect.php';
if ($connect) {
  $querySql = "SELECT * from xipplg1";
  $statement = $connect->prepare($querySql);
  $statement->execute();
  $listArticle = $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>
<style>
  .card {
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
    overflow: hidden;
    border-radius: 15px;
  }

  .img2 {
  position: relative;
  display: block;
  margin-left: auto;
  margin-right: auto;
  z-index: 1;
  width: 140px;
  height: 140px;
  border-radius: 50%;
  border: 7px solid #fff;
  object-fit: cover; /* Gambar akan di-crop untuk memenuhi kotak 140x140 px */
  object-position: center center; /* Pusatkan gambar dalam kotak */
}


  .card:hover .img2 {
    border-color: #212529;
    transition: 0.7s;
  }

  /* Tambahkan class khusus untuk judul dan tanggal */
  .card-title {
    max-width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 1rem;
    margin-top: 10px;
  }

  .card-text {
    max-width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 0.9rem;
  }
</style>


<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="https://pplg.smkn1purwokerto.sch.id/assets/img/LogoPPLG.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top me-2" />
          <h1 class="h1 m-0 font-monospace text-white fw-bolder">PPLG</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarExample01">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold font-monospace">
            <li class="nav-item active">
              <a class="nav-link text-white" aria-current="page" href="../index.html">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Materi">Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Prestasi">Prestasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Guru">Guru</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Daftar Kelas</a>
              <ul class="drop dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="option dropdown-item font-monospace" href="#">X PPLG 1</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">X PPLG 2</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">XI PPLG 1</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">XI PPLG 2</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">XII RPL 1</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">XII RPL 2</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section id="">
    <div class="container p-5">
      <div class="row">
        <div class="py-5">
          <h1 class="text-center font-monospace fw-bolder m-5">XI PPLG 1</h1>
          <div class="row">
            <?php foreach ($listArticle as $artikel) { ?>
               <div class="col-sm-3 text-center font-Arial">
    <div class="card p-3 mb-5">
      <a href="artikelXI1.php?id=<?= $artikel['id'] ?>">
        <img class="img2 mt-3 mb-2" src="<?= $artikel['Image'] ?>" alt="<?= $artikel['name'] ?>">
      </a>
      <div class="card-body">
        <h5 class="card-title"><?= $artikel['name'] ?></h5>
        <p class="card-text"><?= $artikel['date'] ?></p>
      </div>
    </div>
  </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>