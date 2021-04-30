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
            ],
            [
              data.values.length + 3,
              "Ahmedabad",
              "GEMS",
              "",
              "07947072562\n9825027765",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 4,
              "Ahmedabad",
              "Shree Sai",
              "",
              "07947410355\n9909908043\n982426437",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 5,
              "Ahmedabad",
              "Rudransh",
              "",
              "07947074139\n9033101108",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 6,
              "Ahmedabad",
              "Jalaram",
              "",
              "07947073819",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 7,
              "Ahmedabad",
              "Vedmata",
              "",
              "07947069571",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 8,
              "Ahmedabad",
              "Dalk",
              "",
              "9099004779",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 9,
              "Ahmedabad",
              "Zalak",
              "",
              "07990512051\n8980827014\n9904787990\n9726566108",
              "ICU on Wheels",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 10,
              "Ahmedabad",
              "Neel and Nidhi",
              "",
              "9879598796",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 11,
              "Ahmedabad",
              "Disha",
              "",
              "09824337080",
              "ICU on Wheels",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 12,
              "Ahmedabad",
              "Care Plus",
              "",
              "8306108108\n9909288050",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 13,
              "Ahmedabad",
              "Krishna Health Care Services",
              "",
              "7231073310\n7357878999\n8094876313",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 14,
              "Ahmedabad",
              "Pulse Line",
              "",
              "07947069811\n8238031317\n8238031318",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
            ],
            [
              data.values.length + 15,
              "Ahmedabad",
              "Baba Ramdev Pir",
              "",
              "9898950209",
              "",
              "Available",
              "",
              "",
              "30/04/2021 18:00:00"
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

      $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");
    });
  })()
);
