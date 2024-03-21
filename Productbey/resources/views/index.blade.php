<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>News Nepal</title>
   
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/style2.css">
    <meta property="og:title" content="News Nepal " />
    <meta property="og:url" content="https://www.newsnepal.com" />

    <meta property="og:description" content="News Nepal, News Portal from Nepal, Business news, Bank Credit Profit, Sale, Nepal Tourism Year news, Vehicle loan, sale, Bank" />

    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="News Nepal" />
    <script src="{{ asset('vendor/smart-ads/js/smart-banner.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

        <nav class="N-nav">
            <div class="N-container flx">
                <div class="N-current-time N18-date-holder" data-today></div>
               
                <div class="menu-primary-menu-container">
                    <ul id="primary-menu" class="menu">
                        <li id="menu-item-735159" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-735159"><a href="/" aria-current="page">होमपेज</a></li>
                        <li id="menu-item-1413258" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1413258"><a href="/samachar">समाचार</a></li>
                        <li id="menu-item-735066" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735066"><a href="/business">विजनेस</a></li>
                        
                        <li id="menu-item-1032524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1032524"><a href="/bichar">विचार</a></li>
                        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="/khelkuid">खेलकुद</a></li>
                        {{-- <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="{{route('login')}}">login</a></li>
                        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="{{route('register')}}">Signup</a></li> --}}
                        @if (Auth::user())
                        

                        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a href="/dashboard">@if (Auth::check() && Auth::user()->id === 1)
                            Dashboard   @endif  </a></li>
                    
                        
                        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160">
                            <style>
                            .logout-button {
                                background-color: transparent; /* Remove background color */
                                border: none; /* Remove border */
                                cursor: pointer; /* Show pointer cursor */
                                padding: 0;
                                margin-top: 17px; /* Remove padding */
                                font-size: 17px; /* Inherit font size */
                                color: inherit; /* Inherit text color */
                            }</style>
                            <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a class="submenu-link" href="/profile"> 
                                @if(Auth::check() && Auth::user()->profile_image)
                                <img style="border-radius: 50%; width:25px;height:25px;" src="{{ asset('photos/' . Auth::user()->profile_image) }}" alt="user profile">
                                @else
                                <img style="border-radius: 50%; width:25px;height:25px;" src="{{ asset('profile.jpeg') }}" alt="default profile">
                            @endif {{_('Profile')}} </a>
                            <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="logout-button"> 
                                   <b> {{ __('Logout') }}</b>
                                </button>
                            </form>
                        </li>
                        @else

                         <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a class="submenu-link" href="{{route('login')}}">Login</a></li>
                        <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160"><a class="submenu-link" href="{{route('register')}}">Signup</a></li>
                         @endif

                         
                         
                         <li id="menu-item-735160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160">
                            <form method="POST" action="{{ route('sessions') }}">
                                @csrf
                                <button style="margin-left:8px; background-color: #4CAF50; 
                                border: none;
                                color: white;
                                
                                padding: 15px 32px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;
                                font-size: 16px;
                                margin: 4px 50px;
                                transition-duration: 0.4s;
                                cursor: pointer;
                                border-radius: 12px;" type="submit" class="logout-button"> 
                                   <b > Donations</b>
                                </button>
                            </form>
                        </li>
                       
                        
                    </ul>
                </div>
                 
                    
                    <div class="N-login-condition"></div>
                    <span class="N-push-menu-trigger">
<span></span>
                    <span></span>
                    <span></span>
                    </span>
                </div>
            </div>
        </nav>
<section style="font-size: 18px;" >
        <div class="N-hot-topics-top">
            <div class="N-container flx">
                <div style="gap: 10px;" class="hot-topic-tag-wrapper">
                  
<span class="topic-round-thumb">
<img style="width:60px; border-radius:50%;" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Karan-KC-Dipendra-Singh-Aire-270x170.jpg" alt="नेपाल भर्सेस नेदरल्याण्ड्स" />
</span> <b> नेपाल भर्सेस नेदरल्याण्ड्स </b>
                   
<span class="topic-round-thumb">
<img style="width:60px; border-radius:50%;"  src="https://www.onlinekhabar.com/wp-content/uploads/2023/11/Rohit-kumar-poudel-270x170.jpg" alt="नेपाल भर्सेस नामिबिया" />
</span> <b>नेपाल भर्सेस नामिबिया </b> 
                   
