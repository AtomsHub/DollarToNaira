<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Currencyrates;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrencyController extends Controller
{

    
    public function dashboardindex()
    {
          return view('dashboard.index');
    }



    public function MAININDEX()
    {
        $currencies = Currencyrates::all();
        $ExchangeRate = ExchangeRate::all();
        // $rate = DB::table('exchange_rates')
        // ->where('id', 2)
        // ->where('provider', 'Black Market')
        // ->value('rate');
        $rate = Currencyrates::with(['currency'])->where('currency_id', '1')->first();

            // dd($rate);

        // Define the dollar values
        $dollarValues = [1, 5, 10, 15, 20, 25, 30, 37, 40,45,50,60,70,100,150,200,250,300,400,500,700,1000,1500,2000,3000];

        // Calculate conversions
        $conversions = [];
        foreach ($dollarValues as $value) {
            $conversions[] = [
                'dollar' => $value,
                'naira' => $value * $rate->buy
            ];
        }

        return view('index', compact('currencies','ExchangeRate', 'conversions'));
    }


    public function zzconvert($from, $amount)
    {
       

        $Currency =Currency::where('code',$from)->value('id');
        // currencyrates

        $currencyrates = Currencyrates::with(['currency'])
        ->where('currency_id', $Currency)
        ->first();


        // $dinst = $exchangeRates->unique('currency_id')->first();

        // $dinst->currency->code, 

        // dd($dinst);

        // Filter the black market rate
        // $blackMarket = $exchangeRates->firstWhere('provider', 'Black Market');

        // // Filter the CBN rate
        // $cbn = $exchangeRates->firstWhere('provider', 'CBN');

        // dd([
        //     'blackMarketRate' => $blackMarket ? $blackMarket->rate : null,
        //     'cbnRate' => $cbn ? $cbn->rate : null,
        // ]);
      

        if ($currencyrates) {
            $rate = $currencyrates->buy ? $currencyrates->buy:0.00;
            $conversion = [
                'amount' => $amount,
                'naira' => $amount * $rate,
            
                'rate' => $rate,
                
                'code' => $currencyrates->currency->code, // Access the related currency model
                'name' => $currencyrates->currency->name,
            ];



        }

        return view('currency', compact('conversion'));
    }




    public function showBlogs()
    {
        $response = Http::get('https://dollartonaira.com.ng/MyBlog/wp-json/wp/v2/posts?_embed');
        $posts = $response->json();

        $blogs = collect($posts)->map(function ($post) {
            return [
                'title' => $post['title']['rendered'],
                'excerpt' => strip_tags($post['excerpt']['rendered']),
                'date' => date('d/m/Y', strtotime($post['date'])),
                'thumbnail' => $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? 'assets/img/blog/default.jpg',
                'link' => $post['link'],
            ];
        });

        return view('blog', compact('blogs'));
    }



    public function convert($amount)
    {
        $exchangeRate = 750; // Replace this with your actual dynamic exchange rate source

        // $rate = ExchangeRate::with(['currency'])
        // ->where('id', 2)
        // ->where('provider', 'Black Market')
        // ->value('rate');

        // $conversion = [
        //     'dollar' => $amount,
        //     'naira' => $amount * $rate,
        //     'rate' =>$rate,
        //     'name'=> $rate->currency->name,

        // ];

        $rate = Currencyrates::with(['currency'])->where('currency_id', '1')->first();

        $conversion = [
            'dollar' => $amount,
            'naira' => $amount * $rate->buy,
            'rate' =>$rate,
            'name'=> $rate->currency->name,

        ];

        return view('currency', compact('conversion'));
    }


    // Show all currencies
    public function index()
    {
        $currencies = Currencyrates::with(['currency'])->get();
        return view('dashboard.currency', compact('currencies'));
    }

    // Show the form to edit a currency
    public function edit($id)
    {
        $currency = Currencyrates::findOrFail($id);
        return view('dashboard.edit', compact('currency'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'currency_id' => 'required|numeric|max:255',
            'buy' => 'required|numeric',
            'sell' => 'required|numeric',
        ]);
    
        Currencyrates::create($request->all());
    
        return redirect()->route('currencies.index')->with('success', 'Currency added successfully!');
    }
    // Update the currency
    public function update(Request $request)
    {
        // dd($request->all());
        $currency = Currencyrates::findOrFail($request->id);
        
        // dd($id);
        $currency->update($request->all());

        return redirect()->route('currencies.index')->with('success', 'Currency updated successfully!');


    }

    public function getRate($currency)
    {
        // $rate = ExchangeRate::with(['currency'])->where('currency_id', $currency)->first();

        $rate = Currencyrates::with(['currency'])->where('currency_id', '1')->first();

        


        // dd($rate);
        if ($rate) {
            return response()->json(['success' => true,'currency'=>$rate->currency->code, 'rate' => $rate->buy]);
        }

        return response()->json(['success' => false, 'message' => 'Currency not found'], 404);
    }

  



    // Delete the currency
    public function destroy($id)
    {
        $currency = Currencyrates::findOrFail($id);
        $currency->delete();

        return redirect()->route('currencies.index')->with('success', 'Currency deleted successfully!');
    }
}

