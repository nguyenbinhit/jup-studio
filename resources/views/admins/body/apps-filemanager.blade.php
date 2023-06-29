﻿@extends('admins.index')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jup studio</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ứng dụng</a></li>
                                <li class="breadcrumb-item active">Quản lý tập tin</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản lý tập tin</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- <div class="fileupload btn btn-success waves-effect waves-light mb-3">
                            <span><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</span>
                            <input type="file" class="upload">
                        </div> --}}
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="font-13 bg-light text-muted">
                                    <tr>
                                        <th class="font-weight-medium">Tên tệp</th>
                                        <th class="font-weight-medium">Ngày tạo</th>
                                        <th class="font-weight-medium">Kích cỡ</th>
                                        {{-- <th class="font-weight-medium">Contributors</th> --}}
                                        {{-- <th class="font-weight-medium text-center" style="width: 125px;">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\pdf.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Invoice-project.pdf</a>
                                        </td>
                                        <td class="text-muted font-13">17-Jan-18 2:55 PM</td>
                                        <td>2.31 MB</td>
                                        {{-- <td>
                                            <img src="assets\images\users\avatar-4.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                            <img src="assets\images\users\avatar-6.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td> --}}
                                    </tr>
                                    {{-- <tr>
                                        <td>
                                            <img src="assets\images\file-icons\png.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Dashboard-design.png</a>
                                        </td>
                                        <td class="text-muted font-13">21-May-18 1:12 PM</td>
                                        <td>3.89 MB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-5.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\psd.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Graphic-logo-main.psd</a>
                                        </td>
                                        <td class="text-muted font-13">23-May-18 11:34 AM</td>
                                        <td>125 MB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-1.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                            <img src="assets\images\users\avatar-2.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                            <img src="assets\images\users\avatar-3.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\avi.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Audio-video-file.avi</a>
                                        </td>
                                        <td class="text-muted font-13">18-Feb-18 4:29 PM</td>
                                        <td>12.3 MB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-7.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                            <img src="assets\images\users\avatar-8.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\pdf.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Holiday-trip-expenses.pdf</a>
                                        </td>
                                        <td class="text-muted font-13">10-Apr-18 1:12 PM</td>
                                        <td>256 KB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-6.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\txt.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">File-changes-notes.txt</a>
                                        </td>
                                        <td class="text-muted font-13">17-Jan-18 2:55 PM</td>
                                        <td>57.3 MB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-9.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                            <img src="assets\images\users\avatar-10.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\eps.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Eps-file-formate.eps</a>
                                        </td>
                                        <td class="text-muted font-13">21-Jun-18 1:12 PM</td>
                                        <td>429 MB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-1.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                            <img src="assets\images\users\avatar-2.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\dll.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Software-activation.dll</a>
                                        </td>
                                        <td class="text-muted font-13">23-May-18 11:34 AM</td>
                                        <td>58 KB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-3.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\sql.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Database-db.sql</a>
                                        </td>
                                        <td class="text-muted font-13">18-July-18 4:29 PM</td>
                                        <td>89.3 MB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-9.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                            <img src="assets\images\users\avatar-10.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\zip.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Minton-latest.zip</a>
                                        </td>
                                        <td class="text-muted font-13">10-Aug-18 1:12 PM</td>
                                        <td>248 MB</td>
                                        <td>
                                            <img src="assets\images\users\avatar-4.jpg" alt="task-user"
                                                class="avatar-sm img-thumbnail rounded-circle">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
