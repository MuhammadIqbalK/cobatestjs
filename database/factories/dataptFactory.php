<?php
 
namespace Database\Factories;
 
use App\Models\Data_perusahaan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 
class dataptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Data_perusahaan::class;
 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nama_perusahaan' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'keterangan' => $faker->catchPhrase

        ];
    }
}