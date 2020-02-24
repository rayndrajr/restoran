<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-image:url('warna.jpg');">
    <h3>MENU MAKANAN</h3>
    <table border="1" width="50%">
    <tr>
    <th bgcolor="red">Makanan</th>
    <th bgcolor="red">Harga</th>
    <th bgcolor="red">Rating</th>
    </tr>
    <?php
    include "koneksi2.php";
    
    $query = "SELECT * FROM makanan";
    $sql = mysqli_query($connect,$query);

    while($data=mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td bgcolor='pink'>".$data['Makanan']."</td>";
        echo "<td bgcolor='pink'>".$data['harga']."</td>";
        echo "<td bgcolor='pink'>".$data['Rating']."</td>";
        echo "</tr>";
    }
    ?>
    </table><br>

    <h3>MENU MINUMAN</h3>
    <table border="1" width=50%>
    <tr>
    <th bgcolor="blue">Minuman</th>
    <th bgcolor="blue">Harga</th>
    <th bgcolor="blue">Rating</th>
    </tr>
    <?php
    include "koneksi2.php";
    
    $query = "SELECT * FROM minuman";
    $sql = mysqli_query($connect,$query);

    while($data=mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td bgcolor='aqua'>".$data['Minuman']."</td>";
        echo "<td bgcolor='aqua'>".$data['harga']."</td>";
        echo "<td bgcolor='aqua'>".$data['Rating']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <form action="cetak.php" method="POST">
    <br>
    <label>Nama Pemesan</label><br>
    <input type="text"><br> <br>
    Pilih Menu Yang akan dipesan:
    <br>
    <br>
    <label>Nasi Goreng Biasa</label><br>
    <input type="checkbox" name="Nasi_Goreng_Biasa" value="Nasi Goreng Biasa"><br>
    <label>Nasi Goreng Seafood</label><br>
    <input type="checkbox" name="Nasi_Goreng_Seafood" value="Nasi Goreng Seafood"><br>
    <label>Nasi Goreng Mawut</label><br>
    <input type="checkbox" name="Nasi_Goreng_Mawut" value="Nasi Goreng Mawut"><br>
    <label>Nasi Goreng Merah</label><br>
    <input type="checkbox" name="Nasi_Goreng_Merah" value="Nasi Goreng Merah"><br>
    <label>Nasi Goreng Spesial</label><br>
    <input type="checkbox" name="Nasi_Goreng_Spesial" value="Nasi Goreng Spesial"><br>
    <br>
    <label>Es Teh</label><br>
    <input type="radio" name="EsTeh" value="Es Teh"><br>
    <label>Es Jeruk</label><br>
    <input type="radio" name="EsJeruk" value="Es Jeruk"><br>
    <label>Soda Gembira</label><br>
    <input type="radio" name="Sogem" value="Soda Gembira"><br>
    <label>Joshua</label><br>
    <input type="radio" name="Joshua" value="Joshua"><br>
    <label>Kopi</label><br>
    <input type="radio" name="Kopi" value="Kopi"><br>
    <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>