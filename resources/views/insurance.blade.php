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
                <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <p>2020/04/11</p>
                        </div>
                </div>   
                <div class="row">
                        <div class="col-sm-3"> 
                            <p>株式会社　全農ビジネスサポート</p>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <p>Ref.{{ $insurance_form -> vessel_no }}</p>
                        </div>
                </div>  
                <div class="row">
                        <div class="col-md-3"> 
                            <p>物流保険部　御中</p>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            
                        </div>
                </div>  
                <div class="row">
                        <div class="col-md-3"> 
                            <p>（FAX：03-3296-8995)</p>
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
                <br>
                <br>
                <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"> 
                            <h1>保険申込明細書</h1>
                        </div>
                        <div class="col-md-4"></div>
                </div>
                <br>
                <br>
                <div class="row">
                        <div class="col-md-3"> 
                            <p>いつもお世話になっております。</p>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-10"> 
                            <p>このことにつきまして、以下のとおり依頼いたしますので、よろしくお願い致します。</p>
                        </div>
                        <div class="col-md-2"></div>
                        
                            
                </div>
           
              
        	<div class="row">
        	    <div class="col-sm-12"> 
        	    
                	<table class ="table table-bordered">
                    	<tr>
                    		<th>船名</th>
                    		<th> {{ $insurance_form -> name_of_vessel }}</th>
                    		<th>積出港</th>
                    		<th>MUNDRA,INDIA</th>
                    	</tr>
                    		<tr>
                    		<th>品名</th>
                    		<th>CASTOR SEED EXTRACTION MEAL</th>
                    		<th>B/L　数量  (M/T)</th>
                    		<th>{{ $insurance_form -> mt }}</th>
                    	</tr>
                    		<tr>
                    		<th>船社</th>
                    		<th>{{ $insurance_form -> shipping_company }}</th>
                    		<th>B/L　DATE</th>
                    		<th>{{ $insurance_form -> bl_date }}</th>
                    	</tr>
                	</table>
                	<br>
                
                	
                    <table class ="table table-bordered">
                        <tr>
                    		<th></th>
                    		<th>数量(M/T)</th>
                    		<th>袋数(袋)</th>
                    		<th>単価(USD)</th>
                    		<th>AOMUNT</th>
                    		<th>備考</th>
                    		
                    	    </tr>
                    		<tr>
                        		<th>品代</th>
                        		<th>{{ $insurance_form -> mt }}</th>
                        		<th></th>
                        		<th>{{ $insurance_form -> unit_price }}</th>
                        		<th>USD {{ $insurance_form -> remmitance }}</th>
                        		<th>CFR {{ $insurance_form -> port_of_discharging }}</th>
                    	    </tr>
                    	    <tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th>B/L NO.{{ $insurance_form -> bl_no }}</th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	<tr>
                        		<th><br></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        </table>
                        
                    <div class="row">
                        <div class="col-md-10"> 
                            <p>※1 保険料請求書にRef.Noを記載願います。</p>
                        </div>
                        <div class="col-md-2"></div>
                        
                            
                </div>
                <div class="row">
                        <div class="col-md-10"> 
                            <p>※2　ON BEHALF OF ZEN-NOHと表記願います（請求はＺＧＲ宛）</p>
                        </div>
                        <div class="col-md-2"></div>
                        
                            
                </div>
                   	
            	</div>
            </div>    
        </div>
    </body>
</html>