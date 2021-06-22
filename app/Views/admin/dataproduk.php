<table class="table align-items-center table-flush table-hover" id="dataproduk">
    <thead class="thead-light">
        <th>No</th>
        <th>Nama Website</th>
        <th>Harga</th>
        <th>Detail</th>
    </thead>
    <tbody>
        <?= $i = 1; ?>
        <?php foreach ($tampildata as $produks) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $produks['nama']; ?></td>
                <td><?= $produks['harga']; ?></td>
                <td><a href="/admin/detail/<?= $produks['slug']; ?>" class="btn btn-primary">Detail</a>
                    <!-- untuk memanipulasi dari method post ke delete agar method delete berfungsi saat button delete di tekan -->
                    <form action="/admin/insert/<?= $produks['id']; ?>" method="POST" class="d-inline">
                        <!-- //agar tidak mudah dibobol hacker -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');">Delete</button>
                    </form>
                    <a href="/admin/edit/<?= $produks['slug']; ?>" class="btn btn-warning">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>