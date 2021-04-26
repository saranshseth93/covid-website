$(document).ready(function () {
  function alert(message) {
    console.log(message);
  }

  setTimeout(() => {
    loadNearbyVaccineCentresMapmyIndiaDiv(
      document.getElementById("nearby-vaccine-centres-mapmyindia"),
      {
        css: "https://prod-cdn.preprod.co-vin.in/assets/css/map-custom.css",
        registerUrl: "https://selfregistration.cowin.gov.in/"
      }
    );
  }, 5000);
});
