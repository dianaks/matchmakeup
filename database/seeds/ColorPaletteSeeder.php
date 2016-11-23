<?php

use Illuminate\Database\Seeder;

class ColorPaletteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color_palette')->insert([
            'name' => 'Porcelain',
            'product_code' => '110',
            'hexcode' => '#FFE3C2'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Ivory',
            'product_code' => '115',
            'hexcode' => '#FFD3BE'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Natural Ivory',
            'product_code' => '112',
            'hexcode' => '#FFE0CD'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Classic Ivory',
            'product_code' => '120',
            'hexcode' => '#F3CFB3'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Creamy Beige',
            'product_code' => '122',
            'hexcode' => '#BD9584'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Nude Beige',
            'product_code' => '125',
            'hexcode' => '#EABDA6'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Warm Nude',
            'product_code' => '128',
            'hexcode' => '#FBD2AD'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Buff Beige',
            'product_code' => '130',
            'hexcode' => '#E2B597'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Natural Beige',
            'product_code' => '220',
            'hexcode' => '#E4B38E'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'True Beige',
            'product_code' => '222',
            'hexcode' => '#B2856F'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Soft Tan',
            'product_code' => '228',
            'hexcode' => '#E8BA8C'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Natural Buff',
            'product_code' => '230',
            'hexcode' => '#F3B584'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Pure Beige',
            'product_code' => '235',
            'hexcode' => '#F0B996'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Rich Tan',
            'product_code' => '238',
            'hexcode' => '#E3B082'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Sun Beige',
            'product_code' => '310',
            'hexcode' => '#EAB181'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Natural Tan',
            'product_code' => '320',
            'hexcode' => '#9D7359'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Warm Honey',
            'product_code' => '322',
            'hexcode' => '#E2AA7B'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Toffe',
            'product_code' => '330',
            'hexcode' => '#D99358'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Golden Caramel',
            'product_code' => '332',
            'hexcode' => '#9C744F'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Classic Tan',
            'product_code' => '335',
            'hexcode' => '#B18B65'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Spicy Brown',
            'product_code' => '338',
            'hexcode' => '#84583F'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Cappuccino',
            'product_code' => '340',
            'hexcode' => '#7D5631'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Coconut',
            'product_code' => '355',
            'hexcode' => '#C07746'
        ]);
        DB::table('color_palette')->insert([
            'name' => 'Mocha',
            'product_code' => '360',
            'hexcode' => '#643C27'
        ]);
    }
}
