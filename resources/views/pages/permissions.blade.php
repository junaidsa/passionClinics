
@extends('layouts.app')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Role / Permissions</h4>
        <div class="row">

            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Permissions</h5>
            <div class="card-body">
                <div class="modal-body">
                    <div class="text-center mb-4">
                      <h3 class="role-title mb-2">Edit Role</h3>
                      <p class="text-muted">Set role permissions</p>
                    </div>
                    <!-- Add role form -->
                    <form id="addRoleForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
                      <div class="col-12 mb-4 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                        <label class="form-label" for="modalRoleName">Staff Name</label>
                        <select name="modalRoleName" id="modalRoleName" class="form-control" placeholder="Enter a role name">
                            @foreach ($staff as $st)
                            <option value="{{$st->id}}">
                                {{$st->name}}
                            </option>
                            @endforeach
                        </select>
                        {{-- <input type="text" id="modalRoleName" name="modalRoleName" class="form-control" placeholder="Enter a role name" tabindex="-1"> --}}
                      <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                      <div class="col-12">
                        <h5>Role Permissions</h5>
                        <!-- Permission table -->
                        <div class="table-responsive">
                          <table class="table table-flush-spacing">
                            <tbody>
                              <tr>
                                <td class="text-nowrap fw-semibold">
                                  Dashboard Access
                                  <i class="ti ti-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Allows a full access to the system" data-bs-original-title="Allows a full access to the system"></i>
                                </td>
                                <td>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                    <label class="form-check-label" for="selectAll">Yes</label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap fw-semibold">Customer Management</td>
                                <td>
                                  <div class="d-flex">
                                    <div class="form-check me-3 me-lg-5">
                                      <input class="form-check-input" type="checkbox" id="userManagementRead">
                                      <label class="form-check-label" for="userManagementRead"> Read </label>
                                    </div>
                                    <div class="form-check me-3 me-lg-5">
                                      <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                      <label class="form-check-label" for="userManagementCreate"> Create </label>
                                    </div>
                                    <div class="form-check me-3 me-lg-5">
                                      <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                      <label class="form-check-label" for="userManagementWrite"> Edit </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                      <label class="form-check-label" for="userManagementWrite"> Delete </label>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap fw-semibold">Staff Management</td>
                                <td>
                                    <div class="d-flex">
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementRead">
                                        <label class="form-check-label" for="userManagementRead"> Read </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                        <label class="form-check-label" for="userManagementCreate"> Create </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Edit </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Delete </label>
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap fw-semibold">Appointments Management</td>
                                <td>
                                    <div class="d-flex">
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementRead">
                                        <label class="form-check-label" for="userManagementRead"> Read </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                        <label class="form-check-label" for="userManagementCreate"> Create </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Edit </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Delete </label>
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap fw-semibold">Services Management</td>
                                <td>
                                    <div class="d-flex">
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementRead">
                                        <label class="form-check-label" for="userManagementRead"> Read </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                        <label class="form-check-label" for="userManagementCreate"> Create </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Edit </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Delete </label>
                                      </div>
                                    </div>
                                  </td>
                              </tr>

                              <tr>
                                <td class="text-nowrap fw-semibold">Testimonials Managment</td>
                                <td>
                                    <div class="d-flex">
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementRead">
                                        <label class="form-check-label" for="userManagementRead"> Read </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                        <label class="form-check-label" for="userManagementCreate"> Create </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Edit </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Delete </label>
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap fw-semibold">Blogs Managment</td>
                                <td>
                                    <div class="d-flex">
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementRead">
                                        <label class="form-check-label" for="userManagementRead"> Read </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                        <label class="form-check-label" for="userManagementCreate"> Create </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Edit </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Delete </label>
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap fw-semibold">Locations Managment</td>
                                <td>
                                    <div class="d-flex">
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementRead">
                                        <label class="form-check-label" for="userManagementRead"> Read </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementCreate">
                                        <label class="form-check-label" for="userManagementCreate"> Create </label>
                                      </div>
                                      <div class="form-check me-3 me-lg-5">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Edit </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="userManagementWrite">
                                        <label class="form-check-label" for="userManagementWrite"> Delete </label>
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- Permission table -->
                      </div>
                      <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                        <button type="reset" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">
                          Cancel
                        </button>
                      </div>
                    <input type="hidden"></form>
                    <!--/ Add role form -->
                  </div>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
@endsection
