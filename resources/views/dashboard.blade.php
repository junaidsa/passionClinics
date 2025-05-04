@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>Appointments</span>
                      <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2 text-center">0</h4>
                      </div>
                    </div>
                    <span class="badge bg-label-primary rounded p-2">
                      <i class="ti ti-user ti-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>Total  Staff</span>
                      <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2">0</h4>
                      </div>
                    </div>
                    <span class="badge bg-label-danger rounded p-2">
                      <i class="ti ti-user-plus ti-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>New Customer</span>
                      <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2">0</h4>
                      </div>
                    </div>
                    <span class="badge bg-label-success rounded p-2">
                      <i class="ti ti-user-check ti-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                      <span>Durations</span>
                      <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2">0.00</h4>
                      </div>
                    </div>
                    <span class="badge bg-label-warning rounded p-2">
                      <i class="ti ti-user-exclamation ti-sm"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card app-calendar-wrapper">
            <div class="row g-0">
              <!-- Calendar Sidebar -->
              <div class="col app-calendar-sidebar" id="app-calendar-sidebar">
                <div class="border-bottom p-4 my-sm-0 mb-3">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-toggle-sidebar waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#addEventSidebar" aria-controls="addEventSidebar">
                      <i class="ti ti-plus me-1"></i>
                      <span class="align-middle">Create Appointment</span>
                    </button>
                  </div>
                </div>
                <div class="p-3">
                  <!-- inline calendar (flatpicker) -->
                  <div class="inline-calendar flatpickr-input" readonly="readonly"></div><div class="flatpickr-calendar animate inline" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">May </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
  <span class="flatpickr-weekday">
    Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
  </span>
  </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="April 27, 2025" tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="April 28, 2025" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="April 29, 2025" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="April 30, 2025" tabindex="-1">30</span><span class="flatpickr-day today" aria-label="May 1, 2025" aria-current="date" tabindex="-1">1</span><span class="flatpickr-day" aria-label="May 2, 2025" tabindex="-1">2</span><span class="flatpickr-day" aria-label="May 3, 2025" tabindex="-1">3</span><span class="flatpickr-day" aria-label="May 4, 2025" tabindex="-1">4</span><span class="flatpickr-day" aria-label="May 5, 2025" tabindex="-1">5</span><span class="flatpickr-day" aria-label="May 6, 2025" tabindex="-1">6</span><span class="flatpickr-day" aria-label="May 7, 2025" tabindex="-1">7</span><span class="flatpickr-day" aria-label="May 8, 2025" tabindex="-1">8</span><span class="flatpickr-day" aria-label="May 9, 2025" tabindex="-1">9</span><span class="flatpickr-day" aria-label="May 10, 2025" tabindex="-1">10</span><span class="flatpickr-day" aria-label="May 11, 2025" tabindex="-1">11</span><span class="flatpickr-day" aria-label="May 12, 2025" tabindex="-1">12</span><span class="flatpickr-day" aria-label="May 13, 2025" tabindex="-1">13</span><span class="flatpickr-day" aria-label="May 14, 2025" tabindex="-1">14</span><span class="flatpickr-day" aria-label="May 15, 2025" tabindex="-1">15</span><span class="flatpickr-day" aria-label="May 16, 2025" tabindex="-1">16</span><span class="flatpickr-day" aria-label="May 17, 2025" tabindex="-1">17</span><span class="flatpickr-day" aria-label="May 18, 2025" tabindex="-1">18</span><span class="flatpickr-day" aria-label="May 19, 2025" tabindex="-1">19</span><span class="flatpickr-day" aria-label="May 20, 2025" tabindex="-1">20</span><span class="flatpickr-day" aria-label="May 21, 2025" tabindex="-1">21</span><span class="flatpickr-day" aria-label="May 22, 2025" tabindex="-1">22</span><span class="flatpickr-day" aria-label="May 23, 2025" tabindex="-1">23</span><span class="flatpickr-day" aria-label="May 24, 2025" tabindex="-1">24</span><span class="flatpickr-day" aria-label="May 25, 2025" tabindex="-1">25</span><span class="flatpickr-day" aria-label="May 26, 2025" tabindex="-1">26</span><span class="flatpickr-day" aria-label="May 27, 2025" tabindex="-1">27</span><span class="flatpickr-day" aria-label="May 28, 2025" tabindex="-1">28</span><span class="flatpickr-day" aria-label="May 29, 2025" tabindex="-1">29</span><span class="flatpickr-day" aria-label="May 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="May 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="June 1, 2025" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="June 2, 2025" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="June 3, 2025" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="June 4, 2025" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="June 5, 2025" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="June 6, 2025" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="June 7, 2025" tabindex="-1">7</span></div></div></div></div></div>

                  <hr class="container-m-nx mb-4 mt-3">

                  <!-- Filter -->
                  <div class="mb-3 ms-3">
                    <small class="text-small text-muted text-uppercase align-middle">Filter</small>
                  </div>

                  <div class="form-check mb-2 ms-3">
                    <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" checked="">
                    <label class="form-check-label" for="selectAll">Approved</label>
                  </div>

                  <div class="app-calendar-events-filter ms-3">
                    <div class="form-check form-check-danger mb-2">
                      <input class="form-check-input input-filter" type="checkbox" id="select-personal" data-value="personal" checked="">
                      <label class="form-check-label" for="select-personal">
                        Pending</label>
                    </div>
                    <div class="form-check mb-2">
                      <input class="form-check-input input-filter" type="checkbox" id="select-business" data-value="business" checked="">
                      <label class="form-check-label" for="select-business">
                        Rescheduled</label>
                    </div>
                    <div class="form-check form-check-warning mb-2">
                      <input class="form-check-input input-filter" type="checkbox" id="select-family" data-value="family" checked="">
                      <label class="form-check-label" for="select-family">
                        Canceled</label>
                    </div>
                    <div class="form-check form-check-success mb-2">
                      <input class="form-check-input input-filter" type="checkbox" id="select-holiday" data-value="holiday" checked="">
                      <label class="form-check-label" for="select-holiday">Rejected</label>
                    </div>
                    <div class="form-check form-check-info">
                      <input class="form-check-input input-filter" type="checkbox" id="select-etc" data-value="etc" checked="">
                      <label class="form-check-label" for="select-etc">
                        Completed</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Calendar Sidebar -->

              <!-- Calendar & Modal -->
              <div class="col app-calendar-content">
                <div class="card shadow-none border-0">
                  <div class="card-body pb-0">
                    <!-- FullCalendar -->
                    <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-standard"><div class="fc-header-toolbar fc-toolbar "><div class="fc-toolbar-chunk"><div class="fc-button-group"><button type="button" title="Sidebar" aria-pressed="false" class="fc-sidebarToggle-button fc-button d-lg-none d-inline-block ps-0" data-bs-toggle="sidebar" data-overlay="" data-target="#app-calendar-sidebar"><i class="ti ti-menu-2 ti-sm"></i></button><button type="button" aria-pressed="false" class="fc--button fc-button fc-button-primary"></button></div><div class="fc-button-group"><button type="button" title="Previous month" aria-pressed="false" class="fc-prev-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-left"></span></button><button type="button" title="Next month" aria-pressed="false" class="fc-next-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-right"></span></button><button type="button" aria-pressed="false" class="fc--button fc-button fc-button-primary"></button></div><h2 class="fc-toolbar-title" id="fc-dom-1">May 2025</h2></div><div class="fc-toolbar-chunk"></div><div class="fc-toolbar-chunk"><div class="fc-button-group"><button type="button" title="month view" aria-pressed="true" class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">month</button><button type="button" title="week view" aria-pressed="false" class="fc-timeGridWeek-button fc-button fc-button-primary">week</button><button type="button" title="day view" aria-pressed="false" class="fc-timeGridDay-button fc-button fc-button-primary">day</button><button type="button" title="list view" aria-pressed="false" class="fc-listMonth-button fc-button fc-button-primary">list</button></div></div></div><div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 622.222px;"><div class="fc-daygrid fc-dayGridMonth-view fc-view"><table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid"><thead role="rowgroup"><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header "><th role="presentation"><div class="fc-scroller-harness"><div class="fc-scroller" style="overflow: hidden;"><table role="presentation" class="fc-col-header " style="width: 840px;"><colgroup></colgroup><thead role="presentation"><tr role="row"><th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun"><div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday" class="fc-col-header-cell-cushion ">Sun</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon"><div class="fc-scrollgrid-sync-inner"><a aria-label="Monday" class="fc-col-header-cell-cushion ">Mon</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue"><div class="fc-scrollgrid-sync-inner"><a aria-label="Tuesday" class="fc-col-header-cell-cushion ">Tue</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed"><div class="fc-scrollgrid-sync-inner"><a aria-label="Wednesday" class="fc-col-header-cell-cushion ">Wed</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu"><div class="fc-scrollgrid-sync-inner"><a aria-label="Thursday" class="fc-col-header-cell-cushion ">Thu</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri"><div class="fc-scrollgrid-sync-inner"><a aria-label="Friday" class="fc-col-header-cell-cushion ">Fri</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat"><div class="fc-scrollgrid-sync-inner"><a aria-label="Saturday" class="fc-col-header-cell-cushion ">Sat</a></div></th></tr></thead></table></div></div></th></tr></thead><tbody role="rowgroup"><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid"><td role="presentation"><div class="fc-scroller-harness fc-scroller-harness-liquid"><div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden auto;"><div class="fc-daygrid-body fc-daygrid-body-unbalanced " style="width: 840px;"><table role="presentation" class="fc-scrollgrid-sync-table" style="width: 840px; height: 619px;"><colgroup></colgroup><tbody role="presentation"><tr role="row"><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other" data-date="2025-04-27" aria-labelledby="fc-dom-111"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-111" class="fc-daygrid-day-number" title="Go to April 27, 2025" data-navlink="" tabindex="0">27</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other" data-date="2025-04-28" aria-labelledby="fc-dom-113"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-113" class="fc-daygrid-day-number" title="Go to April 28, 2025" data-navlink="" tabindex="0">28</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other" data-date="2025-04-29" aria-labelledby="fc-dom-115"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-115" class="fc-daygrid-day-number" title="Go to April 29, 2025" data-navlink="" tabindex="0">29</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other" data-date="2025-04-30" aria-labelledby="fc-dom-117"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-117" class="fc-daygrid-day-number" title="Go to April 30, 2025" data-navlink="" tabindex="0">30</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-today " data-date="2025-05-01" aria-labelledby="fc-dom-119"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-119" class="fc-daygrid-day-number" title="Go to May 1, 2025" data-navlink="" tabindex="0">1</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -120px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-end fc-event-today fc-event-primary" tabindex="0"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">2:04a</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Design Review</div></div></div></div></a></div><div class="fc-daygrid-day-bottom" style="margin-top: 29px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2025-05-02" aria-labelledby="fc-dom-121"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-121" class="fc-daygrid-day-number" title="Go to May 2, 2025" data-navlink="" tabindex="0">2</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 29px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2025-05-03" aria-labelledby="fc-dom-123"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-123" class="fc-daygrid-day-number" title="Go to May 3, 2025" data-navlink="" tabindex="0">3</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td></tr><tr role="row"><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2025-05-04" aria-labelledby="fc-dom-125"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-125" class="fc-daygrid-day-number" title="Go to May 4, 2025" data-navlink="" tabindex="0">4</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2025-05-05" aria-labelledby="fc-dom-127"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-127" class="fc-daygrid-day-number" title="Go to May 5, 2025" data-navlink="" tabindex="0">5</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2025-05-06" aria-labelledby="fc-dom-129"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-129" class="fc-daygrid-day-number" title="Go to May 6, 2025" data-navlink="" tabindex="0">6</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2025-05-07" aria-labelledby="fc-dom-131"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-131" class="fc-daygrid-day-number" title="Go to May 7, 2025" data-navlink="" tabindex="0">7</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2025-05-08" aria-labelledby="fc-dom-133"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-133" class="fc-daygrid-day-number" title="Go to May 8, 2025" data-navlink="" tabindex="0">8</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2025-05-09" aria-labelledby="fc-dom-135"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-135" class="fc-daygrid-day-number" title="Go to May 9, 2025" data-navlink="" tabindex="0">9</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2025-05-10" aria-labelledby="fc-dom-137"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-137" class="fc-daygrid-day-number" title="Go to May 10, 2025" data-navlink="" tabindex="0">10</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td></tr><tr role="row"><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2025-05-11" aria-labelledby="fc-dom-139"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-139" class="fc-daygrid-day-number" title="Go to May 11, 2025" data-navlink="" tabindex="0">11</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2025-05-12" aria-labelledby="fc-dom-141"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-141" class="fc-daygrid-day-number" title="Go to May 12, 2025" data-navlink="" tabindex="0">12</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2025-05-13" aria-labelledby="fc-dom-143"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-143" class="fc-daygrid-day-number" title="Go to May 13, 2025" data-navlink="" tabindex="0">13</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2025-05-14" aria-labelledby="fc-dom-145"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-145" class="fc-daygrid-day-number" title="Go to May 14, 2025" data-navlink="" tabindex="0">14</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2025-05-15" aria-labelledby="fc-dom-147"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-147" class="fc-daygrid-day-number" title="Go to May 15, 2025" data-navlink="" tabindex="0">15</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2025-05-16" aria-labelledby="fc-dom-149"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-149" class="fc-daygrid-day-number" title="Go to May 16, 2025" data-navlink="" tabindex="0">16</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2025-05-17" aria-labelledby="fc-dom-151"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-151" class="fc-daygrid-day-number" title="Go to May 17, 2025" data-navlink="" tabindex="0">17</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td></tr><tr role="row"><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2025-05-18" aria-labelledby="fc-dom-153"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-153" class="fc-daygrid-day-number" title="Go to May 18, 2025" data-navlink="" tabindex="0">18</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-warning" tabindex="0"><div class="fc-daygrid-event-dot"></div><div class="fc-event-time">12a</div><div class="fc-event-title">Dinner</div></a></div><div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-info" tabindex="0"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Dart Game?</div></div></div></div><div class="fc-event-resizer fc-event-resizer-start"></div><div class="fc-event-resizer fc-event-resizer-end"></div></a></div><div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-danger" tabindex="0"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Meditation</div></div></div></div><div class="fc-event-resizer fc-event-resizer-start"></div><div class="fc-event-resizer fc-event-resizer-end"></div></a></div><div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-primary" tabindex="0"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Product Review</div></div></div></div><div class="fc-event-resizer fc-event-resizer-start"></div><div class="fc-event-resizer fc-event-resizer-end"></div></a></div><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"><a class="fc-daygrid-more-link fc-more-link" title="Show 2 more events" aria-expanded="false" aria-controls="" tabindex="0">+2 more</a></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2025-05-19" aria-labelledby="fc-dom-155"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-155" class="fc-daygrid-day-number" title="Go to May 19, 2025" data-navlink="" tabindex="0">19</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2025-05-20" aria-labelledby="fc-dom-157"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-157" class="fc-daygrid-day-number" title="Go to May 20, 2025" data-navlink="" tabindex="0">20</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-danger" tabindex="0"><div class="fc-daygrid-event-dot"></div><div class="fc-event-time">12a</div><div class="fc-event-title">Doctor's Appointment</div></a></div><div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-primary" tabindex="0"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Meeting With Client</div></div></div></div><div class="fc-event-resizer fc-event-resizer-start"></div><div class="fc-event-resizer fc-event-resizer-end"></div></a></div><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2025-05-21" aria-labelledby="fc-dom-159"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-159" class="fc-daygrid-day-number" title="Go to May 21, 2025" data-navlink="" tabindex="0">21</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2025-05-22" aria-labelledby="fc-dom-161"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-161" class="fc-daygrid-day-number" title="Go to May 22, 2025" data-navlink="" tabindex="0">22</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -120px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-success" tabindex="0"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Family Trip</div></div></div></div><div class="fc-event-resizer fc-event-resizer-start"></div><div class="fc-event-resizer fc-event-resizer-end"></div></a></div><div class="fc-daygrid-day-bottom" style="margin-top: 29px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2025-05-23" aria-labelledby="fc-dom-163"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-163" class="fc-daygrid-day-number" title="Go to May 23, 2025" data-navlink="" tabindex="0">23</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 29px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2025-05-24" aria-labelledby="fc-dom-165"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-165" class="fc-daygrid-day-number" title="Go to May 24, 2025" data-navlink="" tabindex="0">24</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td></tr><tr role="row"><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2025-05-25" aria-labelledby="fc-dom-167"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-167" class="fc-daygrid-day-number" title="Go to May 25, 2025" data-navlink="" tabindex="0">25</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2025-05-26" aria-labelledby="fc-dom-169"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-169" class="fc-daygrid-day-number" title="Go to May 26, 2025" data-navlink="" tabindex="0">26</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2025-05-27" aria-labelledby="fc-dom-171"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-171" class="fc-daygrid-day-number" title="Go to May 27, 2025" data-navlink="" tabindex="0">27</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2025-05-28" aria-labelledby="fc-dom-173"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-173" class="fc-daygrid-day-number" title="Go to May 28, 2025" data-navlink="" tabindex="0">28</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2025-05-29" aria-labelledby="fc-dom-175"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-175" class="fc-daygrid-day-number" title="Go to May 29, 2025" data-navlink="" tabindex="0">29</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2025-05-30" aria-labelledby="fc-dom-177"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-177" class="fc-daygrid-day-number" title="Go to May 30, 2025" data-navlink="" tabindex="0">30</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2025-05-31" aria-labelledby="fc-dom-179"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-179" class="fc-daygrid-day-number" title="Go to May 31, 2025" data-navlink="" tabindex="0">31</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td></tr><tr role="row"><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other" data-date="2025-06-01" aria-labelledby="fc-dom-181"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-181" class="fc-daygrid-day-number" title="Go to June 1, 2025" data-navlink="" tabindex="0">1</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-primary" tabindex="0"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Monthly Meeting</div></div></div></div><div class="fc-event-resizer fc-event-resizer-start"></div><div class="fc-event-resizer fc-event-resizer-end"></div></a></div><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other" data-date="2025-06-02" aria-labelledby="fc-dom-183"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-183" class="fc-daygrid-day-number" title="Go to June 2, 2025" data-navlink="" tabindex="0">2</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other" data-date="2025-06-03" aria-labelledby="fc-dom-185"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-185" class="fc-daygrid-day-number" title="Go to June 3, 2025" data-navlink="" tabindex="0">3</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other" data-date="2025-06-04" aria-labelledby="fc-dom-187"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-187" class="fc-daygrid-day-number" title="Go to June 4, 2025" data-navlink="" tabindex="0">4</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other" data-date="2025-06-05" aria-labelledby="fc-dom-189"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-189" class="fc-daygrid-day-number" title="Go to June 5, 2025" data-navlink="" tabindex="0">5</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other" data-date="2025-06-06" aria-labelledby="fc-dom-191"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-191" class="fc-daygrid-day-number" title="Go to June 6, 2025" data-navlink="" tabindex="0">6</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other" data-date="2025-06-07" aria-labelledby="fc-dom-193"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-top"><a id="fc-dom-193" class="fc-daygrid-day-number" title="Go to June 7, 2025" data-navlink="" tabindex="0">7</a></div><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td></tr></tbody></table></div></div></div></td></tr></tbody></table></div></div></div>
                  </div>
                </div>
                <div class="app-overlay"></div>
                <!-- FullCalendar Offcanvas -->
                <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar" aria-labelledby="addEventSidebarLabel">
                  <div class="offcanvas-header my-1">
                    <h5 class="offcanvas-title" id="addEventSidebarLabel">Add Appointments</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body pt-0">
                    <form class="event-form pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="appointmentsForm">
                        @php
                        $location = DB::table('locations')->get();
                        $services = DB::table('services')->get();
                        $customer = DB::table('customers')->get();
                            @endphp
                            <div class="mb-3">
                                <label class="form-label" for="formValidationDob">Location </label>
                              <select name="location" id="location" class="form-control">
                                @foreach ($location as $loc)
                                <option value="{{$loc->id}}">{{$loc->name}}</option>
                                @endforeach
                              </select>
                              <p></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formValidationDob">Services </label>
                              <select name="service" id="service" class="form-control">
                                <option value="">Select Service</option>
                                @foreach ($services as $ser)
                                <option value="{{$ser->id}}">{{$ser->title}}</option>
                                @endforeach
                              </select>
                              <p></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formValidationDob">Staff </label>
                              <select name="staff" id="staff" class="form-control">
                              </select>
                              <div></div>
                            </div>
                        <div class="mb-3">
                            <label class="form-label" for="formValidationDob">Appointment Date</label>
                            <input type="text" class="form-control flatpickr-validation flatpickr-input" name="appointment_date" id="appointment_date"  readonly="readonly">
                            <p></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formValidationDob">Available Slots</label>
                            <select name="slots" id="slots" class="form-control">
                            </select>
                            <p></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formValidationDob">Customer </label>
                          <select name="service" id="service" class="form-control">
                            <option value="">Select Customer</option>
                            @foreach ($customer as $cus)
                            <option value="{{ $cus->id }}">{{ $cus->first_name }} {{ $cus->last_name }}</option>
                        @endforeach

                          </select>
                          <p></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formValidationDob">Appointment status </label>
                          <select name="appointment_status" id="appointment_status" class="form-control">
                        <option value="">Select</option>
                        <option value="approved">Approved</option>
                        <option value="pending">
                            Pending
                        </option>
                        <option value="rescheduled">
                            Rescheduled
                        </option>

                        <option value="completed">
                            Completed
                        </option>
                        <option value="cancel">
                            Cancel
                        </option>
                          </select>
                          <p></p>
                        </div>

                      <div class="mb-3">
                        <label class="form-label" for="eventDescription">Note</label>
                        <textarea class="form-control" name="node" id="node"></textarea>
                      </div>
                      <div class="mb-3 d-flex justify-content-sm-between justify-content-start my-4">
                        <div>
                          <button type="submit" class="btn btn-primary  me-sm-3 me-1 waves-effect waves-light">Add</button>
                          <button type="reset" class="btn btn-label-secondary btn-cancel me-sm-0 me-1 waves-effect" data-bs-dismiss="offcanvas">
                            Cancel
                          </button>
                        </form>
                        </div>

                      </div>
                  </div>
                </div>
              </div>
              <!-- /Calendar & Modal -->
            </div>
          </div>
    </div>
