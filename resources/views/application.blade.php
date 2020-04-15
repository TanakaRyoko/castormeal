<!!DOCTYPE html>
<html lang="{{ app() -> getLocale() }}">
    <head>
        <meta charaset="utf-8">
        <meta http-quiv="X-UA-Compatible" conten="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <!--CSRF Token -->
        
        <meta name="csrf-token" content="{{  csrf_token()  }}">
        
        
        <title>@yield('title')</title>
        
        
        
        {{-- Laravel標準で用意されているJacascriptを読み込む --}}
        <script src="{{ secure_asset('js/app.js') }} "defer></script>
    
        <!--Fonts-->
        <link rel="dns-prefetch" href="http//fonts.gstatic.com">
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!--Styles -->
        
        {{-- Lravel標準で用意されているCSSを読み込む　--}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div class="container">
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <p>2020/04/11</p>
                </div>
            </div>   
            <div class="row">
                <div class="col-sm-3"> 
                    <p>愛知海運㈱　　　</p>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <p>Ref.9148</p>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-3"> 
                    <p>野村様</p>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    
                </div>
            </div>  
            <div class="row">
                <div class="col-md-3"> 
                    
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <p>全農グリ－ンリソ－ス(株)</p>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-3"> 
                    
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <p>営業部</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"></div>
                <div class="col-md-2">
                    <table class="table table-bordered">
                        <tr>
                            <th>課長</th>
                            <th>担当</th>
                        </tr>
                        <tr>
                            <td><br<br></td>
                            <td><br><br></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1"></div>  
            </div>      
        
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"> 
                    <h1>注　　文　　書</h1>
                </div>
                <div class="col-md-4"></div>
            </div>
        <br>
        <br>
        <br>
        <br>
            <div class="row">
                <div class="col-md-4"> 
                    <p>いつもお世話になり有難うございます。</p>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>以下の通りご連絡しますので、通関・納入等の手配をお願いします。</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>１．輸入申告者名：【全国農業協同組合連合会】</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>２．品名・規格  ：  インド産ヒマシ粕 {{ $application_form -> product }}</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>３．数量        ：{{ $application_form -> mt }}</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>４．入港予定    ：{{ $application_form -> time_of_arrival }}</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>５．納入場所    ：{{ $application_form -> port_of_discharging }} CY渡し</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>６．添付書類 </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p> □　INVOICE COPY </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>  □　B/L COPY</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>  □　PACKING LIST</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p> □　ARRIVAL NOTICE           到着次第送付します</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p> □　その他 (①Cert. of Origin,②Phytosanitary Cert., ③Fumigation Cert., )</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-10"> 
                    <p>＊支払代金・支払期日・方法等は現行の料金表の「支払条件」によります。 </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>