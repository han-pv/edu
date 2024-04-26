<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tüm kursları al
        $courses = Course::all();

        // Her bir kurs için 200 kez grup oluştur
        for ($i = 0; $i < 200; $i++) {
            foreach ($courses as $course) {
                // Kursun adı
                $courseName = $course->name;

                // Grup adı için başlangıç harfi
                $groupLetter = 'A';

                do {
                    // Grup adını oluştur
                    $groupName = $courseName . ' - ' . $groupLetter;

                    // Aynı kursun daha önce oluşturulmuş gruplarını kontrol et
                    $existingGroup = Group::where('course_id', $course->id)
                        ->where('name', $groupName)
                        ->exists();

                    // Eğer aynı grup daha önce oluşturulmuşsa bir sonraki harfe geç
                    if ($existingGroup) {
                        $groupLetter++;
                    }
                } while ($existingGroup);

                // Grubu veritabanına ekle
                Group::create([
                    'course_id' => $course->id,
                    'name' => $groupName,
                ]);
            }
        }
    }
}
