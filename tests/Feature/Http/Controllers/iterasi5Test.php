<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\tipeTower;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class iterasi5Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use WithFaker;

    // TEST TIPE TOWER
    public function testTambahTipeTower()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('tipetower.store'), [
                    'nama' => 'tipetower1',
                    'model' => 'model1'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatTipeTower()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('tipetower.index'));
        $response->assertStatus(200);
    }
    public function testEditTipeTower()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('tipetower.update',6),[
                    'nama' => 'tipetower1zz',
                    'model' => 'model3'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteTipeTower()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('tipetower.destroy',6));
        $response->assertStatus(404);
    }

    // TEST TIPE SITE
    public function testTambahTipeSite()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('tipesite.store'), [
                    'nama' => 'tipesite1',
                    'keterangan' => 'keterangan1'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatTipeSite()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('tipesite.index'));
        $response->assertStatus(200);
    }
    public function testEditTipeSite()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('tipesite.update',5),[
                    'nama' => 'tipesite1zz',
                    'keterangan' => 'keterangan3'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteTipeSite()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('tipesite.destroy',5));
        $response->assertStatus(404);
    }

    // TEST KONFIGURASI POWER
    public function testTambahKonfigurasiPower()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('konfigurasipower.store'), [
                    'nama' => 'konfpower',
                    'keterangan' => 'keterangan1'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatKonfigurasiPower()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('konfigurasipower.index'));
        $response->assertStatus(200);
    }
    public function testEditKonfigurasiPower()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('konfigurasipower.update',4),[
                    'nama' => 'konfpowerzz',
                    'keterangan' => 'keterangan3'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteKonfigurasiPower()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('konfigurasipower.destroy',4));
        $response->assertStatus(404);
    }

    // TEST KONFIGURASI POWER
    public function testTambahKonfigurasiTransmisi()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('konfigurasitransmisi.store'), [
                    'nama' => 'konfTransmisi',
                    'keterangan' => 'keterangan1'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatKonfigurasiTransmisi()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('konfigurasitransmisi.index'));
        $response->assertStatus(200);
    }
    public function testEditKonfigurasiTransmisi()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('konfigurasitransmisi.update',2),[
                    'nama' => 'konfTransmisizz',
                    'keterangan' => 'keterangan3'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteKonfigurasiTransmisi()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('konfigurasitransmisi.destroy',2));
        $response->assertStatus(404);
    }
}
