<div>
    <form wire:submit.prevent="tambah">
        <div class="grid gap-3 mb-6 md:grid-cols-2">
            <input wire:model="nama" 
            type="text" 
            id="first_name" 
            class="bg-white text-black text-sm rounded-lg  block w-full p-2.5 " placeholder="Nama">
            <input wire:model="asal" type="text" class="bg-white  text-black text-sm rounded-lg block w-full p-2.5 " placeholder="Asal" required>
            <textarea wire:model="ucapan" class="bg-white  text-black text-sm rounded-lg block w-full p-2.5 " id="" cols="30" rows="10" placeholder="Isi Ucapan"></textarea>

            <button type="submit" class="p-2 rounded-sm bg-primary text-white font-poppins font-normal hover:opacity-75">Send</button>
        </div>
    </form>
</div>

{{-- <div>
    <form wire:submit.prevent="tambah">
        <div class="grid gap-3 mb-6 md:grid-cols-2">
            <input wire:model="nama" 
            type="text" 
            id="first_name" 
            class="bg-[#9FAEB3] text-primaryluxx-0 text-sm rounded-lg focus:to-primaryluxx-0  block w-full p-2.5 " placeholder="Nama">
            <input wire:model="asal" type="text" class="bg-[#9FAEB3]   text-primaryluxx-0 text-sm rounded-lg focus:to-primaryluxx-0  block w-full p-2.5 " placeholder="Asal" required>
            <textarea wire:model="ucapan" class="bg-[#9FAEB3]   text-primaryluxx-0 text-sm rounded-lg focus:to-primaryluxx-0  block w-full p-2.5 " id="" cols="30" rows="10" placeholder="Isi Ucapan"></textarea>

            <button type="submit" class="p-2 rounded-sm bg-[#2c434b] text-white font-poppins font-normal hover:opacity-75">Send</button>
        </div>
    </form>
</div> --}}
