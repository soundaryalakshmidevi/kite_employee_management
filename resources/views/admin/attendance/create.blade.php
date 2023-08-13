@extends('layouts.admin')

@section('title')
    {{ __('Add New user') }}
@endsection

@section('header')
  <h1 class="h3 mb-3">Dashboard</h1>
@endsection

@section('content')
  
      <section class="row">
        <div class="col-12">
          <form action="{{ route('attendance.store') }}" method="post">
            @csrf
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">{{ __('Create New user') }}</h5>
              </div>
              <div class="card-body py-0">
                <div class="row g-3">
                  <div class="col-12">
                    <input type="date" name="date" class="form-control" id="title" placeholder="{{ __('Date') }}" value="{{ old('date') }}" required />
                  </div>
                  <div class="col-12">
                    {{-- <input type="number" name="employee_id" class="form-control" id="" required /> --}}
                    <select name="employee_id" class="form-control" id="role">
                      @forelse ($employees as $employee)
                        <option value="{{$employee->id}}">{{ $employee->firstname }} {{ $employee->lastname }}</option>
                      @empty
                        <option value="">{{ __('-- employee --') }}</option>
                      @endforelse
                    </select>
                  </div>
                  
                  <div class="col-6">
                    <input type="time" name="checkin_time" class="form-control" id="slug" placeholder="{{ __('Checkin_time') }}" value="{{ old('checkin_time') }}" />
                  </div>
                  
                  <div class="col-6">
                    <input type="time" name="checkout_time" class="form-control" id="slug" placeholder="{{ __('Checkout_time') }}" value="{{ old('checkout_time') }}" />
                  </div>
                  {{-- <div class="col-12">
                    <input type="text" name="total_working_hours" class="form-control" id="slug" placeholder="{{ __('Total_working_hours') }}" value="{{ old('total_working_hours') }}" />
                  </div> --}}
                  
                 
                  {{-- <div class="col-6">
                    <select name="role_id" class="form-control" id="role">
                      <option value="">{{ __('-- User Role --') }}</option>
                      @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-6">
                    <select name="status" class="form-control" id="status">
                      <option value="">{{ __('-- Choose Status --') }}</option>
                      <option value="1">{{ __('Enable') }}</option>
                      <option value="0">{{ __('Disable') }}</option>
                    </select>
                  </div> --}}
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-6 d-grid">
                    <a href="{{ route('attendance.index') }}" class="btn btn-outline-secondary" >
                      <i class="align-middle me-1" data-feather="arrow-left"></i>
                      <span class="ps-1">{{ __('Discard') }}</span>
                    </a>
                  </div>
                  <div class="col-6 d-grid">
                    <button type="submit" class="btn btn-outline-secondary" >
                      <i class="align-middle me-1" data-feather="plus"></i>
                      <span class="ps-1">{{ __('Create New') }}</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-5">
          @include('partials.error')
        </div>
      </section>

@endsection

@section('script')
    
@endsection