<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buat Posting Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <!-- Hidden input field for user_id -->
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                        <div class="mb-4">
                            <label for="name"
                                class="block text-sm font-semibold text-gray-600 dark:text-gray-200">Masukan Nama Anda:</label>
                            <input type="text" name="name" id="name"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 dark:focus:ring-gray-900 dark:focus:border-gray-900 rounded-md"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="nisn"
                                class="block text-sm font-semibold text-gray-600 dark:text-gray-200">Nomor Kursi:</label>
                            <input type="number" name="nisn" id="nisn"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 dark:focus:ring-gray-900 dark:focus:border-gray-900 rounded-md"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="alamat"
                                class="block text-sm font-semibold text-gray-600 dark:text-gray-200">Kota Tujuan:</label>
                            <select name="kota" id="alamat"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 dark:focus:ring-gray-900 dark:focus:border-gray-900 rounded-md"
                                required>
                                <option value="" disabled selected>Pilih Kota</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Denpasar">Denpasar</option>
                                <!-- Tambahkan opsi untuk kota-kota lainnya -->
                            </select>
                        </div>
                        <button type="submit"
                            class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Buat
                            Posting</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    // Generate random NISN number
    function generateRandomNISN() {
        // Generate a random 10-digit number
        var randomNISN = Math.floor(1000000000 + Math.random() * 9000000000);
        // Ensure the number is exactly 10 digits
        return randomNISN.toString().substring(0, 2);
    }

    // Set the value of NISN input field to a random NISN number when the page loads
    window.addEventListener('load', function() {
        document.getElementById('nisn').value = generateRandomNISN();
    });
</script>
