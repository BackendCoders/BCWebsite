<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class IndexNowService
{
    /**
     * Get the configured IndexNow API key.
     */
    public static function getKey(): string
    {
        return config('services.indexnow.key') ?? env('INDEXNOW_KEY', '8f3b92a1c4e74d6b95e2f183709acbc4');
    }

    /**
     * Submit single or multiple URLs to IndexNow.
     */
    public static function ping(string|array $urls): void
    {
        try {
            $urlList = is_array($urls) ? $urls : [$urls];
            $urlList = array_values(array_filter(array_unique($urlList)));

            if (empty($urlList)) {
                return;
            }

            $appUrl = config('app.url', 'https://backendcodersindia.com');
            $host = parse_url($appUrl, PHP_URL_HOST) ?: 'backendcodersindia.com';
            $key = self::getKey();
            $keyLocation = url('/' . $key . '.txt');

            Http::timeout(3)
                ->withHeaders(['Content-Type' => 'application/json; charset=utf-8'])
                ->post('https://api.indexnow.org/indexnow', [
                    'host' => $host,
                    'key' => $key,
                    'keyLocation' => $keyLocation,
                    'urlList' => $urlList,
                ]);
        } catch (\Throwable $e) {
            Log::info('IndexNow notification skipped or failed: ' . $e->getMessage());
        }
    }
}
