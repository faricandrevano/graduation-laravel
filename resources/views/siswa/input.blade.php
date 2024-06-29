@extends('index')
@section('title')
    GRADUATION SMK TELEKOMUNIKASI TELESANDI
@endsection
@section('app')
<div class="overflow-x-hidden">
    <div class="w-screen bg-no-repeat h-14 bg-cover relative" style="background-image: url('{{url('img/navline.svg')}}');">
        <div class="absolute -right-[135px] top-2"><img src="img/logosmk.svg" width="37%"></div>
    </div>
    <div class="w-screen h-auto py-4 mt-12 flex justify-center items-center text-white bg-red-200">
            <form action="{{route('post.hasil')}}" enctype="multipart/form-data" method="GET">
                @csrf
                <div class="bg-slate-800 w-fit h-fit rounded-md p-4">
                    <div class="flex flex-col mb-3 mx-1">
                        <div class="flex flex-col items-center mb-8">
                            <h2 class="sm:text-2xl text-[25px] font-bold mb-1">PENGUMUMAN KELULUSAN</h2>
                            <h3 class="sm:text-2xl text-[25px] font-bold">2023/2024</h3>
                        </div>
                        <div class="flex flex-col space-y-6 mb-6">
                            <div class="flex flex-col space-y-2">
                                <label for="NIS" class="text-sm">Nomor Induk Siswa (NIS)</label>
                                <input type="number" name="nisSiswa" id="NIS" class="text-black outline-none px-2.5 py-1.5 rounded-md sm:w-[600px]" placeholder="Contoh : 20201">
                            </div>
                            <div class="flex flex-col space-y-2">
                            <label for="NISN" class="text-sm">Nomor Induk Siswa Nasional (NISN)</label>
                            <input type="number" name="nisnSiswa" id="NISN" class="text-black outline-none px-2.5 py-1.5 rounded-md sm:w-[600px]" placeholder="Contoh : 20201">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <button type="submit" class="bg-blue-600/90 rounded-sm py-2 text-sm hover:bg-blue-600/70">Lihat Hasil Kelulusan</button>
                        <a class="bg-green-600/80 rounded-sm py-2 text-sm hover:bg-green-600/60 text-center" href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" class="inline-block">Cek NISN</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
</div>
@endsection