<span class="topic-round-thumb">
<img style="width:60px; border-radius:50%;"  src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/mao-standing-comittee-meeting-270x170.jpg" alt="नेकपा माओवादी केन्द्र" />
</span> <b>नेकपा माओवादी केन्द्र </b> 
                    
<span class="topic-round-thumb">
<img style="width:60px; border-radius:50%;"  src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/singhadurbar-footpath-270x170.jpg" alt="नेपाल प्रहरी" />
</span> <b>नेपाल प्रहरी </b> 
                    
                </div>
                <div class="N-smart-search">
                    <form method="get" class="N-top-search" action="https://www.onlinekhabar.com">
                        <input type="text" placeholder="Search Keywords" name="search_keyword" class="N-smart-search-field" autocomplete="off" value /> <span class="N-search-trigger">
<img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2021/img/search-icon.png" alt="Search" />
</span>
                    </form>
                   
                </div>
            </div>
        </div>
       
            </section>
     <section >
                
               <div class="post">
                @isset($post)
                
                    
               
                <div class="N-container">
                    <h2>
                         
{{$post->title}}</a>
                    </h2>
                    <div class="N-title-info flx">
                        <div class="N-news-author-wrap ">
                            <div class="N-news-author">
                                <span class="author-icon">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2021/05/Amrit-Subedi-1-150x150.jpg" alt="अमृत सुवेदी">
</span>
                                <span class="author-name">
                                    {{$post->author}}</span>
                            </div>
                        </div>
                        <div class="N-news-post-hour">
                            <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2021/img/clock-icon.png" alt>
                            <span>३ मिनेट अगाडि</span>
                        </div>
                        <div class="N-news-comment">
                            <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2021/img/comment-icon.png" alt>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="N-bises-feauted-img">
                        <a href="{{ route('posts.store') }}">
<img src="{{ asset('photos/' . $post->photo) }}"  class="N-post-thumb" alt="here are post" loading="lazy" /> </a>
                    </div>
                    
                    <p>{{$post->content}} </p>
                </div>
                @endif
                </div>

                
                
            </section>
            <div class="N-container N-full-widht-adv after-topics">
                <div class="add__fullwidth">
                    <div class="Nam-ad-position-wrap home-after-breaking1 Nam-device-desktop" data-alias="home-after-breaking1" data-device-type="desktop">
                    </div>
                    <div class="Nam-ad-position-wrap home-after-breaking1mb Nam-device-mobile" data-alias="home-after-breaking1mb" data-device-type="mobile">
                    </div>
                </div>
            </div>
            <section class="N-bises N-bises-type-2">
                <div class="N-container">
                    <span class="N-bises-tag">यू-१६ महिला साफ च्याम्पियनसिप</span>
                    <h2>
                       
नेपाल र भारतको नजर उपाधिमा, फाइनल पुग्न चाहन्छ बंगलादेश </a>
                    </h2>
                    <div class="N-title-info flx">
                        <div class="N-news-author-wrap ">
                            <div class="N-news-author">
                                <span class="author-icon">

</span>
                                <span class="author-name">
 </span>
                            </div>
                        </div>
                        <div class="N-news-post-hour">
                            <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2021/img/clock-icon.png" alt>
                            <span>५ मिनेट अगाडि</span>
                        </div>
                        <div class="N-news-comment">
                            <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2021/img/comment-icon.png" alt>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="N-bises-feauted-img">
                        
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/saff-u-16-women-championship-1.jpg" class="N-post-thumb" alt="नेपाल र भारतको नजर उपाधिमा, फाइनल पुग्न चाहन्छ बंगलादेश" loading="lazy" /> </a>
                    </div>
                    <p>१७ फागुन, काठमाडौं । शुक्रबारबाट एन्फा कम्प्लेक्स सातदोबाटोमामा सुरु हुने यू–१६ महिला साफ च्याम्पियनसिप फुटबलमा आयोजक नेपाल र भारतको नजर उपाधिमा छ । बंगलादेशले हरेक खेलमा राम्रो गर्दै फाइनल खेल्न चाहेको छ भने एक महिनाको प्रशिक्षण गरेर
                        काठमाडौं आएको भुटान आफ्नो उत्कृष्ट प्रदर्शन दिने लक्ष्यमा छ । खेलअघिको प्रिम्याच...</p>
                </div>
            </section>

            <style>
                /* styles.css */

.fixed-ad {
    position: fixed;
    top: 76%;
    right: 20px; /* Adjust as needed */
    transform: translateY(-50%);
    z-index: 1000; /* Ensure it's above other content */
}

