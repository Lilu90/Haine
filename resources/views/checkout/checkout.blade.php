<?php
@extends('layout.main')

@section('content')

<h2>Payment Details</h2>

    <div class="form-group">
        <label for="name_on_card">Name on Card</label>
        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
    </div>

    <div class="form-group">
        <label for="card-element">
            Credit or debit card
        </label>
    </div>

@endsection
