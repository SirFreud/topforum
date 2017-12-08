<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    function a_thread_has_replies()
    {
        $thread = factory('App\Thread')->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }

    /** @test */
    function a_thread_has_a_creator()
    {
        $thread = factory('App\Thread')->create();
        $this->assertInstanceOf('App\User', $thread->creator);
    }
}
