<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Event Management</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/select2-bootstrap4.css">

    <link href="css/dropify.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css?v=r.0021" rel="stylesheet">

</head>

<body id="page-top">
    <div id="notifDiv"
        style="z-index:10000; display: none; background: green; font-weight: 450; width: 350px; position: fixed; top: 80%; left: 5%; color: white; padding: 5px 20px">
    </div>
    @yield('content');
</body>
<script src="/js/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/datatables.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/dropify.min.js"></script>
<script src="/js/form-file-upload-data.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/jquery.form.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="js/events.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });


    $(document).ready(function () {

        $('#pl-close, .overlay').on('click', function () {
            $('#product-cl-sec').removeClass('active');
            $('.overlay').removeClass('active');
            $('body').toggleClass('no-scroll')
        });

        $('#productlist01').on('click', function () {
            $('#product-cl-sec').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            $('body').toggleClass('no-scroll')
        });

    });

    $('.form-control').on('focus blur', function (e) {
            $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length >
                0));
        })
        .trigger('blur');
    $(".formselect").select2();

    $('.sd-type').select2({
        createTag: function (params) {
            var term = $.trim(params.term);

            if (term === '') {
                return null;
            }

            return {
                id: term,
                text: term,
                newTag: true // add additional parameters
            }
        }
    });

    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

</script>


</html>
