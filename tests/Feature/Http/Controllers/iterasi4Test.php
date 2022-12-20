<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class iterasi4Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use WithFaker;

    // TEST PENYEDIA LAYANAN
    public function testTambahPenyediaLayanan()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('penyedialayanan.store'), [
                    'nama' => 'penyedialayanan1',
                    'keterangan' => 'keterangan1'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatPenyediaLayanan()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('penyedialayanan.index'));
        $response->assertStatus(200);
    }
    public function testEditPenyediaLayanan()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('penyedialayanan.update',3),[
                    'nama' => 'penyedialayanan1zz',
                    'keterangan' => 'keterangan3'
                ]);
        $response->assertStatus(404);
    }
    public function testDeletePenyediaLayanan()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('penyedialayanan.destroy',3));
        $response->assertStatus(404);
    }

    // TIPE JENIS SUMBER DAYA
    public function testTambahJenisSumberDaya()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('jenissumberdaya.store'), [
                    'kapasitasdaya_id' => '1',
                    'nama' => 'jenissumberdaya1',
                    'keterangan' => 'keterangan1'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatJenisSumberDaya()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('jenissumberdaya.index'));
        $response->assertStatus(200);
    }
    public function testEditJenisSumberDaya()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('jenissumberdaya.update',4),[
                    'kapasitasdaya_id' => '2',
                    'nama' => 'jenissumberdaya1zzz',
                    'keterangan' => 'keterangan3'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteJenisSumberDaya()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('jenissumberdaya.destroy',4));
        $response->assertStatus(404);
    }

    // TIPE KAPASITAS SUMBER DAYA
    public function testTambahKapasitasSumberDaya()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('kapasitassumberdaya.store'), [
                    'kapasitas' => '1500',
                    'keterangan' => 'keterangan1'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatKapasitasSumberDaya()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('kapasitassumberdaya.index'));
        $response->assertStatus(200);
    }
    public function testEditKapasitasSumberDaya()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('kapasitassumberdaya.update',3),[
                    'kapasitas' => '7000',
                    'keterangan' => 'keterangan3'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteKapasitasSumberDaya()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('kapasitassumberdaya.destroy',3));
        $response->assertStatus(404);
    }
}
