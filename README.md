## Instalation

Add the dependency _khipu/khipu-api-client_ to _composer.json_ and run

```
composer install
```


## Usage

### Basic usage
```php
<?php
require __DIR__ . '/vendor/autoload.php';

$c = new Khipu\Configuration();
$c->setSecret("abc123");
$c->setReceiverId(1234);
$c->setDebug(true);

$cl = new Khipu\ApiClient($c);

$exp = new DateTime();
$exp->setDate(2015, 11, 3);

$kh = new Khipu\Client\PaymentsApi($cl);

try {
    $opts = array(
    	"expires_date" => $exp,
    	"body" => "test body"
    );
    $resp = $kh->paymentsPost("Test de api", "CLP", 1570, $opts);
    print_r($resp);
    $r2 = $kh->paymentsIdGet($resp->getPaymentId());
    print_r($r2);
} catch(Exception $e) {
    echo $e->getMessage();
}
?>
```
