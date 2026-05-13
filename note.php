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
            <input type="text" name="title" placeholder="Judul" class="w-full border-b border-blue-900 text-blue-900 font-bold px-2 py-5 text-2xl" maxlength="60">
            <textarea name="note" id="" class="w-full py-1 px-2 h-100 text-blue-900" placeholder="Catatan..."></textarea>
            <div class="flex justify-end gap-4 bg-blue">
                <button type="cancel" name="cancel" class="text-blue-900 rounded px-6 py-2 font-bold hover:bg-blue-400 transition">Batal</button>
                <button type="submit" name="submit" class="bg-blue-900 text-white rounded px-6 py-2 font-bold hover:bg-blue-950 transition">Simpan</button>
            </div>
        </form>
    </main>

</body>
</html>

<?php
    include './config/koneksi.php';

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $note = $_POST['note'];

        $query = "INSERT INTO content (judul, isi) VALUES ('$title', '$note')";
        $result = mysqli_query($conn, $query);

        if($result){
            return header("Location: /noota");
        }else{
            echo "Note gagal ditambahkan";
        }
    }
?>