@extends('layouts.app')

@section('content')
<link href="{{ asset('css/today.css') }}" rel="stylesheet">
<script src="{{ asset('js/today.js') }}" defer></script>
<div class="container my-24 py-2 border bg-blue-700 rounded-lg">
    <div class="text-center my-6 text-white text-2xl">{{ $today->format('Y年m月d日') }}</div>
    <div class="flex">
        <div class="w-2/12 text-white text-xs my-3">
            <p class="text-center mb-4">5:00</p>
            <p class="text-center mb-4">6:00</p>
            <p class="text-center mb-4">7:00</p>
            <p class="text-center mb-4">8:00</p>
            <p class="text-center mb-4">9:00</p>
            <p class="text-center mb-4">10:00</p>
            <p class="text-center mb-4">11:00</p>
            <p class="text-center mb-4">12:00</p>
            <p class="text-center mb-4">13:00</p>
            <p class="text-center mb-4">14:00</p>
            <p class="text-center mb-4">15:00</p>
            <p class="text-center mb-4">16:00</p>
            <p class="text-center mb-4">17:00</p>
            <p class="text-center mb-4">18:00</p>
            <p class="text-center mb-4">19:00</p>
            <p class="text-center mb-4">20:00</p>
            <p class="text-center mb-4">21:00</p>
            <p class="text-center mb-4">22:00</p>
            <p class="text-center mb-4">23:00</p>
            <p class="text-center mb-4">0:00</p>
            <p class="text-center mb-4">1:00</p>
            <p class="text-center mb-4">2:00</p>
            <p class="text-center mb-4">3:00</p>
            <p class="text-center mb-4">4:00</p>
        </div>
        <div class="text-center ml-6 my-4 w-10/12">
            @foreach($plans as $plan)
            <p class="{{ $plan->subject->bgColor ?? '' }} mb-0 text-xs border-2 border-transparent py-1 px-2 font-bold text-white transition-all mr-2">
                {{ $plan->content }}
            </p>
            @endforeach
        </div>
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
                @each('parts._subject_label', $subjects, 'subject')
                @error('subject')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    時間
                </div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="number" id="number" type="number" min="0" max="23" placeholder="">
                <div class="inline-block">:</div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="number" id="number" type="number" min="0" max="59" placeholder="">
                <div class="inline-block">~</div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="number" id="number" type="number" min="0" max="23" placeholder="">
                <div class="inline-block">:</div>
                <input class="inline-block text-center text-xs py-1 shadow appearance-none border rounded w-9 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="number" id="number" type="number" min="0" max="59" placeholder="">
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
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
                <div class="inline-block">~</div>
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
                <input class="inline-block shadow appearance-none border text-xs text-center w-7 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" min="0" max="9" placeholder="">
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