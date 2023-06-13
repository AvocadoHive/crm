@extends ('layouts/dashboard')

@section ('styles')
    <link href="{{ asset('css/dashindex.css') }}" rel="stylesheet">
@endsection

@section ('breadcrumbs')
    <ul>
        <li class="d-old"><a href="#">Dashboard</a></li>
    </ul>
@endsection

@section ('content')
    <div class="d-user-main">
        <div class="d-user-inner">
            <div class="d-section-base section-third">

                <div class="d-card-item">
                    <div class="d-card-inner talent-info-card">
                        <div class="d-talent-info">
                            <div class="d-profile-image" style="background: url({{ URL::to('/') }}/images/dro.png) no-repeat center center">&nbsp;</div>
                            <div class="talent-name">Drobert Eirven Latasa</div>
                            <div class="talent-deligation">Virtual Assistant</div>
                        </div>
                        <div class="d-attendance-options">
                            <button>Clock in</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-section-base section-third">
                <div class="d-card-item">

                    <div class="d-card-inner team-clients">
                        <div class="d-card-header">
                            <strong>Sam Smith</strong>
                            <div class="d-client-remainig-time"><strong>120</strong> hours <strong>35</strong> minutes remaining</div>
                        </div>
                        <div class="d-task-list">
                            <div class="d-task-item">
                                <div class="task-title"><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
                                <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                            </div>

                            <div class="d-task-item">
                                <div class="task-title"><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
                                <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                            </div>

                            <div class="d-task-item">
                                <div class="task-title"><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
                                <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                            </div>
                        </div>
                        <div class="d-client-toptions">
                            <a href="/client">See client profile</a>
                        </div>
                    </div>

                    <div class="d-card-inner team-clients">
                        <div class="d-card-header">
                            <strong>Anthony Stark</strong>
                            <div class="d-client-remainig-time"><strong>120</strong> hours <strong>35</strong> minutes remaining</div>
                        </div>
                        <div class="d-task-list">
                            <div class="d-task-item">
                                <div class="task-title"><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
                                <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                            </div>

                            <div class="d-task-item">
                                <div class="task-title"><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
                                <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                            </div>

                            <div class="d-task-item">
                                <div class="task-title"><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
                                <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                            </div>

                            <div class="d-task-item">
                                <div class="task-title"><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
                                <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                            </div>

                        </div>
                        <div class="d-client-toptions">
                            <a href="/client">See client profile</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-section-base section-third">
                
                <div class="d-card-inner team-clients">
                    <div class="d-card-header">
                        <strong>Activity Logs</strong>
                        <div class="d-activity-desc">Trace your steps</div>
                    </div>
                    <div class="d-activity-logs">
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                        <div class="d-ac-separator"><i class="fa-solid fa-ellipsis"></i></div>
                        <div class="d-activity-entry">
                            <div class="d-ac-icon"><i class="fa-solid fa-stopwatch"></i></div>
                            <div class="d-ac-info">
                                <div class="d-ac-date">May 13, 2023 9:09am</div>
                                <div class="d-ac-desc">User started <span class="d-ac-ticker">Lorem ipsum dolor sit amet, consectetur</span> ticker for <span class="d-ac-client">Sam Smith</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection