@extends('layout.app')

@section('title' , 'دوراتي - أكاديميتي')

@section('content')
        <div class="main-content">
        <nav class="navbar navbar-light bg-white border-bottom px-4 py-3 sticky-top">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <button class="btn btn-light d-lg-none" id="sidebarToggle">
                    <i class="bi bi-list fs-4"></i>
                </button>
                <h5 class="fw-bold mb-0 d-none d-sm-block">دوراتي التعليمية</h5>
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-light rounded-circle" id="darkModeToggle">
                        <i class="bi bi-moon"></i>
                    </button>
                    <div class="dropdown">
                        <img src="https://via.placeholder.com/40" class="rounded-circle border dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                            <li><a class="dropdown-item text-end" href="profile.html">الملف الشخصي</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-end text-danger" href="../pages/login.html">تسجيل الخروج</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-4">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <h3 class="fw-bold">مرحباً بك في دوراتك</h3>
                    <p class="text-muted">لديك (3) دورات قيد التعلم حالياً</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-2 justify-content-md-end">
                        <select class="form-select w-auto">
                            <option>الكل</option>
                            <option>مكتملة</option>
                            <option>قيد التقدم</option>
                        </select>
                        <input type="text" class="form-control w-auto" placeholder="ابحث في دوراتك...">
                    </div>
                </div>
            </div>

            <div class="row g-4">
                
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-sm border-0 h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="Course Thumbnail">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3">برمجة</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">دورة تطوير واجهات المستخدم الشاملة</h5>
                            
                            <div class="d-flex justify-content-between mb-2 small">
                                <span class="text-muted">نسبة الإنجاز</span>
                                <span class="fw-bold">75%</span>
                            </div>
                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                            </div>

                            <div class="d-flex align-items-center text-muted small mb-4">
                                <i class="bi bi-person-circle me-2"></i> أحمد محمد
                                <span class="mx-2">|</span>
                                <i class="bi bi-play-circle me-2"></i> 12/15 درس
                            </div>

                            <a href="lesson-player.html" class="btn btn-primary w-100 py-2 fw-bold rounded-pill">
                                متابعة التعلم <i class="bi bi-play-fill ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-sm border-0 h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="Course Thumbnail">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-3">تصميم</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">احتراف تصميم الجرافيك بالسوشيال ميديا</h5>
                            
                            <div class="d-flex justify-content-between mb-2 small">
                                <span class="text-muted">نسبة الإنجاز</span>
                                <span class="fw-bold">30%</span>
                            </div>
                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
                            </div>

                            <div class="d-flex align-items-center text-muted small mb-4">
                                <i class="bi bi-person-circle me-2"></i> سارة علي
                                <span class="mx-2">|</span>
                                <i class="bi bi-play-circle me-2"></i> 5/20 درس
                            </div>

                            <a href="lesson-player.html" class="btn btn-primary w-100 py-2 fw-bold rounded-pill">
                                متابعة التعلم <i class="bi bi-play-fill ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-sm border-0 h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x225" class="card-img-top grayscale" alt="Course Thumbnail" style="filter: grayscale(100%);">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
                            <span class="badge bg-success position-absolute top-0 end-0 m-3"><i class="bi bi-check-circle me-1"></i> مكتملة</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3 text-muted">أساسيات قواعد البيانات SQL</h5>
                            
                            <div class="d-flex justify-content-between mb-2 small">
                                <span class="text-muted">نسبة الإنجاز</span>
                                <span class="fw-bold">100%</span>
                            </div>
                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                            </div>

                            <div class="d-flex align-items-center text-muted small mb-4">
                                <i class="bi bi-person-circle me-2"></i> خالد محمود
                            </div>

                            <div class="d-flex gap-2">
                                <a href="lesson-player.html" class="btn btn-outline-secondary flex-grow-1 py-2 fw-bold rounded-pill">
                                    مراجعة
                                </a>
                                <button class="btn btn-success flex-grow-1 py-2 fw-bold rounded-pill" onclick="showToast('تم تحميل الشهادة بنجاح')">
                                    الشهادة <i class="bi bi-award"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="toastContainer" class="toast-container position-fixed bottom-0 start-0 p-3"></div>

@endsection