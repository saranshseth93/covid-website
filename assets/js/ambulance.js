jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Ambulance!A3%3AJ?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          data.values.push(
            [
              data.values.length + 1,
              "Ahmedabad",
              "Sarthi Ambulance",
              "",
              "9825433151",
              "",
              "Available",
              "Only Pre-booking",
              "",
              "26/04/2021 11:00:00"
            ],
            [
              data.values.length + 2,
              "Ahmedabad",
              "Smile on wheels",
              "Jagdishbhai",
              "9714467520\n9825035920",
              "",
              "Available",
              "",
              "",
              "25/04/2021 11:00:00"
            ]
          );

          let html = "";
          $.each(data.values, function (i, v) {
            let date = moment(v[9], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><td>${v[0]}</td><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${
              v[6] != undefined ? v[6] : ""
            }</td><td>${v[7] != undefined ? v[7] : ""}</td><td data-order=${
              v[9] != "" ? moment(v[9], "DD/MM/YYYY HH:mm:ss").format("X") : ""
            }>${
              formattedDate == "Invalid date ago"
                ? v[9] == undefined
                  ? ""
                  : v[9]
                : formattedDate
            }</td></tr>`;
          });

          $("#ambulance-table").html(html);
        }
      }
    ).then(function () {
      $(".table").DataTable({
        paging: false,
        info: false,
        aaSorting: [[7, "desc"]],
        fixedHeader: true
      });
    });
  })()
);
