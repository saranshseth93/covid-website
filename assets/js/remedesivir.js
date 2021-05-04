jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1TWR-pn9606h-xJ2sTr9wpkn84STsJh7xUWskONlIoNs/values/Medicines!A2%3AG1000?key=AIzaSyBveiHShw1LaPLCWYiuSPW_fzIb7Gtan68",
      function (data) {
        console.log(data);
        if (
          data != undefined &&
          data.values != undefined &&
          data.values.length != 0
        ) {
          let html = "";
          $.each(data.values, function (i, v) {
            let date = moment(v[6], "DD/MM/YYYY HH:mm:ss");

            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";

            html += `<tr><td>${v[0]}</td><td>${v[1]}</td><td>${v[2]}</td><td>${
              v[3]
            }</td><td>${v[4]}</td><td>${
              v[5] != undefined ? v[5] : ""
            }</td><td data-order=${
              v[6] != "" ? moment(v[6], "DD/MM/YYYY HH:mm:ss").format("X") : ""
            }>${
              formattedDate == "Invalid date ago"
                ? v[6] == undefined
                  ? ""
                  : v[6]
                : formattedDate
            }</td></tr>`;
          });

          $("#medicine-table").html(html);
        }
      }
    ).then(function () {
      $(".table").DataTable({
        paging: false,
        info: false,
        aaSorting: [[6, "desc"]],
        fixedHeader: true
      });

      $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");
    });
  })()
);
