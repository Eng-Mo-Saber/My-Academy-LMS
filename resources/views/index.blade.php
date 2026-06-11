@extends('layout.app')

@section('title', 'منصة التعليم الإلكتروني - الرئيسية')


@section('content')
    <section class="py-5 bg-primary text-white text-center">
        <div class="container py-5">
            <h1 class="display-4 fw-bold mb-4">تعلم مهارات جديدة اليوم</h1>
            <p class="lead mb-4">اكتشف آلاف الدورات التدريبية عبر الإنترنت من أفضل المدربين في العالم العربي.</p>
            <a href="{{ route('course_page') }}" class="btn btn-light btn-lg px-5 rounded-pill">تصفح الدورات</a>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">التصنيفات</h2>
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="card bg-white p-4 shadow-sm h-100">
                        <i class="bi bi-code-slash fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">برمجة</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card bg-white p-4 shadow-sm h-100">
                        <i class="bi bi-palette fs-1 text-danger mb-3"></i>
                        <h5 class="fw-bold">تصميم</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card bg-white p-4 shadow-sm h-100">
                        <i class="bi bi-megaphone fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold">تسويق</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card bg-white p-4 shadow-sm h-100">
                        <i class="bi bi-briefcase fs-1 text-warning mb-3"></i>
                        <h5 class="fw-bold">أعمال</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">الدورات المميزة</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top bg-secondary text-white d-flex align-items-center justify-content-center"
                            style="height: 200px;">
                            صورة الدورة
                        </div>
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">برمجة</span>
                            <h5 class="card-title fw-bold">تطوير واجهات المستخدم</h5>
                            <p class="text-muted small">بواسطة: أحمد محمد</p>
                            <h6 class="text-primary fw-bold">$49.99</h6>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="{{ route('course-details_page') }}" class="btn btn-outline-primary w-100">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top bg-secondary text-white d-flex align-items-center justify-content-center"
                            style="height: 200px;">
                            صورة الدورة
                        </div>
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">تصميم</span>
                            <h5 class="card-title fw-bold">تصميم واجهات تجربة المستخدم</h5>
                            <p class="text-muted small">بواسطة: سارة علي</p>
                            <h6 class="text-primary fw-bold">$59.99</h6>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="{{ route('course-details_page') }}" class="btn btn-outline-primary w-100">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top bg-secondary text-white d-flex align-items-center justify-content-center"
                            style="height: 200px;">
                            صورة الدورة
                        </div>
                        <div class="card-body">
                            <span class="badge bg-success mb-2">تسويق</span>
                            <h5 class="card-title fw-bold">التسويق الرقمي الشامل</h5>
                            <p class="text-muted small">بواسطة: خالد محمود</p>
                            <h6 class="text-primary fw-bold">$39.99</h6>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="{{ route('course-details_page') }}" class="btn btn-outline-primary w-100">التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">آراء الطلاب</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card p-4 shadow-sm">
                        <i class="bi bi-chat-quote fs-1 text-primary mb-3"></i>
                        <p>"منصة رائعة جداً، ساعدتني في تطوير مهاراتي البرمجية بشكل كبير."</p>
                        <h6 class="fw-bold mt-3">- محمد أحمد</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow-sm">
                        <i class="bi bi-chat-quote fs-1 text-primary mb-3"></i>
                        <p>"الدورات منظمة والمدربين على مستوى عالٍ من الكفاءة."</p>
                        <h6 class="fw-bold mt-3">- فاطمة سعيد</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow-sm">
                        <i class="bi bi-chat-quote fs-1 text-primary mb-3"></i>
                        <p>"أفضل منصة عربية للتعليم الإلكتروني جربتها حتى الآن."</p>
                        <h6 class="fw-bold mt-3">- عمر خالد</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
