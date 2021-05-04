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
            "Nishalee Sheth",
            "8758196619",
            "",
            "",
            "Available",
            "12L Oxygen cans available",
            "",
            "27/04/2021 12:36:39"
          ],
          [
            data.values.length + 4,
            "Ahmedabad",
            "Everest Industrial Gases, Vatva",
            "",
            "9925023784\n07925831585",
            "",
            "",
            "Available",
            "Oxygen Refill",
            "",
            "02/05/2021 18:54:39"
          ],
          [
            data.values.length + 5,
            "Ahmedabad",
            "Individual",
            "Hardik\nDhrumil",
            "9722398705\n9327384064",
            "Rent",
            "",
            "Available",
            "Ventilators and Bipap Machine",
            "Deposit - 6,00,000Rs\nRent - 50,000Rs for 5 days",
            "30/04/2021 12:54:55"
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
            "Available - after 12pm",
            "Oxygen Cylinder",
            "Price: 6Ltr - 15k + GST",
            "30/04/2021 10:00:55"
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
            "6L - 16500 + GST",
            "01/05/2021 11:23:55"
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
            "12ltr - 650rs Only",
            "30/04/2021 10:55:55"
          ],
          [
            data.values.length + 11,
            "Ahmedabad",
            "Individual",
            "Ramesh Patel",
            "9727722431",
            "Sale",
            "",
            "Available",
            "Oxygen Refills",
            "",
            "28/04/2021 10:10:55"
          ],
          [
            data.values.length + 12,
            "Ahmedabad",
            "Individual",
            "Neha Sejpal",
            "9998860773",
            "Sale",
            "",
            "Available",
            "Oxygen Cans",
            "Available after 12pm.\n8L - 600Rs\n12L - 900Rs",
            "28/04/2021 10:10:55"
          ],
          [
            data.values.length + 13,
            "Ahmedabad",
            "Individual",
            "Nilay Shah",
            "9978976766",
            "Sale",
            "",
            "Available",
            "Oxygen Cans",
            "6L 625Rs.",
            "29/04/2021 11:10:55"
          ],
          [
            data.values.length + 14,
            "Ahmedabad",
            "Individual",
            "Pratik Shah\nAmol Chavan\nJeetu\nBhavin Khona\nAjay Majithia",
            "9820322484\n9833401505\n9822049469\n9619381829\n7666301306",
            "Sale",
            "",
            "Available",
            "Oxygen Concentrator",
            "Shipped across Gujarat\nDon't make full advance payment\nIn-case of concern co-ordinate with:<b>9820666557(Whatsapp only)</b>\nConsult your doctor on the power of available machines",
            "28/04/2021 20:10:55"
          ],
          [
            data.values.length + 15,
            "Ahmedabad",
            "Individual",
            "Darsh Gandhi",
            "7383005396",
            "Sale",
            "",
            "Available",
            "Oxygen Cans",
            "12L - 650Rs, Bodakdev",
            "30/04/2021 15:15:55"
          ],
          [
            data.values.length + 16,
            "Ahmedabad",
            "Individual",
            "Maunil Shah",
            "9099872551",
            "Sale",
            "",
            "Available",
            "Oxygen",
            "",
            "30/04/2021 17:30:55"
          ],
          [
            data.values.length + 17,
            "Ahmedabad",
            "Individual",
            "Archit Agarwal",
            "9712680576",
            "Sale",
            "",
            "Available",
            "Oxygen flow meter & Oxygen Cylinders",
            "",
            "01/05/2021 20:30:55"
          ],
          [
            data.values.length + 18,
            "Ahmedabad",
            "Individual",
            "Tehzib Shaikh",
            "8849809889",
            "Sale",
            "",
            "Available",
            "Oxygen Cylinders",
            "",
            "30/04/2021 17:30:55"
          ],
          [
            data.values.length + 19,
            "Ahmedabad",
            "Gujarat Safety Godown No. GF 2",
            "",
            "9909947759",
            "Sale",
            "",
            "Available",
            "Oxygen Cylinders",
            "B/H Kiran Motors, Sarkhej.",
            "30/04/2021 17:30:55"
          ],
          [
            data.values.length + 20,
            "Ahmedabad",
            "Chamunda Gas",
            "",
            "9879409854\n9574844035",
            "Sale",
            "",
            "Available",
            "Oxygen Refills",
            "",
            "30/04/2021 17:30:55"
          ],
          [
            data.values.length + 21,
            "Ahmedabad",
            "Apoorva Patel",
            "",
            "800067825",
            "Sale",
            "",
            "Available",
            "Oxygen Concentrator - After 6th May",
            "",
            "30/04/2021 20:30:55"
          ],
          [
            data.values.length + 22,
            "Ahmedabad",
            "Nidhi Chaudhary",
            "",
            "9924674062",
            "Sale",
            "",
            "Available",
            "Oxygen Concentrator - After 3rd May - Prebooking started",
            "",
            "30/04/2021 20:30:55"
          ],
          [
            data.values.length + 23,
            "Ahmedabad",
            "",
            "",
            "9825465454\n07926588372\n07926580668",
            "Sale",
            "",
            "Available",
            "Oxygen Cans",
            "6L - 625 per can - Address: Chunilal Mayachand Mehta & Co.\n1 Mil Officers Colony, Gr. Floor Behind old Reserve Bank of India Ashram Road.",
            "01/05/2021 11:20:55"
          ],
          [
            data.values.length + 24,
            "Ahmedabad",
            "Individual",
            "Abhishek Shah",
            "6352550359",
            "Sale",
            "",
            "Available",
            "Oxygen Cans",
            "6L - 825 per can",
            "01/05/2021 09:55:55"
          ],
          [
            data.values.length + 25,
            "Ahmedabad",
            "Individual",
            "Vatsal",
            "8128135201",
            "Sale",
            "",
            "Available",
            "Bi-pap machine & Oxygen Concentrator",
            "",
            "01/05/2021 12:55:55"
          ],
          [
            data.values.length + 26,
            "Ahmedabad",
            "Individual",
            "Bhavin Patel",
            "9998517492",
            "Sale",
            "",
            "Available",
            "Oxygen Concentrator",
            "",
            "01/05/2021 12:55:55"
          ],
          [
            data.values.length + 27,
            "Ahmedabad",
            "R.R Patel Gas, Sarkhej",
            "Bhavin Patel",
            "6AM to 2PM - 9099938147\n2PM to 10PM - 9723751150\n10PM to 6AM - 9099082019",
            "Sale",
            "",
            "Available",
            "Oxygen Refill",
            "Confirm and then go",
            "02/05/2021 18:55:55"
          ],
          [
            data.values.length + 28,
            "Ahmedabad",
            "Shiva Enterprise",
            "",
            "<a target='_blank' href='tel:7573953844'>7573953844</a>\n<a target='_blank' href='mailto:enterpiseshivaa@gmail.com'>enterpiseshivaa@gmail.com</a>",
            "Sale",
            "",
            "Available",
            "Oxygen Supplier",
            "Confirm and then go",
            "02/05/2021 12:55:55"
          ],
          [
            data.values.length + 29,
            "Ahmedabad",
            "",
            "Dr. Bhupesh D Shah",
            "<a target='_blank' href='https://wa.me/+919825073465'>9825073465</a>",
            "Sale",
            "",
            "Available",
            "Oxygen Concentrator",
            "Free of Cost for Needy People. Whatsapp only",
            "03/05/2021 22:55:55"
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

      $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");

      $("#oxygen").modal("show");
    });
  })()
);
