@extends("layouts.admin")
@section("page_title", 'إضافة خبر جديد')
@section("page_header_title", "")
@section("page_level_styles")
<link href="{!! url('public/assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css" />
@end
@section("page_level_script_plugins")
<script src="{!! url('public/assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
<script src="{!! url('public/assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('public/assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('public/assets/admin/pages/scripts/form-validation-md.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('public/assets/admin/mine/generic.js') !!}" type="text/javascript"></script>
<script>
    var custom_config = {
        messages: {
            title_ar: {required: "من فضلك قم بملء هذا الحقل"},
            title_en: {required: "من فضلك قم بملء هذا الحقل"},
            content_ar: {required: "من فضلك قم بملء هذا الحقل"},
            content_en: {required: "من فضلك قم بملء هذا الحقل"},
            logo: {required: "من فضلك قم بملء هذا الحقل"},
            year_id: {required: "من فضلك قم بملء هذا الحقل"},
        },
        rules: {
            title_ar: {required: true},
            title_en: {required: true},
            content_ar: {required: true},
            content_en: {required: true},
            image: {required: true},
            year_id: {required: true}
        }
    };
</script>
@stop
@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">إضافة خبر جديد
                </div>
            </div>
            <div class="portlet-body">
                @if($id == 0)
                @php($action = url('/admin/materials'))
                @else
                @php($action = url('/admin/materials/apply_update'). "/" . $id)
                <input type="hidden" value="materials/show/{{ $id }}" id="show_link">
                @endif
                <!-- BEGIN FORM   -->
                <form action="{{ $action }}" enctype="multipart/form-data" class="form-horizontal" id="current_form" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" value="{{ $id }}" />
                    <input type="hidden" id="course_id" name="course_id" value="{{ $course_id }}" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> لديك بعض المشاكل, من فضلك قم بالمراجعة أولا </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> تم إدخال البيانات بصورة صحيحة  </div>
                        

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">صورة الماتريال
                                
                            </label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                    <div>
                                        <span class="btn red btn-outline btn-file">
                                            <span class="fileinput-new"> اختر صورة </span>
                                            <span class="fileinput-exists"> تغيير </span>
                                            <input type="file" name="logo" id="logo" > </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="form_control_1">الملف 
                                
                            </label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn green btn-file">
                                        <span class="fileinput-new"> اختر ملف </span>
                                        <span class="fileinput-exists"> تغيير </span>
                                        <input type="file" name="file"> </span>
                                    <span class="fileinput-filename"> </span> &nbsp;
                                    <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الفيديو
                                
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="video" id="video">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل الفيديو</span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">إسم الماتريال بالعربية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="title_ar" id="title_ar">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل إسم الماتريال بالعربية</span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">إسم الماتريال بالإنجليزية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="title_en" id="title_en">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل إسم الماتريال بالإنجليزية</span>
                            </div>
                        </div>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الماتريال بالعربية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                            <textarea class="form-control" placeholder="" name="content_ar" id="content_ar" rows="5"></textarea>                                
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل الماتريال بالعربية</span>
                            </div>
                        </div>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الماتريال بالإنجليزية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" placeholder="" name="content_en" id="content_en" rows="5"></textarea>                                
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل الماتريال بالإنجليزية</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">حفظ</button>                                
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>

</div>
@stop