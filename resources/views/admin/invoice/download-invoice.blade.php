



    <style>
        #invoice{
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #3989c6
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td,.invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #3989c6;
            font-size: 1.2em
        }

        .invoice table .qty,.invoice table .total,.invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #3989c6
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #3989c6;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.4em;
            border-top: 1px solid #3989c6
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px!important;
                overflow: hidden!important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice>div:last-child {
                page-break-before: always
            }
        }
    </style>

    <div id="invoice">
        <div class="invoice overflow-auto">
            <div>
                <header>
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col company-details">
                            
                            <h2 class="name">
                                <a target="_blank" href="">
                                    Online Pharmacy
                                </a>
                            </h2>
                            <div>Banani, Dhaka</div>
                            <div>1212</div>
                            <div>company@example.com</div>
                        </div>
                    </div>
                </header>
                <main>


                    <div class="contacts">


                            <table>
                                <tr>
                                    <td> <div class="col invoice-to">
                                            <div class="text-gray-light"> <h3> Customer Information </h3></div>
                                            <h2 class="to"> {{ $customer->first_name.' '.$customer->last_name }}  </h2>
                                            <div class="address">{{ $customer->address }} </div>
                                            <div class="email"><a href="{{ $customer->email_address  }}">{{ $customer->email_address  }}</a></div>
                                        </div>
                                    </td>
                                    <td> <div class="col invoice-details">
                                            <h1 class="invoice-id">Delivery Address</h1>
                                            <div class="date"> {{ $shipping->full_name }}</div>
                                            <div class="date"> {{ $shipping->email_address }}</div>
                                            <div class="date"> {{ $shipping->phone_number }}</div>
                                            <div class="date"> {{ $shipping->address }}</div>
                                            <div class="date">  Order date {{ $shipping->created_at }}</div>
                                        </div></td>

                                </tr>

                            </table>

                        </div>
                    <table border="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">MEDICINE PRICE</th>
                            <th class="text-right">QUANTITY</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @php($sum = 0)
                        @foreach($products as $product)
                            <tr>
                                <td >{{ $i++ }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td> {{ $product->product_price }}</td>
                                <td>{{ $product->product_quantity }}</td>
                                <td> {{ $total = $product->product_price*$product->product_quantity }} </td>
                            </tr>
                            @php($sum = $sum + $total)

                        @endforeach



                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"> SUB TOTAL</td>
                            <td>{{ $sum }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"> DELIVERY CHARGE</td>
                            <td>{{ 50 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>{{ $sum+50 }}</td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="thanks">Thank you!</div>
                    <div class="notices">
                        <div>NOTICE:
                        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                        </div>
                        </div>
                </main>
                <footer>
                    Invoice was created on a computer and it is valid without the signature and seal.
                </footer>
            </div>
            <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
            <div></div>
        </div>
    </div>




