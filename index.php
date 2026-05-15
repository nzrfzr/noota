<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  </head>
  <body class="bg-blue-200 mx-12 flex flex-col gap-4">
    <header class="py-6 px-12 bg-blue-900 w-full rounded-b-lg">
        <h1 class="text-4xl text-white font-bold">Noota</h1>
        <p class="text-white text-sm">By nzrfzr</p>
    </header>
    <div class="grid grid-cols-3 gap-3">
      <?php
        include './config/koneksi.php';

        $query = "SELECT * FROM content";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
      ?>
      <div class="bg-blue-300 flex flex-col min-h-full gap-5 border border-blue-900 py-6 px-10 rounded-md">
        <h1 class="text-2xl text-blue-900 font-bold mb-2 border-b border-blue-900 py-2"><?=$row['judul']?></h1>
        <div class="grow">
            <p class="text-blue-900 py-2 line-clamp-5"><?=$row['isi']?></p>
        </div>
        <div class="flex justify-end gap-2">
          <a class="rounded border border-blue-900 text-blue-900 px-6 py-2 hover:bg-red-100 hover:border-red-600 hover:text-red-600 transition-all flex items-center" title="Hapus"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z"></path></svg></a>
          <a class="rounded bg-blue-900 text-white px-6 py-2 flex gap-2 items-center hover:bg-blue-950 transition-all" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="#ffffff" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160l90.35-90.35,16.68,16.69L68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188l90.35-90.35h0l16.68,16.69Z"></path></svg></a>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
  </body>
</html>