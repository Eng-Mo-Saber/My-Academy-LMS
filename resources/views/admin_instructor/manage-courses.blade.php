@extends('layout.app')

@section('title','إدارة الدورات' )


@section('content')
        <div class="main-content p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">إدارة دروس دوراتك</h3>
            </div>

            <div class="card border-0 shadow-sm overflow-hidden">
                <table class="table align-middle mb-0">
                    <thead class="bg-white">
                        <tr>
                            <th class="p-3 ">الدورة</th>
                            <th class="p-3">عدد الدروس</th>
                            <th class="p-3" >الإجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>تعلم Laravel من الصفر</td>
                            <td>12 درس</td>
                            <td>
                                <a href="{{ route('manage_lesson',1) }}"
                                    class="btn btn-sm btn-outline-info me-1">
                                    <i class="bi bi-list-task"></i> الدروس
                                </a>

                                <button
                                    class="btn btn-sm btn-outline-success me-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#addLessonModal">
                                    <i class="bi bi-plus-lg"></i> إضافة درس
                                </a>
                                <button class="btn btn-sm btn-outline-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editCourseModal">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="addLessonModal" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title">إضافة فيديو جديد</h5>
                        <button type="button"
                            class="btn-close btn-close-white ms-0"
                            data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4 text-end">
                        <label class="form-label fw-bold">اسم الدرس</label>
                        <input type="text" class="form-control mb-3">
                        <label class="form-label fw-bold">ملف الفيديو</label>
                        <input type="file" class="form-control"
                            accept="video/*">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light"
                            data-bs-dismiss="modal">إلغاء</button>
                        <button type="button" class="btn btn-success">رفع
                            الدرس</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editCourseModal" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title fw-bold">تعديل بيانات الدورة</h5>
                        <button type="button"
                            class="btn-close btn-close-white ms-0"
                            data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4 text-end">
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-bold">اسم
                                    الدورة</label>
                                <input type="text" class="form-control"
                                    value="اسم الدورة القديم">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">السعر</label>
                                <input type="number" class="form-control"
                                    value="150">
                            </div>
                            <button type="submit"
                                class="btn btn-primary w-100">حفظ
                                التعديلات</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection