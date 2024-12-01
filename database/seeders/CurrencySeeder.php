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
            ['name' => 'United States Dollar', 'code' => 'USD', 'symbol' => '$'],
            ['name' => 'Euro', 'code' => 'EUR', 'symbol' => '€'],
            ['name' => 'British Pound Sterling', 'code' => 'GBP', 'symbol' => '£'],
            ['name' => 'Australian Dollar', 'code' => 'AUD', 'symbol' => 'A$'],
            ['name' => 'Canadian Dollar', 'code' => 'CAD', 'symbol' => 'C$'],
            ['name' => 'Swiss Franc', 'code' => 'CHF', 'symbol' => 'CHF'],
            ['name' => 'Japanese Yen', 'code' => 'JPY', 'symbol' => '¥'],
            ['name' => 'Chinese Yuan Renminbi', 'code' => 'CNY', 'symbol' => '¥'],
            ['name' => 'Indian Rupee', 'code' => 'INR', 'symbol' => '₹'],
            ['name' => 'South African Rand', 'code' => 'ZAR', 'symbol' => 'R'],
            ['name' => 'Brazilian Real', 'code' => 'BRL', 'symbol' => 'R$'],
            ['name' => 'Russian Ruble', 'code' => 'RUB', 'symbol' => '₽'],
            ['name' => 'Mexican Peso', 'code' => 'MXN', 'symbol' => '$'],
            ['name' => 'Singapore Dollar', 'code' => 'SGD', 'symbol' => 'S$'],
            ['name' => 'Hong Kong Dollar', 'code' => 'HKD', 'symbol' => 'HK$'],
            ['name' => 'New Zealand Dollar', 'code' => 'NZD', 'symbol' => 'NZ$'],
            ['name' => 'Swedish Krona', 'code' => 'SEK', 'symbol' => 'kr'],
            ['name' => 'Norwegian Krone', 'code' => 'NOK', 'symbol' => 'kr'],
            ['name' => 'Danish Krone', 'code' => 'DKK', 'symbol' => 'kr'],
            ['name' => 'Indonesian Rupiah', 'code' => 'IDR', 'symbol' => 'Rp'],
            ['name' => 'Thai Baht', 'code' => 'THB', 'symbol' => '฿'],
            ['name' => 'Malaysian Ringgit', 'code' => 'MYR', 'symbol' => 'RM'],
            ['name' => 'Philippine Peso', 'code' => 'PHP', 'symbol' => '₱'],
            ['name' => 'Egyptian Pound', 'code' => 'EGP', 'symbol' => 'ج.م'],
            ['name' => 'Argentine Peso', 'code' => 'ARS', 'symbol' => '$'],
            ['name' => 'Turkish Lira', 'code' => 'TRY', 'symbol' => '₺'],
            ['name' => 'South Korean Won', 'code' => 'KRW', 'symbol' => '₩'],
            ['name' => 'Israeli New Shekel', 'code' => 'ILS', 'symbol' => '₪'],
            ['name' => 'Kuwaiti Dinar', 'code' => 'KWD', 'symbol' => 'د.ك'],
            ['name' => 'Bahraini Dinar', 'code' => 'BHD', 'symbol' => '.د.ب'],
            ['name' => 'Qatari Riyal', 'code' => 'QAR', 'symbol' => 'ر.ق'],
            ['name' => 'Omani Rial', 'code' => 'OMR', 'symbol' => 'ر.ع.'],
            ['name' => 'Saudi Riyal', 'code' => 'SAR', 'symbol' => 'ر.س'],
            ['name' => 'Vietnamese Dong', 'code' => 'VND', 'symbol' => '₫'],
            ['name' => 'Pakistani Rupee', 'code' => 'PKR', 'symbol' => '₨'],
            ['name' => 'Bangladeshi Taka', 'code' => 'BDT', 'symbol' => '৳'],
            ['name' => 'Colombian Peso', 'code' => 'COP', 'symbol' => '$'],
            ['name' => 'Peruvian Nuevo Sol', 'code' => 'PEN', 'symbol' => 'S/'],
            ['name' => 'Chilean Peso', 'code' => 'CLP', 'symbol' => '$'],
            ['name' => 'Kenyan Shilling', 'code' => 'KES', 'symbol' => 'KSh'],
            ['name' => 'Ugandan Shilling', 'code' => 'UGX', 'symbol' => 'USh'],
            ['name' => 'Tanzanian Shilling', 'code' => 'TZS', 'symbol' => 'TSh'],
            ['name' => 'Mauritian Rupee', 'code' => 'MUR', 'symbol' => '₨'],
            ['name' => 'Sri Lankan Rupee', 'code' => 'LKR', 'symbol' => 'Rs'],
            ['name' => 'Nepalese Rupee', 'code' => 'NPR', 'symbol' => 'रू'],
            ['name' => 'Iraqi Dinar', 'code' => 'IQD', 'symbol' => 'ع.د'],
            ['name' => 'Afghan Afghani', 'code' => 'AFN', 'symbol' => '؋'],
            ['name' => 'Georgian Lari', 'code' => 'GEL', 'symbol' => '₾'],
            ['name' => 'Armenian Dram', 'code' => 'AMD', 'symbol' => '֏'],
            ['name' => 'Kazakhstani Tenge', 'code' => 'KZT', 'symbol' => '₸'],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
