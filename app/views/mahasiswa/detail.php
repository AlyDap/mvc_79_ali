<div class="container mt-3">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
      <hr>
      <!-- <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h6> -->
      <p class="card-text"><?= $data['mhs']['nim']; ?></p>
      <p class="card-text"><?= $data['mhs']['email']; ?></p>
      <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
      <!-- <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">kembali</a> -->
      <!-- <a href="#" class="card-link">Another link</a> -->
    </div>
  </div>
  <br>
  <a type="button" class="btn btn-outline-dark btn-sm" style="text-decoration: none;" href="<?= BASEURL; ?>/mahasiswa">Kembali</a>
</div>