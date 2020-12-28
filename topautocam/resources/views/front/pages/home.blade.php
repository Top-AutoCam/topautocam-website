@extends('front.layouts.app')

@section('content')

@include('front/partials/slider')

<div id="primary" class="site-primary">

    <div class="uk-container">
    
        <div class="page-heading">
            <div class="uk-container">
                <div class="inner uk-position-relative">
                    <div>
                        <h4 class="title uk-h2 khmer-title-font">
                            {!! __('Featured') !!}
                        </h4>
                    </div>
    
                    @include('front/partials/breadcrumb')
    
                </div>
            </div>
        </div>
        
        <div class="uk-grid" data-uk-grid="">
            
            <div class="uk-width-expand">
    
                <main id="main" class="site-main">
    
                    @include('front/partials/featured')
    
                    @include('front/partials/services')
    
                    @include('front/partials/promotions')
    
                    @include('front/partials/recents')
    
                    @include('front/partials/most_viewed')

                    @include('front/partials/testimonials')
    
                </main>
    
            </div>
        </div>
    </div>
    
    @include('front/partials/newsletter')

</div>



@endsection