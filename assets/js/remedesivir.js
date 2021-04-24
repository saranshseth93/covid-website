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
  })()
);
