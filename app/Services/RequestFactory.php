<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Request;

/**
 * Фабрика создания заявки
 */
class RequestFactory
{
    /**
     * Создать
     *
     * @param string $name
     * @param int    $phone
     * @param string $message
     *
     * @return Request
     */
    public static function create(string $name, int $phone, string $message): Request
    {
        return new Request($name, $phone, $message);
    }
}
