@extends('Employer.master')

@section('body')

    <div class="page-content-area">
        <!-- Dashboard Section -->
        <section class="section-padding dashboard-section mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-box">
                        <div class="dash-data-card mb-0 boxshadow-none">
                            <div class="active-job-area">
                                <div class="active-job-img">
                                    <img src="{{asset('assets')}}/images/dashboard/skill/google.svg" alt="">
                                </div>
                                <h5>Sixtheeth Telecom</h5>
                                <p>Since : 5 Year</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-box">
                        <div class="active-job-list-box">
                            @foreach($active_job as $val)
                                @if(isset($val['job_status']) == 1)
                                    <div class="actjob-box">
                                        <a href="{{url('/employer-job-listing')}}/{{$val->id}}" class="actjob-left">
                                            <div class="actjob-img">
                                                <img src="{{asset('assets')}}/images/dashboard/skill/google.svg" alt="">
                                            </div>
                                            <div class="actjob-detail">
                                                <h5>{{$val->job_title}}</h5>
                                                <ul>
                                                    <li><img src="assets/images/dashboard/jobs/location.svg" alt=""><span>{{$val->city}}, {{$val->state}}.</span></li>
                                                    <li><img src="assets/images/dashboard/jobs/email.svg" alt=""><span>Experience : {{$val->min_experience}},{{$val->max_experience}}</span></li>
                                                    <li><img src="assets/images/dashboard/jobs/rupee.svg" alt=""><span>Salary : {{$val->min_salary}}-{{$val->max_salary}}</span></li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="act-badge-button">
                                            <div class="act-actions">
                                                <a href="{{url('/employer-edit-post')}}/{{$val->id}}" class="act-btn edit-act"><img src="assets/images/dashboard/post/edit.svg" alt=""></a>
                                                <button class="act-btn reshape-act successalert"><img src="assets/images/dashboard/post/reshape.svg" alt=""></button>
                                                <button class="act-btn delete-act deletalert"><img src="assets/images/dashboard/post/delete.svg" alt=""></button>
                                            </div>
                                            <div class="act-tags">
                                                <div class="act-tag {{ ($val->job_type == 'Permanent') ? 'blue-tag' : 'yellow-tag' }}">{{ ($val->job_type == 'Permanent') ? 'Full Time' : 'Part Time' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="no_active_jobs">No Saved Jobs Found.</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="dash-pagination pagination-right">

                            {{$active_job->links('Jobseeker/pagination')}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection