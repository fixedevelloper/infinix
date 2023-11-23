
@extends('base')

@section('content')
<!-- ===============>> Banner section start here <<================= -->
<section class="banner banner--style2 bg-color-3 bg--cover"
        >
    <video class="background-video" playsinline autoplay muted loop>
        <source type="video/webm" src="{{asset('video/bg_video.webm')}}">
    </video>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1920 739" class="bg-shape-svg">
        <clipPath id="shape-clippath">
            <path
                d="M0 0H1920V350.233C1920 483.334 1821.85 596.054 1690.02 614.364L303.352 806.957C143.029 829.224 0 704.687 0 542.825V0Z" />
        </clipPath>
    </svg>

    <div class="container">
        <div class="banner__wrapper banner__wrapper--style2">
            <div class="row flex-md-row-reverse gx-5">
                <div class="col-lg-6 col-md-7">
                    <div class="banner__content" data-aos="fade-left" data-aos-duration="1000">
                        <h1 class="banner__content-heading banner__content-heading--style2">WELCOME TO INFINIX FORCE</h1>
                        <p class="banner__content-moto">INFINIX is a 100% decentralized, open-source
                            blockchain-based operating system with smart
                            contract.
                        </p>
                        <div class="btn-group">
                            <a href="https://forsagezone.io/registration" class="trk-btn trk-btn--primary trk-btn--arrowplay">Get Started
                                <span class="style2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M9.74165 7.59173C9.81874 7.51447 9.91032 7.45318 10.0111 7.41137C10.1119 7.36955 10.22 7.34802 10.3291 7.34802C10.4383 7.34802 10.5464 7.36955 10.6472 7.41137C10.748 7.45318 10.8396 7.51447 10.9166 7.59173L14.7416 11.4167C14.8189 11.4938 14.8802 11.5854 14.922 11.6862C14.9638 11.787 14.9854 11.8951 14.9854 12.0042C14.9854 12.1134 14.9638 12.2214 14.922 12.3222C14.8802 12.4231 14.8189 12.5146 14.7416 12.5917L10.9166 16.4167C10.8395 16.4939 10.7479 16.5551 10.6471 16.5968C10.5463 16.6386 10.4383 16.6601 10.3291 16.6601C10.22 16.6601 10.112 16.6386 10.0112 16.5968C9.91039 16.5551 9.8188 16.4939 9.74165 16.4167C9.6645 16.3396 9.6033 16.248 9.56154 16.1472C9.51979 16.0464 9.4983 15.9383 9.4983 15.8292C9.4983 15.7201 9.51979 15.6121 9.56154 15.5113C9.6033 15.4105 9.6645 15.3189 9.74165 15.2417L12.975 12.0001L9.74165 8.76673C9.41665 8.44173 9.42498 7.90839 9.74165 7.59173Z" fill="#0C263A"></path>
                      <rect x="-0.75" y="0.75" width="22.5" height="22.5" rx="11.25" transform="matrix(-1 0 0 1 22.5 0)" stroke="black" stroke-opacity="0.16" stroke-width="1.5"></rect>
                    </svg>
                  </span> </a>
                            <a href="https://youtu.be/4r8sz-FZA3I?si=WRbaqOayMfa5DdP9&ab_channel=NoCopyrightFootages"
                               class="trk-btn trk-btn--outline3" data-fslightbox>
                  <span class="style1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_1397_814)">
                        <path
                            d="M10.5547 7.03647C9.89015 6.59343 9 7.06982 9 7.86852V16.1315C9 16.9302 9.89015 17.4066 10.5547 16.9635L16.7519 12.8321C17.3457 12.4362 17.3457 11.5638 16.7519 11.1679L10.5547 7.03647Z"
                            stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <rect x="-0.75" y="0.75" width="22.5" height="22.5" rx="11.25" transform="matrix(-1 0 0 1 22.5 0)"
                            stroke="#fff" stroke-width="1.5" />
                      <defs>
                        <clipPath id="clip0_1397_814">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg></span> Watch Video
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="banner__thumb">
                        <img src="{{asset('images/banner02.png')}}" alt="banner-thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>



