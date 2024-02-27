@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <div>
        <div class="container py-24 flex flex-col gap-12">
            <div class="flex flex-col gap-7">
                <div class="flex flex-col gap-4 border-b border-white border-opacity-25 pb-8">
                    <h1 class="text-5xl">Товарлар каталогы</h1>
                    <p>Иң яхшы товарлар бездә генә</p>
                </div>
                <div class="flex items-center gap-7">
                    <a href="{{ route('index.catalog') }}" class="button">Барча</a>
                    @foreach($categories as $category)
                        <a href="?category={{ $category->id }}" class="button">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-3 gap-7">
                @foreach($products as $product)
                    <div class="flex flex-col gap-7 border border-black border-opacity-50 rounded py-5 px-5">
                        <div class="h-[300px] w-full">
                            <img src="{{ $product->getImageUrl() }}" alt="Изображение" class="h-full w-full object-cover rounded-t">
                        </div>
                        <div class="flex flex-col items-center gap-7 pb-8 text-center">
                            <div class="flex flex-col gap-4">
                                <h3 class="text-xl text-black">{{ $product->name }}</h3>
                                <p class="text-black">{{ $product->price }} руб.</p>
                            </div>
                            <form action="" method="post">
                                @csrf
                                <button type="submit" class="button">Кәрзингә</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection