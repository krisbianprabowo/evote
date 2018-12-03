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
        field: "#", // disable sort for this column
        width: 80,
      }, {
        field: "Nama Pengajar / Guru",
        sortable: 'asc', // default sort
        width: 320,
        textAlign : 'left'
      }, {
        field: "Status",
        width: 100,
      },{
        field: "Deskripsi",
        width: 200,
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