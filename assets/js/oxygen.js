jQuery(
  (function () {
    "use strict";
    let html = "";
    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Oxygen%20Sources!A3%3AK?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);

        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          $.each(data.values, function (i, v) {
            if (v[2] == "Gujarat Fire System") {
              v[10] = "30/04/2021 18:30:00";
              v[8] =
                "New stock will arrive 29/04 after 12:00PM <b>Whatsapp only. No Calls Please.</b>";
              v[7] = "Available";
            }
            let date = moment(v[10], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><td>${v[0]}</td><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${v[5]}</td><td>${v[6]}</td><td>${
              v[7]
            }</td><td>${v[8]}</td><td data-order=${
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
        }
      }
    ).then(function () {
      $.getJSON(
        "https://content-sheets.googleapis.com/v4/spreadsheets/1TWR-pn9606h-xJ2sTr9wpkn84STsJh7xUWskONlIoNs/values/Oxygen!A2%3AJ1000?key=AIzaSyBveiHShw1LaPLCWYiuSPW_fzIb7Gtan68",
        function (response) {
          console.log(response);

          if (
            response != undefined &&
            response.values != undefined &&
            response.values.length != 0
          ) {
            let html2 = "";
            $.each(response.values, function (i, v) {
              let date = moment(v[9], "DD/MM/YYYY HH:mm:ss");
              let now = moment();
              let formattedDate = now.from(date, "days") + " ago";

              html2 += `<tr><td>${v[0]}</td><td>${v[1]}</td><td>${
                v[2]
              }</td><td>${v[3]}</td><td>${v[4]}</td><td>${v[5]}</td><td>${
                v[6]
              }</td><td>${v[7]}</td><td>${v[8]}</td><td data-order=${
                v[9] != ""
                  ? moment(v[9], "DD/MM/YYYY HH:mm:ss").format("X")
                  : ""
              }>${
                formattedDate == "Invalid date ago"
                  ? v[9] == undefined
                    ? ""
                    : v[9]
                  : formattedDate
              }</td></tr>`;
            });

            $("#oxygen-table").html(html + html2);
          }
        }
      ).then(function () {
        $(".table").DataTable({
          paging: false,
          info: false,
          fixedHeader: true,
          aaSorting: [
            [7, "asc"],
            [9, "desc"]
          ]
        });

        $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");

        $("#oxygen").modal("show");
      });
    });
  })()
);
