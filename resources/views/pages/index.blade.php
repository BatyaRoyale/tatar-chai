@extends('layouts.app')
@section('title','Главная страница')

@section('content')
    <div class="text-black">
        <div class="container py-24">
            <div class="flex justify-between items-center gap-7">
                <div class="flex items-start flex-col gap-7 w-1/2">
                    <div class="flex flex-col gap-4">
                        <h1 class="text-5xl">Иң яхшы чәйләр сату</h1>
                        <p class="text-lg">татар чәйе - күпьеллык тәҗрибәсе булган яшь һәм перспективалы компания. Сыйфатны саклап базарда иң түбән бәяләр тәкъдим итәбез</p>
                    </div>
                    <div class="flex flex-col justify-center items-center m-auto">
                        <a href="" class="button bg-buttonImg bg-contain text-white flex flex-col items-end relative h-12">
                            <span class="absolute left-1/2 -translate-x-1/2 bottom-[1px] text-center ">
                                сатып алырга
                            </span>    
                        </a>
                    </div>
                    
                    
                </div>
                <div class="w-1/2">
                    <img src="{{asset('public/assets/img/banner.png')}}" alt="Изображение" class="">
                </div>
            </div>
        </div>
    </div>
    <div class="text-black">
        <div class="container py-24">
            <div class="flex flex-col items-start gap-4">
                <h3 class="text-3xl pb-5">Безнең турында</h3>
                <p class="text-lg text-left">Татар чәйе-традицион татар чәйен җитештерү һәм сатуга махсуслашкан чәй компаниясе. Компания 2015 елда Россиянең Казан шәһәрендә нигезләнгән. Ул чәйнең киң ассортиментын тәкъдим итә, шул исәптән кара, яшел, ак һәм җиләк-җимеш чәйләре, шулай ук үлән катнашмалары. Барлык чәйләр дә ясалма тәмләр һәм буяулар кулланмыйча, югары сыйфатлы табигый ингредиентлардан ясала. Компания шулай ук клиентларына чәйнек, чынаяк һәм тәлинкәләр кебек төрле чәй аксессуарларын тәкъдим итә. Татар чәйе Казанда һәм Россиянең башка шәһәрләрендә чәй яратучылар өчен популяр урын булып тора.</p>
            </div>
        </div>
    </div>
   
@endsection