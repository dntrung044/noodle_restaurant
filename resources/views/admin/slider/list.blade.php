@extends('admin.layout.main')

@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0"> {{ $title }}</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <a href="{{ route('sliders.add') }}">
                                <button type="button" class="btn btn-dark btn-set-task w-sm-100">
                                    <i class="icofont-plus-circle me-2 fs-6"></i>Thêm Slider
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- List --}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 50px">Id</th>
                                        <th>Tiều đề</th>
                                        <th>Mô tả</th>
                                        <th>Nút bấm</th>
                                        <th>Ảnh</th>
                                        <th>Trạng thái</th>
                                        <th>Xử lý</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $key => $slider)
                                        <tr>
                                            <td>{{ $slider->id }}</td>
                                            <td>{{ $slider->name }}</td>
                                            <td>{{ $slider->description }}</td>
                                            <td>
                                                <ul>
                                                    <li>{{ $slider->button }}</li>
                                                    <li>
                                                        <i class="icofont-link"></i>
                                                        {{ $slider->url }}
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href="{{ $slider->thumb }}" target="_blank">
                                                    <img src="{{ $slider->thumb }}">
                                                </a>
                                            </td>
                                            <td>{!! \App\Helpers\Helper::active($slider->active) !!}</td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-toggle="modal">
                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('sliders.edit',  $slider->id) }}">
                                                            <i class="icofont-edit text-success"></i>
                                                        </a>
                                                    </button>

                                                    <button type="button" class="btn btn-outline-secondary deleterow">
                                                        <a href="#"
                                                            onclick="removeRow({{ $slider->id }}, '/admin/abouts/sliders/destroy')">
                                                            <i class="icofont-ui-delete text-danger"></i>
                                                        </a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
