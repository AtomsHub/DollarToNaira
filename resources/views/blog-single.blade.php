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
        <title>Exchange - Blog</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/responsive.css" rel="stylesheet">
         <style>
            .nav-logo-link {
                    text-decoration: none; /* Removes underline */
                    color: inherit; /* Inherits text color from the parent element */
                }

                .nav-logo-link:hover,
                .nav-logo-link:focus {
                    text-decoration: none; /* Prevents underline or color change on hover/focus */
                    color: inherit; /* Ensures no hover effect alters the color */
                }
        </style>
    </head>
    <body>

        <!-- Header Starts -->
        <header class="">
            <nav class="navbar navbar-dark navbar-expand-lg d-flex justify-content-between align-items-center py-4 px-3 px-md-5">
                <a href="/" class="nav-logo-link">
                    <div class="nav-logo d-flex align-items-center justify-content-between">
                        <span class="nav-logo_text ms-2">DollarToNaira</span>
                    </div>
                </a>
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
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('blogs.index') }}">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header Ends -->        


        <!-- Blog Starts -->
         <section class="" id="single-blog">
            <div class="row px-3 px-md-5 g-4 align-items-start">
                <div class="col-md-7 col-lg-9">
                    <p class="blog-header col-md-10">{{ $post['title']['rendered'] }}</p>
        
                    <div class="blog-info d-flex align-items-center gap-4">
                        <p class="blog-date s">{{ \Carbon\Carbon::parse($post['date'])->format('d F, Y') }}</p>
                        <div class="reading-info">
                            <img src="../assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                            <span class="read-time">5 min Read</span>
                        </div>
                    </div>
        
                    <div class="blog-paragraph mt-4 pe-md-3">
                        {!! $post['content']['rendered'] !!}
                    </div>
                </div>
        
                <div class="col-md-5 col-lg-3 p-3 p-md-0">
                    <div class="bg-white rounded border p-3 p-md-2 p-lg-3">
                        <p class="my-4">Latest Post</p>
        
                        <div class="row row-cols row-cols-1 g-4">
                            @foreach ($latestPosts as $latestPost)
                                <div class="col blog-wrapper">
                                    <div class="blog-card latest-post p-2">
                                        <div class="blog-thumbnail col-3 rounded">
                                            <img src="{{ $latestPost['_embedded']['wp:featuredmedia'][0]['source_url'] ?? 'assets/img/blog/default-thumbnail.jpg' }}" alt="Blog Thumbnail" class="thumbnail-img">
                                        </div>
                                        <div class="blog-content col p-1 ps-2">
                                            <p class="blog-title fw-medium mb-2">
                                                {{ $latestPost['title']['rendered'] }}
                                            </p>
        
                                            <div class="blog-meta mt-2">
                                                <p class="blog-date">{{ \Carbon\Carbon::parse($latestPost['date'])->format('d/m/Y') }}</p>
                                                <div class="blog-info d-flex justify-content-between align-items-center">
                                                    <div class="reading-info">
                                                        
                                                        <img src="../assets/img/svg/time-icon.svg" alt="Time Icon" class="time-icon" height="10">
                                                        <span class="read-time">5 min Read</span>
                                                    </div>
                                                    <a href="{{ url('/blogs/' . $latestPost['slug']) }}" class="read-more-link link-primary">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
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
       
        <!-- Custom JS -->
        <script src="../js/main.js"></script>
        
        
    </body>
</html>