@endsection

@section('link-js')
    @endsection
    @section('javascript')
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#appointmentsForm").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: '{{ route('appointment.store') }}', // Your Laravel route
        method: 'POST',
        dataType: 'json',
        data: $("#appointmentsForm").serialize(),
        success: function (response) {
            if (response.status === true) {
                // window.location.href = "/appointments"; // Change if needed
                $("#location").removeClass('is-invalid').siblings('p').removeClass(
                                'invalid-feedback').html('');
                            $("#service").removeClass('is-invalid').siblings('p').removeClass(
                                'invalid-feedback').html('');
                            $("#staff").removeClass('is-invalid').siblings('p').removeClass(
                                'invalid-feedback').html('');
                            $("#appointment_date").removeClass('is-invalid').siblings('p').removeClass(
                                'invalid-feedback').html('');
                            $("#slots").removeClass('is-invalid').siblings('p').removeClass(
                                'invalid-feedback').html('');
            } else {
                var errors = response.errors;
                if (errors.location) {
                    $('#location').addClass('is-invalid').next('.invalid-feedback').text(errors.location);
                } else {
                    $('#location').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
                if (errors.service) {
                    $('#service').addClass('is-invalid').next('.invalid-feedback').text(errors.service);
                } else {
                    $('#service').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
                if (errors.staff) {
                    $('#staff').addClass('is-invalid').next('.invalid-feedback').text(errors.staff);
                } else {
                    $('#staff').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
                if (errors.appointment_date) {
                    $('#appointment_date').addClass('is-invalid').next('.invalid-feedback').text(errors.appointment_date);
                } else {
                    $('#appointment_date').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
                if (errors.slots) {
                    $('#slots').addClass('is-invalid').next('.invalid-feedback').text(errors.slots);
                } else {
                    $('#slots').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
                if (errors.customer) {
                    $('#customer').addClass('is-invalid').next('.invalid-feedback').text(errors.customer);
                } else {
                    $('#customer').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
                if (errors.appointment_status) {
                    $('#appointment_status').addClass('is-invalid').next('.invalid-feedback').text(errors.appointment_status);
                } else {
                    $('#appointment_status').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
                if (errors.eventDescription) {
                    $('#eventDescription').addClass('is-invalid').next('.invalid-feedback').text(errors.eventDescription);
                } else {
                    $('#eventDescription').removeClass('is-invalid').next('.invalid-feedback').text('');
                }
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
});

    flatpickr("#appointment_date", {
    enableTime: false,
    dateFormat: "Y-m-d", // Example: 2025-05-02
});

$('#service').on('change', function () {
    var serviceId = $(this).val();

    if (serviceId) {
        $.ajax({
            url: "{{ url('/get-staff-by-service/') }}/" + serviceId,
            type: 'GET',
            success: function (data) {
                $('#staff').empty().append('<option value="">Select Staff</option>');
                $.each(data, function (key, value) {
                    $('#staff').append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            },
            error: function () {
                alert('Failed to fetch staff.');
            }
        });
    } else {
        $('#staff').empty().append('<option value="">Select Staff</option>');
    }
});
$('#appointment_date').on('change', function () {
    var staffId = $('#staff').val();
    var date = $('#appointment_date').val();

    if (staffId) {
        $.ajax({
            url: "{{ url('/get-slots-by-available') }}",
            type: 'GET',
            data: {
               staff_id: staffId,
               date: date
           },
            success: function (data) {
                // console.log(data);
                $('#slots').empty().append('<option value="">Select Slot</option>');
                $.each(data, function (index, slot) {
                 $('#slots').append('<option value="' + slot + '">' + slot + '</option>');
    });
            },
            error: function () {
                alert('Failed to fetch slots.');
            }
        });
    } else {
        $('#slots').empty().append('<option value="">Select Slot</option>');
    }
});
</script>

@endsection
