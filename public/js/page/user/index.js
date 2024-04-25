$(function () {

    // Holds the user id
    let this_id;

    // Modals
    let deleteModal = $('#delete-user-modal');
    let activateModal = $("#activate-user-modal");
    let deactivateModal = $("#deactivate-user-modal");

    let table = $("#userTable").DataTable({
        autoWidth: false,
        responsive: true,
        processing: true,
        serverSide: true,
        searching: true,
        paging: true,
        ajax: {
            method: "GET",
            url: "/users/table",
            dataType: "json",
            error: function (errors) {
                console.log(errors);
            },
        },
        columns: [
            { data: "first_name", name: "first_name" },
            { data: "last_name", name: "last_name" },
            { data: "email", name: "email" },
            { data: "role", name: "role" },
            { data: "status", name: "status" },
            { data: "created_at", name: "created_at" },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
    });

    // Custom search
    $("#custom-search-field").keyup(function () {
        table.search($(this).val()).draw();
    });

    $("#custom-page-length").change(function () {
        table.page.len($(this).val()).draw();
    });

    // Button delete
    $('body').on('click', '.delete-user', function () {
        this_id = $(this).attr('data-id');
        deleteModal.modal('show');
    });

    // Modal button delete
    $('body').on('click', '#destroy-user', function () {
        $.ajax({
            type: 'DELETE',
            url: '/users/' + this_id,
            dataType: 'json',
            beforeSend: function () {
                buttons('destroy-user', 'start');
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
            buttons('destroy-user', 'finish');
            deleteModal.modal('hide');
        });
    });

    // Button activate
    $("body").on("click", ".activate-user", function () {
        this_id = $(this).attr("data-id");
        activateModal.modal("show");
    });

    // Modal button activate
    $("body").on("click", "#confirm-activate", function () {
        $.ajax({
            type: "PATCH",
            url: "/users/activate/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("activate-user", "start");
            },
        })
        .done(function (response) {
            table.ajax.reload();
            toast.fire({
                icon: "success",
                title: response.message,
            });
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            toast.fire({
                icon: "error",
                title: jqXHR.responseJSON.message,
            });
        })
        .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
            buttons("activate-user", "finish");
            activateModal.modal("hide");
        });
    });

    // Button deactivate
    $("body").on("click", ".deactivate-user", function () {
        this_id = $(this).attr("data-id");
        deactivateModal.modal("show");
    });

    // Modal button deactivate
    $("body").on("click", "#confirm-deactivate", function () {
        $.ajax({
            type: "PATCH",
            url: "/users/deactivate/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("deactivate-user", "start");
            },
        })
        .done(function (response) {
            table.ajax.reload();
            toast.fire({
                icon: "success",
                title: response.message,
            });
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            toast.fire({
                icon: "error",
                title: jqXHR.responseJSON.message,
            });
        })
        .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
            buttons("deactivate-user", "finish");
            deactivateModal.modal("hide");
        });
    });
});
