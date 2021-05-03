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
          data.values.push(
            [
              data.values.length + 1,
              "Ahmedabad",
              "",
              "Rahul Shah",
              "7600424207",
              "",
              "Available",
              "Can come for home collection",
              "",
              "03/05/2021 18:00:00",
              "Yes",
              "Yes",
              "",
              ""
            ],
            [
              data.values.length + 2,
              "Ahmedabad",
              "",
              "Prijesh",
              "6352893973",
              "",
              "Available",
              "Can come for home collection",
              "",
              "03/05/2021 18:00:00",
              "Yes",
              "Yes",
              "",
              ""
            ],
            [
              data.values.length + 3,
              "Ahmedabad",
              "",
              "Kunjal",
              "8160853367",
              "",
              "Available",
              "Can come for home collection",
              "",
              "03/05/2021 18:00:00",
              "Yes",
              "Yes",
              "",
              ""
            ],
            [
              data.values.length + 4,
              "Ahmedabad",
              "",
              "VIP Lab",
              "07948488412",
              "",
              "Available",
              "Can come for home collection",
              "",
              "03/05/2021 18:00:00",
              "Yes",
              "Yes",
              "",
              ""
            ]
          );

          let html = "";
          $.each(data.values, function (i, v) {
            let date = moment(v[9], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><th>${v[0]}</th><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${v[5]}</td><td>${
              v[10] != undefined ? v[10] : ""
            }</td><td>${v[11] != undefined ? v[11] : ""}</td><td>${
              v[12] != undefined ? v[12] : ""
            }</td><td>${v[13] != undefined ? v[13] : ""}</td><td>${
              v[6]
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

          $("#rtpcr-table").html(html);
        }
      }
    ).then(function () {
      $(".table").DataTable({
        paging: false,
        info: false,
        fixedHeader: true,
        aaSorting: [
          [10, "asc"],
          [12, "desc"]
        ]
      });

      $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");
    });
  })()
);
