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
        <title>Exchange - Dashboard Home</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Data Table CSS -->
        <link href="../assets/css/datatables.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/responsive.css" rel="stylesheet">

    </head>
    <body class="dashboard">

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
                                <a class="nav-link" href="../index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../blog.html">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header Ends -->  
        
        <section class="main-content flex-grow-1">
            <div class="px-3 px-lg-5 h-100 d-flex  gap-4">
                
                <div class="sidebar mt-md-5 mt-0 offcanvas-md offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header d-flex d-md-none justify-content-between mb-4 align-items-center">
                        <div class="d-flex gap-2 align-items-center">
                            <p class="mb-0">DollarToNaira</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                      </div>
                    
                    <div class="top-sidebar">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="index.html" class="d-flex align-items-center gap-4 ">
                                   <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 6V0H18V6H10ZM0 10V0H8V10H0ZM10 18V8H18V18H10ZM0 18V12H8V18H0ZM2 8H6V2H2V8ZM12 16H16V10H12V16ZM12 4H16V2H12V4ZM2 16H6V14H2V16Z" fill="currentColor"/>
                                    </svg>
                                   <p>Dashboard</p>
                                </a>
                            </li>

                            <li>
                                <a href="currency.html" class="d-flex align-items-center gap-4 active">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                          <linearGradient id="paint1_linear" x1="3" y1="21" x2="21" y2="3" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#12354D" />
                                            <stop offset="1" stop-color="#3498DB" />
                                          </linearGradient>
                                        </defs>
                                        <path d="M16.839 4.00024H7.16C6.633 4.00024 6.179 4.00024 5.804 4.03024C5.409 4.06324 5.015 4.13424 4.637 4.32724C4.07254 4.61486 3.61362 5.07378 3.326 5.63824C3.23791 5.82937 3.18053 6.03322 3.156 6.24224C3.13 6.41624 3.11 6.62224 3.094 6.83924C3.061 7.27524 3.04 7.81424 3.027 8.36124C3 9.45724 3 10.6372 3 11.1972V11.2002C3 11.4655 3.10536 11.7198 3.29289 11.9073C3.48043 12.0949 3.73478 12.2002 4 12.2002C4.26522 12.2002 4.51957 12.0949 4.70711 11.9073C4.89464 11.7198 5 11.4655 5 11.2002C5 10.9202 5 10.4922 5.003 10.0002H19V14.8002C19 15.3772 19 15.7492 18.976 16.0322C18.954 16.3042 18.916 16.4042 18.891 16.4542C18.7951 16.6424 18.6422 16.7954 18.454 16.8912C18.404 16.9162 18.304 16.9542 18.032 16.9762C17.75 17.0002 17.377 17.0002 16.8 17.0002H12C11.7348 17.0002 11.4804 17.1056 11.2929 17.2931C11.1054 17.4807 11 17.735 11 18.0002C11 18.2655 11.1054 18.5198 11.2929 18.7073C11.4804 18.8949 11.7348 19.0002 12 19.0002H16.839C17.366 19.0002 17.821 19.0002 18.195 18.9702C18.59 18.9372 18.984 18.8662 19.362 18.6732C19.9265 18.3856 20.3854 17.9267 20.673 17.3622C20.866 16.9842 20.937 16.5902 20.969 16.1952C21 15.8202 21 15.3652 21 14.8392V8.16024C21 7.63324 21 7.17924 20.97 6.80424C20.937 6.40924 20.866 6.01524 20.673 5.63724C20.3854 5.07278 19.9265 4.61386 19.362 4.32624C18.984 4.13324 18.59 4.06224 18.195 4.03024C17.7432 4.00318 17.2905 3.99318 16.838 4.00024M18.998 8.00024H5.04C5.052 7.62124 5.069 7.27324 5.09 6.98724C5.10227 6.81896 5.12061 6.65119 5.145 6.48424C5.24133 6.32414 5.3806 6.19423 5.547 6.10924C5.597 6.08424 5.697 6.04624 5.969 6.02424C6.25 6.00024 6.623 6.00024 7.2 6.00024H16.8C17.377 6.00024 17.749 6.00024 18.032 6.02424C18.304 6.04624 18.404 6.08424 18.454 6.10924C18.6422 6.20511 18.7951 6.35809 18.891 6.54624C18.916 6.59624 18.954 6.69624 18.976 6.96824C18.996 7.21724 19 7.53524 19 8.00024" fill="url(#paint1_linear)"/>
                                        <path d="M9.31399 15.8766L8.59399 16.5766C9.04599 17.4296 8.90399 18.5016 8.16499 19.2176L7.01699 20.3316C6.56857 20.7601 5.97222 20.9992 5.35199 20.9992C4.73176 20.9992 4.1354 20.7601 3.68699 20.3316C3.47008 20.1243 3.29744 19.8753 3.17949 19.5994C3.06154 19.3235 3.00073 19.0266 3.00073 18.7266C3.00073 18.4266 3.06154 18.1297 3.17949 17.8538C3.29744 17.578 3.47008 17.3289 3.68699 17.1216L4.40699 16.4236C4.18121 15.9966 4.10084 15.5077 4.17808 15.0309C4.25532 14.5541 ..." fill="url(#paint1_linear)"/>
                                    </svg>      
                                   <p>Currency</p>
                                </a>
                            </li>

                            <li>
                                <a href="exchange-rate.html" class="d-flex align-items-center gap-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.375 4.5V14.25C21.375 14.7473 21.1775 15.2242 20.8258 15.5758C20.4742 15.9275 19.9973 16.125 19.5 16.125H10.5862C10.7771 16.3438 10.8759 16.628 10.8621 16.918C10.8483 17.2081 10.7228 17.4815 10.512 17.6812C10.3012 17.8809 10.0213 17.9913 9.73097 17.9894C9.44061 17.9875 9.16223 17.8734 8.95406 17.6709L7.07906 15.7959C6.97418 15.6914 6.89097 15.5672 6.83418 15.4305C6.7774 15.2937 6.74818 15.1471 6.74818 14.9991C6.74818 14.851 6.7774 14.7044 6.83418 14.5676C6.89097 14.4309 6.97418 14.3067 7.07906 14.2022L8.95406 12.3272C9.16116 12.1187 9.44159 11.9996 9.73539 11.9952C10.0292 11.9908 10.3131 12.1016 10.5263 12.3038C10.7395 12.506 10.8651 12.7835 10.8763 13.0772C10.8875 13.3708 10.7834 13.6571 10.5862 13.875H19.125V4.875H9.375C9.375 5.17337 9.25647 5.45952 9.0455 5.6705C8.83452 5.88147 8.54837 6 8.25 6C7.95163 6 7.66548 5.88147 7.4545 5.6705C7.24353 5.45952 7.125 5.17337 7.125 4.875V4.5C7.125 4.00272 7.32254 3.52581 7.67417 3.17417C8.02581 2.82254 8.50272 2.625 9 2.625H19.5C19.9973 2.625 20.4742 2.82254 20.8258 3.17417C21.1775 3.52581 21.375 4.00272 21.375 4.5ZM15.75 18C15.4516 18 15.1655 18.1185 14.9545 18.3295C14.7435 18.5405 14.625 18.8266 14.625 19.125H4.875V10.125H13.4138C13.2229 10.3438 13.1241 10.628 13.1379 10.918C13.1517 11.2081 13.2772 11.4815 13.488 11.6812C13.6988 11.8809 13.9787 11.9913 14.269 11.9894C14.5594 11.9875 14.8378 11.8734 15.0459 11.6709L16.9209 9.79594C17.0258 9.69142 17.109 9.56723 17.1658 9.43048C17.2226 9.29374 17.2518 9.14713 17.2518 8.99906C17.2518 8.851 17.2226 8.70439 17.1658 8.56764C17.109 8.4309 17.0258 8.3067 16.9209 8.20219L15.0459 6.32719C14.8388 6.11874 14.5584 5.99959 14.2646 5.99521C13.9708 5.99084 13.6869 6.10158 13.4737 6.30377C13.2605 6.50596 13.1349 6.78354 13.1237 7.07717C13.1125 7.37079 13.2166 7.65714 13.4138 7.875H4.5C4.00272 7.875 3.52581 8.07254 3.17417 8.42417C2.82254 8.77581 2.625 9.25272 2.625 9.75V19.5C2.625 19.9973 2.82254 20.4742 3.17417 20.8258C3.52581 21.1775 4.00272 21.375 4.5 21.375H15C15.4973 21.375 15.9742 21.1775 16.3258 20.8258C16.6775 20.4742 16.875 19.9973 16.875 19.5V19.125C16.875 18.8266 16.7565 18.5405 16.5455 18.3295C16.3345 18.1185 16.0484 18 15.75 18Z" fill="#3A3A3A"/>
                                    </svg>        
                                   <p>Exchange Rates</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bottom-sidebar mt-4">
                        <ul class="list-unstyled mb-0">
                            
                            <li>
                                <a href="settings.html" class="d-flex align-items-center gap-4">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 6.12499C10.0358 6.12499 9.09329 6.41091 8.2916 6.94658C7.48991 7.48225 6.86507 8.24362 6.49609 9.13441C6.12712 10.0252 6.03058 11.0054 6.21868 11.9511C6.40678 12.8967 6.87108 13.7654 7.55286 14.4471C8.23464 15.1289 9.10328 15.5932 10.0489 15.7813C10.9946 15.9694 11.9748 15.8729 12.8656 15.5039C13.7564 15.1349 14.5177 14.5101 15.0534 13.7084C15.5891 12.9067 15.875 11.9642 15.875 11C15.8735 9.70752 15.3594 8.46841 14.4455 7.55449C13.5316 6.64057 12.2925 6.12648 11 6.12499ZM11 13.625C10.4808 13.625 9.97331 13.471 9.54164 13.1826C9.10996 12.8942 8.7735 12.4842 8.57482 12.0045C8.37614 11.5249 8.32416 10.9971 8.42545 10.4879C8.52673 9.97868 8.77674 9.51095 9.14385 9.14384C9.51096 8.77672 9.97869 8.52672 10.4879 8.42543C10.9971 8.32414 11.5249 8.37613 12.0046 8.57481C12.4842 8.77349 12.8942 9.10994 13.1826 9.54162C13.4711 9.9733 13.625 10.4808 13.625 11C13.625 11.6962 13.3484 12.3639 12.8562 12.8561C12.3639 13.3484 11.6962 13.625 11 13.625ZM21.6744 8.9778C21.6427 8.81934 21.5772 8.66958 21.4824 8.5387C21.3876 8.40783 21.2657 8.29891 21.125 8.21937L18.5197 6.73343L18.5094 3.79812C18.5088 3.63526 18.4729 3.47446 18.4041 3.32684C18.3353 3.17922 18.2353 3.0483 18.1109 2.94312C17.061 2.05481 15.8522 1.37371 14.5484 0.935929C14.3997 0.885764 14.2422 0.867272 14.0859 0.881642C13.9296 0.896011 13.778 0.942925 13.6409 1.01937L11 2.49405L8.35907 1.01843C8.22182 0.941567 8.06997 0.894345 7.91333 0.879812C7.75669 0.865278 7.59875 0.883757 7.44969 0.934054C6.14559 1.37366 4.93672 2.05667 3.88719 2.94687C3.76326 3.05193 3.66356 3.18259 3.59494 3.32986C3.52632 3.47713 3.49042 3.63752 3.48969 3.79999L3.47657 6.73812L0.875007 8.2203C0.734298 8.30015 0.612465 8.4094 0.517819 8.54061C0.423172 8.67182 0.357939 8.8219 0.326569 8.98062C0.0617165 10.3148 0.0617165 11.688 0.326569 13.0222C0.358188 13.1806 0.423536 13.3303 0.518171 13.4611C0.612806 13.592 0.734509 13.701 0.875007 13.7806L3.48313 15.2666L3.49344 18.2019C3.49401 18.3647 3.52993 18.5255 3.59872 18.6731C3.66752 18.8208 3.76754 18.9517 3.89188 19.0569C4.94178 19.9452 6.15065 20.6263 7.45438 21.0641C7.6031 21.1142 7.76067 21.1327 7.91696 21.1183C8.07325 21.104 8.22481 21.0571 8.36188 20.9806L11 19.5059L13.6381 20.9816C13.7754 21.0584 13.9272 21.1056 14.0839 21.1202C14.2405 21.1347 14.3985 21.1162 14.5475 21.0659C15.8516 20.6263 17.0605 19.9433 18.11 19.0531C18.2339 18.9481 18.3336 18.8174 18.4023 18.6701C18.4709 18.5228 18.5068 18.3625 18.5075 18.2L18.5206 15.2619L21.1278 13.7797C21.2685 13.6998 21.3904 13.5906 21.485 13.4594C21.5797 13.3282 21.6449 13.1781 21.6763 13.0194C21.9405 11.6851 21.9399 10.3119 21.6744 8.9778ZM19.5528 12.0884L17.0328 13.5209C16.8538 13.6224 16.7062 13.7713 16.6063 13.9512C16.5556 14.045 16.5022 14.1322 16.4469 14.2212C16.3358 14.3986 16.2764 14.6035 16.2753 14.8128L16.2622 17.6562C15.6557 18.1126 14.9915 18.4868 14.2869 18.7691L11.7416 17.345C11.5737 17.251 11.3846 17.2016 11.1922 17.2016H11.165C11.0581 17.2016 10.9494 17.2016 10.8425 17.2016C10.6415 17.1968 10.4428 17.2457 10.2669 17.3431L7.71876 18.7644C7.01297 18.4835 6.34724 18.1109 5.73876 17.6562L5.72844 14.8212C5.72758 14.6116 5.66815 14.4064 5.55688 14.2287C5.50251 14.1406 5.44813 14.0497 5.39751 13.9587C5.2975 13.7799 5.15026 13.632 4.97188 13.5312L2.45001 12.0903C2.35204 11.3674 2.35204 10.6345 2.45001 9.91155L4.97001 8.47905C5.14875 8.37758 5.29627 8.22908 5.39657 8.04968C5.44719 7.95593 5.50063 7.8678 5.55594 7.77874C5.66705 7.60135 5.72646 7.39649 5.72751 7.18718L5.73782 4.34374C6.34453 3.88866 7.00872 3.51574 7.71313 3.23468L10.2584 4.65874C10.4343 4.75738 10.6335 4.80662 10.835 4.80124C10.9419 4.80124 11.0506 4.80124 11.1575 4.80124C11.3585 4.806 11.5572 4.75714 11.7331 4.65968L14.2813 3.23562C14.987 3.51645 15.6528 3.88903 16.2613 4.34374L16.2716 7.17874C16.2724 7.38837 16.3319 7.59358 16.4431 7.77124C16.4975 7.85937 16.5519 7.9503 16.6025 8.04124C16.7025 8.22006 16.8498 8.36795 17.0281 8.46874L19.55 9.90593C19.6493 10.63 19.6502 11.3641 19.5528 12.0884Z" fill="#3A3A3A"/>
                                    </svg>        
                                   <p>Settings</p>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="d-flex align-items-center gap-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.625 20.25C11.625 20.5484 11.5065 20.8345 11.2955 21.0455C11.0845 21.2565 10.7984 21.375 10.5 21.375H4.5C4.20163 21.375 3.91548 21.2565 3.7045 21.0455C3.49353 20.8345 3.375 20.5484 3.375 20.25V3.75C3.375 3.45163 3.49353 3.16548 3.7045 2.9545C3.91548 2.74353 4.20163 2.625 4.5 2.625H10.5C10.7984 2.625 11.0845 2.74353 11.2955 2.9545C11.5065 3.16548 11.625 3.45163 11.625 3.75C11.625 4.04837 11.5065 4.33452 11.2955 4.5455C11.0845 4.75647 10.7984 4.875 10.5 4.875H5.625V19.125H10.5C10.7984 19.125 11.0845 19.2435 11.2955 19.4545C11.5065 19.6655 11.625 19.9516 11.625 20.25ZM21.7959 11.2041L18.0459 7.45406C17.8346 7.24272 17.5479 7.12399 17.2491 7.12399C16.9502 7.12399 16.6635 7.24272 16.4522 7.45406C16.2408 7.66541 16.1221 7.95205 16.1221 8.25094C16.1221 8.54982 16.2408 8.83647 16.4522 9.04781L18.2812 10.875H10.5C10.2016 10.875 9.91548 10.9935 9.7045 11.2045C9.49353 11.4155 9.375 11.7016 9.375 12C9.375 12.2984 9.49353 12.5845 9.7045 12.7955C9.91548 13.0065 10.2016 13.125 10.5 13.125H18.2812L16.4512 14.9541C16.2399 15.1654 16.1212 15.4521 16.1212 15.7509C16.1212 16.0498 16.2399 16.3365 16.4512 16.5478C16.6626 16.7592 16.9492 16.8779 17.2481 16.8779C17.547 16.8779 17.8337 16.7592 18.045 16.5478L21.795 12.7978C21.8999 12.6934 21.9832 12.5692 22.0401 12.4325C22.097 12.2958 22.1263 12.1492 22.1264 12.0011C22.1264 11.8531 22.0973 11.7064 22.0406 11.5697C21.9839 11.4329 21.9008 11.3086 21.7959 11.2041Z" fill="#3A3A3A"/>
                                    </svg>        
                                   <p>Logout</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                
                

                <div class="dashboard-content">
                    
                    <div class="dashboard-content_header px-md-3 d-flex justify-content-between align-items-center">
                        <div class="">
                            <h1 class="dashboard-content_heading">Currency</h1>
                            <p class="dashboard-content_paragraph">24 Currency</p>
                        </div>
                        
                        <div class="">
                            <a href="members.html" class="d-flex align-items-center justify-content-center gap-1 btn-pay-gradient" data-bs-toggle="modal" data-bs-target="#createCurrency">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6875 6C10.6875 6.14918 10.6282 6.29226 10.5227 6.39775C10.4173 6.50324 10.2742 6.5625 10.125 6.5625H6.5625V10.125C6.5625 10.2742 6.50324 10.4173 6.39775 10.5227C6.29226 10.6282 6.14918 10.6875 6 10.6875C5.85082 10.6875 5.70774 10.6282 5.60225 10.5227C5.49676 10.4173 5.4375 10.2742 5.4375 10.125V6.5625H1.875C1.72582 6.5625 1.58274 6.50324 1.47725 6.39775C1.37176 6.29226 1.3125 6.14918 1.3125 6C1.3125 5.85082 1.37176 5.70774 1.47725 5.60225C1.58274 5.49676 1.72582 5.4375 1.875 5.4375H5.4375V1.875C5.4375 1.72582 5.49676 1.58274 5.60225 1.47725C5.70774 1.37176 5.85082 1.3125 6 1.3125C6.14918 1.3125 6.29226 1.37176 6.39775 1.47725C6.50324 1.58274 6.5625 1.72582 6.5625 1.875V5.4375H10.125C10.2742 5.4375 10.4173 5.49676 10.5227 5.60225C10.6282 5.70774 10.6875 5.85082 10.6875 6Z" fill="white"/>
                                </svg>        
                               <p class="text-light">Create a Currency</p>
                            </a>
                        </div>
                    </div>

                
                    <div class="dashboard-content_details mt-5">
                        <div class="table-responsive">
                            <table class="table table-hover" id="viewDueTable">
                                <thead>
                                    <tr class="table-light text-center">
                                        <th>#</th>
                                        <th>Currency Name</th>
                                        <th>Buy Rate</th>
                                        <th>Sell Rate</th>
                                     
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($currencies as $currency)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $currency->currency->symbol }} {{ $currency->currency->code }} {{ $currency->currency->name }}</td>
                                        <td>{{ $currency->buy }}</td>
                                        <td>{{ $currency->sell }}</td>
                                      
                                        <td>
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCurrencyModal"
                                                data-id="{{ $currency->id }}"
                                                data-currency-id="{{ $currency->currency_id }}" 
                                                data-currency-name="{{ $currency->currency->name }}" 
                                                data-buy="{{ $currency->buy }}"
                                                data-sell="{{ $currency->sell }}"
                                                data-sign="{{ $currency->currency->symbol }}">
                                                Edit Currency
                                            </button>
                    
                                            <!-- Delete Button -->
                                            <form action="{{ route('currencies.destroy', $currency->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Create Currency Modal -->
                    <div class="modal fade" id="createCurrency" tabindex="-1" aria-labelledby="createCurrencyLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content p-3 py-5 p-md-4 py-md-3">
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn-close mb-3 border rounded-md p-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mx-1 mx-md-3 row justify-content-center">
                                    <div class="modal-form">
                                        <form action="{{ route('currencies.store') }}" method="POST">
                                            @csrf
                                            <div class="text-start mb-3">
                                                <label for="currencyName" class="form-label fw-medium mb-1">Currency Name</label>
                                                <select class="form-control ps-3" name="currency_id" id="currencyName" required>
                                                    <option value="">Select Currency</option>
                                                    @foreach (\App\Models\Currency::all() as $currencyhh)
                                                        <option value="{{ $currencyhh->id }}">{{ $currencyhh->symbol }} {{ $currencyhh->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                    
                                            <div class="text-start mb-3">
                                                <label for="buyRate" class="form-label fw-medium mb-1">Buy Rate</label>
                                                <input type="number" class="form-control ps-3" name="buy" id="buyRate" placeholder="Enter Buy Rate" required>
                                            </div>
                    
                                            <div class="text-start mb-3">
                                                <label for="sellRate" class="form-label fw-medium mb-1">Sell Rate</label>
                                                <input type="number" class="form-control ps-3" name="sell" id="sellRate" placeholder="Enter Sell Rate" required>
                                            </div>
                    
                                          
                    
                                            <input type="submit" value="Create Currency" class="btn btn-pay-gradient w-100 mt-3 modal-button">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                

                    <div class="modal fade" id="editCurrencyModal" tabindex="-1" aria-labelledby="editCurrencyLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content p-3 py-5 p-md-4 py-md-3">
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn-close mb-3 border rounded-md p-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mx-1 mx-md-3 row justify-content-center">
                                    <div class="modal-form">
                                        <form action="{{ route('currencies.update', ['id' => $currency->id]) }}" method="POST" id="editCurrencyForm">
                                            @csrf
                                            @method('PUT') 
                                           <!-- Updated Currency Select Dropdown -->
                                            <!-- Updated Currency Input Field -->
                                            <div class="text-start mb-3">
                                                <label for="editCurrencyName" class="form-label fw-medium mb-1">Currency</label>
                                                <input type="text" class="form-control ps-3" name="" id="editCurrencyName" readonly required>
                                                <input type="hidden" name="currency_id" id="editCurrencyId" required>
                                            </div>


                    
                                            <div class="text-start mb-3">
                                                <label for="editBuyRate" class="form-label fw-medium mb-1">Buy Rate</label>
                                                <input type="number" class="form-control ps-3" name="buy" id="editBuyRate" required>
                                            </div>
                    
                                            <div class="text-start mb-3">
                                                <label for="editSellRate" class="form-label fw-medium mb-1">Sell Rate</label>
                                                <input type="number" class="form-control ps-3" name="sell" id="editSellRate" required>
                                            </div>
                    
                                            
                                            <button class="btn btn-success w-100 mt-3 modal-button">Update Currency</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>

            </div>

        </section>
        
                   
                   
                  
                    
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       
        <!-- Data Table JS-->
        <script src="../assets/js/datatables.min.js"></script>

        <!-- Custom JS -->
        <script src="../assets/js/main.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var editModal = document.getElementById('editCurrencyModal');
                editModal.addEventListener('show.bs.modal', function (event) {
                    var button = event.relatedTarget;
            
                    // Extract data attributes from the button
                    var id = button.getAttribute('data-id');
                    var currencyId = button.getAttribute('data-currency-id'); // This is the currency_id from currencyrates
                    var currencyName = button.getAttribute('data-currency-name'); // This is the currency name
                    var buy = button.getAttribute('data-buy');
                    var sell = button.getAttribute('data-sell');
                    var sign = button.getAttribute('data-sign');
            
                    // Populate the modal fields
                    document.getElementById('editCurrencyName').value = currencyName; // Set the currency name
                    document.getElementById('editCurrencyId').value = currencyId; // Set the hidden currency_id
                    
                    document.getElementById('editBuyRate').value = buy;
                    document.getElementById('editSellRate').value = sell;
                    document.getElementById('editCurrencySign').value = sign;
            
                    // Set the form action dynamically
                    document.getElementById('editCurrencyForm').action = `/currencies/${id}`;
                });
            });
        </script>
        
        
    </body>
</html>