<div id="newsletter" class="site-newsletter">
    <div class="uk-container">
    @if($successMessage)
        <div class="uk-margin">
            <div class="uk-alert-primary" uk-alert>
                {{ $successMessage }}
            </div>
        </div>
    @elseif ($aleadyExist)
        <div class="uk-margin">
            <div class="uk-alert-primary" uk-alert>
                {{ $successMessage }}
            </div>
        </div>
    @endif
        <div class="inner uk-position-relative">
            <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid="">
                <form wire:submit.prevent="submit" class="form-container uk-width-expand@m" action="/">
                    <div class="uk-width-auto@m khmer-title-font">
                        <h4>{{ __("JOIN US TODAY") }}</h4>
                        <p>{{ __("Receive the latest posts via email") }}</p>
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" class="uk-input" name="fullname" placeholder={{ __("Name") }} /> -->
                        <div class="uk-form-controls uk-width-2-2@s uk-margin-small-left">
                            <input class="uk-input" id="name" type="text" wire:model="name" placeholder={{ __("Name") }} />
                            @error('name')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="uk-form-controls uk-width-2-2@s uk-margin-small-left">
                            <input class="uk-input" id="email" type="email" wire:model="email" placeholder={{ __("Email") }} />
                            @error('email')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit"wire:loading.attr="disabled" id="submit" class="uk-button uk-button-secondary khmer-title-font" value={{ __("​Subscribe") }} />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>