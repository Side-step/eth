	

<html lang="ko"><head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="target-densitydpi=medium-dpi, width=720">
<title>ETHERPLUS - OPEN TO ALL, PLUS TO ALL</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!--공통 css-->
<link rel="stylesheet" href="./css/default.css">	
<!--공통 css-->

  <style>
    .tree{
      color:#393939;
    }
    .tree, .tree ul{
      list-style: none;
      padding-left:17px;
    }
    .tree *:before{
      width:17px;
      height:17px;
      display:inline-block;
    }
    .tree label{
      cursor: pointer;
    }
    .tree label:before{
      content:'\f256';
      font-family: fontello;
    }
    .tree a{
      text-decoration: none;
      color:#393939;
    }
    .tree a:before{
      content:'\e800';
      font-family: fontello;
    }
    .tree input[type="checkbox"] {
      display: none;
    }
    .tree input[type="checkbox"]:checked~ul {
      display: none;
    }
    .tree input[type="checkbox"]:checked+label:before{
      content:'\f255';
      font-family: fontello;
    }
    .aline { border:1px solid; padding:10px;  background:#ff0000; }
    .bline { border:1px solid; padding:10px; background:#0000ff; }
    
    .box1 {
     width:100%;
    float:left; width:300px; height:100px; background-color:#ff0000; 
    margin-left: auto; margin-right: auto; padding: 5px; text-align: center; line-height: 100px; vertical-align:middle; color:white;}
   .box2 {
    width:100%;
    display:inline-block; width:300px; height:100px; background-color:#0000ff;
     margin-left:10px; margin-left: auto; margin-right: auto; padding: 5px; text-align: center; line-height: 100px; vertical-align:middle; color:white;}  


  </style>
  

</head>
<body>

<style>
#showed{display:none;background:#000;position:fixed;left:50%;top:50%;text-align:right;
width:704px;height:768px;margin-left:-352px;margin-top:-384px;z-index:999;border:1px solid #ccc;}
a.closebtx{display:inline-block;margin-right:20px;}
p.totaldeposit{height:40px;line-height:40px;font-size:20px;color:#fff;margin-right:20px;}
p.totalincentive{height:40px;line-height:40px;font-size:20px;color:#fff;margin-right:20px;}

#showed1{display:none;background:#000;position:fixed;left:50%;top:50%;text-align:right;
width:704px;height:768px;margin-left:-352px;margin-top:-384px;z-index:999;border:1px solid #ccc;}
#showed2{display:none;background:#000;position:fixed;left:50%;top:50%;text-align:right;
width:704px;height:768px;margin-left:-352px;margin-top:-384px;z-index:999;border:1px solid #ccc;}
#showed3{display:none;background:#000;position:fixed;left:50%;top:50%;text-align:right;
width:704px;height:768px;margin-left:-352px;margin-top:-384px;z-index:999;border:1px solid #ccc;}
#showed4{display:none;background:#000;position:fixed;left:50%;top:50%;text-align:right;
width:704px;height:768px;margin-left:-352px;margin-top:-384px;z-index:999;border:1px solid #ccc;}
a.closebtx{display:inline-block;margin-right:20px;}

</style>
<style>

.head_tong{width:100%;height:180px;background: url(./images/toptopbgpng180.png);position:absolute;
left:0;top:0;}
a.logomobile{display:block;width:247px;height:100px;background: url(./images/mlogos24767png.png) no-repeat center;margin:0 auto;}
.head_in{width:450px;margin:0 auto;height:80px;}
.head_in ul{font-size:0;height:80px;text-align:center;}
.head_in ul li{display:inline-block;padding:0 13px;line-height:80px;height:80px;}
.head_in ul a{font-size:24px;color:#fff;}
.tcenter{text-align:center;}
</style>



<script>
google.charts.load('current', {'packages':['bar','corechart']});
 
    function schedulerSuccessAndFailChart() {
        var data = google.visualization.arrayToDataTable([
               ["Title","Total Income", {role:'annotation'}, "Income Limit", {role:'annotation'}],
                        [""
                ,,  //성공데이터
                ,, ] //실패데이터
       ]);
 
       var barChartOption = {
               title : 'Income Information',
               bars: 'vertical',
               height :260,
               width :'100%',
               legend: { position: "top" },
               isStacked: false,
               tooltip:{textStyle : {fontSize:12}, showColorCode : true},
               animation: { //차트가 뿌려질때 실행될 애니메이션 효과
                 startup: true,
                 duration: 1000,
                 easing: 'linear' },
               annotations: {
                   textStyle: {
                     fontSize: 15,
                     bold: true,
                     italic: true,
                     color: '#871b47',
                     auraColor: '#d799ae',
                     opacity: 0.8
                   }
              }
        };
 
       var chart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
 
       chart.draw(data, barChartOption);
       //반응형 그래프 출력 - 반응형 그래프를 원하지 않을 시 제거하거나 주석처리 하세요.
       window.addEventListener('resize', function() { chart.draw(data, barChartOption); }, false);
    }
 
    google.charts.setOnLoadCallback(schedulerSuccessAndFailChart);
 
 
 
</script>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawVisualization);
	
		function drawVisualization() { 
			var data = google.visualization.arrayToDataTable([
					['Type', 'Income'],
					['Direct Referral  ETH',  ],
					['100% match  ETH',  ],
					['rollup  ETH',  ],
					['Team Match  ETH',  ],

				]);
			var options = {
					title : 'Income Information',
					vAxis: {title: 'Total Income'},
					seriesType: 'bars',
          tooltip:{textStyle : {fontSize:12}, showColorCode : true},

					series: {5: {type: 'line'}}
				};
			
			var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		}
	</script>
 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script> 
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script type="text/javascript"> 
 google.charts.load('current', {'packages' : ['corechart']});
 google.charts.setOnLoadCallback(drawChart);



  function drawChart(){
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Line');
    data.addColumn('number', 'Daily Count');
    data.addRows( 
			['A-Line',],['B-Line',]); 
    var options = {'title' : 'Daily Line Information', 'width' :800, 'height' : 500};
    var chart = new google.visualization.PieChart(document.getElementById('line_chart_div'));

    chart.draw(data, options);
  }
 
</script>
 

</html>

  

<!--메인용-->

<div class="bgbgwrap">
	<div style="height:180px;"></div>
	<div class="head_tong">
		<a href="/" class="logomobile"></a>
		<div class="head_in">
			<ul class="main_menu">
				<li><a href="./index.php">HOME</a></li>
                  <li><a href="./login.php">LOGIN</a></li>
         				<li><a href="./guide.php">GUIDE</a></li>
			<!--	<li class="lastli"><a href="javascript:;">GUIDE</a></li> -->
			</ul>
		</div>
	</div>
	<div style="height:160px;"></div>
	<div class="tcenter">
		<span><img src="./images/mlogo25659png.png" alt=""></span>
	</div>
	<div style="height:50px;"></div>
	<h2 class="boldtitle">OPEN TO ALL<br><span style="letter-spacing:7px">PLUS</span> TO ALL</h2>
	<div style="height:113px;"></div>
	<p class="subtitle">
		A Financial system built on smart contract technology.<br>
		Open to all, Plus to all
	</p>
	<div class="timezone">
		<p><span class="timepp1"></span><span class="gooboon">:</span><span class="timepp2"></span><span class="gooboon">:</span><span class="timepp3"></span></p>
	</div>
</div>
<!--메인용-->
<!--
<div>
	<div class="het630">
		<h2>ETHER PLUS</h2>
		<p>
			Ever since I can remember. I was interested in moving pictures.<br>
			Growing up. I realized I have an eye for beauty and<br> 
			a mind full of stories to tell.<br>
			I have been lucky to work on a variety of award-winning projects.<br>
			spanning across fiction and documentary.<br>
			They say a picture is worth a thousand words.<br> 
			and I’m proud to share the highlights of my work on this site.<br>
			Please don’t hesitate to get in touch if you’d<br> 
			like to discuss working together.
		</p>
	</div>
</div>

-->
<div style="height:114px;"></div>
<div class="joinzone">
	<h2>JOIN</h2>
	<!-- <form action=""> -->
	<div style="height:50px;"></div>
	<div class="ethrelative">
		<input type="text" value="0x30cA9a3A45919659478D35466b8FDaD1F704768e" name="" class="ethinput" >
		<p><img src="./images/qr878787.png" alt=""></p>
	<div class="link_con">
		<a href="javascript:;"><h2 class="content_join"><center><font color ="white">[Copy Contract Address]</font></center></a>
	</div>
	</div>
	<div style="height:68px;"></div>
	<a href="javascript:;" class="pluseth">
			</a>
	<div style="height:75px;"></div>
	<div class="button_zone">
		<!-- <a href="javascript:;" class="resetleft">RESET</a> -->
        <a href="javascript:;" class="joinright"> 
        JOIN
    </a>
	</div>
	<div style="height:85px;"></div>
	<p  class="content_join">
	TO JOIN THE PROJECT YOU NEED TO USE<br>
	THE ETHEREUM WALLET.<a href="javascript:;">READ MORE</a>
	</p>
	<div style="height:65px;"></div>
	
	<div class="link_qr">
		<a href="javascript:;"></a>
	</div>
	


	<!-- </form> -->

</div>




<div style="height:50px;"></div>

	<div class="info_wrap">
		<div style="height:70px;"></div>
		<div class="info">
			<span><img src="./images/wow6663_icon.png" alt=""></span>
			<div style="height:35px;"></div>
			<h3>STATISTICS</h3>
			<div style="height:45px;"></div>
			<ul>
				<li class="">
					<p class="left_title_p">Total ETH Deposits All Time</p>
					<p class="right_title_p"> 1612 ETH</p>
				</li>
				<li>
					<p class="left_title_p">Smart Contract Balance</p>
					<p class="right_title_p">686 ETH</p>
				</li>
				<li>
					<p class="left_title_p">Amount Withdrawn by Members</p>
					<p class="right_title_p">928 ETH</p>
				</li>
				<li>
					<p class="left_title_p">Amount In The Daily Pool</p>
					<p class="right_title_p">0 ETH</p>
				</li>
			</ul>

		</div>
		<div style="height:70px;"></div>
	</div>

<!---
  <div id="chart_div"></div>
  <div style="height:30px;"></div>
  
  <div id="bar_chart_div"></div>
  <div style="height:30px;"></div>
--->  
  <div style="height:10px;"></div>  
  <div class="box1">
   ETH <br>A Line   </div>      
  <div class="box2">
   ETH <br>B Line   </div>
  


	<div style="height:50px;"></div>

	<div class="personal_wrap">
		<div style="height:70px;"></div>
		<div class="personal">
			<span><img src="./images/wow6663_icon.png" alt=""></span>
			<div style="height:35px;"></div>
			<h3>PERSONAL STATISTIC</h3>
			<div style="height:45px;"></div>
			<ul class="tablepop_ul">
				<li data-code='1'>
					<p class="left_title_p">Your Addr
                     </p>

					<p class="right_title_p"></p>
				</li>
       	<li data-code='2'> 
        	<p class="left_title_p">Sponsor Addr</p>
        
 					<p class="right_title_p">
           <font color = 'red'>Unregistered User!!</font>           </p>
				</li>
        

				<li data-code='3'>
					<p class="left_title_p">300% Income Limit Remain</p>
					<p class="right_title_p"><u><strong> ETH</strong></u></p>
				</li>
        
				<li data-code='4'>
					<p class="left_title_p">Direct Referral Income 5%</p>
          <a href = 'http://www.etherplus.io/table.php?own=&type=1'>
					<p class="right_title_p"> ETH</p></a>
				</li>
				<li data-code='5'>
           <a href = 'http://www.etherplus.io/table.php?own=&type=2'>
					<p class="left_title_p">Rollup Income 1%</p>
					<p class="right_title_p"> ETH</p></a>
				</li>
				<li data-code='6'>
					<p class="left_title_p">Team Match Income</p>
          <a href = 'http://www.etherplus.io/table.php?own=&type=3'>             
					<p class="right_title_p"> ETH</p></a>
				</li>
				<li data-code='7'>
					<p class="left_title_p">1st Match Income 100%</p>
          <a href = 'http://www.etherplus.io/table.php?own=&type=4'>             
					<p class="right_title_p"> ETH</p></a>
				</li>
				<li data-code='8'>
					<p class="left_title_p">Total Income ETH </p>
					<p class="right_title_p"> ETH</p>
				</li>
				<li data-code='9'>
					<p class="left_title_p">Total Extinct ETH</p>
					<p class="right_title_p" style = 'color:red'>0 ETH</p>
				</li>
				<li data-code='10'>
					<p class="left_title_p">Withdrawable Balance ETH</p>
					<p class="right_title_p"><strong><u>
          0                   ETH </strong></u>
          </p>
				</li>
			</ul>
			
			<div class="button_zone">
			<!-- <a href="javascript:;" class="resetleft">RESET</a> -->
		<a href="./withdraw.php?own=&balance=0" class="joinright">WITHDRAW</a>
   	<!----	<a href="." class="joinright">WITHDRAW( CLOSED TO 11:00 PM )</a>  --->

			</div>

		</div>
		<div style="height:70px;"></div>
	</div>
	<!---
	<div id="showed">
		<div style="height:90px;"></div>
		<a href="javascript:;" class="closebtx"><img src="./images/close4343.jpg" alt=""></a>	
		<div style="height:40px;"></div>
		<p class="totaldeposit">Total deposit : 10 eth</p>
		<p class="totalincentive">Total Incentive : 1 eth</p>
		<div style="height:20px;"></div>
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;border-top:1px solid #fff;border-bottom:1px solid #fff;
		width:674px;margin:0 auto;height:100px;}
		.tg td{border-style:solid;border-width:1px;font-size:20px;
		  overflow:hidden;padding:10px 5px;word-break:normal;border-bottom:1px solid #888;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.tg th{border-style:solid;border-width:1px;font-size:21px;
		  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.sum_price{height:30px;width:600px;margin:0 auto;}
		.sum_price_p1{float:left;height:30px;font-size:20px;color:#fff;}
		.sum_price_p2{float:right;height:30px;font-size:20px;color:#fff;}
		</style>
		<div class="tgtong">
			<table class="tg">
			<thead>
			  <tr>
				<th class="tg-0pky">Data</th>
				<th class="tg-0pky">Address</th>
				<th class="tg-0pky">Type</th>
				<th class="tg-0pky">Deposit</th>
				<th class="tg-0pky">Incentive</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td class="tg-0pky">2020-08-31 11:16</td>
				<td class="tg-0pky">0x232…23</td>
				<td class="tg-0pky">Roll_up</td>
				<td class="tg-0pky">1 eth</td>
				<td class="tg-0pky">0.01 eth</td>
			  </tr>
			   <tr>
				<td class="tg-0pky">2020-08-31 11:16</td>
				<td class="tg-0pky">0x232…23</td>
				<td class="tg-0pky">Roll_up</td>
				<td class="tg-0pky">1 eth</td>
				<td class="tg-0pky">0.01 eth</td>
			  </tr>
			</tbody>
			</table>
		</div>
		<div style="height:50px;"></div>
		<div class="sum_price">
			<p class="sum_price_p1">현재출금가능잔액</p>
			<p class="sum_price_p2">-ETH</p>
		</div>
	</div>

	--->


	
	<div id="showed1">
		<div style="height:90px;"></div>
		<a href="javascript:;" class="closebtx"><img src="./images/close4343.jpg" alt=""></a>	
		<div style="height:40px;"></div>
		<div style="height:20px;"></div>
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;border-top:1px solid #fff;border-bottom:1px solid #fff;
		width:764px;margin:0 auto;height:100px;}
		.tg td{border-style:solid;border-width:1px;font-size:15px;
		  overflow:hidden;padding:20px 5px;word-break:normal;border-bottom:1px solid #888;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.tg th{border-style:solid;border-width:1px;font-size:16px;
		  font-weight:normal;overflow:hidden;padding:20px 5px;word-break:normal;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.sum_price{height:30px;width:600px;margin:0 auto;}
		.sum_price_p1{float:left;height:30px;font-size:16px;color:#fff;}
		.sum_price_p2{float:right;height:30px;font-size:16px;color:#fff;}
		</style>
			<table class="tg">
			<thead>
			  <tr>
				<th class="tg-0pky">No</th>
				<th class="tg-0pky">Address</th>
				<th class="tg-0pky">Deposit</th>
			  </tr>
			</thead>
			<tbody>
			
 	  		<p class="totaldeposit">Total deposit :  0 ETH</p>
			<p class="totalincentive">Total Direct Referral : 0 </p>

			 
			</tbody>
			</table>
     
	</div>
 
 
	<div id="showed2">
		<div style="height:90px;"></div>
		<a href="javascript:;" class="closebtx"><img src="./images/close4343.jpg" alt=""></a>	
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;border-top:1px solid #fff;border-bottom:1px solid #fff;
		width:674px;margin:0 auto;height:100px;}
		.tg td{border-style:solid;border-width:1px;font-size:20px;
		  overflow:hidden;padding:10px 5px;word-break:normal;border-bottom:1px solid #888;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.tg th{border-style:solid;border-width:1px;font-size:18px;
		  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.sum_daily{height:30px;width:600px;margin:0 auto;}
		.sum_price_p1{float:left;height:30px;font-size:16px;color:#fff;}
		.sum_price_p2{float:right;height:30px;font-size:16px;color:#fff;}
		</style>
     <br>
     <div class="sum_daily2">
			<p class="sum_price_p1">A :  ETH</p>
 			<table class="tg">
			<thead>
			  <tr>
				<th class="tg-0pky">A-Line.No</th>
				<th class="tg-0pky">Address</th>
				<th class="tg-0pky">Deposit</th>
       
     
				<th class="tg-0pky">B-Line.No</th>
				<th class="tg-0pky">Address</th>
				<th class="tg-0pky">Deposit</th>
   
			  </tr>
			</thead>

       
      
      </table>
		</div>
     
	</div>
    
    
 <div id="showed3">
		<div style="height:90px;"></div>
		<a href="javascript:;" class="closebtx"><img src="./images/close4343.jpg" alt=""></a>	
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;border-top:1px solid #fff;border-bottom:1px solid #fff;
		width:674px;margin:0 auto;height:100px;}
		.tg td{border-style:solid;border-width:1px;font-size:20px;
		  overflow:hidden;padding:10px 5px;word-break:normal;border-bottom:1px solid #888;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.tg th{border-style:solid;border-width:1px;font-size:18px;
		  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.sum_daily{height:30px;width:600px;margin:0 auto;}
		.sum_price_p1{float:left;height:30px;font-size:16px;color:#fff;}
		.sum_price_p2{float:right;height:30px;font-size:16px;color:#fff;}
		</style>
     <br>
     <div class="sum_daily2">
			<p class="sum_price_p1">A(today) :  ETH</p>
 			<table class="tg">
			<thead>
			  <tr>
				<th class="tg-0pky">A-Line.No</th>
				<th class="tg-0pky">Deposit</th>
       
     
				<th class="tg-0pky">A-Line.no</th>
				<th class="tg-0pky">Deposit</th>
   
			  </tr>
			</thead>

  			<tbody>
  			  
   	 
  			</tbody>
      
      </table>
		</div>
     
	</div>
 
 
 
 <div id="showed4">
		<div style="height:90px;"></div>
		<a href="javascript:;" class="closebtx"><img src="./images/close4343.jpg" alt=""></a>	
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;border-top:1px solid #fff;border-bottom:1px solid #fff;
		width:674px;margin:0 auto;height:100px;}
		.tg td{border-style:solid;border-width:1px;font-size:20px;
		  overflow:hidden;padding:10px 5px;word-break:normal;border-bottom:1px solid #888;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.tg th{border-style:solid;border-width:1px;font-size:18px;
		  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;
		  color:#fff;text-align:center;border-right:none;border-left:none;}
		.sum_daily{height:30px;width:600px;margin:0 auto;}
		.sum_price_p1{float:left;height:30px;font-size:16px;color:#fff;}
		.sum_price_p2{float:right;height:30px;font-size:16px;color:#fff;}
		</style>
     <br>
     <div class="sum_daily2">
			<p class="sum_price_p1">B(today) :  ETH</p>
 			<table class="tg">
			<thead>
			  <tr>
				<th class="tg-0pky">B-Line.No</th>
				<th class="tg-0pky">Deposit</th>
       
     
				<th class="tg-0pky">B-Line.no</th>
				<th class="tg-0pky">Deposit</th>
   
			  </tr>
			</thead>

  			<tbody>
  			  
   	 
  			</tbody>
      
      </table>
		</div>
     
	</div>
  
 
	<div style="height:50px;"></div>




	<div class="statistics_wrap">
		<div style="height:70px;"></div>
		<div class="statistics">
			<span><img src="./images/wow6663_icon.png" alt=""></span>
			<div style="height:35px;"></div>
			<h3>STATISTIC</h3>
			<div style="height:45px;"></div>
			<ul>
				<li>
					<p class="left_title_p">Total Amount Of Deposited ETH</p>
					<p class="right_title_p"> ETH</p>
				</li>
				<li>
					<p class="left_title_p">Total Amount Of Received ETH</p>
					<p class="right_title_p"> ETH</p>
				</li>
			</ul>
		</div>
		<div style="height:70px;"></div>
	</div>


	<div style="height:50px;"></div>
	
	<div class="smart_wrap">
		<div style="height:70px;"></div>
		<div class="smart">
			<span><img src="./images/wow6663_icon.png" alt=""></span>
			<div style="height:35px;"></div>
			<h3>ORGANIZATION</h3>
			<div style="height:45px;"></div>
			<ul class="tablepop_uls">
				<li data-code='1'>
					<p class="left_title_p">Invitation Link</p>
					<p class="right_title_p"></p>
				</li>
				<li data-code='2'>
					<p class="left_title_p">Personal Invited Partners</p>
					<p class="right_title_p">0</p>
				</li>

 				<li data-code='3'>
					<p class="left_title_p">A-Line Numbers of Partners</p>
					<p class="right_title_p">0</p>
				</li>
 				<li data-code='4'>
					<p class="left_title_p">B-Line Numbers of Partners</p>
					<p class="right_title_p">0</p>
				</li>       
				<li data-code='5'>

					<p class="left_title_p">Total Numbers of Partners</p>
          <a href = 'http://www.etherplus.io/tree.php?own=&type=1'>

					<p class="right_title_p">0(0,0)</p></a>
				</li>        
 
<!---				<li data-code='6'>
					<p class="left_title_p">Total Community Participants</p>
					<p class="right_title_p">0 ETH</p>
				</li>  --->
			</ul>
		</div>
		<div style="height:70px;"></div>
	</div>
	
	<script>
		$(".tablepop_ul li").click(function(){
			var thisdata = $(this).data('code');
			$("#showed").show();
			/*$.ajax({

			url: "/chw_ajax1.html",
			type: "POST",
			data:{'tt':thisdata},
			success: function(msg){
				$("#showed").show();
				$("#showed").html(msg);
			}
			})
			*/
		
		})
		
		function copyToClipboard(val) {
		  var t = document.createElement("textarea");
		  document.body.appendChild(t);
		  t.value = val;
		  t.select();
		  document.execCommand('copy');
		  document.body.removeChild(t);
		}
		$('.tablepop_uls li:eq(0)').click(function() {
       		});

		
		$('.link_qr a').click(function() { /* referral link 클릭시 */
       		});

		$('.link_con a').click(function() {
		  copyToClipboard('0x30cA9a3A45919659478D35466b8FDaD1F704768e');
		  alert('Copied contract adress.');
		});

		$('.tablepop_uls li:eq(1)').click(function() {
		   $("#showed1").show();
		});
	
		$('.tablepop_uls li:eq(2)').click(function() {
		   $("#showed3").show();
		});
  
 		$('.tablepop_uls li:eq(3)').click(function() {
		   $("#showed4").show();
		});
   
		$('.tablepop_uls li:eq(4)').click(function() {
		   $("#showed5").show();
		}); 

		$(".closebtx").on('click',function(){
			$("#showed").hide();
			$("#showed1").hide();
			$("#showed2").hide();
			$("#showed3").hide();
			$("#showed4").hide();
		})
	</script>



<div style="height:200px;"></div>
<div class="statistics_zone">
	<h2>SMART CONTRACT</h2>
	<div style="height:48px;"></div>
	<p>
			ETHERPLUS a smart contract is a self executing contract the has a programmed protocol to follow and is deployed on the public blockchain, a smart contract can store value and execute transfers when the requirements of the contract has been met. It has the characteristics of being immutable, tamper-proof, scam proof, fair, just and fully transparent. It acts strictly according to the pre written rules of the contract, nothing less nothing more, it is 100% decentralized meaning that there is no central point such as a company or authority in of control of the contract. It can not be stopped, it can not be shut down and you can not be banned from the program There are no limits to what a smart contract algorithm can do, the smart contract is there to simply perform the action it has been programmed to do when the contract requirements have been met, without the need of a third party or human intervention.
	</p>
</div>

	
	<div style="height:130px;" id="link_2"></div>
	
 
 
<!--	
	<div class="guidance_tong">
		<span><img src="./images/png114114_logo.png" alt=""></span>
		<div style="height:35px;"></div>
		<h2>GUIDANCE</h2>
		<br>
		<img src="./images/guidance.jpg" alt="">


		</div>
	</div>

	<div style="height:150px;"></div>

-->






<script>
	
	$(".main_menu>li>a").click(function(){
		var indd = $(this).parent("li").index();
	
		if(indd==3){
			var offset = $("#link_2").offset();
			$('html, body').animate({scrollTop : offset.top}, 400);
		}
	})
	
</script>



<!--footer-->
<div class="footer">
	<div class="footer_in">
		<div style="height:33px;"></div>
		<a href="https://t.me/etherplus_official"><img src="./images/footer_icon_1_8383_on.png" alt=""></a>
		<span style="padding:0 15px;"></span>
		<a href="https://t.me/etherplus_official"><img src="./images/footer_icon_1_8383_off.png" alt=""></a>
	</div>
</div>
<!--footer-->

<!--공통 js-->
<script src="./js/main.js"></script>
<!--공통 js-->

</body>
</html>