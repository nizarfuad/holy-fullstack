{{-- INI KALO USER SUDAH LOGIN  --}}
@extends('layouts.app')

@section('content')
    <div class="min-h-screen relative" style="background-image: url('/images/background-mc.png');">
        {{-- CONTENT --}}
        <h1 class="text-3xl text-center font-bold text-white pt-10">Donation Ranks</h1>
        <div class="container mx-auto px-20 py-8 mt-5">
            <div class="flex flex-col lg:flex-row gap-6">
                {{-- SIDEBAR --}}
                <div
                    class="w-full grid grid-cols-1 gap-3 w-2/6 xl:w-2/6 lg:w-2/4 md:w-2/2 sm:w-2/2 rounded-lg text-center shadow max-h-30  mb-15">
                    <div class="flex rounded-lg flex-col bg-navbar/30 item-center text-center backdrop-blur-md ">
                        <div class="flex-row flex item-center gap-6 p-6 w-full justify-center md:gap-10 ">
                            <img src="https://mc-heads.net/avatar/{{ Auth::guard('luckperms')->user()->username ?? 'MHF_Pig' }}"
                                alt="User Skin" class="w-12 h-12 mb-3 rounded shadow">
                            <div class="px-3">
                                <p class="text-1xl text-yellow-400 font-bold text-left">
                                    {{ Auth::guard('luckperms')->user()->group ?? 'Not logged' }}
                                </p>
                                <p class="text-white text-2xl font-bold text-left">
                                    {{ Auth::guard('luckperms')->user()->username ?? 'Guest' }}
                                </p>
                            </div>

                            @if (Auth::guard('luckperms')->check())
                                <a href="{{ route('lp-logout') }}" title="Logout" class="text-2xl text-red-500 mt-5"><i
                                        class="fa-solid fa-right-from-bracket"></i></a>
                            @else
                                <a href="{{ route('lp-loginPage') }}" title="Login" class="text-2xl text-green-500 mt-5">
                                    <i class="fa-solid fa-right-from-bracket"></i></a>
                            @endif


                        </div>
                        <hr class="my-4 border-white w-full">
                        <div class="flex flex-row gap-10 text-white w-full px-4 mb-4">
                            <a class="flex-1 hover:bg-blue-700 duration-500 p-2 px-2 rounded-2xl" href="">Rank</a>
                            <a class="flex-1 hover:bg-blue-700 duration-500 p-2 px-2 rounded-2xl" href="">Event</a>
                            <a class="flex-1 hover:bg-blue-700 duration-500 p-2 px-2 rounded-2xl" href="">Key</a>
                        </div>
                    </div>

                </div>

                {{-- MAIN --}}
                <div class="w-full md:w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    @foreach ($ranks as $r)
                        <div
                            class="relative text-center bg-navbar/30 backdrop-blur-md rounded-lg p-4 shadow-lg hover:-translate-y-3 transition-transform duration-300">
                            <img src="{{ url('/storage/' . $r->image_url) }}" alt="{{ $r->image_url }}"
                                class="w-full h-32 object-contain mb-4 item-center">
                            <h3 class="text-lg font-semibold text-white mb-2">{{ $r->display }}</h3>
                            @if (!$r->diskon == null)
                                <p class="text-gray-400 line-through font-bold">
                                    Rp {{ $r->harga }}
                                </p>
                            @else
                            @endif

                            <div class="flex items-center justify-center space-x-2 mb-4">
                                <p class="text-yellow-400 font-bold">Rp {{ $r->final_price }}
                                </p>
                                @if (!$r->diskon == null)
                                    {!! '<p class="text-red-400">-' . $r->diskon . '%</p>' !!}
                                @else
                                @endif


                            </div>
                            <button onclick="openModal({{ $r->id }})"
                                class="bg-sky-500 hover:bg-sky-600 text-white px-3 py-1 rounded transition duration-300">Lihat
                                Fitur</button>
                            @if (Auth::guard('luckperms')->check())
                                <button onclick="openModal({{ $loop->index }})"
                                    class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded transition duration-300">Beli</button>
                            @else
                                <button class="bg-blue-500 text-white px-3 py-1 rounded opacity-50 cursor-not-allowed">Login
                                    untuk beli</button>
                            @endif

                        </div>
                        {{-- MODAL --}}
                        <div id="rankModal"
                            class="fixed inset-0 bg-black/10 backdrop-blur-md hidden z-50 flex items-center justify-center">
                            <div id="modalContent"
                                class="bg-white p-6 rounded-lg max-w-xs w-full transform scale-95 opacity-0 transition duration-300">
                                <h2 id="modalRankName" class="text-2xl font-bold mb-4 text-center text-black"></h2>
                                <ul id="modalFeatures" class="w-full px-5 text-gray-700 list-disc"></ul>
                                <button onclick="closeModal()"
                                    class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 w-full">Tutup</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    const ranks = @json($ranks);

    function openModal(id) {
        const rank = ranks.find(r => r.id === id);
        document.getElementById('modalRankName').innerText = rank.name;
        const featuresContainer = document.getElementById('modalFeatures');
        featuresContainer.innerHTML = '';

        rank.features.forEach(feature => {
            const li = document.createElement('li');
            li.innerHTML =
                `<li class="">${feature}</li>`;
            featuresContainer.appendChild(li);
        });

        const modal = document.getElementById('rankModal');
        const modalContent = document.getElementById('modalContent');
        modal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById('rankModal');
        const content = document.getElementById('modalContent');

        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>
