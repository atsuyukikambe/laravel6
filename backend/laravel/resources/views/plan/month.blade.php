@extends('layouts.app')

@section('content')
<link href="{{ asset('css/month.css') }}" rel="stylesheet">
<script src="{{ asset('js/month.js') }}" defer></script>
<div class="container my-24 py-2 border bg-blue-700 rounded-lg">
    <div class="text-center my-6 text-white text-2xl">{{ $this_month->format('Y年m月') }}</div>
    <div class="flex">
    </div>
    <div class="text-center">
        <button class="px-4 py-2 rounded-full mx-auto text-blue-700 inline-block bg-gray-900 hover:bg-gray-700" id="open">追加</button>
    </div>
</div>
<div id="mask" class="hidden"></div>
<section id="modal" class="hidden" @if ($errors->count()) data-init="open" @endif>
    <div class=" flex items-center justify-center">
        <form id="form" class="px-8 pt-6 mb-4 w-11/12" action="{{ route('plan.today') }}" method="POST">
            @csrf
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    科目
                </div>
                @error('subject')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    時間
                </div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="start-hour" id="number" type="number" min="0" max="23" placeholder="">
                <div class="inline-block">:</div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="start-minute" id="number" type="number" min="0" max="59" placeholder="">
                <div class="inline-block">~</div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="end-hour" id="number" type="number" min="0" max="23" placeholder="">
                <div class="inline-block">:</div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="end-minute" id="number" type="number" min="0" max="59" placeholder="">
            </div>
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    内容
                </div>
                <input id="content" type="text" name="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('content')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    ページ数
                </div>
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page1" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page2" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page3" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page4" id="name" type="number" min="0" max="9" placeholder="">
                <div class="inline-block">~</div>
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page5" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page6" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page7" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="page8" id="name" type="number" min="0" max="9" placeholder="">
                @error('page1')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center py-6">
                <button type="submit" class="text-xs px-3 py-2 rounded-full mx-auto text-blue-700 inline-block bg-gray-900 hover:bg-gray-700 cursor-pointer">
                    決定
                </button>
                <button id="close" type="button" class="text-xs px-3 py-2 rounded-full mx-auto text-green-500 inline-block bg-gray-900 hover:bg-gray-700 cursor-pointer">
                    キャンセル
                </button>
            </div>
        </form>
    </div>
</section>
@endsection