<?php

namespace App\Http\Controllers\stripe;

use App\Http\Controllers\Controller;
use App\Models\Gateway;
use App\Models\Order;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public static function process($payment)
    {
        $StripeAcc = json_decode($payment->paymentGateway->parameter);
        $alias = $payment->gateway;
       
        // $general = gs();
        \Stripe\Stripe::setApiKey("$StripeAcc->secret_key");

        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => "USD",
                            'unit_amount' => round($payment->amount, 2) * 100,
                            'product_data' => [
                                'name' => 'PixClipping',
                                'description' => 'Payment  with Stripe',
                                'images' => [asset('assets/images/logo.png')],
                            ],
                        ],
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'payment',
                'cancel_url' => route('home'),
                'success_url' => route('home'),
                // 'cancel_url' => route(gatewayRedirectUrl()),
                // 'success_url' => route(gatewayRedirectUrl(true)),
            ]);
        } catch (\Exception $e) {
            $send['error'] = true;
            $send['message'] = $e->getMessage();
            return json_encode($send);
        }

        $send['view'] = 'user.payment.' . $alias;
        $send['session'] = $session;
        $send['StripeJSAcc'] = $StripeAcc;
        // $payment->btc_wallet = json_decode(json_encode($session))->id;

        $order = Order::find($payment->order_id);
        $order->is_paid = ($order->is_paid == 0) ? 1:0;
        $order->save();
        return json_encode($send);
    }

    public function ipn(Request $request)
    {
        $StripeAcc = Gateway::where('code','stripe')->first();
        $gateway_parameter = json_decode($StripeAcc->gateway_parameter);
        \Stripe\Stripe::setApiKey($gateway_parameter->secret_key);

        // You can find your endpoint's secret in your webhook settings
        $endpoint_secret = $gateway_parameter->end_point; // main
        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];


        $event = null;
        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            http_response_code(400);
            exit();
        }

        // Handle the checkout.session.completed event
        if ($event->type == 'checkout.session.completed') {

            $session = $event->data->object;
            // $payment = Payment::where('btc_wallet', $session->id)->orderBy('id', 'DESC')->first();

            // if ($deposit->status == 0) {
            //     PaymentController::userDataUpdate($deposit);
            // }
        }
        http_response_code(200);
    }
}
