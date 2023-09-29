@php
    $listFooter = [
        [
            'title' => 'DC COMICS',
            'credits' => ['Character', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
        ],
        [
            'title' => 'SHOP',
            'credits' => ['Shop DC', 'Shop DC Collectibles'],
        ],
        [
            'title' => 'DC',
            'credits' => ['Terms of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact US'],
        ],
        [
            'title' => 'SITES',
            'credits' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'],
        ],
    ];
@endphp
<footer>
    <div style="background-image: url(/img/footer-bg.jpg)" class="bg-dc">
        <div class="container text-white">
            <div class="d-flex justify-content-between">
                <div class="d-flex pt-5 pb-5 flex-wrap flex-column footer-left">
                    @foreach ($listFooter as $singleListFooter)
                        <div class="pe-4 ">
                            <h4 class="text-uppercase text-white">{{ $singleListFooter['title'] }}</h4>
                            <ul class="me-auto mb-2 mb-lg-0 list-unstyled text-white pb-3">
                                @foreach ($singleListFooter['credits'] as $singleCredits)
                                    <li class="nav-item li-custom-color">
                                        <a class="nav-link" aria-current="page" href="#">{{ $singleCredits }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div style="background-image: url(/img/dc-logo-bg.png)" class="logo-footer"></div>
            </div>
        </div>
    </div>
    <div class="footer-bg pt-4 pb-4">
        <div class="container d-flex justify-content-between">
            <button type="button" class="btn btn-outline-primary text-white btn-footer">
                SIGN-UP NOW!
            </button>
            <div class="d-flex">
                <div class="d-flex align-items-center">
                    <h5 class="color-primary">FOLLOW US</h5>
                </div>
                <div class="ps-4">
                    <img src="/img/footer-facebook.png" alt="" />
                    <img src="/img/footer-twitter.png" alt="" />
                    <img src="/img/footer-youtube.png" alt="" />
                    <img src="/img/footer-pinterest.png" alt="" />
                    <img src="/img/footer-periscope.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</footer>
