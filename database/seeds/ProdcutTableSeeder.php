<?php

use Illuminate\Database\Seeder;

class ProdcutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product= new App\Product([
            'imagePath'=>'http://tesseraguild.com/wp-content/uploads/2018/06/Potter.png',
            'title'=>'Harry Potter',
            'description'=>'This is harry potter series1',
            'price'=>125
        ]);
        
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'http://tesseraguild.com/wp-content/uploads/2018/06/Hobbit-661x1024.jpg',
            'title'=>'Hobbit',
            'description'=>'This is harry potter series2',
            'price'=>124,
        ]);
    
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'http://tesseraguild.com/wp-content/uploads/2018/06/Fear-and-Loathing.jpg',
            'title'=>'Fear-and-Loathing',
            'description'=>'This is harry potter series3',
            'price'=>123,
        ]);
    
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'http://tesseraguild.com/wp-content/uploads/2018/06/Hound-650x1024.jpg',
            'title'=>'Hound',
            'description'=>'This is harry potter series4',
            'price'=>122,
        ]);
    
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'http://tesseraguild.com/wp-content/uploads/2018/06/Jurassic.jpg',
            'title'=>'Jurassic',
            'description'=>'This is harry potter series5',
            'price'=>121,
        ]);
    
        $product->save();
        $product= new App\Product([
            'imagePath'=>'http://tesseraguild.com/wp-content/uploads/2018/06/Silence.jpg',
            'title'=>'Silencer',
            'description'=>'This is harry potter series5',
            'price'=>124,
        ]);
    
        $product->save();
    }
}