</section>
<!-- ===============>> Banner section end here <<================= -->
<!-- ===============>> About section start here <<================= -->
<section class="about padding-top--style2 padding-bottom bg-color-3">
    <div class="container">
        <div class="about__wrapper">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="section-header mb-50">
                        <h2>Discover a <span class="style2">decentralized</span>
                            world
                        </h2>
                    </div>
                    <div class="about__content about__content--style2" data-aos="fade-right" data-aos-duration="800">
                        <div class="about__content-inner">
                            <div class="about__icon">
                                <div class="about__icon-inner">
                                    <img src="{{asset('images/about_icon_dark01.png')}}" alt="about-icon" class="dark">
                                </div>
                            </div>
                            <div class="about__content-details">
                                <h5>Universal Access</h5>
                                <p class="mb-0">This usually means that everyone in a population
                                    has access to publicly available communication
                                    network facilities and services. Typically, it is
                                    provided..</p>
                            </div>
                        </div>
                    </div>
                    <div class="about__content about__content--style2" data-aos="fade-right" data-aos-duration="900">
                        <div class="about__content-inner">
                            <div class="about__icon">
                                <div class="about__icon-inner">
                                    <img src="{{asset('images/about_icon_dark02.png')}}" alt="about-icon" class="dark">
                                </div>
                            </div>
                            <div class="about__content-details">
                                <h5> P2P Transactions</h5>
                                <p class="mb-0">Transactions without intermediaries through smart
                                    contracts in cryptocurrencies offer advantages
                                    such as decentralization, enhanced security, and
                                    automated processes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about__content about__content--style2" data-aos="fade-right" data-aos-duration="1000">
                        <div class="about__content-inner">
                            <div class="about__icon">
                                <div class="about__icon-inner">
                                    <img src="{{asset('images/about_icon_dark03.png')}}" alt="about-icon" class="dark">
                                </div>
                            </div>
                            <div class="about__content-details">
                                <h5>Smart Contract</h5>
                                <p class="mb-0">Smart contracts are simply programs stored on a
                                    blockchain that run when predetermined
                                    conditions are met. They typically are used to
                                    automate the execution of an agreement.  </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__thumb about__thumb--style2" data-aos="fade-left" data-aos-duration="800">
                        <div class="about__thumb-inner mt-30 mt-lg-0">
                            <div class="about__thumb-image  text-center">
                                <img src="{{asset('images/about_img_dark02.png')}}" alt="about-image" class="dark">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about__shape about__shape--style2">
      <span class="about__shape-item about__shape-item--1"><img src="{{asset('images/shape01.png')}}"
                                                                alt="shape-icon"></span>
    </div>
