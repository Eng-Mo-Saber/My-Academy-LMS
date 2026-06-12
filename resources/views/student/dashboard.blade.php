@extends('layout.app')

@section('title','لوحة تحكم الطالب - أكاديميتي' )


@section('content')
    <div class="main-content">
        <nav class="navbar navbar-light bg-white border-bottom px-4 py-3 sticky-top">
            <button class="btn btn-light d-lg-none" id="sidebarToggle"><i class="bi bi-list fs-4"></i></button>
            <div class="d-flex align-items-center ms-auto gap-3">
                <button class="btn btn-light rounded-circle" id="darkModeToggle"><i class="bi bi-moon"></i></button>
                <i class="bi bi-bell fs-5"></i>
                <img src="https://via.placeholder.com/40" class="rounded-circle border" alt="المستخدم">
            </div>
        </nav>

        <div class="container-fluid p-4">
            <h3 class="fw-bold mb-4">مرحباً بعودتك، الطالب!</h3>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card text-bg-primary shadow-sm h-100 p-3">
                        <div class="d-flex justify-content-between">
                            <div><h5 class="card-title">الدورات المسجلة</h5><h2 class="fw-bold mb-0">5</h2></div>
                            <i class="bi bi-journal-bookmark fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-success shadow-sm h-100 p-3">
                        <div class="d-flex justify-content-between">
                            <div><h5 class="card-title">الدورات المكتملة</h5><h2 class="fw-bold mb-0">2</h2></div>
                            <i class="bi bi-check-circle fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-warning text-dark shadow-sm h-100 p-3">
                        <div class="d-flex justify-content-between">
                            <div><h5 class="card-title">الشهادات</h5><h2 class="fw-bold mb-0">2</h2></div>
                            <i class="bi bi-award fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="fw-bold mb-3">نشاطات حديثة</h5>
            <div class="card shadow-sm">
                <div class="list-group list-group-flush">
                    <div class="list-group-item p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1 fw-bold">أكملت درس "أساسيات CSS"</h6>
                                <small class="text-muted">منذ ساعتين</small>
                            </div>
                            <span class="badge bg-success rounded-pill">مكتمل</span>
                        </div>
                    </div>
                    <div class="list-group-item p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1 fw-bold">سجلت في دورة "التسويق الرقمي"</h6>
                                <small class="text-muted">منذ يومين</small>
                            </div>
                            <span class="badge bg-primary rounded-pill">جديد</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection