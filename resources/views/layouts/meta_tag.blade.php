<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--SEo Link With Google Console-->
<!-- Fonts -->
<link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Icon Front Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Dynamic Title -->
<title>@yield('title', 'Backup Coaching Center | সেরা শিক্ষার সঙ্গী')</title>

<!-- Dynamic Meta Description -->
<meta name="description" content="@yield('meta_description', 'Backup Coaching Center - আপনার শিক্ষার জন্য নির্ভরযোগ্য সহযোগী। আমরা উচ্চমানের কোচিং সেবা প্রদান করি। জয় করুন আপনার ভবিষ্যৎ।')">

<!-- Dynamic Keywords -->
<meta name="keywords" content="@yield('meta_keywords', 'Backup Coaching Center, কোচিং সেন্টার, শিক্ষার জন্য কোচিং, সেরা কোচিং, বাংলাদেশ')">

<!-- Author -->
<meta name="author" content="Backup Coaching Center Team">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="@yield('og_title', 'Backup Coaching Center | সেরা শিক্ষার সঙ্গী')">
<meta property="og:description" content="@yield('og_description', 'Backup Coaching Center - আপনার শিক্ষার জন্য নির্ভরযোগ্য সহযোগী। আমরা উচ্চমানের কোচিং সেবা প্রদান করি।')">
<meta property="og:image" content="@yield('og_image', asset('frontend/images/profile/cover.webp'))">
<meta property="og:url" content="@yield('og_url', url('/'))">
<meta property="og:type" content="website">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('twitter_title', 'Backup Coaching Center | সেরা শিক্ষার সঙ্গী')">
<meta name="twitter:description" content="@yield('twitter_description', 'Backup Coaching Center - আপনার শিক্ষার জন্য নির্ভরযোগ্য সহযোগী। আমরা উচ্চমানের কোচিং সেবা প্রদান করি।')">
<meta name="twitter:image" content="@yield('twitter_image', asset('frontend/images/profile/cover.webp'))">

<!-- Robots Meta Tag -->
<meta name="robots" content="index, follow">

<!-- Canonical Link -->
<link rel="canonical" href="@yield('canonical', url('/'))">

<!-- Favicon -->
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

<!-- Other Meta Tags -->
<meta name="theme-color" content="#4CAF50">
<meta name="language" content="bn">
<meta name="revisit-after" content="7 days">
