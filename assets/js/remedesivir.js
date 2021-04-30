jQuery(
  (function () {
    "use strict";
    $(".table").DataTable({
      paging: false,
      info: false,
      fixedHeader: true,
      aaSorting: [
        [4, "asc"],
        [6, "desc"]
      ]
    });

    $('input[aria-controls="DataTables_Table_0"]').addClass("form-control");
  })()
);
