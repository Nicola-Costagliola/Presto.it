<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'presto:MakeUserRevisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rendi un utente revisore';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // andiamo a prendere utente con email uguale all'email passata all'interno del comando
        $user = User::where('email', $this->argument('email'))->first();
        // controlliamo se è stato trovato l'utente 
        if(!$user) {
            $this->error('Utente non trovato');
            return;
        }

        $user->is_revisor = true;
        $user->save();
        $this->info("L'utente $user->name è ora un revisore");
    }
}
