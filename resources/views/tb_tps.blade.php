@foreach ($tb_tps as $tps)
    <p>{{ $tps->no_tps }} </p>
    <p>{{ $tps->nama_tps }}</p>
    <p>{{ $tps->jenis_tps }}</p>
    <p>{{ $tps->kelas_tps }}</p>
    <p>{{ $tps->status_tanah }}</p>
    <p>{{ $tps->volume }}</p>
@endforeach