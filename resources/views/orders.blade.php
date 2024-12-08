@extends('layout.app') @section('title', 'Orders Table') @section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <h4 class="card-title col-6">All Orders</h4>
                        <div class="form-group row col-6 justidy-content-between">
                            <label for="address" class="col-sm-4 col-form-label">Select Status:</label>
                            <div class="col-sm-8">
                                <select id="status" class="form-control text-center" onchange="statusChange()">
                                    <option value="0" class="text-center" {{ $status == 0 ? 'selected' : '' }}>
                                        Active</option>
                                    <option value="1" class="text-center" {{ $status == 1 ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="2" class="text-center" {{ $status == 2 ? 'selected' : '' }}>
                                        Complete</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Customer Name</th>
                                    <th>Order Due Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->CustomerDetail->name }}</td>
                                        <td>{{ $row->due_date }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('order.edit', $row->id) }}" data-bs-toggle="tooltip"
                                                    title="" class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                {{-- <a href="{{ route('order.delete', $row->id) }}" data-bs-toggle="tooltip"
                                                    title="" class="btn btn-link btn-danger"
                                                    data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </a> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('onPageScript')
    <script>
        function statusChange() {
            let status = $('#status').val();
            window.location.href = 'order?status=' + status;
        }
    </script>
@endpush
@endsection
