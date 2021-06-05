<?php

namespace App\Observers;

use App\Models\Promotion;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankYouMailable;
use App\Mail\InvitationEmail;

class PromotionObserver
{
    /**
     * Handle the promotion "created" event.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return void
     */
    public function created(Promotion $promotion)
    {
        $subscribes = Subscribe::all();
        $promotion = Promotion::latest()->take(1)->get();
        $to = config("MAIL_FROM_ADDRESS");
        if ($to == null) {
            $to = "webmaster@topautocam.com";
        }
        foreach($subscribes as $subscribe){
            Mail::to($subscribe->email)->send(
                new InvitationEmail($promotion)
            );
            
        } 
    }

    /**
     * Handle the promotion "updated" event.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return void
     */
    public function updated(Promotion $promotion)
    {
        //
    }

    /**
     * Handle the promotion "deleted" event.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return void
     */
    public function deleted(Promotion $promotion)
    {
        //
    }

    /**
     * Handle the promotion "restored" event.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return void
     */
    public function restored(Promotion $promotion)
    {
        //
    }

    /**
     * Handle the promotion "force deleted" event.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return void
     */
    public function forceDeleted(Promotion $promotion)
    {
        //
    }
}
