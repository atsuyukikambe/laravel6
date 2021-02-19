@extends('layouts.app')

@section('content')
<link href="{{ asset('css/today.css') }}" rel="stylesheet">
<script src="{{ asset('js/today.js') }}" defer></script>
<div class="container my-24 py-2 border bg-blue-700 rounded-lg">
    <div class="text-center my-6 text-white text-2xl">{{ $today->format('Y年m月d日') }}</div>
    <div class="text-center">
        <button class="px-4 py-2 rounded-full mx-auto text-blue-700 inline-block bg-gray-900 hover:bg-gray-700" id="open">追加</button>
    </div>
</div>
<div id="mask" class="hidden"></div>
<section id="modal" class="hidden">
    <div class=" flex items-center justify-center">

        <form id="form" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">CUESTIONARIO DE PREGUNTAS Y ENVÍO POR WHATSAPP</h1>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nombre
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="text-center py-6">
                <div class="px-4 py-2 rounded-full mx-auto text-blue-700 inline-block bg-gray-900 hover:bg-gray-700" id="close">閉じる</div>
            </div>
        </form>

    </div>

</section>
@endsection