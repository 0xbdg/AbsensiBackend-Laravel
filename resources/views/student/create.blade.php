<x-layout>
<form method="POST" action="{{ route("student_store") }}">
    @csrf
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
                <div class="mb-5">
                    <label for="uid" class="mb-3 block text-base font-medium text-[#07074D]">
                        UID
                    </label>
                    <input name="uid" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div class="mb-5">
                    <label for="nama" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama
                    </label>
                    <input name="nama" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div class="mb-5">
                    <label for="kelas" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kelas
                    </label>
                    <select name="kelas" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option>Pilih Kelas</option>
                        @foreach ($kelas as $i )
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach                       
                    </select>
                </div>
                <div class="mb-5">
                    <label for="jurusan" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jurusan
                    </label>
                    <select name="jurusan" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option>Pilih Jurusan</option>
                        @foreach ($jurusan as $i )
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach                       
                    </select>
                </div>
                <div>
                    <input type="submit"class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                </div>
        </div>
    </div>
</form>
</x-layout>