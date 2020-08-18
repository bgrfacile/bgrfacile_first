@extends('layout_admin_G')

@section('content')
    <!-- HEADER -->
    @include('administration_general/profil/_navigation')
    <!-- CONTENT -->
    <div class="container-fluid">
        <h2 class="mb-3">
            Publication fiches
        </h2>
        <div class="card"
             data-list="{&quot;valueNames&quot;: [&quot;orders-order&quot;, &quot;orders-product&quot;, &quot;orders-date&quot;, &quot;orders-total&quot;, &quot;orders-status&quot;, &quot;orders-method&quot;]}">
            <div class="card-header">
                <form>
                    <div class="input-group input-group-flush">
                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fe fe-search"></i>
                      </span>
                        </div>
                        <input class="form-control list-search" type="search" placeholder="Search">
                    </div>
                </form>

            </div>
            <div class="table-responsive">
                <table class="table table-sm table-nowrap card-table">
                    <thead>
                    <tr>
                        <th>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox-all custom-control-input"
                                       name="ordersSelect" id="ordersSelectAll">
                                <label class="custom-control-label" for="ordersSelectAll">
                                    &nbsp;
                                </label>
                            </div>

                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-order">
                                Order
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-product">
                                Product
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-date">
                                Date
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-total">
                                Total
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-status">
                                Status
                            </a>
                        </th>
                        <th colspan="2">
                            <a href="#" class="text-muted list-sort" data-sort="orders-method">
                                Payment method
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectOne">
                                <label class="custom-control-label" for="ordersSelectOne">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6520
                        </td>
                        <td class="orders-product">
                            5' x 3' Wall Poster
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-30">07/30/18</time>
                        </td>
                        <td class="orders-total">
                            $55.25
                        </td>
                        <td class="orders-status">

                            <!-- Badge -->
                            <div class="badge badge-soft-success">
                                Shipped
                            </div>

                        </td>
                        <td class="orders-method">
                            Mastercard
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectTwo">
                                <label class="custom-control-label" for="ordersSelectTwo">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6521
                        </td>
                        <td class="orders-product">
                            XL Logo Tee
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-30">07/30/18</time>
                        </td>
                        <td class="orders-total">
                            $14.99
                        </td>
                        <td class="orders-status">
                            <div class="badge badge-soft-success">
                                Shipped
                            </div>
                        </td>
                        <td class="orders-method">
                            Paypal
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectThree">
                                <label class="custom-control-label" for="ordersSelectThree">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6522
                        </td>
                        <td class="orders-product">
                            Flexfit Hat
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-28">07/28/18</time>
                        </td>
                        <td class="orders-total">
                            $25.50
                        </td>
                        <td class="orders-sratus">

                            <!-- Badge -->
                            <div class="badge badge-soft-warning">
                                Processing
                            </div>

                        </td>
                        <td class="orders-method">
                            Visa
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectFour">
                                <label class="custom-control-label" for="ordersSelectFour">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6523
                        </td>
                        <td class="orders-product">
                            Reversible Hoodie
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-27">07/27/18</time>
                        </td>
                        <td class="orders-total">
                            $64.99
                        </td>
                        <td class="orders-status">

                            <!-- Badge -->
                            <div class="badge badge-soft-danger">
                                Cancelled
                            </div>

                        </td>
                        <td class="orders-method">
                            Amex
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" style="">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h2 class="mb-3">
            Publication cours
        </h2>
        <div class="card"
             data-list="{&quot;valueNames&quot;: [&quot;orders-order&quot;, &quot;orders-product&quot;, &quot;orders-date&quot;, &quot;orders-total&quot;, &quot;orders-status&quot;, &quot;orders-method&quot;]}">
            <div class="card-header">

                <!-- Form -->
                <form>
                    <div class="input-group input-group-flush">
                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fe fe-search"></i>
                      </span>
                        </div>
                        <input class="form-control list-search" type="search" placeholder="Search">
                    </div>
                </form>

            </div>
            <div class="table-responsive">
                <table class="table table-sm table-nowrap card-table">
                    <thead>
                    <tr>
                        <th>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox-all custom-control-input"
                                       name="ordersSelect" id="ordersSelectAll">
                                <label class="custom-control-label" for="ordersSelectAll">
                                    &nbsp;
                                </label>
                            </div>

                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-order">
                                Order
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-product">
                                Product
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-date">
                                Date
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-total">
                                Total
                            </a>
                        </th>
                        <th>
                            <a href="#" class="text-muted list-sort" data-sort="orders-status">
                                Status
                            </a>
                        </th>
                        <th colspan="2">
                            <a href="#" class="text-muted list-sort" data-sort="orders-method">
                                Payment method
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectOne">
                                <label class="custom-control-label" for="ordersSelectOne">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6520
                        </td>
                        <td class="orders-product">
                            5' x 3' Wall Poster
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-30">07/30/18</time>
                        </td>
                        <td class="orders-total">
                            $55.25
                        </td>
                        <td class="orders-status">

                            <!-- Badge -->
                            <div class="badge badge-soft-success">
                                Shipped
                            </div>

                        </td>
                        <td class="orders-method">
                            Mastercard
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectTwo">
                                <label class="custom-control-label" for="ordersSelectTwo">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6521
                        </td>
                        <td class="orders-product">
                            XL Logo Tee
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-30">07/30/18</time>
                        </td>
                        <td class="orders-total">
                            $14.99
                        </td>
                        <td class="orders-status">
                            <div class="badge badge-soft-success">
                                Shipped
                            </div>
                        </td>
                        <td class="orders-method">
                            Paypal
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectThree">
                                <label class="custom-control-label" for="ordersSelectThree">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6522
                        </td>
                        <td class="orders-product">
                            Flexfit Hat
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-28">07/28/18</time>
                        </td>
                        <td class="orders-total">
                            $25.50
                        </td>
                        <td class="orders-sratus">

                            <!-- Badge -->
                            <div class="badge badge-soft-warning">
                                Processing
                            </div>

                        </td>
                        <td class="orders-method">
                            Visa
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox table-checkbox">
                                <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect"
                                       id="ordersSelectFour">
                                <label class="custom-control-label" for="ordersSelectFour">
                                    &nbsp;
                                </label>
                            </div>

                        </td>
                        <td class="orders-order">
                            #6523
                        </td>
                        <td class="orders-product">
                            Reversible Hoodie
                        </td>
                        <td class="orders-date">
                            <time datetime="2018-07-27">07/27/18</time>
                        </td>
                        <td class="orders-total">
                            $64.99
                        </td>
                        <td class="orders-status">

                            <!-- Badge -->
                            <div class="badge badge-soft-danger">
                                Cancelled
                            </div>

                        </td>
                        <td class="orders-method">
                            Amex
                        </td>
                        <td class="text-right">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" style="">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
