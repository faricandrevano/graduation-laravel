@extends('index')
@section('title')
    COUNTDOWN
@endsection
@section('app')
<div class="relative w-screen h-screen bg-black flex justify-center items-center sm:overflow-hidden overflow-scroll">
    <div class="w-fit h-fit text-white">
        <div class="bg-[#095496] flex sm:space-x-28 space-x-16 justify-center p-4 font-bold">
            <div>
                <p id="hari" class="text-number"></p>
                <p class="text-aplhabet">Hari</p>
            </div>
            <div>
                <p id="jam" class="text-number"></p>
                <p class="text-aplhabet">Jam</p>
            </div>
            <div>
                <p id="menit" class="text-number"></p>
                <p class="text-aplhabet">Menit</p>
            </div>
            <div>
                <p id="detik" class="text-number"></p>
                <p class="text-aplhabet">Detik</p>
            </div>
        </div>
        <div class="bg-white p-4 font-semibold flex flex-wrap sm:flex-nowrap sm:justify-between">
            <span class="text-black sm:text-[14px] text-[12px] mr-4">PENGUMUMAN KELULUSAN TAHUN 2024</span>
            <span class="text-slate-400 sm:text-[14px] text-[12px]">DIBUKA TANGGAL 6 MEI 2024 00:00 WIB</span>
        </div>
    </div>
</div>
<script src="js/app.js"></script>
@endsection
