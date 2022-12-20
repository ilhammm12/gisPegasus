<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class iterasi2Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use WithFaker;

    // TEST AKSES INTERNET
    public function testTambahAksesInternet()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('aksesinternet.store'), [
                    'jenisdaya_id'  => '2',
                    'nama'          => 'Akses Internet Testing',
                    'gambar'        => 'namafile.jpg',
                    'latitude'      => '1.20320',
                    'longitude'     => '-1.39903',
                    'provinsi'      => 'kaltim',
                    'kota'          => 'balikpapan',
                    'alamat'        => 'jalan jalan',
                    'nama_kontak'   => 'ilham',
                    'email_kontak'  => 'ilham@gmail.com',
                    'notelp_kontak' => '088844'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatAksesInternet()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('aksesinternet.index'));
        $response->assertStatus(200);
    }
    public function testEditAksesInternet()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('aksesinternet.update',2),[
                    'jenisdaya_id'  => '2',
                    'nama'          => 'Akses Internet ubah',
                    'gambar'        => 'namafile2.jpg',
                    'latitude'      => '2.20320',
                    'longitude'     => '-2.39903',
                    'provinsi'      => 'kaltim',
                    'kota'          => 'balikpapan',
                    'alamat'        => 'jalan jalan2',
                    'nama_kontak'   => 'ilham2',
                    'email_kontak'  => 'ilham2@gmail.com',
                    'notelp_kontak' => '088844'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteAksesInternet()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('aksesinternet.destroy',2));
        $response->assertStatus(404);
    }

    // TEST TERMINAL
    public function testTambahTerminal()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->post(route('terminal.store'), [
                    'penyedia_id'   => '1',
                    'nama'          => 'Terminal testing',
                    'kode_unik'     => 'TMSA23',
                    'gambar'        => 'namagambar.jpg',
                    'keterangan'    => 'keterangan terminal',
                    'alamat'        => 'alamat terminal',
                    'latitude'      => '1.292013',
                    'longitude'     => '-1.32042'
                ]);
        $response->assertStatus(302);
    }
    public function testLihatTerminal()
    {
        $this->withExceptionHandling();
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->get(route('terminal.index'));
        $response->assertStatus(200);
    }
    public function testEditTerminal()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->put(route('terminal.update',1),[
                    'penyedia_id'   => '1',
                    'nama'          => 'Terminal testing2',
                    'kode_unik'     => 'TMSA23',
                    'gambar'        => 'namagambar.jpg',
                    'keterangan'    => 'keterangan terminal2',
                    'alamat'        => 'alamat terminal2',
                    'latitude'      => '1.292013',
                    'longitude'     => '-1.32042'
                ]);
        $response->assertStatus(404);
    }
    public function testDeleteTerminal()
    {
        $user = User::where('role_id','1')->first();
            $response = $this->actingAs($user)
                ->delete(route('terminal.destroy',1));
        $response->assertStatus(404);
    }
}
