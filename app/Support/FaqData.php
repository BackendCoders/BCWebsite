<?php

namespace App\Support;

use App\Http\Controllers\HomeController;

class FaqData
{
    /**
     * All 10 approved FAQ items.
     *
     * @return array<int, array{id: int, q: string, a: string, a_html: string}>
     */
    public static function all(): array
    {
        return HomeController::getAllFaqList();
    }

    /**
     * Selected FAQ items for the Contact page (Q1, Q2, Q5, Q7).
     *
     * @return array<int, array{id: int, q: string, a: string, a_html: string}>
     */
    public static function forContact(): array
    {
        return HomeController::getContactFaqList();
    }
}
