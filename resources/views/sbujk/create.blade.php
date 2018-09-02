<h1>CREATE</h1>
<form action="/sbujk" method="post">
    {{csrf_field()}}
    <input type="text" name="npwp" value="" placeholder="npwp"><br>
    <input type="text" name="nama_bu" value="" placeholder="nama_bu"><br>
    <input type="text" name="nama_pemohon" value="" placeholder="nama_pemohon"><br>
    <input type="text" name="domisili" value="" placeholder="domisili"><br>
    <input type="text" name="email" value="" placeholder="email"><br>
    <input type="text" name="nohp" value="" placeholder="nohp"><br>
    <select name="jenis">
        <option value="">--SELECT--</option>
        <option value="a">SBU Jasa Konstruksi (SBU JK) Baru</option>
        <option value="b">Registrasi SBU JK Tahun ke 2 atau 3</option>
        <option value="c">Perpanjangan Habis Masa Berlaku SBU JK</option>
        <option value="d">Perubahan Klarifikasi/Kualifikasi SBU JK</option>
    </select><br>
    <input type="submit" value="post">
</form>
