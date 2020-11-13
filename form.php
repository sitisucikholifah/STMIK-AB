<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PHP</title>
</head>
<body>
<div style='border-style: solid; width: 50%; margin:auto;padding: 20px 60px 40px 60px;'>
    <h2>PT. Graha Mobilindo</h2>

    <form action="tampil.php" method="post">
    <table>
        <tr>
            <td><label for="name">Nama Pelanggan    :</label></td>
            <td><input type="text" id="name" name="name"> <br><br></td>
        </tr>
        <tr>
            <td><label for="number" >Nomor KTP  :</label></td>
            <td><input type="text" id="number" name="number"> <br><br></td>
        </tr>
        <tr>
            <td><label for="address">Alamat   :</label></td>
            <td><input type="text" id="address" name="address"> <br><br></td>
        </tr>
        <tr>
            <td><label for="phone">Nomor HP   :</label></td>
            <td><input type="text"  id="phone" name="phone"> <br><br></td>
        </tr>
        <tr>
            <td><label for="merk">Merk Mobil    :</label></td>
            <td><input type="text" id="merk" name="merk"> <br><br></td>
        </tr>
        <tr>
            <td><label for="total">Jumlah Unit  :</label></td>
            <td><input type="text"  id="total" name="total"> <br><br></td>
        </tr>
        <tr>
            <td><label for="price">Harga Mobil  :</label></td>
            <td><input type="text" id="price" name="price"> <br><br></td>
        </tr>
        <tr>    
            <td><button type="submit" name="submit">Kirim</button></td>
            <td><button type="reset">Batal</button></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>