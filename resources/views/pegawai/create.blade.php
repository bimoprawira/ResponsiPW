<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-800">
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-center mb-4">Tambah Pegawai</h2>
                <form action="/pegawai" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700">Nama:</label>
                        <input type="text" id="nama" name="nama"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('nama') border-red-500 @enderror"
                            required>
                        @error('nama')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700">Alamat:</label>
                        <input type="text" id="alamat" name="alamat"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('alamat') border-red-500 @enderror"
                            required>
                        @error('alamat')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror"
                            required>
                        @error('email')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
