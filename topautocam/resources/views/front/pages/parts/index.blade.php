@extends('front.layouts.app')

@section('content')

@include('front/partials/slider')

<div id="primary" class="site-primary">
    <div class="uk-container">

        <div class="page-heading">
            <div class="uk-container">
                <div class="inner uk-position-relative">
                    <div>
                        <h4 class="title uk-h2 title-font">Parts</h4>
                    </div>
                    <div>
                        <ul class="uk-breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/parts">Parts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <livewire:part-listing/>
    </div>

</div>

@endsection