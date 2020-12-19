@extends('layouts.app')

@section('content')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
<div class="flex text-center pt-0">
    <h1 class="text-2xl m-auto tracking-wide py-14">限られた時間で<br>最大限の効果を</h1>
</div>
<div class="bg">
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-6xl text-center tracking-wide py-52">限られた時間で<br>最大限の効果を</h1>
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                        <p class="leading-relaxed text-left">無駄な時間をかけることなくシンプルに、見やすく計画を立てることができます。<br>計画は1日と１ヶ月の計画を立てることが可能です。</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/300x300">
                        <p class="leading-relaxed text-left">他の受験生がどれくらい学習しているかを共有し合うことで、お互いに切磋琢磨し合える関係を築くことができます。</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/305x305">
                        <p class="leading-relaxed text-left">一つのタスクに時間を設けて取り組むことで、集中力を維持することができます。<br>復習するときは前回やった時よりも短い時間で設定することで、より効果が上がります。<br>集中力が長く続かない場合はインターバルタイマーを使ってみましょう。</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/305x305">
                        <p class="leading-relaxed text-left">学習をより効率よく進められるおすすめの動画やブログなどは積極的に共有していきましょう。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection