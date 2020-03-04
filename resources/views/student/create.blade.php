@extends('layouts.view')
@section('content')
<div class="main" style="min-height:600px;display:flex;align-items:center;padding:20px;">

    <form class="form-horizontal form-label-left" style="width:100%;" novalidate action="{{route('store.student')}}"
        method="post" enctype="multipart/form-data">
        @csrf

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                    class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" value="{{ old('name') }}" class="form-control col-md-7 col-xs-12"
                    name="name" required="required" type="text">
            </div>
        </div>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dept">Department<span
                    class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" value="{{ old('dept') }}" name="dept"
                    required="required">
                    <option value="" disabled selected>Choose option</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="CE">CE</option>
                    <option value="ICE">ICE</option>
                    <option value="BBA">BBA</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="LAW">LAW</option>
                </select>
            </div>
        </div>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dept_id">Department ID
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="dept_id" value="{{ old('dept_id') }}"
                    class="form-control col-md-7 col-xs-12" name="dept_id" required="required"
                    type="number">
            </div>
        </div>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="batch">Batch<span
                    class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" value="{{ old('batch') }}" name="batch" required>
                    <option value="" disabled selected>Choose option</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                    <option value="9th">9th</option>
                    <option value="10th">10th</option>
                    <option value="11th">11th</option>
                    <option value="12th">12th</option>
                    <option value="13th">13th</option>
                    <option value="14th">14th</option>
                    <option value="15th">15th</option>
                    <option value="16th">16th</option>
                    <option value="17th">17th</option>
                    <option value="18th">18th</option>
                    <option value="19th">19th</option>
                    <option value="20th">20th</option>
                </select>
            </div>
        </div>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Session<span
                    class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" value="{{ old('session') }}" name="session" class="form-control"
                     required="required">
            </div>
        </div>



        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                    class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email" value="{{ old('email') }}" name="email"
                    required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_phone">Student
                Phone No <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="student_phone" value="{{ old('student_phone') }}"
                    class="form-control col-md-7 col-xs-12" name="student_phone" pattern="[0-9-]"
                    type="text" required>
            </div>
        </div>


        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Register Student</button>
            </div>
        </div>
    </form>
</div>

@endsection