.fixed-ad img {
    width: 200px; /* Adjust image size as needed */
    height: auto;
    border-radius: 5px; /* Optional: Add border radius */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow */
}

            </style>
             <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
             <!-- App CSS -->  
             <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
            <div class="fixed-ad">
            <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <div class="inner">
                    @isset($ads)
                   
                            <a href="{{$ads->link}}" target="_blank">
                            <h1>Ads</h1></h3>
                        
                                
                                <div><img src="{{ asset('photos/' . $ads->image) }}" alt="Ad Image"></div>
                                @endisset
                            </a>
                            <!--//col-->
                          
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <!--//app-card-body-->
                    </div>
                </div><!--//inner-->
            </div><!--//app-card-->
            <script src="assets/plugins/popper.min.js"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
        
            <!-- Charts JS -->
            <script src="assets/plugins/chart.js/chart.min.js"></script> 
            <script src="assets/js/index-charts.js"></script> 
            
            <!-- Page Specific JS -->
            <script src="assets/js/app.js"></script> 
            <section class="N-full-widht-adv after-topics" style="margin-bottom:15px;">

                <div class="N-container">
                    <div class="add__fullwidth">
                        <div class="Nam-ad-position-wrap home-above-main-news Nam-device-desktop" data-alias="home-above-main-news" data-device-type="desktop">
                        </div>
                        <div class="Nam-ad-position-wrap home-above-main-news-mb Nam-device-mobile" data-alias="home-above-main-news-mb" data-device-type="mobile">
                        </div>
                    </div>
                </div>
            </section>


            <x-smart-ad-component slug="naship"/>

 <section class="N-section N-samachar-section">
    <div class="samachar"></div>
                <div class="N-container flx flx-wrp">
                    <div class="N-col-left">
                        <div class="N-section-title">
                            <h2>
                                समाचार <a href="content/news" class="circle-arrow"><i class="fas fa-chevron-right"></i></a>
                            </h2>
                        </div>
                        <div class="N-grid-12">
                            <div class="span-12">
                                <div class="N-news-post N-samachar-spot-news flx">
                                    <div class="post-img-wrap">
                                        
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/berna-utpadan-photo-768x576.jpg" class="N-post-thumb" alt="विद्यार्थीलाई सीपसँग जोड्दै सामुदायिक विद्यालय" loading="lazy" /> </a>
                                    </div>
                                    <div class="post-title-wrap">
                                        <h4>
                                            विद्यार्थीलाई सीपसँग जोड्दै सामुदायिक विद्यालय</a>
                                        </h4>
                                        <p>१७ फागुन, तनहुँ । तनहुँको आँबुखैरेनी गाउँपालिका–४ आमडाँडास्थित चण्डेश्वरी आधारभूत विद्यालयले विद्यार्थीलाई सीपसँग जोड्न थालेको छ । पढ्दै कमाउँदै कार्यक्रमअन्तर्गत विद्यालयले विद्यार्थीलाई सीपसँग जोड्दै व्यवहारिक
                                            सीप प्रदान गरेको हो...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="Nam-ad-position-wrap home-aftersamachar-half1 Nam-device-desktop" data-alias="home-aftersamachar-half1" data-device-type="desktop">
                            </div>
                            <div class="Nam-ad-position-wrap home-aftersamachar-half1-mb Nam-device-mobile" data-alias="home-aftersamachar-half1-mb" data-device-type="mobile">
                            </div>
                              
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                    
<img  class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/itahari-sab-daha-griha-270x170.jpg" alt="इटहरीमा विद्युतीय शवदाह गृह बन्ने, लागत साढे तीन करोड " width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">राष्ट्रिय समाचार</span>
<h4  class="N-news-title-txt">इटहरीमा विद्युतीय शवदाह गृह बन्ने, लागत साढे तीन करोड </h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>१ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                   
<img class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Krishi-harinayarayamChaudhary-270x170.jpg" alt="राजनीतिसँगै कृषिकर्ममा पूर्वप्रमुख हरिनारायण चौधरी" width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">विजनेश होम</span>
<h4 class="N-news-title-txt">राजनीतिसँगै कृषिकर्ममा पूर्वप्रमुख हरिनारायण चौधरी</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                   
<img class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/sachib-270x170.jpg" alt="प्रधानमन्त्रीका निर्देशनको प्रगति विवरण दिन मन्त्रालयहरूको आनाकानी " width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">राष्ट्रिय समाचार</span>
<h4 class="N-news-title-txt">प्रधानमन्त्रीका निर्देशनको प्रगति विवरण दिन मन्त्रालयहरूको आनाकानी </h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                    
<img class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Bagmati-pradesh-sabha-1-270x170.jpg" alt="बागमतीमा बजेट विवाद मिलाउन संसदीय विशेष समिति गठन, प्रदेशसभाको गतिरोध टर्‍यो" width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">राष्ट्रिय समाचार</span>
<h4 class="N-news-title-txt">बागमतीमा बजेट विवाद मिलाउन संसदीय विशेष समिति गठन, प्रदेशसभाको गतिरोध टर्‍यो</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                   
<img class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Arpan-Thapa-270x170.jpg" alt="‘म पपुलर हुनलाई अभिनय गर्न आएको होइन’" width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">मनोरञ्जन प्रमुख</span>
<h4 class="N-news-title-txt">‘म पपुलर हुनलाई अभिनय गर्न आएको होइन’</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                    
<img class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Debendra-dahal-270x170.png" alt="राष्ट्रियसभामा एमालेले भन्यो : बजेटको सिद्धान्त र प्राथमिकता गत वर्षकै कपीपेस्ट" width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">राष्ट्रिय समाचार</span>
<h4 class="N-news-title-txt">राष्ट्रियसभामा एमालेले भन्यो : बजेटको सिद्धान्त र प्राथमिकता गत वर्षकै कपीपेस्ट</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                    
<img class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Dambar-khadka-270x170.jpg" alt="इलाम–२ मा टिकट मैले नै पाउँछु : कांग्रेस नेता खड्का" width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">राष्ट्रिय समाचार</span>
<h4 class="N-news-title-txt">इलाम–२ मा टिकट मैले नै पाउँछु : कांग्रेस नेता खड्का</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="Nam-ad-position-wrap home-aftersamachar-half2 Nam-device-desktop" data-alias="home-aftersamachar-half2" data-device-type="desktop">
                        </div>
                        <div class="Nam-ad-position-wrap home-aftersamachar-half2-mb Nam-device-mobile" data-alias="home-aftersamachar-half2-mb" data-device-type="mobile">
                        </div>
                        <div class="N-grid-12">
                           
                            <div class="span-6">
                                <div class="N-news-post N-post-ltr">
                                   
