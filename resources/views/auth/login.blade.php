@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white p-6 w-6/12 rounded-lg">
            @if (session('status'))
                <div class="text-red-400 text-center mb-4 text-sm">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-400 @enderror" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-400 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-400 @enderror">

                    @error('password')
                        <div class="text-red-400 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit"
                        class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
