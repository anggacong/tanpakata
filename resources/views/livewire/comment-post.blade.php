<div class="p-3">
    <form wire:submit.prevent="tambah">

        <div class="grid gap-3 mb-6 md:grid-cols-2">
            <input wire:model="nama" type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:to-primarylux-0 focus:border-[#F4F5F0] block w-full p-2.5 "
                placeholder="Nama">
            <input wire:model="asal" type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:to-primarylux-0 focus:border-[#F4F5F0] block w-full p-2.5 "
                placeholder="Asal" required>
            <textarea wire:model="ucapan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:to-primarylux-0 focus:border-[#F4F5F0] block w-full p-2.5 "
                id="" cols="30" rows="10" placeholder="Isi Ucapan"></textarea>

            <button type="submit" class="p-2 {{ $color }} rounded-sm  text-white font-poppins font-normal hover:bg-[#8D9BA4]">Send</button>
        </div>
    </form>
</div>
