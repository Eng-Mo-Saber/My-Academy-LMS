@extends('layout.app')

@section('title','تفاصيل الدورة - أكاديميتي' )


@section('content')
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <h1 class="fw-bold mb-3">دورة تطوير واجهات المستخدم الشاملة</h1>
                <p class="lead text-muted mb-4">تعلم كيفية بناء واجهات مستخدم احترافية باستخدام HTML, CSS, Javascript و Bootstrap.</p>
                
                <div class="d-flex align-items-center mb-4">
                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="المدرب">
                    <div>
                        <h6 class="mb-0 fw-bold">المدرب: أحمد محمد</h6>
                        <small class="text-muted">مطور واجهات أول</small>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white fw-bold">
                        محتوى الدورة (الدروس)
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-play-circle-fill text-primary me-2"></i> مقدمة في HTML</span>
                            <span class="badge bg-light text-dark">10:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-play-circle-fill text-primary me-2"></i> أساسيات CSS</span>
                            <span class="badge bg-light text-dark">15:30</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-lock-fill text-muted me-2"></i> مدخل إلى JavaScript</span>
                            <span class="badge bg-light text-dark">20:00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm sticky-top" style="top: 100px;">
                    <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                        فيديو تعريفي
                    </div>
                    <div class="card-body text-center">
                        <h2 class="fw-bold text-primary mb-3">$49.99</h2>
                        <button class="btn btn-primary w-100 btn-lg mb-3">الاشتراك في الدورة</button>
                        <ul class="list-unstyled text-end mb-0">
                            <li class="mb-2"><i class="bi bi-camera-video me-2 text-muted"></i> 10 ساعات فيديو</li>
                            <li class="mb-2"><i class="bi bi-file-earmark-text me-2 text-muted"></i> 5 مقالات</li>
                            <li class="mb-2"><i class="bi bi-infinity me-2 text-muted"></i> وصول مدى الحياة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection