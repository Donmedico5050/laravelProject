@include('header')
<!-- Banner/Slider -->
<div class="page-head section row-vm light has-bg">
    <div class="imagebg">
        <img src="frontend_assets/images/team-left.jpg" alt="page-head">
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Market Data</h2>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span>Market Data</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #end Banner/Slider -->
</header>
<!--Section -->
<div class="section section-pad bg-grey">
   <div class="container">
       <div class="row row-vm">
           <div class="col-md-6">
            <div class="trendingview-chart res-m-bttm">
                <!-- TradingView Widget BEGIN -->
                <script src="../s3.tradingview.com/tv.js"></script>
                <script>
                new TradingView.widget({
                    "autosize":true,
                    "symbol": "BTCUSDT",
                    "interval": "60",
                    "timezone": "Etc/UTC",
                    "theme": "Light",
                    "style": "1",
                    "locale": "en",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "allow_symbol_change": true,
                    "hideideas": true
                });
                </script>
                <!-- TradingView Widget END -->
            </div>
           </div>
           <div class="col-md-5 col-md-offset-1 ">
            <div class="text-block">
                <h2>Crypto Chart</h2>
                <p>This is our latest tool for investors, traders and enthusiasts.
                    This tool displays most of the available crypto assets and sorts them based on the market capitalization.
                    The key metrics such as the closing price, total and available number of coins, traded volume and price change
                    percentage are all available at a quick glance.</p>
                <p> If you are getting started in cryptocurrency, you can check out our investment glossary.</p>
                <a href="glossary.html" class="btn btn-alt">go to glossary</a>
            </div>
           </div>
       </div>
   </div>
</div>
<!--End Section -->

<!--Section -->
<!-- <div class="section section-pad">
               <div id="tv-medium-widget-one"></div>
                <script src="https://s3.tradingview.com/tv.js"></script>
                <script>
                new TradingView.MediumWidget({
                  "container_id": "tv-medium-widget-one",
                  "symbols": [
                    [
                      "Apple",
                      "AAPL "
                    ],
                    [
                      "Google",
                      "GOOGL"
                    ],
                    [
                      "Microsoft",
                      "MSFT"
                    ]
                  ],
                  "greyText": "Quotes by",
                  "gridLineColor": "#e9e9ea",
                  "fontColor": "#83888D",
                  "underLineColor": "#dbeffb",
                  "trendLineColor": "#4bafe9",
                  "width": "100%",
                  "height": "100%",
                  "locale": "en"
                });
                </script>
            </div>
           </div>
           <div class="col-md-5 col-md-offset-1">
            <div class="text-block">
                <h2>Take a Look at<br/>Crypto Stock Chart</h2>
                <p>Looking to get started in the world of cryptocurrency trading sit amet tristique?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et lorem nec felis finibus laoreet. Nullam id dictum urna. Vestibulum in aliquam tellus, sit amet tristique ipsum. </p>
                <a href="#" class="btn btn-alt">get started</a>
            </div>
           </div>
       </div>
   </div>
</div> -->
<!--End Section -->

<!--Section -->
<div class="section section-pad">
   <div class="container">
    <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
         <div class="text-block">
             <h2>NFP & IEO Stock Charts</h2>
             <p>The NFP report generally affects all major currency pairs, but one of the favorites
                among traders is the GBP/USD. Because the forex market is open 24 hours a day, all
                traders have the ability to trade the news event.</p>
            <p>This tool allows you to display real-time quotes of the selected currencies in comparison to the other major currencies at a glance.</p>
             <a href="glossary.html" class="btn btn-alt">go to glossary</a>
         </div>
        </div>
    </div>
    <div class="gaps size-2x"></div>
       <div class="row">
           <div class="col-md-10 col-md-offset-1">
            <div class="trendingview-chart">
                <!-- TradingView Widget BEGIN -->
                <script src="../s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">
                {"currencies": [
                    "EUR",
                    "USD",
                    "JPY",
                    "GBP",
                    "CHF",
                    "AUD",
                    "CAD",
                    "NZD",
                    "CNY"
                  ],
                  "width": "100%",
                  "height": "100%",
                  "locale": "en",
                  "largeChartUrl": "market-data.html" }
                </script>
                <!-- TradingView Widget END -->
            </div>
           </div>
       </div>


   </div>
</div>
<!--End Section -->


@include('footer')
