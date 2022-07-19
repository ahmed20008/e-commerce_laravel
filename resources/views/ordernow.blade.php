@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 mt-5 mb-5">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Amount</th>
                            <td>$ {{ $total }}</td>

                        </tr>
                        <tr>
                            <th scope="row">Tax</th>
                            <td>$ 0</td>

                        </tr>
                        <tr>
                            <th scope="row">Delivery Fee</th>
                            <td>$ 15</td>
                        </tr>
                        <tr>
                            <th scope="row">Total Amount</th>
                            <td class="text-success bold font-weight-bold font-italic">$ {{ $total + 15 }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-1"></div>
            <div class="container">

                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input name="address" type="text" class="form-control" id="inputAddress"
                            placeholder="1234 Main St">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input name="city" type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select name="state" id="inputState" class="form-control">
                                <option>Select your State</option>
                                <option>Punjab</option>
                                <option>Sindh</option>
                                <option>Balochistan</option>
                                <option>KPK</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input name="zip" type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <h3>Select your Payment Method</h3>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="gridRadios1" value="cash"
                                checked>
                            <label class="form-check-label" for="payment">
                                Online payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="gridRadios2" value="cash">
                            <label class="form-check-label" for="payment">
                                EMI payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="gridRadios3" value="cash">
                            <label class="form-check-label" for="payment">
                                Payment on delivery
                            </label>
                        </div>
                    </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success ms-5 mt-3">Order</button>
        </form>
    </div>
    </div>

    </div>
@endsection
