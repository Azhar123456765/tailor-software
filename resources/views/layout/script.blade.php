<!--   Core JS Files   -->
<script src="{{ url('../assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ url('../assets/js/core/popper.min.js') }}"></script>
<script src="{{ url('../assets/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ url('../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ url('../assets/js/plugin/datatables/datatables.min.js') }}"></script>
<!-- Kaiadmin JS -->
<script src="{{ url('../assets/js/kaiadmin.min.js') }}"></script>
<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{ url('../assets/js/setting-demo2.js') }}"></script>
<!-- Include Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<script>
    $(document).ready(function() {
        $("#basic-datatables").DataTable({});


        $("#multi-filter-select").DataTable({
            pageLength: 5,
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on("change", function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column
                                    .search(val ? "^" + val + "$" : "", true, false)
                                    .draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append(
                                    '<option value="' + d + '">' + d + "</option>"
                                );
                            });
                    });
            },
        });

        // Add Row
        $("#add-row").DataTable({
            pageLength: 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function() {
            $("#add-row")
                .dataTable()
                .fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action,
                ]);
            $("#addRowModal").modal("hide");
        });
    });


    $(document).on('keydown', function(event) {
        if (event.shiftKey && event.key === 'M') {
            event.preventDefault();

            $('.mailBtn').click();
        }
    });
    $(document).on('keydown', function(event) {
        if (event.shiftKey && event.key === 'P') {
            event.preventDefault();

            $('.printBtn').click();
        }
    });
</script>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') }}"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
<script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js') }}"></script>

@if (session('success') != '')
    <script>
        Swal.fire({
            icon: 'success',
            title: "{{ session('success') }}",
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000 // Automatically close after 3 seconds
        });
    </script>
@endif
@if (session('error') != '')
    <script>
        Swal.fire({
            icon: 'warning',
            title: "{{ session('error') }}",
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            Swal.fire({
                icon: 'warning',
                title: "{{ $error }}",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endforeach
@endif


@stack('onPageScript')
<script>
    $('input').on('input', function() {
        let value = $(this).val();

        const fractionMap = {
            '1/2': '½',
            '1/3': '⅓',
            '2/3': '⅔',
            '1/4': '¼',
            '3/4': '¾',
            '1/5': '⅕',
            '2/5': '⅖',
            '3/5': '⅗',
            '4/5': '⅘',
            '1/6': '⅙',
            '5/6': '⅚',
            '1/8': '⅛',
            '3/8': '⅜',
            '5/8': '⅝',
            '7/8': '⅞'
        };

        Object.keys(fractionMap).forEach(fraction => {
            if (value.includes(fraction)) {
                value = value.replace(new RegExp(fraction, 'g'), fractionMap[fraction]);
            }
        });

        $(this).val(value);
    });
</script>
