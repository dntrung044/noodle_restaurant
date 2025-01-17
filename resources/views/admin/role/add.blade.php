<!-- Add Role-->
<div class="modal fade" id="addRole" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="createprojectlLabelone"> Thêm vai trò</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Tên vài trò</label>
                    <input type="text" name="name" value="{{ old('name') }}"class="form-control name_add"  placeholder="Nhập tên vai trò">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea class="form-control description_add" name="description" rows="3" placeholder="Nhập nội dung mô tả">{{ old('description') }} </textarea>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>Quyền quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permissionItem )
                            <tr class="parent">
                                <td class="fw-bold">
                                    <h6>  {{ $permissionItem->name }} ( {{ $permissionItem->description }})
                                        <input class="form-check-input checkbox_role_add" type="checkbox" value=" {{ $permissionItem->id }}" id="checkAllRoles">
                                    </h6>
                                </td>
                            </tr>
                            @endforeach
                            <td class="fw-bold">
                                Tất cả các vai trò <input class="form-check-input" type="checkbox" id="checkbox_add_all">
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy bỏ</button>
                <button type="button" class="btn btn-primary" id="add_data">Tạo</button>
            </div>
        </div>
    </div>
</div>
