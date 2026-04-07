<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
 
    <main class="grow container mx-auto">
        <div class="mt-8 space-y-4">
            <!--Card header start-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold">Edit Siswa</h1>
                <p>Isi formulir di bawah ini untuk mengedit informasi siswa</p>
            </div>
            <!--Card header end-->

            <!--Card content start-->
            <div class="bg-white shadow rounded-lg">

               <form action="" class="py-4 px-6 space-y-4 grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label for="name" class="block font-bold ">Nama</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama" class="border rounded-lg py-2 px-4 w-full">

                </div>
                <div class="space-y-2">
                    <label for="nis" class="block font-bold ">NIS</label>
                    <input type="text" name="nis" id="nis" placeholder="Masukkan NIS" class="border rounded-lg py-2 px-4 w-full">
                </div>
                <div class="space-y-2">
                    <label for="class" class="block font-bold ">Kelas</label>
                    <input type="text" name="class" id="class" placeholder="Masukkan kelas" class="border rounded-lg py-2 px-4 w-full">
                </div>
                <div class="space-y-2">
                    <label for="phone" class="block font-bold ">No.HP</label>
                    <input type="text" name="phone" id="phone" placeholder="Masukkan no telepon" class="border rounded-lg py-2 px-4 w-full">
                </div>
                <div class="flex justify-end gap-4 col-span-2">
                    <a href="/students" class="py-2 px-4 bg-gray-500 text-white rounded-lg">Batal</a>
                    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-lg">Simpan</button>
                </div>
               </form>

            </div>
            <!--Card content end-->
        </div>
    </main>
 
    <footer class="bg-green-800 text-white item">
            <div class="text-center p-4">
                &copy <?= date(format: "Y") ?> - Sistem Sekolah SMK Kristen Immanuel
            </div>
    </footer>
 
</body>
</html>