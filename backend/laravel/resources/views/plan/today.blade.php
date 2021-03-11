@extends('layouts.app')

@section('content')
<link href="{{ asset('css/today.css') }}" rel="stylesheet">
<script src="{{ asset('js/today.js') }}" defer></script>
<div class="container my-24 py-2 border bg-blue-700 rounded-lg">
    <div class="text-center my-6 text-white text-2xl">{{ $today->format('Y年m月d日') }}</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-white">plan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plans as $plan)
            <tr>
                <td>
                    <p class="text-white">
                        <span class="text-xs border-2 border-transparent bg-black py-1 px-2 font-bold text-white rounded transition-all mr-2">
                            {{ $plan->subject }}
                        </span>
                        {{ $plan->content }}
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
                <label class="text-xs border-2 border-transparent bg-red-600 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Japanese" type="checkbox" value="国語" class="w-0">
                    国語
                </label>
                <label class="text-xs border-2 border-transparent bg-pink-600 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="English" type="checkbox" value="英語" class="w-0 opacity-0">
                    英語
                </label>
                <label class="text-xs border-2 border-transparent bg-blue-700 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Math" type="checkbox" value="数学" class="w-0 opacity-0">
                    数学
                </label>
                <label class="text-xs border-2 border-transparent bg-green-400 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Biology" type="checkbox" value="生物" class="w-0 opacity-0">
                    生物
                </label>
                <label class="text-xs border-2 border-transparent bg-green-400 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Chemistry" type="checkbox" value="化学" class="w-0 opacity-0">
                    化学
                </label>
                <label class="text-xs border-2 border-transparent bg-green-400 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Physics" type="checkbox" value="物理" class="w-0 opacity-0">
                    物理
                </label>
                <label class="text-xs border-2 border-transparent bg-yellow-300 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Japanese-history" type="checkbox" value="日本史" class="w-0 opacity-0">
                    日本史
                </label>
                <label class="text-xs border-2 border-transparent bg-yellow-300 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="World-history" type="checkbox" value="世界史" class="w-0 opacity-0">
                    世界史
                </label>
                <label class="text-xs border-2 border-transparent bg-yellow-300 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Geography" type="checkbox" value="地理" class="w-0 opacity-0">
                    地理
                </label>
                <label class="text-xs border-2 border-transparent bg-yellow-300 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Politics-and-economy" type="checkbox" value="政治・経済" class="w-0 opacity-0">
                    政治・経済
                </label>
                <label class="text-xs border-2 border-transparent bg-yellow-300 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="Ethics" type="checkbox" value="倫理" class="w-0 opacity-0">
                    倫理
                </label>
                <label class="text-xs border-2 border-transparent bg-gray-400 ml-0 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
                    <input name="subject" id="others" type="checkbox" value="その他" class="w-0 opacity-0">
                    その他
                </label>
                @error('subject')
                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="text-gray-700 text-sm mb-2">
                    時間
                </div>
                <input class="inline-block shadow appearance-none border rounded w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="number" id="number" type="number" min="0" max="23" placeholder="">
                <div class="inline-block">:</div>
                <input class="inline-block shadow appearance-none border rounded w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="number" id="name" type="number" placeholder="">
                <div class="inline-block px-1">~</div>
                <input class="inline-block shadow appearance-none border rounded w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <div class="inline-block">:</div>
                <input class="inline-block shadow appearance-none border rounded w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
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
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <div class="inline-block px-1">~</div>
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
                <input class="inline-block shadow appearance-none border w-3 py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="number" placeholder="">
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