jQuery(
  (function () {
    "use strict";

    //Live Hospital Data
    $.getJSON(
      "https://content-sheets.googleapis.com/v4/spreadsheets/1TWR-pn9606h-xJ2sTr9wpkn84STsJh7xUWskONlIoNs/values/Patient%20Bed%20Data!A2%3AH43?key=AIzaSyBveiHShw1LaPLCWYiuSPW_fzIb7Gtan68",
      function (response) {
        console.log(response);
        if (response != undefined && response.values != undefined) {
          let html = "";

          $.each(response.values, function (i, v) {
            let date = moment(v[7], "DD/MM/YYYY HH:mm:ss");
            let now = moment();
            let formattedDate = now.from(date, "days") + " ago";
            let difference = moment(now).diff(date, "days");

            if (difference < 2) {
              html += `<div class="col card-component">
            <div class="card mt-3">
              <div class="card-body">
                <h5 class="card-title capitalize">${v[0]}${
                v[1] != undefined && v[1] != "" ? ", " + v[1] : ""
              }</h5>
                <small class="card-text capitalize"><b>Phone: </b>${
                  v[2] != undefined && v[2] != "" ? v[2] : "Not Provided"
                }</small><br /><br />
                ${
                  v[3] != undefined && v[3] != ""
                    ? '<button type="button" class="btn btn-outline-success">' +
                      v[3] +
                      " - General</button>"
                    : ""
                }
                ${
                  v[4] != undefined && v[4] != ""
                    ? '<button type="button" class="btn btn-outline-success">' +
                      v[4] +
                      " - Oxygen</button>"
                    : ""
                }
                ${
                  v[5] != undefined && v[5] != ""
                    ? '<button type="button" class="btn btn-outline-success">' +
                      v[5] +
                      " - ICU</button>"
                    : ""
                }
                ${
                  v[6] != undefined && v[6] != ""
                    ? '<button type="button" class="btn btn-outline-success">' +
                      v[6] +
                      " - ICU with Ventilator</button>"
                    : ""
                }
  
              </div>
              <div class="card-footer">
                <small class="verified-on text-muted float-left">Updated <b>${
                  formattedDate == "Invalid date ago"
                    ? v[7] == undefined
                      ? ""
                      : v[7]
                    : formattedDate
                }</b></small>
              </div>
            </div>
          </div>`;
            }
          });

          $(".other-hospitals").html(html);
        }
      }
    );

    // setupAreas();
    setupCards();

    $("#search-input").focus(function () {
      resetFilters();
    });
  })()
);

function setupAreas() {
  $.getJSON("/json/utils.json", function (data) {
    let options = "";

    if (data != undefined) {
      $.each(data.beds.area_filter_options, function (i, v) {
        options += `<option value="${v}">${v}</option>`;
      });

      $("#area-filter").html(options);
    }
  });
}

function setupCards(filter = "available") {
  $.getJSON(
    "https://covidamd.com/data/covidamd.com/bed_data.json?_=" +
      moment().format("YYYYMMDDHH"),
    function (data) {
      let html = "";
      // JSON result in `data` letiable
      if (data !== null || data !== undefined) {
        $.each(data, function (index, value) {
          let display = filterData(value, filter);
          display = html += `<div class="col card-component ${
            index < 4 && filter == "all" ? "shown" : ""
          } ${display}">
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title capitalize hospital-name">${value.hospital_name.toLowerCase()}</h5>
              <small class="card-text capitalize">${
                value.hospital_address != undefined
                  ? value.hospital_address.toLowerCase()
                  : "Not Provided"
              }</small>

              <table class="table table-sm table-responsive-lg table-bordered text-center mt-2">
                <tr>
                  <th>Without Oxygen</th>
                  <th>With Oxygen</th>
                  <th>ICU without Ventilator</th>
                  <th>ICU with Ventilator</th>
                </tr>
                <tr>
                  <td><span class="badge ${
                    value.available_beds_without_oxygen != 0
                      ? "bg-info"
                      : "bg-danger"
                  } text-light">${value.available_beds_without_oxygen}</span>/${
            value.total_beds_without_oxygen
          }</td>
                  <td><span class="badge ${
                    value.available_beds_with_oxygen != 0
                      ? "bg-info"
                      : "bg-danger"
                  } text-light">${value.available_beds_with_oxygen}</span>/${
            value.total_beds_with_oxygen
          }</td>
                  <td><span class="badge ${
                    value.available_icu_beds_without_ventilator != 0
                      ? "bg-info"
                      : "bg-danger"
                  } text-light">${
            value.available_icu_beds_without_ventilator
          }</span>/${value.total_icu_beds_without_ventilator}</td>
                  <td><span class="badge ${
                    value.available_icu_beds_with_ventilator != 0
                      ? "bg-info"
                      : "bg-danger"
                  } text-light">${
            value.available_icu_beds_with_ventilator
          }</span>/${value.total_icu_beds_with_ventilator}</td>
                </tr>
              </table>
            </div>
            <div class="card-footer">
              <small class="text-muted capitalize hospital-area">${
                value.area != undefined ? value.area.toLowerCase() : "Unknown"
              }</small>
              <small class="text-muted hospital-pincode float-right">Pincode: ${
                value.pincode != undefined ? value.pincode : "Unknown"
              }</small>
            </div>
          </div>
        </div>`;
        });

        $(".cards").html(html);
      }
    }
  ).always(function () {
    loadMore();
  });
}

