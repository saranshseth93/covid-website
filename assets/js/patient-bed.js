jQuery(
  (function () {
    "use strict";

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

function setupCards(filter = "all") {
  $.getJSON(
    "https://covidamd.com/data/covidamd.com/bed_data.json?_=" +
      moment().format("YYYYMMDDHH"),
    function (data) {
      let html = "";
      // JSON result in `data` letiable
      if (data !== null || data !== undefined) {
        console.log(data);
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

              <table class="table table-sm table-responsive-md table-bordered text-center mt-2">
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

        for (let j = 0, divsLen = areaDivs.length; j < divsLen; j++) {
          if (
            areaDivs[j].textContent.toUpperCase().indexOf(currentSearch) !== -1
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
  $('[data-click="all"]').addClass("active");
  setupCards("all");
}

function setFilters() {
  $("#search-input").val("");
  $(".error-image").hide();
  $(".btn-outline-primary")
    .removeClass("active")
    .attr("disabled", false)
    .removeClass("no-pointer");
  $('[data-click="all"]').addClass("active");
  setupCards("all");
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
