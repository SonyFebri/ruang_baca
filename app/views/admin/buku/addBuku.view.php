<form action="proses_tambah_buku.php" method="post">
    <!-- id_kategori dan id_rak bisa di-handle sesuai dengan kebutuhan aplikasi Anda -->
    <label for="id_kategori">ID Kategori:</label>
    <input type="text" name="id_kategori" required>

    <label for="id_rak">ID Rak:</label>
    <input type="text" name="id_rak" required>

    <label for="judul_buku">Judul Buku:</label>
    <input type="text" name="judul_buku" required>

    <label for="cover_buku">Cover Buku (URL):</label>
    <input type="text" name="cover_buku" required>

    <label for="penulis">Penulis:</label>
    <input type="text" name="penulis" required>

    <label for="stok">Stok:</label>
    <input type="number" name="stok" required>

    <label for="stok_tersedia">Stok Tersedia:</label>
    <input type="number" name="stok_tersedia" required>

    <label for="tahun_terbit">Tahun Terbit:</label>
    <input type="number" name="tahun_terbit" required>

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi" required></textarea>

    <label for="denda">Denda (Decimal):</label>
    <input type="text" name="denda" required>

    <button type="submit">Tambah Buku</button>
</form>