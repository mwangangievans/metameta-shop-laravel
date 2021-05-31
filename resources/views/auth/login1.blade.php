@extends('layouts.frontend')

@section('content')

<div class="login-container">
            <h1>metameta shop</h1>
                    <form method="POST" action="{{ route('login') }}" class="bg-pink shadow rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="emailaddress">
                                Email Address
                            </label>
                            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="emailaddress" placeholder="email@example.com">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-black-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="******************">
                            @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-500 font-bold">
                                <input class="mr-2 leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="text-sm text-white font-bold">
                                    Remember Me
                                </span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex flex-wrap items-center">
                            <button class="bg-pink-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Log in
                            </button>
                            </div>
                            <div class="flex flex-wrap items-center">
                            <button class="bg-blue-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Register
                            </button>
                            </div>
                        </div>


                    </form>

{{-- </div> --}}
</div>


@endsection
