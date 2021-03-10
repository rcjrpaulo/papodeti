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

    /** @test */
    public function deve_ser_possivel_visualizar_detalhes_do_usuario()
    {
        $user = factory(User::class)->create([
            'name' => 'userteste',
            'email' => 'teste@teste.com'
        ]);
        $this->actingAs($user);

        $this->get('/users/1')
            ->assertOk()
            ->assertSee('userteste')
            ->assertSee('teste@teste.com');
    }

    /** @test */
    public function deve_ser_possivel_atualizar_usuario()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create([
            'name' => 'nome antes',
            'email' => 'email@antes.com'
        ]);
        $this->actingAs($user);

        $updateData = [
            'name' => 'nome depois',
            'email' => 'email@depois.com',
            'is_admin' => true
        ];

        $this->put('/users/1', $updateData);

        $this->assertDatabaseCount('users', 1);

        $this->assertDatabaseHas('users', [
            'email' => 'email@depois.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'email@antes.com'
        ]);
    }
}
