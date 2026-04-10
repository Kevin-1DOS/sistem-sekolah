
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
