<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Currencyrates;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CurrencyController extends Controller
{
    public function MAININDEX()
    {
        $currencies = Currencyrates::all();
        $ExchangeRate = ExchangeRate::all();
        $rate = DB::table('exchange_rates')
        ->where('id', 2)
        ->where('provider', 'Black Market')
        ->value('rate');

        // dd($rate);

    // Define the dollar values
    $dollarValues = [1, 5, 10, 15, 20, 25, 30, 37, 40,45,50,60,70,100,150,200,250,300,400,500,700,1000,1500,2000,3000];

    // Calculate conversions
    $conversions = [];
    foreach ($dollarValues as $value) {
        $conversions[] = [
            'dollar' => $value,
            'naira' => $value * $rate
        ];
    }



        return view('index', compact('currencies','ExchangeRate', 'conversions'));
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
    public function update(Request $request, $id)
    {
        $currency = Currencyrates::findOrFail($id);
        $currency->update($request->all());

        return redirect()->route('currencies.index')->with('success', 'Currency updated successfully!');
    }

    public function getRate($currency)
    {
        $rate = ExchangeRate::where('currency_id', $currency)->first();

        if ($rate) {
            return response()->json(['success' => true, 'rate' => $rate->rate]);
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

