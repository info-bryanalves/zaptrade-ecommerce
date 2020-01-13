<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            [
                'id' => 1,
                'thumbnail' => '/uploads/products/1/product.jpg',
                'name' => 'PC Gamer com Monitor Gamer Intel Core i7 8GB (Geforce GTX 1060 6GB) HD 1TB 500W 80 Plus',
                'price' => 4549.00,
                'description' => 'Um bom desempenho depende não somente de treinamento, mas também de um ótimo equipamento. Sabendo disso a Belmicro criou essa linha de PCs Games para você.
                Experimente jogar com alta qualidade gráfica, rodando sem quebra de imagem ou lag.',
                'created_by' => 2,
                'status' => 'active',
                'status_changed_by' => 1
            ],
            [
                'id' => 2,
                'thumbnail' => '/uploads/products/2/tv.png',
                'name' => 'Smart Tv Led 32 Samsung Hd Hdmi Usb Wi-fi Lh32 4K',
                'price' => 989.00,
                'description' => 'Experimente cores como na vida real com a Smart TV LED Samsung. Ela possui a melhor qualidade de imagem, graças a tecnologia Ultra HD 4K, que entrega uma imagem mais realista e uma imersão em cores e contraste, redefinindo a experiência de assistir TV.',
                'created_by' => 2,
                'status' => 'pending',
                'status_changed_by' => null
            ],
            [
                'id' => 3,
                'thumbnail' => '/uploads/products/3/smartphone.png',
                'name' => 'Xiaomi Mi 9T Dual SIM 64 GB Vermelho-chama 6 GB RAM',
                'price' => 1839.00,
                'description' => 'O Xiaomi Mi 9T é um smartphone Android avançado e abrangente em todos os pontos de vista com algumas características excelentes. Tem uma grande tela de 6.39 polegadas com uma resolução de 2340x1080 pixels.',
                'created_by' => 2,
                'status' => 'active',
                'status_changed_by' => 1
            ],
        ];

        DB::table('products')->insert($products);
    }
}
