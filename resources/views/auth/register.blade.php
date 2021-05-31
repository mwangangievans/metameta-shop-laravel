@extends('layouts.frontend')

@section('content')

<div class="login-container">
            <h1>metameta shop</h1>
                    <form method="POST" action="{{ route('login') }}" class="bg-pink shadow rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                        <label class="block text-black-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Name
                        </label>
            </div>
                <div class="md:w-2/3">
                        <input name="name" class="bg-gray-900 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
               </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                        <label class="block text-black-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Email
                      </label>
            </div>
                <div class="md:w-2/3">
                        <input name="email" class="bg-gray-900 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                </div>
        </div>
                                        <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                        <label class="block text-black-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                            Password
                                        </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <input name="password" class="bg-gray-900 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="password">
                                        @error('password')
                                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                        @enderror
                                    </div>
                                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-black-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Phone
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input name="phone" class="bg-gray-900 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                 <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Address
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="address" class="bg-gray-900 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ old('current_address') }}">
                        @error('address')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Gender
                        </label>
                         {{-- </div> --}}
                            <div class="md:w-2/3">
                                    <div class="flex flex-row items-center">
                                        <label class="block text-black-800  font-bold">
                                             <input name="gender" class="mr-2 leading-tight" type="radio" value="male">
                                                <span class="text-sm">Male</span>
                                        </label>
                                            <label class="ml-4 block text-black-800  font-bold">
                                            <input name="gender" class="mr-2 leading-tight" type="radio" value="female">
                                             <span class="text-sm">Female</span>
                                             </label>
                                         <label class="ml-4 block text-black-800  font-bold">
                                            <input name="gender" class="mr-2 leading-tight" type="radio" value="other">
                                        <span class="text-sm">Other</span>
                                         </label>
                                    </div>
                                     @error('gender')
                                  <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="md:w-2/3">
                    {{-- <div class="flex items-center justify-between mb-6"> --}}
                        <div style="display: block; margin-top: 120px; float: right;" class="flex flex-wrap">
                            <button class="bg-blue-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none      focus:shadow-outline" type="submit">

                                <a href="/register">Register</a>
                            </button>
                        </div>
                    {{-- </div> --}}
                 </div>

                    </form>

{{-- </div> --}}
</div>


@endsection
