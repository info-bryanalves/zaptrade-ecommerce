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
                'thumbnail' => '/img/product.jpg',
                'name' => 'PC Gamer com Monitor Gamer Intel Core i7 8GB (Geforce GTX 1060 6GB) HD 1TB 500W 80 Plus',
                'price' => 4549.00,
                'description' => 'Um bom desempenho depende não somente de treinamento, mas também de um ótimo equipamento. Sabendo disso a Belmicro criou essa linha de PCs Games para você.
                Experimente jogar com alta qualidade gráfica, rodando sem quebra de imagem ou lag.A combinação dos processadores Intel com a placa de vídeo Nvidia GeForce® Gtx 1060 oferece desempenho e qualidade gráfica para você subir de nível em qualquer jogo.',
            ],
            [
                'id' => 2,
                'thumbnail' => '/img/tv.png',
                'name' => 'Smart Tv Led 32 Samsung Hd Hdmi Usb Wi-fi Lh32 4K',
                'price' => 989.00,
                'description' => 'Experimente cores como na vida real com a Smart TV LED Samsung Lh32. Ela possui a melhor qualidade de imagem, graças a tecnologia Ultra HD 4K, que entrega uma imagem mais realista e uma imersão em cores e contraste, redefinindo a experiência de assistir TV.',
            ],
            [
                'id' => 3,
                'thumbnail' => '/img/smartphone.png',
                'name' => 'Xiaomi Mi 9T Dual SIM 64 GB Vermelho-chama 6 GB RAM',
                'price' => 1.839,
                'description' => 'Inteligente e preditivo. O sistema operacional avançado Android 9.0 Pie aprende seus hábitos para se adaptar à sua rotina e obter a máxima eficiência de seu equipamento. Seu dispositivo terá a autonomia necessária para reduzir o consumo de energia, ajustando automaticamente o brilho e gerenciando a bateria de maneira inteligente, para que você possa priorizar o uso de seus aplicativos usuais.',
            ],
        ];

        DB::table('products')->insert($products);
    }
}
