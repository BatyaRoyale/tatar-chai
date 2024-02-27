@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex flex-col gap-14">
                <h1 class="text-5xl border-b border-white border-opacity-25 pb-7 text-black">Категория өстәү</h1>
                <form action="{{ route('category.store') }}" method="post" class="flex flex-col items-start gap-7">
                    @csrf
                    <input type="text" class="input w-full" name="name" placeholder="Категориянең исеме">
                    @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
                    <button type="submit" class="button">Кушу</button>
                </form>
            </div>
        </div>
    </div>
@endsection