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

        <form id="form" class="px-8 pt-6 mb-4 w-11/12">
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    科目
                </div>
                <button class="text-xs border-2 border-transparent bg-red-600 ml-0 py-1 px-2 font-bold uppercase text-white rounded transition-all hover:border-red-600 hover:bg-white hover:text-red-600">国語</button>
                <button class="text-xs border-2 border-transparent bg-blue-700 ml-0 py-1 px-2 font-bold uppercase text-white rounded transition-all hover:border-blue-700 hover:bg-transparent hover:text-blue-700">数学</button>
                <button class="text-xs border-2 border-transparent bg-pink-400 ml-0 py-1 px-2 font-bold uppercase text-white rounded transition-all hover:border-pink-400 hover:bg-transparent hover:text-pink-400">英語</button>
                <button class="text-xs border-2 border-transparent bg-green-400 ml-0 py-1 px-2 font-bold uppercase text-white rounded transition-all hover:border-green-400 hover:bg-transparent hover:text-green-400">生物</button>
                <button class="text-xs border-2 border-transparent bg-yellow-300 ml-0 py-1 px-2 font-bold uppercase text-white rounded transition-all hover:border-yellow-300 hover:bg-transparent hover:text-yellow-300">日本史</button>
            </div>
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    内容
                </div>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="" required>
            </div>
            <div class="text-center py-6">
                <div class="px-4 py-2 rounded-full mx-auto text-blue-700 inline-block bg-gray-900 hover:bg-gray-700 cursor-pointer" id="close">閉じる</div>
            </div>
        </form>

    </div>

</section>
@endsection