<img class="N-post-thumb" src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Bimala-Ghimire-270x170.jpg" alt="पक्राउ परेका लघुवित्तका ऋणीहरूलाई रिहा गर्न एमालेको माग" width="450px;" loading="lazy" />
<div class="N-post-content-wrap">
<span class="N-news-tags red">राष्ट्रिय समाचार</span>
<h4 class="N-news-title-txt">पक्राउ परेका लघुवित्तका ऋणीहरूलाई रिहा गर्न एमालेको माग</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>४ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div  class="N-col-right">
                        <div class="N-sticky-sidebar">
                            <div class="N-sidebar-ad">
                                <div class="Nam-ad-position-wrap home-samachar-right Nam-device-desktop" data-alias="home-samachar-right" data-device-type="desktop">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="N-full-widht-adv">
                <div class="N__container">
                    <div class="add__fullwidth">
                        <div class="Nam-ad-position-wrap home-samachar-after Nam-device-desktop" data-alias="home-samachar-after" data-device-type="desktop">
                        </div>
                        <div class="Nam-ad-position-wrap home-in-between-samachar Nam-device-mobile" data-alias="home-in-between-samachar" data-device-type="mobile">
                        </div>
                    </div>
                </div>

            </section>
            <section class="N-full-widht-adv">
                <div class="N__container">
                    <iframe src="https://www.onlinekhabar.com/markets/components/trending" frameborder="0" style="width: 100%; height: 87px; border: none;"></iframe>
                </div>
            </section>
            <section class="N-section N-section-business">
                <div class="N-container flx flx-wrp">
                    <div class="N-col-left">
                        <div class="N-sticky-sidebar">
                            <div class="N-section-title">
                                <h2>
                                    बिजनेस <a href="business" class="circle-arrow"><i class="fas fa-chevron-right"></i></a>
                                    
                                </h2>
                            </div>
                            <div class="N-grid-12">
                                <div class="span-12">
                                    <div class="N-news-post N-interview-spot">
                                        <div class="post-title-wrap">
                                            <h4>
                                               क्यूआरबाटै काठमाडौंका सम्पदाबारे जानकारी लिन सकिने</a>
                                            </h4>
                                            <p>१७ फागुन, काठमाडौं । क्यूआर कोड मार्फत नै काठमाडौं महानगरपालिकाभित्र रहेका सम्पदाबारे जानकारी पाउन सकिने भएको छ । महानगरले नन्दिकेशर मन्दिर, शंकरकीर्ति महाविहार र नक्साल भगवती मन्दिरको चिनारी सम्बन्धी...</p>
                                        </div>
                                        <div class="post-img-wrap">
                                            <div class="quote-img">
                                                <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2021/img/quote-white.png" alt>
                                            </div>
                                           
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/sampada-by-qr-code-768x427.jpg" class="N-post-thumb" alt="क्यूआरबाटै काठमाडौंका सम्पदाबारे जानकारी लिन सकिने" loading="lazy" /> </a>
                                        </div>
                                    </div>
                                    <div class="col colspan4">
                                        <div class="left_add">
                                            <div class="Nam-ad-position-wrap home-inbetween-desh-half Nam-device-desktop" data-alias="home-inbetween-desh-half" data-device-type="desktop">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col colspan4" style="margin-bottom:20px;">
                                        <div class="left_add">
                                            <div class="Nam-ad-position-wrap home-after-desh-1news Nam-device-mobile" data-alias="home-after-desh-1news" data-device-type="mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="N-business-news-thumbs N-grid-12">
                                        <div class="span-6">
                                            <div class="N-news-post N-post-ltr">
                                               
