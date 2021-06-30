<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Rental</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="viewrental.php">Kembali</a>
    <br><br>
    <form action="controller.php" method="post">
        <label>Id Rental</label>
        <br>
        <input type="text" name="rental_id">
        <br>
        <label>Id Mobil</label>
        <br>
        <input type="text" name="mobil_id">
        <br>
        <label>Id Member</label>
        <br>
        <input type="text" name="member_id">
        <br>
        <label>Lama Rental<tabel>
        <br>
        <input type="text" name="lamarental">
        <br><br>
        <button type="submit" name="submit_simpan_rental">Submit</button>
        <button type="reset">Reset</button>
    </form> 
</body>
</html