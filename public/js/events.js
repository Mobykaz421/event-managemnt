$(document).ready(function () {

    var segments = location.href.split('/');
    var action = segments[3];
    if (action == 'events') {
        eventListing();
    }


    $('#saveEvent').click(function () {

        var verif = [];
        $('.required').css('border', '');
        $('.required').parent().css('border', '');


        $('.required').each(function () {
            if ($(this).val() == "") {
                $(this).css("border", "1px solid red");
                verif.push(false);
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'red');
                $('#notifDiv').text('Please provide all the required information (*)');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
                return;
            } else if ($(this).val() == 0 || $(this).val() == null) {
                $(this).parent().css("border", "1px solid red");
                verif.push(false);
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'red');
                $('#notifDiv').text('Please provide all the required information (*)');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
                return;
            } else {
                verif.push(true);
            }
        });

        // Close Of required fields
        if (verif.includes(false)) {
            return;
        }


        // Check the url to Add or Edit
        var ajaxUrl = '';
        if ($('#operation').val() == 'add') {
            ajaxUrl = '/save_event';
        } else {
            ajaxUrl = '/update_event';
        }

        $('#saveEvent').attr('disabled', 'disabled');
        $('#saveEvent').text('Processing..');


        $('#saveEventForm').ajaxSubmit({
            method: "POST",
            url: ajaxUrl,
            data: $('#saveEventForm').serialize(),
            cache: false,
            success: function (response) {
                console.log(JSON.parse(response));
                var response = JSON.parse(response);
                // debugger;
                if (response == "success") {
                    eventListing();
                    $('#saveEvent').removeAttr('disabled');
                    $('#saveEvent').text('Save');
                    $('#pl-close').click();
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'green');
                    $('#notifDiv').text('Event added successfully');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                } else if (response == "updated") {
                    eventListing();

                    $('#saveEvent').removeAttr('disabled');
                    $('#cancelEvent').removeAttr('disabled');
                    $('#saveEvent').text('Save');
                    $('#pl-close').click();
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'green');
                    $('#notifDiv').text('Event have been updated successfully');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                } else if (response == "failed") {
                    $('#saveEvent').removeAttr('disabled');
                    $('#saveEvent').text('Save');
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'red');
                    $('#notifDiv').text('Failed to add Event at the moment......');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                }
            }
        });
    });
});

var lastOp = "add";

// Add Sidebar for Department
$(document).on('click', '.openDataSidebarForAddingEvent', function () {

    if (lastOp == "update") {
        $('input[name="name"]').val("");
        $('input[name="name"]').blur();

        $('input[name="address"]').val("");
        $('input[name="address"]').blur();

        $('input[name="date"]').val("");
        $('input[name="date"]').blur();

        $('input[name="event_type"]').val("");
        $('input[name="event_type"]').blur();

        $('input[name="ticket"]').val("");
        $('input[name="ticket"]').blur();

        $('input[name="venue_name"]').val("");
        $('input[name="venue_name"]').blur();
    }
    lastOp = 'add';
    $('#operation').val('add');
    $('#product-cl-sec').addClass('active');
    $('.overlay').addClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    $('body').toggleClass('no-scroll');
});



// Update Sidebar for Event
$(document).on('click', '.openDataSidebarForUpdateEvent', function () {
    $('#operation').val('update');
    lastOp = 'update';
    $('#dataSidebarLoader').show();
    $('._cl-bottom').hide();
    $('.pc-cartlist').hide();


    var id = $(this).attr('id');
    $('input[name="event_updating_id"]').val(id)
    $.ajax({
        type: 'GET',
        url: '/GetEvent/' + id,
        success: function (response) {
            var response = JSON.parse(response);
            console.log(response);
            $('#dataSidebarLoader').hide();
            $('._cl-bottom').show();
            $('.pc-cartlist').show();
            $('#uploadedImg').remove();

            $('input[name="name"]').focus();
            $('input[name="name"]').val(response.name);
            $('input[name="name"]').blur();

            $('input[name="address"]').focus();
            $('input[name="address"]').val(response.address);
            $('input[name="address"]').blur();

            $('input[name="date"]').focus();
            $('input[name="date"]').val(response.date);
            $('input[name="date"]').blur();

            $('input[name="event_type"]').val(response.event_type);
            $('input[name="event_type"]').focus();
            $('input[name="event_type"]').blur();

            $('input[name="ticket"]').focus();
            $('input[name="ticket"]').val(response.ticket);
            $('input[name="ticket"]').blur();

            $('input[name="venue_name"]').focus();
            $('input[name="venue_name"]').val(response.venue_name);
            $('input[name="venue_name"]').blur();

        }
    });
    $('#product-cl-sec').addClass('active');
    $('.overlay').addClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    $('body').toggleClass('no-scroll');
});





// Show Bulk Upload Listing

function eventListing() {
    $.ajax({
        type: 'GET',
        url: '/eventFetchList',
        success: function (response) {
            $('.body').empty();
            $('.body').append('<table class="table table-hover dt-responsive nowrap" id="eventListTable" style="width:100%"><thead><tr><th>Lead ID</th><th>Event Name</th><th>Event Type</th><th>Event Date</th><th>Action</th></tr></thead></tbody><tbody></tbody></table>');
            $('#eventListTable tbody').empty();
            var response = JSON.parse(response);
            console.log('My response is' + response);
            response.forEach(element => {
                $('#eventListTable tbody').append(`<tr>
                    <td>${element.id}</td>
                    <td>${element.name}</td>
                    <td>${element.event_type}</td>
                    <td>${element.date}</td>
                    <td>
                    <button  id="${element['id']}" class="btn btn-default btn-line openDataSidebarForUpdateEvent">Edit</button>
                    <a href="/events/${element['id']}" class="btn btn-default">Detail</a>
                </td>
                </tr>`);
            });
            $('#tblLoader').hide();
            $('.body').fadeIn();
            $('#eventListTable').DataTable();
        }
    });
}
