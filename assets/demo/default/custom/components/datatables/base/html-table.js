//== Class definition

var DatatableHtmlTableDemo = function() {
  //== Private functions

  // demo initializer
  var demo = function() {

    var datatables = $('.m-datatables').mDatatable({
      data: {
        saveState: {cookie: false,
        },
      },
      search: {
        input: $('#generalSearch'),
      },
      columns: [{
        field: "Id Menu", // disable sort for this column
        filterable: false,
        width: 70,
      }, {
        field: "Nama Menu",
        sortable: 'asc', // default sort
        width: 300,
        textAlign : 'left'
      }, {
        field: "Link Menu",
        width: 300
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