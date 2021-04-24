<div>

    <form wire:submit.prevent="submit" class="uk-form-stacked uk-form-horizontal uk-margin-large-top khmer-content-font">

        @if($successMessage)
        <div class="uk-margin">
            <div class="uk-alert-primary" uk-alert>
                {{ $successMessage }}
            </div>
        </div>
        @endif

        <div class="uk-margin">
            <label class="uk-form-label uk-text-lead" for="email">{{ __("Email") }}</label>
            <div class="uk-form-controls uk-width-1-2@s">
                <input class="uk-input" id="email" type="text" wire:model="email" />
                @error('email')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="uk-margin-medium">
            <label class="uk-form-label uk-text-lead" for="userMessage">{{ __("Your Message") }}</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" id="userMessage" rows="7" wire:model="userMessage"></textarea>
                @error('userMessage')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-form-controls">
                <button wire:loading.attr="disabled" type="submit" class="uk-button uk-button-secondary uk-text-lead uk-text-uppercase" id="submit" style="color: white">
                    {{__("Send Message")}}
                </button>
            </div>
        </div>
    </form>
</div>