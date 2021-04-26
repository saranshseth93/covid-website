jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Plasma%20Support!A3%3AH?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);
        data.values.push(
          [
            data.values.length + 1,
            "Ahmedabad",
            "Individual",
            "Shiv",
            "8140001795",
            "Can organize plasma",
            "",
            "24/04/2021 18:36:39"
          ],
          [
            data.values.length + 2,
            "Ahmedabad",
            "Individual",
            "Hitesh",
            "9879123774",
            "Can organize plasma",
            "",
            "24/04/2021 18:36:39"
          ],
          [
            data.values.length + 3,
            "Ahmedabad",
            "Individual",
            "Janak",
            "9925733531",
            "Can organize plasma",
            "",
            "24/04/2021 18:36:39"
          ],
          [
            data.values.length + 4,
            "Ahmedabad",
            "Individual",
            "Sudhir",
            "9825622181",
            "Can organize plasma",
            "",
            "24/04/2021 18:36:39"
          ],
          [
            data.values.length + 5,
            "Ahmedabad",
            "Individual",
            "Bhavik Rajpurohit",
            "8153830226",
            "Can organize plasma",
            "",
            "26/04/2021 08:36:39"
          ],
          [
            data.values.length + 6,
            "Ahmedabad",
            "Individual",
            "Prajesh Bharwad",
            "9724304143",
            "Can organize plasma",
            "",
            "26/04/2021 08:36:39"
          ],
          [
            data.values.length + 7,
            "Ahmedabad",
            "Individual",
            "Pruthvish Pandya",
            "9377406999",
            "Can organize plasma",
            "",
            "26/04/2021 08:36:39"
          ],
          [
            data.values.length + 8,
            "Ahmedabad",
            "White Cross Blood Bank",
            "",
            "8866304644",
            "Available",
            "",
            "26/04/2021 12:45:39"
          ]
        );
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          let html = "";
          $.each(data.values, function (i, v) {
            let date = moment(v[7], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><td>${v[0]}</td><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${v[5]}</td><td data-order=${
              v[7] != "" ? moment(v[7], "DD/MM/YYYY HH:mm:ss").format("X") : ""
            }>${
              formattedDate == "Invalid date ago"
                ? v[7] == undefined
                  ? ""
                  : v[7]
                : formattedDate
            }</td></tr>`;
          });

          $("#plasma-table").html(html);
        }
      }
    ).then(function () {
      $(".table").DataTable({
        paging: false,
        info: false,
        fixedHeader: true,
        aaSorting: [[6, "desc"]]
      });
    });
  })()
);
