jQuery(
  (function () {
    "use strict";

    let html = "";
    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Doctor%20on%20Call!A3%3AH?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          $.each(data.values, function (i, v) {
            let date = moment(v[7], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><th>${v[0]}</th><td>${v[1]}</td><td>${v[2]}</td><td>${v[3]}</td><td>${v[4]}</td><td>${v[5]}</td><td>${formattedDate}</td></tr>`;
          });
        }
      }
    ).then(function () {
      $.getJSON(
        "https://content-sheets.googleapis.com/v4/spreadsheets/1TWR-pn9606h-xJ2sTr9wpkn84STsJh7xUWskONlIoNs/values/Doctor!A2%3AH43?key=AIzaSyBveiHShw1LaPLCWYiuSPW_fzIb7Gtan68",
        function (response) {
          if (
            response != undefined &&
            response.values != undefined &&
            response.values.length != 0
          ) {
            let html2 = "";
            $.each(response.values, function (i, v) {
              let date = moment(v[6], "DD/MM/YYYY HH:mm:ss");
              let now = moment();
              let formattedDate = now.from(date, "days") + " ago";

              html2 += `<tr><th>${v[0]}</th><td>${v[1]}</td><td>${
                v[2]
              }</td><td>${v[3]}</td><td>${v[4]}</td><td>${v[5]}</td><td>${
                formattedDate != "Invalid date ago" ? formattedDate : v[6]
              }</td></tr>`;
            });

            $("#doctor-table").html(html + html2);
          }
        }
      ).then(function () {
        $(".table").DataTable({
          paging: false,
          info: false,
          aaSorting: [[6, "desc"]],
          fixedHeader: true
        });

        $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");
      });
    });
  })()
);
