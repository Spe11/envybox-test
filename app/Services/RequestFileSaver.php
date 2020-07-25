<?php

namespace App\Services;

use App\Contracts\RequestSaver;
use App\Models\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Сервис сохранение заявок в файл
 */
class RequestFileSaver implements RequestSaver
{
    private $fileName = 'file.txt';

    /**
     * @inheritDoc
     */
    public function save(Request $request)
    {
        $row = sprintf('%s %s %s', $request->getName(), $request->getPhone(), $request->getMessage());

        Storage::append('/' . $this->fileName, $row);
    }
}
