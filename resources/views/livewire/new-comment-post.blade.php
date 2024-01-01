<div class="p-3">
    <form wire:submit.prevent="tambah">


        <div  class="flex flex-wrap gap-3">

            <label for="" class="text-white">Nama</label>
            <input wire:model="nama" type="text" id="first_name" class="bg-white  text-black text-sm rounded-lg  block w-full p-2.5 ">

            <label for="" class="text-white">Asal</label>
            <input wire:model="asal" type="text" class="bg-white  text-black text-sm rounded-lg  block w-full p-2.5 " required>
            <label for="" class="text-white">Isi Ucapan</label>
            <textarea wire:model="ucapan" class="bg-white  text-black text-sm rounded-lg  block w-full p-2.5 " id="" cols="30" rows="10"></textarea>

            <button type="submit" class="p-2 rounded-sm w-full bg-primarymini1-0 text-white font-poppins font-normal hover:opacity-80">Send</button>
            <div class="w-full">
            </div>
        </div>
    </form>
</div>
