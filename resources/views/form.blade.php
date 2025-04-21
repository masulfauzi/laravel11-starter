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

                                </div>
                            </div>
                            <!-- Seller Table  -->
                            <div class="table-responsive">
                                <form action="">
                                    <div class="flex flex-col gap-4">
                                        <div class="input-group">
                                            <span class="input-group-text" style="width: 200px">Username</span>
                                            <input class="input" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text" style="width: 200px">Username</span>
                                            <input class="input" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text" style="width: 200px">Username</span>
                                            <input class="input" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text" style="width: 200px">Username</span>
                                            <input class="input" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>

                                    </div>
                                </form>
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