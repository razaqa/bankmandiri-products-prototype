@extends('base')

@section('title', 'Mandiri Cash Management (MCM)')

@section('extra-meta')
@endsection

@section('extra-fonts')
@endsection

@section('prerender-js')
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/mcm.css') }}" />
    <style>
        .headline-pict::before {
            background-image: url("{{ asset('img/mcm_banner.jpg') }}");
        }
    </style>
@endsection

@section('content')
    <section class="headline" id="headline">
        <div class="headline-pict">
            <div class="headline-inside">
                <div class="text-center headline-texts"></div>
            </div>
        </div>
    </section>

    <section class="overview" id="overview">
        <div class="container">
            <hr class="topic-hat">
            <div class="topic">
                <h2>Mandiri Cash Management (MCM)</h2>
                <p></p>
            </div>
        </div>
    </section>

    <section class="mdr-article">
        <div class="container">
            <div class="mdr-content animated fadeInUp delayp3">
                <p>Mandiri Cash Management (MCM) is an internet-based electronic application aimed at assisting companies in the wholesale segment in conduct their financial operations. By using a secure connection network, MCM provides greater convenience in monitoring bank accounts and conducting various types of financial transactions. MCM is like having a bank branch right at your company's location.</p>

                <h3>Feature :</h3>
                <b>Account Information</b>

                <ul>
                    <li>Balance Inquiry : financial account balance information in realtime online.</li>
                    <li>Transaction Inquiry : information on financial transactions conducted By the customer.</li>
                    <li>Account Statement : an easily monitorable current account.</li>
                    <li>Issuance of notifications : notification of successful financial transactions, emailed automatically.</li>
                </ul>

                <b>Payment Management</b>

                <ul>
                    <li>Inhouse Payments: IDR and foreign exchange transactions between Mandiri accounts.</li>
                    <li>Domestic Payments: Outgoing IDR transactions from Mandiri via SKN, RTGS or the atm bersama, links and prima networks</li>
                    <li>International Payment : transaksi valuta asing keluar mandiri.</li>
                    <li>International Payments: Outgoing foreign exchange transactions from Mandiri.</li>
                    <li>Payroll: payment of salaries / wages of company employees.</li>
                    <li>Tax Payments: State revenue transactions (tax and non-tax) conducted electronically.</li>
                    <li>Utility Payments: routine bill payment transactions, such as telephone, electricity, water, insurance and others.</li>
                </ul>

                <b>Receivables Management</b>

                <ul>
                    <li>Auto Debet : the solution for your receivables by auto debiting payor's account.</li>
                </ul>
                
                <b>Liquidity Management</b>

                <ul>
                    <li>Cash Pooling: automatically transfer funds to main account based on maximum amount limits for sub accounts.</li>
                    <li>Cash Distribution: automatic transfer of funds from main account to a sub account based on the amount specified.</li>
                    <li>Range Balance: transfer funds automatically from main account to sub account or vice versa based on target balance in sub account.</li>
                </ul>

                <b>Transaction types</b>

                <ul>
                    <li>Based on number of transactions
                    <ol type="a">
                        <li>Single Transaction: transactions with low frequency that are input manually one by one.</li>
                        <li>Bulk Transactions: high frequency transactions by uploading file and auto debit methods.</li>
                    </ol>
                    </li>
                    <li>Based on transaction time
                    <ol type="a">
                        <li>Immediate: transactions are directly processed by the bank.</li>
                        <li>Standing Instruction: transactions processed by the bank in accordance with instruction dates.</li>
                        <li>Recurring Transfers: transactions are processed by the bank repeatedly according to the instruction schedule</li>
                    </ol>
                    </li>
                </ul>

                <h3>Benefit :</h3>

                <ol type="1">
                    <li>Flexibility and efficiency in time terms. Banking transaction process conducted in realtime online.</li>
                    <li>Transaction security: Process of conducting and authorizing transactions is hierarchical</li>
                    <li>Electronic data storage, which facilitates monitoring and filing of transaction data</li>
                </ol>

                <h3>Terms and condition :</h3>

                <ol type="1">
                    <li>Company is a customer and has an account with Bank Mandiri</li>
                    <li>For other requirements and service fees, please contact us on <a href="tel:14000">14000</a>.</li>
                </ol>
            </div>

        </div>
    </section>
@endsection

@section('extra-js')
@endsection
