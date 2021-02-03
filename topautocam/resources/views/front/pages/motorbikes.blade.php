@extends('front.layouts.app')

@section('content')

@include('front/partials/slider')

<div id="primary" class="site-primary">

    <div class="uk-container">

        <div class="uk-grid" data-uk-grid="">

            <div class="uk-width-expand">

                <main id="main" class="site-main">

                    @include('front/partials/recents')

                </main>

            </div>

        </div>

    </div>
    
</div>

@endsection