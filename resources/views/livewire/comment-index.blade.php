<div>
    @forelse($comment as $comment)
        <div class="p-3 {{ $color }} text-white mb-2 rounded-sm">
            <p class="text-sm font-thin font-poppins">{{ \Carbon\Carbon::parse($comment->create_at)->format('d-m-Y') }}</p>
            <p class="text-sm font-bold font-poppins">{{ $comment->nama }}</p>
            <p class="text-sm font-italic font-mono">Di-{{ $comment->asal }}</p>
            <p class="text-sm font-medium font-poppins">{{ $comment->ucapan }}</p>

        </div>
    @empty
        <p class="text-base text-center">Masi Belum Ada Komentar</p>
    @endforelse
</div>