<img src="https://www.onlinekhabar.com/wp-content/uploads/2019/04/Sampatti-suddhikaran-anusandan-money-loundering.jpg" class="N-post-thumb" alt="‘सम्पत्ति शुद्धीकरण मुद्दामा सफलता दर ८० प्रतिशत’" loading="lazy" /> <div class="N-post-content-wrap">
<span class="N-news-tags red">प्रमुख समाचार (Home)</span>
<h4 class="N-news-title-txt">‘सम्पत्ति शुद्धीकरण मुद्दामा सफलता दर ८० प्रतिशत’</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>२ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                            </div>
                                        </div>
                                        <div class="span-6">
                                            <div class="N-news-post N-post-ltr">
                                               
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Krishi-harinayarayamChaudhary-1024x645.jpg" class="N-post-thumb" alt="राजनीतिसँगै कृषिकर्ममा पूर्वप्रमुख हरिनारायण चौधरी" loading="lazy" /> <div class="N-post-content-wrap">
<span class="N-news-tags red">राष्ट्रिय समाचार</span>
<h4 class="N-news-title-txt">राजनीतिसँगै कृषिकर्ममा पूर्वप्रमुख हरिनारायण चौधरी</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
                                            </div>
                                        </div>
                                        <div class="span-6">
                                            <div class="N-news-post N-post-ltr">
                                               
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/sudan-kirati_pratibedan-hastantaran.jpg" class="N-post-thumb" alt="पर्यटन मन्त्रीले बुझे निगम सुधारबारे ‘प्रतिवेदनमाथिको प्रतिवेदन’" loading="lazy" /> <div class="N-post-content-wrap">
<span class="N-news-tags red">प्रमुख समाचार (Home)</span>
<h4 class="N-news-title-txt">पर्यटन मन्त्रीले बुझे निगम सुधारबारे ‘प्रतिवेदनमाथिको प्रतिवेदन’</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>३ घन्टा अगाडि</span>
</div>
</div>
</div>
</a>
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
            <section class="N-full-widht-adv">
                <div class="N__container">
                    <div class="add__fullwidth">
                        <div class="Nam-ad-position-wrap home-above-desh-row Nam-device-desktop" data-alias="home-above-desh-row" data-device-type="desktop">
                        </div>
                        <div class="Nam-ad-position-wrap home-above-desh-row-mobile Nam-device-mobile" data-alias="home-above-desh-row-mobile" data-device-type="mobile">
                        </div>
                    </div>
                </div>
            </section>
            <section class="N-section N-section-pradesh-samachar">
                <div class="N-container flx flx-wrp">
                    <div class="N-col-left">
                        <div class="N-section-title">
                            <h2>
                                प्रदेश समाचार <a href="content/desh-samachar" class="circle-arrow"><i class="fas fa-chevron-right"></i></a>
                                <div class="N-province">
                                    <a href="content/desh-samachar/pradesh1">१</a>
                                    <a href="content/desh-samachar/pradesh2">२</a>
                                    <a href="content/desh-samachar/pradesh3">३</a>
                                    <a href="content/desh-samachar/pradesh4">४</a>
                                    <a href="content/desh-samachar/pradesh5">५</a>
                                    <a href="content/desh-samachar/pradesh6">६</a>
                                    <a href="content/desh-samachar/pradesh7">७</a>
                                </div>
                            </h2>
                        </div>
                        <div class="N-grid-12">
                            <div class="span-12">
                                <div class="N-news-post N-samachar-spot-news flx">
                                    <div class="post-img-wrap">
                                       
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/firing-gulmi.jpg" class="N-post-thumb" alt="गुल्मीमा आगो निभाउने क्रममा एक जना घाइते " loading="lazy" /> </a>
                                    </div>
                                    <div class="post-title-wrap">
                                        <h4>
                                           गुल्मीमा आगो निभाउने क्रममा एक जना घाइते </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="span-12">
                                <div class="left_add">
                                    <div class="Nam-ad-position-wrap home-in-between-desh Nam-device-desktop" data-alias="home-in-between-desh" data-device-type="desktop">
                                    </div>
                                    <div class="Nam-ad-position-wrap home-in-between-desh-mb Nam-device-mobile" data-alias="home-in-between-desh-mb" data-device-type="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="span-4">
                                <div class="N-news-post">
                                  
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Godawari-Kailali.jpg" class="N-post-thumb" alt="कैलालीको फोहरमैला व्यवस्थापन केन्द्र निर्माणले गति लिँदै" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">कैलालीको फोहरमैला व्यवस्थापन केन्द्र निर्माणले गति लिँदै</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>४३ मिनेटअगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-4">
                                <div class="N-news-post">
                                   
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/kingariyenpurwa.jpg" class="N-post-thumb" alt="हिँड्ने बाटोसमेत नबनेको किङगरियनपुर्वा बस्ती" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">हिँड्ने बाटोसमेत नबनेको किङगरियनपुर्वा बस्ती</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>५७ मिनेटअगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-4">
                                <div class="N-news-post">
                                   
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/baja-mahila-samuha.jpg" class="N-post-thumb" alt="बाजा बजाउने बागलुङका आमाहरू " loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">बाजा बजाउने बागलुङका आमाहरू </h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>२ घन्टाअगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            
                            <div class="span-4">
                                <div class="N-news-post">
                                   
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/tumlingbata-kanchanjanga.jpg" class="N-post-thumb" alt="हिमाल हेर्न माइजोमाईमा विदेशबाट पर्यटक" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">हिमाल हेर्न माइजोमाईमा विदेशबाट पर्यटक</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>४ घन्टाअगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-4">
                                <div class="N-news-post">
                                  
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/khudra-kirana-bebashahi-sang.jpg" class="N-post-thumb" alt="बुटवलमा सार्वजनिक जग्गामा घर बनाउन अनधिकृत बोर्ड, उपमहानगर रमिते" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">बुटवलमा सार्वजनिक जग्गामा घर बनाउन अनधिकृत बोर्ड, उपमहानगर रमिते</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>८ घन्टाअगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-4">
                                <div class="N-news-post">
                                   
