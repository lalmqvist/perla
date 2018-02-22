<h4 class="progress-page">Här är dina bidrag</h4>

<div class="row progress-container" id="progress-page">
    <div id="progress-container-ads" data-progress="{{$progressAds['percent']}}">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
            <path fill-opacity="0" stroke-width="1" stroke="#bbb" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
            <path id="heart-path" fill-opacity="0" stroke-width="3" stroke="#EF909E" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
        </svg>
        <h5 class="info-text">{{ $progressAds['giftSum'] }} kr av {{ $progressAds['adsSum'] }} kr</h5>
        <p class="info-text">{{ $progressAds['percent'] * 100 }} % av dina försäljningar har gått till välgörenhet.</p>
    </div>

    <div id="progress-container-orders" data-progress="{{$progressOrders['percent']}}">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
            <path fill-opacity="0" stroke-width="1" stroke="#bbb" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
            <path id="heart-path-2" fill-opacity="0" stroke-width="3" stroke="#EF909E" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
        </svg>
        <h5 class="info-text">{{ $progressOrders['giftSum'] }} kr av {{ $progressOrders['orderSum'] }} kr</h5>
        <p class="info-text">{{ $progressOrders['percent'] * 100 }} % av dina köp har gått till välgörenhet.</p>
    </div>
</div>

<h4 class="progress-page">Tack! </h4>