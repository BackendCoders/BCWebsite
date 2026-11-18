<?php

namespace App\Support;

class UserAgentParser
{
    /**
     * Parse a User-Agent header into browser, operating system, and device type.
     */
    public static function parse(?string $userAgent): array
    {
        if (empty($userAgent)) {
            return [
                'browser' => 'Unknown Browser',
                'os' => 'Unknown OS',
                'device_type' => 'Unknown',
            ];
        }

        $ua = $userAgent;

        // 1. Device Type
        $deviceType = 'Desktop';
        if (preg_match('/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i', $ua)) {
            $deviceType = 'Tablet';
        } elseif (preg_match('/(mobi|iphone|ipod|blackberry|opera mini|iemobile|wpdesktop)/i', $ua)) {
            $deviceType = 'Mobile';
        } elseif (preg_match('/(bot|crawler|spider|slurp|facebookexternalhit|bingbot|googlebot)/i', $ua)) {
            $deviceType = 'Bot';
        }

        // 2. Operating System (order matters: iOS before macOS)
        $os = 'Unknown OS';
        if (preg_match('/(iphone|ipad|ipod).*?os\s+([0-9_]+)/i', $ua, $matches)) {
            $os = 'iOS ' . str_replace('_', '.', $matches[2]);
        } elseif (preg_match('/android\s+([0-9.]+)/i', $ua, $matches)) {
            $os = 'Android ' . $matches[1];
        } elseif (preg_match('/windows nt 10/i', $ua)) {
            $os = 'Windows 10/11';
        } elseif (preg_match('/windows nt 6\.3/i', $ua)) {
            $os = 'Windows 8.1';
        } elseif (preg_match('/windows nt 6\.2/i', $ua)) {
            $os = 'Windows 8';
        } elseif (preg_match('/windows nt 6\.1/i', $ua)) {
            $os = 'Windows 7';
        } elseif (preg_match('/windows nt/i', $ua)) {
            $os = 'Windows';
        } elseif (preg_match('/macintosh|mac os x/i', $ua)) {
            $os = 'macOS';
        } elseif (preg_match('/linux/i', $ua)) {
            $os = 'Linux';
        } elseif (preg_match('/cros/i', $ua)) {
            $os = 'Chrome OS';
        }

        // 3. Browser
        $browser = 'Unknown Browser';
        if (preg_match('/edg(?:e|ios|a)?\/([0-9.]+)/i', $ua, $matches)) {
            $browser = 'Microsoft Edge ' . explode('.', $matches[1])[0];
        } elseif (preg_match('/opr\/([0-9.]+)|opera\/([0-9.]+)/i', $ua, $matches)) {
            $ver = !empty($matches[1]) ? $matches[1] : $matches[2];
            $browser = 'Opera ' . explode('.', $ver)[0];
        } elseif (preg_match('/chrome\/([0-9.]+)/i', $ua, $matches) && !preg_match('/edg/i', $ua)) {
            $browser = 'Chrome ' . explode('.', $matches[1])[0];
        } elseif (preg_match('/firefox\/([0-9.]+)/i', $ua, $matches)) {
            $browser = 'Firefox ' . explode('.', $matches[1])[0];
        } elseif (preg_match('/version\/([0-9.]+).*safari/i', $ua, $matches)) {
            $browser = 'Safari ' . explode('.', $matches[1])[0];
        } elseif (preg_match('/safari/i', $ua)) {
            $browser = 'Safari';
        } elseif (preg_match('/msie ([0-9.]+)|trident\/.*rv:([0-9.]+)/i', $ua, $matches)) {
            $browser = 'Internet Explorer';
        }

        return [
            'browser' => $browser,
            'os' => $os,
            'device_type' => $deviceType,
        ];
    }
}
