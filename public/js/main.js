$(function () {
    $('#example1').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "/products/getProductsJson",
        "columnDefs": [
            {
                "orderable":false,
                "targets": 0,
                "render": function (data,type,row) {
                    return `<input type='checkbox' value='${data}'/>`;

                }
            },
            {
                "orderable":false,
                "targets": 5,
                "render": function (data,type,row) {
                    return `<a href='/products/${data}/edit'><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                 <button type="submit" data-id="${data}" class="show-ds-model" style="background: transparent; border: none;
                                  display: inline-block;color: darkorange"><i class="fa fa-trash-o"
                                                                              aria-hidden="true"></i></button>`;

                }
            }
        ]
    });
   $('#example1').on('click','.show-ds-model',function (event) {
        var id = $(this).data('id');
        var modal = $('#exampleModal');
        modal.find('.modal-body p').text('Are you sure you want to delete this record?');
        $('#deleteForm').attr('action','/products/'+ id);
        modal.modal('show');
   });
   $(".deleteButton").click(function () {
        $('#deleteForm').submit();
   })
});
