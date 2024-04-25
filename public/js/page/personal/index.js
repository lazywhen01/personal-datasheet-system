$(function () {

    let this_id;

    let deleteModal = $('#delete-personal-modal');

    let table = $("#personalTable").DataTable({
        autoWidth: false,
        responsive: true,
        processing: true,
        serverSide: true,
        searching: true,
        paging: true,
        ajax: {
            method: "GET",
            url: "/personal/table",
            dataType: "json",
            error: function (errors) {
                toast.fire({
                    icon: "error",
                    title: "Invalid Data Token.",
                });
            },
        },
        language: {
            searchPlaceholder: "Search Records..",
        },
        columns: [
            { data: "first_name", name: "first_name" },
            { data: "last_name", name: "last_name" },
            { data: "sex", name: "sex" },
            { data: "civil_status", name: "civil_status" },
            { data: "created_at", name: "created_at" },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
            }
        ],
    });
    //Search
    $("#custom-search-field").keyup(function () {
        table.search($(this).val()).draw();
    });

    //PageLength
    $("#custom-page-length")
        .change(function () {
            table.page.len($(this).val()).draw();
        })
        .trigger("change");

    // Button delete
    $('body').on('click', '.delete-personal', function () {
        this_id = $(this).attr('data-id');
        deleteModal.modal('show');
    });

    // Modal button delete
    $('body').on('click', '#destroy-personal', function () {
        $.ajax({
            type: 'DELETE',
            url: '/personal/' + this_id,
            dataType: 'json',
            beforeSend: function () {
                buttons('destroy-personal', 'start');
            }
        })
            .done(function (response) {
                table.ajax.reload();
                toast.fire({
                    icon: 'success',
                    title: response.message,
                });
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                toast.fire({
                    icon: 'error',
                    title: jqXHR.responseJSON.message,
                });
            })
            .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
                buttons('destroy-personal', 'finish');
                deleteModal.modal('hide');
            });
    });
});