<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/output.css">
    <title>Daftar Siswa</title>
</head>
<body class="bg-gray-200 min-h-screen flex flex-col">
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4 ">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create.php" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>


    <Main class="grow container mx-auto">
        <div class="mt-10">
            <div class="bg-white shadow rounded-lg p-4  ">
                <h1 class="text-xl font-bold">Daftar Siswa</h1>
                <p class="text-lg">Menampilkan Daftar Siswa yang Terdaftar</p>
            </div>
        </div>

      

    <footer class="bg-green-800 text-white">
        <div class="text-center p-4">
        &copy; <?= date(format:"Y")?> - Sistem Sekolah - SMK Kristen Immanuel
        </div>
    </footer>
</body>
</html>