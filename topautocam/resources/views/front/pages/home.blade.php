@extends('front.layouts.app')

@section('content')

    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe our Newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

     <!-- This is the modal -->
     <button class="md-btn md-btn-success" id="openmodal" data-uk-modal="{target:'modal-example'}">Open Dialogue</button>
     <div id="modal-example" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Headline</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">OK</button>
            </p>
        </div>
    </div>


@include('front.partials.slider')

<div id="primary" class="site-primary">

    <div class="uk-container">
        <div class="page-heading">
            <div class="uk-container">
                <div class="inner uk-position-relative">
                    <div>
                        <h4 class="title uk-h2 title-font">
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