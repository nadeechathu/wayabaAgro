
<style>
#timer {
  display: flex;
  flex-direction: column;
  justify-content: center;  
  width: 100%;
  margin-top:20px;
}
.number-list {
  display: flex;
  align-items: center;
  width: 100%;
}
.number-list .item {
  width: 60px;
  height: 60px;
  background: #e32121 ;
  margin-right: 15px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  color: white;
  font-weight: 700;
  font-family: sans-serif;
}
.unit-list {
  display: flex;
  
  margin-top: 10px;
  /* margin-left:-244px; */
}
.unit-list .item {
  width: 60px;
  margin-right: 15px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  color: #e32121;
  font-weight: 500;
  font-family: sans-serif;
  text-align:center;
}

.timer-end {
  display: flex;  
  font-size: 18px;
  color: #e32121;
  font-weight: bold;
  font-family: sans-serif;
}

</style>
 
<div id="timer">
    <h6 class="timer-end">DEAL ENDS IN</h6>
  <div class="number-list">
    <div class="item" data-days="">00</div>
    <div class="item" data-hours="">00</div>
    <div class="item" data-minutes="">00</div>
    <div class="item" data-seconds="">00</div>
  </div>
  <div class="unit-list">
    <div class="item">DAYS</div>
    <div class="item">HOURS</div>
    <div class="item">MINUTES</div>
    <div class="item">SECONDS</div>
  </div>
</div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$(document).ready(function() {/*!
 * aksCountDown v1.0.0
 * (c) 2021 Ahmet Aksungur
 * MIT License
 * https://github.com/Ahmetaksungur
 */

(function ($) {
  "use strict";
  $.fn.aksCountDown = function (options) {
    const aks = $(this);
    var settings = $.extend(
      {
        endTime: "",
        refresh: 1000,
        onEnd: function () {}
      },
      options
    );
    return this.each(function (i) {
      function endTimeCheck(d1, d2) {
          var date1 = Date.parse(d1) / 1000;
          var date2 = Date.parse(d2) / 1000;

          console.log("date 1 ==> ",date1);
          console.log("date 2 ==> ",date2);
          console.log("equality ==> ",date1 === date2);
        return (
            date1 > date2
        );
      }
      function countTimer(now) {
       
        var endTime = new Date(settings.endTime);
        endTime = Date.parse(endTime) / 1000;

        var now = now;
        now = Date.parse(now) / 1000;

        

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - days * 86400) / 3600);
        var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
        var seconds = Math.floor(
          timeLeft - days * 86400 - hours * 3600 - minutes * 60
        );

        if(days < 0 || hours < 0 || minutes < 0 || seconds < 0){
          settings.onEnd.call(aks);
          deactivateExpiredFlashDeals();
        }

        if (hours < "10") {
          hours = "0" + hours;
        }
        if (minutes < "10") {
          minutes = "0" + minutes;
        }
        if (seconds < "10") {
          seconds = "0" + seconds;
        }

        

        $(aks).find("[data-days]").html(days);
        $(aks).find("[data-hours]").html(hours);
        $(aks).find("[data-minutes]").html(minutes);
        $(aks).find("[data-seconds]").html(seconds);
      }
      var now = new Date();
      var endTime = new Date(settings.endTime);
      
      console.log("end ==> ",endTime);
      console.log("now ==> ",now);
      if (endTimeCheck(now, endTime)) {
        
        settings.onEnd.call(aks);
      } else {
        setInterval(function () {
            console.log("n ==> ",now);
            console.log("e ==> ",endTime);
            now = new Date();
            countTimer(now);
          
        }, settings.refresh);
      }
    });
  };
})(jQuery);
console.log("{{$product->promotion->ends_at}}");
$("#timer").aksCountDown({
  endTime: "{{$product->promotion->ends_at}} GMT+0530",
  onEnd: function () {
    $(this).html('<div class="timer-end">DEAL CLOSED</div>');
  }
});

});

function deactivateExpiredFlashDeals(){

  $.ajax({
                type: "get",
                url: "{{ route('web.promotions.expired.deactivate') }}",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
                
                success: function(res) {

                  location.reload(); 
                },
                error: function(data) {
                    // console.log('Error:', data);
                    toastr.error(data);
                }
            });
}
</script>
    