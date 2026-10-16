<?php

$trustedProxies = trim((string) env('TRUSTED_PROXIES', ''));

return [
    // Empty means direct client connections only; configure exact proxy IPs/CIDRs in production.
    'proxies' => $trustedProxies === ''
        ? null
        : array_values(array_filter(array_map('trim', explode(',', $trustedProxies)))),
];
