@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="field">
        <label class="label">Province</label>
        <div class="control">
            <div class="select">
                <select id="inputProvince">
                    <option value="">Province
                    </option>
                    @foreach($province as $r)
                    <option value="{{$r->id}}">{{$r->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="field">
        <label class="label">City</label>
        <div class="control">
            <div class="select">
                <select id="inputCity">
                    <option value="">City
                    </option>
                    @foreach($province as $r)
                    <option value="{{$r->id}}">{{$r->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="field">
        <label class="label">District</label>
        <div class="control">
            <div class="select">
                <select id="subDistrick">
                    <option value="">District
                    </option>
                </select>
            </div>
        </div>
    </div>
    <div class="field">
        <label class="label">ZIP</label>
        <div class="control">
          <input class="input" type="number" placeholder="Text input">
        </div>
      </div>
    <input type="hidden" name="province" id="getProvince" placeholder="Province" required>
    <input type="hidden" name="city" id="getCity" placeholder="City" required>
    <input type="hidden" name="sub_district" id="getDistrict" placeholder="District" required>
</div>

@endsection
