<x-admin-layout>
    <div class="py-12">
        <div class="max-w-10xl mx-auto">
            <div class="">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <!-- Card for User count -->
                        <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 18.707A1 1 0 014 18V6a1 1 0 011.121-.993l6.416.55a1 1 0 01.907.916l.492 4.275a1 1 0 01-.993 1.121H10a1 1 0 100 2h2.943a1 1 0 011 1.118l-.492 4.275a1 1 0 01-.916.907l-6.416.55A1 1 0 015.121 18.707zM4 20a2 2 0 00-2 2h16a2 2 0 002-2H4z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-semibold text-gray-900">Total Users</h5>
                                    <p class="text-2xl font-bold text-gray-800">{{ $userCount }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card for Siswa count -->
                        <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-12 w-12 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2l4-4M7 20h10a2 2 0 002-2v-5a5 5 0 00-5-5H7a5 5 0 00-5 5v5a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-semibold text-gray-900">Total Siswa</h5>
                                    <p class="text-2xl font-bold text-gray-800">{{ $siswaCount }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card for Siswa count -->
                        <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-12 w-12 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2l4-4M7 20h10a2 2 0 002-2v-5a5 5 0 00-5-5H7a5 5 0 00-5 5v5a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-semibold text-gray-900">Total Kariawan</h5>
                                    <p class="text-2xl font-bold text-gray-800">0</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card for Siswa count -->
                        <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-12 w-12 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2l4-4M7 20h10a2 2 0 002-2v-5a5 5 0 00-5-5H7a5 5 0 00-5 5v5a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-semibold text-gray-900">Total Kariawan</h5>
                                    <p class="text-2xl font-bold text-gray-800">0</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
