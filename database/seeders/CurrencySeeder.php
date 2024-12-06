<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
        $currencies = [
            ['name' => 'United States Dollar', 'code' => 'USD', 'symbol' => '$', 'image_url' => 'assets/img/currency/usd.png', 'flag_code' => 'US'],
            ['name' => 'Euro', 'code' => 'EUR', 'symbol' => '€', 'image_url' => 'assets/img/currency/eur.png', 'flag_code' => 'EU'],
            ['name' => 'British Pound Sterling', 'code' => 'GBP', 'symbol' => '£', 'image_url' => 'assets/img/currency/gbp.png', 'flag_code' => 'GB'],
            ['name' => 'Australian Dollar', 'code' => 'AUD', 'symbol' => 'A$', 'image_url' => 'assets/img/currency/ausdoll.png', 'flag_code' => 'AU'],
            ['name' => 'Canadian Dollar', 'code' => 'CAD', 'symbol' => 'C$', 'image_url' => 'assets/img/currency/cad.png', 'flag_code' => 'CA'],
            ['name' => 'Swiss Franc', 'code' => 'CHF', 'symbol' => 'CHF', 'image_url' => 'assets/img/currency/chf.png', 'flag_code' => 'CH'],
            ['name' => 'Japanese Yen', 'code' => 'JPY', 'symbol' => '¥', 'image_url' => 'assets/img/currency/jpy.png', 'flag_code' => 'JP'],
            ['name' => 'Chinese Yuan Renminbi', 'code' => 'CNY', 'symbol' => '¥', 'image_url' => 'assets/img/currency/cny.png', 'flag_code' => 'CN'],
            ['name' => 'Indian Rupee', 'code' => 'INR', 'symbol' => '₹', 'image_url' => 'assets/img/currency/inr.png', 'flag_code' => 'IN'],
            ['name' => 'South African Rand', 'code' => 'ZAR', 'symbol' => 'R', 'image_url' => 'assets/img/currency/zar.png', 'flag_code' => 'ZA'],
            ['name' => 'Saudi Riyal', 'code' => 'SAR', 'symbol' => 'ر.س', 'image_url' => 'assets/img/currency/sar.png', 'flag_code' => 'SA'],
        ];
        // $currencies = [
        //     // ['name' => 'United States Dollar', 'code' => 'USD', 'symbol' => '$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Euro', 'code' => 'EUR', 'symbol' => '€','image_url'=>'assets/img/currency/eur.png'],
        //     // ['name' => 'British Pound Sterling', 'code' => 'GBP', 'symbol' => '£','image_url'=>'assets/img/currency/gbp.png'],
        //     // ['name' => 'Australian Dollar', 'code' => 'AUD', 'symbol' => 'A$','image_url'=>'assets/img/currency/ausdoll.png'],
        //     // ['name' => 'Canadian Dollar', 'code' => 'CAD', 'symbol' => 'C$','image_url'=>'assets/img/currency/cad.png'],
        //     // ['name' => 'Swiss Franc', 'code' => 'CHF', 'symbol' => 'CHF','image_url'=>'assets/img/currency/chf.png'],
        //     // ['name' => 'Japanese Yen', 'code' => 'JPY', 'symbol' => '¥','image_url'=>'assets/img/currency/jpy.png'],
        //     // ['name' => 'Chinese Yuan Renminbi', 'code' => 'CNY', 'symbol' => '¥','image_url'=>'assets/img/currency/cny.png'],
        //     // ['name' => 'Indian Rupee', 'code' => 'INR', 'symbol' => '₹','image_url'=>'assets/img/currency/inr.png'],
        //     // ['name' => 'South African Rand', 'code' => 'ZAR', 'symbol' => 'R','image_url'=>'assets/img/currency/zar.png'],
        //     // ['name' => 'Saudi Riyal', 'code' => 'SAR', 'symbol' => 'ر.س','image_url'=>'assets/img/currency/sar.png'],


            

        //     // ['name' => 'Brazilian Real', 'code' => 'BRL', 'symbol' => 'R$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Russian Ruble', 'code' => 'RUB', 'symbol' => '₽','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Mexican Peso', 'code' => 'MXN', 'symbol' => '$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Singapore Dollar', 'code' => 'SGD', 'symbol' => 'S$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Hong Kong Dollar', 'code' => 'HKD', 'symbol' => 'HK$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'New Zealand Dollar', 'code' => 'NZD', 'symbol' => 'NZ$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Swedish Krona', 'code' => 'SEK', 'symbol' => 'kr','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Norwegian Krone', 'code' => 'NOK', 'symbol' => 'kr','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Danish Krone', 'code' => 'DKK', 'symbol' => 'kr','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Indonesian Rupiah', 'code' => 'IDR', 'symbol' => 'Rp','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Thai Baht', 'code' => 'THB', 'symbol' => '฿','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Malaysian Ringgit', 'code' => 'MYR', 'symbol' => 'RM','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Philippine Peso', 'code' => 'PHP', 'symbol' => '₱','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Egyptian Pound', 'code' => 'EGP', 'symbol' => 'ج.م','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Argentine Peso', 'code' => 'ARS', 'symbol' => '$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Turkish Lira', 'code' => 'TRY', 'symbol' => '₺','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'South Korean Won', 'code' => 'KRW', 'symbol' => '₩','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Israeli New Shekel', 'code' => 'ILS', 'symbol' => '₪','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Kuwaiti Dinar', 'code' => 'KWD', 'symbol' => 'د.ك','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Bahraini Dinar', 'code' => 'BHD', 'symbol' => '.د.ب','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Qatari Riyal', 'code' => 'QAR', 'symbol' => 'ر.ق','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Omani Rial', 'code' => 'OMR', 'symbol' => 'ر.ع.','image_url'=>'assets/img/currency/usd.png'],
           
        //     // ['name' => 'Vietnamese Dong', 'code' => 'VND', 'symbol' => '₫','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Pakistani Rupee', 'code' => 'PKR', 'symbol' => '₨','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Bangladeshi Taka', 'code' => 'BDT', 'symbol' => '৳','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Colombian Peso', 'code' => 'COP', 'symbol' => '$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Peruvian Nuevo Sol', 'code' => 'PEN', 'symbol' => 'S/','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Chilean Peso', 'code' => 'CLP', 'symbol' => '$','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Kenyan Shilling', 'code' => 'KES', 'symbol' => 'KSh','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Ugandan Shilling', 'code' => 'UGX', 'symbol' => 'USh','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Tanzanian Shilling', 'code' => 'TZS', 'symbol' => 'TSh','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Mauritian Rupee', 'code' => 'MUR', 'symbol' => '₨','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Sri Lankan Rupee', 'code' => 'LKR', 'symbol' => 'Rs','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Nepalese Rupee', 'code' => 'NPR', 'symbol' => 'रू','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Iraqi Dinar', 'code' => 'IQD', 'symbol' => 'ع.د','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Afghan Afghani', 'code' => 'AFN', 'symbol' => '؋','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Georgian Lari', 'code' => 'GEL', 'symbol' => '₾','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Armenian Dram', 'code' => 'AMD', 'symbol' => '֏','image_url'=>'assets/img/currency/usd.png'],
        //     // ['name' => 'Kazakhstani Tenge', 'code' => 'KZT', 'symbol' => '₸','image_url'=>'assets/img/currency/usd.png'],
        // ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
