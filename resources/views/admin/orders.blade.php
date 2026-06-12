@extends('layout.app')

@section('title','الطلبات والعمليات المالية' )


@section('content')
    <div class="main-content p-4">
        <h3 class="fw-bold mb-4 text-dark">سجل الطلبات</h3>
        
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th class="px-4">رقم الطلب</th>
                                <th>الطالب</th>
                                <th>المبلغ</th>
                                <th>طريقة الدفع</th>
                                <th>التاريخ</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 fw-bold">#ORD-7721</td>
                                <td>أحمد علي</td>
                                <td class="text-primary fw-bold">500 EGP</td>
                                <td><span class="small"><i class="bi bi-wallet2 me-1"></i> فودافون كاش</span></td>
                                <td>2026/04/10</td>
                                <td><span class="status-badge status-paid text-success">مكتمل</span></td>
                            </tr>
                            <tr>
                                <td class="px-4 fw-bold">#ORD-7722</td>
                                <td>سارة محمود</td>
                                <td class="text-primary fw-bold">350 EGP</td>
                                <td><span class="small"><i class="bi bi-credit-card me-1"></i> فيزا</span></td>
                                <td>2026/04/12</td>
                                <td><span class="status-badge status-pending text-warning">قيد الانتظار</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection