<body>
    <link rel="stylesheet" href="<?= base_url('assets/style/tambah.css'); ?>">

    <div class="card"><i>
            <h1>SIMPLE LAPOR!</h1>
        </i>
        <p>Buat laporan/Komentar</p>
        <hr>
        <form id="form">
            <textarea name="komentar">Laporan/Komentar</textarea>
            <br><br>
            <select name="aspek/komentar" id="aspek">
                <option value="Pilih Aspek Pelaporan/Komentar">Pilih Aspek Pelaporan/Komentar</option>
                <option value="Begal">Begal</option>
                <option value="Pencurian">Pencurian</option>
            </select>
            <br><br>
            <input type="file" id="file">
            <br><br>
            <input type="submit" id="submit" value="Buat LAPOR!">

        </form>


        <hr id="a">
        <footer class="footer">

            Copyright &copy; <?= date('Y') ?> - Rahman A. Siregar, Juliawati Hutagaol, Aly Mujiono
        </footer>

    </div>
</body>