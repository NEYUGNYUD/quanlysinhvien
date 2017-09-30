@extends('admin.layout.master')
@section('title')
    Account admin
@endsection

@section('menu-name')
    Account Admin
@endsection
@section('function-name')
    Danh sách account admin
@endsection

@section('content')
    <div class="card mb-3 list-table">
        <div class="card-header">
            <i class="fa fa-table"></i> Bảng danh sách Account admin
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Avatar</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th>Ngày tạo</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Avatar</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th>Ngày tạo</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($accountsList as $account)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $account->name }}</td>
                            <td align="center">
                                <img src="{{ $account->avatar }}" alt="{{ $account->name }}" class="img-responsive" width="45em" height="45em">
                            </td>
                            <td>{{ $account->email }}</td>
                            <td>{{ $account->level->name }}</td>
                            <td>{{ $account->created_at }}</td>
                            <td>{{ $account->updated_at }}</td>
                            <td>
                                <a href="{{ route('accounts.edit', ['account' => $account->name]) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @php ++$i; @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection