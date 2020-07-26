<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\RequestSaver;
use App\Http\Requests\Form;
use App\Services\RequestFactory;

class SiteController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * @param Form $request
     *
     * @return array|null
     */
    public function save(Form $request, RequestSaver $saver, RequestFactory $factory)
    {
        $request = $factory::create($request->name, (int)$request->phone, $request->message);

        $saver->save($request);
    }
}
