<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name,               // สร้างชื่อเรื่อง (title) ด้วยชื่อสุ่ม
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, // เลือก user_id ที่มีอยู่จริง
            'job_type_id' => rand(1, 5),           // เลือก job_type_id แบบสุ่มจากค่า 1 ถึง 5
            'category_id' => rand(1, 5),           // เลือก category_id แบบสุ่มจากค่า 1 ถึง 5
            'vacancy' => rand(1, 5),               // จำนวนตำแหน่งงาน (vacancy) แบบสุ่ม
            'location' => fake()->city,            // สร้างชื่อเมือง (city) ด้วยชื่อเมืองสุ่ม
            'description' => fake()->text,         // สร้างคำอธิบาย (description) แบบสุ่ม
            'experience' => rand(1, 10),           // ระยะเวลาประสบการณ์ (experience) แบบสุ่มจาก 1 ถึง 10
            'company_name' => fake()->name,        // สร้างชื่อบริษัท (company_name) แบบสุ่ม
        ];
    }
}
