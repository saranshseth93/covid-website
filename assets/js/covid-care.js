jQuery(
  (function () {
    "use strict";

    let html = "";
    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Covid%20Care%20Center!A3%3AJ?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          $.each(data.values, function (i, v) {
            let date = moment(v[9], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><th>${v[0]}</th><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${
              v[5] == "9825065275\n9825065605\nwww.devasyahospita.com"
                ? "9825065275\n9825065605\nwww.devasyahospital.com"
                : v[5]
            }</td><td>${v[6]}</td><td>${
              v[7] != undefined ? v[7] : ""
            }</td><td data-order=${
              v[9] != "" ? moment(v[9], "DD/MM/YYYY HH:mm:ss").format("X") : ""
            }>${
              formattedDate == "Invalid date ago"
                ? v[9] == undefined
                  ? ""
                  : v[9]
                : formattedDate
            }</td></tr>`;
          });
        }
      }
    ).then(function () {
      $.getJSON(
        "https://content-sheets.googleapis.com/v4/spreadsheets/1TWR-pn9606h-xJ2sTr9wpkn84STsJh7xUWskONlIoNs/values/Covid%20Care!A2%3AI1000?key=AIzaSyBveiHShw1LaPLCWYiuSPW_fzIb7Gtan68",
        function (response) {
          console.log(response);
          let html2 = "";
          if (
            response != undefined &&
            response.values != undefined &&
            response.values.length != 0
          ) {
            $.each(response.values, function (i, v) {
              let date = moment(v[8], "DD/MM/YYYY HH:mm:ss");
              let now = moment();
              let formattedDate = now.from(date, "days") + " ago";

              html2 += `<tr><th>${v[0]}</th><td>${v[1]}</td><td>${
                v[2]
              }</td><td>${v[3]}</td><td>${v[4]}</td><td>${
                v[5] == "9825065275\n9825065605\nwww.devasyahospita.com"
                  ? "9825065275\n9825065605\nwww.devasyahospital.com"
                  : v[5]
              }</td><td>${v[6]}</td><td>${
                v[7] != undefined ? v[7] : ""
              }</td><td data-order=${
                v[8] != ""
                  ? moment(v[8], "DD/MM/YYYY HH:mm:ss").format("X")
                  : ""
              }>${
                formattedDate == "Invalid date ago"
                  ? v[9] == undefined
                    ? ""
                    : v[9]
                  : formattedDate
              }</td></tr>`;
            });

            $("#covid-table").html(html + html2);
          }
        }
      ).then(function () {
        $(".table").DataTable({
          paging: false,
          info: false,
          aaSorting: [
            [8, "desc"],
            [7, "asc"]
          ],
          fixedHeader: true
        });

        $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");
      });
    });
  })()
);
