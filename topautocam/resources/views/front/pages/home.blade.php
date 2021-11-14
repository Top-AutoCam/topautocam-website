@extends('front.layouts.app')
@section('content')

<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <a href="/">
        <p>New Promotion: <strong> New Year Promotion 10% </strong></p>
    </a>
    <a href="/cars">
         <p><strong>Stock New Updated.</strong></p>
    </a>
    <a href="/blog">
        <hp><strong>Blog New Updated.</strong></p>
    </a>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">OK</button>
        </p>
    </div>
</div>

@include('front.partials.slider')

@include('front.partials.car_model')
<div id="primary" class="site-primary">
    <div class="uk-container">
        <div class="page-heading">
            <div class="uk-container">
                <div class="inner uk-position-relative">
                    <div>
                        <h4 class="title uk-h2 title-font khmer-title-font textNoBold">
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
    
                    @include('front.partials.featured')
    
                    @include('front.partials.promotions')
    
                    @include('front.partials.recents')
    
                    @include('front.partials.services')
    
                    @include('front.partials.most_viewed')

                    @include('front.partials.testimonials')
    
                </main>
    
            </div>
        </div>
    </div>
</div>


<livewire:subscribe/>


@endsection