<x-layout>
<form method="POST" action="{{ route("superuser_store") }}">
    @csrf
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
                <div class="mb-5">
                    <label for="username" class="mb-3 block text-base font-medium text-[#07074D]">
                        Username
                    </label>
                    <input name="name" type="text" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email
                    </label>
                    <input name="email" type="email" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                        Password
                    </label>
                    <input name="password" type="password" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div>
                    <input type="submit"class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                </div>
        </div>
    </div>
</form>
</x-layout>