<?php

namespace App\Contracts;

use App\Models\Request;

interface RequestSaver
{
    /**
     * Сохранить заявку
     */
    public function save(Request $request);
}