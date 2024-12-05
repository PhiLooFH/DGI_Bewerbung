<?php

namespace Database\Seeders;

use App\Models\Wish;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Wish::create([
                'title' => 'Dark Mode',
                'description' => 'Fügen Sie eine Option hinzu, um den Dark Mode für die Website zu aktivieren.',
                'is_fulfilled' => 0,
                'created_at' => '2023-12-01 10:00:00',
            ]);
        Wish::create([
                'title' => 'Benachrichtigungssystem',
                'description' => 'Ein System, das Benutzer über neue Inhalte oder Updates informiert.',
                'is_fulfilled' => 1,
                'created_at' =>'2023-11-15 15:30:00',
            ]);
        Wish::create([
                'title' => 'Live-Chat-Funktion',
                'description' => 'Ein Live-Chat, um die Kundenbetreuung in Echtzeit zu verbessern.',
                'is_fulfilled' => 0,
                'created_at' => '2023-12-02 18:45:00',
            ]);
        Wish::create([
                'title' => 'Multi-Sprachen-Support',
                'description' => 'Unterstützung für mehrere Sprachen, einschließlich Deutsch und Englisch.',
                'is_fulfilled' => 0,
                'created_at' => '2023-10-10 08:20:00',
            ]);
        Wish::create([
                'title' => 'Feedback-Formular',
                'description' => 'Ein Formular, über das Benutzer ihre Meinungen und Vorschläge senden können.',
                'is_fulfilled' => 1,
                'created_at' => '2023-09-20 09:00:00',
            ]);

    }
}
