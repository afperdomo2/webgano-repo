<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class RoutesWebTest extends TestCase
{
    public function test_product_routes()
    {

        $closure = function () {
            Route::get('/products', [ProductController::class, 'index'])->name('products.index');
            Route::patch('/products', [ProductController::class, 'create'])->name('products.create');
            Route::delete('/products', [ProductController::class, 'store'])->name('products.store');
        };

        $closure();

        $this->assertNotNull(Route::getRoutes()->getByName('products.index'));
        $this->assertNotNull(Route::getRoutes()->getByName('products.create'));
        $this->assertNotNull(Route::getRoutes()->getByName('products.store'));
    }

    public function test_profile_routes()
    {

        $closure = function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        };

        $closure();

        $this->assertNotNull(Route::getRoutes()->getByName('profile.edit'));
        $this->assertNotNull(Route::getRoutes()->getByName('profile.update'));
        $this->assertNotNull(Route::getRoutes()->getByName('profile.destroy'));
    }
}
