@extends('panel.layout.index')
@section('main')
    @push('panel_css')

        <style>
            .ckbox-inline {
                display: inline-block !important;
            }

            .ckbox label {
                font-size: 15px;
            }

            .label {
                margin-top: 5px !important;
                display: inline-block !important;
            }

            fieldset {
                border: 1px solid #ccc !important;
                margin: 10px 0px 65px !important;
                padding: 25px 10px 10px 10px !important;
                border-radius: 10px;
                position: relative;
            }

            fieldset .ckbox-fs {
                display: inline-block;
                position: absolute;
                top: -10px;
                right: -5px;
            }
        </style>
    @endpush

    <div class="pageheader">
        <h2><i class="fa fa-home"></i> الصفحة الرئيسية<span> الصلاحيات /  إضافة مجموعة صلاحيات </span></h2>
    </div>
    <div class="contentpanel">
        <div class="row">
            {!! Form::open(['id'=>'form','url'=>admin_url('role/create'),'to'=>admin_url('role/all')]) !!}
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label" style="text-align: center">إسم المجموعة :</label>
                                <input type="text" name="name" class="form-control" required/>
                            </div>

                            <div class="form-group">
                                <label class=" control-label" style="text-align: center">وصف المجموعة :</label>
                                <textarea class="form-control" rows="5" name="description" required></textarea>
                            </div>

                            <div style="margin-top: 40px" class="roles">

                                <h4>تصنيفات الدورات</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input id="categories" type="checkbox"/>
                                        <label for="categories"></label>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="add_categories" class="categories"
                                                   name="permissions[]" value="add_categories"/>
                                            <label for="add_categories">إضافة / تعديل التصنيفات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_categories" class="categories"
                                                   name="permissions[]" value="delete_categories"/>
                                            <label for="delete_categories">حذف التصنيفات</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_categories" class="categories"
                                                   name="permissions[]" value="view_categories"/>
                                            <label for="view_categories">عرض التصنيفات</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>دورات الإدارة</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input id="panel_course" type="checkbox"/>
                                        <label for="panel_course"></label>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="add_course" class="panel_course"
                                                   name="permissions[]" value="add_panel_course"/>
                                            <label for="add_course">إضافة / تعديل الدورات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="accept_course" class="panel_course"
                                                   name="permissions[]" value="accept_panel_course"/>
                                            <label for="accept_course">قبول / رفض الدورات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_course" class="panel_course"
                                                   name="permissions[]" value="delete_panel_course"/>
                                            <label for="delete_course">حذف الدورات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_course" class="panel_course"
                                                   name="permissions[]" value="view_panel_course"/>
                                            <label for="view_course">عرض الدورات</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h4>دورات المدربين</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="front_course"/>
                                        <label for="front_course"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="accept_front_course" class="front_course"
                                                   name="permissions[]" value="accept_front_course"/>
                                            <label for="accept_front_course">قبول / رفض الدورات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_front_course" class="front_course"
                                                   name="permissions[]" value="delete_front_course"/>
                                            <label for="delete_front_course">حذف الدورات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_front_course" class="front_course"
                                                   name="permissions[]" value="view_front_course"/>
                                            <label for="view_front_course">عرض الدورات</label>
                                        </div>
                                    </div>

                                </fieldset>

                                <h4>إشتراكات الدورات</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="subscription"/>
                                        <label for="subscription"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_subscription" class="subscription"
                                                   name="permissions[]" value="view_subscription"/>
                                            <label for="view_subscription">عرض جميع الإشتراكات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="cancel_subscription" class="subscription"
                                                   name="permissions[]" value="cancel_subscription"/>
                                            <label for="cancel_subscription">إلغاء الإشتراك</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>الصفحات الترويجية</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="landing_page"/>
                                        <label for="landing_page"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="add_landing_page" class="landing_page"
                                                   name="permissions[]" value="add_landing_page"/>
                                            <label for="add_landing_page">إضافة / تعديل الصفحات </label>
                                        </div>
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_landing_page" class="landing_page"
                                                   name="permissions[]" value="delete_landing_page"/>
                                            <label for="delete_landing_page">حذف الصفحات</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_landing_page" class="landing_page"
                                                   name="permissions[]" value="view_landing_page"/>
                                            <label for="view_landing_page">عرض جميع الصفحات</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>حسابات الإدارة</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="admin"/>
                                        <label for="admin"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="add_admin" class="admin"
                                                   name="permissions[]" value="add_admin"/>
                                            <label for="add_admin">إضافة / تعديل الحساب </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_admin" class="admin"
                                                   name="permissions[]" value="delete_admin"/>
                                            <label for="delete_admin">حذف الحساب</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_admin" class="admin"
                                                   name="permissions[]" value="view_admin"/>
                                            <label for="view_admin">عرض جميع الحسابات</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>حسابات المستخدمين</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="user"/>
                                        <label for="user"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="add_user" class="user" name="permissions[]" value="add_user"/>
                                            <label for="add_user">إضافة / تعديل الحساب </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_user" class="user"
                                                   name="permissions[]" value="delete_user"/>
                                            <label for="delete_user">حذف الحساب</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="band_user" class="user"
                                                   name="permissions[]" value="band_user"/>
                                            <label for="band_user">حظر الحساب</label>
                                        </div>
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_user" class="user"
                                                   name="permissions[]" value="view_user"/>
                                            <label for="view_user">عرض جميع الحسابات</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>طلبات الإنضمام كمدربين</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="trainer"/>
                                        <label for="trainer"></label>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="accept_trainer" class="trainer" name="permissions[]" value="accept_trainer"/>
                                            <label for="accept_trainer">قبول / رفض الطلبات </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_trainer" class="trainer" name="permissions[]" value="delete_trainer"/>
                                            <label for="delete_trainer">حذف الطلبات</label>
                                        </div>
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_trainer" class="trainer" name="permissions[]" value="view_trainer"/>
                                            <label for="view_trainer">عرض جميع الطلبات</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h4>المجموعات والصلاحيات</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="role"/>
                                        <label for="role"></label>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="add_role" class="role"
                                                   name="permissions[]" value="add_role"/>
                                            <label for="add_role">إضافة / تعديل مجموعة </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_role" class="role" name="permissions[]" value="delete_role"/>
                                            <label for="delete_role">حذف الصفحات</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_role" class="role" name="permissions[]" value="view_role"/>
                                            <label for="view_role">عرض جميع المجموعات</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>سحوبات المستخدمين</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="withdraw"/>
                                        <label for="withdraw"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="accept_withdraw" class="withdraw" name="permissions[]" value="accept_withdraw"/>
                                            <label for="accept_withdraw">قبول / رفض السحوبات </label>
                                        </div>
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_withdraw" class="withdraw" name="permissions[]" value="delete_withdraw"/>
                                            <label for="delete_withdraw">حذف </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_withdraw" class="withdraw" name="permissions[]" value="view_withdraw"/>
                                            <label for="view_withdraw">عرض جميع السحوبات </label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>إشعارات المستخدمين</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="notifications"/>
                                        <label for="notifications"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="send_notifications" class="notifications" name="permissions[]" value="send_notifications"/>
                                            <label for="send_notifications">إرسال الإشعارات</label>
                                        </div>
                                    </div>

                                </fieldset>


                                <h4>رسائل الزوار</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="inbox"/>
                                        <label for="inbox"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="send_inbox" class="inbox" name="permissions[]" value="send_inbox"/>
                                            <label for="send_inbox">إرسال بريد إلكتروني </label>
                                        </div>
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="delete_inbox" class="inbox" name="permissions[]" value="delete_inbox"/>
                                            <label for="delete_inbox">حذف الرسائل</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_inbox" class="inbox" name="permissions[]" value="view_inbox"/>
                                            <label for="view_inbox">عرض جميع الرسائل</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>شحن الرصيد </h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="credit"/>
                                        <label for="credit"></label>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="view_credit" class="credit" name="permissions[]" value="view_credit"/>
                                            <label for="view_credit">عرض الدفعات </label>
                                        </div>
                                    </div>

                                </fieldset>

                                <h4> صفحات الموقع </h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="page"/>
                                        <label for="page"></label>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="edit_page" class="page" name="permissions[]" value="edit_page"/>
                                            <label for="edit_page">تعديل الصفحات </label>
                                        </div>
                                    </div>

                                </fieldset>

                                <h4>إعدادات القوالب</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="template"/>
                                        <label for="template"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="setting_template" class="template" name="permissions[]" value="setting_template"/>
                                            <label for="setting_template">تعديل إعدادات الموقع </label>
                                        </div>
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="social_template" class="template" name="permissions[]" value="social_template"/>
                                            <label for="social_template">تعديل مواقع التواصل الإجتماعي</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="main_template" class="template" name="permissions[]" value="main_template"/>
                                            <label for="main_template">تعديل الصفحة الرئيسية</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="course_template" class="template" name="permissions[]" value="course_template"/>
                                            <label for="course_template">تعديل صفحة الدورات</label>
                                        </div>
                                    </div>
                                </fieldset>


                                <h4>ثوابت الموقع</h4>
                                <fieldset>
                                    <div class="ckbox ckbox-warning ckbox-fs">
                                        <input type="checkbox" id="constant"/>
                                        <label for="constant"></label>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" id="country_constant" class="constant" name="permissions[]" value="country_constant"/>
                                            <label for="country_constant">تعديل الدول </label>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row btn-padding">
                            <button style="width: 80%" class=" btn btn-primary">إضافة&nbsp; &nbsp; <i
                                        style="top: inherit;left: AUTO;"
                                        class="upload-spinn fa fa-cog fa-spin fa-1x fa-fw  hidden"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


    @push('panel_js')
        {!! HTML::script('/front/js/jquery.validate.min.js') !!}
        {!! HTML::script('/front/js/validate-ar.js') !!}
        {!! HTML::script('/front/js/errors.js') !!}
        {!! HTML::script('/panel/js/check-all.js') !!}
        {!! HTML::script('panel/js/simple_form.js') !!}
    @endpush
@stop