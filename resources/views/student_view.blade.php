<x-layout>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8"> Student Listing</h1>

    <!-- Search and Add User (Static) -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
        <form class="w-full md:w-1/3 mb-4 md:mb-0" method="GET">
            <select name="jurusan" class="px-4 py-2 rounded-md border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih Jurusan</option>
                @foreach ($jurusan as $i )
                    <option value="{{ $i }}">{{ $i }}</option>
                @endforeach
            </select>
            <select name="kelas" class="px-4 py-2 rounded-md border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih kelas</option>
                @foreach ($kelas as $i )
                    <option value="{{ $i }}">{{ $i }}</option>
                @endforeach
            </select>
            <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
        </form>
        <a href="{{  route('student_create') }}">
             <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
            Tambah siswa
        </button>
        </a>
       
    </div>

    <!-- User Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">UID</th>
                    <th class="py-3 px-6 text-left">Nama</th>
                    <th class="py-3 px-6 text-left">Jurusan</th>
                    <th class="py-3 px-6 text-left">kelas</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
                @php
                    $count = 0;
                @endphp
                @foreach ($items as $i )
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">{{ $count+1 }}</td>
                    <td class="py-3 px-6 text-left">{{ $i->uid }}</td>
                    <td class="py-3 px-6 text-left">{{ $i->nama }}</td>
                    <td class="py-3 px-6 text-left">{{ $i->jurusan }}</td>
                    <td class="py-3 px-6 text-left">{{ $i->kelas }}</td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <a class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110" href="{{ route('student_edit', $i->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                            <form method="POST" action="{{ route('student_delete', $i->id) }}">
                                @csrf
                                @method("DELETE")
                                <button class="w-4 mr-2 transform hover:text-red-500 hover:scale-110" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Static Pagination -->
    {!! $items->withQueryString()->links() !!}
</div>
</x-layout>