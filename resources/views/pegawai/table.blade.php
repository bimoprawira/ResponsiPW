<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-300 font-sans">
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-xl font-bold" href="#">Dashboard Pegawai</a>
            <form action="{{ route('logout.post') }}" method="post">
                @csrf
                <button type="submit" class="bg-gray-800 hover:bg-blue-900 text-white px-4 py-2 rounded transition duration-300"">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Pegawai List</h1>
            <a href="/pegawai/create"
                class="bg-gray-800 hover:bg-blue-900 text-white px-4 py-2 rounded transition duration-300">Add New
                Pegawai</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3 text-left">Nama</th>
                        <th class="px-4 py-3 text-left">Alamat</th>
                        <th class="px-4 py-3 text-left">Email</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @php $count = 1 @endphp
                    @foreach ($pegawai as $p)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-3 text-center">{{ $count++ }}</td>
                            <td class="px-4 py-3">{{ $p->nama }}</td>
                            <td class="px-4 py-3">{{ $p->alamat }}</td>
                            <td class="px-4 py-3">{{ $p->email }}</td>
                            <td class="px-4 py-3 text-center">
                                <a href="/pegawai/edit/{{ $p->id }}"
                                    class="text-blue-700 hover:underline mr-2">Edit</a>
                                <a onclick="return confirm('Are you sure you want to delete this item?')"
                                    href="/pegawai/delete/{{ $p->id }}"
                                    class="text-red-900 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
