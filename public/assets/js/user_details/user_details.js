/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!**********************************************************!*\
  !*** ./resources/assets/js/user_details/user_details.js ***!
  \**********************************************************/


var tableName = '#userDetailsTable';
$(tableName).DataTable({
  scrollX: true,
  deferRender: true,
  scroller: true,
  processing: true,
  serverSide: true,
  'order': [[0, 'asc']],
  ajax: {
    url: recordsURL
  },
  columnDefs: [{
    'targets': [6],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: 'name',
    name: 'name'
  }, {
    data: 'email',
    name: 'email'
  }, {
    data: 'password',
    name: 'password'
  }, {
    data: 'gender',
    name: 'gender'
  }, {
    data: 'phone_no',
    name: 'phone_no'
  }, {
    data: 'status',
    name: 'status'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#userDetailsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'User Detail');
});
/******/ })()
;