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

//interface PaymentGatewayInterface
//{
//    public function pay(float $amount): bool;
//
//    public function refund(float $amount): bool;
//}
//
///*
//|--------------------------------------------------------------------------
//| Stripe Payment Implementation
//|--------------------------------------------------------------------------
//*/
//
//class StripePayment implements PaymentGatewayInterface
//{
//    public function pay(float $amount): bool
//    {
//        echo "Stripe: Payment of $$amount successful\n";
//        return true;
//    }
//
//    public function refund(float $amount): bool
//    {
//        echo "Stripe: Refund of $$amount successful\n";
//        return true;
//    }
//}
//
///*
//|--------------------------------------------------------------------------
//| PayPal Payment Implementation
//|--------------------------------------------------------------------------
//*/
//
//class PaypalPayment implements PaymentGatewayInterface
//{
//    public function pay(float $amount): bool
//    {
//        echo "PayPal: Payment of $$amount successful\n";
//        return true;
//    }
//
//    public function refund(float $amount): bool
//    {
//        echo "PayPal: Refund of $$amount successful\n";
//        return true;
//    }
//}
//
///*
//|--------------------------------------------------------------------------
//| Order Service (Dependency Injection)
//|--------------------------------------------------------------------------
//| This class depends on the interface, NOT a concrete class
//*/
//
//class OrderService
//{
//    private PaymentGatewayInterface $paymentGateway;
//
//    public function __construct(PaymentGatewayInterface $paymentGateway)
//    {
//        $this->paymentGateway = $paymentGateway;
//    }
//
//    public function checkout(float $amount): void
//    {
//        $this->paymentGateway->pay($amount);
//    }
//
//    public function refund(float $amount): void
//    {
//        $this->paymentGateway->refund($amount);
//    }
//}
//
///*
//|--------------------------------------------------------------------------
//| Usage
//|--------------------------------------------------------------------------
//*/
//
//// Change implementation here without touching OrderService
//$paymentGateway = new StripePayment();
//// $paymentGateway = new PaypalPayment();
//
//$order = new OrderService($paymentGateway);
//
//$order->checkout(1000);
//$order->refund(500);


// interface Father {
//     const mark = 101;
//     public function disp();
//     public function getValue();
// }
//  class Son implements Father {
//     public $a;
//     public function disp(){
//        echo Father::mark;
//     }
//     public function getValue(){}
// }
// $obj = new Son;
// $obj->disp();

// interface PaymentMethod {
//     public function pay(float $amount);
//     public function refund(float $amount);
// }
//
// class CreditCard implements PaymentMethod {
//     public function pay(float $amount){
//         echo "Paid $$amount using CreditCard Card\n";
//     }
//
//     public function refund(float $amount){
//         echo "Refunded $$amount to Credit Card\n";
//     }
// }
//
// class PayPal implements PaymentMethod {
//     public function pay(float $amount){
//         echo "Paid $$amount using PayPal\n";
//     }
//     public function refund(float $amount){
//         echo "Refunded $$amount to PayPal\n";
//     }
// }
//
//class BankTransfer implements PaymentMethod {
//    public function pay(float $amount) {
//        echo "Paid $$amount via Bank Transfer\n";
//    }
//
//    public function refund(float $amount) {
//        echo "Refunded $$amount via Bank Transfer\n";
//    }
//}
//
//// Process payment polymorphically
//function processPayment(PaymentMethod $method, float $amount) {
//    $method->pay($amount);
//    echo "\n";
//    $method->refund($amount);
//}
//
//$creditCard = new CreditCard();
//$paypal = new PayPal();
//$bank = new BankTransfer();
//
//processPayment($creditCard, 100.00);
//processPayment($paypal, 50.00);
//processPayment($bank, 200.00);
//


//class Calculator {
//    public function add(...$numbers){
//        return array_sum($numbers);
//    }
//
//    public function __call($method, $args){
//        if($method  === 'multiply'){
//            return array_product($args);
//        }
//    }
//}
//
//$calc = new Calculator();
//echo $calc->add(5, 10) . "\n";
//echo $calc->add(5, 10, 15) . "\n";
//echo $calc->multiply(2, 3, 4) . "\n";


interface Shape {
    public function calculateArea(): float;
    public function calculatePerimeter(): float;
}

class Circle implements Shape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return pi() * $this->radius ** 2;
    }

    public function calculatePerimeter(): float {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Shape {
    private float $width;
    private float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float {
        return $this->width * $this->height;
    }

    public function calculatePerimeter(): float {
        return 2 * ($this->width + $this->height);
    }
}

class Triangle implements Shape {
    private float $a, $b, $c;

    public function __construct(float $a, float $b, float $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calculateArea(): float {
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function calculatePerimeter(): float {
        return $this->a + $this->b + $this->c;
    }
}

// Polymorphic function
function printShapeInfo(Shape $shape) {
    echo "Area: " . round($shape->calculateArea(), 2) . "\n";
    echo "Perimeter: " . round($shape->calculatePerimeter(), 2) . "\n\n";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
$triangle = new Triangle(3, 4, 5);

echo "Circle:\n";
printShapeInfo($circle);

echo "Rectangle:\n";
printShapeInfo($rectangle);

echo "Triangle:\n";
printShapeInfo($triangle);
