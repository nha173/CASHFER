<?php include 'include/head.php';?>

<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
			<?php include 'include/header.php';?>
			<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<!--inner block start here-->
<div style="margin-top: -60px" class="inner-block">
    <div class="blank">
	    	<div class="blankpage-main">
	    		<div class="content">
	    			<div class="report-overview-module"></div>
				</div>
    	</div>
    </div>
</div>
<!--inner block end here-->

</div>
</div>
<!--slider menu-->
   	<?php include 'include/sidebar.php';?>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>

<style type="text/css">
	

h2 {
  margin: 35px;
  font-weight: 300;
}

.content {
  max-width: 1200px;
  margin: 0 auto;
}

.report-statistic-box {
  float: left;
  width: 25%;
  height: 275px;
  background-color: #fafafa;
  border-right: 2px solid #ececec;
  text-align: center;
}

.report-statistic-box .box-header {
  background-color: #f2f2f2;
  font-weight: 400;
  font-size: 15px;
  height: 60px;
  padding-top: 20px;
}

.report-statistic-box .box-header span {
  display: inline-block;
  width: 25px;
  height: 25px;
  vertical-align: middle;
}

.report-statistic-box .box-header .icon-sent {
  background: url(../images/icon_sent.svg);
}

.report-statistic-box .box-header .icon-delivery {
  background: url(../images/icon_delivery.svg);
}

.report-statistic-box .box-header .icon-openrate {
  background: url(../images/icon_openrate.svg);
}

.report-statistic-box .box-header .icon-ctor {
  background: url(../images/icon_ctor.svg);
}

.report-statistic-box .box-content {
  position: relative;
  margin: 20px auto 15px;
  width: 130px;
  height: 130px;
}

.report-statistic-box .box-content .sentTotal {
  font-size: 46px;
  font-weight: 400;
  color: #80cdbe;
  padding-top: 32px;
}

.report-statistic-box .box-content .percentage {
  position: absolute;
  font-size: 28px;
  top: 34%;
  left: 31%;
}

.report-statistic-box .box-content .conversionValue {
  font-size: 28px;
  font-weight: 300;
  color: #f5ab34;
  padding-top: 46px;
}

.conversionValue .conversionCurrency {
  font-size: 18px;
  font-weight: 400;
  color: #f5ab34;
  padding-top: 46px;
}

.report-statistic-box .delivery-rate {
  color: #f5ab34;
}

.report-statistic-box .open-rate {
  color: #30afe4;
}

.report-statistic-box .click-to-open {
  color: #80cdbe;
}

.report-statistic-box .box-foot {
  position: relative;
  font-size: 13px;
  font-weight: 400;
  padding: 0 20px;
}

.report-statistic-box .box-foot .box-foot-stats {
  font-size: 15px;
}

.report-statistic-box .box-foot .box-foot-left {
  float: left;
  text-align: left;
}

.report-statistic-box .box-foot .box-foot-right {
  float: right;
  text-align: right;
}

.report-statistic-box .box-foot .arrow {
  display: none;
  position: absolute;
  width: 15px;
  height: 15px;
}

@media (max-width: 1024px) {
  .report-statistic-box {
    width: 50%;
  }
}
</style>

