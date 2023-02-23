@extends('layouts.admin')

@section('title')
    HexaWorks - Dashboard
@endsection

@section('content')
   <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Admin Dashboard</h2>
              <p class="dashboard-subtitle">
                This is Store Administrator panel
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        User
                      </div>
                      <div class="dashboard-card-subtitle">
                        {{ $customer }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        Revenue
                      </div>
                      <div class="dashboard-card-subtitle">
                        Rp.{{ $revenue }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        Transaction
                      </div>
                      <div class="dashboard-card-subtitle">
                        {{ $transaction }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-12 mt-2">
                  <h5 class="mb-3">Rencent Transaction</h5>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection