@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center mt-32">
    <div class="w-full max-w-md">
        <form class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4" method="POST" action="{{ route('register')}}">
            @csrf
            <div class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4">
                {{ __('新規登録') }}
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-normal mb-2" for="name">
                    {{ __('名前') }}
                </label>
                <div class="">
                    <input id="name" class="form-control @error('name') is invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ old('name') }}" type="text" required autocomplete="name" autofocus placeholder="名前" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-normal mb-2" for="username">
                    {{ __('メールアドレス') }}
                </label>
                <div class="">
                    <input id="email" class="form-control @error('email') is invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ old('email') }}" type="email" required autocomplete="email" autofocus placeholder="メールアドレス" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-normal mb-2" for="password">
                    {{ __('パスワード') }}
                </label>
                <div class="">
                    <input id="passward" class="form-control @error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="パスワード" name="password" required autocomplete="new-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-normal mb-2" for="password-confirm">
                    {{ __('確認') }}
                </label>
                <div class="">
                    <input id="passward-confirm" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="パスワード（確認）" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button class="px-4 py-2 rounded-full mx-auto text-blue-700 inline-block bg-gray-900 shadow-lg hover:bg-gray-700" type="submit">{{ __('新規登録') }}</button>
                @if (Route::has('passward.request'))
                <a class="inline-block align-baseline font-normal text-sm text-blue-500 hover:text-blue-800" href="{{ route('passward.request')}}">
                    {{ __('Forgot Password?') }}
                </a>
                @endif
            </div>
        </form>

    </div>
</div>
@endsection