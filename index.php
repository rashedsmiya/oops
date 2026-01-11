<?php


//    // 1. The Interface (The Contract)
//     interface PaymentProcessor {
//         public function pay($amount);
//     }
//
//     // 2. Implementation A: Credit Card
//    class CreditCardPayment implements PaymentProcessor {
//         public function pay($amount) {
//             echo "Porcessing Credit Card Payment of $$amount \n";
//         }
//    }
//
//    // 3. Implementation B: PayPal
//    class PaypalPayment implements PaymentProcessor {
//         public function pay($amount) {
//             echo "Porcessing PayPal Payment of $$amount \n";
//         }
//    }
//
//   // 4. This Function that uses Polymorphism
//   // It doesn't care Which payment method it receives, as long it implements the interface
//
//    function processOrder(PaymentProcessor $processor, $amount) {
//        $processor->pay($amount);
//    }
//
//    // Usage
//     $cc = new CreditCardPayment();
//     $paypal = new PaypalPayment();
//
//    // Treating different objects uniformly
//    processOrder($cc, 100);
//    processOrder($paypal, 50);


