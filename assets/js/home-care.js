jQuery(
  (function () {
    "use strict";

    //Live Hospital Data
    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1TWR-pn9606h-xJ2sTr9wpkn84STsJh7xUWskONlIoNs/values/Home%20Care!A2%3AE1000?key=AIzaSyBveiHShw1LaPLCWYiuSPW_fzIb7Gtan68",
      function (response) {
        console.log(response);
        if (
          response != undefined &&
          response.values != undefined &&
          response.values.length != 0
        ) {
          let html = "";
          $.each(response.values, function (i, v) {
            html += `<tr><td>${v[0]}</td><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4] != undefined ? v[4] : ""}</td></tr>`;
          });

          $("#home-table").html(html);
        }
      }
    ).then(function () {
      $(".table").DataTable({
        paging: false,
        info: false,
        fixedHeader: true
      });

      $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");
    });
  })()
);
