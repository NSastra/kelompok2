<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Produk</title>
</head>

<body>
<div>
	<div class="header">
    	<a href="<?php echo site_url('admin/produk/add') ?>"> Tambah Data </a>
     </div>
     
     <div class="table">
     	<thead>
        	<tr>
            	<th> Nama Produk </th>
                <th> Harga Produk </th>
                <th> Gambar </th>
                <th> Deskripsi </th>
                <th> Aksi </th>
            </tr>
        </thead>
        
        <tbody>
        	<?php foreach ($products as $product): ?>
            <tr>
            	<td width="150"> <?php echo $product->nama_prod ?> </td>
                <td> <?php echo $product->harga_prod ?> </td>
                <td> <img src="<?php echo base_url('upload/produk/'.$product->image) ?>" width="64" /> </td>
                <td> <?php echo substr($product->desckripsi, 0, 120) ?> ... </td>
                <td width="250"> <a href="<?php echo site_url('admin/produk/edit'.$product->id_prod) ?>"> Edit </a>
                <a onclick="deleteConfirm('<?php echo site_url('admin/produk/delete'.$product->id_prod) ?>')" 
                href="#!">Hapus </a> </td>
            </tr>



</div>
</body>
</html>