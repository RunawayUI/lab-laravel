<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'LG',
            'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
            'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 3999.00
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPhone 13 Pro Max',
            'description' => 'iPhone 13 Pro Max. Грандиозный апгрейд камер Pro. Режим «Киноэффект» делает из видео настоящее кино. Дисплей Super Retina XDR с технологией ProMotion для более быстрого и плавного взаимодействия. A15 Bionic — самый быстрый чип для iPhone. Прочный корпус и самое долгое время работы без подзарядки среди iPhone.',
            'photo' => 'https://c.dns-shop.ru/thumb/st4/fit/500/500/6075cbcc922069c37fccfc69a1630b37/f7507033437927895521494ff780a9903f883f2e22dc229406605d44cf39c05c.jpg',
            'price' => 1290.00
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S22',
            'description' => 'Samsung Galaxy S22 оснащен 6,1-дюймовым дисплеем AMOLED FHD+ с частотой обновления 120 Гц и рекордной яркостью 1750 кд/м2.
                              Для селфи есть 10-мегапиксельная фронтальная камера, а на задней панели располагается 50-мегапиксельная основная камера,
                              12-мегапиксельный сверхширокоугольный модуль и 10-мегапиксельная телеобъектив.',
            'photo' => 'https://c.dns-shop.ru/thumb/st4/fit/500/500/5fcdd2b2e94b04bc59cc565263903dbc/18f4ca89119000b71bc5866850b1b289550a4105c82b2132de2f314d8cc94908.jpg',
            'price' => 9499.00
        ]);

        DB::table('products')->insert([
            'name' => 'Xiaomi 12X',
            'description' => 'Xiaomi 12X оборудован чипом Snapdragon 870 и 6,28-дюймовым дисплеем с разрешением 2400 × 1080 точек.
                              Селфи-камера оснащена 32-Мп датчиком, а тройная тыльная камера состоит из сенсоров на 50, 13 и 5 млн пикселей.
                              Батарея ёмкостью 4500 мА·ч поддерживает 67-Вт проводную зарядку.',
            'photo' => 'https://c.dns-shop.ru/thumb/st1/fit/500/500/148f30c8d46bb8a12acb20fc17274336/4ca1c4516637a2b74eea376fbade668b58f2bf4b0cf5391dcf0a2f033e5d0406.jpg',
            'price' => 1290.00
        ]);

        DB::table('products')->insert([
            'name' => 'Huawei P50 Pocket',
            'description' => 'Huawei P50 Pocket — это первый раскладной смартфон Huawei:
                              он оснащён 6,9-дюймовым гибким дисплеем с разрешением 2790 × 1188 пикселей и частотой обновления 120 Гц.
                              На внешней стороне корпуса расположен вспомогательный круглый экран размером 1 дюйм.',
            'photo' => 'https://c.dns-shop.ru/thumb/st4/fit/wm/0/0/4f642c15e1436109c40ddaa9d451de81/562384e39da1715d1e24f61c9b5c0867b1e6b126d636bf04df785921808c7389.jpg',
            'price' => 1449.00
        ]);

        DB::table('products')->insert([
            'name' => 'POCO F4 GT',
            'description' => 'POCO F4 GT готов предложить геймерам топовый Snapdragon 8 Gen 1 с жидкостным охлаждением и сверхскоростную 120-Вт зарядку,
                              способную полностью зарядить батарею ёмкостью 4700 мАч за 17 минут.
                              Спереди установлен плоский 120-Гц AMOLED-экран диагональю 6,67" с 480-Гц тачем и стеклом Gorilla Glass Victus.',
            'photo' => 'https://c.dns-shop.ru/thumb/st1/fit/500/500/cf1f16cf6c24babf89feb274f56cf10a/802396ab9587d3cfa0d391c87c38b51eee35780a775f6a809ff4b6a94903d8f4.jpg',
            'price' => 6199.00
        ]);
    }
}
