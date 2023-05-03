<h3>Tambah Data User</h3>
<form method="POST" action="tbuser.php">
    <input type="hidden" name="opsi" value="store">

    <div>
        Nama lengkap
        <input type="text" name="txNAMA">
    </div>
    <div>
        Email
        <input type="text" name="txEMAIL">
    
    </div>
    <div>
        user name
        <input type="text" name="txUSERNAME">
    </div>
    <div>
        password
        <input type="text" name="txPASS1">
</div>
<div>
        verifikasi password
        <input type="text" name="txPASS2">
</div>
<button type="submit"> Buat data user </button>
</form>
