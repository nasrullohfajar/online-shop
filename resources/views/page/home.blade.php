@extends('layout.layout')

@section('content')

<div class="flex flex-col py-5 gap-y-5 max-w-[1200px] mx-auto">
    <div class="bg-gray-200 rounded-xl min-h-[420px] min-w-full" style="background-image: url('image/hero.jpg'); background-size: cover; background-position: top;"></div>

    <div class="grid gap-5 grid-cols-5">
        @foreach ($products as $product)
        <button>
            <div class="bg-white border rounded-lg shadow-lg text-left">
                <div class="w-full h-52 bg-gray-200 rounded-t-lg" style="background-image: url({{$product->image}}); background-size: cover; background-position: center;"></div>

                <div class="p-3">
                    <p class="text-ellipsis overflow-hidden whitespace-nowrap mb-2">{{$product->name}}</p>
                    <p class="font-bold text-sm">Rp {{number_format($product->price,0,",", ".")}}</p>
                </div>
            </div>
        </button>
        @endforeach
    </div>


</div>


@endsection