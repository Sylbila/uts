@extends('uts.jadwal')
@section('contentuts2')
<div class="p-8 space-y-8">  
    <h3 class="font-semibold">Nama: Sylbila Najla Sobia Naim</h3>
    <h3 class="font-semibold">Nim: 2201010695</h3>
    <h3 class="font-semibold">Dosen Pengampu: I Nyoman Agus Suarya Putra,S.Sn.,M.Sn.</h3>
    <h2 class="text-xl font-semibold">Jadwal Matakuliah</h2>
    <hr class="border-black shadow-sm" />
    <table class="border-collapse border border-slate-500 w-full">
      <thead>
        <tr class="border border-slate-600 text-xs sm:text-base"> 
            <th class="border border-slate-600">No</th>
            <th class="border border-slate-600">Kode MK</th>
            <th class="border border-slate-600">Matakuliah</th>
            <th class="border border-slate-600">SKS</th>
            <th class="border border-slate-600">Kelas</th>
            <th class="border border-slate-600">Enrollment Key</th>
            <th class="border border-slate-600">Dosen</th>
        </tr>
      </thead>
      <tbody>
      @foreach($data as $jadwal)
        <tr class="border border-slate-600 hover:bg-gray-300 duration-500 text-xs">
        <td class="border border-slate-600 p-1">{{ $jadwal['No'] }}</p>
        <td class="border border-slate-600 p-1">{{ $jadwal['kode_mk'] }}</p>
          <td class="border border-slate-600 p-1">{{ $jadwal['matkul'] }}</p>
          <td class="border border-slate-600 p-1">{{ $jadwal['sks'] }}</p>
          <td class="border border-slate-600 p-1">{{ $jadwal['kelas'] }}</p>
          <td class="border border-slate-600 p-1 text-blue-500 hover:underline">{{ $jadwal['enrollment'] }}</p>
          <td class="border border-slate-600 p-1">{{ $jadwal['dosen'] }}</p>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
@endsection