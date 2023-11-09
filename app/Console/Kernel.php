<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Define tarefas agendadas aqui usando o objeto Schedule
        // Exemplo: $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands'); // Carrega os comandos disponíveis na pasta 'Commands'

        require base_path('routes/console.php'); // Requisições adicionais para comandos da aplicação
    }
}
