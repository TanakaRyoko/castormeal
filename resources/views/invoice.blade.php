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
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1>原　価　計　算　書</h1>
                </div>
                <div class="col-md-4"></div>
            </div>   
        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <p>2020年4月11日</p>
                </div>
        </div>
        <br>
        
        
        <table class ="table table-bordered">
            
                    	<tr>
                    		<th>本船№　{{ $invoice_form->vessel_no }}</th>
                    		<th>INDIAN CASTOR MEAL　　　　　　ウィルマージャパン</th>
                    		<th>B/L DATE:</th>
                    		<th>　{{ $invoice_form->bl_date }}</th>
                    		
                    	</tr>
                    	<tr>
                    		<th>本船名</th>
                    		<th>{{ $invoice_form->name_of_vessel }}</th>
                    		<th>揚港</th>
                    		<th>　{{ $invoice_form->port_of_discharging }}</th>
                    	</tr>
                    		
                    	<tr>
                    		<th>B/L数量（荷姿）</th>
                    		<th>　{{ $invoice_form->mt }} MT　IN　BAG</th>
                    		<th></th>
                    		<th>為替レート    支払送金日<br>@¥{{ $invoice_form->rate }}　{{ $invoice_form->remmitance_date }}</th>
                    	</tr>
        </table>
        <table class ="table table-bordered">
                    	<tr>
                    		<th>項目</th>
                    		<th>コード</th>
                    		<th>計　　　　算　　　　基　　　　礎</th>
                    		<th>金額</th>
                    		<th>消費税</th>
                    		
                    	</tr>
                    		<tr>
                    		<th>インボイス金額<br>(C&F)</th>
                    		<th>101</th>
                    		<th>USD {{ $invoice_form->vessel_no }}　×　{{ $invoice_form->mt }}MT　=　USD {{ $invoice_form->remmitance }}</th>
                    		<th>￥{{ $invoice_form->japanese_yen }}<br><br>支払期日: 2020/5/25</th>
                    		<th>￥4655677<br><br></th>
                    	</tr>
                    		<tr>
                    		<th>ユーザンス金利<br>(品代)</th>
                    		<th>140</th>
                    		<th><br>USD {{ $invoice_form->remmitance }}　×　{{ $invoice_form->interest_rates }}％　×　43/365　=　USD 4.33<br>9/13 ～　10/25</th>
                    		<th><br>支払期日: 2020/5/25</th>
                    		<th>￥45667555<br><br></th>
                    	</tr>
                    	</tr>
                    		<tr>
                    		<th>輸入手数料</th>
                    		<th>150</th>
                    		<th></th>
                    		<th><br>支払期日: 2020/5/25</th>
                    		<th>￥4546665<br><br></th>
                    	</tr>
        </table>        	
           
        </div>
    </body>
</html>