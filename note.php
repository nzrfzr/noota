<link rel="stylesheet" href="./src/output.css">

<body class="bg-blue-50">
    <header class="flex justify-center items-center py-5 mx-12 border-b-2 border-blue-200">
        <h5 class="text-4xl font-bold text-blue-800">Noota</h5>
    </header>
    <main class="mx-12">
        <form action="" method="POST" class="mx-auto flex flex-col gap-2 py-4">
            <input type="text" name="title" placeholder="Judul" class="w-full border-b border-gray-300 rounded px-2 py-1" maxlength="60">
            <textarea name="note" id="" class="w-full px-2 py-1 h-100" placeholder="Catatan..."></textarea>
            <button type="submit" name="submit" class="w-full bg-blue-500 text-white rounded px-2 py-1 hover:bg-blue-600 transition">Tambah</button>
        </form>
    </main>
</body>

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
