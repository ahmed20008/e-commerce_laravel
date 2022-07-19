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

                <form>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option>Select your State</option>
                                <option>Punjab</option>
                                <option>Sindh</option>
                                <option>Balochistan</option>
                                <option>KPK</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <h3>Select your Payment Method</h3>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Online payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                EMI payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                value="option3">
                            <label class="form-check-label" for="gridRadios3">
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
