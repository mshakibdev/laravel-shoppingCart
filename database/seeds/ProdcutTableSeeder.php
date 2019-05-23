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
            'imagePath'=>'https://dynamic.indigoimages.ca/books/1338099132.jpg?altimages=false&scaleup=true&maxheight=515&width=380&quality=85&sale=11&lang=en"',
            'title'=>'Harry Potter',
            'description'=>'This is harry potter series1',
            'price'=>125
        ]);
        
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'https://dynamic.indigoimages.ca/books/1338099132.jpg?altimages=false&scaleup=true&maxheight=515&width=380&quality=85&sale=11&lang=en"',
            'title'=>'Harry Potter',
            'description'=>'This is harry potter series2',
            'price'=>124,
        ]);
    
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'https://dynamic.indigoimages.ca/books/1338099132.jpg?altimages=false&scaleup=true&maxheight=515&width=380&quality=85&sale=11&lang=en"',
            'title'=>'Harry Potter',
            'description'=>'This is harry potter series3',
            'price'=>123,
        ]);
    
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'https://dynamic.indigoimages.ca/books/1338099132.jpg?altimages=false&scaleup=true&maxheight=515&width=380&quality=85&sale=11&lang=en"',
            'title'=>'Harry Potter',
            'description'=>'This is harry potter series4',
            'price'=>122,
        ]);
    
        $product->save();
    
        $product= new App\Product([
            'imagePath'=>'https://dynamic.indigoimages.ca/books/1338099132.jpg?altimages=false&scaleup=true&maxheight=515&width=380&quality=85&sale=11&lang=en"',
            'title'=>'Harry Potter',
            'description'=>'This is harry potter series5',
            'price'=>121,
        ]);
    
        $product->save();
    }
}
