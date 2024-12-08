<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tag -->
        <meta charset="UTF-8">
        <meta name="author" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <meta name="description" content="" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png" />
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons//apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png" />

        <!-- Title -->
        <title>Exchange - Home</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Data Table CSS -->
        <link href="assets/css/datatables.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <style>
            .select2-container .select2-selection__rendered {
              line-height: auto !important; 
            }
            .currency-field {
                border: 1px solid rgba(51, 51, 51, .1);
                height: 48px;
                border-radius: .375rem;
                overflow: hidden;
                background-color: #fff;
                display: flex;
                align-items: center;
            }
            .currency-field .amount-field {
                border: 0;
                border-radius: 0.25rem 0 0 0.25rem;
                font-size: 1.125rem;
                line-height: 1.5rem;
                height: auto;
                padding: 0.25rem 1rem;
                z-index: 2;
            }

            .currency-field .amount-field:focus {
                border: none;
                outline: 0;
                box-shadow: none;
            }

            .select2-container--default .select2-selection--single {
                background-color: #fff;
                border: none;
                border-radius: none;
                margin-right: 5px;
            }

            .currency-selector {
                min-width: 130px !important;
            }
        </style>
    </head>
    <body>

        <!-- Header Starts -->
        <header class="">
            <nav class="navbar navbar-dark navbar-expand-lg d-flex justify-content-between align-items-center py-4 px-3 px-md-5">
                <div class="nav-logo d-flex align-items-center justify-content-between">
                    <span class="nav-logo_text ms-2">DollarToNaira</span>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <a href="" class="d-flex">
                        <img src="assets/img/svg/search.svg" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header Ends -->        


        <section class="" id="exchange">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-8 text-center">
                    <p class="exchange-header">Fast, Reliable Currency Conversions</p>
                    <p class="exchange-sub_header">Get Instant Exchange Rates for Any Currency of our choice</p>
                </div>

                <div class="col-lg-9 col-md-11 exchange-card p-5">
                    <p class="mb-5">Quick Conversion</p>
                    <div class="row row-cols row-cols-1 row-cols-md-3 gy-4">
                        <div class="col">
                            <label for="frmCurrency">From Currency</label>
                            <select class="form-select" id="frmCurrency" name="frmCurrency">
                               
                                @foreach (\App\Models\Currency::has('exchangeRates')->get(); as $currencyhh)
                                    <option value="{{ $currencyhh->id }}">{{ $currencyhh->symbol }} {{ $currencyhh->name }}</option>
                                   
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="Amount">Amount to convert</label>
                            <input type="number" name="Amount" id="Amount" class="form-control" placeholder="Enter amount">
                        </div>
                        
                        <div class="col text-center mt-5">
                            <p class="exchange-coversion mb-2">
                                <span class="fw-light" id="convertedAmount">0</span>
                                <span class="fw-semibold" id="toCurrencyLabel">Nigerian Naira (NGN)</span>
                            </p>
                            {{-- <p class="exchange-coversion_rate">
                                <span id="exchangeRate">1</span>
                                <span id="fromCurrencyLabel">USD = </span>
                                <span id="toCurrencyRateLabel">Naira (NGN)</span>
                            </p> --}}
                        </div>
                        
                    </div>

                </div>

            </div>
        </section>
        <!-- Hero Starts -->
      
        <!-- Hero Ends -->


        <section class="bg-white px-3 px-md-0">
            <div class="container">
                <div class="mb-4">
                    <h3 class="fw-semibold">What is the {{ $conversion['name'] }} worth against the Nigerian Naira today?</h3>
                    <p class="mt-2">1 {{ $conversion['code'] }} is worth  ₦{{ number_format($conversion['blackMarketRate'], 2) }}  NGN today</p>
                </div>
    
                <div class="mb-4">
                    <h3 class="fw-semibold">How much is {{ $conversion['amount'] }}  {{ $conversion['code'] }} worth in NGN?</h3>
                    <p class="mt-2">At the current exchange rate of ₦{{ number_format($conversion['blackMarketRate'], 2) }} , a sum of  {{ $conversion['amount'] }} {{ $conversion['name'] }} is worth ₦ {{ number_format(1000*$conversion['blackMarketRate'], 2) }} Nigerian Naira.</p>
                </div>
    
                <div class="mb-4">
                    <h3 class="fw-semibold">Which currency is stronger? {{ $conversion['code'] }} or NGN?</h3>
                    <p class="mt-2">The {{ $conversion['name'] }} is currently stronger than the Nigerian Naira given that 1 {{ $conversion['code'] }} is equal to ₦{{ number_format($conversion['blackMarketRate'], 2) }} NGN.</p>
                </div>
    
                <div class="mb-4">
                    <h2 class="fw-bold">Overview of {{ $conversion['code'] }} to NGN Performance and Trends</h2>
                    <p class="mt-2">
                        Today, to buy {{ $conversion['amount'] }} {{ $conversion['name'] }}, you need 2,072,590 Nigerian Naira. On the same date last year, you needed 1,011,680 Nigerian Naira for  {{ $conversion['amount'] }} {{ $conversion['name'] }}. This change indicates that the {{ $conversion['name'] }} has become stronger
                        against the Nigerian Naira by 108.86% over the past year.
                    </p>
                    <p class="mt-2">The pair experienced high volatility of 127.96%.</p>
                    <p class="mt-2">High volatility means there is a higher risk of significant price changes. It is better to closely monitor the exchange rate in such situations.</p>
                </div>
    
                <div class="mb-4">
                    <h2 class="fw-bold mb-3">{{ $conversion['code'] }} to NGN Currency Performance and Volatility</h2>
                    <h3 class="fw-semibold">Last 7 Days</h3>
                    <ul>
                        <li><strong>Performance:</strong> £1,000 varied between ₦2,113.04 (weekly low) and ₦2,188.26 (weekly high), a variance of ₦75.22 .</li>
                        <li><strong>Volatility:</strong> Fluctuated by 3.56%.</li>
                    </ul>
                </div>
    
                <div class="mb-4">
                    <h3 class="fw-semibold">Last 30 Days</h3>
                    <ul>
                        <li><strong>Performance:</strong> £1,000 varied between ₦2,112.88 (30-day low) to ₦2,229.83 (30-day high), a variance of ₦116.95 .</li>
                        <li><strong>Volatility:</strong> Fluctuated by 5.54%.</li>
                    </ul>
                </div>
    
                <div class="mb-4">
                    <h3 class="fw-semibold">Last 90 Days</h3>
                    <ul>
                        <li><strong>Performance:</strong> £1,000 varied between ₦2,113.04 (90-day low) to ₦2,253.841 (90-day high), a variance of ₦140.801 .</li>
                        <li><strong>Volatility:</strong> Fluctuated by 6.66%.</li>
                    </ul>
                </div>
    
                <div class="mb-4">
                    <h3 class="fw-semibold">Last Year</h3>
                    <ul>
                        <li><strong>Performance:</strong> £1,000 ranged from ₦988.703 (yearly low) to ₦2,253.841 (yearly high), a variance of ₦1,265.138 .</li>
                        <li><strong>Volatility:</strong> Fluctuated by 127.96%.</li>
                    </ul>
                </div>
    
                {{-- <div class="mb-4">
                    <h2 class="fw-bold mb-3">{{ $conversion['code'] }} to NGN Forecast and trending</h2>
                    <h3 class="fw-semibold">Is the {{ $conversion['name'] }} going up or down against the Nigerian Naira?</h3>
                    <p class="mt-2">Today's {{ $conversion['code'] }} to NGN exchange rate (2,115.04) is smaller compared to yesterday's rate (2,162.88).</p>
                </div> --}}
            </div>
        </section>

        
        <section class="" id="quick_dollar">
            <div class="container">
                <div class="row align-items-center justify-content-between px-3 px-md-5">
    
                    <div class="col-md-6 mt-4">
                      <p class="fw-semibold fs-4 text-center h2 mb-3">CBN Conversion Rate {{ $conversion['name'] }} to Nigerian Naira</p>
    
                        <div class="quick-labels">
                            @php
                                $multipliers = [1, 5, 10, 20, 25, 50, 100, 250, 500, 1000, 2000, 5000, 10000];
                            @endphp
                            @foreach ($multipliers as $multiplier)
                                <div class="quick-label p-3 mb-2">
                                   
                                        <a href="/{{ $conversion['code'] }}-NGN-{{ $multiplier }}" class="">
                                            <p>{{ $multiplier }} {{ $conversion['code'] }} to Nigerian Naira</p>
                                        </a>
                                 
                                    <p>₦ {{ number_format($multiplier * $conversion['cbnRate'], 2) }}</p>
                                </div>
                            @endforeach
                        </div>
                    
                    </div>
    
                    <div class="col-md-6 mt-4">
                        <p class="fw-semibold fs-4 text-center h2 mb-3">Black Market Conversion Rate {{ $conversion['name'] }} to Nigerian Naira</p>
      
                        <div class="quick-labels">
                            @php
                                $multipliers = [1, 5, 10, 20, 25, 50, 100, 250, 500, 1000, 2000, 5000, 10000];
                            @endphp
                            @foreach ($multipliers as $multiplier)
                                <div class="quick-label p-3 mb-2">
                                   
                                        <a href="/{{ $conversion['code'] }}-NGN-{{ $multiplier }}" class="">
                                            <p>{{ $multiplier }} {{ $conversion['code'] }} to Nigerian Naira</p>
                                        </a>
                                 
                                    <p>₦ {{ number_format($multiplier * $conversion['blackMarketRate'], 2) }}</p>
                                </div>
                            @endforeach
                        </div>
                        
                        
                       
                     
                </div>
            </div>
        </section>
        

        
        <section class="bg-white">
            <div class="container">
                <h2 class="h2 text-center fw-bold mb-4">Currency information</h2>
                <div class="row align-items-center justify-content-between px-3 px-md-0">
                    <div class="col-md-6 mt-4">
                        <h3 class="mb-3 fw-semibold">
                            <span class="fi fi-gb"></span>
                            {{ $conversion['code'] }} - {{ $conversion['name'] }}        
                        </h3>
                        <div>
                            <p class="mb-3 fs-5"><span class="fw-bold">The currency code for {{ $conversion['name'] }}</span> is {{ $conversion['code'] }}. </p>
                            <p class="mb-3 fs-5"><span class="fw-bold">The {{ $conversion['code'] }} currency symbol</span> is £.</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">Minor unit:</span> 1/100 = Penny</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">{{ $conversion['code'] }} rank by most traded currencies:</span> 4</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">Avg proportion of daily world trade volume:</span> 6.45%</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">{{ $conversion['code'] }} rank by strongest currencies (buying power):</span> 5</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">The {{ $conversion['name'] }} is the currency of 10 countries:</span> <br>United Kingdom, Bailiwick of Guernsey, Isle of Man, Jersey, Falkland Islands, Gibraltar, South Georgia and the South Sandwich Islands, Saint Helena, British Antarctic Territory, Tristan da Cunha</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <h3 class="mb-3 fw-semibold">
                            <span class="fi fi-ng"></span>
                            NGN - Nigerian Naira
                        </h3>
                        <div>
                            <p class="mb-3 fs-5"><span class="fw-bold">The currency code for Nigerian Naira</span> is NGN. </p>
                            <p class="mb-3 fs-5"><span class="fw-bold">The NGN currency symbol</span> is ₦.</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">Minor unit:</span> 1/100 = Kobo</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">NGN rank by most traded currencies:</span> Not in top 40 traded currencies</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">Avg proportion of daily world trade volume:</span> 0% (Low daily trade currency)</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">NGN rank by strongest currencies (buying power):</span> 121</p>
                            <p class="mb-3 fs-5"><span class="fw-bold">The Nigerian Naira is the currency of 1 countries:</span> <br>Nigeria</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>

        <section class="px-3 px-md-0">
            <div class="container">
                <div class="mb-4">
                    <h2 class="fw-bold">Understanding {{ $conversion['code'] }} to NGN Currency Exchange: Our Top Tips</h2>
                    <p class="mt-2">
                        Let's look at some practical information, ideas and tips to help you make sure you can get the most from your money when you convert {{ $conversion['name'] }} to Nigerian Naira, to send a payment, for a trip overseas, when shopping online
                        or to hold a balance in Nigerian Naira.
                    </p>
                </div>

                <div class="mb-4">
                    <h2 class="fw-bold">How to convert {{ $conversion['code'] }} to NGN?</h2>
                    <p class="mt-2">
                        You can convert {{ $conversion['name'] }} to Nigerian Naira either in a physical location or online. If you choose to exchange money at a currency exchange store, bank or at the airport, you'll be given your Nigerian Naira in cash. Or, you
                        can choose to convert digitally, to send a payment overseas for example.
                    </p>
                    <p class="mt-2">If you're exchanging money in a physical location you'll usually need to take the following steps:</p>
                    <ul class="mt-2">
                        <li>Choose an exchange service that suits your needs</li>
                        <li>Head there with the money in {{ $conversion['name'] }} cash to exchange</li>
                        <li>Get a quote for the exchange rate and any commission or fee you need to pay</li>
                        <li>Hand over your money and receive your Nigerian Naira in cash</li>
                    </ul>
                    <p class="mt-2">Exchanging your money digitally is often easier. As an example, here's how to send a payment overseas:</p>
                    <ul class="mt-2">
                        <li>Choose an international payment service that suits your needs and head to their desktop site, or download their app</li>
                        <li>Tap Send Payment</li>
                        <li>Enter the amount in {{ $conversion['name'] }} you want to send, or the amount in Nigerian Naira you want your recipient to get in the end</li>
                        <li>You'll be shown a quote for the exchange rate and any commission or fee you need to pay</li>
                        <li>Choose your preferred payment method, and follow the prompts to pay</li>
                        <li>Your money will be deposited to your recipient's bank account directly, in Nigerian Naira</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h3 class="fw-semibold">How to get the best {{ $conversion['code'] }} to NGN exchange rate?</h3>
                    <p class="mt-2">Because banks, currency exchange offices and international payment services all set their own exchange rates, you'll need to shop around a little to find the best {{ $conversion['code'] }} to NGN exchange rate for your specific transaction.</p>
                    <p class="mt-2">
                        Get to know the {{ $conversion['code'] }}/NGN mid-market exchange rate using reputable currency conversion tools, so you'll be able to see how the market is trending. You can often set up rate alerts so the service you choose will send you a message
                        when the {{ $conversion['code'] }}/NGN mid-market exchange rate hits your preferred level. Once you see a rate you like, act fast to complete your transaction before markets move again.
                    </p>
                    <p class="mt-2">
                        Another smart option is to open a multi-currency account which lets you hold a selection of major world currencies, often including {{ $conversion['name'] }} and Nigerian Naira. This can be helpful if you transact internationally often,
                        live overseas, receive payments from abroad, invest in diverse markets or even if you simply love to shop online with international retailers. Because you can hold a balance in the currency or currencies of your choice, there's
                        no need to convert from one currency to another unnecessarily - you can wait until exchange rates are favorable to avoid losing out.
                    </p>
                </div>
                
                <div class="mb-4">
                    <h3 class="fw-semibold">How to buy {{ $conversion['name'] }} with Nigerian Naira?</h3>
                    <p class="mt-2">
                        You'll be able to exchange Nigerian Naira to {{ $conversion['name'] }} in the same way as you'd exchange {{ $conversion['name'] }} to Nigerian Naira. If you have Nigerian Naira in your pocket in cash, you can take them along to a currency exchange
                        service and ask if they'll buy back in exchange for Nigerian Naira. Be aware that the exchange rate might not be great - so coming back from a trip with as little foreign cash as possible is a smart plan.
                    </p>
                    <p class="mt-2">
                        On the other hand, if you hold {{ $conversion['name'] }} in a bank or specialist provider account, you'll be able to take advantage of online currency exchange services which can often offer fast, efficient and good value conversion which
                        uses a better rate than a bank would.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="fw-semibold">Where to exchange {{ $conversion['code'] }} to NGN?</h3>
                    <p class="mt-2">
                        You can exchange currencies in person at a currency exchange store, bank or airport, or use an online service instead. It's helpful to know that in person currency exchange options can offer a pretty poor deal overall, as
                        exchange rates commonly include a markup - an extra fee. If you're exchanging somewhere with little local competition - like at an airport or hotel, for example - the chances are that the rate you get will be even worse.
                    </p>
                    <p class="mt-2">
                        A good alternative is to open a multi-currency account which lets you hold and exchange currencies digitally - and if you pick an account which also offers a linked debit card, you can make ATM withdrawals at home and abroad
                        whenever you need cash. Digital specialist services can often offer a better exchange rate with lower overall costs compared to using your bank or exchanging cash in person - plus they're intuitive to use and let you manage your
                        money with just your phone.
                    </p>
                </div>
            </div>
        </section>

        <!-- Start FAQ -->
        <section class="bg-white faq">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="title mb-2 mb-md-5 fw-semibold fs-1">Frequently Asked Questions</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="row row-cols-1 gap-3 my-4">
                            <div class="col">
                                <div class="accordion" id="faqAccordion">

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-one" aria-expanded="false" aria-controls="faq-one">
                                                How much is the {{ $conversion['name'] }} to Nigerian Naira?
                                            </button>
                                        </h2>
                                        <div id="faq-one" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                The {{ $conversion['name'] }} to Nigerian Naira exchange rate today is 2,072.59 . Use this guide to learn more about exchanging {{ $conversion['code'] }} to NGN in the easiest and best value way for your specific needs.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-two" aria-expanded="false" aria-controls="faq-two">
                                                How much is 1,000 {{ $conversion['name'] }} to the Nigerian Naira?
                                            </button>
                                        </h2>
                                        <div id="faq-two" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                The {{ $conversion['code'] }} to NGN rate today is 2,072.59 . That means that 1,000 {{ $conversion['name'] }} would be worth 2,072,590 Nigerian Naira.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-three" aria-expanded="false" aria-controls="faq-three">
                                                How to exchange {{ $conversion['name'] }} to Nigerian Naira?
                                            </button>
                                        </h2>
                                        <div id="faq-three" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Exchange {{ $conversion['code'] }} to NGN in person at a bank, currency exchange store or airport - or for a better exchange rate and to avoid standing in line in a physical store, use a digital service. Online currency exchange services are safe, intuitive and easy to use, to send payments internationally, or hold and exchange multiple currencies including {{ $conversion['code'] }} to NGN.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-four" aria-expanded="false" aria-controls="faq-four">
                                                How to send money to Nigeria?
                                            </button>
                                        </h2>
                                        <div id="faq-four" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                If you want to send money from United Kingdom - or anywhere else in the world - to Nigeria, you'll be able to do so through your bank or an online specialist service like Wise. Specialist international money transfer services can often offer better exchange rates and lower overall costs for payments to Nigeria - plus, you'll be able to get everything arranged with just your laptop or phone.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-five" aria-expanded="false" aria-controls="faq-five">
                                                What is the Mid-Market Rate?
                                            </button>
                                        </h2>
                                        <div id="faq-five" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                The mid-market exchange rate is the rate that banks and currency exchange services get when they buy and sell currencies like Nigerian Naira and {{ $conversion['name'] }} on wholesale markets. It's an important benchmark you can use to measure whether the exchange rate you're offered by a bank or exchange service is fair.
                                                <span class="d-block mt-2">Usually banks and exchange services add a percentage margin - known as a markup - to the exchange rate they get themselves. But this markup can vary a lot, and in some cases pushes up the cost of currency exchange significantly. Learning about the mid-market rate and monitoring it can mean you get a better deal when you exchange currencies.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-center">Get the live {{ $conversion['name'] }} to Nigerian Naira exchange rate with our handy tools, to help you compare your options.</h6>
                </div>
            </div>
        </section>
        <!-- Ends FAQ -->

      


        <footer>
            <div class="d-md-flex justify-content-between align-items-center p-3 p-md-4">
                <p>©2024 DollartoNaira NG</p>
                <ul class="navbar-nav flex-row gap-3 flex-wrap">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disclaimer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms and Condition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy Policy</a>
                    </li>
                    
                </ul>

            </div>
        </footer>


        
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

         <!-- Data Table JS-->
         <script src="assets/js/datatables.min.js"></script>
         
         <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
        <!-- Custom JS -->
        <script src="js/main.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              const currencies = [
                { code: "USD", name: "Dollar", flag: "us" },
                { code: "{{ $conversion['code'] }}", name: "{{ $conversion['name'] }}", flag: "gb" },
                { code: "EUR", name: "Euro", flag: "eu" },
                { code: "JPY", name: "Yen", flag: "jp" }
              ];
    
              // Get all elements with the class 'currency-selector'
              const selectors = document.querySelectorAll('.currency-selector');
    
              selectors.forEach(selector => {
                currencies.forEach(currency => {
                  const option = document.createElement('option');
                  option.value = currency.code;
                  option.setAttribute('data-flag', currency.flag);
                  option.innerHTML = `<span class="fi fi-${currency.flag}"></span> ${currency.name} (${currency.code})`;
                  selector.appendChild(option);
                });
    
                // Initialize select2 for each selector
                $(selector).select2({
                  templateResult: formatState,
                  templateSelection: formatState
                });
              });
    
              function formatState(state) {
                if (!state.id) {
                  return state.text;
                }
                const span = document.createElement('span');
                span.innerHTML = `<span class="fi fi-${state.element.dataset.flag}"></span> ${state.text}`;
                return span;
              }
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const frmCurrency = document.getElementById('frmCurrency');
            const amountInput = document.getElementById('Amount');
            const convertedAmount = document.getElementById('convertedAmount');
            const quickDollarSection = document.getElementById('quick_dollar');

            async function fetchRate(currencyCode, targetCurrency = 'NGN') {
                try {
                    const response = await fetch(`/api/exchange-rate/${currencyCode}/${targetCurrency}`);
                    const data = await response.json();
                    if (data.success) {
                        return {
                            rate: data.rate,
                            currency: data.currency, 
                        };
                    } else {
                        console.error(data.message);
                        return null;
                    }
                } catch (error) {
                    console.error('Error fetching exchange rate:', error);
                    return null;
                }
            }

            async function updateConversion() {
                const amount = parseFloat(amountInput.value) || 0;
                const currencyCode = frmCurrency.value;

                const result = await fetchRate(currencyCode);
                if (result) {
                    const { rate, currency } = result;
                    const convertedValue = amount * rate;
                    convertedAmount.textContent = convertedValue.toFixed(2);
                }

                // Update the Quick Dollar Section
                await updateQuickDollar(currencyCode);
            }

            async function updateQuickDollar(selectedCurrency) {
                const rates = await fetchRate(selectedCurrency);
                if (rates) {
                    const conversions =[1, 5, 10, 20, 25, 50, 100, 250, 500, 1000, 2000, 5000, 10000]; // Example amounts

                    const { rate, currency } = rates;
                    let content = conversions.map(dollar => {
                        const nairaValue = dollar * rate;

                    
                        return `
                            <div class="quick-label p-3 p-md-4">
                                <p>
                                    <a href="/${currency}-NGN-${dollar}" class="text-decoration-none">
                                        ${dollar} ${currency} to Nigerian Naira
                                    </a>
                                </p>
                                <p>₦${nairaValue.toFixed(2)}</p>
                            </div>`;
                    }).join('');
                    quickDollarSection.querySelector('.col-lg-9').innerHTML = content;
                }
            }

            async function setDefaultConversion() {
                frmCurrency.value = '1'; // Ensure the default value is "USD"
                amountInput.value = 1; // Default to 1 unit
                await updateConversion();
            }

            // Attach event listeners
            frmCurrency.addEventListener('change', updateConversion);
            amountInput.addEventListener('input', updateConversion);
            setDefaultConversion();

            
        });
        </script>
    
    
    
        
    </body>
</html>