<?php
include './config/koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM content WHERE id_nota=$id");
$data = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>Document</title>
</head>
<body class="bg-blue-200 mx-12 flex flex-col gap-4">
    <header class="py-6 px-12 bg-blue-900 w-full rounded-b-lg">
        <h1 class="text-4xl text-white font-bold">Noota</h1>
        <p class="text-white text-sm">By nzrfzr</p>
    </header>

    <main class="h-auto bg-blue-300 rounded-md p-6">
        <form action="" method="POST" class="mx-auto flex flex-col gap-2 py-4">
            <input type="text" name="judul" placeholder="Judul" value="<?=$data['judul']?>" class="w-full border-b border-blue-900 text-blue-900 font-bold px-2 py-5 text-2xl" maxlength="60">
            <textarea name="isi" class="w-full py-1 px-2 h-100 text-blue-900" placeholder="Catatan..."><?=$data['isi']?></textarea>
            <div class="flex justify-end gap-4 bg-blue">
                <button type="cancel" name="cancel" class="text-blue-900 rounded px-6 py-2 font-bold hover:bg-blue-400 transition">Batal</button>
                <button type="submit" name="update" class="bg-blue-900 text-white rounded px-6 py-2 font-bold hover:bg-blue-950 transition">Simpan</button>
            </div>
        </form>
    </main>

</body>
</html>

<?php
if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    mysqli_query($conn, "UPDATE content SET judul='$judul', isi='$isi' WHERE id_nota=$id");

    header("Location: index.php");
    exit;
}
?>