</section>
<!-- ===============>> About section start here <<================= -->
<!-- ===============>> Service section start here <<================= -->
<section class="service padding-top padding-bottom bg-color-7">
    <div class="section-header section-header--max50">
        <h2 class="mb-10 mt-minus-5"><span class="style2">services </span>We offer</h2>
        <p>The advantages of decentralized marketing!</p>
    </div>
    <div class="container">
        <div class="service__wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="800">
                        <div class="service__item-inner text-center">
                            <div class="service__item-thumb mb-30">
                                <img class="dark" src="{{asset('images/services_dark01.png')}}" alt="service-icon">
                            </div>
                            <div class="service__item-content">
                                <h5 > <a class="stretched-link" href="#">100% Safe &amp; Secure and Transparent</a> </h5>
                                <p class="mb-0">
                                    The Blockchain Are Most Safe &amp; Secure, It Is Designed In Such A Way
                                    That No One Can Change The Algorithm Or Delete The Members. The
                                    System Is Able To Work Without A Site. The Site Is
                                    Needed Only For the Convenient Display Of
                                    Statistics.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service__item-inner text-center">
                            <div class="service__item-thumb mb-30">
                                <img class="dark" src="{{asset('images/services_dark02.png')}}" alt="service-icon">
                            </div>
                            <div class="service__item-content">
                                <h5 > <a class="stretched-link" href="#">Fully Automation</a> </h5>
                                <p class="mb-0">INFINIX is fully autonomous and cannot be hacked as it runs on a fully verified smart contract.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1200">
                        <div class="service__item-inner text-center">
                            <div class="service__item-thumb mb-30">
                                <img class="dark" src="{{asset('images/services_dark03.png')}}" alt="service-icon">
                            </div>
                            <div class="service__item-content">
                                <h5 > <a class="stretched-link" href="#">Pay-out from Smart-Contract P2P and Instant</a> </h5>
                                <p class="mb-0">This Concept Is Designed To Interact with Your Wallet To
                                    Smart Contract And All Transactions Are 100% From The
                                    Participate Wallet To Participants' Wallets. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="800">
                        <div class="service__item-inner text-center">
                            <div class="service__item-thumb mb-30">
                                <img class="dark" src="{{asset('images/services_dark04.png')}}" alt="service-icon">
                            </div>
                            <div class="service__item-content">
                                <h5 > <a class="stretched-link" href="#">Verify Smart Contract</a>
                                </h5>
                                <p class="mb-0">A Verified And Open-source Smart Contract Based On
                                    Polygon Blockchain All Logic And Code Is 100%
                                    Transparent. Powered By BNB (Smart Chain)
                                    Cryptocurrency International And Decentralized.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service__item-inner text-center">
                            <div class="service__item-thumb mb-30">
                                <img class="dark" src="{{asset('images/services_dark05.png')}}" alt="service-icon">
                            </div>
                            <div class="service__item-content">
                                <h5 > <a class="stretched-link" href="#">No Admin Needed</a> </h5>
                                <p class="mb-0">The Program Follows 100% Public Blockchain Technology And
                                    Each And Everything On Decentralized Also Code Algorithm Is
                                    Self Operated And No Need for Third-Party Interactions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1200">
                        <div class="service__item-inner text-center">
                            <div class="service__item-thumb mb-30">
                                <img class="dark" src="{{asset('images/services_dark06.png')}}" alt="service-icon">
                            </div>
                            <div class="service__item-content">
                                <h5 > <a class="stretched-link" href="#">Anonymity</a>
                                </h5>
                                <p class="mb-0">We do not collect any of your personal information during the
                                    signup process.
                                    We do not collect any of your personal information during the
                                    signup process. There is no KYC information collected ever. This
                                    is your business and your company.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===============>> Service section start here <<================= -->
