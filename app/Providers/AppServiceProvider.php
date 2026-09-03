<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\medicine_sold;
use App\Models\quantity_received;
use App\Models\damaged_medicine;
use App\Models\expired_medicine;
use App\Models\medicine_return;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('Dashboard.Admin.sidebar', function ($view) {

            $sold = medicine_sold::where('status', 'pending')->latest()->get();

            $received = quantity_received::where('status', 'pending')->latest()->get();

            $damaged = damaged_medicine::where('status', 'pending')->latest()->get();

            $expired = expired_medicine::where('status', 'pending')->latest()->get();

            $returned = medicine_return::where('status', 'pending')->latest()->get();

            $view->with([
                'sold' => $sold,
                'received' => $received,
                'damaged' => $damaged,
                'expired' => $expired,
                'returned' => $returned,
            ]);
        });
    }
}