<img src="https://www.onlinekhabar.com/wp-content/uploads/2016/04/bepatta-nagarik.jpg" class="N-post-thumb" alt="बेपत्ता युवक खोज्न सेती बाँध खोलिंदै, तल्लो तटीय क्षेत्रमा सुरक्षित रहन आग्रह" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">बेपत्ता युवक खोज्न सेती बाँध खोलिंदै, तल्लो तटीय क्षेत्रमा सुरक्षित रहन आग्रह</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>११ घन्टाअगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                            <div class="span-4">
                                <div class="N-news-post">
                                  
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/11/Rastriya-Sabha-national-Assembly.jpg" class="N-post-thumb" alt="राष्ट्रिय सभाका नवनिर्वाचित सदस्यहरुको शपथ फागुन २१ गते" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">राष्ट्रिय सभाका नवनिर्वाचित सदस्यहरुको शपथ फागुन २१ गते</h4>
<div class="N-title-info flx">
<div class="N-news-post-hour">
<i class="far fa-clock"></i>
<span>२१ घन्टाअगाडि</span>
</div>
</div>
</div>
</a>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </section>
            
            <section class="N-section N-section-manoranjan">
                <div class="N-container">
                    <div class="N-section-title">
                        <h2>
                            मनोरञ्जन <a  class="circle-arrow"><i class="fas fa-chevron-right"></i></a>
                            <ul class="title-cat-menu">
                                <li><a >गशिप</a> </li>
                                <li><a >फिचर</a></li>
                                <li><a >बलिउड / हलिउड</a></li>
                                <li><a >मनोरञ्जन भिडियो</a></li>
                                <li><a >ब्लोअप</a></l>
                            </ul>
                        </h2>
                    </div>
                    <div class="N-grid-12">
                        
                        <div class="span-4 merge-2">
                            <div class="N-news-post N-post-overlay entertain-second-post">
                               
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Siddhartha-Malhotra-Yoddha-768x469.jpg" class="N-post-thumb" alt="‘म पपुलर हुनलाई अभिनय गर्न आएको होइन’" loading="lazy" /> <div class="N-post-content-wrap">
<h2 class="N-news-title-txt">'योद्धाको ट्रेलरमा सिद्धार्थ मल्होत्राको एक्सन अवतार'</h2>
</div>
</a>
                            </div>
                        </div>
                        <div class="span-4 merge-2">
                            <div class="N-news-post N-post-overlay entertain-second-post">
                               
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Arpan-Thapa-768x512.jpg" class="N-post-thumb" alt="‘म पपुलर हुनलाई अभिनय गर्न आएको होइन’" loading="lazy" /> <div class="N-post-content-wrap">
<h2 class="N-news-title-txt">‘म पपुलर हुनलाई अभिनय गर्न आएको होइन’</h2>
</div>
</a>
                            </div>
                        </div>
                        <div class="span-4">
                            <div class="N-news-post N-post-overlay">
                              
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/05/Dune-2-768x512.jpg" class="N-post-thumb" alt="‘ड्युन २’ हेर्नुअघि जान्न जरुरी छ अघिल्लो भागका यी महत्वपूर्ण कुरा" loading="lazy" /> <div class="N-post-content-wrap">
<h2 class="N-news-title-txt">‘ड्युन २’ हेर्नुअघि जान्न जरुरी छ अघिल्लो भागका यी महत्वपूर्ण कुरा</h2>
</div>
</a>
                            </div>
                        </div>
                        <div class="span-4">
                            <div class="N-news-post N-post-overlay">
                             
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Navya-Rayamajhi-768x469.jpg" class="N-post-thumb" alt="दिलीप रायमाझीकी छोरी दिव्या फिल्म ‘एक्टर’मा अनुबन्धित" loading="lazy" /> <div class="N-post-content-wrap">
<h2 class="N-news-title-txt">दिलीप रायमाझीकी छोरी दिव्या फिल्म ‘एक्टर’मा अनुबन्धित</h2>
</div>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="N-full-widht-adv">
                <div class="N__container">
                    <div class="add__fullwidth">
                        <div class="Nam-ad-position-wrap home-after-entertainment Nam-device-desktop" data-alias="home-after-entertainment" data-device-type="desktop">
                        </div>
                        <div class="Nam-ad-position-wrap home-after-entertainment-mb Nam-device-mobile" data-alias="home-after-entertainment-mb" data-device-type="mobile">
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="N-section section-home-rashi">
                <div class="N-container flx flx-wrp">
                    <div class="N-col-left">
                        <a href="rashifal" class="N-section-title N-rashifal-heading">
                            <h2>राशिफल</h2>
                            <div class="rashi-relate-context">
                                <span>दैनिक</span>
                                <span>मासिक</span>
                                <span>बार्षिक</span>
                            </div>
                            <div class="heading-jyotis-info">
                               <span style="font-size: 20px" ><b>Info of jotish</b> </span>
                            </div>
                        </a>
                        <div class="N-block-rashifal">
                            <div class="rashifal-icon-cards">
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-1.png" alt>
<h5>मेष</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-2.png" alt>
<h5>वृष</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-3.png" alt>
<h5>मिथुन</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-4.png" alt>
<h5>कर्कट</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-5.png" alt>
<h5>सिंह</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-6.png" alt>
<h5>कन्या</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-7.png" alt>
<h5>तुला</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-8.png" alt>
<h5>वृश्चिक</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-9.png" alt>
<h5>धनु</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-10.png" alt>
<h5>मकर</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-11.png" alt>
<h5>कुम्भ</h5>
</a>
                                <a  class="card-item">
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/04/rashi-12.png" alt>
<h5>मीन</h5>
</a>
                            </div>
                        </div>
                    </div>
                    <div class="N-col-right">

                        <div class="Nam-ad-position-wrap home-rashifal-right Nam-device-desktop" data-alias="home-rashifal-right" data-device-type="desktop">
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="Nam-ad-position-wrap home-after-sathiye-mobile Nam-device-mobile" data-alias="home-after-sathiye-mobile" data-device-type="mobile">
            </div>
            <div class="Nam-ad-position-wrap home-after-sathiye Nam-device-desktop" data-alias="home-after-sathiye" data-device-type="desktop">
            </div>
            <section class="N-section N-section-video-2">
                <div class="N-container">
                    <div class="N-section-title">
                        <h2>
                            भिडियो <a href="/content/ent-video" class="circle-arrow"><i class="fas fa-chevron-right"></i></a>
                        </h2>
                    </div>
                    <div class="N-grid-12">
                        <div class="span-8">
                            <div class="N-news-post N-spot-news N-post-overlay">
                               
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Nabin-Chauhan.jpg" class="N-post-thumb" alt="छुर्पी व्यवसाय छोडेर आर्टमाण्डु खोलेका नवीन" loading="lazy" /> <div class="N-post-content-wrap">
<div class="play-icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30.051 30.051" style="enable-background:new 0 0 30.051 30.051;" xml:space="preserve">
<g>
<path d="M19.982,14.438l-6.24-4.536c-0.229-0.166-0.533-0.191-0.784-0.062c-0.253,0.128-0.411,0.388-0.411,0.669v9.069
		c0,0.284,0.158,0.543,0.411,0.671c0.107,0.054,0.224,0.081,0.342,0.081c0.154,0,0.31-0.049,0.442-0.146l6.24-4.532
		c0.197-0.145,0.312-0.369,0.312-0.607C20.295,14.803,20.177,14.58,19.982,14.438z" />