<script type="text/javascript">
	
	(function umd(root, name, factory) {
  'use strict';
  if ('function' === typeof define && define.amd) {
    // AMD. Register as an anonymous module.
    define(name, ['jquery'], factory);
  } else {
    // Browser globals
    root[name] = factory();
  }
}(this, 'ReportOverviewModule', function UMDFactory() {
  'use strict';

  var ReportOverview = ReportOverviewConstructor;

  reportCircleGraph();

  return ReportOverview;

  function ReportOverviewConstructor(options) {

    var factory = {
        init: init
      },

      _elements = {
        $element: options.element
      };

    init();

    return factory;

    function init() {

      _elements.$element.append($(getTemplateString()));

      $('.delivery-rate').percentCircle({
        width: 130,
        trackColor: '#ececec',
        barColor: '#f5ab34',
        barWeight: 5,
        endPercent: 0.9,
        fps: 60
      });

      $('.open-rate').percentCircle({
        width: 130,
        trackColor: '#ececec',
        barColor: '#30afe4',
        barWeight: 5,
        endPercent: 0.75,
        fps: 60
      });

      $('.click-to-open').percentCircle({
        width: 130,
        trackColor: '#ececec',
        barColor: '#80cdbe',
        barWeight: 5,
        endPercent: 0.5,
        fps: 60
      });
    }

    function getTemplateString() {
      return [
        '<div>',
        '<h2>Monthly Report Overview</h2>',
        '<div class="row">',
        '<div class="col-md-12">',
        '<div class="report-statistic-box">',
        '<div class="box-header">Incomes</div>',
        '<div class="box-content">',
        '<div class="sentTotal">{{sentTotal}}</div>'.replace(/{{sentTotal}}/, options.data.sentTotal),
        '</div>',
        '<div class="box-foot">',
        '<div class="sendTime box-foot-left">Send time<br><span class="box-foot-stats"><strong>{{date}}</strong></span></div>'.replace(/{{date}}/, options.data.date),
        '</div>',
        '</div>',

         '<div class="report-statistic-box">',
        '<div class="box-header">Expenses</div>',
        '<div class="box-content">',
        '<div class="sentTotal">{{sentTotal}}</div>'.replace(/{{sentTotal}}/, options.data.sentTotal),
        '</div>',
        '<div class="box-foot">',
        '<div class="sendTime box-foot-left">Send time<br><span class="box-foot-stats"><strong>{{date}}</strong></span></div>'.replace(/{{date}}/, options.data.date),
        '</div>',
        '</div>',

         '<div class="report-statistic-box">',
        '<div class="box-header">Saved</div>',
        '<div class="box-content">',
        '<div class="sentTotal">{{sentTotal}}</div>'.replace(/{{sentTotal}}/, options.data.sentTotal),
        '</div>',
        '<div class="box-foot">',
        '<div class="sendTime box-foot-left">Send time<br><span class="box-foot-stats"><strong>{{date}}</strong></span></div>'.replace(/{{date}}/, options.data.date),
        '</div>',
        '</div>',
      ].join('');
    }
  }

  function reportCircleGraph() {

    $.fn.percentCircle = function pie(options) {

      var settings = $.extend({
        width: 130,
        trackColor: '#fff',
        barColor: '#fff',
        barWeight: 5,
        startPercent: 0,
        endPercent: 1,
        fps: 60
      }, options);

      this.css({
        width: settings.width,
        height: settings.width
      });

      var _this = this,
        canvasWidth = settings.width,
        canvasHeight = canvasWidth,
        id = $('canvas').length,
        canvasElement = $('<canvas id="' + id + '" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
        canvas = canvasElement.get(0).getContext('2d'),
        centerX = canvasWidth / 2,
        centerY = canvasHeight / 2,
        radius = settings.width / 2 - settings.barWeight / 2,
        counterClockwise = false,
        fps = 1000 / settings.fps,
        update = 0.01;

      this.angle = settings.startPercent;

      this.drawInnerArc = function(startAngle, percentFilled, color) {
        var drawingArc = true;
        canvas.beginPath();
        canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
        canvas.strokeStyle = color;
        canvas.lineWidth = settings.barWeight - 2;
        canvas.stroke();
        drawingArc = false;
      };

      this.drawOuterArc = function(startAngle, percentFilled, color) {
        var drawingArc = true;
        canvas.beginPath();
        canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
        canvas.strokeStyle = color;
        canvas.lineWidth = settings.barWeight;
        canvas.lineCap = 'round';
        canvas.stroke();
        drawingArc = false;
      };

      this.fillChart = function(stop) {
        var loop = setInterval(function() {
          canvas.clearRect(0, 0, canvasWidth, canvasHeight);

          _this.drawInnerArc(0, 360, settings.trackColor);
          _this.drawOuterArc(settings.startPercent, _this.angle, settings.barColor);

          _this.angle += update;

          if (_this.angle > stop) {
            clearInterval(loop);
          }
        }, fps);
      };

      this.fillChart(settings.endPercent);
      this.append(canvasElement);
      return this;

    };

  }

  function getMockData() {
    return {

      date: '2014-12-01',
      sentTotal: 4120,
      delivered: 3708,
      opened: 3090,
      clicked: 2060,
      conversion: 35000,
      conversionEmails: 100

    };
  }

}));

(function activateReportOverviewModule($) {
  'use strict';

  var $el = $('.report-overview-module');

  return new ReportOverviewModule({
    element: $el,
    data: {
      date: 'May 2018',
      sentTotal: 4120,
      delivered: 3708,
      opened: 3090,
      clicked: 2060
    }
  });
}(jQuery));
</script>


                      
						
