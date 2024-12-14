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

        <style>.
        overlay-text {
    position: absolute;}
    
    .nav-logo-link {
                text-decoration: none; /* Removes underline */
                color: inherit; /* Inherits text color from the parent element */
            }

            .nav-logo-link:hover,
            .nav-logo-link:focus {
                text-decoration: none; /* Prevents underline or color change on hover/focus */
                color: inherit; /* Ensures no hover effect alters the color */
            }

            #rate .rate {
    width: 40%;
}
@media (max-width: 576px) { 
    #rate .rate {
        width: 100%;
    }
}
@media (max-width: 767.98px) {
    #rate .rate {
       width: 70%;
    }
}
    </style>

<style>
   
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
                                <a class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{ route('blogs.index') }}">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header Ends -->        

        <!-- Hero Starts -->
        <div class="hero bg-white">
            <div class="container">
                <div class="row align-items-center hero-content">
        
                    <!-- Hero Text -->
                    <div class="px-md-5 px-lg-0 text-center myy-4 my-md-5">
                        <h1 class="hero-content_heading display-5 mb-0 ">
                            Currency Exchange <br>Rate Market Today
                        </h1>
        
                        <p class="hero-content_paragraph">
                            The Official and Black Market to Naira Rates are <br>tabulated below
                        </p> 
                    </div>
    
                    <!-- Hero Table -->
                    <div class="px-3">
                       
                        <div class="row">
                            <div class="table-responsive">
                                <table id="rate">
                                    <thead>
                                        <tr class="">
                                            <th class="">Currency</th>
                                            <th class="rate">Rate</th>
                                            <th class="d-none d-md-table-cell">Last Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($currencies as $key => $currency)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ $currency->currency->image_url  }}" 
                                                         alt="{{ $currency->currency->name }}" 
                                                         style="width: 30px; height: 30px; margin-right: 10px; border-radius: 50%;">
                                                    <div>
                                                        <strong>{{ $currency->currency->symbol }} {{ $currency->currency->code }}</strong><br>
                                                        <span>{{ $currency->currency->name }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="d-flex align-items-center justify-content-between justify-content-md-start flex-nowrap ">
                                                    <p class="col">BUY</p>
                                                    <p class="col-auto col-md"><span class="overlay-text">{{ $currency->sign }}{{ number_format($currency->buy) }}</span></p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between justify-content-md-start flex-nowrap ">
                                                    <p class="col">SELL</p>
                                                    <p class="col-auto col-md"><span class="overlay-text">{{ $currency->sign }}{{ number_format($currency->sell) }}</span></p>
                                                    
                                                </div>
                                                <span class="d-md-none"  style="font-size: 14px; color: gray;">
                                                    {{ $currency->updated_at->diffForHumans() }}
                                                </span>
                                            </td>
                                            <td class="d-none d-md-table-cell col">
                                                <span style="font-size: 14px; color: gray;">
                                                    {{ $currency->updated_at->diffForHumans() }}
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No currencies available</td>
                                        </tr>
                                    @endforelse
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                      
                    </div>
                  

                    
        
                </div>
            </div>
        </div>
        <!-- Hero Ends -->

        <!-- Exchange Starts -->
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
        <!-- Exchange Ends -->

        <!-- Quick Dollar Start -->
        <section class="bg-white" id="quick_dollar">
            <div class="row align-items-center justify-content-center px-3 px-md-0">
                <div class="col-md-8 text-center">
                    <p class="h2 fw-semibold fs-1 mb-2 mb-md-5">Quick Conversion</p>
                </div>
        
                <div class="col-lg-9 col-md-11 mt-4">
                    <!-- Dynamic content goes here -->
                </div>
            </div>
        </section>
        
        
        
        <!-- Quick Dollar End -->

        <!-- Start FAQ -->
        <section class="faq">
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
                                                How often are the exchange rates updated?
                                            </button>
                                        </h2>
                                        <div id="faq-one" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Our exchange rates are updated frequently throughout the day to reflect the latest market conditions. The update time is displayed on the website for your reference.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-two" aria-expanded="false" aria-controls="faq-two">
                                                Which currencies do you provide rates for?
                                            </button>
                                        </h2>
                                        <div id="faq-two" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                We provide exchange rates for a wide range of currencies, including major ones such as the US Dollar (USD), Euro (EUR), British Pound (GBP), and many more, always compared against the Nigerian Naira (NGN).
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-three" aria-expanded="false" aria-controls="faq-three">
                                                Are the rates provided live market rates?
                                            </button>
                                        </h2>
                                        <div id="faq-three" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Our rates are sourced from reliable financial institutions and reflect live market conditions. However, the rates shown are indicative and may differ slightly from actual transaction rates.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-four" aria-expanded="false" aria-controls="faq-four">
                                                Can I use these rates for currency exchange transactions?
                                            </button>
                                        </h2>
                                        <div id="faq-four" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                The rates displayed are for informational purposes only and may not be used directly for transactions. Please check with your financial institution or forex provider for actual exchange rates.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-five" aria-expanded="false" aria-controls="faq-five">
                                                Do you provide historical exchange rate data?
                                            </button>
                                        </h2>
                                        <div id="faq-five" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Yes, we offer historical exchange rate data for analysis and comparison. You can view past exchange rates for selected dates on our website.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-six" aria-expanded="false" aria-controls="faq-six">
                                                How accurate are the rates provided?
                                            </button>
                                        </h2>
                                        <div id="faq-six" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Our rates are sourced from trusted providers and updated frequently to ensure accuracy. However, slight variations may occur due to market fluctuations and transaction-specific factors.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ends FAQ -->

        <!-- Blog Starts -->
        <section class="bg-white" id="blogs">
            <div class="row align-items-center justify-content-center px-3 px-md-5 gy-4">

                <div class="col-12">
                    <p class="display-4 fw-bold h1">Read Our Blogs</p>
                    <p class="fs-5 col-lg-5 col-md-7 mt-2">Explore our blog for expert articles, industry news and tips on the financial market</p>
                </div>

                <div class="col-12">
                    <div class="row row-cols row-cols-1 row-cols-md-2 g-4">
                        <div class="col blog-wrapper">
                            <div class="blog-card p-2">
                                <div class="blog-thumbnail col-3 rounded">
                                    <img src="assets/img/blog/dollar.jpg" alt="Blog Thumbnail" class="thumbnail-img">
                                </div>
                                <div class="blog-content col p-1 ps-2">
                                    <p class="blog-title">
                                        How to make 1 million dollars in 100 days without working
                                    </p>

                                    {{-- <p class="blog-details">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sollicitudin odio. Nulla facilisi. Donec eleifend, felis vel laoreet tristique, velit mauris euismod arcu, at placerat felis ligula non erat.
                                    </p> --}}

            
                                    <div class="blog-meta mt-2">
                                        <p class="blog-date">24/11/2024</p>
                                        <div class="blog-info d-flex justify-content-between align-items-center">
                                            <div class="reading-info">
                                                <img src="assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                                                <span class="read-time">5 min Read</span>
                                            </div>
                                            <a href="#" class="read-more-link link-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col blog-wrapper">
                            <div class="blog-card p-2">
                                <div class="blog-thumbnail col-3 rounded">
                                    <img src="assets/img/blog/dollar.jpg" alt="Blog Thumbnail" class="thumbnail-img">
                                </div>
                                <div class="blog-content col p-1 ps-2">
                                    <p class="blog-title">
                                        How to make 1 million dollars in 100 days without working
                                    </p>

                                    {{-- <p class="blog-details">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sollicitudin odio. Nulla facilisi. Donec eleifend, felis vel laoreet tristique, velit mauris euismod arcu, at placerat felis ligula non erat.
                                    </p> --}}

            
                                    <div class="blog-meta mt-2">
                                        <p class="blog-date">24/11/2024</p>
                                        <div class="blog-info d-flex justify-content-between align-items-center">
                                            <div class="reading-info">
                                                <img src="assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                                                <span class="read-time">5 min Read</span>
                                            </div>
                                            <a href="#" class="read-more-link link-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col blog-wrapper">
                            <div class="blog-card p-2">
                                <div class="blog-thumbnail col-3 rounded">
                                    <img src="assets/img/blog/dollar.jpg" alt="Blog Thumbnail" class="thumbnail-img">
                                </div>
                                <div class="blog-content col p-1 ps-2">
                                    <p class="blog-title">
                                        How to make 1 million dollars in 100 days without working
                                    </p>

                                    {{-- <p class="blog-details">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sollicitudin odio. Nulla facilisi. Donec eleifend, felis vel laoreet tristique, velit mauris euismod arcu, at placerat felis ligula non erat.
                                    </p> --}}

            
                                    <div class="blog-meta mt-2">
                                        <p class="blog-date">24/11/2024</p>
                                        <div class="blog-info d-flex justify-content-between align-items-center">
                                            <div class="reading-info">
                                                <img src="assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                                                <span class="read-time">5 min Read</span>
                                            </div>
                                            <a href="#" class="read-more-link link-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col blog-wrapper">
                            <div class="blog-card p-2">
                                <div class="blog-thumbnail col-3 rounded">
                                    <img src="assets/img/blog/dollar.jpg" alt="Blog Thumbnail" class="thumbnail-img">
                                </div>
                                <div class="blog-content col p-1 ps-2">
                                    <p class="blog-title">
                                        How to make 1 million dollars in 100 days without working
                                    </p>

                                    {{-- <p class="blog-details">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sollicitudin odio. Nulla facilisi. Donec eleifend, felis vel laoreet tristique, velit mauris euismod arcu, at placerat felis ligula non erat.
                                    </p> --}}

            
                                    <div class="blog-meta mt-2">
                                        <p class="blog-date">24/11/2024</p>
                                        <div class="blog-info d-flex justify-content-between align-items-center">
                                            <div class="reading-info">
                                                <img src="assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                                                <span class="read-time">5 min Read</span>
                                            </div>
                                            <a href="#" class="read-more-link link-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col blog-wrapper">
                            <div class="blog-card p-2">
                                <div class="blog-thumbnail col-3 rounded">
                                    <img src="assets/img/blog/dollar.jpg" alt="Blog Thumbnail" class="thumbnail-img">
                                </div>
                                <div class="blog-content col p-1 ps-2">
                                    <p class="blog-title">
                                        How to make 1 million dollars in 100 days without working
                                    </p>

                                    {{-- <p class="blog-details">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sollicitudin odio. Nulla facilisi. Donec eleifend, felis vel laoreet tristique, velit mauris euismod arcu, at placerat felis ligula non erat.
                                    </p> --}}

            
                                    <div class="blog-meta mt-2">
                                        <p class="blog-date">24/11/2024</p>
                                        <div class="blog-info d-flex justify-content-between align-items-center">
                                            <div class="reading-info">
                                                <img src="assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                                                <span class="read-time">5 min Read</span>
                                            </div>
                                            <a href="#" class="read-more-link link-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col blog-wrapper">
                            <div class="blog-card p-2">
                                <div class="blog-thumbnail col-3 rounded">
                                    <img src="assets/img/blog/dollar.jpg" alt="Blog Thumbnail" class="thumbnail-img">
                                </div>
                                <div class="blog-content col p-1 ps-2">
                                    <p class="blog-title">
                                        How to make 1 million dollars in 100 days without working
                                    </p>

                                    {{-- <p class="blog-details">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sollicitudin odio. Nulla facilisi. Donec eleifend, felis vel laoreet tristique, velit mauris euismod arcu, at placerat felis ligula non erat.
                                    </p> --}}

            
                                    <div class="blog-meta mt-2">
                                        <p class="blog-date">24/11/2024</p>
                                        <div class="blog-info d-flex justify-content-between align-items-center">
                                            <div class="reading-info">
                                                <img src="assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                                                <span class="read-time">5 min Read</span>
                                            </div>
                                            <a href="#" class="read-more-link link-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary px-5">Read More</a>
                </div>

            </div>
        </section>
        <!-- Blog Ends -->

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
       
        <!-- Custom JS -->
        <script src="js/main.js"></script>
        <script>
            $(document).ready(function() {
                $('#rate').DataTable({
                    pageLength: 25,
                    lengthChange:false,
                    searching:false
                });
            });
       
            document.addEventListener("DOMContentLoaded", () => {
                const detailsElements = document.querySelectorAll('.blog-details');
                const maxLength = 200;

                detailsElements.forEach(element => {
                    const originalText = element.textContent;
                    if (originalText.length > maxLength) {
                        element.textContent = originalText.slice(0, maxLength) + '...';
                    }
                });
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
                        const conversions = [1, 5, 10, 15, 20, 25, 30, 37, 40,45,50,60,70,100,150,200,250,300,400,500,700,1000,1500,2000,3000]; // Example amounts

                        const { rate, currency } = rates;
                        let content = conversions.map(dollar => {
                            const nairaValue = dollar * rate;
                            return `
                                <div class="quick-label p-3 p-md-4">
                                    <p>
                                        
                                        <a href="/${currency}-NGN-${dollar}" class="text-decoration-none"  style="color:#2772A4;"><u class="">
                                            ${dollar} ${currency} to Nigerian Naira</u>
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