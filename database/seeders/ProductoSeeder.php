<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            [
                'nombre' => 'Crema facial hidratante',
                'descripcion' => 'Crema para hidratar y nutrir la piel del rostro.',
                'precio' => 25.00,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Aceite de rosa mosqueta',
                'descripcion' => 'Aceite natural con propiedades regenerativas para la piel.',
                'precio' => 15.00,
                'stock' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Exfoliante corporal',
                'descripcion' => 'Gel exfoliante para eliminar células muertas y renovar la piel del cuerpo.',
                'precio' => 18.00,
                'stock' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mascarilla facial de arcilla',
                'descripcion' => 'Mascarilla purificante con arcilla para limpiar los poros y suavizar la piel del rostro.',
                'precio' => 20.00,
                'stock' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sérum rejuvenecedor',
                'descripcion' => 'Sérum con ingredientes antioxidantes para reducir los signos de envejecimiento de la piel.',
                'precio' => 30.00,
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Gel limpiador facial',
                'descripcion' => 'Gel suave para limpiar y refrescar la piel del rostro.',
                'precio' => 12.00,
                'stock' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Tónico facial revitalizante',
                'descripcion' => 'Tónico refrescante para tonificar y revitalizar la piel del rostro.',
                'precio' => 18.00,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Crema antiarrugas',
                'descripcion' => 'Crema con ingredientes antiarrugas para reducir los signos de la edad.',
                'precio' => 35.00,
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Contorno de ojos hidratante',
                'descripcion' => 'Crema ligera para hidratar y reducir las ojeras y bolsas en el contorno de los ojos.',
                'precio' => 28.00,
                'stock' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Jabón facial purificante',
                'descripcion' => 'Jabón suave para limpiar y purificar la piel del rostro sin resecarla.',
                'precio' => 10.00,
                'stock' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Aceite esencial de lavanda',
                'descripcion' => 'Aceite esencial relajante con aroma a lavanda para masajes y aromaterapia.',
                'precio' => 8.00,
                'stock' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Loción corporal nutritiva',
                'descripcion' => 'Loción hidratante para nutrir y suavizar la piel del cuerpo.',
                'precio' => 20.00,
                'stock' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mascarilla capilar reparadora',
                'descripcion' => 'Mascarilla nutritiva para reparar el cabello dañado y mejorar su aspecto.',
                'precio' => 15.00,
                'stock' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Protector solar facial SPF 50+',
                'descripcion' => 'Protector solar facial de amplio espectro con factor de protección SPF 50+.',
                'precio' => 22.00,
                'stock' => 55,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Bálsamo labial hidratante',
                'descripcion' => 'Bálsamo labial suavizante para hidratar y proteger los labios.',
                'precio' => 5.00,
                'stock' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
