<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\DataBuku;
use App\Models\Pinjaman;
use App\Models\DataRak;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Buku adalah jendela ilmu,')
                    ->pause(2000)
                    ->click('a','Login');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', '12345678')
                    ->pause(2000)
                    ->press('Sign In') 
                    ->assertSee('Data Buku')
                    ->pause(2000)
                    ;
                    
        });


        $this->browse(function (Browser $browser) {
            $browser->visit('/dataBuku')
                    ->assertSee('Dashboard')
                    ->pause(2000)
                    ->click('a','Dashboard')
                    ->assertSee('Total Peminjaman')
                    ->pause(2000)
                    ;
                    
        });
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                    ->assertSee('Dashboard')
                    ->pause(2000)
                    ->press('Details')
                    // ->assertSee('Detail Peminjaman')
                    ->press('Close')
                    ->assertSee('Detail Peminjaman')
                    ->pause(5000)
                    ;
                    
        });
    }
}