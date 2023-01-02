jQuery(document).ready(function($){

  "use strict";

  const dataValue = $('.saaspricing-countdown').data('my-expire-date-1');
  console.log(dataValue);
  let countDownDate = new Date("2023/01/4 23:04").getTime();

  // Update the count down every 1 second
  let x = setInterval(function () {

    // Get today's date and time
    let now = new Date().getTime();

    // Find the distance between now and the count down date
    let distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"

    let countdowns = document.querySelectorAll(".saaspricing-countdown");
  

    countdowns.forEach((countdown) => {

      countdown.innerHTML = days + "d: " + hours + "h: "
        + minutes + "m: " + seconds + "s ";

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        countdown.innerHTML = " ";
        countdown.style.display = "none";
      }
    });
  }, 1000);



  // table sticky header function

  window.onscroll = function () { myFunction() };

  let header = document.getElementById("tableHeader");
  let sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("saaspricing-sticky");
    } else {
      header.classList.remove("saaspricing-sticky");
    }
  }

  // tooltip trigger function 

  let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  	
   $('.image-popup-vertical-fit').magnificPopup(
    {
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
	}
  );

  


});
