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
    <div class="d-client-info">
        <div class="d-client-profile">
            <div class="d-client-profile-main">
                <div class="d-profile-image">
                    <img src="{{ URL::to('/') }}/images/sample_photo.jpeg" alt="">
                    <div class="d-profile-details">
                        <h2>{{ $client['name'] }}</h2>
                        <div class="d-client-special">{{ $client['focus'] }}</div>
                        <div class="d-client-remainig-time"><strong>120</strong> hours <strong>35</strong> minutes remaining</div>
                        <div class="d-client-signi-date">signed in <strong>{{ $client['signed'] }}</strong></div>
                        <div class="d-client-star-task">
                            <button>Start Client Task</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-daily-spent">
                <h3>Daily Time Spent</h3>
                <div class="daily-stats">
                    <div class="d-daily-bar">
                        <div class="d-bar" style="height: 0%; margin-top: 200px;">&nbsp;</div>
                        <div class="d-bar" style="height: 80px; margin-top: 120px;">&nbsp;</div>
                        <div class="d-bar" style="height: 180px; margin-top: 20px;">&nbsp;</div>
                        <div class="d-bar" style="height: 140px; margin-top: 60px;">&nbsp;</div>
                        <div class="d-bar" style="height: 100px; margin-top: 100px;">&nbsp;</div>
                        <div class="d-bar" style="height: 120px; margin-top: 80px;">&nbsp;</div>
                        <div class="d-bar" style="height: 0px; margin-top: 200px;">&nbsp;</div>
                    </div>
                    <div class="d-daily-label">
                        <div class="d-text">Sun</div>
                        <div class="d-text">Mon</div>
                        <div class="d-text">Tue</div>
                        <div class="d-text">Wed</div>
                        <div class="d-text">Thu</div>
                        <div class="d-text">Fri</div>
                        <div class="d-text">Sat</div>
                    </div>
                </div>
            </div>
            <div class="d-team-members">
                <h3>Team Members</h3>
                <div class="team-member-list">
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                    <div class="team-member-item"><span>AB</span></div>
                </div>
            </div>
        </div>
        <div class="d-client-task">
            @if($segment == 'add_task')
                <h3>Add New Task</h3>
                <div class="d-segment-item add-new-task">
                    <div class="add-new-task-inner">
                        <form action="" method="post">
                            @csrf
                            <div class="d-add-notes">
                                This ticket will be added as a new backlog item
                            </div>
                            <div class="d-add-task-item">
                                <label for="">Task Name</label>
                                {{ Form::text('task_name'); }}
                            </div>
                            <div class="d-add-task-item">
                                <label for="">Task Description</label>
                                {{ Form::textarea('task_desc'); }}
                            </div>
                            <div class="d-add-task-item submit-form-butotn">
                                <input type="submit" value="save">
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            @if($segment == 'info')
                <h3 class="d-backlog-header">Backlog Task <a href="">Add New Task</a></h3>
                <div class="d-pending-tasks">
                    <div class="no-backlog-itme">No Task in Backlog</div>
                </div>
                <h3>Work In Progress</h3>
                <div class="d-pending-tasks">
                    <div class="d-pending-items">
                        <div class="d-pending-title">Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="d-pending-options">
                            <button class="start-task-button">Start</button>
                            <button class="finish-task-button">Finish</button>
                            <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                        </div>
                        <div class="d-pending-desc"><span><i class="fa-solid fa-highlighter"></i></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a rhoncus erat. Vivamus ut massa vitae mauris convallis iaculis. Donec purus odio, imperdiet vel luctus at, aliquet eget eros. Pellentesque varius condimentum justo, quis blandit nibh posuere id. Mauris ac ultrices lectus. Aenean cursus ac sapien vitae ultricies.</div>
                    </div>
                    <div class="d-pending-items">
                        <div class="d-pending-title">Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="d-pending-options">
                            <button class="start-task-button">Start</button>
                            <button class="finish-task-button">Finish</button>
                            <div class="d-pending-sent"><span><i class="fa-solid fa-stopwatch"></i></span> 0 hours 20 minutes spent</div>
                        </div>
                        <div class="d-pending-desc"><span><i class="fa-solid fa-highlighter"></i></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a rhoncus erat. Vivamus ut massa vitae mauris convallis iaculis. Donec purus odio, imperdiet vel luctus at, aliquet eget eros. Pellentesque varius condimentum justo, quis blandit nibh posuere id. Mauris ac ultrices lectus. Aenean cursus ac sapien vitae ultricies.</div>
                    </div>
                </div>
                
                <h3>Implemented Task</h3>
                <div class="d-task-list">
                    <div class="d-task-list-item">
                        <div class="task-title">Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="d-task-stats">
                            <div class="task-implemented"><span><i class="fa-solid fa-calendar-check"></i></span> November 28, 2023</div>
                            <div class="task-spent"><span><i class="fa-solid fa-hourglass-half"></i></span> <strong>3</strong> hours <strong>2</strong> minutes spent</div>
                            <div class="task-assigned"><span><i class="fa-solid fa-person-circle-check"></i></span> John Peter Doe</div>
                        </div>
                        <div class="task-desc"><span><i class="fa-solid fa-highlighter"></i></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a rhoncus erat. Vivamus ut massa vitae mauris convallis iaculis. Donec purus odio, imperdiet vel luctus at, aliquet eget eros. Pellentesque varius condimentum justo, quis blandit nibh posuere id. Mauris ac ultrices lectus. Aenean cursus ac sapien vitae ultricies.</div>
                    </div>

                    <div class="d-task-list-item">
                        <div class="task-title">Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="d-task-stats">
                            <div class="task-implemented"><span><i class="fa-solid fa-calendar-check"></i></span> April 28, 2023</div>
                            <div class="task-spent"><span><i class="fa-solid fa-hourglass-half"></i></span> <strong>3</strong> hours <strong>2</strong> minutes spent</div>
                            <div class="task-assigned"><span><i class="fa-solid fa-person-circle-check"></i></span> John Peter Doe</div>
                        </div>

                        <div class="task-desc"><span><i class="fa-solid fa-highlighter"></i></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a rhoncus erat. Vivamus ut massa vitae mauris convallis iaculis. Donec purus odio, imperdiet vel luctus at, aliquet eget eros. Pellentesque varius condimentum justo, quis blandit nibh posuere id. Mauris ac ultrices lectus. Aenean cursus ac sapien vitae ultricies.</div>
                    </div>

                    <div class="d-task-list-item">
                        <div class="task-title">Lorem ipsum dolor sit amet, consectetur</div>
                        <div class="d-task-stats">
                            <div class="task-implemented"><span><i class="fa-solid fa-calendar-check"></i></span> January 28, 2023</div>
                            <div class="task-spent"><span><i class="fa-solid fa-hourglass-half"></i></span> <strong>3</strong> hours <strong>2</strong> minutes spent</div>
                            <div class="task-assigned"><span><i class="fa-solid fa-person-circle-check"></i></span> John Peter Doe</div>
                        </div>
                        <div class="task-desc"><span><i class="fa-solid fa-highlighter"></i></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a rhoncus erat. Vivamus ut massa vitae mauris convallis iaculis. Donec purus odio, imperdiet vel luctus at, aliquet eget eros. Pellentesque varius condimentum justo, quis blandit nibh posuere id. Mauris ac ultrices lectus. Aenean cursus ac sapien vitae ultricies.</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section ('scripts')
    
@endsection