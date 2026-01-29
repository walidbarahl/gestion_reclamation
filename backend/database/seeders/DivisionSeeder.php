<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Division::insert([
            [
                'id' => 1,
                'libelle' => 'Div. Budget, Finances et Équipements',
                'libelle_ar' => 'الميزانية المالية والتجهيزات',
                'direction_id' => 3,
            ],
            [
                'id' => 2,
                'libelle' => 'Div des Ressources Humaines et de l’Ingénierie de Formation',
                'libelle_ar' => 'الموارد البشرية وهندسة التكوين',
                'direction_id' => 3,
            ],
            [
                'id' => 3,
                'libelle' => 'Div de l’Economie Solidaire et Développement Social',
                'libelle_ar' => 'الإقتصاد التضامني والتنمية الإجتماعية',
                'direction_id' => 4,
            ],
            [
                'id' => 4,
                'libelle' => 'Div. de la planification, de la programmation et de l\'environnement',
                'libelle_ar' => 'التخطيط البرمجة، والبيئة',
                'direction_id' => 4,
            ],
            [
                'id' => 5,
                'libelle' => 'Div. Affaires Economiques, du Partenariat et de la Promotion de l\'emploi',
                'libelle_ar' => 'الشؤون الإقتصادية والشراكة',
                'direction_id' => 4,
            ],
        ]);
    }
}
