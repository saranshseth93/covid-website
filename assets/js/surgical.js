jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Surgical%20Equipments!A3%3AK?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          let html = "";
          $.each(data.values, function (i, v) {
            let date = moment(v[10], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><td>${v[0]}</td><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${
              v[5] != undefined ? v[5] : ""
            }</td><td>${v[6] != undefined ? v[6] : ""}</td><td>${
              v[7] != undefined ? v[7] : ""
            }</td><td>${v[8] != undefined ? v[8] : ""}</td><td data-order=${
              v[10] != ""
                ? moment(v[10], "DD/MM/YYYY HH:mm:ss").format("X")
                : ""
            }>${
              formattedDate == "Invalid date ago"
                ? v[10] == undefined
                  ? ""
                  : v[10]
                : formattedDate
            }</td></tr>`;
          });

          $("#surgical-table").html(html);
        }
      }
    ).then(function () {
      $(".table").DataTable({
        paging: false,
        info: false,
        aaSorting: [
          [7, "asc"],
          [9, "desc"]
        ],
        fixedHeader: true
      });
    });
  })()
);
