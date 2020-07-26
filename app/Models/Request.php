<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Модель заявки
 */
class Request
{
    /** @var string $name */
    private $name;

    /** @var int $phone */
    private $phone;

    /** @var string $message */
    private $message;

    /**
     * @param string $name
     * @param int    $phone
     * @param string $message
     */
    public function __construct(string $name, int $phone, string $message)
    {
        $this->name    = $name;
        $this->phone   = $phone;
        $this->message = $message;
    }

    /**
     * Имя
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Телефон
     *
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * Сообщение
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
