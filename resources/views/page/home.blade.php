@extends('layout.layout')

@section('content')

<div class="flex flex-col py-5 gap-y-5 max-w-[1200px] mx-auto">
    <div class="bg-hero rounded-xl min-h-[420px] min-w-full"></div>

    <div class="grid gap-5 grid-cols-5">
        <div class="bg-white border rounded-lg shadow-lg">
            <div class="w-full h-52 bg-blue-900 rounded-t-lg"></div>
            <div class="p-3">
                <p class="text-ellipsis overflow-hidden whitespace-nowrap mb-2">Title</p>
                <p class="font-bold text-sm">Price</p>
            </div>
        </div>
    </div>
</div>


@endsection