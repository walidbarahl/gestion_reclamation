<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
    ['id'=>1,'libelle'=>'Service des Commandes et Marchés','libelle_ar'=>'الطلببات والصفقات','division_id'=>1,'direction_id'=>null],
    ['id'=>2,'libelle'=>'Service du budget et de la comptabilité','libelle_ar'=>'الميزانية والمحاسبة','division_id'=>1,'direction_id'=>null],
    ['id'=>3,'libelle'=>'Service des ressources financières','libelle_ar'=>'الموارد المالية','division_id'=>1,'direction_id'=>null],
    ['id'=>4,'libelle'=>'Service du Matériels et Mobiliers','libelle_ar'=>'الأدوات والمنقولات','division_id'=>1,'direction_id'=>null],
    ['id'=>5,'libelle'=>'Service Foncier, Equipements et Engins','libelle_ar'=>'العقار المرافق والاليات','division_id'=>1,'direction_id'=>null],

    ['id'=>6,'libelle'=>'Service de gestion des affaires du personnel','libelle_ar'=>'تدبير شؤون الموظفين','division_id'=>2,'direction_id'=>null],
    ['id'=>7,'libelle'=>'Service de l’ingénierie de Formation, du Suivi et de l’Evaluation','libelle_ar'=>'هندسة التكوين والتتبع والتقييم','division_id'=>2,'direction_id'=>null],
    ['id'=>8,'libelle'=>'Service des affaires sociales des Fonctionnaires','libelle_ar'=>'الشؤون الإجتماعية للموظفين','division_id'=>2,'direction_id'=>null],

    ['id'=>9,'libelle'=>'Service de l\'économie sociale et solidaire','libelle_ar'=>'الإقتصاد الإجتماعي والتضامني','division_id'=>3,'direction_id'=>null],
    ['id'=>10,'libelle'=>'Service du développement rural et de la promotion du tourisme','libelle_ar'=>'التمية القروية وإنعاش السياحة','division_id'=>3,'direction_id'=>null],
    ['id'=>11,'libelle'=>'Service du développement social et du transport intrarégional','libelle_ar'=>'التنمية الإجتماعية وخدمات النقل داخل الجهة','division_id'=>3,'direction_id'=>null],

    ['id'=>12,'libelle'=>'Service de la planification, des études et de la mise à niveau du monde rural','libelle_ar'=>'التخطيط البرمجة والبيئة','division_id'=>4,'direction_id'=>null],
    ['id'=>13,'libelle'=>'Service du suivi et exécution du PDR','libelle_ar'=>'تتبع تنفيد برنامج التنمية الجهوية','division_id'=>4,'direction_id'=>null],
    ['id'=>14,'libelle'=>'Service de l\'environnement, des énergies renouvelables et de la sauvegarde du patrimoine culturel','libelle_ar'=>'البيئة والطاقات المتجددة والإعتناء بالتراث الثقافي','division_id'=>4,'direction_id'=>null],

    ['id'=>15,'libelle'=>'Service des études économiques, de l’appui aux PME, du marketing territorial et de la promotion de l’investissement','libelle_ar'=>'الدراسات الإقتصادية دعم المقاولات التسوق الترابي وتشجيع الإستثمار','division_id'=>5,'direction_id'=>null],
    ['id'=>16,'libelle'=>'Service de coopération et partenariat','libelle_ar'=>'التعاون والشراكة','division_id'=>5,'direction_id'=>null],
    ['id'=>17,'libelle'=>'Service de la formation professionnelle et de la promotion de l\'emploi','libelle_ar'=>'التكوين المهني وإنعاش الشغل','division_id'=>5,'direction_id'=>null],

    ['id'=>18,'libelle'=>'Service Système d\'Information et des Nouvelles Technologies','libelle_ar'=>'مكتب نظام المعلومات والتكنولوجيا الحديثة','division_id'=>null,'direction_id'=>3],
    ['id'=>19,'libelle'=>'Service des Affaires Juridiques et Contentieux','libelle_ar'=>'مصلحة الشؤون القانونية والمنازعات','division_id'=>null,'direction_id'=>3],
    ['id'=>20,'libelle'=>'Service de l\'Audit Interne et de l\'Evaluation','libelle_ar'=>'مصلحة التدقيق الداخلي والتقييم','division_id'=>null,'direction_id'=>2],

    ['id'=>21,'libelle'=>'Service de la Communication et des Relations Publiques','libelle_ar'=>'مصلحة التواصل والعلاقات العامة','division_id'=>null,'direction_id'=>null],
    ['id'=>22,'libelle'=>'Cabinet','libelle_ar'=>'الديوان','division_id'=>null,'direction_id'=>null],
    ['id'=>23,'libelle'=>'Bureau d’Ordre','libelle_ar'=>'مكتب الضبط','division_id'=>null,'direction_id'=>null],

    ['id'=>24,'libelle'=>'Service des affaires administratives des élus','libelle_ar'=>'مصلحة الشؤون الادارية للمنتخبين','division_id'=>null,'direction_id'=>1],
    ['id'=>25,'libelle'=>'Service des affaires du conseil','libelle_ar'=>'مصلحة شؤون المجلس','division_id'=>null,'direction_id'=>1],
]);
    }
}
