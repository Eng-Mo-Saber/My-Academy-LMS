@extends('layout.app')

@section('title','مشغل الدروس - أكاديميتي' )


@section('content')
    <nav class="navbar navbar-dark bg-dark px-4 py-2 sticky-top">
        <div class="container-fluid">
            <a href="my-courses.html" class="btn btn-outline-light btn-sm me-2">
                <i class="bi bi-arrow-right"></i> العودة للدورات
            </a>
            <span class="navbar-brand mb-0 h6 text-truncate d-none d-md-inline-block">دورة تطوير واجهات المستخدم الشاملة</span>
            <div class="ms-auto d-flex align-items-center gap-3">
                <div class="text-white d-none d-sm-block">
                    <small class="text-muted">تقدمك:</small> <span class="fw-bold">75%</span>
                </div>
                <button class="btn btn-primary btn-sm rounded-pill" onclick="showToast('تم حفظ تقدمك!')">حفظ التقدم</button>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="row g-4">
            
            <div class="col-lg-8">
                <div class="video-container mb-4 shadow">
                    <div class="text-center">
                        <i class="bi bi-play-circle-fill display-1 opacity-50 mb-3 d-block"></i>
                        <p class="lead">هنا يظهر مشغل الفيديو الخاص بالدرس</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 class="fw-bold">الدرس الثالث: التعامل مع Bootstrap Grid System</h4>
                            <div class="d-flex gap-2">
                                <button class="btn btn-light btn-sm"><i class="bi bi-download"></i> المرفقات</button>
                                <button class="btn btn-light btn-sm"><i class="bi bi-share"></i></button>
                            </div>
                        </div>
                        <p class="text-muted">في هذا الدرس سنتعلم كيفية تقسيم الصفحة باستخدام نظام الشبكة (Grid System) وكيفية جعل التصميم متجاوباً مع جميع الشاشات.</p>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-outline-primary px-4">
                        <i class="bi bi-chevron-right me-1"></i> الدرس السابق
                    </button>
                    <button class="btn btn-primary px-4">
                        الدرس القادم <i class="bi bi-chevron-left ms-1"></i>
                    </button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm border-0 lesson-sidebar">
                    <div class="card-header bg-white py-3">
                        <h6 class="fw-bold mb-0">محتوى الدورة</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        
                        <a href="#" class="list-group-item list-group-item-action p-3 lesson-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-success">
                                    <i class="bi bi-check-circle-fill fs-5"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 small fw-bold">1. مقدمة عن الدورة</h6>
                                    <small class="text-muted"><i class="bi bi-clock"></i> 05:20 دقيقة</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action p-3 lesson-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-success">
                                    <i class="bi bi-check-circle-fill fs-5"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 small fw-bold">2. تثبيت الأدوات اللازمة</h6>
                                    <small class="text-muted"><i class="bi bi-clock"></i> 12:45 دقيقة</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action p-3 lesson-item active">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="bi bi-play-circle-fill fs-5"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 small fw-bold text-primary">3. نظام الشبكة Grid System</h6>
                                    <small class="text-muted"><i class="bi bi-clock"></i> 25:10 دقيقة</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action p-3 lesson-item">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-muted">
                                    <i class="bi bi-lock-fill fs-5"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 small fw-bold text-muted">4. المكونات الأساسية (Components)</h6>
                                    <small class="text-muted"><i class="bi bi-clock"></i> 18:30 دقيقة</small>
                                </div>
                            </div>
                        </a>

                        <a href="quiz.html" class="list-group-item list-group-item-action p-3 lesson-item bg-light">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-warning">
                                    <i class="bi bi-question-square-fill fs-5"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 small fw-bold">اختبار تقييمي</h6>
                                    <small class="text-muted">10 أسئلة</small>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection