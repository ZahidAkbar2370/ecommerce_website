<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Category;

class ApiController extends Controller
{
    public function api()
    {

        $products =Http::get('https://fakestoreapi.com/products')->json();
        $categorys =Http::get('https://fakestoreapi.com/products/categories')->json();



        foreach ($products as $key => $value) {

            $checkcount=Product::where('id',$value['id'])->count();
            
            if($checkcount>0)   
            {
                $product = Product::where('id',$value['id'])->update([

                    'product_name' => $value['title'],
                    'category' => $value['category'],
                    'price' => $value['price'],
                    'description' => $value['description'],
                    'image' => $value['image'],
                ]);
            }
            else 
            {
                
                $product = Product::create([

                    'product_name' => $value['title'],
                    'category' => $value['category'],
                    'price' => $value['price'],
                    'description' => $value['description'],
                    'image' => $value['image'],
                ]);
            }

        }

        foreach ($categorys as $key => $category) {
            
            $checkcount=Category::where('category_name',$category)->count();
            
            if($checkcount>0)   
            {
                $save_category = Category::where('category_name',$category)->update([

                'category_name' => $category,
                'status' => '1',
                ]);
            }
            else
            {
                $save_category = Category::create([

                'category_name' => $category,
                'status' => '1',
                ]);
            }
                

        }

        return redirect('index');
    	 
    }




    public function apis()
    {
//Currency Prices                         
     $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    $parameters = [
 
    'convert' => 'USD'
    ];

    $headers = [
   'Accepts: application/json',
   'X-CMC_PRO_API_KEY: 7d526d9e-ae36-4909-bee8-0e5c121081c0'
    ];
    $qs = http_build_query($parameters); // query string encode the parameters
     $request = "{$url}?{$qs}"; // create the request URL


    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array($curl, array(
     CURLOPT_URL => $request,            // set the request URL
     CURLOPT_HTTPHEADER => $headers,     // set the headers 
     CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    ));

    $response = curl_exec($curl); // Send the request, save the response
    curl_close($curl); // Close request
    // dd(json_decode($response)->data[0]->quote->USD->price);
    $response_value=json_decode($response)->data;
    echo "<pre>";
    print_r($response_value);


//Currency Prices                         
       $response_value=(Http::get('https://api.coincap.io/v2/assets')->json());
     echo "<pre>";
      print_r($response_value);
      echo "</pre>";

        //Get your public IP address                         
        $url10 =Http::get('https://api.ipify.org/?format=json')->json();
            echo "<pre>";
            print_r($url10);

        //US public data                      
        $url10 =Http::get('https://datausa.io/api/data?drilldowns=Nation&measures=Population')->json();
            echo "<pre>";
            print_r($url10);

        //Cryptocurrency data                   
        $url10 =Http::get('https://api.coinpaprika.com/v1/coins/btc-bitcoin')->json();
            echo "<pre>";
            print_r($url10);

        //Currency Exchange rates                 
        $url10 =Http::get('https://api.coingecko.com/api/v3/exchange_rates')->json();
            echo "<pre>";
            print_r($url10['rates']);

        //Bitcoin price index               
        $url10 =Http::get('https://api.coindesk.com/v1/bpi/currentprice.json')->json();
            echo "<pre>";
            print_r($url10);

        //Cocktail recipes            
        $url10 =Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita')->json();
            echo "<pre>";
            print_r($url10['drinks'][0]);

        //Large public digital archive           
        $url10 =Http::get('https://archive.org/advancedsearch.php?q=subject:google+sheets&output=json')->json();
            echo "<pre>";
            print_r($url10);

        //Weather forecasts          
        $url10 =Http::get('https://www.7timer.info/bin/astro.php?lon=113.2&lat=23.1&ac=0&unit=metric&output=json&tzshift=0')->json();
            echo "<pre>";
            print_r($url10['dataseries'][0]);

        //Pakistani Universities         
        $url10 =Http::get('http://universities.hipolabs.com/search?country=Pakistan')->json();
            echo "<pre>";
            print_r($url10);

        //Word Universities         
        $url10 =Http::get('http://universities.hipolabs.com/search')->json();
            echo "<pre>";
            print_r($url10);

        //TV show information          
        $url10 =Http::get('http://api.tvmaze.com/search/shows?q=golden%20girls')->json();
            echo "<pre>";
            print_r($url10[0]);


        //Location and quality of life data        
        $url10 =Http::get('https://api.teleport.org/api/urban_areas/teleport%3A9q8yy/scores/')->json();
            echo "<pre>";
            print_r($url10);

        //Country information        
        $url10 =Http::get('https://restcountries.eu/rest/v2/all')->json();
            echo "<pre>";
            print_r($url10[0]['name']);

        //Recipes     
        $url10 =Http::get('http://www.recipepuppy.com/api/?i=onions,garlic&q=omelet')->json();
            echo "<pre>";
            print_r($url10['results'][0]);

        //Fake user data generator     
        $url10 =Http::get('https://randomuser.me/api/')->json();
            echo "<pre>";
            print_r($url10);

        //Beer recipes    
        $url9 =Http::get('https://api.punkapi.com/v2/beers')->json();
            echo "<pre>";
            print_r($url9[0]['name']);

        //List public APIs     
        $url9 =Http::get('https://api.publicapis.org/entries')->json();
            echo "<pre>";
            print_r($url9['entries']);

        //Federal Drug Administration data     
        $url8 =Http::get('https://api.fda.gov/food/enforcement.json?limit=10')->json();
            echo "<pre>";
            print_r($url8);

        //Information about books      
        $url7 =Http::get('http://openlibrary.org/api/volumes/brief/isbn/9780525440987.json')->json();
            echo "<pre>";
            print_r($url7);

        //Data on food products    
        $url4 =Http::get('https://world.openfoodfacts.org/api/v0/product/737628064502.json')->json();
            echo "<pre>";
            print_r($url4);

        //Breweries   
        $url3 =Http::get('https://api.openbrewerydb.org/breweries')->json();
            echo "<pre>";
            print_r($url3[0]);

        //Public holidays     
        $url4 =Http::get('https://date.nager.at/api/v2/publicholidays/2020/US')->json();
            echo "<pre>";
            print_r($url4[0]['date']);

        //Music data   
        $url3 =Http::get('http://musicbrainz.org/ws/2/artist/5b11f4ce-a62d-471e-81fc-a69a8278c7da?fmt=json')->json();
            echo "<pre>";
            print_r($url3['area']['name']);

        //Makeup brands and product info    
        $url2 =Http::get('http://makeup-api.herokuapp.com/api/v1/products.json?brand=maybelline')->json();
            echo "<pre>";
            print_r($url2[0]['name']);


        //available job api

        $url1 =Http::get('https://jobs.github.com/positions.json?description=api')->json();
            echo "<pre>";
            print_r($url1[0]['id']);


        // Large public digital archive

        $url =Http::get('https://archive.org/advancedsearch.php?q=subject:google+sheets&output=json')->json();
            echo "<pre>";
            print_r($url['response']['docs'][0]);
    }
}