function filterData(value, filter) {
  return filter == "all"
    ? "all-results"
    : filter == "available" &&
      (value.available_beds_without_oxygen != 0 ||
        value.available_beds_with_oxygen != 0 ||
        value.available_icu_beds_without_ventilator != 0 ||
        value.available_icu_beds_with_ventilator != 0)
    ? "all-results"
    : filter == "oxygen" && value.available_beds_with_oxygen != 0
    ? "all-results"
    : filter == "no-oxygen" && value.available_beds_without_oxygen != 0
    ? "all-results"
    : filter == "icu" && value.available_icu_beds_without_ventilator != 0
    ? "all-results"
    : filter == "icu-ventilator" &&
      value.available_icu_beds_with_ventilator != 0
    ? "all-results"
    : "not-results";
}

function filterCards(btn) {
  $(".btn-outline-primary").removeClass("active");
  $(btn).addClass("active");
  let filter = $(btn).attr("data-click");
  setupCards(filter);
}

function searchHospital() {
  let o_edit = $("#search-input").val();
  str_needle = o_edit.toUpperCase();
  let searchStrings = str_needle.split(/\W/);
  let count = 0;
  let found = false;
  console.log(searchStrings);

  for (let i = 0, len = searchStrings.length; i < len; i++) {
    let notPincode = isNaN(searchStrings[i]);
    let currentSearch = searchStrings[i].toUpperCase();
    if (currentSearch !== "") {
      nameDivs = document.getElementsByClassName("hospital-name");
      areaDivs = document.getElementsByClassName("hospital-area");
      pincodeDivs = document.getElementsByClassName("hospital-pincode");

      if (notPincode) {
        for (let j = 0, divsLen = nameDivs.length; j < divsLen; j++) {
          if (
            nameDivs[j].textContent.toUpperCase().indexOf(currentSearch) !== -1
          ) {
            $(nameDivs[j])
              .parent()
              .parent()
              .parent()
              .removeClass("not-results")
              .removeClass("shown")
              .addClass("all-results");
            count++;
            found = true;
          } else {
            $(nameDivs[j])
              .parent()
              .parent()
              .parent()
              .addClass("not-results")
              .removeClass("shown")
              .removeClass("all-results");
          }
        }
        if (!found) {
          for (let j = 0, divsLen = areaDivs.length; j < divsLen; j++) {
            if (
              areaDivs[j].textContent.toUpperCase().indexOf(currentSearch) !==
              -1
            ) {
              $(areaDivs[j])
                .parent()
                .parent()
                .parent()
                .removeClass("not-results")
                .removeClass("shown")
                .addClass("all-results");
              count++;
            } else {
              $(areaDivs[j])
                .parent()
                .parent()
                .parent()
                .addClass("not-results")
                .removeClass("shown")
                .removeClass("all-results");
            }
          }
        }
      } else {
        for (let j = 0, divsLen = pincodeDivs.length; j < divsLen; j++) {
          let pincode = pincodeDivs[j].textContent;
          pincode = pincode.replace("Pincode: ", "");
          if (pincode == currentSearch) {
            console.log(currentSearch);
            $(pincodeDivs[j])
              .parent()
              .parent()
              .parent()
              .removeClass("not-results")
              .removeClass("shown")
              .addClass("all-results");
            count++;
          } else {
            $(pincodeDivs[j])
              .parent()
              .parent()
              .parent()
              .addClass("not-results")
              .removeClass("shown")
              .removeClass("all-results");
          }
        }
      }
    }

    if (count !== 0) {
      $(".error-image").hide();
      $(".card .card-component").hide();
    } else {
      $(".error-image").show();
    }

    loadMore();
  }
}

function resetFilters() {
  $(".btn-outline-primary")
    .removeClass("active")
    .attr("disabled", true)
    .addClass("no-pointer");
  $('[data-click="available"]').addClass("active");
  setupCards("available");
}

function setFilters() {
  $("#search-input").val("");
  $(".error-image").hide();
  $(".btn-outline-primary")
    .removeClass("active")
    .attr("disabled", false)
    .removeClass("no-pointer");
  $('[data-click="available"]').addClass("active");
  setupCards("available");
}

function resetSearch() {
  setFilters();
  $("#search-input").val("");
  $(".error-image").hide();
  setupCards();
}

function loadMore() {
  let increment = 6;
  let startFilter = 0;
  let endFilter = increment;
  let $this = $(".cards");
  let elementLength = $(".card-component.all-results").length;
  $(".listLength").text(elementLength);
  console.log(elementLength);

  if (elementLength > 2 && elementLength > increment) {
    $(".showMore").show();
  } else {
    $(".showMore").hide();
  }
  console.log(endFilter);
  if (endFilter < elementLength) {
    $(".card-component.all-results")
      .slice(startFilter, endFilter)
      .not(".shown")
      .not(".not-results")
      .addClass("shown")
      .show();
    $(".shownLength").text(
      endFilter < elementLength ? endFilter : elementLength
    );
    $(".cards .card-component.all-results").not(".shown").hide();
    $(".cards .card-component.not-results").hide();
  } else {
    $(".card-component.all-results").addClass("shown");
    $(".shownLength").text(
      endFilter < elementLength ? endFilter : elementLength
    );
    console.log("hello");
    $(".cards .card-component.all-results").not(".not-results").show();
    $(".cards .card-component.not-results").hide();
  }
  $(".shownLength").text(endFilter < elementLength ? endFilter : elementLength);
  $(".cards .card-component.all-results").not(".shown").hide();
  $(".cards .card-component.not-results").hide();
  $(".showMore").on("click", function () {
    if (elementLength > endFilter) {
      startFilter += increment;
      endFilter += increment;
      $(".cards .card-component.all-results")
        .slice(startFilter, endFilter)
        .not(".shown")
        .not(".not-results")
        .addClass("shown")
        .toggle(500);
      $(".shownLength").text(
        endFilter > elementLength ? elementLength : endFilter
      );
      if (elementLength <= endFilter) {
        $(this).remove();
      }
    }
  });
}