<path d="M15.026,0.002C6.726,0.002,0,6.728,0,15.028c0,8.297,6.726,15.021,15.026,15.021c8.298,0,15.025-6.725,15.025-15.021
		C30.052,6.728,23.324,0.002,15.026,0.002z M15.026,27.542c-6.912,0-12.516-5.601-12.516-12.514c0-6.91,5.604-12.518,12.516-12.518
		c6.911,0,12.514,5.607,12.514,12.518C27.541,21.941,21.937,27.542,15.026,27.542z" />
</g>
</svg></div>
<h4 style="margin-bottom: 200px;" class="N-news-title-txt">छुर्पी व्यवसाय छोडेर आर्टमाण्डु खोलेका नवीन</h4>
</div>
</a>
                            </div>
                        </div>
                        <div class="span-4">
                            <div class="N-news-post N-post-ltr">
                              
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/02/Ram-Krishna-Dhakal900-270x170.jpg" class="N-post-thumb" alt="&#8216;बढ्दो खर्चले राम्रा गीत बाहिर आउन सकेका छैनन्&#8217;" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">बढ्दो खर्चले राम्रा गीत बाहिर आउन सकेका छैनन्</h4>

                            </div>
                            </div>
                            <div class="N-news-post N-post-ltr">
                              
<img src="https://www.onlinekhabar.com/wp-content/uploads/2024/01/Yash-Kumar-Guff-Station-270x170.jpg" class="N-post-thumb" alt="&#8216;समाज त जहाँको त्यहीं पो रहेछ जस्तो लाग्छ&#8217;" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">&#8216;समाज त जहाँको त्यहीं पो रहेछ जस्तो लाग्छ&#8217;</h4>


                            </div>
                            </div>
                            <div class="N-news-post N-post-ltr">
                              
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/12/Sneha-Shrestha-270x170.jpg" class="N-post-thumb" alt="&#8216;नेपाल सगरमाथा र म:मको देश मात्र होइन&#8217;" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">&#8216;नेपाल सगरमाथा र म:मको देश मात्र होइन&#8217;</h4>

</div>

                            </div>
                            <div class="N-news-post N-post-ltr">
                               
<img src="https://www.onlinekhabar.com/wp-content/uploads/2023/11/Yam-Baral900-270x170.jpg" class="N-post-thumb" alt="यम बरालसँग संगीत, समाजदेखि दोस्रो विवाहसम्मका कुरा" loading="lazy" /> <div class="N-post-content-wrap">
<h4 class="N-news-title-txt">यम बरालसँग संगीत, समाजदेखि दोस्रो विवाहसम्मका कुरा</h4>

</div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
       
        
       
</body>

</html>