<div class="container-fluid px-4">
    <h1 class="mt-4"><i class="fas fa-chart-area"></i> Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Produk</li>
    </ol>
    <a href="?page=produk_tambah" class="btn btn-primary">+ Tambah Data</a>
    <hr>
    
    <!-- Form Pencarian -->
    <form method="GET" action="">
        <input type="hidden" name="page" value="produk">
        <input type="text" name="search" placeholder="Cari produk..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
        <button type="submit" class="btn btn-info">Cari</button>
    </form>
    <br>
    
    <table class="table table-bordered">
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        
        <?php
            $search = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';
            $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_produk LIKE '%$search%'");
            while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['nama_produk']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['stok']; ?></td>
            <td>
                <a href="?page=produk_ubah&id=<?php echo $data['id_produk']; ?>" class="btn btn-warning">Edit</a>
                <a href="?page=produk_hapus&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
