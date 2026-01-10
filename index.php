<?php
//        interface parent1 {
//            function calc($a, $b);
//        }
//
//        interface parent2 {
//            function sub($c, $d);
//        }
//
//        class childClass implements parent1, parent2{
//            public function calc($a, $b){
//                echo $a + $b;
//            }
//
//            public function sub($c, $d) {
//                echo $c - $d;
//            }
//        }
//
//        $test = new childClass();
//        $test->calc(20, 35);
//        echo "\n";
//        $test->sub(200, 35);

//          interface HourlyRentable
//          {
//              public function getHourlyRate();
//          }
//
//          abstract class Vehicle
//          {
//              abstract public function getBaseFare();
//
//              abstract public function getPerkiloFare();
//
//              public function getTotalFare()
//              {
//                  echo $this->getBaseFare() + $this->getPerkiloFare() . "\n";
//              }
//          }
//
//          class Car extends Vehicle implements HourlyRentable
//          {
//              public function getBaseFare()
//              {
//                  return 20;
//              }
//
//              public function getPerkiloFare()
//              {
//                  return 10;
//              }
//
//              public function getHourlyRate()
//              {
//                  echo "Hourly 2 Dollar";
//              }
//          }
//
//          class Bike extends Vehicle
//          {
//              public function getBaseFare()
//              {
//                  return 10;
//              }
//
//              public function getPerkiloFare()
//              {
//                  return 5;
//              }
//          }
//
//        $car = new Car();
//        $car->getTotalFare();
//
//        echo "<br>";
//
//        $bike = new Bike();
//        $bike->getTotalFare();

//   interface shape {
//       public function area(): float;
//   }
//   class square implements shape {
//       public $side;
//       public function __construct($arg1) {
//           $this->side = $arg1;
//       }
//       public function area(): float {
//           return pow($this->side, 1);
//       }
//   }
//   class circle implements shape {
//       public $radius;
//       public function __construct($arg1) {
//           $this->radius = $arg1;
//       }
//       public function area(): float {
//           return pow($this->radius,1)*pi();
//       }
//   }
//
//   $sq = new square(5);
//   echo "Side: " . $sq->side .  " Area of Square: ". $sq->area() . PHP_EOL;
//
//   $cir = new circle(5);
//   echo "Radius: " . $cir->radius .  " Area of Circle: " . $cir->area(). PHP_EOL;


//interface IPillage
//{
//    public function emptyBankAccounts();
//    public function burnDocuments();
//}
//
//class Employee
//{
//    public function emptyBankAccounts()
//    {
//       echo "Call employees and ask to transfer funds to Swiss bank account";
//    }
//    public function burnDocuments()
//    {
//        echo "Torch the office suite of the employee";
//    }
//}
//
//class Executive extends Employee implements IPillage
//{
//    public function emptyBankAccounts()
//    {
//        echo "Call executive and ask to transfer funds to Swiss bank account";
//    }
//    public function burnDocuments()
//    {
//        echo "Torch the office suite of the executive";
//    }
//}
//
//$obj1 = new Employee();
//$obj2 = new Executive();
//$obj1->emptyBankAccounts();
//echo "\n";
//$obj2->emptyBankAccounts();


/*
|--------------------------------------------------------------------------
| Payment Gateway Interface
|--------------------------------------------------------------------------
| This defines a contract that all payment gateways must follow
*/

interface PaymentGatewayInterface
{
    public function pay(float $amount): bool;

    public function refund(float $amount): bool;
}

/*
|--------------------------------------------------------------------------
| Stripe Payment Implementation
|--------------------------------------------------------------------------
*/

class StripePayment implements PaymentGatewayInterface
{
    public function pay(float $amount): bool
    {
        echo "Stripe: Payment of $$amount successful\n";
        return true;
    }

    public function refund(float $amount): bool
    {
        echo "Stripe: Refund of $$amount successful\n";
        return true;
    }
}

/*
|--------------------------------------------------------------------------
| PayPal Payment Implementation
|--------------------------------------------------------------------------
*/

class PaypalPayment implements PaymentGatewayInterface
{
    public function pay(float $amount): bool
    {
        echo "PayPal: Payment of $$amount successful\n";
        return true;
    }

    public function refund(float $amount): bool
    {
        echo "PayPal: Refund of $$amount successful\n";
        return true;
    }
}

/*
|--------------------------------------------------------------------------
| Order Service (Dependency Injection)
|--------------------------------------------------------------------------
| This class depends on the interface, NOT a concrete class
*/

class OrderService
{
    private PaymentGatewayInterface $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function checkout(float $amount): void
    {
        $this->paymentGateway->pay($amount);
    }

    public function refund(float $amount): void
    {
        $this->paymentGateway->refund($amount);
    }
}

/*
|--------------------------------------------------------------------------
| Usage
|--------------------------------------------------------------------------
*/

// Change implementation here without touching OrderService
$paymentGateway = new StripePayment();
// $paymentGateway = new PaypalPayment();

$order = new OrderService($paymentGateway);

$order->checkout(1000);
$order->refund(500);
