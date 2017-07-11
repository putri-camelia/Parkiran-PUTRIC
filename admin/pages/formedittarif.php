<h1>UBAH TARIF</h1>           
<form action="aksi_ubah.php?id=<?php echo $data_tarif ['id_tarif'] ?>" method="POST" accept-charset="utf-8" >
  <label for="Tarif">Tarif</label>                  
  <input type="text" name="tarif" value="<?php echo $data_tarif ['tarif'] ?>"><br>
  <label for="Kategori">Kategori</label>
  <br>
  <select name="Kategori">
  <?php foreach ($data_kategori as $kat): ?>
  <option value="<?php echo $key["id_kategori"] ?>"
    <?php
    if ($kat["id_kategori"]== $data_kategori ["id_kategori"]) {
    echo "selected";
    }
    ?>
    ><?php  
    echo $kat["nama_kategori"]?></option>
  <?php  endforeach ?>
  </select>
  <br>
  <input type="submit" value="Simpan">
</form>