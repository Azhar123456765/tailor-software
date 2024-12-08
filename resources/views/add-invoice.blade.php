@extends('layout.app') @section('title', 'Add Invoice') @section('content')

<style>
    /* fieldset {
        min-width: auto !important;
        padding: auto !important;
        margin: auto !important;
        border: 1px !important;
    }

    legend {
        width: auto !important;
        padding: auto  !important;
        margin-bottom: auto !important;
    } */
    legend {
        font-size: 15px;
    }

    .form-group {
        padding: 0px !important;
    }

    .form-control {
        padding: 5px !important;
    }

    .form-check label,
    .form-group label {
        margin-bottom: 0px !important;
        font-size: 15px !important;
        /* color: white !important; */
    }

    .main-panel>.container {
        /* background-color: gray; */
    }

    .table>tbody>tr>td,
    .table>tbody>tr>th {
        padding: 0px !important;
    }
</style>
<div class="page-inner">
    <div class="box bg-info p-2 my-2 d-none">
        <h2 class="text-center text-white d-none">Add Invoice</h2>
    </div>
    <form action="{{ route('invoice.store') }}" id="invoiceForm" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <fieldset>
                    <legend>Bill Info</legend>

                    <div class="form-group row justify-content-between">
                        <label for="date" class="col-sm-2 col-form-label">Invoice#:</label>
                        <div class="col-sm-10">
                            <input type="text" name="unique_id" class="form-control" id="unique_id"
                                value="{{ str_pad($count + 1, 4, '0', STR_PAD_LEFT) }}" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-between">
                        <label for="date" class="col-sm-2 col-form-label">Customer Id#:</label>
                        <div class="col-sm-10">
                            <input type="text" name="" class="form-control" id="cus_id" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-between">
                        <label for="date" class="col-sm-2 col-form-label">Date:</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" class="form-control" id="date"
                                value="{{ date('Y-m-d') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Customer:</label>
                        <div class="col-sm-10">
                            <select name="customer" class="form-control select2-select" id="customerSelect"
                                onchange="updateCustomerId()">
                                <option value="" disabled selected>Select Customer</option>
                                @foreach ($customers as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="remarks" class="col-sm-2 col-form-label">Remarks:</label>
                        <div class="col-sm-10">
                            <input type="text" name="remarks" class="form-control" id="remarks">
                        </div>
                    </div>
                </fieldset>
                <div class="row">
                    <div class="col-lg-12 bg-transparent table-responsive my-4">
                        <table class="table table-hover table-bordered w-100 h-25">
                            <thead class="mx-5">
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="tr0">
                                    <td scope="row" class="w-50">
                                        <input id="description0" name="item[]" class="form-control w-100"
                                            onchange="cloneLine()">
                                    </td>
                                    <td><input type="number" value="0.00" id="qty0" name="sale_qty[]"
                                            class="form-control w-100 qty"></td>
                                    <td><input type="text" id="rate0" name="sale_price[]"
                                            class="form-control w-100">
                                    </td>
                                    <td><input type="number" value="0.00" id="amount0" name="amount[]"
                                            class="form-control w-100"></td>
                                    <td class="d-flex justify-content-center align-items-center h-100 cut0">

                                    </td>
                                    <!-- <input type="hidden" id="qty_total" name="qty_total"> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12 my-3 row justify-content-around align-items-center">
                        <div class="col-lg-2 form-group row gy-1 my-1">
                            <label for=""
                                class="col-sm-12 col-form-label bg-danger text-center fw-bolder fs-4">Amount</label>
                            <div class="col-sm-12 p-0">
                                <input type="text" name="total" class="form-control w-100" id="total">
                            </div>
                        </div>
                        <div class="col-lg-2 form-group row  gy-1 my-1">
                            <label for=""
                                class="col-sm-12 col-form-label bg-danger text-center fw-bolder fs-4">Discount(%)</label>
                            <div class="col-sm-12 p-0">
                                <input type="text" name="discount" class="form-control w-100" id="discount">
                            </div>
                        </div>
                        <div class="col-lg-2 form-group row  gy-1 my-1">
                            <label for=""
                                class="col-sm-12 col-form-label bg-danger text-center fw-bolder fs-4">Net
                                Amount</label>
                            <div class="col-sm-12 p-0">
                                <input type="text" name="net_amount" class="form-control w-100" id="net_amount">
                            </div>
                        </div>
                        <div class="col-lg-2 form-group row  gy-1 my-1">
                            <label for=""
                                class="col-sm-12 col-form-label bg-warning text-center fw-bolder fs-4">Amount
                                Paid</label>
                            <div class="col-sm-12 p-0">
                                <input type="text" name="amount_paid" class="form-control w-100"
                                    id="amount_paid">
                            </div>
                        </div>
                        <div class="col-lg-2 form-group row  gy-1 my-1">
                            <label for=""
                                class="col-sm-12 col-form-label bg-warning text-center fw-bolder fs-4">Remaining Amount
                            </label>
                            <div class="col-sm-12 p-0">
                                <input type="text" name="remaining_amount" class="form-control w-100"
                                    id="remaining_amount">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <div class="row justify-content-around">
                                <button class="btn btn-lg btn-success my-2 w-25 printBtn" type="button"
                                    onclick="printInvoice(this)">Print
                                    Shft+P</button>
                                <button class="btn btn-lg btn-warning w-25 my-2" type="submit">Save</button>
                                <button class="btn btn-lg btn-success my-2 w-25 mailBtn" data-bs-toggle="modal"
                                    data-bs-target="#mailModal" type="button">Mail Shft+M</button>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="mailModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mailModalLabel">Send Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="orderMail(this)">Send Email</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@push('onPageScript')
    <script>
        function printInvoice() {
            var formData = $('form').serialize();
            location.href = '/invoice/print?' + formData
        }

        function orderMail(button) {
            var originalText = $(button).text();

            $(button).prop('disabled', true).text('Sending...');

            var formData = $('#invoiceForm').serialize();

            $.ajax({
                url: '{{ route('invoice.email') }}',
                method: 'GET',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: "Mail Sent Successfully!",
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                },
                error: function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: "Failed to Send Mail",
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                },
                complete: function() {
                    $(button).prop('disabled', false).text(originalText);
                }
            });
        }
        var counter = 0;
        var counterArr = [0];
        $("body").on("change", function() {
            calc();
        })
        $("input").on("input", function() {
            calc();
        })

        function cloneLine() {
            counter++;
            counterArr.push(counter);
            let tr = ` <tr id="tr` + counter + `">
        <td scope="row" class="w-50">
           <input id="description` + counter + `" name="item[]"
                                        class="form-control w-100">
        </td>
        <td><input type="number"  value="0.00" id="qty` + counter + `" name="sale_qty[]" class="form-control w-100"></td>
        <td><input type="text" id="rate` + counter + `" name="sale_price[]" class="form-control w-100"></td>
                                <td><input type="number"  value="0.00" id="amount` + counter + `" name="amount[]" class="form-control w-100"></td>
                                <td class="d-flex justify-content-center align-items-center h-100 cut` + counter +
                `"><a href="#" onclick="cut(` + counter + `)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                            <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                                            <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                        </svg></a></td>
                            </tr>`
            $("tbody").append(tr)
        }

        // function rateCalc() {
        //     let rate = $('#description0').find('option:selected').data('rate');
        //     $('#rate0').val(rate);
        //     for (let index = 0; index < counterArr.length; index++) {
        //         let rate = $(`#description${counterArr[index]}`).find('option:selected').data('rate');
        //         $(`#rate${counterArr[index]}`).val(rate);
        //     }
        // }


        function calc() {
            var totalAmount = 0;
            for (let index = 0; index < counterArr.length; index++) {
                let ratesrice = parseFloat($(`#rate${counterArr[index]}`).val());
                let qty = parseFloat($(`#qty${counterArr[index]}`).val());

                if (isNaN(ratesrice) || isNaN(qty)) {
                    console.error(`Invalid input for index ${index}`);
                    continue;
                }

                let amount = ratesrice * qty;
                $(`#amount${counterArr[index]}`).val(amount.toFixed(2));
                totalAmount += amount;
            }
            $(`#total`).val(totalAmount.toFixed(2));
            let discount = +$(`#discount`).val();
            let netAmount = (discount / 100) * totalAmount;
            $(`#net_amount`).val(totalAmount.toFixed(2) - netAmount.toFixed(2));
            netAmount = +$(`#net_amount`).val();
            let amountPaid = +$(`#amount_paid`).val();
            $(`#remaining_amount`).val(netAmount.toFixed(2) - amountPaid.toFixed(2));

        }


        function cut(para) {
            try {
                $(`#tr${para}`).hide();
                let rate = parseFloat($(`#amount${para}`).val());
                if (!isNaN(rate)) { // Check if rate is a valid number
                    let totalRate = parseFloat($(`#total`).val()) - rate;
                    $(`#total`).val(totalRate);
                    let index = counterArr.indexOf(para); // Find the index of the item
                    if (index !== -1) {
                        counterArr.splice(index, 1); // Remove 1 element from the array at the found index
                    }
                    calc();
                    $(`#tr${para}`).html('');
                } else {
                    console.error("Invalid rate value:", $(`#amount${para}`).val());
                }
            } catch (error) {
                console.error("Error occurred while processing para:", para, error);
            }

        }

        function updateCustomerId() {
            const selectElement = document.getElementById('customerSelect');
            const selectedValue = selectElement.value; // Get the selected option value
            document.getElementById('cus_id').value = selectedValue; // Update the hidden input
        }
    </script>
@endpush
@endsection
