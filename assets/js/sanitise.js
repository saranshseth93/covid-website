jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1TWR-pn9606h-xJ2sTr9wpkn84STsJh7xUWskONlIoNs/values/Home%20Sanitisation!A2%3AI1000?key=AIzaSyBveiHShw1LaPLCWYiuSPW_fzIb7Gtan68",
      function (response) {
        console.log(response);
        let html = "";
        if (
          response != undefined &&
          response.values != undefined &&
          response.values.length != 0
        ) {
          $.each(response.values, function (i, v) {
            html += `<tr><th>${v[0]}</th><td>${v[1]}</td><td>${v[2]}</td><td>${v[3]}</td><td>${v[4]}</td><td>${v[5]}</td></tr>`;
          });

          $("#sanitise-table").html(html);
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
