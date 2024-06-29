@extends('index')
@section('title')
    HASIL KELULUSAN
@endsection
@section('app')
<div style="background-image: url('img/pattern-1.jpg'); background-position: center;background-size:cover;" class="h-screen flex justify-center sm:items-center">
    <div class="absolute left-0 top-0 right-0 bottom-0 bg-black/20"></div>
    <div class="relative overflow-x-auto rounded-lg h-fit m-4 shadow-md sm:w-1/2 bg-white">
        <div class="flex flex-col p-3.5">
            @foreach ($data as $item)
            <table class="w-full text-sm text-left rtl:text-right border border-collapse border-slate-700">
                <caption class="p-5 text-xl font-semibold rtl:text-right text-center bg-green-300/60">
                    IDENTITAS PESERTA DIDIK
                </caption>
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-5 py-4 font-medium border border-slate-300">
                            NAMA LENGKAP
                        </th>
                        <td class="px-3 py-4 font-medium border border-slate-300">
                            : {{$item->nama}}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-5 py-4 font-medium border border-slate-300">
                            NIS
                        </th>
                        <td class="px-3 py-4 font-medium border border-slate-300">
                            : {{$item->nis}}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-5 py-4 font-medium border border-slate-300">
                            NISN
                        </th>
                        <td class="px-3 py-4 font-medium border border-slate-300">
                            : {{$item->nisn}}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-5 py-4 font-medium border border-slate-300">
                            JURUSAN
                        </th>
                        <td class="px-3 py-4 font-medium border border-slate-300">
                            : {{$item->jurusan}}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-5 py-4 font-medium border border-slate-300">
                            Tempat/Tgl.Lahir
                        </th>
                        <td class="px-3 py-4 font-medium border border-slate-300">
                            : {{$item->tempat_lahir}}, {{$item->tanggal_lahir}}
                        </td>
                    </tr>
                </tbody>
            </table>
            @if ($item->status == 'lulus')
            <div class="flex flex-col text-center">
                <span class="font-semibold text-lg bg-green-300/60 w-full py-1.5">STATUS KELULUSAN DINYATAKAN</span>
                <span class="text-3xl font-semibold text-blue-600 bg-yellow-300/30 py-3">LULUS</span>
                <span class="font-semibold text-sm text-slate-800 bg-green-300/60 w-full py-1.5 px-2">Apapun hasil yang didapat, semoga ini adalah yang terbaik, tetap semangat dan optimis.</span>
            </div>
            @else
            <div class="flex flex-col text-center">
                <span class="font-semibold text-lg bg-green-300/60 w-full py-1.5">STATUS KELULUSAN DINYATAKAN</span>
                <span class="text-3xl font-semibold text-red-500 bg-yellow-300/30 py-3">TIDAK LULUS</span>
                <span class="font-semibold text-md text-slate-800 bg-green-300/60 w-full py-1.5 px-5">Mohon maaf silahkan hubungi walas & kurikulum.</span>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
