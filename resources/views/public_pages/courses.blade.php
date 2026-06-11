@extends('layout.app')

@section('title','تصفح الدورات - أكاديميتي' )


@section('content')

    <div class="container py-5">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="fw-bold">جميع الدورات</h2>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" placeholder="ابحث عن دورة...">
                    <select class="form-select w-auto">
                        <option>كل التصنيفات</option>
                        <option>برمجة</option>
                        <option>تصميم</option>
                    </select>
                    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">صورة الدورة</div>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">برمجة</span>
                        <h5 class="card-title fw-bold">دورة الجافاسكريبت المتقدمة</h5>
                        <p class="text-muted small">المدرب: ياسر عبد الله</p>
                        <h6 class="text-primary fw-bold">$40.00</h6>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="{{ route('course-details_page') }}" class="btn btn-outline-primary w-100">التفاصيل</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">صورة الدورة</div>
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">تصميم</span>
                        <h5 class="card-title fw-bold">احتراف الفوتوشوب</h5>
                        <p class="text-muted small">المدرب: نورة حسن</p>
                        <h6 class="text-primary fw-bold">$35.00</h6>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="{{ route('course-details_page') }}" class="btn btn-outline-primary w-100">التفاصيل</a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">السابق</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">التالي</a></li>
            </ul>
        </nav>
    </div>
@endsection