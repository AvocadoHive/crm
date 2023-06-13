@extends ('layouts/dashboard')

@section ('styles')
    <link href="{{ asset('css/applicants.css') }}" rel="stylesheet">
@endsection

@section ('breadcrumbs')
    <ul>
        <li class="d-old"><a href="#">Dashboard</a></li>
        <li class="d-separator"><i class="fa-solid fa-chevron-right"></i></li>
        <li class="d-current"><a href="#">Client</a></li>
    </ul>
@endsection

@section ('content')
    <div class="d-open-jobs">
        <div class="d-open-jobs-inner">
            <div class="d-oj-header">
                <div class="d-header-info">
                    <div class="d-oj-page-title">Job Opportunities</div>
                    <div class="d-oj-page-sub-title">Job opportunities that we are offering</div>
                </div>
                <div class="d-header-options">
                    <button>Add new Job</button>
                </div>
            </div>
            <div class="d-job-offering-part">
                <div class="d-job-offering-inner">
                    <div class="d-job-offer-item">
                        
                    </div>
                </div>
            </div>
            


        </div>
    </div>
@endsection

@section ('scripts')
    
@endsection