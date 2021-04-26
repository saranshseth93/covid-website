jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/COVID19%20Reports!A3%3AN?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          let html = "";
          $.each(data.values, function (i, v) {
            let date = moment(v[12], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><th>${v[0]}</th><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${v[5]}</td><td>${
              v[6] != undefined ? v[6] : ""
            }</td>
            <td>${v[7] != undefined ? v[7] : ""}</td>
            <td>${v[8] != undefined ? v[8] : ""}</td>
            <td>${v[9] != undefined ? v[9] : ""}</td><td>${
              v[10] != undefined ? v[10] : ""
            }</td><td data-order=${
              v[12] != ""
                ? moment(v[12], "DD/MM/YYYY HH:mm:ss").format("X")
                : ""
            }>${
              formattedDate == "Invalid date ago"
                ? v[9] == undefined
                  ? ""
                  : v[9]
                : formattedDate
            }</td></tr>`;
          });

          $("#rtpcr-table").html(html);
        }
      }
    ).then(function () {
      $(".table").DataTable({
        paging: false,
        info: false,
        fixedHeader: true,
        aaSorting: [
          [6, "asc"],
          [8, "desc"]
        ]
      });
    });
  })()
);