<!-- ========== Roadmap Section start Here========== -->
<section class="roadmap roadmap--style2 padding-top  padding-bottom bg-color">
    <div class="container">
        <div class="section-header section-header--max50">
            <h2 class="mb-10 mt-minus-5"> <span class="style2">Roadmap </span> of plarform</h2>
            <p>A product roadmap shows the path ahead, helps teams plan, and guides the delivery of the product.</p>
        </div>
        <div class="roadmap__wrapper">
            <div class="roadmap__upper">
                <div class="roadmap__upper-inner">
                    <div class="swiper">
                        <div class="roadmap__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="roadmap__item active">
                                        <div class="roadmap__item-inner roadmap__item-inner--vertical-line-bottom">
                                            <div class="roadmap__item-content">
                                                <h5>Idea</h5>
                                                <p>the idea of infinix was born on September </p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <span>Sep 15, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap__item roadmap__item--reverse">
                                        <div class="roadmap__item-inner roadmap__item-inner--vertical-line-top">
                                            <div class="roadmap__item-content">
                                                <h5>launch date</h5>
                                                <p></p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <span>Coming soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap__item">
                                        <div class="roadmap__item-inner roadmap__item-inner--vertical-line-bottom">
                                            <div class="roadmap__item-content">
                                                <h5>FENIX TOKEN</h5>
                                                <p></p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <span>Coming soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap__item roadmap__item--reverse">
                                        <div class="roadmap__item-inner roadmap__item-inner--vertical-line-top">
                                            <div class="roadmap__item-content">
                                                <h5>UNIVERSAL PROGRAM</h5>
                                                <p></p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <span>Coming soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap__item">
                                        <div class="roadmap__item-inner roadmap__item-inner--vertical-line-bottom">
                                            <div class="roadmap__item-content">
                                                <h5>IFX Swap</h5>
                                                <p></p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <span>Coming soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="roadmap__item roadmap__item--reverse">
                                        <div class="roadmap__item-inner roadmap__item-inner--vertical-line-top">
                                            <div class="roadmap__item-content">
                                                <h5>NFT Royalty</h5>
                                                <p></p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <span>Coming soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="roadmap__item">
                                        <div class="roadmap__item-inner roadmap__item-inner--vertical-line-bottom">
                                            <div class="roadmap__item-content">
                                                <h5>Metavers & Gaming</h5>
                                                <p></p>
                                            </div>
                                            <div class="roadmap__item-date">
                                                <span>Coming soon</span>
                                            </div>
                                        </div>
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
<!-- ========== Roadmap Section Ends Here========== -->
<!-- ===============>> FAQ section start here <<================= -->
<section class="faq padding-top padding-bottom of-hidden">
    <div class="section-header section-header--max57">
        <h2 class="mb-10 mt-minus-5">Frequently Asked <span class="style2">Questions</span></h2>
    </div>
    <div class="container">
        <div class="faq__wrapper">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="accordion accordion--style2" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="accordion__item accordion-item">
                                    <div class="accordion__header accordion-header" id="faq1">
                                        <button class="accordion-button accordion-button--style3 accordion__button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                                            <span class="accordion__button-content">
                                    Why is INFINIX the best alternative to trading?</span>
                                        </button>
                                    </div>
                                    <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                         data-bs-parent="#faqAccordion1">
                                        <div class="accordion__body accordion-body">
                                            <p class="mb-0">
                                                The cryptocurrency rate has no effect on the sustainability of the rewards.
                                                The minimum entry threshold is equal to just a couple of cups of coffee. There is no need to wait for payouts - funds come instantly to your wallet. Rewards always depend only on the actions of the participant.
                                                The participant can receive the reward indefinitely, as long as he expands his team.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="accordion__item accordion-item">
                                    <div class="accordion__header accordion-header" id="faq2">
                                        <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="true"
                                                aria-controls="faqBody2">
                                            <span class="accordion__button-content">

                                    Is INFINIX SAFE ? </span>
                                        </button>
                                    </div>
                                    <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                         data-bs-parent="#faqAccordion1">
                                        <div class="accordion__body accordion-body">
                                            <p class="mb-0">
                                                The Functioning of INFINIX is fully blockchain-protected. Participant leaves no personal data and has only his cryptocurrency wallet address connected via WEB 3.0 technology as a login. The entire INFINIX infrastructure is built on the operation of tamper-proof smart contracts, and the website is simply a projection of data from the blockchain.
                                                It makes no sense to hack into the website.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion--style2" id="faqAccordion2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="accordion__item accordion-item">
                                    <div class="accordion__header accordion-header" id="faq2">
                                        <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="true"
                                                aria-controls="faqBody2">
                                            <span class="accordion__button-content">
                                    Can I participate from my country? </span>
                                        </button>
                                    </div>
                                    <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                         data-bs-parent="#faqAccordion1">
                                        <div class="accordion__body accordion-body">
                                            <p class="mb-0">
                                                You don’t need to worry, the interface is user-friendly. Anyone can use
                                                it smoothly. Our user manual will help you to solve your problem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="accordion__item accordion-item border-0">
                                    <div class="accordion__header accordion-header" id="faq7">
                                        <button class="accordion-button accordion-button--style3 accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody7" aria-expanded="false"
                                                aria-controls="faqBody7">
                                            <span class="accordion__button-content">
                                    Is there a company that will hold my funds ?</span>
                                        </button>
                                    </div>
                                    <div id="faqBody7" class="accordion-collapse collapse" aria-labelledby="faq7"
                                         data-bs-parent="#faqAccordion2">
                                        <div class="accordion__body accordion-body">
                                            <p class="mb-0"> No company will hold your funds because the contract balance is always zero
                                                and payments are automatically distributed from one user to another without
                                                the need for a trusted third party. Blockchain is just an intermediary that allows
                                                you to distribute your winnings, even if the creator is just a normal user of the
                                                system.</p>
                                        </div>
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
<!-- ===============>> FAQ section start here <<================= -->



@endsection
