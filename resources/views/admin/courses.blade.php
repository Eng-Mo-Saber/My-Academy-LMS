@extends('layout.app')

@section('title' , 'إدارة الدورات - لوحة التحكم')

@section('content')
            <div class="main-content p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">إدارة الدورات</h3>
                <a href="{{ route('add_courses') }}"
                    class="btn btn-primary shadow-sm fw-bold">
                    <i class="bi bi-plus-circle me-1"></i> إضافة دورة جديدة
                </a>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="px-4">الدورة</th>
                                    <th>المحاضر</th>
                                    <th>السعر</th>
                                    <th>المبيعات</th>
                                    <th>عدد الدروس</th>
                                    <th>الحالة</th>
                                    <th class="text-center">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4">
                                        <div class="d-flex align-items-center">
                                            <img
                                                src="https://via.placeholder.com/50"
                                                class="rounded me-3">
                                            <h6 class="mb-0 fw-bold small">دورة
                                                Laravel Backend</h6>
                                        </div>
                                    </td>
                                    <td>مو صابر</td>
                                    <td>$49.99</td>
                                    <td>125</td>
                                    <td>10</td>

                                    <td><span
                                            class="badge bg-success-subtle text-success">منشورة</span></td>
                                    <td class="text-center">
                                        <button
                                            class="btn btn-sm btn-outline-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editCourseModal">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-light border text-danger"
                                            title="حذف"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addLessonModal" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title fw-bold">إضافة درس جديد
                            للدورة</h5>
                        <button type="button"
                            class="btn-close btn-close-white ms-0"
                            data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form id="addLessonForm">
                            <div class="mb-3">
                                <label class="form-label fw-bold">اسم
                                    الدرس</label>
                                <input type="text" class="form-control"
                                    placeholder="مثلاً: مقدمة عن Laravel"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">فيديو
                                    الشرح</label>
                                <input type="file" class="form-control"
                                    accept="video/*" required>
                                <div class="form-text text-muted mt-2">
                                    <i class="bi bi-info-circle me-1"></i> الصيغ
                                    المدعومة: MP4, WebM
                                </div>
                            </div>

                            <div class="progress d-none mb-3"
                                id="uploadProgress">
                                <div
                                    class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                    role="progressbar" style="width: 0%"></div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-light px-4"
                            data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" form="addLessonForm"
                            class="btn btn-success px-4">حفظ ورفع الدرس</button>
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