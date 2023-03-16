@extends('layouts.layout')

@section('title', 'Brands')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col--1"><a title="Chevrolet" href="{{ route('categories.single', ['slug' => 'chevrolet']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/chevrolet.png" class="rounded float-left"
                        alt="Chevrolet"></a></div>
            <div class="col col--2"><a title="Ford" href="{{ route('categories.single', ['slug' => 'ford']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/ford.png" class="rounded float-left"
                        alt="Ford"></a></div>
            <div class="col col--3"><a title="Honda" href="{{ route('categories.single', ['slug' => 'honda']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/honda.png" class="rounded float-left"
                        alt="Honda"></a>
            </div>
        </div>

        <div class="row">
            <div class="col"><a title="Hyundai" href="{{ route('categories.single', ['slug' => 'hyundai']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/hyundai.png" class="rounded float-left"
                        alt="Hyundai"></a></div>
            <div class="col"><a title="Kia" href="{{ route('categories.single', ['slug' => 'kia']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/kia.png" class="rounded float-left"
                        alt="Kia"></a>
            </div>
            <div class="col"><a title="Mazda" href="{{ route('categories.single', ['slug' => 'mazda']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/mazda.png" class="rounded float-left"
                        alt="Mazda"></a>
            </div>
        </div>

        <div class="row">
            <div class="col"><a title="Subaru" href="{{ route('categories.single', ['slug' => 'subaru']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/subaru.png" class="rounded float-left"
                        alt="Subaru"></a></div>
            <div class="col"><a title="Toyota" href="{{ route('categories.single', ['slug' => 'toyota']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/toyota.png" class="rounded float-left"
                        alt="Toyota"></a></div>
            <div class="col"><a title="VW" href="{{ route('categories.single', ['slug' => 'vw']) }}"><img
                        width="140" src="/resources/assets/front/images/brands/vw.png" class="rounded float-left"
                        alt="VW"></a>
            </div>
        </div>

        <div class="row">
            <div class="col"><a title="BMW" href="{{ route('categories.single', ['slug' => 'BMW']) }}"><img
                        width="100" src="/resources/assets/front/images/brands/BMW.png" class="rounded float-left"
                        alt="BMW"></a>
            </div>
            <div class="col"><a title="Mercedes"
                    href="{{ route('categories.single', ['slug' => 'mercedes-benz']) }}"><img width="100"
                        src="/resources/assets/front/images/brands/mercedes.svg" class="rounded float-left"
                        alt="Mercedes"></a></div>
            <div class="col"><a title="Mitsubishi"
                    href="{{ route('categories.single', ['slug' => 'mitsubishi']) }}"><img width="140"
                        src="/resources/assets/front/images/brands/mitsubishi.png" class="rounded float-left"
                        alt="Mitsubishi"></a>
            </div>
        </div>
    </div>
@endsection
