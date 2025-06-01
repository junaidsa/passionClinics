<div class="card border-0 shadow p-4 text-center mt-4 rounded-3">
    <!-- Profile image container (relative) -->
    <div class="position-relative d-inline-block">
        <!-- Profile Image -->
        {{-- <img src="{{ url('file/users/' . ( Auth::user()->image ?? 'avatar.jpg')) }}" alt=""> --}}
        <img src="{{ url('file/dr/' . (Auth::user()->image ?? 'avatar.jpg')) }}" alt="Profile Image"
            class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">

        <!-- Pencil Icon on top-right of image -->
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
            class="position-absolute d-flex justify-content-center align-items-center bg-primary rounded-circle shadow"
            style="top: 7rem; right: 7rem; width: 30px; height: 30px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil"
                viewBox="0 0 16 16">
                <path
                    d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708l-9.439 9.44a.5.5 0 0 1-.168.11l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .11-.168l9.44-9.44zM11.207 2 13 3.793 14.293 2.5 12.5.707 11.207 2zM10.5 2.707 2 11.207V13h1.793l8.5-8.5-1.793-1.793z" />
            </svg>
        </a>
    </div>

    <!-- Name and Designation -->
    <h5 class="mt-1 mb-0">{{ Auth::user()->name ?? 'User Name' }}</h5>
    <p class="text-muted fs-6">{{ Auth::user()->email ?? 'Designation' }}</p>
</div>


<!-- Sidebar Navigation -->
<div class="card account-nav border-0 shadow mt-4">
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <a href="{{url('user/dashboard')}}" class="text-decoration-none text-dark">Dashboard</a>
            </li>
            <li class="list-group-item p-3">
                <a href="{{ url('/profile/update/' . Auth::id()) }}" class="text-decoration-none text-dark">Account Settings</a>
            </li>
            <li class="list-group-item p-3">
                <a href="{{url('user/myappointments')}}" class="text-decoration-none text-dark">My Appointments</a>
            </li>
            <li class="list-group-item p-3">
                <a href="#" class="text-decoration-none text-dark">Doctor's</a>
            </li>
            <li class="list-group-item p-3">
                <a href="#" class="text-decoration-none text-dark">Appointments History</a>
            </li>
            <li class="list-group-item p-3">
                <a href="{{url('user/mynotification')}}" class="text-decoration-none text-dark">Notification</a>
            </li>
            <li class="list-group-item p-3">
                <a href="{{ route('logout') }}" class="text-decoration-none text-danger fw-bold"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('profile.updateImage') }}" method="POST" enctype="multipart/form-data"
            class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Profile Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="profile_image" class="form-label">Choose Image</label>
                    <input type="file" name="profile_image" id="profile_image" class="form-control" accept="image/*"
                        required>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-3">
                    <div class="contact-form-btn">
                        <button type="submit" class="btn-default rounded">Upload</button>
                    </div>
                </div>
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button> --}}
            </div>
        </form>
    </div>
</div>
