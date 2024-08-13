<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
</head>
<body>
  {{-- Header --}}
    <div class="relative">
        <video class="inset-0 w-full h-screen object-cover" autoplay loop muted playsinline>
            <source src="{{ asset('assets/4249505-hd_1280_720_30fps.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute top-0 bg-black opacity-70 w-full h-full">
        </div>
        <div class="absolute top-0 w-full h-full z-10 grid place-content-center">
            <p class="text-white text-7xl font-bold max-[391px]:text-2xl">API BASE WILAYAH INDONESIA</p>
            <div class="flex gap-2">
                <p class="text-white font-medium text-3xl">By HugoStudio</p>
                <img src="{{ asset('assets/LOGO HUGO STUDIO.png') }}" width="100" alt="" srcset="">
            </div>
        </div> 
        <a href="#tentang" class="absolute top-2 left-2 text-white z-20"><i class="fa-solid fa-circle-info"></i></a>
    </div>
  {{-- Main --}}
  <main class="mt-20 p-3">
    <div class="w-full border-b border-b-slate-500 pb-3">
        <select class="w-56 border border-slate-400 px-2 text-center" id="">
            <option value="#">--- Pilih Versi ---</option>
            <option value="v1" selected>API V1</option>
        </select>
    </div>
    <div class="p-3">
        
         <div class="flex items-center gap-3">
             <div class="w-4 h-4 bg-sky-600"></div>
                <p>Mencari Data Desa</p>
            </div>
        <div class="mx-7 mt-3">
            {{-- GET DESA --}}
            <p>Ambil data desa, kecamatan, kabupaten dan provinsi terkait desa yang dicari untuk input autocomplete lengkap dengan kode wilayah </p>
            <div class="flex items-center gap-3">
                <p>CODE : 200</p>
                <div class="w-4 h-4 rounded-full bg-green-500"></div>
            </div>
            <div class="w-2/5 max-[391px]:block max-[391px]:w-full  flex items-center gap-2 border border-gray-300 rounded-md overflow-hidden bg-gray-100 mt-4">
                <div class="bg-gray-300 p-2 max-[391px]:flex max-[391px]:px-2 max-[391px]:items-center ">
                    <p>Request Url</p>
                    <button onclick="copyText()" class="ms-auto max-[391px]:block min-[392px]:hidden"><i class="fa-solid fa-copy"></i></button>
                </div>
                <p id="textToCopy" class="max-[391px]:text-sm max-[391px]:p-2" >https://base-wilayah.lumbungdata.id/api/get-desa</p>
                <button onclick="copyText()" class="ms-auto d-block p-2 px-4 max-[391px]:hidden"><i class="fa-solid fa-copy"></i></button>
            </div>
            <div x-data="{ open: false }" class="w-full mt-3">
                <div class="bg-gray-300 flex items-center p-1 px-2">
                    <button class="w-full text-left" @click="open = ! open" onclick="getDesa()">JSON</button>
                    <i @click="open = ! open" class="fa-solid fa-chevron-down cursor-pointer"></i>
                </div>
                <div x-show="open" class="whitespace-pre-wrap bg-gray-100 max-[391px]:text-sm" id="getDesaJson">
                </div>
            </div>
        </div>
    </div>
    <div x-data="{ open: false }" class="mt-72" id="tentang">
        <button @click="open = ! open" class="mx-auto block w-28 p-1 text-white font-medium rounded-2xl bg-red-500">Tentang</button>
        <div x-show="open" class="border border-black p-2 rounded-ss-lg rounded-se-lg mt-2">
            <span class="text-sm">API BASE WILAYAH ini dibuat dan dimodifikasi oleh tim Hugo Studio, berdasarkan source dari <a class="italic text-blue-500" href="https://raw.githubusercontent.com/kodewilayah/permendagri-72-2019/main/dist/base.csv">https://raw.githubusercontent.com/kodewilayah/permendagri-72-2019/main/dist/base.csv</a> atau <a class="italic text-blue-500" href="https://github.com/cahyadsn/wilayah">https://github.com/cahyadsn/wilayah</a> </span>
        </div>
    </div>
  </main>
  

<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Hugo Studio</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#tentang" class="hover:underline">Tentang</a>
        </li>
    </ul>
    </div>
</footer>

  <script>
    const jsonDesa = "{{ asset('assets/json/get-desa.json') }}";
</script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>