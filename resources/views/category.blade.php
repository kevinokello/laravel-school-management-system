@extends('layouts.front')
@section('content')
    <br>
    <div class="wm-main-content">
        <div class="wm-main-section wm-service-slider-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-service-layer">
                            <ul class="row">
                                @foreach ($sub_categories as $subcategory)
                                    <a href="{{ url('subcategory/' . $subcategory->id) }}">
                                        <li class="col-md-3">
                                            <i class="wmicon-pen"></i>
                                            <span>{{ $subcategory->name }}</span>
                                            <p>{{ $subcategory->description }}</p>
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
