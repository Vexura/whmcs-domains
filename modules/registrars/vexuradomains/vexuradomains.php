<?php
declare(strict_types=1);
if (!defined('WHMCS')) { exit('Direct access is not permitted.'); }
require_once __DIR__.'/bootstrap.php';
use Vexura\Whmcs\Domains\Module;
use Vexura\Whmcs\Domains\Registrar;
use Vexura\Whmcs\Domains\Automation;

function vexuradomains_MetaData(): array { return ['DisplayName' => 'Vexura Domains', 'APIVersion' => '1.1']; }

function vexuradomains_getConfigArray(): array { return Registrar::config(); }

function vexuradomains_CheckAvailability(array $params): \WHMCS\Domains\DomainLookup\ResultsList|array { return Registrar::availability($params); }

/** WHMCS registrar RegisterDomain; uses persisted Vexura domain mapping. */
function vexuradomains_RegisterDomain(array $params): array
{
    return Registrar::run('RegisterDomain', $params);
}

/** WHMCS registrar TransferDomain; uses persisted Vexura domain mapping. */
function vexuradomains_TransferDomain(array $params): array
{
    return Registrar::run('TransferDomain', $params);
}

/** WHMCS registrar RenewDomain; uses persisted Vexura domain mapping. */
function vexuradomains_RenewDomain(array $params): array
{
    return Registrar::run('RenewDomain', $params);
}

/** WHMCS registrar RetryRenewals; uses persisted Vexura domain mapping. */
function vexuradomains_RetryRenewals(array $params): array
{
    return Registrar::run('RetryRenewals', $params);
}

/** WHMCS registrar GetNameservers; uses persisted Vexura domain mapping. */
function vexuradomains_GetNameservers(array $params): array
{
    return Registrar::run('GetNameservers', $params);
}

/** WHMCS registrar SaveNameservers; uses persisted Vexura domain mapping. */
function vexuradomains_SaveNameservers(array $params): array
{
    return Registrar::run('SaveNameservers', $params);
}

/** WHMCS registrar GetContactDetails; uses persisted Vexura domain mapping. */
function vexuradomains_GetContactDetails(array $params): array
{
    return Registrar::run('GetContactDetails', $params);
}

/** WHMCS registrar SaveContactDetails; uses persisted Vexura domain mapping. */
function vexuradomains_SaveContactDetails(array $params): array
{
    return Registrar::run('SaveContactDetails', $params);
}

/** WHMCS registrar GetDNS; uses persisted Vexura domain mapping. */
function vexuradomains_GetDNS(array $params): array
{
    return Registrar::run('GetDNS', $params);
}

/** WHMCS registrar SaveDNS; uses persisted Vexura domain mapping. */
function vexuradomains_SaveDNS(array $params): array
{
    return Registrar::run('SaveDNS', $params);
}

/** WHMCS registrar GetEPPCode; uses persisted Vexura domain mapping. */
function vexuradomains_GetEPPCode(array $params): array
{
    return Registrar::run('GetEPPCode', $params);
}

/** WHMCS registrar Sync; uses persisted Vexura domain mapping. */
function vexuradomains_Sync(array $params): array
{
    return Registrar::run('Sync', $params);
}

/** WHMCS registrar TransferSync; uses persisted Vexura domain mapping. */
function vexuradomains_TransferSync(array $params): array
{
    return Registrar::run('TransferSync', $params);
}
