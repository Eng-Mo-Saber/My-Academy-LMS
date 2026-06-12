@extends('layout.app')

@section('title','إضافة دورة جديدة - لوحة التحكم' )


@section('content')

    <div class="main-content p-4">
        <h3 class="fw-bold mb-4">إضافة دورة تعليمية جديدة</h3>
        
        <form id="addCourseForm">
            <div class="row g-4">
                
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0 p-4 mb-4">
                        <label class="form-label fw-bold">عنوان الدورة</label>
                        <input type="text" class="form-control mb-3" placeholder="تعلم Laravel">

                        <label class="form-label fw-bold">وصف الدورة</label>
                        <textarea class="form-control" rows="5" placeholder="اكتب وصفاً تفصيلياً..."></textarea>
                    </div>

                    <div class="card shadow-sm border-0 p-4 mb-4">
                        <label class="form-label fw-bold">تصنيف الدورة</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-tag text-primary"></i></span>
                            <select class="form-select">
                                <option selected disabled>اختر التصنيف المناسب...</option>
                                <option value="web">برمجة الويب (Web Development)</option>
                                <option value="mobile">تطبيقات الموبايل (Mobile Apps)</option>
                                <option value="design">التصميم والجرافيك (UI/UX)</option>
                            </select>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 p-4">
                        <h6 class="fw-bold mb-3">ماذا سيتعلم الطالب؟</h6>
                        <textarea class="form-control" rows="4" placeholder="مثلاً: بناء نظام تسجيل دخول كامل..."></textarea>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 p-4 mb-4">
                        <label class="form-label fw-bold">صورة الدورة</label>
                        <input type="file" id="courseImg" class="form-control mb-3">
                    </div>

                    <div class="card shadow-sm border-0 p-4 mb-4">
                        <label class="form-label fw-bold">السعر (EGP)</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="0.00">
                            <span class="input-group-text">ج.م</span>
                        </div>

                        <label class="form-label fw-bold">السعر بعد الخصم</label>
                        <input type="number" class="form-control mb-3" placeholder="0.00">

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isFree">
                            <label class="form-check-label fw-bold" for="isFree">دورة مجانية</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold shadow-sm py-3">
                        <i class="bi bi-cloud-arrow-up me-2"></i> نشر الدورة الآن
                    </button>
                </div>

            </div> </form>
    </div>
@endsection