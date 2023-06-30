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
                    <div class="d-oj-page-title">Client List</div>
                    <div class="d-oj-page-sub-title">List of active clients up to date</div>
                </div>
                <div class="d-header-options">
                    <a href="/dashboard/client/add">Add new Client</a>
                </div>
            </div>
            <div class="d-main-content-part">
                <div class="d-mcp-inner">
                    <div class="d-client-list">
                        <div class="d-client-list-header">
                            <div class="d-client-item client-one-item">ID</div>
                            <div class="d-client-item client-two-item">Details</div>
                            <div class="d-client-item client-three-item">Package</div>
                            <div class="d-client-item client-four-item">Team</div>
                            <div class="d-client-item client-five-item">&nbsp;</div>
                        </div>
                        <div class="d-client-list-content">
                            @foreach ($clients as $key => $item)
                                <div class="d-client-list-item">
                                    <div class="d-client-item client-one-item">{{ $item['id'] }}</div>
                                    <div class="d-client-item client-two-item">
                                        <div class="d-client-name">{{ $item['name'] }}</div>
                                        <div class="d-client-email">{{ $item['email'] }}</div>
                                        <div class="d-client-contact">{{ $item['contact'] }}</div>
                                        <div class="d-client-signed">Signed date: {{ $item['signed'] }}</div>
                                        <div class="d-client-focus">{{ $item['focus'] }}</div>
                                    </div>
                                    <div class="d-client-item client-three-item">
                                        <div class="d-client-package">{{ $item['package'] }}</div>
                                    </div>
                                    <div class="d-client-item client-four-item">
                                        @if (empty($item['team']))
                                            <div class="d-no-teams">No team member yet</div>
                                        @else
                                            <div class="d-with-teams">Show team members</div>
                                        @endif
                                    </div>
                                    <div class="d-client-item client-five-item">
                                        <a href="/dashboard/client/{{ $item['id'] }}">View Client</a>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        <div class="d-client-list-footer"></div>
                    </div>
                </div>
            </div>
            


        </div>
    </div>
@endsection

@section ('scripts')
    
@endsection