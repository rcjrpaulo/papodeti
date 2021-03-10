<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function se_tentar_listar_usuarios_sem_login_redirecionar_para_login()
    {
        $response = $this->get('/users');

        $response->assertRedirect('/login');
    }

    /** @test */
    public function deve_ser_possivel_listar_usuarios()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);

        $this->get('/users')
        ->assertOk();
    }
}
