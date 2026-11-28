<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class TestingConfigurationTest extends TestCase
{
    public function test_testing_environment_uses_sqlite_in_memory(): void
    {
        $this->assertSame('testing', config('app.env'));
        $this->assertSame('sqlite', config('database.default'));
        $this->assertSame(':memory:', config('database.connections.sqlite.database'));
    }

    public function test_vite_is_disabled_during_tests(): void
    {
        $this->assertSame('', trim(Blade::render("@vite('resources/css/app.css')")));
    }
}
