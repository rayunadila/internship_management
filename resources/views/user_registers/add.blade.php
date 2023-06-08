@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            {{--  --}}
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Pengajuan PKL</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <p>Lengkapilah data-data dibawah ini.</p>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama Lengkap </label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ old('email') }}" placeholder="Masukan Email" required>
                        </div>
  
                        <div class="form-group">
                            <label for="exampleInputurl">Url Input</label>
                            <input type="url" class="form-control" id="exampleInputurl" value="https://getbootstrap.com"
                                placeholder="Enter Url">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputphone">Teliphone Input</label>
                            <input type="tel" class="form-control" id="exampleInputphone" value="1-(555)-555-5555">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1">Number Input</label>
                            <input type="number" class="form-control" id="exampleInputNumber1" value="2356">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword3">Password Input</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" value="markTech123"
                                placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdate">Date Input</label>
                            <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputmonth">Month Input</label>
                            <input type="month" class="form-control" id="exampleInputmonth" value="2019-12">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputweek">Week Input</label>
                            <input type="week" class="form-control" id="exampleInputweek" value="2019-W46">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtime">Time Input</label>
                            <input type="time" class="form-control" id="exampleInputtime" value="13:45">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdatetime">Date and Time Input</label>
                            <input type="datetime-local" class="form-control" id="exampleInputdatetime"
                                value="2019-12-19T13:45:00">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn iq-bg-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
