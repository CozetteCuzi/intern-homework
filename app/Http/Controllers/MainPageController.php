<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class MainPageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private \Illuminate\Support\Collection|array $data;

    public function __construct()
    {
        $this->data = (new \App\Repositories\BrokerRepository)->getBrokers();
    }

    public function __invoke(): View
    {
        return view('welcome', ['all' => $this->getAllSorted(),
            'topThree' => $this->getTopThree(),
            'withNoInactivityFees' => $this->getWithNoInactivityFees()
        ]);
    }

    public function getAllSorted(): array|\Illuminate\Support\Collection
    {
        return $this->data->sortByDesc('overallScore');
    }

    public function getTopThree(): array|\Illuminate\Support\Collection
    {
        return $this->getAllSorted()->filter(function ($item) {
            $date = new Carbon($item->reviewDate);
            return $date->year == 2020;
        })->take(3);
    }

    public function getWithNoInactivityFees(): array|\Illuminate\Support\Collection
    {
        return $this->getAllSorted()->where('hasInactivityFee', false);
    }

    public function getOneRandomly(): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            $this->data->random()
        );
    }
}
