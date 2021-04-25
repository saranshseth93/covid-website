jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Covid%20Care%20Center!A3%3AJ?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          let html = "";
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

          $("#covid-table").html(html);
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
    });
  })()
);
