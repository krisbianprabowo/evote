//== Class definition

var DatatableHtmlTableDemo = function() {
  //== Private functions

  // demo initializer
  var demo = function() {

    var datatables = $('.m-datatable').mDatatable({
      data: {
        saveState: {cookie: false,
        },
      },
      search: {
        input: $('#generalSearch'),
      },
      columns: [{
        field: "Judul", // disable sort for this column
        width: 350,
      }, {
        field: "Kategori",
        // default sort
        width: 90,
        textAlign : 'left'
      }, {
        field: "Terakhir Dimodifikasi",
        sortable: 'desc',
        width: 100,
      }, {
        field: "Penulis",
        width: 130
      }]
    });

  };

  return {
    //== Public functions
    init: function() {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  DatatableHtmlTableDemo.init();
});