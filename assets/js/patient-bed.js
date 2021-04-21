jQuery(
  (function () {
    "use strict";

    $.getJSON(
      "https://covidamd.com/data/covidamd.com/bed_data.json?_=aa6328a_20210420124307",
      function (data) {
        console.log(data);
        let html = "";
        // JSON result in `data` variable
        if (data !== null || data !== undefined) {
          $.each(data, function (index, value) {
            html += `<div class="col card-component ${
              index < 4 ? "shown" : ""
            } all-results">
            <div class="card mt-3">
              <div class="card-body">
                <h5 class="card-title">${value.hospital_name}</h5>
                <small class="card-text">${value.hospital_address}</small>
  
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
                    } text-light">${
              value.available_beds_without_oxygen
            }</span>/${value.total_beds_without_oxygen}</td>
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
                <small class="text-muted">${value.area}</small>
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
  })()
);

function filterCards(btn) {
  $(".btn-outline-primary").removeClass("active");
  $(btn).addClass("active");
  console.log(btn);
}

function loadMore() {
  var increment = 4;
  var startFilter = 0;
  var endFilter = increment;
  var $this = $(".cards");
  var elementLength = $(".card-component").length;
  $(".listLength").text(elementLength);
  console.log(elementLength);

  if (elementLength > 2) {
    $(".showMore").show();
  }
  $(".cards .card-component").slice(startFilter, endFilter).addClass("shown");
  $(".shownLength").text(endFilter);
  $(".cards .card-component").not(".shown").hide();
  $(".showMore").on("click", function () {
    if (elementLength > endFilter) {
      startFilter += increment;
      endFilter += increment;
      $(".cards .card-component")
        .slice(startFilter, endFilter)
        .not(".shown")
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
