<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;
use Illuminate\Http\Request;

class echangeController extends Controller
{
    //
    public function index()
    {
        // Fetch all exchange rates and pass to the view
        $exchangeRates = ExchangeRate::with(['currency'])->get();
        return view('dashboard.exchange_rate', compact('exchangeRates'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'currency_id' => 'required|numeric',
            'provider' => 'required|string',
            'rate' => 'required|numeric',
        ]);

        // Store new exchange rate
        ExchangeRate::create($validated);

        return redirect()->route('exchange-rates.index')->with('success', 'Exchange rate created successfully!');
    }

   


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $currency = ExchangeRate::findOrFail($id);
        $currency->update($request->all());

        return redirect()->route('exchange-rates.index')->with('success', 'Exchange rate updated successfully!');
    }



    public function destroy($id)
    {
        $exchangeRate = ExchangeRate::find($id);
        if ($exchangeRate) {
            $exchangeRate->delete();
            return redirect()->route('exchange-rates.index')->with('success', 'Exchange rate deleted successfully!');
        }

        return redirect()->route('exchange-rates.index')->with('error', 'Exchange rate not found.');
    }
}
