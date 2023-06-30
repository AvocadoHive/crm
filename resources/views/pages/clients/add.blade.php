@extends ('layouts/dashboard')

@section ('styles')
    <link href="{{ asset('css/clients.css') }}" rel="stylesheet">
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
                    <div class="d-oj-page-title">Add new Client</div>
                    <div class="d-oj-page-sub-title">List of active clients up to date</div>
                </div>
                <div class="d-header-options cancel-button">
                    <a href="/dashboard/client/list/1">Cancel</a>
                </div>
            </div>
            <div class="d-main-content-part">
                <div class="d-mcp-inner">
                    <div class="d-add-client-form">
                        <form action="" method="post">
                            @csrf
                            <div class="d-add-client-item">
                                <label for="">Client Name</label>
                                {{ Form::text('name'); }}
                            </div>
                            <div class="d-add-client-item">
                                <label for="">Client Email</label>
                                {{ Form::text('email'); }}
                            </div>
                            <div class="d-add-client-item">
                                <label for="">Client Contact</label>
                                {{ Form::text('contact'); }}
                            </div>
                            <div class="d-add-client-item">
                                <label for="">Date Signed</label>
                                <div class="d-client-date-signed">
                                    <div class="d-sig-month">
                                        {!! Form::selectMonth('month',null,['class' => 'form-control']) !!}
                                    </div>
                                    <div class="d-sig-day">
                                        {{ Form::selectRange('date', 1, 31); }}
                                    </div>
                                    <div class="d-sig-year">
                                        {{ Form::selectYear('year', 2022, 2023) }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-add-client-item">
                                <label for="">Focus</label>
                                {{ Form::text('focus'); }}
                            </div>
                            <div class="d-add-client-item">
                                <label for="">Package</label>
                                {{ Form::select('package', ['lite' => 'Lite', 'persea' => 'Persea', 'honeycomb' => 'Honeycomb', 'avocado' => 'Avocado', 'custom' => 'Customized Hive'], 'lite'); }}
                            </div>
                            <div class="d-add-client-item save_form">
                                <input type="submit" value="Save Client">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
            


        </div>
    </div>
@endsection

@section ('scripts')
    
@endsection