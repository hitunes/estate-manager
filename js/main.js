var app = {};

app = {
  countDown: function() {
    let year = '', month ='', day = '';
    // get the date set the  end date
    var getEndDate  =  function() {
      var dateArr = [];
      var date = document.getElementById('rentEnd');
      date.addEventListener('change', function(e) {
        dateArr = e.target.value.split('-');
      });
      return dateArr;


    }
    getEndDate();
    year = getEndDate[0];
    month = getEndDate[1];
    day = getEndDate[2];

    // var countDownDate = new Date(`${month} ${day}, ${year} 00: 00: 00`).getTime();
    var countDownDate = new Date(`May 4, 2018 00: 00: 00`).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();
        
        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("data-id").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("data-id").innerHTML = "EXPIRED";
            var button =  document.getElementById("rentEndBtn");
            console.log({button});
            button.disabled = true;
        }
    }, 1000);
    console.log(x)
  }
};


















const ubtn = document.querySelectorAll('.ubtn');

ubtn.forEach( event => console.log(event.getAttribute('data-id')));



























