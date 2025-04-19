@extends('layouts.app')

@section('content')
    <div class="content">
        <!-- Main Content Starts -->
        <main class="container flex-grow p-4 sm:p-6">
            <!-- Page Title Starts -->
            <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
                <h5>Analytics</h5>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Analytics</a>
                    </li>
                </ol>
            </div>
            <!-- Page Title Ends -->

            <div class="space-y-6">



                <!-- Top Sellers Section start  -->
                <section class="grid grid-cols-1">
                    <div class="card">
                        <div class="card-body space-y-2">
                            <!-- Header  -->
                            <div class="flex w-full justify-between">
                                <h6>Top Sellers</h6>
                                <div class="dropdown" data-placement="bottom-end">
                                    <button class="btn btn-primary">Tambah Data</button>

                                </div>
                            </div>
                            <!-- Seller Table  -->
                            <div class="table-responsive">
                                <table class="table min-w-[43rem]">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Product</th>
                                            <th>Country</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <div class="avatar avatar-circle">
                                                        <img src="./assets/images/avatar1.png" class="avatar-img"
                                                            alt="avatar-img" />
                                                    </div>
                                                    <div>
                                                        <p class="whitespace-nowrap font-medium">Wade Warren
                                                        </p>
                                                        <p class="text-xs text-slate-400">Apple Store Online
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap">07 August</td>
                                            <td class="whitespace-nowrap">T-shirt</td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <span class="fi fi-ae h-5 w-8"></span>
                                                    <p class="whitespace-nowrap uppercase">UAE</p>
                                                </div>
                                            </td>
                                            <td>2865</td>
                                            <td>$5.08,876</td>
                                            <td>$27,187</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <div class="avatar avatar-circle">
                                                        <img src="./assets/images/avatar2.png" class="avatar-img"
                                                            alt="avatar-img" />
                                                    </div>
                                                    <div>
                                                        <p class="whitespace-nowrap font-medium">Afrad Bhuyian
                                                        </p>
                                                        <p class="text-xs text-slate-400">Acme Corporation</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap">25 Mar</td>
                                            <td class="whitespace-nowrap">Earings</td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <span class="fi fi-us h-5 w-8"></span>
                                                    <p class="whitespace-nowrap uppercase">USA</p>
                                                </div>
                                            </td>
                                            <td>36654</td>
                                            <td>$3.06,867</td>
                                            <td>$23,89</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <div class="avatar avatar-circle">
                                                        <img src="./assets/images/avatar3.png" class="avatar-img"
                                                            alt="avatar-img" />
                                                    </div>
                                                    <div>
                                                        <p class="whitespace-nowrap font-medium">Robert Fox</p>
                                                        <p class="text-xs text-slate-400">Omega Solutions</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap">14 February</td>
                                            <td>1 phone</td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <span class="fi fi-gb h-5 w-8"></span>
                                                    <p class="whitespace-nowrap uppercase">UK</p>
                                                </div>
                                            </td>
                                            <td>4253</td>
                                            <td>$1.06,657</td>
                                            <td>$56,99</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <div class="avatar avatar-circle">
                                                        <img src="./assets/images/avatar4.png" class="avatar-img"
                                                            alt="avatar-img" />
                                                    </div>
                                                    <div>
                                                        <p class="whitespace-nowrap font-medium">John William
                                                        </p>
                                                        <p class="text-xs text-slate-400">Phoenix Electronics
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap">17 January</td>
                                            <td>Watches</td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <span class="fi fi-de h-5 w-8"></span>
                                                    <p class="whitespace-nowrap uppercase">GER</p>
                                                </div>
                                            </td>
                                            <td>3532</td>
                                            <td>$3.54,450</td>
                                            <td>$7,67,657</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <div class="avatar avatar-circle">
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAyIDc5LjE2NDM2MCwgMjAyMC8wMi8xMy0wMTowNzoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjEgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjIzMDI1RUZBQ0YwRDExRUQ5NThFOUFFOUVBRjFEOTc5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjIzMDI1RUZCQ0YwRDExRUQ5NThFOUFFOUVBRjFEOTc5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjMwMjVFRjhDRjBEMTFFRDk1OEU5QUU5RUFGMUQ5NzkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjMwMjVFRjlDRjBEMTFFRDk1OEU5QUU5RUFGMUQ5NzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz49cjvrAAALx0lEQVR42sRaa2wc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"
                                                            class="avatar-img" alt="avatar-img" />
                                                    </div>
                                                    <div>
                                                        <p class="whitespace-nowrap font-medium">Ahmed Imtiaz
                                                        </p>
                                                        <p class="text-xs text-slate-400">Thunderbolt Inc</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap">11 November</td>
                                            <td class="whitespace-nowrap">Shoes</td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <span class="fi fi-br h-5 w-8"></span>
                                                    <p class="whitespace-nowrap uppercase">BRA</p>
                                                </div>
                                            </td>
                                            <td>9076</td>
                                            <td>$9.54,450</td>
                                            <td>$78,01</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Top Sellers Section End  -->


            </div>
        </main>
        <!-- Main Content Ends -->

        <!-- Footer Starts -->
        <footer class="footer">
            <p class="text-sm">
                Copyright © 2023
                <a class="text-primary-500 hover:underline" href="https://getadmintoolkit.com" target="_blank">
                    Admin Toolkit
                </a>
            </p>

            <p class="flex items-center gap-1 text-sm">
                Hand-crafted &amp; Made with
                <i class="text-danger-500" data-feather="heart" height="1em" width="1em"></i>
            </p>
        </footer>
        <!-- Footer Ends -->
    </div>
    <!-- Page Content Ends -->
@endsection