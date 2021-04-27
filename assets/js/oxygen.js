jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1ZyrYsowjk6PdC9N5yKBxMslI7FypoeIqDvlAYrqprL8/values/Oxygen%20Sources!A3%3AK?key=AIzaSyCAp-t_WKWx0sfpOM5_-5yeC9g-ZcrkWcI",
      function (data) {
        console.log(data);
        data.values.push(
          [
            data.values.length + 1,
            "Ahmedabad",
            "Individual",
            "Riddhi Shah",
            "9428420097",
            "",
            "",
            "Available",
            "Oxygen Source",
            "",
            "24/04/2021 18:36:39"
          ],
          [
            data.values.length + 2,
            "Ahmedabad",
            "Individual",
            "Abhishek",
            "9737024902",
            "",
            "",
            "Available",
            "Portable Oxygen Source",
            "",
            "24/04/2021 18:36:39"
          ],
          [
            data.values.length + 3,
            "Ahmedabad",
            "Individual",
            "Nishalee",
            "8758196619",
            "",
            "",
            "Available",
            "Portable Oxygen Source",
            "",
            "24/04/2021 18:36:39"
          ],
          [
            data.values.length + 4,
            "Ahmedabad",
            "Individual",
            "Everest",
            "9925023784",
            "",
            "",
            "Available",
            "Oxygen Refill",
            "",
            "24/04/2021 18:54:39"
          ],
          [
            data.values.length + 5,
            "Ahmedabad",
            "Individual",
            "Dhrumil",
            "9327384064",
            "",
            "",
            "Available",
            "Ventilators and Bipap Machine",
            "",
            "24/04/2021 18:54:55"
          ],
          [
            data.values.length + 6,
            "Ahmedabad",
            "Shilpa Gas Agency",
            "",
            "9924298807\n8238892149\nshilpagasagency95@gmail.com",
            "Rent or Sale",
            "",
            "Available",
            "Medical Oxygen gases & Equipments",
            "Pre-booking required",
            "26/04/2021 08:25:55"
          ],
          [
            data.values.length + 7,
            "Ahmedabad",
            "Humer Menon",
            "",
            "9974965117",
            "Sale",
            "",
            "Available",
            "Oxygen Cylinder",
            "Price: 6Ltr - 15k + GST",
            "26/04/2021 12:25:55"
          ],
          [
            data.values.length + 7,
            "Ahmedabad",
            "Sejal Shah",
            "",
            "9375784857",
            "Sale",
            "",
            "Available",
            "Oxygen Cylinder",
            "9L - Need to collect from Paldi - Accepting PAYTM",
            "26/04/2021 12:40:55"
          ],
          [
            data.values.length + 8,
            "Ahmedabad",
            "Abdul Bhai",
            "",
            "7990821601",
            "Sale",
            "",
            "Available",
            "Oxygen Cylinder",
            "6L - 16k + GST - No pre-booking required",
            "26/04/2021 13:50:55"
          ],
          [
            data.values.length + 9,
            "Ahmedabad",
            "JAN SEWA",
            "",
            "9814145420\n8447390017",
            "Sale",
            "",
            "Available",
            "Portable Oxygen Cylinder",
            "12ltr - 400rs Only",
            "26/04/2021 15:00:55"
          ],
          [
            data.values.length + 10,
            "Ahmedabad",
            "Oxyboost Brand",
            "Chirayu Maniar\nSharan Kothari",
            "9104592998\n9429007080",
            "Sale",
            "",
            "Available",
            "Portable Oxygen Cylinder",
            "9ltr - 500rs Only",
            "27/04/2021 13:10:55"
          ]
        );
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          let html = "";
          $.each(data.values, function (i, v) {
            if (v[2] == "Gujarat Fire System") {
              v[10] = "26/04/2021 08:25AM";
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

          $("#oxygen-table").html(html);
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
    });
  })()
);
