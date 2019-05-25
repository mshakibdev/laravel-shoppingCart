<?php
    /**
     * Created by PhpStorm.
     * User: Sayem
     * Date: 25-May-19
     * Time: 8:27 PM
     */
    
    namespace App\Http\Controllers;
    
    
    namespace App\Http\Controllers;
    
    use App\Cart;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    
    use Stripe;
    
    class StripePaymentController extends Controller
    {
        /**
         * success response method.
         *
         * @return \Illuminate\Http\Response
         */
        public function stripe()
        {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice;
            return view('shop.stripe',compact('total'));
            //return view('shop.stripe');
        }
        
        /**
         * success response method.
         *
         * @return \Illuminate\Http\Response
         */
        public function stripePost(Request $request)
        {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
            ]);
            
            Session::flash('success', 'Payment successful!');
            return back();
        }
    }