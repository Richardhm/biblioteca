<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $user->createOrGetStripeCustomer();
        if($user->subscribed('default')) {
            return $user->redirectToBillingPortal();
        }
        return $user->newSubscription('default','price_1PNYd3RxJVbmzu3lMnWLg0Yf')->checkout()->redirect();
    }
}
