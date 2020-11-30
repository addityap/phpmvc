<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']?></h6>
            <p class="card-text"><?= $data['mhs']['email']?></p>
            <h5 class="card-footer"><?= $data['mhs']['jurusan']?></h5>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>