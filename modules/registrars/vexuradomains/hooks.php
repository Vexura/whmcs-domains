<?php
declare(strict_types=1);
if (!defined('WHMCS')) { exit('Direct access is not permitted.'); }
require_once __DIR__.'/bootstrap.php';
use Vexura\Whmcs\Domains\Module;
use Vexura\Whmcs\Domains\Registrar;
use Vexura\Whmcs\Domains\Automation;

add_hook('InvoicePaidPreEmail', 1, static function (array $vars): void { Registrar::paymentContext((int) $vars['invoiceid']); });
add_hook('InvoicePaid', 1000, static function (array $vars): void { Registrar::paymentContext(null); });
add_hook('AfterCronJob', 1, static function (array $vars): void { Registrar::cron(); });
