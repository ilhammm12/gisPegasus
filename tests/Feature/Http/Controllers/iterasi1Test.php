<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class iterasi1Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    //  TEST AUTITENKASI
    public function testMasukSistem()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('masuk'), [
                    'email' => 'superadmin@gmail.com',
                    'password' => 'rahasia'
                ]);
        $response->assertStatus(302);
    }
    public function testKeluarSistem()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(url('keluar'));
        $response->assertStatus(302);
    }
    // TEST TIPE TOWER
    // public function testTambahUser()
    // {
    //     $user = User::where('role_id','1')->first();
    //         $response = $this->actingAs($user)
    //             ->post(route('tipetower.store'), [
    //                 'nama' => 'tipetower1',
    //                 'model' => 'model1'
    //             ]);
    //     $response->assertStatus(302);
    // }
    // public function testLihatUser()
    // {
    //     $this->withExceptionHandling();
    //     $user = User::where('role_id','1')->first();
    //         $response = $this->actingAs($user)
    //             ->get(route('tipetower.index'));
    //     $response->assertStatus(200);
    // }
    // public function testEditUser()
    // {
    //     $user = User::where('role_id','1')->first();
    //         $response = $this->actingAs($user)
    //             ->put(route('tipetower.update',6),[
    //                 'nama' => 'tipetower1zz',
    //                 'model' => 'model3'
    //             ]);
    //     $response->assertStatus(404);
    // }
    // public function testDeleteUser()
    // {
    //     $user = User::where('role_id','1')->first();
    //         $response = $this->actingAs($user)
    //             ->delete(route('tipetower.destroy',6));
    //     $response->assertStatus(404);
    // }

    // TEST BTS
    public function testTambahBTS()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('btstower.store'), [
                    'nama'          => 'Tower Testing',
                    'jenisdaya_id'  => '2',
                    'penyedia_id'   => '1',
                    'tipesite_id'   => '1',
                    'tipetower_id'  => '1',
                    'gambar'        => 'namafile.jpg',
                    'tinggi_tower'  => '500',
                    'longitude'     => '-1.3894',
                    'latitude'      => '1.30094',
                    'radius'        => '300',
                    'lahan'         => '500',
                    'alamat'        => 'alamat testing',
                    'nilai_kontrak' => '29000',
                    'kota'          => 'balikpapan',
                    'provinsi'      => 'kalimantan timur'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatBTS()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('btstower.index'));
        $response->assertStatus(200);
    }
    public function testEditBTS()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('btstower.update',6),[
                    'nama'          => 'Tower Testing2',
                    'jenisdaya_id'  => '2',
                    'penyedia_id'   => '1',
                    'tipesite_id'   => '1',
                    'tipetower_id'  => '1',
                    'gambar'        => 'namafile2.jpg',
                    'tinggi_tower'  => '5002',
                    'longitude'     => '-1.3894',
                    'latitude'      => '1.30094',
                    'radius'        => '300',
                    'lahan'         => '500',
                    'alamat'        => 'alamat testing2',
                    'nilai_kontrak' => '29000',
                    'kota'          => 'balikpapan',
                    'provinsi'      => 'kalimantan timur'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteBTS()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('btstower.destroy',6));
        $response->assertStatus(404);
    }
}
