<?php 
    $nama = $_POST['customer'];
    $barang = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if ($barang == 'TV'){
        $total_harga = 4200000 * $jumlah ;
    } elseif ($barang == 'Kulkas'){
        $total_harga =  3100000 * $jumlah ;
    } elseif ($barang == 'Mesin Cuci'){
        $total_harga= 3800000 * $jumlah ;
    } else {
        $total_harga = '';
    }
?>





<?php 
$customer = $_POST['customer'];
$pilihproduk = $_POST['pilihproduk'];
$jumlah = $_POST['jumlah'];

if($pilihproduk == "TV"){
    $totalharga = 4200000 * $jumlah;
} elseif ($pilihproduk == "Kulkas"){
    $totalharga = 3100000 * $jumlah;
} elseif ($pilihproduk == "Mesin Cuci"){
    $totalharga = 3800000 * $jumlah;
}
?>