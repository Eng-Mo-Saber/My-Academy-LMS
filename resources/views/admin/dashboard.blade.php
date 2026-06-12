@extends('layout.app')

@section('title','لوحة تحكم الإدارة - أكاديميتي' )


@section('content')
    <div class="main-content">
        <nav class="navbar navbar-light bg-white border-bottom px-4 py-3 sticky-top">
            <button class="btn btn-light d-lg-none" id="sidebarToggle"><i class="bi bi-list fs-4"></i></button>
            <h5 class="mb-0 ms-auto fw-bold text-center">نظرة عامة</h5>
        </nav>

        <div class="container-fluid p-4">
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-white shadow-sm h-100 p-3 border-start border-primary border-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><p class="text-muted mb-1">المستخدمين</p><h3 class="fw-bold mb-0">1,250</h3></div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded text-primary"><i class="bi bi-people fs-3"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-white shadow-sm h-100 p-3 border-start border-success border-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><p class="text-muted mb-1">الدورات</p><h3 class="fw-bold mb-0">45</h3></div>
                            <div class="bg-success bg-opacity-10 p-3 rounded text-success"><i class="bi bi-journal-text fs-3"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-white shadow-sm h-100 p-3 border-start border-warning border-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><p class="text-muted mb-1">الطلبات</p><h3 class="fw-bold mb-0">320</h3></div>
                            <div class="bg-warning bg-opacity-10 p-3 rounded text-warning"><i class="bi bi-cart fs-3"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card bg-white shadow-sm h-100 p-3 border-start border-danger border-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><p class="text-muted mb-1">الأرباح</p><h3 class="fw-bold mb-0">$12,400</h3></div>
                            <div class="bg-danger bg-opacity-10 p-3 rounded text-danger"><i class="bi bi-currency-dollar fs-3"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 fw-bold">أحدث الطلبات</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>رقم الطلب</th>
                                    <th>الطالب</th>
                                    <th>الدورة</th>
                                    <th>المبلغ</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1001</td>
                                    <td>علي حسن</td>
                                    <td>دورة الجافاسكريبت</td>
                                    <td>$40.00</td>
                                    <td><span class="badge bg-success">مكتمل</span></td>
                                </tr>
                                <tr>
                                    <td>#1002</td>
                                    <td>منى محمود</td>
                                    <td>تصميم واجهات</td>
                                    <td>$35.00</td>
                                    <td><span class="badge bg-warning text-dark">قيد المعالجة</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div id="toastContainer" class="toast-container position-fixed bottom-0 start-0 p-3"></div>
            
        </div>
    </div>
@endsection