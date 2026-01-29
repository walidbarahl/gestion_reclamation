<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Direction;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Direction::insert([
            [
                'id' => 1,
                'libelle' => 'Direction des Affaires de la  Présidence et du Conseil',
                'libelle_ar' => 'مديرية شؤون الرئاسة والمجلس',
            ],
            [
                'id' => 2,
                'libelle' => 'Direction Générale des Services',
                'libelle_ar' => 'المديرية العامة للمصالح',
            ],
            [
                'id' => 3,
                'libelle' => 'Direction des Affaires Administratives et Juridiques',
                'libelle_ar' => 'مديرية الشؤون الإدارية والقانونية',
            ],
            [
                'id' => 4,
                'libelle' => 'Direction de la Planification et du Développement Régional',
                'libelle_ar' => 'مديرية التخطيط والتنمية الجهوية',
            ],
        ]);
    }
}
