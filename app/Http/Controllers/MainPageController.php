<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class MainPageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(): View
    {
        return view('welcome', ['brokers' => collect([
            new Broker('Broker 1', 'Stock', 4.5, false, Carbon::now()),
            new Broker('Broker 2', 'Stock', 4.1, false, Carbon::now()),
            new Broker('Broker 3', 'Stock', 3.7, false, Carbon::now())
        ])]);
    }
}
