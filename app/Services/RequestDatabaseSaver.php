<?php

namespace App\Services;

use App\Contracts\RequestSaver;
use App\Models\Request;
use Illuminate\Support\Facades\DB;

/**
 * Сервис сохранение заявок в бд
 */
class RequestDatabaseSaver implements RequestSaver
{
    private $tableName = 'request';

    /**
     * @inheritDoc
     */
    public function save(Request $request)
    {
        DB::table($this->tableName)->insert(
            [
                'name' => $request->getName(),
                'phone' => $request->getPhone(),
                'message' => $request->getMessage(),
            ]
        );
    }
}
